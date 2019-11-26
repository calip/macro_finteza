<?php
namespace Macro;
/**
 * Finteza - macro class
 * 
 * The system features real-time web analytics. Track the number of visitors, page views and events of your website. Analyze the incoming traffic quality, examine the audience behavior and build conversion funnels. Detailed statistics on users’ georgraphy and traffic sources are updated in the reports in real time!
 * 
 * @copyright 2019 Schlix
 *
 * @license MIT
 *
 * @package finteza
 * @version 1.0
 * @author  Alip <alip.putra@schlix.com>
 * @link    https://www.schlix.com/
 */

class Finteza extends \SCHLIX\cmsMacro {

    
    protected static $has_this_macro_been_called;
    /*
     * Run the macro
     * @global \SCHLIX\cmsHTMLPageHeader $HTMLHeader
     * @param array|string $data
     * @param object $caller_object
     * @param string $caller_function
     * @param array $extra_info
     * @return bool
     */
    public function Run(&$data, $caller_object, $caller_function, $extra_info = NULL) {
        global $HTMLHeader;
        global $__finteza_loaded;
 
        if (!$__finteza_loaded)
        {
            $website_id = $this->config['str_website_id'];
            $track_hash = ((bool)$this->config['bool_track_hash']) ? "true" : "false";
            $track_links = ((bool)$this->config['bool_track_links']) ? "true" : "false";
            $track_time_on_page = ((bool)$this->config['bool_time_on_page']) ? "true" : "false";
            $__finteza_loaded = true;

            $local_variables = compact(array_keys(get_defined_vars()));
            $this->loadTemplateFile('view.macro', $local_variables);                
        }
        return true;
    }

}
            