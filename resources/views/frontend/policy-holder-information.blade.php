@extends('frontend.layouts.app')

@section('title') {{ app_name() }} @endsection

@section('content')
    <x-page-header pageTitle="Policy Holder Information"/>
    <section id="app" class="service-section-v3 policy-holder-info">
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
                                <select name="businessMonth" required="required" class="form-control" id="businessMonth"></select>
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
                                <label class="control-label" for="image">Image[JPEG,JPG,PNG]<span class="text-danger">*</span></label>
                                <input type="file" accept=".png,.jpg,.jpeg" name="image" id="image" onchange="handleFileInput(event, 'image')" required="required" class="form-control" placeholder="Upload" />
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
                                    <option value="" disabled selected>Select Type</option>
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
                                <input type="text" onblur="onAgeChange()" name="age" id="age" required="required" class="form-control" placeholder="Age" />
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
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Buddist">Buddist</option>
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
                                <label class="control-label" for="nidBRegPass">NID/Birth Reg./Passport[JPEG,JPG,PNG]<span class="text-danger">*</span></label>
                                <input name="nidBRegPass" accept=".jpg,.jpeg,.png" onchange="handleFileInput(event, 'nidBRegPass')" id="nidBRegPass" type="file" required="required" class="form-control" />
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
                            <div class="col-md-12 fontItalic bold">Nominee(s)</div>

                            <div class="col-md-12 text-center form-group">
                                <div id="nomineeList">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="10%">Image</th>
                                                <th width="30%">Name</th>
                                                <th width="10%">Age</th>
                                                <th width="10%">%</th>
                                                <th width="20%">Relation</th>
                                                <th width="10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                </div>
                                <button type="button" class="btn-info btn-sm" onclick="showNomineeModal()">Add Nominee</button>
                            </div>
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
                                <input type="number" name="childAge" id="childAge" required="required" class="form-control" placeholder="Child Age" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="childAgeProof">Age Proof</label>
                                <select name="childAgeProof" id="childAgeProof" required="required" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="childImage">Image</label>
                                <input type="file" accept=".jpg,.jpeg,.png" onchange="handleFileInput(event, 'childImage')" name="childImage" id="childImage" required="required" class="form-control" />
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
                                <label class="control-label" for="suppleName">Supple. Name</label>
                                <select name="pensionAge" id="suppleName" required="required" class="form-control">
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
                                    <option value="HI only">HI only</option>
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
    </section>

    <!-- nominee modal-->
    <div class="modal fade" id="nomineeModal" tabindex="-1" role="dialog" aria-labelledby="nomineeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title">Add Nominee</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="nomineeAddForm">
                        <div class="form-group">
                            <label class="control-label" for="nomineeName">Nominee Name<span class="text-danger">*</span></label>
                            <input name="nomineeName" id="nomineeName" type="text" required="required" class="form-control" placeholder="Nominee Name" />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nomineeAge">Nominee Age<span class="text-danger">*</span></label>
                            <input name="nomineeAge" id="nomineeAge" type="number" required="required" class="form-control" placeholder="Nominee Age" />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nomineePercentage">%<span class="text-danger">*</span></label>
                            <input name="nomineePercentage" id="nomineePercentage" type="number" max="100" required="required" class="form-control" placeholder="%" />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nomineeRelation">Relation<span class="text-danger">*</span></label>
                            <select name="nomineeRelation" id="nomineeRelation" required="required" class="form-control">
                                <option value="">Select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nomineeImage">Image[JPEG,JPG,PNG]<span class="text-danger">*</span></label>
                            <input name="nomineeImage" accept=".jpg,.jpeg,.png" onchange="handleFileInput(event, 'nomineeImage')" id="nomineeImage" type="file" required="required" class="form-control" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-center">
{{--                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Add</button>--}}
                    <button type="button" class="btn btn-primary btn-sm" onclick="addNominee()">Add</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end nominee modal-->
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
        #nomineeModal .form-control {
            height: auto;
            padding: 10px;
            font-size: 14px;
            line-height: 20px;
        }
        #nomineeModal .form-group {
            margin-bottom: 10px
        }
        .nominee-image {
            width: 40px;
            height: 40px;
        }
    </style>
