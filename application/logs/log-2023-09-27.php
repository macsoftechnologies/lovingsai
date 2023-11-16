<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-27 00:06:39 --> Query error: Unknown column 'pa.email' in 'field list' - Invalid query: SELECT `p`.*, `pa`.`name`, `pa`.`email`, `pa`.`phone`, `pa`.`address`, `pa`.`sex`, `pa`.`birth_date`, `pa`.`age`, `pa`.`blood_group`, `pa`.`height`, `pa`.`weight`, `pa`.`bmi`, `pa`.`alcohol`, `pa`.`smoking`, `a`.`name` as `adminname`, `a`.`phone` as `phonenumber`, `a`.`email` as `adminemail`, `a`.`address` as `adminaddress`, `pa`.`patient_code`, `dp`.`name` as `departmentname`
FROM `doctor_prescription` `p`
LEFT JOIN `patient` `pa` ON `pa`.`patient_id` = `p`.`patient_id`
LEFT JOIN `admin` `a` ON `p`.`doctor_id` = `a`.`admin_id`
LEFT JOIN `department` `dp` ON `a`.`department_id` = `dp`.`department_id`
ERROR - 2023-09-27 00:06:58 --> Query error: Unknown column 'pa.email' in 'field list' - Invalid query: SELECT `p`.*, `pa`.`name`, `pa`.`email`, `pa`.`phone`, `pa`.`address`, `pa`.`sex`, `pa`.`birth_date`, `pa`.`age`, `pa`.`blood_group`, `pa`.`height`, `pa`.`weight`, `pa`.`bmi`, `pa`.`alcohol`, `pa`.`smoking`, `a`.`name` as `adminname`, `a`.`phone` as `phonenumber`, `a`.`email` as `adminemail`, `a`.`address` as `adminaddress`, `pa`.`patient_code`, `dp`.`name` as `departmentname`
FROM `doctor_prescription` `p`
LEFT JOIN `patient` `pa` ON `pa`.`patient_id` = `p`.`patient_id`
LEFT JOIN `admin` `a` ON `p`.`doctor_id` = `a`.`admin_id`
LEFT JOIN `department` `dp` ON `a`.`department_id` = `dp`.`department_id`
ERROR - 2023-09-27 01:20:44 --> Query error: Unknown column 'pa.email' in 'field list' - Invalid query: SELECT `p`.*, `pa`.`name`, `pa`.`email`, `pa`.`phone`, `pa`.`address`, `pa`.`sex`, `pa`.`birth_date`, `pa`.`age`, `pa`.`blood_group`, `pa`.`height`, `pa`.`weight`, `pa`.`bmi`, `pa`.`alcohol`, `pa`.`smoking`, `a`.`name` as `adminname`, `a`.`phone` as `phonenumber`, `a`.`email` as `adminemail`, `a`.`address` as `adminaddress`, `pa`.`patient_code`, `dp`.`name` as `departmentname`
FROM `doctor_prescription` `p`
LEFT JOIN `patient` `pa` ON `pa`.`patient_id` = `p`.`patient_id`
LEFT JOIN `admin` `a` ON `p`.`doctor_id` = `a`.`admin_id`
LEFT JOIN `department` `dp` ON `a`.`department_id` = `dp`.`department_id`
ERROR - 2023-09-27 01:22:19 --> Severity: error --> Exception: /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/models/UserModel.php exists, but doesn't declare class UserModel /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Loader.php 340
ERROR - 2023-09-27 01:22:24 --> Query error: Unknown column 'pa.patient_code' in 'field list' - Invalid query: SELECT `p`.*, `pa`.`name`, `pa`.`phone`, `pa`.`sex`, `pa`.`birth_date`, `pa`.`age`, `pa`.`blood_group`, `pa`.`height`, `pa`.`weight`, `pa`.`bmi`, `pa`.`alcohol`, `pa`.`smoking`, `a`.`name` as `adminname`, `a`.`phone` as `phonenumber`, `a`.`email` as `adminemail`, `a`.`address` as `adminaddress`, `pa`.`patient_code`, `dp`.`name` as `departmentname`
FROM `doctor_prescription` `p`
LEFT JOIN `patient` `pa` ON `pa`.`patient_id` = `p`.`patient_id`
LEFT JOIN `admin` `a` ON `p`.`doctor_id` = `a`.`admin_id`
LEFT JOIN `department` `dp` ON `a`.`department_id` = `dp`.`department_id`
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$address /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 59
ERROR - 2023-09-27 01:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 01:27:14 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 02:27:06 --> Severity: Notice --> Trying to access array offset on value of type null /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 175
ERROR - 2023-09-27 02:27:23 --> Severity: Notice --> Trying to access array offset on value of type null /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 175
ERROR - 2023-09-27 02:27:58 --> Severity: Notice --> Trying to access array offset on value of type null /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 175
ERROR - 2023-09-27 02:28:00 --> Severity: Notice --> Trying to access array offset on value of type null /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 175
ERROR - 2023-09-27 02:33:45 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 02:33:45 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:33:45 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:36:05 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:36:05 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:36:05 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 02:36:28 --> Severity: Notice --> Trying to access array offset on value of type null /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 175
ERROR - 2023-09-27 02:38:50 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:38:50 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:38:50 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 02:41:00 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:41:00 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:41:01 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 02:41:51 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 02:41:52 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:41:52 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:43:46 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 02:43:46 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:43:46 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:44:06 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:44:06 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:44:07 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 02:47:22 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 02:47:22 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:47:22 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:55:59 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:56:00 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:56:02 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 02:59:41 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 02:59:41 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 02:59:44 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:05:31 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 03:05:31 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:05:31 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:12 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:08:19 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:08:20 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 03:08:20 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:10:25 --> Query error: Unknown column 'type_id' in 'field list' - Invalid query: INSERT INTO `patient` (`name`, `age`, `birth_date`, `sex`, `phone`, `address`, `mobile`, `address1`, `address2`, `pincode`, `type_id`, `admin_id`, `height`, `weight`, `bmi`, `alcohol`, `smoking`, `patient_code`, `created_at`) VALUES ('test', '12', '2002-12-12', 'male', '887451575', 'rayampadu', '875475125', 'vizag', 'andhra', '521108', '1', '1', '6', '55', 15277.777777778, 'yes', 'no', 'LSM-451436', '2023-09-27 03:10:25')
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:10 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:15:40 --> Severity: Warning --> A non-numeric value encountered /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 151
ERROR - 2023-09-27 03:15:40 --> Severity: Warning --> A non-numeric value encountered /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 151
ERROR - 2023-09-27 03:15:40 --> Severity: Warning --> Division by zero /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 151
ERROR - 2023-09-27 03:15:40 --> Severity: Notice --> Undefined variable: randstring /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 172
ERROR - 2023-09-27 03:15:40 --> Query error: Unknown column 'type_id' in 'field list' - Invalid query: UPDATE `patient` SET `name` = 'Marc Jone', `age` = '34', `birth_date` = '', `sex` = 'male', `phone` = '2354547878', `address` = '44 Burton Avenue', `mobile` = '0', `address1` = '', `address2` = '', `pincode` = '0', `type_id` = '1', `admin_id` = '1', `height` = '', `weight` = '', `bmi` = NAN, `alcohol` = '', `smoking` = '', `patient_code` = 'LSM-'
WHERE `patient_id` = '1'
ERROR - 2023-09-27 03:15:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:16:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:17:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:14 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:35:28 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:36:08 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 03:36:08 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:36:08 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:36:43 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 03:37:26 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:37:26 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:37:26 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 03:38:31 --> Query error: Unknown column 'type_id' in 'field list' - Invalid query: INSERT INTO `patient` (`name`, `age`, `birth_date`, `sex`, `phone`, `address`, `mobile`, `address1`, `address2`, `pincode`, `type_id`, `admin_id`, `height`, `weight`, `bmi`, `alcohol`, `smoking`, `patient_code`, `created_at`) VALUES ('ravi', '20', '2002-02-12', 'male', '875589555', 'jagadanda', '878954885', 'vizag', 'krishna', '521102', '3', '5', '6', '56', 15555.555555556, 'yes', 'yes', 'LSM-035284', '2023-09-27 03:38:31')
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:31 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:32 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:32 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:32 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:32 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:32 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:32 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:39:50 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:24 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:24 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:24 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:42:24 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:43:00 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:01 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:44:02 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 03:44:02 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:44:45 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 03:46:22 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 03:46:22 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:46:22 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:52:20 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:52:20 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:52:22 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 03:56:59 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:56:59 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 03:57:02 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 04:02:00 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 04:02:00 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 04:02:02 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 04:02:34 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 04:02:34 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 04:02:35 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-27 04:09:02 --> Severity: Notice --> Undefined property: stdClass::$nurse_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/nurse/index.php 69
ERROR - 2023-09-27 04:09:02 --> Severity: Notice --> Undefined property: stdClass::$nurse_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/nurse/index.php 73
ERROR - 2023-09-27 04:09:12 --> Severity: Notice --> Undefined property: stdClass::$laboratorist_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratorist/index.php 69
ERROR - 2023-09-27 04:09:12 --> Severity: Notice --> Undefined property: stdClass::$laboratorist_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratorist/index.php 73
ERROR - 2023-09-27 04:09:17 --> Severity: Notice --> Undefined property: stdClass::$pharmacist_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/pharmacist/index.php 68
ERROR - 2023-09-27 04:09:17 --> Severity: Notice --> Undefined property: stdClass::$pharmacist_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/pharmacist/index.php 72
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:22 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:09:43 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:25 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:10:38 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:12:41 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:13:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:16:16 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 04:16:16 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:16:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:22:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:22:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:22:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:22:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:22:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:22:21 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:25:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:25:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:25:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:25:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:25:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:25:52 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:05 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:15 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:15 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:15 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:15 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:15 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:15 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:26:27 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 04:35:35 --> Severity: Notice --> Undefined property: stdClass::$laboratorist_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratorist/index.php 69
ERROR - 2023-09-27 04:35:35 --> Severity: Notice --> Undefined property: stdClass::$laboratorist_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratorist/index.php 73
ERROR - 2023-09-27 05:09:40 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:09:40 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:09:40 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:09:40 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:09:40 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:09:40 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:43:13 --> Severity: Notice --> Undefined property: stdClass::$dueAmount /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/index.php 66
ERROR - 2023-09-27 05:43:13 --> Severity: Notice --> Undefined property: stdClass::$totalAmount /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/index.php 67
ERROR - 2023-09-27 05:43:13 --> Severity: Notice --> Undefined property: stdClass::$methodofPayment /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/index.php 68
ERROR - 2023-09-27 05:43:13 --> Severity: Notice --> Undefined property: stdClass::$reciptNo /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/index.php 69
ERROR - 2023-09-27 05:47:04 --> Severity: Notice --> Undefined index: dueAmount /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/edit.php 54
ERROR - 2023-09-27 05:47:04 --> Severity: Notice --> Undefined index: totalAmount /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/edit.php 60
ERROR - 2023-09-27 05:47:04 --> Severity: Notice --> Undefined index: methodofPayment /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/edit.php 66
ERROR - 2023-09-27 05:48:56 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:48:56 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:48:56 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:48:56 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:48:56 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:48:56 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:48:59 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 05:49:07 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:49:07 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:49:07 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:49:07 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:49:07 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 05:49:07 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:05:04 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:51 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:22:51 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:22:51 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:22:51 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:22:51 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:22:51 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:22:57 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:07 --> Query error: Unknown column 'type_id' in 'field list' - Invalid query: INSERT INTO `patient` (`name`, `age`, `birth_date`, `sex`, `phone`, `address`, `mobile`, `address1`, `address2`, `pincode`, `type_id`, `admin_id`, `height`, `weight`, `bmi`, `alcohol`, `smoking`, `patient_code`, `created_at`) VALUES ('test', '', '2001-02-20', 'male', '878515', 'village', '98755899', 'city', 'district', '521108', '8', '9', '6', '55', 15277.777777778, 'yes', 'no', 'LSM-423144', '2023-09-27 06:24:07')
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:26 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:24:42 --> Severity: Warning --> A non-numeric value encountered /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 151
ERROR - 2023-09-27 06:24:42 --> Severity: Warning --> A non-numeric value encountered /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 151
ERROR - 2023-09-27 06:24:42 --> Severity: Warning --> Division by zero /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 151
ERROR - 2023-09-27 06:24:42 --> Severity: Notice --> Undefined variable: randstring /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 172
ERROR - 2023-09-27 06:24:42 --> Query error: Unknown column 'type_id' in 'field list' - Invalid query: UPDATE `patient` SET `name` = 'Robert L. Thompson', `age` = '31', `birth_date` = '', `sex` = 'male', `phone` = '3458887777', `address` = '94 Stewart Street', `mobile` = '0', `address1` = '', `address2` = '', `pincode` = '0', `type_id` = '8', `admin_id` = '9', `height` = '', `weight` = '', `bmi` = NAN, `alcohol` = '', `smoking` = '', `patient_code` = 'LSM-'
WHERE `patient_id` = '9'
ERROR - 2023-09-27 06:24:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:25:51 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:26:00 --> Severity: Warning --> A non-numeric value encountered /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 151
ERROR - 2023-09-27 06:26:00 --> Severity: Warning --> A non-numeric value encountered /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 151
ERROR - 2023-09-27 06:26:00 --> Severity: Warning --> Division by zero /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 151
ERROR - 2023-09-27 06:26:00 --> Severity: Notice --> Undefined variable: randstring /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 172
ERROR - 2023-09-27 06:26:00 --> Query error: Unknown column 'type_id' in 'field list' - Invalid query: UPDATE `patient` SET `name` = 'Marc Jones', `age` = '34', `birth_date` = '', `sex` = 'male', `phone` = '2354547878', `address` = '44 Burton Avenue', `mobile` = '0', `address1` = '', `address2` = '', `pincode` = '0', `type_id` = '8', `admin_id` = '9', `height` = '', `weight` = '', `bmi` = NAN, `alcohol` = '', `smoking` = '', `patient_code` = 'LSM-'
WHERE `patient_id` = '1'
ERROR - 2023-09-27 06:26:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:01 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:31:06 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:31:06 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:31:06 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:31:06 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:31:06 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:31:06 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:34:06 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 06:35:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:09 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:09 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:09 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:09 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:09 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:09 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 06:35:51 --> Severity: Notice --> Undefined property: stdClass::$pharmacist_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/pharmacist/index.php 68
ERROR - 2023-09-27 06:35:51 --> Severity: Notice --> Undefined property: stdClass::$pharmacist_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/pharmacist/index.php 72
ERROR - 2023-09-27 06:36:01 --> Severity: Notice --> Undefined property: stdClass::$nurse_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/nurse/index.php 69
ERROR - 2023-09-27 06:36:01 --> Severity: Notice --> Undefined property: stdClass::$nurse_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/nurse/index.php 73
ERROR - 2023-09-27 07:48:19 --> Severity: Notice --> Undefined index: dueAmount /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/edit.php 54
ERROR - 2023-09-27 07:48:19 --> Severity: Notice --> Undefined index: totalAmount /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/edit.php 60
ERROR - 2023-09-27 07:48:19 --> Severity: Notice --> Undefined index: methodofPayment /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/edit.php 66
ERROR - 2023-09-27 07:52:02 --> Severity: Warning --> implode(): Invalid arguments passed /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Laboratory.php 85
ERROR - 2023-09-27 07:52:02 --> Query error: Column 'test' cannot be null - Invalid query: INSERT INTO `laboratory` (`laboratory_type`, `test`, `code`, `price`, `discount`) VALUES ('Package', NULL, '00HSN', '1800', '1450')
ERROR - 2023-09-27 07:52:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-27 07:57:09 --> Severity: Notice --> Undefined index: dueAmount /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/edit.php 54
ERROR - 2023-09-27 07:57:09 --> Severity: Notice --> Undefined index: totalAmount /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/edit.php 60
ERROR - 2023-09-27 07:57:09 --> Severity: Notice --> Undefined index: methodofPayment /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/edit.php 66
ERROR - 2023-09-27 08:00:35 --> Severity: error --> Exception: Call to a member function num_rows() on array /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/laboratory/edit.php 59
ERROR - 2023-09-27 08:28:53 --> Severity: Notice --> Undefined property: stdClass::$pharmacist_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/pharmacist/index.php 68
ERROR - 2023-09-27 08:28:53 --> Severity: Notice --> Undefined property: stdClass::$pharmacist_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/pharmacist/index.php 72
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:36:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:37:05 --> 404 Page Not Found: Labbills/index
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 08:40:08 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:11:40 --> Query error: Unknown column 'type_id' in 'field list' - Invalid query: INSERT INTO `patient` (`name`, `age`, `birth_date`, `sex`, `phone`, `address`, `mobile`, `address1`, `address2`, `pincode`, `type_id`, `admin_id`, `height`, `weight`, `bmi`, `alcohol`, `smoking`, `patient_code`, `created_at`) VALUES ('test', 'test', '', 'male', 'phone', 'vizag', '87', 'vizag', 'krishna', '521108', '1', '1', '6', '30', 8333.3333333333, 'yes', 'no', 'LSM-613833', '2023-09-27 09:11:40')
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:00 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 09:57:27 --> 404 Page Not Found: Labbills/index
ERROR - 2023-09-27 09:58:19 --> 404 Page Not Found: Labbills/index
ERROR - 2023-09-27 09:59:40 --> 404 Page Not Found: Labbills/index
ERROR - 2023-09-27 10:00:02 --> 404 Page Not Found: Labbills/index
ERROR - 2023-09-27 10:00:18 --> 404 Page Not Found: Labbills/index
ERROR - 2023-09-27 10:01:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 10:01:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 10:01:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 10:01:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 10:01:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 10:01:02 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 10:01:50 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:26:33 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:30:42 --> 404 Page Not Found: Labbills/insert
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:19 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:31:33 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 11:31:33 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 11:31:33 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 11:31:33 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 11:31:33 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 11:31:33 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 11:35:25 --> Severity: Notice --> Undefined property: stdClass::$nurse_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/nurse/index.php 69
ERROR - 2023-09-27 11:35:25 --> Severity: Notice --> Undefined property: stdClass::$nurse_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/nurse/index.php 73
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 11:35:30 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:17 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:17 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:17 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:17 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:17 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:17 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:17 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:28:18 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:29:47 --> Severity: Warning --> A non-numeric value encountered /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 54
ERROR - 2023-09-27 13:29:47 --> Severity: Warning --> A non-numeric value encountered /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 55
ERROR - 2023-09-27 13:29:47 --> Severity: Warning --> Division by zero /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 55
ERROR - 2023-09-27 13:29:47 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: INSERT INTO `patient` (`name`, `age`, `birth_date`, `sex`, `phone`, `address`, `mobile`, `address1`, `address2`, `pincode`, `type_id`, `admin_id`, `height`, `weight`, `bmi`, `alcohol`, `smoking`, `patient_code`, `created_at`) VALUES ('test', 'test', '', 'test', 'test', 'test', 'test', 'test', 'ttt', '23454', '1', '1', 'test', 'test', NAN, 'test', 'test', 'LSM-567927', '2023-09-27 13:29:47')
ERROR - 2023-09-27 13:29:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-27 13:30:48 --> Severity: Warning --> A non-numeric value encountered /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 54
ERROR - 2023-09-27 13:30:48 --> Severity: Warning --> A non-numeric value encountered /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 55
ERROR - 2023-09-27 13:30:48 --> Severity: Warning --> Division by zero /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 55
ERROR - 2023-09-27 13:30:48 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: INSERT INTO `patient` (`name`, `age`, `birth_date`, `sex`, `phone`, `address`, `mobile`, `address1`, `address2`, `pincode`, `type_id`, `admin_id`, `height`, `weight`, `bmi`, `alcohol`, `smoking`, `patient_code`, `created_at`) VALUES ('test', '21', '2001-12-20', 'test', '78945624', 'test', '785665887', 'test', 'ttt', '23454', '1', '1', 'test', 'test', NAN, 'test', 'test', 'LSM-566472', '2023-09-27 13:30:48')
ERROR - 2023-09-27 13:30:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-27 13:37:03 --> Query error: Unknown column 'type_id' in 'field list' - Invalid query: INSERT INTO `patient` (`name`, `age`, `birth_date`, `sex`, `phone`, `address`, `mobile`, `address1`, `address2`, `pincode`, `type_id`, `admin_id`, `height`, `weight`, `bmi`, `alcohol`, `smoking`, `patient_code`, `created_at`) VALUES ('test', '21', '2001-12-20', 'test', '78945624', 'test', '785665887', 'test', 'ttt', '23454', '1', '1', '6', '55', 15277.777777778, 'test', 'test', 'LSM-564203', '2023-09-27 13:37:03')
ERROR - 2023-09-27 13:39:07 --> Query error: Unknown column 'admin_id' in 'field list' - Invalid query: INSERT INTO `patient` (`name`, `age`, `birth_date`, `sex`, `phone`, `address`, `mobile`, `address1`, `address2`, `pincode`, `admin_id`, `height`, `weight`, `bmi`, `alcohol`, `smoking`, `patient_code`, `created_at`) VALUES ('test', '21', '2001-12-20', 'test', '78945624', 'test', '785665887', 'test', 'ttt', '23454', '1', '6', '55', 15277.777777778, 'test', 'test', 'LSM-264567', '2023-09-27 13:39:07')
ERROR - 2023-09-27 13:39:13 --> 404 Page Not Found: Patient/create
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:39:20 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:40:32 --> Query error: Unknown column 'admin_id' in 'field list' - Invalid query: INSERT INTO `patient` (`name`, `age`, `birth_date`, `sex`, `phone`, `address`, `mobile`, `address1`, `address2`, `pincode`, `admin_id`, `height`, `weight`, `bmi`, `alcohol`, `smoking`, `patient_code`, `created_at`) VALUES ('test', '22', '2001-02-12', 'male', '788488588', 'village', '88785588', 'city', 'district', '521108', '1', '6', '55', 15277.777777778, 'yes', 'no', 'LSM-092014', '2023-09-27 13:40:32')
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:41:28 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 13:42:07 --> Severity: Notice --> Undefined variable: randstring /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Patient.php 172
ERROR - 2023-09-27 13:42:07 --> Query error: Unknown column 'type_id' in 'field list' - Invalid query: UPDATE `patient` SET `name` = 'tes', `age` = '22', `birth_date` = '2001-02-12', `sex` = 'male', `phone` = '788488588', `address` = 'village', `mobile` = '88785588', `address1` = 'city', `address2` = 'district', `pincode` = '521108', `type_id` = '1', `admin_id` = '1', `height` = '6', `weight` = '55', `bmi` = 1.5277777777778, `alcohol` = 'yes', `smoking` = 'no', `patient_code` = 'LSM-'
WHERE `patient_id` = '20'
ERROR - 2023-09-27 13:42:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-27 13:43:28 --> Query error: Unknown column 'type_id' in 'field list' - Invalid query: UPDATE `patient` SET `name` = 'tes', `age` = '22', `birth_date` = '2001-02-12', `sex` = 'male', `phone` = '788488588', `address` = 'village', `mobile` = '88785588', `address1` = 'city', `address2` = 'district', `pincode` = '521108', `type_id` = '1', `admin_id` = '1', `height` = '6', `weight` = '55', `bmi` = 1.5277777777778, `alcohol` = 'yes', `smoking` = 'no'
WHERE `patient_id` = '20'
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:25:09 --> Severity: Notice --> Undefined property: stdClass::$email /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/patient/index.php 208
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:35:12 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:35:36 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:35:43 --> Severity: Notice --> Undefined index: Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/edit.php 41
ERROR - 2023-09-27 23:35:43 --> Severity: Notice --> Undefined index: mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/edit.php 47
ERROR - 2023-09-27 23:35:43 --> Severity: Notice --> Undefined index: appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/edit.php 54
ERROR - 2023-09-27 23:35:43 --> Severity: Notice --> Undefined index: status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/edit.php 61
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:36:07 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:36:14 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:53:08 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:53:17 --> Query error: Table 'hmscii.purchase' doesn't exist - Invalid query: SELECT *
FROM `purchase`
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:54:57 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:55:02 --> Query error: Table 'hmscii.sales' doesn't exist - Invalid query: SELECT *
FROM `sales`
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$Name /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 62
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$mobile /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 63
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$appointment_date /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 64
ERROR - 2023-09-27 23:55:05 --> Severity: Notice --> Undefined property: stdClass::$status /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/appointment/index.php 65
ERROR - 2023-09-27 23:55:16 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 23:55:16 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 23:55:16 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 23:55:16 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 23:55:16 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
ERROR - 2023-09-27 23:55:16 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 65
