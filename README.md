# Reezma Hanan - Personal Portfolio Website

A modern, responsive, and performance-focused developer portfolio website built with semantic HTML5, modern CSS3, and vanilla JavaScript. This repository contains the complete source code, styling architecture, assets, and interactive scripts powering the official portfolio of **Reezma Hanan**.

Live Website: [https://portfolio-website-7mdi.vercel.app/](https://portfolio-website-7mdi.vercel.app/)  
Alternative Mirror: [https://spectacular-narwhal-9eb659.netlify.app/](https://spectacular-narwhal-9eb659.netlify.app/)

---

## Table of Contents

- [Overview](#overview)
- [Key Features](#key-features)
- [Live Demo & Previews](#live-demo--previews)
- [Tech Stack](#tech-stack)
- [Project Architecture](#project-architecture)
- [Featured Sections](#featured-sections)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Local Setup](#local-setup)
- [Deployment](#deployment)
- [Browser Compatibility](#browser-compatibility)
- [Performance & Best Practices](#performance--best-practices)
- [Author](#author)
- [License](#license)

---

## Overview

This portfolio serves as a central hub presenting full-stack engineering applications, machine learning models, open-source program contributions, academic achievements, and verified technical credentials. 

Built entirely without heavy JavaScript frameworks, the site delivers near-instant page loads, smooth 60fps animations, accessible structure, and full responsiveness across mobile phones, tablets, laptops, and ultra-wide desktop monitors.

---

## Key Features

- **Interactive Hero & Particle Canvas:** Custom HTML5 canvas animation rendering floating glass orbs with responsive particle physics.
- **Dynamic Metric Counters:** IntersectionObserver-powered counter animations showcasing completed projects, technical skills, and earned certifications.
- **Categorized Skills Matrix:** Visual technology strips covering 25+ programming languages, frameworks, cloud platforms, databases, and testing tools.
- **Featured Projects Showcase:** Responsive 2-column showcase highlighting flagship full-stack, enterprise, and machine learning applications.
- **Expandable Repositories Drawer:** Interactive `<details>` drawer providing quick access to 13+ supplementary prototypes, academic submissions, and repositories.
- **Open Source Evidence Hub:** Multi-tab switcher (SWOC, OSCG, OSCI, SSOC, GSSOC) with an interactive multi-slide viewer for verified documents, badges, and contribution proofs.
- **Prioritized Credentials & Badges:** Dedicated verification tables highlighting SLIIT University AI/ML Engineer specializations, HackerRank verifications, and professional badges.
- **Direct Resume Access:** One-click preview and download of the official curriculum vitae.
- **Mobile-First Responsive Design:** Adaptive hamburger navigation menu, flexible CSS Grid layouts, and touch-optimized sliders.

---

## Tech Stack

| Layer | Technologies |
| :--- | :--- |
| **Markup** | HTML5 (Semantic, SEO-optimized, Open Graph & Twitter Cards) |
| **Styling** | Modern CSS3 (CSS Variables, Flexbox, CSS Grid, Glassmorphism, Keyframe Animations) |
| **Scripting** | Vanilla JavaScript (ES6+, DOM Manipulation, Canvas API, IntersectionObserver) |
| **Typography** | Google Fonts (Poppins, Fira Code) |
| **Iconography** | Font Awesome 6, SkillIcons, DevIcons |
| **Hosting & CDN** | Vercel, Netlify |

---

## Project Architecture

```
Portfolio-Website/
├── .gitignore                     # Git ignore rules
├── .htaccess                      # Apache server configuration (caching & routing)
├── index.html                     # Primary single-page HTML document
├── styles.css                     # Comprehensive styles, themes, and responsive queries
├── portfolio-script.js            # Interactive behaviors, canvas animations, and sliders
├── Reezma_Hanan_Resume.pdf        # Downloadable resume document
├── profile.jpg                    # Author profile photograph
├── About Me.jpg                   # About section visual asset
├── screenshots/                   # Project screenshots, certificate proofs, and badges
│   ├── SMS.png                    # EduNexus SMS application screenshot
│   ├── LibriQ.png                 # LibriQ LMS application screenshot
│   ├── STYLEO Ceylon.png          # STYLEO Ceylon e-commerce screenshot
│   ├── Event Hub.png              # Event Hub platform screenshot
│   ├── TaskFlow.png               # TaskFlow dashboard screenshot
│   ├── AIML Engineer stage 1.png  # SLIIT AI/ML Stage 1 credential
│   ├── ai ml engineer stage 2.png # SLIIT AI/ML Stage 2 credential
│   ├── ai ml engineer stage 3.png # SLIIT AI/ML Stage 3 credential
│   └── ...                        # Additional verified badges and proof documents
└── README.md                      # Project documentation
```

---

## Featured Sections

### 1. Hero & About
Introduces the author as an Information Technology Undergraduate at the Institute of Technology, University of Moratuwa (ITUM), highlighting core competencies in full-stack web engineering and predictive machine learning.

### 2. Technical Skills Matrix
Organized into 9 distinct technical disciplines:
- Programming Languages (Java, Python, JavaScript, TypeScript, Dart, PHP, C)
- Machine Learning & Data Science (Scikit-Learn, Pandas, NumPy, LightGBM)
- Frameworks & Runtimes (Spring Boot, React, Next.js, Angular, Flutter, Node.js, Express, Laravel)
- Databases & Persistence (MySQL, MongoDB)
- Frontend & Styling (HTML5, CSS3, Tailwind CSS, Bootstrap)
- Cloud, DevOps & Systems (AWS, Azure, Firebase, Docker, Linux)
- Developer Tools & Testing (Git, GitHub, VS Code, IntelliJ IDEA, Postman, Google Colab, Selenium, TestNG)
- IoT & Hardware Simulation (Arduino IDE, Tinkercad, ThingSpeak)
- UI/UX & Design Tools (Figma, Photoshop, Illustrator, Canva)

### 3. Flagship Projects Showcase
Highlights 6 core production and academic applications:
1. **EduNexus SMS:** Full-stack enterprise academic management system built with Spring Boot 3, React 19, Material UI, and MySQL/H2 with automated GPA and AI early warning risk advisor.
2. **LibriQ LMS:** Sri Lankan university library circulation system built with MERN stack, featuring trilingual support, Dewey Decimal classification, and automated LKR fine engine.
3. **ReEz AI:** Cross-platform conversational AI chatbot built with Flutter, Dart, Google Gemini AI streaming API, and Firebase Cloud Firestore.
4. **STYLEO Ceylon:** Production-ready 3-tier apparel platform with vanilla JavaScript asynchronous client, Express REST API, and ACID transactional MySQL 8 checkout.
5. **Electricity Demand Predictor:** End-to-end machine learning time-series pipeline forecasting household electricity consumption with LightGBM (93.1% R² score).
6. **Event Hub:** Academic event management portal with PHP, MySQL, and multi-role access control.

### 4. Open Source Contributions & Verification Slider
Features documentation and evidence across 5 open-source programs:
- SWOC '26 (Social Winter of Code)
- OSCG '26 (Open Source Connect Global)
- OSCI '26 (Open Source Connect India)
- SSOC '26 (Social Summer of Code)
- GSSOC '26 (GirlScript Summer of Code)

Each program card includes an integrated slider cycling through verified contribution proofs, certificates, and direct repository links.

### 5. Certifications & Badges
Displays verified technical credentials categorized by priority:
- SLIIT University AI/ML Engineer (Stages 1, 2, and 3)
- Simplilearn SkillUp Machine Learning using Python
- HackerRank Certified Frontend Developer (React)
- Cisco Networking Academy & Linux Foundation Cybersecurity
- KodeKloud Docker for Absolute Beginners

---

## Getting Started

### Prerequisites

To view or modify this project locally, all you need is a modern web browser (Google Chrome, Mozilla Firefox, Microsoft Edge, or Safari).

### Local Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/reezmahanan/Portfolio-Website.git
   cd Portfolio-Website
   ```

2. **Run with a local development server:**

   - **Using VS Code Live Server:**
     Right-click `index.html` and select **"Open with Live Server"**.

   - **Using Python 3:**
     ```bash
     python -m http.server 8000
     ```
     Navigate to `http://localhost:8000` in your browser.

   - **Using Node.js (`serve`):**
     ```bash
     npx serve .
     ```

3. **Or open directly:**
   You can also open `index.html` directly in any web browser without a local server.

---

## Deployment

The website is statically generated and can be deployed to any static hosting provider:

### Vercel
1. Push your repository to GitHub.
2. Import the project in your Vercel Dashboard.
3. Leave the build command empty (root directory, pure static files).
4. Click **Deploy**.

### Netlify
1. Connect your GitHub repository to Netlify.
2. Set the publish directory to `.`.
3. Deploy site.

---

## Browser Compatibility

Tested and fully supported on:
- Google Chrome (Desktop & Mobile)
- Mozilla Firefox
- Microsoft Edge
- Apple Safari (macOS & iOS)
- Opera

---

## Performance & Best Practices

- **Zero Heavy Dependencies:** Written in vanilla JavaScript with no bulky UI framework bundles.
- **Lazy Loading:** All project images and proof documents utilize native `loading="lazy"` to minimize initial page weight.
- **Optimized Asset Delivery:** SVG vector graphics used for badges and icons to guarantee sharp rendering at any DPI.
- **Accessibility:** Semantic HTML elements (`<nav>`, `<section>`, `<article>`, `<details>`, `<footer>`), aria labels on interactive buttons, and proper contrast ratios.

---

## Author

**Reezma Hanan**  
Information Technology Undergraduate  
Institute of Technology, University of Moratuwa (ITUM), Sri Lanka

- **Portfolio:** [portfolio-website-7mdi.vercel.app](https://portfolio-website-7mdi.vercel.app/)
- **GitHub:** [@reezmahanan](https://github.com/reezmahanan)
- **LinkedIn:** [linkedin.com/in/reezma-hanan](https://www.linkedin.com/in/reezma-hanan)
- **Email:** [reezmahanan@gmail.com](mailto:reezmahanan@gmail.com)
- **Medium:** [@reezmahanan](https://medium.com/@reezmahanan)

---

## License

This project is open-source and available under the [MIT License](LICENSE).
