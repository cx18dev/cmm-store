<?php

use Illuminate\Support\Facades\Session;
use App\Repositories\CategoryRepository;

class Helper
{
    public static function categorySidebar()
    {
        return (new CategoryRepository())->getActiveCategories();
    }

    public static function getTotalItems()
    {
        $cart = Session::get('cart', []);

        return array_reduce(
            $cart,
            function ($total, $item) {
                return $total + array_sum(array_column($item['parts'] ?? [], 'quantity'));
            },
            0
        );
    }

    public static function getCMMName($value)
    {
        if ($value == 1) {
            return 'IMS-MERLIN 142210 DCC CMM';
        } elseif ($value == 2) {
            return 'IMS IMPACT-1000';
        } elseif ($value == 3) {
            return 'IMS IMPACT-750';
        } elseif ($value == 4) {
            return 'IMS IMPACT-600';
        } else {
            return '';
        }
    }
}
