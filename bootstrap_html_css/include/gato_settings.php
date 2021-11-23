<?php
$tdatagato = array();
$tdatagato[".searchableFields"] = array();
$tdatagato[".ShortName"] = "gato";
$tdatagato[".OwnerID"] = "";
$tdatagato[".OriginalTable"] = "gato";


$tdatagato[".pagesByType"] = my_json_decode( "{\"list\":[\"Lista\"],\"view\":[\"Detalhes\"]}" );
$tdatagato[".originalPagesByType"] = $tdatagato[".pagesByType"];
$tdatagato[".pages"] = types2pages( my_json_decode( "{\"list\":[\"Lista\"],\"view\":[\"Detalhes\"]}" ) );
$tdatagato[".originalPages"] = $tdatagato[".pages"];
$tdatagato[".defaultPages"] = my_json_decode( "{\"list\":\"Lista\",\"view\":\"Detalhes\"}" );
$tdatagato[".originalDefaultPages"] = $tdatagato[".defaultPages"];

//	field labels
$fieldLabelsgato = array();
$fieldToolTipsgato = array();
$pageTitlesgato = array();
$placeHoldersgato = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsgato["Portuguese(Brazil)"] = array();
	$fieldToolTipsgato["Portuguese(Brazil)"] = array();
	$placeHoldersgato["Portuguese(Brazil)"] = array();
	$pageTitlesgato["Portuguese(Brazil)"] = array();
	$fieldLabelsgato["Portuguese(Brazil)"]["idg"] = "Idg";
	$fieldToolTipsgato["Portuguese(Brazil)"]["idg"] = "";
	$placeHoldersgato["Portuguese(Brazil)"]["idg"] = "";
	$fieldLabelsgato["Portuguese(Brazil)"]["nomeg"] = "Nome:";
	$fieldToolTipsgato["Portuguese(Brazil)"]["nomeg"] = "";
	$placeHoldersgato["Portuguese(Brazil)"]["nomeg"] = "";
	$fieldLabelsgato["Portuguese(Brazil)"]["racag"] = "Raça:";
	$fieldToolTipsgato["Portuguese(Brazil)"]["racag"] = "";
	$placeHoldersgato["Portuguese(Brazil)"]["racag"] = "";
	$fieldLabelsgato["Portuguese(Brazil)"]["sexog"] = "Sexo:";
	$fieldToolTipsgato["Portuguese(Brazil)"]["sexog"] = "";
	$placeHoldersgato["Portuguese(Brazil)"]["sexog"] = "";
	$fieldLabelsgato["Portuguese(Brazil)"]["idadeg"] = "Idade:";
	$fieldToolTipsgato["Portuguese(Brazil)"]["idadeg"] = "";
	$placeHoldersgato["Portuguese(Brazil)"]["idadeg"] = "";
	$fieldLabelsgato["Portuguese(Brazil)"]["corg"] = "Cor:";
	$fieldToolTipsgato["Portuguese(Brazil)"]["corg"] = "";
	$placeHoldersgato["Portuguese(Brazil)"]["corg"] = "";
	$fieldLabelsgato["Portuguese(Brazil)"]["textog"] = "Descrição:";
	$fieldToolTipsgato["Portuguese(Brazil)"]["textog"] = "";
	$placeHoldersgato["Portuguese(Brazil)"]["textog"] = "";
	$fieldLabelsgato["Portuguese(Brazil)"]["image_db"] = "";
	$fieldToolTipsgato["Portuguese(Brazil)"]["image_db"] = "";
	$placeHoldersgato["Portuguese(Brazil)"]["image_db"] = "";
	$fieldLabelsgato["Portuguese(Brazil)"]["th_image_db"] = "Th Image Db";
	$fieldToolTipsgato["Portuguese(Brazil)"]["th_image_db"] = "";
	$placeHoldersgato["Portuguese(Brazil)"]["th_image_db"] = "";
	$pageTitlesgato["Portuguese(Brazil)"]["Detalhes"] = "{%nomeg}";
	if (count($fieldToolTipsgato["Portuguese(Brazil)"]))
		$tdatagato[".isUseToolTips"] = true;
}


	$tdatagato[".NCSearch"] = true;



$tdatagato[".shortTableName"] = "gato";
$tdatagato[".nSecOptions"] = 0;

$tdatagato[".mainTableOwnerID"] = "";
$tdatagato[".entityType"] = 0;
$tdatagato[".connId"] = "3984500_adota_at_fdb34.awardspace.net";


