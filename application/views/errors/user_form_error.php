<?php
    if (form_error('email') !== '' || form_error('password') !== '') {
        echo "<div class='alert alert-danger'>".form_error('email');
        echo form_error('password')."</div>";
    }
?>