<?php

namespace Opencart\Admin\Controller\Extension;

class ProductExtraFeature extends \Opencart\System\Engine\Controller
{
    public function index(): void
    {
        $this->load->language('extension/product_extra_feature');


        $this->document->setTitle($this->language->get('heading_title'));

        $data['action'] = $this->url->link('extension/product_extra_feature', 'user_token=' . $this->session->data['user_token'], true);
        $data['install'] = $this->url->link('extension/product_extra_feature.install', 'user_token=' . $this->session->data['user_token'], true);
        $data['uninstall'] = $this->url->link('extension/product_extra_feature.uninstall', 'user_token=' . $this->session->data['user_token'], true);
        $data['edit_action'] = $this->url->link('extension/product_extra_feature.edit', 'user_token=' . $this->session->data['user_token']);
        $data['ajax_save_status'] = $this->url->link('extension/product_extra_feature.saveStatus', 'user_token=' . $this->session->data['user_token'], true);
        $data['status'] = $this->config->get('product_extra_feature_status') ?? 0;

        $this->response->setOutput($this->load->view('extension/product_extra_feature', $data));
    }
    public function saveStatus(): void
    {
        $this->load->model('setting/setting');
        $json = [];

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $status = $this->request->post['status'] ?? 0;

            // Save the status in the database
            $this->model_setting_setting->editSetting('product_extra_feature', ['product_extra_feature_status' => $status]);

            $json['success'] = true;
            $json['message'] = $this->language->get('text_success_status_update');
        } else {
            $json['success'] = false;
            $json['message'] = $this->language->get('text_error');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    public function install(): void
    {

        $this->load->model('setting/setting');
        $this->load->language('extension/product_extra_feature');

        // Add the custom columns to the oc_product_description table
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "product_description` ADD `custom_name` VARCHAR(255) NULL, ADD `custom_color` VARCHAR(255) NULL");

        // Set the status of the extension as enabled
        $this->model_setting_setting->editSetting('product_extra_feature', ['product_extra_feature_status' => 1]);

        // Set success message
        $this->session->data['success'] = $this->language->get('text_success_install');

        $this->response->redirect($this->url->link('extension/product_extra_feature', 'user_token=' . $this->session->data['user_token'], true));
    }

    public function uninstall(): void
    {
        $this->load->model('setting/setting');
        $this->load->language('extension/product_extra_feature');

        // Remove the custom columns from the oc_product_description table
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "product_description` DROP COLUMN `custom_name`, DROP COLUMN `custom_color`");

        // Remove the extension settings
        $this->model_setting_setting->deleteSetting('product_extra_feature');

        // Set success message
        $this->session->data['success'] = $this->language->get('text_success_uninstall');

        $this->response->redirect($this->url->link('extension/product_extra_feature', 'user_token=' . $this->session->data['user_token'], true));
    }
}
