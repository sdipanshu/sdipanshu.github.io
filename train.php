<?php
include("Connection.php");

$train=$_POST["train_name"];
$query1="SELECT new_emp('$train')";
$result=$conn->query($query1);
$display = "    <table border=\"1\">\n";
while (($row = $result->fetch(PDO::FETCH_ASSOC))) 
{
  $str=$row["new_emp"];
  $arr=explode(',',$str);
  $display .= "     <tr>\n";
  $display .=  "<td>" . $arr[0] . "</td>\n";
  $display .=  "<td>" . $arr[1] . "</td>\n";
  $display .=  "<td>" . $arr[2] . "</td>\n";
  $display .= "      </tr>\n";
}
echo $display;
//$row=$result->fetch(PDO::FETCH_ASSOC);
//var_dump($row);
?>