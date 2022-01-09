<?php

declare(strict_types=1);

namespace Wengado\Tests;

use Wengado\Application;

class SmokeTest extends TestCase
{
    /** @test */
    public function it_looks_like_a_real_test()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_is_the_latest_version()
    {
        $this->assertEquals('2.9', Application::VERSION);
    }
}
