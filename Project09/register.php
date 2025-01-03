<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- imgフォルダにあるproject8.pngというファビコンを挿入する -->
    <link rel="icon" href="img/project8.png">
    <title>Create Your Legend</title>
    <link rel="stylesheet" href="css/character.css">
</head>
<body>
    <h1>キャラクター登録</h1>
    <!-- action：サーバーへの送信先 -->
    <form action="register_process.php" method="POST">

        <label for="name">名前</label>
        <input type="text" id="name" name="name" required><br>
        <!-- required：未入力のままの送信を防ぐ -->

        <label for="job">職業</label>
        <select  id="job" name="job" required>
            <option value="戦士">戦士</option>
            <option value="魔法使い">魔法使い</option>
            <option value="Gsクリエーター">Gsクリエーター</option>
            <option value="Gsイノベーター">Gsイノベーター</option>
            <option value="Gsバグバスター">Gsバグバスター</option>
        </select>

        <label for="hp">HP:</label>
        <input type="number" id="hp" name="hp" value="100" min="0" required><br>

        <label for="mp">MP:</label>
        <input type="number" id="mp" name="mp" value="50" min="0" required><br>
 
        <!-- 送信ボタン -->
        <button type="submit">登録</button>
    </form>
        
    </body>
</html>