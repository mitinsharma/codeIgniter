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
	
    
    <h2>element()</h2>
    <p>
    <?php
    
    $ci_array = array('name'=>'Mitin','phone'=>'6466371716','city'=>'jalandhar');
    
    echo element('name',$ci_array).'<br>';
    echo element('name1',$ci_array).'<br>';
    echo element('name1',$ci_array,'not there').'<br>';
    
    ?>
    </p>
    
    <h2>random_element()</h2>
    <p>
    
    <?php
    $cards = array(1,5,8,2,6,'hi','mitin');
    echo random_element($cards);
    ?>
    </p>
    
    
    <h2>elements()</h2>
    <p>
    <?php
        
        $new_array = elements(array('name','phone','state'),$ci_array);
        print_r($new_array);
        echo'<br>';
        
        
        echo $value = $new_array['state'] ? 'returned true' : 'returned false'
    ?>
    </p>
    
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong></p>
</div>

</body>
</html>