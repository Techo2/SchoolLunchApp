<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ApplicantsCollection extends EMongoDocument {

    public $applicantInfo;
    public $childInfo;
    public $householdInfo;
    public $householdGeneralInfo;

    public function getCollectionName() {
        return 'ApplicantsCollection';
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function saveActiveUsersData($applicantInfo, $childrensFormsInfo, $householdInfo, $householdGeneralInfo) {



        try {


//            error_log("------------modellllllllllll--------------------------" . print_r($applicantInfo, 1));


            $ActiveUsersObj = new ApplicantsCollection();

            $ActiveUsersObj->applicantInfo = $applicantInfo;

            $ActiveUsersObj->childInfo = $childrensFormsInfo;

            $ActiveUsersObj->householdInfo = $householdInfo;

            $ActiveUsersObj->householdGeneralInfo = $householdGeneralInfo;

            $ActiveUsersObj->save();
        } catch (Exception $exc) {

            error_log("error occured in model" . $exc->getMessage());
        }
    }

}
