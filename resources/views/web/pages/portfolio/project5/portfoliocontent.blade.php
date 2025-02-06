<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Portfolio Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <!--<section id="portfolio-details" class="portfolio-details section" style="padding: 60px 0; background-color: #f7f9fc;"> -->
    <section id="portfolio-details" class="portfolio-details section" style="padding: 60px 0;">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">

                <!-- Image Carousel -->
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper init-swiper"
                        style="box-shadow: 0 8px 16px rgba(0,0,0,0.1); border-radius: 10px; ">
                        <div class="swiper-wrapper align-items-center">
                            <script type="application/json" class="swiper-config">
                                {
                                  "loop": true,
                                  "speed": 600,
                                  "autoplay": {
                                    "delay": 5000
                                  },
                                  "slidesPerView": "auto",
                                  "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                  }
                                }
                              </script>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/project-book (1).jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/project-book (2).jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/project-book (5).jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/project-book (3).jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/project-book (4).jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <!-- Project Info -->
                <div class="col-lg-4">
                    <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200"
                        style="background-color: #fff; padding: 35px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); height: 506px;">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Project Title</strong>: Online Book Store</li>
                            <li><strong>Category</strong>: Web design</li>
                            <li><strong>College</strong>: ISM</li>
                            <li><strong>Project date</strong>: 01 October, 2022</li>
                            <li><strong>Tools & Technologies</strong>: JavaScript,
                                HTML, CSS, jQuery, Bootstrap,</li>
                            <li><strong>Project URL</strong>:</li>
                            <li> <a href="https://shahid-raza7463.github.io/Online-book-store/"
                                    target="_blank">https://onlinebook.store.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Project Description -->
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300"
                style="margin-top: 30px; font-size: 1.05rem; line-height: 1.8; padding: 25px; background-color: #fff; border-radius: 10px;">
                <h5><strong>Online Book Store:</strong></h5>
                <p>
                    This project is an Online Book Store where users can explore a wide collection of books.
                    Visitors can view book details, including descriptions and pricing. While the "Add to Cart"
                    and purchase functionality is still under development, the site provides an intuitive
                    interface for browsing available books. Once completed, users will be able to seamlessly add
                    books to their cart and proceed with purchasing. The platform is designed to offer a simple
                    and user-friendly experience for book enthusiasts.
                </p>
                {{-- <ul style="line-height: 1.9; margin-top: 20px; padding-left: 20px;">
                    <li><strong>Add Network/Program</strong>: Allows users to create new networks.</li>
                    <li><strong>Networks</strong>: View and manage all listed networks in one place.</li>
                    <li><strong>Offers</strong>: Lists all available offers related to the networks.</li>
                    <li><strong>Resources</strong>: Provides resources related to affiliate marketing.</li>
                    <li><strong>Reviews</strong>: Allows users to give reviews on networks and reply to them.
                    </li>
                    <li><strong>Blog</strong>: Users can create and browse blogs related to affiliate marketing.
                    </li>
                </ul> --}}
            </div>
        </div>
    </section>
</main>
