<?php

namespace App;

class AgedBrie implements ItemInterface
{
    public function updateQuality(Item $item)
    {
        if ($item->quality < 50) {
            $item->quality++;
        }
        $item->sellIn--;

        if ($item->sellIn < 0 && $item->quality < 50) {
            $item->quality++;
        }
    }
}