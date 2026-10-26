# Karm Yog Sewa Sadan Trust — Content & Structure Update Summary

**Date:** 26 October 2026  
**Website:** `kramyogsewasadan.org`  
**Prepared For:** Client / Administrative Review  

---

## 1. Executive Summary

As per the comprehensive 22-page content and structure guidelines provided by the client, the website for **Karm Yog Sewa Sadan Trust** has been upgraded across its primary navigation, landing page components, legal governance references, and core interior pages.

All updates strictly adhere to the official details:
- **Official Legal Name:** Karm Yog Sewa Sadan Trust
- **Legal Constitution:** Registered Charitable Trust under the Indian Trust Act, dated **30 December 2025** (Reg. No: 10394)
- **CSR Eligibility:** Eligible under Companies Act with **CSR-1 Certificate**
- **Registered Office:** H. No. 58/5, Ground Floor, Bhagwan Nagar Colony, Near Police Line, Tehsil Thanesar, District Kurukshetra, Haryana.
- **Executive Office:** 518/1, Jatwada, Near Old Chungi No. 3, Ward – 1, Sonipat – 131001 (Haryana).
- **Official Phones:** +91 9671413639, +91 8396012089
- **Official E-mail:** `karmyogsewasadan@gmail.com`
- **Motto / Subheading:** *“Serving Humanity with Dignity, Compassion and Commitment.”*
- **Hindi Motto:** *“वृद्धजनों का सम्मान, दिव्यांगजनों का सशक्तीकरण, जरूरतमंदों की सहायता और समाज के कल्याण के लिए समर्पित एक मानवीय पहल।”*

---

## 2. Detailed File-by-File Changes

### A. Navigation & Header
#### 1. [`includes/header.php`](file:///c:/xampp/htdocs/kramyogsewasadan.org/includes/header.php)
- **Top Bar Contact:** Updated email to `karmyogsewasadan@gmail.com` and phone numbers to `+91 9671413639` and `+91 8396012089`.
- **Main Menu Dropdown Architecture:** Transformed the navigation into the full **10-category dropdown system** requested by the client:
  1. **Home:** Homepage
  2. **About Us:** About the Trust, Mission & Vision, Objectives, Founder’s Message, Board of Trustees, Our Team
  3. **Our Services:** Old Age Welfare, Residential Care, Health & Rehabilitation, Food & Clothing Support, Education & Scholarships, Women & Family Welfare, Community Welfare
  4. **Our Initiatives:** Senior Citizen Welfare, Disability Inclusion, Education for All, Health Awareness, Social Harmony, Environmental Protection
  5. **Our Impact:** Achievements, Success Stories, Community Outreach, Annual Impact Reports
  6. **Get Involved:** Donate, Volunteer, Become a Member, Partner With Us, Corporate Social Responsibility
  7. **News & Media:** News, Events, Photo Gallery, Video Gallery, Press Releases
  8. **Resources:** Publications, Awareness Materials, Educational Resources, Useful Links
  9. **Transparency:** Trust Registration, Governance, Financial Reports, Annual Reports, Policies
  10. **Contact Us:** Contact Details, Enquiry Form, Location, Grievance Contact
- **Prominent Action Buttons:** Displayed `Donate Now | Volunteer | Contact Us` across both desktop header and the mobile sliding drawer.
- **Mobile Touch Accordion:** Added mobile accordion toggle behavior so multi-level submenus expand and collapse seamlessly on mobile phones without overlapping.

#### 2. [`assets/css/header.css`](file:///c:/xampp/htdocs/kramyogsewasadan.org/assets/css/header.css)
- Added modern CSS styling for multi-level dropdowns with smooth fade/slide transitions and elevation shadows (`rgba(15, 34, 58, 0.12)`).
- Implemented edge-alignment rules for menus on the right-hand side (e.g. `menu-align-right` on News, Resources, Transparency, and Contact) so menus stay within the viewport and do not cause horizontal scrolling.
- Added styling for the `.btn-contact-header` button and mobile dropdown accordion items.

---

### B. Landing Page Components (`index.php`)

#### 3. [`components/narrative.php`](file:///c:/xampp/htdocs/kramyogsewasadan.org/components/narrative.php)
- **Hero & Identity Banner:**
  - Main Heading: `Karm Yog Sewa Sadan Trust`
  - Subheading: `Serving Humanity with Dignity, Compassion and Commitment.`
  - Hindi Message Banner: *“वृद्धजनों का सम्मान, दिव्यांगजनों का सशक्तीकरण, जरूरतमंदों की सहायता और समाज के कल्याण के लिए समर्पित एक मानवीय पहल।”*
  - Official Introduction paragraphs explaining the welfare and dignity of older persons, healthcare assistance, rehabilitation, education, and vocational development.
  - 4 Action Buttons:
    1. `Explore Our Mission` (`pages/vision-mission.php`)
    2. `Our Welfare Activities` (`#coreAreasSection`)
    3. `Support Our Work` (`donate.php`)
    4. `Contact Us` (`pages/contact-us.php`)
