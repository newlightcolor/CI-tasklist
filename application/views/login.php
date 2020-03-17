<?php $this->load->view('common/header'); ?>

<body>
    <?php $this->load->view('common/navbar'); ?>
    <div class="container">
        <h1>ログインフォーム</h1>
    
        <?php $attributes = array("name" => "registration", "class" => "bg-light");
            echo form_open("user/login", $attributes); ?>
            <div class="form-group">
                <?php $this->load->view('errors/user_form_error'); ?>
                <label for="email">メールアドレス</label>
                <input name="email" type="email" class="form-control" value="<?php echo $this->input->post('email'); ?>">
                <label for="password">パスワード</label>
                <input name="password" type="password" class="form-control">
                <label for="submit"></label>
                <input name="submit" type="submit" class="btn btn-info mt-3" value="ログイン">
            </div>
        <?php echo form_close(); ?>
    </div>

    <?php $this->load->view('common/read_bootstrap') ?>

</body>
</html>