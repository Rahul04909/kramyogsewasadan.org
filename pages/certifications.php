<?php
/**
 * pages/certifications.php
 * ============================================================
 * Official Certifications, Legal Registrations & Accreditations
 * Kram Yog Sewa Sadan Trust
 * ============================================================
 */

// Define page details
$page_title       = "Legal Certifications & Accreditations | Kram Yog Sewa Sadan";
$meta_description = "Explore and download the official legal certificates, 12A registration, 80G tax exemption, MCA CSR-1, NGO Darpan, ISO certificate, and Trust deed of Kram Yog Sewa Sadan Trust.";
$canonical_url    = "https://kramyogsewasadan.org/pages/certifications.php";

// Array of official certificates & legal documents
$certificates = [
    [
        'id'          => 'cert-80g',
        'title'       => 'Section 80G Tax Exemption Approval',
        'category'    => 'tax',
        'authority'   => 'Income Tax Department, Govt. of India',
        'badge_class' => 'badge-incometax',
        'authority_short' => 'Income Tax Dept',
        'file_name'   => '07 80G.pdf',
        'file_type'   => 'PDF',
        'file_size'   => '245 KB',
        'is_image'    => false,
        'image_thumb' => '',
        'reg_number'  => 'Section 80G(5) Approval',
        'highlight'   => '50% Tax Deduction for Donors under Sec 80G',
        'description' => 'Official certification under Section 80G of the Income Tax Act, 1961. All eligible financial donations made by Indian taxpayers qualify for a 50% deduction from taxable income.',
        'download_name' => 'KYSS-80G-Tax-Exemption-Certificate.pdf'
    ],
    [
        'id'          => 'cert-12a',
        'title'       => 'Section 12A Registration Certificate',
        'category'    => 'tax',
        'authority'   => 'Income Tax Department, Govt. of India',
        'badge_class' => 'badge-incometax',
        'authority_short' => 'Income Tax Dept',
        'file_name'   => '06 12A.pdf',
        'file_type'   => 'PDF',
        'file_size'   => '240 KB',
        'is_image'    => false,
        'image_thumb' => '',
        'reg_number'  => 'Section 12A / 12AB Certified',
        'highlight'   => 'Official Non-Profit Charitable Trust Status',
        'description' => 'Statutory recognition granted under Section 12A/12AB of the Income Tax Act, certifying Kram Yog Sewa Sadan as a bonafide charitable entity dedicated to public welfare.',
        'download_name' => 'KYSS-12A-Registration-Certificate.pdf'
    ],
    [
        'id'          => 'cert-pan',
        'title'       => 'Income Tax PAN Card',
        'category'    => 'tax',
        'authority'   => 'Income Tax Department, Govt. of India',
        'badge_class' => 'badge-incometax',
        'authority_short' => 'Income Tax Dept',
        'file_name'   => 'kyss-trust-pan-card.jpeg',
        'file_type'   => 'JPEG',
        'file_size'   => '234 KB',
        'is_image'    => true,
        'image_thumb' => '../certificates/kyss-trust-pan-card.jpeg',
        'reg_number'  => 'PAN: AAGTK3826Q',
        'highlight'   => 'Incorporation Date: 31/12/2025',
        'description' => 'Permanent Account Number (PAN) issued to KARMYOG SEWA SADAN TRUST for transparent financial operations, banking compliance, and automated donor receipting.',
        'download_name' => 'KYSS-Trust-PAN-Card-AAGTK3826Q.jpeg'
    ],
    [
        'id'          => 'cert-csr',
        'title'       => 'MCA Form CSR-1 Registration',
        'category'    => 'govt',
        'authority'   => 'Ministry of Corporate Affairs (MCA), Govt. of India',
        'badge_class' => 'badge-mca',
        'authority_short' => 'MCA Govt of India',
        'file_name'   => '08 CSR Certificate.pdf',
        'file_type'   => 'PDF',
        'file_size'   => '292 KB',
        'is_image'    => false,
        'image_thumb' => '',
        'reg_number'  => 'Form CSR-1 Verified',
        'highlight'   => 'Eligible for Corporate CSR Funding & Grants',
        'description' => 'Official registration under Section 135 of the Companies Act, 2013, enabling public and private corporations to execute Corporate Social Responsibility (CSR) partnerships.',
        'download_name' => 'KYSS-CSR1-Registration-Certificate.pdf'
    ],
    [
        'id'          => 'cert-darpan',
        'title'       => 'NITI Aayog NGO Darpan Registration',
        'category'    => 'govt',
        'authority'   => 'NITI Aayog, Government of India',
        'badge_class' => 'badge-govt',
        'authority_short' => 'NITI Aayog',
        'file_name'   => '04-NGO-Darpan.pdf',
        'file_type'   => 'PDF',
        'file_size'   => '60.9 MB',
        'is_image'    => false,
        'image_thumb' => '',
        'reg_number'  => 'NITI Aayog Darpan Verified',
        'highlight'   => 'Official Portal Interface with Central Ministries',
        'description' => 'Official accreditation on the Government of India NITI Aayog NGO Darpan portal, verifying Kram Yog Sewa Sadan Trust as a trusted civil society organization.',
        'download_name' => 'KYSS-NGO-Darpan-Certificate.pdf'
    ],
    [
        'id'          => 'cert-eanudan',
        'title'       => 'e-Anudan Central Portal Registration',
        'category'    => 'govt',
        'authority'   => 'Ministry of Social Justice & Empowerment, Govt. of India',
        'badge_class' => 'badge-govt',
        'authority_short' => 'Govt Portal',
        'file_name'   => '05 E ANUDAN PDF KARMYOG.pdf',
        'file_type'   => 'PDF',
        'file_size'   => '2.7 MB',
        'is_image'    => false,
        'image_thumb' => '',
        'reg_number'  => 'e-Anudan Registered Entity',
        'highlight'   => 'Social Justice & Child Welfare Schemes',
        'description' => 'Registration on the central e-Anudan portal of the Government of India for executing welfare projects, grant implementations, and marginalized community aid.',
        'download_name' => 'KYSS-eAnudan-Registration.pdf'
    ],
    [
        'id'          => 'cert-trust-reg',
        'title'       => 'Official Trust Registration Certificate',
        'category'    => 'legal',
        'authority'   => 'Sub-Registrar, Govt. of Haryana (Thanesar)',
        'badge_class' => 'badge-trust',
        'authority_short' => 'Govt Registrar',
        'file_name'   => 'kyss-trust-certificate.jpeg',
        'file_type'   => 'JPEG',
        'file_size'   => '148 KB',
        'is_image'    => true,
        'image_thumb' => '../certificates/kyss-trust-certificate.jpeg',
        'reg_number'  => 'Reg Document No: 10394 | 31-12-2025',
        'highlight'   => 'Legally Constituted Public Charitable Trust',
        'description' => 'Official government certificate of registration issued by the Sub-Registrar, Thanesar, establishing Kram Yog Sewa Sadan as a registered public charitable trust under the Indian Registration Act.',
        'download_name' => 'KYSS-Trust-Registration-Certificate-10394.jpeg'
    ],
    [
        'id'          => 'cert-trust-deed',
        'title'       => 'Registered Trust Deed & Constitution',
        'category'    => 'legal',
        'authority'   => 'Registered under Registration Act, 1908',
        'badge_class' => 'badge-trust',
        'authority_short' => 'Legal Deed',
        'file_name'   => 'KARMYOG SEWA SADAN TRUST.pdf',
        'file_type'   => 'PDF',
        'file_size'   => '292 KB',
        'is_image'    => false,
        'image_thumb' => '',
        'reg_number'  => 'Governing Trust Constitution',
        'highlight'   => 'Official Bylaws, Board Structure & Objectives',
        'description' => 'Complete official Registered Trust Deed setting forth the non-profit objectives, ethical guidelines, trustee governance structure, and charitable mission.',
        'download_name' => 'KYSS-Registered-Trust-Deed.pdf'
    ],
    [
        'id'          => 'cert-iso',
        'title'       => 'ISO Quality Management Certification',
        'category'    => 'legal',
        'authority'   => 'International Organization for Standardization (ISO)',
        'badge_class' => 'badge-iso',
        'authority_short' => 'ISO Certified',
        'file_name'   => '09 ISO KYSS.pdf',
        'file_type'   => 'PDF',
        'file_size'   => '463 KB',
        'is_image'    => false,
        'image_thumb' => '',
        'reg_number'  => 'ISO Quality Accredited',
        'highlight'   => 'International Quality & Operational Standards',
        'description' => 'Certified compliance with internationally recognized quality management system standards, validating transparent social governance and operational excellence.',
        'download_name' => 'KYSS-ISO-Certificate.pdf'
    ],
    [
        'id'          => 'cert-brochure',
        'title'       => 'Official Organization Profile & Brochure',
        'category'    => 'publications',
        'authority'   => 'Kram Yog Sewa Sadan Trust',
        'badge_class' => 'badge-govt',
        'authority_short' => 'Official Publication',
        'file_name'   => 'KYSS Broucher.pdf',
        'file_type'   => 'PDF',
        'file_size'   => '1.2 MB',
        'is_image'    => false,
        'image_thumb' => '',
        'reg_number'  => 'Complete Organization Dossier',
        'highlight'   => 'Our Initiatives, Impact Stories & Mission Overview',
        'description' => 'Comprehensive illustrated booklet outlining our key programs in child education, hunger eradication, women empowerment, animal welfare, and grassroots development.',
        'download_name' => 'KYSS-Official-Brochure.pdf'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">
  
  <!-- OpenGraph Metadata -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:image" content="https://kramyogsewasadan.org/assets/logo.png">
  
  <!-- Twitter Card Metadata -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description); ?>">
  <meta name="twitter:image" content="https://kramyogsewasadan.org/assets/logo.png">

  <!-- FontAwesome 6 CDN for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Custom Stylesheets -->
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/page-template.css">
  <link rel="stylesheet" href="../assets/css/certifications.css">
  <link rel="stylesheet" href="../assets/css/footer.css">

  <!-- Schema.org Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "GovernmentPermit",
    "name": "Kram Yog Sewa Sadan Trust Accreditations and Certifications",
    "issuedBy": {
      "@type": "GovernmentOrganization",
      "name": "Government of India / Ministry of Corporate Affairs / Income Tax Department"
    },
    "validIn": {
      "@type": "Country",
      "name": "India"
    },
    "description": "Statutory registrations including Section 12A, Section 80G tax exemption, CSR-1, and NITI Aayog Darpan accreditation for Kram Yog Sewa Sadan Trust."
  }
  </script>
