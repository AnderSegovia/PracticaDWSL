<?php
 $post =isset ($_POST['post']) ? $_POST['post'] : '';
 $chec =isset ($_POST['genero']) ? $_POST['genero'] : '';

 $get =isset ($_GET['get']) ? $_GET['get'] : '';
 echo '<h1> '.$get.'</h1>';
 echo '<h1> '.$post.'</h1>';
print_r($chec);
?>