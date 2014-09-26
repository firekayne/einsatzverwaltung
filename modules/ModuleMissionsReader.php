<?php
 
namespace Contao;
 
/**
 * Class ModuleCdReader
 *
 * Front end module "cd reader".
 */
class ModuleMissionsReader extends \Module
{
 
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_missions_reader';
 
 
    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');
 
            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['missions_reader'][0]) . ' ###';
            $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;
 
            return $objTemplate->parse();
        }
 
        // Return if there are no items
        if (!\Input::get('items'))
        {
            return '';
        }
 
        return parent::generate();
    }
 
 
    /**
     * Generate the module
     */
    protected function compile()
    {
        $objMissions = $this->Database->prepare("SELECT * FROM tl_missions WHERE id=?")
                                ->limit(1)
                                ->execute(\Input::get('items'));
 
        // Display a 404 page if the CD was not found
        if (!$objMissions->numRows)
        {
            global $objPage;
            $objHandler = new $GLOBALS['TL_PTY']['error_404']();
            $objHandler->generate($objPage->id);
        }
        
        // Get Categories
		$arrVehicles = deserialize ( $objMissions->vehicles );
		if (count ( $arrVehicles ) > 0) {
			$objMissionVehicles = $this->Database->prepare ( "SELECT radio, title, title_short FROM tl_missions_vehicles WHERE id IN(" . implode ( ',', $arrVehicles ) . ")" )->execute (  );
			while ( $objMissionVehicles->next () ) {
				$arrVehicles [] = $objMissionVehicles->radio.' – '.$objMissionVehicles->title.' – '.$objMissionVehicles->title_short;
			}
			$strVehicle = $arrVehicles;
		}
 
        $this->Template->lfdnr 			= $objMissions->lfdnr;
        $this->Template->year 			= $objMissions->year;
        $this->Template->alarm_date 	= $objMissions->alarm_date;
        $this->Template->alarm_time 	= $objMissions->alarm_time;
        $this->Template->category 		= $objMissions->category;
        $this->Template->keyword_fire 	= substr($objMissions->keyword_fire, 6);
        $this->Template->keyword_tech 	= substr($objMissions->keyword_tech, 6);
        $this->Template->keyword 		= $objMissions->keyword;
        $this->Template->report 		= $objMissions->report;
        $this->Template->street 		= $objMissions->street;
        $this->Template->city 			= $objMissions->city;
        $this->Template->gallery 		= $objMissions->gallery;
        
        $this->Template->pol_stw 	= $objMissions->pol_stw;
        $this->Template->pol_kripo 	= $objMissions->pol_kripo;
        $this->Template->pol_hub 	= $objMissions->pol_hub;
        $this->Template->pol_sek 	= $objMissions->pol_sek;
        
        $this->Template->rd_rtw = $objMissions->rd_rtw;
        $this->Template->rd_nef = $objMissions->rd_nef;
        $this->Template->rd_rth = $objMissions->rd_rth;
        $this->Template->rd_drk = $objMissions->rd_drk;
        $this->Template->rd_orgl = $objMissions->rd_orgl;
        $this->Template->rd_lna = $objMissions->rd_lna;
        
        $this->Template->sonst_kbm 		= $objMissions->sonst_kbm;
        $this->Template->sonst_wf 		= $objMissions->sonst_wf;
        $this->Template->sonst_zds 		= $objMissions->sonst_zds;
        $this->Template->sonst_energie 	= $objMissions->sonst_energie;
        $this->Template->sonst_dlrg 	= $objMissions->sonst_dlrg;
        
        $this->Template->fw_schorndorf_1_10 	= $objMissions->fw_schorndorf_1_10;
        $this->Template->fw_schorndorf_1_11 	= $objMissions->fw_schorndorf_1_11;
        $this->Template->fw_schorndorf_1_19 	= $objMissions->fw_schorndorf_1_19;
        $this->Template->fw_schorndorf_1_33 	= $objMissions->fw_schorndorf_1_33;
        $this->Template->fw_schorndorf_1_44_1 	= $objMissions->fw_schorndorf_1_44_1;
        $this->Template->fw_schorndorf_1_44_2 	= $objMissions->fw_schorndorf_1_44_2;
        $this->Template->fw_schorndorf_1_50 	= $objMissions->fw_schorndorf_1_50;
        $this->Template->fw_schorndorf_1_52 	= $objMissions->fw_schorndorf_1_52;
        $this->Template->fw_schorndorf_1_74 	= $objMissions->fw_schorndorf_1_74;
        $this->Template->fw_schorndorf_1_rtb 	= $objMissions->fw_schorndorf_1_rtb;
        $this->Template->fw_schorndorf_2_48 	= $objMissions->fw_schorndorf_2_74;
        $this->Template->fw_schorndorf_2_TSA 	= $objMissions->fw_schorndorf_2_TSA;
        $this->Template->fw_schorndorf_2_SA 	= $objMissions->fw_schorndorf_2_SA;
        $this->Template->fw_schorndorf_3_42 	= $objMissions->fw_schorndorf_3_42;
        $this->Template->fw_schorndorf_3_19 	= $objMissions->fw_schorndorf_3_19;
        $this->Template->fw_schorndorf_3_TSA 	= $objMissions->fw_schorndorf_3_TSA;
        $this->Template->fw_schorndorf_4_19 	= $objMissions->fw_schorndorf_4_19;
        $this->Template->fw_schorndorf_4_42 	= $objMissions->fw_schorndorf_4_42;
        $this->Template->fw_schorndorf_5_42 	= $objMissions->fw_schorndorf_5_42;
        $this->Template->fw_schorndorf_5_47 	= $objMissions->fw_schorndorf_5_47;
        $this->Template->fw_schorndorf_6_42 	= $objMissions->fw_schorndorf_6_42;
        $this->Template->fw_schorndorf_6_TSA 	= $objMissions->fw_schorndorf_6_TSA;
        $this->Template->fw_schorndorf_7_42 	= $objMissions->fw_schorndorf_7_42;
        $this->Template->fw_schorndorf_7_48 	= $objMissions->fw_schorndorf_7_48;
        $this->Template->fw_schorndorf_7_TSA 	= $objMissions->fw_schorndorf_7_TSA;
        $this->Template->fw_schorndorf_7_SA 	= $objMissions->fw_schorndorf_7_SA;
        $this->Template->fw_schorndorf_8_19 	= $objMissions->fw_schorndorf_8_19;
        $this->Template->fw_schorndorf_8_44 	= $objMissions->fw_schorndorf_8_44;
        $this->Template->fw_schorndorf_8_TSA 	= $objMissions->fw_schorndorf_8_TSA;
        $this->Template->fw_schorndorf_8_SA 	= $objMissions->fw_schorndorf_8_SA;
        
        $this->Template->fw_winterbach_1_11 	= $objMissions->fw_winterbach_1_11;
        $this->Template->fw_winterbach_1_42 	= $objMissions->fw_winterbach_1_42;
        $this->Template->fw_winterbach_1_44_1 	= $objMissions->fw_winterbach_1_44_1;
        $this->Template->fw_winterbach_1_44_2 	= $objMissions->fw_winterbach_1_44_2;
        $this->Template->fw_winterbach_1_45 	= $objMissions->fw_winterbach_1_45;
        $this->Template->fw_winterbach_1_48 	= $objMissions->fw_winterbach_1_48;
        
        $this->Template->fw_rudersberg_1_11 	= $objMissions->fw_rudersberg_1_11;
        
        $this->Template->fw_pluederhausen_1_19 	= $objMissions->fw_pluederhausen_1_19;
        $this->Template->fw_pluederhausen_1_23 	= $objMissions->fw_pluederhausen_1_23;
        $this->Template->fw_pluederhausen_1_42 	= $objMissions->fw_pluederhausen_1_42;
        $this->Template->fw_pluederhausen_1_44 	= $objMissions->fw_pluederhausen_1_44;
        $this->Template->fw_pluederhausen_1_72 	= $objMissions->fw_pluederhausen_1_72;
        $this->Template->fw_pluederhausen_2_48 	= $objMissions->fw_pluederhausen_2_48;
        $this->Template->fw_pluederhausen_SA 	= $objMissions->fw_pluederhausen_SA;
        
        $this->Template->fw_remshalden_1_11 	= $objMissions->fw_remshalden_1_11;
        $this->Template->fw_remshalden_1_19 	= $objMissions->fw_remshalden_1_19;
        $this->Template->fw_remshalden_1_42_1 	= $objMissions->fw_remshalden_1_42_1;
        $this->Template->fw_remshalden_1_42_2 	= $objMissions->fw_remshalden_1_42_2;
        $this->Template->fw_remshalden_1_44 	= $objMissions->fw_remshalden_1_44;
        $this->Template->fw_remshalden_1_51 	= $objMissions->fw_remshalden_1_51;
        $this->Template->fw_remshalden_1_74 	= $objMissions->fw_remshalden_1_74;
        $this->Template->fw_remshalden_2_42 	= $objMissions->fw_remshalden_2_42;
        $this->Template->fw_remshalden_3_22 	= $objMissions->fw_remshalden_3_22;
    }
}