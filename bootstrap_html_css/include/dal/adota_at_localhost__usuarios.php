<?php
$dalTableusuarios = array();
$dalTableusuarios["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID", "autoInc" => "1");
$dalTableusuarios["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTableusuarios["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTableusuarios["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableusuarios["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTableusuarios["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid", "autoInc" => "0");
$dalTableusuarios["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTableusuarios["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id", "autoInc" => "0");
$dalTableusuarios["ID"]["key"]=true;

$dal_info["3984500_adota_at_fdb34.awardspace.net__usuarios"] = &$dalTableusuarios;
?>