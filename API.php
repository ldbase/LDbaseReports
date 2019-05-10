<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\LDbaseReports;

use Piwik\DataTable;
use Piwik\DataTable\Row;

/**
 * API for plugin LDbaseReports
 *
 * @method static \Piwik\Plugins\LDbaseReports\API getInstance()
 */
class API extends \Piwik\Plugin\API
{
    /**
     * You can call this API method like this:
     * /index.php?module=API&method=LDbaseReports.getAnswerToLife
     * /index.php?module=API&method=LDbaseReports.getAnswerToLife&truth=0
     *
     * @param int    $idSite
     * @param int    $idNode
     *
     * @return DataTable
     */
    public function getNodeUsage($idSite, $idNode)
    {

	$result = array(
		"nid" => $idNode,
		"views" => 1, 
		"downloads" => 1, 
	);

	return $result;
    }
}
