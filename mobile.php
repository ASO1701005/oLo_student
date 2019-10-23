<?php require '../header.php'; ?>

<?php
/**
 * Created by PhpStorm.
 * User: kojimadaichi
 * Date: 2019/10/04
 * Time: 10:13
 */ ?>

    <span id="winsize2"></span>

    <script type="text/javascript">
        //読み込み時の表示
        window_load();

        //ウィンドウサイズ変更時に更新
        window.onresize = window_load;

        //サイズの表示
        function window_load() {
            var sW,sH,s;
            sW = window.innerWidth;
            sH = window.innerHeight;

            //s = "ウィンドウサイズ：横幅 = " + sW + " / 高さ = " + sH;
            //document.getElementById("winsize2").innerHTML = s;
        }
    </script>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css.css">
        <title>文書チェック画面</title>
    </head>
    <body>
        <h1>文書チェック</h1>
        <div class="box1" align="center">
            <p>ここに画像から読み込んだ文章が表示されます。</p>
        </div>
        <div class="box">
            <div class="box2">
                <center><p>ここにアドバイスが表示されます。</p></center>
            </div>
            <div class="img">
                <img src="job_hisyo_kochira.png" id="hisyo">
            </div>
        </div>
    </body>
    <footer>
        <form method="post" enctype="multipart/form-data">
            <center>※画像を選択しアップロードしてください</center>
            <br>
            <center><input type="file" name="pic" accept="image/*"></center>
            <br>
            <center><input type="submit" class="btn-square" value="画像をアップロードする"></input></center>

        </form>
    </footer>
</html>


<?php require '../footer.php'; ?>