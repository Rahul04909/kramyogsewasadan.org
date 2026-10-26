<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Old Age Welfare | Karm Yog Sewa Sadan Trust</title>
  <meta name="description" content="Respecting Age. Supporting Dignity. Caring for Our Elders. Karm Yog Sewa Sadan Trust promotes the welfare and dignity of senior citizens through care, shelter, and medical support.">
  
  <!-- FontAwesome 6 CDN for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/page-template.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  
  <style>
    body { background-color: #ffffff; }
    .welfare-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-left: 4px solid #1b5182;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      transition: all 0.25s ease;
    }
    .welfare-card:hover {
      box-shadow: 0 4px 15px rgba(27, 81, 130, 0.08);
      border-color: #cbd5e1;
    }
    .welfare-card h3 {
      font-size: 1.15rem;
      font-weight: 700;
      color: #1b5182;
      margin: 0 0 10px 0;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .welfare-card h3 i {
      color: #13a34a;
    }
    .welfare-list {
      margin: 0;
      padding-left: 20px;
      color: #475569;
      line-height: 1.65;
    }
    .welfare-list li {
      margin-bottom: 6px;
    }
  </style>
</head>
<body class="page-body">

  <!-- Include Header Component -->
  <?php include '../includes/header.php'; ?>

  <!-- Page Hero Section -->
  <section class="initiative-hero" aria-label="Initiative Banner">
    <div class="header-container">
      <nav class="initiative-breadcrumbs" aria-label="Breadcrumb">
        <a href="../index.php">Home</a>
        <span class="separator">></span>
        <a href="what-we-do.php">Our Services</a>
        <span class="separator">></span>
        <span style="color: #ffffff;">Old Age Welfare</span>
      </nav>
      <h1 class="initiative-title">Old Age Welfare</h1>
    </div>
  </section>

  <!-- Main Content Layout Grid -->
  <main class="initiative-layout-grid">
    
    <!-- Left Column: Core Content -->
    <article class="initiative-main-content">
      
      <!-- Initiative Banner Image -->
      <div class="initiative-banner-wrapper">
        <img src="../assets/images/senior_care.png" alt="Senior citizens receiving care and companionship through Karm Yog Sewa Sadan Trust" class="initiative-main-img" loading="lazy">
      </div>

      <section class="initiative-content-block">
        <h2>Respecting Age. Supporting Dignity. Caring for Our Elders.</h2>
        <p><strong>Karm Yog Sewa Sadan Trust</strong> seeks to promote the welfare and dignity of older persons through charitable initiatives focused on care, support, health awareness, social engagement and assistance for those facing economic or social hardship.</p>
        <p>The objectives relating to old-age homes, senior citizen care centres, shelter, food, clothing, healthcare awareness and social well-being form the cornerstone of our dedicated elder care programs.</p>
      </section>

      <!-- Our Programs Section per Client Spec -->
      <section class="initiative-content-block">
        <h2>Our Programs</h2>
        
        <!-- A. Senior Citizen Welfare -->
        <div class="welfare-card">
          <h3><i class="fa-solid fa-hands-holding-child"></i> A. Senior Citizen Welfare</h3>
          <ul class="welfare-list">
            <li>Awareness about the needs and rights of older persons.</li>
            <li>Community engagement and social participation.</li>
            <li>Support initiatives for eligible older persons.</li>
          </ul>
        </div>

        <!-- B. Residential Care -->
        <div class="welfare-card">
          <h3><i class="fa-solid fa-house-chimney-heart"></i> B. Residential Care</h3>
          <ul class="welfare-list">
            <li>Information about residential services, where operational.</li>
            <li>Facilities and support provided.</li>
            <li>Eligibility and admission procedure.</li>
            <li>Family contact and grievance procedure.</li>
          </ul>
        </div>

        <!-- C. Health and Well-being -->
        <div class="welfare-card">
          <h3><i class="fa-solid fa-heart-pulse"></i> C. Health and Well-being</h3>
          <ul class="welfare-list">
            <li>Health awareness.</li>
            <li>Periodic check-up initiatives.</li>
            <li>Geriatric health education.</li>
            <li>Appropriate medical referrals.</li>
          </ul>
        </div>

        <!-- D. Social and Recreational Activities -->
        <div class="welfare-card">
          <h3><i class="fa-solid fa-person-walking"></i> D. Social and Recreational Activities</h3>
          <ul class="welfare-list">
            <li>Cultural programmes.</li>
            <li>Yoga and meditation activities, where appropriate.</li>
            <li>Reading, recreation and community engagement.</li>
          </ul>
        </div>

      </section>

      <div class="initiative-quote-box">
        <p>“To care for those who once cared for us is one of the highest honors. Karm Yog Sewa Sadan Trust is committed to making sure every elder spends their golden years with love, dignity and care.”</p>
      </div>

    </article>

    <!-- Right Column: Sidebar Widgets -->
    <aside class="initiative-sidebar">
      
      <!-- Donation Appeal Card -->
      <section class="sidebar-cta-card">
        <h3>Support Elderly Care</h3>
        <p>Your contribution helps provide nutritious meals, shelter, and medical care for vulnerable senior citizens.</p>
        <a href="../donate.php" class="sidebar-cta-button">Donate Now</a>
      </section>

      <!-- Sidebar Navigation Menu -->
      <nav class="sidebar-links-card" aria-label="Other Causes Links">
        <h3>Our Services</h3>
        <ul class="sidebar-links-list">
          <li><a href="senior-citizen-care.php" style="color: #1b5182; font-weight: 700;"><i class="fa-solid fa-angle-right"></i> Old Age Welfare</a></li>
          <li><a href="old-age-home.php"><i class="fa-solid fa-angle-right"></i> Residential Care</a></li>
          <li><a href="health-projects.php"><i class="fa-solid fa-angle-right"></i> Healthcare Assistance</a></li>
          <li><a href="persons-with-disabilities.php"><i class="fa-solid fa-angle-right"></i> Disability Rehabilitation</a></li>
          <li><a href="vocational-training.php"><i class="fa-solid fa-angle-right"></i> Vocational Training</a></li>
          <li><a href="women-empowerment.php"><i class="fa-solid fa-angle-right"></i> Women & Family Welfare</a></li>
          <li><a href="rural-children-education.php"><i class="fa-solid fa-angle-right"></i> Rural Children Education</a></li>
          <li><a href="swacch-bharat-mission.php"><i class="fa-solid fa-angle-right"></i> Community Welfare</a></li>
        </ul>
      </nav>

    </aside>

  </main>

  <!-- Include Footer Component -->
  <?php include '../includes/footer.php'; ?>

</body>
</html>
