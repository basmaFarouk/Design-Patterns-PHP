<?php 

namespace StructuralDesignPatterns\Bridge;

// Abstract VideoProvider
abstract class VideoProvider {
    abstract public function playback(string $videoId): void;
}