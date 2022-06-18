<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="#">Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url("home") ?>>Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url("create") ?>>create</a>
            <a class="nav-link" href=<?= base_url("edit") ?>>edit</a>
        </li>
        
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

</nav>