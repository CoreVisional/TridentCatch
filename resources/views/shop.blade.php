@extends('layouts.app')

@section('title', 'Our Products | TridentCatch')

@section('content')

<!-- Breadcrumb Section Begin -->
<x-breadcrumbs>
    <h4>Shop</h4>
    <div class="breadcrumb__text-container breadcrumb__flex">
        <div class="breadcrumb__text breadcrumb__flex">
            <a class="breadcrumb__text-home breadcrumb__flex" href="{{ route('home') }}">Home</a>
            <span class="breadcrumb__separator breadcrumb__flex">
                <x-svg.icons.shop.breadcrumbs class="angle-right-icon" />
            </span>
            <span class="breadcrumb__text-shop breadcrumb__flex">Shop</span>
        </div>
    </div>
</x-breadcrumbs>
<!-- Breadcrumb Section End -->

<section class="shop__product-section container">
    {{-- Sidebar --}}
    <div class="sidebar">
        <h3>Categories</h3>
        <ul class="shop__category">
            @foreach ($categories as $category)
            <li><a class="{{ $category->name == $categoryName ? 'active-cat' : '' }}"
                    href="{{ route('shop.index', ['category' => $category->slug]) }}">{{
                    $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
    {{-- End of Sidebar --}}


    {{-- Product filter Section --}}
    <div class="shop__products-wrapper">
        <div class="shop__products-header shop__flex">
            {{ $products->appends(request()->input())->links() }}
            <div class="shop__products-filter">
                <strong>Sort by Price:</strong>
                <select>
                    <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">
                        <option value="">Low to High</option>
                    </a>
                    <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">
                        <option value="">High to Low</option>
                    </a>
                </select>
            </div>
        </div>
        {{-- End product filter section --}}

        {{-- Main product section --}}
        <div class="shop__products-listings text-center">
            @forelse ($products as $product)
            <div class="shop__product-info">
                <a href="{{ route('shop.show', $product->slug) }}">
                    <img src="{{ productImage($product->image) }}" alt="product">
                </a>
                <a href="{{ route('shop.show', $product->slug) }}">
                    <div class="shop__products-name">
                        {{ $product->name }}
                    </div>
                </a>
                <div class="shop__products-price">
                    {{ __('RM ') . $product->price }}
                </div>
            </div>
            @empty
            <div style="text-align: left">No items found</div>
            @endforelse
        </div>
        {{-- End of main product listings --}}

        <div class="spacer">
            {{ $products->appends(request()->input())->links() }}
        </div>
        {{-- End of product section --}}
    </div>
    {{-- End of page content --}}
</section>
@endsection