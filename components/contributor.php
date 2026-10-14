<?php
// Calculate relative base url path dynamically to support inclusion in nested directories
$contrib_base_url = '';
$request_uri = $_SERVER['REQUEST_URI'];
if (strpos($request_uri, 'kramyogsewasadan.org') !== false) {
    $contrib_base_url = substr($request_uri, 0, strpos($request_uri, 'kramyogsewasadan.org') + strlen('kramyogsewasadan.org')) . '/';
} elseif (strpos($request_uri, 'gloabl-rise') !== false) {
    $contrib_base_url = substr($request_uri, 0, strpos($request_uri, 'gloabl-rise') + strlen('gloabl-rise')) . '/';
} else {
    $contrib_base_url = '/';
}
?>
<!-- Contributor Testimonial Component -->
<section class="contributor-section" id="contributorSection" aria-label="Our Contributors Testimony">
  <div class="header-container">
    <!-- Title -->
    <h2 class="contributor-title">Hear from our <span class="title-highlight">Biggest</span> Contributors</h2>
    
    <!-- Testimonial Slider Wrapper -->
    <div class="contributor-slider-wrapper">
      <div class="contributor-slides-track">
        
        <!-- Slide 1 (Mr. Urmelesh Swami) -->
        <div class="contributor-slide active">
          <div class="contrib-image-wrapper">
            <img src="<?php echo $contrib_base_url; ?>assets/images/contributor1.png" alt="Mr. Urmelesh Swami" class="contrib-img" loading="lazy">
          </div>
          <div class="contrib-text-block">
            <p class="contrib-quote">"Compassionate service to humanity is the highest calling. It was inspiring to know about the social welfare programmes driven by Kram Yog Sewa Sadan. The dedication and transparency of their initiatives deeply touched our hearts."</p>
            <div class="contrib-name">Mr.Urmelesh Swami</div>
            <div class="contrib-role">Head - Galway Foundation</div>
          </div>
        </div>

        <!-- Slide 2 (Ms. Priyanjali Rao) -->
        <div class="contributor-slide">
          <div class="contrib-image-wrapper">
            <img src="<?php echo $contrib_base_url; ?>assets/images/contributor2.png" alt="Ms. Priyanjali Rao" class="contrib-img" loading="lazy">
          </div>
          <div class="contrib-text-block">
            <p class="contrib-quote">"Supporting senior citizens, differently-abled persons, and children is the most direct way to build a healthier society. Partnering with Kram Yog Sewa Sadan has allowed us to witness firsthand the incredible transformation across communities."</p>
            <div class="contrib-name">Ms. Priyanjali Rao</div>
            <div class="contrib-role">CSR Director - Tech Mahindra</div>
          </div>
        </div>

        <!-- Slide 3 (Mr. Rajesh Khanna) -->
        <div class="contributor-slide">
          <div class="contrib-image-wrapper">
            <img src="<?php echo $contrib_base_url; ?>assets/images/contributor3.png" alt="Mr. Rajesh Khanna" class="contrib-img" loading="lazy">
          </div>
          <div class="contrib-text-block">
            <p class="contrib-quote">"The dedication and precision with which Kram Yog Sewa Sadan operates their grassroots programs is a model for social impact. We are proud to support an initiative that brings dignity, care, and hope to vulnerable people every day."</p>
            <div class="contrib-name">Mr. Rajesh Khanna</div>
            <div class="contrib-role">Executive Trustee - Hope India Fund</div>
          </div>
        </div>

      </div>

      <!-- Navigation Arrows -->
      <button class="contrib-arrow contrib-arrow-left" id="prevContribBtn" aria-label="Previous Testimonial">
        <i class="fa-solid fa-chevron-left"></i>
      </button>
      <button class="contrib-arrow contrib-arrow-right" id="nextContribBtn" aria-label="Next Testimonial">
        <i class="fa-solid fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<!-- Slider JavaScript functionality -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('contributorSection');
    if (!slider) return;

    const slides = slider.querySelectorAll('.contributor-slide');
    const prevBtn = document.getElementById('prevContribBtn');
    const nextBtn = document.getElementById('nextContribBtn');
    const totalSlides = slides.length;
    
    let currentSlide = 0;
    let autoplayTimer = null;
    const autoplayInterval = 6000; // 6 seconds autoplay cycle

    // Show slide by index
    function showSlide(index) {
      // Remove active class from current elements
      slides[currentSlide].classList.remove('active');

      // Calculate new index with wrap-around
      currentSlide = (index + totalSlides) % totalSlides;

      // Add active class to new elements
      slides[currentSlide].classList.add('active');
    }

    // Go to next slide
    function nextSlide() {
      showSlide(currentSlide + 1);
    }

    // Go to previous slide
    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    // Autoplay Management
    function startAutoplay() {
      stopAutoplay();
      autoplayTimer = setInterval(nextSlide, autoplayInterval);
    }

    function stopAutoplay() {
      if (autoplayTimer) {
        clearInterval(autoplayTimer);
        autoplayTimer = null;
      }
    }

    // Arrow Button Handlers
    if (prevBtn) {
      prevBtn.addEventListener('click', function() {
        prevSlide();
        startAutoplay(); // Reset timer on user interaction
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function() {
        nextSlide();
        startAutoplay(); // Reset timer on user interaction
      });
    }

    // Pause Autoplay on Hover
    slider.addEventListener('mouseenter', stopAutoplay);
    slider.addEventListener('mouseleave', startAutoplay);

    // ----------------------------------------------------
    // MOBILE SWIPE GESTURE SUPPORT
    // ----------------------------------------------------
    let touchStartX = 0;
    let touchEndX = 0;
    const swipeThreshold = 50; // minimum pixels to swipe

    slider.addEventListener('touchstart', function(e) {
      touchStartX = e.changedTouches[0].screenX;
      stopAutoplay();
    }, { passive: true });

    slider.addEventListener('touchend', function(e) {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
      startAutoplay();
    }, { passive: true });

    function handleSwipe() {
      const diffX = touchStartX - touchEndX;
      
      if (Math.abs(diffX) > swipeThreshold) {
        if (diffX > 0) {
          // Swiped Left -> Next Slide
          nextSlide();
        } else {
          // Swiped Right -> Previous Slide
          prevSlide();
        }
      }
    }

    // Start autoplay initially
    startAutoplay();
  });
</script>
