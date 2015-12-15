<?php
require_once '../src/twitter.class.php';

// ENTER HERE YOUR CREDENTIALS (see readme.txt)
$consumerKey = "NKqsayp5CblGxyTwMAtLTjynM";
$consumerSecret = "7Lq8HiP1gi7QYW93gvLNXAYV4eeISLLpull0bhOW6mH6TWSnam";
$accessToken = "276740008-7Tva3cvpI7NXJFT8ycgIkVjELJv5l23CDvJenmYE";
$accessTokenSecret = "5tMkO9Bg33o9oQVKPagrb0yXFbORNtGTABHTabwjVKPhr";

$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$userTweet = $_POST["userTweet"];

    try {
        $tweet = $twitter->send($userTweet); // you can add $imagePath as second argument

    } catch (TwitterException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>

<html>
<head>
    <title>HyTweet</title>
    <meta http-equiv="refresh" content="1; url=index.php" />
</head>
<body>
    <center>
        <br><br>
        <h1>Tweet Sent!</h1>
            <h4>You are now being redirected back to the homepage.</h4>
    </center>
</body>
</html>
