<?php

namespace Opencart\Catalog\Controller\Checkout;

/**
 * Class Cart
 *
 * @package Opencart\Catalog\Controller\Checkout
 */
class Cart extends \Opencart\System\Engine\Controller
{
	/**
	 * @return void
	 */
	public function index(): void
	{
		$this->load->language('checkout/cart');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'))
		];

		if ($this->cart->hasProducts() || !empty($this->session->data['vouchers'])) {
			if (!$this->cart->hasStock() && (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning'))) {
				$data['error_warning'] = $this->language->get('error_stock');
			} elseif (isset($this->session->data['error'])) {
				$data['error_warning'] = $this->session->data['error'];

				unset($this->session->data['error']);
			} else {
				$data['error_warning'] = '';
			}

			if ($this->config->get('config_customer_price') && !$this->customer->isLogged()) {
				$data['attention'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', 'language=' . $this->config->get('config_language')), $this->url->link('account/register', 'language=' . $this->config->get('config_language')));
			} else {
				$data['attention'] = '';
			}

			if (isset($this->session->data['success'])) {
				$data['success'] = $this->session->data['success'];

				unset($this->session->data['success']);
			} else {
				$data['success'] = '';
			}

			if ($this->config->get('config_cart_weight')) {
				$data['weight'] = $this->weight->format($this->cart->getWeight(), $this->config->get('config_weight_class_id'), $this->language->get('decimal_point'), $this->language->get('thousand_point'));
			} else {
				$data['weight'] = '';
			}

			$data['list'] = $this->load->controller('checkout/cart.getList');

			$data['modules'] = [];

			$this->load->model('setting/extension');

			$extensions = $this->model_setting_extension->getExtensionsByType('total');

			foreach ($extensions as $extension) {
				$result = $this->load->controller('extension/' . $extension['extension'] . '/total/' . $extension['code']);

				if (!$result instanceof \Exception) {
					$data['modules'][] = $result;
				}
			}

			$data['language'] = $this->config->get('config_language');

			$data['continue'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));
			$data['checkout'] = $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'));

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('checkout/cart', $data));
		} else {
			$data['text_error'] = $this->language->get('text_no_results');

			$data['continue'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	/**
	 * @return void
	 */
	public function list(): void
	{
		$this->load->language('checkout/cart');

		$this->response->setOutput($this->getList());
	}

	/**
	 * @return string
	 */
	public function getList(): string
	{
		$data['list'] = $this->url->link(' ', 'language=' . $this->config->get('config_language'));
		$data['product_edit'] = $this->url->link('checkout/cart.edit', 'language=' . $this->config->get('config_language'));
		$data['product_remove'] = $this->url->link('checkout/cart.remove', 'language=' . $this->config->get('config_language'));
		$data['voucher_remove'] = $this->url->link('checkout/voucher.remove', 'language=' . $this->config->get('config_language'));

		// Display prices
		if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
			$price_status = true;
		} else {
			$price_status = false;
		}

		$this->load->model('tool/image');
		$this->load->model('tool/upload');

		$data['products'] = [];

		$this->load->model('checkout/cart');

		$products = $this->model_checkout_cart->getProducts();

		foreach ($products as $product) {
			if (!$product['minimum']) {
				$data['error_warning'] = sprintf($this->language->get('error_minimum'), $product['name'], $product['minimum']);
			}

			if ($product['option']) {
				foreach ($product['option'] as $key => $option) {
					$product['option'][$key]['value'] = (oc_strlen($option['value']) > 20 ? oc_substr($option['value'], 0, 20) . '..' : $option['value']);
				}
			}

			$description = '';

			if ($product['subscription']) {
				if ($product['subscription']['trial_status']) {
					$trial_price = $this->currency->format($this->tax->calculate($product['subscription']['trial_price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$trial_cycle = $product['subscription']['trial_cycle'];
					$trial_frequency = $this->language->get('text_' . $product['subscription']['trial_frequency']);
					$trial_duration = $product['subscription']['trial_duration'];

					$description .= sprintf($this->language->get('text_subscription_trial'), $price_status ? $trial_price : '', $trial_cycle, $trial_frequency, $trial_duration);
				}

				$price = $this->currency->format($this->tax->calculate($product['subscription']['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

				$cycle = $product['subscription']['cycle'];
				$frequency = $this->language->get('text_' . $product['subscription']['frequency']);
				$duration = $product['subscription']['duration'];

				if ($duration) {
					$description .= sprintf($this->language->get('text_subscription_duration'), $price_status ? $price : '', $cycle, $frequency, $duration);
				} else {
					$description .= sprintf($this->language->get('text_subscription_cancel'), $price_status ? $price : '', $cycle, $frequency);
				}
			}
			// Fetch option data from oc_cart
			$custom_color = $this->db->query("SELECT `custom_color` FROM `" . DB_PREFIX . "cart` WHERE `cart_id` = '" . (int)$product['cart_id'] . "'");
			$custom_color = $custom_color->row['custom_color'];
			//print_r(custom_color)

			$product_id = $this->db->query("SELECT `product_id` FROM `" . DB_PREFIX . "cart` WHERE `cart_id` = '" . (int)$product['cart_id'] . "'");
			$product_id = $product_id->row['product_id'];
			$product_id_query = $this->db->query("SELECT `custom_color` FROM `" . DB_PREFIX . "product_extra_feature` WHERE `product_id` = '" . (int)$product_id . "'");
			$custom_color_ids = $product_id_query->row['custom_color'];
			$custom_color_ids = explode(',', $custom_color_ids); // Convert to array

			// Fetch color names from oc_color
			$color_ids = implode(',', array_map('intval', $custom_color_ids)); // Sanitize and prepare color IDs for query
			$colors_query = $this->db->query("SELECT `color_id`, `name` FROM `" . DB_PREFIX . "color` WHERE `color_id` IN (" . $color_ids . ")");

			$colors = [];
			foreach ($colors_query->rows as $color) {

				$colors[$color['color_id']] = $color['name'];
			}

			$data['products'][] = [
				'cart_id'      => $product['cart_id'],
				'thumb'        => $product['image'],
				'name'         => $product['name'],
				'model'        => $product['model'],
				'option'       => $product['option'],
				'selected_color' => $custom_color,
				'custom_color' => $colors, // This will be an associative array of color_id => color_name
				'subscription' => $description,
				'quantity'     => $product['quantity'],
				'stock'        => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
				'minimum'      => $product['minimum'],
				'reward'       => $product['reward'],
				'price'        => $price_status ? $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']) : '',
				'total'        => $price_status ? $this->currency->format($this->tax->calculate($product['total'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']) : '',
				'href'         => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product['product_id'])
			];
		}
		// print_r($data['products']);
		// die;
		// Gift Voucher
		$data['vouchers'] = [];

		$vouchers = $this->model_checkout_cart->getVouchers();

		foreach ($vouchers as $key => $voucher) {
			$data['vouchers'][] = [
				'key'         => $key,
				'description' => $voucher['description'],
				'amount'      => $this->currency->format($voucher['amount'], $this->session->data['currency'])
			];
		}

		$data['totals'] = [];

		$totals = [];
		$taxes = $this->cart->getTaxes();
		$total = 0;

		// Display prices
		if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
			($this->model_checkout_cart->getTotals)($totals, $taxes, $total);

			foreach ($totals as $result) {
				$data['totals'][] = [
					'title' => $result['title'],
					'text'  => $price_status ? $this->currency->format($result['value'], $this->session->data['currency']) : ''
				];
			}
		}

		return $this->load->view('checkout/cart_list', $data);
	}

	/**
	 * @return void
	 */
	public function add(): void
	{

		$this->load->language('checkout/cart');

		$json = [];

		if (isset($this->request->post['product_id'])) {
			$product_id = (int)$this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		if (isset($this->request->post['quantity'])) {
			$quantity = (int)$this->request->post['quantity'];
		} else {
			$quantity = 1;
		}

		if (isset($this->request->post['option'])) {
			$option = array_filter($this->request->post['option']);
		} else {
			$option = [];
		}

		if (isset($this->request->post['subscription_plan_id'])) {
			$subscription_plan_id = (int)$this->request->post['subscription_plan_id'];
		} else {
			$subscription_plan_id = 0;
		}
		if (isset($this->request->post['selected_color'])) {
			$custom_color = $this->request->post['selected_color'];
			$option['custom_color'] = $custom_color; // Add custom color to the option array
		} else {
			$custom_color = '';
		}
		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if ($product_info) {

			// If variant get master product
			if ($product_info['master_id']) {
				$product_id = $product_info['master_id'];
			}

			// Only use values in the override
			if (isset($product_info['override']['variant'])) {
				$override = $product_info['override']['variant'];
			} else {
				$override = [];
			}

			// Merge variant code with options
			foreach ($product_info['variant'] as $key => $value) {
				if (array_key_exists($key, $override)) {
					$option[$key] = $value;
				}
			}

			// Validate options
			$product_options = $this->model_catalog_product->getOptions($product_id);

			foreach ($product_options as $product_option) {
				if ($product_option['required'] && empty($option[$product_option['product_option_id']])) {
					$json['error']['option_' . $product_option['product_option_id']] = sprintf($this->language->get('error_required'), $product_option['name']);
				}
			}

			// Validate subscription products
			$subscriptions = $this->model_catalog_product->getSubscriptions($product_id);

			if ($subscriptions) {
				$subscription_plan_ids = [];

				foreach ($subscriptions as $subscription) {
					$subscription_plan_ids[] = $subscription['subscription_plan_id'];
				}

				if (!in_array($subscription_plan_id, $subscription_plan_ids)) {
					$json['error']['subscription'] = $this->language->get('error_subscription');
				}
			}
		} else {
			$json['error']['warning'] = $this->language->get('error_product');
		}

		if (!$json) {
			// Prepare the email
			$this->load->model('setting/store');
			$this->load->model('setting/setting');

			$store_info = $this->model_setting_store->getStore($this->config->get('config_store_id'));
			$store_name = $store_info ? $store_info['name'] : $this->config->get('config_name');

			if ($this->customer->isLogged()) {
				$customer_email = $this->customer->getEmail();
				$customer_first_name = $this->customer->getFirstName();
				$customer_last_name = $this->customer->getLastName();
			} else {
				$customer_email = 'shafa@technobd.com';
				$customer_first_name = 'mr';
				$customer_last_name = 'user';
			}

			$subject = 'Product is in Cart';
			// $message = 'Hi ' . $customer_first_name . ' ' . $customer_last_name . ',<br><br>';
			// $message .= 'You have just added ' . $quantity . ' product to your cart.<br>';
			// $message .= 'Product Name: ' . $product_info['name'] . '<br>';
			// $message .= 'Quantity: ' . $quantity . '<br>';
			// $message .= '<br>Best regards,<br>' . $store_name;
			$mailinfo = $this->model_catalog_product->getnameprice($product_id);


			$tempdata = [
				'quantity' => $quantity,
				'custom_color' => $custom_color,
				'price' => $mailinfo['price'],
				'name' => $mailinfo['name'],
				'model' => $mailinfo['model']
			];

			// Load the view and pass the data array
			$message = $this->load->view('mail/add_cart', $tempdata);


			// echo "<pre>";
			// print_r($subject);
			// print_r($message);
			//die;
			$mail_option = [
				'parameter' => $this->config->get('config_mail_parameter'),
				'smtp_hostname' => $this->config->get('config_mail_smtp_hostname'),
				'smtp_username' => $this->config->get('config_mail_smtp_username'),
				'smtp_password' => html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8'),
				'smtp_port' => $this->config->get('config_mail_smtp_port'),
				'smtp_timeout' => $this->config->get('config_mail_smtp_timeout')
			];

			// Initialize the Mail class with options
			$mail = new \Opencart\System\Library\Mail($this->config->get('config_mail_engine'), $mail_option);

			// Set up the email details
			$mail->setTo($customer_email);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
			$mail->setHtml($message);

			// Send the email
			//$mail->send();

			$this->cart->add($product_id, $quantity, $option, $subscription_plan_id, false, 0, $custom_color);

			$json['success'] = sprintf($this->language->get('text_success'), $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product_id), $product_info['name'], $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language')));

			// Unset all shipping and payment methods
			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
		} else {
			$json['redirect'] = $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product_id, true);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}


	/**
	 * @return void
	 */
	public function edit(): void
	{
		$this->load->language('checkout/cart');

		$json = [];

		if (isset($this->request->post['key'])) {
			$key = (int)$this->request->post['key'];
		} else {
			$key = 0;
		}

		if (isset($this->request->post['quantity'])) {
			$quantity = (int)$this->request->post['quantity'];
		} else {
			$quantity = 1;
		}
		// Retrieve the selected color from the form submission
		$selected_color_id = $this->request->post['selected_color'] ?? null;
		$color_name = '';

		if ($selected_color_id) {
			$query = $this->db->query("SELECT name FROM " . DB_PREFIX . "color WHERE color_id = '" . (int)$selected_color_id . "'");

			if ($query->num_rows) {
				$color_name = $query->row['name'];
				print_r("Selected Color Name: " . $color_name);
			}
		}

		if (!$this->cart->has($key)) {
			$json['error'] = $this->language->get('error_product');
		}

		if (!$json) {
			if (!empty($color_name)) {
				$this->cart->updatecolor($key, $quantity, $color_name);
			} else {
				$this->cart->update($key, $quantity);
			}
			// Handles single item update
			//	$this->cart->update($key, $quantity);


			if ($this->cart->hasProducts() || !empty($this->session->data['vouchers'])) {
				$json['success'] = $this->language->get('text_edit');
			} else {
				$json['redirect'] = $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'), true);
			}

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['reward']);
			// Prepare and send email
			$store_info = $this->model_setting_store->getStore($this->config->get('config_store_id'));
			$store_name = $store_info ? $store_info['name'] : $this->config->get('config_name');
			$customer_email = $this->customer->isLogged() ? $this->customer->getEmail() : 'default@example.com';
			$customer_first_name = $this->customer->isLogged() ? $this->customer->getFirstName() : 'Guest';
			$customer_last_name = $this->customer->isLogged() ? $this->customer->getLastName() : '';

			$subject = 'Cart Has Been Updated';
			$message = 'Hi ' . $customer_first_name . ' ' . $customer_last_name . ',<br><br>';
			$message .= 'Your cart has been updated.<br>';
			$message .= 'Product Key: ' . $key . '<br>';
			$message .= 'Updated Quantity: ' . $quantity . '<br>';
			if (!empty($color_name)) {
				$message .= 'Selected Color: ' . $color_name . '<br>';
			}
			$message .= '<br>Best regards,<br>' . $store_name;

			$mail_option = [
				'parameter' => $this->config->get('config_mail_parameter'),
				'smtp_hostname' => $this->config->get('config_mail_smtp_hostname'),
				'smtp_username' => $this->config->get('config_mail_smtp_username'),
				'smtp_password' => html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8'),
				'smtp_port' => $this->config->get('config_mail_smtp_port'),
				'smtp_timeout' => $this->config->get('config_mail_smtp_timeout')
			];

			// Initialize the Mail class with options
			$mail = new \Opencart\System\Library\Mail($this->config->get('config_mail_engine'), $mail_option);

			// Set up the email details
			$mail->setTo($customer_email);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
			$mail->setHtml($message);

			// Send the email
			//$mail->send();
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * @return void
	 */
	public function remove(): void
	{
		$this->load->language('checkout/cart');

		$json = [];

		if (isset($this->request->post['key'])) {
			$key = (int)$this->request->post['key'];
		} else {
			$key = 0;
		}

		if (!$this->cart->has($key)) {
			$json['error'] = $this->language->get('error_product');
		}

		// Remove
		if (!$json) {
			$this->cart->remove($key);

			if ($this->cart->hasProducts() || !empty($this->session->data['vouchers'])) {
				$json['success'] = $this->language->get('text_remove');
			} else {
				$json['redirect'] = $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'), true);
			}

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['reward']);
			// Prepare and send email
			$store_info = $this->model_setting_store->getStore($this->config->get('config_store_id'));
			$store_name = $store_info ? $store_info['name'] : $this->config->get('config_name');
			$customer_email = $this->customer->isLogged() ? $this->customer->getEmail() : 'default@example.com';
			$customer_first_name = $this->customer->isLogged() ? $this->customer->getFirstName() : 'Guest';
			$customer_last_name = $this->customer->isLogged() ? $this->customer->getLastName() : '';

			$subject = 'Cart Item Removed';
			$message = 'Hi ' . $customer_first_name . ' ' . $customer_last_name . ',<br><br>';
			$message .= 'You have just removed a product from your cart.<br>';
			$message .= '<br>Best regards,<br>' . $store_name;

			$mail_option = [
				'parameter' => $this->config->get('config_mail_parameter'),
				'smtp_hostname' => $this->config->get('config_mail_smtp_hostname'),
				'smtp_username' => $this->config->get('config_mail_smtp_username'),
				'smtp_password' => html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8'),
				'smtp_port' => $this->config->get('config_mail_smtp_port'),
				'smtp_timeout' => $this->config->get('config_mail_smtp_timeout')
			];

			// Initialize the Mail class with options
			$mail = new \Opencart\System\Library\Mail($this->config->get('config_mail_engine'), $mail_option);

			// Set up the email details
			$mail->setTo($customer_email);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
			$mail->setHtml($message);

			// Send the email
			//$mail->send();
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
