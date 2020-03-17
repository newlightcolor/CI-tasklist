<?php $this->load->view('common/header'); ?>


<body>
    <?php $this->load->view('common/navbar'); ?>
    
    <h1>Simple Logout</h1>
    <p>
        <?php if($this->session->userdata('is_logged_in') === true){ ?>
            <b>loggined as:</b> <?php echo $this->session->userdata('email'); ?>
        <?php }else{
            redirect(base_url());
        } ?>
    </p>
    <p>You have successfully logged in!</p>
    <input type="button" onclick="location.href='<?php echo site_url('user/logout'); ?>'" value="Logout">

<?php $this->load->view('common/read_bootstrap') ?>
</body>
</html>