<?php
$tdatacachorro = array();
$tdatacachorro[".searchableFields"] = array();
$tdatacachorro[".ShortName"] = "cachorro";
$tdatacachorro[".OwnerID"] = "";
$tdatacachorro[".OriginalTable"] = "cachorro";


$tdatacachorro[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacachorro[".originalPagesByType"] = $tdatacachorro[".pagesByType"];
$tdatacachorro[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacachorro[".originalPages"] = $tdatacachorro[".pages"];
$tdatacachorro[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacachorro[".originalDefaultPages"] = $tdatacachorro[".defaultPages"];

//	field labels
$fieldLabelscachorro = array();
$fieldToolTipscachorro = array();
$pageTitlescachorro = array();
$placeHolderscachorro = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscachorro["Portuguese(Brazil)"] = array();
	$fieldToolTipscachorro["Portuguese(Brazil)"] = array();
	$placeHolderscachorro["Portuguese(Brazil)"] = array();
	$pageTitlescachorro["Portuguese(Brazil)"] = array();
	$fieldLabelscachorro["Portuguese(Brazil)"]["idc"] = "Idc";
	$fieldToolTipscachorro["Portuguese(Brazil)"]["idc"] = "";
	$placeHolderscachorro["Portuguese(Brazil)"]["idc"] = "";
	$fieldLabelscachorro["Portuguese(Brazil)"]["nomec"] = "Nome:";
	$fieldToolTipscachorro["Portuguese(Brazil)"]["nomec"] = "";
	$placeHolderscachorro["Portuguese(Brazil)"]["nomec"] = "";
	$fieldLabelscachorro["Portuguese(Brazil)"]["racac"] = "Raça:";
	$fieldToolTipscachorro["Portuguese(Brazil)"]["racac"] = "";
	$placeHolderscachorro["Portuguese(Brazil)"]["racac"] = "";
	$fieldLabelscachorro["Portuguese(Brazil)"]["sexoc"] = "Sexo:";
	$fieldToolTipscachorro["Portuguese(Brazil)"]["sexoc"] = "";
	$placeHolderscachorro["Portuguese(Brazil)"]["sexoc"] = "";
	$fieldLabelscachorro["Portuguese(Brazil)"]["idadec"] = "Idade:";
	$fieldToolTipscachorro["Portuguese(Brazil)"]["idadec"] = "";
	$placeHolderscachorro["Portuguese(Brazil)"]["idadec"] = "";
	$fieldLabelscachorro["Portuguese(Brazil)"]["corc"] = "Cor:";
	$fieldToolTipscachorro["Portuguese(Brazil)"]["corc"] = "";
	$placeHolderscachorro["Portuguese(Brazil)"]["corc"] = "";
	$fieldLabelscachorro["Portuguese(Brazil)"]["textoc"] = "Descrição:";
	$fieldToolTipscachorro["Portuguese(Brazil)"]["textoc"] = "";
	$placeHolderscachorro["Portuguese(Brazil)"]["textoc"] = "";
	$fieldLabelscachorro["Portuguese(Brazil)"]["image_db"] = "Foto:";
	$fieldToolTipscachorro["Portuguese(Brazil)"]["image_db"] = "";
	$placeHolderscachorro["Portuguese(Brazil)"]["image_db"] = "";
	$fieldLabelscachorro["Portuguese(Brazil)"]["th_image_db"] = "Th Image Db";
	$fieldToolTipscachorro["Portuguese(Brazil)"]["th_image_db"] = "";
	$placeHolderscachorro["Portuguese(Brazil)"]["th_image_db"] = "";
	$pageTitlescachorro["Portuguese(Brazil)"]["add"] = "Adicionar Novo Cachorro";
	$pageTitlescachorro["Portuguese(Brazil)"]["edit"] = "[{%nomec}]";
	$pageTitlescachorro["Portuguese(Brazil)"]["view"] = "{%nomec}";
	$pageTitlescachorro["Portuguese(Brazil)"]["search"] = "Busca Avançada Cachorro";
	if (count($fieldToolTipscachorro["Portuguese(Brazil)"]))
		$tdatacachorro[".isUseToolTips"] = true;
}


	$tdatacachorro[".NCSearch"] = true;



$tdatacachorro[".shortTableName"] = "cachorro";
$tdatacachorro[".nSecOptions"] = 0;

$tdatacachorro[".mainTableOwnerID"] = "";
$tdatacachorro[".entityType"] = 0;
$tdatacachorro[".connId"] = "3984500_adota_at_fdb34.awardspace.net";


$tdatacachorro[".strOriginalTableName"] = "cachorro";

	



$tdatacachorro[".showAddInPopup"] = false;

$tdatacachorro[".showEditInPopup"] = false;

$tdatacachorro[".showViewInPopup"] = false;

$tdatacachorro[".listAjax"] = false;
//	temporary
//$tdatacachorro[".listAjax"] = false;

	$tdatacachorro[".audit"] = false;

	$tdatacachorro[".locking"] = false;


$pages = $tdatacachorro[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacachorro[".edit"] = true;
	$tdatacachorro[".afterEditAction"] = 1;
	$tdatacachorro[".closePopupAfterEdit"] = 1;
	$tdatacachorro[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacachorro[".add"] = true;
$tdatacachorro[".afterAddAction"] = 1;
$tdatacachorro[".closePopupAfterAdd"] = 1;
$tdatacachorro[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacachorro[".list"] = true;
}



$tdatacachorro[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacachorro[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacachorro[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacachorro[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacachorro[".printFriendly"] = true;
}



$tdatacachorro[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacachorro[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacachorro[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacachorro[".isUseAjaxSuggest"] = true;

$tdatacachorro[".rowHighlite"] = true;





$tdatacachorro[".ajaxCodeSnippetAdded"] = false;

$tdatacachorro[".buttonsAdded"] = false;

$tdatacachorro[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacachorro[".isUseTimeForSearch"] = false;


$tdatacachorro[".badgeColor"] = "778899";


$tdatacachorro[".allSearchFields"] = array();
$tdatacachorro[".filterFields"] = array();
$tdatacachorro[".requiredSearchFields"] = array();

$tdatacachorro[".googleLikeFields"] = array();
$tdatacachorro[".googleLikeFields"][] = "nomec";
$tdatacachorro[".googleLikeFields"][] = "racac";
$tdatacachorro[".googleLikeFields"][] = "sexoc";
$tdatacachorro[".googleLikeFields"][] = "idadec";
$tdatacachorro[".googleLikeFields"][] = "corc";
$tdatacachorro[".googleLikeFields"][] = "textoc";



$tdatacachorro[".tableType"] = "list";

$tdatacachorro[".printerPageOrientation"] = 0;
$tdatacachorro[".nPrinterPageScale"] = 100;

$tdatacachorro[".nPrinterSplitRecords"] = 40;

$tdatacachorro[".geocodingEnabled"] = false;










$tdatacachorro[".pageSize"] = 20;

$tdatacachorro[".warnLeavingPages"] = true;

$tdatacachorro[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
$tdatacachorro[".strOrderBy"] = $tstrOrderBy;

$tdatacachorro[".orderindexes"] = array();


$tdatacachorro[".sqlHead"] = "SELECT idc,  	nomec,  	racac,  	sexoc,  	idadec,  	corc,  	textoc,  	image_db,  	th_image_db";
$tdatacachorro[".sqlFrom"] = "FROM cachorro";
$tdatacachorro[".sqlWhereExpr"] = "";
$tdatacachorro[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacachorro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacachorro[".arrGroupsPerPage"] = $arrGPP;

$tdatacachorro[".highlightSearchResults"] = true;

$tableKeyscachorro = array();
$tableKeyscachorro[] = "idc";
$tdatacachorro[".Keys"] = $tableKeyscachorro;


$tdatacachorro[".hideMobileList"] = array();




//	idc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idc";
	$fdata["GoodName"] = "idc";
	$fdata["ownerTable"] = "cachorro";
	$fdata["Label"] = GetFieldLabel("cachorro","idc");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idc";

		$fdata["sourceSingle"] = "idc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacachorro["idc"] = $fdata;
		$tdatacachorro[".searchableFields"][] = "idc";
//	nomec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nomec";
	$fdata["GoodName"] = "nomec";
	$fdata["ownerTable"] = "cachorro";
	$fdata["Label"] = GetFieldLabel("cachorro","nomec");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nomec";

		$fdata["sourceSingle"] = "nomec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomec";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=40";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacachorro["nomec"] = $fdata;
		$tdatacachorro[".searchableFields"][] = "nomec";
//	racac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "racac";
	$fdata["GoodName"] = "racac";
	$fdata["ownerTable"] = "cachorro";
	$fdata["Label"] = GetFieldLabel("cachorro","racac");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "racac";

		$fdata["sourceSingle"] = "racac";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "racac";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=25";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacachorro["racac"] = $fdata;
		$tdatacachorro[".searchableFields"][] = "racac";
//	sexoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sexoc";
	$fdata["GoodName"] = "sexoc";
	$fdata["ownerTable"] = "cachorro";
	$fdata["Label"] = GetFieldLabel("cachorro","sexoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sexoc";

		$fdata["sourceSingle"] = "sexoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacachorro["sexoc"] = $fdata;
		$tdatacachorro[".searchableFields"][] = "sexoc";
//	idadec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idadec";
	$fdata["GoodName"] = "idadec";
	$fdata["ownerTable"] = "cachorro";
	$fdata["Label"] = GetFieldLabel("cachorro","idadec");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idadec";

		$fdata["sourceSingle"] = "idadec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idadec";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacachorro["idadec"] = $fdata;
		$tdatacachorro[".searchableFields"][] = "idadec";
//	corc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "corc";
	$fdata["GoodName"] = "corc";
	$fdata["ownerTable"] = "cachorro";
	$fdata["Label"] = GetFieldLabel("cachorro","corc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "corc";

		$fdata["sourceSingle"] = "corc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "corc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacachorro["corc"] = $fdata;
		$tdatacachorro[".searchableFields"][] = "corc";
//	textoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "textoc";
	$fdata["GoodName"] = "textoc";
	$fdata["ownerTable"] = "cachorro";
	$fdata["Label"] = GetFieldLabel("cachorro","textoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "textoc";

		$fdata["sourceSingle"] = "textoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "textoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacachorro["textoc"] = $fdata;
		$tdatacachorro[".searchableFields"][] = "textoc";
//	image_db
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "image_db";
	$fdata["GoodName"] = "image_db";
	$fdata["ownerTable"] = "cachorro";
	$fdata["Label"] = GetFieldLabel("cachorro","image_db");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "image_db";

		$fdata["sourceSingle"] = "image_db";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "image_db";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
			$edata["acceptFileTypesHtml"] = ".bmp";
						$edata["acceptFileTypes"] .= "|gif";
			$edata["acceptFileTypesHtml"] .= ",.gif";
						$edata["acceptFileTypes"] .= "|jpg";
			$edata["acceptFileTypesHtml"] .= ",.jpg";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th_image_db";
			$edata["ThumbnailSize"] = 200;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacachorro["image_db"] = $fdata;
	//	th_image_db
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "th_image_db";
	$fdata["GoodName"] = "th_image_db";
	$fdata["ownerTable"] = "cachorro";
	$fdata["Label"] = GetFieldLabel("cachorro","th_image_db");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "th_image_db";

		$fdata["sourceSingle"] = "th_image_db";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "th_image_db";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "NOT Empty";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacachorro["th_image_db"] = $fdata;
	

$tables_data["cachorro"]=&$tdatacachorro;
$field_labels["cachorro"] = &$fieldLabelscachorro;
$fieldToolTips["cachorro"] = &$fieldToolTipscachorro;
$placeHolders["cachorro"] = &$placeHolderscachorro;
$page_titles["cachorro"] = &$pageTitlescachorro;


changeTextControlsToDate( "cachorro" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cachorro"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cachorro"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cachorro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idc,  	nomec,  	racac,  	sexoc,  	idadec,  	corc,  	textoc,  	image_db,  	th_image_db";
$proto0["m_strFrom"] = "FROM cachorro";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "idc",
	"m_strTable" => "cachorro",
	"m_srcTableName" => "cachorro"
));

$proto6["m_sql"] = "idc";
$proto6["m_srcTableName"] = "cachorro";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nomec",
	"m_strTable" => "cachorro",
	"m_srcTableName" => "cachorro"
));

$proto8["m_sql"] = "nomec";
$proto8["m_srcTableName"] = "cachorro";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "racac",
	"m_strTable" => "cachorro",
	"m_srcTableName" => "cachorro"
));

$proto10["m_sql"] = "racac";
$proto10["m_srcTableName"] = "cachorro";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sexoc",
	"m_strTable" => "cachorro",
	"m_srcTableName" => "cachorro"
));

$proto12["m_sql"] = "sexoc";
$proto12["m_srcTableName"] = "cachorro";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idadec",
	"m_strTable" => "cachorro",
	"m_srcTableName" => "cachorro"
));

$proto14["m_sql"] = "idadec";
$proto14["m_srcTableName"] = "cachorro";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "corc",
	"m_strTable" => "cachorro",
	"m_srcTableName" => "cachorro"
));

$proto16["m_sql"] = "corc";
$proto16["m_srcTableName"] = "cachorro";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "textoc",
	"m_strTable" => "cachorro",
	"m_srcTableName" => "cachorro"
));

$proto18["m_sql"] = "textoc";
$proto18["m_srcTableName"] = "cachorro";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "image_db",
	"m_strTable" => "cachorro",
	"m_srcTableName" => "cachorro"
));

$proto20["m_sql"] = "image_db";
$proto20["m_srcTableName"] = "cachorro";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "th_image_db",
	"m_strTable" => "cachorro",
	"m_srcTableName" => "cachorro"
));

$proto22["m_sql"] = "th_image_db";
$proto22["m_srcTableName"] = "cachorro";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cachorro";
$proto25["m_srcTableName"] = "cachorro";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idc";
$proto25["m_columns"][] = "nomec";
$proto25["m_columns"][] = "racac";
$proto25["m_columns"][] = "sexoc";
$proto25["m_columns"][] = "idadec";
$proto25["m_columns"][] = "corc";
$proto25["m_columns"][] = "textoc";
$proto25["m_columns"][] = "image_db";
$proto25["m_columns"][] = "th_image_db";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cachorro";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cachorro";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cachorro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cachorro = createSqlQuery_cachorro();


	
		;

									

$tdatacachorro[".sqlquery"] = $queryData_cachorro;



$tdatacachorro[".hasEvents"] = false;

?>