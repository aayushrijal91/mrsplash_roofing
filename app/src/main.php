<header>
    <div class="container">
        <div class="row justify-content-center justify-content-md-between align-items-center">
            <div class="col-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-auto">
                <div class="fs-14 text-grey fw-500">We are currently <span class="text-black fw-700">open!</span></div>
                <div class="opening-status-wrapper fs-24 fw-500 text-grey"><span id="current-time"></span></div>
            </div>
            <div class="col-auto">
                <div class="text-grey fs-14 fw-500 pb-1">Featured in</div>
                <div><?= renderImg('localnewsplus.png', 'logo') ?></div>
            </div>
            <div class="col-auto">
                <div class="row justify-content-center justify-content-lg-end align-items-center">
                    <div class="col-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-light rounded-2 fw-600 text-primary py-3 px-3">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 6.96151H14.6078C14.6061 5.48498 14.0188 4.06939 12.9748 3.02532C11.9308 1.98125 10.5153 1.39396 9.03879 1.3923V0C10.8844 0.00202691 12.6538 0.736121 13.9589 2.04122C15.2639 3.34632 15.998 5.11583 16 6.96151Z" fill="#0383BF" />
                                <path d="M13.2155 6.96151H11.8233C11.8233 6.22299 11.5299 5.51472 11.0077 4.9925C10.4855 4.47029 9.77728 4.17691 9.03879 4.17691V2.78461C10.1462 2.78571 11.2079 3.22613 11.991 4.00921C12.774 4.7923 13.2144 5.85407 13.2155 6.96151Z" fill="#0383BF" />
                                <path d="M10.0983 10.074L8.47354 11.6752L4.32535 7.52679L5.92643 5.90197C6.02326 5.80347 6.08859 5.67839 6.11413 5.54265C6.13967 5.40691 6.12425 5.26664 6.06983 5.13969L4.40262 1.2482C4.33672 1.09475 4.21785 0.9701 4.06769 0.897C3.91754 0.8239 3.74611 0.80722 3.58468 0.850001L0.521749 1.65893C0.368717 1.69853 0.233719 1.78903 0.138957 1.91555C0.0441956 2.04207 -0.00468542 2.19708 0.000354074 2.35508C0.195155 5.91512 1.67532 9.28348 4.16594 11.8346C6.71774 14.3257 10.087 15.8057 13.6478 15.9996C13.8058 16.0047 13.9608 15.9558 14.0873 15.861C14.2138 15.7663 14.3043 15.6313 14.3439 15.4782L15.1528 12.4152C15.1956 12.2537 15.1789 12.0823 15.1058 11.9321C15.0327 11.782 14.9081 11.6631 14.7546 11.5972L10.8633 9.9299C10.736 9.87497 10.5951 9.85933 10.4588 9.88501C10.3225 9.91069 10.1969 9.9765 10.0983 10.074Z" fill="#0383BF" />
                            </svg>
                            <span class="ps-2"> <?= $phone_number ?></span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#form-quote" class="btn btn-primary rounded-2 fw-600 text-white py-3 px-3">
                            Get Free Quote
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#form" class="btn btn-tertiary rounded-2 fw-600 text-white py-3 px-3">
                            Book Online
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="banner">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-5">
                <h1 class="fs-72 text-white fw-700 lh-1">Mr Splash Roofing Sydney</h1>
                <div class="text-white fs-24 fw-400 py-4">Offering the best roofing service in Sydney</div>
                <div class="row pt-4">
                    <div class="col">
                        <div class="row align-items-center pb-4">
                            <div class="col-auto"><?= renderImg('no-call.png', 'icons') ?></div>
                            <div class="col">
                                <div class="fs-36 text-white fw-700 lh-1">No Call Out Fees*</div>
                                <div class="text-grey fs-18 lh-1">Terms & conditions may apply</div>
                            </div>
                        </div>
                        <div class="row align-items-center pt-3">
                            <div class="col-auto"><?= renderImg('always-open.png', 'icons') ?></div>
                            <div class="col">
                                <div class="fs-36 text-white fw-700 lh-1">Always Open 24/7</div>
                                <div class="text-grey fs-18 lh-1">We're always close & always open!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto"><?= renderImg('awards.png', 'lib') ?></div>
                </div>
            </div>
            <div class="col-4">
                <form class="form" id="form" action="./src/form" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                    <div class="title fs-36">
                        <?= renderImg('hanging-mrsplash.png', 'logo', 'form-mrsplash-logo') ?>
                        Get Your Quick Quote
                    </div>
                    <div class="main">
                        <div class="text-center fs-18 fw-700 text-dark pb-4">Simply complete our form below</div>
                        <div class="row gy-3">
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5C6.38071 5 7.5 3.88071 7.5 2.5C7.5 1.11929 6.38071 0 5 0C3.61929 0 2.5 1.11929 2.5 2.5C2.5 3.88071 3.61929 5 5 5Z" fill="#0383BF" />
                                                <path d="M5 6C4.34339 6 3.69321 6.12933 3.08658 6.3806C2.47995 6.63188 1.92876 7.00017 1.46447 7.46447C0.526784 8.40215 0 9.67392 0 11H10C10 9.67392 9.47322 8.40215 8.53553 7.46447C7.59785 6.52678 6.32608 6 5 6Z" fill="#0383BF" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Your Name" name="name" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.3141 7.80008L8.96137 6.75611C8.72864 6.65315 8.46845 6.62984 8.22113 6.68977C7.9738 6.7497 7.75315 6.88953 7.59337 7.0876L6.88312 7.97633C5.73213 7.24411 4.7559 6.26817 4.02337 5.11739L4.91137 4.4079C5.11013 4.24831 5.25055 4.02748 5.31078 3.7798C5.37101 3.53211 5.34766 3.27147 5.24437 3.03843L4.19962 0.685726C4.08863 0.435836 3.89254 0.233461 3.64627 0.114654C3.4 -0.00415286 3.11954 -0.0316757 2.85487 0.0369888L0.865876 0.553729C0.591471 0.625411 0.352885 0.795239 0.19531 1.03104C0.0377349 1.26685 -0.0278861 1.55226 0.0108769 1.8332C0.379213 4.39606 1.56784 6.77065 3.39877 8.60142C5.22971 10.4322 7.60443 11.6206 10.1674 11.9888C10.22 11.9962 10.2732 12 10.3264 12C10.5824 11.9998 10.8312 11.9148 11.0338 11.7582C11.2364 11.6016 11.3814 11.3823 11.4461 11.1345L11.9621 9.14481C12.0318 8.88022 12.0048 8.59947 11.886 8.35299C11.7672 8.10651 11.5645 7.91047 11.3141 7.80008Z" fill="#0383BF" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input class="form-control border-0 rounded-0 bg-white" type="tel" placeholder="Your Contact Number" name="phone" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.25 0H0.75C0.3 0 0 0.285714 0 0.714286V1.71429L6 4.92857L12 1.78571V0.714286C12 0.285714 11.7 0 11.25 0Z" fill="#0383BF" />
                                                <path d="M5.625 6.35714L0 3.35714V9.28571C0 9.71429 0.3 10 0.75 10H11.25C11.7 10 12 9.71429 12 9.28571V3.35714L6.375 6.35714C6.165 6.45714 5.835 6.45714 5.625 6.35714Z" fill="#0383BF" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input class="form-control border-0 rounded-0 bg-white" type="email" placeholder="Your Email Address" name="email" required>
                                </div>
                            </div>
                            <div class="col-12">
                            <button type="submit" class="btn btn-primary text-white form-control rounded-2 fw-18 fw-600">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 text-white justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>