<?php
/**
 * Tests for CollectPulse
 */

use PHPUnit\Framework\TestCase;
use Collectpulse\Collectpulse;

class CollectpulseTest extends TestCase {
    private Collectpulse $instance;

    protected function setUp(): void {
        $this->instance = new Collectpulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Collectpulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
