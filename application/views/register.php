<?php $this->load->view('common/header');?>

<body>
    <div class="container">
        <h1>ユーザー登録</h1>
    
        <?php
        $attributes = array("name" => "registration", 'class' => 'form-group bg-light');
        echo form_open("user/register", $attributes);
        ?>
                <label for="username">ユーザー名</label>
                <input name="username" placeholder="Username" type="text" class="form-control" value="<?php echo $this->input->post('username'); ?>"><span><?php echo form_error('username'); ?></span>
                <label for="email">メールアドレス</label>
                <input name="email" placeholder="Email" type="email" class="form-control" value="<?php echo $this->input->post('email');?>"><span><?php echo form_error('email'); ?></span>
                <label for="password">パスワード</label>
                <input name="password" placeholder="Password" type="password" class="form-control"><span><?php echo form_error('password'); ?></span>
                <label for="cpassword">パスワード再入力</label>
                <input name="cpassword" placeholder="Confirm Password" type="password" class="form-control"><span><?php form_error('password'); ?></span>
                <button name="submit" submit="submit" class="btn btn-primary mt-2">登録</button>
        <?php echo form_close(); ?>
    
        <p>すでに登録済みの方は<a href="<?php echo site_url('user/login');?>" class="btn btn-info bordered">ログイン</a></p>
    </div>
</body>
</html>