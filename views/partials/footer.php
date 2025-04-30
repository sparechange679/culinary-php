<!--
- #FOOTER
-->

<footer class="footer">
    <div
        class="footer-top"
        style="background-image: url('../assets/images/footer-illustration.png')"
    >
        <div class="container">
            <div class="footer-brand">
                <a href="" class="logo">Food<span class="span">Fusion</span>.</a>

                <p class="footer-text">
                    Financial experts support or help you to to find out which way you
                    can raise your funds more.
                </p>

                <ul class="social-list">
                    <li>
                        <a href="https://www.facebook.com/" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.x.com/" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.pinterest.com/" class="social-link">
                            <ion-icon name="logo-pinterest"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>

            <ul class="footer-list">
                <li>
                    <p class="footer-list-title">Contact Info</p>
                </li>

                <li>
                    <p class="footer-list-item">+1 (062) 109-9222</p>
                </li>

                <li>
                    <p class="footer-list-item">Info@foodfusion.com</p>
                </li>

                <li>
                    <address class="footer-list-item">
                        Malawi, Mzuzu, Chimaliro
                    </address>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <p class="footer-list-title">Opening Hours</p>
                </li>

                <li>
                    <p class="footer-list-item">Monday-Friday: 08:00-22:00</p>
                </li>

                <li>
                    <p class="footer-list-item">Tuesday 4PM: Till Mid Night</p>
                </li>

                <li>
                    <p class="footer-list-item">Saturday: 10:00-16:00</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p class="copyright-text">
                &copy; 2022 <a href="#" class="copyright-link">sibonana</a> All
                Rights Reserved.
            </p>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal-overlay" id="modalOverlay">
    <div class="modal" id="modal">
        <button class="close-btn" id="closeModalBtn">&times;</button>
        <h2 id="modal-title">Join Now</h2>
        <form>
            <!-- modal-type: 0 => Sign up/Join Now, 1 => Sign in/Login -->
            <input type="hidden" name="modal-type" id="modal-type" value="0" />
            <input
                type="text"
                placeholder="Your First Name"
                name="first-name"
                id="first-name"
                required
            />
            <input
                type="text"
                placeholder="Your Last Name"
                name="last-name"
                id="last-name"
                required
            />
            <input
                type="email"
                placeholder="Your Email"
                name="email"
                id="email"
                required
            />
            <input
                type="password"
                placeholder="Your Password"
                name="password"
                id="password"
                required
            />
            <button type="submit" id="btn-submit">Join</button>
            <a href="#" class="btn-link ml" id="btn-switch">Login</a>
        </form>
    </div>
</div>

<!--
- #BACK TO TOP
-->

<a
    href="#top"
    class="back-top-btn"
    aria-label="Back to top"
    data-back-top-btn
>
    <ion-icon name="chevron-up"></ion-icon>
</a>

<!--
- ionicon link
-->
<script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
></script>
<script
    nomodule
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
></script>
<!-- <script src="./assets/js/ionicons.esm.js.js"></script>
<script src="./assets/js/ionicons.js.js"></script> -->

<!--
- custom js link
-->
<script src="../assets/js/script.js" defer></script>
<!--
- jQuery js link
-->
<script src="../assets/js/jquery/jquery-3.6.0.js.js"></script>
<script src="../assets/js/jquery/jquery-ui.js.js"></script>

<script>
    $(document).ready(function () {
        const modalType = $("#modal-type");
        const modalTitle = $("#modal-title");

        // form inputs
        const firstName = $("#first-name");
        const lastName = $("#last-name");
        const email = $("#email").val();
        const password = $("#password").val();

        const submitBtn = $("#btn-submit");
        const switchBtn = $("#btn-switch");

        switchBtn.on("click", () => {
            // 0 => Sign up/Join Now, 1 => Sign in/Login
            if (modalType.val() === 0) {
                modalType.val(1);
                modalTitle.text("Login Now");
                firstName.hide();
                lastName.hide();
                submitBtn.text("Login");
                switchBtn.text("Join");
            } else {
                modalType.val(0);
                modalTitle.text("Join Now");
                firstName.show();
                lastName.show();
                submitBtn.text("Join");
                switchBtn.text("Login");
            }
        });
    });
</script>
</body>
</html>