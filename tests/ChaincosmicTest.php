<?php
/**
 * Tests for ChainCosmic
 */

use PHPUnit\Framework\TestCase;
use Chaincosmic\Chaincosmic;

class ChaincosmicTest extends TestCase {
    private Chaincosmic $instance;

    protected function setUp(): void {
        $this->instance = new Chaincosmic(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaincosmic::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
