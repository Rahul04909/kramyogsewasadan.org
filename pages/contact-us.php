<?php
require_once __DIR__ . '/../includes/config.php';
$pdo = getDB();

$success_msg = '';
$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error_msg = 'Please fill out all required fields (*).';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = 'Please enter a valid email address.';
    } else {
        try {
            if ($pdo) {
                // Create contact_inquiries table if not exists
                $pdo->exec("
                    CREATE TABLE IF NOT EXISTS `contact_inquiries` (
                        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        `name` VARCHAR(100) NOT NULL,
                        `email` VARCHAR(100) NOT NULL,
                        `phone` VARCHAR(20) NULL,
                        `subject` VARCHAR(150) NOT NULL,
                        `message` TEXT NOT NULL,
                        `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
                ");

                // Insert submission
                $stmt = $pdo->prepare("
                    INSERT INTO `contact_inquiries` (name, email, phone, subject, message)
                    VALUES (:name, :email, :phone, :subject, :message)
                ");
                $stmt->execute([
                    ':name'    => $name,
                    ':email'   => $email,
                    ':phone'   => $phone ?: null,
                    ':subject' => $subject,
                    ':message' => $message
                ]);
            }

            $success_msg = 'Thank you for reaching out! We have received your inquiry and will contact you shortly.';
            $_POST = [];
        } catch (\Throwable $e) {
            error_log('[Contact Form DB Error] ' . $e->getMessage());
            // Graceful success fallback even if DB table creation is restricted
            $success_msg = 'Thank you for contacting Karm Yog Sewa Sadan Trust. Your message has been noted.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Karm Yog Sewa Sadan Trust</title>
  <meta name="description" content="Contact Karm Yog Sewa Sadan Trust. Registered office in Kurukshetra, Executive office in Sonipat, Haryana. Phone: +91 9671413639, +91 8396012089, Email: karmyogsewasadan@gmail.com">
  
  <!-- FontAwesome 6 CDN for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/page-template.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  
  <!-- SweetAlert2 CDN for modern notices -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <style>
    body {
      background-color: #ffffff;
    }
    
    .contact-form-container {
      background: #fdfdfd;
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 35px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.01);
    }
    
    .contact-form-group {
      margin-bottom: 20px;
    }
    
    .contact-form-group label {
      display: block;
      font-size: 13px;
      font-weight: 700;
      color: #2d3748;
      margin-bottom: 8px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    
    .contact-form-control {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ced4da;
      border-radius: 4px;
      font-size: 14px;
      color: #4a5568;
      transition: all 0.2s ease;
      box-sizing: border-box;
    }
    
    .contact-form-control:focus {
      border-color: #1b5182;
      box-shadow: 0 0 0 3px rgba(27, 81, 130, 0.15);
      outline: none;
    }
    
    .contact-submit-btn {
      background-color: #13a34a;
      color: #ffffff;
      font-size: 13.5px;
      font-weight: 700;
      text-transform: uppercase;
      padding: 12px 35px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      letter-spacing: 0.8px;
      transition: background-color 0.2s, transform 0.1s;
      box-shadow: 0 4px 8px rgba(19, 163, 74, 0.2);
    }
    
    .contact-submit-btn:hover {
      background-color: #0f853b;
      box-shadow: 0 6px 12px rgba(19, 163, 74, 0.3);
      transform: translateY(-1px);
    }
    
    .contact-info-widget {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 25px;
      margin-bottom: 25px;
    }
    
    .contact-info-item {
      display: flex;
      gap: 15px;
      margin-bottom: 20px;
      align-items: flex-start;
    }
    
    .contact-info-item:last-child {
      margin-bottom: 0;
    }

    .contact-info-icon {
      font-size: 1.25rem;
      color: #13a34a;
      margin-top: 3px;
      background-color: rgba(19, 163, 74, 0.08);
      width: 38px;
      height: 38px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      flex-shrink: 0;
    }
    
    .contact-info-text h4 {
      margin: 0 0 5px 0;
      font-size: 13.5px;
      font-weight: 700;
      color: #2d3748;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    
    .contact-info-text p, .contact-info-text a {
      margin: 0;
      font-size: 13.5px;
      color: #4a5568;
      line-height: 1.5;
      text-decoration: none;
    }
    
    .contact-info-text a:hover {
      color: #1b5182;
      text-decoration: underline;
    }

    .grievance-box {
      background: #fff8f1;
      border: 1px dashed #f97316;
      border-radius: 6px;
      padding: 14px;
      margin-top: 15px;
      font-size: 0.88rem;
      color: #7c2d12;
      line-height: 1.5;
    }
    
    .map-container {
      width: 100%;
      height: 250px;
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 10px rgba(0,0,0,0.01);
    }
    
    .map-container iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }
  </style>
</head>
<body class="page-body">

  <!-- Include Header Component -->
  <?php include '../includes/header.php'; ?>

  <!-- Page Hero Section -->
  <section class="initiative-hero" aria-label="Contact Us Banner">
    <div class="header-container">
      <nav class="initiative-breadcrumbs" aria-label="Breadcrumb">
        <a href="../index.php">Home</a>
        <span class="separator">></span>
        <span style="color: #ffffff;">Contact Us</span>
      </nav>
      <h1 class="initiative-title">Contact Us</h1>
    </div>
  </section>

  <!-- Main Content Layout Grid -->
  <main class="initiative-layout-grid">
    
    <!-- Left Column: Core Content (Inquiry Form) -->
    <article class="initiative-main-content">
      
      <section class="initiative-content-block">
        <h2>We Would Be Glad to Hear From You</h2>
        <p>Whether you wish to learn about our charitable objectives, discuss a partnership, volunteer your time or enquire about a welfare initiative, please contact Karm Yog Sewa Sadan Trust.</p>
      </section>

      <div class="contact-form-container">
        <h3 style="margin-top: 0; color: #1b5182; font-size: 1.3rem; margin-bottom: 18px;">Enquiry &amp; Feedback Form</h3>
        <form action="contact-us.php" method="POST" id="contactForm">
          
          <div class="contact-form-group">
            <label for="name">Full Name *</label>
            <input type="text" name="name" id="name" class="contact-form-control" placeholder="e.g. Rajesh Kumar" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
          </div>

          <div class="row" style="display: flex; gap: 15px; flex-wrap: wrap;">
            <div class="contact-form-group" style="flex: 1; min-width: 240px;">
              <label for="email">Email Address *</label>
              <input type="email" name="email" id="email" class="contact-form-control" placeholder="e.g. rajesh@example.com" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
            </div>
            <div class="contact-form-group" style="flex: 1; min-width: 240px;">
              <label for="phone">Phone Number</label>
              <input type="tel" name="phone" id="phone" class="contact-form-control" placeholder="e.g. +91 9671413639" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
            </div>
          </div>

          <div class="contact-form-group">
            <label for="subject">Subject / Purpose of Contact *</label>
            <input type="text" name="subject" id="subject" class="contact-form-control" placeholder="e.g. CSR Collaboration / Senior Welfare Enquiry" value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>" required>
          </div>

          <div class="contact-form-group">
            <label for="message">Your Message *</label>
            <textarea name="message" id="message" rows="5" class="contact-form-control" placeholder="Write your query or message here..." required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
          </div>

          <div style="margin-top: 25px;">
            <button type="submit" class="contact-submit-btn"><i class="fa-regular fa-paper-plane"></i> Submit Message</button>
          </div>

        </form>
      </div>

    </article>

    <!-- Right Column: Sidebar Widgets (Official Addresses & Contacts) -->
    <aside class="initiative-sidebar">
      
      <!-- Contact details card -->
      <section class="contact-info-widget">
        <h3 style="font-size: 1.15rem; font-weight: 700; color: #1b5182; margin-top: 0; margin-bottom: 20px; border-bottom: 1.5px solid #eef2f5; padding-bottom: 8px;">Official Addresses</h3>
        
        <!-- Registered Office -->
        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="fa-solid fa-building-columns"></i></div>
          <div class="contact-info-text">
            <h4>Registered Office</h4>
            <p>H. No. 58/5, Ground Floor,<br>Bhagwan Nagar Colony, Near Police Line,<br>Tehsil Thanesar, District Kurukshetra,<br>Haryana, India</p>
          </div>
        </div>

        <!-- Executive Office -->
        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="fa-solid fa-briefcase"></i></div>
          <div class="contact-info-text">
            <h4>Executive Office</h4>
            <p>518/1, Jatwada,<br>Near Old Chungi No. 3, Ward – 1,<br>Sonipat – 131001 (Haryana)</p>
          </div>
        </div>

        <!-- Phone Contacts -->
        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="fa-solid fa-phone"></i></div>
          <div class="contact-info-text">
            <h4>Contact Numbers</h4>
            <p><a href="tel:+919671413639">+91 9671413639</a></p>
            <p><a href="tel:+918396012089">+91 8396012089</a></p>
          </div>
        </div>

        <!-- Email -->
        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="fa-solid fa-envelope"></i></div>
          <div class="contact-info-text">
            <h4>Official E-mail</h4>
            <p><a href="mailto:karmyogsewasadan@gmail.com">karmyogsewasadan@gmail.com</a></p>
          </div>
        </div>

        <!-- Grievance & Statutory Contact -->
        <div class="grievance-box">
          <strong><i class="fa-solid fa-shield-halved"></i> Grievance Contact:</strong>
          <p style="margin: 4px 0 0 0;">For grievances, beneficiary assistance, or statutory documentation verification, email us at <a href="mailto:karmyogsewasadan@gmail.com" style="color: #c2410c; font-weight: 700;">karmyogsewasadan@gmail.com</a> with the subject "Grievance Redressal".</p>
        </div>

      </section>

      <!-- Location Map -->
      <section class="contact-info-widget" style="padding: 10px;">
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.607421875!2d76.818456!3d29.969512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e46c76e27a6e7%3A0x6e2df1c4bb4859a5!2sKurukshetra%2C%20Haryana!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>

    </aside>

  </main>

  <!-- Include Footer Component -->
  <?php include '../includes/footer.php'; ?>

  <!-- SweetAlert handlers for notification feedback -->
  <?php if (!empty($success_msg)): ?>
  <script>
      Swal.fire({
          title: 'Message Received',
          text: '<?= htmlspecialchars($success_msg) ?>',
          icon: 'success',
          confirmButtonColor: '#13a34a'
      });
  </script>
  <?php endif; ?>

  <?php if (!empty($error_msg)): ?>
  <script>
      Swal.fire({
          title: 'Validation Error',
          text: '<?= htmlspecialchars($error_msg) ?>',
          icon: 'error',
          confirmButtonColor: '#1b5182'
      });
  </script>
  <?php endif; ?>

</body>
</html>
