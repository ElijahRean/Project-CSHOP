
<div class="body-pd">

        <div class="header_toggle">
            <i class='bx bx-menu bx-x' id="header-toggle">IMG</i>

</div>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_link close-btn">
                    <i class='bx bx-x nav_icon'></i>
                    <span class="nav_name">IMG</span>
                </a>
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">Logo - Name</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">img - Text</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">img - Text</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">img - Text</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">img - Text</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">img - Text</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">img - Text</span>
                    </a>
                </div>
            </div>
            <a href="#" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            const toggle = document.getElementById('header-toggle');
            const nav = document.getElementById('nav-bar');
            const bodypd = document.getElementById('body-pd');
            const headerpd = document.getElementById('header');

            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('show');
                // change icon
                toggle.classList.toggle('bx-x');
                // add padding to body
                bodypd.classList.toggle('body-pd');
                // add padding to header
                headerpd.classList.toggle('body-pd');
            });

            const closeBtn = document.querySelector('.close-btn');
            closeBtn.addEventListener('click', () => {
                nav.classList.remove('show');
                toggle.classList.remove('bx-x');
                bodypd.classList.remove('body-pd');
                headerpd.classList.remove('body-pd');

            });

            const linkColor = document.querySelectorAll('.nav_link');
            linkColor.forEach(link => {
                link.addEventListener('click', function(e){
                    linkColor.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                    e.preventDefault();
                });
            });

            const myLink = document.querySelectorAll('a[href="#"]');
            myLink.forEach(link => {
                link.addEventListener('click', function(e){
                    e.preventDefault();
                });
            });
        });
    </script>
</div>

