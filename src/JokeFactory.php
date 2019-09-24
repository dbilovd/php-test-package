<?php

namespace Dbilovd\PHPTestPackage;

use Dbilovd\PHPTestPackage\Jokes\ChuckNorrisJokes;

class JokeFactory
{
    /**
     * Constructor.
     *
     * @return \Jokes\JokeContract
     */
    public function __construct()
    {
    }

    /**
     * @return [type] [description]
     */
    public function makeJoke()
    {
        return new ChuckNorrisJokes();
    }
}
