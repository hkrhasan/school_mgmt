<link rel="stylesheet" href="<?= ASSETS ?>/css/navbar.style.css">
</head>

<body>

    <!-- ============== Header ================= -->
    <header class="header">
        <div class="header__container">
            <img src="<?= ASSETS ?>/img/profile.png" alt="" class="header__img" />

            <a href="<?= ROOT ?>" class="header__logo">KAKSHA</a>

            <div class="header__search">
                <input type="search" placeholder="Search" class="header__input" />
                <i class='bx bx-search header__icon'></i>
            </div>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>


    <!-- ============== Navbar ================= -->

    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo">
                    <i class='bx bx-book-reader nav__icon'></i>
                    <span class="nav__logo-name">KAKSHA</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Navigation</h3>

                        <a href="<?= ROOT ?>" class="nav__link <?= strtolower(get_class($this)) == 'home' ? 'active' : '' ?>">
                            <i class='bx bx-home nav__icon'></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="<?= ROOT ?>/profile" class="nav__link <?= strtolower(get_class($this)) == 'profile' ? 'active' : '' ?>">
                            <i class='bx bx-user nav__icon'></i>
                            <span class="nav__name">Profile</span>
                        </a>

                        <!-- <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">Profile</span>
                                <i class="bx bx-chevron-down nav__icon nav__dropdown-icon"></i>
                            </a>

                            <div class="nav__dropdown-collaps">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Password</a>
                                    <a href="#" class="nav__dropdown-item">Mail</a>
                                    <a href="#" class="nav__dropdown-item">Account</a>
                                </div>
                            </div>
                        </div> -->

                        <a href="<?= ROOT ?>" class="nav__link <?= strtolower(get_class($this)) == 'login' ? 'active' : '' ?>">
                            <i class='bx bx-message-rounded nav__icon'></i>
                            <span class="nav__name">Message</span>
                        </a>
                    </div>
                </div>
            </div>
            <a href="<?= ROOT ?>/logout" class="nav__link nav__logout">
                <i class='bx bx-log-out-circle nav__icon'></i>
                <span class="nav__logout-name">Logout</span>
            </a>
        </nav>
    </div>