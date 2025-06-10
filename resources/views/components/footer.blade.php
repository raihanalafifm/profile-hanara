<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Logo dan Copyright -->
            <div class="col-md-4">
                <div class="footer-logo">
                    <img src="{{ asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}" alt="Hanara">
                </div>
                <p>Your Partner for Smarter IT Solutions </p>
                <p class="copyright">© 2025 PT Hanara Prima Solusindo. <br>All rights reserved.</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/hanaraprimasolusindo?igsh=MWpja2JwejNtOWE1Zg=="
                        class="social-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <!-- Isi SVG untuk Instagram -->
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/hanaraprimasolusindo/" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
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
                        <!-- Email Icon -->
                        <svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        <a href="mailto:info@hanara.id">info@hanara.id</a>
                    </li>

                    <li>
                        <!-- WhatsApp Icon -->
                        <svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path
                                d="M16 3C9.383 3 4 8.383 4 15c0 2.658 0.867 5.121 2.332 7.12L4 29l7.129-2.332A11.894 11.894 0 0 0 16 27c6.617 0 12-5.383 12-12S22.617 3 16 3zm0 22c-1.883 0-3.621-.516-5.113-1.402l-.367-.214-4.243 1.385 1.391-4.121-.237-.386A9.933 9.933 0 0 1 6 15c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10zm5.078-7.594c-.281-.141-1.66-.816-1.918-.91-.258-.094-.445-.14-.633.14s-.727.91-.89 1.098c-.164.188-.328.211-.609.07-.281-.14-1.188-.438-2.262-1.398-.836-.746-1.398-1.664-1.562-1.945-.164-.282-.018-.434.123-.574.125-.125.281-.328.422-.492.141-.164.188-.281.281-.469.094-.187.047-.352-.023-.492-.07-.141-.633-1.527-.867-2.09-.227-.547-.457-.469-.633-.477-.164-.008-.352-.008-.539-.008-.187 0-.492.07-.75.352s-.984.961-.984 2.34c0 1.375 1.008 2.703 1.148 2.891.141.187 1.984 3.031 4.805 4.25.672.289 1.195.461 1.602.59.672.211 1.281.18 1.758.109.539-.082 1.66-.676 1.895-1.328.234-.648.234-1.203.164-1.328-.07-.125-.258-.188-.539-.328z"
                                fill="currentColor" />
                        </svg>
                        <a href="https://wa.me/628975000805">+62 897 5000 805</a>
                    </li>

                    <li>
                        <!-- Telephone Icon -->
                        <svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79a15.91 15.91 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21 12.36 12.36 0 004.52.86 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 12.36 12.36 0 00.86 4.52 1 1 0 01-.21 1.11l-2.2 2.2z"
                                fill="currentColor" />
                        </svg>
                        <a href="tel:+627367050202">(0736) 7050202</a>
                    </li>

                    <li>
                        <!-- Location Icon -->
                        <svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"
                                fill="currentColor" />
                        </svg>
                        <address>
                            <a href="https://maps.app.goo.gl/AcRriEcVffyzCCrk7">
                                Jl. Sutoyo No.8, Tanah Patah, Kec. Ratu Agung, Kota Bengkulu, Bengkulu 38224
                            </a>
                        </address>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
