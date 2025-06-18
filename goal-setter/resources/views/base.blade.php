<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    

    <div class="social-profiles">
                <h3 class="profiles-title">
                    <i class="fab fa-facebook me-2"></i>
                    Meet Our Team
                </h3>
                
                <div class="profile-card">
                    <div class="profile-header">
                        <img src="https://scontent.fceb1-3.fna.fbcdn.net/v/t39.30808-6/505629446_1022580173355984_1710824843001071140_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEU_uYLRAYzVn-Y-aFJoeWlDA1ro3d-oTEMDWujd36hMSe3RM9IL7Tjel4FuRyfX18J01uCRZ2j9LHlaBgNnUsB&_nc_ohc=W1E7gJ7-D-AQ7kNvwH4P_AS&_nc_oc=AdngWjpuDcngk9gSOo4YYeVQNNo5SQ3KI3uJjVDi0QVI8kEhKVebSx0XscjtoEuoQ1g&_nc_zt=23&_nc_ht=scontent.fceb1-3.fna&_nc_gid=TCNTwwaPBBieBHxl-8W3Vw&oh=00_AfO06RoQvrgHCF3p9NXAQtUU-JZ33cYGs7kJtvbaGLZJUg&oe=685849D7" alt="Cres Tuayon" class="profile-avatar">
                        <div class="profile-info">
                            <h5>Crestian Tuayon</h5>
                            <div class="role">Lead Developer</div>
                            <a href="https://www.facebook.com/cresttuayon" target="_blank" class="facebook-link">
                                <i class="fab fa-facebook-f"></i>
                                View Facebook Profile
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="profile-card">
                    <div class="profile-header">
                        <img src=" " alt="Berna Rose Alingasa" class="profile-avatar">
                        <div class="profile-info">
                            <h5>Berna Rose Alingasa</h5>
                            <div class="role">UI/UX Designer</div>
                            <a href="" target="_blank" class="facebook-link">
                                <i class="fab fa-facebook-f"></i>
                                View Facebook Profile
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="profile-card">
                    <div class="profile-header">
                        <img src="https://scontent.fceb1-1.fna.fbcdn.net/v/t39.30808-1/480219692_516298394832987_6622792714002547835_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=105&ccb=1-7&_nc_sid=1d2534&_nc_eui2=AeFXSjgboF1rP8_gK1Nzp4t__1j2Qsf0lwf_WPZCx_SXB_LYfc-WXnnEryL6UngbE_qdqftMdUfkks1FpA4aXCbz&_nc_ohc=wg2QGz1Y2qUQ7kNvwGEVaTf&_nc_oc=AdkMDbHJ6lHPSZWfczsatVJbx2EUCKirbxf5owzMvFZwuRQjjYwQg_H5YGyzEkkTqtY&_nc_zt=24&_nc_ht=scontent.fceb1-1.fna&_nc_gid=PjA1byGJg4huRJReZu4wOw&oh=00_AfMXHJrc9NG1l3XEr7XJnsRm4wbUv5jM6WWFmxHwFv4ijA&oe=6858317C" alt="Alma Elvinia" class="profile-avatar">
                        <div class="profile-info">
                            <h5>Alma Elvina</h5>
                            <div class="role">Project Manager</div>
                            <a href="https://www.facebook.com/alma.elvinia.2025" target="_blank" class="facebook-link">
                                <i class="fab fa-facebook-f"></i>
                                View Facebook Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
           
            
            --shadow-light: 0 2px 15px rgba(0, 0, 0, 0.08);
            --shadow-medium: 0 8px 30px rgba(0, 0, 0, 0.12);
            --shadow-heavy: 0 20px 60px rgba(0, 0, 0, 0.15);
            
            --border-radius: 12px;
            --border-radius-lg: 20px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--primary-gradient);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(120, 219, 255, 0.3) 0%, transparent 50%);
            animation: backgroundFloat 20s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes backgroundFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-30px) rotate(1deg); }
            66% { transform: translateY(15px) rotate(-1deg); }
        }

        /* Floating particles */
        .particle {
            position: fixed;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            pointer-events: none;
            animation: float 15s infinite linear;
            z-index: -1;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(0px) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) translateX(100px) rotate(360deg);
                opacity: 0;
            }
        }

        .centered-div {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            position: relative;
            gap: 30px;
        }

        .main-content {
            display: flex;
            align-items: center;
            gap: 30px;
            max-width: 1200px;
            width: 100%;
        }

        .login-section {
            flex: 1;
            max-width: 500px;
        }

        .social-profiles {
            flex: 1;
            max-width: 400px;
        }

        .profile-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-heavy);
            padding: 25px;
            margin-bottom: 20px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .profile-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #1877f2 0%, #42a5f5 100%);
        }

        .profile-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .profile-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 3px solid #1877f2;
            margin-right: 15px;
            object-fit: cover;
            transition: var(--transition);
        }

        .profile-avatar:hover {
            transform: scale(1.05);
            border-color: #42a5f5;
        }

        .profile-info h5 {
            margin: 0;
            color: #2c3e50;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .profile-info .role {
            color: #667eea;
            font-size: 0.9rem;
            font-weight: 500;
            margin: 2px 0;
        }

        .facebook-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #1877f2;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: var(--transition);
            margin-top: 8px;
        }

        .facebook-link:hover {
            color: #42a5f5;
            transform: translateX(3px);
        }

        .facebook-link i {
            font-size: 1.1rem;
        }

        .profiles-title {
            color: white;
            text-align: center;
            margin-bottom: 25px;
            font-weight: 600;
            font-size: 1.3rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 992px) {
            .main-content {
                flex-direction: column;
                gap: 20px;
            }
            
            .social-profiles {
                max-width: 500px;
            }
        }

        @media (max-width: 768px) {
            .centered-div {
                gap: 15px;
            }
            
            .main-content {
                gap: 15px;
            }
            
            .profile-card {
                padding: 20px;
            }
        }

        /* Enhanced Card Styling */
        .card {
            background: rgba(235, 233, 233, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-heavy);
            transition: var(--transition);
            overflow: hidden;
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background: rgba(255, 255, 255, 0.8);
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            padding: 24px 30px;
            position: relative;
        }

        .card-header h4 {
            margin: 0;
            font-weight: 600;
            color: #2c3e50;
            font-size: 1.5rem;
        }

        .card-body {
            padding: 30px;
        }

        /* Enhanced Form Controls */
        .form-label {
            font-weight: 500;
            color: #374151;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-control {
            border: 2px solid #e5e7eb;
            border-radius: var(--border-radius);
            padding: 12px 16px;
            font-size: 16px;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.9);
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            background: white;
            transform: translateY(-1px);
        }

        .form-control:hover {
            border-color: #9ca3af;
        }

        /* Enhanced Buttons */
        .btn {
            border-radius: var(--border-radius);
            padding: 12px 24px;
            font-weight: 500;
            font-size: 16px;
            transition: var(--transition);
            border: none;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: var(--primary-gradient);
            color: white;
            box-shadow: var(--shadow-light);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
            color: white;
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        /* Enhanced Alerts */
        .alert {
            border: none;
            border-radius: var(--border-radius);
            padding: 16px 20px;
            margin: 20px 30px 0;
            font-weight: 500;
            box-shadow: var(--shadow-light);
            position: relative;
            overflow: hidden;
        }

        .alert-success {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1) 0%, rgba(34, 197, 94, 0.05) 100%);
            color: #15803d;
            border-left: 4px solid #22c55e;
        }

        .alert-danger {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(239, 68, 68, 0.05) 100%);
            color: #dc2626;
            border-left: 4px solid #ef4444;
        }

        .alert-warning {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(245, 158, 11, 0.05) 100%);
            color: #d97706;
            border-left: 4px solid #f59e0b;
        }

        .alert-info {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(59, 130, 246, 0.05) 100%);
            color: #2563eb;
            border-left: 4px solid #3b82f6;
        }

        /* Error Messages */
        .text-danger {
            color: #dc2626 !important;
            font-size: 0.875rem;
            margin-top: 6px;
            font-weight: 500;
        }

        .is-invalid {
            border-color: #ef4444 !important;
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1) !important;
        }

        /* Links */
        a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        a:hover {
            color: #5a6fd8;
            text-decoration: none;
        }

        /* Loading Animation */
        .loading {
            position: relative;
            pointer-events: none;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin: -10px 0 0 -10px;
            border: 2px solid transparent;
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .centered-div {
                padding: 15px;
            }
            
            .card-header, .card-body {
                padding: 20px;
            }
            
            .card {
                margin: 10px;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
        }

        /* Page transition */
        .page-enter {
            opacity: 0;
            transform: translateY(20px);
        }

        .page-enter-active {
            opacity: 1;
            transform: translateY(0);
            transition: var(--transition);
        }
    </style>

    @stack('styles')
</head>
<body class="container-fluid">
    <div class="centered-div">
        <div class="main-content">
            <div class="login-section">
                @yield('content')
            </div>
            
            
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        // Create floating particles
        function createParticles() {
            const particleCount = 15;
            
            for (let i = 0; i < particleCount; i++) {
                setTimeout(() => {
                    const particle = document.createElement('div');
                    particle.className = 'particle';
                    
                    const size = Math.random() * 4 + 2;
                    particle.style.width = size + 'px';
                    particle.style.height = size + 'px';
                    particle.style.left = Math.random() * 100 + '%';
                    particle.style.animationDelay = Math.random() * 15 + 's';
                    particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
                    
                    document.body.appendChild(particle);
                    
                    setTimeout(() => {
                        particle.remove();
                    }, 25000);
                }, i * 1000);
            }
        }

        // Page load animation
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('page-enter');
            setTimeout(() => {
                document.body.classList.add('page-enter-active');
            }, 100);
            
            createParticles();
            setInterval(createParticles, 15000);
        });

        // Enhanced form interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Add ripple effect to buttons
            document.querySelectorAll('.btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.style.position = 'absolute';
                    ripple.style.borderRadius = '50%';
                    ripple.style.background = 'rgba(255, 255, 255, 0.5)';
                    ripple.style.transform = 'scale(0)';
                    ripple.style.animation = 'ripple 0.6s linear';
                    ripple.style.pointerEvents = 'none';
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });

        // Add ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>

    @stack('scripts')
</body>
</html>