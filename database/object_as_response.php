<?php

function specialTransformObjArray($data)
{

    $output = new stdClass();

    foreach ($data as $item) {
        // var_dump($item);
        $output->{$item->id} = $item->attributes;
    }
    // var_dump($output);
    return $output;
}
