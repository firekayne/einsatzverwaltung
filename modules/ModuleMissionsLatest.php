<?php
 
namespace Contao;
 
/**
 * Class ModuleCdList
 *
 * Front end module "cd list".
 */
class ModuleMissionsLatest extends \Module
{
 
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_missions_latest';
 
 
    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');
 
            $objTemplate->wildcard = '###  LETZTE EINSÄTZE  ###';
            $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;
 
            return $objTemplate->parse();
        }
 
        return parent::generate();
    }
 
 
    /**
     * Generate the module
     */
    protected function compile()
    {
        //$objMissions = $this->Database->execute("SELECT * FROM tl_missions ORDER BY lfdnr DESC");
        //$objMissions = $this->Database->execute("SELECT * FROM tl_missions WHERE YEAR(alarm_date) = ORDER BY lfdnr DESC");

        $showYear = date("Y");
		
		$objMissions = $this->Database->execute("SELECT * FROM tl_missions WHERE year = ".$showYear." ORDER BY lfdnr DESC LIMIT 5");
 
        // Return if no Projects were found
        if (!$objMissions->numRows)
        {
            return;
        }
 
        $strLink = '';
 
        // Generate a jumpTo link
        if ($this->jumpTo > 0)
        {
            $objJump = \PageModel::findByPk($this->jumpTo);
 
            if ($objJump !== null)
            {
                $strLink = $this->generateFrontendUrl($objJump->row(), '/items/%s');
            }
        }
 
        $arrProjects = array();
 
        // Generate CDs
        while ($objMissions->next())
        {
            $arrMissions[] = array
            (
                'lfdnr' 		=> substr($objMissions->lfdnr, 0, 3),
                'alarm_date' 	=> $objMissions->alarm_date,
                'alarm_time' 	=> $objMissions->alarm_time,
                'category' 		=> $objMissions->category,
                'street' 		=> $objMissions->street,
                'city' 			=> $objMissions->city,
                'keyword_fire' 	=> substr($objMissions->keyword_fire, 6),
                'keyword_tech' 	=> substr($objMissions->keyword_tech, 6),
                'alarm_time' => $objMissions->alarm_time,
                'alarm_time' => $objMissions->alarm_time,
                'year'			=> $showYear,
                'link' => strlen($strLink) ? sprintf($strLink, $objMissions->id) : ''
            );
        }
 
        $this->Template->missions = $arrMissions;
    }
}