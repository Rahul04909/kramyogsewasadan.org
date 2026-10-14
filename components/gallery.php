<?php
/**
 * components/gallery.php
 * ============================================================
 * Ground Impact & Seva Photo Gallery Component
 * Displays authentic field action images from assets/1
 * Kram Yog Sewa Sadan Trust
 * ============================================================
 */

// Dynamically determine base URL for assets
$gallery_base_url = '';
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($request_uri, 'kramyogsewasadan.org') !== false) {
    $gallery_base_url = substr($request_uri, 0, strpos($request_uri, 'kramyogsewasadan.org') + strlen('kramyogsewasadan.org')) . '/';
} elseif (strpos($request_uri, 'gloabl-rise') !== false) {
    $gallery_base_url = substr($request_uri, 0, strpos($request_uri, 'gloabl-rise') + strlen('gloabl-rise')) . '/';
} else {
    $gallery_base_url = '/';
}

// 8 Authentic ground action photos from assets/1
$gallery_items = [
    [
        'id'          => 1,
        'image'       => 'assets/1/008.jpeg',
        'title'       => 'Ashram Family Gathering & Elder Fellowship',
        'category'    => 'elder-care',
        'category_name' => 'Elder Care & Ashram',
        'tag_icon'    => 'fa-house-chimney-heart',
        'caption'     => 'Our resident senior citizens, trustees, and children gathering in the ashram garden courtyard for fruits, sweets, and heartfelt conversations.',
        'featured'    => true
    ],
    [
        'id'          => 2,
        'image'       => 'assets/1/001.jpeg',
        'title'       => 'Safe Rescue & Shelter of Vulnerable Women',
        'category'    => 'rescue',
        'category_name' => 'Rescue & Outreach',
        'tag_icon'    => 'fa-truck-medical',
        'caption'     => 'Coordinated street rescue operation conducted with local police authorities and our ashram vehicle to provide emergency rehabilitation.',
        'featured'    => false
    ],
    [
        'id'          => 3,
        'image'       => 'assets/1/002.jpeg',
        'title'       => 'On-Ground Emotional Support & Intake',
        'category'    => 'rescue',
        'category_name' => 'Rescue & Outreach',
        'tag_icon'    => 'fa-hand-holding-heart',
        'caption'     => 'Trust social workers conducting compassionate counseling, health evaluation, and intake verification for a destitute person.',
        'featured'    => false
    ],
    [
        'id'          => 4,
        'image'       => 'assets/1/003.jpeg',
        'title'       => 'Compassionate Aid for Abandoned Elder',
        'category'    => 'elder-care',
        'category_name' => 'Elder Care & Ashram',
        'tag_icon'    => 'fa-heart',
        'caption'     => 'Offering immediate drinking water, care, and shelter transition for an elderly destitute woman found in distress.',
        'featured'    => false
    ],
    [
        'id'          => 5,
        'image'       => 'assets/1/005.jpeg',
        'title'       => 'Rehabilitation of Homeless & Injured Citizens',
        'category'    => 'rescue',
        'category_name' => 'Rescue & Outreach',
        'tag_icon'    => 'fa-shield-halved',
        'caption'     => 'Rescuing a sick and destitute man from roadside vulnerability with police support, ensuring immediate hospital care and admission.',
        'featured'    => false
    ],
    [
        'id'          => 6,
        'image'       => 'assets/1/004.jpeg',
        'title'       => 'Pushpa Holi & Seva Samman Samaroh',
        'category'    => 'community',
        'category_name' => 'Community & Events',
        'tag_icon'    => 'fa-award',
        'caption'     => 'Kram Yog Sewa Sadan Trust felicitation ceremony at Kurukshetra, Haryana, honoring dedicated frontline volunteers and community leaders.',
        'featured'    => false
    ],
    [
        'id'          => 7,
        'image'       => 'assets/1/007.jpeg',
        'title'       => 'Community Tree Plantation Drive',
        'category'    => 'community',
        'category_name' => 'Community & Events',
        'tag_icon'    => 'fa-seedling',
        'caption'     => 'Trustees, volunteers, and local dignitaries planting saplings to protect nature and advance Swachh & Green Bharat goals.',
        'featured'    => false
    ],
    [
        'id'          => 8,
        'image'       => 'assets/1/007 (1).jpeg',
        'title'       => 'Satsang, Blessings & Cultural Festivals',
        'category'    => 'community',
        'category_name' => 'Community & Events',
        'tag_icon'    => 'fa-om',
        'caption'     => 'Joyous community celebrations, receiving blessings of revered saints, and nurturing cultural values with youth and elders.',
        'featured'    => true
    ]
];
?>

