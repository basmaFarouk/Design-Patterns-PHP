<?php 

namespace StructuralDesignPatterns\Bridge;

// YouTubeVideoProvider
class YouTubeVideoProvider extends VideoProvider {
    private VideoQuality $videoQuality;

    public function __construct(VideoQuality $videoQuality) {
        $this->videoQuality = $videoQuality;
    }

    public function playback(string $videoId): void {
        $this->videoQuality->render();
        echo "Playback YouTube video...\n";
    }
}
