<?php
// CV Configuration
$cv_config = [
    'name' => 'Reezma Hanan',
    'title' => 'Software Engineer in Training',
    'email' => 'reezmahanan@gmail.com',
    'phone' => '+94 77 XXX XXXX', // Contact via email
    'location' => 'Batticaloa, Sri Lanka',
    'github' => 'github.com/reezmahanan',
    'linkedin' => 'linkedin.com/in/reezma-hanan',
    'website' => 'reezmahanan.com',
    'hackerrank' => 'hackerrank.com/profile/reezmahanan',
];

$education = [
    [
        'degree' => 'National Diploma in Information Technology (NDT IT)',
        'institution' => 'Institute of Technology, University of Moratuwa',
        'location' => 'Diyagama, Homagama, Sri Lanka',
        'period' => 'Oct 2024 - Present',
        'details' => 'Currently pursuing comprehensive education in software development, web technologies, database management, cloud computing, and modern IT practices. Focus on full-stack development and emerging technologies.'
    ],
    [
        'degree' => 'GCE Advanced Level - Physical Science Stream',
        'institution' => 'BT/BC Oddamavadi Central College National School',
        'location' => 'Batticaloa',
        'period' => '2018 - 2020',
        'details' => 'Completed with strong foundation in scientific and analytical thinking'
    ],
    [
        'degree' => 'GCE Ordinary Level',
        'institution' => 'BT/BC Oddamavadi Fathima Balika Maha Vidyalaya',
        'location' => 'Batticaloa',
        'period' => '2007 - 2018',
        'details' => 'Achieved 8 A\'s and B\'s with excellent academic performance'
    ]
];

$skills = [
    'Programming Languages' => ['Java', 'Python', 'PHP', 'JavaScript', 'C++', 'SQL'],
    'Web Technologies' => ['HTML5', 'CSS3', 'React.js', 'Node.js', 'Bootstrap', 'Responsive Design'],
    'Databases' => ['MySQL', 'MongoDB', 'Firebase', 'Database Design'],
    'Development Tools' => ['Git', 'GitHub', 'VS Code', 'IntelliJ IDEA', 'Postman', 'XAMPP'],
    'Frameworks & Libraries' => ['Java Swing', 'Express.js', 'REST APIs'],
    'Cyber Security' => ['Network Security', 'Security Best Practices', 'Secure Coding', 'Threat Prevention', 'Data Protection'],
    'Cloud & Others' => ['AWS', 'Azure', 'Google Cloud', 'Agile', 'UI/UX Design']
];

$experience = [
    [
        'position' => 'Student Developer & Software Engineering Intern (Seeking)',
        'company' => 'Personal Projects & Continuous Learning',
        'period' => '2024 - Present',
        'responsibilities' => [
            'Developed 23+ web and desktop applications using Java, Python, PHP, JavaScript and modern frameworks',
            'Built robust Java Swing desktop applications including Library Management System, Student Management System, and Inventory Management System (IMS) with complete CRUD functionality',
            'Created full-stack web applications (Event Hub, Book Nest) with user authentication, admin panels, and database integration',
            'Implemented responsive and interactive web designs with modern UI/UX principles, animations, and accessibility standards',
            'Earned 19+ professional certificates from Cisco, AWS Academy, HackerRank, SoloLearn, and other platforms',
            'Actively contribute to open-source projects on GitHub with clean, well-documented code following best practices',
            'Continuously learning new technologies including React.js, Node.js, and C++ to expand development capabilities'
        ]
    ]
];

