// Portfolio JavaScript Functionality

// ============================================
// Visitor Counter (counts every visit)
// ============================================
function updateVisitorCount() {
    let visitorCount = localStorage.getItem('visitorCount');
    
    if (visitorCount) {
        visitorCount = parseInt(visitorCount) + 1;
    } else {
        visitorCount = 1;
    }
    
    localStorage.setItem('visitorCount', visitorCount);
    
    // Update visitor count in footer
    const visitorCountElements = document.querySelectorAll('#footerVisitorCount, #visitorCount');
    visitorCountElements.forEach(el => {
        if (el) el.textContent = visitorCount;
    });
    
    return visitorCount;
}

// Initialize visitor count on page load
updateVisitorCount();

// ============================================
// Loading Screen
// ============================================
window.addEventListener('load', () => {
    const loading = document.getElementById('loading');
    setTimeout(() => {
        loading.classList.add('hidden');
    }, 300);
});

// ============================================
// Theme Toggle
// ============================================
const themeToggle = document.getElementById('themeToggle');
const html = document.documentElement;

// Check for saved theme preference or default to dark mode
const currentTheme = localStorage.getItem('theme') || 'dark';
html.setAttribute('data-theme', currentTheme);
themeToggle.textContent = currentTheme === 'dark' ? '☀️' : '🌙';

themeToggle.addEventListener('click', () => {
    const theme = html.getAttribute('data-theme');
    const newTheme = theme === 'light' ? 'dark' : 'light';
    
    html.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    themeToggle.textContent = newTheme === 'dark' ? '☀️' : '🌙';
});

// ============================================
// Mobile Menu Toggle
// ============================================
const mobileMenuToggle = document.getElementById('mobileMenuToggle');
const navMenu = document.getElementById('navMenu');

mobileMenuToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    
    // Change icon
    const icon = mobileMenuToggle.querySelector('i');
    if (navMenu.classList.contains('active')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
    } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    }
});

// Close mobile menu when clicking on a link
const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        const icon = mobileMenuToggle.querySelector('i');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    });
});

// ============================================
// Active Navigation Link on Scroll
// ============================================
const sections = document.querySelectorAll('.section');

window.addEventListener('scroll', () => {
    let current = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (scrollY >= sectionTop - 200) {
            current = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').substring(1) === current) {
            link.classList.add('active');
        }
    });
    
    // Add scrolled class to navbar
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// ============================================
// Smooth Scroll Animation
// ============================================
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }, index * 100);
        }
    });
}, {
    threshold: 0.1
});

const fadeElements = document.querySelectorAll('.fade-in');
fadeElements.forEach(el => {
    observer.observe(el);
});

// ============================================
// Counter Animation for Stats
// ============================================
function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);
    
    const counter = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.textContent = target;
            clearInterval(counter);
        } else {
            element.textContent = Math.ceil(start);
        }
    }, 16);
}

// Animate counters when they come into view
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const statNumber = entry.target.querySelector('.stat-number');
            const target = parseInt(statNumber.textContent);
            animateCounter(statNumber, target);
            statsObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

const statItems = document.querySelectorAll('.stat-item');
statItems.forEach(item => {
    statsObserver.observe(item);
});

// ============================================
// Contact Form Handling
// ============================================
const contactForm = document.getElementById('contactForm');

// ============================================
// EMAIL VALIDATION (CLIENT-SIDE ONLY - NO PHP)
// ============================================

// Enhanced email validation function
function isValidEmail(email) {
    const emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
    return emailRegex.test(email);
}

// Validate name (letters and spaces only)
function isValidName(name) {
    const nameRegex = /^[A-Za-z\s]{2,100}$/;
    return nameRegex.test(name);
}

