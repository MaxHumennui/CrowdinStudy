<?php

namespace Arrays;

trait ArrayGenerateTrait
{
    protected function generateArray($height, $width): array
    {
        $arr = [];

        if($height < 1 || $width < 1){
            throw new Exception("Dimension array less than 1x1");
        }

        for ($i = 0; $i < $height; $i++) {
            $arr[$i] = [];
            for ($j = 0; $j < $width; $j++) {
                $arr[$i][$j] = rand(0, 9999);
            }
        }

        return $arr;
    }
}