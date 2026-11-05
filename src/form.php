<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>フォーム入力</h1>
    <form action="confirm.php" method="post">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">年齢:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="phone">電話番号: </label>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="email">メールアドレス:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">住所:</label>
        <textarea id="address" name="address" rows="4" required></textarea><br><br>

        <label for="question">質問:</label>
        <textarea id="question" name="question" rows="4"></textarea><br><br>

        <label for="sex">性別:</label>
        <select id="sex" name="sex" required>
            <option value="男性" selected>男性</option>
            <option value="女性">女性</option>
        </select>

        <button type="submit">送信</button>
    </form>
    </div>
</body>
</html>


    
