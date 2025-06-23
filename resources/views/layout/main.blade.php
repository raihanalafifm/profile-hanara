<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon - Tambahkan sebelum closing </head> -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icon/icon hanara.png') }}">

    <!-- Primary Meta Tags -->
    <title>
        {{ isset($seoData['title']) ? $seoData['title'] : '@yield("page_title", "PT Hanara Prima Solusindo - Solusi Digital Terdepan")' }}
    </title>
    <meta name="title" content="{{ isset($seoData['title']) ? $seoData['title'] : 'PT Hanara Prima Solusindo' }}">
    <meta name="description"
        content="{{ isset($seoData['description']) ? $seoData['description'] : '@yield("meta_description", "PT Hanara Prima Solusindo - Solusi Digital Terdepan untuk Bisnis Anda")' }}">
    <meta name="keywords"
        content="{{ isset($seoData['keywords']) ? $seoData['keywords'] : '@yield("meta_keywords", "IT Solution, Web Development, Zimbra, CCTV, Motorola, Cloud Services")' }}">
    <meta name="author" content="{{ isset($seoData['author']) ? $seoData['author'] : 'PT Hanara Prima Solusindo' }}">
    <meta name="robots" content="{{ isset($seoData['robots']) ? $seoData['robots'] : 'index, follow' }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ isset($seoData['canonical']) ? $seoData['canonical'] : url()->current() }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="{{ isset($seoData['ogType']) ? $seoData['ogType'] : 'website' }}">
    <meta property="og:url" content="{{ isset($seoData['canonical']) ? $seoData['canonical'] : url()->current() }}">
    <meta property="og:title"
        content="{{ isset($seoData['ogTitle']) ? $seoData['ogTitle'] : (isset($seoData['title']) ? $seoData['title'] : '@yield("og_title", "PT Hanara Prima Solusindo")') }}">
    <meta property="og:description"
        content="{{ isset($seoData['ogDescription']) ? $seoData['ogDescription'] : (isset($seoData['description']) ? $seoData['description'] : '@yield("og_description", "Solusi Digital Terdepan untuk Bisnis Anda")') }}">
    <meta property="og:image"
        content="{{ isset($seoData['ogImage']) ? $seoData['ogImage'] : asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}">
    <meta property="og:site_name" content="PT Hanara Prima Solusindo">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter -->
    <meta name="twitter:card"
        content="{{ isset($seoData['twitterCard']) ? $seoData['twitterCard'] : 'summary_large_image' }}">
    <meta name="twitter:url" content="{{ isset($seoData['canonical']) ? $seoData['canonical'] : url()->current() }}">
    <meta name="twitter:title"
        content="{{ isset($seoData['ogTitle']) ? $seoData['ogTitle'] : (isset($seoData['title']) ? $seoData['title'] : '@yield("twitter_title", "PT Hanara Prima Solusindo")') }}">
    <meta name="twitter:description"
        content="{{ isset($seoData['ogDescription']) ? $seoData['ogDescription'] : (isset($seoData['description']) ? $seoData['description'] : '@yield("twitter_description", "Solusi Digital Terdepan untuk Bisnis Anda")') }}">
    <meta name="twitter:image"
        content="{{ isset($seoData['ogImage']) ? $seoData['ogImage'] : asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}">

    <!-- Additional SEO Tags -->
    <meta name="theme-color" content="#FF6B00">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Schema.org Structured Data -->
    @if (isset($schemaOrg))
        <script type="application/ld+json">
    {!! json_encode($schemaOrg, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaService))
        <script type="application/ld+json">
    {!! json_encode($schemaService, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaProduct))
        <script type="application/ld+json">
    {!! json_encode($schemaProduct, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaSoftware))
        <script type="application/ld+json">
    {!! json_encode($schemaSoftware, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaLocalBusiness))
        <script type="application/ld+json">
    {!! json_encode($schemaLocalBusiness, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaBreadcrumb))
        <script type="application/ld+json">
    {!! json_encode($schemaBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaWebPage))
        <script type="application/ld+json">
    {!! json_encode($schemaWebPage, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaPricing))
        <script type="application/ld+json">
    {!! json_encode($schemaPricing, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaHCM))
        <script type="application/ld+json">
    {!! json_encode($schemaHCM, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaNextcloud))
        <script type="application/ld+json">
    {!! json_encode($schemaNextcloud, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaWebDev))
        <script type="application/ld+json">
    {!! json_encode($schemaWebDev, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    @if (isset($schemaProducts))
        <script type="application/ld+json">
    {!! json_encode($schemaProducts, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @endif

    <!-- Multiple schemas support -->
    @if (isset($schemas) && is_array($schemas))
        @foreach ($schemas as $schema)
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        media="print" onload="this.media='all'">

    <!-- Favicon (tambahkan jika ada) -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icon/icon hanara.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icon/icon hanara.png') }}">

    {{-- Tambahkan hreflang untuk multi-bahasa --}}
    <link rel="alternate" hreflang="id" href="{{ url()->current() }}" />
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}" />

    {{-- Tambahkan preconnect untuk performa --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://www.google-analytics.com">

    {{-- Perbaiki meta viewport --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    {{-- Tambahkan verification tags jika ada --}}
    <meta name="google-site-verification" content="your-verification-code" />
    @stack('styles')

</head>

<body>

    <header role="banner">
        @include('components.navbar')
    </header>

    <main id="main-content" role="main">
        @yield('container')
    </main>

    <footer role="contentinfo">
        @include('components.footer')
    </footer>

    <!-- Fixed elements -->
    <div class="scroll-down-container" aria-hidden="true">
        <button class="scroll-down-button down" aria-label="Scroll page">
            <div class="scroll-arrow"></div>
        </button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tambahkan JS untuk Scroll Down Button -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollButton = document.querySelector('.scroll-down-button');
            const scrollContainer = document.querySelector('.scroll-down-container');

            // Fungsi untuk cek posisi scroll
            function checkScroll() {
                const scrollPosition = window.scrollY;
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight;

                // Tampilkan button jika sudah scroll ke bawah sedikit
                if (scrollPosition > 300) {
                    scrollContainer.classList.add('visible');
                } else {
                    scrollContainer.classList.remove('visible');
                }

                // Ganti arah arrow berdasarkan posisi scroll
                if (scrollPosition + windowHeight >= documentHeight - 100) {
                    scrollButton.classList.remove('down');
                    scrollButton.classList.add('up');
                } else {
                    scrollButton.classList.remove('up');
                    scrollButton.classList.add('down');
                }
            }

            // Fungsi untuk handle click button
            scrollButton.addEventListener('click', function() {
                const scrollPosition = window.scrollY;
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight;

                if (scrollPosition + windowHeight >= documentHeight - 100) {
                    // Scroll ke atas jika di bawah halaman
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                } else {
                    // Scroll ke bawah jika tidak di bawah halaman
                    window.scrollTo({
                        top: scrollPosition + 500,
                        behavior: 'smooth'
                    });
                }
            });

            // Jalankan checkScroll saat scroll dan saat load
            window.addEventListener('scroll', checkScroll);
            checkScroll();
        });
        // Clean Testimonial Slider JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            // Testimonial Slider
            const testimonialItems = document.querySelectorAll('.testimonial-clean-item');
            const testimonialDots = document.querySelectorAll('.clean-dot');
            let currentTestimonial = 0;
            let testimonialInterval;

            function showTestimonial(index) {
                // Hide all testimonials
                testimonialItems.forEach(item => {
                    item.classList.remove('active');
                });

                // Remove active from all dots
                testimonialDots.forEach(dot => {
                    dot.classList.remove('active');
                });

                // Show selected testimonial
                if (testimonialItems[index]) {
                    testimonialItems[index].classList.add('active');
                }

                // Activate corresponding dot
                if (testimonialDots[index]) {
                    testimonialDots[index].classList.add('active');
                }

                currentTestimonial = index;
            }

            // Click handlers for dots
            testimonialDots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    showTestimonial(index);
                    resetTestimonialInterval();
                });
            });

            // Auto-play testimonials
            function startTestimonialInterval() {
                testimonialInterval = setInterval(() => {
                    currentTestimonial = (currentTestimonial + 1) % testimonialItems.length;
                    showTestimonial(currentTestimonial);
                }, 5000); // Change every 5 seconds
            }

            function resetTestimonialInterval() {
                clearInterval(testimonialInterval);
                startTestimonialInterval();
            }

            // Start auto-play if testimonials exist
            if (testimonialItems.length > 0) {
                startTestimonialInterval();
            }
        });
        // Smooth Blog Slider JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            const sliderContainer = document.querySelector('.blog-slider-container');
            const slides = document.querySelectorAll('.blog-card');
            const dots = document.querySelectorAll('.blog-slider-dot');

            if (!sliderContainer || slides.length === 0) return;

            let currentIndex = 0;
            let slideWidth = 0;
            let totalSlides = slides.length;
            let autoplayInterval;
            let slidesPerView = 3;
            let isTransitioning = false;

            // Mouse/Touch tracking
            let isDragging = false;
            let startPos = 0;
            let currentTranslate = 0;
            let prevTranslate = 0;
            let animationID = null;
            let startTime = 0;

            // Calculate slides per view based on screen
            function calculateSlidesPerView() {
                if (window.innerWidth < 768) {
                    slidesPerView = 1;
                } else if (window.innerWidth < 992) {
                    slidesPerView = 2;
                } else {
                    slidesPerView = 3;
                }

                updateSlideWidth();
            }

            // Update slide width
            function updateSlideWidth() {
                if (!sliderContainer) return;

                const containerWidth = sliderContainer.parentElement.clientWidth;
                const gap = 20;
                slideWidth = (containerWidth - (gap * (slidesPerView - 1))) / slidesPerView;

                // Set slide dimensions
                slides.forEach(slide => {
                    slide.style.flex = `0 0 ${slideWidth}px`;
                    slide.style.minWidth = `${slideWidth}px`;
                    slide.style.maxWidth = `${slideWidth}px`;
                });

                // Reposition without animation
                setSliderPosition(false);
            }

            // Set slider position
            function setSliderPosition(animate = true) {
                if (isTransitioning && animate) return;

                const gap = 20;
                const offset = -currentIndex * (slideWidth + gap);

                if (animate) {
                    isTransitioning = true;
                    sliderContainer.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                } else {
                    sliderContainer.style.transition = 'none';
                }

                sliderContainer.style.transform = `translateX(${offset}px)`;
                prevTranslate = offset;
                currentTranslate = offset;

                if (animate) {
                    setTimeout(() => {
                        isTransitioning = false;
                        sliderContainer.style.transition = '';
                    }, 600);
                }

                updateActiveDot();
            }

            // Go to specific slide
            function goToSlide(index, animate = true) {
                if (isTransitioning) return;

                // Calculate max index (ensure last slides are visible)
                const maxIndex = Math.max(0, totalSlides - slidesPerView);
                currentIndex = Math.min(Math.max(0, index), maxIndex);

                setSliderPosition(animate);
            }

            // Update active dot
            function updateActiveDot() {
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }

            // Next slide
            function nextSlide() {
                if (currentIndex >= totalSlides - slidesPerView) {
                    goToSlide(0);
                } else {
                    goToSlide(currentIndex + 1);
                }
            }

            // Previous slide
            function prevSlide() {
                if (currentIndex <= 0) {
                    goToSlide(totalSlides - slidesPerView);
                } else {
                    goToSlide(currentIndex - 1);
                }
            }

            // Dot navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goToSlide(index);
                    resetAutoplay();
                });
            });

            // Touch/Mouse handling
            function getPositionX(event) {
                return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
            }

            function touchStart(e) {
                if (isTransitioning) return;
                if (e.type === 'mousedown' && e.button !== 0) return;

                isDragging = true;
                startPos = getPositionX(e);
                startTime = Date.now();
                animationID = requestAnimationFrame(animation);

                sliderContainer.style.cursor = 'grabbing';
                sliderContainer.style.transition = 'none';

                clearInterval(autoplayInterval);
            }

            function touchMove(e) {
                if (!isDragging) return;

                const currentPosition = getPositionX(e);
                currentTranslate = prevTranslate + currentPosition - startPos;

                // Add resistance at edges
                const maxTranslate = 0;
                const minTranslate = -(totalSlides - slidesPerView) * (slideWidth + 20);

                if (currentTranslate > maxTranslate) {
                    currentTranslate = maxTranslate + (currentTranslate - maxTranslate) * 0.3;
                } else if (currentTranslate < minTranslate) {
                    currentTranslate = minTranslate + (currentTranslate - minTranslate) * 0.3;
                }
            }

            function touchEnd(e) {
                if (!isDragging) return;

                isDragging = false;
                cancelAnimationFrame(animationID);

                const movedBy = currentTranslate - prevTranslate;
                const elapsedTime = Date.now() - startTime;
                const velocity = Math.abs(movedBy) / elapsedTime;

                // Determine if we should change slides
                if (velocity > 0.5 || Math.abs(movedBy) > slideWidth / 3) {
                    if (movedBy < 0 && currentIndex < totalSlides - slidesPerView) {
                        goToSlide(currentIndex + 1);
                    } else if (movedBy > 0 && currentIndex > 0) {
                        goToSlide(currentIndex - 1);
                    } else {
                        goToSlide(currentIndex);
                    }
                } else {
                    goToSlide(currentIndex);
                }

                sliderContainer.style.cursor = '';
                startAutoplay();
            }

            function animation() {
                if (isDragging) {
                    sliderContainer.style.transform = `translateX(${currentTranslate}px)`;
                    requestAnimationFrame(animation);
                }
            }

            // Event listeners
            if (sliderContainer) {
                // Mouse events
                sliderContainer.addEventListener('mousedown', touchStart);
                window.addEventListener('mousemove', touchMove);
                window.addEventListener('mouseup', touchEnd);
                window.addEventListener('mouseleave', () => {
                    if (isDragging) touchEnd();
                });

                // Touch events
                sliderContainer.addEventListener('touchstart', touchStart, {
                    passive: true
                });
                sliderContainer.addEventListener('touchmove', touchMove, {
                    passive: true
                });
                sliderContainer.addEventListener('touchend', touchEnd);

                // Prevent drag
                sliderContainer.addEventListener('dragstart', e => e.preventDefault());

                // Prevent text selection while dragging
                sliderContainer.addEventListener('selectstart', e => {
                    if (isDragging) e.preventDefault();
                });
            }

            // Autoplay functions
            function startAutoplay() {
                clearInterval(autoplayInterval);
                autoplayInterval = setInterval(nextSlide, 4000); // 4 seconds
            }

            function resetAutoplay() {
                clearInterval(autoplayInterval);
                startAutoplay();
            }

            // Pause on hover
            if (sliderContainer) {
                sliderContainer.addEventListener('mouseenter', () => {
                    clearInterval(autoplayInterval);
                });

                sliderContainer.addEventListener('mouseleave', () => {
                    if (!isDragging) startAutoplay();
                });
            }

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    prevSlide();
                    resetAutoplay();
                } else if (e.key === 'ArrowRight') {
                    nextSlide();
                    resetAutoplay();
                }
            });

            // Handle window resize with debounce
            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    calculateSlidesPerView();
                    goToSlide(currentIndex, false);
                }, 250);
            });

            // Initialize
            calculateSlidesPerView();
            startAutoplay();

            // Ensure links in edge cards are clickable
            const links = sliderContainer.querySelectorAll('.blog-card-link');
            links.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.stopPropagation();
                });

                link.addEventListener('mousedown', (e) => {
                    e.stopPropagation();
                });
            });
        });
        // Initialize the map when document is ready
        document.addEventListener('DOMContentLoaded', function() {
            initMap();
        });

        function initMap() {
            // Coordinates for Jl. Batang Hari, Bengkulu
            const officeLocation = {
                lat: -3.8123,
                lng: 102.2995
            };

            // Create map centered at office location
            const map = new google.maps.Map(document.getElementById('contactMap'), {
                zoom: 15,
                center: officeLocation,
                mapTypeControl: false,
                streetViewControl: false,
                fullscreenControl: true,
                zoomControl: true,
            });


            // Add info window with company details
            const infoWindow = new google.maps.InfoWindow({
                content: `
              <div class="map-info-window">
                <h5>PT Hanara Prima Solusindo</h5>
                <p>Jl. Sutoyo No.8, Tanah Patah, Kec. Ratu Agung, Kota Bengkulu, Bengkulu 38224</p>
                <a href="tel:+627367050202">(0736) 7050-202</a>
              </div>
            `
            });

            // Open info window when marker is clicked
            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });

            // Initially open the info window
            infoWindow.open(map, marker);
        }

        //kareeer 
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle job details when the header is clicked
            const jobToggles = document.querySelectorAll('.hnr-job-toggle');

            jobToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Get the target job details element
                    const targetId = this.getAttribute('data-target');
                    const targetDetails = document.getElementById(targetId);

                    // Toggle the collapsed class
                    this.classList.toggle('collapsed');
                    targetDetails.classList.toggle('collapsed');
                });
            });
        });
        //job detail
        document.addEventListener('DOMContentLoaded', function() {
            // Handle file input display text change
            const fileInputs = document.querySelectorAll('.hnr-file-input');

            fileInputs.forEach(input => {
                input.addEventListener('change', function() {
                    const textElement = this.nextElementSibling.querySelector(
                        '.hnr-file-input-text');

                    if (this.files.length > 0) {
                        textElement.textContent = this.files[0].name;
                    } else {
                        textElement.textContent = 'No file chosen';
                    }
                });
            });

            // Form submission handling
            const form = document.getElementById('jobApplicationForm');

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // You would add your AJAX form submission code here
                alert('Your application has been submitted successfully!');
                // form.reset(); // Uncomment to reset form after submission
            });
        });
        // JavaScript untuk Fungsi FAQ - KODE JS DIPERBAIKI
        document.addEventListener('DOMContentLoaded', function() {
            // Dapatkan semua header FAQ
            const faqHeaders = document.querySelectorAll('.hnr-faq-header');

            // Tambahkan event listener untuk tiap header FAQ
            faqHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    // Dapatkan parent item
                    const faqItem = this.parentElement;

                    // Toggle class active pada item yang diklik
                    const isActive = faqItem.classList.contains('active');


                    // Toggle active class
                    if (isActive) {
                        faqItem.classList.remove('active');
                    } else {
                        faqItem.classList.add('active');
                    }
                });
            });
        });
        // Fungsi untuk toggle semua fitur
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButtons = document.querySelectorAll('.hnr-cloud-toggle-btn');

            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const packageCard = this.closest('.hnr-cloud-package-card');

                    // Toggle expanded class
                    packageCard.classList.toggle('expanded');

                    // Change button text and icon based on state
                    if (packageCard.classList.contains('expanded')) {
                        this.innerHTML = 'Tutup fitur <i class="bi bi-chevron-up"></i>';
                    } else {
                        this.innerHTML = 'Lihat semua fitur <i class="bi bi-chevron-down"></i>';
                    }
                });
            });
        });
        // JavaScript for FAQ Section
        document.addEventListener('DOMContentLoaded', function() {
            // Get all FAQ headers
            const faqHeaders = document.querySelectorAll('.hnr-nextcloud-faq-header');

            // Add click event listener to each header
            faqHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    // Get parent item
                    const faqItem = this.parentElement;

                    // Toggle active class
                    const isActive = faqItem.classList.contains('active');

                    // Optional: Close all FAQs first
                    document.querySelectorAll('.hnr-nextcloud-faq-item').forEach(item => {
                        item.classList.remove('active');
                    });

                    // Toggle active class
                    if (!isActive) {
                        faqItem.classList.add('active');
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Animasi reveal on scroll
            const revealSections = document.querySelectorAll('.reveal-section');

            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');

                        // Optional: Unobserve setelah animasi terjadi sekali
                        // revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            revealSections.forEach(section => {
                revealObserver.observe(section);
            });

            // Animasi untuk elemen dalam section (opsional)
            const animateElements = (section) => {
                const elements = section.querySelectorAll(
                    '.solution-card, .feature-item, .testimonial-clean-item');

                elements.forEach((el, index) => {
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(20px)';
                    el.style.transition = `all 0.6s ease ${index * 0.1}s`;

                    setTimeout(() => {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    }, 100);
                });
            };

            // Jalankan animasi elemen saat section masuk viewport
            revealSections.forEach(section => {
                const sectionObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateElements(entry.target);
                            sectionObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1
                });

                sectionObserver.observe(section);
            });
        });
    </script>
    @stack('scripts')
    <script>
        // Dark Mode Toggle JavaScript
        (function() {
            // Check for saved theme preference or default to 'light' mode
            const currentTheme = localStorage.getItem('theme') || 'light';

            // Apply the theme on initial load
            document.documentElement.setAttribute('data-theme', currentTheme);

            // Wait for DOM to be ready
            document.addEventListener('DOMContentLoaded', function() {
                const themeToggle = document.getElementById('themeToggle');

                if (themeToggle) {
                    // Handle theme toggle
                    themeToggle.addEventListener('click', function() {
                        const currentTheme = document.documentElement.getAttribute('data-theme');
                        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

                        // Update theme
                        document.documentElement.setAttribute('data-theme', newTheme);

                        // Save preference
                        localStorage.setItem('theme', newTheme);

                        // Dispatch custom event for other components
                        window.dispatchEvent(new CustomEvent('themeChanged', {
                            detail: {
                                theme: newTheme
                            }
                        }));
                    });
                }
            });
        })();

        // Tambahkan ini di main.blade.php atau di file JavaScript terpisah
        document.addEventListener('DOMContentLoaded', function() {
            // Logo transition handler
            const navbarBrand = document.querySelector('.navbar-brand');
            const logoImg = navbarBrand.querySelector('img');

            // Store original logo info
            const originalLogo = {
                src: '{{ asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}',
                alt: 'Hanara Logo',
                class: 'logo'
            };

            // Product logos mapping
            const productLogos = {
                'mit': {
                    src: '{{ asset('assets/images/icon/logo-mit.png') }}',
                    alt: 'MIT Logo',
                    class: 'logo logo-mit'
                },
                'sikerja': {
                    src: '{{ asset('assets/images/icon/logo-sikerja.png') }}',
                    alt: 'SiKerja Logo',
                    class: 'logo logo-sikerja'
                }
            };

            // Handle logo change on navigation
            document.querySelectorAll('.nav-link, .dropdown-item').forEach(link => {
                link.addEventListener('mouseenter', function(e) {
                    const href = this.getAttribute('href');
                    if (!href) return;

                    // Check if hovering over MIT or SiKerja links
                    if (href.includes('/mit') || this.textContent.trim() === 'MIT') {
                        preloadAndShowLogo(productLogos.mit);
                    } else if (href.includes('/sikerja') || this.textContent.trim() === 'SiKerja') {
                        preloadAndShowLogo(productLogos.sikerja);
                    }
                });

                link.addEventListener('mouseleave', function(e) {
                    // Only revert if not on the actual page
                    const currentRoute = '{{ Route::currentRouteName() }}';
                    if (currentRoute !== 'mit' && currentRoute !== 'sikerja') {
                        revertToOriginalLogo();
                    }
                });
            });

            // Preload and show logo with smooth transition
            function preloadAndShowLogo(logoInfo) {
                const img = new Image();
                img.onload = function() {
                    logoImg.style.opacity = '0';
                    setTimeout(() => {
                        logoImg.src = logoInfo.src;
                        logoImg.alt = logoInfo.alt;
                        logoImg.className = logoInfo.class;
                        logoImg.style.opacity = '1';
                    }, 150);
                };
                img.src = logoInfo.src;
            }

            // Revert to original logo
            function revertToOriginalLogo() {
                logoImg.style.opacity = '0';
                setTimeout(() => {
                    logoImg.src = originalLogo.src;
                    logoImg.alt = originalLogo.alt;
                    logoImg.className = originalLogo.class;
                    logoImg.style.opacity = '1';
                }, 150);
            }

            // Add CSS for smooth transitions
            const style = document.createElement('style');
            style.textContent = `
        .navbar-brand img {
            transition: opacity 0.15s ease-in-out;
        }
        
        .navbar-brand .logo-mit,
        .navbar-brand .logo-sikerja {
            height: 40px;
            width: auto;
            object-fit: contain;
        }
        
        @media (max-width: 768px) {
            .navbar-brand .logo-mit,
            .navbar-brand .logo-sikerja {
                height: 35px;
            }
        }
    `;
            document.head.appendChild(style);
        });
    </script>
</body>

</html>
