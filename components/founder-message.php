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
                 alt="Smt. Mamta - Founder & President, Kram Yog Sewa Sadan Trust" 
                 class="founder-portrait-img" 
                 loading="lazy">
            <div class="founder-verified-badge">
              <i class="fa-solid fa-circle-check"></i>
              <span>Founder &amp; President</span>
            </div>
          </div>
          
          <div class="founder-profile-body">
            <h3 class="founder-name">Smt. Mamta</h3>
            <p class="founder-role">Founder &amp; Managing Trustee</p>
            <p class="founder-org">Kram Yog Sewa Sadan Trust</p>
            
            <div class="founder-card-divider"></div>
            
            <!-- Pillar tags -->
            <div class="founder-causes-tags">
              <span class="cause-tag"><i class="fa-solid fa-house-chimney-heart"></i> Old Age Home</span>
              <span class="cause-tag"><i class="fa-solid fa-wheelchair"></i> Divyangjan Care</span>
              <span class="cause-tag"><i class="fa-solid fa-graduation-cap"></i> Child Education</span>
              <span class="cause-tag"><i class="fa-solid fa-hands-holding-child"></i> Women Upliftment</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Founder Quote & Heartfelt Message -->
      <div class="founder-content-col">
        
        <!-- Eyebrow Badge -->
        <div class="founder-eyebrow">
          <span class="founder-eyebrow-icon"><i class="fa-solid fa-hands-praying"></i></span>
          <span class="founder-eyebrow-text">Leadership &amp; Compassion</span>
        </div>

        <!-- Section Heading -->
        <h2 class="founder-heading">
          Words of Compassion from <span class="founder-heading-highlight">Our Founder</span>
        </h2>

        <!-- Hindi Motto Banner -->
        <div class="founder-motto-ribbon">
          <i class="fa-solid fa-quote-left motto-quote-icon"></i>
          <span class="motto-text">“सेवा ही कर्म, मानवता ही धर्म”</span>
        </div>

        <!-- Quote Box with Editorial Typography -->
        <div class="founder-quote-box">
          <div class="quote-decorative-watermark">
            <i class="fa-solid fa-quote-right"></i>
          </div>
          <p class="founder-primary-quote">
            “Every wrinkled face in our Old Age Home tells a profound story of unconditional sacrifices, yet so many elders find themselves forgotten when they need love the most. Kram Yog Sewa Sadan was established on a solemn pledge: that no senior mother or father shall spend their golden years feeling abandoned, and no soul in distress shall stand alone. True Karma Yoga is not in words—it is in holding a trembling hand, feeding a hungry child, and treating every human being with sacred dignity.”
          </p>
        </div>

        <!-- Extended Narrative Message -->
        <div class="founder-narrative-text">
          <p>
            Grounded in the sacred belief that <strong>“मानव सेवा ही सच्चा कर्म योग”</strong> (Serving humanity is the true Karma Yoga), our trust provides shelter, nutritious meals, round-the-clock healthcare, and a loving home to abandoned seniors, rehabilitates differently-abled individuals, and opens learning pathways for underprivileged slum children.
          </p>
          <p>
            We invite every compassionate citizen, donor, and volunteer to join hands with us. Your kindness becomes the roof above a lonely elder's head and the spark of light in a child's future.
          </p>
        </div>

        <!-- Founder Signature & Action Row -->
        <div class="founder-action-row">
          <div class="founder-signature-wrapper">
            <div class="founder-cursive-signature">Mamta</div>
            <div class="founder-signature-title">Smt. Mamta &bull; Kram Yog Sewa Sadan Trust</div>
          </div>

          <div class="founder-cta-buttons">
            <a href="<?php echo $founder_base_url; ?>donate.php" class="founder-btn founder-btn-primary">
              <i class="fa-solid fa-heart"></i>
              <span>Support Our Mission</span>
            </a>
            <a href="<?php echo $founder_base_url; ?>pages/about-us.php" class="founder-btn founder-btn-outline">
              <span>Read Our Story</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Government & Legal Trust Badges -->
        <div class="founder-trust-pills">
          <span class="trust-pill"><i class="fa-solid fa-file-shield"></i> 12A Certified</span>
          <span class="trust-pill"><i class="fa-solid fa-receipt"></i> 80G Tax Exemption</span>
          <span class="trust-pill"><i class="fa-solid fa-landmark"></i> NITI Aayog Darpan</span>
          <span class="trust-pill"><i class="fa-solid fa-handshake"></i> MCA CSR-1 Registered</span>
        </div>

      </div>

    </div>
  </div>
</section>
