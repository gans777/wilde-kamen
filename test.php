<?php
include ('classes/SimpleImage.php');
   $image = new SimpleImage();
   $dir = "photos";
   $scandir = scandir($dir);
    unset($scandir[0]);
    unset($scandir[1]);
echo "<hr>";
  echo $dir_this = $dir."/".$scandir[2];
    $scandir_this_value = scandir($dir_this);
    unset($scandir_this_value[0]);
    unset($scandir_this_value[1]);
    echo "<hr>";
    echo "name first thumb".$scandir_this_value[2]."<br>";
   $image->load($dir_this."/".$scandir_this_value[2]);
   $image->resizeToWidth(250);
   $image->save("thumbs/".$scandir_this_value[2]);