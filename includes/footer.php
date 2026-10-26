<?php
// Calculate relative base url path dynamically to support inclusion in nested directories
$footer_base_url = '';
$request_uri = $_SERVER['REQUEST_URI'];
if (strpos($request_uri, 'kramyogsewasadan.org') !== false) {
    $footer_base_url = substr($request_uri, 0, strpos($request_uri, 'kramyogsewasadan.org') + strlen('kramyogsewasadan.org')) . '/';
} elseif (strpos($request_uri, 'gloabl-rise') !== false) {
    $footer_base_url = substr($request_uri, 0, strpos($request_uri, 'gloabl-rise') + strlen('gloabl-rise')) . '/';
} else {
    $footer_base_url = '/';
}

// Include official visitor counter engine
require_once __DIR__ . '/visitor-counter.php';
?>
<!-- Footer Component -->
<footer class="site-footer">
  <div class="header-container footer-grid">
    
    <!-- Column 1: Branding, Tagline, Socials & Bank Details -->
    <div class="footer-brand">
      <img src="<?php echo $footer_base_url; ?>assets/logo.png" alt="Kram Yog Sewa Sadan Logo" class="footer-brand-logo">
      <p class="footer-tagline"><strong>Karm Yog Sewa Sadan Trust</strong> — Serving Humanity with Dignity, Compassion and Commitment. Dedicated to senior citizen welfare, healthcare, education, and community inclusion.</p>
      
      <!-- Social Media Icons -->
      <div class="footer-socials">
        <a href="#" class="footer-social-link" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="footer-social-link" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#" class="footer-social-link" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="footer-social-link" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
        <a href="#" class="footer-social-link" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
      </div>

      <!-- Bank Details Card Box -->
      <div class="footer-bank-card">
        <div class="footer-bank-title"><i class="fa-solid fa-building-columns"></i> Bank Account Details</div>
        <div class="footer-bank-details">
          <div><span>A/C Name:</span> Karm Yog Sewa Sadan Trust</div>
          <div><span>Bank Name:</span> Punjab National Bank</div>
          <div><span>A/C No:</span> 1409102100002093</div>
          <div><span>IFSC Code:</span> PUNB014091</div>
          <div><span>Branch:</span> Sonipat, Haryana</div>
          <div><span>A/C Type:</span> Current Account</div>
        </div>
      </div>
    </div>

    <!-- Column 2: About Us Nav Links -->
    <div class="footer-nav-col">
      <h3>About Us</h3>
      <ul class="footer-links-list">
        <li><a href="<?php echo $footer_base_url; ?>pages/about-us.php" class="footer-link">About the Trust</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/about-us.php#objectives" class="footer-link">Objectives</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/vision-mission.php" class="footer-link">Mission, Vision &amp; Values</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/board-trustees.php" class="footer-link">Board of Trustees</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/certifications.php" class="footer-link">Trust Registration &amp; CSR</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/tax-exemption.php" class="footer-link">Tax Exemption (80G/12A)</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/donation-faqs.php" class="footer-link">Donation FAQs</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/terms-conditions.php" class="footer-link">Terms and Conditions</a></li>
      </ul>
    </div>

    <!-- Column 3: Our Work Nav Links -->
    <div class="footer-nav-col">
      <h3>Our Work</h3>
      <ul class="footer-links-list">
        <li><a href="<?php echo $footer_base_url; ?>pages/old-age-home.php" class="footer-link">Old Age Welfare</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/senior-citizen-care.php" class="footer-link">Residential Care</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/health-projects.php" class="footer-link">Healthcare &amp; & medical assistance</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/persons-with-disabilities.php" class="footer-link">Disability Inclusion</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/rural-children-education.php" class="footer-link">Education &amp; Scholarships</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/women-empowerment.php" class="footer-link">Women &amp; Family Welfare</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/swacch-bharat-mission.php" class="footer-link">Community Welfare</a></li>
        <li><a href="<?php echo $footer_base_url; ?>pages/animal-welfare.php" class="footer-link">Animal Welfare</a></li>
      </ul>
    </div>

    <!-- Column 4: Donate, Get in Touch & Get Involved -->
    <div class="footer-nav-col">
      <h3>Donate</h3>
      <ul class="footer-links-list">
        <li><a href="<?php echo $footer_base_url; ?>donate.php" class="footer-link">Online Donations</a></li>
        <li><a href="<?php echo $footer_base_url; ?>donate.php" class="footer-link">Senior Citizen Care</a></li>
        <li><a href="<?php echo $footer_base_url; ?>donate.php" class="footer-link">Disability Support</a></li>
      </ul>

      <h3 class="sub-heading">Get in Touch</h3>
      <ul class="footer-links-list">
        <li><a href="<?php echo $footer_base_url; ?>pages/contact-us.php" class="footer-link"><i class="fa-solid fa-location-dot" style="color: #13a34a;"></i> Kurukshetra &amp; Sonipat</a></li>
        <li><a href="tel:+919671413639" class="footer-link"><i class="fa-solid fa-phone" style="color: #13a34a;"></i> +91 9671413639</a></li>
        <li><a href="tel:+918396012089" class="footer-link"><i class="fa-solid fa-phone" style="color: #13a34a;"></i> +91 8396012089</a></li>
        <li><a href="mailto:info@kramyogsewasadan.org" class="footer-link" style="word-break: break-all;"><i class="fa-solid fa-envelope" style="color: #13a34a;"></i> info@kramyogsewasadan.org</a></li>
      </ul>

      <h3 class="sub-heading">Get Involved</h3>
      <ul class="footer-links-list">
        <li><a href="<?php echo $footer_base_url; ?>volunteer.php" class="footer-link">Join as Volunteer</a></li>
      </ul>
    </div>

    <!-- Column 5: Certifications & Donation QR -->
    <div class="footer-certifications">
      <a href="<?php echo $footer_base_url; ?>pages/certifications.php">
        <img src="<?php echo $footer_base_url; ?>assets/GPTW_Logo.png" alt="Great Place to Work Certified" class="gptw-logo-img" loading="lazy">
      </a>
      <div style="margin-top: 10px; text-align: center;">
        <a href="<?php echo $footer_base_url; ?>pages/certifications.php" class="footer-link" style="font-weight: 700; color: #1b5182; font-size: 13px; display: inline-flex; align-items: center; gap: 5px;">
          <i class="fa-solid fa-award"></i> View All Certifications <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <!-- QR Code for UPI Donations -->
      <div class="footer-qr-card">
        <div class="footer-qr-header">
          <i class="fa-solid fa-qrcode"></i> Scan to Donate
        </div>
        <a href="<?php echo $footer_base_url; ?>assets/images/qr.jpeg" target="_blank" title="Scan or Click to view QR Code">
          <img src="<?php echo $footer_base_url; ?>assets/images/qr.jpeg" alt="UPI Scan and Pay QR Code - Kram Yog Sewa Sadan" class="footer-qr-img" loading="lazy">
        </a>
        <div class="footer-qr-subtext">UPI: 9671413639m@pnb</div>
      </div>
    </div>

  </div>

  <!-- Copyright and Charity Info Bar -->
  <div class="footer-info-bar">
    <div class="header-container">
      <span>Trust Reg No : 10394 | PAN : AAGTK3826Q</span>
      <span class="footer-visitor-counter"><i class="fa-solid fa-chart-line"></i> Total Visitors: <strong><?php echo htmlspecialchars($kyss_visitor_count_formatted); ?></strong></span>
      <span>Kram Yog Sewa Sadan &copy; 2026 | A Website Designed By <a href="#" target="_blank" style="color: #666666; text-decoration: none; font-weight: 600;" onmouseover="this.style.color='#1b5182'" onmouseout="this.style.color='#666666'">Rahul Dhiman | +91 80599 82049</a></span>
    </div>
  </div>

  <!-- Silhouette Illustration strip (full-width bottom) -->
  <div class="footer-silhouette" style="background-image: url('<?php echo $footer_base_url; ?>assets/footer_bg.png');">
    <!-- Floating WhatsApp Contact Button -->
    <a href="https://wa.me/919671413639" class="whatsapp-float-btn" target="_blank" rel="noopener noreferrer" aria-label="Chat with Kram Yog Sewa Sadan on WhatsApp">
      <i class="fa-brands fa-whatsapp"></i>
    </a>
  </div>
</footer>
