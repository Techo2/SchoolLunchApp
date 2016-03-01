<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function init() {

        // import class paths for captcha extended

        Yii::$classMap = array_merge(Yii::$classMap, array(
            'CaptchaExtendedAction' => Yii::getPathOfAlias('ext.captchaExtended') . DIRECTORY_SEPARATOR . 'CaptchaExtendedAction.php',
            'CaptchaExtendedValidator' => Yii::getPathOfAlias('ext.captchaExtended') . DIRECTORY_SEPARATOR . 'CaptchaExtendedValidator.php'
        ));
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

   
    /**
     * Displays the LunchApp page
     */
    public function actionLunchApp() {
        
        
        $this->render('applicationpage');
    }

   

   
    public function actionSave() {

        error_log("&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&");
        try {


            $applicantInformation = array();

            $childrensFormsInformation = array();

            $householdInformation = array();

            $householdGeneralInformation = array();

            if (isset($_POST['applicantInfo'])) {


                $applicantInformation = $_POST['applicantInfo'];
            } else {

                $applicantInformation = '';
            }

            if (isset($_POST['childrensFormsInfo'])) {

                $childrensFormsInformation = $_POST['childrensFormsInfo'];
            } else {

                $childrensFormsInformation = '';
            }


            if (isset($_POST['householdInfo'])) {

                $householdInformation = $_POST['householdInfo'];
            } else {

                $householdInformation = '';
            }


            if (isset($_POST['householdGeneralInfo'])) {




                $householdGeneralInformation = $_POST['householdGeneralInfo'];
            } else {

                $householdGeneralInformation = '';
            }

            $applicantInfo = json_decode($applicantInformation, true);
            $childrensFormsInfo = json_decode($childrensFormsInformation, true);
            $householdInfo = json_decode($householdInformation, true);
            $householdGeneralInfo = json_decode($householdGeneralInformation, true);

            error_log("++++++++++++++dtacomming+++++++++++++++++++++++" . print_r($householdGeneralInformation, true));


            ApplicantsCollection::model()->saveActiveUsersData($applicantInfo, $childrensFormsInfo, $householdInfo, $householdGeneralInfo);
        } catch (Exception $ex) {



            error_log("datasomething went wrong" . $ex->getMessage());
        }
    }



    public function actionThankU() {



        $this->render('thanku');
    }

}
