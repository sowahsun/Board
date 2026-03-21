<?php
use PHPUnit\Framework\TestCase;
use Amber\Matrix\Engine;

class EngineTest extends TestCase {
    public function testShardProcessing() {
        $engine = new Engine();
        $result = $engine->processShard('dummy_data');
        $this->assertEquals(32, strlen($result));
    }
}