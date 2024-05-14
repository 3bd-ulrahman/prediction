<?php

if (! function_exists('calculatePercentage')) {
    function calculatePercentage($collection, $column)
    {
        $lastResult = $collection->last()->$column;
        $secondToLastResult = $collection->nth($collection->count() - 2)->last()->$column;

        $percentage = ($lastResult / $secondToLastResult) * 100;

        return number_format($percentage, 2);
    }
}
