<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mali Test</title>
</head>
<body>
    <?php
        $var = "<b>hi</b>";
    ?>
    
    double encoded: {{ $var }}<br>
    not double encoded: {! $var !}
</body>
</html>