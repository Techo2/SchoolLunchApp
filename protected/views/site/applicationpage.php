<!--*******************Pop-up*************************************-->
<div class="modal fade" id="myModalSubmit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a type="button" class="close close_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" id="exampleModalLabel" style="color:#04abda">Please review your application details before submission</h4>                
            </div>
            <div class="modal-body">

                <!--*******************************************VAlues from ng-ApplicANT*************************************-->                  

                <div  class="childToggle" role="tab">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="true" aria-controls="collapseone"   >Applicant Information
                    </a>
                </div>
                <div id="collapseone" class="panel-collapse collapse in " role="tabpanel" aria-labelledby="headingOne">                                                                    
                    <div class="panel_border">
                        <div class="row">
                            <div class=" col-xs-12 col-sm-4">
                                <div class="form-group"><label>Name</label><div class="form_content">{{applicantInfo.name}} {{applicantInfo.lastname}}</div></div>
                            </div>
                            <div class=" col-xs-12 col-sm-4">
                                <div class="form-group"><label>Email</label><div class="form_content">{{applicantInfo.Email}}</div></div>
                            </div>
                            <div class=" col-xs-12 col-sm-4"><div class="form-group"><label>Phone</label><div class="form_content">{{applicantInfo.Phone}}</div></div></div>
                        </div>
                        <div class="row">
                            <div class=" col-xs-12 col-sm-8"> 
                                <div class="form-group"><label>Address</label><div class="form_content"><div>{{applicantInfo.Streetaddress}}</div>
                                        <div>{{applicantInfo.cityname}}</div>
                                        <div>{{applicantInfo.state}}</div>
                                        <div>{{applicantInfo.Zip}}</div></div>
                                </div>
                            </div>
                            <div ng-show="applicantInfo.progrmmeoptions == 'Yes'" class=" col-xs-12 col-sm-4">
                                <div class="form-group"><label>Case Number</label><div class="form_content">{{applicantInfo.casenumber}}</div></div> 
                            </div>
                        </div>               
                    </div>
                </div>

                <!--****************************child infoooooooooooo**********************************-->   

                <div  class="childToggle collapse_heading" role="tab">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo"   >Child Information
                    </a>
                </div>
                <div id="collapsetwo" class="panel-collapse collapse in" role="tabpanel" >                                                                    
                    <div class="panel_border">

                        <table class="table table-striped" >
                            <thead>
                                <tr>
                                    <th class="word_break">Name
                                    </th>
                                    <th class="word_break">Student
                                    </th>
                                    <th class="word_break">Category
                                    </th>
                                    <th ng-hide=" applicantInfo.progrmmeoptions == 'Yes'" class="word_break">Income type                   
                                    </th>
                                    <th ng-hide=" applicantInfo.progrmmeoptions == 'Yes'" class="word_break">Income
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="display in Childpop" >
                                    <td class="word_break">{{display.childFirstname}}&nbsp;{{display.childLastname}}</td>
                                    <td class="word_break"> {{display.student}}</td>
                                    <td class="word_break">
                                        <div class="form_content">{{display.childcategory1}}</div>
                                        <div class="form_content">{{display.childcategory2}}</div>
                                        <div class="form_content">{{display.childcategory3}}</div>
                                        <div class="form_content">{{display.childcategory4}}</div>
                                        <div class="form_content">{{display.childcategory5}}</div>                                                                                 
                                    </td>
                                    <td ng-hide=" applicantInfo.progrmmeoptions == 'Yes'" class="word_break">{{display.incometypes == null ? "-" : display.incometypes}}</td>
                                    <td ng-hide=" applicantInfo.progrmmeoptions == 'Yes'" class="word_break">{{display.income == null ? 0 : display.income| currency}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> 


                <!--****************************House infoooooooooooo**********************************-->
                <div ng-hide="divHouse" >
                    <div  class="childToggle collapse_heading" role="tab">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="true" aria-controls="collapsethree"   >All Household Information
                        </a>
                    </div>
                    <div id="collapsethree" class="panel-collapse collapse in" role="tabpanel">                                                                    
                        <div class="panel_border">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th >Name</th>
                                        <th >Income from work</th>
                                        <th >Income from assistance</th>
                                        <th >Income from other</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="display in Housepop" >
                                        <td class=" word_break">{{display.Firstname}}&nbsp;{{display.Lastname}}</td>                        
                                        <td class=" word_break">{{display.incometypefromwork == null ? "-" : display.incometypefromwork}}<br/>{{display.incomefromwork == null ? 0 : display.incomefromwork| currency}}</td>
                                        <td class=" word_break">{{display.incometypefromassistance == null ? "-" : display.incometypefromassistance}}<br/>{{display.incomefromassistance == null ? 0 : display.incomefromassistance| currency}}</td>
                                        <td class=" word_break">{{display.incometypefromother == null ? "-" : display.incometypefromother}}<br/>{{display.incomefromother == null ? 0 : display.incomefromother| currency}}</td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!--*******************************************VAlues from general Info*************************************-->
                <div  class="childToggle collapse_heading" role="tab">
                    <a  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour" >General Information
                    </a>
                </div>
                <div id="collapsefour" class="panel-collapse collapse in" role="tabpanel" >                                                                    
                    <div class="panel_border">
                        <div class="row">
                            <div class=" col-xs-12 col-sm-4"><div class="form-group"><label>Ethnicity</label>
                                    <div class="form_content">
                                        {{generalInfo.hispanicOrlatino == null ? "not hispanic or latino" : generalInfo.hispanicOrlatino}}

                                    </div>                    
                                </div>
                            </div>

                            <div class=" col-xs-12 col-sm-4"> <div class="form-group"><label>Total Household members </label>
                                    <div class="form_content" ng-model="total">
                                        {{selectChildNum -- selectHouseholdNum}}
                                    </div>                   
                                </div>
                            </div>
                            <div ng-show="!generalInfo.Ssn" class=" col-xs-12 col-sm-4"><div class="form-group"><label> SSN number </label>
                                    <div class="form_content">
                                        {{generalInfo.SSN == null ? "X" : "XXX-XX-"+generalInfo.SSN}}
                                    </div>                         
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-xs-12 col-sm-12"><div class="form-group"><label>Race</label>
                                    <div class="form_content">{{generalInfo.AmericanIndianOrAlaskanNative}}</div>
                                    <div class="form_content">{{generalInfo.Asian}}</div>
                                    <div class="form_content">{{generalInfo.BlackorAfricanAmerican}}</div>
                                    <div class="form_content">{{generalInfo.NativeHawaiianorOtherPacificIslander}}</div>
                                    <div class="form_content">{{generalInfo.white}}</div>                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-xs-12 col-sm-12"> 

                        <div id="Tremsandid" class="Tremsand">
                            <div  class="checkbox checkbox-info"><input  type="checkbox" id="accept" ng-model="checkpls" aria-label="Single checkbox One"/><label> “I certify (promise) that all information on this application is true and that all income is reported. I understand that this information is given in connection with the receipt of Federal funds, and that school officials may verify (check) the information. I am aware that if I purposely give
                                    false information, my children may lose meal benefits, and I may be prosecuted under applicable State and Federal laws.”</label></div>

                        </div>

                    </div>
                </div>
                <!--**************************************************Captcha**************************************************-->
                <?php
                session_start();
// Include the random string file for captcha
                require 'includes/rand.php';
// Set the session contents
                $_SESSION['captcha_id'] = $str;
                ?>
                <form  name="signup" id="signupform" method="post">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:15px; margin-top: 15px;">
                        <tr>
                            <td><div id="captchaimage"><img src="/captcha/image.php?<?php echo time(); ?>" alt="Captcha image" width="132" height="46" align="left" /></div></td>
                            <td></td>
                        </tr>
                    </table>
                    <div class="refresh_btn"><a href="" id="refreshimg" title="Click to refresh image"><i class="fa fa-refresh"></i></a></div>
                    <p class="signUpText"> <input type="text" maxlength="10" name="captcha" id="captcha"  value="Enter Verification Code" onfocus="if (this.value == 'Enter Verification Code'){this.value = ''}" onblur="if (this.value == ''){this.value = 'Enter Verification Code'}" />
                    </p><div class="status"></div>
                    <p class="clearfix">
                    <div  class="rfloat final_submit_btn" >                           
                        <input id="hideCap" class="btn btn-default btn_margin_L15 submit" type="submit" value="Submit">                  
                        <button class="btn btn-default btn_margin_L15 submit" data-dismiss="modal" aria-label="Close">Continue editing</button>
                    </div>
                    </p>
                </form>

                <!--************************************************************************************************************  -->      
            </div>     
        </div>
    </div>     
</div>


<!-- **********************************Content start**************************************************** -->
<div class="paddingtop50">
    <div id="applicantInfo" class="container  ">
        <div class="top_heading" style="margin-bottom:15px">Application For Free And Reduced Price School Meals
        </div>

        <!-- **********************************SECTION-1*******Applicant Information********************************************* -->
        <section id="applidiv" >   
            <div  class=" container_shadow ">

                <div class="padding10">
                    <div class="row">
                        <!-- ***************FORM LEFT******************** -->
                        <div class="col-xs-12 col-md-9 col-sm-9">
                            <div class="form_left">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="/images/applicant.png"  class="img-responsive" alt="Applicant Information">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Applicant Information</h4>                               
                                    </div>

                                </div>

                                <div class="form_right_mob">
                                    <p> If any Household Members (including you) currently participate in one or more of the following assistance programs:<mark href="#" data-toggle="tooltip" data-placement="bottom" title="SNAP is the Supplemental Nutrition Assistance Program, formerly known as food stamps. If you're enrolled in SNAP, you'll have a plastic EBT card (it looks like a debit card) and a 10- or 13-digit case number."> SNAP</mark> (Supplemental Nutrition Assistance Program), <mark href="#" data-toggle="tooltip" data-placement="bottom" title="TANF is the Temporary Assistance for Needy Families program. If you're enrolled in TANF, you're receiving a cash benefit. You also have a case number that's 10 or 13 digits long.">TANF</mark> (Temporary Assistance For Needy Families), or <mark href="#" data-toggle="tooltip" data-placement="bottom" title="FDPIR is the Food Distribution Program on Indian Reservations. If you're enrolled in FDPIR, you have a case number and an EBT card." >FDPIR</mark> (Food Distribution Program On Indian Reservations). Then case number is must.</p>
                                </div>
                                <div class="mandatory mob_display">(<sup> * </sup>) Please fill all the mandatory fields </div>

                                <div class="well well_mob" style="background:none; border:none">
                                    <form name="applicant" novalidate class="css-form" ng-submit="submit()" onload="validateForm()">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4 padding_LR5">
                                                <div class="form-group">
                                                    <label><sup>*</sup> First Name</label>
                                                    <input class="form-control" type="text" name="nameApp" minlength="3" maxlength="50" ng-pattern="/^[a-z ,.'-]+$/i"  onkeypress="return numberOnly(this, event)"
                                                           ng-minlength="3" ng-pattern="/^[a-z ,.'-]+$/i"  ng-model="applicantInfo.name" required /> 
                                                    <div class="err_msg" ng-show="(applicant.nameApp.required || submitted) && applicant.nameApp.$invalid">First Name is required.</div>       
                                                    <!--                                                    <div class="err_msg" ng-show="submitted && applicant.nameApp.$error.pattern" >Must be a valid Name.</div>-->
                                                    <div class="err_msg" ng-show="submitted && applicant.nameApp.submitted.minlength" >Name should be minimum 3 characters.</div>    
                                                </div>

                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 padding_LR5">
                                                <div class="form-group">
                                                    <label><sup>*</sup>Last Name</label>
                                                    <input class="form-control" type="text" name="nameApp1" minlength="3" maxlength="50" ng-pattern="/^[a-z ,.'-]+$/i" onkeypress="return numberOnly(this, event)"
                                                           ng-minlength="3" ng-pattern="/^[a-z ,.'-]+$/i" ng-model="applicantInfo.lastname" required /> 

                                                    <div class="err_msg" ng-show="(applicant.nameApp1.required || submitted) && applicant.nameApp1.$invalid">Last Name is required.</div> 
                                                    <!--                                                    <div class="err_msg" ng-show="submitted && applicant.nameApp1.$error.pattern" >Must be a valid Name.</div>-->
                                                    <div class="err_msg" ng-show="submitted && applicant.nameApp1.$error.minlength" >Name should be minimum 3 characters.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4 padding_LR5">
                                                <div class="form-group">
                                                    <label>Street Address</label>
                                                    <input class="form-control" name="StreetAddress" type="text"  maxlength="50"
                                                           ng-model="applicantInfo.Streetaddress" required/> 
                                                </div>
                                            </div>


                                            <div class="col-xs-12 col-sm-4 col-md-4 padding_LR5">
                                                <div class="form-group">
                                                    <label><sup>*</sup>City</label>
                                                    <input class="form-control" name="city" type="text" id="cities" maxlength="50"
                                                           ng-model="applicantInfo.cityname" ng-trim="false"  required />  
                                                    <div class="err_msg" ng-show="(applicant.city.required || submitted) && applicant.city.$invalid"> City is required.</div> 
                                                </div> 
                                            </div>


                                            <div class="col-xs-12 col-sm-4 col-md-4 padding_LR5">                              
                                                <div class="form-group">
                                                    <label><sup>*</sup>State</label>


                                                    <select name="State" class="form-control" placeholder="Select State" ng-options="child for child in states" ng-model="applicantInfo.state" required>
                                                        <option value="">Select State</option>
                                                    </select>

                                                    <div class="err_msg" ng-show="(applicant.State.required || submitted) && applicant.State.$invalid"> State is required.</div>

                                                </div>
                                            </div>        
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4 padding_LR5">                                        
                                                <div class="form-group">
                                                    <label><sup>*</sup>Zip</label>
                                                    <input class="form-control" type="text" name="zipcode" id="zipcode" maxlength="5" onkeypress="return isNumberKey(event)"
                                                           ng-model="applicantInfo.Zip"  ng-pattern="/^(?!0{5})\d{5}$/" required />  
                                                    <div class="err_msg" ng-show="(applicant.zipcode.required || submitted) && applicant.zipcode.$invalid" > Zip Code is required.</div> 
                                                    <div class="err_msg" ng-show="submitted && applicant.zipcode.$error.pattern" >Must be a valid Zip Code.</div>                               
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-4 col-md-4 padding_LR5">
                                                <div class="form-group">
                                                    <label>Phone</label>

                                                    <input class="form-control" name="phone" type="text" maxlength="10" onkeypress="return isNumberKey(event)"
                                                           ng-model="applicantInfo.Phone" ng-bind="applicantInfo.Phone | tel" ng-minlength="10" ng-pattern="/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/" required/>{{ applicantInfo.Phone | tel }} 
                                                    <!--                                                    <div class="err_msg" ng-show="applicant.phone.$error.pattern" >Must be a valid Phone Number.</div>                                  -->
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-4 col-md-4 padding_LR5">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email" type="email" maxlength="100"
                                                           ng-pattern="/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/"   ng-model="applicantInfo.Email" required/>                                                                                   
                                                    <div class="err_msg" ng-show="submitted && applicant.email.$error.email">Enter a valid Email</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class = "well-sm blue_low_opacity">
                                                Do any household members (including you) currently participate in one or more of the following assistance programs: <mark href="#" data-toggle="tooltip" data-placement="bottom" title="SNAP is the Supplemental Nutrition Assistance Program, formerly known as food stamps. If you're enrolled in SNAP, you'll have a plastic EBT card (it looks like a debit card) and a 10- or 13-digit case number."> SNAP</mark>, <mark href="#" data-toggle="tooltip" data-placement="bottom" title="TANF is the Temporary Assistance for Needy Families program. If you're enrolled in TANF, you're receiving a cash benefit. You also have a case number that's 10 or 13 digits long.">TANF</mark> or <mark href="#" data-toggle="tooltip" data-placement="bottom" title="FDPIR is the Food Distribution Program on Indian Reservations. If you're enrolled in FDPIR, you have a case number and an EBT card." >FDPIR</mark>?

                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input  type="radio"  name="appli"

                                                                        ng-click="checkConditon()"  ng-model="applicantInfo.progrmmeoptions" required  value="Yes" />
                                                                <label >Yes</label>
                                                            </div>
                                                            <div class="radio radio-inline">

                                                                <input   type="radio" name="appli"
                                                                         ng-click="checkConditon()"   ng-model="applicantInfo.progrmmeoptions" required ng-checked="true" value="No"  />

                                                                <label >No</label>
                                                                <input   type="hidden" 
                                                                         ng-model="progrmmeoptions"   required   hidden />
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-4">
                                                            <div ng-show="applicantInfo.progrmmeoptions == 'Yes'" class="casenumberinfo">
                                                                <div class="form-group" >

                                                                    <label><sup>*</sup>Case Number</label>
                                                                    <input name='Casenumber' class="form-control" type="text" maxlength="15"
                                                                           ng-model="applicantInfo.casenumber"  required />
                                                                    <div class="err_msg" ng-show="(applicant.Casenumber.$touched || submitted) && applicant.Casenumber.$invalid"> Case Number is required.</div>
                                                                </div>                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div id="child" class=" btn_continue">
                                            <button ng-hide="hideApp" type="submit" ng-click="validateApplicant();" class="btn btn-default btn-margin pull-right" id="step1">Continue</button>                                    
                                        </div> 
                                    </form>
                                </div>

                                <!-- **********************************SECTION-END**************************************************** -->
                            </div>
                        </div>
                        <!-- ***************FORM RIGHT******************** -->
                        <div class="col-xs-12 col-md-3 col-sm-3">
                            <div class="mandatory web_display">(<sup> * </sup>) Please fill all the mandatory fields </div>

                            <div class="right_content">
                                <div class="content_box">
                                    <div class="commentboxsection">
                                        <div class="commentboxsectiontop">
                                            <div class="commentboxsectionbottom">
                                                <div id="upper_left"></div>
                                                <div id="upper_right"></div>
                                                <div id="lower_left"></div>
                                                <div id="lower_right"></div>
                                                <div class="commentboxcontent">
                                                    <mark href="#" data-toggle="tooltip" data-placement="bottom" title="This application has to be submitted by a member of the household who is an adult." >Applicant</mark> should be over the age of 21.<br/>
                                                    If any Household Members (including you) currently participate in one or more of the following assistance programs:<mark href="#" data-toggle="tooltip" data-placement="bottom" title="SNAP is the Supplemental Nutrition Assistance Program, formerly known as food stamps. If you're enrolled in SNAP, you'll have a plastic EBT card (it looks like a debit card) and a 10- or 13-digit case number."> SNAP</mark> (Supplemental Nutrition Assistance Program), <mark href="#" data-toggle="tooltip" data-placement="bottom" title="TANF is the Temporary Assistance for Needy Families program. If you're enrolled in TANF, you're receiving a cash benefit. You also have a case number that's 10 or 13 digits long.">TANF</mark> (Temporary Assistance For Needy Families), or <mark href="#" data-toggle="tooltip" data-placement="bottom" title="FDPIR is the Food Distribution Program on Indian Reservations. If you're enrolled in FDPIR, you have a case number and an EBT card." >FDPIR</mark> (Food Distribution Program On Indian Reservations). Then case number is must.
                                                </div>
                                            </div>
                                        </div> </div></div> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- **********************************SECTION-2***********Child Information***************************************** -->

        <section  ng-hide="divChild" >
            <div  class=" container_shadow ">
                <div class="padding10">
                    <div id="element" class="row">
                        <!-- ***************FORM LEFT******************** -->
                        <div class="col-xs-12 col-md-9 col-sm-9">
                            <div class="form_left">
                           <!-- <h3 class="center-block"><img src="img/children.png"> <span>Child Information</span>
                            <p>List All Household Members who are infants, children, and students up to and including grade 12</p>
                            </h3>-->
                                <div class="media">
                                    <div class="media-left table_cell">
                                        <a href="#">
                                            <img class="media-object" src="/images/children.png" alt="Children Information">
                                        </a>
                                    </div>
                                    <div  class="media-body">
                                        <h4 class="media-heading">Child Information</h4>                               
                                        <p>List all household members who are infants, children and students up to and including grade 12</p>
                                    </div>
                                    <div class="form_right_mob">
                                        <p> Children in <mark href="#" data-toggle="tooltip" data-placement="bottom" title="A foster child is defined as a child who is formally placed in your home by a court, or a State child welfare agency.">Foster care</mark> and children who meet the definition of <mark href="#" data-toggle="tooltip" data-placement="bottom" title="A child is homeless if they’ve been identified by the Local Education Agency (LEA) homeless liaison, or by an official of a homeless shelter, as lacking a fixed, regular, and adequate nighttime residence.">Homeless</mark>, <mark href="#" data-toggle="tooltip" data-placement="bottom" title="A child is a migrant if they’ve been identified as a migrant by the State or local Migrant Education Program coordinator, the local educational liaison, or another individual identified by the Food and Nutrition Service (FNS).">Migrant</mark> or <mark href="#" data-toggle="tooltip" data-placement="bottom" title="A child is identified as a runaway under the Runaway and Homeless Youth Act, by the local educational liaison, or another person in accordance with guidance issued by FNS.">Runaway</mark>, <mark href="#" data-toggle="tooltip" data-placement="bottom" title="Head Start is a federal- or state-funded pre-kindergarten program. To qualify, the state-funded program must have eligibility criteria that is identical or more stringent than the federal Head Start program.">Head start</mark> are eligible for free meals. Sometimes children in the household earn income. Please include the <mark href="#" data-toggle="tooltip" data-placement="bottom" title="Child income is paid directly to the child, and includes:

                                                                                                                                                                                                        Salary or wages from a job.
                                                                                                                                                                                                        Social Security benefits due to blindness or disability.
                                                                                                                                                                                                        Social Security wages from a parent who is disabled, retired, or deceased, which the child receives.
                                                                                                                                                                                                        Regular spending money, given to a child by a friend or family member.
                                                                                                                                                                                                        Income paid to the child by a private pension fund, annuity, or trust" >income</mark> earned by each. If they do not receive income from any source, write ‘0’. If you enter ‘0’ or leave any fields blank, you are certifying (promising) that there is no income to report. The
                                            Sources of Income for Children section will help you with the Child Income question.</p>
                                    </div>
                                    <div class="mandatory mob_display">(<sup> * </sup>) Please fill all the mandatory fields </div>
                                </div>    

                                <div  class="row children_add">
                                    <div class="col-xs-12 col-sm-4 col-md-3">

                                        <div class="dropdown "> 
                                            <label for="sel1"><sup>*</sup>Number of children</label>  
                                            <div data-toggle="dropdown" class="wrap-dd-select "> 

                                                <input  class="selected-toggle dropdown_list" ng-change="addChildForm(selectChildNum)"  placeholder="Please enter / select" style="width:100%" ng-model="selectChildNum"/>
                                                <span class="glyphicon glyphicon-triangle-bottom dropdown_arrow"></span>
                                            </div>  	  
                                            <ul class="dropdown-menu scrollselect" style='width:100%;max-height:200px;overflow:auto' role="menu">
                                                <li  ng-repeat="selectChildNum in children" ng-model="selectChildNum" >
                                                    <a onclick="selectItemn(this)"  ng-click="addChildForm(selectChildNum)">{{selectChildNum}}</a>
                                                </li>	  
                                            </ul>	
                                        </div>
                                    </div>  

                                </div>
                                <div id="hidemsg1" ng-hide="divEnabled" class="alert alert-danger customerror">

                                    <strong id="hidemsg1">Please fill the mandatory fields.</strong>
                                </div>
                                <div ng-hide="divEnable" class="alert alert-danger customerror">
                                    <strong >You can enroll upto 15 Children</strong>

                                </div>


                                <form   id="section2" name="childinfo" novalidate class="css-form" ng-submit="submit()">

                                    <div data-ng-repeat="child in childrens" >                           
                                        <div class="well well_inner" style="background:none; border:none"> 
                                            <div  class="childToggle" role="tab">
                                                <a  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$index}}" aria-expanded="true" aria-controls="collapseOne">
                                                    {{child.childFirstname == null ?  "Child Information" : child.childFirstname}}
                                                </a>

                                                <a ng-if="childrens.length > 1" class="btn remove_icon"   ng-click="removeChildForm($index)"><i  class="fa fa-times"></i></a>

                                            </div>
                                            <div id="collapse{{$index}}" class="panel-collapse collapse in " role="tabpanel">                                                                    
                                                <div class="panel_border">
                                                    <div class="row margin0">
                                                        <div class="col-xs-12 col-sm-4 padding_LR5">
                                                            <div class="form-group">
                                                                <label><sup>*</sup> First Name </label>
                                                                <input id="childFirstName{{$index}}" class="form-control" type="text" name="ChildFirstName{{$index}}" minlength="3" maxlength="50"
                                                                       onkeypress="return numberOnly(this, event)"   ng-minlength="3"  ng-pattern="/^[a-z ,.'-]+$/i"    ng-model="child.childFirstname" required/>
                                                                <!--                                                                <div class="err_msg" ng-show="submitted && childinfo.ChildFirstName{{$index}}.$error.pattern" >Must be a valid Name.</div>-->
                                                                <!--                                                                <div class="err_msg" ng-show="childinfo.ChildFirstName{{$index}}.$error.minlength" >Name should be minimum 3 characters.</div> -->
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-4 padding_LR5">
                                                            <div class="form-group">
                                                                <label>Middle Name</label>
                                                                <input class="form-control" type="text" name="ChildMiddleName" minlength="3" maxlength="50" onkeypress="return numberOnly(this, event)"
                                                                       ng-model="child.childMiddlename" required/>
                                                                <!--                                            <div class="err_msg" ng-show="childinfo.ChildMiddleName.$touched && childinfo.ChildMiddleName.$invalid">Middle name is required.</div>-->
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-4 padding_LR5">
                                                            <div class="form-group">
                                                                <label><sup>*</sup> Last Name</label>
                                                                <input id="childLastName{{$index}}" class="form-control" type="text" name="childLastName{{$index}}" minlength="3" maxlength="50" onkeypress="return numberOnly(this, event)"
                                                                       ng-minlength="3" ng-pattern="/^[a-z ,.'-]+$/i"    ng-model="child.childLastname" required/> 
                                                                <div class="err_msg" ng-show="childinfo.childLastName{{$index}}.$error.pattern" >Must be a valid Name.</div>
                                                                <!--                                                                <div class="err_msg" ng-show="childinfo.childLastName{{$index}}.$error.minlength" >Name should be minimum 3 characters.</div> -->
                                                            </div>
                                                        </div>     
                                                    </div> 

                                                    <div class="row margin0">
                                                        <div class="col-xs-12 padding_LR5">
                                                            <label><sup>*</sup>Student?</label>
                                                            <div class="form-group">
                                                                <div class="radio radio-info radio-inline">
                                                                    <input type="radio" id="inlineRadio1" value="student"  
                                                                           ng-model="child.student" />
                                                                    <label >Yes</label>
                                                                </div>

                                                                <div class="radio radio-inline">
                                                                    <input type="radio" id="inlineRadio2" value="not student" 
                                                                           ng-model="child.student" ng-checked="true" />
                                                                    <label>No</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 padding_LR5">

                                                            <div class="form-group">
                                                                <div class="belong_heading"><sup>*</sup>Child category</div>
                                                                <div class=" belong" >
                                                                    <ul class="belong_ul">
                                                                        <li><div class="checkbox checkbox-info"><input class="input1" ng-click="checkConditon1()" type="checkbox"  aria-label="Single checkbox One" ng-false-value="" ng-true-value="'FosterChild'" value="Foster" ng-model="child.childcategory1"  /><label>Foster Child</label></div></li>
                                                                        <li><div class="checkbox checkbox-info"><input type="checkbox" ng-click="checkConditon1()" aria-label="Single checkbox One" ng-false-value="" ng-true-value="'Migrant'" ng-model="child.childcategory2" /><label>Migrant</label></div></li>
                                                                        <li><div class="checkbox checkbox-info"><input type="checkbox" ng-click="checkConditon1()" aria-label="Single checkbox One" ng-false-value="" ng-true-value="'Homeless'" ng-model="child.childcategory3" /><label>Homeless</label></div></li>
                                                                        <li><div class="checkbox checkbox-info"><input type="checkbox" ng-click="checkConditon1()" aria-label="Single checkbox One" ng-false-value="" ng-true-value="'Runaway'" ng-model="child.childcategory4"  /><label>Runaway</label></div></li>
                                                                        <li><div class="checkbox checkbox-info"><input type="checkbox" ng-click="checkConditon1()" aria-label="Single checkbox One" ng-false-value="" ng-true-value="'Head Start participant '" ng-model="child.childcategory5"/><label>Head Start participant</label></div></li>

                                                                    </ul>
                                                                </div>

                                                            </div>  




                                                        </div>          
                                                    </div>

                                                    <div ng-hide=" applicantInfo.progrmmeoptions == 'Yes'" >
                                                        <h4>Child Income</h4>
                                                        <div class = "well-sm blue_low_opacity">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-4 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>How often?</label>
                                                                        <select class="form-control" id="sel1" placeholder="How often ?"
                                                                                ng-model="child.incometypes" ng-options="income for income in childincome" >
                                                                            <option value="">Select income type</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-md-4 col-sm-6" padding_LR5">
                                                                     <div class="form-group">
                                                                        <label>Income</label>
                                                                        <input class="form-control" placeholder="$ Income" maxlength="10" name="childIncome{{$index}}"  type="text" ng-pattern="/^\$?\d{1,3}(,?\d{3})*(\.\d{.,1,2})?$/"
                                                                               onkeypress="return isNumberKey(event)"    ng-model="child.income" required/> {{ child.income | currency }} 
                                                                        <!--                                                                        <div class="err_msg" ng-show="childinfo.childIncome{{$index}}.$error.pattern" >Must be a valid income.</div>-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </form>
                                <div ng-show="selectChild">
                                    <span ng-show="selectChildNum" class="btn-group pull-right btn_middle">
                                        <button ng-hide="condition1"   class="btn btn-default margin_L15 btn_left15" ng-click="validate()"  class="btn btn-default margin_L15" id="step2">Continue</button>
                                        <button ng-hide="condition2"   ng-click="validate2()"  class="btn btn-default margin_L15" >Continue</button>

                                    </span>
                                </div>



                                <!-- **********************************SECTION-END**************************************************** -->
                            </div>
                        </div>
                        <!-- ***************FORM RIGHT******************** -->
                        <div  class="col-xs-12 col-md-3 col-sm-3">
                            <div class="mandatory web_display">(<sup> * </sup>) Please fill all the mandatory fields </div>
                            <div class="right_content">                       
                                <div class="content_box"> 
                                    <div class="commentboxsection">
                                        <div class="commentboxsectiontop">
                                            <div class="commentboxsectionbottom">
                                                <div id="upper_left"></div>
                                                <div id="upper_right"></div>
                                                <div id="lower_left"></div>
                                                <div id="lower_right"></div>
                                                <div class="commentboxcontent">
                                                    Children in <mark href="#" data-toggle="tooltip" data-placement="bottom" title="A foster child is defined as a child who is formally placed in your home by a court, or a State child welfare agency.">Foster care</mark> and children who meet the definition of <mark href="#" data-toggle="tooltip" data-placement="bottom" title="A child is homeless if they’ve been identified by the Local Education Agency (LEA) homeless liaison, or by an official of a homeless shelter, as lacking a fixed, regular, and adequate nighttime residence.">Homeless</mark>, <mark href="#" data-toggle="tooltip" data-placement="bottom" title="A child is a migrant if they’ve been identified as a migrant by the State or local Migrant Education Program coordinator, the local educational liaison, or another individual identified by the Food and Nutrition Service (FNS).">Migrant</mark> or <mark href="#" data-toggle="tooltip" data-placement="bottom" title="A child is identified as a runaway under the Runaway and Homeless Youth Act, by the local educational liaison, or another person in accordance with guidance issued by FNS.">Runaway</mark>, <mark href="#" data-toggle="tooltip" data-placement="bottom" title="Head Start is a federal- or state-funded pre-kindergarten program. To qualify, the state-funded program must have eligibility criteria that is identical or more stringent than the federal Head Start program.">Head start</mark> are eligible for free meals. Sometimes children in the household earn income. Please include the <mark href="#" data-toggle="tooltip" data-placement="bottom" title="Child income is paid directly to the child, and includes:

                                                                                                                                                                                                        Salary or wages from a job.
                                                                                                                                                                                                        Social Security benefits due to blindness or disability.
                                                                                                                                                                                                        Social Security wages from a parent who is disabled, retired, or deceased, which the child receives.
                                                                                                                                                                                                        Regular spending money, given to a child by a friend or family member.
                                                                                                                                                                                                        Income paid to the child by a private pension fund, annuity, or trust" >income</mark> earned by each. If they do not receive income from any source, write ‘0’. If you enter ‘0’ or leave any fields blank, you are certifying (promising) that there is no income to report. The
                                                    Sources of Income for Children section will help you with the Child Income question.<br/><br/><div ng-show="selectChildNum">Clicking on this "<i class="fa fa-times"></i>" will delete the information you have entered.</div></div>
                                            </div></div></div></div></div>
                        </div>
                    </div>
                </div></div>
        </section>


        <!-- **********************************SECTION-3**************************************************** -->

        <section id="househ" ng-hide="divHouse">
            <div  class=" container_shadow ">
                <div class="padding10">
                    <div id="ELEMENT" class="row">
                        <!-- ***************FORM LEFT******************** -->
                        <div class="col-xs-12 col-md-9 col-sm-9 ">
                            <div class="form_left" >
                                <div class="media table_cell">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="/images/house.png" alt="All House hold Information">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Household Information</h4>
                                    </div>
                                </div>
                                <div class="form_right_mob">
                                    <p>
                                        Definition of Household Member
                                        List all Household Members not listed in Child Information (including yourself) even if they do not receive income. For each Household Member listed, if they do receive <mark href="#" data-toggle="tooltip" data-placement="bottom" title="Adult income is paid directly to an adult, before taxes are taken out, and includes:

                                                                                                                                                                                                        Salary, wages, strike benefits, cash bonuses, or other money from work
                                                                                                                                                                                                        Net income from self-employment
                                                                                                                                                                                                        If you’re in the military: basic pay and cash bonuses, allowances for off-base housing, clothing, and food. Do not include combat pay, FSSA, or privatized housing allowances
                                                                                                                                                                                                        Public assistance, alimony, or child support including:
                                                                                                                                                                                                        Unemployment benefits
                                                                                                                                                                                                        Worker’s compensation
                                                                                                                                                                                                        Supplemental Security Income (SSI)
                                                                                                                                                                                                        Cash assistance from State or local government
                                                                                                                                                                                                        Alimony payments (only if court-ordered)
                                                                                                                                                                                                        Child support payments (only if court-ordered)
                                                                                                                                                                                                        Veteran’s benefits">income</mark>, report total income for each source in
                                        whole dollars only. If they do not receive income from any source, write ‘0’. If you enter ‘0’ or leave any fields blank, you are certifying (promising) that there is no income to report. The
                                        Sources of Income for
                                        Adults section will help
                                        you with the All Adult
                                        Household Members
                                        section. </p>
                                </div>
                                <div class="mandatory mob_display">(<sup> * </sup>) Please fill all the mandatory fields </div>
                                <div class="container children_add">

                                    <div class="col-xs-12 col-sm-3 Housenumber">    
                                        <div class="dropdown "> 
                                            <label for="sel1"><sup>*</sup>Number of Household</label>  
                                            <div data-toggle="dropdown" class="wrap-dd-select "> 

                                                <input   class="selected-toggle dropdown_list" ng-change="addHouseholdForm(selectHouseholdNum)"  placeholder="Please enter / select" style="width:100%" ng-model="selectHouseholdNum"/>
                                                <span class="glyphicon glyphicon-triangle-bottom dropdown_arrow"></span>
                                            </div>  	  
                                            <ul class="dropdown-menu scrollselect" style='width:100%;max-height:200px;overflow:auto' role="menu">
                                                <li  ng-repeat="selectHouseholdNum in household" ng-model="selectHouseholdNum" >
                                                    <a class="valu" value="{{selectHouseholdNum}}" ng-value="{{selectHouseholdNum}}" ng-click="addHouseholdForm(selectHouseholdNum)">{{selectHouseholdNum}}</a>
                                                </li>	  
                                            </ul>	
                                        </div>

                                    </div>
                                </div>

                                <div id="hidemsg2" ng-hide="divHouseMem" class="alert alert-danger customerror">
                                    <strong  class="margin_L15"  >Please fill the mandatory fields.</strong>
                                </div>
                                <div  ng-hide="divHouseMe" class="alert alert-danger customerror">
                                    <strong class="margin_L15"  >You can enroll upto 15 Households.</strong>
                                </div>

                                <form   name="householdinfo" novalidate class="css-form" ng-submit="submit()">
                                    <div data-ng-repeat="member in Households" > 
                                        <div class="well well_inner" style="background:none; border:none"> 
                                            <div  class="childToggle" role="tab">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#Housecollapse{{$index}}" aria-expanded="true" aria-controls="collapseOne">
                                                    {{member.Firstname == null ? "Household Information" : member.Firstname}}
                                                </a>

                                                <a ng-if="Households.length > 1" class="btn remove_icon"   ng-click="removeHouseForm($index)"><i class="fa fa-times"></i></a>

                                            </div>
                                            <div id="Housecollapse{{$index}}" class="panel-collapse collapse in " role="tabpanel" aria-labelledby="headingOne"> 
                                                <div class="panel_border">
                                                    <div class="row margin0">
                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                            <div class="form-group">
                                                                <label><sup>*</sup>First Name</label>
                                                                <input class="form-control" type="text" name="firstName{{$index}}" maxlength="50" onkeypress="return numberOnly(this, event)"
                                                                       ng-minlength="3" ng-pattern="/^[a-z ,.'-]+$/i"   ng-model="member.Firstname" required/>
                                                                <div class="err_msg" ng-show="householdinfo.firstName{{$index}}.$error.pattern" >Must be a valid Name.</div>
                                                                <!--                                                                <div class="err_msg" ng-show="householdinfo.firstName{{$index}}.$error.minlength" >Name should be minimum 3 characters.</div> -->
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                            <div class="form-group">
                                                                <label><sup>*</sup>Last Name</label>
                                                                <input class="form-control" type="text" name="lastName{{$index}}" maxlength="50" onkeypress="return numberOnly(this, event)"
                                                                       ng-minlength="3"  ng-pattern="/^[a-z ,.'-]+$/i"    ng-model="member.Lastname" required/>                                                       
                                                                <div class="err_msg" ng-show="householdinfo.lastName{{$index}}.$error.pattern" >Must be a valid Name.</div>
                                                                <!--                                                                <div class="err_msg" ng-show="householdinfo.lastName{{$index}}.$error.minlength" >Name should be minimum 3 character.</div> -->
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row margin0">
                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                            <div class="form-group">
                                                                <label>Earnings from work </label>
                                                                <select class="form-control" id="incomefromwrok" ng-model="member.incometypefromwork" ng-options="income for income in work" >
                                                                    <option value="">How often?</option>
                                                                </select> 
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">

                                                            <div class="form-group">
                                                                <label></label>
                                                                <input class="form-control" type="text" placeholder="$ Income" name="incomefromWork{{$index}}" maxlength="10"
                                                                       onkeypress="return isNumberKey(event)"    ng-pattern="/^\$?\d{1,3}(,?\d{3})*(\.\d{1,2})?$/" ng-model="member.incomework" required/>{{ member.incomework | currency }}
                                                                <div class="err_msg" ng-show="householdinfo.incomefromWork{{$index}}.$error.pattern" >Must be a valid Income.</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                        </div>
                                                    </div>
                                                    <div class="row margin0">
                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                            <div class="form-group ">
                                                                <label>Earnings from Assistance</label><br/>
                                                                <span style="font-size:11px"> Public Assistance/Child Support/Alimony</span>
                                                                <select class="form-control"  id="incomefromassistance" ng-model="member.incometypefromassistance" ng-options="income for income in assitance" >
                                                                    <option value="">How often?</option>
                                                                </select> 
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                            <div class="form-group white_space_m ">
                                                                <label class="min-height22" > </label>
                                                                <input class="form-control" type="text" placeholder="$ Income" name="incomefromAssistance{{$index}}" maxlength="10"
                                                                       onkeypress="return isNumberKey(event)" ng-pattern="/^\$?\d{1,3}(,?\d{3})*(\.\d{1,2})?$/"  ng-model="member.incomefromassistance" required/> {{ member.incomefromassistance | currency }}                                                    
                                                                <div class="err_msg" ng-show="householdinfo.incomefromAssistance{{$index}}.$error.pattern" >Must be a valid Income.</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                        </div>
                                                    </div>
                                                    <div class="row margin0">
                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                            <div class="form-group ">
                                                                <label>Earnings from Other</label> <br/>
                                                                <span style="font-size:11px">Pensions/Retirement/All Other Income</span>
                                                                <select class="form-control"  id="incomefromother" ng-model="member.incometypefromother" ng-options="income for income in other">
                                                                    <option value="">How often?</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                            <div class="form-group ">
                                                                <label class="min-height22"></label>
                                                                <input class="form-control" type="text" placeholder="$ Income" name="incomefromOther{{$index}}" maxlength="10"
                                                                       onkeypress="return isNumberKey(event)"  ng-pattern="/^\$?\d{1,3}(,?\d{3})*(\.\d{1,2})?$/"  ng-model="member.incomefromother" required/> {{ member.incomefromother | currency }}
                                                                <div class="err_msg" ng-show="householdinfo.incomefromOther{{$index}}.$error.pattern" >Must be a valid Income.</div>                                                        
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form> 
                                <span ng-show="selectHousehold" class="btn-group pull-right btn_middle">
                                    <button ng-show="selectHouseholdNum" class="btn btn-default margin_L15 btn_left15" ng-click="validateHouse()" id="step3"  >Continue</button>
                                </span>


                                <!-- **********************************SECTION-END**************************************************** -->
                            </div>
                        </div>

                        <!-- ***************FORM RIGHT******************** -->
                        <div class="col-xs-12 col-md-3 col-sm-3">
                            <div class="mandatory web_display">(<sup> * </sup>) Please fill all the mandatory fields </div>
                            <div class="right_content">
                                <div class="content_box"> 
                                    <div class="commentboxsection">
                                        <div class="commentboxsectiontop">
                                            <div class="commentboxsectionbottom">
                                                <div id="upper_left"></div>
                                                <div id="upper_right"></div>
                                                <div id="lower_left"></div>
                                                <div id="lower_right"></div>
                                                <div class="commentboxcontent">
                                                    Definition of Household Member
                                                    List all Household Members not listed in Child Information (including yourself) even if they do not receive income. For each Household Member listed, if they do receive <mark href="#" data-toggle="tooltip" data-placement="bottom" title="Adult income is paid directly to an adult, before taxes are taken out, and includes:

                                                                                                                                                                                                        Salary, wages, strike benefits, cash bonuses, or other money from work
                                                                                                                                                                                                        Net income from self-employment
                                                                                                                                                                                                        If you’re in the military: basic pay and cash bonuses, allowances for off-base housing, clothing, and food. Do not include combat pay, FSSA, or privatized housing allowances
                                                                                                                                                                                                        Public assistance, alimony, or child support including:
                                                                                                                                                                                                        Unemployment benefits
                                                                                                                                                                                                        Worker’s compensation
                                                                                                                                                                                                        Supplemental Security Income (SSI)
                                                                                                                                                                                                        Cash assistance from State or local government
                                                                                                                                                                                                        Alimony payments (only if court-ordered)
                                                                                                                                                                                                        Child support payments (only if court-ordered)
                                                                                                                                                                                                        Veteran’s benefits">income</mark>, report total income for each source in
                                                    whole dollars only. If they do not receive income from any source, write ‘0’. If you enter ‘0’ or leave any fields blank, you are certifying (promising) that there is no income to report. The
                                                    Sources of Income for
                                                    Adults section will help
                                                    you with the All Adult
                                                    Household Members
                                                    section.<br/><br/><div ng-show="selectHouseholdNum">Clicking on this"<i class="fa fa-times"></i>" will delete the information you have entered.</div></div>
                                            </div> </div> </div> </div> </div>
                        </div>

                    </div>
                </div></div>
        </section>

        <!-- **********************************SECTION-4**************************************************** -->


        <section id="gen" ng-hide="generalinfo">
            <div  class=" container_shadow ">
                <div class="padding10 margin_mob"> 
                    <div class="row">
                        <!-- ***************FORM LEFT******************** -->




                        <div class="col-xs-12 col-md-9 col-sm-9">
                            <div class="form_left">
                                <div class="media">
                                    <div class="media-left table_cell">
                                        <a href="#">
                                            <img src="/images/house-hold.png" class="media-object img-responsive" alt="Hous hold General Information">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> General Information <span>(Optional)</span></h4>
                                    </div>
                                </div>
                                <div class="form_right_mob">
                                    <p>We are required to ask for information about your children’s race and ethnicity. This information is important and helps to make sure we are fully serving our community.
                                        Responding to this section is optional and does not affect your children’s eligibility for free or reduced price meals.</p>
                                </div>


                                <div class="well" style="background:none; border:none">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <label>Children's Racial and Ethnic Identities</label>
                                            <div class="form-group">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio"  value="hispanic or latino" name='genRadio'
                                                           ng-model="generalInfo.hispanicOrlatino" />
                                                    <label >Hispanic Latino</label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="not hispanic or latino" checked name='genRadio'
                                                           ng-model="generalInfo.nothispanicOrlatino" ng-checked="true"/>
                                                    <label>Not Hispanic or Latino</label>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-3">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 padding_LR5">

                                            <ul class="race_ul">
                                                <div class="form-group">
                                                    <div class="race_heading">Race</div>
                                                    <div class="race" >
                                                        <ul class="race_ul">
                                                            <li><div class="checkbox checkbox-info"><input type="checkbox"  aria-label="Single checkbox One" ng-false-value="" ng-true-value="'American Indian Or Alaskan Native'" ng-model="generalInfo.AmericanIndianOrAlaskanNative"  /><label>American Indian or Alaskan Native</label></div></li>
                                                            <li><div class="checkbox checkbox-info"><input type="checkbox" aria-label="Single checkbox One" ng-false-value="" ng-true-value="'Asian'" ng-model="generalInfo.Asian" /><label>Asian</label></div></li>
                                                            <li><div class="checkbox checkbox-info"><input type="checkbox"  aria-label="Single checkbox One" ng-false-value="" ng-true-value="'Black or AfricanAmerican'" ng-model="generalInfo.BlackorAfricanAmerican" /><label>Black or African American</label></div></li>
                                                            <li><div class="checkbox checkbox-info"><input type="checkbox"  aria-label="Single checkbox One" ng-false-value="" ng-true-value="'white'" ng-model="generalInfo.white"  /><label>White</label></div></li>
                                                            <li><div class="checkbox checkbox-info"><input type="checkbox"  aria-label="Single checkbox One" ng-false-value="" ng-true-value="'Native Hawaiian or Other PacificIslander'" ng-model="generalInfo.NativeHawaiianorOtherPacificIslander"/><label>Native Hawaiian or Other Pacific Islander</label></div></li>

                                                        </ul>
                                                    </div>

                                                    <div ng-dropdown-multiselect="generalInfo.drop" options="example1data" selected-model="example1model"></div>
                                                </div>
                                            </ul>

                                            <div ng-dropdown-multiselect="generalInfo.drop" options="example1data" selected-model="example1model"></div>

                                        </div>
                                        <div class="col-xs-12 col-sm-4 padding_LR5">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3 col-sm-6 padding_LR5">
                                            <div class="form-group white_space_m">
                                                <label class="min-heighttablet">Total Household members </label>
                                                <input class="form-control" type="text" ng-value="childrens.length + Households.length"
                                                       ng-model="Total" readonly/>
                                            </div>
                                        </div>
                                        <div  ng-hide="applicantInfo.progrmmeoptions == 'Yes'" class="col-xs-12 col-sm-6 col-md-2 padding_LR5">
                                            <div class="form-group text-center ">
                                                <label>Do you have your SSN? </label>
                                                <div class="checkbox checkbox-info">
                                                    <input type="checkbox" name="nossn" class="styled" aria-label="Single checkbox One" value="no ssn"
                                                           ng-model="generalInfo.NoSsn" />                                            
                                                    <label></label>
                                                </div>
                                            </div>
                                        </div>
                                        <form ng-show="generalInfo.NoSsn"  name="general"  class="css-form">
                                            <div ng-hide="applicantInfo.progrmmeoptions == 'Yes'" class="col-xs-12 col-md-4 col-sm-6 padding_LR5">
                                                <div class="form-group white_space_m">
                                                    <label class="min-heighttablet"> Social Security Number (SSN)</label>
                                                    <input placeholder="Last 4 Digits of Social Security Number" name='Ssn1' class="form-control" type="text" minlength="4" maxlength="4"
                                                           onkeypress="return isNumberKey(event)"  ng-minlength="4" ng-model="generalInfo.SSN" ng-pattern="/^(?!0{4})\d{4}$/" required />
                                                    <!--                                                    <div class="err_msg" ng-show="general.Ssn1.$error.minlength" >SSN should be 4 digits.</div> -->
                                                    <div class="err_msg" ng-show="general.Ssn1.$error.pattern" >Must be a valid number.</div>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="col-xs-12 col-md-3 col-sm-6 padding_LR5">
                                            <div class="form-group">
                                                <label class="min-heighttablet">Date</label>

                                                <input ng-model="generalInfo.date" class="form-control" type="text" id="date"  readonly/>

