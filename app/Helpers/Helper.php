<?php

use Illuminate\Support\Facades\Cache;
use App\Repositories\CategoryRepository;

class Helper
{
    public static function categorySidebar()
    {
        return (new CategoryRepository())->getActiveCategories();
    }

    public static function getTotalItems()
    {
        // Retrieve the cart from the cache
        $cart = Cache::get('cart', []);

        // Use array_reduce to calculate the total count of parts
        return array_reduce($cart, function ($total, $item) {
            return $total + count($item['parts']);
        }, 0);
    }
}
