<?php
/**
 * components/welcome-popup.php
 * ============================================================
 * Official Welcome Brochure Modal Pop-Up Component
 * Automatically displays KYSS Broucher on initial website load
 * Kram Yog Sewa Sadan Trust
 * ============================================================
 */

// Dynamically determine base URL for assets
$popup_base_url = '';
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($request_uri, 'kramyogsewasadan.org') !== false) {
    $popup_base_url = substr($request_uri, 0, strpos($request_uri, 'kramyogsewasadan.org') + strlen('kramyogsewasadan.org')) . '/';
} elseif (strpos($request_uri, 'gloabl-rise') !== false) {
    $popup_base_url = substr($request_uri, 0, strpos($request_uri, 'gloabl-rise') + strlen('gloabl-rise')) . '/';
} else {
    $popup_base_url = '/';
}

$brochure_img = $popup_base_url . 'assets/images/KYSS%20Broucher_page-0001.jpg';
$brochure_pdf = $popup_base_url . 'certificates/KYSS%20Broucher.pdf';
$donate_url   = $popup_base_url . 'donate.php';
?>

<!-- Welcome Brochure Pop-up Overlay -->
<div class="welcome-popup-backdrop" id="welcomePopup" role="dialog" aria-modal="true" aria-labelledby="welcomePopupTitle">
  <div class="welcome-popup-dialog">
    
    <!-- Close Button (X) -->
    <button type="button" class="welcome-popup-close-btn" id="closeWelcomePopupBtn" aria-label="Close Brochure Pop-up">
      <i class="fa-solid fa-xmark"></i>
    </button>

    <!-- Modal Body: High-Resolution Brochure Image -->
    <div class="welcome-popup-body">
      <img src="<?php echo htmlspecialchars($brochure_img); ?>" 
           alt="कर्म योग सेवा सदन ट्रस्ट - सेवा ही कर्म, मानवता ही धर्म | Official Brochure" 
           class="welcome-popup-img"
           id="welcomePopupTitle">
    </div>

    <!-- Modal Footer Actions Bar -->
    <div class="welcome-popup-footer">
      <a href="<?php echo htmlspecialchars($donate_url); ?>" class="welcome-popup-btn-donate">
        <i class="fa-solid fa-heart"></i> सहयोग करें / Donate
      </a>
      <a href="<?php echo htmlspecialchars($brochure_pdf); ?>" download="KYSS-Official-Brochure.pdf" class="welcome-popup-btn-pdf">
        <i class="fa-solid fa-file-pdf"></i> Download PDF
      </a>
      <button type="button" class="welcome-popup-btn-dismiss" id="dismissWelcomePopupBtn">
        वेबसाइट पर जाएँ &rsaquo;
      </button>
    </div>

  </div>
</div>

<!-- Floating Re-open Trigger Badge (Bottom Left) -->
<button type="button" class="welcome-popup-floating-badge" id="reopenBrochureBadge" aria-label="Open Organization Brochure">
  <i class="fa-solid fa-book-open"></i> ट्रस्ट ब्रोशर
</button>

<!-- Pop-up Interaction Script -->
<script>
  (function() {
    const popup = document.getElementById('welcomePopup');
    const closeBtn = document.getElementById('closeWelcomePopupBtn');
    const dismissBtn = document.getElementById('dismissWelcomePopupBtn');
    const reopenBadge = document.getElementById('reopenBrochureBadge');

    function openWelcomePopup() {
      if (popup) {
        popup.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    }

    function closeWelcomePopup() {
      if (popup) {
        popup.classList.remove('active');
        document.body.style.overflow = '';
        // Remember user closed it in this browsing session
        try {
          sessionStorage.setItem('kyss_brochure_seen', 'true');
        } catch (e) {}
      }
    }

    // Automatically trigger on page load after a smooth 600ms delay
    window.addEventListener('DOMContentLoaded', () => {
      setTimeout(() => {
        openWelcomePopup();
      }, 600);
    });

    // Close button click
    if (closeBtn) {
      closeBtn.addEventListener('click', closeWelcomePopup);
    }

    // Dismiss link click
    if (dismissBtn) {
      dismissBtn.addEventListener('click', closeWelcomePopup);
    }

    // Click on backdrop outside dialog to close
    if (popup) {
      popup.addEventListener('click', (e) => {
        if (e.target === popup) {
          closeWelcomePopup();
        }
      });
    }

    // Escape key press to close
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && popup && popup.classList.contains('active')) {
        closeWelcomePopup();
      }
    });

    // Reopen badge click
    if (reopenBadge) {
      reopenBadge.addEventListener('click', () => {
        openWelcomePopup();
      });
    }
  })();
</script>
