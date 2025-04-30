<section
    class="hero"
    id="home"
    style="background-image: url('../assets/images/hero-bg.jpg')"
>
    <div class="container">
        <div class="hero-content">
            <p class="hero-subtitle">All About food recipes And</p>

            <h2 class="h1 hero-title"><?= $heading ?></h2>

            <p class="hero-text">
                <?= $desc ?>
            </p>

            <button class="btn">Book A Table</button>
        </div>

        <figure class="hero-banner">
            <img
                src="../assets/images/hero-banner-bg.png"
                width="820"
                height="716"
                alt=""
                aria-hidden="true"
                class="w-100 hero-img-bg"
            />

            <img
                src="../assets/images/hero-banner.png"
                width="700"
                height="637"
                loading="lazy"
                alt="Burger"
                class="w-100 hero-img"
            />
        </figure>
    </div>
</section>
