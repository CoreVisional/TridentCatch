<div class="header__nav-search-container header__flex">
    <form class="header__nav-search-wrapper header__flex" action="" method="POST" role="search">
        @csrf
        <div class="header__nav-search-bar">
            <input type="search" class="search-term" placeholder="Search for products..." aria-label="Search" />
            <button type="submit" class="header__nav-search-btn" aria-label="Search">
                <x-svg.icons.homepage.navbar.search class="search-icon" />
            </button>
        </div>
    </form>
</div>