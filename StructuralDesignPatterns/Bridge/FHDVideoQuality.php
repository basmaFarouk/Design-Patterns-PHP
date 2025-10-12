<?php 

namespace StructuralDesignPatterns\Bridge;

// FHDVideoQuality Implementation
class FHDVideoQuality implements VideoQuality {
    public function render(): void {
        echo "Rendering FHD Quality Video...\n";
    }
}