<?php
/**
 * pages/partner-with-us.php
 * ============================================================
 * Karm Yog Sewa Sadan Trust — Partner With Us Portal
 * PAGE 17: PARTNER WITH US
 * "Together, We Can Strengthen Community Welfare"
 * ============================================================
 */

require_once __DIR__ . '/../includes/config.php';

$success_msg = '';
$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $org_name = trim($_POST['org_name'] ?? '');
    $contact_person = trim($_POST['contact_person'] ?? '');
    $official_email = trim($_POST['official_email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $proposed_collab = trim($_POST['proposed_collab'] ?? '');
    $area_interest = trim($_POST['area_interest'] ?? '');
    $brief_description = trim($_POST['brief_description'] ?? '');
    $preferred_contact = trim($_POST['preferred_contact'] ?? 'Email');

    if (empty($org_name) || empty($contact_person) || empty($official_email) || empty($brief_description)) {
        $error_msg = 'Please fill in all mandatory fields (Organisation Name, Contact Person, Email, and Brief Description).';
    } elseif (!filter_var($official_email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = 'Please enter a valid official email address.';
    } else {
        // Log enquiry or store if database table exists
        try {
            $pdo = getDB();
            // Attempt to log enquiry if contact_messages or similar exists
            $stmt = $pdo->prepare("INSERT INTO `contact_messages` (`name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES (?, ?, ?, ?, ?, NOW())");
            $subject_line = "Partnership Proposal: {$org_name} [{$area_interest}]";
            $full_message = "Organisation: {$org_name}\nContact Person: {$contact_person}\nOfficial Email: {$official_email}\nPhone: {$phone}\nProposed Collaboration: {$proposed_collab}\nArea of Interest: {$area_interest}\nPreferred Contact Method: {$preferred_contact}\n\nDescription:\n{$brief_description}";
            $stmt->execute([$contact_person, $official_email, $phone, $subject_line, $full_message]);
        } catch (Exception $e) {
            error_log("[Partner With Us] Database log error: " . $e->getMessage());
        }

        $success_msg = 'Thank you for reaching out to partner with Karm Yog Sewa Sadan Trust. Our institutional relations desk will review your proposal and contact you shortly.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partner With Us | Karm Yog Sewa Sadan Trust</title>
  <meta name="description" content="Together, We Can Strengthen Community Welfare. Partner with Karm Yog Sewa Sadan Trust across health, education, elder welfare, vocational training, and CSR initiatives.">
  
  <!-- FontAwesome 6 CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/page-template.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  
  <style>
    body { background-color: #ffffff; }

    /* Partner Types Grid */
    .partner-types-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 16px;
      margin: 20px 0 35px 0;
    }
    .partner-type-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-left: 4px solid #1b5182;
      border-radius: 8px;
      padding: 18px 20px;
      display: flex;
      align-items: flex-start;
      gap: 14px;
      transition: all 0.25s ease;
    }
    .partner-type-card:hover {
      box-shadow: 0 4px 15px rgba(27, 81, 130, 0.08);
      border-color: #cbd5e1;
      transform: translateY(-2px);
    }
    .partner-type-icon {
      width: 42px;
      height: 42px;
      border-radius: 8px;
      background: #eef5ff;
      color: #1b5182;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.15rem;
      flex-shrink: 0;
      margin-top: 2px;
    }
    .partner-type-content h3 {
      font-size: 1rem;
      font-weight: 700;
      color: #1e293b;
      margin: 0 0 5px 0;
    }
    .partner-type-content p {
      font-size: 0.88rem;
      color: #64748b;
      line-height: 1.5;
      margin: 0;
    }

    /* Suggested Areas Grid */
    .areas-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 14px;
      margin: 20px 0 35px 0;
    }
    .area-badge-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 14px 16px;
      display: flex;
      align-items: center;
      gap: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.02);
      transition: all 0.2s ease;
    }
    .area-badge-card:hover {
      border-color: #13a34a;
      background: #f0fdf4;
      transform: translateY(-2px);
    }
    .area-badge-card i {
      color: #13a34a;
      font-size: 1.15rem;
    }
    .area-badge-card span {
      font-size: 0.92rem;
      font-weight: 700;
      color: #1e293b;
    }

    /* Partner Form Styling */
    .partner-form-wrapper {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 18px rgba(0,0,0,0.03);
      margin-top: 15px;
    }
    .form-grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 18px;
    }
    .partner-form-group {
      margin-bottom: 18px;
    }
    .partner-form-group label {
      display: block;
      font-size: 13.5px;
      font-weight: 700;
      color: #334155;
      margin-bottom: 6px;
    }
    .partner-form-group label .req {
      color: #ef4444;
    }
    .partner-form-control {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid #cbd5e1;
      border-radius: 6px;
      font-size: 14px;
      font-family: inherit;
      color: #1e293b;
      box-sizing: border-box;
      background: #f8fafc;
      transition: border-color 0.2s, background 0.2s;
    }
    .partner-form-control:focus {
      outline: none;
      border-color: #1b5182;
      background: #ffffff;
      box-shadow: 0 0 0 3px rgba(27, 81, 130, 0.1);
    }
    .partner-submit-btn {
      background: #1b5182;
      color: #ffffff;
      border: none;
      padding: 13px 30px;
      font-size: 14.5px;
      font-weight: 700;
      border-radius: 6px;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      transition: background 0.2s, transform 0.15s;
    }
    .partner-submit-btn:hover {
      background: #13a34a;
      transform: translateY(-1px);
    }

    @media (max-width: 768px) {
      .form-grid-2 {
        grid-template-columns: 1fr;
        gap: 0;
      }
      .partner-form-wrapper {
        padding: 20px 15px;
      }
    }
  </style>