- **Welcome to Our Trust Section:**
  - Heading: *“A Commitment to Humanity”*
  - Core philosophy on respect, security, opportunity, and compassionate care for vulnerable populations.
- **Vision and Mission Dual Cards:** Clear side-by-side cards highlighting the client's official Vision and Mission statements.
- **How You Can Help Section:**
  - Heading: *“Be a Part of Positive Change”*
  - Text encouraging contributions of time, knowledge, resources, or financial assistance.
  - 3 Call-to-Action Buttons: `Donate Now`, `Volunteer With Us`, `Partner With Us`.

#### 4. [`assets/css/narrative.css`](file:///c:/xampp/htdocs/kramyogsewasadan.org/assets/css/narrative.css)
- Added dedicated modern styles for the Hindi quote ribbon with saffron gradient and quote icon.
- Added responsive 4-button action strip with navy and emerald color tokens.
- Styled the "Commitment to Humanity" feature card with subtle border and box shadow.
- Styled the "Be a Part of Positive Change" call-to-action box with vibrant gradient and CTA buttons.

#### 5. [`components/our-work.php`](file:///c:/xampp/htdocs/kramyogsewasadan.org/components/our-work.php)
- Changed section heading to **“Our Core Areas of Work”**.
- Rendered the exact **7 Programme Cards** specified by the client:
  1. **Old Age Welfare:** Promoting dignity, care, safety and social participation for senior citizens.
  2. **Health & Well-being:** Supporting health awareness, medical camps and preventive healthcare initiatives.
  3. **Disability Rehabilitation:** Promoting rehabilitation, accessibility, inclusion and participation.
  4. **Education for All:** Supporting educational opportunities, reading facilities and assistance for disadvantaged learners.
  5. **Vocational Training:** Encouraging skills development, livelihood opportunities and productive engagement.
  6. **Women & Family Welfare:** Promoting women's education, family well-being and social awareness.
  7. **Community Development:** Encouraging social harmony, environmental responsibility and community participation.

#### 6. [`assets/css/our-work.css`](file:///c:/xampp/htdocs/kramyogsewasadan.org/assets/css/our-work.css)
- Replaced flat circle icons with responsive modern cards containing cover images, category tag pills, title, description, and "Explore Initiative" arrow links.
- Added smooth hover transformations (`translateY(-7px)` and image zoom `scale(1.08)`).

#### 7. [`components/founder-message.php`](file:///c:/xampp/htdocs/kramyogsewasadan.org/components/founder-message.php)
- Replaced placeholder quotes with the client's **Page 5: Founder's Message** text:
  - Title: *“A Message of Service and Social Responsibility”*
  - Quote: *“At Karm Yog Sewa Sadan Trust, we believe that meaningful social development begins with compassion, responsibility and a genuine commitment to human dignity.”*
  - Official text describing the Trust's purpose, collaboration with stakeholders, and public appeal.
  - Designation: *“Chairperson / Founder, Karm Yog Sewa Sadan Trust”*.

---

### C. Dedicated Interior Pages

