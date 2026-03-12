<?php
	require 'src/counter.php';
	
	$lastModified = filemtime('index.php');
?>

<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Final Hell RP</title>
	<link rel="stylesheet" href="assets/css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="assets/img/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg" />
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png" />
</head>

<body>

<!-- CLICK TO ENTER -->
<div id="enter">
    <button onclick="startSite()">ENTER FINAL HELL</button>
	<br />
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
    music.volume = 0.2;
    music.play();
}
</script>

<footer>
	<center>&laquo;<small>View-Counter: <?php echo $totalViews . " | " . "Letzte Änderung: " . date("d.m.Y H:i:s", $lastModified); ?>  | &copy; 2026 final-hell.de</small>&raquo;</center>
</footer>
</body>
</html>