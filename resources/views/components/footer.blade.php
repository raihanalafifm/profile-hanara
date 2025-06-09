<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Logo dan Copyright -->
            <div class="col-md-4">
                <div class="footer-logo">
                    <img src="{{ asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}" alt="Hanara">
                </div>
                <p class="copyright">© 2025 Hanara Prima Solusindo.<br>Powered By Hanara Prima Solusindo</p>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                </div>
            </div>

            <!-- Navigasi -->
            <div class="col-md-4">
                <h4 class="footer-heading">Navigasi</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('about-us') }}">About</a></li>
                    <li><a href="{{ route('cloud-zimbra') }}">Zimbra</a></li>
                    <li><a href="{{ route('motorola') }}">Motorola</a></li>
                    <li><a href="{{ route('develop-web') }}">Software House</a></li>
                    <li><a href="{{ route('develop-web') }}">Business Solution</a></li>
                    <li><a href="{{ route('cctv') }}">CCTV</a></li>
                </ul>
            </div>

            <!-- Kontak Kami -->
            <div class="col-md-4">
                <h4 class="footer-heading">Kontak Kami</h4>
                <ul class="contact-info">
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@hanara.id">info@hanara.id</a>
                    </li>
                    <li>
                        <i class="fab fa-whatsapp"></i>
                        <a href="https://wa.me/6262897500805">+62 897 5000 805</a>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+627367050202">(0736) 7050202</a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <address>
                            Jl. Batang Hari, RT.01/RW.003, Nusa Indah, Kec. Ratu Agung, Kota Bengkulu, Bengkulu 38223
                        </address>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
