<?php

namespace Dbilovd\PHPTestPackage\Jokes;

class ChuckNorrisJokes implements JokeContract
{
    /**
     * Return a random joke.
     *
     * @return string A random joke
     */
    public function joke() : string
    {
        return 'Random Joke!';
    }
}
