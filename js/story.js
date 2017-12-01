$(window).load(function(){
	let $tltDemo = $('#story');
	let options = {
		loop: true, //trueでループする
		in: {
			effect: "fadeIn",
			delay: 80　//アニメーションスピードが変わる
		},
		out: {
			effect: "rollOut",
			delay: 20　//アニメーションスピードが変わる
		},
	};
	$tltDemo.textillate(options);

	//一次的に止めたり開始したりしたいときはこれ。
	//$tltDemo.textillate('stop');　
	//$tltDemo.textillate('start');
});

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
