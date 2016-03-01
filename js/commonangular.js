
var app = angular.module('NationalSchoolLuchProgram', [])


app.controller('childinformationController', ['$scope', '$window', function ($scope, $window, flash) {

        $scope.init = function () {
            $scope.addNewChildForm();
            $scope.addNewHouseholdForm();

        };



        $scope.dateBirth = new Date();
        //   +-----------------------------+        
       //    |    Hiding divs Onload       |
      //     +-----------------------------+

        $scope.flash = flash;
        $scope.divHouse = true;
        $scope.divHouseMem = true;
        $scope.divChild = true;
        $scope.titleEnabled = true;
        $scope.divEnabled = true;
        $scope.divEnable = true;
        $scope.divHouseMe = true;
        $scope.generalinfo = true;
        $scope.Applicant = false;
        $scope.Child = true;
        $scope.portfolio = true;
        $scope.contact = true;
        $scope.condition1 = false;
        $scope.condition2 = true;
        $scope.hideApp = false;
        $scope.selectChild = true;
        $scope.selectHousehold = true;


        //  +------------------------------------+
       //   |  Hiding and showing household info |
      //    |  according to selected condition   |
     //     +------------------------------------+


        $scope.checkConditon = function () {
            if ($scope.applicantInfo.progrmmeoptions == 'Yes') {
                $scope.condition2 = false;
                $scope.condition1 = true;

                $scope.divHouse = true;
                $scope.selectChild = true;
                $scope.generalinfo = true;
                $scope.contact = true;

            } else {
                $scope.condition2 = true;
                $scope.condition1 = false;
                $scope.selectChild = true;
                $scope.generalinfo = true;
                $scope.selectHousehold = true;
                $scope.contact = true;
                $scope.portfolio = true;

            }
        }
//        $scope.checkConditon1 = function () {
//            var array = [];
//
//            for (i = 0; i < $scope.childrens.length; i++) {
//                if ($scope.childrens.length >= 1 && $scope.childrens[i].childcategory1 == "FosterChild") {
//                    $scope.condition2 = false;
//                    $scope.condition1 = true;
//
//                    $scope.divHouse = true;
//                    $scope.selectChild = true;
//                    $scope.generalinfo = true;
//                    $scope.contact = true;
//
//                } else {
//                    $scope.condition2 = true;
//                    $scope.condition1 = false;
//                    $scope.selectChild = true;
//                    $scope.generalinfo = true;
//                    $scope.selectHousehold = true;
//                    $scope.contact = true;
//                    $scope.portfolio = true;
//                }
//            }
//        }
        var i = 0;
        $scope.progrmmeoptions = 'No';


       //   +-----------------------------------------------------------+
      //    |    validating Applicantinfo Form                          |
     //     +-----------------------------------------------------------+

        $scope.validateApplicant = function () {
            var applicant;

            if ($.trim($scope.applicantInfo.name) == '' ||
                    $.trim($scope.applicantInfo.lastname) == '' ||
                    $.trim($scope.applicantInfo.cityname) == '' ||
                    $.trim($scope.applicantInfo.state) == '' ||
                    $.trim($scope.applicantInfo.Zip) == '' ||
                    (($.trim($scope.applicantInfo.progrmmeoptions) == 'Yes') && ($.trim($scope.applicantInfo.casenumber) == ''))) {

                $scope.divEnabled = true;
                applicant = 0;


            } else {
                applicant = 1;
                $scope.divChild = false;
                $scope.Child = false;
                $scope.hideApp = true;

            }
            return applicant;
        };



       //   +-----------------------------------------------------------+
      //    |    validating ChildInfo Form and scrolling to error msg   |
     //     |                      with case 1                          |
    //      +-----------------------------------------------------------+



        $scope.validate = function () {
            var array = [];
            var result = '';
            for (i = 0; i < $scope.childrens.length; i++) {
                if ($.trim($scope.childrens[i].childFirstname) == '') {
                    array[i] = true
                }
                if ($.trim($scope.childrens[i].childLastname) == '') {
                    array[i] = true
                }
                if ($.trim($scope.childrens[i].childcategory1 || $scope.childrens[i].childcategory2 || $scope.childrens[i].childcategory3 || $scope.childrens[i].childcategory4 || $scope.childrens[i].childcategory5) == '') {
                    array[i] = true
                }
                if ($.trim($scope.childrens[i].student) == '') {
                    array[i] = true
                }
            }
            if ($.inArray(true, array) != -1) {
                result = 0;
                $scope.titleEnabled = false;
                $scope.divEnabled = false;

                $(function moveToChild() {
                    $('html, body').animate({
                        scrollTop: $("#element").offset().top
                    });

                });
                $(function showmsg1() {

                    $("#hidemsg1").fadeIn();
                    $("#hidemsg1").fadeOut(5000);

                });
            } else {
                result = 1;
                $scope.titleEnabled = true;
                $scope.divEnabled = true;
                $scope.divHouse = false;
                $scope.portfolio = false;
                $scope.selectChild = false;

            }
            return result;
        };




       //   +-----------------------------------------------------------+
      //    |    validating ChildInfo Form and scrolling to error msg   |
     //     |                      with case 2                          |
    //      +-----------------------------------------------------------+


        $scope.validate2 = function () {

            var array = [];
            var fromc = "";
            for (i = 0; i < $scope.childrens.length; i++) {
                if ($.trim($scope.childrens[i].childFirstname) == '') {
                    array[i] = true

                }
                if ($.trim($scope.childrens[i].childLastname) == '') {
                    array[i] = true
                }
                if ($.trim($scope.childrens[i].childcategory1 || $scope.childrens[i].childcategory2 || $scope.childrens[i].childcategory3 || $scope.childrens[i].childcategory4 || $scope.childrens[i].childcategory5) == '') {
                    array[i] = true
                }
                if ($.trim($scope.childrens[i].student) == '') {
                    array[i] = true
                }
            }
            if ($.inArray(true, array) != -1) {
                fromc = 0;
                $scope.titleEnabled = false;
                $scope.divEnabled = false;
                $(function moveToChild() {
                    $('html, body').animate({
                        scrollTop: $("#element").offset().top
                    });
                });
                $(function showmsg1() {

                    $("#hidemsg1").fadeIn();
                    $("#hidemsg1").fadeOut(5000);
                });
            } else {
                fromc = 1;
                $scope.titleEnabled = true;
                $scope.divEnabled = true;
                $scope.generalinfo = false;
                $scope.contact = false;
                $scope.selectChild = false;

            }
            return fromc;
        };


        //   +-----------------------------------------------------------+
       //    |    validating Household Form and scrolling to error msg   |
      //     +-----------------------------------------------------------+



        $scope.validateHouse = function () {
            var array = [];
            var fromb = '';

            for (i = 0; i < $scope.Households.length; i++) {
                if ($.trim($scope.Households[i].Firstname) == '') {
                    array[i] = true
                }
                if ($.trim($scope.Households[i].Lastname) == '') {
                    array[i] = true
                }
            }
            if ($.inArray(true, array) != -1) {
                fromb = 0;
                $scope.titleEnabled = false;
                $scope.divHouseMem = false;
                $(function moveToHome() {
                    $('html, body').animate({
                        scrollTop: $("#ELEMENT").offset().top
                    });
                });
                $(function showmsg1() {

                    $("#hidemsg2").fadeIn();
                    $("#hidemsg2").fadeOut(5000);
                });
            } else {
                fromb = 1;
                $scope.titleEnabled = true;
                $scope.divHouseMem = true;
                $scope.generalinfo = false;
                $scope.contact = false;
                $scope.selectHousehold = false;

            }
            return fromb;
        };




        //   +-----------------------------------------------------------+
       //    |    validating All Form and scrolling to error msg   |
      //     +-----------------------------------------------------------+


        $scope.submited1 = function () {
            var c = $scope.validateApplicant();
            var a = $scope.validate();
            var b = $scope.validateHouse();

            if (a == 1 && b == 1 && c == 1) {
                $(function showModal() {
                    $('#myModalSubmit').modal();
                });
            }
            else {

                $(function moveToApplicant() {
                    $('html, body').animate({
                        scrollTop: $("#applidiv").offset().top
                    });
                });

            }
        };

        $scope.submited2 = function () {
            var a = $scope.validate2();
            var b = $scope.validateApplicant();

            if (a == 1 && b == 1) {
                $(function showModal() {
                    $('#myModalSubmit').modal();
                });
            }
            else {
                $(function moveToApplicant() {
                    $('html, body').animate({
                        scrollTop: $("#applidiv").offset().top
                    });
                });
            }

        };



        //   +-----------------------------------------------+
       //    |    pushing ChildInfo values to pop-up modal   |
      //     +-----------------------------------------------+


        $scope.pushToPop = function (selectChildNum) {


            $scope.Childpop = [];
            for (i = 0; i < $scope.childrens.length; i++) {

                $scope.Childpop.push({'childFirstname': $scope.childrens[i].childFirstname,
                    'childMiddlename': $scope.childrens[i].childMiddlename,
                    'childLastname': $scope.childrens[i].childLastname,
                    'student': $scope.childrens[i].student,
                    'childcategory1': $scope.childrens[i].childcategory1,
                    'childcategory2': $scope.childrens[i].childcategory2,
                    'childcategory3': $scope.childrens[i].childcategory3,
                    'childcategory4': $scope.childrens[i].childcategory4,
                    'childcategory5': $scope.childrens[i].childcategory5,
                    'incometypes': $scope.childrens[i].incometypes,
                    'income': $scope.childrens[i].income
                });
                $scope.childFirstname = '';
                $scope.childMiddlename = '';
                $scope.childLastname = '';
                $scope.student = '';
                $scope.childcategory = '';
                $scope.incometypes = '';
                $scope.income = '';


            }
        };


        $scope.pushtoPoP = function (selectHouseholdNum) {
            $scope.Housepop = [];
            for (i = 0; i < $scope.Households.length; i++) {
                $scope.Housepop.push({'Firstname': $scope.Households[i].Firstname,
                    'Lastname': $scope.Households[i].Lastname,
                    'incometypefromwork': $scope.Households[i].incometypefromwork,
                    'incomefromwork': $scope.Households[i].incomework,
                    'incometypefromassistance': $scope.Households[i].incometypefromassistance,
                    'incomefromassistance': $scope.Households[i].incomefromassistance,
                    'incometypefromother': $scope.Households[i].incometypefromother,
                    'incomefromother': $scope.Households[i].incomefromother
                });
                $scope.Firstname = '';
                $scope.Lastname = '';
                $scope.incometypefromwork = '';
                $scope.incomefromwork = '';
                $scope.incometypefromassistance = '';
                $scope.incomefromassistance = '';
                $scope.incometypefromother = '';
                $scope.incomefromother = '';

            }
        };




        $scope.Table = [];
        $scope.addRow = function () {
            $scope.Table.push({'ChildFirstName': $scope.ChildFirstName,
                'ChildMiddleName': $scope.ChildMiddleName,
                'ChildLastName': $scope.ChildLastName,
                'radioInline': $scope.radioInline,
                'typeofchild': $scope.typeofchild,
                'income': $scope.income});
            $scope.ChildFirstName = '';
            $scope.ChildMiddleName = '';
            $scope.ChildLastName = '';
            $scope.radioInline = '';
            $scope.typeofchild = '';
            $scope.income = '';
        };
        $scope.submit = function () {
            // Set the 'submitted' flag to true
            $scope.submitted = true;
        };


        //------Pushing Values to Dropdowns
        $scope.children = [1, 2, 3, 4, 5];
        $scope.household = [1, 2, 3, 4, 5];
        $scope.Total = $scope.selectChildNum + $scope.selectHouseholdNum;
        $scope.childno = [1, 2, 3, 4, 5];
        $scope.selectChildNum = 1;
        $scope.childincome = ["Weekly", "Bi-Weekly", "2x-Month", "Monthly"];
        $scope.childtype = ["Foster Child", "Migrant", "Homeless", "Runaway", "Other/Normal child"];
        $scope.Householdno = [1, 2, 3, 4, 5];
        $scope.selectHouseholdNum = 1;
        $scope.work = ["Weekly", "Bi-Weekly", "2x-Month", "Monthly"];
        $scope.assitance = ["Weekly", "Bi-Weekly", "2x-Month", "Monthly"];
        $scope.other = ["Weekly", "Bi-Weekly", "2x-Month", "Monthly"];
        $scope.states = ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida",
            "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland",
            "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire",
            "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania",
            "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington",
            "West Virginia", "Wisconsin", "Wyoming"];



        //  +-------------------------------------+
       //   | To add Child info forms by dropdown |
      //    +-------------------------------------+  
        $scope.childrens = [];
        $scope.addChildForm = function (selectChildNum) {



            $scope.divEnable = true;
            if ($scope.selectChildNum <= 15) {
                var latestnumber = selectChildNum - $scope.childrens.length;
                latestnumber = latestnumber + $scope.childrens.length;
                if ($scope.childrens.length <= selectChildNum) {
                    var newchildlength = selectChildNum - $scope.childrens.length;
                    for (i = 1; i <= newchildlength; i++) {
                        newItemNo = $scope.childrens.length + 1;
                        $scope.childrens.push({'id': 'child' + newItemNo});
                    }
                } else {
                    var newchildlength = $scope.childrens.length - selectChildNum;
                    for (i = 1; i <= newchildlength; i++) {
                        lastItem = $scope.childrens.length - 1;
                        $scope.childrens.splice(lastItem);
                    }

                }

            } else {
                $scope.divEnable = false;
            }
            $scope.selectChildNum = $scope.childrens.length;
        };



        //  +------------------------------------------+
       //   | To add Child info forms by button        |
      //    +------------------------------------------+ 

        $scope.addNewChildForm = function () {
            newItemNo = $scope.childrens.length + 1;
            $scope.childrens.push({'id': 'child' + newItemNo});
            $scope.selectChildNum = newItemNo;
            $scope.selectChildNum = $scope.childrens.length;
        };


        //  +-----------------------------------------+
       //   | Remove Childinfo as per seleted field   |
      //    +-----------------------------------------+

        $scope.removeChildForm = function (index) {
            if ($scope.childrens.length == 1) {

            } else {
                var deleteUser = $window.confirm('Are you absolutely sure you want to delete?');
                if (deleteUser) {
                    $scope.childrens.splice(index, 1);
                    $scope.selectChildNum = $scope.childrens.length;
                }
            }

        };




        //  +------------------------------------------+
       //   | To add Household info forms by dropdown  |
      //    +------------------------------------------+ 

        $scope.Households = [];
        $scope.addHouseholdForm = function (selectHouseholdNum) {
            $scope.divHouseMe = true;
            if ($scope.selectHouseholdNum <= 15) {

                var latest = selectHouseholdNum - $scope.Households.length;

                latest = latest + $scope.Households.length;
                if ($scope.Households.length <= selectHouseholdNum) {
                    var newhouselength = selectHouseholdNum - $scope.Households.length;

                    for (i = 1; i <= newhouselength; i++) {
                        newItemNo = $scope.Households.length + 1;
                        $scope.Households.push({'id': 'member' + newItemNo});
                    }
                } else {
                    var newchildlength = $scope.Households.length - selectHouseholdNum;

                    for (i = 1; i <= newchildlength; i++) {
                        lastItem = $scope.Households.length - 1;
                        $scope.Households.splice(lastItem);
                    }
                }
            } else {

                $scope.divHouseMe = false;
            }
            $scope.selectHouseholdNum = $scope.Households.length;
        };


        //  +------------------------------------------+
       //   | To add Household info forms by button    |
      //    +------------------------------------------+ 

        $scope.addNewHouseholdForm = function () {
            newItemNo = $scope.Households.length + 1;
            $scope.Households.push({'id': 'member' + newItemNo});
            $scope.selectHouseholdNum = $scope.Households.length;
        };



        //  +-----------------------------------------+
       //   | Remove Households as per seleted field  |
      //    +-----------------------------------------+
        $scope.removeHouseForm = function (index) {
            if ($scope.Households.length == 1) {

            } else {
                var deleteUser = $window.confirm('Are you absolutely sure you want to delete?');
                if (deleteUser) {
                    $scope.Households.splice(index, 1);
                    $scope.selectHouseholdNum = $scope.Households.length;
                }
            }
        };


        //  +-----------------------------------------+
       //   |        saving form details              |
      //    +-----------------------------------------+                                 

        $scope.saveForm = function (applicantInfo, generalInfo) {
            if ($scope.applicantInfo.progrmmeoptions == 'Yes') {

                var applicantInfo = JSON.stringify($scope.applicantInfo);
                var childrensFormsInfo = JSON.stringify($scope.childrens);
                var householdGeneralInfo = JSON.stringify($scope.generalInfo);


                $.ajax({
                    datatype: "json",
                    type: "POST",
                    url: "/site/Save",
                    data: {applicantInfo: applicantInfo,
                        childrensFormsInfo: childrensFormsInfo,
                        householdInfo: "",
                        householdGeneralInfo: householdGeneralInfo
                    },
                    success: function (data) {

                    },
                    error: function (data) {

                    }
                });

            } else {

                var applicantInfo = JSON.stringify($scope.applicantInfo);

                var childrensFormsInfo = JSON.stringify($scope.childrens);

                var householdInfo = JSON.stringify($scope.Households);

                var householdGeneralInfo = JSON.stringify($scope.generalInfo);


                $.ajax({
                    datatype: "json",
                    type: "POST",
                    url: "/site/Save",
                    data: {applicantInfo: applicantInfo,
                        childrensFormsInfo: childrensFormsInfo,
                        householdInfo: householdInfo,
                        householdGeneralInfo: householdGeneralInfo
                    },
                    success: function (data) {

                    },
                    error: function (data) {

                    }
                });

            }
        };
    }]);

//-------Custom filter for Phone number--------------
app.filter('tel', function () {
    return function (tel) {
        if (!tel) {
            return '';
        }

        var value = tel.toString().trim().replace(/^\+/, '');

        if (value.match(/[^0-9]/)) {
            return tel;
        }

        var country, city, number;

        switch (value.length) {
            case 10: // +1PPP####### -> C (PPP) ###-####
                country = 1;
                city = value.slice(0, 3);
                number = value.slice(3);
                break;

            case 11: // +CPPP####### -> CCC (PP) ###-####
                country = value[0];
                city = value.slice(1, 4);
                number = value.slice(4);
                break;

            case 12: // +CCCPP####### -> CCC (PP) ###-####
                country = value.slice(0, 3);
                city = value.slice(3, 5);
                number = value.slice(5);
                break;

            default:
                return tel;
        }

        if (country == 1) {
            country = "";
        }

        number = number.slice(0, 3) + '-' + number.slice(3);

        return (country + " (" + city + ") " + number).trim();
    };
});




