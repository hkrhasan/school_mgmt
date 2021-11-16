<?php $this->view('includes/header'); ?>

<link rel="stylesheet" href="<?= ASSETS ?>/css/auth.style.css">
<title>Sign Up</title>
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
                <form method="post">
                    <div class="auth__input-wrapper-checkbox">
                        <input type="checkbox" <?= get_var('agree') ? "checked" : '' ?> name="agree" class="auth__input-check" id="agreement">
                        <label for="agreement" class="auth__label-check <?= isset($errors['agree']) ? 'auth__input-error' : '' ?>">
                            I agree to the <a href="#" class="auth__link">User Agreement</a> and <a href="#" class="auth__link">Privacy Policy</a>
                        </label>
                    </div>
                    <div class="auth__input-wrapper">
                        <input type="text" value="<?= get_var('email') ?>" name="email" placeholder="Email or Phone" class="auth__input" autofocus>
                        <small class="auth__input-error"><?= isset($errors['email']) ? $errors['email'] : '' ?></small>
                    </div>
                    <div class="auth__input-wrapper">
                        <input type="text" value="<?= get_var('username') ?>" name="username" placeholder="Username" class="auth__input">
                        <small class="auth__input-error"><?= isset($errors['username']) ? $errors['username'] : '' ?></small>
                    </div>
                    <div class="auth__input-wrapper">
                        <input type="password" value="<?= get_var('password') ?>" name="password" placeholder="Password" class="auth__input">
                        <small class="auth__input-error"><?= isset($errors['password']) ? $errors['password'] : '' ?></small>
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