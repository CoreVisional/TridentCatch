@extends('layouts.app')

@section('title', $product->name)

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')
    <x-breadcrumbs>
        
    </x-breadcrumbs>
@endsection
