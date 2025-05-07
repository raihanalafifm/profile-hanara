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
</script>
</html>