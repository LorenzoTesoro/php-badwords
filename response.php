<?php
   $paragraph = $_GET["paragraph"];

   $paragraph_length = strlen(preg_replace('/\s+/', '', $paragraph)); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <p> "<?php echo $paragraph ?>". La lunghezza del paragrafo è di <?php echo $paragraph_length ?> caratteri. </p>
</body>
</html>