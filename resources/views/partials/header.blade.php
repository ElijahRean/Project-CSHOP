<header>
    <div class="background"></div>
    <div class="logoSection">
        <img src="{{url('/images/shopLogo.svg')}}" class="filterLogo"/>
        <div class="socialMedia icons">
        <a href="#"><i class="fa-brands fa-x-twitter fa-xl"></i></a>
        <a href="#"><i class="fa-brands fa-instagram fa-xl"></i></a>
        <a href="#"><i class="fa-brands fa-facebook fa-xl"></i></a>
        <a href="#"><i class="fa-solid fa-circle-radiation fa-xl" id="theme-toggle"></i></a>
        </div>
    </div>
    <nav class="top-nav">
        <label for="menu">
            <i class="fa fa-bars"></i>
        </label>
        <input type="checkbox" id="menu">
        <ul class="menu">
                <li class="has-submenu">
                    <a href="#">Catalogue</a>
                    <label title="toggle menu" for="about">
                        <i class="arrow fa fa-caret-down"></i>
                    </label>
                    <input type="checkbox" id="about">
                    <ul class="submenu">
                        <li><a href="#">Chocolates</a></li>
                        <li><a href="#">Caramel candies</a></li>
                        <li><a href="#">Weird candies</a></li>
                    </ul>
                </li>
                <li class=""><a href=#>Item 2</a></li>
                <li class=""><a href=#>Item 3</a></li>

            </ul>
            <div class="rightSide">
            <input type="text" placeholder="hunt for sugar..">
                <div class="icons">
                    <i class="fas fa-shopping-cart" style="color: #fff;"></i>


                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" title="Logout" class="btn btn-link">
                                <i class="fas fa-user" style="color: #fff;"></i>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" title="Login"><i class="fas fa-user" style="color: #fff;"></i></a>
                    @endauth

                </div>
            </div>
    </nav>
</header>

