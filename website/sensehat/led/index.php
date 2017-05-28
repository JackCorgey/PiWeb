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

<title>RPi Web</title>
</head>

<h1>Raspberry Pi Web Project</h1>


  <div class="row">
        <button value='0' class="led">1</button>
        <button value='1' class="led">2</button>
        <button value='2' class="led">3</button>
        <button value='3' class="led">4</button>
        <button value='4' class="led">5</button>
        <button value='5' class="led">6</button>
        <button value='6' class="led">7</button>
        <button value='7' class="led">8</button>
  </div>
  <div class="row">
        <button value='8' class="led">1</button>
        <button value='9' class="led">2</button>
        <button value='10' class="led">3</button>
        <button value='11' class="led">4</button>
        <button value='12' class="led">5</button>
        <button value='13' class="led">6</button>
        <button value='14' class="led">7</button>
        <button value='15' class="led">8</button>
  </div>
  <div class="row">
        <button value='16' class="led">1</button>
        <button value='17' class="led">2</button>
        <button value='18' class="led">3</button>
        <button value='19' class="led">4</button>
        <button value='20' class="led">5</button>
        <button value='21' class="led">6</button>
        <button value='22' class="led">7</button>
        <button value='23' class="led">8</button>
  </div>
  <div class="row">
        <button class="led">1</button>
        <button class="led">2</button>
        <button class="led">3</button>
        <button class="led">4</button>
        <button class="led">5</button>
        <button class="led">6</button>
        <button class="led">7</button>
        <button class="led">8</button>
  </div>
  <div class="row">
        <button class="led">1</button>
        <button class="led">2</button>
        <button class="led">3</button>
        <button class="led">4</button>
        <button class="led">5</button>
        <button class="led">6</button>
        <button class="led">7</button>
        <button class="led">8</button>
  </div>
  <div class="row">
        <button class="led">1</button>
        <button class="led">2</button>
        <button class="led">3</button>
        <button class="led">4</button>
        <button class="led">5</button>
        <button class="led">6</button>
        <button class="led">7</button>
        <button class="led">8</button>
  </div>
  <div class="row">
        <button class="led">1</button>
        <button class="led">2</button>
        <button class="led">3</button>
        <button class="led">4</button>
        <button class="led">5</button>
        <button class="led">6</button>
        <button class="led">7</button>
        <button class="led">8</button>
  </div>
  <div class="row">
        <button class="led">1</button>
        <button class="led">2</button>
        <button class="led">3</button>
        <button class="led">4</button>
        <button class="led">5</button>
        <button class="led">6</button>
        <button class="led">7</button>
        <button class="led">8</button>
  </div>

  <button id='clear'>Clear</button>

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