<?php 

namespace StructuralDesignPatterns\Flyweight;

use Exception;

class PlayersFactory {
    private static array $inMemoryCachedPlayers = [];

    private function __construct() {
    }

    public static function getPlayer(string $playerType): Player {
        if (isset(self::$inMemoryCachedPlayers[$playerType])) {
            echo "Returning cached " . ucfirst(str_replace('_', ' ', $playerType)) . "\n";
            return self::$inMemoryCachedPlayers[$playerType];
        }

        $player = null;
        switch ($playerType) {
            case PlayerType::MAIN_PLAYER:
                $player = new MainPlayer("Default Main Player");
                break;
            case PlayerType::WEAK_ENEMY:
                $player = new Enemy(1, 10);
                break;
            case PlayerType::STRONG_ENEMY:
                $player = new Enemy(5, 50);
                break;
        }

        if ($player === null) {
            throw new Exception("Unsupported player type: " . $playerType);
        }

        self::$inMemoryCachedPlayers[$playerType] = $player;
        return $player;
    }

    public static function getCacheSize(): int {
        return count(self::$inMemoryCachedPlayers);
    }
}