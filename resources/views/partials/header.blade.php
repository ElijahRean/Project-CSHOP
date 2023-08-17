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
                    <li class="list-inline-item px-2"><a href="#login" class="text-dark text-uppercase">Login</a></li>
                    <li class="list-inline-item px-2"><a href="#search" class="text-dark text-uppercase">&#x1F50E</i></a></li>
                    <li class="list-inline-item px-2"><a href="#menu" class="text-dark text-uppercase">Menu</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>


<script>

const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menuItem");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
    if (menu.classList.contains("showMenu")) {
        menu.classList.remove("showMenu");
        closeIcon.style.display = "none";
        menuIcon.style.display = "block";
    } else {
        menu.classList.add("showMenu");
        closeIcon.style.display = "block";
        menuIcon.style.display = "none";
    }
}

hamburger.addEventListener("click", toggleMenu);

menuItems.forEach(
    function(menuItem) {
    menuItem.addEventListener("click", toggleMenu);
    }
)

</script>
