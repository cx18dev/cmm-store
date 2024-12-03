<?php

use Illuminate\Support\Facades\Cache;

class CartHelper
{
    // Get the total count of items in the cart
    public static function getTotalItems()
    {
        // Retrieve the cart from the cache
        $cart = Cache::get('cart', []);

        // Calculate the total number of items in the cart
        $totalItems = count($cart);

        // foreach ($cart as $item) {
        //     // Sum the quantities of the selected parts
        //     $totalItems += $item['quantity'];
        // }

        return $totalItems;
    }
}
