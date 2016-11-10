<?<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>
<body>

<div id="container">
	<h1><?php echo $page_header; ?></h1>
	
    <?php
    if(isset($email) and isset($password))
    {
        echo 'Email : '.$email.br(); 
        echo 'Password : '.$password.br(); 
        echo 'Length of password : '.$pass_len.br(); 
        echo 'Url : '.$url.br(); 
    }
    else
    {
        echo validation_errors();
        echo form_open();
    
        echo form_label('Email: ','email').br();
        echo form_input('email');
        echo br().br();
        echo form_label('Password: ','pass').br();
        echo form_password('pass');
        echo br().br();
        
        $url_sent_from = current_url();
        echo form_hidden('url',$url_sent_from);
    
        echo form_submit('login','Login');
    
        echo form_close();
    }
    ?>
    
    
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong></p>
</div>

</body>
</html>