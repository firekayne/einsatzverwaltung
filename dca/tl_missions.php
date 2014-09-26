<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Table tl_missions
 */
$GLOBALS['TL_DCA']['tl_missions'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		),
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('year','lfdnr'),
			'flag'                    => 12,
			'panelLayout'             => 'sort,search,limit'
		),
		'label' => array
		(
			'fields'                  => array('lfdnr','year','alarm_date','alarm_time', 'category', 'street', 'city'),
			'format'                  => '[%s/%s] %s, %s Uhr / %s / %s - %s'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_missions']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_missions']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_missions']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif',
				'attributes'          => 'style="margin-right:3px"'
			)
		)
	),

	// Palettes
	/*'palettes' => array
	(
		'default'                     => '{data_legend},lfdnr,alarm_date,alarm_time,category,keyword,street,city;
										  {report_legend},report,gallery;
										  {vehicle_legend},desc_client;'
	),*/
	
	'palettes' => array
	(
		'__selector__'  => array('category'),
		'default'       => '{data_legend},lfdnr,year,alarm_date,alarm_time,category,street,city;
							{report_legend},report,gallery;
							{legend_veh_fw_schorndorf_1},fw_schorndorf_1_10,fw_schorndorf_1_11,fw_schorndorf_1_19,fw_schorndorf_1_33,fw_schorndorf_1_44_1,fw_schorndorf_1_44_2,fw_schorndorf_1_50,,fw_schorndorf_1_52,fw_schorndorf_1_74,fw_schorndorf_1_rtb;
							{legend_veh_fw_schorndorf_2:hide},fw_schorndorf_2_48,fw_schorndorf_2_TSA,fw_schorndorf_2_SA;
							{legend_veh_fw_schorndorf_3:hide},fw_schorndorf_3_42,fw_schorndorf_3_19,fw_schorndorf_3_TSA;
							{legend_veh_fw_schorndorf_4:hide},fw_schorndorf_4_19,fw_schorndorf_4_42;
							{legend_veh_fw_schorndorf_5:hide},fw_schorndorf_5_42,fw_schorndorf_5_47;
							{legend_veh_fw_schorndorf_6:hide},fw_schorndorf_6_42,fw_schorndorf_6_TSA;
							{legend_veh_fw_schorndorf_7:hide},fw_schorndorf_7_42,fw_schorndorf_7_48,fw_schorndorf_7_TSA,fw_schorndorf_7_SA;
							{legend_veh_fw_schorndorf_8:hide},fw_schorndorf_8_19,fw_schorndorf_8_44,fw_schorndorf_8_TSA,fw_schorndorf_8_SA;
							{legend_veh_pol:hide},pol_stw,pol_kripo,pol_hub,pol_sek;
							{legend_veh_rd:hide},rd_rtw,rd_nef,rd_rth,rd_drk,rd_orgl,rd_lna;
							{legend_veh_sonst:hide},sonst_kbm,sonst_wf,sonst_zds,sonst_energie,sonst_dlrg;
							{legend_veh_fw_pluederhausen:hide},fw_pluederhausen_1_19,fw_pluederhausen_1_23,fw_pluederhausen_1_42,fw_pluederhausen_1_44,fw_pluederhausen_1_72,fw_pluederhausen_2_48,fw_pluederhausen_SA;
							{legend_veh_fw_remshalden:hide},fw_remshalden_1_11,fw_remshalden_1_19,fw_remshalden_1_42_1,fw_remshalden_1_42_2,fw_remshalden_1_44,fw_remshalden_1_51,fw_remshalden_1_74,fw_remshalden_2_42,fw_remshalden_3_22;
							{legend_veh_fw_rudersberg:hide},fw_rudersberg_1_11;
							{legend_veh_fw_winterbach:hide},fw_winterbach_1_11,fw_winterbach_1_42,fw_winterbach_1_44_1,fw_winterbach_1_44_2,fw_winterbach_1_45,fw_winterbach_1_48;',
	),
	
	// Subpalettes
	'subpalettes' => array
	(
		'category_cat_fire' => 'keyword_fire',
		'category_cat_tech' => 'keyword_tech',
		'category_cat_misc' => 'keyword'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		////////////////////////////////////////////////////////////////////////////////////////////////
		'lfdnr' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['lfdnr'],
			'inputType'               => 'text',
			'exclude'                 => true,
            'search'                  => true,
			'eval'                    => array('mandatory'=>true, 'minlength'=>3, 'maxlength'=>3, 'tl_class'=>'w50'),
			'sql'                     => "varchar(8) NOT NULL default ''"
		),
		'alarm_date' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['alarm_date'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'default'				  => date("d.m.Y"),
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'datepicker'=>true, 'tl_class'=>'clr w50 wizard'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'year' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['year'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'default'				  => date("Y"),
            'search'                  => true,
            'sorting'                 => true,
            'flag'                    => 12,
			'eval'                    => array('mandatory'=>true, 'maxlength'=>4, 'minlength'=>4, 'tl_class'=>'w50'),
			'sql'                     => "varchar(4) NOT NULL default ''"
		),
		'alarm_time' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['alarm_time'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'default'				  => date("H:i"),
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'category' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['category'],
			'inputType'               => 'select',
			'exclude'                 => true,
			'search'                  => true,
			'options'   			  => array('cat_fire', 'cat_tech', 'cat_bma', 'cat_misc'),
			'reference' 			  => &$GLOBALS['TL_LANG']['tl_missions'],
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'clr w50', 'includeBlankOption'=>true, 'submitOnChange'=>true),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'keyword_fire' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['keyword_fire'],
			'inputType'               => 'select',
			'exclude'                 => true,
			'options'   			  => array('B01 - Brandnachschau', 'B02 - Zimmerbrand', 'B03 - Wohnungs-/Gebäudebrand', 'B04 - Kellerbrand', 'B05 - Dachstuhlbrand', 'B06 - Schornsteinbrand', 'B07 - Flächenbrand', 'B08 - Waldbrand', 'B09 - Fahrzeugbrand', 'B10 - Fahrzeugbrand B29', 'B11 - Containerbrand', 'B12 - Verdächtiger Rauch', 'B13 - Schuppenbrand', 'B14 - Landw. Gebäude', 'B16 - Kleinstbrand'),
			'reference' 			  => &$GLOBALS['TL_LANG']['tl_missions'],
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'keyword_tech' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['keyword_tech'],
			'inputType'               => 'select',
			'exclude'                 => true,
			'options'   			  => array('H01 - Tür öffnen', 'H02 - Person in Fahrstuhl', 'H03 - Person will springen', 'H04 - Person eingeklemmt', 'H05 - Person in Wasser/Eis', 'H06 - Tier in Not', 'H07 - Ölspur', 'H08 - Öl/Benzin läuft aus', 'H09 - Gasalarm', 'H10 - Wassereinbruch', 'H11 - Baum-/Sturmschaden', 'H12 - Einsturz/Explosion', 'H13 - Tankwagen- Straße/Schiene', 'H14 - Gefahrstoffunfall', 'H15 - Gefahrstoffe klein', 'H16 - VU eingekl. Person', 'H17 - Insekten', 'H18 - Ausleuchten', 'H19 - Leiche bergen', 'H20 - Strahlenschutzeinsatz', 'H21 - DL zur Menschenrettung'),
			'reference' 			  => &$GLOBALS['TL_LANG']['tl_missions'],
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'keyword' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['keyword'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'street' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['street'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'clr w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'city' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['city'],
			'inputType'               => 'select',
			'exclude'                 => true,
			'options'   			  => array('Schorndorf',
											   'Schorndorf-Buhlbronn',
											   'Schorndorf-Haubersbronn',
											   'Schorndorf-Miedelsbach',
											   'Schorndorf-Oberberken', 
											   'Schorndorf-Schlichten',
											   'Schorndorf-Schornbach',
											   'Schorndorf-Weiler',
											   'Plüderhausen',
											   'Plüderhausen-Walkersbach',
											   'Remshalden-Bouch',
											   'Remshalden-Geradstetten',
											   'Remshalden-Grunbach',
											   'Remshalden-Hebsack',
											   'Remshalden-Rohrbronn',
											   'Rudersberg',
											   'Rudersberg-Asperglen',
											   'Rudersberg-Schlechtbach',
											   'Rudersberg-Steinenberg',
											   'Urbach',
											   'Welzheim', 
											   'Winterbach',
											   'Winterbach-Manolzweiler',
											   ),
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(100) NOT NULL default ''"
		),
		'report' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['report'],
			'inputType'               => 'textarea',
			'exclude'                 => true,
			'eval'                    => array('mandatory'=>true, 'rte'=>'tinyMCE', 'tl_class'=>''),
			'sql'                     => "text NULL"
		),
		'gallery' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['gallery'],
			'inputType'               => 'fileTree',
			'exclude'                 => true,
			'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'filesOnly'=>true, 'path'=>'files/fws/images/einsaetze/', 'extensions' => 'png,jpg,gif', 'tl_class'=>'m12'),
			'sql'                     => "blob NULL"
		),
		'vehicles' => array (
				'label' => &$GLOBALS ['TL_LANG'] ['tl_mission'] ['vehicles'],
				'exclude' => true,
				'inputType' => 'checkbox',
				'filter' => true,
				'foreignKey' => 'tl_missions_vehicles.CONCAT(radio," – ",title," – ",title_short)',
				'eval' => array (
						'mandatory' => true,
						'multiple' => true 
				),
				'sql' => "blob NULL",
				'relation' => array('type'=>'hasMany', 'load' => 'eagerly')
		),
		////////////////////////////////////////////////////////////////////////////////////////////////
		'pol_stw' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['pol_stw'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'pol_kripo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['pol_kripo'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'pol_hub' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['pol_hub'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'pol_sek' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['pol_sek'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		////////////////////////////////////////////////////////////////////////////////////////////////
		'rd_rtw' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['rd_rtw'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'rd_nef' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['rd_nef'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'rd_rth' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['rd_rth'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'rd_orgl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['rd_orgl'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'rd_lna' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['rd_lna'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'rd_drk' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['rd_drk'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		////////////////////////////////////////////////////////////////////////////////////////////////
		'sonst_kbm' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['sonst_kbm'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'sonst_wf' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['sonst_wf'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'sonst_zds' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['sonst_zds'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'sonst_energie' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['sonst_energie'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'sonst_dlrg' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['sonst_dlrg'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		////////////////////////////////////////////////////////////////////////////////////////////////
		'fw_schorndorf_1_10' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_10'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_1_11' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_11'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_1_19' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_19'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_1_33' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_33'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_1_44_1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_44_1'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_1_44_2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_44_2'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_1_50' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_50'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_1_52' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_52'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_1_74' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_74'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_1_rtb' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_rtb'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		///
		'fw_schorndorf_2_48' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_2_48'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_2_TSA' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_2_TSA'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_2_SA' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_2_SA'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		///
		'fw_schorndorf_3_42' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_3_42'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_3_19' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_3_19'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_3_TSA' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_3_TSA'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		///
		'fw_schorndorf_4_42' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_4_42'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_4_19' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_4_19'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		///
		'fw_schorndorf_5_42' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_5_42'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_5_47' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_5_47'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		///
		'fw_schorndorf_6_42' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_6_42'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_6_SA' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_6_SA'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		///
		'fw_schorndorf_7_42' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_7_42'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_7_48' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_7_48'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_7_TSA' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_7_TSA'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_7_SA' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_7_SA'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		///
		'fw_schorndorf_8_19' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_8_19'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_8_44' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_8_44'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_8_TSA' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_8_TSA'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_schorndorf_8_SA' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_8_SA'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		////////////////////////////////////////////////////////////////////////////////////////////////
		'fw_winterbach_1_11' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_11'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_winterbach_1_44_1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_44_1'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_winterbach_1_44_2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_44_2'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_winterbach_1_42' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_42'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_winterbach_1_45' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_45'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_winterbach_1_48' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_48'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		////////////////////////////////////////////////////////////////////////////////////////////////
		'fw_pluederhausen_1_44' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_1_44'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_pluederhausen_1_23' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_1_23'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_pluederhausen_1_42' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_1_42'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_pluederhausen_2_48' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_2_48'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_pluederhausen_1_19' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_1_19'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_pluederhausen_1_72' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_1_72'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_pluederhausen_SA' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_SA'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		////////////////////////////////////////////////////////////////////////////////////////////////
		'fw_rudersberg_1_11' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_rudersberg_1_11'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		////////////////////////////////////////////////////////////////////////////////////////////////
		'fw_remshalden_1_11' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_11'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_remshalden_1_19' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_19'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_remshalden_1_42_1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_42_1'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_remshalden_1_42_2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_42_2'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_remshalden_1_44' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_44'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_remshalden_2_42' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_2_42'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_remshalden_1_51' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_51'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_remshalden_1_74' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_74'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
		'fw_remshalden_3_22' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_3_22'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(1) NOT NULL default '0'"
		),
	)
);

class tl_missions extends Backend
{
	public function saveFile($value) {
		if (version_compare(VERSION,'3.2','>=')) {
		    $uuid = String::binToUuid($value);
		    $objFile = FilesModel::findByUuid($uuid);
		    $value = $objFile->path;
		}
		return $value;
	}

	public function loadFile($value) {
		if (version_compare(VERSION,'3.2','>=')) {
		    $objFile = FilesModel::findByPath($value);
		    $value = $objFile->uuid;
		}
		return $value;
	}
  
	/**
	 * Auto-generate the news alias if it has not been set yet
	 * @param mixed
	 * @param \DataContainer
	 * @return string
	 * @throws \Exception
	 */
	public function generateAlias($varValue, DataContainer $dc)
	{
		$autoAlias = false;
	
		// Generate alias if there is none
		if ($varValue == '')
		{
			$autoAlias = true;
			$varValue = standardize(String::restoreBasicEntities($dc->activeRecord->title));
		}
	
		$objAlias = $this->Database->prepare("SELECT id FROM tl_missions WHERE alias=?")
								   ->execute($varValue);
	
		// Check whether the news alias exists
		if ($objAlias->numRows > 1 && !$autoAlias)
		{
			throw new Exception(sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
		}
	
		// Add ID to alias
		if ($objAlias->numRows && $autoAlias)
		{
			$varValue .= '-' . $dc->id;
		}
	
		return $varValue;
	}

}  
