<?php $this->load->view('common/header'); ?>

<body>
<header class="container">
    <h1>Tasklist</h1>
</header>
<div class="container">
    <div class="bg-light">
        <form method="POST">
            <div class="form-group">
                <label for="task">新規タスク</label>
                <input id="task" type="text" name="task" class="form-control" placeholder="タスク名" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">タスク追加</button>
        </form>
    </div>

    <?php
        if(isset($create) and $create === true){   // $data["create"]がtrueの時に表示されます
            echo "
                <div class=\"alert alert-success\" role=\"alert\">
                    タスクを追加しました。
                </div>
            ";
        }elseif(isset($create) and $create === false){
            echo "
                <div class=\"alert alert-danger\" role=\"alert\">
                    タスクの追加に失敗しました
                </div>
            ";
        }
    ?>


    <table class="table table-inverse mt-3 table-hover text-dark table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th></th>
            <th>タスク</th>
            <th>登録日</th>
        </tr>
        </thead>
        <tbody class="tbody-light">
            <?php
            if(isset($task_list) and count($task_list) > 0){
                foreach($task_list as $item)
                {
                    ?>
                    <tr>
                        <td><a href="<?php echo site_url('task/'.$item['id']);?>" class="text-primary"> <?php echo html_escape($item['id']); ?> </a></td>
                        <td><a href="<?php echo site_url('task/delete/'.$item['id']);?>" class="btn btn-success btn-block my-0 py-1">完了</a></td>
                        <td><?php echo html_escape($item['task_name']); ?></td>
                        <td>
                            <?php

                                echo $this->interval_lib->calc($item['created_at']);

                            // $today = new DateTime();
                            // $created = new DateTime($item['created_at']);
                            // $interval = $today->diff($created);
                            // echo $interval->format('%a日前');
                            ?>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>

</div>

<?php $this->load->view('common/read_bootstrap'); ?>
</body>
</html>