<?php
/* файл формирующий галлерею  - по старинке glocind.php*/ 
$main_data=file_get_contents('data.txt');
if ($main_data){
  $mass_main_data= explode('||',$main_data);
  

} else { echo "файла с основными данными нет";}





?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $mass_main_data[0]; ?></title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/f_awesome/css/font-awesome.min.css">
    <link href="../../css/galery.css?rnd=123" rel="stylesheet">
      <script src="../../js/jquery-1.11.0.min.js"></script>
    <script src="../../js/viewer.js?rnd=123"></script>
      <script src="../../js/jquery.lazyload.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="header">
      
    <h1><?php echo $mass_main_data[0]; ?> </h1>
    </div>
    <div class="container">
  <div class="row border contents">
    <?php
    if (isset($_GET['admin'])) {
    echo "<div class=\"admin_main_info\">";
      echo "<div class=\"wrap_textarea_main_info\">";
        echo "<textarea name=\"main_info\"  cols=\"80\" rows=\"10\" >$main_data</textarea>";
        echo "<div class=\"button_for_main_info\">save</div>";
        echo "</div>
      </div>";
}
      


    $dir = __DIR__;
    $scandir = scandir($dir);
    unset($scandir[0]);
    unset($scandir[1]);
   //echo print_r($scandir);
     $count=0;
    foreach ( $scandir as $value ) {
        $count++;
         count($value);
         if ((".php"=== substr($value, -4))||(".txt"=== substr($value, -4))) { continue;}
       echo "<img class='img_this' src='$value' width='400'><br>$count<br><br>";
       
        }
    ?>
   
  </div>
</div>

<div class='page_footconst'></div>



 <div id='maximg'><div id="maximgX"><i class='fa fa-times-circle' aria-hidden='true'></i></div></div>
 <div id='panelupr'><div id="close_all_panel"><i class="fa fa-times-circle" aria-hidden="true"></i></div><div id='this_nomer'></div><div id='nazad'><i class='strelki fa fa-chevron-circle-up' aria-hidden='true'></i>
</div><div id='vpered'><i class='strelki fa fa-chevron-circle-down' aria-hidden='true'></i>
</div><div id='uveli4'><i class='strelki fa fa-search-plus' aria-hidden='true'></i>
</div><div id='umen'><i class='strelki fa fa-search-minus' aria-hidden='true'></i>
</div>
 <div id='vveditenomer'>все страницы>><div id='kolvostranitc_map'></div></div>
</div>
<div id='fon_maximg'></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/gallery.js"></script>
  </body>
</html>