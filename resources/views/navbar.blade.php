<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #00763A;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset ('asset/img/bannerpasantren.jpg')}}" alt="Bootstrap" width="150" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-light" href="{{ route('paud') }}">PAUD</a>
                <a class="nav-link text-light" href="{{ route('mdta') }}">MDTA</a>
                <a class="nav-link text-light" href="{{ route('smp') }}">SMP</a>
                <a class="nav-link text-light" href="{{ route('ponpes') }}">PONPES</a>
                <a class="nav-link text-light" href="{{ route('campaign.show') }}">Donasi Online</a>
                <a class="nav-link text-light" href="{{ route('berita.show') }}">Daily News</a>
                <a class="nav-link text-light" href="{{ route('gallery.show')}}">Gallery</a>
                <a class="nav-link text-light" href="{{ route('ppdb.create')}}">PPDB</a>
            </div>
        </div>
    </div>
</nav>