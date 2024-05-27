<?= $this->extend('layout/page')?>
<?= $this->section('landing')?>
    <body>
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <i class="navbar-brand-icon bi-book me-2"></i>
                        <span>Book</span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Download</span><!-- duplicated another one below for mobile -->
                        </a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

                            <h6>Welcome To Library</h6>

                            <h1 class="text-white mb-4">World Of Book</h1>

                            <a href="" class="btn custom-btn smoothscroll me-3">Daftar Buku</a>

                            <a href="/b" class="link link--kale smoothscroll">Daftar Buku</a>
                        </div>

                        <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-0">
                            <img src="landing-page/images/education-online-books.png" class="hero-image img-fluid" alt="education online books">
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <div class="avatar-group d-flex flex-wrap align-items-center">
                                <img src="landing-page/images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid avatar-image" alt="">

                                <img src="landing-page/images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="landing-page/images/avatar/pretty-blonde-woman.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="landing-page/images/avatar/studio-portrait-emotional-happy-funny-smiling-boyfriend.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <div class="reviews-group mt-3 mt-lg-0">
                                    <strong>4.5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>

                                    <small class="ms-3">2,564 reviews</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-lg-5"></section>


            <section class="book-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="landing-page/images/tablet-screen-contents.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="book-section-info">
                                <h6>Modern &amp; Creative</h6>


                                <h2 class="mb-4">About The Book</h2>

                                <p>Credit goes to <a rel="nofollow" href="https://freepik.com" target="_blank">FreePik</a> for images used in this ebook landing page template. You may browse FreePik to download more free images for your website.</p>

                                <p>TemplateMo is one of the best websites to download free CSS templates for any purpose. This is an ebook landing page template using Bootstrap 5 CSS layout.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <?= $this->endsection(); ?>