// Single-Page Developer Portfolio JavaScript Functionality
// REEZMA HANAN - 2026

document.addEventListener('DOMContentLoaded', () => {
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
    const typewriterText = document.getElementById('typewriterText');
    const words = [
        "IT Undergraduate at ITUM",
        "Aspiring Software Engineer",
        "Full-Stack Developer (React | Spring Boot | Node.js)",
        "Machine Learning Enthusiast (LightGBM | Scikit-Learn)",
        "Open Source Contributor (SWOC | GSSOC | SSOC)"
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
    // Mobile Navigation Menu & Dropdown Toggle
    // ============================================
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const navMenu = document.getElementById('navMenu');
    const moreDropdownBtn = document.getElementById('moreDropdownBtn');
    const navDropdown = document.querySelector('.nav-dropdown');
    const dropdownLinks = document.querySelectorAll('.dropdown-link');
    
    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            navMenu.classList.toggle('active');
            
            const icon = mobileMenuToggle.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.replace('fa-bars', 'fa-times');
            } else {
                icon.classList.replace('fa-times', 'fa-bars');
                if (navDropdown) navDropdown.classList.remove('open');
            }
        });

        document.addEventListener('click', (e) => {
            if (navMenu.classList.contains('active')) {
                if (!navMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                    navMenu.classList.remove('active');
                    const icon = mobileMenuToggle.querySelector('i');
                    if (icon) icon.classList.replace('fa-times', 'fa-bars');
                    if (navDropdown) navDropdown.classList.remove('open');
                }
            }
        });
    }

    if (moreDropdownBtn && navDropdown) {
        moreDropdownBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            const isOpen = navDropdown.classList.toggle('open');
            moreDropdownBtn.setAttribute('aria-expanded', isOpen);
        });

        document.addEventListener('click', (e) => {
            if (!navDropdown.contains(e.target)) {
                navDropdown.classList.remove('open');
                moreDropdownBtn.setAttribute('aria-expanded', 'false');
            }
        });

        dropdownLinks.forEach(link => {
            link.addEventListener('click', () => {
                navDropdown.classList.remove('open');
                moreDropdownBtn.setAttribute('aria-expanded', 'false');
                if (navMenu && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    const icon = mobileMenuToggle.querySelector('i');
                    if (icon) icon.classList.replace('fa-times', 'fa-bars');
                }
            });
        });
    }

    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        if (link.id === 'moreDropdownBtn') return;
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
            if (link.id === 'moreDropdownBtn') return;
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href && href.substring(1) === currentSectionId) {
                link.classList.add('active');
            }
        });

        dropdownLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href && href.substring(1) === currentSectionId) {
                link.classList.add('active');
            }
        });

        if (['opensource', 'blogs', 'community', 'contact'].includes(currentSectionId)) {
            if (moreDropdownBtn) moreDropdownBtn.classList.add('active');
        } else {
            if (moreDropdownBtn) moreDropdownBtn.classList.remove('active');
        }
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
                showNotification('Please correct form mistakes before submitting.', 'error');
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
                <i class="${type === 'success' ? 'fas fa-check-circle' : 'fas fa-exclamation-circle'}"></i>
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
    // Advanced Floating Glass Orbs Animation (Canvas)
    // ============================================
    function initTechCanvas() {
        const canvas = document.getElementById('techCanvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        
        let width = canvas.width = window.innerWidth;
        let height = canvas.height = window.innerHeight;
        
        window.addEventListener('resize', () => {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
        });
        
        const orbsConfig = [
            { varName: '--primary-color', fallback: '#6366f1' },
            { varName: '--secondary-color', fallback: '#8b5cf6' },
            { varName: '--accent-cyan', fallback: '#06b6d4' },
            { varName: '--accent-green', fallback: '#10b981' }
        ];

        function getColorValue(variableName, fallback) {
            const style = getComputedStyle(document.documentElement);
            return style.getPropertyValue(variableName).trim() || fallback;
        }

        function hexToRgb(hex) {
            hex = hex.trim();
            if (hex.startsWith('rgb')) {
                const parts = hex.match(/\d+/g);
                if (parts) return { r: parseInt(parts[0]), g: parseInt(parts[1]), b: parseInt(parts[2]) };
            }
            if (!hex.startsWith('#')) return null;
            const shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
            const fullHex = hex.replace(shorthandRegex, (m, r, g, b) => r + r + g + g + b + b);
            const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(fullHex);
            return result ? {
                r: parseInt(result[1], 16),
                g: parseInt(result[2], 16),
                b: parseInt(result[3], 16)
            } : null;
        }
        
        class Orb {
            constructor(colorVar, fallbackColor) {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.vx = (Math.random() - 0.5) * 0.8;
                this.vy = (Math.random() - 0.5) * 0.8;
                this.radius = Math.random() * 150 + 200; // Big soft orbs
                this.colorVar = colorVar;
                this.fallbackColor = fallbackColor;
                this.growSpeed = (Math.random() - 0.5) * 0.25;
                this.maxRadius = this.radius + 60;
                this.minRadius = this.radius - 60;
            }
            
            update() {
                this.x += this.vx;
                this.y += this.vy;
                this.radius += this.growSpeed;
                
                // Allow floating slightly off boundary
                if (this.x < -this.radius || this.x > width + this.radius) this.vx *= -1;
                if (this.y < -this.radius || this.y > height + this.radius) this.vy *= -1;
                
                // Pulsing size
                if (this.radius > this.maxRadius || this.radius < this.minRadius) {
                    this.growSpeed *= -1;
                }
            }
            
            draw() {
                const activeColor = getColorValue(this.colorVar, this.fallbackColor);
                const rgb = hexToRgb(activeColor) || { r: 99, g: 102, b: 241 };
                
                const gradient = ctx.createRadialGradient(
                    this.x, this.y, 0,
                    this.x, this.y, this.radius
                );
                gradient.addColorStop(0, `rgba(${rgb.r}, ${rgb.g}, ${rgb.b}, 0.5)`);
                gradient.addColorStop(0.5, `rgba(${rgb.r}, ${rgb.g}, ${rgb.b}, 0.15)`);
                gradient.addColorStop(1, 'rgba(0, 0, 0, 0)');
                
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = gradient;
                ctx.fill();
            }
        }
        
        const orbs = orbsConfig.map(cfg => new Orb(cfg.varName, cfg.fallback));
        
        function animate() {
            ctx.clearRect(0, 0, width, height);
            
            orbs.forEach(orb => {
                orb.update();
                orb.draw();
            });
            
            requestAnimationFrame(animate);
        }
        
        animate();
    }
    initTechCanvas();

    // ============================================
    // Blog Search & Category Filter System
    // ============================================
    function initBlogFilters() {
        const searchInput = document.getElementById('blogSearch');
        const filterButtons = document.querySelectorAll('.blog-filter-btn');
        const blogCards = document.querySelectorAll('.blog-card');
        const emptyState = document.getElementById('blogEmptyState');

        if (!blogCards.length) return;

        let activeFilter = 'all';
        let searchQuery = '';

        function applyFilters() {
            let visibleCount = 0;
            blogCards.forEach(card => {
                const categories = (card.getAttribute('data-category') || '').toLowerCase().split(' ');
                const title = (card.querySelector('.blog-card-title')?.textContent || '').toLowerCase();
                const excerpt = (card.querySelector('.blog-card-excerpt')?.textContent || '').toLowerCase();

                const matchesCategory = activeFilter === 'all' || categories.includes(activeFilter.toLowerCase());
                const matchesSearch = !searchQuery || 
                    title.includes(searchQuery) || 
                    excerpt.includes(searchQuery) || 
                    categories.some(c => c.includes(searchQuery));

                if (matchesCategory && matchesSearch) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (emptyState) {
                emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
            }
        }

        if (searchInput) {
            searchInput.addEventListener('input', (e) => {
                searchQuery = e.target.value.trim().toLowerCase();
                applyFilters();
            });
        }

        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                activeFilter = btn.getAttribute('data-filter') || 'all';
                applyFilters();
            });
        });
    }
    initBlogFilters();

    // ============================================
    // Open Source Program Tabs & Evidence Sliders
    // ============================================
    function initOpenSourceEvidenceSliders() {
        // 1. Program Switcher Tabs
        const programTabs = document.querySelectorAll('.os-nav-tab');
        const programCards = document.querySelectorAll('.os-card[data-program]');

        if (programTabs.length && programCards.length) {
            programTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    programTabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    const targetFilter = tab.getAttribute('data-program-filter');

                    programCards.forEach(card => {
                        const cardProgram = card.getAttribute('data-program');
                        if (targetFilter === 'all' || cardProgram === targetFilter) {
                            card.style.display = 'flex';
                            card.style.animation = 'fadeIn 0.3s ease forwards';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        }

        // 2. Interactive Evidence Sliders within each Program Card
        const sliders = document.querySelectorAll('.os-evidence-slider');
        sliders.forEach(slider => {
            const slides = slider.querySelectorAll('.os-slide');
            const dots = slider.querySelectorAll('.os-dot');
            const prevBtn = slider.querySelector('.os-prev-btn');
            const nextBtn = slider.querySelector('.os-next-btn');

            if (!slides.length) return;

            let currentIndex = 0;

            function showSlide(index) {
                if (index < 0) {
                    currentIndex = slides.length - 1;
                } else if (index >= slides.length) {
                    currentIndex = 0;
                } else {
                    currentIndex = index;
                }

                slides.forEach((slide, idx) => {
                    slide.classList.toggle('active', idx === currentIndex);
                });

                dots.forEach((dot, idx) => {
                    dot.classList.toggle('active', idx === currentIndex);
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    showSlide(currentIndex - 1);
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    showSlide(currentIndex + 1);
                });
            }

            dots.forEach((dot, idx) => {
                dot.addEventListener('click', (e) => {
                    e.preventDefault();
                    showSlide(idx);
                });
            });
        });
    }
    initOpenSourceEvidenceSliders();
});

