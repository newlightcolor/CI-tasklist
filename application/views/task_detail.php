<?php $this->load->view('common/header'); ?>

<?php
echo "<h1>ID : ".html_escape($task_item['id'])." の詳細ページです。</h1>";
echo '<h2>タスク名 : '.htgitml_escape($task_item['task_name']).'</h2>';