<?php

class Task extends CI_Controller {
  public function index() {
    // $this->load->model('task_model'); *config/autoload.phpに記述
    $this->load->library('form_validation');
    $this->load->helper('url');

    if($this->input->post()) {
      $this->form_validation->set_rules('task', 'タスク', 'required|min_length[1]|max_length[20]');

      if ($this->form_validation->run()) {
        $this->task_model->create($this->input->post('task'));
        $data['create'] = true;
      } else {
        $data['create'] = false;
      }
    }

    $data['task_list'] = $this->task_model->lists();
    $this->load->view('tutorial/task', $data);
  }
}