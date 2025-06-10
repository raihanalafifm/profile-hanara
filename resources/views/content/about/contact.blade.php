@extends('layout.main')

@section('container')
    <section class="hnr-contact-section contact-section">
        <div class="container">
            @include('components.contact')
        </div>
    </section>
    <section class="contact-section">
        <div class="container reveal-section">
            <h1 class="visually-hidden">Silakan isi formulir berikut, tim kami akan menghubungi Anda</h1>

            <!-- Map Section dengan proper heading -->
            <div class="map-section mt-5">
                <h2 class="map-title">Lokasi Kantor Kami</h2>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.0159552467626!2d102.27860847374916!3d-3.806629743572537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b161ec6a6a83%3A0x1e1175c4144610e0!2sJanji%20Jiwa%20%26%20Jiwa%20Tea%20Jilid%20485%20-%20Tanah%20Patah%2C%20Bengkulu!5e0!3m2!1sid!2sid!4v1749526258441!5m2!1sid!2sid"
                        width="100%" height="400" style="border:0; border-radius:10px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="Lokasi PT Hanara Prima Solusindo">
                    </iframe>
                </div>
                <div class="map-actions mt-3">
                    <a href="https://maps.app.goo.gl/AcRriEcVffyzCCrk7" target="_blank" rel="noopener noreferrer"
                        class="btn btn-submit">
                        <i class="bi bi-geo-alt-fill"></i> Petunjuk Arah
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