</head>
<body class="page-body">

  <!-- Include Header Component -->
  <?php include '../includes/header.php'; ?>

  <!-- Certifications Hero Banner -->
  <section class="cert-hero" aria-label="Legal Certifications Banner">
    <div class="header-container">
      <nav class="initiative-breadcrumbs" aria-label="Breadcrumb">
        <a href="../index.php">Home</a>
        <span class="separator">></span>
        <a href="about-us.php">Who We Are</a>
        <span class="separator">></span>
        <span style="color: #ffffff;">Certifications & Accreditations</span>
      </nav>

      <div class="cert-badge-ribbon">
        <i class="fa-solid fa-shield-check"></i> 100% Verified Non-Profit NGO &bull; Statutory Compliant
      </div>

      <h1 class="cert-hero-title">Legal Certifications & Accreditations</h1>
      <p class="cert-hero-subtitle">
        Transparency, accountability, and legal compliance are fundamental pillars of Kram Yog Sewa Sadan Trust. 
        Browse, verify, and download our official registration documents, tax exemption certificates, and government portal accreditations.
      </p>

      <!-- Key Accreditations Ribbon Grid -->
      <div class="cert-stats-grid">
        <div class="cert-stat-card">
          <div class="cert-stat-icon"><i class="fa-solid fa-receipt"></i></div>
          <div class="cert-stat-info">
            <h4>Section 80G</h4>
            <p>50% Tax Exemption</p>
          </div>
        </div>

        <div class="cert-stat-card">
          <div class="cert-stat-icon"><i class="fa-solid fa-file-contract"></i></div>
          <div class="cert-stat-info">
            <h4>Section 12A</h4>
            <p>Income Tax Registered</p>
          </div>
        </div>

        <div class="cert-stat-card">
          <div class="cert-stat-icon"><i class="fa-solid fa-handshake-angle"></i></div>
          <div class="cert-stat-info">
            <h4>MCA CSR-1</h4>
            <p>Eligible CSR Partner</p>
          </div>
        </div>

        <div class="cert-stat-card">
          <div class="cert-stat-icon"><i class="fa-solid fa-landmark"></i></div>
          <div class="cert-stat-info">
            <h4>NITI Aayog</h4>
            <p>NGO Darpan Portal</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Certifications Catalog Section -->
  <main class="cert-section">

    <!-- Category Filter Tabs -->
    <div class="cert-filter-container" role="tablist" aria-label="Filter certificates by category">
      <button class="cert-filter-btn active" data-filter="all" role="tab" aria-selected="true">
        <i class="fa-solid fa-border-all"></i> All Documents <span class="btn-count"><?php echo count($certificates); ?></span>
      </button>
      <button class="cert-filter-btn" data-filter="tax" role="tab" aria-selected="false">
        <i class="fa-solid fa-percent"></i> Tax & Exemption <span class="btn-count">3</span>
      </button>
      <button class="cert-filter-btn" data-filter="govt" role="tab" aria-selected="false">
        <i class="fa-solid fa-landmark"></i> Govt Accreditations <span class="btn-count">3</span>
      </button>
      <button class="cert-filter-btn" data-filter="legal" role="tab" aria-selected="false">
        <i class="fa-solid fa-scale-balanced"></i> Trust Legal & ISO <span class="btn-count">3</span>
      </button>
      <button class="cert-filter-btn" data-filter="publications" role="tab" aria-selected="false">
        <i class="fa-solid fa-book-open"></i> Brochure & Dossier <span class="btn-count">1</span>
      </button>
    </div>

    <!-- Certificate Cards Grid -->
    <div class="cert-grid" id="certGrid">
      <?php foreach ($certificates as $cert): ?>
        <?php 
          $file_web_path = '../certificates/' . rawurlencode($cert['file_name']);
        ?>
        <article class="cert-card" data-category="<?php echo htmlspecialchars($cert['category']); ?>" id="<?php echo htmlspecialchars($cert['id']); ?>">
          
          <!-- Card Header Strip -->
          <div class="cert-card-header">
            <span class="cert-authority-badge <?php echo htmlspecialchars($cert['badge_class']); ?>">
              <i class="fa-solid fa-certificate"></i> <?php echo htmlspecialchars($cert['authority_short']); ?>
            </span>
            <span class="cert-file-badge">
              <i class="fa-regular <?php echo $cert['is_image'] ? 'fa-image' : 'fa-file-pdf'; ?>" style="<?php echo $cert['is_image'] ? 'color:#1b5182;' : 'color:#dc2626;'; ?>"></i>
              <?php echo htmlspecialchars($cert['file_type']); ?> &bull; <?php echo htmlspecialchars($cert['file_size']); ?>
            </span>
          </div>

          <!-- Preview Thumbnail Area -->
          <div class="cert-preview-box" 
               tabindex="0" 
               role="button" 
               aria-label="Preview <?php echo htmlspecialchars($cert['title']); ?>"
               onclick="openCertModal('<?php echo htmlspecialchars($cert['title']); ?>', '<?php echo $file_web_path; ?>', <?php echo $cert['is_image'] ? 'true' : 'false'; ?>, '<?php echo htmlspecialchars($cert['download_name']); ?>')">
            
            <?php if ($cert['is_image']): ?>
              <img src="<?php echo htmlspecialchars($cert['image_thumb']); ?>" alt="<?php echo htmlspecialchars($cert['title']); ?> Preview" class="cert-preview-img" loading="lazy">
            <?php else: ?>
              <div class="cert-pdf-cover">
                <div class="cert-pdf-icon"><i class="fa-solid fa-file-pdf"></i></div>
                <div class="cert-pdf-label"><?php echo htmlspecialchars($cert['title']); ?></div>
                <div class="cert-pdf-size"><?php echo htmlspecialchars($cert['file_name']); ?></div>
              </div>
            <?php endif; ?>

            <div class="cert-hover-overlay">
              <span class="cert-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus"></i> Click to View</span>
            </div>
          </div>

          <!-- Card Content Body -->
          <div class="cert-card-body">
            <h2 class="cert-title"><?php echo htmlspecialchars($cert['title']); ?></h2>
            <div class="cert-meta-tag">
              <i class="fa-solid fa-circle-check"></i> <?php echo htmlspecialchars($cert['highlight']); ?>
            </div>
            
            <p class="cert-description">
              <?php echo htmlspecialchars($cert['description']); ?>
            </p>

            <div class="cert-key-details">
              <div class="cert-detail-row">
                <span class="cert-detail-label">Authority:</span>
                <span style="font-size:11.5px; color:#475569;"><?php echo htmlspecialchars($cert['authority']); ?></span>
              </div>
              <div class="cert-detail-row">
                <span class="cert-detail-label">Registration / Status:</span>
                <span class="cert-detail-value"><?php echo htmlspecialchars($cert['reg_number']); ?></span>
              </div>
            </div>
          </div>

          <!-- Card Action Buttons -->
          <div class="cert-card-actions">
            <button type="button" 
                    class="btn-cert-view" 
                    onclick="openCertModal('<?php echo htmlspecialchars($cert['title']); ?>', '<?php echo $file_web_path; ?>', <?php echo $cert['is_image'] ? 'true' : 'false'; ?>, '<?php echo htmlspecialchars($cert['download_name']); ?>')">
              <i class="fa-regular fa-eye"></i> View Online
            </button>
            <a href="<?php echo $file_web_path; ?>" 
               download="<?php echo htmlspecialchars($cert['download_name']); ?>" 
               class="btn-cert-download">
              <i class="fa-solid fa-arrow-down-to-bracket"></i> Download
            </a>
          </div>

        </article>
      <?php endforeach; ?>
    </div>

    <!-- Transparency & Government Portal Verification Guide -->
    <section class="cert-verify-banner" aria-label="Portal Verification Guide">
      <div class="cert-verify-header">
        <div class="cert-verify-icon"><i class="fa-solid fa-shield-halved"></i></div>
        <div>
          <h3>Public Verification & Transparency Guarantee</h3>
          <p>Any individual, corporate donor, CSR committee, or statutory auditor can independently verify our legal accreditations on respective Government of India portals.</p>
        </div>
      </div>

      <div class="cert-verify-grid">
        <div class="cert-verify-item">
          <h4><i class="fa-solid fa-building-columns"></i> Income Tax Department Portal</h4>
          <p>Verify our 12A and 80G approvals and PAN (<strong>AAGTK3826Q</strong>) using the official Income Tax e-Filing portal under the "Exempt Entities" directory.</p>
          <a href="https://www.incometax.gov.in" target="_blank" rel="noopener noreferrer" class="cert-verify-link">
            Visit Income Tax Portal <i class="fa-solid fa-arrow-up-right-from-square"></i>
          </a>
        </div>

        <div class="cert-verify-item">
          <h4><i class="fa-solid fa-handshake"></i> MCA CSR-1 Portal</h4>
          <p>Cross-check our Form CSR-1 registration filing with the Ministry of Corporate Affairs (MCA) to confirm CSR funding eligibility for Corporate Grants.</p>
          <a href="https://www.mca.gov.in" target="_blank" rel="noopener noreferrer" class="cert-verify-link">
            Visit MCA Portal <i class="fa-solid fa-arrow-up-right-from-square"></i>
          </a>
        </div>

        <div class="cert-verify-item">
          <h4><i class="fa-solid fa-landmark"></i> NITI Aayog NGO Darpan</h4>
          <p>Search for Kram Yog Sewa Sadan Trust on NITI Aayog's central NGO Darpan registry to view state allocations, sectoral achievements, and compliance filings.</p>
          <a href="https://ngodarpan.gov.in" target="_blank" rel="noopener noreferrer" class="cert-verify-link">
            Visit NGO Darpan <i class="fa-solid fa-arrow-up-right-from-square"></i>
          </a>
        </div>
      </div>
    </section>

  </main>

  <!-- Interactive Lightbox / Document Viewer Modal -->
  <div class="cert-modal" id="certModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="cert-modal-dialog">
      <div class="cert-modal-header">
        <h3 class="cert-modal-title" id="modalTitle">
          <i class="fa-solid fa-certificate" style="color:#1b5182;"></i>
          <span id="modalDocTitle">Document Preview</span>
        </h3>
        <div class="cert-modal-actions">
          <a href="#" id="modalDownloadBtn" download class="btn-cert-download" style="padding:6px 14px; font-size:12px;">
            <i class="fa-solid fa-arrow-down-to-bracket"></i> Download
          </a>
          <button type="button" class="cert-modal-close" onclick="closeCertModal()" aria-label="Close modal">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
      </div>
      <div class="cert-modal-body" id="modalContentContainer">
        <!-- Injected via JavaScript (Image or Iframe) -->
      </div>
    </div>
  </div>

  <!-- Include Footer Component -->
  <?php include '../includes/footer.php'; ?>

  <!-- Interactive JavaScript for Filtering & Modal -->
  <script>
    // 1. Client-Side Category Filtering
    const filterButtons = document.querySelectorAll('.cert-filter-btn');
    const certCards = document.querySelectorAll('.cert-card');

    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        // Toggle active button state
        filterButtons.forEach(btn => {
          btn.classList.remove('active');
          btn.setAttribute('aria-selected', 'false');
        });
        button.classList.add('active');
        button.setAttribute('aria-selected', 'true');

        const filterValue = button.getAttribute('data-filter');

        certCards.forEach(card => {
          if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });

    // 2. Lightbox Modal Functions
    const modal = document.getElementById('certModal');
    const modalTitle = document.getElementById('modalDocTitle');
    const modalDownloadBtn = document.getElementById('modalDownloadBtn');
    const modalContentContainer = document.getElementById('modalContentContainer');

    function openCertModal(title, filePath, isImage, downloadName) {
      modalTitle.textContent = title;
      modalDownloadBtn.href = filePath;
      modalDownloadBtn.setAttribute('download', downloadName);

      modalContentContainer.innerHTML = '';

      if (isImage) {
        const img = document.createElement('img');
        img.src = filePath;
        img.alt = title;
        modalContentContainer.appendChild(img);
      } else {
        const iframe = document.createElement('iframe');
        iframe.src = filePath;
        iframe.title = title;
        iframe.loading = 'lazy';
        modalContentContainer.appendChild(iframe);
      }

      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeCertModal() {
      modal.classList.remove('active');
      document.body.style.overflow = '';
      setTimeout(() => {
        modalContentContainer.innerHTML = '';
      }, 250);
    }

    // Close on backdrop click
    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        closeCertModal();
      }
    });

    // Close on Escape key press
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modal.classList.contains('active')) {
        closeCertModal();
      }
    });
  </script>

</body>
</html>
