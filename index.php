<?php
// Portfolio Configuration
$portfolio_config = [
    'name' => 'Reezma Hanan',
    'title' => 'Software Engineer in Training 👩‍💻',
    'email' => 'reezmahanan@gmail.com',
    'github' => 'https://github.com/reezmahanan',
    'linkedin' => 'https://www.linkedin.com/in/reezma-hanan',
    'hackerrank' => 'https://www.hackerrank.com/profile/reezmahanan',
    'location' => 'Sri Lanka 🇱🇰',
    'university' => 'Institute of Technology, University of Moratuwa'
];

// Visitor Counter Functionality
function updateVisitorCount() {
    $count_file = 'visitor_count.txt';
    $today = date('Y-m-d');
    
    if (file_exists($count_file)) {
        $data = json_decode(file_get_contents($count_file), true);
        $last_visit = $data['last_visit'] ?? '';
        $count = $data['count'] ?? 0;
        
        if ($last_visit !== $today) {
            $count++;
            $data = [
                'count' => $count,
                'last_visit' => $today
            ];
            file_put_contents($count_file, json_encode($data));
        }
    } else {
        $data = [
            'count' => 1,
            'last_visit' => $today
        ];
        file_put_contents($count_file, json_encode($data));
    }
    
    return $data['count'] ?? 1;
}

