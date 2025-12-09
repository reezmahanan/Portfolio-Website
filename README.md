# 🌟 Reezma Hanan - Portfolio Website

A modern, responsive portfolio website showcasing AI/ML projects, web development skills, and professional achievements.

## 🔗 Live Demo

[![View Demo](https://img.shields.io/badge/View-Live%20Demo-blue?style=for-the-badge&logo=vercel)](https://portfolio-website-414x.vercel.app/)

🌐 **Live Site:** [https://portfolio-website-414x.vercel.app/](https://portfolio-website-414x.vercel.app/)

## 📋 Features

### ✨ Main Features
- 🎨 **Modern Design** - Clean, professional UI with glassmorphism effects
- 🌓 **Dark/Light Theme** - Toggle between themes with persistent storage
- 📱 **Fully Responsive** - Works perfectly on all devices
- 🚀 **Fast Loading** - Optimized performance with smooth animations
- 💼 **Portfolio Showcase** - 18+ featured projects with detailed cards
- 📧 **Contact Form** - Functional contact form with validation
- 👁️ **Visitor Counter** - Track unique daily visitors
- ⚡ **Smooth Animations** - Beautiful fade-in effects and transitions
- 🎓 **CV Viewer** - Professional CV page with print/view functionality
- 🏆 **Certificate Showcase** - Clickable certificates with verification links
- 🎬 **Animated Loading Screen** - Beautiful loading animation with tech icons
- 💎 **Brand Color Icons** - Real technology icons with authentic brand colors

### 🎯 Sections
1. **Hero Section** - Eye-catching introduction with typing animation and quick action buttons
2. **About Me** - Professional background and journey as IT student
3. **Skills** - Technical skills with real branded icons and authentic colors
4. **Certificates** - 19+ professional certificates with live verification links
5. **Projects** - Featured projects including EventHub, BookNest, and Weather App
6. **Contact** - Contact form and social media links
7. **CV Page** - Professional curriculum vitae with print functionality

## 🚀 Getting Started

### Prerequisites
- **XAMPP** (or any PHP server)
- PHP 7.4 or higher
- Modern web browser

### Installation

1. **Clone or Download** this repository to your XAMPP `htdocs` folder:
   ```
   c:\xampp\htdocs\portfolio
   ```

2. **Add Your Profile Image**:
   - Add your profile photo as `Profile.jpg` in the portfolio folder
   - Recommended size: 400x400px or larger (square)
   - Supported formats: JPG, PNG

3. **Start XAMPP**:
   - Open XAMPP Control Panel
   - Start Apache server
   - (Optional) Start MySQL if you plan to add database features

4. **Access Your Portfolio**:
   - Open browser and go to: `http://localhost/portfolio`
   - Your portfolio is now live locally!

## 🌐 Deploy to Vercel

### Quick Deploy
1. Push your code to GitHub
2. Go to [Vercel](https://vercel.com)
3. Sign in with GitHub
4. Click "Import Project"
5. Select your `Portfolio-Website` repository
6. Configure:
   - Framework Preset: **Other**
   - Build Command: (leave empty)
   - Output Directory: (leave empty)
   - Install Command: (leave empty)
7. Click **Deploy**
8. Your portfolio will be live at: `https://your-username.vercel.app`

### Update README with Your Vercel URL
After deployment, update the live demo link in README.md with your actual Vercel URL.

## 🛠️ Customization

### Update Personal Information
Edit `index.php` at the top of the file:

```php
$portfolio_config = [
    'name' => 'Your Name',
    'title' => 'Your Title',
    'email' => 'your@email.com',
    'github' => 'https://github.com/yourusername',
    'linkedin' => 'https://linkedin.com/in/yourusername',
    'location' => 'Your Location',
    'university' => 'Your University'
];
```

### Add/Edit Projects
In `index.php`, find the `$projects` array and add your projects:

```php
$projects = [
    [
        'featured' => true, // All projects now shown with featured layout
        'icon' => '🎯', // Large icon for the project
        'title' => 'Your Project Name',
        'description' => 'Project description...',
        'live_demo' => 'https://your-demo-link.com', // Optional
        'github' => 'https://github.com/yourusername/project',
        'features' => ['Feature 1', 'Feature 2', 'Feature 3'], // Feature badges
        'technologies' => ['PHP', 'JavaScript', 'MySQL']
    ],
    // Add more projects...
];
```

### Add/Edit Certificates
In `index.php`, find the `$certificates` array and update with your certifications:

```php
$certificates = [
    [
        'icon' => '🏆',
        'title' => 'Certificate Name',
        'issuer' => 'Issuing Organization',
        'skills' => ['Skill 1', 'Skill 2', 'Skill 3']
    ],
    // Add more certificates...
];
```

### Customize Colors
Edit `styles.css` to change the color scheme:

```css
:root {
    --primary-color: #6366f1;    /* Main brand color */
    --secondary-color: #8b5cf6;  /* Secondary color */
    --accent-color: #ec4899;     /* Accent color */
    /* ... */
}
```

### Update Skills
In `index.php`, find the `$skills_categories` array to update your skills.

## 📧 Contact Form Setup

The contact form currently logs messages to `contact_messages.log`. For production:

### Option 1: Use PHP mail()
```php
mail($to, $subject, $email_body, $headers);
```

### Option 2: Use PHPMailer (Recommended)
1. Install PHPMailer via Composer:
   ```bash
   composer require phpmailer/phpmailer
   ```

2. Update `send_message.php` with PHPMailer configuration

### Option 3: Use FormSubmit.co (No Backend Required)
Change form action to:
```html
<form action="https://formsubmit.co/your@email.com" method="POST">
```

## 🎨 File Structure

```
portfolio/
│
├── index.php                 # Main HTML structure with PHP
├── styles.css               # Main CSS styles with glassmorphism
├── portfolio-script.js      # JavaScript functionality
├── send_message.php         # Contact form handler
├── visitor_count.txt        # Visitor counter data
├── Profile.jpg             # Your profile photo
├── contact_messages.log    # Contact form logs (auto-generated)
├── .gitignore              # Git ignore file
└── README.md              # This file
```

## 🎉 Recent Updates (December 2025)

### New Features Added:
- ✅ **CV Viewer Page** (`cv.php`) - Professional CV with print/view functionality
- ✅ **Animated Loading Screen** - Tech-themed loading animation with floating icons
- ✅ **Certificate Links** - All certificates now link to verification pages
- ✅ **Real Tech Icons** - Font Awesome icons with authentic brand colors
- ✅ **Project Updates** - Added EventHub, BookNest, and Weather App projects
- ✅ **Enhanced UI** - Transparent background patterns and improved animations

## 🌟 Features to Add (Optional)

- [ ] Integrate with a database for dynamic content
- [ ] Add a blog section
- [ ] Add testimonials section
- [ ] Integrate with Google Analytics
- [ ] Add email notifications for contact form
- [ ] Add reCAPTCHA for spam protection
- [ ] Add project demo videos/screenshots
- [ ] Add remaining certificate verification links

## 🐛 Troubleshooting

### Portfolio not loading?
- Make sure XAMPP Apache is running
- Check if you're accessing `http://localhost/portfolio`
- Check Apache error logs in XAMPP

### Images not showing?
- Add `Profile.jpg` to the portfolio folder
- Check file name case sensitivity

### Contact form not working?
- Check PHP error logs
- Verify `send_message.php` has proper permissions
- Check browser console for JavaScript errors

### Visitor counter not working?
- Ensure `visitor_count.txt` is writable
- Check file permissions

## 📱 Responsive Breakpoints

- Desktop: 1200px and above
- Tablet: 768px - 1199px
- Mobile: Below 768px

## 🎯 Browser Support

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)

## 📄 License

This portfolio is open source. Feel free to use it as a template for your own portfolio!

## 👤 Author

**Reezma Hanan**
- GitHub: [@reezmahanan](https://github.com/reezmahanan)
- Email: reezmahanan@gmail.com
- LinkedIn: [Reezma Hanan](https://linkedin.com/in/reezmahanan)

## 🙏 Acknowledgments

- Font Awesome for icons
- Google Fonts for typography
- XAMPP for local development
- All the amazing open-source projects that inspire this work

---

⭐ **Star this repository if you found it helpful!**

**Built with ❤️ by Reezma Hanan**

*Showcasing the journey of a passionate IT student*

🔧 **Need help?** Open an issue or reach out via email.

🚀 **Happy Coding!**
