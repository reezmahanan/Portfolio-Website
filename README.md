# 🌟 Reezma Hanan - Portfolio Website

A modern, responsive portfolio website showcasing software engineering projects, web development skills, and professional achievements. Built with pure HTML, CSS, and JavaScript - no backend required!

## ✨ Features

### 🎯 Main Features
- 🎨 **Modern Minimalist Design** - Professional UI with glassmorphism effects and smooth animations
- 🌓 **Dark/Light Theme Toggle** - Seamless theme switching with localStorage persistence
- 📱 **Fully Responsive** - Optimized for all devices (mobile, tablet, desktop)
- ⚡ **Fast Performance** - Pure HTML/CSS/JS with no backend dependencies
- 💼 **Portfolio Showcase** - 12+ featured projects with live demos
- 📧 **Contact Form** - Email integration with FormSubmit.co (no PHP needed)
- 🎓 **Professional CV** - Printable CV page with comprehensive details
- 🏆 **Certificate Gallery** - 19+ professional certifications with filtering
- 🔄 **Project Filtering** - Browse projects by category
- 👁️ **Visitor Counter** - Track site visits with localStorage
- ✅ **Form Validation** - Real-time email validation with visual feedback

### 📑 Sections

1. **Hero Section** - Animated greeting with circular profile badge
2. **About Me** - Professional summary and career objectives
3. **Education** - Academic qualifications from University of Moratuwa
4. **Skills** - Technical skills organized by category with branded icons
5. **Certificates** - 19+ certifications (Cisco, AWS, HackerRank, etc.)
6. **Projects** - 12+ full-stack projects with descriptions and tech stacks
7. **Contact** - Email form with validation and social media links
8. **CV Page** - Comprehensive resume with print functionality

## 🚀 Quick Start

### Option 1: Open Directly (Recommended)
Simply open `index.html` in any modern web browser - no server needed!

### Option 2: Use Local Server
```bash
# Using Python
python -m http.server 8000

# Using PHP
php -S localhost:8000

# Using Node.js (http-server)
npx http-server
```

Then open: `http://localhost:8000`

## 📁 Project Structure

```
portfolio/
├── index.html              # Main portfolio page
├── cv.html                 # Professional CV page
├── styles.css              # All styling and animations
├── portfolio-script.js     # All functionality and interactions
├── profile.jpg             # Profile picture
├── About Me.jpg            # About section image
├── .htaccess               # Server configuration (optional)
└── README.md               # This file
```

## 🛠️ Technologies Used

### Frontend
- **HTML5** - Semantic markup with accessibility features
- **CSS3** - Modern styling with flexbox, grid, and animations
- **JavaScript (ES6+)** - Vanilla JS for all interactions

### Features & APIs
- **FormSubmit.co** - Free email service for contact form
- **Font Awesome 6** - Icon library
- **Google Fonts** - Poppins & Fira Code fonts
- **localStorage API** - Theme and visitor counter persistence

## 📧 Contact Form Setup

The contact form uses **FormSubmit.co** (free email service):

### First Time Setup:
1. Open your website and submit the contact form
2. Check your email inbox for FormSubmit verification
3. Click the activation link
4. Done! All future messages will arrive in your inbox

### Features:
- ✅ Client-side validation (name, email, subject, message)
- ✅ Real-time error messages
- ✅ Email format validation with regex
- ✅ Auto-response to sender
- ✅ No PHP or backend required

## 🎨 Customization

### Update Personal Information

**In `index.html`:**
- Line 6-9: Update meta tags (name, description, keywords)
- Line 20: Update Twitter description
- Line 374: Update hero section name
- Line 1089: Update FormSubmit email address

**In `cv.html`:**
- Line 363-373: Update contact information

**In `portfolio-script.js`:**
- Line 354: Update FormSubmit email address

### Change Theme Colors

Edit CSS variables in `styles.css` (around line 1-50):

```css
:root {
    --primary-color: #6366f1;    /* Main brand color */
    --secondary-color: #8b5cf6;  /* Secondary color */
    --accent-color: #06b6d4;     /* Accent color */
}
```

### Add/Remove Projects

Edit the Projects section in `index.html` (around line 700-900):

```html
<div class="project-card" data-category="web">
    <div class="project-image">
        <img src="your-image.jpg" alt="Project Name">
        <div class="project-overlay">
            <a href="demo-link" class="project-link">Live Demo</a>
            <a href="github-link" class="project-link">GitHub</a>
        </div>
    </div>
    <!-- Add your project details -->
</div>
```

## 🚀 Deployment

### Free Hosting Options:

1. **GitHub Pages** (Recommended)
   - Create a GitHub repository
   - Upload all files
   - Enable GitHub Pages in repository settings
   - Your site will be live at: `username.github.io/repo-name`

2. **Netlify**
   - Drag and drop your folder to netlify.com
   - Instant deployment with free SSL

3. **Vercel**
   - Connect your GitHub repository
   - Automatic deployments on every push

4. **InfinityFree**
   - Free PHP hosting with cPanel
   - Upload via FTP or File Manager

## 📱 Browser Support

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## 🔧 Features Breakdown

### Dark/Light Theme
- Automatic theme persistence using localStorage
- Smooth transition animations
- System preference detection (optional)

### Contact Form Validation
- **Name**: 2-100 characters, letters and spaces only
- **Email**: Valid email format with regex pattern
- **Subject**: 3-200 characters required
- **Message**: 10-1000 characters required
- Real-time validation with visual feedback

### Visitor Counter
- Stores visit count in localStorage
- One count per day per browser
- No database required

### Project Filtering
- Filter by: All, Web, Desktop, Python
- Smooth fade animations
- Responsive grid layout

## 📄 License

This project is open source and available for personal and educational use.

## 👤 Author

**Reezma Hanan**
- 🌐 Portfolio: [reezmaportfolio.great-site.net](https://reezmaportfolio.great-site.net)
- 💼 LinkedIn: [linkedin.com/in/reezma-hanan](https://linkedin.com/in/reezma-hanan)
- 🐙 GitHub: [github.com/reezmahanan](https://github.com/reezmahanan)
- 📧 Email: reezmahanan@gmail.com

## 🙏 Acknowledgments

- Font Awesome for icons
- Google Fonts for typography
- FormSubmit.co for email service
- Inspiration from modern portfolio designs

---

⭐ **Star this repository if you find it helpful!**

💬 **Questions?** Feel free to reach out via the contact form on the website!

🚀 **Happy Coding!**
