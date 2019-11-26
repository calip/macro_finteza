<?php
/**
 * Finteza - Configuration
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<h3><?= ___('Finteza Analytics') ?></h3>

<schlix-config:textbox config-key='str_website_id' label='<?= ___('Website ID') ?>' required='required' class='form-control' /> 

<h4><?=___('Select Tracking Options')?></h4>
<schlix-config:checkbox config-key='bool_track_hash' label='<?= ___('Track hash changes in the address bar') ?>' />
<schlix-config:checkbox config-key='bool_track_links' label='<?= ___('Track Outbound links') ?>' />
<schlix-config:checkbox config-key='bool_time_on_page' label='<?= ___('Exact time on website') ?>' />