<!--
- #HEADER
-->

<header class="header" data-header>
    <div class="container">
        <h1>
            <a href="/" class="logo">Food<span class="span">Fusion</span>.</a>
        </h1>

        <nav class="navbar" data-navbar>
            <ul class="navbar-list">
                <li class="nav-item">
                    <a href="/" class="<?= isUrl('/') ? 'active' : '' ?> navbar-link" data-nav-link>Home</a>
                </li>

                <li class="nav-item">
                    <a href="/about" class="<?= isUrl('/about') ? 'active' : '' ?> navbar-link" data-nav-link>About Us</a>
                </li>

                <li class="nav-item">
                    <a href="/recipes" class="<?= isUrl('/recipes') ? 'active' : '' ?> navbar-link" data-nav-link>Recipe</a>
                </li>

                <li class="nav-item">
                    <a href="/cookbook" class="<?= isUrl('/cookbook') ? 'active' : '' ?> navbar-link" data-nav-link>Cookbook</a>
                </li>

                <li class="nav-item">
                    <a href="/contact" class="<?= isUrl('/contact') ? 'active' : '' ?> navbar-link" data-nav-link>Contact Us</a>
                </li>

                <li class="nav-item">
                    <a href="/culinary" class="<?= isUrl('/culinary') ? 'active' : '' ?> navbar-link" data-nav-link>Culinary</a>
                </li>

                <li class="nav-item">
                    <a href="/educational" class="<?= isUrl('/educational') ? 'active' : '' ?> navbar-link" data-nav-link>Educational</a>
                </li>
            </ul>
        </nav>

        <div class="header-btn-group">
            <button class="search-btn" aria-label="Search" data-search-btn>
                <ion-icon name="search-outline"></ion-icon>
            </button>

            <button class="btn btn-hover" id="openModalBtn">Join Us</button>

            <button
                class="nav-toggle-btn"
                aria-label="Toggle Menu"
                data-menu-toggle-btn
            >
                <span class="line top"></span>
                <span class="line middle"></span>
                <span class="line bottom"></span>
            </button>
        </div>
    </div>
</header>
