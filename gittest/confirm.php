<?php
$name="";
$gender="";
$birth_year="";
$birth_month="";
$birth_day="";

if(isset($_POST["btn"])===true){
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $birth_year=$_POST["birth_year"];
    $birth_month=$_POST["birth_month"];
    $birth_day=$_POST["birth_day"];
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <title>confirm_page</title>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="survey.js"></script>
</head>
<body>
    <form method="POST" action="thanks.php">
        <input type="hidden" name="name" value="<?php print htmlspecialchars($name); ?>">
        <input type="hidden" name="gender" value="<?php print htmlspecialchars($gender); ?>">
        <input type="hidden" name="birth_year" value="<?php print htmlspecialchars($birht_year); ?>">
        <input type="hidden" name="birth_month" value="<?php print htmlspecialchars($birth_month); ?>">
        <input type="hidden" name="birth_day" value="<?php print htmlspecialchars($birhth_day); ?>">

        <p>入力内容確認</p>
        <p>名前：<?php print htmlspecialchars($name); ?></p>
        <p>性別：
            <?php if($gender==="male"){ print "男"; }else{print "女"; }?>
        </p>
        <p>生年月日:
            <?php print htmlspecialchars($birth_year); ?>年
            <?php print htmlspecialchars($birth_month); ?>月
            <?php print htmlspecialchars($birth_day); ?>日生まれ
        </p>
        <input type="submit" value="登録">

    </form>
</body>
</html>
