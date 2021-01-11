<?php

namespace Amasir20\CreepyJokes\Tests;

use Amasir20\CreepyJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_return_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }
}
