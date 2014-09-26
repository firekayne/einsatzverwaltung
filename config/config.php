<?php

/**
 * Back end modules
 */
/*$GLOBALS['BE_MOD']['content']['projects'] = array(
	'tables' => array('tl_projects'),
	'icon'   => 'system/modules/projects/assets/images/projects.png'
);*/

array_insert($GLOBALS['BE_MOD'], 1, array(
	'feuerwehr' => array(
		'missions' => array( 
			'tables' => array('tl_missions'),
			'icon'   => 'system/modules/einsatzverwaltung/assets/images/icon-einsatzverwaltung.png'
		)
	)
));

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['missions'] = array
(
	'missions_list'     => 'ModuleMissionsList',
    'missions_latest'     => 'ModuleMissionsLatest',
	'missions_reader'     => 'ModuleMissionsReader'
);