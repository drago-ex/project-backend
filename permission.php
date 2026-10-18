<?php

declare(strict_types=1);

/**
 * Basic access rules of this package for drago-ex/permission.
 * Generated into the project by: php vendor/bin/create-permission --packages
 */
return [
	// Registers the administration; administrators are allowed everything.
	[
		'className' => 'PermissionProvider',
		'namespace' => 'App\Presentation\Backend\Admin',
		'resource' => 'Backend:Admin',
		'outputDir' => 'app/Presentation/Backend/Admin',
		'allow' => ['RoleAdmin'],
	],
];
