<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-16 01:08:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php:67) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-16 01:08:17 --> Severity: Compile Error --> Cannot redeclare Presciption::create() /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 67
ERROR - 2023-09-16 01:11:36 --> Query error: Unknown column 'a.doctor_id' in 'on clause' - Invalid query: SELECT `p`.*, `pa`.`name`, `pa`.`email`, `pa`.`phone`, `pa`.`address`, `pa`.`sex`, `pa`.`birth_date`, `pa`.`age`, `pa`.`blood_group`, `pa`.`height`, `pa`.`weight`, `pa`.`bmi`, `pa`.`alcohol`, `pa`.`smoking`, `a`.`name` as `adminname`, `a`.`phone` as `phonenumber`, `a`.`email` as `adminemail`, `a`.`address` as `adminaddress`, `pa`.`patient_code`
FROM `doctor_prescription` `p`
LEFT JOIN `patient` `pa` ON `pa`.`patient_id` = `p`.`patient_id`
LEFT JOIN `admin` `a` ON `a`.`doctor_id` = `p`.`admin_id`
ERROR - 2023-09-16 01:16:24 --> Severity: error --> Exception: Call to undefined method UserModel::getMedicines() /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 46
ERROR - 2023-09-16 01:17:39 --> Query error: Not unique table/alias: 'm' - Invalid query: SELECT `a`.*, `m`.`name`, `m`.`manufacturing_company`, `a`.`name` as `manufacturing`, `a`.`description` as `manufacturing_description`
FROM `medicine` `m`
LEFT JOIN `medicine` `m` ON `a`.`medicine_id` = `m`.`medicine_id`
LEFT JOIN `medicine_category` `c` ON `m`.`medicine_category_id` = `c`.`medicine_category_id`
ERROR - 2023-09-16 01:19:09 --> Query error: Unknown column 'a.name' in 'field list' - Invalid query: SELECT `m`.*, `m`.`name`, `m`.`manufacturing_company`, `a`.`name` as `manufacturing`, `a`.`description` as `manufacturing_description`
FROM `medicine` `m`
LEFT JOIN `medicine_category` `c` ON `m`.`medicine_category_id` = `c`.`medicine_category_id`
ERROR - 2023-09-16 01:20:12 --> Query error: Unknown column 'c.manufacturing_company' in 'field list' - Invalid query: SELECT `m`.*, `c`.`manufacturing_company`, `c`.`name` as `manufacturing`
FROM `medicine` `m`
LEFT JOIN `medicine_category` `c` ON `m`.`medicine_category_id` = `c`.`medicine_category_id`
ERROR - 2023-09-16 01:24:58 --> Query error: Unknown column 'c.manufacturing_company' in 'field list' - Invalid query: SELECT `m`.*, `c`.`manufacturing_company`, `c`.`name` as `manufacturing`
FROM `medicine` `m`
LEFT JOIN `medicine_category` `c` ON `m`.`medicine_category_id` = `c`.`medicine_category_id`
ERROR - 2023-09-16 03:23:56 --> Severity: Notice --> Undefined offset: 1 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 129
ERROR - 2023-09-16 03:23:56 --> Query error: Column 'after_food' cannot be null - Invalid query: INSERT INTO `assign_medicine_patient` (`presciption_id`, `medicine_id`, `morning`, `afternoon`, `night`, `after_food`, `before_food`, `no_of_days`, `status`, `created_at`) VALUES (1, '2', '1', '1', '1', NULL, '1', '30', 1, '2023-09-16 03:23:56')
ERROR - 2023-09-16 03:23:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-16 03:33:51 --> Severity: Notice --> Undefined offset: 1 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 140
ERROR - 2023-09-16 03:33:51 --> Severity: Notice --> Undefined offset: 2 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 122
ERROR - 2023-09-16 03:33:51 --> Severity: Notice --> Undefined offset: 2 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 128
ERROR - 2023-09-16 03:33:51 --> Severity: Notice --> Undefined offset: 2 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 134
ERROR - 2023-09-16 03:33:51 --> Severity: Notice --> Undefined offset: 2 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 140
ERROR - 2023-09-16 03:33:51 --> Severity: Notice --> Undefined offset: 2 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 146
ERROR - 2023-09-16 03:33:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/helpers/url_helper.php 564
ERROR - 2023-09-16 03:34:35 --> Severity: Notice --> Undefined offset: 1 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 140
ERROR - 2023-09-16 03:34:35 --> Severity: Notice --> Undefined offset: 2 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 122
ERROR - 2023-09-16 03:34:35 --> Severity: Notice --> Undefined offset: 2 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 128
ERROR - 2023-09-16 03:34:35 --> Severity: Notice --> Undefined offset: 2 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 134
ERROR - 2023-09-16 03:34:35 --> Severity: Notice --> Undefined offset: 2 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 140
ERROR - 2023-09-16 03:34:35 --> Severity: Notice --> Undefined offset: 2 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 146
ERROR - 2023-09-16 03:34:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/helpers/url_helper.php 564
ERROR - 2023-09-16 03:40:09 --> Severity: Notice --> Undefined offset: 1 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 159
ERROR - 2023-09-16 03:40:09 --> Query error: Column 'after_food' cannot be null - Invalid query: INSERT INTO `assign_medicine_patient` (`presciption_id`, `medicine_id`, `morning`, `afternoon`, `night`, `after_food`, `before_food`, `no_of_days`, `status`, `created_at`) VALUES (1, '2', '1', '1', '1', NULL, '1', '30', 1, '2023-09-16 03:40:09')
ERROR - 2023-09-16 03:40:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-16 03:42:31 --> Severity: Notice --> Undefined offset: 1 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 128
ERROR - 2023-09-16 03:42:31 --> Query error: Column 'after_food' cannot be null - Invalid query: INSERT INTO `assign_medicine_patient` (`presciption_id`, `medicine_id`, `morning`, `afternoon`, `night`, `after_food`, `before_food`, `no_of_days`, `status`, `created_at`) VALUES (2, '2', '1', '1', '1', NULL, '1', '30', 1, '2023-09-16 03:42:31')
ERROR - 2023-09-16 03:42:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-16 03:43:39 --> Severity: Notice --> Undefined offset: 1 /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/controllers/Presciption.php 128
ERROR - 2023-09-16 03:43:39 --> Query error: Column 'after_food' cannot be null - Invalid query: INSERT INTO `assign_medicine_patient` (`presciption_id`, `medicine_id`, `morning`, `afternoon`, `night`, `after_food`, `before_food`, `no_of_days`, `status`, `created_at`) VALUES (3, '2', 'on', 'on', 'on', NULL, 'on', '30', 1, '2023-09-16 03:43:39')
ERROR - 2023-09-16 03:43:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Exceptions.php:271) /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/system/core/Common.php 564
ERROR - 2023-09-16 03:51:44 --> 404 Page Not Found: Assets1/bundles
ERROR - 2023-09-16 03:51:44 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-16 03:51:45 --> 404 Page Not Found: Assets1/css
ERROR - 2023-09-16 04:14:37 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 04:14:37 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 04:14:37 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:22:20 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:22:20 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:22:20 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:22:34 --> Query error: Unknown column 'a.name' in 'field list' - Invalid query: SELECT `a`.*, `m`.`name`, `m`.`manufacturing_company`, `a`.`name` as `manufacturing`, `a`.`description` as `manufacturing_description`
FROM `assign_medicine_patient` `a`
LEFT JOIN `medicine` `m` ON `a`.`medicine_id` = `m`.`medicine_id`
LEFT JOIN `medicine_category` `c` ON `m`.`medicine_category_id` = `c`.`medicine_category_id`
WHERE `p`.`presciption_id` = '1'
ERROR - 2023-09-16 11:22:44 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:22:44 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:22:44 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:22:53 --> Query error: Unknown column 'a.name' in 'field list' - Invalid query: SELECT `a`.*, `m`.`name`, `m`.`manufacturing_company`, `a`.`name` as `manufacturing`, `a`.`description` as `manufacturing_description`
FROM `assign_medicine_patient` `a`
LEFT JOIN `medicine` `m` ON `a`.`medicine_id` = `m`.`medicine_id`
LEFT JOIN `medicine_category` `c` ON `m`.`medicine_category_id` = `c`.`medicine_category_id`
WHERE `p`.`presciption_id` = '1'
ERROR - 2023-09-16 11:22:59 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:22:59 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:22:59 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:28:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:28:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:28:23 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:28:38 --> Query error: Unknown column 'a.name' in 'field list' - Invalid query: SELECT `a`.*, `m`.`name`, `m`.`manufacturing_company`, `a`.`name` as `manufacturing`, `a`.`description` as `manufacturing_description`
FROM `assign_medicine_patient` `a`
LEFT JOIN `medicine` `m` ON `a`.`medicine_id` = `m`.`medicine_id`
LEFT JOIN `medicine_category` `c` ON `m`.`medicine_category_id` = `c`.`medicine_category_id`
WHERE `p`.`presciption_id` = '1'
ERROR - 2023-09-16 11:29:04 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:29:04 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:29:04 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:30:55 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:30:55 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:30:55 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:31:37 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:31:37 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
ERROR - 2023-09-16 11:31:37 --> Severity: Notice --> Undefined property: stdClass::$admin_id /hermes/bosnacweb04/bosnacweb04cl/b418/ipg.macsoforg/macsofin/HMSCII/application/views/presciption/index.php 69
