//読み込み時の表示
window_load();

//ウィンドウサイズ変更時に更新
window.onresize = window_load;

//サイズの表示
function window_load() {
    var sW,sH,s;
    sW = window.innerWidth;
    sH = window.innerHeight;

    s = "ウィンドウサイズ：横幅 = " + sW + " / 高さ = " + sH;
    document.getElementById("winsize2").innerHTML = s;
}
