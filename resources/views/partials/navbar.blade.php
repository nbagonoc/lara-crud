<nav class="navbar navbar-expand-md navbar-light bg-light border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Lara-Crud</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#theNavBar" aria-controls="theNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="theNavBar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('item.list')}}">
                        Items
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('item.create')}}">
                        Create
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>