<?php

namespace App;

class Elixir implements ItemInterface
{
    public function updateQuality(Item $item)
    {
        if ($item->quality > 0) {
            $item->quality--;
        }
        $item->sellIn--;

        if ($item->quality > 0 && $item->sellIn < 0) {
            $item->quality--;
        }
    }
}