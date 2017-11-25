$(document).ready(function(){
  changeText("#story", 0, "test1");
  changeText("#story", 1000, "test2");
  changeText("#story", 2000, "test3");
});

let changeText = function(selectar, time = 1000, text = "hoge"){
	 setTimeout(function(){
    $(selectar).html(text);
  }, time);
}
