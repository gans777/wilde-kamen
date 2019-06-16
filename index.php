<?php
/* главная страница */
include ('classes/SimpleImage.php');
   $image = new SimpleImage();
$dir = "photos";
    $scandir = scandir($dir);
    unset($scandir[0]);
    unset($scandir[1]);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Природный камень песчаник </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    <link href="css/index.css?rnd=123" rel="stylesheet">
      <script src="js/jquery-1.11.0.min.js"></script>
    

   
  </head>
  <body>
    <div class="container">
   <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid="masonry: true">
    
    <?php 
      foreach ($scandir as $value) {
        $dir_this = $dir."/".$value;
    $scandir_this_value = scandir($dir_this);
    unset($scandir_this_value[0]);
    unset($scandir_this_value[1]); // проверить есть ли в папке с таким же именем
    
    if (!file_exists ("thumbs/".$scandir_this_value[2])) {
    //echo "name first thumb".$scandir_this_value[2]."<br>";
   $image->load($dir_this."/".$scandir_this_value[2]);
   $image->resizeToWidth(250);
   $image->save("thumbs/".$scandir_this_value[2]);
        }// генерирует тумбу если нет такой же первой в галлерее

       echo "<div><div class=\"uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle\" ><a href='photos/".$value."/index.php'><img src='thumbs/".$scandir_this_value[2]."'></a></div></div>";
      }
    ?>
    
        
    
   
</div>
   </div> <!-- end div.container -->
  </body>
  </html>