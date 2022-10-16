<?php

use Carbon\Carbon;

function formatDate($date) {
    return Carbon::parse($date)->format('M d, Y');
}

function productImage($path) {

    // For demo app
    $image_found = file_exists('assets/img/' . $path);

    if ($image_found) {
        return asset('assets/img/' . $path);
    } else {
        return asset('assets/img/not-found.jpg');
    }

    //  Production use
    // return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('assets/img/not-found.jpg');
}

function getStockLevel($quantity) {
    if ($quantity > setting('site.stock_threshold', 5)) {
        $stockLevel = '<span class="badge badge-success">In Stock</span>';
    } elseif ($quantity <= setting('site.stock_threshold', 5) && $quantity > 0) {
        $stockLevel = '<span class="badge badge-warning">Low Stock</span>';
    } else {
        $stockLevel = '<span class="badge badge-danger">Out of Stock</span>';
    }

    return $stockLevel;
}

?>