<!--                                        <input  id="date-birth" class="form-control" type="hidden"  />-->

                                            </div>
                                        </div>

                                    </div>

                                    <span class="btn-group pull-right">
                                        <button ng-hide="applicantInfo.progrmmeoptions == 'Yes'" data-toggle="modal"  class="btn btn-default  btn_margin_L15" ng-click="pushToPop(selectChildNum); pushtoPoP(selectHouseholdNum); submited1();" >Submit</button>
                                        <button ng-show="applicantInfo.progrmmeoptions == 'Yes'" data-toggle="modal"  class="btn btn-default  btn_margin_L15" ng-click="pushToPop(selectChildNum); pushtoPoP(selectHouseholdNum); submited2();" >Submit</button>
                                        <div id="cancel" class="btn btn-default btn_margin_L15" href="">Cancel</div>
                                    </span>
                                </div>
                                <!-- **********************************SECTION-END**************************************************** -->
                            </div>
                        </div>
                        <!-- ***************FORM RIGHT******************** -->
                        <div class="col-xs-12 col-md-3 col-sm-3">
                            <div class="right_content">
                                <div class="content_box">
                                    <div class="commentboxsection">
                                        <div class="commentboxsectiontop">
                                            <div class="commentboxsectionbottom">
                                                <div id="upper_left"></div>
                                                <div id="upper_right"></div>
                                                <div id="lower_left"></div>
                                                <div id="lower_right"></div>
                                                <div class="commentboxcontent">
                                                    We are required to ask for information about your children’s race and ethnicity. This information is important and helps to make sure we are fully serving our community.
                                                    Responding to this section is optional and does not affect your children’s eligibility for free or reduced price meals.</div>
                                            </div></div></div></div></div>
                        </div>
                    </div></div>

            </div>
        </section>



    </div></div>


