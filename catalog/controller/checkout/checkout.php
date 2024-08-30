<?php

namespace Opencart\Catalog\Controller\Checkout;

/**
 * Class Checkout
 *
 * @package Opencart\Catalog\Controller\Checkout
 */
class Checkout extends \Opencart\System\Engine\Controller
{
	/**
	 * @return void
	 */
	public function index(): void
	{

		// Validate cart has products and has stock.
		if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
			$this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language')));
		}

		// Validate minimum quantity requirements.
		$products = $this->cart->getProducts();

		foreach ($products as $product) {
			if (!$product['minimum']) {
				$this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'), true));

				break;
			}
		}

		$this->load->language('checkout/checkout');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_cart'),
			'href' => $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'))
		];

		if (!$this->customer->isLogged()) {
			$data['register'] = $this->load->controller('checkout/register');
		} else {
			$data['register'] = '';
		}

		if ($this->customer->isLogged() && $this->config->get('config_checkout_payment_address')) {
			$data['payment_address'] = $this->load->controller('checkout/payment_address');
		} else {
			$data['payment_address'] = '';
		}

		if ($this->customer->isLogged() && $this->cart->hasShipping()) {
			$data['shipping_address'] = $this->load->controller('checkout/shipping_address');
		} else {
			$data['shipping_address'] = '';
		}

		if ($this->cart->hasShipping()) {
			$data['shipping_method'] = $this->load->controller('checkout/shipping_method');
		} else {
			$data['shipping_method'] = '';
		}
		$products = $this->cart->getProducts();

		foreach ($products as &$product) {
			$cart_id = $product['cart_id'];
			$product_id = $product['product_id'];

			// Get custom colors from oc_product_extra_feature
			$query = $this->db->query("SELECT custom_color FROM `" . DB_PREFIX . "product_extra_feature` WHERE product_id = '" . (int)$product_id . "'");

			$product['colors'] = [];
			if ($query->num_rows) {
				$custom_color_ids = explode(',', $query->row['custom_color']);

				// Get color names from oc_color based on custom_color_ids
				if (!empty($custom_color_ids)) {
					$color_query = $this->db->query("SELECT color_id, name FROM `" . DB_PREFIX . "color` WHERE color_id IN (" . implode(',', array_map('intval', $custom_color_ids)) . ")");

					$product['colors'] = $color_query->rows;
				}
			}

			// Get selected color from the cart table
			$selected_color_query = $this->db->query("SELECT custom_color FROM `" . DB_PREFIX . "cart` WHERE cart_id = '" . (int)$cart_id . "'");

			if ($selected_color_query->num_rows) {
				$product['selected_color'] = $selected_color_query->row['custom_color'];
				$data['selected_color'] =  $product['selected_color'];
			} else {
				$product['selected_color'] = '';
				$data['selected_color'] =  $product['selected_color'];
			}
		}

		$data['products'] = $products;
		// echo "<pre>";
		// print_r($data['products']);
		// die;
		$data['payment_method'] = $this->load->controller('checkout/payment_method');
		$data['confirm'] = $this->load->controller('checkout/confirm');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		// Prepare and send email
		if ($this->cart->hasProducts()) {
			$store_info = $this->model_setting_store->getStore($this->config->get('config_store_id'));
			$store_name = $store_info ? $store_info['name'] : $this->config->get('config_name');
			$customer_email = $this->customer->isLogged() ? $this->customer->getEmail() : 'default@example.com';
			$customer_first_name = $this->customer->isLogged() ? $this->customer->getFirstName() : 'Guest';
			$customer_last_name = $this->customer->isLogged() ? $this->customer->getLastName() : '';

			$subject = 'Your Product is in Checkout Page';
			$message = 'Hi ' . $customer_first_name . ' ' . $customer_last_name . ',<br><br>';
			$message .= 'You have the following products in the checkout page:<br><br>';

			foreach ($data['products'] as $product) {
				$color_name = '';
				if ($product['selected_color']) {
					$color_query = $this->db->query("SELECT name FROM " . DB_PREFIX . "color WHERE color_id = '" . (int)$product['selected_color'] . "'");
					if ($color_query->num_rows) {
						$color_name = $color_query->row['name'];
					}
				}

				$message .= 'Product Name: ' . $product['name'] . '<br>';
				$message .= 'Quantity: ' . $product['quantity'] . '<br>';
				if (!empty($color_name)) {
					$message .= 'Selected Color: ' . $color_name . '<br>';
				}
				$message .= '<br>';
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
			$mail->send();
		}
		$this->response->setOutput($this->load->view('checkout/checkout', $data));
	}
}
