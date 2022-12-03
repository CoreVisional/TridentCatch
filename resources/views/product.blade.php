@extends('layouts.app')

@section('title', $product->name)

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')
<x-breadcrumbs>
    <div class="breadcrumbs__text-container">
        <h4>Shop</h4>
        <div class="breadcrumbs__text breadcrumbs__flex">
            <a class="breadcrumbs__text-home" href="{{ route('home') }}">Home</a>
            <span class="breadcrumbs__separator breadcrumbs__flex">
                <x-svg.icons.shop.breadcrumbs class="angle-right-icon" />
            </span>
            <a class="breadcrumbs__text-home" href="{{ route('shop.index') }}">Shop</a>
            <span class="breadcrumbs__separator breadcrumbs__flex">
                <x-svg.icons.shop.breadcrumbs class="angle-right-icon" />
            </span>
            <span class="breadcrumbs__text-shop breadcrumbs__flex">{{ $product->name }}</span>
        </div>
    </div>
</x-breadcrumbs>
@endsection