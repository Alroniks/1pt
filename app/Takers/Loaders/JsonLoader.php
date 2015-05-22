<?php

namespace App\Takers\Loader;

use App\Takers\Loaders\LoaderInterface;

class JsonLoader implements LoaderInterface {

    public function load($filename) {

        return json_decode(
            File::get(storage_path() . "/$filename.json"),
            false
        );
    }

}