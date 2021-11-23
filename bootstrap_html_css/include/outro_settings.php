<?php
$tdataoutro = array();
$tdataoutro[".searchableFields"] = array();
$tdataoutro[".ShortName"] = "outro";
$tdataoutro[".OwnerID"] = "";
$tdataoutro[".OriginalTable"] = "outro";


$tdataoutro[".pagesByType"] = my_json_decode( "{\"list\":[\"Lista\"],\"view\":[\"Detalhes\"]}" );
$tdataoutro[".originalPagesByType"] = $tdataoutro[".pagesByType"];
$tdataoutro[".pages"] = types2pages( my_json_decode( "{\"list\":[\"Lista\"],\"view\":[\"Detalhes\"]}" ) );
$tdataoutro[".originalPages"] = $tdataoutro[".pages"];
$tdataoutro[".defaultPages"] = my_json_decode( "{\"list\":\"Lista\",\"view\":\"Detalhes\"}" );
$tdataoutro[".originalDefaultPages"] = $tdataoutro[".defaultPages"];

//	field labels
$fieldLabelsoutro = array();
$fieldToolTipsoutro = array();
$pageTitlesoutro = array();
$placeHoldersoutro = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsoutro["Portuguese(Brazil)"] = array();
	$fieldToolTipsoutro["Portuguese(Brazil)"] = array();
	$placeHoldersoutro["Portuguese(Brazil)"] = array();
	$pageTitlesoutro["Portuguese(Brazil)"] = array();
	$fieldLabelsoutro["Portuguese(Brazil)"]["ido"] = "Ido";
	$fieldToolTipsoutro["Portuguese(Brazil)"]["ido"] = "";
	$placeHoldersoutro["Portuguese(Brazil)"]["ido"] = "";
	$fieldLabelsoutro["Portuguese(Brazil)"]["nomeo"] = "Nome:";
	$fieldToolTipsoutro["Portuguese(Brazil)"]["nomeo"] = "";
	$placeHoldersoutro["Portuguese(Brazil)"]["nomeo"] = "";
	$fieldLabelsoutro["Portuguese(Brazil)"]["racao"] = "Raça:";
	$fieldToolTipsoutro["Portuguese(Brazil)"]["racao"] = "";
	$placeHoldersoutro["Portuguese(Brazil)"]["racao"] = "";
	$fieldLabelsoutro["Portuguese(Brazil)"]["sexoo"] = "Sexo:";
	$fieldToolTipsoutro["Portuguese(Brazil)"]["sexoo"] = "";
	$placeHoldersoutro["Portuguese(Brazil)"]["sexoo"] = "";
	$fieldLabelsoutro["Portuguese(Brazil)"]["idadeo"] = "Idade:";
	$fieldToolTipsoutro["Portuguese(Brazil)"]["idadeo"] = "";
	$placeHoldersoutro["Portuguese(Brazil)"]["idadeo"] = "";
	$fieldLabelsoutro["Portuguese(Brazil)"]["coro"] = "Cor:";
	$fieldToolTipsoutro["Portuguese(Brazil)"]["coro"] = "";
	$placeHoldersoutro["Portuguese(Brazil)"]["coro"] = "";
	$fieldLabelsoutro["Portuguese(Brazil)"]["textoo"] = "Descrição:";
	$fieldToolTipsoutro["Portuguese(Brazil)"]["textoo"] = "";
	$placeHoldersoutro["Portuguese(Brazil)"]["textoo"] = "";
	$fieldLabelsoutro["Portuguese(Brazil)"]["image_db"] = "";
	$fieldToolTipsoutro["Portuguese(Brazil)"]["image_db"] = "";
	$placeHoldersoutro["Portuguese(Brazil)"]["image_db"] = "";
	$fieldLabelsoutro["Portuguese(Brazil)"]["th_image_db"] = "Th Image Db";
	$fieldToolTipsoutro["Portuguese(Brazil)"]["th_image_db"] = "";
	$placeHoldersoutro["Portuguese(Brazil)"]["th_image_db"] = "";
	$pageTitlesoutro["Portuguese(Brazil)"]["Detalhes"] = "{%nomeo}";
	if (count($fieldToolTipsoutro["Portuguese(Brazil)"]))
		$tdataoutro[".isUseToolTips"] = true;
}


	$tdataoutro[".NCSearch"] = true;



$tdataoutro[".shortTableName"] = "outro";
$tdataoutro[".nSecOptions"] = 0;

$tdataoutro[".mainTableOwnerID"] = "";
$tdataoutro[".entityType"] = 0;
$tdataoutro[".connId"] = "3984500_adota_at_fdb34.awardspace.net";


