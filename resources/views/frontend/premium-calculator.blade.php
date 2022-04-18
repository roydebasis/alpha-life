@extends('frontend.layouts.app')

@section('title') {{ app_name() }} @endsection

@section('content')
    <x-page-header pageTitle="Premium Calculator"/>
    <section class="service-section-v3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 service-box-container curved-border no-padding">
                    <div style="border-top-left-radius: 50px; overflow: hidden;">
                        <img style="display: block; max-width: 100%; height: auto;" src="{{ asset('assets/images/banner_premium_calculator.png') }}">
                    </div>
                    <div class="premium-calculator" id="creative-ideas">

                        <div class="row">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

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
@push('after-styles')
    <style>
        .service-box-container { margin: 20px 0 80px; }
        .curved-border {
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            overflow: hidden;
            background-color: white;
            border-left: 1px solid #2a2a86;
            border-right: 1px solid #2a2a86;
            border-bottom: 1px solid #2a2a86;
        }
        .premium-calculator { padding: 30px; }
    </style>
@endpush
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
