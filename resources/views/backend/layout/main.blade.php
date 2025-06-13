<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Backend hanara.id</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icon/icon hanara.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Summernote CSS - Load before page loads -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/assets1/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/assets1/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('backend.components.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    @yield('backend')
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('backend.components.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/assets1/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/assets1/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/assets1/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/assets1/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/assets1/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Summernote JS - Load after jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Page specific scripts -->
    @yield('scripts')

    <script>
        function editArticle(article) {
            const form = document.getElementById('editForm');
            form.action = `/backend/articles/${article.id}`;

            document.getElementById('edit_title').value = article.title;
            document.getElementById('edit_link').value = article.link || '';
            document.getElementById('edit_description').value = article.description;

            const editModal = new bootstrap.Modal(document.getElementById('editModal'));
            editModal.show();
        }


        function editCareer(career) {
            // Parse career data jika masih string
            if (typeof career === 'string') {
                career = JSON.parse(career);
            }

            // Set action URL untuk form
            const form = document.getElementById('editCareerForm');
            form.action = `/backend/careers/${career.id}`;

            // Isi form dengan data career
            document.getElementById('edit_position').value = career.position;
            document.getElementById('edit_description').value = career.description;

            // Handle skills array
            if (career.skills && Array.isArray(career.skills) && career.skills.length > 0) {
                document.getElementById('edit_skills').value = career.skills.join('\n');
            } else {
                document.getElementById('edit_skills').value = '';
            }

            // Handle qualifications array
            if (career.qualifications && Array.isArray(career.qualifications) && career.qualifications.length > 0) {
                document.getElementById('edit_qualifications').value = career.qualifications.join('\n');
            } else {
                document.getElementById('edit_qualifications').value = '';
            }

            // Handle checkbox is_active
            const isActiveCheckbox = document.getElementById('edit_is_active');
            if (isActiveCheckbox) {
                isActiveCheckbox.checked = career.is_active;
            }

            // Tampilkan modal
            const editModal = new bootstrap.Modal(document.getElementById('editCareerModal'));
            editModal.show();
        }

        function editUser(userId) {
            // Fetch user data via AJAX
            $.ajax({
                url: `/backend/users/${userId}/edit`,
                method: 'GET',
                success: function(user) {
                    const form = document.getElementById('editUserForm');
                    form.action = `/backend/users/${user.id}`;

                    document.getElementById('edit_name').value = user.name;
                    document.getElementById('edit_email').value = user.email;
                    document.getElementById('edit_position').value = user.position || '';
                    document.getElementById('edit_bio').value = user.bio || '';
                    document.getElementById('edit_password').value = '';
                    document.getElementById('edit_password_confirmation').value = '';

                    // Show current avatar
                    if (user.avatar) {
                        document.getElementById('current-avatar').innerHTML = `
                    <p class="mb-1">Avatar saat ini:</p>
                    <img src="${user.avatar_url}" class="img-thumbnail" style="max-height: 100px;">
                `;
                    } else {
                        document.getElementById('current-avatar').innerHTML = '';
                    }

                    const editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
                    editModal.show();
                },
                error: function() {
                    alert('Error loading user data');
                }
            });
        }

        // Handle error validation saat page load untuk modal Career
        document.addEventListener('DOMContentLoaded', function() {
            // Jika ada error validation untuk add career modal
            @if ($errors->any() && request()->is('backend/careers') && old('_method') != 'PUT')
                const addModal = new bootstrap.Modal(document.getElementById('addCareerModal'));
                addModal.show();
            @endif

            // Jika ada error validation untuk edit career modal
            @if ($errors->any() && request()->is('backend/careers/*') && old('_method') == 'PUT')
                const editModal = new bootstrap.Modal(document.getElementById('editCareerModal'));
                editModal.show();
            @endif
        });
    </script>
</body>

</html>
