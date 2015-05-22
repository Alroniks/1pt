<?php

namespace App\Takers;

use Illuminate\Translation\LoaderInterface;

class TakerLoader {

    private $loader = null;

    public function __construct($format = 'json') {

        $className = ucfirst($format) . 'Loader';

        $this->loader = new $className;
    }

    protected function setLoader(LoaderInterface $loader) {
        $this->loader = $loader;
    }

    public function load($filename) {

        return $this->loader($filename);
    }
}