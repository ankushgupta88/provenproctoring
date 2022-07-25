<?php session_start();
//Call connection file
include_once("connection.php");
//Set Constant here
define("WEBSITEURL", "https://selodesign.com/provenproctoring/");

//Proven Crm Details
define("APIURL", "https://provenpass.ch/sandbox/custom/service/v4_1/rest.php");
define("CRMUSER", "seloadmin");
define("CRMPASSWORD", "06e94e7c86d1f3cfaeb8b8b04d85e270");

//Vault Crm Details
define("VAULT_APIURL", "https://sandbox.vaultcrm.ch/custom/service/v4_1/rest.php");
define("VAULT_CRMUSER", "seloadmin");
define("VAULT_CRMPASSWORD", "SeloServices12!@");
define("VAULT_CAMPAIGNID", "165605645277");
define("VAULT_OFFER_ID", "165605660599");

define("AFID", "patrick");
define("V1", "site");
define("V2", "email");
?> 