#### 8. [`pages/about-us.php`](file:///c:/xampp/htdocs/kramyogsewasadan.org/pages/about-us.php)
- **Legal Constitution:** Added official statement citing registration under the **Indian Trust Act, dated 30 December 2025**.
- **9 Objectives of the Trust:** Formatted and rendered all 9 statutory objectives:
  1. *Welfare of Older Persons* (Old-age homes, care centres, destitute support, food/clothing/shelter)
  2. *Healthcare and Medical Assistance* (Medical camps, geriatric health, partner hospitals)
  3. *Rehabilitation and Vocational Development* (Livelihood skills, social integration)
  4. *Education and Learning* (Disadvantaged learners, reading rooms, libraries, educational materials)
  5. *Women and Family Welfare* (Women's education, family well-being)
  6. *Social Harmony and National Integration* (Mutual respect, peaceful coexistence)
  7. *Environmental Protection* (Water conservation, sanitation, tree plantations)
  8. *Assistance to Disadvantaged Communities* (Economic assistance, scholarships)
  9. *Other Charitable Activities* (Sports, yoga, meditation, lawful charitable programs)

#### 9. [`pages/vision-mission.php`](file:///c:/xampp/htdocs/kramyogsewasadan.org/pages/vision-mission.php)
- Updated Vision and Mission statements to exact client wording.
- Rendered the **8 Core Values** in clean structured cards:
  1. *Human Dignity* — Respecting rights, choices and individuality.
  2. *Compassion* — Responding with empathy and care.
  3. *Inclusion* — Encouraging meaningful participation.
  4. *Accountability* — Maintaining responsible governance and financial records.
  5. *Service* — Promoting voluntary and charitable contributions.
  6. *Equality* — Encouraging fair access to opportunities and support.
  7. *Community Participation* — Working with families, volunteers and institutions.
  8. *Integrity* — Acting honestly and responsibly.

#### 10. [`pages/board-trustees.php`](file:///c:/xampp/htdocs/kramyogsewasadan.org/pages/board-trustees.php)
- Updated introduction to the Board structure: Chairperson, Secretary, Treasurer, and Other Trustees.
- Explicitly documented the **Board's Statutory Responsibilities**:
  - Proper management of Trust property
  - Oversight of charitable activities
  - Maintenance of lawful records
  - Supervision of financial administration
- Preserved trustee profiles for Chairperson Smt. Mamta and Aashram Manager Mr. Pawan Kumar (with avatar `assets/images/manager.jpeg`).

#### 11. [`pages/contact-us.php`](file:///c:/xampp/htdocs/kramyogsewasadan.org/pages/contact-us.php)
- Updated page intro to Page 22 text: *“We Would Be Glad to Hear From You. Whether you wish to learn about our charitable objectives, discuss a partnership, volunteer your time or enquire about a welfare initiative...”*
- Replaced outdated office addresses with official locations:
  - **Registered Office:** `H. No. 58/5, Ground Floor, Bhagwan Nagar Colony, Near Police Line, Tehsil Thanesar, District Kurukshetra, Haryana.`
  - **Executive Office:** `518/1, Jatwada, Near Old Chungi No. 3, Ward – 1, Sonipat – 131001 (Haryana)`
- Official Contact Numbers: `+91 9671413639`, `+91 8396012089`
- Official E-mail: `karmyogsewasadan@gmail.com`
- Added official **Grievance Redressal** contact instructions.

#### 12. [`includes/footer.php`](file:///c:/xampp/htdocs/kramyogsewasadan.org/includes/footer.php)
- Updated branding title to **Karm Yog Sewa Sadan Trust**.
- Updated tagline to official client motto.
- Realigned navigation links to new pages and objectives anchor.
- Updated "Get in Touch" list with Kurukshetra & Sonipat office references, telephone lines, and `karmyogsewasadan@gmail.com`.
- Preserved GPTW certification logo and UPI Scan & Pay QR Code (`assets/images/qr.jpeg`).

---

## 3. Verification & Compliance Checklist

| Item | Requirement | Status |
| :--- | :--- | :--- |
| **10-Category Navigation** | Home, About Us, Services, Initiatives, Impact, Get Involved, News, Resources, Transparency, Contact Us | ✅ Implemented & Mobile Accordion Enabled |
| **Header Buttons** | Donate Now \| Volunteer \| Contact Us | ✅ Added on Desktop & Mobile Drawer |
| **Landing Page Heading** | Karm Yog Sewa Sadan Trust + Subheading | ✅ Updated in `narrative.php` |
| **Hindi Motto Ribbon** | वृद्धजनों का सम्मान, दिव्यांगजनों का सशक्तीकरण... | ✅ Rendered in `narrative.php` & ticker in `news-ticker.php` |
| **4 Action Buttons** | Explore Our Mission, Our Welfare Activities, Support Our Work, Contact Us | ✅ Implemented |
| **Welcome Block** | A Commitment to Humanity | ✅ Implemented |
| **7 Programme Cards** | Old Age, Health, Disability, Education, Vocational, Women/Family, Community | ✅ Implemented in `our-work.php` |
| **Founder's Message** | A Message of Service and Social Responsibility (Page 5) | ✅ Implemented in `founder-message.php` |
| **About Us Page** | Trust Act dated 30 Dec 2025 + 9 Objectives | ✅ Implemented in `pages/about-us.php` |
| **Mission & Values** | Vision, Mission + 8 Core Values | ✅ Implemented in `pages/vision-mission.php` |
| **Board of Trustees** | Roles (Chairperson, Secretary, Treasurer, Trustees) + 4 Responsibilities | ✅ Implemented in `pages/board-trustees.php` |
| **Contact Details** | Kurukshetra Registered Office, Sonipat Executive Office, 9671413639, 8396012089, karmyogsewasadan@gmail.com | ✅ Updated across header, footer & contact-us page |
