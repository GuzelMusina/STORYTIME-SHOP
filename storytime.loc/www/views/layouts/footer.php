<div class="page-buffer"></div>
</div>
<footer class="htc__foooter__area gray-bg">
    <div class="container">
        <div class="row">
            <div class="footer__container clearfix">
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="ft__widget">
                        <div class="ft__logo">
                                <a href="/">
                                    <h1 style="font-weight: bolder">H2SO4</h1>
                                </a>
                        </div>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-pin"></i>
                                    </div>
                                    <div class="address-text">
                                        <p>Kazan, Russia</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="address-text">
                                        <a href="#"> h2so4@gmail.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-phone-in-talk"></i>
                                    </div>
                                    <div class="address-text">
                                        <p>+79625526904 </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="social__icon">
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
        <!-- Start Copyright Area -->
        <div class="htc__copyright__area">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="copyright__inner">
                        <div class="copyright">
                            <p>© 2019 <a href="#">H2SO4</a>
                                All Right Reserved.</p>
                        </div>
                        <ul class="footer__menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="/catalog/">Product</a></li>
                            <li><a href="/contacts/">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->
    </div>
</footer>

<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<!-- jquery latest version -->
<script src="/template/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap framework js -->
<script src="/template/js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="/template/js/plugins.js"></script>
<script src="/template/js/slick.min.js"></script>
<script src="/template/js/owl.carousel.min.js"></script>
<!-- Waypoints.min.js. -->
<script src="/template/js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function () {
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/" + id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>