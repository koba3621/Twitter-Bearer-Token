<?php
require_once('./TwitterApiByBarerToken.php');

$bearer_token = 'your bearer token';

$twitter_api = new TwitterApiByBearerToken($bearer_token);
$responses = $twitter_api->getTwitterApi(
	'https://api.twitter.com/1.1/statuses/user_timeline.json',
	array(
		'screen_name' => 'arbitrary user_name',
		'count' => 10,
		'exclude_replies' => true,
		'include_rts' => false,
	)
);

foreach ($responses as $key => $response) {
	echo '$response ' . $key . ';' . PHP_EOL;
	var_dump($response);
	echo PHP_EOL;
}