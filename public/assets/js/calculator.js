jQuery(document).ready(function () {
    $('.date-field').datepicker({
        dateFormat: "dd/mm/yy",
        changeYear: true,
        changeMonth: true,
        yearRange: "-100:+0",
        onSelect: function (dateText) {
            $(this).change();
        }
    });
    $('#effective_date').change(function () {
        let date = $('#effective_date').val();
        if (date) $('#current_date').datepicker('option', 'minDate', date);
    });
    $('#sum_assured').keyup(function (){
        let sumAssured = $('#sum_assured').val();
        console.log('change: ' + sumAssured)
        if (sumAssured > 0) {
            $('#calculateBtn').show();
            return
        }
        $('#calculateBtn').hide();
    });
});

function isloading(is_enabled) {
    let loader = $('#loader');
    if (is_enabled == true) {
        loader.show();
        return;
    }
    loader.hide();
}

/**
 * birth date select event
 */
function onDateChange() {
    // isloading(true);
    let effective_date = $('#effective_date').val();
    let current_date = $('#current_date').val();
    if (current_date && effective_date) {
        let today = moment(current_date, 'DD/MM/YYYY');
        let ed = moment(effective_date, 'DD/MM/YYYY');
        let age = today.diff(ed, 'years');
        // isloading(false);
        if (age < 18) {
            alert('Minimum age should be 18 years');
            return;
        }
        $('#age').text(age + ' Years');
        $('#plan').removeAttr('disabled');
        $('#plandropdown').show();
        return
    }
}

function onSumAssuredChange() {
    let sumAssured = $('#sum_assured').val();
    if (sumAssured > 0) {
        $('#calculateBtn').show();
        return
    }
    $('#calculateBtn').hide();
}
/**
 * plan change event
 */
function onPlanChange() {
    let planId = $('#plan').val();
    console.log('plan id: ' + planId)
    if (planId) {
        console.log('show' + planId)
        $('#plan-selected').show();
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
        url: "test.html",
        method: 'GET',
        dataType: 'JSON'
    }).done(function (data) {
        console.log('data');

        $('#plan').removeAttr('disabled');
    }).fail(function () {
        alert('error')
    });
}

/**
 * get terms, payment, mode
 * @param plan_id
 */
function getTerms(plan_id) {

}

/**
 * calculate premium
 */
function calculate() {
    // $('#calculateBtn').text('Loading...').attr('disabled', 'disabled');
    let paymentMods = {
        'yearly': 1,
        'halfyearly' : 0.525,
        'quarterly' : 0.275,
        'monthly' : 0.0925
    };
    let mop = $('#payment_mode').val();
    let sum_assured = parseFloat($('#sum_assured').val());
    let premiumRate = 219.68; //dynamic
    let basicPremium = ((sum_assured / 1000) * premiumRate);
    let totalPremium = Math.round((basicPremium * paymentMods[mop]));
    $('#premiumRate').text(premiumRate);
    $('#basicPremium').text(totalPremium);
    $('#totalPremium').text(totalPremium);
    $('#sumAssured').text(sum_assured);
    $('#premiumModal').modal('show');
    // $('#calculateBtn').text('Calculate').removeAttr('disabled');
}
