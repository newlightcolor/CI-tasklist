<?php $this->load->view('common/header'); ?>

<header>
    <?php $this->load->view('common/navbar'); ?>
    <h2>タスクID : <?php echo $task_item['id']; ?>の編集ページ</h2>
</header>
<body>
    <div class="container">
        <?php //echo form_open('task/update', ['class' => 'bg-light']); ?>
        <form method="POST">
            <div class="form-group">
                <label for="task_name">タスク名</label>
                <input type="text" name="task" placeholder="タスク名" class="form-control" id="task_name" value="<?php echo $task_item['task_name']; ?>">
            </div>
            <button type="submit" class="btn btn-success">更新</button>
            <!-- <a href="<?php //echo site_url('task/update/'.$task_item['id']); ?>" type="submit" class="btn-lg btn-success">更新</a> -->
        </form>
    </div>
    <?php
        if(isset($create) and $create === false){   // $data["create"]がtrueの時に表示されます
            echo "
                <div class=\"alert alert-danger\" role=\"alert\">
                    タスクの更新に失敗しました。
                </div>
            ";
        }
    ?>

    <?php $this->load->view('common/read_bootstrap'); ?>
</body>
</html>