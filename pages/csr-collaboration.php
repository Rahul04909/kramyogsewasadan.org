<?php
/**
 * pages/csr-collaboration.php
 * ============================================================
 * Karm Yog Sewa Sadan Trust — Corporate Social Responsibility
 * PAGE 18: CSR COLLABORATION
 * "Eligible under Companies Act with CSR-1 Registration"
 * ============================================================
 */

require_once __DIR__ . '/../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSR Collaboration | Karm Yog Sewa Sadan Trust</title>
  <meta name="description" content="Karm Yog Sewa Sadan Trust is eligible to receive CSR funding under the Companies Act and holds CSR-1 Certificate. Partner with us in senior welfare, healthcare, education, and livelihoods.">
  
  <!-- FontAwesome 6 CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/page-template.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  
  <style>
    body { background-color: #ffffff; }

    /* Statutory CSR Eligibility Highlight Box */
    .csr-compliance-banner {
      background: linear-gradient(135deg, #f0fdf4 0%, #e6f9ed 100%);
      border: 1.5px solid #86efac;
      border-radius: 10px;
      padding: 24px 28px;
      margin: 25px 0 35px 0;
      box-shadow: 0 4px 15px rgba(19, 163, 74, 0.06);
    }
    .csr-compliance-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 12px;
    }
    .csr-compliance-header i {
      font-size: 1.8rem;
      color: #13a34a;
    }
    .csr-compliance-header h3 {
      font-size: 1.25rem;
      font-weight: 800;
      color: #14532d;
      margin: 0;
    }
    .csr-compliance-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 15px;
      margin-top: 15px;
    }
    .csr-compliance-item {
      background: #ffffff;
      border: 1px solid #bbf7d0;
      border-radius: 8px;
      padding: 12px 16px;
      font-size: 13.5px;
      color: #166534;
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 600;
    }
    .csr-compliance-item i {
      color: #13a34a;
      font-size: 1.1rem;
    }

    /* Collaboration Pillars Grid */
    .csr-pillars-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin: 25px 0;
    }
    .csr-pillar-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-top: 4px solid #1b5182;
      border-radius: 10px;
      padding: 24px 22px;
      transition: all 0.3s ease;
      display: flex;
      flex-direction: column;
    }
    .csr-pillar-card:hover {
      box-shadow: 0 8px 25px rgba(27, 81, 130, 0.1);
      border-top-color: #13a34a;
      transform: translateY(-3px);
    }
    .csr-pillar-icon {
      width: 48px;
      height: 48px;
      border-radius: 10px;
      background: #eef5ff;
      color: #1b5182;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
      margin-bottom: 16px;
      transition: all 0.3s ease;
    }
    .csr-pillar-card:hover .csr-pillar-icon {
      background: #13a34a;
      color: #ffffff;
    }
    .csr-pillar-card h3 {
      font-size: 1.15rem;
      font-weight: 700;
      color: #1e293b;
      margin: 0 0 10px 0;
    }
    .csr-pillar-card p {
      font-size: 14px;
      color: #64748b;
      line-height: 1.6;
      margin: 0 0 14px 0;
      flex: 1;
    }
    .csr-pillar-tag {
      font-size: 12px;
      font-weight: 700;
      color: #1b5182;
      background: #eef5ff;
      padding: 4px 10px;
      border-radius: 4px;
      display: inline-block;
      align-self: flex-start;
    }

    /* Advantages Cards */
    .csr-advantage-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 16px;
      margin: 20px 0;
    }
    .csr-adv-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 18px 20px;
      display: flex;
      align-items: flex-start;
      gap: 12px;
    }
    .csr-adv-card i {
      color: #13a34a;
      font-size: 1.25rem;
      margin-top: 2px;
    }
    .csr-adv-card h4 {
      font-size: 0.95rem;
      font-weight: 700;
      color: #1e293b;
      margin: 0 0 4px 0;
    }
    .csr-adv-card p {
      font-size: 0.86rem;
      color: #64748b;
      line-height: 1.5;
      margin: 0;
    }

    /* CTA Section */
    .csr-cta-banner {
      background: #1b5182;
      color: #ffffff;
      border-radius: 10px;
      padding: 30px;
      margin-top: 30px;
      text-align: center;
    }
    .csr-cta-banner h3 {
      font-size: 1.4rem;
      font-weight: 800;
      color: #ffffff;
      margin: 0 0 10px 0;
    }
    .csr-cta-banner p {
      font-size: 15px;
      color: rgba(255, 255, 255, 0.85);
      max-width: 650px;
      margin: 0 auto 20px auto;
      line-height: 1.6;
    }
    .csr-cta-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: #13a34a;
      color: #ffffff;
      padding: 12px 28px;
      border-radius: 6px;
      font-weight: 700;
      font-size: 14.5px;
      text-decoration: none;
      transition: background 0.2s, transform 0.15s;
    }
    .csr-cta-btn:hover {
      background: #0f853b;
      transform: translateY(-2px);
    }
  </style>
