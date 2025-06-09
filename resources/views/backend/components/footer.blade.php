<section id="component-footer">
    <footer class="footer bg-light">
        <div
            class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
            <div>
                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/landing/" target="_blank"
                    class="footer-text fw-bolder">Sneat</a>
                ©
            </div>
            <div>
                <!-- Button trigger logout modal -->
                <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#logoutModal">
                    <i class="bx bx-log-out-circle"></i> Logout
                </button>
            </div>
        </div>
    </footer>
</section>

<!-- Logout Confirmation Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <i class="bx bx-log-out-circle text-danger" style="font-size: 3rem;"></i>
                    <p class="mt-3">Apakah Anda yakin ingin logout?</p>
                    <small class="text-muted">Anda akan diarahkan ke halaman login</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                <!-- Form Logout -->
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="bx bx-log-out-circle"></i> Ya, Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
