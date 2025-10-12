<?php 

namespace StructuralDesignPatterns\Bridge;

// TwitchVideoProvider
class TwitchVideoProvider extends VideoProvider {
    private VideoQuality $videoQuality;

    public function __construct(VideoQuality $videoQuality) {
        $this->videoQuality = $videoQuality;
    }

    public function playback(string $videoId): void {
        $this->videoQuality->render();
        echo "Playback Twitch video...\n";
    }
}