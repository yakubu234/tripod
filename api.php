<?php 
$search  = array('$', '!', ' ', '#', '%','^','&','*','(',')',',','?','  ','/',';',':',"'",'"','@','.');
$replace = array('-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');
$API_key    = 'AIzaSyBj7PO03GgxNUOLwcGgjHKgWdwtFfodtrA'; //my API key
$channelID  = 'UCjhsjqGwn3d6BPktTvqJAwA'; //my channel ID
$maxResults = 5;$video_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
// foreach($video_list->items as $item){
// 	echo "https://www.youtube.com/embed/" .$item->id->videoId;
// 	echo "<br>https://www.youtube.com/channel/UCjhsjqGwn3d6BPktTvqJAwA/" .$item->id->videoId;
// 	echo "<br>video title" .$item->snippet->title;
// 	echo "<br>publish time" .date('d/m/y H:i:s', strtotime($item->snippet->publishedAt));
// 	echo "<br>etag" .$item->etag;
// 	echo "<br>video id " .$item->id->videoId;
// 	echo "<br>picture url" .$item->snippet->thumbnails->high->url;
// }

?>