</head>
<body class="page-body">

  <!-- Include Header Component -->
  <?php include '../includes/header.php'; ?>

  <!-- Page Hero Section -->
  <section class="initiative-hero" aria-label="CSR Banner">
    <div class="header-container">
      <nav class="initiative-breadcrumbs" aria-label="Breadcrumb">
        <a href="../index.php">Home</a>
        <span class="separator">></span>
        <a href="what-we-do.php">Get Involved</a>
        <span class="separator">></span>
        <span style="color: #ffffff;">CSR Collaboration</span>
      </nav>
      <h1 class="initiative-title">CSR Collaboration</h1>
    </div>
  </section>

  <!-- Main Content Layout Grid -->
  <main class="initiative-layout-grid">
    
    <!-- Left Column: Core Content -->
    <article class="initiative-main-content">
      
      <!-- Initiative Banner Image -->
      <div class="initiative-banner-wrapper">
        <img src="../assets/images/senior_care.png" alt="Corporate Social Responsibility welfare initiatives at Karm Yog Sewa Sadan Trust" class="initiative-main-img" loading="lazy">
      </div>

      <!-- Core Statement per Client Spec -->
      <section class="initiative-content-block">
        <h2>Empowering Communities Through Transparent CSR</h2>
        <p><strong>Karm Yog Sewa Sadan Trust</strong> welcomes discussions with organisations interested in supporting appropriate charitable and community development initiatives.</p>
        <p>Potential collaboration areas include senior citizen welfare, education, healthcare awareness, livelihood development and other activities consistent with the Trust's objectives.</p>
        <p>The Trust is eligible to receive CSR funding under the Companies Act and have <strong>CSR-1 Certificate</strong> issued by the Ministry of Corporate Affairs, Government of India.</p>
      </section>

      <!-- Statutory Compliance & Form CSR-1 Card -->
      <section class="csr-compliance-banner">
        <div class="csr-compliance-header">
          <i class="fa-solid fa-certificate"></i>
          <div>
            <h3>Statutory Eligibility & Compliance</h3>
            <span style="font-size: 13.5px; color: #15803d;">Fully verified and authorized under Indian statutory frameworks for CSR contributions</span>
          </div>
        </div>

        <div class="csr-compliance-grid">
          <div class="csr-compliance-item">
            <i class="fa-solid fa-file-shield"></i>
            <span>Form CSR-1 Certified (MCA Registered)</span>
          </div>
          <div class="csr-compliance-item">
            <i class="fa-solid fa-landmark"></i>
            <span>Indian Trust Act Registered (30 Dec 2025)</span>
          </div>
          <div class="csr-compliance-item">
            <i class="fa-solid fa-stamp"></i>
            <span>Trust Reg. No: 10394</span>
          </div>
          <div class="csr-compliance-item">
            <i class="fa-solid fa-scale-balanced"></i>
            <span>Companies Act 2013 (Section 135 Compliant)</span>
          </div>
        </div>
      </section>

      <!-- Potential Collaboration Areas per Client Spec -->
      <section class="initiative-content-block">
        <h2>Potential CSR Collaboration Areas</h2>
        <p>Corporates can direct their CSR investments towards structured, verifiable programs that match their social responsibility mandates and United Nations Sustainable Development Goals (SDGs):</p>

        <div class="csr-pillars-grid">
          
          <!-- 1. Senior Citizen Welfare -->
          <div class="csr-pillar-card">
            <div class="csr-pillar-icon"><i class="fa-solid fa-person-cane"></i></div>
            <h3>Senior Citizen Welfare & Residential Care</h3>
            <p>Sponsoring dignified residential shelter, 24/7 nursing supervision, geriatric hospital referrals, nutritious dining, and assistive living aids for destitute elders.</p>
            <span class="csr-pillar-tag">Schedule VII: Elder Care & Shelter</span>
          </div>

          <!-- 2. Healthcare Awareness -->
          <div class="csr-pillar-card">
            <div class="csr-pillar-icon"><i class="fa-solid fa-heart-pulse"></i></div>
            <h3>Healthcare & Medical Assistance</h3>
            <p>Organizing free community diagnostic camps, preventive health education, healthy ageing awareness sessions, and supply of essential diagnostic equipment.</p>
            <span class="csr-pillar-tag">Schedule VII: Preventive Healthcare</span>
          </div>

          <!-- 3. Education -->
          <div class="csr-pillar-card">
            <div class="csr-pillar-icon"><i class="fa-solid fa-school"></i></div>
            <h3>Education for Underprivileged Children</h3>
            <p>Supporting remedial classes, school kits, digital learning aids, and scholarships for children residing in urban slums and rural villages across Haryana.</p>
            <span class="csr-pillar-tag">Schedule VII: Promoting Education</span>
          </div>

          <!-- 4. Livelihood Development -->
          <div class="csr-pillar-card">
            <div class="csr-pillar-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
            <h3>Vocational Training & Livelihood Support</h3>
            <p>Establishing skill-building workshops, digital literacy modules, craft training, and enterprise seed support for youth, rural women, and eligible beneficiaries.</p>
            <span class="csr-pillar-tag">Schedule VII: Livelihood Enhancement</span>
          </div>

          <!-- 5. Disability Inclusion -->
          <div class="csr-pillar-card">
            <div class="csr-pillar-icon"><i class="fa-solid fa-wheelchair"></i></div>
            <h3>Disability Rehabilitation & Inclusion</h3>
            <p>Distributing mobility devices (wheelchairs, crutches, hearing aids), fostering accessible community spaces, and providing referral rehabilitation support.</p>
            <span class="csr-pillar-tag">Schedule VII: Differently Abled Welfare</span>
          </div>

          <!-- 6. Environmental Welfare -->
          <div class="csr-pillar-card">
            <div class="csr-pillar-icon"><i class="fa-solid fa-leaf"></i></div>
            <h3>Community Welfare & Sanitation</h3>
            <p>Supporting community cleanliness campaigns under Swachh Bharat principles, solid waste segregation, and tree plantation drives for environmental balance.</p>
            <span class="csr-pillar-tag">Schedule VII: Environmental Sustainability</span>
          </div>

        </div>
      </section>

      <!-- Why Corporates Partner With Us -->
      <section class="initiative-content-block">
        <h2>Why Corporates Partner with Karm Yog Sewa Sadan Trust</h2>
        
        <div class="csr-advantage-list">
          <div class="csr-adv-card">
            <i class="fa-solid fa-check-circle"></i>
            <div>
              <h4>Complete MCA Compliance</h4>
              <p>Form CSR-1 certified, rigorous statutory records, and full alignment with Schedule VII of the Companies Act.</p>
            </div>
          </div>

          <div class="csr-adv-card">
            <i class="fa-solid fa-chart-pie"></i>
            <div>
              <h4>Audited Milestone Reporting</h4>
              <p>Comprehensive fund utilization certificates, audited expense books, and verifiable beneficiary metrics.</p>
            </div>
          </div>

          <div class="csr-adv-card">
            <i class="fa-solid fa-users"></i>
            <div>
              <h4>Employee Engagement</h4>
              <p>Tailored volunteer days allowing corporate employees to visit ashrams, mentor youth, and participate on-ground.</p>
            </div>
          </div>

          <div class="csr-adv-card">
            <i class="fa-solid fa-eye"></i>
            <div>
              <h4>Zero Middlemen Transparency</h4>
              <p>Direct implementation on the ground ensuring every rupee invested creates genuine, measurable social impact.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- CSR Action Banner -->
      <div class="csr-cta-banner">
        <h3>Initiate a CSR Discussion Today</h3>
        <p>Our CSR committee works closely with corporate boards, sustainability heads, and CSR committees to draft customized project proposals, KPIs, and impact assessment matrices.</p>
        <a href="partner-with-us.php" class="csr-cta-btn">
          <i class="fa-solid fa-handshake"></i> Submit a Partnership Proposal
        </a>
      </div>

    </article>

    <!-- Right Column: Sidebar Widgets -->
    <aside class="initiative-sidebar">
      
      <!-- CSR Registration Details Card -->
      <section class="sidebar-cta-card">
        <h3>CSR Registration Desk</h3>
        <p><strong>Status:</strong> Eligible under Section 135 Companies Act<br><strong>Certificate:</strong> Form CSR-1 Registered<br><strong>Trust Reg. No:</strong> 10394</p>
        <a href="partner-with-us.php" class="sidebar-cta-button">Partner With Us</a>
      </section>

      <!-- Direct Contact for CSR Officers -->
      <section class="sidebar-nav-widget">
        <h3>CSR Communications</h3>
        <p style="font-size: 13px; color: #64748b; line-height: 1.6; margin-bottom: 14px;">
          Corporate representatives and CSR leads may directly contact our executive coordination office:
        </p>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13.5px; color: #334155;">
          <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-phone" style="color: #13a34a;"></i>
            <a href="tel:+919671413639" style="color: #1b5182; text-decoration: none; font-weight: 600;">+91 9671413639</a>
          </li>
          <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-phone" style="color: #13a34a;"></i>
            <a href="tel:+918396012089" style="color: #1b5182; text-decoration: none; font-weight: 600;">+91 8396012089</a>
          </li>
          <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-envelope" style="color: #13a34a;"></i>
            <a href="mailto:info@kramyogsewasadan.org" style="color: #1b5182; text-decoration: none; font-weight: 600; word-break: break-all;">info@kramyogsewasadan.org</a>
          </li>
          <li style="display: flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-envelope" style="color: #13a34a;"></i>
            <a href="mailto:karmyogsewasadan@gmail.com" style="color: #1b5182; text-decoration: none; font-weight: 600; word-break: break-all;">karmyogsewasadan@gmail.com</a>
          </li>
        </ul>
      </section>

      <!-- Trust Offices -->
      <section class="sidebar-nav-widget">
        <h3>Office Locations</h3>
        <p style="font-size: 13px; color: #64748b; line-height: 1.5; margin-bottom: 12px;">
          <strong>Registered Office:</strong><br>
          H. No. 58/5, Ground Floor, Bhagwan Nagar Colony, Near Police Line, Tehsil Thanesar, Kurukshetra, Haryana.
        </p>
        <p style="font-size: 13px; color: #64748b; line-height: 1.5; margin: 0;">
          <strong>Executive Office:</strong><br>
          518/1, Jatwada, Near Old Chungi No. 3, Ward – 1, Sonipat – 131001 (Haryana).
        </p>
      </section>

    </aside>

  </main>

  <!-- Include Footer Component -->
  <?php include '../includes/footer.php'; ?>

</body>
</html>