// Real-time validation for each field
function setupRealtimeValidation() {
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const subjectInput = document.getElementById('subject');
    const messageInput = document.getElementById('message');
    
    // Name validation
    nameInput.addEventListener('blur', function() {
        const error = document.getElementById('nameError');
        if (!this.value.trim()) {
            error.textContent = 'Name is required';
            this.style.borderColor = '#ef4444';
        } else if (!isValidName(this.value.trim())) {
            error.textContent = 'Please enter a valid name (letters and spaces only)';
            this.style.borderColor = '#ef4444';
        } else {
            error.textContent = '';
            this.style.borderColor = '#10b981';
        }
    });
    
    // Email validation
    emailInput.addEventListener('blur', function() {
        const error = document.getElementById('emailError');
        if (!this.value.trim()) {
            error.textContent = 'Email is required';
            this.style.borderColor = '#ef4444';
        } else if (!isValidEmail(this.value.trim())) {
            error.textContent = 'Please enter a valid email address';
            this.style.borderColor = '#ef4444';
        } else {
            error.textContent = '';
            this.style.borderColor = '#10b981';
        }
    });
    
    // Subject validation
    subjectInput.addEventListener('blur', function() {
        const error = document.getElementById('subjectError');
        if (!this.value.trim()) {
            error.textContent = 'Subject is required';
            this.style.borderColor = '#ef4444';
        } else if (this.value.trim().length < 3) {
            error.textContent = 'Subject must be at least 3 characters';
            this.style.borderColor = '#ef4444';
        } else {
            error.textContent = '';
            this.style.borderColor = '#10b981';
        }
    });
    
    // Message validation
    messageInput.addEventListener('blur', function() {
        const error = document.getElementById('messageError');
        if (!this.value.trim()) {
            error.textContent = 'Message is required';
            this.style.borderColor = '#ef4444';
        } else if (this.value.trim().length < 10) {
            error.textContent = 'Message must be at least 10 characters';
            this.style.borderColor = '#ef4444';
        } else {
            error.textContent = '';
            this.style.borderColor = '#10b981';
        }
    });
}

// Initialize real-time validation
setupRealtimeValidation();

// Form submission with comprehensive validation
contactForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Get form values
    const name = contactForm.querySelector('#name').value.trim();
    const email = contactForm.querySelector('#email').value.trim();
    const subject = contactForm.querySelector('#subject').value.trim();
    const message = contactForm.querySelector('#message').value.trim();
    
    // Comprehensive validation
    let isValid = true;
    
    // Validate name
    if (!name) {
        document.getElementById('nameError').textContent = 'Name is required';
        document.getElementById('name').style.borderColor = '#ef4444';
        isValid = false;
    } else if (!isValidName(name)) {
        document.getElementById('nameError').textContent = 'Please enter a valid name (letters and spaces only)';
        document.getElementById('name').style.borderColor = '#ef4444';
        isValid = false;
    }
    
    // Validate email
    if (!email) {
        document.getElementById('emailError').textContent = 'Email is required';
        document.getElementById('email').style.borderColor = '#ef4444';
        isValid = false;
    } else if (!isValidEmail(email)) {
        document.getElementById('emailError').textContent = 'Please enter a valid email address';
        document.getElementById('email').style.borderColor = '#ef4444';
        showNotification('Please enter a valid email address 📧', 'error');
        isValid = false;
    }
    
    // Validate subject
    if (!subject) {
        document.getElementById('subjectError').textContent = 'Subject is required';
        document.getElementById('subject').style.borderColor = '#ef4444';
        isValid = false;
    } else if (subject.length < 3) {
        document.getElementById('subjectError').textContent = 'Subject must be at least 3 characters';
        document.getElementById('subject').style.borderColor = '#ef4444';
        isValid = false;
    }
    
    // Validate message
    if (!message) {
        document.getElementById('messageError').textContent = 'Message is required';
        document.getElementById('message').style.borderColor = '#ef4444';
        isValid = false;
    } else if (message.length < 10) {
        document.getElementById('messageError').textContent = 'Message must be at least 10 characters';
        document.getElementById('message').style.borderColor = '#ef4444';
        isValid = false;
    }
    
    // Stop if validation fails
    if (!isValid) {
        showNotification('Please fix the errors in the form ⚠️', 'error');
        return;
    }
    
    // Show loading state
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    submitBtn.disabled = true;
    
    // Clear all error messages and borders before submission
    document.querySelectorAll('.form-error').forEach(err => err.textContent = '');
    document.querySelectorAll('.form-group input, .form-group textarea').forEach(input => {
        input.style.borderColor = '';
    });
    
    // Let the form submit naturally to FormSubmit.co
    // This is required for FormSubmit to work properly
    showNotification('Sending message... Please wait.', 'success');
    
    // Allow form to submit after a brief delay
    setTimeout(() => {
        contactForm.submit();
    }, 500);
});

