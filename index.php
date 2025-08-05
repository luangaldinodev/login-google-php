<?php

require __DIR__ . '/../vendor/autoload.php';

use Google\Client as Google;
use Google\Service\Oauth2 as Google_Service_Oauth2;

$client = new Google();
$client->setClientId("");
$client->setClientSecret("");
$client->setRedirectUri("http://localhost/auth/index.php");
$client->addScope("email");
$client->addScope("profile");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if (isset($_GET['code'])) {

        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token['access_token']);
        $google_oauth = new Google_Service_Oauth2($client);
        $user_info = $google_oauth->userinfo->get();
        echo "<pre>";
        print_r($user_info);
        echo "</pre>";
        echo $user_info['email'];
        echo "<br>";
        echo $user_info['name'];
        echo "<br>";
        echo $user_info['given_name'];
        echo "<br>";
        echo $user_info['family_name'];
        echo "<br>";
        echo $user_info['picture'];
        echo "<br>";
    }

    ?>
    <a href="<?= $client->createAuthUrl() ?>">login com google</a>
</body>
</html>
