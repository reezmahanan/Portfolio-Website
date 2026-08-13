// Single-Page Developer Portfolio JavaScript Functionality
// REEZMA HANAN - 2026

document.addEventListener('DOMContentLoaded', () => {
    // ============================================
    // Loading Screen Dismissal
    // ============================================
    window.addEventListener('load', () => {
        const loading = document.getElementById('loading');
        if (loading) {
            setTimeout(() => {
                loading.classList.add('hidden');
            }, 300);
        }
    });

    // ============================================
    // Theme Toggle Handler
    // ============================================
    const themeToggle = document.getElementById('themeToggle');
    const htmlElement = document.documentElement;
    
    // Check saved preference or default to dark
    const savedTheme = localStorage.getItem('theme') || 'dark';
    htmlElement.setAttribute('data-theme', savedTheme);
    updateThemeIcon(savedTheme);
    
    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            htmlElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeIcon(newTheme);
        });
    }
    
    function updateThemeIcon(theme) {
        if (!themeToggle) return;
        const icon = themeToggle.querySelector('i');
        if (icon) {
            icon.className = theme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        }
    }

    // ============================================
    // Visitor Counter Logic
    // ============================================
    function initVisitorCounter() {
        let visitorCount = localStorage.getItem('visitorCount');
        if (visitorCount) {
            visitorCount = parseInt(visitorCount) + 1;
        } else {
            visitorCount = 1;
        }
        localStorage.setItem('visitorCount', visitorCount);
        
        const counterEl = document.getElementById('visitorCount');
        if (counterEl) {
            counterEl.textContent = visitorCount;
        }
    }
    initVisitorCounter();

    // ============================================
    // Typewriter Banner Effect
    // ============================================
    const typewriterText = document.getElementById('typewriterText');
    const words = [
        "Software Engineer in Training",
        "React & Spring Boot Developer",
        "Open Source Contributor"
    ];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typingSpeed = 100;
    
    function type() {
        if (!typewriterText) return;
        
        const currentWord = words[wordIndex];
        
        if (isDeleting) {
            typewriterText.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            typingSpeed = 50;
        } else {
            typewriterText.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            typingSpeed = 120;
        }
        
        if (!isDeleting && charIndex === currentWord.length) {
            typingSpeed = 1500;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            typingSpeed = 400;
        }
        
        setTimeout(type, typingSpeed);
    }
    setTimeout(type, 800);

    // ============================================
    // Mobile Navigation Menu Toggle
    // ============================================
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            
            const icon = mobileMenuToggle.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.replace('fa-bars', 'fa-times');
            } else {
                icon.classList.replace('fa-times', 'fa-bars');
            }
        });
    }

    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navMenu && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                const icon = mobileMenuToggle.querySelector('i');
                if (icon) icon.classList.replace('fa-times', 'fa-bars');
            }
        });
    });

    // ============================================
    // Scroll Triggers: Active Nav Link & Sticky Nav
    // ============================================
    const sections = document.querySelectorAll('.section');
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', () => {
        let currentSectionId = '';
        const scrollY = window.pageYOffset;
        
        if (navbar) {
            if (scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120;
            const sectionHeight = section.clientHeight;
            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                currentSectionId = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href && href.substring(1) === currentSectionId) {
                link.classList.add('active');
            }
        });
    });

    // ============================================
    // Intersection Observer: Fade-in & Stats Count
    // ============================================
    const fadeInElements = document.querySelectorAll('.fade-in');
    
    const viewObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('appear');
                
                if (entry.target.classList.contains('about-stats-bar')) {
                    animateStatsCounters(entry.target);
                }
                viewObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });
    
    fadeInElements.forEach(element => {
        viewObserver.observe(element);
    });
    
    function animateStatsCounters(container) {
        const statNums = container.querySelectorAll('.stat-num');
        statNums.forEach(stat => {
            const targetStr = stat.getAttribute('data-target');
            if (!targetStr) return;
            const target = parseInt(targetStr);
            let start = 0;
            const duration = 1500;
            const stepTime = 16;
            const increment = target / (duration / stepTime);
            
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    stat.textContent = target + (stat.id === 'visitorCount' ? '' : '+');
                    clearInterval(timer);
                } else {
                    stat.textContent = Math.floor(start) + '+';
                }
            }, stepTime);
        });
    }

    // ============================================
    // Tab Controller for Certifications & Badges
    // ============================================
    const tabButtons = document.querySelectorAll('.cert-tab-btn');
    const tabPanes = document.querySelectorAll('.certs-tab-pane');
    
    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetPaneId = btn.getAttribute('data-tab');
            
            tabButtons.forEach(b => b.classList.remove('active'));
            tabPanes.forEach(p => p.classList.remove('active'));
            
            btn.classList.add('active');
            const targetPane = document.getElementById(targetPaneId);
            if (targetPane) targetPane.classList.add('active');
        });
    });

    // ============================================
    // Certificates Filter Matrix
    // ============================================
    const subfilterButtons = document.querySelectorAll('.subfilter-btn');
    const certRows = document.querySelectorAll('.cert-list-row');
    
    subfilterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            subfilterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            const filterValue = btn.getAttribute('data-filter');
            
            certRows.forEach(row => {
                const cat = row.getAttribute('data-cat');
                if (filterValue === 'all' || cat === filterValue) {
                    row.classList.remove('hidden');
                } else {
                    row.classList.add('hidden');
                }
            });
        });
    });

    // ============================================
    // Forms Validation Handler & Alerts
    // ============================================
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const messageInput = document.getElementById('message');
        
        nameInput.addEventListener('input', () => validateField(nameInput, 'nameError', 'Please enter letters and spaces only.'));
        emailInput.addEventListener('input', () => validateField(emailInput, 'emailError', 'Please enter a valid email address.'));
        messageInput.addEventListener('input', () => validateField(messageInput, 'messageError', 'Message must be at least 10 characters.'));
        
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const isNameValid = validateField(nameInput, 'nameError', 'Please enter letters and spaces only.');
            const isEmailValid = validateField(emailInput, 'emailError', 'Please enter a valid email address.');
            const isMessageValid = validateField(messageInput, 'messageError', 'Message must be at least 10 characters.');
            
            if (!isNameValid || !isEmailValid || !isMessageValid) {
                showNotification('Please correct form mistakes ⚠️', 'error');
                return;
            }
            
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;
            
            showNotification('Transmitting message...', 'success');
            
            setTimeout(() => {
                contactForm.submit();
            }, 600);
        });
    }
    
    function validateField(input, errorId, errorMsg) {
        const errorEl = document.getElementById(errorId);
        if (!errorEl) return false;
        
        let isValid = true;
        const val = input.value.trim();
        
        if (!val) {
            errorEl.textContent = 'This field is required.';
            isValid = false;
        } else if (input.id === 'name' && !/^[A-Za-z\s]{2,100}$/.test(val)) {
            errorEl.textContent = errorMsg;
            isValid = false;
        } else if (input.id === 'email' && !/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(val)) {
            errorEl.textContent = errorMsg;
            isValid = false;
        } else if (input.id === 'message' && val.length < 10) {
            errorEl.textContent = errorMsg;
            isValid = false;
        } else {
            errorEl.textContent = '';
        }
        
        return isValid;
    }

    function showNotification(message, type = 'success') {
        const currentAlert = document.querySelector('.space-alert');
        if (currentAlert) currentAlert.remove();
        
        const alertNode = document.createElement('div');
        alertNode.className = `space-alert alert-${type}`;
        alertNode.innerHTML = `
            <div style="display:flex; align-items:center; gap: 10px;">
                <span>${type === 'success' ? '🚀' : '⚠️'}</span>
                <span>${message}</span>
            </div>
        `;
        
        alertNode.style.cssText = `
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: ${type === 'success' ? '#10b981' : '#ef4444'};
            color: #ffffff;
            padding: 0.85rem 1.4rem;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
            z-index: 99999;
            animation: alertSlideIn 0.3s ease forwards;
        `;
        
        if (!document.getElementById('alertStyleHelper')) {
            const styleElement = document.createElement('style');
            styleElement.id = 'alertStyleHelper';
            styleElement.textContent = `
                @keyframes alertSlideIn {
                    from { transform: translateY(30px); opacity: 0; }
                    to { transform: translateY(0); opacity: 1; }
                }
                @keyframes alertSlideOut {
                    from { transform: translateY(0); opacity: 1; }
                    to { transform: translateY(30px); opacity: 0; }
                }
            `;
            document.head.appendChild(styleElement);
        }
        
        document.body.appendChild(alertNode);
        
        setTimeout(() => {
            alertNode.style.animation = 'alertSlideOut 0.3s ease forwards';
            setTimeout(() => alertNode.remove(), 300);
        }, 4000);
    }
});
