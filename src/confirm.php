<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>入力内容確認</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST["name"];
        $age = $_POST["age"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $question = $_POST["question"];
        $sex = $_POST["sex"];
    

        // バリデーション
        if (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z\s]+$/u",$name)){
            echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
        }elseif (!is_numeric($age)|| $age < 0 || $age > 150){
                echo "<p>年齢は0から150の間で入力してください。</p>";
        }elseif (!preg_match("/^[0-9-]{1,13}$/",$phone)){
            echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p>メールアドレスの形式が正しくありません。</p>";
        }elseif (trim($address) === "" || !preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z0-9 -]+$/u",$address)){
                    echo "<p>住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>";
        }else{
            //入力内容の表示
            echo "<p class='confirmation-item'>名前:" . htmlspecialchars($name,ENT_QUOTES,'UTF-8') . "</p>";
            echo "<p class='confirmation-item'>年齢:" . htmlspecialchars($age,ENT_QUOTES,'UTF-8') . "</p>";
            echo"<p class='confirmation-item'>電話番号:" . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</p>";
            echo"<p class='confirmation-item'>メールアドレス:" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
            echo"<p class='confirmation-item'>住所:" . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "</p>";
            echo"<p class='confirmation-item'>性別:" . htmlspecialchars($sex, ENT_QUOTES, 'UTF-8') . "</p>";
            echo"<p class='confirmation-item'>質問:" .nl2br(htmlspecialchars($question,ENT_QUOTES,'UTF-8')) . "</p>";
            }
        }
        else{
            echo"<p>データが送信されていません。</p>";
        }
        ?>
    </div>    
</body>
</html>