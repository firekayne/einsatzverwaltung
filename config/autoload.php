<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Projects
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Contao\ModuleMissionsList' => 'system/modules/einsatzverwaltung/modules/ModuleMissionsList.php',
    'Contao\ModuleMissionsLatest' => 'system/modules/einsatzverwaltung/modules/ModuleMissionsLatest.php',
	'Contao\ModuleMissionsReader' => 'system/modules/einsatzverwaltung/modules/ModuleMissionsReader.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_missions_list' => 'system/modules/einsatzverwaltung/templates',
    'mod_missions_latest' => 'system/modules/einsatzverwaltung/templates',
	'mod_missions_reader' => 'system/modules/einsatzverwaltung/templates'
));
