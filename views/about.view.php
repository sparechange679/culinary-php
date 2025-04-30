
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
        - #ABOUT
      -->

        <section class="section section-divider gray about" id="about">
            <div class="container">
                <div class="about-banner">
                    <img
                            src="../assets/images/about-banner.png"
                            width="509"
                            height="459"
                            loading="lazy"
                            alt="Burger with Drinks"
                            class="w-100 about-img"
                    />

                    <img
                            src="../assets/images/sale-shape-red.png"
                            width="216"
                            height="226"
                            alt="get up to 50% off now"
                            class="abs-img scale-up-anim"
                    />
                </div>

                <div class="about-content">
                    <h2 class="h2 section-title">
                        Caferio, Burgers, and Best Pizzas
                        <span class="span">in Town!</span>
                    </h2>

                    <p class="section-text">
                        The restaurants in Hangzhou also catered to many northern
                        Chinese who had fled south from Kaifeng during the Jurchen
                        invasion of the 1120s, while it is also known that many
                        restaurants were run by families.
                    </p>

                    <ul class="about-list">
                        <li class="about-item">
                            <ion-icon name="checkmark-outline"></ion-icon>

                            <span class="span">Delicious & Healthy Foods</span>
                        </li>

                        <li class="about-item">
                            <ion-icon name="checkmark-outline"></ion-icon>

                            <span class="span">Spacific Family And Kids Zone</span>
                        </li>

                        <li class="about-item">
                            <ion-icon name="checkmark-outline"></ion-icon>

                            <span class="span">Music & Other Facilities</span>
                        </li>

                        <li class="about-item">
                            <ion-icon name="checkmark-outline"></ion-icon>

                            <span class="span">Fastest Food Home Delivery</span>
                        </li>
                    </ul>

                    <button class="btn btn-hover">Order Now</button>
                </div>
            </div>
        </section>

        <!--
        - #CTA
      -->

        <section
                class="section section-divider white cta"
                style="background-image: url('../assets/images/hero-bg.jpg')"
        >
            <div class="container">
                <div class="cta-content">
                    <h2 class="h2 section-title">
                        The Foodie Have Excellent Of
                        <span class="span">Quality Burgers!</span>
                    </h2>

                    <p class="section-text">
                        The restaurants in Hangzhou also catered to many northern
                        Chinese who had fled south from Kaifeng during the Jurchen
                        invasion of the 1120s, while it is also known that many
                        restaurants were run by families.
                    </p>

                    <button class="btn btn-hover">Order Now</button>
                </div>

                <figure class="cta-banner">
                    <img
                            src="../assets/images/cta-banner.png"
                            width="700"
                            height="637"
                            loading="lazy"
                            alt="Burger"
                            class="w-100 cta-img"
                    />

                    <img
                            src="../assets/images/sale-shape.png"
                            width="216"
                            height="226"
                            loading="lazy"
                            alt="get up to 50% off now"
                            class="abs-img scale-up-anim"
                    />
                </figure>
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