<?php

namespace Amasir20\CreepyJokes\Tests;

use Amasir20\CreepyJokes\JokeFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_return_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{ "type": "success", "value": { "id": 221, "joke": "Chuck Norris is the only person to ever win a staring contest against Ray Charles and Stevie Wonder.", "categories": [] } }')
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);
        $jokes = new JokeFactory($client);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('Chuck Norris is the only person to ever win a staring contest against Ray Charles and Stevie Wonder.', $joke);
    }
}
