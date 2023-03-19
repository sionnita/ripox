<!DOCTYPE html>
<html>
<head>
    <title>RIPOX</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p><?php
                header('Content-type: text/plain');
                echo $details['body'];
                ?></p>
   
    <p>Thank you</p>
</body>
</html>