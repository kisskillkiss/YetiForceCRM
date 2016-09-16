<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce.com
 * ********************************************************************************** */

//Overrides GetRelatedList : used to get related query
//TODO : Eliminate below hacking solution

$startTime = microtime(true);

define('REQUEST_MODE', 'WebUI');
define('ROOT_DIRECTORY', __DIR__);

require 'include/RequirementsValidation.php';
require 'include/Webservices/Relation.php';
require 'include/main/WebUI.php';

$webUI = new Vtiger_WebUI();
global $mod_strings;
var_dump($mod_strings); exit;
$webUI->process(AppRequest::init());

