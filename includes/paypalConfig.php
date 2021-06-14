<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'Accp7cqAPx0TrpsJkq6ZzmBVd1b7ncpDYPtcvVYrX7kEHwHTl7A_mLG3HSrcyKf8VraqldTIf1_NISFF',     // ClientID
        'EOonHmqyjYzsdB1x2mXHg99g24PuDLwrwNngvlngyyixKVUqH8cx7-bwPdFNI39Mr1XkSyZhxc3FVtyZ'      // ClientSecret
    )
);
?>