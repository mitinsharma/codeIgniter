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
	
    
    
    <h2>Users</h2>
    <table border='1' cellpadding='5' cellspacing='0'>
    <th>First Name</th><th>Last Name</th>
    <?php
    
        if(is_array($users))foreach($users as $object)
        {
            echo '<tr>';
            echo '<td>'.$object->firstname.'</td>';
            echo '<td>'.$object->lastname.'</td>';
            echo '</tr>';
        }
    ?>
    
    </table>
    
    
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong></p>
</div>

</body>
</html>