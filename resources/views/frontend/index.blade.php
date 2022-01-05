@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <!-- Intro Section -->
    <section id="home">
        <div id="tt-home-carousel" class="carousel slide  trendy-slider control-one" data-ride="carousel"
             data-interval="5000">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="{{ asset('assets/images/slider/slideshow1.jpg') }}" alt="First slide" class="img-responsive">
                    <div class="carousel-caption">
                        <!--  <h1 class="animated fadeInDown delay-1"> <span>Alpha Islami Life Insurance Limited  </span></h1>
                        <p class="animated fadeInDown delay-3">Alpha Islami Life Insurance Limited </p> -->
                        <!--    <a class="btn learnmore-btn animated fadeInUp delay-4" href="#">Learn More</a> -->
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/images/slider/slideshow2.jpg') }}" alt="Second slide" class="img-responsive">
                    <div class="carousel-caption">
                        <!--  <p class="animated fadeInDown delay-3">Alpha Islami Life Insurance Limited </p>
                        <h1 class="animated fadeInDown delay-1"><span>Clean &amp; Modern</span></h1>
                    <p class="animated fadeInDown delay-3">A simple, unique and beautiful theme! </p>
                    <a class="btn learnmore-btn animated fadeInUp delay-4" href="#">Learn More</a>-->
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/images/slider/slideshow3.jpg') }}" alt="Third slide" class="img-responsive">
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/images/slider/slideshow4.jpg') }}" alt="Third slide" class="img-responsive">
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/images/slider/slideshow5.jpg') }}" alt="Third slide" class="img-responsive">
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/images/slider/slideshow6.jpg') }}" alt="Third slide" class="img-responsive">
                    <div class="carousel-caption">

                    </div>
                </div> <!-- /.carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#tt-home-carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#tt-home-carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div> <!-- /.carousel -->
        </div>
    </section> <!-- /#home -->


    <!-- Tab 4 section creative-section Start -->
    <section class="creative-section" id="servicetabs">
        <div class="container">
            <div class="service-tab">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active col-xs-4">
                        <a href="#web-design" role="tab" data-toggle="tab">
                            <i class="flaticon-computer236"></i>
                            <span>Chairman Sir Message</span>
                        </a>
                    </li>

                    <li class="col-xs-4">
                        <a href="#apps-design" role="tab" data-toggle="tab">
                            <i class="flaticon-computer236"></i>
                            <span>CEO Sir Message</span>
                        </a>
                    </li>

                    <li class="col-xs-4">
                        <a href="#game-design" id="calculatorActivator" role="tab" data-toggle="tab">
                            <i class="flaticon-computer236"></i>
                            <span> Premium Calculator</span>
                        </a>
                    </li>

                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- tab content for web design -->
                    <div class="row tab-pane fade in active" id="web-design">
                        <div class="col-sm-7">
                            <h2>চেয়ারম্যান মহোদয়ের বাণী</h2>
                            <p>বাংলাদেশের জীবন বীমার গতানুগতিক পদ্ধতির আমূল পরিবর্তন করার উদ্দেশ্য নিয়ে আলফা ইসলামী
                                লাইফ ইন্স্যুরেন্স লিমিটেড গঠন করা হয়েছে। গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের অর্থ
                                মন্ত্রনালয়ের অধীন বীমা উন্নয়ন ও নিয়ন্ত্রণ কতৃর্পক্ষ থেকে ফেব্রুয়ারী ২৪,২০১৪ ইং
                                তারিখে নিবন্ধন সনদ গ্রহন করে, যার নম্বর ১৩/২০১৪ইং এবং মে ২০১৪ইং তারিখ থেকে আনুষ্ঠানিক
                                ব্যবসায়িক কার্যক্রম শুরু করে। এই কোম্পানি বিশিষ্ট শিল্পপতি, সমাজসেবক, শিক্ষানুরাগী এবং
                                ধর্মানুরাগী ব্যক্তিবর্গের সমন্বয়ে গঠিত। কোম্পানীর পৃষ্ঠপোষকগণ নিজস্ব ব্যবসায়ের
                                ক্ষেত্রে আস্থা অর্জন করে মার্কেটে প্রতিনিধিত্ব করছেন। তাদের ব্যবসায়িক কৌশল ও সুশাসনের
                                জন্য এই সফলতা অর্জন সম্ভব হয়েছে। আলফা ইসলামী লাইফ ইন্স্যুরেন্স লিমিটেড তাদের
                                পৃষ্ঠপোষকতায় গঠিত একটি জীবন বীমা কোম্পানি অভিষ্ট লক্ষ্যে পেঁৗছাবেই। ব্যবসা পরিচালনার
                                নবম বছরে পদার্পণ করা আলফা ইসলামী লাইফ ইন্স্যুরেন্স কোম্পানি লিমিটেড গর্বের সাথে দাবি
                                করতে পারে যে, এই প্রতিষ্ঠানটি গ্রাহক আস্থা অর্জনের জন্য নিরন্তর প্রচেষ্টা চালিয়ে
                                যাচ্ছে। পাশাপাশি সকল শ্রেণী পেশার লোকদেরকে উন্নত বিমা সুবিধার আওতায় নিয়ে আসতে সবসময়
                                নিরলসভাবে কাজ করে যাচ্ছে।
                            </p>
                            <a href="chairmanmessage.html" class="btn btn-primary"><i
                                    class="fa fa-long-arrow-right"></i> বিস্তারিত...</a>
                        </div>
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="mac-screenshot">
                                <img class="img-responsive" src="{{ asset('assets/images/team/chairmanHome.jpg') }}" alt=""
                                     style="border-bottom-left-radius: 50px; border-top-right-radius:  50px;">
                            </div>
                        </div>
                    </div>

                    <!-- tab content for application design -->
                    <div class="row tab-pane fade" id="apps-design">
                        <div class="col-sm-6">
                            <h2>মুখ্য নির্বাহী কর্মকর্তার বানী</h2>
                            <p>আলফা ইসলামী লাইফ ইনস্যুরেন্স লিমিটেড এর পক্ষ থেকে আপনাদের জানাচ্ছি নতুন বছরের শুভেচ্ছা ও
                                অভিনন্দন। আমি
                                ২০২০ইং সালের জানুয়ারী মাসে অত্র কোম্পানীতে যোগদান করি। আমার পথ চলার শুরুটা মসৃণ ছিলনা
                                কারন তখন করোনা
                                মহামারীর কারনে পুরো বিশ^ বিপর্যস্ত ছিল। আমি দায়িত্ব নেয়ার পরে ব্যবসায়িক প্রক্রিয়া
                                এবং মান বৃদ্ধির উপর মনোযোগ দিয়েছি।
                                আমার প্রান প্রিয় কর্মী ভাই বোনদের সাথে সার্বক্ষনিক যোগাযোগ রেখে সঠিক দিকনির্দেশনা
                                দিয়েছি। করোনা মহামারী ভয়াবহতা
                                উপেক্ষা করে কোম্পানীর নির্দেশনা মেনে যারা অক্লান্ত পরিশ্রম করে ২০২০ইং সালে ১৯ কোটি ও
                                ২০২১ ইং সালে ৫২
                                কোটি টাকার মোট প্রিমিয়াম আয় সহ টেকসই গতি বজায় রেখেছেন তাদেরকে জানাই হৃদয় নিংড়ানো
                                ভালবাসা ও অভিবাদন।
                                আপনাদের এই ক্রমাগত সফলতা আপনাদের প্রতি আমাদের বিশ্বাসকে শক্তিশালী করেছে, যা আমাদের আরও
                                ভাল করার জন্য
                                উৎসাহ </p>
                            <a href="ceomessage.html" class="btn btn-primary"><i class="fa fa-long-arrow-right"></i>
                                বিস্তারিত...</a>
                        </div>
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="mac-screenshot">
                                <img class="img-responsive" src="{{ asset('assets/images/team/ceo.jpg') }}" alt=""
                                     style="border-bottom-left-radius: 50px; border-top-right-radius:  50px;">
                            </div>
                        </div>
                    </div>

                    <!-- tab content for game design -->
                    <div class="tab-pane fade premium-calculator" id="game-design">
                        <div class="row">
                            <div class="col-12"><h2>Premium Calculator</h2></div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="effective_date">Effective Date</label>
                                    <input type="text" onchange="onDateChange()" name="effective_date"
                                           class="date-field form-control" id="effective_date" placeholder="Effective Date">
                                </div>

                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="current_date">Today's Date</label>
                                    <input type="text" onchange="onDateChange()" name="current_date"
                                           class="date-field form-control" id="current_date" placeholder="Today's Date">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Result</label>
                                    <p><span id="age" class="text-capitalize text-warning fon">N/A</span></p>
                                </div>
                            </div>

                            <div class="col-md-12" id="plandropdown">
                                <div class="form-group">
                                    <label for="plan">Select Plan</label>
                                    <select name="plan" class="form-control" id="plan" disabled onchange="onPlanChange()">
                                        <option value="" disabled selected>Select Plan</option>
                                        <option value="04">Plan 1</option>
                                        <option value="05">Plan 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="plan-selected">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="term">Term</label>
                                    <select name="term" class="form-control" id="term">
                                        <option value="">10</option>
                                        <option value="">15</option>
                                        <option value="">20</option>
                                        <option value="">25</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="payment_mode">Mode of Payment</label>
                                    <select name="payment_mode" class="form-control" id="payment_mode">
                                        <option value="yearly">Yearly</option>
                                        <option value="halfyearly">Half Yearly</option>
                                        <option value="quarterly">Quarterly</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sum_assured">Sum Assured</label>
                                    <input type="number" min="100000" placeholder="Assured Amount" name="sum_assured"
                                           class="form-control" id="sum_assured"/>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button id="calculateBtn" type="button" class="btn btn-primary btn-md text-center ml-auto" onclick="calculate()">
                                    Calculate
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- tab content for creative idea -->
                    <div class="row tab-pane fade" id="creative-ideas">
                        <div class="col-sm-6">
                            <h2>Exclusive Policy</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fa fa-long-arrow-right"></i> Learn More</a>
                        </div>
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="mac-screenshot">
                                <img class="img-responsive" src="{{ asset('assets/images/Exclusive-Policy.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.tab-content -->
        </div> <!-- /.service-tab -->
    </section>
    <section class="history-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-5 no-padding">
                    <div class="history-cover"></div>
                </div><!-- /.col-md-6 -->
                <div class="col-lg-6 col-md-7 no-padding">
                    <div class="history-wrapper">
                        <h2>Alpha Islami Life Insurance </h2>

                        <div id="historyCarousel" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <br>
                                    <div
                                        style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; border-left: 1px solid #2a2a86;">
                                        <img style="display: block; max-width: 100%; height: auto;"
                                             src="{{ asset('assets/images/meeting.jpg') }}">
                                    </div>
                                </div>

                                <div class="item">
                                    <br>
                                    <p> Taking the word “ALPHA” as an abbreviation we tried to derive some key words in
                                        alphabetical order and tried to constitute a Vision / Mission statement.</p>


                                </div>


                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#historyCarousel" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#historyCarousel" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!--
    <section class="hero-block-v1 section-padding"
        style=" background-image: url(assets/images/About.png) ; color: antiquewhite;">
        <div class="container"> <br><br>
            <div class="row">
                <div class="col-md-6 col-md-offset-7">
                    <h2 style="color: white;">Alpha Islami<br> Life Insurance<br> Limited </h2>
                    <p>Welcome Text ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit e</p>

                </div>
            </div>
        </div><br><br>
    </section>

    -->

    <section class="mujib-section section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/mujib.png') }}"
                         style="border-bottom-right-radius: 50px; border-top-left-radius: 50px; border: 1px solid rgba(0, 0, 0, 0.19); width: 100%; ">
                </div>
                <div class="col-md-4">
                    <div class="row" style="padding-top: 1%;">
                        <div class="col-md-12" style="text-align: center;">
                            <h1><a href="mujib-corner.html">Mujib Corner</a></h1>

                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <div class="process-box1">Documentary</div>
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <div class="process-box1">Gallery</div>
                        </div>


                    </div>


                </div>
                <div class="col-md-4">
                    <a href="http://www.idra.org.bd/" target="_blank"> <img src="{{ asset('assets/images/idra.png') }}"
                                                                            style="border-bottom-right-radius: 50px; border-top-left-radius: 50px; border: 1px solid rgba(0, 0, 0, 0.19); width: 100%; "></a>
                </div>

            </div>
        </div>
    </section>
    <br>

    <!-- Process Section Start -->
    <section class="process-section section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="process-box">
                        <i class="flaticon-cup7"></i>
                        <h3>Premium Calculator </h3>
                    </div><!-- /.process-box -->
                </div><!-- /.col-xs-2 -->

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="process-box">
                        <i class="flaticon-light110"></i>
                        <h3>Policy Information </h3>
                    </div><!-- /.process-box -->
                </div><!-- /.col-xs-2 -->

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="process-box">
                        <i class="flaticon-paint104"></i>
                        <h3>Insurance Plan </h3>
                    </div><!-- /.process-box -->
                </div><!-- /.col-xs-2 -->

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="process-box">
                        <i class="flaticon-paint104"></i>
                        <h3>Sign In </h3>

                    </div><!-- /.process-box -->
                </div><!-- /.col-xs-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.process-section End-->


    <!-- Insurance -->
    <section class="service-section-v3 exclusive-plans">
        <div class="container">
            <br><br>
            <div class="text-center">
                <h2 class="section-title">Exclusive Insurance Plan</h2>
                <hr>
            </div>
            <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
                <div class="col-md-4 service-box-container">
                    <div style="border-top-left-radius: 50px; overflow: hidden; border-left: 1px solid #2a2a86;">
                        <img style="display: block; max-width: 100%; height: auto;" src="{{ asset('assets/images/i1.jpg') }}">
                    </div>
                    <div
                        style="border-bottom-right-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86;border-bottom: 1px solid #2a2a86;">
                        <div class="service-box">
                            <h3 style="text-align: center;"> Denmohor Bima </h3>
                            <p style="text-align: justify;"> Denmohor Insurance plan is actually a savings insurance
                                plan. For making the family life fully confident & pure this policy can play a vital
                                role considering financial matters. Considering the reality <a
                                    href="denmohorbima.html"><strong>More...</strong></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-box-container">
                    <div style="border-top-left-radius: 50px; overflow: hidden;">
                        <img style="display: block; max-width: 100%; height: auto;" src="{{ asset('assets/images/i2.jpg') }}">
                    </div>
                    <div
                        style="border-bottom-right-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86;border-bottom: 1px solid #2a2a86;">
                        <div class="service-box">
                            <h3 style="text-align: center;"> DPS Gold</h3>
                            <p style="text-align: justify;">For providing financial security of mass people & make
                                savings minded Alpha Islami Life Insurance Limited has introduced “Monthly Saving
                                Insurance” plan. Aim of this plan is to <a
                                    href="DPS-Gold.html"><strong>More...</strong></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-box-container">
                    <div style="border-top-left-radius: 50px; overflow: hidden;">
                        <img style="display: block; max-width: 100%; height: auto;" src="{{ asset('assets/images/i3.jpg') }}">
                    </div>
                    <div
                        style="border-bottom-right-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86;border-bottom: 1px solid #2a2a86;">
                        <div class="service-box">
                            <h3 style="text-align: center;"> Anticipated Endowment</h3>
                            <p style="text-align: justify;"> For making future life prospective 04 (four) stage plan of
                                Alpha Islami Life Insurance Limited is an attractive plan. Policyholder gets his whole
                                Sum Assured with profit by 04(four) installments <a
                                    href="anticipatedendowment 3Stage.html"><strong>More...</strong></a></p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 service-box-container">
                    <div style="border-top-left-radius: 50px; overflow: hidden;">
                        <img style="display: block; max-width: 100%; height: auto;" src="{{ asset('assets/images/i4.jpg') }}">
                    </div>
                    <div
                        style="border-bottom-right-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86;border-bottom: 1px solid #2a2a86;">
                        <div class="service-box">
                            <h3 style="text-align: center;"> Hajj Bima</h3>
                            <p style="text-align: justify;">For making the mass people financially secured and make then
                                savings minded Alpha Islami Life Insurance Limited has introduced “Hajj Insurance Plan”
                                Plan. Ultimate goal of this plan <a href="#"><strong>More...</strong></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-box-container">
                    <div style="border-top-left-radius: 50px; overflow: hidden;">
                        <img style="display: block; max-width: 100%; height: auto;" src="{{ asset('assets/images/i5.jpg') }}">
                    </div>
                    <div
                        style="border-bottom-right-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86;border-bottom: 1px solid #2a2a86;">
                        <div class="service-box">
                            <h3 style="text-align: center;"> Single Premium Insurance Plan </h3>
                            <p style="text-align: justify;"> For maximize your money “Single Premium Endowment Insurance
                                Plan” would be a great choice for you attractive part of this plan is you will get
                                double of your money after <a href="#"><strong>More...</strong></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-box-container">
                    <div style="border-top-left-radius: 50px; overflow: hidden;">
                        <img style="display: block; max-width: 100%; height: auto;" src="{{ asset('assets/images/more.jpg') }}">
                    </div>
                    <div
                        style="border-bottom-right-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86;border-bottom: 1px solid #2a2a86;">
                        <div class="service-box">
                            <h3 style="text-align: center;"> More Insurance-Plan </h3>
                            <p style="text-align: justify; line-height: 1.5;"> There are also several exclusive <a
                                    href="insuranceplan.html"> <strong>Insurance Plan</strong> </a> and supplimentary
                                plan in Alpha Islami Life Insurance Limited <a
                                    href="insuranceplan.html"><strong>More...</strong></a></p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Insurance end -->


    <!-- supplementary Start -->
    <section class="service-section-v3 supplementary-plan" style="background-color: #1b3a68;">
        <div class="container">
            <br><br>
            <div class="text-center">
                <h2 class="section-title" style="color: white;">Supplementary Plan</h2>
                <hr>
            </div>

            <div class="row ">
                <div class="col-lg-12">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="plan-item">
                                    <a href="accidentaldeathbenefit.html"><img
                                            style="display: block; max-width: 100%; height: auto;"
                                            src="{{ asset('assets/images/sup/430x260_Accidental-Death-Benefit.jpg') }}"
                                            alt="Accidental Death Benefit" title="Accidental Death Benefit"/></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan-item">
                                    <a href="criticalcare.html">
                                        <img style="display: block; max-width: 100%; height: auto;"
                                             src="{{ asset('assets/images/sup/430x260_Critical-Care.jpg') }}" alt="Critical Care"
                                             title="Critical Care"/>

                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan-item">
                                    <a href="embeddedpersonalaccident.html">
                                        <img style="display: block; max-width: 100%; height: auto;"
                                             src="{{ asset('assets/images/sup/430x260_Embedded-Personal-Accident.jpg') }}"
                                             alt="Embedded Personal Accident" title="Embedded Personal Accident"/>
                                    </a>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan-item">
                                    <a href="incomebenefitrider.html"><img
                                            style="display: block; max-width: 100%; height: auto;"
                                            src="{{ asset('assets/images/sup/430x260_Income-Benefit-Rider.jpg') }}"
                                            alt="Income Benefit Rider" title="Income Benefit Rider"/></a>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan-item">
                                    <a href="permanentdisability-accidentaleenefit.html"> <img
                                            style="display: block; max-width: 100%; height: auto;"
                                            src="{{ asset('assets/images/sup/430x260_Permanent-Disability-&-Accidental-Benefit.jpg') }}"
                                            alt="Permanent-Disability & Accidental Benefit"
                                            title="Permanent-Disability & Accidental Benefit"/></a>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan-item">
                                    <a href="plus.html">
                                        <img style="display: block; max-width: 100%; height: auto;"
                                             src="{{ asset('assets/images/sup/430x260_Plus.jpg') }}" alt="Plus" title="Plus"/>

                                    </a>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan-item">
                                    <a href="waiverofpremium.html"> <img
                                            style="display: block; max-width: 100%; height: auto;"
                                            src="{{ asset('assets/images/sup/430x260_Waiver-of-Premium.jpg') }}"
                                            alt="Waiver of Premium" title="Waiver of Premium"/></a>

                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
        <br/><br/>
    </section>
    <!-- supplementary end -->


    <!-- Mobile Apps Start -->
    <section class="hero-block-v2 pb-20">
        <div class="container">
            <div class="row" style="padding-top: 30px; padding-bottom: 10px;">
                <div class="col-md-12">
                    <div
                        style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; border: 1px solid #2a2a86 ">
                        <a href="https://play.google.com/store/apps/details?id=com.sslwireless.alil"
                           target="_blank"><img class="img-responsive" src="{{ asset('assets/images/mobileApp.png') }}"
                                                alt="Mobile Apps"> </a>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Mobile Apps end-->


    <!-- Recent News Start-->
    <section class="blog-section blog-grid v2 ptb-90">
        <div class="container">
            <div class="row">
                <div id="blogGrid">
                    <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                        <article class="post-wrapper"
                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                            <header class="featured-wrapper">

                                <a href="#" class="author"><img src="{{ asset('assets/images/blog/blog-three/author-1.jpg') }}"
                                                                alt=""></a>
                                <a href="#"><img src="{{ asset('assets/images/blog/blog-three/blog-1.jpg') }}" class="img-responsive "
                                                 alt="Image"
                                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; border: 1px solid #172a52  ;"></a>

                                <div class="entry-meta clearfix">
                                    <ul>
                                        <li>
                                            <span class="post-date"><a href="#"><i class="fa fa-calendar"></i> 27
                                                    December, 2021</a></span>
                                        </li>

                                    </ul>
                                </div><!-- /.entry-meta -->
                            </header><!-- /.post-thumbnail -->

                            <div class="blog-content">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">Monthly Staff General Meeting</a></h2>
                                </header><!-- /.entry-header -->

                                <div class="entry-content">
                                    <p>After Monthly Staff General Meeting Today at Head Office</p>

                                    <div class="readmore">
                                        <a href="#">Readmore</a>
                                    </div>

                                </div><!-- /.entry-content -->


                            </div><!-- /.blog-content -->
                        </article>
                    </div><!-- /.col-md-4 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                        <article class="post-wrapper"
                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                            <header class="featured-wrapper">

                                <a href="#" class="author"><img src="{{ asset('assets/images/blog/blog-three/author-1.jpg') }}"
                                                                alt=""></a>
                                <a href="#"><img src="{{ asset('assets/images/blog/blog-three/blog-2.jpg') }}" class="img-responsive "
                                                 alt="Image"
                                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; border: 1px solid #172a52  ;"></a>

                                <div class="entry-meta clearfix">
                                    <ul>
                                        <li><span class="post-date"><a href="#"><i class="fa fa-calendar"></i> 25 Aug
                                                    2015</a></span></li>

                                    </ul>
                                </div><!-- /.entry-meta -->
                            </header><!-- /.post-thumbnail -->

                            <div class="blog-content">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">৬ষ্ঠ এবং ২০২১ সালের ৪র্থ শরিয়াহ্ মিটিং</a></h2>
                                </header><!-- /.entry-header -->

                                <div class="entry-content">
                                    <p>আলহামদুলিল্লাহ, অদ্য ২৭/১২/২০২১ ইং আলফা ইসলামী লাইফ ইন্সুরেন্স লিমিটেড এর ৬ষ্ঠ
                                        এবং ২০২১ সালের ৪র্থ শরিয়াহ্ মিটিং কোম্পানীর প্রধান কার্যালয়ের বোর্ড রুমে
                                        অনুষ্ঠিত হয়। </p>

                                    <div class="readmore">
                                        <a href="#">Readmore</a>
                                    </div>

                                </div><!-- /.entry-content -->


                            </div><!-- /.blog-content -->
                        </article>
                    </div><!-- /.col-md-4 -->

                    <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                        <article class="post-wrapper"
                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                            <header class="featured-wrapper">

                                <a href="#" class="author"><img src="{{ asset('assets/images/blog/blog-three/author-1.jpg')}}"
                                                                alt=""></a>
                                <a href="#"><img src="{{ asset('assets/images/blog/blog-three/blog-3.jpg') }}" class="img-responsive "
                                                 alt="Image"
                                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; border: 1px solid #172a52  ;"></a>

                                <div class="entry-meta clearfix">
                                    <ul>
                                        <li><span class="post-date"><a href="#"><i class="fa fa-calendar"></i>
                                                    17 December, 2021</a></span></li>

                                    </ul>
                                </div><!-- /.entry-meta -->
                            </header><!-- /.post-thumbnail -->

                            <div class="blog-content">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">Kick-Off Training Program for Unit Manager’s
                                        </a></h2>
                                </header><!-- /.entry-header -->

                                <div class="entry-content">
                                    <p>Alhamdulillah! Kick-Off Training Program for Unit Manager’s (Rangpur Territory)
                                        Successfully completed today (17-12-21)</p>

                                    <div class="readmore">
                                        <a href="#">Readmore</a>
                                    </div>

                                </div><!-- /.entry-content -->


                            </div><!-- /.blog-content -->
                        </article>
                    </div><!-- /.col-md-4 -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Recent News end-->

    <section>
        <div class="container">
            <div class="cta-v1" style="border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                <div class="row">
                    <div class="col-sm-9">
                        <h2>Get More information For Your any Query</h2>
                        <p>You can contact us to talk more about your Insurance Plan.</p>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-primary">Message Us</a>
                    </div>
                </div><!-- /.row -->
            </div>
        </div><!-- /.container -->
    </section>
    <br><br><br>

@endsection
