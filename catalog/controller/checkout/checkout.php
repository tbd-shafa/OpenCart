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

		$this->response->setOutput($this->load->view('checkout/checkout', $data));
	}
}
