<?php 

namespace StructuralDesignPatterns\Bridge;

// SDVideoQuality Implementation
class SDVideoQuality implements VideoQuality {
    public function render(): void {
        echo "Rendering SD Quality Video...\n";
    }
}