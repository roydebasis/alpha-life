<header>
    <div id="sticky-sidebar">
        <ul>
            <li>
                <a href="javascript:void(0)" onclick="activeCalculator()" class="text-center" data-toggle="tooltip"
                   data-placement="left"
                   title="Premium Calculator">
                    <i class="fa fa-calculator"></i>
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" class="text-center" data-toggle="tooltip" data-placement="left"
                   title="My Transactions">
                    <i class="fa fa-money"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="text-center" data-toggle="tooltip" data-placement="left"
                   title="Policy Information">
                    <i class="fa fa-book"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="text-center" data-toggle="tooltip" data-placement="left"
                   title="Book an Appointment">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" class="text-center" data-toggle="tooltip" data-placement="left"
                   title="Preferred Hospitals">
                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Top Nav Start -->
    <section class="case-study-section topbar">
        <div class="container-fluid">
            <div class="row equal">
                <div class="col-sm-9 no-padding">
                    <div class="topNavLeft">
                        <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                            Email: info@alphalife.com.bd &nbsp; Hot line: 01787683517 (Policy Service Department),
                            01787683520 (Group Insurance) IP Phone : 09612 400 200
                        </marquee>
                    </div>
                </div>
                <div class="col-sm-3 no-padding">
                    <div class="topNavRight">
                        <ul class="top-social-icons">
                            <li><a href="https://www.linkedin.com/company/alpha-islami-life-insurance-limited"
                                   target="_blank"><img src="{{ asset('assets/images/ico/in.png') }}"></a></li>
                            <li><a href="https://twitter.com/AlphaIslamilife" target="_blank"><img
                                        src="{{ asset('assets/images/ico/twitter.png') }}"></a></li>
                            <li><a href="https://www.facebook.com/AlphaIslamiLifeInsuranceLimited" target="_blank"><img
                                        src="{{ asset('assets/images/ico/facebook.png') }}"></a></li>
                            <li><a href="#" target="_blank"><img src="{{ asset('assets/images/ico/ist.png') }}"></a></li>
                            <li><a href="https://www.youtube.com/channel/UCvaACoqGf4sdo4858xHnwIQ" target="_blank"><img
                                        src="{{ asset('assets/images/ico/u.png') }}"></a></li>
                        </ul>
                    </div>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Top Nav Start -->

    <!-- Navigation start -->
    <nav class="navbar navbar-custom tt-default-nav" role="navigation">
        <div class="container">

            <div class="search-box-wrap pull-right hidden-sm hidden-xs">
                <div class="search-icon"></div>
                <input id="search-box" placeholder="Search">
            </div>

            <div class="navbar-header">
                <button type="button" id="btn-nav-toggler" class="navbar-toggle" data-toggle="collapse"
                        data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{ url('assets/images/logoNew.png') }}" class="h-sm-100" alt="Alpha Islami Life Insurance">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="custom-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">About</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('frontend.page', ['slug' => 'about-su']) }}">About Alpha</a></li>
                            <li><a href="mission.html">Mission, Vision & Objective</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Board Affairs</a>
                                <ul class="dropdown-menu">
                                    <li><a href="board-of-directors.html">Board of Directors</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Committee</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="eccommittee.html">EC Committee</a></li>
                                            <li><a href="auditcommittee.html">Audit Committee</a></li>
                                            <li><a href="claimcommittee.html">Claim Committee</a></li>
                                            <li><a href="devcommittee.html">Development Committee</a></li>
                                            <li><a href="shariah-board.html">Shariah Board</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Management</a>
                                <ul class="dropdown-menu">
                                    <li><a href="corporate.html">Corporate</a></li>

                                    <li><a href="business.html">Business Promotion</a></li>
                                </ul>
                            </li>
                            <li><a href="corporate-information.html">Corporate Information</a></li>
                            <li><a href="field.html">Our Field Offices</a></li>
                            <li><a href="InsuranceFAQ.html">About Insurance FAQ</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="premium-calculator.html">Premium Calculator</a></li>
                            <li><a href="SMSService.html">SMS Service</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Payment</a>
                                <ul class="dropdown-menu">
                                    <li><a href="bKash.html">bKash Payment</a></li>
                                    <li><a href="rocket.html">Rocket Payment</a></li>
                                    <li><a href="nagad.html">Nagad Payment</a></li>
                                    <li><a href="mobileApps.html">Mobile Apps Payment</a></li>
                                </ul>
                            </li>
                            <li><a href="bank.html">Our Banks</a></li>
                            <!-- <li><a href="lease.html">Lease Financing Organization</a></li>-->
                            <li><a href="hospital.html">Our Hospital Network</a></li>
                            <li><a href="training.html">Training & Organizational Development</a></li>
                            <li><a href="claim.html">Claim Information</a></li>
                            <li><a href="notice.html">Notice Board</a></li>
                            <li><a href="downlaod.html">Download</a></li>
                            <li><a href="citizencharter.html">Citizen Charter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Products</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Insurance Plan</a>
                                <ul class="dropdown-menu">
                                    <li><a href="ordinaryendowment.html">Ordinary Endowment Assurance Plan - With
                                            Profit </a></li>
                                    <li><a href="biennialpayment.html">Biennial Payment Plan - With Profit</a></li>
                                    <li><a href="anticipatedendowment 3Stage.html">Anticipated Endowment (3 Stage
                                            Payment) Insurance Plan - With
                                            Profit</a></li>
                                    <li><a href="anticipatedendowment 4Stage.html">Anticipated Endowment (4 Stage
                                            Payment) Insurance Plan - With
                                            Profit</a></li>
                                    <li><a href="anticipatedendowment 5Stage.html">Anticipated Endowment (5 Stage
                                            Payment) Insurance Plan - With
                                            Profit</a></li>
                                    <!--  <li><a href="EducationProtection.html">Education Protection Plan - With Profit</a></li> -->
                                    <li><a href="assurancecumpensionplan.html">Assurance cum Pension Plan - Without
                                            Profits</a></li>
                                    <li><a href="singlepremiuminsuranceplan.html">Single Premium Insurance Plan -
                                            Without Profit</a></li>
                                    <!-- <li><a href="monthlysmallsavingsinsurance.html">Monthly Small Savings Insurance - With Profit</a></li> -->
                                    <li><a href="hajjbima.html">Hajj Bima - With Profit</a></li>
                                    <li><a href="denmohorbima.html">Denmohor Bima - With Profit</a></li>
                                    <!--!<li><a href="microtakaful.html">Micro Takaful</a></li> -->
                                    <li><a href="DPS-Gold.html">DPS Gold</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Supplementary Plan</a>
                                <ul class="dropdown-menu">
                                    <li><a href="accidentaldeathbenefit.html">Accidental Death Benefit</a></li>
                                    <li><a href="criticalcare.html">Critical Care</a></li>
                                    <li><a href="embeddedpersonalaccident.html">Embedded Personal Accident</a></li>
                                    <li><a href="incomebenefitrider.html">Income Benefit Rider</a></li>
                                    <li><a href="permanentdisability-accidentaleenefit.html">Permanent Disability &
                                            Accidental Benefit</a></li>
                                    <li><a href="plus.html">Plus</a></li>
                                    <li><a href="waiverofpremium.html">Waiver of Premium</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Media </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{  url('photos') }}">Photo gallery </a></li>
                            <li><a href="{{  url('videos') }}">Video gallery</a></li>
                            <li><a href="{{ url('posts') }}">Recent News</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Recent News</a></li>
                        </ul>
                    </li>
                    <li><a href="claim.html" class="menu-item">Claim</a></li>
{{--                    <li><a href="http://www.idra.org.bd/" class="menu-item" target="_blank">IDRA</a></li>--}}
                    <li><a href="contact.html" class="menu-item">Contact</a></li>
                    <!-- <li><a href="mujib-corner.html" class="menu-item">Mujib Corner</a></li> -->

                    <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

                </ul>
            </div>
        </div><!-- /.container -->
    </nav>
    <!-- Navigation end -->
</header>
