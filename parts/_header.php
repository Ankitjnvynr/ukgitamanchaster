<!-- <style>
    /* General Styles */
    body {
        margin: 0;
        padding: 0;
        padding-top: 4rem !important;
        font-family: Arial, sans-serif;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .menus {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 8%;
        background: linear-gradient(90deg, #5b1a20, #3b0f13);
        color: white;
        height: 4rem;
        width: 100vw;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }

    /* Logo Styling */
    .logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: white;
    }

    /* Menu Links */
    .menu-links {
        display: flex;
        gap: 1.5rem;
        position: relative;
    }

    .menu-links a,
    .mobile-nav a {
        text-decoration: none;
        color: white;
        font-weight: 400;
        font-size: 0.9rem;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .menu-links a:hover,
    .mobile-nav a:hover {
        color: #f39c12;
        transform: translateY(-2px);
    }

    /* Submenu Styles */
    .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: #3b0f13;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;
        z-index: 10;
        width: 150px;
        border-radius: 4px;
    }

    .has-submenu:hover .submenu {
        display: block;
    }

    .submenu a {
        padding: 0.5rem 1rem;
        display: block;
        white-space: nowrap;
    }

    /* Hamburger Menu (Mobile) */
    .hamburger {
        display: none;
        font-size: 2rem;
        cursor: pointer;
    }

    /* Mobile Navigation */
    .mobile-nav {
        display: none;
        flex-direction: column;
        background: #3b0f13;
        position: absolute;
        top: 4rem;
        left: 0;
        width: 100%;
        padding: 1rem;
    }

    .mobile-nav a {
        margin: 0.5rem 0;
        text-align: center;
        padding: 0.5rem;
        font-size: 1rem;
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
        .menu-links {
            display: none;
        }

        .hamburger {
            display: block;
        }

        .mobile-nav.active {
            display: flex;
        }
    }
</style>

<div class="menus">
    <div class="logo">
        <img height="50px" src="logo.png" alt="logo">
    </div>
    <div class="menu-links">
        <a href="./">Home</a>
        <a href="index.php#about">About</a>
        <div class="has-submenu">
            <a href="#">Seva</a>
            <div class="submenu">
                <a href="gau-seva.php">Gau Seva</a>
            </div>
        </div>
        <div class="has-submenu">
            <a href="#">Education</a>
            <div class="submenu">
                <a href="gau-seva.php">An Introduction to Bhagwat Gita</a>
            </div>
        </div>
        <a href="gallary.php">Gallery</a>
    </div>
    <div class="hamburger material-symbols-outlined" onclick="toggleMobileMenu()">menu</div>
    <div class="mobile-nav" id="mobileNav">
        <a href="./">Home</a>
        <a href="index.php#about">About</a>
        <a href="#">Seva</a>
        <a href="gau-seva.php">Gau Seva</a>
        <a href="gallary.php">Gallery</a>
    </div>
</div>

<script>
    function toggleMobileMenu() {
        const mobileNav = document.getElementById('mobileNav');
        mobileNav.classList.toggle('active');
    }
</script> -->
<style>
    .menu-bar {
        background: linear-gradient(90deg, #5b1a20, #3b0f13);
        font-size: medium;
    }

    .menu-bar a:hover {
        background: #3b0f13;
    }
    a{
        cursor: pointer;
    }
</style>

<div class="container-fluid menu-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid d-flex justify-content-between">
                <!-- Logo on the left -->
                <a class="navbar-brand" href="#"><img height="50px" src="logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Menu items aligned to the right -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href=" ./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">About</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Seva
                            </a>
                            <ul class="dropdown-menu menu-bar">
                                <li><a class="dropdown-item" href="gau-seva.php">Gau Seva</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Education
                            </a>
                            <ul class="dropdown-menu menu-bar">
                                <li><a class="dropdown-item" href="bhagwat-gita-course.php">An Introduction to Bhagwat Gita</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Events
                            </a>
                            <ul class="dropdown-menu menu-bar">
                                <li><a class="dropdown-item" href="diwali-cup.php">Diwali Cup</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="gallary.php">Gallary</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
