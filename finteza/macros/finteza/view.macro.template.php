<?php
/**
 * Finteza
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($website_id): ?>
    <script type="text/javascript" >
      (function(a,e,f,g,b,c,d){a[b]||(a.FintezaCoreObject=b,a[b]=a[b]||function(){(a[b].q=a[b].q||[]).push(arguments)},a[b].l=1*new Date,c=e.createElement(f),d=e.getElementsByTagName(f)[0],c.async=!0,c.defer=!0,c.src=g,d&&d.parentNode&&d.parentNode.insertBefore(c,d))})
      (window,document,"script","https://content.mql5.com/core.js","fz");
      fz("register","website", {
        id: "<?= ___h($website_id) ?>",
        trackHash: <?= ___h($track_hash) ?>,
        trackLinks: <?= ___h($track_links) ?>,
        timeOnPage: <?= ___h($track_time_on_page) ?>
      });
    </script>
<?php else: ?>
    <!-- NOTE - Finteza website id was not set up correctly - please add a tracking ID -->
    <script>console.error("Finteza Website ID has not been set from configuration");</script>
<?php endif ?>