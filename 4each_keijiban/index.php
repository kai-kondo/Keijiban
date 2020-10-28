<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>phpkeijiban</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
    
<body>   
    <div class="logo"><img src="4eachblog_logo.jpg"></div>
 <header>   
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
     </ul>
 </header>

　<main>
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>

            
        <form method="POST" action="insert.php">
            <h3 class="form">入力フォーム</h3>
        　<div>
            <label>ハンドルネーム</label>
                 <br>
             <input type="text" class="form-control" size="35" name="handlename">
            </div>
            
            <br>
            
            <div>
            <label>タイトル</label>
                 <br>
             <input type="text" class="form-control" size="35" name="title">

            </div>
            
            <br>
            
           <div>
            <lavel>コメント</lavel>
               <br>
               <textarea name="comments" cols="60" rows="7"></textarea>
            </div>
        
            <br>
            　<div>
             <input type="submit" class="submit" value="投稿する">
            </div>
            
        </form>
            <?php
            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
            $stmt = $pdo->query("select*from 4each_keijiban");

            while ($row = $stmt->fetch()){
                
            echo "<div class='kiji'>";
             echo "<h3>".$row['title']."</h3>";
                echo "<div class='content'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>    
            
    </div>
     
     
     
        
        <div class="right">
            <h3>人気の記事</h3>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ</li>
                <li>HTMLの基礎</li>
            </ul>
            <h3>おススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
</main>
 </body>
    
<footer>
    copyright©internous│4each blog thr which provides Ato Z about programming
</footer>


</html>
