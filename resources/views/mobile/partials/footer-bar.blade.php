<div id="footer-bar" style="z-index: 1;" class="footer-bar-1 footer-bar-no-text footer-bar-detached">
    <a  href="{{ route('clients') }}"><i style="{{ request()->is("/clients") ? "color: #4a89dc!important;" : "" }}" class="bi bi-people-fill"></i></a>
    <a class="{{ request()->is("/") ? "color: #4a89dc!important;" : "" }}" href="index-pages.html"><i class="bi bi-heart-fill"></i></a>
    <a href="/" ><i style="{{ request()->is("/") ? "color: #4a89dc!important;" : "" }}" class="bi bi-house-fill"></i></a>
    <a class="{{ request()->is("/") ? "color: '#4a89dc!important'" : "" }}" href="index-search.html"><i class="bi bi-search"></i></a>
    <a class="{{ request()->is("/") ? "color: '#4a89dc!important'" : "" }}" href="#" data-menu="menu-settings"><i class="bi bi-gear-fill"></i></a>
</div>