<!-- Ground Action & Seva Gallery Component -->
<section class="ground-gallery-section" id="groundGallery" aria-label="Ground Action and Seva Moments">
  <div class="header-container">
    
    <!-- Section Header -->
    <div class="gallery-section-header">
      <div class="gallery-badge">
        <i class="fa-solid fa-camera-retro"></i> Field Action & Real Impact
      </div>
      <h2 class="gallery-section-title">Glimpses of Our Seva</h2>
      <p class="gallery-section-subtitle">
        Real moments of compassion, rescue operations, elderly care at our ashram, and community initiatives carried out on the ground by Kram Yog Sewa Sadan.
      </p>
    </div>

    <!-- Category Filter Controls -->
    <div class="gallery-filter-bar" role="tablist" aria-label="Filter gallery photos">
      <button class="gallery-filter-btn active" data-filter="all" role="tab" aria-selected="true">
        <i class="fa-solid fa-border-all"></i> All Moments (8)
      </button>
      <button class="gallery-filter-btn" data-filter="elder-care" role="tab" aria-selected="false">
        <i class="fa-solid fa-house-chimney-heart"></i> Elder Care & Ashram (2)
      </button>
      <button class="gallery-filter-btn" data-filter="rescue" role="tab" aria-selected="false">
        <i class="fa-solid fa-truck-medical"></i> Rescue & Outreach (3)
      </button>
      <button class="gallery-filter-btn" data-filter="community" role="tab" aria-selected="false">
        <i class="fa-solid fa-users"></i> Community & Events (3)
      </button>
    </div>

    <!-- Gallery Grid -->
    <div class="gallery-grid" id="sevaGalleryGrid">
      <?php foreach ($gallery_items as $index => $item): ?>
        <?php 
          $img_src = $gallery_base_url . $item['image'];
        ?>
        <article class="gallery-card <?php echo $item['featured'] ? 'featured-span' : ''; ?>" 
                 data-category="<?php echo htmlspecialchars($item['category']); ?>"
                 data-index="<?php echo $index; ?>"
                 tabindex="0"
                 role="button"
                 aria-label="View photo: <?php echo htmlspecialchars($item['title']); ?>">
          
          <div class="gallery-card-img-wrapper">
            <span class="gallery-card-badge">
              <i class="fa-solid <?php echo htmlspecialchars($item['tag_icon']); ?>"></i>
              <?php echo htmlspecialchars($item['category_name']); ?>
            </span>
            
            <img src="<?php echo htmlspecialchars($img_src); ?>" 
                 alt="<?php echo htmlspecialchars($item['title']); ?>" 
                 class="gallery-card-img" 
                 loading="lazy">

            <div class="gallery-card-overlay">
              <div class="gallery-zoom-icon">
                <i class="fa-solid fa-magnifying-glass-plus"></i>
              </div>
            </div>
          </div>

          <div class="gallery-card-content">
            <h3 class="gallery-card-title"><?php echo htmlspecialchars($item['title']); ?></h3>
            <p class="gallery-card-desc"><?php echo htmlspecialchars($item['caption']); ?></p>
            <div class="gallery-card-footer">
              <span class="gallery-view-link">
                <i class="fa-regular fa-image"></i> Click to Enlarge
              </span>
              <span style="color:#94a3b8; font-size:11px;">Kram Yog Sewa Sadan</span>
            </div>
          </div>

        </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- Lightbox Modal for Gallery -->
<div class="gallery-modal" id="galleryModal" role="dialog" aria-modal="true" aria-labelledby="modalItemTitle">
  <div class="gallery-modal-content">
    
    <!-- Modal Header -->
    <div class="gallery-modal-header">
      <div class="gallery-modal-title-wrap">
        <span class="gallery-modal-tag" id="modalItemTag">Elder Care</span>
        <h3 id="modalItemTitle">Ashram Family Gathering</h3>
      </div>
      <button type="button" class="gallery-modal-close" id="closeGalleryModalBtn" aria-label="Close photo preview">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>

    <!-- Modal Image Container -->
    <div class="gallery-modal-body">
      <button type="button" class="gallery-nav-btn gallery-nav-prev" id="galleryPrevBtn" aria-label="Previous photo">
        <i class="fa-solid fa-chevron-left"></i>
      </button>
      
      <img src="" alt="" class="gallery-modal-img" id="galleryModalImg">
      
      <button type="button" class="gallery-nav-btn gallery-nav-next" id="galleryNextBtn" aria-label="Next photo">
        <i class="fa-solid fa-chevron-right"></i>
      </button>
    </div>

    <!-- Modal Footer Caption -->
    <div class="gallery-modal-footer">
      <p class="gallery-modal-caption" id="modalItemCaption"></p>
      <span class="gallery-modal-counter" id="modalItemCounter">1 / 8</span>
    </div>

  </div>