$visitor_count = updateVisitorCount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $portfolio_config['name']; ?> - <?php echo $portfolio_config['title']; ?></title>
    <meta name="description" content="Hi! I'm Reezma, an IT student passionate about AI/ML, web development, and building intelligent solutions. Check out my journey with Python, Java, PHP and machine learning projects! 🚀">
    <meta name="keywords" content="Reezma Hanan, Student Developer, AI ML Enthusiast, IT Student, PHP Developer, Machine Learning, Python, Java, Web Development">
    <meta name="author" content="<?php echo $portfolio_config['name']; ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $portfolio_config['name']; ?> - AI & Web Developer">
    <meta property="og:description" content="AI/ML enthusiast & full-stack developer. Building intelligent web solutions with Python, PHP, and modern technologies.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="Profile.jpg">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Reezma - AI & Web Developer Portfolio">
    <meta name="twitter:description" content="IT student passionate about AI/ML, PHP development, and building intelligent web solutions. Learning and growing in tech! 🌱">
    
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>👩‍💻</text></svg>">
    
    <!-- External Resources -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="portfolio-styles.css">
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading" id="loading">
        <div class="loader"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo"><?php echo $portfolio_config['name']; ?></div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#certificates" class="nav-link">Certificates</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div style="display: flex; align-items: center; gap: 10px;">
                <button class="theme-toggle" id="themeToggle">🌙</button>
                <button class="mobile-menu-toggle" id="mobileMenuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero section" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text fade-in">
                    <div class="hero-greeting">
                        <span class="wave">👋</span>
                        <span class="greeting-text">Hello, World!</span>
                    </div>
                    <h1>
                        I'm <span class="highlight typing-animation" id="typingText">Reezma Hanan</span><span class="cursor">|</span>
                    </h1>
                    <div class="hero-description">
                        <p class="main-description">
                            <strong>"Code with passion, build with purpose, innovate with purpose"</strong> - A passionate <strong>IT student</strong> and <strong>software engineer in training</strong> building real-world applications and learning cutting-edge technologies.
                        </p>
                        <p class="sub-description">
                            🎓 <strong>IT Student</strong> at <?php echo $portfolio_config['university']; ?> | 
                            ☁️ <strong>Cloud Computing Explorer</strong> | 
                            💻 <strong>Full-Stack Developer</strong> | 
                            🤖 <strong>AI/ML Learner</strong>
                        </p>
                        <div class="achievement-highlights">
                            <div class="highlight-item">
                                <span class="highlight-icon">🚀</span>
                                <span class="highlight-text">18+ Projects Built</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-icon">🏆</span>
                                <span class="highlight-text">19+ Certificates Earned</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-icon">🎯</span>
                                <span class="highlight-text">Goal: Skilled Dev by 2028</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-icon">⚡</span>
                                <span class="highlight-text">15+ Technologies</span>
                            </div>
                        </div>
                        <p class="mission-statement">
                            <i class="fas fa-quote-left"></i>
                            <em>"Code with passion, build with purpose, innovate with purpose"</em>
                            <i class="fas fa-quote-right"></i>
                        </p>
                    </div>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">
                            <i class="fas fa-rocket"></i>
                            Explore My Work
                        </a>
                        <a href="#certificates" class="btn btn-secondary">
                            <i class="fas fa-certificate"></i>
                            View Certificates
                        </a>
                        <a href="#contact" class="btn btn-outline">
                            <i class="fas fa-coffee"></i>
                            Let's Connect
                        </a>
                    </div>
                </div>
                <div class="hero-image fade-in">
                    <div class="profile-card">
                        <div class="profile-avatar">
                            <img src="Profile.jpg?v=<?php echo time(); ?>" alt="<?php echo $portfolio_config['name']; ?>" class="profile-img">
                        </div>
                        <div class="profile-info">
                            <h3><?php echo $portfolio_config['name']; ?></h3>
                            <p>Software Engineer in Training | Full-Stack Developer | Cloud Explorer 🚀</p>
                            <div class="profile-badges">
                                <span class="badge">🎓 IT Student @ UOM</span>
                                <span class="badge">☁️ Cloud Computing</span>
                                <span class="badge">💻 Full-Stack Dev</span>
                                <span class="badge">🎯 Goal: 2028</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about section" id="about">
        <div class="container">
            <h2 class="section-title fade-in">About Me</h2>
            <p class="section-subtitle fade-in">AI enthusiast & full-stack developer crafting intelligent solutions</p>
            
            <div class="about-content">
                <div class="about-text fade-in">
                    <div class="about-card">
                        <div class="about-icon">🎓</div>
                        <div class="about-info">
                            <h3>My Academic Journey</h3>
                            <p>Currently pursuing my <strong>Diploma in Information Technology</strong> at <strong><?php echo $portfolio_config['university']; ?></strong>. Building strong foundations in <strong>Java, Python, PHP, MySQL & Web Development</strong>.</p>
                        </div>
                    </div>

                    <div class="about-card">
                        <div class="about-icon">☁️</div>
                        <div class="about-info">
                            <h3>Cloud & Emerging Tech</h3>
                            <p>Exploring <strong>Cloud Computing (AWS, Azure, Google Cloud), AI/ML basics, and Backend Development</strong>. Passionate about understanding how modern infrastructure powers scalable applications.</p>
                        </div>
                    </div>

                    <div class="about-card">
                        <div class="about-icon">💻</div>
                        <div class="about-info">
                            <h3>Full-Stack Development</h3>
                            <p>Building real-world software and full-stack applications using <strong>Java, Python, PHP, JavaScript, HTML5, CSS3, and MySQL</strong>. Completed 18+ projects from simple web pages to complex management systems.</p>
                        </div>
                    </div>

                    <div class="about-card">
                        <div class="about-icon">🚀</div>
                        <div class="about-info">
                            <h3>My Vision & Goal</h3>
                            <p>Passionate about building real-world software solutions and becoming a <strong>skilled Software Developer by 2028</strong>. Love solving logic puzzles and UI redesigns for fun! 🧩</p>
                        </div>
                    </div>
                </div>
                
                <div class="about-stats fade-in">
                    <div class="stat-item">
                        <div class="stat-icon">📊</div>
                        <span class="stat-number" id="projectsCount">18</span>
                        <span class="stat-label">Projects Completed</span>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon">🏆</div>
                        <span class="stat-number" id="certificatesCount">19</span>
                        <span class="stat-label">Certificates Earned</span>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon">⭐</div>
                        <span class="stat-number" id="hackerRankCount">HackerRank</span>
                        <span class="stat-label">Certified</span>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon">👁️</div>
                        <span class="stat-number" id="visitorCount"><?php echo $visitor_count; ?></span>
                        <span class="stat-label">Portfolio Visitors</span>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon">⚡</div>
                        <span class="stat-number" id="skillsCount">15</span>
                        <span class="stat-label">Technologies</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills section" id="skills">
        <div class="container">
            <h2 class="section-title fade-in">Technical Skills</h2>
            <p class="section-subtitle fade-in">Technologies and tools I work with</p>
            
            <div class="skills-grid">
                <?php
                $skills_categories = [
                    [
                        'icon' => '💻',
                        'title' => 'Programming Languages',
                        'skills' => ['Java', 'Python', 'PHP', 'JavaScript', 'MATLAB']
                    ],
                    [
                        'icon' => '🌐',
                        'title' => 'Web Development',
                        'skills' => ['HTML5', 'CSS3', 'JavaScript', 'Responsive Design', 'Web APIs']
                    ],
                    [
                        'icon' => '🗄️',
                        'title' => 'Databases',
                        'skills' => ['MySQL', 'SQL', 'Database Design', 'Query Optimization']
                    ],
                    [
                        'icon' => '☁️',
                        'title' => 'Cloud Computing (Beginner)',
                        'skills' => ['AWS', 'Azure', 'Google Cloud', 'Cloud Fundamentals']
                    ],
                    [
                        'icon' => '🎨',
                        'title' => 'Design Tools',
                        'skills' => ['Figma', 'Canva', 'UI/UX Design Basics']
                    ],
                    [
                        'icon' => '🔧',
                        'title' => 'Development Tools',
                        'skills' => ['IntelliJ IDEA', 'VS Code', 'Git', 'GitHub']
                    ],
                    [
                        'icon' => '💼',
                        'title' => 'Productivity Tools',
                        'skills' => ['Microsoft Excel', 'Word', 'PowerPoint', 'Gamma AI']
                    ],
                    [
                        'icon' => '🎬',
                        'title' => 'Content Creation',
                        'skills' => ['CapCut', 'InShot', 'Video Editing']
                    ],
                    [
                        'icon' => '📚',
                        'title' => 'Learning Platforms',
                        'skills' => ['HackerRank', 'Cisco Academy', 'Microsoft Learn', 'AWS Educate', 'SoloLearn', 'GeeksforGeeks', 'W3Schools', 'Simplilearn']
                    ]
                ];

                foreach ($skills_categories as $category) {
                    echo '<div class="card skill-category fade-in">';
                    echo '<h3>' . $category['icon'] . ' ' . $category['title'] . '</h3>';
                    echo '<div class="skill-tags">';
                    foreach ($category['skills'] as $skill) {
                        echo '<span class="skill-tag">' . $skill . '</span>';
                    }
                    echo '</div></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section class="certificates section" id="certificates">
        <div class="container">
            <h2 class="section-title fade-in">Certificates & Achievements</h2>
            <p class="section-subtitle fade-in">Continuous learning and professional development</p>
            
            <div class="certificates-grid">
                <?php
                $certificates = [
                    [
                        'icon' => '🐍',
                        'title' => 'Python for Beginners',
                        'issuer' => 'UOM CODL',
                        'date' => '2024',
                        'skills' => ['Python', 'Programming', 'Basics']
                    ],
                    [
                        'icon' => '🌐',
                        'title' => 'Web Design for Beginners',
                        'issuer' => 'UOM CODL',
                        'date' => '2024',
                        'skills' => ['HTML', 'CSS', 'Web Design']
                    ],
                    [
                        'icon' => '🐍',
                        'title' => 'Python for Beginners',
                        'issuer' => 'SoloLearn',
                        'date' => '2024',
                        'skills' => ['Python', 'Coding']
                    ],
                    [
                        'icon' => '🗄️',
                        'title' => 'SQL',
                        'issuer' => 'SoloLearn',
                        'date' => '2024',
                        'skills' => ['SQL', 'Database', 'Queries']
                    ],
                    [
                        'icon' => '📄',
                        'title' => 'HTML',
                        'issuer' => 'SoloLearn',
                        'date' => '2024',
                        'skills' => ['HTML5', 'Web Development']
                    ],
                    [
                        'icon' => '☕',
                        'title' => 'Java',
                        'issuer' => 'SoloLearn',
                        'date' => '2024',
                        'skills' => ['Java', 'OOP', 'Programming']
                    ],
                    [
                        'icon' => '🔐',
                        'title' => 'Cyber Security',
                        'issuer' => 'Cisco Networking Academy',
                        'date' => '2024',
                        'skills' => ['Security', 'Networking', 'Protection']
                    ],
                    [
                        'icon' => '🚀',
                        'title' => 'Agile Scrum Foundation',
                        'issuer' => 'Simplilearn',
                        'date' => '2024',
                        'skills' => ['Agile', 'Scrum', 'Project Management']
                    ],
                    [
                        'icon' => '🎨',
                        'title' => 'UI/UX for Beginners',
                        'issuer' => 'Great Learning Academy',
                        'date' => '2024',
                        'skills' => ['UI/UX', 'Design', 'User Experience']
                    ],
                    [
                        'icon' => '📄',
                        'title' => 'HTML',
                        'issuer' => 'Great Learning Academy',
                        'date' => '2024',
                        'skills' => ['HTML', 'Web Development']
                    ],
                    [
                        'icon' => '🗄️',
                        'title' => 'MySQL Tutorial',
                        'issuer' => 'Great Learning Academy',
                        'date' => '2024',
                        'skills' => ['MySQL', 'Database', 'SQL']
                    ],
                    [
                        'icon' => '💻',
                        'title' => 'Programming Basics',
                        'issuer' => 'Great Learning Academy',
                        'date' => '2024',
                        'skills' => ['Programming', 'Logic', 'Fundamentals']
                    ],
                    [
                        'icon' => '🐍',
                        'title' => 'Python Fundamentals for Beginners',
                        'issuer' => 'Great Learning Academy',
                        'date' => '2024',
                        'skills' => ['Python', 'Basics', 'Programming']
                    ],
                    [
                        'icon' => '🔨',
                        'title' => 'Python Project for Beginners',
                        'issuer' => 'Great Learning Academy',
                        'date' => '2024',
                        'skills' => ['Python', 'Project', 'Hands-on']
                    ],
                    [
                        'icon' => '☕',
                        'title' => 'OOPs in Java',
                        'issuer' => 'Simplilearn',
                        'date' => '2024',
                        'skills' => ['Java', 'OOP', 'Programming']
                    ],
                    [
                        'icon' => '🔐',
                        'title' => 'Introduction to Cyber Security',
                        'issuer' => 'Simplilearn',
                        'date' => '2024',
                        'skills' => ['Security', 'Cyber Threats']
                    ],
                    [
                        'icon' => '🎨',
                        'title' => 'CSS (Basic)',
                        'issuer' => 'HackerRank',
                        'date' => '2024',
                        'skills' => ['CSS', 'Styling', 'Web Design']
                    ],
                    [
                        'icon' => '☁️',
                        'title' => 'Introduction to Cloud Computing',
                        'issuer' => 'Simplilearn',
                        'date' => '2024',
                        'skills' => ['Cloud', 'AWS', 'Azure']
                    ],
                    [
                        'icon' => '🎨',
                        'title' => 'Introduction to CSS',
                        'issuer' => 'SoloLearn',
                        'date' => '2024',
                        'skills' => ['CSS3', 'Styling', 'Design']
                    ]
                ];

                foreach ($certificates as $cert) {
                    echo '<div class="card certificate-card fade-in">';
                    echo '<div class="certificate-icon">' . $cert['icon'] . '</div>';
                    echo '<h3>' . $cert['title'] . '</h3>';
                    echo '<p class="certificate-issuer">' . $cert['issuer'] . '</p>';
                    echo '<p class="certificate-date"><i class="fas fa-calendar"></i> ' . $cert['date'] . '</p>';
                    echo '<div class="certificate-skills">';
                    foreach ($cert['skills'] as $skill) {
                        echo '<span class="cert-skill-tag">' . $skill . '</span>';
                    }
                    echo '</div></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects section" id="projects">
        <div class="container">
            <h2 class="section-title fade-in">Featured Projects</h2>
            <p class="section-subtitle fade-in">Full-stack web applications and software solutions</p>
            
            <div class="projects-grid">
                <?php
                $projects = [
                    [
                        'featured' => true,
                        'icon' => '📅',
                        'title' => 'Event Hub - Student Event Management',
                        'description' => 'A comprehensive student event management web application with user authentication, event creation, registration, and admin panel. Features real-time updates and responsive design.',
                        'github' => 'https://github.com/reezmahanan/Student-Event-Management-Web-Application',
                        'features' => ['👥 User Management', '📅 Event Calendar', '✅ Registration System', '📊 Admin Dashboard'],
                        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL']
                    ],
                    [
                        'featured' => true,
                        'icon' => '📚',
                        'title' => 'Book Nest - Library Management System',
                        'description' => 'Group project: Full-featured library management system with book cataloging, member management, borrowing/return system, and search functionality.',
                        'github' => 'https://github.com/reezmahanan/BookNest',
                        'features' => ['📖 Book Catalog', '👤 Member System', '🔄 Borrow/Return', '🔍 Search Engine'],
                        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🌤️',
                        'title' => 'Weather App',
                        'description' => 'Real-time weather application with API integration displaying current conditions, forecasts, and weather visualization.',
                        'github' => 'https://github.com/reezmahanan/Weather-App',
                        'features' => ['🌡️ Current Weather', '📊 Forecasts', '🗺️ Location Search', '📱 Responsive'],
                        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Weather API']
                    ],
                    [
                        'featured' => true,
                        'icon' => '💼',
                        'title' => 'My Portfolio Website',
                        'description' => 'Personal portfolio website showcasing projects, skills, and achievements with modern design and animations.',
                        'github' => 'https://github.com/reezmahanan/Portfolio-Website',
                        'features' => ['🎨 Modern Design', '📱 Responsive', '✨ Animations', '📬 Contact Form'],
                        'technologies' => ['PHP', 'HTML', 'CSS', 'JavaScript']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🕐',
                        'title' => 'Digital Clock',
                        'description' => 'Interactive digital clock with modern design, date display, and customizable themes.',
                        'github' => 'https://github.com/reezmahanan/Digital-clock',
                        'features' => ['⏰ Real-Time', '🎨 Themes', '📅 Date Display'],
                        'technologies' => ['HTML', 'CSS', 'JavaScript']
                    ],
                    [
                        'featured' => true,
                        'icon' => '✅',
                        'title' => 'To-Do List App',
                        'description' => 'Task management application with add, edit, delete, and complete features. Local storage persistence.',
                        'github' => 'https://github.com/reezmahanan/To-Do-list',
                        'features' => ['➕ Add Tasks', '✏️ Edit', '🗑️ Delete', '💾 Local Storage'],
                        'technologies' => ['HTML', 'CSS', 'JavaScript']
                    ],
                    [
                        'featured' => true,
                        'icon' => '📅',
                        'title' => 'Interactive Calendar',
                        'description' => 'Dynamic calendar with month/year navigation, event highlighting, and responsive design.',
                        'github' => 'https://github.com/reezmahanan/Interactive-Calendar',
                        'features' => ['📆 Month View', '➡️ Navigation', '🎉 Event Highlight'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🏢',
                        'title' => 'Reezma Tech Services',
                        'description' => 'Professional tech services website with service listings, contact forms, and modern UI.',
                        'github' => 'https://github.com/reezmahanan/Reezma-tech-services',
                        'features' => ['💼 Services', '📬 Contact Form', '🎨 Modern UI'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🧮',
                        'title' => 'Calculator',
                        'description' => 'Functional calculator with basic arithmetic operations and clean interface.',
                        'github' => 'https://github.com/reezmahanan/calculator',
                        'features' => ['➕ Add', '➖ Subtract', '✖️ Multiply', '➗ Divide'],
                        'technologies' => ['HTML']
                    ],
                    [
                        'featured' => true,
                        'icon' => '📱',
                        'title' => 'Mobile Login Interface',
                        'description' => 'Responsive mobile-first login page with modern UI/UX design.',
                        'github' => 'https://github.com/reezmahanan/mobile-login',
                        'features' => ['📱 Mobile First', '🎨 Modern UI', '🔒 Secure'],
                        'technologies' => ['HTML']
                    ],
                    [
                        'featured' => true,
                        'icon' => '📝',
                        'title' => 'Simple Application Form',
                        'description' => 'User-friendly application form with validation and responsive layout.',
                        'github' => 'https://github.com/reezmahanan/simple-Application-Form',
                        'features' => ['✅ Validation', '📱 Responsive', '📤 Submit'],
                        'technologies' => ['HTML']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🎨',
                        'title' => 'Reezma Logo Design',
                        'description' => 'Personal branding logo created with HTML and CSS.',
                        'github' => 'https://github.com/reezmahanan/Reezma-logo',
                        'features' => ['🎨 Creative', '💎 Branding', '💻 HTML/CSS'],
                        'technologies' => ['HTML']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🏷️',
                        'title' => 'Label Design',
                        'description' => 'Creative label designs using HTML and CSS.',
                        'github' => 'https://github.com/reezmahanan/label',
                        'features' => ['🎨 Design', '📜 Templates', '✨ Creative'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'icon' => '📄',
                        'title' => 'Resume Template',
                        'description' => 'Professional resume template with clean design and print-friendly layout.',
                        'github' => 'https://github.com/reezmahanan/resume',
                        'features' => ['💼 Professional', '🖨️ Print Ready', '🎨 Clean Design'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🎓',
                        'title' => 'First HTML Portfolio',
                        'description' => 'My first portfolio project demonstrating HTML fundamentals.',
                        'github' => 'https://github.com/reezmahanan/MY-FIRST-HTML-PROJECT',
                        'features' => ['🎓 First Project', '💻 HTML Basics', '🎨 CSS Styling'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'icon' => '💌',
                        'title' => 'HTML Invitation Card',
                        'description' => 'Creative invitation card design showcasing HTML and CSS skills.',
                        'github' => 'https://github.com/reezmahanan/firsthtml',
                        'features' => ['🎉 Creative', '🎨 Design', '💬 Card Layout'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🌦️',
                        'title' => 'Animated Weather System',
                        'description' => 'Python-based weather simulation with animated visualizations.',
                        'github' => 'https://github.com/reezmahanan/weather-system',
                        'features' => ['🌞 Animation', '🐍 Python', '📊 Visualization'],
                        'technologies' => ['Python']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🪐',
                        'title' => 'Solar System Simulator',
                        'description' => 'Educational solar system simulation demonstrating planetary mechanics.',
                        'github' => 'https://github.com/reezmahanan/solar-system-simulator',
                        'features' => ['🌌 Planets', '🔭 Physics', '🎯 Educational'],
                        'technologies' => ['Python']
                    ]
                ];
                
                foreach ($projects as $project) {
                    $featured_class = $project['featured'] ? 'featured-project' : '';
                    echo '<div class="card project-card ' . $featured_class . ' fade-in">';
                    
                    // Project Header with Icon
                    echo '<div class="project-header">';
                    if (isset($project['icon'])) {
                        echo '<div class="project-icon">' . $project['icon'] . '</div>';
                    }
                    echo '<div class="project-header-content">';
                    echo '<h3 class="project-title">' . $project['title'] . '</h3>';
                    echo '<div class="project-links">';
                    if (isset($project['live_demo'])) {
                        echo '<a href="' . $project['live_demo'] . '" class="project-link live-demo" target="_blank">';
                        echo '<i class="fas fa-globe"></i> Live';
                        echo '</a>';
                    }
                    echo '<a href="' . $project['github'] . '" class="project-link" target="_blank">';
                    echo '<i class="fab fa-github"></i> Code';
                    echo '</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    
                    // Description
                    echo '<p class="project-description">' . $project['description'] . '</p>';
                    
                    // Features
                    if (isset($project['features'])) {
                        echo '<div class="project-features">';
                        foreach ($project['features'] as $feature) {
                            echo '<span class="feature-badge">' . $feature . '</span>';
                        }
                        echo '</div>';
                    }
                    
                    // Technologies
                    echo '<div class="project-tech">';
                    foreach ($project['technologies'] as $tech) {
                        echo '<span class="tech-tag">' . $tech . '</span>';
                    }
                    echo '</div>';
                    
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact section" id="contact">
        <div class="container">
            <h2 class="section-title fade-in">Get In Touch</h2>
            <p class="section-subtitle fade-in">Let's discuss web development, collaborate on exciting projects, or connect!</p>
            
            <div class="contact-content">
                <div class="contact-info fade-in">
                    <h3>Let's Connect!</h3>
                    <p>I'm always open to discussing projects, web development collaborations, or just having a chat about technology and innovation.</p>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <strong>Email</strong><br>
                            <a href="mailto:<?php echo $portfolio_config['email']; ?>"><?php echo $portfolio_config['email']; ?></a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fab fa-github"></i>
                        </div>
                        <div>
                            <strong>GitHub</strong><br>
                            <a href="<?php echo $portfolio_config['github']; ?>" target="_blank">@reezmahanan</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div>
                            <strong>LinkedIn</strong><br>
                            <a href="<?php echo $portfolio_config['linkedin']; ?>" target="_blank">Reezma Hanan</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div>
                            <strong>HackerRank</strong><br>
                            <a href="<?php echo $portfolio_config['hackerrank']; ?>" target="_blank">@reezmahanan</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <strong>Location</strong><br>
                            <span><?php echo $portfolio_config['location']; ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="card contact-form fade-in">
                    <h3>Send Message</h3>
                    <form id="contactForm" action="send_message.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            Send Message <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><?php echo $portfolio_config['name']; ?></h3>
                    <p>Software Engineer in Training</p>
                    <p>Building real-world applications with Java, Python, PHP, and exploring Cloud Computing</p>
                    <p style="opacity: 0.8; font-size: 0.9rem; margin-top: 0.5rem;">🎯 Goal: Skilled Developer by 2028</p>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#certificates">Certificates</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Connect</h3>
                    <div class="social-links">
                        <a href="<?php echo $portfolio_config['github']; ?>" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="<?php echo $portfolio_config['linkedin']; ?>" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="<?php echo $portfolio_config['hackerrank']; ?>" target="_blank" title="HackerRank"><i class="fab fa-hackerrank"></i></a>
                        <a href="mailto:<?php echo $portfolio_config['email']; ?>" title="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 <?php echo $portfolio_config['name']; ?>. All rights reserved. | 
                   <span id="footerVisitorCount"><?php echo $visitor_count; ?></span> Visitors</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="portfolio-script.js"></script>
</body>
</html>