<?php
			$optionsArray = array( 'welcome' => array( 'welcomePageSkip' => false,
'welcomeItems' => array( 'text' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'cachorro',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'gato',
'page' => 'list' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'outro',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'supertop' => array( 'text',
'menu',
'loginform_login',
'username_button' ),
'grid' => array( 'welcome_item',
'welcome_item1',
'welcome_item2' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'text' => 'supertop',
'menu' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'welcome_item' => 'grid',
'welcome_item1' => 'grid',
'welcome_item2' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'username_button' => 3,
'loginform_login' => 3 ) ),
'itemsByType' => array( 'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1',
'welcome_item2' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'text' => array( 'text' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'text',
'menu' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item',
'welcome_item1',
'welcome_item2' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'menu' => array( 'type' => 'menu',
'menuId' => 'main' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'cachorro',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Cachorros' ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'type' => 0,
'text' => 'Exibir lista de animais' ),
'background' => '#778899',
'linkType' => 0 ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'gato',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Gatos' ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'type' => 0,
'text' => 'Exibir lista de animais' ),
'background' => '#E07878',
'linkType' => 0 ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'outro',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Outros Animais' ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'type' => 0,
'text' => 'Exibir lista de animais' ),
'background' => '#8FBC8B',
'linkType' => 0 ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => '<h2><strong>Adota Pet Web<span class="ql-cursor">???</span></strong></h2>',
'type' => 0 ),
'editedByRte' => true ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'welcomePageStay' => true );
		?>