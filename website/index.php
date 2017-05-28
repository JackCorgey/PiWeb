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
<link rel="icon" href="../piweb/images/favicon.ico">

<link href="../piweb/images/favicon.ico" rel="apple-touch-icon" />
<link href="../piweb/images/favicon.ico" rel="apple-touch-icon" sizes="76x76" />
<link href="../piweb/images/favicon.ico" rel="apple-touch-icon" sizes="120x120" />
<link href="../piweb/images/favicon.ico" rel="apple-touch-icon" sizes="152x152" />
<link href="../piweb/images/favicon.ico" rel="apple-touch-icon" sizes="180x180" />
<link href="../piweb/images/favicon.ico" rel="icon" sizes="192x192" />
<link href="../piweb/images/favicon.ico" rel="icon" sizes="128x128" />

<title>Pi Web</title>
</head>

<body>

<div id="mainHeader">PiWeb</div>

<h2 id="mainTagline">APIs for IoT</h2>

<h2 id="secondTagline">Control LED Matrix, SenseHAT, and other devices over WiFi with Raspberry Pi using Flask API</h2>

<hr>

<form action="../piweb/sensehat">
    <button class="projectButton" type="submit" id='piwebBtn'>SenseHAT</button>
    <p class="projectTagline">Download our Flask file onto your device, and control a SenseHAT over WiFi with the simple PiWeb API.</p>
</form>

<form action="../piweb/#">
    <button class="projectButton" type="submit" id='ws2812matrix'>WS 2812 LED Matrix</button>
    <p class="projectTagline">Control any size WS 2812 LED Matrix (coming soon).</p>
</form>

<hr>

<div id="footer">@ 2017 PiWeb</div>

</body>

<script>

    var buttons = $('.led');
    buttons.click(function(e) {
        var that = $(this);

        var state = '';
        if( that.hasClass('on') ) {
            state = 'off';
            that.removeClass('on');
        } else {
            state = 'on';
            that.addClass('on');
        }

        $.ajax({
            url: 'https://tmrjyylz.p19.weaved.com/debug/'+state+'/x/'+that.val()+'/y/0',
            type: "POST",
            dataType: 'jsonp',
            crossDomain: true,
            success: function(data) {
                console.log(data);
            }
        }).done();
        console.log(that.val());
    });

    $('#clear').click(function(e) {
        $.ajax({
            url: 'https://tmrjyylz.p19.weaved.com/clear',
            type: "POST",
            dataType: 'jsonp',
            crossDomain: true,
            success: function(data) {
                console.log(data);
            }
        }).done();
    });

</script>

</html>