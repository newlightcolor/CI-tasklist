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

    // URLで指定されたタスクが無ければ404を表示
    if (empty($data['task_item'])){show_404();}

    // $data['task_name'] = $data['task_item']['task_name'];

    $this->load->view('common/header', $data);
    $this->load->view('task_detail', $data);
  }

  public function delete($id = NULL)
  {
    $this->db->delete('task', array('id' => $id));

    redirect('');
  }

  public function edit($id = NULL)
  {
    $data['task_item'] = $this->task_model->get_task($id);
    $this->load->library('interval_lib');

    if (empty($data['task_item'])){show_404();}

    if ($this->input->post()){
      $this->form_validation->set_rules('task', 'タスク', 'required|min_length[1]|max_length[20]');
  
      if ($this->form_validation->run()){
        $timestamp = $data['task_item']['created_at'];
        $this->task_model->update($this->input->post('task'), $id, $timestamp);
        redirect(site_url('task/'));
      } else {
        $data['create'] = false;
      }
    }


    $this->load->view('common/header', $data);
    $this->load->view('common/read_bootstrap');
    $this->load->view('task_edit', $data);
  }

  // public function update($id = NULL)
  // {
  //     $this->form_validation->set_rules('task', 'タスク', 'required|min_length[1]|max_length[20]');

  //     if ($this->form_validation->run()){
  //       $this->task_model->update($this->input->post('task'));
  //       $data['create'] = true;
  //     } else {
  //       $data['create'] = false;
  //     }

  //     redirect(base_url('task'));
  //   }



}