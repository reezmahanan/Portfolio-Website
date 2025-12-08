# 🌟 Reezma Hanan - Portfolio Website

A modern, responsive portfolio website showcasing AI/ML projects, web development skills, and professional achievements.

## 📋 Features

### ✨ Main Features
- 🎨 **Modern Design** - Clean, professional UI with smooth animations
- 🌓 **Dark/Light Theme** - Toggle between themes with persistent storage
- 📱 **Fully Responsive** - Works perfectly on all devices
- 🚀 **Fast Loading** - Optimized performance with loading screen
- 💼 **Portfolio Showcase** - Featured projects with live demos
- 🤖 **AI/ML Section** - Dedicated section for AI/ML projects
- 🏆 **Certificates** - Display your achievements and certifications
- 📧 **Contact Form** - Functional contact form with validation
- 👁️ **Visitor Counter** - Track unique daily visitors
- ⚡ **Smooth Animations** - Beautiful fade-in effects and transitions

### 🎯 Sections
1. **Hero Section** - Eye-catching introduction with typing animation
2. **About Me** - Professional background and passion for AI/ML
3. **Skills** - Technical skills organized by categories
4. **AI/ML Projects** - Machine learning and AI projects showcase
5. **Certificates** - Professional certifications and achievements
6. **Projects** - Full-stack web development projects
7. **Contact** - Contact form and social media links

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
        'featured' => true, // Set to true for featured projects
        'title' => '🎯 Your Project Name',
        'description' => 'Project description...',
        'live_demo' => 'https://your-demo-link.com',
        'github' => 'https://github.com/yourusername/project',
        'features' => ['Feature 1', 'Feature 2'],
        'technologies' => ['PHP', 'JavaScript', 'MySQL']
    ],
    // Add more projects...
];
```

### Add/Edit Certificates
In `index.php`, find the `$certificates` array:

```php
$certificates = [
    [
        'icon' => '🏆',
        'title' => 'Certificate Name',
        'issuer' => 'Issuing Organization',
        'date' => '2024',
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
├── styles.css               # Main CSS styles
├── portfolio-styles.css     # Additional CSS (AI/ML section)
├── portfolio-script.js      # JavaScript functionality
├── send_message.php         # Contact form handler
├── visitor_count.txt        # Visitor counter data
├── Profile.jpg             # Your profile photo (add this)
├── contact_messages.log    # Contact form logs (auto-generated)
└── README.md              # This file
```

## 🌟 Features to Add (Optional)

- [ ] Add actual certificates images/PDFs
- [ ] Integrate with a database for dynamic content
- [ ] Add a blog section
- [ ] Add more AI/ML projects
- [ ] Add testimonials section
- [ ] Add resume download feature
- [ ] Integrate with Google Analytics
- [ ] Add email notifications for contact form
- [ ] Add reCAPTCHA for spam protection

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

🔧 **Need help?** Open an issue or reach out via email.

🚀 **Happy Coding!**
