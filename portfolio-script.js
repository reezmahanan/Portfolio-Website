// Portfolio JavaScript Functionality
document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Portfolio loaded successfully!');
    
    // Typing animation
    const texts = [
        'Reezma Hanan 👋',
        'Web Developer 💻', 
        'IT Student 🎓',
        'Tech Explorer 🚀',
        'Problem Solver 🧩',
        'Cloud Enthusiast ☁️'
    ];
    
    let textIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typingElement = document.getElementById('typingText');
    
    function typeWriter() {
        const currentText = texts[textIndex];
        
        if (isDeleting) {
            typingElement.textContent = currentText.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typingElement.textContent = currentText.substring(0, charIndex + 1);
            charIndex++;
        }
        
        let typeSpeed = isDeleting ? 100 : 150;
        
        if (!isDeleting && charIndex === currentText.length) {
            typeSpeed = 2000;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            textIndex = (textIndex + 1) % texts.length;
            typeSpeed = 500;
        }
        
        setTimeout(typeWriter, typeSpeed);
    }
    
    // Start typing animation
    typeWriter();
    
    // Theme toggle functionality
    const themeToggle = document.getElementById('themeToggle');
    let isDark = false;
    
    themeToggle.addEventListener('click', function() {
        isDark = !isDark;
        document.body.classList.toggle('dark-theme', isDark);
        themeToggle.textContent = isDark ? '☀️' : '🌙';
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });
    
    // Load saved theme preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        isDark = true;
        document.body.classList.add('dark-theme');
        themeToggle.textContent = '☀️';
    }

    // Visitor Counter Functionality
    function updateVisitorCount() {
        // Get current visitor count from localStorage
        let visitorCount = localStorage.getItem('portfolioVisitorCount');
        
        if (!visitorCount) {
            // First time visitor
            visitorCount = 1;
        } else {
            // Check if user visited today (to avoid counting same user multiple times per day)
            const lastVisit = localStorage.getItem('portfolioLastVisit');
            const today = new Date().toDateString();
            
            if (lastVisit !== today) {
                // New day visit
                visitorCount = parseInt(visitorCount) + 1;
            }
        }
        
        // Save updated count and today's date
        localStorage.setItem('portfolioVisitorCount', visitorCount);
        localStorage.setItem('portfolioLastVisit', new Date().toDateString());
        
        // Display visitor count with animation
        const visitorElement = document.getElementById('visitorCount');
        const footerVisitorElement = document.getElementById('footerVisitorCount');
        
        if (visitorElement || footerVisitorElement) {
            // Animate the count
            let currentCount = 0;
            const targetCount = parseInt(visitorCount);
            const increment = Math.max(1, Math.floor(targetCount / 50));
            
            const countAnimation = setInterval(() => {
                currentCount += increment;
                if (currentCount >= targetCount) {
                    currentCount = targetCount;
                    clearInterval(countAnimation);
                }
                const formattedCount = currentCount.toLocaleString();
                if (visitorElement) visitorElement.textContent = formattedCount;
                if (footerVisitorElement) footerVisitorElement.textContent = formattedCount;
            }, 30);
        }
    }

    // Initialize visitor counter
    updateVisitorCount();
    
    // Mobile menu toggle
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const navMenu = document.getElementById('navMenu');
    
    mobileMenuToggle.addEventListener('click', function() {
        navMenu.classList.toggle('active');
        const icon = mobileMenuToggle.querySelector('i');
        icon.className = navMenu.classList.contains('active') ? 'fas fa-times' : 'fas fa-bars';
    });
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                // Close mobile menu if open
                navMenu.classList.remove('active');
                mobileMenuToggle.querySelector('i').className = 'fas fa-bars';
            }
        });
    });
    
    // Scroll animations using Intersection Observer
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    // Observe all fade-in elements
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
    
    // Counter animation for statistics
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 50;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target + '+';
                clearInterval(timer);
            } else {
                element.textContent = Math.ceil(current) + '+';
            }
        }, 30);
    }
    
    // Animate counters when they become visible
    const counters = document.querySelectorAll('.stat-number');
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.textContent);
                animateCounter(entry.target, target);
                counterObserver.unobserve(entry.target);
            }
        });
    });
    
    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
    
    // Contact form handling
    const contactForm = document.getElementById('contactForm');
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(contactForm);
        const name = formData.get('name');
        const email = formData.get('email');
        const subject = formData.get('subject');
        const message = formData.get('message');
        
        // Create mailto link with form data
        const mailtoLink = `mailto:reezmahanan@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(`Name: ${name}\nEmail: ${email}\n\nMessage:\n${message}`)}`;
        
        // Open email client
        window.location.href = mailtoLink;
        
        // Show success message
        showNotification('Thank you for your message! Your email client should open now.', 'success');
        
        // Reset form
        contactForm.reset();
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 100) {
            navbar.style.background = isDark ? 'rgba(10, 10, 10, 0.95)' : 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        } else {
            navbar.style.background = isDark ? 'rgba(10, 10, 10, 0.95)' : 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = 'none';
        }
    });
    
    // Hide loading screen with animation
    setTimeout(() => {
        const loading = document.getElementById('loading');
        loading.classList.add('hide');
        setTimeout(() => {
            loading.style.display = 'none';
        }, 500);
    }, 1000);
    
    // Keyboard navigation shortcuts
    document.addEventListener('keydown', function(e) {
        // Press T to toggle theme
        if (e.key === 't' || e.key === 'T') {
            if (!e.target.matches('input, textarea')) {
                themeToggle.click();
            }
        }
        // Press Escape to close mobile menu
        if (e.key === 'Escape') {
            navMenu.classList.remove('active');
            mobileMenuToggle.querySelector('i').className = 'fas fa-bars';
        }
    });
    
    // Enhanced hover effects for project cards
    document.querySelectorAll('.project-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
            this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Interactive skill tags
    document.querySelectorAll('.skill-tag').forEach(tag => {
        tag.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
            
            // Add a little celebration effect
            createSparkle(this);
        });
    });
    
    // Certificate cards interaction
    document.querySelectorAll('.certificate-card').forEach(card => {
        card.addEventListener('click', function() {
            const title = this.querySelector('.certificate-title').textContent;
            const issuer = this.querySelector('.certificate-issuer').textContent;
            showNotification(`Certificate: ${title} from ${issuer}`, 'info');
        });
    });
    
    // Utility function to show notifications
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? '#27ae60' : type === 'error' ? '#e74c3c' : '#3498db'};
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            z-index: 10000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.3s ease;
            max-width: 300px;
            font-size: 14px;
            font-weight: 500;
        `;
        
        notification.textContent = message;
        document.body.appendChild(notification);
        
        // Auto remove after 3 seconds
        setTimeout(() => {
            notification.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }
    
    // Utility function to create sparkle effect
    function createSparkle(element) {
        const sparkle = document.createElement('div');
        sparkle.innerHTML = '✨';
        sparkle.style.cssText = `
            position: absolute;
            pointer-events: none;
            font-size: 20px;
            animation: sparkleAnimation 1s ease-out forwards;
            z-index: 1000;
        `;
        
        const rect = element.getBoundingClientRect();
        sparkle.style.left = rect.left + rect.width / 2 + 'px';
        sparkle.style.top = rect.top + rect.height / 2 + 'px';
        
        document.body.appendChild(sparkle);
        
        setTimeout(() => {
            document.body.removeChild(sparkle);
        }, 1000);
    }
    
    // Add CSS animations for notifications and sparkles
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
        
        @keyframes sparkleAnimation {
            0% {
                transform: translate(-50%, -50%) scale(0) rotate(0deg);
                opacity: 1;
            }
            50% {
                transform: translate(-50%, -50%) scale(1.2) rotate(180deg);
                opacity: 1;
            }
            100% {
                transform: translate(-50%, -50%) scale(0) rotate(360deg);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
    
    // Console welcome message with tips
    console.log('💡 Keyboard shortcuts:');
    console.log('  T: Toggle theme (when not typing)');
    console.log('  Escape: Close mobile menu');
    console.log('🎨 Click skill tags for interaction!');
    console.log('📜 Click certificate cards for details!');
    console.log('🌙 Toggle between dark and light themes!');
});

// Performance optimization: Debounce scroll events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Optimized scroll handler
const optimizedScrollHandler = debounce(() => {
    // Any additional scroll-based functionality can go here
}, 10);

window.addEventListener('scroll', optimizedScrollHandler);