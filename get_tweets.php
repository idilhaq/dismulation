<?php

require_once('twitter_proxy.php');

// Twitter OAuth Config options
$oauth_access_token = '69822768-fXmZWL35y4q7X54Uch3QDi2cnw8xikn7e27Szqam2';
$oauth_access_token_secret = 'A2Kdh3W0s5EVOFYHIQm4tzJgJ8wRMPA5aFhnpOyeyGXt9';
$consumer_key = 'mjoB5OdSwvYr02EB4EhO9HaLZ';
$consumer_secret = 'wT0UzF1761MCrLSnd9B199jsxfIWUHBUBtIesOgJlnPnsf0Qfb';
$user_id = '69822768';
$screen_name = 'idilhaq';
$count = 10;
$trim_user = 'true';
$search = 'earthquake';

$twitter_url = 'search/tweets.json';
$twitter_url .= '?count=' . $count;
$twitter_url .= '&q=' . $search;

// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret,				// 'API secret' on https://apps.twitter.com
	$user_id,						// User id (http://gettwitterid.com/)
	$count							// The number of tweets to pull out
);

// Invoke the get method to retrieve results via a cURL request
$tweets_json = $twitter_proxy->get($twitter_url);
foreach($tweets_json['statuses'] as $tweet) {
    $tweet_text = $tweet['text'];
    $tweet_username = $tweet['user']['screen_name'];
    echo $tweet_text;
    echo '<br>';
    echo $tweet_username;
    echo '<br>';
}


?>