<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>WebPlayground</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type='text/javascript' src='js/jquery.particleground.js'></script>
    <script type='text/javascript' src='js/demo.js'></script>
    <script>
        $(function () {
            var topBtn = $('#pageTop');
            topBtn.hide();
            $(window).scroll(function () {
                if ($(this).scrollTop() > 80) {
                    topBtn.fadeIn();
                } else {
                    topBtn.fadeOut();
                }
            });
            topBtn.click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
        });
    </script>
</head>
<body background="img/polygon_bule.jpg">
<div class="header">
    <h1>ようこそ！WebPlaygroundへ！</h1>
</div>
<p id="pageTop"><a href="#">🔝</a></p>
<div id="particles">
    <div id="intro">
        <p>ここでは様々なWebに関する技術を楽しむことができます。絶賛暇な時いじり中。</p>
        <h3>🔥PlayGroundList🔥</h3>
        <ul>
            <li><a href="Walk/walk_form.php">歩数計算</a><br>
                <p>概要:簡単な歩数計算ができます。算数レベルです。</p></li>
            <li><a href="Vegetable/vegetable_home.php">お野菜管理</a><br>
                <p>概要:お野菜の管理ができます。閲覧から登録、削除、更新までの機能があります。</p></li>
            <li><a href="member/home_member_shuffle.php">メンバーシャッフル</a><br>
                <p>概要:プレゼン発表の順番をワンクリックで決めることができます。また、１日ごとにメンバーが強制シャッフルされます。</p></li>
            <li><a href="/GPA/GPA_app.php">GPA計算</a><br>
                <p>概要:GPAの計算ができます。最高評価4のものに対応しています。</p></li>
            <li><a href="/login/Main.php">会員情報管理</a><br>
                <p>概要:会員情報管理を実装しました。</p></li>
            <li><a href="/TODO/TODO_app.php">TODO管理</a><br>
                <p>概要:簡単なタスク管理ができるTODOアプリです。</p></li>
            <li><a href="#">Yahoo!API ショッピング編</a><br>
                <p>絶賛開発中</p></li>
        </ul>
    </div>
</div>
</body>
</html>