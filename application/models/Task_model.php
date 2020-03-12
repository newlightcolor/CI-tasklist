<?php

class Task_model extends CI_Model
{
  public function __construct() {
    parent::__construct();
    $this->load->database();
    $this->config->load();
  }

  // public function lists() {
  //   $per_page = $this->config->item('per_page');
  //   $query = $this->db->get('task', $per_page);
  //   if ($query->num_rows() > 0) {
  //     return $query->result_array();
  //   } else {
  //     return [];
  //   }
  // }

  public function get_task($id = FALSE)
  {
    if ($id === FALSE) // ID指定が無ければ、全取得
    {
      // SELECT * FROM task
      $query = $this->db->query("select * from task");

      // 結果を配列で取得する
      return $query->result_array();
    }

    // SELECT * FROM task WHERE 'id' = $id;
    // $query = $this->db->get_where('task', array('id' => $id));
    $query = $this->db->query("select * from task where id = $id");
    return $query->row_array();
  }

  public function create($task) {
    $data = ['task_name' => $task];
    $this->db->insert('task', $data);
  }

  public function update($task, $id, $timestamp) {
    $data = array(
      'id' => $id,
      'task_name' => $task,
      // 'created_at' => $task_item['created_at'],
      'created_at' => $timestamp,
    );
    $this->db->replace('task', $data);
  }

}