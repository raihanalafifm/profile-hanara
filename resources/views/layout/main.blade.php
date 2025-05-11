<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])

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
</body>
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
  // Get testimonial elements
  const testimonialItems = document.querySelectorAll('.testimonial-clean-item');
  const cleanDots = document.querySelectorAll('.clean-dot');
  
  let currentSlide = 0;
  const totalSlides = testimonialItems.length;
  let autoplayInterval;
  
  // Function to show a specific slide
  function showSlide(index) {
    // Remove active class from all slides and dots
    testimonialItems.forEach(item => {
      item.classList.remove('active');
    });
    
    cleanDots.forEach(dot => {
      dot.classList.remove('active');
    });
    
    // Add active class to current slide and dot
    currentSlide = (index + totalSlides) % totalSlides; // Ensure it wraps around
    testimonialItems[currentSlide].classList.add('active');
    cleanDots[currentSlide].classList.add('active');
  }
  
  // Set up dot click handlers
  cleanDots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      showSlide(index);
      resetAutoplay();
    });
  });
  
  // Function to start autoplay
  function startAutoplay() {
    autoplayInterval = setInterval(() => {
      showSlide(currentSlide + 1);
    }, 5000); // Change slide every 5 seconds
  }
  
  // Function to reset autoplay
  function resetAutoplay() {
    clearInterval(autoplayInterval);
    startAutoplay();
  }
  
  // Initialize slider and start autoplay
  showSlide(0);
  startAutoplay();
  
  // Add swipe functionality for mobile
  const slider = document.querySelector('.testimonial-clean-slider');
  let touchStartX = 0;
  let touchEndX = 0;
  
  slider.addEventListener('touchstart', e => {
    touchStartX = e.changedTouches[0].screenX;
  });
  
  slider.addEventListener('touchend', e => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  });
  
  function handleSwipe() {
    if (touchEndX < touchStartX - 50) {
      // Swiped left - next slide
      showSlide(currentSlide + 1);
      resetAutoplay();
    } else if (touchEndX > touchStartX + 50) {
      // Swiped right - previous slide
      showSlide(currentSlide - 1);
      resetAutoplay();
    }
  }
});
// Blog Slider JavaScript with Mouse Drag (No Arrow Buttons)
document.addEventListener('DOMContentLoaded', function() {
  // Get slider elements
  const sliderContainer = document.querySelector('.blog-slider-container');
  const slides = document.querySelectorAll('.blog-card');
  const dots = document.querySelectorAll('.blog-slider-dot');
  
  let currentIndex = 0;
  let slideWidth = 0;
  let totalSlides = slides.length;
  let autoplayInterval;
  let slidesPerView = 3; // Default for desktop
  
  // Mouse/Touch tracking variables
  let isDragging = false;
  let startPos = 0;
  let currentTranslate = 0;
  let prevTranslate = 0;
  let animationID = 0;
  let currentPosition = 0;
  
  // Calculate how many slides to show based on screen width
  function calculateSlidesPerView() {
    if (window.innerWidth < 768) {
      slidesPerView = 1; // Mobile
    } else if (window.innerWidth < 992) {
      slidesPerView = 2; // Tablet
    } else {
      slidesPerView = 3; // Desktop
    }
    
    // Recalculate slide width
    updateSlideWidth();
  }
  
  // Calculate slide width
  function updateSlideWidth() {
    if (sliderContainer) {
      const containerWidth = sliderContainer.parentElement.clientWidth;
      slideWidth = (containerWidth - (20 * (slidesPerView - 1))) / slidesPerView;
      
      // Update CSS for each slide
      slides.forEach(slide => {
        slide.style.minWidth = `${slideWidth}px`;
      });
      
      // Update container position to current slide
      goToSlide(currentIndex, false); // false = no animation for initial setup
    }
  }
  
  // Go to specific slide
  function goToSlide(index, animate = true) {
    if (!sliderContainer) return;
    
    // Limit the maximum slide
    const maxIndex = Math.max(0, totalSlides - slidesPerView);
    currentIndex = Math.min(Math.max(0, index), maxIndex);
    
    // Calculate offset
    const offset = -currentIndex * (slideWidth + 20); // 20px is gap
    prevTranslate = offset;
    currentTranslate = offset;
    
    // Apply transform with or without animation
    if (animate) {
      sliderContainer.style.transition = 'transform 0.3s ease-out';
    } else {
      sliderContainer.style.transition = 'none';
    }
    
    sliderContainer.style.transform = `translateX(${offset}px)`;
    currentPosition = offset;
    
    // After transition, reset transition property
    if (animate) {
      setTimeout(() => {
        sliderContainer.style.transition = '';
      }, 300);
    }
    
    // Update active dot
    updateActiveDot();
  }
  
  // Update active dot
  function updateActiveDot() {
    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === currentIndex);
    });
  }
  
  // Set up click events for dots
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      goToSlide(index);
      resetAutoplay();
    });
  });
  
  // Mouse and Touch Events for Dragging
  
  // Mouse Events
  if (sliderContainer) {
    // Disable context menu on right click
    sliderContainer.addEventListener('contextmenu', e => {
      e.preventDefault();
      e.stopPropagation();
      return false;
    });
    
    // Mouse Down
    sliderContainer.addEventListener('mousedown', dragStart);
    
    // Mouse Move
    window.addEventListener('mousemove', drag);
    
    // Mouse Up
    window.addEventListener('mouseup', dragEnd);
    
    // Mouse Leave
    window.addEventListener('mouseleave', dragEnd);
    
    // Touch Events
    sliderContainer.addEventListener('touchstart', dragStart);
    window.addEventListener('touchmove', drag);
    window.addEventListener('touchend', dragEnd);
  }
  
  // Functions for drag functionality
  function dragStart(e) {
    e.preventDefault();
    
    // Get starting position
    if (e.type === 'touchstart') {
      startPos = e.touches[0].clientX;
    } else {
      startPos = e.clientX;
      
      // For mouse events, add a "grabbing" cursor
      sliderContainer.style.cursor = 'grabbing';
    }
    
    // Clear autoplay while dragging
    clearInterval(autoplayInterval);
    
    // Set dragging to true
    isDragging = true;
    
    // Start animation loop
    animationID = requestAnimationFrame(animation);
    
    // Remove transition while dragging
    sliderContainer.style.transition = 'none';
  }
  
  function drag(e) {
    if (!isDragging) return;
    
    let currentX;
    if (e.type === 'touchmove') {
      currentX = e.touches[0].clientX;
    } else {
      currentX = e.clientX;
    }
    
    // Calculate how much we moved
    const diff = currentX - startPos;
    currentTranslate = prevTranslate + diff;
  }
  
  function dragEnd() {
    if (!isDragging) return;
    
    // Cancel animation
    cancelAnimationFrame(animationID);
    
    // End dragging state
    isDragging = false;
    
    // Reset cursor
    sliderContainer.style.cursor = '';
    
    // Add transition back for snap effect
    sliderContainer.style.transition = 'transform 0.3s ease-out';
    
    // Calculate which slide to snap to
    const movedBy = currentTranslate - prevTranslate;
    
    if (movedBy < -100 && currentIndex < totalSlides - slidesPerView) {
      // If dragged left enough, go to next slide
      currentIndex += 1;
    } else if (movedBy > 100 && currentIndex > 0) {
      // If dragged right enough, go to previous slide
      currentIndex -= 1;
    }
    
    // Go to the determined slide
    goToSlide(currentIndex);
    
    // Restart autoplay
    startAutoplay();
  }
  
  function animation() {
    if (isDragging) {
      setSliderPosition();
      requestAnimationFrame(animation);
    }
  }
  
  function setSliderPosition() {
    // Limit how far user can drag
    const maxTranslate = 0;
    const minTranslate = -(totalSlides - slidesPerView) * (slideWidth + 20);
    
    if (currentTranslate > maxTranslate) {
      currentTranslate = maxTranslate;
    } else if (currentTranslate < minTranslate) {
      currentTranslate = minTranslate;
    }
    
    currentPosition = currentTranslate;
    sliderContainer.style.transform = `translateX(${currentTranslate}px)`;
  }
  
  // Start autoplay
  function startAutoplay() {
    autoplayInterval = setInterval(() => {
      // If we're at the last possible slide, go back to the first
      if (currentIndex >= totalSlides - slidesPerView) {
        goToSlide(0);
      } else {
        goToSlide(currentIndex + 1); // Go to next slide
      }
    }, 5000); // Change slide every 5 seconds
  }
  
  // Reset autoplay
  function resetAutoplay() {
    clearInterval(autoplayInterval);
    startAutoplay();
  }
  
  // Window resize handler
  function handleResize() {
    calculateSlidesPerView();
    resetAutoplay();
  }
  
  // Initialize slider
  function initSlider() {
    calculateSlidesPerView();
    startAutoplay();
    
    // Stop autoplay on hover
    if (sliderContainer) {
      sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(autoplayInterval);
      });
      
      sliderContainer.addEventListener('mouseleave', () => {
        // Only restart if not dragging
        if (!isDragging) {
          startAutoplay();
        }
      });
    }
    
    // Handle window resize
    window.addEventListener('resize', handleResize);
  }
  
  // Initialize
  initSlider();
});
 // Initialize the map when document is ready
 document.addEventListener('DOMContentLoaded', function() {
      initMap();
    });

    function initMap() {
      // Coordinates for Jl. Batang Hari, Bengkulu
      const officeLocation = { lat: -3.8123, lng: 102.2995 };
      
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
            <p>Jl. Batang Hari, RT.011/RW.003, Nusa Indah, Kec. Ratu Agung, Kota Bengkulu, Bengkulu 38223</p>
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
      const textElement = this.nextElementSibling.querySelector('.hnr-file-input-text');
      
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
      
      // Opsional: Tutup semua FAQ terlebih dahulu
      // document.querySelectorAll('.hnr-faq-item').forEach(item => {
      //   item.classList.remove('active');
      // });
      
      // Toggle active class
      if (isActive) {
        faqItem.classList.remove('active');
      } else {
        faqItem.classList.add('active');
      }
    });
  });
});
</script>
</html>