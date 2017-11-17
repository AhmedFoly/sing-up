<?php

define('FILE_NAME', 'datafiles/file.txt');

function saveData($data) {
    $handle = fopen(FILE_NAME, 'w');

    fwrite($handle, json_encode($data));
}

function readData() {

    $size = filesize(FILE_NAME);

    if (!$size) {
        return [];
    }

    $handle = fopen(FILE_NAME, 'r');

    $data = fread($handle, $size);

    return json_decode($data , TRUE);
}
