<?php

class Task extends CI_Controller {

  public function index()
  {
    // $this->load->helper('interval_helper');
    $this->load->library('interval_lib');

    if($this->input->post()) {
      $this->form_validation->set_rules('task', 'タスク', 'required|min_length[1]|max_length[20]');

      if ($this->form_validation->run()) {
        $this->task_model->create($this->input->post('task'));
        $data['create'] = true;
      } else {
        $data['create'] = false;
      }
    }

    $data['task_list'] = $this->task_model->get_task();
    $this->load->view('tutorial/task', $data);
  }

  public function show($id = NULL)
  {
    $data['task_item'] = $this->task_model->get_task($id);

    // if (empty($data['task_item']))
    // {
    //         show_404();
    // }

    $data['task_name'] = $data['task_item']['task_name'];

    $this->load->view('common/header', $data);
    $this->load->view('task_detail', $data);

    // $this->load->view('testpage');

  }
}