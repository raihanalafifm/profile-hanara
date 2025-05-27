<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Favicon - Tambahkan sebelum closing </head> -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icon/icon hanara.png') }}">
    
    <!-- Primary Meta Tags -->
    <title>{{ isset($seoData['title']) ? $seoData['title'] : '@yield("page_title", "PT Hanara Prima Solusindo - Solusi Digital Terdepan")' }}</title>
    <meta name="title" content="{{ isset($seoData['title']) ? $seoData['title'] : 'PT Hanara Prima Solusindo' }}">
    <meta name="description" content="{{ isset($seoData['description']) ? $seoData['description'] : '@yield("meta_description", "PT Hanara Prima Solusindo - Solusi Digital Terdepan untuk Bisnis Anda")' }}">
    <meta name="keywords" content="{{ isset($seoData['keywords']) ? $seoData['keywords'] : '@yield("meta_keywords", "IT Solution, Web Development, Zimbra, CCTV, Motorola, Cloud Services")' }}">
    <meta name="author" content="{{ isset($seoData['author']) ? $seoData['author'] : 'PT Hanara Prima Solusindo' }}">
    <meta name="robots" content="{{ isset($seoData['robots']) ? $seoData['robots'] : 'index, follow' }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ isset($seoData['canonical']) ? $seoData['canonical'] : url()->current() }}" />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="{{ isset($seoData['ogType']) ? $seoData['ogType'] : 'website' }}">
    <meta property="og:url" content="{{ isset($seoData['canonical']) ? $seoData['canonical'] : url()->current() }}">
    <meta property="og:title" content="{{ isset($seoData['ogTitle']) ? $seoData['ogTitle'] : (isset($seoData['title']) ? $seoData['title'] : '@yield("og_title", "PT Hanara Prima Solusindo")') }}">
    <meta property="og:description" content="{{ isset($seoData['ogDescription']) ? $seoData['ogDescription'] : (isset($seoData['description']) ? $seoData['description'] : '@yield("og_description", "Solusi Digital Terdepan untuk Bisnis Anda")') }}">
    <meta property="og:image" content="{{ isset($seoData['ogImage']) ? $seoData['ogImage'] : asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}">
    <meta property="og:site_name" content="PT Hanara Prima Solusindo">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter -->
    <meta name="twitter:card" content="{{ isset($seoData['twitterCard']) ? $seoData['twitterCard'] : 'summary_large_image' }}">
    <meta name="twitter:url" content="{{ isset($seoData['canonical']) ? $seoData['canonical'] : url()->current() }}">
    <meta name="twitter:title" content="{{ isset($seoData['ogTitle']) ? $seoData['ogTitle'] : (isset($seoData['title']) ? $seoData['title'] : '@yield("twitter_title", "PT Hanara Prima Solusindo")') }}">
    <meta name="twitter:description" content="{{ isset($seoData['ogDescription']) ? $seoData['ogDescription'] : (isset($seoData['description']) ? $seoData['description'] : '@yield("twitter_description", "Solusi Digital Terdepan untuk Bisnis Anda")') }}">
    <meta name="twitter:image" content="{{ isset($seoData['ogImage']) ? $seoData['ogImage'] : asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}">
    
    <!-- Additional SEO Tags -->
    <meta name="theme-color" content="#FF6B00">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    
    <!-- Schema.org Structured Data -->
    @if(isset($schemaOrg))
    <script type="application/ld+json">
    {!! json_encode($schemaOrg, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaService))
    <script type="application/ld+json">
    {!! json_encode($schemaService, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaProduct))
    <script type="application/ld+json">
    {!! json_encode($schemaProduct, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaFAQ))
    <script type="application/ld+json">
    {!! json_encode($schemaFAQ, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaSoftware))
    <script type="application/ld+json">
    {!! json_encode($schemaSoftware, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaLocalBusiness))
    <script type="application/ld+json">
    {!! json_encode($schemaLocalBusiness, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaBreadcrumb))
    <script type="application/ld+json">
    {!! json_encode($schemaBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaWebPage))
    <script type="application/ld+json">
    {!! json_encode($schemaWebPage, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaPricing))
    <script type="application/ld+json">
    {!! json_encode($schemaPricing, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaHCM))
    <script type="application/ld+json">
    {!! json_encode($schemaHCM, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaNextcloud))
    <script type="application/ld+json">
    {!! json_encode($schemaNextcloud, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaWebDev))
    <script type="application/ld+json">
    {!! json_encode($schemaWebDev, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    @if(isset($schemaProducts))
    <script type="application/ld+json">
    {!! json_encode($schemaProducts, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif
    
    <!-- Multiple schemas support -->
    @if(isset($schemas) && is_array($schemas))
        @foreach($schemas as $schema)
        <script type="application/ld+json">
        {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
        </script>
        @endforeach
    @endif
    
    <!-- Stack for additional schemas from views -->
    @stack('schema-org')

    @vite(['resources/js/app.js'])
    
    <!-- Preload critical assets -->
    <link rel="preload" href="{{ asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}" as="image">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="dns-prefetch" href="https://fonts.bunny.net">

    <!-- Defer non-critical CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" media="print" onload="this.media='all'">
    
    <!-- Favicon (tambahkan jika ada) -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icon/icon hanara.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icon/icon hanara.png') }}">
    
    @stack('styles')
</head>
<body>
    @include('components.navbar')
    <main>
        @yield('container')
    </main>
    <div class="scroll-down-container">
        <div class="scroll-down-button down">
            <div class="scroll-arrow"></div>
        </div>
    </div>
    @include('components.footer')

    <!-- Bootstrap JS - PINDAHKAN KE ATAS SEBELUM SCRIPT LAIN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core JavaScript Functions -->
    <script>
        // Namespace untuk menghindari konflik
        window.HanaraApp = window.HanaraApp || {};
        
        // Utility Functions
        HanaraApp.utils = {
            // Debounce function
            debounce: function(func, wait) {
                let timeout;
                return function executedFunction(...args) {
                    const later = () => {
                        clearTimeout(timeout);
                        func(...args);
                    };
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                };
            },
            
            // Check if touch device
            isTouchDevice: function() {
                return 'ontouchstart' in window || navigator.maxTouchPoints > 0;
            },
            
            // Safe querySelector
            $: function(selector) {
                return document.querySelector(selector);
            },
            
            // Safe querySelectorAll
            $$: function(selector) {
                return document.querySelectorAll(selector);
            }
        };

        // Navbar functionality
        HanaraApp.navbar = {
            init: function() {
                const navbarCollapse = HanaraApp.utils.$('#navbarNav');
                const navbarToggler = HanaraApp.utils.$('.navbar-toggler');
                
                if (!navbarCollapse || !navbarToggler) return;
                
                this.setupDesktopHover();
                this.setupMobileHandlers(navbarCollapse, navbarToggler);
                this.setupResizeHandler();
            },
            
            setupDesktopHover: function() {
                // Hanya setup hover untuk desktop non-touch
                if (window.innerWidth >= 992 && !HanaraApp.utils.isTouchDevice()) {
                    const dropdowns = HanaraApp.utils.$$('.navbar .dropdown');
                    
                    dropdowns.forEach(dropdown => {
                        let isHovered = false;
                        
                        dropdown.addEventListener('mouseenter', () => {
                            isHovered = true;
                            const toggle = dropdown.querySelector('.dropdown-toggle');
                            const menu = dropdown.querySelector('.dropdown-menu');
                            
                            if (toggle && menu) {
                                toggle.classList.add('show');
                                menu.classList.add('show');
                                toggle.setAttribute('aria-expanded', 'true');
                            }
                        });
                        
                        dropdown.addEventListener('mouseleave', () => {
                            isHovered = false;
                            const toggle = dropdown.querySelector('.dropdown-toggle');
                            const menu = dropdown.querySelector('.dropdown-menu');
                            
                            setTimeout(() => {
                                if (!isHovered && toggle && menu) {
                                    toggle.classList.remove('show');
                                    menu.classList.remove('show');
                                    toggle.setAttribute('aria-expanded', 'false');
                                }
                            }, 100);
                        });
                        
                        // Prevent default click pada desktop hover
                        const toggle = dropdown.querySelector('.dropdown-toggle');
                        if (toggle) {
                            toggle.addEventListener('click', (e) => {
                                if (!HanaraApp.utils.isTouchDevice()) {
                                    e.preventDefault();
                                }
                            });
                        }
                    });
                }
            },
            
            setupMobileHandlers: function(navbarCollapse, navbarToggler) {
                // Auto-close navbar ketika klik di luar
                document.addEventListener('click', (e) => {
                    if (window.innerWidth < 992) {
                        const isClickInsideNav = navbarCollapse.contains(e.target) || navbarToggler.contains(e.target);
                        
                        if (!isClickInsideNav && navbarCollapse.classList.contains('show')) {
                            navbarToggler.click();
                        }
                    }
                });
                
                // Auto-close setelah klik menu item
                navbarCollapse.addEventListener('click', (e) => {
                    if (window.innerWidth < 992) {
                        const target = e.target;
                        
                        if (target.classList.contains('dropdown-item') || 
                           (target.classList.contains('nav-link') && !target.classList.contains('dropdown-toggle'))) {
                            setTimeout(() => {
                                if (navbarCollapse.classList.contains('show')) {
                                    navbarToggler.click();
                                }
                            }, 150);
                        }
                    }
                });
            },
            
            setupResizeHandler: function() {
                window.addEventListener('resize', HanaraApp.utils.debounce(() => {
                    // Reset dropdown states
                    const toggles = HanaraApp.utils.$$('.navbar .dropdown-toggle');
                    const menus = HanaraApp.utils.$$('.navbar .dropdown-menu');
                    
                    toggles.forEach(toggle => {
                        toggle.classList.remove('show');
                        toggle.setAttribute('aria-expanded', 'false');
                    });
                    
                    menus.forEach(menu => {
                        menu.classList.remove('show');
                    });
                    
                    // Re-init untuk setup ulang berdasarkan ukuran layar baru
                    this.setupDesktopHover();
                }, 250));
            }
        };

        // Scroll Down Button
        HanaraApp.scrollButton = {
            init: function() {
                const scrollButton = HanaraApp.utils.$('.scroll-down-button');
                const scrollContainer = HanaraApp.utils.$('.scroll-down-container');
                
                if (!scrollButton || !scrollContainer) return;
                
                this.setupScrollHandler(scrollButton, scrollContainer);
                this.setupClickHandler(scrollButton);
            },
            
            setupScrollHandler: function(scrollButton, scrollContainer) {
                const checkScroll = () => {
                    const scrollPosition = window.scrollY;
                    const windowHeight = window.innerHeight;
                    const documentHeight = document.documentElement.scrollHeight;
                    
                    // Show/hide button
                    if (scrollPosition > 300) {
                        scrollContainer.classList.add('visible');
                    } else {
                        scrollContainer.classList.remove('visible');
                    }
                    
                    // Change direction
                    if (scrollPosition + windowHeight >= documentHeight - 100) {
                        scrollButton.classList.remove('down');
                        scrollButton.classList.add('up');
                    } else {
                        scrollButton.classList.remove('up');
                        scrollButton.classList.add('down');
                    }
                };
                
                window.addEventListener('scroll', HanaraApp.utils.debounce(checkScroll, 10));
                checkScroll(); // Initial check
            },
            
            setupClickHandler: function(scrollButton) {
                scrollButton.addEventListener('click', () => {
                    const scrollPosition = window.scrollY;
                    const windowHeight = window.innerHeight;
                    const documentHeight = document.documentElement.scrollHeight;
                    
                    if (scrollPosition + windowHeight >= documentHeight - 100) {
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    } else {
                        window.scrollTo({ top: scrollPosition + 500, behavior: 'smooth' });
                    }
                });
            }
        };

        // Testimonial Slider
        HanaraApp.testimonialSlider = {
            init: function() {
                const items = HanaraApp.utils.$$('.testimonial-clean-item');
                const dots = HanaraApp.utils.$$('.clean-dot');
                
                if (items.length === 0) return;
                
                this.currentIndex = 0;
                this.items = items;
                this.dots = dots;
                this.interval = null;
                
                this.setupDotHandlers();
                this.startAutoplay();
            },
            
            showTestimonial: function(index) {
                this.items.forEach(item => item.classList.remove('active'));
                this.dots.forEach(dot => dot.classList.remove('active'));
                
                if (this.items[index]) this.items[index].classList.add('active');
                if (this.dots[index]) this.dots[index].classList.add('active');
                
                this.currentIndex = index;
            },
            
            setupDotHandlers: function() {
                this.dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        this.showTestimonial(index);
                        this.resetInterval();
                    });
                });
            },
            
            startAutoplay: function() {
                this.interval = setInterval(() => {
                    this.currentIndex = (this.currentIndex + 1) % this.items.length;
                    this.showTestimonial(this.currentIndex);
                }, 5000);
            },
            
            resetInterval: function() {
                clearInterval(this.interval);
                this.startAutoplay();
            }
        };

        // Blog Slider
        HanaraApp.blogSlider = {
            init: function() {
                const container = HanaraApp.utils.$('.blog-slider-container');
                const slides = HanaraApp.utils.$$('.blog-card');
                const dots = HanaraApp.utils.$$('.blog-slider-dot');
                
                if (!container || slides.length === 0) return;
                
                this.container = container;
                this.slides = slides;
                this.dots = dots;
                this.currentIndex = 0;
                this.slideWidth = 0;
                this.totalSlides = slides.length;
                this.slidesPerView = 3;
                this.autoplayInterval = null;
                this.isTransitioning = false;
                
                // Touch/drag properties
                this.isDragging = false;
                this.startPos = 0;
                this.currentTranslate = 0;
                this.prevTranslate = 0;
                
                this.calculateSlidesPerView();
                this.setupEventListeners();
                this.startAutoplay();
            },
            
            calculateSlidesPerView: function() {
                if (window.innerWidth < 768) {
                    this.slidesPerView = 1;
                } else if (window.innerWidth < 992) {
                    this.slidesPerView = 2;
                } else {
                    this.slidesPerView = 3;
                }
                this.updateSlideWidth();
            },
            
            updateSlideWidth: function() {
                const containerWidth = this.container.parentElement.clientWidth;
                const gap = 20;
                this.slideWidth = (containerWidth - (gap * (this.slidesPerView - 1))) / this.slidesPerView;
                
                this.slides.forEach(slide => {
                    slide.style.flex = `0 0 ${this.slideWidth}px`;
                    slide.style.minWidth = `${this.slideWidth}px`;
                    slide.style.maxWidth = `${this.slideWidth}px`;
                });
                
                this.setSliderPosition(false);
            },
            
            setSliderPosition: function(animate = true) {
                if (this.isTransitioning && animate) return;
                
                const gap = 20;
                const offset = -this.currentIndex * (this.slideWidth + gap);
                
                if (animate) {
                    this.isTransitioning = true;
                    this.container.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                } else {
                    this.container.style.transition = 'none';
                }
                
                this.container.style.transform = `translateX(${offset}px)`;
                this.prevTranslate = offset;
                this.currentTranslate = offset;
                
                if (animate) {
                    setTimeout(() => {
                        this.isTransitioning = false;
                        this.container.style.transition = '';
                    }, 600);
                }
                
                this.updateActiveDot();
            },
            
            goToSlide: function(index, animate = true) {
                if (this.isTransitioning) return;
                
                const maxIndex = Math.max(0, this.totalSlides - this.slidesPerView);
                this.currentIndex = Math.min(Math.max(0, index), maxIndex);
                this.setSliderPosition(animate);
            },
            
            updateActiveDot: function() {
                this.dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === this.currentIndex);
                });
            },
            
            nextSlide: function() {
                if (this.currentIndex >= this.totalSlides - this.slidesPerView) {
                    this.goToSlide(0);
                } else {
                    this.goToSlide(this.currentIndex + 1);
                }
            },
            
            setupEventListeners: function() {
                // Dot navigation
                this.dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        this.goToSlide(index);
                        this.resetAutoplay();
                    });
                });
                
                // Touch/Mouse events
                this.container.addEventListener('mousedown', this.touchStart.bind(this));
                window.addEventListener('mousemove', this.touchMove.bind(this));
                window.addEventListener('mouseup', this.touchEnd.bind(this));
                
                this.container.addEventListener('touchstart', this.touchStart.bind(this), { passive: true });
                this.container.addEventListener('touchmove', this.touchMove.bind(this), { passive: true });
                this.container.addEventListener('touchend', this.touchEnd.bind(this));
                
                // Prevent drag
                this.container.addEventListener('dragstart', e => e.preventDefault());
                
                // Hover pause
                this.container.addEventListener('mouseenter', () => {
                    clearInterval(this.autoplayInterval);
                });
                
                this.container.addEventListener('mouseleave', () => {
                    if (!this.isDragging) this.startAutoplay();
                });
                
                // Resize handler
                window.addEventListener('resize', HanaraApp.utils.debounce(() => {
                    this.calculateSlidesPerView();
                    this.goToSlide(this.currentIndex, false);
                }, 250));
            },
            
            getPositionX: function(event) {
                return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
            },
            
            touchStart: function(e) {
                if (this.isTransitioning) return;
                if (e.type === 'mousedown' && e.button !== 0) return;
                
                this.isDragging = true;
                this.startPos = this.getPositionX(e);
                this.container.style.cursor = 'grabbing';
                this.container.style.transition = 'none';
                clearInterval(this.autoplayInterval);
            },
            
            touchMove: function(e) {
                if (!this.isDragging) return;
                
                const currentPosition = this.getPositionX(e);
                this.currentTranslate = this.prevTranslate + currentPosition - this.startPos;
                
                // Add resistance at edges
                const maxTranslate = 0;
                const minTranslate = -(this.totalSlides - this.slidesPerView) * (this.slideWidth + 20);
                
                if (this.currentTranslate > maxTranslate) {
                    this.currentTranslate = maxTranslate + (this.currentTranslate - maxTranslate) * 0.3;
                } else if (this.currentTranslate < minTranslate) {
                    this.currentTranslate = minTranslate + (this.currentTranslate - minTranslate) * 0.3;
                }
                
                this.container.style.transform = `translateX(${this.currentTranslate}px)`;
            },
            
            touchEnd: function(e) {
                if (!this.isDragging) return;
                
                this.isDragging = false;
                const movedBy = this.currentTranslate - this.prevTranslate;
                
                if (Math.abs(movedBy) > this.slideWidth / 3) {
                    if (movedBy < 0 && this.currentIndex < this.totalSlides - this.slidesPerView) {
                        this.goToSlide(this.currentIndex + 1);
                    } else if (movedBy > 0 && this.currentIndex > 0) {
                        this.goToSlide(this.currentIndex - 1);
                    } else {
                        this.goToSlide(this.currentIndex);
                    }
                } else {
                    this.goToSlide(this.currentIndex);
                }
                
                this.container.style.cursor = '';
                this.startAutoplay();
            },
            
            startAutoplay: function() {
                clearInterval(this.autoplayInterval);
                this.autoplayInterval = setInterval(() => {
                    this.nextSlide();
                }, 4000);
            },
            
            resetAutoplay: function() {
                clearInterval(this.autoplayInterval);
                this.startAutoplay();
            }
        };

        // FAQ functionality
        HanaraApp.faq = {
            init: function() {
                const faqHeaders = HanaraApp.utils.$$('.hnr-faq-header, .hnr-nextcloud-faq-header');
                
                faqHeaders.forEach(header => {
                    header.addEventListener('click', () => {
                        const faqItem = header.parentElement;
                        const isActive = faqItem.classList.contains('active');
                        
                        // Optional: Close all other FAQs
                        // document.querySelectorAll('.hnr-faq-item, .hnr-nextcloud-faq-item').forEach(item => {
                        //     if (item !== faqItem) item.classList.remove('active');
                        // });
                        
                        faqItem.classList.toggle('active', !isActive);
                    });
                });
            }
        };

        // Cloud package toggle
        HanaraApp.cloudPackage = {
            init: function() {
                const toggleButtons = HanaraApp.utils.$$('.hnr-cloud-toggle-btn');
                
                toggleButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const packageCard = button.closest('.hnr-cloud-package-card');
                        const isExpanded = packageCard.classList.toggle('expanded');
                        
                        button.innerHTML = isExpanded 
                            ? 'Tutup fitur <i class="bi bi-chevron-up"></i>'
                            : 'Lihat semua fitur <i class="bi bi-chevron-down"></i>';
                    });
                });
            }
        };

        // Career functionality
        HanaraApp.career = {
            init: function() {
                // Job toggle
                const jobToggles = HanaraApp.utils.$$('.hnr-job-toggle');
                jobToggles.forEach(toggle => {
                    toggle.addEventListener('click', (e) => {
                        e.preventDefault();
                        const targetId = toggle.getAttribute('data-target');
                        const targetDetails = document.getElementById(targetId);
                        
                        if (targetDetails) {
                            toggle.classList.toggle('collapsed');
                            targetDetails.classList.toggle('collapsed');
                        }
                    });
                });
                
                // File input handling
                const fileInputs = HanaraApp.utils.$$('.hnr-file-input');
                fileInputs.forEach(input => {
                    input.addEventListener('change', function() {
                        const textElement = this.nextElementSibling?.querySelector('.hnr-file-input-text');
                        if (textElement) {
                            textElement.textContent = this.files.length > 0 
                                ? this.files[0].name 
                                : 'No file chosen';
                        }
                    });
                });
                
                // Form submission
                const form = HanaraApp.utils.$('#jobApplicationForm');
                if (form) {
                    form.addEventListener('submit', (e) => {
                        e.preventDefault();
                        alert('Your application has been submitted successfully!');
                        // Add your AJAX form submission code here
                    });
                }
            }
        };

        // Initialize all components when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            try {
                // Initialize core components
                HanaraApp.navbar.init();
                HanaraApp.scrollButton.init();
                HanaraApp.testimonialSlider.init();
                HanaraApp.blogSlider.init();
                HanaraApp.faq.init();
                HanaraApp.cloudPackage.init();
                HanaraApp.career.init();
                
                console.log('Hanara App initialized successfully');
            } catch (error) {
                console.error('Error initializing Hanara App:', error);
            }
        });

        // Google Maps initialization (if needed)
        window.initMap = function() {
            try {
                const officeLocation = { lat: -3.8123, lng: 102.2995 };
                const mapElement = HanaraApp.utils.$('#contactMap');
                
                if (!mapElement) return;
                
                const map = new google.maps.Map(mapElement, {
                    zoom: 15,
                    center: officeLocation,
                    mapTypeControl: false,
                    streetViewControl: false,
                    fullscreenControl: true,
                    zoomControl: true,
                });
                
                const marker = new google.maps.Marker({
                    position: officeLocation,
                    map: map,
                    title: 'PT Hanara Prima Solusindo'
                });
                
                const infoWindow = new google.maps.InfoWindow({
                    content: `
                        <div class="map-info-window">
                            <h5>PT Hanara Prima Solusindo</h5>
                            <p>Jl. Batang Hari, RT.011/RW.003, Nusa Indah, Kec. Ratu Agung, Kota Bengkulu, Bengkulu 38223</p>
                            <a href="tel:+627367050202">(0736) 7050-202</a>
                        </div>
                    `
                });
                
                marker.addListener('click', function() {
                    infoWindow.open(map, marker);
                });
                
                infoWindow.open(map, marker);
            } catch (error) {
                console.error('Error initializing Google Maps:', error);
            }
        };

        // Error handling for external scripts
        window.addEventListener('error', function(e) {
            if (e.filename && e.filename.includes('bootstrap')) {
                console.warn('Bootstrap script error:', e.message);
            }
        });

        // Fallback for older browsers
        if (!window.requestAnimationFrame) {
            window.requestAnimationFrame = function(callback) {
                return setTimeout(callback, 1000 / 60);
            };
        }

        if (!window.cancelAnimationFrame) {
            window.cancelAnimationFrame = function(id) {
                clearTimeout(id);
            };
        }
    </script>

    <!-- Page specific scripts -->
    @stack('scripts')
</body>
</html>