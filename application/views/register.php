<?php $this->load->view('common/header');?>

<body>
    <?php $this->load->view('common/navbar'); ?>
    <div class="container">
        <h1>ユーザー登録</h1>
    
        <?php
        $attributes = array("name" => "registration", 'class' => 'form-group bg-light');
        echo form_open("user/register", $attributes);
        ?>
                <label for="username" class="mb-0">ユーザー名</label>
                <input name="username" type="text" class="form-control mb-3" value="<?php echo $this->input->post('username'); ?>"><span><?php echo form_error('username'); ?></span>
                <label for="email" class="mb-0">メールアドレス</label>
                <input name="email" type="email" class="form-control mb-3" value="<?php echo $this->input->post('email');?>"><span><?php echo form_error('email'); ?></span>
                <label for="password" class="mb-0">パスワード</label>
                <input name="password" type="password" class="form-control mb-3"><span><?php echo form_error('password'); ?></span>
                <label for="cpassword" class="mb-0">パスワード再入力</label>
                <input name="cpassword" type="password" class="form-control mb-3"><span><?php form_error('password'); ?></span>
                <button name="submit" submit="submit" class="btn btn-primary mt-2">登録</button>
        <?php echo form_close(); ?>
    
        <p>すでに登録済みの方は<a href="<?php echo site_url('user/login');?>">ログイン</a></p>
    </div>

    <?php $this->load->view('common/read_bootstrap') ?>
</body>
</html>