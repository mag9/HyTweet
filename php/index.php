<?php
require_once '../src/twitter.class.php';

// ENTER HERE YOUR CREDENTIALS (see readme.txt)
$consumerKey = "NKqsayp5CblGxyTwMAtLTjynM";
$consumerSecret = "7Lq8HiP1gi7QYW93gvLNXAYV4eeISLLpull0bhOW6mH6TWSnam";
$accessToken = "276740008-7Tva3cvpI7NXJFT8ycgIkVjELJv5l23CDvJenmYE";
$accessTokenSecret = "5tMkO9Bg33o9oQVKPagrb0yXFbORNtGTABHTabwjVKPhr";

$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

$statuses = $twitter->load(Twitter::ME_AND_FRIENDS);
?>

<html>
<head>
	<title>HyTweet</title>
</head>
<body>
	<center>
		<h1>HyTweet</h1>

		<h3>Enter Your Tweet Here!</h3>
		<form method="POST" action="actionBruh.php">
				<textarea name="userTweet" rows="4" cols="40"/></textarea>
				<br><br>
				<input type="submit" value="Send Tweet" />
				<br>
	</center>

		<!-- Code for loading the twitter feed. -->
		<ul>
		<?php foreach ($statuses as $status): ?>
			<li><a href="http://twitter.com/<?php echo $status->user->screen_name ?>"><img src="<?php echo htmlspecialchars($status->user->profile_image_url) ?>">
				<?php echo htmlspecialchars($status->user->name) ?></a>:
				<?php echo Twitter::clickable($status) ?>
				<small>at <?php echo date("j.n.Y H:i", strtotime($status->created_at)) ?></small>
			</li>
		<?php endforeach ?>
		</ul>

		</form>
</body>
</html>
