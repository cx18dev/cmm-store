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
        $cart = Cache::get('cart', []);

        return array_reduce(
            $cart,
            function ($total, $item) {
                return $total + array_sum(array_column($item['parts'] ?? [], 'quantity'));
            },
            0
        );
    }
}
