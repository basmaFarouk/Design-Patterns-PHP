<?php 

namespace StructuralDesignPatterns\Bridge;


// Example Usage
$sdQuality = new SDVideoQuality();
$hdQuality = new HDVideoQuality();
$fhdQuality = new FHDVideoQuality();

$youtubeSD = new YouTubeVideoProvider($sdQuality);
$youtubeHD = new YouTubeVideoProvider($hdQuality);
$twitchFHD = new TwitchVideoProvider($fhdQuality);

$youtubeSD->playback("yt123");
$youtubeHD->playback("yt456");
$twitchFHD->playback("tw789");

