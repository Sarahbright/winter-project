$(window).load(function(){

	//吹き出し、解答など、あとでフェードインさせるものを消しておく。
	$("#incorrect").hide();
	$("#correct").hide();
	$("#fukidashi").hide();

	//文字アニメーションの設定
	let $tltDemo = $('#story');
	let options = {
		loop: false, //trueでループする
		in: {
			effect: "fadeIn",
			delay: 80　//アニメーションスピードが変わる
		},
		out: {
			effect: "rollOut",
			delay: 20　//アニメーションスピードが変わる
		},
		callback: show_fukidashi //アニメーションが終わった後のコールバックの設定
	};
	$tltDemo.textillate(options);

});

//音声認識関数の本体
var flag_speech = 0;//flag
function vr_function() {
	//音声認識開始のための準備
	window.SpeechRecognition = window.SpeechRecognition || webkitSpeechRecognition;
	var recognition = new webkitSpeechRecognition();
	var speechRecognitionList = new webkitSpeechGrammarList();
	// var colors = [ 'aqua' , 'azure' , 'beige', 'bisque', 'black', 'blue', 'brown', 'chocolate', 'coral', 'crimson', 'cyan', 'fuchsia', 'ghostwhite', 'gold', 'goldenrod', 'gray', 'green', 'indigo', 'ivory', 'khaki', 'lavender', 'lime', 'linen', 'magenta', 'maroon', 'moccasin', 'navy', 'olive', 'orange', 'orchid', 'peru', 'pink', 'plum', 'purple', 'red', 'salmon', 'sienna', 'silver', 'snow', 'tan', 'teal', 'thistle', 'tomato', 'turquoise', 'violet', 'white', 'yellow'];
	var colors = ['赤','黄','青','緑','白','黒'];
	var grammar = '#JSGF V1.0; grammar colors; public <color> = ' + colors.join(' | ') + ' ;'
	recognition.lang = 'ja-JP'; //日本語
	recognition.interimResults = true;
	recognition.continuous = true;
	speechRecognitionList.addFromString(grammar, 1);
	recognition.grammars = speechRecognitionList;

	//ステータスをコメント欄に表示
	recognition.onsoundstart = function() {
		document.getElementById('story').innerHTML = "認識中";
	};
	recognition.onnomatch = function() {
		document.getElementById('story').innerHTML = "もう一度試してください";
	};
	recognition.onerror = function() {
		document.getElementById('story').innerHTML = "エラー";
		if(flag_speech == 0){
			vr_function();
		}
	};
	recognition.onsoundend = function() {
		document.getElementById('story').innerHTML = "停止中";
		vr_function();
	};

	//回答を得られた時の関数
	recognition.onresult = function() {
		var results = event.results;
		var last = event.results.length - 1;
		var answer = event.results[last][0].transcript;//回答の取得
		after_answer(answer);//回答に応じての処理
		vr_function();
	}

	//音声認識開始するところ
	flag_speech = 0;
	document.getElementById('story').innerHTML = "音声を入力してください";
	recognition.start();
}


//回答を得られた時の処理の分岐
function after_answer(answer) {
	if (answer == "chair") {
		$("#correct").fadeIn(1000, setTimeout(fadeout, 1000) );
	} else if (answer == "shutter") {
		setTimeout(shutter, 1000);
	} else if (answer == "next"){
		setTimeout(transition, 1000);
	} else {
		$("#incorrect").fadeIn(1000, setTimeout(fadeout, 1000) );
	}
}

function transition() {
	window.location.href = 'http://www.soono.jp/user/takumi/winter/office/test/mic_chair/mictest.html';
}

function fadeout() {
	$('#incorrect').fadeOut();
	$('#correct').fadeOut();
}

//#imageにシャッター的な動作を付与する
function shutter(){
	let container = $('#image'),
	li = container.find('img');

	container.tzShutter({
		imgSrc: 'jquery.shutter/shutter.png',
		closeCallback: function(){
			setTimeout(function(){container.trigger('shutterOpen')},100);
		},
		loadCompleteCallback:function(){
			container.trigger('shutterClose');
		},
	});
}

function show_fukidashi() {
	shutter();//シャッターのテスト 適当な場所に置いて使って大丈夫です。
	$("#fukidashi").fadeIn(0, setTimeout(vr_function, 1000));//吹き出しフェードインのテスト
}


