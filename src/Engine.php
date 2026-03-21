<?php
namespace Amber\Matrix;

class Engine {
    /**
     * Process a raw byte shard.
     */
    public function processShard(string $blobData): string {
        $salt = random_bytes(16);
        return hash_pbkdf2('sha256', $blobData, $salt, 100000, 32, true);
    }
}