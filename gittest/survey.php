<?php
$now_year=date("Y");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>simple_survey_page</title>
    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="survey.js"></script>
</head>
<body>
    <form method="POST" id="form1" action="confirm.php" >
        <p>名前を入力してください</p>　　  <!--名前入力フォーム-->
        <input type="text" name="name">
        <p>性別を選択してください</p>
        <input type="radio" name="gender" value="male">男
        <input type="radio" name="gender" value="female">女
        <p>生年月日入力してください</p>    <!--生年月日入力フォーム（年）-->
        <select name="birth_year">
            <option value="">--</option>
            <?php foreach(range(1950,$now_year) as $birth_year): ?>
            <?php print("<option value='".$birth_year."'>".$birth_year."</option>"); ?>
            <?php endforeach; ?>
        </select>年                        <!--生年月日入力フォーム（月）-->
        <select name="birth_month">
            <option value="">--</option>
            <?php foreach(range(1,12) as $birth_month): ?>
            <?php print("<option value='".$birth_month."'>".$birth_month."</option>"); ?>
            <?php endforeach; ?>
        </select>月                        <!--生年月日入力フォーム（日）-->
        <select name="birth_day">
            <option value="">--</option>
            <?php foreach(range(1,31) as $birth_day): ?>
            <?php print("<option value='".$birth_day."'>".$birth_day."</option>"); ?>
            <?php endforeach; ?>日
        </select>日<br><br><br>
        <input type="submit" value="確認ページへ" name="btn" id="btn">
    </form>

</body>
</html>
