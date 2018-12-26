<?php
    require_once 'vendor/firebase/jwt/src/BeforeValidException.php';
    require_once 'vendor/firebase/jwt/src/ExpiredException.php';
    require_once 'vendor/firebase/jwt/src/SignatureInvalidException.php';
    require_once 'vendor/firebase/jwt/src/JWT.php';

    use \Firebase\JWT\JWT;

    $key = "asetberes2019";

   $jwt = $_GET['key'];   

   try { 
       $usertoken_to_verify = $_GET["key"]; 
       $decodejwt = JWT::decode($usertoken_to_verify, $key, array('HS256')); 
       //print_r($decodejwt); 
       $status = 'true';
    } catch (\Exception $e) { 
       $decodejwt = "";
       $status = 'false';      
     }

    $decodejwt = json_encode($decodejwt);

    print_r("{\"verify\":\"$status\",\"data\": $decodejwt }");
   
   
   
   /*$decoded = JWT::decode($jwt, $key, array('HS256'));

   $decoded_array = (array) $decoded;

   if ($decoded_array['user'] == ''){
        print_r('true');
   }else{
        print_r('false');
   }
      
    //print_r($decoded_array);*/
?>