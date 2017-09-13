<?php 
function dateformat($fecha)
{
  $meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
  $format = substr($fecha,0,10);
  $format = explode("-", $format);
  $mes = $format[1];
  return $meses[$mes - 1] . " " . $format[2] . "," . $format[0];
}
?>