$tdataoutro[".strOriginalTableName"] = "outro";

	



$tdataoutro[".showAddInPopup"] = false;

$tdataoutro[".showEditInPopup"] = false;

$tdataoutro[".showViewInPopup"] = false;

$tdataoutro[".listAjax"] = false;
//	temporary
//$tdataoutro[".listAjax"] = false;

	$tdataoutro[".audit"] = false;

	$tdataoutro[".locking"] = false;


$pages = $tdataoutro[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoutro[".edit"] = true;
	$tdataoutro[".afterEditAction"] = 1;
	$tdataoutro[".closePopupAfterEdit"] = 1;
	$tdataoutro[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoutro[".add"] = true;
$tdataoutro[".afterAddAction"] = 1;
$tdataoutro[".closePopupAfterAdd"] = 1;
$tdataoutro[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoutro[".list"] = true;
}



$tdataoutro[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoutro[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoutro[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoutro[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoutro[".printFriendly"] = true;
}



$tdataoutro[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoutro[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoutro[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoutro[".isUseAjaxSuggest"] = false;

$tdataoutro[".rowHighlite"] = true;





$tdataoutro[".ajaxCodeSnippetAdded"] = false;

$tdataoutro[".buttonsAdded"] = false;

$tdataoutro[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoutro[".isUseTimeForSearch"] = false;


$tdataoutro[".badgeColor"] = "CD5C5C";


$tdataoutro[".allSearchFields"] = array();
$tdataoutro[".filterFields"] = array();
$tdataoutro[".requiredSearchFields"] = array();




$tdataoutro[".tableType"] = "list";

$tdataoutro[".printerPageOrientation"] = 0;
$tdataoutro[".nPrinterPageScale"] = 100;

$tdataoutro[".nPrinterSplitRecords"] = 40;

$tdataoutro[".geocodingEnabled"] = false;










$tdataoutro[".pageSize"] = 20;


$tdataoutro[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
$tdataoutro[".strOrderBy"] = $tstrOrderBy;

$tdataoutro[".orderindexes"] = array();


$tdataoutro[".sqlHead"] = "SELECT ido,  	nomeo,  	racao,  	sexoo,  	idadeo,  	coro,  	textoo,  	image_db,  	th_image_db";
$tdataoutro[".sqlFrom"] = "FROM outro";
$tdataoutro[".sqlWhereExpr"] = "";
$tdataoutro[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoutro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoutro[".arrGroupsPerPage"] = $arrGPP;


$tableKeysoutro = array();
$tableKeysoutro[] = "ido";
$tdataoutro[".Keys"] = $tableKeysoutro;


$tdataoutro[".hideMobileList"] = array();




//	ido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ido";
	$fdata["GoodName"] = "ido";
	$fdata["ownerTable"] = "outro";
	$fdata["Label"] = GetFieldLabel("outro","ido");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ido";

		$fdata["sourceSingle"] = "ido";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ido";

	
	
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


	$tdataoutro["ido"] = $fdata;
		$tdataoutro[".searchableFields"][] = "ido";
//	nomeo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nomeo";
	$fdata["GoodName"] = "nomeo";
	$fdata["ownerTable"] = "outro";
	$fdata["Label"] = GetFieldLabel("outro","nomeo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nomeo";

		$fdata["sourceSingle"] = "nomeo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomeo";

	
	
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


	$tdataoutro["nomeo"] = $fdata;
		$tdataoutro[".searchableFields"][] = "nomeo";
//	racao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "racao";
	$fdata["GoodName"] = "racao";
	$fdata["ownerTable"] = "outro";
	$fdata["Label"] = GetFieldLabel("outro","racao");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "racao";

		$fdata["sourceSingle"] = "racao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "racao";

	
	
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


	$tdataoutro["racao"] = $fdata;
		$tdataoutro[".searchableFields"][] = "racao";
//	sexoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sexoo";
	$fdata["GoodName"] = "sexoo";
	$fdata["ownerTable"] = "outro";
	$fdata["Label"] = GetFieldLabel("outro","sexoo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sexoo";

		$fdata["sourceSingle"] = "sexoo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexoo";

	
	
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


	$tdataoutro["sexoo"] = $fdata;
		$tdataoutro[".searchableFields"][] = "sexoo";
//	idadeo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idadeo";
	$fdata["GoodName"] = "idadeo";
	$fdata["ownerTable"] = "outro";
	$fdata["Label"] = GetFieldLabel("outro","idadeo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idadeo";

		$fdata["sourceSingle"] = "idadeo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idadeo";

	
	
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


	$tdataoutro["idadeo"] = $fdata;
		$tdataoutro[".searchableFields"][] = "idadeo";
//	coro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "coro";
	$fdata["GoodName"] = "coro";
	$fdata["ownerTable"] = "outro";
	$fdata["Label"] = GetFieldLabel("outro","coro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "coro";

		$fdata["sourceSingle"] = "coro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coro";

	
	
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


	$tdataoutro["coro"] = $fdata;
		$tdataoutro[".searchableFields"][] = "coro";
//	textoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "textoo";
	$fdata["GoodName"] = "textoo";
	$fdata["ownerTable"] = "outro";
	$fdata["Label"] = GetFieldLabel("outro","textoo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "textoo";

		$fdata["sourceSingle"] = "textoo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "textoo";

	
	
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


	$tdataoutro["textoo"] = $fdata;
		$tdataoutro[".searchableFields"][] = "textoo";
//	image_db
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "image_db";
	$fdata["GoodName"] = "image_db";
	$fdata["ownerTable"] = "outro";
	$fdata["Label"] = GetFieldLabel("outro","image_db");
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th_image_db";
			$edata["ThumbnailSize"] = 600;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 720;

	
	
	
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


	$tdataoutro["image_db"] = $fdata;
	//	th_image_db
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "th_image_db";
	$fdata["GoodName"] = "th_image_db";
	$fdata["ownerTable"] = "outro";
	$fdata["Label"] = GetFieldLabel("outro","th_image_db");
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


	$tdataoutro["th_image_db"] = $fdata;
	

$tables_data["outro"]=&$tdataoutro;
$field_labels["outro"] = &$fieldLabelsoutro;
$fieldToolTips["outro"] = &$fieldToolTipsoutro;
$placeHolders["outro"] = &$placeHoldersoutro;
$page_titles["outro"] = &$pageTitlesoutro;


changeTextControlsToDate( "outro" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["outro"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["outro"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_outro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ido,  	nomeo,  	racao,  	sexoo,  	idadeo,  	coro,  	textoo,  	image_db,  	th_image_db";
$proto0["m_strFrom"] = "FROM outro";
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
	"m_strName" => "ido",
	"m_strTable" => "outro",
	"m_srcTableName" => "outro"
));

$proto6["m_sql"] = "ido";
$proto6["m_srcTableName"] = "outro";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nomeo",
	"m_strTable" => "outro",
	"m_srcTableName" => "outro"
));

$proto8["m_sql"] = "nomeo";
$proto8["m_srcTableName"] = "outro";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "racao",
	"m_strTable" => "outro",
	"m_srcTableName" => "outro"
));

$proto10["m_sql"] = "racao";
$proto10["m_srcTableName"] = "outro";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sexoo",
	"m_strTable" => "outro",
	"m_srcTableName" => "outro"
));

$proto12["m_sql"] = "sexoo";
$proto12["m_srcTableName"] = "outro";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idadeo",
	"m_strTable" => "outro",
	"m_srcTableName" => "outro"
));

$proto14["m_sql"] = "idadeo";
$proto14["m_srcTableName"] = "outro";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "coro",
	"m_strTable" => "outro",
	"m_srcTableName" => "outro"
));

$proto16["m_sql"] = "coro";
$proto16["m_srcTableName"] = "outro";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "textoo",
	"m_strTable" => "outro",
	"m_srcTableName" => "outro"
));

$proto18["m_sql"] = "textoo";
$proto18["m_srcTableName"] = "outro";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "image_db",
	"m_strTable" => "outro",
	"m_srcTableName" => "outro"
));

$proto20["m_sql"] = "image_db";
$proto20["m_srcTableName"] = "outro";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "th_image_db",
	"m_strTable" => "outro",
	"m_srcTableName" => "outro"
));

$proto22["m_sql"] = "th_image_db";
$proto22["m_srcTableName"] = "outro";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "outro";
$proto25["m_srcTableName"] = "outro";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "ido";
$proto25["m_columns"][] = "nomeo";
$proto25["m_columns"][] = "racao";
$proto25["m_columns"][] = "sexoo";
$proto25["m_columns"][] = "idadeo";
$proto25["m_columns"][] = "coro";
$proto25["m_columns"][] = "textoo";
$proto25["m_columns"][] = "image_db";
$proto25["m_columns"][] = "th_image_db";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "outro";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "outro";
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
$proto0["m_srcTableName"]="outro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_outro = createSqlQuery_outro();


	
		;

									

$tdataoutro[".sqlquery"] = $queryData_outro;



$tdataoutro[".hasEvents"] = false;

?>