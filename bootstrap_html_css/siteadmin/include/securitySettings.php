<?php
$securitySettings_var = array( 'providers' => array( array( 'type' => '%db',
'active' => true,
'code' => '00',
'emailField' => 'email',
'extUserIdField' => 'ext_security_id',
'fullnameField' => 'fullname',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'password',
'table' => array( 'connId' => '3984500_adota_at_fdb34.awardspace.net',
'table' => 'usuarios' ),
'usernameField' => 'username',
'userpicField' => '' ) ),
'sessionControl' => array( 'lifeTime' => 15,
'sessionName' => 'yYcNQpjuBSpxspRr5FAC',
'JWTSecret' => 'JB8BAvEpfGb4AYwlXPCJ' ),
'registration' => array( 'passwordValidation' => array( 'strong' => false,
'minimumLength' => 8,
'uniqueCharacters' => 4,
'digitsAndSymbols' => 2,
'upperAndLowerCase' => false ),
'remindMethod' => 0,
'hashAlgorithm' => 0,
'registerPage' => false ),
'captchaSettings' => array( 'captchaType' => 0,
'siteKey' => '',
'secretKey' => '',
'passesCount' => 5 ),
'emailSettings' => array( 'fromEmail' => '',
'usePHPDefinedSMTP' => false,
'useBuiltInMailer' => false,
'SMTPServer' => 'fdb34.awardspace.net',
'SMTPPort' => 25,
'SMTPUser' => '',
'SMTPPassword' => '',
'securityProtocol' => 0 ),
'advancedSecurity' => array( 'allowGuestLogin' => false ),
'auditAndLocking' => array( 'loggingTable' => array(  ),
'lockingTable' => array(  ),
'tables' => array(  ),
'loggingMode' => 0,
'loggingFile' => 'audit.log',
'logSecurityActions' => false,
'lockAfterUnsuccessfulLogin' => false,
'enableLocking' => false ),
'twoFactorSettings' => array( 'available' => false,
'required' => false,
'enable' => true,
'remember' => true,
'types' => array(  ),
'twoFactorField' => '',
'emailField' => '',
'phoneField' => '',
'codeField' => '',
'projectName' => '' ),
'projectName' => 'siteadmin',
'loginDataSource' => 'usuarios',
'loginForm' => 0,
'dynamicPermissions' => false,
'dpTablePrefix' => '',
'dpTableConnId' => '',
'hardcodedLogin' => false,
'enabled' => true,
'advancedSecurityAvailable' => true,
'userGroupsAvailable' => true,
'defaultProviderCode' => '00',
'adOnlyLogin' => false,
'dbProvider' => array( 'type' => '%db',
'active' => true,
'code' => '00',
'emailField' => 'email',
'extUserIdField' => 'ext_security_id',
'fullnameField' => 'fullname',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'password',
'table' => array( 'connId' => '3984500_adota_at_fdb34.awardspace.net',
'table' => 'usuarios' ),
'usernameField' => 'username',
'userpicField' => '' ),
'adAdminGroups' => array(  ),
'showUserSource' => false,
'dbProviderCodes' => array( '00' ) );
?>