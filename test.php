<html>
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <title>Web Speech API</title>
    <style type="text/css">
    textarea {
      font-size: 20px;
      font-family: 'Hiragino Kaku Gothic ProN','メイリオ', sans-serif;
    }
    input {
      background-color: white;
      color: black;
      font-size:20px;
      font-family: 'Hiragino Kaku Gothic ProN','メイリオ', sans-serif;
      border-radius: 10px;
    }
    </style>
    <script>
        var flag_speech = 0;//flag

        function vr_function() {
            window.SpeechRecognition = window.SpeechRecognition || webkitSpeechRecognition;
            var recognition = new webkitSpeechRecognition();
            recognition.lang = 'ja';
            recognition.interimResults = true;
            recognition.continuous = true;

            recognition.onsoundstart = function() {
                document.getElementById('status').innerHTML = "認識中";
            };
            recognition.onnomatch = function() {
                document.getElementById('status').innerHTML = "もう一度試してください";
            };
            recognition.onerror = function() {
                document.getElementById('status').innerHTML = "エラー";
                if(flag_speech == 0)
                  vr_function();
            };
            recognition.onsoundend = function() {
                document.getElementById('status').innerHTML = "停止中";
                  vr_function();
            };

            recognition.onresult = function(event) {
                var results = event.results;
                for (var i = event.resultIndex; i < results.length; i++) {
                    if (results[i].isFinal)
                    {
                        document.getElementById('result_text').innerHTML = results[i][0].transcript;
                        vr_function();
                    }
                    else
                    {
                        document.getElementById('result_text').innerHTML = results[i][0].transcript;
                        flag_speech = 1;
                    }
                }
            }
            flag_speech = 0;
            document.getElementById('status').innerHTML = "start";
            recognition.start();
        }
    </script>
</head>
<body>
  <br><br><br><br>
    <textarea id="result_text" cols="50" rows="5">    </textarea>
    <br>
    <textarea id="status" cols="50" rows="1">    </textarea>
    <br>
    <input type="button" onclick="vr_function();" value="音認開始">
<br><br>
    <img src="./jellyfish_half.png" align="center">
</body></html>