@endpush
@push('after-scripts')
    <script type="text/javascript">
        var apiUrl = "{{ config('alpha.api_url') }}";
        var nominees = [];
        var tempNomImage;
        jQuery(document).ready(function () {
            //default data
            businessMonths();
            getOccupations();
            getDivisions();
            getAgeProof();
            getEduList();
            getRelationList();
            getRelationListWithPayee();
            getSuppName();
            getClauseName();
            getExtraName();
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

                // $(".form-group").removeClass("has-error");
                // for (var i = 0; i < curInputs.length; i++) {
                //     if (!curInputs[i].validity.valid) {
                //         isValid = false;
                //         $(curInputs[i]).closest(".form-group").addClass("has-error");
                //     }
                // }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });
            $('div.setup-panel div a.btn-success').trigger('click');
            // Step wise form end
            $(document).on('change','#division',function(){
                $('#upazilla').html("<option value=''>Select</option>");
                let division = $(this).find('option:selected').val();
                if(!division) return;
                getDistricts(division);
            });

            $(document).on('change','#district',function(){
                // $('#upazilla').empty();
                let district = $(this).find('option:selected').val();
                if(!district) return;
                getThana(district);
            });

            $('#nomineeModal').on('shown.bs.modal', function () {
                tempNomImage = '';
            });
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
                getTerms(planId);
                getMOP(planId);
            }
            // $('#plan-selected').hide();
        }
        function onSuplementaryChange() {
            $('#health-insurance').show();
        }

        /**
         * get plans according to age
         * @param birth_date
         */
        function getPlans() {
            $.ajax({
                url: apiUrl + "public/misc/policy-holder-plans",
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
                console.log('Failed loading Plans');
            });
        }

        /**
         * get plans according to age
         * @param birth_date
         */
        function getTerms(planId) {
            $.ajax({
                url: apiUrl + "public/misc/policy-holder-terms/" + planId,
                method: 'GET',
                dataType: 'JSON'
            }).done(function(response) {
                generateDropdownOptions(response.data.terms, 'term');
            }).fail(function() {
                console.log('Failed loading terms');
            });
        }

        /**
         * set terms
         * @param terms
         */
        function getMOP(planId) {
            $.ajax({
                url: apiUrl + "public/misc/policy-holder-mop/" + planId,
                method: 'GET',
                dataType: 'JSON'
            }).done(function(response) {
                generateDropdownOptions(response.data.mop, 'paymentMethod');
            }).fail(function() {
                console.log('Failed loading MOP');
            });
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
        function showNomineeModal() {
            $('#nomineeModal').modal('show');
        }

        function businessMonths() {
            $.ajax({
                url: apiUrl + "public/get-business-month",
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data, 'businessMonth');
                }
            }).fail(function() {
                console.error('Could not load businessMonths')
            });
        }

        function generateDropdownOptions(data, elemId, valueKey = '', displayKey = '') {
            let i = 0;
            let total = data.length;
            // let options = '<option value="" >Select</option>';
            $('#'+elemId).find('option').not(':first').remove();
            let options = '';
            for(i; i < total; i++) {
                options += (valueKey && displayKey) ?
                    "<option value='"+data[i][valueKey]+"'>"+data[i][displayKey]+"</option>"
                    : "<option value='"+data[i]+"'>"+data[i]+"</option>";
            }
            $('#'+elemId).append(options);
        }

        function getOccupations() {
            $.ajax({
                url: apiUrl + "public/get-occupations",
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data, 'occupation');
                }
            }).fail(function() {
                console.error('Could not load occupations')
            });
        }

        function getDivisions() {
            $.ajax({
                url: apiUrl + "public/bd/divisions",
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data.divisions, 'division', 'id', 'name');
                }
            }).fail(function() {
                console.error('Could not load division')
            });
        }

        function getDistricts(divisionId) {
            $.ajax({
                url: apiUrl + "public/bd/districts/"+divisionId,
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data.districts, 'district', 'id', 'name');
                }
            }).fail(function() {
                console.error('Could not load division')
            });
        }

        function getThana(districtId) {
            $.ajax({
                url: apiUrl + "public/misc/thana-by-district?district="+districtId,
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data.thana, 'upazilla', '', '');
                }
            }).fail(function() {
                console.error('Could not load upazilas')
            });
        }

        function getAgeProof() {
            $.ajax({
                url: apiUrl + "public/age-proof",
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data, 'ageProof');
                    generateDropdownOptions(response.data, 'childAgeProof');
                }
            }).fail(function() {
                console.error('Could not load age proof')
            });
        }

        function getEduList() {
            $.ajax({
                url: apiUrl + "public/misc/edu-classes",
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data.classLists, 'education', 'Sl', 'Class');
                    generateDropdownOptions(response.data.classLists, 'childClass', 'Sl', 'Class');
                }
            }).fail(function() {
                console.error('Could not load age proof')
            });
        }

        function getRelationList() {
            $.ajax({
                url: apiUrl + "public/misc/relations",
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data.relations, 'nomineeRelation', 'key', 'name');
                    generateDropdownOptions(response.data.relations, 'guardianRelation', 'key', 'name');
                }
            }).fail(function() {
                console.error('Could not load relations')
            });
        }

        function getRelationListWithPayee() {
            $.ajax({
                url: apiUrl + "public/misc/child-relations",
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data.relations, 'relationWithPayee', '', '');
                }
            }).fail(function() {
                console.error('Could not load RelationListWithPayee')
            });
        }

        function getSuppName() {
            $.ajax({
                url: apiUrl + "public/misc/supple-name",
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data.suppleNames, 'suppleName', 'Code', 'SuppName');
                }
            }).fail(function() {
                console.error('Could not load supple-name')
            });
        }

        function getClauseName() {
            $.ajax({
                url: apiUrl + "public/misc/clause-names",
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data.clauseNames, 'clauseName', '', '');
                }
            }).fail(function() {
                console.error('Could not load getClauseName')
            });
        }

        function getExtraName() {
            $.ajax({
                url: apiUrl + "public/misc/extra-names",
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data.extraNames, 'extraName', '', '');
                }
            }).fail(function() {
                console.error('Could not load getExtraName')
            });
        }

        function onAgeChange() {
            let age = $('#age').val();
            if (!age) { return; }
            getPensionAge(age);
        }

        function getPensionAge(age) {
            $.ajax({
                url: apiUrl + "public/misc/pension-ages/" + age,
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    generateDropdownOptions(response.data.pensionAges, 'pensionAge', 'Sl', 'PAge');
                }
            }).fail(function() {
                console.error('Could not load getPensionAge')
            });
        }

        function handleFileInput(e, elmId) {
            const file = e.target.files;
            if (!file) return;
            let size = (file[0].size/1024);//converted to KB.
            let type = file[0].type.toLowerCase();
            if (size > 300) { //300KB
                document.getElementById(elmId).value = "";
                alert('Allowed File Size: 300KB');
            } else if (type !== "image/jpg" && type !== "image/jpeg" && type !== "image/png") {
                document.getElementById(elmId).value = "";
                alert('Invalid File Type. Allowed: JPG,PNG,JPEG');
            } else {
                if (elmId == 'nomineeImage') {
                    encodeImgtoBase64(e.target);
                }
            }
        }

        function addNominee() {
            var curInputs = $('#nomineeModal .modal-body').find("input, select, textarea"),
                isValid = true;
            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }
            if (!isValid) { return; }
            nominees.push({
                'name': $('#nomineeName').val(),
                'age': $('#nomineeAge').val(),
                'percentage': $('#nomineePercentage').val(),
                'relation': $('#nomineeRelation option:selected').val(),
                'image': tempNomImage,
            });
            listNominees(nominees);
            tempNomImage = '';
            closeNomineeModal();
        }

        function encodeImgtoBase64(element) {
            var file = element.files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                tempNomImage = reader.result;
            }
            reader.readAsDataURL(file);
        }
         function closeNomineeModal() {
             $('#nomineeName').val('');
             $('#nomineeAge').val('');
             $('#nomineePercentage').val('');
             $('#nomineeRelation').val('');
             $('#nomineeImage').val('');
             $('#nomineeModal').modal('hide');
        }
        function listNominees(data) {
            var rows = '';
            data.forEach((item, index) => {
                rows += '<tr id="nominee'+index+'">'
                    + '<td><img src="'+item.image+'" width="40px" height="40px" class="nominee-image"></td>'
                    + '<td class="text-left">'+item.name+'</td>'
                    + '<td class="text-left">'+item.age+'</td>'
                    + '<td class="text-left">'+item.percentage+'</td>'
                    + '<td class="text-left">'+item.relation+'</td>'
                    + '<td><a href="javascript:;" class="removeNominee" onclick="deleteNominee('+index+')" data-index="'+index+'"><i class="fa fa-times text-red"></i></a></td>'
                    + '</tr>';
            });
            $('#nomineeList tbody').html(rows).removeClass('hide');
        }

        function deleteNominee(index) {
            $('#nomineeList #nominee'+index).remove();
            nominees.splice(index,1);
        }

        // $('#image').prop('files');
    </script>
@endpush
