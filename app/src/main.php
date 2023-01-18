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
                        <a href="#form" class="btn btn-primary rounded-2 fw-600 text-white py-3 px-3">
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

<section class="bg-primary text-center text-white fs-24 fw-700 pt-5 pb-6">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <?= renderImg('roofing.png', 'lib') ?>
                <div>Plumbing & Metal Roofing</div>
            </div>
            <div class="col-3">
                <?= renderImg('reroofing.png', 'lib') ?>
                <div>Reroofing</div>
            </div>
            <div class="col-3">
                <?= renderImg('restoration.png', 'lib') ?>
                <div>Cleaning & Restoration</div>
            </div>
            <div class="col-3">
                <?= renderImg('roof-repairs.png', 'lib') ?>
                <div>Roof Repairs</div>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="fs-72 lh-1 fw-700 text-primary">Is it time for a roof renovation?</div>
                <div class="py-5 text-dark fs-36 fw-800 lh-1">
                    Yes! We are the right team for your roof renovation project!
                </div>
                <div class="fs-18 lh-1_67 text-grey">
                    <p class="pb-4">Welcome to Roof Renovations (Suburb) by Mr Splash, your Sydney wide Roof Renovation Company (Suburb) & General Plumbing Company (Suburb). We pride ourselves on our eccentric workmanship and company process. We have been established since 2010 and have always been a company with pride and love for our clients.</p>
                    <p class="pb-4">Roof Renovations(Suburb) have been an in demand service offered by Mr Splash since 2010 with to date over 3600 Bathrooms Renovated. The growth of our renovation division has come via our unparalleled designs and workmanship. We are truly the right company to choose for your next Roof Renovation project. Roof renovations are a highly emotional project that requires a company that not only has the creative capabilities but also the experience to know the latest styles and trends that complete a finished roof.</p>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <a href="#form" class="btn btn-tertiary rounded-2 fw-600 text-white py-2 px-6 px-xxl-7">
                            Get Your Free 60<br> Second Quote Now!
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="tel: <?= $phone_number ?>" class="btn btn-primary rounded-2 fw-600 text-white py-3 px-5 px-xxl-6">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.291 8.95189H18.5507C18.5486 7.10622 17.8146 5.33674 16.5095 4.03165C15.2045 2.72656 13.4351 1.99245 11.5895 1.99038V0.25C13.8965 0.252534 16.1083 1.17015 17.7396 2.80152C19.3709 4.4329 20.2885 6.64478 20.291 8.95189Z" fill="white" />
                                <path d="M16.8104 8.95189H15.0701C15.0701 8.02874 14.7034 7.14339 14.0507 6.49062C13.3979 5.83786 12.5126 5.47114 11.5895 5.47114V3.73076C12.9737 3.73214 14.3009 4.28267 15.2797 5.26152C16.2585 6.24037 16.809 7.56758 16.8104 8.95189Z" fill="white" />
                                <path d="M12.9139 12.8425L10.8829 14.8439L5.69771 9.65849L7.69906 7.62746C7.82009 7.50434 7.90176 7.34799 7.93368 7.17831C7.9656 7.00864 7.94632 6.8333 7.87831 6.67461L5.79429 1.81025C5.71191 1.61843 5.56332 1.46262 5.37563 1.37125C5.18794 1.27988 4.97365 1.25902 4.77187 1.3125L0.943201 2.32366C0.751912 2.37316 0.583164 2.48629 0.464712 2.64444C0.34626 2.80259 0.285159 2.99635 0.291458 3.19385C0.53496 7.6439 2.38516 11.8543 5.49844 15.0432C8.68819 18.1571 12.8998 20.0071 17.3508 20.2496C17.5483 20.2559 17.742 20.1948 17.9002 20.0763C18.0583 19.9578 18.1714 19.7891 18.2209 19.5978L19.232 15.769C19.2855 15.5672 19.2647 15.3529 19.1733 15.1652C19.0819 14.9775 18.9261 14.8289 18.7343 14.7465L13.8702 12.6624C13.711 12.5937 13.5349 12.5742 13.3645 12.6063C13.1941 12.6384 13.0372 12.7206 12.9139 12.8425Z" fill="white" />
                            </svg>
                            <span class="ps-2">Call Now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <div class="container-fluid px-0">
        <div class="row gx-0">
            <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d424141.46927053836!2d150.9319747!3d-33.84829!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb76d7432f2895b1a!2sMr%20Splash%20Plumbing!5e0!3m2!1sen!2sau!4v1634777900494!5m2!1sen!2sau" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            <div class="col-md-6">
                <div class="map-description">
                    <div class="fs-72 fw-700 lh-1 pb-3">Mr Splash Roof Renovations Sydney:</div>
                    <div class="fs-18 lh-1_67 text-secondary pt-4">We can renovate and expand on any roof. Our team will walk you through the project and what your imagination of your new roof will look like. Advice and guidance is the most valuable asset when it comes to going through any type of roof renovation (Suburb) and we are a company that understands this. So if you’re in the market and looking for the best Bathroom Renovation company then let us demonstrate our process.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="fs-72 fw-700 text-primary text-center lh-1 pb-5">Mr Splash Roofing Services</div>
        <div class="row pt-2">
            <div class="col-4">
                <div class="service bg-secondary">
                    <div class="main">
                        <div class="fs-36 lh-1 fw-700">Reroofing &amp;<br> New Roofs</div>
                        <div class="fs-18 fw-300 lh-1 pt-2">We'll be at your door within the hour</div>
                    </div>
                    <?= renderImg('service-1.png', 'lib', 'w-100') ?>
                </div>
            </div>
            <div class="col-4">
                <div class="service bg-primary">
                    <div class="main">
                        <div class="fs-36 lh-1 fw-700">Roof Repair &amp;<br> Leak Detection</div>
                        <div class="fs-18 fw-300 lh-1 pt-2">No extra or hidden fees for extended time</div>
                    </div>
                    <?= renderImg('service-1.png', 'lib', 'w-100') ?>
                </div>
            </div>
            <div class="col-4">
                <div class="service bg-tertiary">
                    <div class="main">
                        <div class="fs-36 lh-1 fw-700">Roof Cleaning &amp;<br> Restoration</div>
                        <div class="fs-18 fw-300 lh-1 pt-2">Teams all over Sydney to assist you 24/7</div>
                    </div>
                    <?= renderImg('service-1.png', 'lib', 'w-100') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-us">
    <div class="container">
        <div class="text-white fs-72 lh-1 fw-700 text-center">WHY Should I use<br> Mr Splash <span class="text-primary">Roofing Sydney?</span></div>
        <div class="text-grey fs-18 text-center py-5">Other than the list below, let us explain why the Roof Renovation (Suburb) is were it is today since 1990 we have seen an influx quick & cheap style workmanship by contractor style companies that promise the world and provide you a Roof Renovation that looks great for the first 3 months, this is because these companies and contractors are not Licensed Roofers, they do not hold pride & workmanship at a high level, like how we do at Mr Splash Roofing, tilling is not the essential component to a Roof Renovation it's what lies below the TILE, Waterproofing last when a Roofer does it, Roofs don’t leak when a Roofer does it.</div>
        <div class="row fs-24 align-items-center">
            <div class="col-4">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="reasons">
                            We are a licensed<br> Plumbing Company
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            Our Insurances are the<br> best in the Industry
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            We have Lifetime<br> Warranty
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons py-3">
                            Free Lifetime Membership Plans with every Roof Job Sydney
                            <div class="fs-14 text-grey fw-300 pt-2">www.mrsplashplumbing.com.au/membership</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            We Consult & give<br> Practical Advice
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4"><?= renderImg('why-us.jpg', 'lib', 'h-100') ?></div>
            <div class="col-4">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="reasons">
                            Family Owned Since 2010
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            We DO NOT use<br> Contractors
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            Best Plumbing Company<br> Award Winner since 2017
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons py-3">
                            We know Design &<br> Roofing Design
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            We have nothing but<br> 5-star Reviews
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center fs-18 lh-1_67 text-grey pt-6">We <span class="text-white fw-500">BUILD ROOFS THAT LAST A LIFETIME</span>, you are more than likely Renovating your rood right now because of simply POOR workmanship your roof would be discoloured, experiencing cracks, visible mould elements inside the home due to leakage, a bad smell, black spots in the ceiling. This is the result of poor choices and not using a company like Mr Splash Plumbing & Roofing Renovations your licenced local Plumbing Company</div>
    </div>
