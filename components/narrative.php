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
    <a href="<?php echo $narrative_base_url; ?>donate.php" class="narrative-banner-link" aria-label="Support Karm Yog Sewa Sadan Social Welfare Initiatives">
      <img src="<?php echo $narrative_base_url; ?>assets/hero/f4079b3b-f20b-45e8-a260-0d35cbfd0a19.jpg" 
           alt="Karm Yog Sewa Sadan Trust - Serving Humanity with Dignity, Compassion and Commitment" 
           class="narrative-full-banner-img" 
           loading="lazy">
    </a>
  </div>
</section>

<!-- Welcome & Commitment to Humanity Section -->
<section class="welcome-intro-section" id="welcomeSection" aria-label="Welcome to Karm Yog Sewa Sadan Trust">
  <div class="welcome-intro-container">

    <!-- Header Block: Title, Subheading & Hindi Message -->
    <div class="intro-header-block">
      <h1 class="intro-main-title">Karm Yog Sewa Sadan Trust</h1>
      <p class="intro-subheading">Serving Humanity with Dignity, Compassion and Commitment.</p>
      
      <!-- Hindi Message -->
      <div class="intro-hindi-badge">
        <i class="fa-solid fa-hands-praying" style="color: #13a34a; margin-right: 6px;"></i>
        वृद्धजनों का सम्मान, दिव्यांगजनों का सशक्तीकरण, जरूरतमंदों की सहायता और समाज के कल्याण के लिए समर्पित एक मानवीय पहल।
      </div>

      <!-- Introduction -->
      <p class="intro-desc-text">
        Karm Yog Sewa Sadan Trust is a charitable organisation established to promote the welfare and dignity of older persons and disadvantaged communities. Its objectives include support for senior citizens, healthcare assistance, rehabilitation, education, vocational development, social awareness and community welfare. Through compassionate service and community participation, the Trust seeks to contribute to a more inclusive, caring and socially responsible society.
      </p>

      <!-- 4 Action Buttons -->
      <div class="intro-buttons-row">
        <a href="<?php echo $narrative_base_url; ?>pages/vision-mission.php" class="intro-btn intro-btn-primary">
          <i class="fa-solid fa-compass"></i> Explore Our Mission
        </a>
        <a href="#coreAreas" class="intro-btn intro-btn-accent">
          <i class="fa-solid fa-hand-holding-heart"></i> Our Welfare Activities
        </a>
        <a href="<?php echo $narrative_base_url; ?>donate.php" class="intro-btn intro-btn-outline">
          <i class="fa-solid fa-heart"></i> Support Our Work
        </a>
        <a href="<?php echo $narrative_base_url; ?>pages/contact-us.php" class="intro-btn intro-btn-contact">
          <i class="fa-solid fa-envelope"></i> Contact Us
        </a>
      </div>
    </div>

    <!-- Welcome Card: A Commitment to Humanity -->
    <div class="commitment-card">
      <span style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #13a34a; letter-spacing: 0.8px; display: block; margin-bottom: 6px;">Welcome to Our Trust</span>
      <h3>A Commitment to Humanity</h3>
      <p>
        At Karm Yog Sewa Sadan Trust, we believe that every individual deserves respect, security, opportunity and compassionate care. Our charitable objectives focus on the welfare of older persons, assistance for people facing economic hardship, access to education, healthcare awareness, rehabilitation, social participation and community development.
      </p>
      <p>
        We aim to work with families, volunteers, professionals, public institutions and other organisations to identify community needs and develop appropriate welfare initiatives.
      </p>
    </div>

    <!-- Vision & Mission Dual Cards -->
    <div class="mv-dual-grid">
      
      <!-- Vision Card -->
      <div class="mv-card mv-card-vision">
        <div class="mv-card-header">
          <div class="mv-icon-box"><i class="fa-solid fa-eye"></i></div>
          <h3>Our Vision</h3>
        </div>
        <p>
          To contribute to a compassionate, inclusive and equitable society in which older persons, persons with disabilities and disadvantaged individuals can live with dignity, security and meaningful opportunities.
        </p>
      </div>

      <!-- Mission Card -->
      <div class="mv-card mv-card-mission">
        <div class="mv-card-header">
          <div class="mv-icon-box"><i class="fa-solid fa-bullseye"></i></div>
          <h3>Our Mission</h3>
        </div>
        <p>
          To pursue charitable welfare activities through community engagement, healthcare awareness, rehabilitation, educational assistance, vocational development, social support and collaboration with relevant institutions.
        </p>
      </div>

    </div>

    <!-- How You Can Help Box -->
    <div class="help-cta-box">
      <div class="help-cta-content">
        <span style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #a7f3d0; letter-spacing: 0.8px; display: block; margin-bottom: 6px;">How You Can Help</span>
        <h3>Be a Part of Positive Change</h3>
        <p>
          Every contribution of time, knowledge, resources or financial assistance can help strengthen charitable initiatives and community welfare. You can support Karm Yog Sewa Sadan Trust by volunteering, sharing professional expertise, contributing eligible resources, partnering on community programmes or making a donation through the Trust's authorised channels.
        </p>
      </div>
      <div class="help-cta-buttons">
        <a href="<?php echo $narrative_base_url; ?>donate.php" class="help-btn help-btn-donate">
          <i class="fa-solid fa-heart"></i> Donate Now
        </a>
        <a href="<?php echo $narrative_base_url; ?>volunteer.php" class="help-btn help-btn-volunteer">
          <i class="fa-solid fa-handshake-angle"></i> Volunteer With Us
        </a>
        <a href="<?php echo $narrative_base_url; ?>pages/how-to-help.php" class="help-btn help-btn-partner">
          <i class="fa-solid fa-users-gear"></i> Partner With Us
        </a>
      </div>
    </div>

  </div>
</section>
