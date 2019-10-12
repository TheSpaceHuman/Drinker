<footer id="site-footer" class="site-footer">
    <div id="bottom-footer" class="footer-row footer-bottom full-width-contained footer-preset-">
        <div class="container">
            <div class="wrap-builder-items">
                <div class="row">
                    <div class="col-md-6 col-12 builder-item builder-block-footer_copyright">
                        <div class="builder-footer-copyright-item footer-copyright">
                            {!! setting('contacts.copyright') !!}
                            <a href="htpps://sitedo.ru" target="_blank" style="display: flex;align-items: center;">
                                <img
                                        src="{{ url('assets/img/BD-logo-only.svg') }}"
                                        style="width: 21px;height: 21px;margin-right: 10px;"
                                        alt="Sitedo.ru">
                                <span>Разработка сайтов</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 builder-item builder-block-footer-widget-1">
                        <div class="builder-widget-element widget-area">
                            <section id="zoosocialwidget-2" class="widget ZooSocialWidget">
                                <ul class="zoo-widget-social-icon icon clearfix">
                                    <li><a href="{{ setting('socials.facebook') }}" target="_blank" title="Facebook" class="icon-social-facebook social-icon"><i
                                                    class="zoo-icon-facebook"></i> </a></li>
                                    <li><a href="{{ setting('socials.twitter') }}" target="_blank" title="Twitter" class="icon-social-twitter social-icon"><i
                                                    class="zoo-icon-twitter"></i> </a></li>
                                    <li><a href="{{ setting('socials.instagram') }}" target="_blank" title="Instagram" class="icon-social-instagram social-icon"><i
                                                    class="zoo-icon-instagram"></i> </a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>