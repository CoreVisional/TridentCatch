<footer id="footer" class="pt-5">
    <div class="footer__container footer__flex">
        <div class="footer__row align-items-center footer__flex">
            <div class="footer__widget-wrapper footer__flex">
                <aside class="footer__widget-1 footer__flex">
                    <span class="footer__site-logo footer__flex">
                        <x-svg.icons.homepage.footer.footer-site-logo class="site-logo" />
                    </span>
                </aside>
                <aside class="footer__widget-2 footer__flex">
                    <div class="col-md-6 col-lg-1 mb-md-0 mb-4">
                        <h2 class="footer-heading mb-1">Shop</h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="py-1 menu-link">Shellfish</a>
                            </li>
                            <li>
                                <a href="#" class="py-1 menu-link">Whole Fish</a>
                            </li>
                            <li>
                                <a href="#" class="py-1 menu-link">Fillets</a>
                            </li>
                            <li>
                                <a href="#" class="py-1 menu-link">Roe</a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <aside class="footer__widget-3 footer__flex">
                    <div class="col-md-6 col-lg-1 mb-md-0 mb-4">
                        <h2 class="footer-heading mb-1">Site Links</h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{ route('about-us') }}" class="py-1 menu-link">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('contact-us') }}" class="py-1 menu-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <aside class="footer__widget-4 footer__flex">
                    <div class="col-md-6 col-lg-2 mb-md-0 mb-4">
                        <h2 class="footer-heading mb-1">Address</h2>
                        <p class="ft-business-location ft-text-color mb-4">
                            12A, Jalan Kuchai Maju 1, Off, Jalan Kuchai Lama, 58200, Kuala Lumpur
                        </p>

                        <h2 class="footer-heading mb-1">Contact Us</h2>
                        <span id="ft-email" class="ft-text-color footer__flex">Email: tridentcatch@gmail.com</span>
                        <span id="ft-contact" class="ft-text-color">Phone: 011-60866135</span>
                    </div>
                </aside>
                <aside class="footer__widget-5 footer__flex">
                    <div class="col-md-6 col-lg-2 mb-md-0 mb-4">
                        <h2 class="footer-heading mb-2 d-flex">Newsletter</h2>
                        <form action="#" class="subscribe-form">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control rounded-left" placeholder="Enter email address" />
                                <button type="submit" class="form-control submit rounded-right footer__flex">
                                    <span class="sr-only">Submit</span>
                                    <div class="subscribe-icon-container footer__flex">
                                        <x-svg.icons.homepage.footer.paper-plane class="subscribe-icon" />
                                    </div>
                                </button>
                            </div>
                        </form>
                        <div class="footer__follow-us-container">
                            <h2 class="footer-heading mt-4 mb-2 d-flex">Follow Us</h2>
                            <ul class="ftco-footer-social p-0">
                                <li>
                                    <a href="#" class="social-link" id="ft-tooltip-1" data-toggle="tooltip" data-placement="top"
                                        title="Instagram">
                                        <span class="footer__follow-us footer__flex">
                                            <x-svg.icons.homepage.footer.instagram class="social-media-icon" />
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-link" id="ft-tooltip-2" data-toggle="tooltip" data-placement="top"
                                        title="Facebook">
                                        <span class="footer__follow-us footer__flex">
                                            <x-svg.icons.homepage.footer.facebook class="social-media-icon" />
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-link" id="ft-tooltip-3" data-toggle="tooltip" data-placement="top"
                                        title="TikTok">
                                        <span class="footer__follow-us footer__flex">
                                            <x-svg.icons.homepage.footer.tiktok class="social-media-icon" />
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="w-100 mt-5 border-top py-4">
        <div class="footer__bottom">
            <div class="footer__bottom-container-fluid footer__flex">
                <div class="footer__bottom-row footer__flex">
                    <span class="footer__bottom-copyright">
                        Copyright &copy; 2022
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="team-name"
                            target="_blank">3RedDots.</a>
                        All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
