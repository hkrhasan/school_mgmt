<?php $this->view('includes/header'); ?>


<link rel="stylesheet" href="<?= ROOT ?>/assets/css/auth.style.css">

</head>

<body>
    <main class="auth">
        <div class="auth__img"></div>
        <div class="auth__container">
            <div class="auth__form-wrapper">
                <h1 class="auth__title">Sign Up</h1>
                <p class="auth__policy">
                    By continuing, you agree to our User Agreement and Privacy Policy.
                </p>
                <form>
                    <div class="auth__input-wrapper-checkbox">
                        <input type="checkbox" name="authlink" class="auth__input-check" id="agreement">
                        <label for="agreement" class="auth__label-check">
                            I agree to the <a href="#" class="auth__link">User Agreement</a> and <a href="#" class="auth__link">Privacy Policy</a>
                        </label>
                    </div>
                    <div class="auth__input-wrapper">
                        <input type="text" name="authlink" placeholder="Email or Phone" class="auth__input" autofocus>
                        <small class="auth__input-error"></small>
                    </div>
                    <div class="auth__input-wrapper">
                        <input type="text" name="username" placeholder="Username" class="auth__input">
                        <small class="auth__input-error"></small>
                    </div>
                    <div class="auth__input-wrapper">
                        <input type="password" name="password" placeholder="Password" class="auth__input">
                        <small class="auth__input-error"></small>
                    </div>
                    <button class="auth__button">Sign Up</button>
                </form>
                <small class="navigation_url">
                    New to KAKSHA? <a href="<?= ROOT ?>/login">Sign In</a>
                </small>
            </div>
        </div>
    </main>
    <?php $this->view('includes/footer'); ?>