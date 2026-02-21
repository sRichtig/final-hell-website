<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/png" href="/img/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="/img/favicon.svg" />
	<link rel="shortcut icon" href="/img/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png" />
	<link rel="manifest" href="/img/site.webmanifest" />
	<title>Willkommen auf Final-Hell SCUM RP</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		.blur {
			filter: blur(2px);
			transition: filter 0.4s ease;
		}
	</style>
</head>

<body style="background-color: black;">
<center><audio controls="" loop="true" style="background: rgb(0, 0, 0); padding: 4px; width: 270px; height: 40px; border-radius: 40px; filter: invert(1);">
  <source src="music/bg-music2.mp3">
  </audio>
</center>
  <div id="intro-image-container" class="mt-5 container-fluid d-flex justify-content-center align-items-center">
   
    <a href="https://discord.gg/vsgkq3jA" target="_blank"><img id="intro-image" src="img/intro-image.png" class="img-fluid" alt="Final-Hell SCUM RP"></a>
  </div>
  <center>
	<div style="width: 80%">
		<marquee>Diese Seite befindet sich noch im Aufbau, Benutzung auf eigene Gefahr =) </marquee>
	</div>
  </center>
  <hr />
  <footer class="mt-5 container-fluid d-flex justify-content-center align-items-center">
	Version 0.1 - &copy; 2026 by sRichtig
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
	function randomBlur() {
	  let nextTime = Math.random() * 4000 + 1000;

	  setTimeout(() => {
		$("#intro-image").addClass("blur");

		let blurDuration = Math.random() * 1500 + 500;
		setTimeout(() => {
		  $("#intro-image").removeClass("blur");
		  randomBlur(); // erneut starten
		}, blurDuration);

	  }, nextTime);
	}

// Start
randomBlur();
  </script>
</body>
</html>