$projects = [
    [
        'name' => 'Event Hub - Student Event Management System',
        'description' => 'Comprehensive web application for managing student events with user authentication, event registration, and admin panel. Features include event creation, participant management, and real-time updates.',
        'technologies' => 'PHP, MySQL, JavaScript, HTML5, CSS3, Bootstrap',
        'highlights' => 'User authentication, Event CRUD operations, Registration system, Admin dashboard, Responsive design'
    ],
    [
        'name' => 'Book Nest - E-Commerce Bookstore',
        'description' => 'Full-featured online bookstore platform with book catalog, shopping cart, member management, and secure checkout functionality. Group project demonstrating team collaboration.',
        'technologies' => 'PHP, MySQL, JavaScript, HTML5, CSS3',
        'highlights' => 'Book catalog with search, Shopping cart, Member/Admin system, Order management, Payment integration ready'
    ],
    [
        'name' => 'Library Management System',
        'description' => 'Java Swing desktop application for comprehensive library operations including book cataloging, member management, book lending, returns, and automated fine calculation.',
        'technologies' => 'Java, Java Swing, MySQL, JDBC',
        'highlights' => 'Complete CRUD operations, Book lending/return tracking, Fine calculation, Member management, Inventory reports'
    ],
    [
        'name' => 'Student Management System',
        'description' => 'Java-based desktop application for managing student records, attendance tracking, grade management, and automated report generation using OOP principles.',
        'technologies' => 'Java, Java Swing, MySQL',
        'highlights' => 'Student records CRUD, Attendance tracking, Grade management, Report generation, Data validation'
    ],
    [
        'name' => 'Inventory Management System (IMS)',
        'description' => 'Professional inventory management system for tracking products, managing stock levels, supplier management, and generating comprehensive inventory reports.',
        'technologies' => 'Java, Java Swing, MySQL',
        'highlights' => 'Stock tracking, Supplier management, Low stock alerts, Inventory reports, Purchase order management'
    ],
    [
        'name' => 'Weather App',
        'description' => 'Real-time weather forecast application with API integration displaying current conditions, 5-day forecasts, and weather visualization with intuitive UI.',
        'technologies' => 'JavaScript, Weather API, HTML5, CSS3, PHP',
        'highlights' => 'Live weather data, Location search, 5-day forecast, Responsive design, Weather icons'
    ],
    [
        'name' => 'Portfolio Website with CV',
        'description' => 'Professional portfolio website showcasing projects, skills, certificates, and achievements with integrated CV page, dark mode, and visitor counter.',
        'technologies' => 'PHP, JavaScript, CSS3, HTML5, MySQL',
        'highlights' => 'Responsive design, Dark/Light mode, Visitor counter, CV page, Contact form, Project filtering'
    ]
];

