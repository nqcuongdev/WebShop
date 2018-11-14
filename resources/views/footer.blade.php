<footer class="site-footer border-top">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="row">
            <div class="col-md-12">
            <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-4">
            <ul class="list-unstyled">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('products') }}">Shop</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="">News</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            </div>
            <div class="col-md-6 col-lg-4">
            <ul class="list-unstyled">
                <li><a href="{{ route('checkout') }}">Check Out</a></li>
                <li><a href="{{ route('cart') }}">Shopping cart</a></li>
            </ul>
            </div>
            <div class="col-md-6 col-lg-4">
            <ul class="list-unstyled">
                <li><a href="">Free Shiping</a></li>
                <li><a href="">Free Returns</a></li>
                <li><a href="">Customer Support</a></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
        <h3 class="footer-heading mb-4">Promo</h3>
        <a href="" class="block-6">
            <img src="{{asset('shoppers/images/hero_1.jpg')}}" alt="Image placeholder" class="img-fluid rounded mb-4">
            <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
            <p>Promo from  nuary 15 &mdash; 25, 2019</p>
        </a>
        </div>
        <div class="col-md-6 col-lg-3">
        <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
            <li class="address">Nam Ky Khoi Nghia Street, Ngu Hanh Son District, Da Nang City</li>
            <li class="phone"><a href="tel://23923929210">+XXXXXXXXX</a></li>
            <li class="email">nqcuong.17it3@sict.udn.vn</li>
            </ul>
        </div>

        <div class="block-7">
            <form action="" method="post">
            <label for="email_subscribe" class="footer-heading">Subscribe</label>
            <div class="form-group">
                <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                <input type="submit" class="btn btn-sm btn-primary" value="Send">
            </div>
            </form>
        </div>
        </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
        <p>
        <i class="icon-heart" aria-hidden="true"></i> Created  by Nguyen Van Chau <i class="icon-heart" aria-hidden="true"></i>
        </p>
        </div>
        
    </div>
    </div>
</footer>
