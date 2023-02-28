<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">

    <div class="full-width-wrap sticky">
        <div class="container">

            <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>

            <header id="masthead" class="site-header">
                <div class="col">
                    <div class="col-1">
                        <div class="site-branding">
                            <div class="custom-logo">
                                
                                <img src="/storage/img/2023/02/okbet-big.webp" class="" title="" alt="" width="79.2px" height="32px">
                            </div>
                                                    </div>
                    </div>
                    <!-- .site-branding -->

                    <div class="col-9">
                        <nav id="site-navigation" class="main-navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Primary Menu</button>

                            <div class="menu-main-menu-container">
                                <ul id="primary-menu" class="menu nav-menu">
                                    <li id="menu-item-18" class="home menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-18">
                                        <a href="/" aria-current="page"><img src="/storage/img/2023/02/akar-icons_home.png" title="Home" alt="Home"> Home</a>
                                    </li>
                                    
                                    <li id="menu-item-17" class="sports-news menu-item menu-item-type-post_type menu-item-object-page menu-item-17">
                                        <a href="/sports-news/"><img src="/storage/img/2023/02/ant-design_trophy-outlined.png" title="Sports News" alt="Sports News"> Sports News</a>
                                    </li>
                                    
                                    <li id="menu-item-16" class="bookmark menu-item menu-item-type-post_type menu-item-object-page menu-item-16">
                                        <a href="/bookmark/"><img src="/storage/img/2023/02/material-symbols_bookmark-1.png" title="Bookmark" alt="Bookmark"> Bookmark</a>
                                    </li>
                                </ul>
                            </div>

                        </nav><!-- #site-navigation -->
                        
                        <div class="menu-main-menu-container collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">

                                @foreach ($navbars as $navbarItem)

                                    <li class="nav-item">

                                        <a class="nav-link" href="{{ route($navbarItem->route) }}">{{ $navbarItem->name }}</a>

                                    </li>

                                @endforeach

                            </ul>
                        </div>

                        <div class="search">
                            <input type="text" name="search" value="" class="search-field" placeholder="Search">
                            <img src="/storage/img/2023/02/material-symbols_search.png" class="search-icon" title="Search" alt="Search">
                        </div>
                    </div>
                    
                    <div class="col-2">
                        <div class="account">
                            
                            <div class="inline circle">
                                <img src="/storage/img/2023/02/Profile.png" title="profile" alt="profile"> 
                            </div>

                            <div class="inline profile">
                            </div>
                            <!--
                            <ul>
                                <li>Edit Profile</li>
                            </ul>
                            -->

                        </div>
                    </div>
                </div>
            </header><!-- #masthead -->
            
        </div>
    </div>
    <div id="app">

        <main class="py-4">

            @yield('content')

        </main>

    </div>

    </body>
</html>
