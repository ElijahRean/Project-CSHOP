
<div class="header-container">
    <div class="container text-center">
        <nav class="navbar fixed-top row align-items-start py-2 px-0">
            <div class="col py-2">
                <ul class="list-unstyled list-inline">
                    <li class="dropdown list-inline-item px-2">
                        <a href="#item1" class="text-dark text-uppercase">Item 1</a>
                        <ul class="dropdown-content list-unstyled">
                            <li><a href="#item1-sub1" class="text-dark text-uppercase">Submenu 1</a></li>
                            <li><a href="#item1-sub2" class="text-dark text-uppercase">Submenu 2</a></li>
                            <li><a href="#item1-sub3" class="text-dark text-uppercase">Submenu 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown list-inline-item px-2">
                        <a href="#item2" class="text-dark text-uppercase">Item 2</a>
                        <ul class="dropdown-content list-unstyled">
                            <li><a href="#item2-sub1" class="text-dark text-uppercase">Submenu 1</a></li>
                            <li><a href="#item2-sub2" class="text-dark text-uppercase">Submenu 2</a></li>
                            <li><a href="#item2-sub3" class="text-dark text-uppercase">Submenu 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown list-inline-item px-2">
                        <a href="#item3" class="text-dark text-uppercase">Item 3</a>
                        <ul class="dropdown-content list-unstyled">
                            <li><a href="#item3-sub1" class="text-dark text-uppercase">Submenu 1</a></li>
                            <li><a href="#item3-sub2" class="text-dark text-uppercase">Submenu 2</a></li>
                            <li><a href="#item3-sub3" class="text-dark text-uppercase">Submenu 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown list-inline-item px-2">
                        <a href="#item4" class="text-dark text-uppercase">Item 4</a>
                        <ul class="dropdown-content list-unstyled">
                            <li><a href="#item4-sub1" class="text-dark text-uppercase">Submenu 1</a></li>
                            <li><a href="#item4-sub2" class="text-dark text-uppercase">Submenu 2</a></li>
                            <li><a href="#item4-sub3" class="text-dark text-uppercase">Submenu 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col py-2">
                <a href="#home" class="text-dark text-uppercase font-weight-bold">Candy Shop Placeholder</a>
            </div>
            <div class="col py-2">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item px-2"><a href="#cart" class="text-dark text-uppercase">Cart</a></li>
                    <li class="list-inline-item px-2"><a href="#wishlist" class="text-dark text-uppercase">&#x2661;</a></li>
                    <li class="list-inline-item px-2"><a href="{{ route('login')}}" class="text-dark text-uppercase">Login</a></li>
                    <li class="list-inline-item px-2"><a href="#search" class="text-dark text-uppercase">&#x1F50E</i></a></li>
                    <li class="list-inline-item px-2"><a href="#menu" class="text-dark text-uppercase">Menu</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<section class="top-nav">
        <div>
            <a href="home">Candy Shop Placeholder</a>
        </div>

        <div class="right-size">
            <ul class="horizontal-menu">

                <li>
                    <div class="searchInputWrapper">
                        <input class="searchInput" type="text" placeholder='Search'>
                        </input>
                    </div>
                </li>
                <li><a href="#cart">Cart</a></li>
                <li><a href="#wishlist">&#x2661;</a></li>
                <li><a href="#login">Login</a></li>
            </ul>
        <input id="menu-toggle" type="checkbox" />
        <label class='menu-button-container' for="menu-toggle">
        <div class='menu-button'></div>
        </label>
        <ul class="menu">
            <li><a href="#item1">Item 1</a></li>
            <li><a href="#item2">Item 2</a></li>
            <li><a href="#item3">Item 3</a></li>
            <li><a href="#item4">Item 4</a></li>
            <li><a href="#item5">Item 5</a></li>
        </ul>
        </div>
    </section>
