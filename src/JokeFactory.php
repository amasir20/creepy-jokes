<?php

namespace Amasir20\CreepyJokes;

class JokeFactory
{
    /**
     * @var array
     */
    protected $jokes = [
        'Due to the Rector\'s illness, Wednesday\'s healing services will be discontinued until further notice.',
        'The Rev. Merriwether spoke briefly, much to the delight of the audience.',
        'On a church bulletin during the minister\'s illness: GOD IS GOOD; Dr. Hargreaves is better.',
    ];

    /**
     * JokeFactory constructor.
     * @param array $jokes
     */
    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function hello()
    {
        echo 'my first creepy joke';
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
