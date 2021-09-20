<?php

$filteredArray = [];
foreach ($jsonArray as $key => $val) {
    if (iconv_strlen($val["Password"]) >= 8) {
        $filteredArray[] = $val;
    }
}
