<?php

namespace App\Takers\Loaders;

class CsvLoader implements LoaderInterface {

    public function load($filename) {

        $data = File::get(storage_path() . "/$filename.csv");

        // TODO: implement reading of csv

        return $data;

    }

}