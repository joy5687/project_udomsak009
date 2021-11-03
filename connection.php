<?php 

    $conn = mysqli_connect("localhost", "s009", "WVY7[cRiEI8SE/gA", "s009_Udomsak"
        ) or die("ERror :" . mysqli_error($conn));
     //set utf8
    mysqli_query($conn,"SET CHARACTER SET UTF8" );


    //echo date('Y-m-d H:i:s');
    // set time zone
    date_default_timezone_set('Asia/Bangkok');
    // echo '<hr>';
    // echo date ('Y-md H:i:s');
        
    
  
?>