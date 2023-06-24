@extends('frontend.layouts.app')

@section('title') {{ app_name() }} @endsection

@section('content')
    <x-page-header pageTitle="Policy Holder Information"/>
    <section class="service-section-v3 policy-holder-info">
        <div class="container">
            <div class="row">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                            <p><small>Policy Holder Information</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p><small>Policy Information</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p><small>Chain Setup</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                            <p><small>PR Information</small></p>
                        </div>
                    </div>
                </div>
                <form role="form">
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                            <h3 class="panel-title">Policy Holder Information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-md-3">
                                <label class="control-label">Proposal No</label>
                                <input maxlength="100" disabled type="text" required="required" class="form-control" placeholder="Proposal No" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="commDate">Comm. Date</label>
                                <input name="commDate" id="commDate" type="text" required="required" class="form-control date-field" placeholder="Comm. Date" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="type">Type</label>
                                <select name="type" required="required" class="form-control" id="type">
                                    <option value="Standard" selected>Standard</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="businessMonth">Business Month</label>
                                <select name="businessMonth" required="required" class="form-control" id="businessMonth">
                                    <option value="">Select Type</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="proposalDate">Proposal Date</label>
                                <input name="proposalDate" id="proposalDate" type="text" required="required" class="form-control date-field" placeholder="Proposal Date" />
                            </div>
                            <div class="col-md-12"></div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Name</label>
                                <input name="name" id="name" type="text" required="required" class="form-control" placeholder="Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="image">Image</label>
                                <input type="file" name="image" id="image" required="required" class="form-control" placeholder="Upload" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="father">Father's Name</label>
                                <input name="father" id="father" type="text" required="required" class="form-control" placeholder="Father's Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="mother">Mother's Name</label>
                                <input name="mother" id="mother" type="text" required="required" class="form-control" placeholder="Mother's Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="spouseName">Spouse Name</label>
                                <input name="spouseName" id="spouseName" type="text" required="required" class="form-control" placeholder="Spouse Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="occupation">Occupation</label>
                                <select name="occupation" required="required" class="form-control" id="occupation">
                                    <option value="">Select Type</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="nationality">Nationality</label>
                                <input name="nationality" id="nationality" type="text" readonly required="required" value="Bangladesh" class="form-control" placeholder="Nationality" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="urbanRural">Urban\Rural</label>
                                <select name="urban_rural" required="required" class="form-control" id="urbanRural">
                                    <option value="">Select</option>
                                    <option value="URBAN">URBAN</option>
                                    <option value="RURAL">RURAL</option>
                                    <option value="ABROAD">ABROAD</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" required="required" class="form-control" placeholder="Mobile Number" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="email">Email ID</label>
                                <input type="text" name="email" id="email" required="required" class="form-control" placeholder="Email" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="dob">DOB</label>
                                <input type="text" name="dob" id="dob" required="required" class="form-control date-field" placeholder="DOB" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="age">Age</label>
                                <input type="text" name="age" id="age" required="required" class="form-control" placeholder="Age" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="ageProof">Age Proof</label>
                                <select name="ageProof" id="ageProof" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="education">Education</label>
                                <select name="education" id="education" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="religion">Religion</label>
                                <select name="religion" id="religion" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="sex">Sex</label>
                                <select name="sex" id="sex" required="required" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Hermaphrodite">Hermaphrodite</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="nidBRegPass">NID/Birth Reg./Passport</label>
                                <input name="nidBRegPass" id="nidBRegPass" type="file" required="required" class="form-control" />
                            </div>
                            <div class="col-md-12 fontItalic">Address</div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="division">Division</label>
                                <select name="division" required="required" class="form-control" id="division">
                                    <option value="">Select</option>
                                    <option value="URBAN">URBAN</option>
                                    <option value="RURAL">RURAL</option>
                                    <option value="ABROAD">ABROAD</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="district">District</label>
                                <select name="district" required="required" class="form-control" id="district">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="upazilla">Upazilla/PS</label>
                                <select name="upazilla" required="required" class="form-control" id="upazilla">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="address">Address</label>
                                <textarea rows="2" name="address" id="address" required="required" class="form-control" placeholder="Address"></textarea>
                            </div>
                            <div class="col-md-12 fontItalic">Nominee(s)</div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="nomineeName">Nominee Name</label>
                                <input name="nomineeName" id="nomineeName" type="text" required="required" class="form-control" placeholder="Nominee Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="nomineeAge">Nominee Age</label>
                                <input name="nomineeAge" id="nomineeAge" type="text" required="required" class="form-control" placeholder="Nominee Age" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="nomineePercentage">%</label>
                                <input name="nomineePercentage" id="nomineePercentage" type="text" required="required" class="form-control" placeholder="%" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="nomineeRelation">Relation</label>
                                <select name="nomineeRelation" id="nomineeRelation" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="nomineeImage">Image</label>
                                <input name="nomineeImage" id="nomineeImage" type="file" required="required" class="form-control" />
                            </div>
                            <div class="col-md-12 text-center form-group"><button type="button" class="btn-info btn-sm">Add Nominee</button></div>
                            <div class="col-md-12 fontItalic">Guardian</div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="guardianName">Guardian Name</label>
                                <input type="text" name="guardianName" id="guardianName" required="required" class="form-control" placeholder="Guardina Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="guardianAge">Guardian Age</label>
                                <input type="text" name="guardianAge" id="guardianAge" required="required" class="form-control" placeholder="Guardina Age" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="guardianRelation">Relation</label>
                                <select name="guardianRelation" id="guardianRelation" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="col-md-12 fontItalic">Child</div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="childName">Child Name</label>
                                <input type="text" name="childName" id="childName" required="required" class="form-control" placeholder="Child Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="childDob">DOB</label>
                                <input type="text" name="childDob" id="childDob" required="required" class="form-control date-field" placeholder="Child DOB" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="childAge">Age</label>
                                <input type="text" name="childAge" id="childAge" required="required" class="form-control" placeholder="Child Age" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="childAgeProof">Age Proof</label>
                                <select name="childAgeProof" id="childAgeProof" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="childImage">Image</label>
                                <input type="file" name="childImage" id="childImage" required="required" class="form-control" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="childClass">Class</label>
{{--                                <input type="text" name="childClass" id="childClass" required="required" class="form-control" placeholder="Class" />--}}
                                <select name="childClass" id="childClass" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="relationWithPayee">Relation With Payee</label>
                                <select name="relationWithPayee" id="relationWithPayee" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-2">
                        <div class="panel-heading">
                            <h3 class="panel-title">Policy Information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-md-3">
                                <label class="control-label" for="sumAssured">Sum Assured</label>
                                <input type="text" name="sumAssured" id="sumAssured" required="required" class="form-control" placeholder="Sum Assured" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="plan">Plan</label>
                                <select name="plan" id="plan" required="required" class="form-control" onchange="onPlanChange()">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="term">Term</label>
                                <select name="term" id="term" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="paymentMethod">Payment Method</label>
                                <select name="paymentMethod" id="paymentMethod" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="pensionAmount">Pension Amount</label>
                                <input type="number" name="pensionAmount" id="pensionAmount" required="required" class="form-control" placeholder="Pension Amount" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="pensionAge">Pension Age</label>
                                <select name="pensionAge" id="pensionAge" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="stipendTerm">Stipend Term</label>
                                <input type="number" name="stipendTerm" id="stipendTerm" required="required" class="form-control" placeholder="Stipend Term" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="stipendUnit">Stipend Unit</label>
                                <input type="number" name="stipendUnit" id="stipendUnit" required="required" class="form-control" placeholder="Stipend Unit"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="stipendAmount">Stipend Amount</label>
                                <input type="number" name="stipendAmount" id="stipendAmount" required="required" class="form-control" placeholder="Stipend Amount" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="sumRisk">Sum At Risk</label>
                                <input type="number" name="sumRisk" id="sumRisk" required="required" class="form-control" placeholder="Sum At Risk"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="premiumRate">Premium Rate</label>
                                <input type="number" name="premiumRate" id="premiumRate" required="required" class="form-control" placeholder="Premium Rate"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="pensionAge">Supple. Name</label>
                                <select name="pensionAge" id="pensionAge" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="suppPreRate">Supp Pre Rate</label>
                                <input type="number" name="suppPreRate" id="suppPreRate" required="required" class="form-control" placeholder="Supp Pre Rate" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="suppAge">Supp Age</label>
                                <input type="number" name="suppAge" id="suppAge" required="required" class="form-control" placeholder="Supp Age" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="limit">Limit</label>
                                <input type="number" name="limit" id="limit" required="required" class="form-control" placeholder="Limit" />
                            </div>

                            <div class="form-group col-md-3">
                                <label class="control-label" for="healthInsurance">Health Insurance</label>
                                <select name="healthInsurance" id="healthInsurance" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="clauseName">Clause Name</label>
                                <select name="clauseName" id="clauseName" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="clauseCode">Clause Code</label>
                                <input type="number" name="clauseCode" id="clauseCode" required="required" class="form-control" placeholder="Clause Code"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="extraName">Extra Name</label>
                                <select name="extraName" id="extraName" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="extraCode">Extra Code</label>
                                <input type="number" name="extraCode" id="extraCode" required="required" class="form-control" placeholder="Extra Code"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="extraPreRate">Extra Pre Rate</label>
                                <input type="number" name="extraPreRate" id="extraPreRate" required="required" class="form-control" placeholder="Extra Pre Rate"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="lienYear">Lien Year</label>
                                <input type="number" name="lienYear" id="lienYear" required="required" class="form-control" placeholder="Lien Year"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="lienPercent">Lien Percent</label>
                                <input type="number" name="lienPercent" id="lienPercent" required="required" class="form-control" placeholder="Lien Percent"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="lienType">Lien Type</label>
                                <select name="lienType" id="lienType" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="basicPremium">Basic Premium</label>
                                <input type="number" name="basicPremium" id="basicPremium" required="required" class="form-control" placeholder="Basic Premium"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="suppPremium">Supp. Premium</label>
                                <input type="number" name="suppPremium" id="suppPremium" required="required" class="form-control" placeholder="Supp. Premium"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="fePremium">FE Premium</label>
                                <input type="number" name="fePremium" id="fePremium" required="required" class="form-control" placeholder="FE Premium"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="oePremium">OE Premium</label>
                                <input type="number" name="oePremium" id="oePremium" required="required" class="form-control" placeholder="OE Premium"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="hExtraLoading">H. Extra/Loading</label>
                                <input type="number" name="hExtraLoading" id="hExtraLoading" required="required" class="form-control" placeholder="H. Extra/Loading"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="totalPremium">Total Premium</label>
                                <input type="number" name="totalPremium" id="totalPremium" required="required" class="form-control" placeholder="Total Premium"/>
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-3">
                        <div class="panel-heading">
                            <h3 class="panel-title">Chain Setup</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-md-3">
                                <label class="control-label" for="agencyCode">Agency Code</label>
                                <input name="agencyCode" id="agencyCode" type="text" required="required" class="form-control" placeholder="Agency Code" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="agencyName">Agency Name</label>
                                <input name="agencyName" id="agencyName" type="text" required="required" class="form-control" placeholder="Agency Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="organizationCode">Organization Code</label>
                                <input name="organizationCode" id="organizationCode" type="text" required="required" class="form-control" placeholder="Organization Code" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="organizationName">Organization Name</label>
                                <input name="organizationName" id="organizationName" type="text" required="required" class="form-control" placeholder="Organization Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="serviceCellCode">Service Cell Code</label>
                                <input name="serviceCellCode" id="serviceCellCode" type="text" required="required" class="form-control" placeholder="Service Cell Code" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="serviceCellName">Service Cell Name</label>
                                <input name="serviceCellName" id="serviceCellName" type="text" required="required" class="form-control" placeholder="Service Cell Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="businessWing">Business Wing</label>
                                <input name="businessWing" id="businessWing" type="text" required="required" class="form-control" placeholder="Business Wing" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="finanicalAssociate">Financial Associate</label>
                                <input name="finanicalAssociate" id="finanicalAssociate" type="text" required="required" class="form-control" placeholder="Finanical Associate" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="finanicalAssociate">Financial Associate</label>
                                <input name="finanicalAssociate" id="finanicalAssociate" type="text" required="required" class="form-control" placeholder="Finanical Associate" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="faCodeName">FA Code and Name</label>
                                <input name="faCodeName" id="faCodeName" type="text" required="required" class="form-control" placeholder="FA Code and Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="umCodeName">UM Code and Name</label>
                                <input name="umCodeName" id="umCodeName" type="text" required="required" class="form-control" placeholder="UM Code and Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="bmCodeName">BM Code and Name</label>
                                <input name="bmCodeName" id="bmCodeName" type="text" required="required" class="form-control" placeholder="BM Code and Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="asmCodeName">ASM Code and Name</label>
                                <input name="asmCodeName" id="asmCodeName" type="text" required="required" class="form-control" placeholder="ASM Code and Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="smCodeName">SM Code and Name</label>
                                <input name="smCodeName" id="smCodeName" type="text" required="required" class="form-control" placeholder="SM Code and Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="ssmCodeName">SSM Code and Name</label>
                                <input name="ssmCodeName" id="ssmCodeName" type="text" required="required" class="form-control" placeholder="SSM Code and Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="amCodeName">AM Code and Name</label>
                                <input name="amCodeName" id="amCodeName" type="text" required="required" class="form-control" placeholder="AM Code and Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="dcmoCodeName">DCMO Code and Name</label>
                                <input name="dcmoCodeName" id="dcmoCodeName" type="text" required="required" class="form-control" placeholder="DCMO Code and Name" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="cmoCodeName">CMO Code and Name</label>
                                <input name="cmoCodeName" id="cmoCodeName" type="text" required="required" class="form-control" placeholder="CMO Code and Name" />
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-4">
                        <div class="panel-heading">
                            <h3 class="panel-title">PR Information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-md-3">
                                <label class="control-label" for="prNumber">PR Number</label>
                                <input name="prNumber" id="prNumber" type="text" required="required" class="form-control" placeholder="PR Number" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="prDate">PR Date</label>
                                <input name="prDate" id="prDate" type="text" required="required" class="form-control date-field" placeholder="PR Date" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="prAmount">PR Amount</label>
                                <input name="prAmount" id="prAmount" type="text" required="required" class="form-control" placeholder="PR Amount" />
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-success pull-right" type="submit">Finish!</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
{{--        https://bootsnipp.com/snippets/j6rkb--}}
    </section>

    <!-- premium calculator modal-->
{{--    <div class="modal fade" id="premiumModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <span class="modal-title" id="exampleModalLongTitle">Your Premium Calculation</span>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-bordered">--}}
{{--                            <tr>--}}
{{--                                <td>Premium Rate</td>--}}
{{--                                <td id='premiumRate'></td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <td>Basic Premium Rate</td>--}}
{{--                                <td id='basicPremium'></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Total Premium</td>--}}
{{--                                <td id='totalPremium'></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Sum Assured</td>--}}
{{--                                <td id='sumAssured'></td>--}}
{{--                            </tr>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                    <hr>--}}
{{--                    <small>Premium calculator is an informative tool intended for use as a guide tool only and the calculations above are based on the information you have provided.--}}
{{--                        The figures and calculation used here may vary slightly and change at any time without notice.</small>--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Try Again</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- end premium calculator modal-->
@endsection
@push('after-styles')
    <style>
        .fontItalic {
            font-style: italic;
        }
        .policy-holder-info .has-error .form-control {
            border-color: #a94442;
        }
        .stepwizard-step p {
            margin-top: 0px;
            color:#666;
        }
        .stepwizard-row {
            display: table-row;
        }
        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
            margin-top: 30px;
        }
        .stepwizard-step button[disabled] {
            /*opacity: 1 !important;
            filter: alpha(opacity=100) !important;*/
        }
        .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
            opacity:1 !important;
            color:#bbb;
        }
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content:" ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-index: 0;
            left: 0;
            right: 0;
        }
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
        form {
            margin-bottom: 80px;
        }
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
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
                yearRange: "-100:+10",
                onSelect: function(dateText) {
                    $(this).change();
                }
            });
            let currDate = new Date();
            $('#dob, #childDob, #riskDate, #proposalDate, #commDate').datepicker('option', 'maxDate', currDate);
            // $('#effective_date').datepicker('option', 'minDate', new Date());

            // Step wise form start
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-success').addClass('btn-default');
                    $item.addClass('btn-success');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    // curInputs = curStep.find("input[type='text'],input[type='url'], input[type='file'], textarea, select"),
                    curInputs = curStep.find("input[type='text'],input[type='url'], textarea"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-success').trigger('click');
            // Step wise form end
        });

        /**
         * birth date select event
         */
        function onDateChange() {
            let effective_date = $('#effective_date').val();
            let birth_date = $('#birth_date').val();
            if (birth_date && effective_date) {
                birth_date = moment(birth_date,'DD/MM/YYYY');
                effective_date = moment(effective_date,'DD/MM/YYYY');
                let age = effective_date.diff(birth_date, 'years');
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