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

    // ============================================
    // Advanced Particle Network Animation (Canvas)
    // ============================================
    function initTechCanvas() {
        const canvas = document.getElementById('techCanvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        
        let width = canvas.width = window.innerWidth;
        let height = canvas.height = window.innerHeight;
        
        // Handle window resizing
        window.addEventListener('resize', () => {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
        });
        
        const particles = [];
        // Particle density based on screen size
        const maxParticles = Math.min(65, Math.floor((width * height) / 20000));
        const connectionDistance = 140;
        
        // Helper to get active theme primary color
        function getPrimaryColor() {
            const style = getComputedStyle(document.documentElement);
            const color = style.getPropertyValue('--primary-color').trim() || '#6366f1';
            return color;
        }
        
        class Particle {
            constructor() {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.vx = (Math.random() - 0.5) * 0.45;
                this.vy = (Math.random() - 0.5) * 0.45;
                this.radius = Math.random() * 2 + 1;
            }
            
            update() {
                this.x += this.vx;
                this.y += this.vy;
                
                // Boundary collision
                if (this.x < 0 || this.x > width) this.vx *= -1;
                if (this.y < 0 || this.y > height) this.vy *= -1;
            }
            
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = getPrimaryColor();
                ctx.fill();
            }
        }
        
        // Create initial particle set
        for (let i = 0; i < maxParticles; i++) {
            particles.push(new Particle());
        }
        
        function animate() {
            ctx.clearRect(0, 0, width, height);
            
            // Update & draw particles
            particles.forEach(p => {
                p.update();
                p.draw();
            });
            
            // Draw connections between close particles
            ctx.lineWidth = 0.65;
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const p1 = particles[i];
                    const p2 = particles[j];
                    const dx = p1.x - p2.x;
                    const dy = p1.y - p2.y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    
                    if (dist < connectionDistance) {
                        const alpha = (1 - dist / connectionDistance) * 0.25;
                        
                        // Parse RGB from hex/variable representation dynamically
                        const primaryHex = getPrimaryColor();
                        if (primaryHex.startsWith('#')) {
                            const r = parseInt(primaryHex.slice(1, 3), 16);
                            const g = parseInt(primaryHex.slice(3, 5), 16);
                            const b = parseInt(primaryHex.slice(5, 7), 16);
                            ctx.strokeStyle = `rgba(${r}, ${g}, ${b}, ${alpha})`;
                        } else if (primaryHex.startsWith('rgb')) {
                            ctx.strokeStyle = primaryHex.replace(')', `, ${alpha})`).replace('rgb', 'rgba');
                        } else {
                            ctx.strokeStyle = `rgba(99, 102, 241, ${alpha})`;
                        }
                        
                        ctx.beginPath();
                        ctx.moveTo(p1.x, p1.y);
                        ctx.lineTo(p2.x, p2.y);
                        ctx.stroke();
                    }
                }
            }
            
            requestAnimationFrame(animate);
        }
        
        animate();
    }
    initTechCanvas();
});
