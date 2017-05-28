<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
       // $(this).toggleClass("on");
    });
});
</script>

<meta charset=utf-8 />
<link href="style.css" rel="stylesheet">
<link rel="icon" href="../../piweb/images/favicon.ico">

<link href="../../piweb/images/favicon.ico" rel="apple-touch-icon" />
<link href="../../piweb/images/favicon.ico" rel="apple-touch-icon" sizes="76x76" />
<link href="../../piweb/images/favicon.ico" rel="apple-touch-icon" sizes="120x120" />
<link href="../../piweb/images/favicon.ico" rel="apple-touch-icon" sizes="152x152" />
<link href="../../piweb/images/favicon.ico" rel="apple-touch-icon" sizes="180x180" />
<link href="../../piweb/images/favicon.ico" rel="icon" sizes="192x192" />
<link href="../../piweb/images/favicon.ico" rel="icon" sizes="128x128" />

<title>Sense HAT PiWeb API</title>
</head>

<body>

<div id="mainHeader">Sense HAT PiWeb API</div>

<h2 id="mainTagline"></h2>

<h2 id="secondTagline">Control SenseHAT over WiFi with Raspberry Pi using Flask API</h2>

<img src="images/sensehat.jpg" style="width: 15%;">

<hr>

<form action="../sensehat/led">
    <button class="projectButton" type="submit" id='piwebBtn'>LED Matrix demo</button>
    <p class="projectTagline">Light up the Sense HAT LED Matrix with the PiWeb API.</p>
</form>

<hr>

<div id="footer">@ 2017 PiWeb</div>

</body>

</html>