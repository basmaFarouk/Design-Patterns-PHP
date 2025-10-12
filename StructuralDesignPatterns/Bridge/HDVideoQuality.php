<?php 

namespace StructuralDesignPatterns\Bridge;

// HDVideoQuality Implementation
class HDVideoQuality implements VideoQuality {
    public function render(): void {
        echo "Rendering HD Quality Video...\n";
    }
}