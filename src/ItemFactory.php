<?php

namespace App;

class ItemFactory
{
    public static function create(string $itemName): ItemInterface
    {
        return match ($itemName) {
            'Aged Brie' => new AgedBrie(),
            'Backstage passes to a TAFKAL80ETC concert' => new BackstagePass(),
            'Sulfuras, Hand of Ragnaros' => new Sulfuras(),
            'Elixir of the Mongoose' => new Elixir(),
        };
    }
}