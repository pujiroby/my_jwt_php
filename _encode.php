<?php
    require_once 'vendor/firebase/jwt/src/BeforeValidException.php';
    require_once 'vendor/firebase/jwt/src/ExpiredException.php';
    require_once 'vendor/firebase/jwt/src/SignatureInvalidException.php';
    require_once 'vendor/firebase/jwt/src/JWT.php';

    use \Firebase\JWT\JWT;

        $key = "asetberes2019";
        $token = array(
        "user" => "admin.api",
        "email" => "admin.api@gmail.com",
        "act" => "01-01-2019",
        "end" => "31-12-2022"
        );

    $jwt = JWT::encode($token, $key);

    print_r($jwt);
?>