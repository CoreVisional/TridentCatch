<section class="breadcrumbs breadcrumbs__flex">
    <div class="breadcrumbs__container container breadcrumbs__flex">
        {{ $slot }}
        <div class="search">
            @include('partials._search')
        </div>
    </div>
</section>