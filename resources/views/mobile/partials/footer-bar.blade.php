<div id="footer-bar" class="footer-bar-1 pb-2 footer-bar-no-text footer-bar-detached">
    <a class="{{ request()->is('/clients') ? "active-nav" : "" }}" href="{{ route('clients') }}"><i class="bi bi-people-fill"></i></a>
    <a class="{{ request()->is() ? "active-nav" : "" }}" href="index-pages.html"><i class="bi bi-heart-fill"></i></a>
    <a class="{{ request()->is('/') ? "active-nav" : "" }}" href="{{ route('home') }}"><i class="bi bi-house-fill"></i></a>
    <a class="{{ request()->is() ? "active-nav" : "" }}" href="index-search.html"><i class="bi bi-search"></i></a>
    <a class="{{ request()->is() ? "active-nav" : "" }}" href="#" data-menu="menu-settings"><i class="bi bi-gear-fill"></i></a>
</div>
