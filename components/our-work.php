<?php
// Calculate relative base url path dynamically to support inclusion in nested directories
$work_base_url = '';
$request_uri = $_SERVER['REQUEST_URI'];
if (strpos($request_uri, 'kramyogsewasadan.org') !== false) {
    $work_base_url = substr($request_uri, 0, strpos($request_uri, 'kramyogsewasadan.org') + strlen('kramyogsewasadan.org')) . '/';
} elseif (strpos($request_uri, 'gloabl-rise') !== false) {
    $work_base_url = substr($request_uri, 0, strpos($request_uri, 'gloabl-rise') + strlen('gloabl-rise')) . '/';
} else {
    $work_base_url = '/';
}

// 7 Official Programme Cards per Client Specification
$core_programmes = [
    [
        'title' => 'Old Age Welfare',
        'desc' => 'Promoting dignity, care, safety and social participation for senior citizens.',
        'image' => 'assets/images/kyss_senior_welfare.jpg',
        'alt' => 'Karm Yog Sewa Sadan Trust Old Age Welfare and Senior Care',
        'link' => 'pages/old-age-home.php',
        'tag' => 'Elders Care'
    ],
    [
        'title' => 'Health & Well-being',
        'desc' => 'Supporting health awareness, medical camps and preventive healthcare initiatives.',
        'image' => 'assets/images/kyss_health_camp.jpg',
        'alt' => 'Karm Yog Sewa Sadan Trust Healthcare and Medical Check-up Camps',
        'link' => 'pages/health-projects.php',
        'tag' => 'Healthcare'
    ],
    [
        'title' => 'Disability Rehabilitation',
        'desc' => 'Promoting rehabilitation, accessibility, inclusion and participation.',
        'image' => 'assets/images/kyss_disab_rehab.jpg',
        'alt' => 'Karm Yog Sewa Sadan Trust Disability Inclusion and Rehabilitation',
        'link' => 'pages/persons-with-disabilities.php',
        'tag' => 'Inclusion'
    ],
    [
        'title' => 'Education for All',
        'desc' => 'Supporting educational opportunities, reading facilities and assistance for disadvantaged learners.',
        'image' => 'assets/images/rural_education.png',
        'alt' => 'Karm Yog Sewa Sadan Trust Education for Underprivileged Children',
        'link' => 'pages/rural-children-education.php',
        'tag' => 'Learning'
    ],
    [
        'title' => 'Vocational Training',
        'desc' => 'Encouraging skills development, livelihood opportunities and productive engagement.',
        'image' => 'assets/images/women_empowerment.png',
        'alt' => 'Karm Yog Sewa Sadan Trust Vocational Skills and Livelihood Training',
        'link' => 'pages/vocational-training.php',
        'tag' => 'Livelihood'
    ],
    [
        'title' => 'Women & Family Welfare',
        'desc' => 'Promoting women\'s education, family well-being and social awareness.',
        'image' => 'assets/images/senior_care.png',
        'alt' => 'Karm Yog Sewa Sadan Trust Women and Family Welfare Programmes',
        'link' => 'pages/women-empowerment.php',
        'tag' => 'Empowerment'
    ],
    [
        'title' => 'Community Development',
        'desc' => 'Encouraging social harmony, environmental responsibility and community participation.',
        'image' => 'assets/images/swachh_bharat.png',
        'alt' => 'Karm Yog Sewa Sadan Trust Community Welfare and Environmental Action',
        'link' => 'pages/swacch-bharat-mission.php',
        'tag' => 'Harmony'
    ]
];
?>
<!-- Our Core Areas of Work Component -->
<section class="our-work-section" id="coreAreasSection" aria-label="Our Core Areas of Work">
  <div class="header-container">
    
    <!-- Title Section -->
    <div class="core-header-center">
      <span class="core-pill-badge"><i class="fas fa-hand-holding-heart"></i> Core Welfare Focus</span>
      <h2 class="our-work-title">Our Core Areas of Work</h2>
      <p class="core-subtitle">Dedicated charitable programmes advancing dignity, healthcare, education, inclusion, and community welfare across society.</p>
    </div>
    
    <!-- 7 Programme Cards Grid -->
    <div class="core-cards-grid">
      <?php foreach ($core_programmes as $prog): ?>
        <article class="core-prog-card">
          <div class="core-card-img-wrap">
            <img src="<?php echo $work_base_url . $prog['image']; ?>" 
                 alt="<?php echo htmlspecialchars($prog['alt']); ?>" 
                 class="core-card-img" 
                 loading="lazy">
            <span class="core-card-tag"><?php echo htmlspecialchars($prog['tag']); ?></span>
            <span class="core-kyss-label"><i class="fa-solid fa-hands-holding-heart"></i> कर्म योग सेवा सदन</span>
          </div>
          <div class="core-card-body">
            <h3 class="core-card-title"><?php echo htmlspecialchars($prog['title']); ?></h3>
            <p class="core-card-desc"><?php echo htmlspecialchars($prog['desc']); ?></p>
            <a href="<?php echo $work_base_url . $prog['link']; ?>" class="core-card-link" aria-label="Read more about <?php echo htmlspecialchars($prog['title']); ?>">
              Explore Initiative <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>
