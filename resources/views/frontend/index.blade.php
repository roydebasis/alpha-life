@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <!-- Intro Section -->
    <section id="home">
        <div id="tt-home-carousel" class="carousel slide  trendy-slider control-one" data-ride="carousel"
             data-interval="5000">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                    <div class="item {{$loop->index === 0 ? 'active' : ''}}">
                        <img src="{{ asset($slider->image) }}" alt="slider image" class="img-responsive">
                        <div class="carousel-caption">

                        </div>
                    </div>
                @endforeach

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
                        <a id="calculatorActivator" href="#creative-ideas" role="tab" data-toggle="tab">
                            <i class="flaticon-light110"></i>
                            <span>Premium Calculator</span>
                        </a>
                    </li>

                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    @if(isset($quotes))
                        @foreach($quotes as $quote)
                            @php
                                $details_url = route("frontend.quotes.show",[encode_id($quote->id), $quote->quote_by]);
                            @endphp
                            <!-- tab content for web design -->
                            @if($quote->quote_by === 'chairman')
                                <div class="row tab-pane fade in active" id="web-design">
                                    <div class="col-sm-7">
                                        <h2>{{ $quote->title }}</h2>
                                        <p>{{ $quote->intro }}</P>
                                        <a href="{{ $details_url }}" class="btn btn-primary"><i
                                                class="fa fa-long-arrow-right"></i> বিস্তারিত...</a>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="mac-screenshot">
                                            <img class="img-responsive" src="{{ asset($quote->image) }}" alt="Chairman"
                                                style="border-bottom-left-radius: 50px; border-top-right-radius:  50px;">
                                        </div>
                                    </div>
                                </div>
                            @elseif($quote->quote_by === 'ceo')
                                <div class="row tab-pane fade" id="apps-design">
                                    <div class="col-sm-6">
                                        <h2>{{ $quote->title }}</h2>
                                        <p>{{ $quote->intro }}</P>
                                        <a href="{{ $details_url }}" class="btn btn-primary"><i class="fa fa-long-arrow-right"></i>
                                            বিস্তারিত...</a>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="mac-screenshot">
                                            <img class="img-responsive" src="{{ asset($quote->image) }}" alt="CEO"
                                                style="border-bottom-left-radius: 50px; border-top-right-radius:  50px;">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif

                    <!-- tab content for application design -->
                    

                    <!-- tab content for Premium Calculator -->
                    <div class="tab-pane fade premium-calculator" id="creative-ideas">
                        <div class="row">
                            <div class="col-12"><h2>Premium Calculator</h2></div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="effective_date">Effective Date</label>
                                    <input type="text" onchange="onDateChange()" name="effective_date" class="date-field form-control" id="effective_date" placeholder="Effective Date">
                                </div>

                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="current_date">Today's Date</label>
                                    <input type="text" onchange="onDateChange()" name="current_date" class="date-field form-control" id="current_date" placeholder="Today's Date">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Result</label>
                                    <p><span id="age" data-age="" class="text-capitalize text-warning fon">N/A</span></p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="plan">Select Plan</label>
                                    <select name="plan" class="form-control" id="plan" disabled onchange="onPlanChange()">
                                        <option value="">Select Plan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="plan-selected">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="term" >Term</label>
                                    <select name="term" class="form-control" id="term">
                                        <option value="">Select Term</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="payment_mode">Mode of Payment</label>
                                    <select name="payment_mode" class="form-control" id="payment_mode">
                                        <option value="">Select Payment Mode</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sum_assured">Sum Assured</label>
                                    <input type="number" min="50000" placeholder="Assured Amount" name="sum_assured" class="form-control" id="sum_assured" />
                                    <small>Minimum Amount 50,000</small>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary btn-md text-center ml-auto" onclick="calculate()">Calculate</button>
                        </div>
                        <!--                    <button type="button" class="btn btn-primary btn-lg text-center ml-auto" data-toggle="modal" data-target="#premiumModal">Calculate</button>-->
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
                    <a href="{{ url('page/premium-calculator') }}">
                        <div class="process-box">
                            <i class="flaticon-calculate6"></i>
                            <h3>Premium Calculator</h3>
                        </div>
                    </a>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <a href="{{ url('plans') }}?category=1">
                        <div class="process-box">
                            <i class="flaticon-paint104"></i>
                            <h3>Insurance Plan </h3>
                        </div>
                    </a>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <a href="{{ url('plans') }}?category=2">
                        <div class="process-box">
                            <i class="flaticon-paint104"></i>
                            <h3>Supplementary Plan </h3>
                        </div>
                    </a>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <a href="{{ url('news') }}">
                        <div class="process-box">
                            <i class="flaticon-paint104"></i>
                            <h3>Recent News</h3>
                        </div>
                    </a>
                </div>
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
            @if(!$insurancePlans->isEmpty())
                <div class="row row-flex" style="padding-top: 20px; padding-bottom: 20px;">
                    @foreach($insurancePlans as $insurancePlan)
                        <div class="col-md-4 service-box-container">
                            <div style="background-color: white; height: 100%; overflow: hidden; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86;border-bottom: 1px solid #2a2a86; border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                                @if($insurancePlan->featured_image)
                                <div>
                                    <img style="display: block; max-width: 100%; height: auto;" src="{{ url($insurancePlan->featured_image) }}">
                                </div>
                                @endif
                                <div>
                                    <div class="service-box">
                                        <h3 style="text-align: center;" class="single-line"> {{ $insurancePlan->name }} </h3>
                                        <p style="text-align: justify;"> {{ $insurancePlan->intro }} <a
                                                href="{{ route('frontend.plans.show', ['slug' => $insurancePlan->slug]) }}"><strong>More...</strong></a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            @endif
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
            @if(!$suplementaryPlans->isEmpty())
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper hover-two">
                                @foreach($suplementaryPlans as $isuplementaryPlan)
                                    <div class="swiper-slide">
                                        <div class="plan-item">
                                            <a href="{{ route('frontend.plans.show', ['slug' => $isuplementaryPlan->slug]) }}">
                                                <div class="tt-overlay"></div>
                                                <img style="display: block; max-width: 100%; height: auto;"
                                                    src="{{ url($isuplementaryPlan->featured_image) }}"
                                                    alt="{{ $isuplementaryPlan->name }}" title="{{ $isuplementaryPlan->name }}"/>
                                                <div class="portfolio-info">
                                                    <h3 class="project-title">{{ $isuplementaryPlan->name }}</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            @endif
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
            <div class="row row-flex">
                @foreach ($blogs as $blog)
                    @php
                        $details_url = route("frontend.posts.show",[encode_id($blog->id), $blog->slug]);
                    @endphp
                    <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                        <article class="post-wrapper"
                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; height: 100%;">
                            <header class="featured-wrapper">
                                <a href="#" class="author">
                                    <img src="{{ asset('assets/images/blog/blog-three/author-1.jpg') }}">
                                </a>
                                @if($blog->banner_image)
                                <a href="{{ $details_url }}">
                                    <img src="{{$blog->banner_image}}" class="img-responsive" alt="{{ $blog->name }}" style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; border: 1px solid #172a52  ;">
                                </a>
                                @endif
                                <div class="entry-meta clearfix">
                                    <ul>
                                        <li>
                                            <span class="post-date"><a href="{{$details_url}}"><i class="fa fa-calendar"></i> {{ date_format($blog->created_at, 'd F, Y') }}</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </header>
                            <div class="blog-content">
                                <header class="entry-header">
                                    <h2 class="entry-title single-line"><a href="{{$details_url}}">{{$blog->name}}</a></h2>
                                </header>
                                <div class="entry-content">
                                    <p>{{$blog->intro}}</p>
                                    <div class="readmore">
                                        <a href="{{$details_url}}">Readmore</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
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
                        <a href="{{ url('contacts') }}" class="btn btn-primary">Message Us</a>
                    </div>
                </div><!-- /.row -->
            </div>
        </div><!-- /.container -->
    </section>
    <br><br><br>

    <!-- premium calculator modal-->
    <div class="modal fade" id="premiumModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title" id="exampleModalLongTitle">Your Premium Calculation</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Premium Rate</td>
                                <td id='premiumRate'></td>
                            </tr>

                            <tr>
                                <td>Basic Premium Rate</td>
                                <td id='basicPremium'></td>
                            </tr>
                            <tr>
                                <td>Total Premium</td>
                                <td id='totalPremium'></td>
                            </tr>
                            <tr>
                                <td>Sum Assured</td>
                                <td id='sumAssured'></td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                    <small>Premium calculator is an informative tool intended for use as a guide tool only and the calculations above are based on the information you have provided.
                        The figures and calculation used here may vary slightly and change at any time without notice.</small>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Try Again</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end premium calculator modal-->
