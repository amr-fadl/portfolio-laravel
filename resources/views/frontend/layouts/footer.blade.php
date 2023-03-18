
        <!-- Footer-area -->
        <footer class="footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Contact us</h5>
                                <h4 class="title">{{Settings::all()->contact_phone}}</h4>
                            </div>
                            <div class="footer__widget__text">
                                <p>{{Settings::all()->contact_desc}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">my address</h5>
                                <h4 class="title">{{Settings::all()->address_title}}</h4>
                            </div>
                            <div class="footer__widget__address">
                                <p>{{Settings::all()->contact_desc}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Follow me</h5>
                                <h4 class="title">{{Settings::all()->social_title}}</h4>
                            </div>
                            <div class="footer__widget__social">
                                <p>{{Settings::all()->social_desc}}</p>
                                <ul class="footer__social__list">
                                    @foreach (Settings::all()->social as $social)
                                        <li>
                                            <a href="{{$social->link}}">
                                                <img src="{{asset('uploads/frontend/social/'.$social->icon)}}" alt="">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright__wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright__text text-center">
                                <p>Copyright @ Amr Gamal 2022 All right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer-area-end -->

        @yield('page_script')

    </body>
</html>
