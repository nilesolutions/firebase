<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Configuration;
use Kreait\Firebase\Firebase;

$config = new Configuration();
$config->setAuthConfigFile(__DIR__.'firebase_credentials.json');

$firebase = new Firebase('https://test-b782c.firebaseio.com/', $config);

$tokenHandler = $firebase->getTokenHandler();



$uid = 'a-uid';
$claims = ['foo' => 'bar']; // optional
// Returns a Lcobucci\JWT\Token instance
$customToken = $tokenHandler->createCustomToken($uid, $claims);
echo 'Custom Token  '. PHP_EOL.$customToken. PHP_EOL. PHP_EOL; // "eyJ0eXAiOiJKV1..."