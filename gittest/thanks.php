<?php
$host     ='localhost'; // データベースのホスト
$username ='USERNAME';  // MySQLのユーザ
$passwd   ='PASSWORD';    // MySQLのパスワード
$dbname   ='DBNAME';    // データベース


$link=mysqli_connect($host, $username, $passwd, $dbname);//MySQLの場合

if(isset($_POST['btn'])===true){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $birth_year=$_POST['birth_year'];
    $birth_month=$_POST['birth_month'];
    $birht_day=$_POST['birth_day'];
}
$query="INSERT INTO `YOUR_DB_table`(`name`, `gender`, `birth_year`,`birth_month`,`birth_day`) VALUES ($name,$gender,$birth_year,$birth_month,$birth_day)";

mysqli_query($link, $query);

?>
<p>ご協力ありがとうございました</p>
