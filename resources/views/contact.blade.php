@extends('layouts.app')

@section('content')
 
<form action="/" class="form-transparent cell  text-center tile  wallpaper wallpaper-footer" enctype="multipart/form-data" method="post" novalidate="novalidate"> <div class="grid-x grid-padding-x">
 
    @csrf
 
    


                    <input type="hidden" name="FormId" tabindex="0">
                    <input id="FormName" name="FormName" type="hidden" value="Get your free quote - hero" tabindex="0">
                    <input data-val="true" data-val-required="The RecordId field is required." id="RecordId" name="RecordId" type="hidden" tabindex="0">
                    <input id="PreviousClicked" name="PreviousClicked" type="hidden" value="" tabindex="0">

                    <input type="hidden" name="FormStep" value="0" tabindex="0">
                    <input type="hidden" name="RecordState" tabindex="0">
                    <div class="contourPage grid-x grid-padding-x grid-container">

                            <div class="large-12 cell ">
                                <h2 class="contourPageName /*e-stars-after*/ h3" style="color:#ac4c7c">Get your FREE card payment quote</h2>
                            </div>
<br>
                                <!--Enter Full Name Section-->
                                    <div class="input-group cell">
                                        <div class="umbraco-forms-field fullname shortanswer mandatory">
                                            <div class="form-label-group">
                                                <input type="text" class="text input-group-field" value="" maxlength="500" placeholder="Enter your full name" data-val="true" data-val-required="Please provide a value for Full name" tabindex="0">
                                                    <label class="fieldLabel input-group-helptext">
                                                        Full name                                                     </label>

                                                    <span class="input-group-error">
                                                        <span class="field-validation-error" data-valmsg-replace="true"></span>

                                                    </span>
                                            </div>

                                        </div>
                                    </div>

                                    <!--Enter Business Name Section-->
                                    <div class="input-group cell">
                                        <div class="umbraco-forms-field businessname shortanswer mandatory alternating">
                                            <div class="form-label-group">
                                                <input type="text" class="text input-group-field" value="" maxlength="500" placeholder="The name of your business" data-val="true" data-val-required="Please provide a value for Business name" tabindex="0">
                                                    <label class="fieldLabel input-group-helptext">
                                                        Business name                                                     </label>

                                                    <span class="input-group-error">
                                                        <span class="field-validation-error" data-valmsg-replace="true"></span>

                                                    </span>
                                            </div>

                                        </div>
                                    </div>

                                    <!--Enter Contact Number Section-->
                                    <div class="input-group cell">
                                        <div class="umbraco-forms-field contactnumber shortanswer mandatory">
                                            <div class="form-label-group">
                                                <input type="text" class="text input-group-field" value="" maxlength="500" placeholder="Please contact me on this number" data-val="true" data-val-required="Please provide a value for Contact number" data-val-regex="Please enter a valid phone number" data-regex="^[0-9]*$" tabindex="0">
                                                    <label class="fieldLabel input-group-helptext">
                                                        Contact number
                                                      </label>

                                                    <span class="input-group-error">
                                                        <span class="field-validation-error" data-valmsg-replace="true"></span>

                                                    </span>
                                            </div>

                                        </div>
                                    </div>

                                    <!--Enter Pass Code Section-->
                                    <div class="input-group cell">
                                        <div class="umbraco-forms-field postcode shortanswer mandatory alternating">



                                            <div class="form-label-group">
                                                <input type="text" class="text input-group-field" value="" maxlength="500" placeholder="Enter your postcode" data-val="true" data-val-required="Please provide a value for Postcode" tabindex="0">

                                                    <label class="fieldLabel input-group-helptext">
                                                        Postcode                                                     </label>

                                                    <span class="input-group-error">
                                                        <span class="field-validation-error" data-valmsg-replace="true"></span>

                                                    </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="input-group cell">
                                        <div class="umbraco-forms-field referral referrerfield">



                                            <div class="form-label-group">


                                                    <span class="input-group-error">
                                                        <span class="field-validation-error" data-valmsg-replace="true"></span>

                                                    </span>
                                            </div>

                                        </div>
                                    </div>

                        <div style="display: none">
                            <input type="text" tabindex="0">
                        </div>
                        <div class=" large-12 cell">
                                <button name="submitbtn" type="submit" href="#" class="button primary large" tabindex="0">Get your free quote</button>
                        </div>
                    </div>
                </div>
<input name="ufprt" type="hidden"></form>
   
 
</form>
 
 
@endsection