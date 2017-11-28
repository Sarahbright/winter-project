<!DOCTYPE html>
<html>
<head>
	<title>冬期岡本班</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.textillate.js"></script>
	<script type="text/javascript" src="js/jquery.lettering.js"></script>
	<script type="text/javascript" src="js/jquery.fittext.js"></script>
	<script type="text/javascript" src="js/takumi.js"></script>
	<style type="text/css">
		#fukidashi {
			display: flex;
			justify-content: center;
			align-items: center;
		}
		#iamge {
			width: 100%;
		}
		#image {
		display: flex;
    justify-content: center;
    align-items: center;
    height: 200px;
    border: solid;
    border: solid 1px;
    margin: 10px auto;
		}
		#story {
			width: 100%;
			border: 1px solid black;
	    width: 100%;
	    border: 1px solid black;
	    height: 100px;
		}
	</style>
</head>
<body>
<div id="wrapper">
		<div id="fukidashi">......。</div>

		<div id="image"">えるも画像</div>

		<div id="story">
			<ul class="texts" style="display: none">
        <li>午前二時踏切に 望遠鏡を担いでった</li>
        <li>ベルトに結んだラジオ 雨は降らないらしい</li>
        <li>2分後に君が来た 大げさな荷物背負ってきた</li>
        <li>始めようか天体観測　ほうき星を探して</li>
      </ul>
		</div>

		<div id="textillateDemoSelect">
    <div class="in-animation">
        <p class="title">IN ANIMATION</p>
        <span>EFFECT: </span>
        <select class="in-animation01">
            <option value="flash">flash</option>
            <option value="bounce">bounce</option>
            <option value="shake">shake</option>
            <option value="tada">tada</option>
            <option value="swing">swing</option>
            <option value="wobble">wobble</option>
            <option value="pulse">pulse</option>
            <option value="flip">flip</option>
            <option value="flipInX">flipInX</option>
            <option value="flipInY">flipInY</option>
            <option value="fadeIn">fadeIn</option>
            <option value="fadeInUp">fadeInUp</option>
            <option value="fadeInDown">fadeInDown</option>
            <option value="fadeInLeft">fadeInLeft</option>
            <option value="fadeInRight">fadeInRight</option>
            <option value="fadeInUpBig">fadeInUpBig</option>
            <option value="fadeInDownBig">fadeInDownBig</option>
            <option value="fadeInLeftBig" selected>fadeInLeftBig</option>
            <option value="fadeInRightBig">fadeInRightBig</option>
            <option value="bounceIn">bounceIn</option>
            <option value="bounceInDown">bounceInDown</option>
            <option value="bounceInUp">bounceInUp</option>
            <option value="bounceInLeft">bounceInLeft</option>
            <option value="bounceInRight">bounceInRight</option>
            <option value="rotateIn">rotateIn</option>
            <option value="rotateInDownLeft">rotateInDownLeft</option>
            <option value="rotateInDownRight">rotateInDownRight</option>
            <option value="rotateInUpLeft">rotateInUpLeft</option>
            <option value="rotateInUpRight">rotateInUpRight</option>
            <option value="rollIn">rollIn</option>
        </select>
        <span>OPTION: </span>
        <select class="in-animation02">
            <option value="" selected>sequence</option>
            <option value="reverse">reverse</option>
            <option value="sync">sync</option>
            <option value="shuffle">shuffle</option>
        </select>
        <span>SPEED: </span>
        <input type="text" class="in-animation03" value="30">
    </div>

    <div class="out-animation">
        <p class="title">OUT ANIMATION</p>
        <span>EFFECT: </span>
        <select class="out-animation01">
            <option value="flash">flash</option>
            <option value="bounce">bounce</option>
            <option value="shake">shake</option>
            <option value="tada">tada</option>
            <option value="swing">swing</option>
            <option value="wobble">wobble</option>
            <option value="pulse">pulse</option>
            <option value="flip">flip</option>
            <option value="flipOutX">flipOutX</option>
            <option value="flipOutY">flipOutY</option>
            <option value="fadeOut">fadeOut</option>
            <option value="fadeOutUp">fadeOutUp</option>
            <option value="fadeOutDown">fadeOutDown</option>
            <option value="fadeOutLeft">fadeOutLeft</option>
            <option value="fadeOutRight">fadeOutRight</option>
            <option value="fadeOutUpBig">fadeOutUpBig</option>
            <option value="fadeOutDownBig">fadeOutDownBig</option>
            <option value="fadeOutLeftBig">fadeOutLeftBig</option>
            <option value="fadeOutRightBig">fadeOutRightBig</option>
            <option value="bounceOut">bounceOut</option>
            <option value="bounceOutDown">bounceOutDown</option>
            <option value="bounceOutUp">bounceOutUp</option>
            <option value="bounceOutLeft">bounceOutLeft</option>
            <option value="bounceOutRight">bounceOutRight</option>
            <option value="rotateOut">rotateOut</option>
            <option value="rotateOutDownLeft">rotateOutDownLeft</option>
            <option value="rotateOutDownRight">rotateOutDownRight</option>
            <option value="rotateOutUpLeft">rotateOutUpLeft</option>
            <option value="rotateOutUpRight">rotateOutUpRight</option>
            <option value="hinge" selected>hinge</option>
            <option value="rollOut">rollOut</option>
        </select>
        <span>OPTION: </span>
        <select class="out-animation02">
            <option value="" selected>sequence</option>
            <option value="reverse">reverse</option>
            <option value="sync">sync</option>
            <option value="shuffle">shuffle</option>
        </select>
        <span>SPEED: </span>
        <input type="text" class="out-animation03" value="30">
    </div>
</div>
</div>



</body>
<script type="text/javascript">
	$(function(){

	});
</script>
</html>