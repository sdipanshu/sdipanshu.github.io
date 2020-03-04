<!-- PHP File for displaying the tables -->
<?php
try 
{
    $dbuser = 'group_21';
    $dbpass = '885-479-849';
    $dbhost = '10.17.50.126';
    $dbname='group_21';
    $conn = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    echo "Connected\n";
}
catch (PDOException $e) 
{
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}


?>




