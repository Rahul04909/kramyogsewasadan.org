<?php
// Calculate relative base url path dynamically
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
<!-- Narrative & Trust Welcome Component -->
<section class="trust-narrative-section" id="trustNarrativeSection" aria-label="About Karm Yog Sewa Sadan Trust">
  <div class="header-container">
    
    <!-- 1. Hero Identity Block -->
    <div class="narrative-identity-card">
      <span class="trust-badge-pill">
        <i class="fa-solid fa-hands-holding-circle"></i> Registered Charitable Trust
      </span>
      <h1 class="trust-main-heading">Karm Yog Sewa Sadan Trust</h1>
      <p class="trust-subheading">Serving Humanity with Dignity, Compassion and Commitment.</p>
      
      <!-- Hindi Message Highlight Ribbon -->
      <div class="trust-hindi-ribbon">
        <i class="fa-solid fa-quote-left"></i>
        <span>वृद्धजनों का सम्मान, दिव्यांगजनों का सशक्तीकरण, जरूरतमंदों की सहायता और समाज के कल्याण के लिए समर्पित एक मानवीय पहल।</span>
        <i class="fa-solid fa-quote-right"></i>
      </div>

      <!-- Introduction Paragraphs -->
      <div class="trust-intro-text">
        <p>
          Karm Yog Sewa Sadan Trust is a charitable organisation established to promote the welfare and dignity of older persons and disadvantaged communities. Its objectives include support for senior citizens, healthcare assistance, rehabilitation, education, vocational development, social awareness and community welfare.
        </p>
        <p>
          Through compassionate service and community participation, the Trust seeks to contribute to a more inclusive, caring and socially responsible society.
        </p>
      </div>

      <!-- 4 Action Buttons -->
      <div class="narrative-buttons-grid">
        <a href="<?php echo $narrative_base_url; ?>pages/vision-mission.php" class="nar-btn nar-btn-primary">
          <i class="fa-solid fa-bullseye"></i> Explore Our Mission
        </a>
        <a href="#coreAreasSection" class="nar-btn nar-btn-secondary">
          <i class="fa-solid fa-hand-holding-heart"></i> Our Welfare Activities
        </a>
        <a href="<?php echo $narrative_base_url; ?>donate.php" class="nar-btn nar-btn-accent">
          <i class="fa-solid fa-heart"></i> Support Our Work
        </a>
        <a href="<?php echo $narrative_base_url; ?>pages/contact-us.php" class="nar-btn nar-btn-outline">
          <i class="fa-solid fa-envelope"></i> Contact Us
        </a>
      </div>
    </div>

    <!-- 2. Welcome to Our Trust: A Commitment to Humanity -->
    <div class="commitment-card">
      <div class="commitment-badge">Welcome to Our Trust</div>
      <h2 class="commitment-title">A Commitment to Humanity</h2>
      <div class="commitment-body">
        <p>
          At <strong>Karm Yog Sewa Sadan Trust</strong>, we believe that every individual deserves respect, security, opportunity and compassionate care.
        </p>
        <p>
          Our charitable objectives focus on the welfare of older persons, assistance for people facing economic hardship, access to education, healthcare awareness, rehabilitation, social participation and community development.
        </p>
        <p>
          We aim to work with families, volunteers, professionals, public institutions and other organisations to identify community needs and develop appropriate welfare initiatives.
        </p>
      </div>
    </div>

    <!-- 3. Dual Mission & Vision Grid -->
    <div class="narrative-vm-grid">
      <div class="narrative-vm-card vision">
        <div class="nar-vm-header">
          <span class="nar-vm-icon"><i class="fa-solid fa-eye"></i></span>
          <h3>Our Vision</h3>
        </div>
        <p>
          To contribute to a compassionate, inclusive and equitable society in which older persons, persons with disabilities and disadvantaged individuals can live with dignity, security and meaningful opportunities.
        </p>
      </div>

      <div class="narrative-vm-card mission">
        <div class="nar-vm-header">
          <span class="nar-vm-icon"><i class="fa-solid fa-compass"></i></span>
          <h3>Our Mission</h3>
        </div>
        <p>
          To pursue charitable welfare activities through community engagement, healthcare awareness, rehabilitation, educational assistance, vocational development, social support and collaboration with relevant institutions.
        </p>
      </div>
    </div>

    <!-- 4. How You Can Help (Be a Part of Positive Change) -->
    <div class="how-help-block">
      <div class="how-help-inner">
        <span class="how-help-badge"><i class="fa-solid fa-hands-clapping"></i> Join Our Cause</span>
        <h2 class="how-help-title">Be a Part of Positive Change</h2>
        <p class="how-help-desc">
          Every contribution of time, knowledge, resources or financial assistance can help strengthen charitable initiatives and community welfare. You can support Karm Yog Sewa Sadan Trust by volunteering, sharing professional expertise, contributing eligible resources, partnering on community programmes or making a donation through the Trust's authorised channels.
        </p>
        <div class="how-help-buttons">
          <a href="<?php echo $narrative_base_url; ?>donate.php" class="cta-btn cta-donate">
            <i class="fa-solid fa-hand-holding-dollar"></i> Donate Now
          </a>
          <a href="<?php echo $narrative_base_url; ?>volunteer.php" class="cta-btn cta-volunteer">
            <i class="fa-solid fa-user-plus"></i> Volunteer With Us
          </a>
          <a href="<?php echo $narrative_base_url; ?>pages/contact-us.php" class="cta-btn cta-partner">
            <i class="fa-solid fa-handshake"></i> Partner With Us
          </a>
        </div>
      </div>
    </div>

  </div>
</section>
