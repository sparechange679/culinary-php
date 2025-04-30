
<?php

require 'partials/head.php';
require 'partials/nav.php';

?>

<!--
- #SEARCH BOX
-->

<div class="search-container" data-search-container>
    <div class="search-box">
        <input
                type="search"
                name="search"
                aria-label="Search here"
                placeholder="Type keywords here..."
                class="search-input"
        />

        <button
                class="search-submit"
                aria-label="Submit search"
                data-search-submit-btn
        >
            <ion-icon name="search-outline"></ion-icon>
        </button>
    </div>

    <button
            class="search-close-btn"
            aria-label="Cancel search"
            data-search-close-btn
    ></button>
</div>

<main>
    <article>
        <!--
        - #HERO
      -->

        <?php
        require 'partials/banner.php';
        ?>

        <!--
        - #Contact form
      -->

        <section class="section food-menu">
            <div class="container">
                <p class="section-subtitle">Contact Us</p>

                <h2 class="h2 section-title">
                    Send Your <span class="span">Message</span>
                </h2>
                <div class="mt-5">
                    <form action="" class="footer-form">
                        <div class="input-wrapper">
                            <input
                                    type="text"
                                    name="first-name"
                                    required
                                    placeholder="Your First Name"
                                    aria-label="Your First Name"
                                    class="input-field"
                            />

                            <input
                                    type="text"
                                    name="last-name"
                                    required
                                    placeholder="Your Last Name"
                                    aria-label="Your Last Name"
                                    class="input-field"
                            />
                        </div>

                        <div class="input-wrapper">
                            <input
                                    type="email"
                                    name="contact-email"
                                    required
                                    placeholder="example@email.com"
                                    aria-label="example@email.com"
                                    class="input-field"
                            />

                            <input
                                    type="text"
                                    name="subject"
                                    required
                                    placeholder="Your Message Subject"
                                    aria-label="Your Message Subject"
                                    class="input-field"
                            />
                        </div>

                        <textarea
                                name="message"
                                required
                                placeholder="Message"
                                aria-label="Message"
                                class="input-field"
                        ></textarea>

                        <button type="submit" class="btn">Contact Now</button>
                    </form>
                </div>
            </div>
        </section>

        <!--
        - #BANNER
      -->

        <section class="section section-divider gray banner">
            <div class="container">
                <ul class="banner-list">
                    <li class="banner-item banner-lg">
                        <div class="banner-card">
                            <img
                                    src="../assets/images/banner-1.jpg"
                                    width="550"
                                    height="450"
                                    loading="lazy"
                                    alt="Discount For Delicious Tasty Burgers!"
                                    class="banner-img"
                            />

                            <div class="banner-item-content">
                                <p class="banner-subtitle">50% Off Now!</p>

                                <h3 class="banner-title">
                                    Discount For Delicious Tasty Burgers!
                                </h3>

                                <p class="banner-text">Sale off 50% only this week</p>

                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                    </li>

                    <li class="banner-item banner-sm">
                        <div class="banner-card">
                            <img
                                    src="../assets/images/banner-2.jpg"
                                    width="550"
                                    height="465"
                                    loading="lazy"
                                    alt="Delicious Pizza"
                                    class="banner-img"
                            />

                            <div class="banner-item-content">
                                <h3 class="banner-title">Delicious Pizza</h3>

                                <p class="banner-text">50% off Now</p>

                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                    </li>

                    <li class="banner-item banner-sm">
                        <div class="banner-card">
                            <img
                                    src="../assets/images/banner-3.jpg"
                                    width="550"
                                    height="465"
                                    loading="lazy"
                                    alt="American Burgers"
                                    class="banner-img"
                            />

                            <div class="banner-item-content">
                                <h3 class="banner-title">American Burgers</h3>

                                <p class="banner-text">50% off Now</p>

                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                    </li>

                    <li class="banner-item banner-md">
                        <div class="banner-card">
                            <img
                                    src="../assets/images/banner-4.jpg"
                                    width="550"
                                    height="220"
                                    loading="lazy"
                                    alt="Tasty Buzzed Pizza"
                                    class="banner-img"
                            />

                            <div class="banner-item-content">
                                <h3 class="banner-title">Tasty Buzzed Pizza</h3>

                                <p class="banner-text">Sale off 50% only this week</p>

                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!--
        - #TESTIMONIALS
      -->

        <section class="section section-divider white testi">
            <div class="container">
                <p class="section-subtitle">Testimonials</p>

                <h2 class="h2 section-title">
                    Our Customers <span class="span">Reviews</span>
                </h2>

                <p class="section-text">
                    Food is any substance consumed to provide nutritional support for
                    an organism.
                </p>

                <ul class="testi-list has-scrollbar">
                    <li class="testi-item">
                        <div class="testi-card">
                            <div class="profile-wrapper">
                                <figure class="avatar">
                                    <img
                                            src="../assets/images/avatar-1.jpg"
                                            width="80"
                                            height="80"
                                            loading="lazy"
                                            alt="Robert William"
                                    />
                                </figure>

                                <div>
                                    <h3 class="h4 testi-name">Robert William</h3>

                                    <p class="testi-title">CEO Kingfisher</p>
                                </div>
                            </div>

                            <blockquote class="testi-text">
                                "I would be lost without restaurant. I would like to
                                personally thank you for your outstanding product."
                            </blockquote>

                            <div class="rating-wrapper">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                        </div>
                    </li>

                    <li class="testi-item">
                        <div class="testi-card">
                            <div class="profile-wrapper">
                                <figure class="avatar">
                                    <img
                                            src="../assets/images/avatar-2.jpg"
                                            width="80"
                                            height="80"
                                            loading="lazy"
                                            alt="Thomas Josef"
                                    />
                                </figure>

                                <div>
                                    <h3 class="h4 testi-name">Thomas Josef</h3>

                                    <p class="testi-title">CEO Getforce</p>
                                </div>
                            </div>

                            <blockquote class="testi-text">
                                "I would be lost without restaurant. I would like to
                                personally thank you for your outstanding product."
                            </blockquote>

                            <div class="rating-wrapper">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                        </div>
                    </li>

                    <li class="testi-item">
                        <div class="testi-card">
                            <div class="profile-wrapper">
                                <figure class="avatar">
                                    <img
                                            src="../assets/images/avatar-3.jpg"
                                            width="80"
                                            height="80"
                                            loading="lazy"
                                            alt="Charles Richard"
                                    />
                                </figure>

                                <div>
                                    <h3 class="h4 testi-name">Charles Richard</h3>

                                    <p class="testi-title">CEO Angela</p>
                                </div>
                            </div>

                            <blockquote class="testi-text">
                                "I would be lost without restaurant. I would like to
                                personally thank you for your outstanding product."
                            </blockquote>

                            <div class="rating-wrapper">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </article>
</main>

<!--
- #FOOTER
-->

<?php

require 'partials/footer.php';