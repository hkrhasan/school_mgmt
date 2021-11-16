<?php $this->view('includes/header'); ?>

<link rel="stylesheet" href="<?= ASSETS ?>/css/auth.style.css">

<title>Login</title>
</head>

<body>
    <main class="auth">
        <div class="auth__img"></div>
        <div class="auth__container">
            <div class="auth__form-wrapper">
                <h1 class="auth__title">Login</h1>
                <p class="auth__policy">
                    By continuing, you agree to our User Agreement and Privacy Policy.
                </p>
                <form method="post">
                    <div class="auth__input-wrapper">
                        <input type="text" value="<?= get_var('username') ?>" name="username" placeholder="Username" class="auth__input" autofocus>
                        <small class="auth__input-error"><?= isset($errors['username']) ? $errors['username'] : '' ?></small>
                    </div>
                    <div class="auth__input-wrapper">
                        <input type="password" value="<?= get_var('password') ?>" name="password" placeholder="Password" class="auth__input">
                        <small class="auth__input-error"><?= isset($errors['password']) ? $errors['password'] : '' ?></small>
                    </div>
                    <button class="auth__button">Sign In</button>
                </form>
                <small class="navigation_url">
                    New to KAKSHA? <a href="<?= ROOT ?>/signup">Sign up</a>
                </small>
            </div>
        </div>
    </main>

    <?php $this->view('includes/footer'); ?>