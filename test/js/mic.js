var flag_speech = 0;//flag

function vr_function() {
    window.SpeechRecognition = window.SpeechRecognition || webkitSpeechRecognition;
    var recognition = new webkitSpeechRecognition();
    var speechRecognitionList = new webkitSpeechGrammarList();
    var grammar = '#JSGF V1.0; grammar colors; public <color> = aqua | azure | beige | bisque | black | blue | brown | chocolate | coral | crimson | cyan | fuchsia | ghostwhite | gold | goldenrod | gray | green | indigo | ivory | khaki | lavender | lime | linen | magenta | maroon | moccasin | navy | olive | orange | orchid | peru | pink | plum | purple | red | salmon | sienna | silver | snow | tan | teal | thistle | tomato | turquoise | violet | white | yellow ;'
    recognition.lang = 'en-US';
    recognition.interimResults = true;
    recognition.continuous = true;
    speechRecognitionList.addFromString(grammar, 1);
    recognition.grammars = speechRecognitionList;

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
