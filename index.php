<?php
// Portfolio Configuration
$portfolio_config = [
    'name' => 'Reezma Hanan',
    'title' => 'Software Engineer in Training',
    'email' => 'reezmahanan@gmail.com',
    'github' => 'https://github.com/reezmahanan',
    'linkedin' => 'https://www.linkedin.com/in/reezma-hanan',
    'hackerrank' => 'https://www.hackerrank.com/profile/reezmahanan',
    'google_dev' => 'https://g.dev/reezmahanan',
    'medium' => 'https://medium.com/@reezmahanan',
    'location' => 'Batticaloa, Sri Lanka',
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
    <meta name="description" content="Hi! I'm Reezma, an IT student passionate about AI/ML, web development, and building intelligent solutions. Check out my journey with Python, Java, PHP and machine learning projects!">
    <meta name="keywords" content="Reezma Hanan, Student Developer, AI ML Enthusiast, IT Student, PHP Developer, Machine Learning, Python, Java, Web Development">
    <meta name="author" content="<?php echo $portfolio_config['name']; ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $portfolio_config['name']; ?> - AI & Web Developer">
    <meta property="og:description" content="AI/ML enthusiast & full-stack developer. Building intelligent web solutions with Python, PHP, and modern technologies.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="profile.jpg">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Reezma - AI & Web Developer Portfolio">
    <meta name="twitter:description" content="IT student passionate about AI/ML, PHP development, and building intelligent web solutions. Learning and growing in tech! 🌱">
    
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>R</text></svg>">
    
    <!-- External Resources -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">>
</head>
<body>
    <!-- Animated Background Elements -->
    <div class="particles-background">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="grid-lines">
        <div class="grid-line horizontal"></div>
        <div class="grid-line horizontal"></div>
        <div class="grid-line horizontal"></div>
        <div class="grid-line horizontal"></div>
        <div class="grid-line horizontal"></div>
        <div class="grid-line vertical"></div>
        <div class="grid-line vertical"></div>
        <div class="grid-line vertical"></div>
    </div>

    <!-- Loading Screen -->
    <div class="loading" id="loading">
        <div class="loading-content">
            <div class="loading-logo">
                <i class="fas fa-laptop-code loading-icon"></i>
            </div>
            <div class="loading-animation">
                <div class="code-brackets">
                    <span class="bracket left"><i class="fas fa-code"></i></span>
                    <div class="loading-text">
                        <span class="name-letter">R</span>
                        <span class="name-letter">e</span>
                        <span class="name-letter">e</span>
                        <span class="name-letter">z</span>
                        <span class="name-letter">m</span>
                        <span class="name-letter">a</span>
                    </div>
                    <span class="bracket right"><i class="fas fa-terminal"></i></span>
                </div>
            </div>
            <div class="loading-progress">
                <div class="progress-bar"></div>
            </div>
            <div class="loading-message">
                <i class="fas fa-rocket"></i> Loading Portfolio...
            </div>
            <div class="loading-icons">
                <i class="fab fa-html5"></i>
                <i class="fab fa-css3-alt"></i>
                <i class="fab fa-js"></i>
                <i class="fab fa-php"></i>
                <i class="fab fa-python"></i>
                <i class="fab fa-react"></i>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo"><?php echo $portfolio_config['name']; ?></div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#education" class="nav-link">Education</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#certificates" class="nav-link">Certificates</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
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
                    <p class="hero-greeting-text">HELLO, I'M</p>
                    <h1 class="hero-name">
                        <?php echo $portfolio_config['name']; ?>
                    </h1>
                    <p class="hero-role">Software Engineer | Full-Stack Developer</p>
                    <p class="hero-description-text">
                        Passionate about creating innovative digital solutions with a focus on web and software development. Transforming ideas into elegant, user-friendly applications with modern technologies.
                    </p>
                    <div class="hero-buttons">
                        <a href="cv.php" class="btn btn-download" target="_blank">
                            <i class="fas fa-file-alt"></i>
                            VIEW CV
                        </a>
                        <a href="#contact" class="btn btn-hire">
                            <i class="fas fa-envelope"></i>
                            HIRE ME
                        </a>
                    </div>
                </div>
                <div class="hero-image fade-in">
                    <div class="profile-badge-container">
                        <div class="badge-circle">
                            <div class="badge-ring blue-ring"></div>
                            <div class="badge-ring white-ring"></div>
                            <div class="badge-ring brown-ring"></div>
                            <div class="profile-circle">
                                <img src="profile.jpg?v=<?php echo time(); ?>" alt="<?php echo $portfolio_config['name']; ?>" class="profile-img">
                            </div>
                            <svg class="badge-text-svg" viewBox="0 0 200 200">
                                <defs>
                                    <path id="circlePath" d="M 100, 100 m -80, 0 a 80,80 0 1,1 160,0 a 80,80 0 1,1 -160,0"/>
                                </defs>
                                <text class="badge-text">
                                    <textPath href="#circlePath" startOffset="50%" text-anchor="middle">
                                        REEZMA HANAN
                                    </textPath>
                                </text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about section" id="about">
        <div class="container">
            <h2 class="section-title fade-in">About</h2>
            <p class="section-subtitle fade-in">Crafting Digital Experiences with Passion</p>
            
            <div class="about-content">
                <div class="about-image-container fade-in">
                    <div class="about-profile-frame">
                        <img src="About Me.jpg?v=<?php echo time(); ?>" alt="<?php echo $portfolio_config['name']; ?>" class="about-profile-img">
                    </div>
                </div>
                
                <div class="about-text fade-in">
                    <p class="about-intro">
                        I'm <strong><?php echo $portfolio_config['name']; ?></strong>, an IT student and aspiring Software Engineer currently seeking a <strong>software engineering role or internship</strong>. Currently studying <strong>Diploma in Information Technology</strong> at <strong><?php echo $portfolio_config['university']; ?></strong>, I have a strong foundation in both mobile and web development, specializing in creating intuitive, user-centered applications that solve real-world problems.
                    </p>
                    
                    <p class="about-description">
                        My journey in software engineering has equipped me with expertise in modern technologies including <strong>Java, Python, PHP, JavaScript</strong>, and various frameworks. I'm also passionate about <strong>Cloud Computing (AWS, Azure, Google Cloud)</strong>, UI/UX design and believe that great code should always be paired with an exceptional user experience.
                    </p>
                    
                    <p class="about-description">
                        When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or mentoring aspiring developers in the tech community.
                    </p>
                </div>
            </div>
            
            <div class="about-stats fade-in">
                <div class="stat-item">
                    <span class="stat-number" id="technologiesCount">10+</span>
                    <span class="stat-label">Technologies Used</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" id="projectsCount">23</span>
                    <span class="stat-label">Projects Completed</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" id="certificatesCount">19</span>
                    <span class="stat-label">Certificates Earned</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="education section" id="education">
        <div class="container">
            <h2 class="section-title fade-in">Education</h2>
            <p class="section-subtitle fade-in">My Academic Background and Qualifications</p>
            
            <div class="education-timeline fade-in">
                <div class="education-item">
                    <div class="education-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="education-content">
                        <div class="education-header">
                            <h3 class="education-degree">National Diploma in Information Technology (NDIT)</h3>
                            <span class="education-duration">Oct 2024 - Present</span>
                        </div>
                        <div class="education-institution">
                            <i class="fas fa-university"></i>
                            <strong>Institute of Technology, University of Moratuwa</strong>
                        </div>
                        <div class="education-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Diyagama, Homagama, Sri Lanka
                        </div>
                        <div class="education-status">
                            <span class="status-badge">
                                <i class="fas fa-clock"></i>
                                Currently Studying
                            </span>
                        </div>
                        <div class="education-description">
                            <p>Pursuing comprehensive education in software development, web technologies, database management, and modern IT practices.</p>
                        </div>
                    </div>
                </div>

                <div class="education-item">
                    <div class="education-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="education-content">
                        <div class="education-header">
                            <h3 class="education-degree">GCE Advanced Level - Physical Science Stream</h3>
                            <span class="education-duration">2018 - 2020</span>
                        </div>
                        <div class="education-institution">
                            <i class="fas fa-school"></i>
                            <strong>BT/BC Oddamavadi Central College National School</strong>
                        </div>
                        <div class="education-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Batticaloa
                        </div>
                        <div class="education-status">
                            <span class="status-badge completed">
                                <i class="fas fa-check-circle"></i>
                                Completed - 2020
                            </span>
                        </div>
                        <div class="education-description">
                            <p>Completed Advanced Level education focusing on Physical Science stream, building strong foundation in scientific and analytical thinking.</p>
                        </div>
                    </div>
                </div>

                <div class="education-item">
                    <div class="education-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="education-content">
                        <div class="education-header">
                            <h3 class="education-degree">GCE Ordinary Level</h3>
                            <span class="education-duration">2007 - 2018</span>
                        </div>
                        <div class="education-institution">
                            <i class="fas fa-school"></i>
                            <strong>BT/BC Oddamavadi Fathima Balika Maha Vidyalaya</strong>
                        </div>
                        <div class="education-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Batticaloa
                        </div>
                        <div class="education-status">
                            <span class="status-badge completed">
                                <i class="fas fa-check-circle"></i>
                                Completed - 2017
                            </span>
                        </div>
                        <div class="education-achievement">
                            <div class="achievement-badge">
                                <i class="fas fa-trophy"></i>
                                <strong>8 A's and B's</strong>
                            </div>
                        </div>
                        <div class="education-description">
                            <p>Successfully completed Ordinary Level education with excellent results, demonstrating strong academic performance across all subjects.</p>
                        </div>
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
                        'icon' => '<i class="fas fa-code"></i>',
                        'title' => 'Programming Languages',
                        'skills' => [
                            ['name' => 'Java', 'icon' => '<i class="fab fa-java"></i>'],
                            ['name' => 'Python', 'icon' => '<i class="fab fa-python"></i>'],
                            ['name' => 'PHP', 'icon' => '<i class="fab fa-php"></i>'],
                            ['name' => 'JavaScript', 'icon' => '<i class="fab fa-js"></i>'],
                            ['name' => 'MATLAB', 'icon' => '<i class="fas fa-calculator"></i>']
                        ]
                    ],
                    [
                        'icon' => '<i class="fas fa-globe"></i>',
                        'title' => 'Web Development',
                        'skills' => [
                            ['name' => 'HTML5', 'icon' => '<i class="fab fa-html5"></i>'],
                            ['name' => 'CSS3', 'icon' => '<i class="fab fa-css3-alt"></i>'],
                            ['name' => 'JavaScript', 'icon' => '<i class="fab fa-js-square"></i>'],
                            ['name' => 'Responsive Design', 'icon' => '<i class="fas fa-mobile-alt"></i>'],
                            ['name' => 'Web APIs', 'icon' => '<i class="fas fa-plug"></i>']
                        ]
                    ],
                    [
                        'icon' => '<i class="fas fa-database"></i>',
                        'title' => 'Databases',
                        'skills' => [
                            ['name' => 'MySQL', 'icon' => '<i class="fas fa-database"></i>'],
                            ['name' => 'SQL', 'icon' => '<i class="fas fa-table"></i>'],
                            ['name' => 'Database Design', 'icon' => '<i class="fas fa-project-diagram"></i>'],
                            ['name' => 'Query Optimization', 'icon' => '<i class="fas fa-tachometer-alt"></i>']
                        ]
                    ],
                    [
                        'icon' => '<i class="fas fa-cloud"></i>',
                        'title' => 'Cloud Computing (Beginner)',
                        'skills' => [
                            ['name' => 'AWS', 'icon' => '<i class="fab fa-aws"></i>'],
                            ['name' => 'Azure', 'icon' => '<i class="fab fa-microsoft"></i>'],
                            ['name' => 'Google Cloud', 'icon' => '<i class="fab fa-google"></i>'],
                            ['name' => 'Cloud Fundamentals', 'icon' => '<i class="fas fa-cloud-upload-alt"></i>']
                        ]
                    ],
                    [
                        'icon' => '<i class="fas fa-palette"></i>',
                        'title' => 'Design Tools',
                        'skills' => [
                            ['name' => 'Figma', 'icon' => '<i class="fab fa-figma"></i>'],
                            ['name' => 'Canva', 'icon' => '<i class="fas fa-pen-fancy"></i>'],
                            ['name' => 'UI/UX Design Basics', 'icon' => '<i class="fas fa-paint-brush"></i>']
                        ]
                    ],
                    [
                        'icon' => '<i class="fas fa-tools"></i>',
                        'title' => 'Development Tools',
                        'skills' => [
                            ['name' => 'IntelliJ IDEA', 'icon' => '<i class="fas fa-laptop-code"></i>'],
                            ['name' => 'VS Code', 'icon' => '<i class="fas fa-code"></i>'],
                            ['name' => 'Git', 'icon' => '<i class="fab fa-git-alt"></i>'],
                            ['name' => 'GitHub', 'icon' => '<i class="fab fa-github"></i>']
                        ]
                    ],
                    [
                        'icon' => '<i class="fas fa-briefcase"></i>',
                        'title' => 'Productivity Tools',
                        'skills' => [
                            ['name' => 'Microsoft Excel', 'icon' => '<i class="fas fa-file-excel"></i>'],
                            ['name' => 'Word', 'icon' => '<i class="fas fa-file-word"></i>'],
                            ['name' => 'PowerPoint', 'icon' => '<i class="fas fa-file-powerpoint"></i>'],
                            ['name' => 'Gamma AI', 'icon' => '<i class="fas fa-robot"></i>']
                        ]
                    ],
                    [
                        'icon' => '<i class="fas fa-video"></i>',
                        'title' => 'Content Creation',
                        'skills' => [
                            ['name' => 'CapCut', 'icon' => '<i class="fas fa-cut"></i>'],
                            ['name' => 'InShot', 'icon' => '<i class="fas fa-film"></i>'],
                            ['name' => 'Video Editing', 'icon' => '<i class="fas fa-video"></i>']
                        ]
                    ],
                    [
                        'icon' => '<i class="fas fa-graduation-cap"></i>',
                        'title' => 'Learning Platforms',
                        'skills' => [
                            ['name' => 'HackerRank', 'icon' => '<i class="fas fa-code"></i>'],
                            ['name' => 'Cisco Academy', 'icon' => '<i class="fas fa-network-wired"></i>'],
                            ['name' => 'Microsoft Learn', 'icon' => '<i class="fab fa-microsoft"></i>'],
                            ['name' => 'AWS Educate', 'icon' => '<i class="fab fa-aws"></i>'],
                            ['name' => 'SoloLearn', 'icon' => '<i class="fas fa-user-graduate"></i>'],
                            ['name' => 'GeeksforGeeks', 'icon' => '<i class="fas fa-laptop-code"></i>'],
                            ['name' => 'W3Schools', 'icon' => '<i class="fas fa-school"></i>'],
                            ['name' => 'Simplilearn', 'icon' => '<i class="fas fa-book-reader"></i>']
                        ]
                    ]
                ];

                foreach ($skills_categories as $category) {
                    echo '<div class="card skill-category fade-in">';
                    echo '<h3>' . $category['icon'] . ' ' . $category['title'] . '</h3>';
                    echo '<div class="skill-tags">';
                    foreach ($category['skills'] as $skill) {
                        echo '<span class="skill-tag">' . $skill['icon'] . ' ' . $skill['name'] . '</span>';
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
            
            <!-- Certificate Filter Buttons -->
            <div class="certificate-filters fade-in">
                <button class="cert-filter-btn active" data-filter="all">All</button>
                <button class="cert-filter-btn" data-filter="python">Python</button>
                <button class="cert-filter-btn" data-filter="java">Java</button>
                <button class="cert-filter-btn" data-filter="web">Web Development</button>
                <button class="cert-filter-btn" data-filter="database">Database</button>
                <button class="cert-filter-btn" data-filter="security">Cyber Security</button>
                <button class="cert-filter-btn" data-filter="other">Other</button>
            </div>
            
            <div class="certificates-grid">
                <?php
                $certificates = [
                    [
                        'category' => 'python',
                        'icon' => '<i class="fab fa-python"></i>',
                        'title' => 'Python for Beginners',
                        'issuer' => 'UOM CODL',
                        'skills' => ['Python', 'Programming', 'Basics'],
                        'link' => 'https://open.uom.lk/verify'
                    ],
                    [
                        'category' => 'web',
                        'icon' => '<i class="fas fa-globe"></i>',
                        'title' => 'Web Design for Beginners',
                        'issuer' => 'UOM CODL',
                        'skills' => ['HTML', 'CSS', 'Web Design'],
                        'link' => 'https://open.uom.lk/verify'
                    ],
                    [
                        'category' => 'python',
                        'icon' => '<i class="fab fa-python"></i>',
                        'title' => 'Python for Beginners',
                        'issuer' => 'SoloLearn',
                        'skills' => ['Python', 'Coding'],
                        'link' => 'https://api2.sololearn.com/v2/certificates/CC-ZZGGBJBM/image/png?t=638965751414194114'
                    ],
                    [
                        'category' => 'database',
                        'icon' => '<i class="fas fa-database"></i>',
                        'title' => 'SQL',
                        'issuer' => 'SoloLearn',
                        'skills' => ['SQL', 'Database', 'Queries'],
                        'link' => 'https://api2.sololearn.com/v2/certificates/CC-ZZGGBJBM/image/png?t=638965751414194114'
                    ],
                    [
                        'category' => 'web',
                        'icon' => '<i class="fab fa-html5"></i>',
                        'title' => 'HTML',
                        'issuer' => 'SoloLearn',
                        'skills' => ['HTML5', 'Web Development'],
                        'link' => 'https://api2.sololearn.com/v2/certificates/CC-RBU2XEQB/image/png?t=638857708473986790'
                    ],
                    [
                        'category' => 'java',
                        'icon' => '<i class="fab fa-java"></i>',
                        'title' => 'Java',
                        'issuer' => 'SoloLearn',
                        'skills' => ['Java', 'OOP', 'Programming'],
                        'link' => 'https://api2.sololearn.com/v2/certificates/CC-SQOTIPNO/image/png?t=638900670629150830'
                    ],
                    [
                        'category' => 'security',
                        'icon' => '<i class="fas fa-shield-alt"></i>',
                        'title' => 'Cyber Security',
                        'issuer' => 'Cisco Networking Academy',
                        'skills' => ['Security', 'Networking', 'Protection'],
                        'link' => 'https://support.credly.com/hc/en-us/articles/360026639872-Can-I-download-and-print-my-badge-certificate-'
                    ],
                    [
                        'category' => 'other',
                        'icon' => '<i class="fas fa-rocket"></i>',
                        'title' => 'Agile Scrum Foundation',
                        'issuer' => 'Simplilearn',
                        'skills' => ['Agile', 'Scrum', 'Project Management'],
                        'link' => 'https://lms.simplilearn.com/#/course/7414-Agile-Scrum-Foundation_SkillUp/showCertificate/'
                    ],
                    [
                        'category' => 'other',
                        'icon' => '<i class="fas fa-paint-brush"></i>',
                        'title' => 'UI/UX for Beginners',
                        'issuer' => 'Great Learning Academy',
                        'skills' => ['UI/UX', 'Design', 'User Experience'],
                        'link' => 'https://www.mygreatlearning.com/certificate/QYCNOODA'
                    ],
                    [
                        'category' => 'web',
                        'icon' => '<i class="fab fa-html5"></i>',
                        'title' => 'HTML',
                        'issuer' => 'Great Learning Academy',
                        'skills' => ['HTML', 'Web Development'],
                        'link' => 'https://www.mygreatlearning.com/academy/learn-for-free/courses/front-end-development-html?utm_source=public_certificate_view&utm_medium=certificate_page&utm_campaign=course_name_link'
                    ],
                    [
                        'category' => 'database',
                        'icon' => '<i class="fas fa-database"></i>',
                        'title' => 'MySQL Tutorial',
                        'issuer' => 'Great Learning Academy',
                        'skills' => ['MySQL', 'Database', 'SQL'],
                        'link' => 'https://www.mygreatlearning.com/certificate/YADZEDEN'
                    ],
                    [
                        'category' => 'other',
                        'icon' => '<i class="fas fa-laptop-code"></i>',
                        'title' => 'Programming Basics',
                        'issuer' => 'Great Learning Academy',
                        'skills' => ['Programming', 'Logic', 'Fundamentals'],
                        'link' => 'https://www.mygreatlearning.com/certificate/JDWSMZKM'
                    ],
                    [
                        'category' => 'python',
                        'icon' => '<i class="fab fa-python"></i>',
                        'title' => 'Python Fundamentals for Beginners',
                        'issuer' => 'Great Learning Academy',
                        'skills' => ['Python', 'Basics', 'Programming'],
                        'link' => 'https://www.mygreatlearning.com/certificate/UBKRGSMR'
                    ],
                    [
                        'category' => 'python',
                        'icon' => '<i class="fas fa-project-diagram"></i>',
                        'title' => 'Python Project for Beginners',
                        'issuer' => 'Great Learning Academy',
                        'skills' => ['Python', 'Project', 'Hands-on'],
                        'link' => '#' // Add your certificate link here
                    ],
                    [
                        'category' => 'java',
                        'icon' => '<i class="fab fa-java"></i>',
                        'title' => 'OOPs in Java',
                        'issuer' => 'Simplilearn',
                        'skills' => ['Java', 'OOP', 'Programming'],
                        'link' => '#' // Add your certificate link here
                    ],
                    [
                        'category' => 'security',
                        'icon' => '<i class="fas fa-shield-alt"></i>',
                        'title' => 'Introduction to Cyber Security',
                        'issuer' => 'Simplilearn',
                        'skills' => ['Security', 'Cyber Threats'],
                        'link' => 'https://lms.simplilearn.com/#/course/3736-Introduction-to-Cyber-Security/showCertificate/'
                    ],
                    [
                        'category' => 'web',
                        'icon' => '<i class="fab fa-css3-alt"></i>',
                        'title' => 'CSS (Basic)',
                        'issuer' => 'HackerRank',
                        'skills' => ['CSS', 'Styling', 'Web Design'],
                        'link' => 'https://www.hackerrank.com/certificates/3c7f4b161fcf'
                    ],
                    [
                        'category' => 'other',
                        'icon' => '<i class="fas fa-cloud"></i>',
                        'title' => 'Introduction to Cloud Computing',
                        'issuer' => 'Simplilearn',
                        'skills' => ['Cloud', 'AWS', 'Azure'],
                        'link' => 'https://lms.simplilearn.com/#/course/3971-Introduction-to-Cloud-Computing/showCertificate/'
                    ],
                    [
                        'category' => 'web',
                        'icon' => '<i class="fab fa-css3-alt"></i>',
                        'title' => 'Introduction to CSS',
                        'issuer' => 'SoloLearn',
                        'skills' => ['CSS3', 'Styling', 'Design'],
                        'link' => 'https://www.sololearn.com/certificates/CC-8BTBXIXY'
                    ]
                ];

                foreach ($certificates as $cert) {
                    $category = isset($cert['category']) ? $cert['category'] : 'other';
                    echo '<div class="card certificate-card fade-in" data-category="' . $category . '">';
                    echo '<div class="certificate-icon">' . $cert['icon'] . '</div>';
                    echo '<h3>' . $cert['title'] . '</h3>';
                    echo '<p class="certificate-issuer">' . $cert['issuer'] . '</p>';
                    echo '<div class="certificate-skills">';
                    foreach ($cert['skills'] as $skill) {
                        echo '<span class="cert-skill-tag">' . $skill . '</span>';
                    }
                    echo '</div>';
                    echo '<a href="' . $cert['link'] . '" class="certificate-link" target="_blank" rel="noopener noreferrer">';
                    echo '<i class="fas fa-external-link-alt"></i> View Certificate';
                    echo '</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects section" id="projects">
        <div class="container">
            <h2 class="section-title fade-in">Featured Projects</h2>
            <p class="section-subtitle fade-in">Showcasing my work and creative solutions</p>
            
            <!-- Project Filter Buttons -->
            <div class="project-filters fade-in">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web Application</button>
                <button class="filter-btn" data-filter="desktop">Desktop Application</button>
                <button class="filter-btn" data-filter="python">Python Projects</button>
            </div>
            
            <div class="projects-grid">
                <?php
                $projects = [
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '📅',
                        'title' => 'Event Hub - Student Event Management',
                        'description' => 'A comprehensive student event management web application with user authentication, event creation, registration, and admin panel. Features real-time updates and responsive design.',
                        'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=500&fit=crop',
                        'github' => 'https://github.com/reezmahanan/Student-Event-Management-Web-Application',
                        'features' => ['👥 User Management', '📅 Event Calendar', '✅ Registration System', '📊 Admin Dashboard'],
                        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '📚',
                        'title' => 'Book Nest - Online E-Commerce Website',
                        'description' => 'Group project: Full-featured online bookstore e-commerce platform with book catalog, shopping cart, member system, and secure checkout functionality.',
                        'image' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?w=800&h=500&fit=crop',
                        'github' => 'https://github.com/reezmahanan/BookNest',
                        'features' => ['📖 Book Catalog', '🛒 Shopping Cart', '👤 Member System', '🔍 Search Engine'],
                        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '🌤️',
                        'title' => 'Weather App',
                        'description' => 'Real-time weather application with API integration displaying current conditions, forecasts, and weather visualization.',
                        'image' => 'https://images.unsplash.com/photo-1561470508-fd4df1ed90b2?ixlib=rb-4.0.3&w=800&h=500&fit=crop&q=80',
                        'github' => 'https://github.com/reezmahanan/Weather-App',
                        'features' => ['🌡️ Current Weather', '📊 Forecasts', '🗺️ Location Search', '📱 Responsive'],
                        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Weather API']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '💼',
                        'title' => 'My Portfolio Website',
                        'description' => 'Personal portfolio website showcasing projects, skills, and achievements with modern design and animations.',
                        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmaportfolio.great-site.net/',
                        'github' => 'https://github.com/reezmahanan/Portfolio-Website',
                        'features' => ['🎨 Modern Design', '📱 Responsive', '✨ Animations', '📬 Contact Form'],
                        'technologies' => ['PHP', 'HTML', 'CSS', 'JavaScript']
                    ],
                    [
                        'featured' => true,
                        'icon' => '📚',
                        'title' => 'Library Management System',
                        'category' => 'desktop',
                        'description' => 'Java-based desktop application for managing library operations including book cataloging, member management, book lending, returns, and fine calculation. Features GUI built with Java Swing.',
                        'image' => 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=800&h=500&fit=crop',
                        'github' => 'https://github.com/reezmahanan/Library-Management-System',
                        'features' => ['📖 Book Management', '👤 Member System', '🔄 Lending/Returns', '💰 Fine Calculator'],
                        'technologies' => ['Java']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🎓',
                        'title' => 'Student Management System',
                        'category' => 'desktop',
                        'description' => 'Comprehensive Java application for managing student records, attendance tracking, grade management, and report generation. Built with object-oriented programming principles.',
                        'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&h=500&fit=crop',
                        'github' => 'https://github.com/reezmahanan/Student-Management-System',
                        'features' => ['📝 Student Records', '📊 Attendance Tracking', '🎯 Grade Management', '📄 Report Generation'],
                        'technologies' => ['Java']
                    ],
                    [
                        'featured' => true,
                        'icon' => '📦',
                        'title' => 'Inventory Management System (IMS)',
                        'category' => 'desktop',
                        'description' => 'Java-based inventory management system for tracking products, managing stock levels, handling suppliers, and generating inventory reports. Features robust database integration.',
                        'image' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=800&h=500&fit=crop',
                        'github' => 'https://github.com/reezmahanan/IMS',
                        'features' => ['📊 Stock Tracking', '🏪 Supplier Management', '📈 Reports', '⚠️ Low Stock Alerts'],
                        'technologies' => ['Java']
                    ],
                    [
                        'featured' => true,
                        'icon' => '🐍',
                        'title' => 'Python Calculator',
                        'category' => 'python',
                        'description' => 'Feature-rich calculator application built with Python and Tkinter GUI. Supports basic arithmetic operations, scientific calculations, and history tracking.',
                        'image' => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=800&h=500&fit=crop',
                        'github' => 'https://github.com/reezmahanan/Py-Calculator',
                        'features' => ['➕ Basic Operations', '🔬 Scientific Mode', '📜 History', '🎨 GUI Interface'],
                        'technologies' => ['Python']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '🕐',
                        'title' => 'Digital Clock',
                        'description' => 'Interactive digital clock with modern design, date display, and customizable themes.',
                        'image' => 'https://images.unsplash.com/photo-1509048191080-d2984bad6ae5?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/Digital-clock/',
                        'github' => 'https://github.com/reezmahanan/Digital-clock',
                        'features' => ['⏰ Real-Time', '🎨 Themes', '📅 Date Display'],
                        'technologies' => ['HTML', 'CSS', 'JavaScript']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '✅',
                        'title' => 'To-Do List App',
                        'description' => 'Task management application with add, edit, delete, and complete features. Local storage persistence.',
                        'image' => 'https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/To-Do-list/',
                        'github' => 'https://github.com/reezmahanan/To-Do-list',
                        'features' => ['➕ Add Tasks', '✏️ Edit', '🗑️ Delete', '💾 Local Storage'],
                        'technologies' => ['HTML', 'CSS', 'JavaScript']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '📅',
                        'title' => 'Interactive Calendar',
                        'description' => 'Dynamic calendar with month/year navigation, event highlighting, and responsive design.',
                        'image' => 'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/Interactive-Calendar/',
                        'github' => 'https://github.com/reezmahanan/Interactive-Calendar',
                        'features' => ['📆 Month View', '➡️ Navigation', '🎉 Event Highlight'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '🏢',
                        'title' => 'Reezma Tech Services',
                        'description' => 'Professional tech services website with service listings, contact forms, and modern UI.',
                        'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/Reezma-tech-services/',
                        'github' => 'https://github.com/reezmahanan/Reezma-tech-services',
                        'features' => ['💼 Services', '📬 Contact Form', '🎨 Modern UI'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '🧮',
                        'title' => 'Calculator',
                        'description' => 'Functional calculator with basic arithmetic operations and clean interface.',
                        'image' => 'https://images.unsplash.com/photo-1587145820266-a5951ee6f620?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/calculator/',
                        'github' => 'https://github.com/reezmahanan/calculator',
                        'features' => ['➕ Add', '➖ Subtract', '✖️ Multiply', '➗ Divide'],
                        'technologies' => ['HTML']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '📱',
                        'title' => 'Mobile Login Interface',
                        'description' => 'Responsive mobile-first login page with modern UI/UX design.',
                        'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/mobile-login/',
                        'github' => 'https://github.com/reezmahanan/mobile-login',
                        'features' => ['📱 Mobile First', '🎨 Modern UI', '🔒 Secure'],
                        'technologies' => ['HTML']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '📝',
                        'title' => 'Simple Application Form',
                        'description' => 'User-friendly application form with validation and responsive layout.',
                        'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/simple-Application-Form/',
                        'github' => 'https://github.com/reezmahanan/simple-Application-Form',
                        'features' => ['✅ Validation', '📱 Responsive', '📤 Submit'],
                        'technologies' => ['HTML']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '🎨',
                        'title' => 'Reezma Logo Design',
                        'description' => 'Personal branding logo created with HTML and CSS.',
                        'image' => 'https://images.unsplash.com/photo-1626785774573-4b799315345d?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/Reezma-logo/',
                        'github' => 'https://github.com/reezmahanan/Reezma-logo',
                        'features' => ['🎨 Creative', '💎 Branding', '💻 HTML/CSS'],
                        'technologies' => ['HTML']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '🏷️',
                        'title' => 'Label Design',
                        'description' => 'Creative label designs using HTML and CSS.',
                        'image' => 'https://images.unsplash.com/photo-1516962126636-27ad087061cc?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/Sample_Label/',
                        'github' => 'https://github.com/reezmahanan/label',
                        'features' => ['🎨 Design', '📜 Templates', '✨ Creative'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '📄',
                        'title' => 'Resume Template',
                        'description' => 'Professional resume template with clean design and print-friendly layout.',
                        'image' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/Sample_Resume/',
                        'github' => 'https://github.com/reezmahanan/resume',
                        'features' => ['💼 Professional', '🖨️ Print Ready', '🎨 Clean Design'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '🎓',
                        'title' => 'First HTML Portfolio',
                        'description' => 'My first portfolio project demonstrating HTML fundamentals.',
                        'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/My-First-HTML-sampleportfolio/',
                        'github' => 'https://github.com/reezmahanan/MY-FIRST-HTML-PROJECT',
                        'features' => ['🎓 First Project', '💻 HTML Basics', '🎨 CSS Styling'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '💌',
                        'title' => 'HTML Invitation Card',
                        'description' => 'Creative invitation card design showcasing HTML and CSS skills.',
                        'image' => 'https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=800&h=500&fit=crop',
                        'live_demo' => 'https://reezmahanan.github.io/Firsthtml_Invitation/',
                        'github' => 'https://github.com/reezmahanan/firsthtml',
                        'features' => ['🎉 Creative', '🎨 Design', '💬 Card Layout'],
                        'technologies' => ['HTML', 'CSS']
                    ],
                    [
                        'featured' => true,
                        'category' => 'python',
                        'icon' => '🌦️',
                        'title' => 'Animated Weather System',
                        'description' => 'Python-based weather simulation with animated visualizations.',
                        'image' => 'https://images.unsplash.com/photo-1534088568595-a066f410bcda?w=800&h=500&fit=crop',
                        'github' => 'https://github.com/reezmahanan/weather-system',
                        'features' => ['🌞 Animation', '🐍 Python', '📊 Visualization'],
                        'technologies' => ['Python']
                    ],
                    [
                        'featured' => true,
                        'category' => 'python',
                        'icon' => '🪐',
                        'title' => 'Solar System Simulator',
                        'description' => 'Educational solar system simulation demonstrating planetary mechanics.',
                        'image' => 'https://images.unsplash.com/photo-1614730321146-b6fa6a46bcb4?w=800&h=500&fit=crop',
                        'github' => 'https://github.com/reezmahanan/solar-system-simulator',
                        'features' => ['🌌 Planets', '🔭 Physics', '🎯 Educational'],
                        'technologies' => ['Python']
                    ],
                    [
                        'featured' => true,
                        'category' => 'web',
                        'icon' => '📬',
                        'title' => 'Contact Form',
                        'description' => 'Professional contact form with PHP backend for secure message handling and email notifications.',
                        'image' => 'https://images.unsplash.com/photo-1596526131083-e8c633c948d2?w=800&h=500&fit=crop',
                        'github' => 'https://github.com/reezmahanan/Contact-Form',
                        'features' => ['📧 Email Notifications', '✅ Validation', '🔒 Secure', '📱 Responsive'],
                        'technologies' => ['PHP']
                    ]
                ];
                
                foreach ($projects as $project) {
                    $featured_class = $project['featured'] ? 'featured-project' : '';
                    $category = isset($project['category']) ? $project['category'] : 'web';
                    echo '<div class="card project-card ' . $featured_class . '" data-category="' . $category . '">';
                    
                    // Project Image (if available)
                    if (isset($project['image'])) {
                        echo '<div class="project-image">';
                        echo '<img src="' . $project['image'] . '" alt="' . $project['title'] . '" loading="lazy">';
                        echo '</div>';
                    }
                    
                    // Project Header
                    echo '<div class="project-header">';
                    echo '<div class="project-header-content">';
                    echo '<h3 class="project-title">' . $project['title'] . '</h3>';
                    
                    // Description
                    echo '<p class="project-description">' . $project['description'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    
                    // Technologies
                    echo '<div class="project-tech">';
                    foreach ($project['technologies'] as $tech) {
                        echo '<span class="tech-tag">' . $tech . '</span>';
                    }
                    echo '</div>';
                    
                    // Project Links (LIVE and CODE buttons)
                    echo '<div class="project-links">';
                    if (isset($project['live_demo'])) {
                        echo '<a href="' . $project['live_demo'] . '" class="project-link live-demo" target="_blank">';
                        echo '<i class="fas fa-external-link-alt"></i> LIVE';
                        echo '</a>';
                    }
                    echo '<a href="' . $project['github'] . '" class="project-link" target="_blank">';
                    echo '<i class="fab fa-github"></i> CODE';
                    echo '</a>';
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
                            <i class="fab fa-google"></i>
                        </div>
                        <div>
                            <strong>Google Developer</strong><br>
                            <a href="<?php echo $portfolio_config['google_dev']; ?>" target="_blank">g.dev/reezmahanan</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fab fa-medium"></i>
                        </div>
                        <div>
                            <strong>Medium</strong><br>
                            <a href="<?php echo $portfolio_config['medium']; ?>" target="_blank">@reezmahanan</a>
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
                        <li><a href="#certificates">Certificates</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Connect</h3>
                    <div class="social-links">
                        <a href="<?php echo $portfolio_config['github']; ?>" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="<?php echo $portfolio_config['linkedin']; ?>" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="<?php echo $portfolio_config['hackerrank']; ?>" target="_blank" title="HackerRank"><i class="fab fa-hackerrank"></i></a>
                        <a href="<?php echo $portfolio_config['google_dev']; ?>" target="_blank" title="Google Developer"><i class="fab fa-google"></i></a>
                        <a href="<?php echo $portfolio_config['medium']; ?>" target="_blank" title="Medium"><i class="fab fa-medium"></i></a>
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
    <script src="portfolio-script.js?v=<?php echo time(); ?>"></script>
</body>
</html>