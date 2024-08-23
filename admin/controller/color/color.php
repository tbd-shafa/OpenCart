<?php

namespace Opencart\Admin\Controller\Color;

use Opencart\System\Engine\Controller;

class Color extends Controller
{
    private $error = array();

    public function index()
    {

        $this->load->language('color/color');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('color/color');

        $this->getList();
    }

    protected function getList()
    {
        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']); // Clear the success message after use
        } else {
            $data['success'] = '';
        }
        $data['add'] = $this->url->link('color/color.add', 'user_token=' . $this->session->data['user_token'], true);
        $data['edit'] = $this->url->link('color/color.edit', 'user_token=' . $this->session->data['user_token'], true);
        $data['delete'] = $this->url->link('color/color.delete', 'user_token=' . $this->session->data['user_token'], true);

        $data['entries'] = array();

        $results = $this->model_color_color->getEntries();
        //  echo '<pre>';
        //  print_r($results);
        //  die;
        foreach ($results as $result) {
            $data['entries'][] = array(
                'color_id'    => $result['color_id'],
                'name'       => $result['name'],
                'edit'       => $this->url->link('color/color.edit', 'user_token=' . $this->session->data['user_token'] . '&color_id=' . $result['color_id'], true)
            );
        }
        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('color/color', 'user_token=' . $this->session->data['user_token'])
        ];
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('color/color_list', $data));
    }

    public function add()
    {

        $this->load->language('color/color');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('color/color');

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_color_color->addEntry($this->request->post);
            $this->session->data['success'] = $this->language->get('text_add');
            $this->response->redirect($this->url->link('color/color', 'user_token=' . $this->session->data['user_token'], true));
        }
  
        $this->getForm();
    }

    public function edit()
    {
        $this->load->language('color/color');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('color/color');

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_color_color->editEntry($this->request->get['color_id'], $this->request->post);
            $this->session->data['success'] = $this->language->get('text_update');
            $this->response->redirect($this->url->link('color/color', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function delete()
    {
        $this->load->language('color/color');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('color/color');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $color_id) {
                $this->model_color_color->deleteEntry($color_id);
            }
            $this->session->data['success'] = $this->language->get('text_delete');
            $this->response->redirect($this->url->link('color/color', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getList();
    }

    protected function getForm()
    {
        if (isset($this->request->get['color_id'])) {
            $data['action'] = $this->url->link('color/color.edit', 'user_token=' . $this->session->data['user_token'] . '&color_id=' . $this->request->get['color_id'], true);
            $entry_info = $this->model_color_color->getEntry($this->request->get['color_id']);
        } else {
            $data['action'] = $this->url->link('color/color.add', 'user_token=' . $this->session->data['user_token'], true);
            $entry_info = array();
        }

        $data['cancel'] = $this->url->link('color/color', 'user_token=' . $this->session->data['user_token'], true);

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($entry_info)) {
            $data['name'] = $entry_info['name'];
        } else {
            $data['name'] = '';
        }
        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('color/color', 'user_token=' . $this->session->data['user_token'])
        ];
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $this->response->setOutput($this->load->view('color/color_form', $data));
    }



    protected function validateDelete()
    {

        if (!$this->user->hasPermission('modify', 'color/color')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}