// ============================================
// Notification System
// ============================================
function showNotification(message, type = 'success') {
    // Remove existing notification if any
    const existingNotification = document.querySelector('.notification');
    if (existingNotification) {
        existingNotification.remove();
    }
    
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div style="display: flex; align-items: center; gap: 1rem;">
            <span style="font-size: 1.5rem;">
                ${type === 'success' ? '✅' : '❌'}
            </span>
            <span>${message}</span>
        </div>
    `;
    
    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: ${type === 'success' ? '#10b981' : '#ef4444'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        z-index: 10000;
        animation: slideIn 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    // Remove after 5 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 5000);
}

// Add notification animations to CSS dynamically
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(400px);
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
            transform: translateX(400px);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// ============================================
// Skill Tags Hover Effect
// ============================================
const skillTags = document.querySelectorAll('.skill-tag');
skillTags.forEach(tag => {
    tag.addEventListener('mouseenter', () => {
        tag.style.transform = 'scale(1.1) rotate(5deg)';
    });
    
    tag.addEventListener('mouseleave', () => {
        tag.style.transform = 'scale(1) rotate(0deg)';
    });
});

// ============================================
// Project Cards Tilt Effect
// ============================================
const projectCards = document.querySelectorAll('.project-card');
projectCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 20;
        const rotateY = (centerX - x) / 20;
        
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
    });
    
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
    });
});

// ============================================
// Scroll to Top Button (Optional)
// ============================================
const scrollToTopBtn = document.createElement('button');
scrollToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
scrollToTopBtn.className = 'scroll-to-top';
scrollToTopBtn.style.cssText = `
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background: var(--primary-color);
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 1000;
    font-size: 1.2rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
`;

document.body.appendChild(scrollToTopBtn);

window.addEventListener('scroll', () => {
    if (window.scrollY > 500) {
        scrollToTopBtn.style.opacity = '1';
        scrollToTopBtn.style.visibility = 'visible';
    } else {
        scrollToTopBtn.style.opacity = '0';
        scrollToTopBtn.style.visibility = 'hidden';
    }
});

scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

scrollToTopBtn.addEventListener('mouseenter', () => {
    scrollToTopBtn.style.transform = 'scale(1.1)';
});

scrollToTopBtn.addEventListener('mouseleave', () => {
    scrollToTopBtn.style.transform = 'scale(1)';
});

// ============================================
// Easter Egg: Konami Code
// ============================================
let konamiCode = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
let konamiIndex = 0;

document.addEventListener('keydown', (e) => {
    if (e.key === konamiCode[konamiIndex]) {
        konamiIndex++;
        if (konamiIndex === konamiCode.length) {
            activateEasterEgg();
            konamiIndex = 0;
        }
    } else {
        konamiIndex = 0;
    }
});

function activateEasterEgg() {
    showNotification('🎮 Konami Code Activated! You found the secret! 🚀', 'success');
    document.body.style.animation = 'rainbow 2s infinite';
    
    setTimeout(() => {
        document.body.style.animation = '';
    }, 5000);
}

// Add rainbow animation
const rainbowStyle = document.createElement('style');
rainbowStyle.textContent = `
    @keyframes rainbow {
        0% { filter: hue-rotate(0deg); }
        100% { filter: hue-rotate(360deg); }
    }
`;
document.head.appendChild(rainbowStyle);

// ============================================
// Console Message
// ============================================
console.log('%c👋 Hello, Developer!', 'font-size: 20px; font-weight: bold; color: #6366f1;');
console.log('%cWelcome to my portfolio!', 'font-size: 14px; color: #8b5cf6;');
console.log('%cLooking for something? Let\'s connect!', 'font-size: 12px; color: #ec4899;');
console.log('%c📧 reezmahanan@gmail.com', 'font-size: 12px; color: #10b981;');

// ============================================
// Project Filtering
// ============================================
document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    console.log('Filter buttons found:', filterButtons.length);
    console.log('Project cards found:', projectCards.length);

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            
            const filterValue = button.getAttribute('data-filter');
            console.log('Filter clicked:', filterValue);
            
            let visibleCount = 0;
            projectCards.forEach(card => {
                if (filterValue === 'all') {
                    card.classList.remove('hidden');
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    const category = card.getAttribute('data-category');
                    if (category === filterValue) {
                        card.classList.remove('hidden');
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.classList.add('hidden');
                        card.style.display = 'none';
                    }
                }
            });
            
            console.log('Visible cards:', visibleCount);
        });
    });

    // Certificate Filtering
    const certFilterButtons = document.querySelectorAll('.cert-filter-btn');
    const certificateCards = document.querySelectorAll('.certificate-card');
    
    console.log('Certificate filter buttons found:', certFilterButtons.length);
    console.log('Certificate cards found:', certificateCards.length);

    certFilterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            certFilterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            
            const filterValue = button.getAttribute('data-filter');
            console.log('Certificate filter clicked:', filterValue);
            
            let visibleCount = 0;
            certificateCards.forEach(card => {
                if (filterValue === 'all') {
                    card.classList.remove('hidden');
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    const category = card.getAttribute('data-category');
                    if (category === filterValue) {
                        card.classList.remove('hidden');
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.classList.add('hidden');
                        card.style.display = 'none';
                    }
                }
            });
            
            console.log('Visible certificates:', visibleCount);
        });
    });
    
    // See More Certificates functionality
    const seeMoreBtn = document.getElementById('seeMoreCerts');
    const hiddenCerts = document.querySelectorAll('.certificate-hidden');
    let certsExpanded = false;
    
    // Initially hide hidden certificates
    hiddenCerts.forEach(cert => {
        cert.style.display = 'none';
    });
    
    if (seeMoreBtn) {
        seeMoreBtn.addEventListener('click', () => {
            certsExpanded = !certsExpanded;
            
            hiddenCerts.forEach(cert => {
                if (certsExpanded) {
                    cert.style.display = 'block';
                } else {
                    cert.style.display = 'none';
                }
            });
            
            if (certsExpanded) {
                seeMoreBtn.innerHTML = '<i class="fas fa-chevron-up"></i> Show Less';
            } else {
                seeMoreBtn.innerHTML = '<i class="fas fa-chevron-down"></i> See More Certificates';
            }
        });
    }
    
    // See More Projects functionality
    const seeMoreProjectsBtn = document.getElementById('seeMoreProjects');
    const extraProjects = document.querySelectorAll('.project-extra');
    let projectsExpanded = false;
    
    // Initially hide extra projects
    extraProjects.forEach(project => {
        project.style.display = 'none';
    });
    
    if (seeMoreProjectsBtn) {
        seeMoreProjectsBtn.addEventListener('click', () => {
            projectsExpanded = !projectsExpanded;
            
            extraProjects.forEach(project => {
                if (projectsExpanded) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });
            
            if (projectsExpanded) {
                seeMoreProjectsBtn.innerHTML = '<i class="fas fa-chevron-up"></i> Show Less';
            } else {
                seeMoreProjectsBtn.innerHTML = '<i class="fas fa-chevron-down"></i> See More Projects';
            }
        });
    }
});

// ============================================
// Performance Monitoring (Optional)
// ============================================
if ('performance' in window) {
    window.addEventListener('load', () => {
        setTimeout(() => {
            const perfData = window.performance.timing;
            const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
            console.log(`⚡ Page Load Time: ${pageLoadTime}ms`);
        }, 0);
    });
}

// ============================================
// Add certificates section if needed
// ============================================
// Note: Add certificate data and display logic here if you have certificates to showcase

console.log('✅ Portfolio JavaScript Loaded Successfully!');
