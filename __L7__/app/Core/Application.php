<?php

namespace App\Core;

class Application extends \Illuminate\Foundation\Application
{
    public function publicPath()
    {
        return realpath($this->basePath . DIRECTORY_SEPARATOR . '..');
    }
}
