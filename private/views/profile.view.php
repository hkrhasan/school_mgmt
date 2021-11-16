<?php
$this->view('includes/header');
$this->view('includes/navbar');
?>


<main class="profile">
    <div class="grid profile__container">
        <div>
            <div class="profile__card">
                <div class="card__container">
                    <div class="card__image">
                        <img src="<?= ROOT ?>/assets/img/profile.png" alt="">
                    </div>
                    <div class="card__info">
                        <h2 class="card__title"><?= Auth::getUsername() ?></h2>
                        <p class="card__description"><?= Auth::getUsername() ?> is a Professional IT Trainer at Indian INDIAN INSTITTUTE OF COMPUTER SCIENCE. He is a Fullstack Developer and Cyber Security Expert.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid profile__data">
            <div class="grid profile__data-column">
                <div class="grid profile__data-row">
                    <div class="main__heading flex">
                        <i class='bx bxs-user icon'></i>
                        <h3 class="row__title">Person Information</h3>
                    </div>
                </div>
                <hr />
                <div class="grid profile__data-row">
                    <div class="normal__heading">Username</div>
                    <div class="heading__value">@<?= Auth::getUsername() ?></div>
                    <i class='bx bxs-chevron-right icon'></i>
                </div>
                <hr />
                <div class="grid profile__data-row">
                    <div class="normal__heading">Email</div>
                    <div class="heading__value"><?= Auth::getEmail() ?></div>
                    <i class='bx bxs-chevron-right icon'></i>
                </div>
                <hr />
                <div class="grid profile__data-row">
                    <div class="normal__heading">Address</div>
                    <div class="heading__value">India</div>
                    <i class='bx bxs-chevron-right icon'></i>
                </div>
                <hr />
                <div class="grid profile__data-row">
                    <div class="normal__heading">Phone</div>
                    <div class="heading__value">-</div>
                    <i class='bx bxs-chevron-right icon'></i>
                </div>
            </div>

            <div class="grid profile__data-column">
                <div class="grid profile__data-row">
                    <div class="main__heading flex">
                        <i class='bx bxs-lock icon'></i>
                        <h3 class="row__title">Login Settings</h3>
                    </div>
                </div>
                <hr />
                <div class="grid profile__data-row">
                    <div class="normal__heading">Change Password</div>
                    <div class="heading__value">*********</div>
                    <i class='bx bxs-chevron-right icon'></i>
                </div>
            </div>
        </div>
    </div>
</main>



<?php $this->view('includes/footer'); ?>