<div class="modal fade" id="HelpDefinitions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a type="button" class="close close_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" id="exampleModalLabel" style="color:#04abda">Help & Definitions</h4>                
            </div>
            <div class="modal-body">

                <strong>Who counts as a student?</strong>
                <p>A student is anyone who is enrolled in a public or private school at the high school level or below, even if they're over 18.</p>
                <strong>What’s a household? Whom do I include?</strong>
                <p>A household is anyone who lives with you, and shares income and expenses. They don’t have to be related to you or each other, and they also don't have to have an income of their own. Don't include anyone who lives with you if they do not contribute money to the household, or if the household's income doesn't support them.</p>
                <strong>Do I have to have a Social Security Number (SSN)?</strong>
                <p>You don't have to have a Social Security Number to qualify for free and reduced price lunch. United States citizenship or immigration status is not a condition of eligibility for free and reduced price benefits.</p>
                <strong>What is Head Start?</strong>
                <p>Head Start is a federal- or state-funded pre-kindergarten program. To qualify, the state-funded program must have eligibility criteria that is identical or more stringent than the federal Head Start program.</p>
                <strong>How do I know if my child is a foster child?</strong>
                <p>A foster child is defined as a child who is formally placed in your home by a court, or a State child welfare agency.</p>
                <strong>How do I know if my child is a migrant?</strong>
                <p>A child is a migrant if they’ve been identified as a migrant by the State or local Migrant Education Program coordinator, the local educational liaison, or another individual identified by the Food and Nutrition Service (FNS).</p>
                <strong>How do I know if my child qualifies as homeless?</strong>
                <p>A child is homeless if they’ve been identified by the Local Education Agency (LEA) homeless liaison, or by an official of a homeless shelter, as lacking a fixed, regular, and adequate nighttime residence.</p>
                <strong>How do I know if my child qualifies as a runaway?</strong>
                <p>A child is identified as a runaway under the Runaway and Homeless Youth Act, by the local educational liaison, or another person in accordance with guidance issued by FNS.</p>
                <strong>How do I know if I’m enrolled in SNAP?</strong>
                <p>SNAP is the Supplemental Nutrition Assistance Program, formerly known as food stamps. If you're enrolled in SNAP, you'll have a plastic EBT card (it looks like a debit card) and a 10- or 13-digit case number.</p>
                <strong>How do I know if I'm enrolled in TANF?</strong>
                <p>TANF is the Temporary Assistance for Needy Families program. If you're enrolled in TANF, you're receiving a cash benefit. You also have a case number that's 10 or 13 digits long.</p>
                <strong>How do I know if I’m enrolled in FDPIR?</strong>
                <p>FDPIR is the Food Distribution Program on Indian Reservations. If you're enrolled in FDPIR, you have a case number and an EBT card.</p>
                <strong>Where do I find my case number for SNAP, TANF, or FDPIR?</strong>
                <p>This might depend on what state you're in. Your case number is not the number on your EBT card, but it should be listed on other benefits paperwork. If it's not there, you'll need to call your case worker.</p>
                <strong>What counts as income?</strong>
                <p>All kinds of things count as income. Both children and adults can earn income.</p>
                <strong>Child Income</strong>
                <p>Child income is paid directly to the child, and includes:</p>

                <li>Salary or wages from a job</li>
                <li>Social Security benefits due to blindness or disability</li>
                <li>Social Security wages from a parent who is disabled, retired, or deceased, which the child receives</li>
                <li>Regular spending money, given to a child by a friend or family member</li>
                <li>Income paid to the child by a private pension fund, annuity, or trust</li>
                <strong>Adult Income</strong>
                <p>Adult income is paid directly to an adult, before taxes are taken out, and includes:

                <li>Salary, wages, strike benefits, cash bonuses, or other money from work</li>
                <li>Net income from self-employment
                <li>If you’re in the military: basic pay and cash bonuses, allowances for off-base housing, clothing, and food. Do not include combat pay, FSSA, or privatized housing allowances
                <li>Public assistance, alimony, or child support including:
                <li>Unemployment benefits</li>
                <li>Worker’s compensation</li>
                <li>Supplemental Security Income (SSI)</li>
                <li>Cash assistance from State or local government</li>
                <li>Alimony payments (only if court-ordered)</li>
                <li>Child support payments (only if court-ordered)</li>
                <li>Veteran’s benefits</li></p>
                <strong>Don’t include income from any other cash-value public assistance benefits not listed here.</strong>
                <li>Pensions/Retirement/All Other Income</li>
                <span><li>Social Security (including railroad retirement and black lung benefits)</li></span>
                <li>Worker’s compensation</li>
                <li>Private Pensions or disability</li>
                <li>Income from trusts or estates</li>
                <li>Investment income</li>
                <li>Annuities</li>
                <li>Earned interest</li>
                <li>Rental income</li>
                <li>Regular cash payments from outside household.</li></p>

            </div>     
        </div>
    </div>     
