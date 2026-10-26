<?php
// Calculate relative base url path dynamically to support inclusion in nested directories
$base_url = '';
$request_uri = $_SERVER['REQUEST_URI'];
if (strpos($request_uri, 'kramyogsewasadan.org') !== false) {
    $base_url = substr($request_uri, 0, strpos($request_uri, 'kramyogsewasadan.org') + strlen('kramyogsewasadan.org')) . '/';
} elseif (strpos($request_uri, 'gloabl-rise') !== false) {
    $base_url = substr($request_uri, 0, strpos($request_uri, 'gloabl-rise') + strlen('gloabl-rise')) . '/';
} else {
    $base_url = '/';
}

// Include official visitor counter engine
require_once __DIR__ . '/visitor-counter.php';
?>
<!-- Header Component -->
<header class="site-header">
  <!-- 1. TOP UTILITY BAR (Desktop only, responsive hidden) -->
  <div class="top-bar">
    <div class="header-container">
      <a href="mailto:karmyogsewasadan@gmail.com" class="top-bar-item">
        <i class="fa-solid fa-envelope"></i>
        karmyogsewasadan@gmail.com
      </a>
      <a href="tel:+919671413639" class="top-bar-item">
        <i class="fa-solid fa-phone"></i>
        +91 9671413639
      </a>
      <a href="tel:+918396012089" class="top-bar-item">
        <i class="fa-solid fa-phone"></i>
        +91 8396012089
      </a>
      <div class="top-bar-visitor-badge" title="Official Verified Visitors">
        <i class="fa-solid fa-eye"></i> Visitors: <strong><?php echo htmlspecialchars($kyss_visitor_count_formatted); ?></strong>
      </div>
    </div>
  </div>

  <!-- 2. MAIN NAVIGATION BAR -->
  <div class="main-header">
    <div class="header-container main-nav-bar">
      <!-- Logo Image -->
      <a href="<?php echo $base_url; ?>index.php" class="logo-link" aria-label="Kram Yog Seva Sadan Home">
        <img src="<?php echo $base_url; ?>assets/logo.png" alt="Kram Yog Seva Sadan Logo" class="logo-img">
      </a>

      <!-- Desktop Nav Links with Dropdowns -->
      <ul class="nav-menu">
        <!-- 1. Home -->
        <li><a href="<?php echo $base_url; ?>index.php" class="nav-link">Home</a></li>

        <!-- 2. About Us -->
        <li class="nav-item-dropdown">
          <a href="<?php echo $base_url; ?>pages/about-us.php" class="nav-link has-dropdown">
            About Us <i class="fa-solid fa-chevron-down dropdown-caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url; ?>pages/about-us.php" class="dropdown-item">About the Trust</a></li>
            <li><a href="<?php echo $base_url; ?>pages/vision-mission.php" class="dropdown-item">Mission &amp; Vision</a></li>
            <li><a href="<?php echo $base_url; ?>pages/about-us.php#objectives" class="dropdown-item">Objectives</a></li>
            <li><a href="<?php echo $base_url; ?>index.php#founderMessage" class="dropdown-item">Founder’s Message</a></li>
            <li><a href="<?php echo $base_url; ?>pages/board-trustees.php" class="dropdown-item">Board of Trustees</a></li>
            <li><a href="<?php echo $base_url; ?>pages/board-trustees.php" class="dropdown-item">Our Team</a></li>
          </ul>
        </li>

        <!-- 3. Our Services -->
        <li class="nav-item-dropdown">
          <a href="<?php echo $base_url; ?>pages/what-we-do.php" class="nav-link has-dropdown">
            Our Services <i class="fa-solid fa-chevron-down dropdown-caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url; ?>pages/old-age-home.php" class="dropdown-item">Old Age Welfare</a></li>
            <li><a href="<?php echo $base_url; ?>pages/senior-citizen-care.php" class="dropdown-item">Residential Care</a></li>
            <li><a href="<?php echo $base_url; ?>pages/health-projects.php" class="dropdown-item">Health &amp; Rehabilitation</a></li>
            <li><a href="<?php echo $base_url; ?>pages/how-to-help.php" class="dropdown-item">Food &amp; Clothing Support</a></li>
            <li><a href="<?php echo $base_url; ?>pages/rural-children-education.php" class="dropdown-item">Education &amp; Scholarships</a></li>
            <li><a href="<?php echo $base_url; ?>pages/women-empowerment.php" class="dropdown-item">Women &amp; Family Welfare</a></li>
            <li><a href="<?php echo $base_url; ?>pages/what-we-do.php" class="dropdown-item">Community Welfare</a></li>
          </ul>
        </li>

        <!-- 4. Our Initiatives -->
        <li class="nav-item-dropdown">
          <a href="<?php echo $base_url; ?>pages/what-we-do.php" class="nav-link has-dropdown">
            Our Initiatives <i class="fa-solid fa-chevron-down dropdown-caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url; ?>pages/senior-citizen-care.php" class="dropdown-item">Senior Citizen Welfare</a></li>
            <li><a href="<?php echo $base_url; ?>pages/persons-with-disabilities.php" class="dropdown-item">Disability Inclusion</a></li>
            <li><a href="<?php echo $base_url; ?>pages/educating-slum-children.php" class="dropdown-item">Education for All</a></li>
            <li><a href="<?php echo $base_url; ?>pages/health-projects.php" class="dropdown-item">Health Awareness</a></li>
            <li><a href="<?php echo $base_url; ?>pages/what-we-do.php" class="dropdown-item">Social Harmony</a></li>
            <li><a href="<?php echo $base_url; ?>pages/swacch-bharat-mission.php" class="dropdown-item">Environmental Protection</a></li>
          </ul>
        </li>

        <!-- 5. Our Impact -->
        <li class="nav-item-dropdown">
          <a href="<?php echo $base_url; ?>pages/impact-reports.php" class="nav-link has-dropdown">
            Our Impact <i class="fa-solid fa-chevron-down dropdown-caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url; ?>pages/impact-reports.php" class="dropdown-item">Achievements</a></li>
            <li><a href="<?php echo $base_url; ?>pages/impact-reports.php" class="dropdown-item">Success Stories</a></li>
            <li><a href="<?php echo $base_url; ?>pages/news-stories.php" class="dropdown-item">Community Outreach</a></li>
            <li><a href="<?php echo $base_url; ?>pages/impact-reports.php" class="dropdown-item">Annual Impact Reports</a></li>
          </ul>
        </li>

        <!-- 6. Get Involved -->
        <li class="nav-item-dropdown">
          <a href="<?php echo $base_url; ?>volunteer.php" class="nav-link has-dropdown">
            Get Involved <i class="fa-solid fa-chevron-down dropdown-caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url; ?>donate.php" class="dropdown-item">Donate</a></li>
            <li><a href="<?php echo $base_url; ?>volunteer.php" class="dropdown-item">Volunteer</a></li>
            <li><a href="<?php echo $base_url; ?>volunteer.php" class="dropdown-item">Become a Member</a></li>
            <li><a href="<?php echo $base_url; ?>pages/how-to-help.php" class="dropdown-item">Partner With Us</a></li>
            <li><a href="<?php echo $base_url; ?>pages/certifications.php#csr" class="dropdown-item">Corporate Social Responsibility (CSR)</a></li>
          </ul>
        </li>

        <!-- 7. News & Media -->
        <li class="nav-item-dropdown">
          <a href="<?php echo $base_url; ?>pages/blogs.php" class="nav-link has-dropdown">
            News &amp; Media <i class="fa-solid fa-chevron-down dropdown-caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url; ?>pages/blogs.php" class="dropdown-item">News</a></li>
            <li><a href="<?php echo $base_url; ?>pages/blogs.php" class="dropdown-item">Events</a></li>
            <li><a href="<?php echo $base_url; ?>index.php#groundGallery" class="dropdown-item">Photo Gallery</a></li>
            <li><a href="<?php echo $base_url; ?>pages/news-stories.php" class="dropdown-item">Video Gallery</a></li>
            <li><a href="<?php echo $base_url; ?>pages/news-stories.php" class="dropdown-item">Press Releases</a></li>
          </ul>
        </li>

        <!-- 8. Resources -->
        <li class="nav-item-dropdown">
          <a href="<?php echo $base_url; ?>pages/impact-reports.php" class="nav-link has-dropdown">
            Resources <i class="fa-solid fa-chevron-down dropdown-caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url; ?>pages/impact-reports.php" class="dropdown-item">Publications</a></li>
            <li><a href="<?php echo $base_url; ?>pages/how-to-help.php" class="dropdown-item">Awareness Materials</a></li>
            <li><a href="<?php echo $base_url; ?>pages/rural-children-education.php" class="dropdown-item">Educational Resources</a></li>
            <li><a href="<?php echo $base_url; ?>pages/donation-faqs.php" class="dropdown-item">Useful Links</a></li>
          </ul>
        </li>

        <!-- 9. Transparency -->
        <li class="nav-item-dropdown">
          <a href="<?php echo $base_url; ?>pages/certifications.php" class="nav-link has-dropdown">
            Transparency <i class="fa-solid fa-chevron-down dropdown-caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url; ?>pages/certifications.php" class="dropdown-item">Trust Registration</a></li>
            <li><a href="<?php echo $base_url; ?>pages/board-trustees.php" class="dropdown-item">Governance</a></li>
            <li><a href="<?php echo $base_url; ?>pages/impact-reports.php" class="dropdown-item">Financial Reports</a></li>
            <li><a href="<?php echo $base_url; ?>pages/impact-reports.php" class="dropdown-item">Annual Reports</a></li>
            <li><a href="<?php echo $base_url; ?>pages/terms-conditions.php" class="dropdown-item">Policies</a></li>
          </ul>
        </li>

        <!-- 10. Contact Us -->
        <li class="nav-item-dropdown">
          <a href="<?php echo $base_url; ?>pages/contact-us.php" class="nav-link has-dropdown">
            Contact Us <i class="fa-solid fa-chevron-down dropdown-caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url; ?>pages/contact-us.php" class="dropdown-item">Contact Details</a></li>
            <li><a href="<?php echo $base_url; ?>pages/contact-us.php#contactForm" class="dropdown-item">Enquiry Form</a></li>
            <li><a href="<?php echo $base_url; ?>pages/contact-us.php" class="dropdown-item">Location</a></li>
            <li><a href="<?php echo $base_url; ?>pages/contact-us.php" class="dropdown-item">Grievance Contact</a></li>
          </ul>
        </li>
      </ul>

      <!-- Desktop Action Buttons: Donate Now | Volunteer | Contact Us -->
      <div class="nav-actions">
        <a href="<?php echo $base_url; ?>donate.php" class="btn-header btn-donate">Donate Now</a>
        <a href="<?php echo $base_url; ?>volunteer.php" class="btn-header btn-login">Volunteer</a>
        <a href="<?php echo $base_url; ?>pages/contact-us.php" class="btn-header btn-contact-header">Contact Us</a>
      </div>

      <!-- Hamburger Menu (Mobile/Tablet Toggle) -->
      <button class="hamburger" id="hamburgerBtn" aria-label="Toggle Navigation Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>

  <!-- 3. MOBILE NAVIGATION DRAWER -->
  <div class="drawer-overlay" id="drawerOverlay"></div>
  <div class="mobile-drawer" id="mobileDrawer">
    <div class="mobile-drawer-header">
      <!-- Mobile Drawer Logo -->
      <a href="<?php echo $base_url; ?>index.php" class="logo-link" aria-label="Kram Yog Seva Sadan Home">
        <img src="<?php echo $base_url; ?>assets/logo.png" alt="Kram Yog Seva Sadan Logo" class="logo-img mobile-logo-img">
      </a>
      <button class="drawer-close-btn" id="closeDrawerBtn" aria-label="Close Menu">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>

    <!-- Mobile Nav Links with Accordions -->
    <ul class="mobile-nav-links">
      <li><a href="<?php echo $base_url; ?>index.php" class="mobile-nav-link">Home</a></li>

      <li>
        <div class="mobile-dropdown-toggle mobile-nav-link">
          <span>About Us</span> <i class="fa-solid fa-chevron-down"></i>
        </div>
        <ul class="mobile-submenu">
          <li><a href="<?php echo $base_url; ?>pages/about-us.php" class="mobile-sub-link">About the Trust</a></li>
          <li><a href="<?php echo $base_url; ?>pages/vision-mission.php" class="mobile-sub-link">Mission &amp; Vision</a></li>
          <li><a href="<?php echo $base_url; ?>pages/about-us.php#objectives" class="mobile-sub-link">Objectives</a></li>
          <li><a href="<?php echo $base_url; ?>index.php#founderMessage" class="mobile-sub-link">Founder’s Message</a></li>
          <li><a href="<?php echo $base_url; ?>pages/board-trustees.php" class="mobile-sub-link">Board of Trustees</a></li>
        </ul>
      </li>

      <li>
        <div class="mobile-dropdown-toggle mobile-nav-link">
          <span>Our Services</span> <i class="fa-solid fa-chevron-down"></i>
        </div>
        <ul class="mobile-submenu">
          <li><a href="<?php echo $base_url; ?>pages/old-age-home.php" class="mobile-sub-link">Old Age Welfare</a></li>
          <li><a href="<?php echo $base_url; ?>pages/senior-citizen-care.php" class="mobile-sub-link">Residential Care</a></li>
          <li><a href="<?php echo $base_url; ?>pages/health-projects.php" class="mobile-sub-link">Health &amp; Rehabilitation</a></li>
          <li><a href="<?php echo $base_url; ?>pages/how-to-help.php" class="mobile-sub-link">Food &amp; Clothing Support</a></li>
          <li><a href="<?php echo $base_url; ?>pages/rural-children-education.php" class="mobile-sub-link">Education &amp; Scholarships</a></li>
          <li><a href="<?php echo $base_url; ?>pages/women-empowerment.php" class="mobile-sub-link">Women &amp; Family Welfare</a></li>
        </ul>
      </li>

      <li>
        <div class="mobile-dropdown-toggle mobile-nav-link">
          <span>Our Initiatives</span> <i class="fa-solid fa-chevron-down"></i>
        </div>
        <ul class="mobile-submenu">
          <li><a href="<?php echo $base_url; ?>pages/senior-citizen-care.php" class="mobile-sub-link">Senior Citizen Welfare</a></li>
          <li><a href="<?php echo $base_url; ?>pages/persons-with-disabilities.php" class="mobile-sub-link">Disability Inclusion</a></li>
          <li><a href="<?php echo $base_url; ?>pages/educating-slum-children.php" class="mobile-sub-link">Education for All</a></li>
          <li><a href="<?php echo $base_url; ?>pages/health-projects.php" class="mobile-sub-link">Health Awareness</a></li>
          <li><a href="<?php echo $base_url; ?>pages/swacch-bharat-mission.php" class="mobile-sub-link">Environmental Protection</a></li>
        </ul>
      </li>

      <li>
        <div class="mobile-dropdown-toggle mobile-nav-link">
          <span>Our Impact</span> <i class="fa-solid fa-chevron-down"></i>
        </div>
        <ul class="mobile-submenu">
          <li><a href="<?php echo $base_url; ?>pages/impact-reports.php" class="mobile-sub-link">Achievements &amp; Success Stories</a></li>
          <li><a href="<?php echo $base_url; ?>pages/news-stories.php" class="mobile-sub-link">Community Outreach</a></li>
          <li><a href="<?php echo $base_url; ?>pages/impact-reports.php" class="mobile-sub-link">Annual Impact Reports</a></li>
        </ul>
      </li>

      <li>
        <div class="mobile-dropdown-toggle mobile-nav-link">
          <span>Get Involved</span> <i class="fa-solid fa-chevron-down"></i>
        </div>
        <ul class="mobile-submenu">
          <li><a href="<?php echo $base_url; ?>donate.php" class="mobile-sub-link">Donate</a></li>
          <li><a href="<?php echo $base_url; ?>volunteer.php" class="mobile-sub-link">Volunteer</a></li>
          <li><a href="<?php echo $base_url; ?>pages/how-to-help.php" class="mobile-sub-link">Partner With Us</a></li>
          <li><a href="<?php echo $base_url; ?>pages/certifications.php#csr" class="mobile-sub-link">CSR Collaboration</a></li>
        </ul>
      </li>

      <li>
        <div class="mobile-dropdown-toggle mobile-nav-link">
          <span>News &amp; Media</span> <i class="fa-solid fa-chevron-down"></i>
        </div>
        <ul class="mobile-submenu">
          <li><a href="<?php echo $base_url; ?>pages/blogs.php" class="mobile-sub-link">News &amp; Events</a></li>
          <li><a href="<?php echo $base_url; ?>index.php#groundGallery" class="mobile-sub-link">Photo Gallery</a></li>
          <li><a href="<?php echo $base_url; ?>pages/news-stories.php" class="mobile-sub-link">Video Gallery &amp; Press</a></li>
        </ul>
      </li>

      <li>
        <div class="mobile-dropdown-toggle mobile-nav-link">
          <span>Transparency</span> <i class="fa-solid fa-chevron-down"></i>
        </div>
        <ul class="mobile-submenu">
          <li><a href="<?php echo $base_url; ?>pages/certifications.php" class="mobile-sub-link">Trust Registration</a></li>
          <li><a href="<?php echo $base_url; ?>pages/board-trustees.php" class="mobile-sub-link">Governance</a></li>
          <li><a href="<?php echo $base_url; ?>pages/impact-reports.php" class="mobile-sub-link">Financial Reports</a></li>
          <li><a href="<?php echo $base_url; ?>pages/terms-conditions.php" class="mobile-sub-link">Policies</a></li>
        </ul>
      </li>

      <li><a href="<?php echo $base_url; ?>pages/contact-us.php" class="mobile-nav-link">Contact Us</a></li>
    </ul>

    <!-- Mobile Action Buttons -->
    <div class="mobile-nav-actions" style="display: flex; flex-direction: column; gap: 8px;">
      <a href="<?php echo $base_url; ?>donate.php" class="btn-header btn-donate" style="width: 100%;">Donate Now</a>
      <a href="<?php echo $base_url; ?>volunteer.php" class="btn-header btn-login" style="width: 100%;">Volunteer</a>
      <a href="<?php echo $base_url; ?>pages/contact-us.php" class="btn-header btn-contact-header" style="width: 100%;">Contact Us</a>
    </div>

    <div class="mobile-drawer-divider"></div>

    <!-- Mobile Utilities (Top Bar items merged here) -->
    <div class="mobile-utilities">
      <a href="mailto:karmyogsewasadan@gmail.com" class="mobile-utility-item">
        <i class="fa-solid fa-envelope"></i>
        karmyogsewasadan@gmail.com
      </a>
      <a href="tel:+919671413639" class="mobile-utility-item">
        <i class="fa-solid fa-phone"></i>
        +91 9671413639
      </a>
      <a href="tel:+918396012089" class="mobile-utility-item">
        <i class="fa-solid fa-phone"></i>
        +91 8396012089
      </a>
    </div>
  </div>
