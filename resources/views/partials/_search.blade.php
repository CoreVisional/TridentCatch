<form class="search-wrapper" action="" method="POST" role="search">
    @csrf
    <div class="search-bar">
        <input type="search" class="search-term" placeholder="Search for products..." aria-label="Search" />
        <button type="submit" class="search-btn" aria-label="Search">
            <x-svg.icons.homepage.navbar.search class="search-icon" />
        </button>
    </div>
</form>