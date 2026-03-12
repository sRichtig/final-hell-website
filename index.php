<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<title>Final Hell RP</title>
<link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

<!-- CLICK TO ENTER -->
<div id="enter">
    <button onclick="startSite()">ENTER FINAL HELL</button>
</div>

<!-- AUDIO -->
<audio id="bgm" loop>
    <source src="assets/sound/background.mp3" type="audio/mpeg">
</audio>

<!-- HAUPTSEITE -->
<div class="wrapper" id="main" style="display:none;">

    <a href="https://scum.final-hell.de/" class="panel">
        <div class="overlay"></div>
        <img src="assets/img/scum-logo.png" class="logo">
        <h1>SCUM RP</h1>
    </a>

    <a href="https://dayz.final-hell.de/" class="panel">
        <div class="overlay"></div>
        <img src="assets/img/dayz-logo.png" class="logo">
        <h1>DAYZ RP</h1>
    </a>

</div>

<script>
function startSite() {
    document.getElementById("enter").style.display = "none";
    document.getElementById("main").style.display = "flex";

    const music = document.getElementById("bgm");
    music.volume = 0.6;
    music.play();
}
</script>

</body>
</html>