$tdatagato[".strOriginalTableName"] = "gato";

	



$tdatagato[".showAddInPopup"] = false;

$tdatagato[".showEditInPopup"] = false;

$tdatagato[".showViewInPopup"] = false;

$tdatagato[".listAjax"] = false;
//	temporary
//$tdatagato[".listAjax"] = false;

	$tdatagato[".audit"] = false;

	$tdatagato[".locking"] = false;


$pages = $tdatagato[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagato[".edit"] = true;
	$tdatagato[".afterEditAction"] = 1;
	$tdatagato[".closePopupAfterEdit"] = 1;
	$tdatagato[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagato[".add"] = true;
$tdatagato[".afterAddAction"] = 1;
$tdatagato[".closePopupAfterAdd"] = 1;
$tdatagato[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagato[".list"] = true;
}



$tdatagato[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagato[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagato[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagato[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagato[".printFriendly"] = true;
}



$tdatagato[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagato[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagato[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagato[".isUseAjaxSuggest"] = false;

$tdatagato[".rowHighlite"] = true;





$tdatagato[".ajaxCodeSnippetAdded"] = false;

$tdatagato[".buttonsAdded"] = false;

$tdatagato[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagato[".isUseTimeForSearch"] = false;


$tdatagato[".badgeColor"] = "00C2C5";


$tdatagato[".allSearchFields"] = array();
$tdatagato[".filterFields"] = array();
$tdatagato[".requiredSearchFields"] = array();




$tdatagato[".tableType"] = "list";

$tdatagato[".printerPageOrientation"] = 0;
$tdatagato[".nPrinterPageScale"] = 100;

$tdatagato[".nPrinterSplitRecords"] = 40;

$tdatagato[".geocodingEnabled"] = false;










$tdatagato[".pageSize"] = 20;


$tdatagato[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
$tdatagato[".strOrderBy"] = $tstrOrderBy;

$tdatagato[".orderindexes"] = array();


$tdatagato[".sqlHead"] = "SELECT idg,  	nomeg,  	racag,  	sexog,  	idadeg,  	corg,  	textog,  	image_db,  	th_image_db";
$tdatagato[".sqlFrom"] = "FROM gato";
$tdatagato[".sqlWhereExpr"] = "";
$tdatagato[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagato[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagato[".arrGroupsPerPage"] = $arrGPP;


$tableKeysgato = array();
$tableKeysgato[] = "idg";
$tdatagato[".Keys"] = $tableKeysgato;


$tdatagato[".hideMobileList"] = array();




//	idg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idg";
	$fdata["GoodName"] = "idg";
	$fdata["ownerTable"] = "gato";
	$fdata["Label"] = GetFieldLabel("gato","idg");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idg";

		$fdata["sourceSingle"] = "idg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idg";

	
	
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


	$tdatagato["idg"] = $fdata;
		$tdatagato[".searchableFields"][] = "idg";
//	nomeg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nomeg";
	$fdata["GoodName"] = "nomeg";
	$fdata["ownerTable"] = "gato";
	$fdata["Label"] = GetFieldLabel("gato","nomeg");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nomeg";

		$fdata["sourceSingle"] = "nomeg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomeg";

	
	
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


	$tdatagato["nomeg"] = $fdata;
		$tdatagato[".searchableFields"][] = "nomeg";
//	racag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "racag";
	$fdata["GoodName"] = "racag";
	$fdata["ownerTable"] = "gato";
	$fdata["Label"] = GetFieldLabel("gato","racag");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "racag";

		$fdata["sourceSingle"] = "racag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "racag";

	
	
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


	$tdatagato["racag"] = $fdata;
		$tdatagato[".searchableFields"][] = "racag";
//	sexog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sexog";
	$fdata["GoodName"] = "sexog";
	$fdata["ownerTable"] = "gato";
	$fdata["Label"] = GetFieldLabel("gato","sexog");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sexog";

		$fdata["sourceSingle"] = "sexog";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexog";

	
	
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


	$tdatagato["sexog"] = $fdata;
		$tdatagato[".searchableFields"][] = "sexog";
//	idadeg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idadeg";
	$fdata["GoodName"] = "idadeg";
	$fdata["ownerTable"] = "gato";
	$fdata["Label"] = GetFieldLabel("gato","idadeg");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idadeg";

		$fdata["sourceSingle"] = "idadeg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idadeg";

	
	
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


	$tdatagato["idadeg"] = $fdata;
		$tdatagato[".searchableFields"][] = "idadeg";
//	corg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "corg";
	$fdata["GoodName"] = "corg";
	$fdata["ownerTable"] = "gato";
	$fdata["Label"] = GetFieldLabel("gato","corg");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "corg";

		$fdata["sourceSingle"] = "corg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "corg";

	
	
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


	$tdatagato["corg"] = $fdata;
		$tdatagato[".searchableFields"][] = "corg";
//	textog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "textog";
	$fdata["GoodName"] = "textog";
	$fdata["ownerTable"] = "gato";
	$fdata["Label"] = GetFieldLabel("gato","textog");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "textog";

		$fdata["sourceSingle"] = "textog";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "textog";

	
	
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


	$tdatagato["textog"] = $fdata;
		$tdatagato[".searchableFields"][] = "textog";
//	image_db
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "image_db";
	$fdata["GoodName"] = "image_db";
	$fdata["ownerTable"] = "gato";
	$fdata["Label"] = GetFieldLabel("gato","image_db");
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


	$tdatagato["image_db"] = $fdata;
	//	th_image_db
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "th_image_db";
	$fdata["GoodName"] = "th_image_db";
	$fdata["ownerTable"] = "gato";
	$fdata["Label"] = GetFieldLabel("gato","th_image_db");
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


	$tdatagato["th_image_db"] = $fdata;
	

$tables_data["gato"]=&$tdatagato;
$field_labels["gato"] = &$fieldLabelsgato;
$fieldToolTips["gato"] = &$fieldToolTipsgato;
$placeHolders["gato"] = &$placeHoldersgato;
$page_titles["gato"] = &$pageTitlesgato;


changeTextControlsToDate( "gato" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["gato"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["gato"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gato()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idg,  	nomeg,  	racag,  	sexog,  	idadeg,  	corg,  	textog,  	image_db,  	th_image_db";
$proto0["m_strFrom"] = "FROM gato";
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
	"m_strName" => "idg",
	"m_strTable" => "gato",
	"m_srcTableName" => "gato"
));

$proto6["m_sql"] = "idg";
$proto6["m_srcTableName"] = "gato";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nomeg",
	"m_strTable" => "gato",
	"m_srcTableName" => "gato"
));

$proto8["m_sql"] = "nomeg";
$proto8["m_srcTableName"] = "gato";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "racag",
	"m_strTable" => "gato",
	"m_srcTableName" => "gato"
));

$proto10["m_sql"] = "racag";
$proto10["m_srcTableName"] = "gato";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sexog",
	"m_strTable" => "gato",
	"m_srcTableName" => "gato"
));

$proto12["m_sql"] = "sexog";
$proto12["m_srcTableName"] = "gato";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idadeg",
	"m_strTable" => "gato",
	"m_srcTableName" => "gato"
));

$proto14["m_sql"] = "idadeg";
$proto14["m_srcTableName"] = "gato";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "corg",
	"m_strTable" => "gato",
	"m_srcTableName" => "gato"
));

$proto16["m_sql"] = "corg";
$proto16["m_srcTableName"] = "gato";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "textog",
	"m_strTable" => "gato",
	"m_srcTableName" => "gato"
));

$proto18["m_sql"] = "textog";
$proto18["m_srcTableName"] = "gato";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "image_db",
	"m_strTable" => "gato",
	"m_srcTableName" => "gato"
));

$proto20["m_sql"] = "image_db";
$proto20["m_srcTableName"] = "gato";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "th_image_db",
	"m_strTable" => "gato",
	"m_srcTableName" => "gato"
));

$proto22["m_sql"] = "th_image_db";
$proto22["m_srcTableName"] = "gato";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "gato";
$proto25["m_srcTableName"] = "gato";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idg";
$proto25["m_columns"][] = "nomeg";
$proto25["m_columns"][] = "racag";
$proto25["m_columns"][] = "sexog";
$proto25["m_columns"][] = "idadeg";
$proto25["m_columns"][] = "corg";
$proto25["m_columns"][] = "textog";
$proto25["m_columns"][] = "image_db";
$proto25["m_columns"][] = "th_image_db";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "gato";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "gato";
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
$proto0["m_srcTableName"]="gato";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gato = createSqlQuery_gato();


	
		;

									

$tdatagato[".sqlquery"] = $queryData_gato;



$tdatagato[".hasEvents"] = false;

?>