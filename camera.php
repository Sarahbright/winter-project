<!doctype html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Camera with mediaDevice</title>
</head>
<body>
  <button onclick="startVideo()">Start</button>
  <br />
  <video id="local_video" autoplay style="width: 320px; height: 240px; border: 1px solid black;"></video>
</body>
<script type="text/javascript">
  let localVideo = document.getElementById('local_video');
  let localStream;
  
  // start local video
  function startVideo() {
    navigator.mediaDevices.getUserMedia({video: true, audio: false})
    .then(function (stream) { // success
      localStream = stream;
      localVideo.src = window.URL.createObjectURL(localStream);
    }).catch(function (error) { // error
      console.error('mediaDevice.getUserMedia() error:', error);
      return;
    });
  }
</script>
</html>