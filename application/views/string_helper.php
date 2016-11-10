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
    
    echo 'random_string() :'. random_string().'<br>'; 
    echo "random_string('alpha') :". random_string('alpha').'<br>';
    echo "random_string('alpha',4) :". random_string('alpha',4).'<br><br>';
    
    echo "random_string('alnum') :". random_string('alnum').'<br>';
    echo "random_string('alnum',4) :". random_string('alnum',4).'<br><br>';
    
    echo "random_string('numeric') :". random_string('numeric').'<br>';
    echo "random_string('numeric',4) :". random_string('numeric',4).'<br><br>';
    
    echo "random_string('nozero') :". random_string('nozero').'<br>';
    echo "random_string('nozero',4) :". random_string('nozero',4).'<br><br>';
    
    echo "random_string('unique') :". random_string('unique').'<br><br>';
    
    echo "random_string('sha1') :". random_string('sha1').'<br><br>';
    
    echo heading('Alternator',2);
    echo alternator('one ','two ').br();
    echo alternator('one ','two ').br();
    
    for($i=0; $i<10; $i++)
        echo alternator('one ','two ');
    
    
    echo heading('repeater()',2);
    
    echo repeater('z',10).br();
    
    echo heading('reduce_multiples()',2);
    
    $str = "a,dsf,df,dsf,,,dsf,s,,,,,,df,s,sdf,,,ds,fs,df,s";
    echo reduce_multiples($str,',').br();
    
    
    echo heading('quotes_to_entities()',2);
    $str = "Mitin's \"dinner \"";
    echo quotes_to_entities($str);
    
    echo heading('reduce_double_slashes()',2);
    $str = "http://www.mitinsharma.com//dsfsdf///dsf/s/f/////";
    echo reduce_double_slashes($str);
    
    ?>
    
    
    
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong></p>
</div>

</body>
</html>