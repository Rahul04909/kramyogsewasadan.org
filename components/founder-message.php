<?php
// Calculate relative base url path dynamically to support inclusion in nested directories
$founder_base_url = '';
$request_uri = $_SERVER['REQUEST_URI'];
if (strpos($request_uri, 'kramyogsewasadan.org') !== false) {
    $founder_base_url = substr($request_uri, 0, strpos($request_uri, 'kramyogsewasadan.org') + strlen('kramyogsewasadan.org')) . '/';
} elseif (strpos($request_uri, 'gloabl-rise') !== false) {
    $founder_base_url = substr($request_uri, 0, strpos($request_uri, 'gloabl-rise') + strlen('gloabl-rise')) . '/';
} else {
    $founder_base_url = '/';
}
?>
<!-- Founder's Message Component -->
<section class="founder-message-section" id="founderMessage" aria-label="Founder's Message">
  <div class="header-container">
    <div class="founder-grid">
      
      <!-- Left Column: Founder Portrait & Card -->
      <div class="founder-card-col">
        <div class="founder-card">
          <div class="founder-image-wrapper">
            <div class="founder-image-backdrop"></div>
            <img src="<?php echo $founder_base_url; ?>assets/hero/mamta.jpg" 
                 alt="Chairperson / Founder, Karm Yog Sewa Sadan Trust" 
                 class="founder-portrait-img" 
                 loading="lazy">
            <div class="founder-verified-badge">
              <i class="fa-solid fa-circle-check"></i>
              <span>Chairperson / Founder</span>
            </div>
          </div>
          
          <div class="founder-profile-body">
            <h3 class="founder-name">Chairperson / Founder</h3>
            <p class="founder-role">Leadership &amp; Public Welfare</p>
            <p class="founder-org">Karm Yog Sewa Sadan Trust</p>
            
            <div class="founder-card-divider"></div>
            
            <!-- Pillar tags -->
            <div class="founder-causes-tags">
              <span class="cause-tag"><i class="fa-solid fa-house-chimney-heart"></i> Senior Citizen Welfare</span>
              <span class="cause-tag"><i class="fa-solid fa-heart-pulse"></i> Healthcare Assistance</span>
              <span class="cause-tag"><i class="fa-solid fa-wheelchair"></i> Disability Rehabilitation</span>
              <span class="cause-tag"><i class="fa-solid fa-graduation-cap"></i> Education for All</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Founder Message per Client Specification -->
      <div class="founder-content-col">
        
        <!-- Eyebrow Badge -->
        <div class="founder-eyebrow">
          <span class="founder-eyebrow-icon"><i class="fa-solid fa-hands-praying"></i></span>
          <span class="founder-eyebrow-text">Founder's Message</span>
        </div>

        <!-- Section Heading -->
        <h2 class="founder-heading">
          A Message of Service and <span class="founder-heading-highlight">Social Responsibility</span>
        </h2>

        <!-- Quote Box with Editorial Typography -->
        <div class="founder-quote-box">
          <div class="quote-decorative-watermark">
            <i class="fa-solid fa-quote-right"></i>
          </div>
          <p class="founder-primary-quote">
            “At Karm Yog Sewa Sadan Trust, we believe that meaningful social development begins with compassion, responsibility and a genuine commitment to human dignity.”
          </p>
        </div>

        <!-- Official Narrative Message -->
        <div class="founder-narrative-text">
          <p>
            Our purpose is to contribute to the welfare of older persons, disadvantaged families and vulnerable communities through charitable initiatives that respond to social needs.
          </p>
          <p>
            We recognise the importance of healthcare, education, rehabilitation, livelihood opportunities and community participation in building a more inclusive society. We hope to work alongside volunteers, professionals, donors, public institutions and community organisations to advance our charitable objectives.
          </p>
          <p>
            We invite everyone who shares these values to join us in building a society in which care, dignity and opportunity are accessible to those who need them.
          </p>
        </div>

        <!-- Founder Signature & Action Row -->
        <div class="founder-action-row">
          <div class="founder-signature-wrapper">
            <div class="founder-cursive-signature">With regards,</div>
            <div class="founder-signature-title"><strong>Chairperson / Founder</strong><br>Karm Yog Sewa Sadan Trust</div>
          </div>

          <div class="founder-cta-buttons">
            <a href="<?php echo $founder_base_url; ?>donate.php" class="founder-btn founder-btn-primary">
              <i class="fa-solid fa-heart"></i>
              <span>Support Our Work</span>
            </a>
            <a href="<?php echo $founder_base_url; ?>pages/about-us.php" class="founder-btn founder-btn-outline">
              <span>About The Trust</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Trust Certifications & Badges -->
        <div class="founder-trust-pills">
          <span class="trust-pill"><i class="fa-solid fa-stamp"></i> Indian Trust Act Regd.</span>
          <span class="trust-pill"><i class="fa-solid fa-handshake"></i> MCA CSR-1 Registered</span>
          <span class="trust-pill"><i class="fa-solid fa-receipt"></i> 80G Tax Exemption</span>
          <span class="trust-pill"><i class="fa-solid fa-file-shield"></i> 12A Certified</span>
        </div>

      </div>

    </div>
  </div>
</section>
