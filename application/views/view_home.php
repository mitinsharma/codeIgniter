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
	
    
    <h2>Name of Users</h2>
    <p>
    
    <?php 
        if(is_array($firstnames))foreach($firstnames as $object)
        {
            echo '<li>'.$object->firstname.'</li>';
        }
    ?>
    
    
    
    
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong></p>
</div>

</body>
</html>