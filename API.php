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

    public function getNodeUsage($idSite, $idNode)
    {

        /*
        $current_date = date('Y-m-d', time());
        $date_range = "1992-01-01,{$current_date}";

        #$views_action = 'getPageUrls';
        #$downloads_action = 'getDownloads';
        $url_prefix = "http://localhost/matomo/index.php?module=API&method=Actions.";
        $url_suffix = "&idSite={$idSite}&period=range&date={$date_range}&format=json&segment=customVariablePageName1==nid;customVariablePageValue1=={$idNode}";

        $page_results = json_decode(file_get_contents("{$url_prefix}getPageUrls{$url_suffix}"), TRUE);
        $page_visits = $page_results[0]['nb_visits'];
        $page_hits = $page_results[0]['nb_hits'];

        $download_results = json_decode(file_get_contents("{$url_prefix}getDownloads{$url_suffix}"), TRUE);
        $download_visits = $download_results[0]['nb_visits'];
        $download_hits = $download_results[0]['nb_hits'];

        $response = array(
          "nid" => $idNode,
          "page_visits" => $page_visits, 
          "page_hits" => $page_hits, 
          "download_visits" => $download_visits, 
          "download_hits" => $download_hits, 
        );
        */
        $views = rand(0, 100);
        $downloads = rand(0, 100);

        $response = array(
          "views" => $views, 
          "downloads" => $downloads, 
        );

	return $response;
    }

}