</div>

<!-- JavaScript for Gallery Filtering and Lightbox -->
<script>
  (function() {
    // 1. Data Store for Lightbox
    const galleryItemsData = <?php echo json_encode($gallery_items); ?>;
    const baseUrl = '<?php echo $gallery_base_url; ?>';
    
    let currentIndex = 0;
    let visibleIndices = galleryItemsData.map((_, i) => i);

    // 2. DOM Elements
    const filterButtons = document.querySelectorAll('.gallery-filter-btn');
    const galleryCards = document.querySelectorAll('.gallery-card');
    
    const modal = document.getElementById('galleryModal');
    const modalImg = document.getElementById('galleryModalImg');
    const modalTag = document.getElementById('modalItemTag');
    const modalTitle = document.getElementById('modalItemTitle');
    const modalCaption = document.getElementById('modalItemCaption');
    const modalCounter = document.getElementById('modalItemCounter');
    
    const closeBtn = document.getElementById('closeGalleryModalBtn');
    const prevBtn = document.getElementById('galleryPrevBtn');
    const nextBtn = document.getElementById('galleryNextBtn');

    // 3. Category Filter Handler
    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        filterButtons.forEach(b => {
          b.classList.remove('active');
          b.setAttribute('aria-selected', 'false');
        });
        btn.classList.add('active');
        btn.setAttribute('aria-selected', 'true');

        const filter = btn.getAttribute('data-filter');
        visibleIndices = [];

        galleryCards.forEach((card, idx) => {
          const category = card.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            card.style.display = 'flex';
            visibleIndices.push(idx);
          } else {
            card.style.display = 'none';
          }
        });
      });
    });

    // 4. Modal Open Function
    function openModalAtIndex(index) {
      if (index < 0 || index >= galleryItemsData.length) return;
      currentIndex = index;
      
      const item = galleryItemsData[currentIndex];
      modalImg.src = baseUrl + item.image;
      modalImg.alt = item.title;
      modalTag.textContent = item.category_name;
      modalTitle.textContent = item.title;
      modalCaption.textContent = item.caption;
      
      const currentPosInVisible = visibleIndices.indexOf(currentIndex) + 1;
      const totalVisible = visibleIndices.length > 0 ? visibleIndices.length : galleryItemsData.length;
      modalCounter.textContent = (currentPosInVisible > 0 ? currentPosInVisible : (currentIndex + 1)) + ' / ' + totalVisible;

      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeModal() {
      modal.classList.remove('active');
      document.body.style.overflow = '';
      setTimeout(() => {
        modalImg.src = '';
      }, 200);
    }

    function showPrev() {
      if (visibleIndices.length === 0) return;
      let currPos = visibleIndices.indexOf(currentIndex);
      if (currPos <= 0) {
        currPos = visibleIndices.length - 1;
      } else {
        currPos--;
      }
      openModalAtIndex(visibleIndices[currPos]);
    }

    function showNext() {
      if (visibleIndices.length === 0) return;
      let currPos = visibleIndices.indexOf(currentIndex);
      if (currPos >= visibleIndices.length - 1) {
        currPos = 0;
      } else {
        currPos++;
      }
      openModalAtIndex(visibleIndices[currPos]);
    }

    // 5. Card Click Event
    galleryCards.forEach(card => {
      card.addEventListener('click', () => {
        const idx = parseInt(card.getAttribute('data-index'), 10);
        openModalAtIndex(idx);
      });

      card.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          const idx = parseInt(card.getAttribute('data-index'), 10);
          openModalAtIndex(idx);
        }
      });
    });

    // 6. Navigation Buttons
    closeBtn.addEventListener('click', closeModal);
    prevBtn.addEventListener('click', (e) => { e.stopPropagation(); showPrev(); });
    nextBtn.addEventListener('click', (e) => { e.stopPropagation(); showNext(); });

    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        closeModal();
      }
    });

    // 7. Keyboard Navigation (Esc, Left, Right)
    document.addEventListener('keydown', (e) => {
      if (!modal.classList.contains('active')) return;
      if (e.key === 'Escape') {
        closeModal();
      } else if (e.key === 'ArrowLeft') {
        showPrev();
      } else if (e.key === 'ArrowRight') {
        showNext();
      }
    });

  })();
</script>