$certificates = [
    'Cyber Security - Cisco Networking Academy',
    'Introduction to Cloud Computing - Simplilearn',
    'AWS Academy Cloud Foundations',
    'Java Programming - SoloLearn',
    'Object-Oriented Programming in Java - Simplilearn',
    'SQL - SoloLearn',
    'MySQL Tutorial - Great Learning Academy',
    'Python for Beginners - SoloLearn & UOM CODL',
    'HTML - SoloLearn & Great Learning Academy',
    'CSS (Basic) - HackerRank',
    'Introduction to CSS - SoloLearn',
    'Web Design for Beginners - UOM CODL',
    'UI/UX for Beginners - Great Learning Academy',
    'Introduction to Cyber Security - Simplilearn',
    'Agile Scrum Foundation - Simplilearn',
    'Programming Basics - Great Learning Academy',
    'Python Fundamentals for Beginners - Great Learning Academy',
    'Python Project for Beginners - Great Learning Academy',
    'And more... (19+ total professional certificates)'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $cv_config['name']; ?> - Curriculum Vitae</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 50%, #60a5fa 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            padding: 20px;
            color: #333;
            position: relative;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.25) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(255, 255, 255, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 60% 60%, rgba(255, 255, 255, 0.15) 0%, transparent 40%);
            background-size: 100% 100%;
            pointer-events: none;
            z-index: 0;
        }

        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                repeating-linear-gradient(
                    0deg,
                    transparent,
                    transparent 50px,
                    rgba(255, 255, 255, 0.08) 50px,
                    rgba(255, 255, 255, 0.08) 51px
                ),
                repeating-linear-gradient(
                    90deg,
                    transparent,
                    transparent 50px,
                    rgba(255, 255, 255, 0.08) 50px,
                    rgba(255, 255, 255, 0.08) 51px
                );
            pointer-events: none;
            z-index: 0;
        }

        .cv-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 10px 60px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .cv-header {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            padding: 40px;
            text-align: center;
        }

        .cv-header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .cv-header .title {
            font-size: 1.3em;
            margin-bottom: 20px;
            opacity: 0.95;
            font-weight: 500;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
            font-size: 0.95em;
        }

        .contact-info a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: opacity 0.3s;
        }

        .contact-info a:hover {
            opacity: 0.8;
        }

        .cv-actions {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #e9ecef;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            margin: 0 10px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
            font-size: 1em;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(59, 130, 246, 0.4);
        }

        .btn-secondary {
            background: white;
            color: #3b82f6;
            border: 2px solid #3b82f6;
        }

        .btn-secondary:hover {
            background: #3b82f6;
            color: white;
        }

        .cv-content {
            padding: 40px;
        }

        .cv-section {
            margin-bottom: 40px;
        }

        .cv-section h2 {
            color: #2563eb;
            font-size: 1.8em;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #3b82f6;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .education-item, .experience-item, .project-item {
            margin-bottom: 25px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 4px solid #3b82f6;
        }

        .education-item h3, .experience-item h3, .project-item h3 {
            color: #333;
            font-size: 1.3em;
            margin-bottom: 5px;
        }

        .institution, .company {
            color: #666;
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        .period {
            color: #888;
            font-size: 0.9em;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .details, .description {
            color: #555;
            line-height: 1.6;
            margin-top: 10px;
        }

        .responsibilities {
            list-style: none;
            padding-left: 0;
        }

        .responsibilities li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
            color: #555;
            line-height: 1.6;
        }

        .responsibilities li:before {
            content: "▹";
            position: absolute;
            left: 0;
            color: #3b82f6;
            font-weight: bold;
            font-size: 1.2em;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .skill-category {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #1e40af;
        }

        .skill-category h3 {
            color: #2563eb;
            font-size: 1.1em;
            margin-bottom: 12px;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .skill-tag {
            background: white;
            color: #3b82f6;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.9em;
            border: 1px solid #3b82f6;
        }

        .certificates-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .certificate-item {
            background: #f8f9fa;
            padding: 15px 20px;
            border-radius: 10px;
            border-left: 4px solid #60a5fa;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .certificate-item i {
            color: #ec4899;
            font-size: 1.3em;
        }

        .technologies {
            color: #667eea;
            font-weight: 600;
            margin-top: 8px;
        }

        .highlights {
            color: #888;
            font-size: 0.9em;
            margin-top: 5px;
        }

        @media print {
            body {
                background: white;
                padding: 0;
            }

            .cv-actions {
                display: none;
            }

            .cv-container {
                box-shadow: none;
                border-radius: 0;
            }

            .cv-section {
                page-break-inside: avoid;
            }
        }

        @media (max-width: 768px) {
            .cv-header h1 {
                font-size: 2em;
            }

            .cv-header .title {
                font-size: 1.1em;
            }

            .contact-info {
                font-size: 0.85em;
            }

            .cv-content {
                padding: 20px;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.9em;
                margin: 5px;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="cv-container" id="cv-content">
        <!-- CV Header -->
        <div class="cv-header">
            <h1><?php echo $cv_config['name']; ?></h1>
            <div class="title"><?php echo $cv_config['title']; ?></div>
            <div class="contact-info">
                <a href="mailto:<?php echo $cv_config['email']; ?>">
                    <i class="fas fa-envelope"></i> <?php echo $cv_config['email']; ?>
                </a>
                <span style="color: white;">
                    <i class="fas fa-map-marker-alt"></i> <?php echo $cv_config['location']; ?>
                </span>
                <a href="https://<?php echo $cv_config['github']; ?>" target="_blank">
                    <i class="fab fa-github"></i> GitHub
                </a>
                <a href="https://<?php echo $cv_config['linkedin']; ?>" target="_blank">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
                <a href="https://<?php echo $cv_config['hackerrank']; ?>" target="_blank">
                    <i class="fab fa-hackerrank"></i> HackerRank
                </a>
            </div>
        </div>

        <!-- CV Actions -->
        <div class="cv-actions">
            <button onclick="window.print()" class="btn btn-primary">
                <i class="fas fa-file-pdf"></i> Print / Save as PDF
            </button>
            <a href="index.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Portfolio
            </a>
        </div>

        <!-- CV Content -->
        <div class="cv-content">
            <!-- Professional Summary -->
            <div class="cv-section">
                <h2><i class="fas fa-user"></i> Professional Summary</h2>
                <p class="details">
                    Passionate IT student and aspiring <strong>Software Engineer</strong> currently seeking a <strong>software engineering role or internship opportunity</strong>. 
                    Hands-on experience in full-stack development with expertise in <strong>Java, Python, PHP, and JavaScript</strong>. 
                    Proven track record of building <strong>23+ real-world projects</strong> including web applications (Event Hub, Book Nest) 
                    and Java desktop applications (Library Management System, Student Management System, Inventory Management System). 
                    Earned <strong>19+ professional certificates</strong> including <strong>Cyber Security from Cisco Networking Academy</strong>, AWS Academy, HackerRank, and other reputable platforms. 
                    Strong foundation in software development principles, <strong>cybersecurity best practices</strong>, secure coding, database design, UI/UX, and cloud computing. 
                    Passionate about <strong>network security, data protection, and building secure applications</strong>. 
                    Dedicated to continuous learning and creating innovative, security-first, user-centered solutions with modern technologies. 
                    Currently exploring <strong>React.js, Node.js, C++, Cloud Computing, and Advanced Security Concepts</strong> to expand development capabilities.
                </p>
            </div>

            <!-- Education -->
            <div class="cv-section">
                <h2><i class="fas fa-graduation-cap"></i> Education</h2>
                <?php foreach ($education as $edu): ?>
                <div class="education-item">
                    <h3><?php echo $edu['degree']; ?></h3>
                    <div class="institution"><?php echo $edu['institution']; ?><?php if(isset($edu['location'])): ?> - <?php echo $edu['location']; ?><?php endif; ?></div>
                    <div class="period"><?php echo $edu['period']; ?></div>
                    <div class="details"><?php echo $edu['details']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Skills -->
            <div class="cv-section">
                <h2><i class="fas fa-code"></i> Technical Skills</h2>
                <div class="skills-grid">
                    <?php foreach ($skills as $category => $skill_list): ?>
                    <div class="skill-category">
                        <h3><?php echo $category; ?></h3>
                        <div class="skill-tags">
                            <?php foreach ($skill_list as $skill): ?>
                            <span class="skill-tag"><?php echo $skill; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Experience -->
            <div class="cv-section">
                <h2><i class="fas fa-briefcase"></i> Experience</h2>
                <?php foreach ($experience as $exp): ?>
                <div class="experience-item">
                    <h3><?php echo $exp['position']; ?></h3>
                    <div class="company"><?php echo $exp['company']; ?></div>
                    <div class="period"><?php echo $exp['period']; ?></div>
                    <ul class="responsibilities">
                        <?php foreach ($exp['responsibilities'] as $responsibility): ?>
                        <li><?php echo $responsibility; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Projects -->
            <div class="cv-section">
                <h2><i class="fas fa-rocket"></i> Key Projects</h2>
                <?php foreach ($projects as $project): ?>
                <div class="project-item">
                    <h3><?php echo $project['name']; ?></h3>
                    <div class="description"><?php echo $project['description']; ?></div>
                    <div class="technologies"><i class="fas fa-tools"></i> Technologies: <?php echo $project['technologies']; ?></div>
                    <div class="highlights"><i class="fas fa-star"></i> <?php echo $project['highlights']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Certificates -->
            <div class="cv-section">
                <h2><i class="fas fa-certificate"></i> Certifications</h2>
                <div class="certificates-list">
                    <?php foreach ($certificates as $cert): ?>
                    <div class="certificate-item">
                        <i class="fas fa-award"></i>
                        <span><?php echo $cert; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
