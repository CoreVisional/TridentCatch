@extends('layouts.app')

@section('title', 'Our Products | TridentCatch')

@section('content')

<!-- Breadcrumb Section Begin -->
<x-breadcrumbs>
    <div class="breadcrumbs__text-container">
        <h4>Shop</h4>
        <div class="breadcrumbs__text breadcrumbs__flex">
            <a class="breadcrumbs__text-home" href="{{ route('home') }}">Home</a>
            <span class="breadcrumbs__separator breadcrumbs__flex">
                <x-svg.icons.shop.breadcrumbs class="angle-right-icon" />
            </span>
            <span class="breadcrumbs__text-shop breadcrumbs__flex">Shop</span>
        </div>
    </div>
</x-breadcrumbs>
<!-- Breadcrumb Section End -->

<section class="shop__product-section container">
    {{-- Sidebar --}}
    <div class="shop__sidebar">
        <h3>Categories</h3>
        <ul class="shop__category">
            @foreach ($categories as $category)
                <li>
                    <a class="{{ $category->name == $categoryName ? 'active-cat' : '' }}"
                        href="{{ route('shop.index', ['category' => $category->slug]) }}">{{
                        $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    {{-- End of Sidebar --}}


    {{-- Product filter Section --}}
    <div class="shop__products-wrapper">
        <div class="shop__products-header shop__flex">
            <div class="shop__products-filter shop__flex">
                <strong class="shop__flex">Sort by:</strong>
                <select name="order-by" class="order-by" aria-label="Order By">
                    <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">
                        <option value="">Price, Low to High</option>
                    </a>
                    <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">
                        <option value="">Price, High to Low</option>
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
                <a class="shop__product-name" href="{{ route('shop.show', $product->slug) }}">
                    <div>
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

        <div class="spacer"></div>
        {{ $products->appends(request()->input())->links() }}
        {{-- End of product section --}}
    </div>
    {{-- End of page content --}}
</section>
@endsection