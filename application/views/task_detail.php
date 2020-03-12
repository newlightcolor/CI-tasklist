<?php $this->load->view('common/header');

$this->load->view('common/navbar');

echo "<div style='height: 90px'></div>";

echo "<h1>ID : ".html_escape($task_item['id'])." の詳細ページです。</h1>";
echo '<h2>タスク名 : '.html_escape($task_item['task_name']).'</h2>';