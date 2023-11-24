<?php

namespace helpers;

function rearrangeArrayByKeys(array $array, array $keys): array
{

    return array_map(function ($element) use ($keys) {
        return array_replace(array_flip($keys), $element);
    }, $array);
}
