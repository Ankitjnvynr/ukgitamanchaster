
<style>
    .menu-bar {
        background: linear-gradient(90deg, #5b1a20, #3b0f13);
        font-size: medium;
    }

    .menu-bar a:hover , .nav-item a:hover {
        background: #3b0f13;
        color: #ffcc00 !important;
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
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img width="20px" src="hamburger.png" alt="">
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
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://parivaar.gieogita.org/">Join GIEO Gita</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Seva
                            </a>
                            <ul class="dropdown-menu menu-bar">
                                <li><a class="dropdown-item text-white" href="gau-seva.php">Gau Seva</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Education
                            </a>
                            <ul class="dropdown-menu menu-bar">
                                <li><a class="dropdown-item" href="bhagwat-gita-course.php">An Introduction to Bhagwat Gita</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Events
                            </a>
                           <ul class="dropdown-menu menu-bar">
                                <li><a class="dropdown-item" href="diwali-cup.php">Diwali Cup</a></li>
                                <li><a class="dropdown-item" href="manchester-gita-festival-2024">Manchester Gita Festival-2024</a></li>
                                <li><a class="dropdown-item" href="manchester-gita-festival-2025">Manchester Gita Festival-2025</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="gallery.php">Gallery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
