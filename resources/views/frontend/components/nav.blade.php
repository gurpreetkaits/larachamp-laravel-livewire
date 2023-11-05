
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <style>
                .dropDownCustomStyle{
                    border-radius: 12px;
                    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                }
                .dropdown-menu {
                    border: 0px solid !important;
                    margin: 5px;
                }
                .dropdown-menu:hover {
                    border: 0px solid !important;
                }
                .dropdown-item:hover{
                    background-color:transparent !important; 
                }
            </style>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto" id="frontend-nav-bar">
                    <li class="nav-item px-1 nav-listitem">
                        <a class="nav-link active" aria-current="page" href="/">Blogs</a>
                    </li>
                    @forelse (categories() as $category)
                    <li class="nav-item px-1 nav-listitem">
                        <a class="nav-link text-capitalize" aria-current="page" href="/category/{{$category->slug}}">{{($category->name)}}</a>
                    </li>
                    @empty
                        
                    @endforelse
                    <li class="nav-item px-1 nav-listitem">
                        <a class="nav-link" href="#">About Us</a>
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
