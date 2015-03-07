<html>
<head>
<title>Send to RaspberryPi Display</title>
<script src='js/jquery-1.11.1.min.js'></script>
<script src='js/spectrum.js'></script>
<link rel='stylesheet' href='css/spectrum.css'/>
</head>
<body>
Thanks!
<?php
$file = 'message.dsp';
$text = $_POST['txt'] . "\n" . $_POST['rgb'] . "\n" . $_POST['for'];
file_put_contents($file, $text, LOCK_EX);
?>
</body>
</html>
