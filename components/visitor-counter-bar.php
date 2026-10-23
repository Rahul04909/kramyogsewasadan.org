<?php
/**
 * components/visitor-counter-bar.php
 * ============================================================
 * Community Trust & Live Visitor Counter Component
 * Displays live verified visitor statistics on the landing page
 * Kram Yog Sewa Sadan Trust
 * ============================================================
 */

// Include visitor counter engine
require_once __DIR__ . '/../includes/visitor-counter.php';
?>
<!-- Live Community Trust & Visitor Counter Section -->
<section class="trust-counter-section" id="trustCounterSection" aria-label="Official Website Visitors and Public Trust">
  <div class="header-container">
    <div class="trust-counter-grid">
      
      <!-- Left: Mission & Public Trust -->
      <div class="trust-counter-left">
        <div class="trust-live-pill">
          <span class="pulse-dot"></span> Live Public Transparency &amp; Reach
        </div>
        <h2 class="trust-counter-title">Dedicated to Seva, <span>Empowered by You</span></h2>
        <p class="trust-counter-desc">
          Every visitor and supporter helps raise awareness for our old age aashram, emergency street rescues, differently-abled rehabilitation, and slum education initiatives.
        </p>
        <div class="trust-pills-row">
          <span class="trust-mini-pill"><i class="fa-solid fa-file-shield"></i> Trust Reg. No: 10394</span>
          <span class="trust-mini-pill"><i class="fa-solid fa-receipt"></i> 12A &amp; 80G Tax Exemption</span>
          <span class="trust-mini-pill"><i class="fa-solid fa-award"></i> GPTW Certified</span>
        </div>
      </div>

      <!-- Right: Odometer Display -->
      <div class="trust-counter-right">
        <div class="odometer-label">
          <i class="fa-solid fa-users-viewfinder"></i> Total Website Visitors
        </div>
        <div class="odometer-digits-container" aria-label="Current Visitor Count: <?php echo htmlspecialchars($kyss_visitor_count_formatted); ?>">
          <?php foreach ($kyss_visitor_digits as $digit): ?>
            <span class="odometer-digit-box"><?php echo htmlspecialchars($digit); ?></span>
          <?php endforeach; ?>
        </div>
        <div class="odometer-footnote">
          <i class="fa-solid fa-circle-check"></i> Official Real-time Visitor Counter
        </div>
      </div>

    </div>
  </div>
</section>