</header>

<!-- JavaScript for Mobile Responsiveness & Drawer Functionality -->
<script>
  // 1. Dynamic Favicon Injection into <head>
  (function() {
    const faviconHref = "<?php echo $base_url; ?>favicon.png";
    let link = document.querySelector("link[rel~='icon']");
    if (!link) {
      link = document.createElement('link');
      link.rel = 'icon';
      link.type = 'image/png';
      document.head.appendChild(link);
    }
    link.href = faviconHref;
  })();

  document.addEventListener('DOMContentLoaded', function() {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const closeDrawerBtn = document.getElementById('closeDrawerBtn');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const drawerOverlay = document.getElementById('drawerOverlay');

    // Function to open drawer
    function openDrawer() {
      mobileDrawer.classList.add('open');
      drawerOverlay.classList.add('active');
      document.body.classList.add('drawer-open');
    }

    // Function to close drawer
    function closeDrawer() {
      mobileDrawer.classList.remove('open');
      drawerOverlay.classList.remove('active');
      document.body.classList.remove('drawer-open');
    }

    // Event listeners
    if (hamburgerBtn) hamburgerBtn.addEventListener('click', openDrawer);
    if (closeDrawerBtn) closeDrawerBtn.addEventListener('click', closeDrawer);
    if (drawerOverlay) drawerOverlay.addEventListener('click', closeDrawer);

    // Mobile submenu accordion
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(function(toggle) {
      toggle.addEventListener('click', function(e) {
        e.preventDefault();
        const submenu = this.nextElementSibling;
        if (submenu) {
          submenu.classList.toggle('open');
          const icon = this.querySelector('i');
          if (icon) {
            icon.classList.toggle('fa-chevron-up');
            icon.classList.toggle('fa-chevron-down');
          }
        }
      });
    });

  });
</script>
