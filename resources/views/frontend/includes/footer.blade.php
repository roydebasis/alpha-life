<footer class="footer-section text-center">
    <div class="container">
        <a class="page-scroll backToTop" href="#page-top"><i class="fa fa-angle-up"></i></a>

        <div class="row">
            <div class="col-md-4" style="padding:20px ;">
                <br>
                <h3 style="color: white; text-align: center;"> Alpha Islami Life Insurance Limited </h3>
                <hr>
                <p style=" color: #ffff; ; font-size: medium; line-height:140% ; text-align: left;">
                    A. J. Tower, Level # 8 and 9 <br>
                    Sonargaon Link Road <br>
                    4, Kawran BazarDhaka - 1215<br>
                    Tel : 88 02 (55013304, 55013305, 55013306) <br>
                    IP Phone : 09612 400 200<br>
                    <u>Hotline</u> <br>
                    01787683517 (Policy Servicing)<br>
                    01787683520 (Group Life) <br>
                    E-mail : info@alphalife.com.bd
                </p>
            </div>
            <div class="col-md-4" style="padding:20px ;">
                <br>
                <br>
                <img src="{{ asset('assets/images/MoblieLogo.png') }}" alt="logo">
                <br><br>
                <div class="social-icon clearfix">
                    <ul class="list-inline">
                        @if(\App\Models\Setting::has('linkedin_url'))
                        <li>
                            <a href="{{ \App\Models\Setting::get('linkedin_url') }}" target="_blank">
                                <img src="{{ asset('assets/images/social/li1.png') }}">
                            </a>
                        </li>
                        @endif
                        @if(\App\Models\Setting::has('twitter_url'))
                            <li>
                                <a href="{{ \App\Models\Setting::get('twitter_url') }}" target="_blank">
                                    <img src="{{ asset('assets/images/social/t1.png') }}">
                                </a>
                            </li>
                        @endif
                        @if(\App\Models\Setting::has('facebook_url'))
                        <li>
                            <a href="{{ \App\Models\Setting::get('facebook_url') }}" target="_blank">
                                <img src="{{ asset('assets/images/social/f1.png') }}">
                            </a>
                        </li>
                        @endif
                        @if(\App\Models\Setting::has('instagram_url'))
                        <li>
                            <a href="{{ \App\Models\Setting::get('instagram_url') }}" target="_blank">
                                <img src="{{ asset('assets/images/social/ist1.png') }}">
                            </a>
                        </li>
                        @endif
                        @if(\App\Models\Setting::has('youtube_url'))
                        <li>
                            <a href="{{ \App\Models\Setting::get('youtube_url') }}" target="_blank">
                                <img src="{{ asset('assets/images/social/u1.png') }}">
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-4" style="padding:20px ; text-align: left;">
                <br>
                <h3 style="color: white; text-align: center;">Important Link</h3>
                <hr>
                <a href="http://www.idra.org.bd/" style="color: white;" target="_blank">IDRA</a> <br>
                <a href="https://nbr.gov.bd/" style="color: white;" target="_blank">NBR </a><br>
                <a href="https://www.bb.org.bd/" style="color: white;" target="_blank">Bangladesh Bank </a><br>
                <a href="https://bia.portal.gov.bd/" style="color: white;" target="_blank">Bangladesh Insurance
                    Academy </a><br>
                <a href="https://biabd.org/" style="color: white;" target="_blank">Bangladesh Insurance Association
                </a><br>


            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: white;">
        <div class="row"
             style="background-color: #172a52; border-top:1px dotted #ffff; border-bottom-left-radius: 100px;border-bottom-right-radius: 100px; ">
            <div class="col-md-12" style="padding:1px ;">
                <div class="copyright">
                    <p>&copy; Copright 2021 Alpha Islami Life - Design & Development by Inspire32 Web Solution</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</footer>
