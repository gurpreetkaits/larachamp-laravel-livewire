
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto" id="frontend-nav-bar">
                    <li class="nav-item px-1 nav-listitem">
                        <a class="nav-link @if(request()->routeIs('about.index')) active @endif" href="/about" wire:navigate>About Us</a>
                    </li>
                    <li class="nav-item px-1 nav-listitem">
                        <a class="nav-link @if(request()->routeIs('blogs') || request()->routeIs('post.show')) active @endif" aria-current="page" wire:navigate href="{{route('blogs')}}">Blogs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
{{-- <li class="nav-item dropdown px-1 nav-listitem">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        Categories
    </a>
    <ul class="dropdown-menu my-2 dropDownCustomStyle" aria-labelledby="navbarDropdown">
        <li class="nav-listitem mx-2 px-2"><a class="dropdown-item" href="#">Action</a></li>
        <li class="nav-listitem mx-2 px-2"><a class="dropdown-item" href="#">Another action</a></li>
    </ul>
</li> --}}