</section>

<section class="form2">
    <div class="container">
        <?= renderImg('main-form.png', 'lib', 'w-100') ?>

        <form class="form" id="form2" action="./src/form" method="POST">
            <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
            <div class="main">
                <div class="fs-72 lh-1 fw-700 text-center pb-6">Book Your <span class="text-primary text-uppercase">Free</span> Onsite Consultation</div>
                <div class="row gy-4">
                    <div class="col-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="firstName">What is your first name?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5C6.38071 5 7.5 3.88071 7.5 2.5C7.5 1.11929 6.38071 0 5 0C3.61929 0 2.5 1.11929 2.5 2.5C2.5 3.88071 3.61929 5 5 5Z" fill="#0383BF" />
                                        <path d="M5 6C4.34339 6 3.69321 6.12933 3.08658 6.3806C2.47995 6.63188 1.92876 7.00017 1.46447 7.46447C0.526784 8.40215 0 9.67392 0 11H10C10 9.67392 9.47322 8.40215 8.53553 7.46447C7.59785 6.52678 6.32608 6 5 6Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="firstName" class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Eg: John" name="firstName" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="lastName">What is your last name?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5C6.38071 5 7.5 3.88071 7.5 2.5C7.5 1.11929 6.38071 0 5 0C3.61929 0 2.5 1.11929 2.5 2.5C2.5 3.88071 3.61929 5 5 5Z" fill="#0383BF" />
                                        <path d="M5 6C4.34339 6 3.69321 6.12933 3.08658 6.3806C2.47995 6.63188 1.92876 7.00017 1.46447 7.46447C0.526784 8.40215 0 9.67392 0 11H10C10 9.67392 9.47322 8.40215 8.53553 7.46447C7.59785 6.52678 6.32608 6 5 6Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="lastName" class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Eg: Doe" name="lastName" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="phoneNumber">What is your contact number?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5C6.38071 5 7.5 3.88071 7.5 2.5C7.5 1.11929 6.38071 0 5 0C3.61929 0 2.5 1.11929 2.5 2.5C2.5 3.88071 3.61929 5 5 5Z" fill="#0383BF" />
                                        <path d="M5 6C4.34339 6 3.69321 6.12933 3.08658 6.3806C2.47995 6.63188 1.92876 7.00017 1.46447 7.46447C0.526784 8.40215 0 9.67392 0 11H10C10 9.67392 9.47322 8.40215 8.53553 7.46447C7.59785 6.52678 6.32608 6 5 6Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="phoneNumber" class="form-control border-0 rounded-0 bg-white" type="tel" placeholder="Eg: 0400 000 000" name="phone" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="emailAddress">What is your email address?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5C6.38071 5 7.5 3.88071 7.5 2.5C7.5 1.11929 6.38071 0 5 0C3.61929 0 2.5 1.11929 2.5 2.5C2.5 3.88071 3.61929 5 5 5Z" fill="#0383BF" />
                                        <path d="M5 6C4.34339 6 3.69321 6.12933 3.08658 6.3806C2.47995 6.63188 1.92876 7.00017 1.46447 7.46447C0.526784 8.40215 0 9.67392 0 11H10C10 9.67392 9.47322 8.40215 8.53553 7.46447C7.59785 6.52678 6.32608 6 5 6Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="emailAddress" class="form-control border-0 rounded-0 bg-white" type="email" placeholder="Eg: email@example.com" name="email" required>
                        </div>
                    </div>
                    <div class="col-12 col-xxl-9">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="typeOfRoof">Type of roof:</label>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof1" checked>
                                    <label class="form-check-label w-100" for="typeOfRoof1">
                                        <div class="d-flex justify-content-between">
                                            <div>Gable</div>
                                            <div><?= renderImg('gable.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof2">
                                    <label class="form-check-label w-100" for="typeOfRoof2">
                                        <div class="d-flex justify-content-between">
                                            <div>Shed</div>
                                            <div><?= renderImg('shed.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof3">
                                    <label class="form-check-label w-100" for="typeOfRoof3">
                                        <div class="d-flex justify-content-between">
                                            <div>Hip</div>
                                            <div><?= renderImg('hip.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof4">
                                    <label class="form-check-label w-100" for="typeOfRoof4">
                                        <div class="d-flex justify-content-between">
                                            <div>Butterfly</div>
                                            <div><?= renderImg('butterfly.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof5">
                                    <label class="form-check-label w-100" for="typeOfRoof5">
                                        <div class="d-flex justify-content-between">
                                            <div>Dutch</div>
                                            <div><?= renderImg('dutch.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof6">
                                    <label class="form-check-label w-100" for="typeOfRoof6">
                                        <div class="d-flex justify-content-between">
                                            <div>Gambrel</div>
                                            <div><?= renderImg('gambrel.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof7">
                                    <label class="form-check-label w-100" for="typeOfRoof7">
                                        <div class="d-flex justify-content-between">
                                            <div>Mansard</div>
                                            <div><?= renderImg('mansard.png', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof8">
                                    <label class="form-check-label w-100" for="typeOfRoof8">
                                        <div class="d-flex justify-content-between">
                                            <div>Dormer</div>
                                            <div><?= renderImg('dormer.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof9">
                                    <label class="form-check-label w-100" for="typeOfRoof9">
                                        <div class="d-flex justify-content-between">
                                            <div>Flat</div>
                                            <div><?= renderImg('flat.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof10">
                                    <label class="form-check-label w-100" for="typeOfRoof10">
                                        <div class="d-flex justify-content-between">
                                            <div>M Shaped</div>
                                            <div><?= renderImg('mshaped.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="budget">Do You Have Budget?</label>
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="budget" id="budget1" value="Yes">
                                    <label class="form-check-label" for="budget1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="budget" id="budget2" value="No">
                                    <label class="form-check-label" for="budget2">No</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Budget Amount" name="budgetAmount" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="streetAddress">What is your street address?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.297852C6.41775 0.297852 4.87103 0.767043 3.55544 1.64609C2.23985 2.52515 1.21447 3.77457 0.608967 5.23638C0.00346627 6.69819 -0.15496 8.30672 0.153721 9.85857C0.462403 11.4104 1.22433 12.8359 2.34315 13.9547C3.46197 15.0735 4.88743 15.8354 6.43928 16.1441C7.99113 16.4528 9.59966 16.2944 11.0615 15.6889C12.5233 15.0834 13.7727 14.058 14.6518 12.7424C15.5308 11.4268 16 9.8801 16 8.29785C15.9975 6.17687 15.1539 4.14347 13.6541 2.64371C12.1544 1.14395 10.121 0.30031 8 0.297852ZM11.8111 11.0439C11.7781 11.0835 11.7339 11.1122 11.6844 11.1265C11.6349 11.1408 11.5822 11.1399 11.5332 11.1239L8 9.97682L4.46684 11.1239C4.41784 11.1398 4.3652 11.1406 4.31571 11.1264C4.26621 11.1121 4.22213 11.0833 4.18913 11.0438C4.15612 11.0042 4.13571 10.9557 4.13052 10.9044C4.12533 10.8532 4.1356 10.8015 4.16 10.7562L7.7729 4.0465C7.79708 4.00811 7.83059 3.97648 7.8703 3.95456C7.91002 3.93264 7.95464 3.92114 8 3.92114C8.04536 3.92114 8.08998 3.93264 8.1297 3.95456C8.16941 3.97648 8.20292 4.00811 8.2271 4.0465L11.84 10.7562C11.8645 10.8015 11.8748 10.8532 11.8696 10.9045C11.8645 10.9558 11.8441 11.0043 11.8111 11.0439Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="streetAddress" class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Eg: 123 Name Street, Suburb" name="streetAddress" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="postcode">What is your postcode?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.297852C6.41775 0.297852 4.87103 0.767043 3.55544 1.64609C2.23985 2.52515 1.21447 3.77457 0.608967 5.23638C0.00346627 6.69819 -0.15496 8.30672 0.153721 9.85857C0.462403 11.4104 1.22433 12.8359 2.34315 13.9547C3.46197 15.0735 4.88743 15.8354 6.43928 16.1441C7.99113 16.4528 9.59966 16.2944 11.0615 15.6889C12.5233 15.0834 13.7727 14.058 14.6518 12.7424C15.5308 11.4268 16 9.8801 16 8.29785C15.9975 6.17687 15.1539 4.14347 13.6541 2.64371C12.1544 1.14395 10.121 0.30031 8 0.297852ZM11.8111 11.0439C11.7781 11.0835 11.7339 11.1122 11.6844 11.1265C11.6349 11.1408 11.5822 11.1399 11.5332 11.1239L8 9.97682L4.46684 11.1239C4.41784 11.1398 4.3652 11.1406 4.31571 11.1264C4.26621 11.1121 4.22213 11.0833 4.18913 11.0438C4.15612 11.0042 4.13571 10.9557 4.13052 10.9044C4.12533 10.8532 4.1356 10.8015 4.16 10.7562L7.7729 4.0465C7.79708 4.00811 7.83059 3.97648 7.8703 3.95456C7.91002 3.93264 7.95464 3.92114 8 3.92114C8.04536 3.92114 8.08998 3.93264 8.1297 3.95456C8.16941 3.97648 8.20292 4.00811 8.2271 4.0465L11.84 10.7562C11.8645 10.8015 11.8748 10.8532 11.8696 10.9045C11.8645 10.9558 11.8441 11.0043 11.8111 11.0439Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="postcode" class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Eg: 0000" name="postcode" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="preferredServicingDate">When do you prefer to be serviced?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0383BF" class="bi bi-calendar" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg>
                                </div>
                            </div>
                            <input id="preferredServicingDate" class="form-control border-0 rounded-0 bg-white" type="date" name="preferredServicingDate" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="preferredServicingTime">When do you preferred time?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="##0383BF" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    </svg>
                                </div>
                            </div>
                            <input id="preferredServicingTime" class="form-control border-0 rounded-0 bg-white" type="time" name="preferredServicingTime" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submission">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="text-white fs-36 fw-700 pb-3">
                            <svg width="30" height="23" viewBox="0 0 30 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 3.05638L28.5 0.123047C15.5625 3.78971 9 11.8564 9 11.8564L3 7.45638L0 10.3897L9 22.123C15.9375 9.47305 30 3.05638 30 3.05638Z" fill="#38C235" />
                            </svg>
                            At your door within the hour of your preferred time
                        </div>
                        <div class="text-white fs-14 fw-300"><span class="fw-700 text-primary"><svg width="8" height="11" viewBox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.2 4.28971H6.4V2.62305C6.4 1.96001 6.14714 1.32412 5.69706 0.85528C5.24697 0.386439 4.63652 0.123047 4 0.123047C3.36348 0.123047 2.75303 0.386439 2.30294 0.85528C1.85286 1.32412 1.6 1.96001 1.6 2.62305V4.28971H0.8C0.587827 4.28971 0.384344 4.37751 0.234315 4.53379C0.0842854 4.69007 0 4.90203 0 5.12305V9.28971C0 9.51073 0.0842854 9.72269 0.234315 9.87897C0.384344 10.0352 0.587827 10.123 0.8 10.123H7.2C7.41217 10.123 7.61566 10.0352 7.76569 9.87897C7.91571 9.72269 8 9.51073 8 9.28971V5.12305C8 4.90203 7.91571 4.69007 7.76569 4.53379C7.61566 4.37751 7.41217 4.28971 7.2 4.28971ZM4.8 4.28971H3.2V2.62305C3.2 2.40203 3.28429 2.19007 3.43431 2.03379C3.58434 1.87751 3.78783 1.78971 4 1.78971C4.21217 1.78971 4.41566 1.87751 4.56569 2.03379C4.71571 2.19007 4.8 2.40203 4.8 2.62305V4.28971Z" fill="#0383BF" />
                                </svg>
                                Privacy & Security Policy</span> All information provided will be kept 100% confidential & secure</div>
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn w-100 btn-tertiary rounded-2 text-white py-3 px-md-4 fw-700 fw-600">
                            Submit Booking
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <?= renderImg('footer-logo.png', 'logo') ?>
                </div>
                <div class="col-auto">
                    <div class="row gx-3">
                        <div class="col-auto"><?= renderImg('word-of-mouth.png', 'lib') ?></div>
                        <div class="col-auto"><?= renderImg('google-reviews.png', 'lib') ?></div>
                        <div class="col-auto"><?= renderImg('youtube-channel.png', 'lib') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-links">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="fs-24 fw-700 text-white pb-4">Quick Links</div>
                    <ul class="quick-links">
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Our Services</a></li>
                        <li><a href="">Areas We Service</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg">
                    <div class="fs-24 fw-700 text-white pb-4">Plumbing</div>
                    <ul class="quick-links">
                        <li><a href="">Broken Pipes Repair</a></li>
                        <li><a href="">Burst Water Pipes Repair</a></li>
                        <li><a href="">Commercial Plumbing</a></li>
                        <li><a href="">Dishwasher Installation</a></li>
                        <li><a href="">Jet Blasting</a></li>
                        <li><a href="" class="text-white">See More</a></li>
                    </ul>
                </div>
                <div class="col-lg">
                    <div class="fs-24 fw-700 text-white pb-4">Drains</div>
                    <ul class="quick-links">
                        <li><a href="">Blocked Drains</a></li>
                        <li><a href="">Blocked Pipes</a></li>
                        <li><a href="">Blocked Sewers</a></li>
                        <li><a href="">Drain Camera Inspection</a></li>
                        <li><a href="">Drain Repairs</a></li>
                        <li><a href="" class="text-white">See More</a></li>
                    </ul>
                </div>
                <div class="col-lg">
                    <div class="fs-24 fw-700 text-white pb-4">Hot Water</div>
                    <ul class="quick-links">
                        <li><a href="">Dux Hot Water</a></li>
                        <li><a href="">Electric Hot Water Systems</a></li>
                        <li><a href="">Hot Water Heater Brands</a></li>
                        <li><a href="">Hot Water Heater Installation</a></li>
                        <li><a href="">Hot Water Heater</a></li>
                        <li><a href="" class="text-white">See More</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <div class="fs-24 fw-700 text-white pb-4">Support</div>
                    <ul class="quick-links">
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Book Online</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Lifetime Membership</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-accreditation">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <div class="fs-24 fw-700 text-white pb-4">Accredited Plumbers</div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto"><?= renderImg('aus-standard.png','logo') ?></div>
                        <div class="col-auto"><?= renderImg('sca.png','logo') ?></div>
                        <div class="col-auto"><?= renderImg('best-handyman.png','logo') ?></div>
                        <div class="col-auto"><?= renderImg('ebix.png','logo') ?></div>
                        <div class="col-auto"><?= renderImg('mpa.png','logo') ?></div>
                        <div class="col-auto"><?= renderImg('seniors-card.png','logo') ?></div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="fs-24 fw-700 text-white pb-4">Payment Methods</div>
                    <?= renderImg('payments.png', 'lib') ?>
                </div>
                <div class="col-2">
                    <div class="fs-24 fw-700 text-white pb-4">License No.</div>
                    <ul class="quick-links">
                        <li>300000A</li>
                        <li>ABN 1234567890</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <div class="row gx-2 gx-md-3 justify-content-center">
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
                    <div class="row align-items-center">
                    <div class="col-auto text-center">Terms & Conditions</div>
                        <div class="col-auto">|</div>
                        <div class="col-auto text-center">Privacy Policies</div>
                        <div class="col-auto">
                            <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                                <?= renderImg("aiims.png", "logo") ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>