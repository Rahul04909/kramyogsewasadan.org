<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kram Yog Sewa Sadan</title>
  
  <!-- FontAwesome 6 CDN for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Custom Header Stylesheet -->
  <link rel="stylesheet" href="assets/css/header.css">
  
  <!-- Custom Hero Stylesheet -->
  <link rel="stylesheet" href="assets/css/hero.css">
  
  <!-- Custom Contributor Stylesheet -->
  <link rel="stylesheet" href="assets/css/contributor.css">
  
  <!-- Custom Narrative Stylesheet -->
  <link rel="stylesheet" href="assets/css/narrative.css">
  
  <!-- Custom Founder's Message Stylesheet -->
  <link rel="stylesheet" href="assets/css/founder-message.css">
  
  <!-- Custom Our Work Stylesheet -->
  <link rel="stylesheet" href="assets/css/our-work.css">
  
  <!-- Custom Ground Action Seva Gallery Stylesheet -->
  <link rel="stylesheet" href="assets/css/gallery.css">
  
  <!-- Custom SDG Goals Stylesheet -->
  <link rel="stylesheet" href="assets/css/sdg.css">
  
  <!-- Custom Latest Updates Stylesheet -->
  <link rel="stylesheet" href="assets/css/latest-updates.css">
  
  <!-- Custom Footer Stylesheet -->
  <link rel="stylesheet" href="assets/css/footer.css">
  
  <!-- Welcome Brochure Pop-Up Stylesheet -->
  <link rel="stylesheet" href="assets/css/welcome-popup.css">

  <!-- Live Community Trust & Visitor Counter Stylesheet -->
  <link rel="stylesheet" href="assets/css/visitor-counter.css">
  
  <!-- Base styling for index page preview -->
  <style>
    /* Clean reset and basic page styling */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      background-color: #fcfcfc;
      color: #333;
      font-family: 'Montserrat', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
  </style>
</head>
<body>

  <!-- Call the Header Component -->
  <?php include 'includes/header.php'; ?>

  <!-- Call the Hero Slider Component -->
  <?php include 'components/hero.php'; ?>

  <!-- Call the Narrative Section Component -->
  <?php include 'components/narrative.php'; ?>

  <!-- Call the Founder's Message Component -->
  <?php include 'components/founder-message.php'; ?>

  <!-- Call the Our Work Initiatives Component -->
  <?php include 'components/our-work.php'; ?>

  <!-- Call the Ground Action Seva Gallery Component -->
  <?php include 'components/gallery.php'; ?>

  <!-- Call the Contributor Testimonial Component -->
  <?php include 'components/contributor.php'; ?>

   <!-- Call the SDG Goals Component -->
  <?php include 'components/sdg.php'; ?>

  <!-- Call the Latest Updates Blog Slider Component -->
  <?php include 'components/latest-updates.php'; ?>

  <!-- Call the Live Community Trust & Visitor Counter Component -->
  <?php include 'components/visitor-counter-bar.php'; ?>

  <!-- Call the Footer Component -->
  <?php include 'includes/footer.php'; ?>

  <!-- Welcome Brochure Pop-Up Component -->
  <?php include 'components/welcome-popup.php'; ?>

</body>
</html>
