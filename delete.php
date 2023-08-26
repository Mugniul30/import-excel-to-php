<?php
$db = mysqli_connect('localhost','root','','import_excel_php');
mysqli_query($db,"DELETE FROM students");
header("location:index.php");
