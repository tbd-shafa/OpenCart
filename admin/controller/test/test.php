<?php

namespace Opencart\Admin\Controller\Test;

use Opencart\System\Engine\Controller;

class Test extends Controller
{
    private $error = array();

    public function index()
    {

        $this->load->language('test/test');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('test/test');

        $this->getList();
    }

    protected function getList()
    {

        $data['add'] = $this->url->link('test/test.add', 'user_token=' . $this->session->data['user_token'], true);
        $data['edit'] = $this->url->link('test/test.edit', 'user_token=' . $this->session->data['user_token'], true);
        $data['delete'] = $this->url->link('test/test.delete', 'user_token=' . $this->session->data['user_token'], true);

        $data['entries'] = array();

        $results = $this->model_test_test->getEntries();
        //  echo '<pre>';
        //  print_r($results);
        //  die;
        foreach ($results as $result) {
            $data['entries'][] = array(
                'test_id'    => $result['test_id'],
                'name'       => $result['name'],
                'edit'       => $this->url->link('test/test.edit', 'user_token=' . $this->session->data['user_token'] . '&test_id=' . $result['test_id'], true)
            );
        }
        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('test/test', 'user_token=' . $this->session->data['user_token'])
        ];
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $this->response->setOutput($this->load->view('test/test_list', $data));
    }

    public function add()
    {

        $this->load->language('test/test');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('test/test');

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_test_test->addEntry($this->request->post);
            $this->response->redirect($this->url->link('test/test', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function edit()
    {
        $this->load->language('test/test');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('test/test');

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_test_test->editEntry($this->request->get['test_id'], $this->request->post);
            $this->response->redirect($this->url->link('test/test', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function delete()
    {
        $this->load->language('test/test');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('test/test');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $test_id) {
                $this->model_test_test->deleteEntry($test_id);
            }
            $this->response->redirect($this->url->link('test/test', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getList();
    }

    protected function getForm()
    {
        if (isset($this->request->get['test_id'])) {
            $data['action'] = $this->url->link('test/test.edit', 'user_token=' . $this->session->data['user_token'] . '&test_id=' . $this->request->get['test_id'], true);
            $entry_info = $this->model_test_test->getEntry($this->request->get['test_id']);
        } else {
            $data['action'] = $this->url->link('test/test.add', 'user_token=' . $this->session->data['user_token'], true);
            $entry_info = array();
        }

        $data['cancel'] = $this->url->link('test/test', 'user_token=' . $this->session->data['user_token'], true);

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
            'href' => $this->url->link('test/test', 'user_token=' . $this->session->data['user_token'])
        ];
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $this->response->setOutput($this->load->view('test/test_form', $data));
    }



    protected function validateDelete()
    {

        if (!$this->user->hasPermission('modify', 'test/test')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}