</div>




<!--<script>
            function showModal1() {
            $('#myModalSubmit').modal();
            }
</script>-->

<script type="text/javascript">

    $(document).ready(function() {
    $("#hideCap").click(function(){
    if ($("#accept").is(":checked")){
    $("#Tremsandid").removeClass('Tremsand123');
            $("#Tremsandid").addClass('Tremsand');
            var applicantInfo; var generalInfo;
            var validator = $("#signupform").validate({

    rules: {

    captcha: {
    required: true,
            remote: "/includes/process.php"
    },
    },
            messages: {


            captcha: "Correct captcha is required. Click the refresh to generate a new one",
            },
            // the errorPlacement has to take the table layout into account
            errorPlacement: function(error, element) {
            if (element.is(":radio"))
                    error.appendTo(element.parent().next().next());
                    else if (element.is(":checkbox"))
                    error.appendTo (element.next());
                    else

                    error.appendTo(element.parent().next());
            },
            submitHandler: function() {
            angular.element(document.getElementById('page-top')).scope().saveForm(applicantInfo, generalInfo);
                    window.location.href = '/site/thanku'
            },
            // specifying a submitHandler prevents the default submit, good for the demo
            // set this class to error-labels to indicate valid fields
            success: function(label) {
            // set &nbsp; as text for IE
            label.html("").addClass("checked");
                    //  form.submit();
            }
    });
            function randomString() {
            var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
                    var string_length = 8;
                    var randomstring = '';
                    for (var i = 0; i < string_length; i++) {
            var rnum = Math.floor(Math.random() * chars.length);
                    randomstring += chars.substring(rnum, rnum + 1);
            }

            }
    } else{
    $("#Tremsandid").removeClass('Tremsand');
            $("#Tremsandid").addClass('Tremsand123');
    }
    });
    });</script>

