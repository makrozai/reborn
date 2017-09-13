<?php 
  

  $nosotros = file_get_contents("https://graph.facebook.com/v2.10/421931754512932?fields=about%2Cdescription%2Cgeneral_info%2Cemails%2Cphone%2Clocation%2Clink%2Cphotos.limit(1)%7Bimages%7D%2Cname&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $nosotros = json_decode($nosotros);
  $about = $nosotros;
  $descripcion = explode("\n\n", $about->description);
  $servicios = explode("•", $descripcion[2]);
  unset($servicios[0]);


  $portadas = file_get_contents("https://graph.facebook.com/v2.10/421934104512697?fields=photos.limit(3)%7Bimages%2Cname%7D&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $portadas = json_decode($portadas);
  $port = $portadas->photos->data;

  $posts = file_get_contents("https://graph.facebook.com/v2.10/421931754512932?fields=posts%7Bmessage%2Cfull_picture%2Clink%2Ctype%2Cname%2Cdescription%2Ccreated_time%7D&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $posts = json_decode($posts);
  $articulos = $posts->posts->data;
  //print_r($articulos);
  $blogs = array();
  foreach ($articulos as $articulo) {
    if ($articulo->type == "link") {
      if (count($blogs) < 3) {
        if (!isset($articulo->full_picture)) {
          $articulo->full_picture = "http://preview.itgeeksin.com/corporeal-business-html-template/assets/img/blog/2.jpg";
        }else{
          if (@exif_imagetype($articulo->full_picture) == 1) {
            $articulo->full_picture = "http://preview.itgeeksin.com/corporeal-business-html-template/assets/img/blog/2.jpg";
          }
        }
        array_push($blogs, $articulo);
      }
    }
  }
  //print_r($blogs);

  $events = file_get_contents("https://graph.facebook.com/v2.10/1096565523716215?fields=photos.limit(6)%7Bimages%2Cname%7D&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $events = json_decode($events);
  $eventos = $events->photos->data;
 ?>