</head>
<body class="page-body">

  <!-- Include Header Component -->
  <?php include '../includes/header.php'; ?>

  <!-- Page Hero Section -->
  <section class="initiative-hero" aria-label="Partner With Us Banner">
    <div class="header-container">
      <nav class="initiative-breadcrumbs" aria-label="Breadcrumb">
        <a href="../index.php">Home</a>
        <span class="separator">></span>
        <a href="what-we-do.php">Get Involved</a>
        <span class="separator">></span>
        <span style="color: #ffffff;">Partner With Us</span>
      </nav>
      <h1 class="initiative-title">Partner With Us</h1>
    </div>
  </section>

  <!-- Main Content Layout Grid -->
  <main class="initiative-layout-grid">
    
    <!-- Left Column: Core Content -->
    <article class="initiative-main-content">
      
      <!-- Philosophy Intro -->
      <section class="initiative-content-block">
        <h2>Together, We Can Strengthen Community Welfare</h2>
        <p><strong>Karm Yog Sewa Sadan Trust</strong> seeks to build meaningful, enduring collaborations with organizations, institutions, and community leaders. We believe that sustainable humanitarian impact is multiplied when diverse strengths, resources, and technical expertise unite under a common mission of dignity and service.</p>
        <p>Whether you represent an educational institution, a corporate CSR wing, a healthcare facility, or an active civil society organization, we welcome institutional synergy that directly uplifts underserved elders, youth, women, and marginalized families.</p>
      </section>

      <!-- Potential Partners per Client Spec -->
      <section class="initiative-content-block">
        <h2>Potential Partners</h2>
        <p>We actively collaborate with a broad spectrum of stakeholders committed to community welfare:</p>
        
        <div class="partner-types-grid">
          
          <!-- 1. Educational Institutions -->
          <div class="partner-type-card">
            <div class="partner-type-icon"><i class="fa-solid fa-graduation-cap"></i></div>
            <div class="partner-type-content">
              <h3>Educational Institutions</h3>
              <p>Schools, colleges, and training academies for student volunteering, literacy drives, and skill development.</p>
            </div>
          </div>

          <!-- 2. Hospitals & Healthcare Providers -->
          <div class="partner-type-card">
            <div class="partner-type-icon"><i class="fa-solid fa-hospital-user"></i></div>
            <div class="partner-type-content">
              <h3>Hospitals and Healthcare Providers</h3>
              <p>Diagnostic centers, clinics, and medical practitioners for health screening camps and geriatric care referrals.</p>
            </div>
          </div>

          <!-- 3. NGOs and Charitable Organisations -->
          <div class="partner-type-card">
            <div class="partner-type-icon"><i class="fa-solid fa-handshake-angle"></i></div>
            <div class="partner-type-content">
              <h3>NGOs and Charitable Organisations</h3>
              <p>Grassroots non-profits for collaborative social work, relief distribution, and shared community programs.</p>
            </div>
          </div>

          <!-- 4. Corporate Social Responsibility Teams -->
          <div class="partner-type-card">
            <div class="partner-type-icon"><i class="fa-solid fa-building"></i></div>
            <div class="partner-type-content">
              <h3>Corporate Social Responsibility Teams</h3>
              <p>Corporate partners seeking verified, transparent, and high-impact CSR welfare interventions under MCA guidelines.</p>
            </div>
          </div>

          <!-- 5. Community Organisations -->
          <div class="partner-type-card">
            <div class="partner-type-icon"><i class="fa-solid fa-people-roof"></i></div>
            <div class="partner-type-content">
              <h3>Community Organisations</h3>
              <p>Resident welfare associations, youth clubs, and local committees for grassroots mobilization and social engagement.</p>
            </div>
          </div>

          <!-- 6. Professional Volunteers -->
          <div class="partner-type-card">
            <div class="partner-type-icon"><i class="fa-solid fa-user-tie"></i></div>
            <div class="partner-type-content">
              <h3>Professional Volunteers</h3>
              <p>Legal advisors, healthcare professionals, counselors, and educators sharing pro bono skills and mentorship.</p>
            </div>
          </div>

          <!-- 7. Government Agencies -->
          <div class="partner-type-card">
            <div class="partner-type-icon"><i class="fa-solid fa-landmark"></i></div>
            <div class="partner-type-content">
              <h3>Government Agencies, Where Appropriate</h3>
              <p>Civic departments, municipal corporations, and statutory welfare boards for public health and social security schemes.</p>
            </div>
          </div>

        </div>
      </section>

      <!-- Suggested Partnership Areas per Client Spec -->
      <section class="initiative-content-block">
        <h2>Suggested Partnership Areas</h2>
        <p>Our collaborative interventions span seven core pillars of charitable impact:</p>
        
        <div class="areas-grid">
          <div class="area-badge-card"><i class="fa-solid fa-heart-pulse"></i> <span>Health awareness</span></div>
          <div class="area-badge-card"><i class="fa-solid fa-book-open"></i> <span>Education</span></div>
          <div class="area-badge-card"><i class="fa-solid fa-person-cane"></i> <span>Senior citizen welfare</span></div>
          <div class="area-badge-card"><i class="fa-solid fa-screwdriver-wrench"></i> <span>Vocational development</span></div>
          <div class="area-badge-card"><i class="fa-solid fa-users"></i> <span>Community development</span></div>
          <div class="area-badge-card"><i class="fa-solid fa-leaf"></i> <span>Environmental activities</span></div>
          <div class="area-badge-card"><i class="fa-solid fa-chalkboard-user"></i> <span>Training & capacity building</span></div>
        </div>
      </section>

      <!-- Partnership Enquiry Form per Client Spec -->
      <section class="initiative-content-block" id="partnershipFormSection">
        <h2>Partnership Enquiry Form</h2>
        <p>Please share your organisation's details and proposed collaboration. Our institutional partnerships team will connect with you.</p>

        <?php if (!empty($error_msg)): ?>
        <div style="background: #fef2f2; border-left: 4px solid #ef4444; padding: 12px 16px; border-radius: 4px; color: #991b1b; font-size: 13.5px; margin-bottom: 18px;">
          <i class="fa-solid fa-circle-exclamation"></i> <?= htmlspecialchars($error_msg) ?>
        </div>
        <?php endif; ?>

        <div class="partner-form-wrapper">
          <form action="partner-with-us.php" method="POST" id="partnerForm">
            
            <div class="form-grid-2">
              <div class="partner-form-group">
                <label for="org_name">Organisation Name <span class="req">*</span></label>
                <input type="text" name="org_name" id="org_name" class="partner-form-control" placeholder="e.g. Acme Foundation / Rotary Club / ABC Corp" value="<?= htmlspecialchars($_POST['org_name'] ?? '') ?>" required>
              </div>

              <div class="partner-form-group">
                <label for="contact_person">Contact Person <span class="req">*</span></label>
                <input type="text" name="contact_person" id="contact_person" class="partner-form-control" placeholder="e.g. Smt. Neha Sharma, Director" value="<?= htmlspecialchars($_POST['contact_person'] ?? '') ?>" required>
              </div>
            </div>

            <div class="form-grid-2">
              <div class="partner-form-group">
                <label for="official_email">Official Email <span class="req">*</span></label>
                <input type="email" name="official_email" id="official_email" class="partner-form-control" placeholder="e.g. partnerships@organisation.org" value="<?= htmlspecialchars($_POST['official_email'] ?? '') ?>" required>
              </div>

              <div class="partner-form-group">
                <label for="phone">Phone / Mobile Number</label>
                <input type="tel" name="phone" id="phone" class="partner-form-control" placeholder="e.g. +91 9876543210" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
              </div>
            </div>

            <div class="form-grid-2">
              <div class="partner-form-group">
                <label for="proposed_collab">Proposed Collaboration <span class="req">*</span></label>
                <select name="proposed_collab" id="proposed_collab" class="partner-form-control" required>
                  <option value="">— Select Collaboration Type —</option>
                  <option value="Institutional Partnership" <?= (isset($_POST['proposed_collab']) && $_POST['proposed_collab'] === 'Institutional Partnership') ? 'selected' : '' ?>>Institutional Partnership</option>
                  <option value="CSR Project Collaboration" <?= (isset($_POST['proposed_collab']) && $_POST['proposed_collab'] === 'CSR Project Collaboration') ? 'selected' : '' ?>>CSR Project Collaboration</option>
                  <option value="Medical / Health Camp Partnership" <?= (isset($_POST['proposed_collab']) && $_POST['proposed_collab'] === 'Medical / Health Camp Partnership') ? 'selected' : '' ?>>Medical / Health Camp Partnership</option>
                  <option value="Educational / Vocational Sponsorship" <?= (isset($_POST['proposed_collab']) && $_POST['proposed_collab'] === 'Educational / Vocational Sponsorship') ? 'selected' : '' ?>>Educational / Vocational Sponsorship</option>
                  <option value="Community Welfare Drive" <?= (isset($_POST['proposed_collab']) && $_POST['proposed_collab'] === 'Community Welfare Drive') ? 'selected' : '' ?>>Community Welfare Drive</option>
                  <option value="Professional Skills Volunteering" <?= (isset($_POST['proposed_collab']) && $_POST['proposed_collab'] === 'Professional Skills Volunteering') ? 'selected' : '' ?>>Professional Skills Volunteering</option>
                  <option value="Other Synergies" <?= (isset($_POST['proposed_collab']) && $_POST['proposed_collab'] === 'Other Synergies') ? 'selected' : '' ?>>Other Synergies</option>
                </select>
              </div>

              <div class="partner-form-group">
                <label for="area_interest">Area of Interest <span class="req">*</span></label>
                <select name="area_interest" id="area_interest" class="partner-form-control" required>
                  <option value="">— Select Area of Interest —</option>
                  <option value="Health awareness" <?= (isset($_POST['area_interest']) && $_POST['area_interest'] === 'Health awareness') ? 'selected' : '' ?>>Health awareness</option>
                  <option value="Education" <?= (isset($_POST['area_interest']) && $_POST['area_interest'] === 'Education') ? 'selected' : '' ?>>Education</option>
                  <option value="Senior citizen welfare" <?= (isset($_POST['area_interest']) && $_POST['area_interest'] === 'Senior citizen welfare') ? 'selected' : '' ?>>Senior citizen welfare</option>
                  <option value="Vocational development" <?= (isset($_POST['area_interest']) && $_POST['area_interest'] === 'Vocational development') ? 'selected' : '' ?>>Vocational development</option>
                  <option value="Community development" <?= (isset($_POST['area_interest']) && $_POST['area_interest'] === 'Community development') ? 'selected' : '' ?>>Community development</option>
                  <option value="Environmental activities" <?= (isset($_POST['area_interest']) && $_POST['area_interest'] === 'Environmental activities') ? 'selected' : '' ?>>Environmental activities</option>
                  <option value="Training and capacity building" <?= (isset($_POST['area_interest']) && $_POST['area_interest'] === 'Training and capacity building') ? 'selected' : '' ?>>Training and capacity building</option>
                  <option value="Multiple Verticals" <?= (isset($_POST['area_interest']) && $_POST['area_interest'] === 'Multiple Verticals') ? 'selected' : '' ?>>Multiple Verticals</option>
                </select>
              </div>
            </div>

            <div class="partner-form-group">
              <label for="preferred_contact">Preferred Method of Contact <span class="req">*</span></label>
              <select name="preferred_contact" id="preferred_contact" class="partner-form-control" required>
                <option value="Official Email" <?= (isset($_POST['preferred_contact']) && $_POST['preferred_contact'] === 'Official Email') ? 'selected' : '' ?>>Official Email</option>
                <option value="Phone Call" <?= (isset($_POST['preferred_contact']) && $_POST['preferred_contact'] === 'Phone Call') ? 'selected' : '' ?>>Phone Call</option>
                <option value="In-Person Meeting" <?= (isset($_POST['preferred_contact']) && $_POST['preferred_contact'] === 'In-Person Meeting') ? 'selected' : '' ?>>In-Person Meeting (Office / Center Visit)</option>
                <option value="Virtual Video Conference" <?= (isset($_POST['preferred_contact']) && $_POST['preferred_contact'] === 'Virtual Video Conference') ? 'selected' : '' ?>>Virtual Video Conference</option>
              </select>
            </div>

            <div class="partner-form-group">
              <label for="brief_description">Brief Description of Proposed Collaboration <span class="req">*</span></label>
              <textarea name="brief_description" id="brief_description" rows="5" class="partner-form-control" placeholder="Outline your institution's profile, intended project scope, geographical focus, and timeline..." required><?= htmlspecialchars($_POST['brief_description'] ?? '') ?></textarea>
            </div>

            <div style="margin-top: 25px;">
              <button type="submit" class="partner-submit-btn">
                <i class="fa-solid fa-paper-plane"></i> Submit Partnership Proposal
              </button>
            </div>

          </form>
        </div>
      </section>

      <div class="initiative-quote-box">
        <p>“Alone we can do so little; together we can do so much. Karm Yog Sewa Sadan Trust invites institutions and professionals to join hands in building an inclusive and caring society.”</p>
      </div>

    </article>

    <!-- Right Column: Sidebar Widgets -->
    <aside class="initiative-sidebar">
      
      <!-- CSR Collaboration Appeal Box -->
      <section class="sidebar-cta-card">
        <h3>CSR Collaboration</h3>
        <p>Are you a corporate seeking transparent CSR implementation under the Companies Act? Explore our eligible CSR programs.</p>
        <a href="csr-collaboration.php" class="sidebar-cta-button" style="background: #13a34a;">Learn About CSR</a>
      </section>

      <!-- Institutional Desk Contact Card -->
      <section class="sidebar-nav-widget">
        <h3>Partnership Desk</h3>
        <p style="font-size: 13.5px; color: #64748b; line-height: 1.6; margin-bottom: 15px;">
          For institutional MOUs, university tie-ups, and corporate CSR queries, contact our desk directly:
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

      <!-- Office Locations -->
      <section class="sidebar-nav-widget">
        <h3>Offices & Presence</h3>
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

  <!-- Feedback handler -->
  <?php if (!empty($success_msg)): ?>
  <script>
      Swal.fire({
          title: 'Proposal Submitted',
          text: '<?= htmlspecialchars($success_msg) ?>',
          icon: 'success',
          confirmButtonColor: '#13a34a'
      });
  </script>
  <?php endif; ?>

</body>
</html>
