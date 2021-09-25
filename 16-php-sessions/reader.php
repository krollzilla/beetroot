<?php

/**
 * @param  string  $fileName
 * @return array
 * @throws Exception
 */
function readJson(string $fileName): array
{
    if (!file_exists($fileName)) {
        throw new Exception(PHP_EOL."Can not read your data from users file. File '$fileName' does not exist!".PHP_EOL);
    }

    $jsonFile = file_get_contents($fileName);

    if ($jsonFile === false) {
        throw new Exception(PHP_EOL."Error while reading file '$fileName'.".PHP_EOL);
    }

    try {
        $jsonArray = json_decode($jsonFile, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $exception) {
        throw new Exception(PHP_EOL."Error while json-decoding file '$fileName'.".PHP_EOL);
    }

    return $jsonArray;
}