<script type="text/javascript">

            $(document).ready(function(){
    var curr_day = new Date();
            var month = new Array();
            month[0] = "January";
            month[1] = "February";
            month[2] = "March";
            month[3] = "April";
            month[4] = "May";
            month[5] = "June";
            month[6] = "July";
            month[7] = "August";
            month[8] = "September";
            month[9] = "October";
            month[10] = "November";
            month[11] = "December";
            var n = month[curr_day.getMonth()];
            var day = curr_day.getUTCDate();
            var year = curr_day.getUTCFullYear();
            var newdate = n + " " + day + "," + year;
            $("#date").val(newdate);
            $(window).bind("beforeunload", function(){ return(false); })
            $("#cancel").click(function(){
    window.location.href = '/site/index';
    });
            $('#hideCap').click(function() {
    $(window).unbind("beforeunload");
    });
            history.forward();
    });</script>  


<script type="text/javascript">
            function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                    return true;
                    };
            function numberOnly(txt, e) {
//                console.log(txt);
//              console.log(e);
//              console.log(window.event);
            var arr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.\u0008\u0009\u0027 ";
                    var code;
                    if (e.keyCode == 0)
                    code =e.charCode;
                    else
                    code = e.keyCode;
                    var char = keychar = String.fromCharCode(code);
//                    alert(keychar+"--"+e.which+"--"+e.keyCode);
                    if (arr.indexOf(char) == -1)
                    return false;
            };

</script>




​	
