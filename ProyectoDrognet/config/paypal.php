<?php

return array (

//Establecer la credencial de paypal

 'client_id'  => 'Ab11bJAiiUYR25w2hq_RlS9XT0r8DR5RPOD40PJeoOS-9IAYD9wage2XrOpqPizlbbSlkpB13JQ_yM8p',
 'secret' => 'EGDqhuYiNnuUcIMqGY-0iZsd5l8IoPa4H0XVq9qnvdNwb3VwaqJ8j7FofPYMnNghKXJDDpu-4n279vFF',

 //Configurar el sdk

'settings' => array(

'mode'=> 'sandbox',

//especificar el tiempo máximo de solicitud en segundos

'http.ConnectionTimeOut' => '30',

//Para iniciar sesion en un archivo

'log.LogEnabled' => 'true',

//especificar el archivo en el que se desea escribir


'log.FileName' => storage_path() . '/logs/paypal.log',

'log.LogLevel' => 'FINE'


   ),

);







