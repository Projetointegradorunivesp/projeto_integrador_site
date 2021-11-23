<?php
$dalTableusers = array();
$dalTableusers["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID", "autoInc" => "1");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableusers["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTableusers["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid", "autoInc" => "0");
$dalTableusers["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTableusers["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id", "autoInc" => "0");
$dalTableusers["ID"]["key"]=true;

$dal_info["3984500_adota_at_fdb34.awardspace.net__users"] = &$dalTableusers;
?>