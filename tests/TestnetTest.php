<?php
/**
 * Tests for TestNet
 */

use PHPUnit\Framework\TestCase;
use Testnet\Testnet;

class TestnetTest extends TestCase {
    private Testnet $instance;

    protected function setUp(): void {
        $this->instance = new Testnet(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Testnet::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
