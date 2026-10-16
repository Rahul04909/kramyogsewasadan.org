<?php
// Calculate relative base url path dynamically to support inclusion in nested directories
$narrative_base_url = '';
$request_uri = $_SERVER['REQUEST_URI'];
if (strpos($request_uri, 'kramyogsewasadan.org') !== false) {
    $narrative_base_url = substr($request_uri, 0, strpos($request_uri, 'kramyogsewasadan.org') + strlen('kramyogsewasadan.org')) . '/';
} elseif (strpos($request_uri, 'gloabl-rise') !== false) {
    $narrative_base_url = substr($request_uri, 0, strpos($request_uri, 'gloabl-rise') + strlen('gloabl-rise')) . '/';
} else {
    $narrative_base_url = '/';
}
?>
<!-- Full Width Impact & Welfare Initiatives Banner Component -->
<section class="narrative-section narrative-banner-section" id="narrativeSection" aria-label="Social Welfare Initiatives">
  <div class="narrative-banner-container">
    <a href="<?php echo $narrative_base_url; ?>donate.php" class="narrative-banner-link" aria-label="Support Kram Yog Sewa Sadan Social Welfare Initiatives">
      <img src="<?php echo $narrative_base_url; ?>assets/hero/f4079b3b-f20b-45e8-a260-0d35cbfd0a19.jpg" 
           alt="Kram Yog Sewa Sadan Social Welfare Initiatives - Elderly Care, Education, Women Empowerment, Tree Planting" 
           class="narrative-full-banner-img" 
           loading="lazy">
    </a>
  </div>
</section>
