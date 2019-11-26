<?php

namespace Dbilovd\PHPTestPackage\Jokes;

interface JokeContract
{
    /**
     * Return a random joke.
     *
     * @return string A random joke
     */
    public function joke();
}