@endsection

@push('after-scripts')
    <script type="text/javascript">
        var apiUrl = "{{ config('alpha.api_url') }}";
        jQuery(document).ready(function () {
            getPlans();
            onDateChange();
            $('.date-field').datepicker({
                dateFormat: "dd/mm/yy",
                changeYear: true,
                changeMonth: true,
                yearRange: "-100:+0",
                onSelect: function(dateText) {
                    $(this).change();
                }
            });
            $('#current_date').datepicker('setDate', new Date());
            $('#effective_date').change(function() {
                let date = $('#effective_date').val();
                if (date) $('#current_date').datepicker('option', 'minDate', date);
            });
        });

        /**
         * birth date select event
         */
        function onDateChange() {
            let effective_date = $('#effective_date').val();
            let current_date = $('#current_date').val();
            if (current_date && effective_date) {
                let today = moment(current_date,'DD/MM/YYYY');
                let ed = moment(effective_date,'DD/MM/YYYY');
                let age = today.diff(ed, 'years');
                if (age < 18) { alert('Minimum age should be 18 years'); return; }
                $('#age').text(age + ' Years').attr('data-age', age);
                $('#plan').removeAttr('disabled');
                return
            }
            $('#plan').attr('disabled');
        }
        /**
         * plan change event
         */
        function onPlanChange() {
            let planId = $('#plan').val();
            if (planId) {
                getPlanConfig(planId);
                return;
            }
            $('#plan-selected').hide();
        }
        function onSuplementaryChange() {
            $('#health-insurance').show();
        }

        /**
         * get plans according to age
         * @param birth_date
         */
        function getPlans(birth_date) {
            $.ajax({
                url: apiUrl + "public/calc/plans",
                method: 'GET',
                dataType: 'JSON'
            }).done(function(data) {
                if (data.status == 200 && data.data.plans.length) {
                    $('#plan').find('option').not(':first').remove();
                    data.data.plans.forEach(function(item) {
                        $('<option>').val(item.plan_no).text(item.plan_name).appendTo('#plan');

                    });
                }
            }).fail(function() {
                alert('error')
            });
        }

        /**
         * get plans according to age
         * @param birth_date
         */
        function getPlanConfig(planId) {
            $.ajax({
                url: apiUrl + "public/calc/plan-conf/" + planId,
                method: 'GET',
                dataType: 'JSON'
            }).done(function(data) {
                if (data.status == 200) {
                    if (data.data.terms) {
                        setTerms(data.data.terms);
                    }
                    if (data.data.mode_of_payments) {
                        setPaymentModes(data.data.mode_of_payments);
                    }
                    $('#plan-selected').show();
                }
            }).fail(function() {
                alert('error')
            });
        }

        /**
         * set terms
         * @param terms
         */
        function setTerms(terms) {
            if (terms.length) {
                $('#term').find('option').not(':first').remove();
                terms.forEach(function (term) {
                    $('<option>').val(term).text(term).appendTo('#term');
                });
            }
        }

        /**
         * set payment modes
         * @param modes
         */
        function setPaymentModes(modes) {
            if (modes.length) {
                $('#payment_mode').find('option').not(':first').remove();
                modes.forEach(function (mode) {
                    $('<option>').val(mode).text(mode).appendTo('#payment_mode');
                });
            }
        }

        /**
         * calculate premium
         */
        function calculate() {
            let age = $('#age').data('age');
            let plan_no = $('#plan').val();
            let term = $('#term').val();
            let mode_of_payment = $('#payment_mode').val();
            let sum_assured = $('#sum_assured').val();
            let supplementary_covers = '';

            if (!age) {
                alert('Please Enter Age');
                return;
            }
            if (!plan_no) {
                alert('Please Select Plan');
                return;
            }
            if (!term) {
                alert('Please Select Term');
                return;
            }
            if (!mode_of_payment) {
                alert('Please Select Payment Mode');
                return;
            }
            if (!sum_assured) {
                alert('Please Enter Sum Assured');
                return;
            }

            $.ajax({
                url: apiUrl + "public/calc/calculate",
                method: 'POST',
                dataType: 'JSON',
                data: {age: age, plan_no: plan_no, term: term, mode_of_payment: mode_of_payment, sum_assured: sum_assured, supplementary_covers: supplementary_covers}
            }).done(function(response) {
                if (response.status == 200) {
                    let rate = response.data.rate ? parseInt(response.data.rate).toFixed(2) : '';
                    $('#premiumModal #premiumRate').text(rate);
                    $('#premiumModal #basicPremium').text(response.data.basic_premium);
                    $('#premiumModal #totalPremium').text(response.data.total);
                    $('#premiumModal #sumAssured').text(sum_assured);
                    $('#premiumModal').modal('show');
                }
            }).fail(function() {
                alert('error: Cant process your  request right  now. Please try some time later.')
            });
        }
    </script>
@endpush
