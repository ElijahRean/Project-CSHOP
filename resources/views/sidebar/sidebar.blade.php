    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_link close-btn">
                    <i class='bx bx-x nav_icon' id="header-toggle"></i>
                    <span class="nav_name"><i class="fa-solid fa-circle-right"></i></i>Shop by color:</span>
                </a>

                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name"><i class="fa-solid fa-circle" style="color: #f0a338;"></i>orange</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name"><i class="fa-solid fa-circle" style="color: #2474ff;"></i>blue</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name"><i class="fa-solid fa-circle" style="color: #ff0000;"></i>red</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name"><i class="fa-solid fa-circle" style="color: #2ccf17;"></i>green</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name"><i class="fa-solid fa-circle" style="color: #cc3dd6;"></i>pink</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name"></span>
                    </a>
                </div>
            </div>
            <a href="#" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
     </script>
    <script>
       document.addEventListener("DOMContentLoaded", function(event) {
    const toggle = document.getElementById('header-toggle');
    const closeSidebarBtn = document.querySelector('.close-btn'); // Sidebar close button
    const nav = document.getElementById('nav-bar');
    const bodypd = document.getElementById('body-pd');
    const headerpd = document.getElementById('header');

    // Function to toggle the sidebar and perform necessary actions
    function toggleSidebar() {
        nav.classList.toggle('show');
        toggle.classList.toggle('bx-x');
        bodypd.classList.toggle('body-pd');
        headerpd.classList.toggle('body-pd');


    if (nav.classList.contains('show')) {
            bodypd.style.paddingLeft = "0";
        } else {
            bodypd.style.paddingLeft = `calc(var(--nav-width) + 1rem)`;
        }
    }

    toggle.addEventListener('click', toggleSidebar);
    closeSidebarBtn.addEventListener('click', toggleSidebar);

    // Use the same toggle function for the sidebar close button
    closeSidebarBtn.addEventListener('click', toggleSidebar);

    const linkColor = document.querySelectorAll('.nav_link');
    linkColor.forEach(link => {
        link.addEventListener('click', function(e) {
            linkColor.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            e.preventDefault();
        });
    });

    const myLink = document.querySelectorAll('a[href="#"]');
    myLink.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
        });
    });
});
    </script>
