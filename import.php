<?php
use SimpleExcel\SimpleExcel;

if(isset($_POST['import'])){

if(move_uploaded_file($_FILES['excel_file']['tmp_name'],$_FILES['excel_file']['name'])){
    require_once('SimpleExcel/SimpleExcel.php'); 
    
    $excel = new SimpleExcel('csv');                  
    
    $excel->parser->loadFile($_FILES['excel_file']['name']);           
    
    $foo = $excel->parser->getField(); 

    $count = 1;
    $db = mysqli_connect('localhost','root','','import_excel_php');

    while(count($foo)>$count){
        $DIST_NAME = htmlentities($foo[$count][0],ENT_QUOTES);
        $CENTER_ID = htmlentities($foo[$count][1],ENT_QUOTES);
        $CENTER_NAME = htmlentities($foo[$count][2], ENT_QUOTES);
        $BUILDING_NO = htmlentities($foo[$count][3],ENT_QUOTES);
        $BUILDING_NAME = htmlentities($foo[$count][4],ENT_QUOTES);
        $ROOM_ID = htmlentities($foo[$count][5],ENT_QUOTES);
        $SEATS = htmlentities($foo[$count][6],ENT_QUOTES);

        $query = "INSERT INTO students (DIST_NAME,CENTER_ID,CENTER_NAME,BUILDING_NO,BUILDING_NAME,ROOM_ID,SEATS)VALUES ('$DIST_NAME','$CENTER_ID','$CENTER_NAME','$BUILDING_NO','$BUILDING_NAME','$ROOM_ID','$SEATS') ";
        mysqli_query($db,$query);
        $count++;
    }

    echo "<script>window.location.href='index.php';</script>";
               
    
    
               
    
    
}



}
?>