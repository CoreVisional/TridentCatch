<section class="breadcrumb breadcrumbs__flex">
    <div class="breadcrumb__container container breadcrumbs__flex">
        <div class="breadcrumb__row">
            {{ $slot }}
        </div>
        <div class="breadcrumbs__search">
            @include('partials._search')
        </div>
    </div>
</section>
