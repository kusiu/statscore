<?php

namespace App;

final class GildedRose
{
    public function updateQuality(Item $item): void
    {
        $itemFactory = ItemFactory::create($item->name);
        $itemFactory->updateQuality($item);
    }
}