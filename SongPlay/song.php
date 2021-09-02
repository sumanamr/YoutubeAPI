<?php 

require 'SongHelper.php';

$songHelper = new SongHelper();

$answer = "";
if(isset($_POST['answer']))
   $answer = $_POST['answer'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Youtube Video Search</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name = "songForm" method = "POST" action= "SongController.php">
        <br>
        <br>
        Song : 
        <input type  = "text" name = "song" size = "10" value = "<?php echo $songHelper->getSong(); ?> "/>
        <br>
        <br>
        <input type = "submit" value = "Submit"/>
        <br>
        <br>
        <?php 
        if($answer)
           echo $answer;
        ?>
</body>
</html>
