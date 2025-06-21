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

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/iconify-icons@1.0.7/dist/iconify-icons.min.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/css/custom-pagination.css') }}" />

    <!-- Custom styles -->
    <style>
        /* Table styles */
        .table-responsive {
            margin-bottom: 0;
        }

        .card-footer {
            background: transparent;
            border-top: 1px solid #d9dee3;
            padding: 1rem;
        }

        /* Pagination styles */
        .pagination-wrapper {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0.5rem;
            gap: 1rem;
        }

        .pagination {
            display: inline-flex;
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 0.25rem;
        }

        .pagination .page-item .page-link {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            line-height: 1.4;
            border: 1px solid #d9dee3;
            background-color: #fff;
            color: #697a8d;
            min-width: 2rem;
            min-height: 2rem;
            border-radius: 0.375rem;
            transition: all 0.15s ease-in-out;
            cursor: pointer;
            text-decoration: none;
            margin: 0;
        }

        /* Style khusus untuk tombol Previous/Next */
        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            font-size: 0.8125rem;
            padding: 0.375rem 0.75rem;
            text-transform: capitalize;
            letter-spacing: 0.5px;
        }

        /* .pagination .page-item:first-child .page-link::before {
            content: "Previous";
        }

        .pagination .page-item:last-child .page-link::before {
            content: "Next";
        } */

        /* Sembunyikan simbol < dan > */
        .pagination .page-item:first-child .page-link svg,
        .pagination .page-item:last-child .page-link svg,
        .pagination .page-item:first-child .page-link span,
        .pagination .page-item:last-child .page-link span {
            display: none;
        }

        .pagination .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #eb7a01;
            border-color: #aaacff;
        }

        .pagination .page-item.disabled .page-link {
            color: #a5acb5;
            pointer-events: none;
            background-color: #f6f7f8;
            border-color: #d9dee3;
        }

        .pagination .page-item .page-link:hover:not(.active):not(.disabled) {
            color: #dc6e00;
            background-color: #f0f2f4;
            border-color: #d9dee3;
        }

        .pagination .page-item .page-link:focus {
            box-shadow: none;
            outline: 0;
        }

        /* Text info di bawah pagination */
        .pagination-info {
            text-align: center;
            color: #697a8d;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
    </style>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- Page CSS -->
    @stack('page-css')

    <!-- Helpers -->
    <script src="{{ asset('assets/assets1/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/assets1/js/config.js') }}"></script>
    <style>
        bisa ditambah ini han css summernotenya?

        /* Umum */
        .note-editable {
            font-family: 'Segoe UI', 'Open Sans', sans-serif;
            color: #333;
            line-height: 1.7;
            font-size: 16px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
        }

        /* Heading */
        .note-editable h1 {
            font-size: 32px;
            color: #1d3557;
            font-weight: 700;
            margin-top: 24px;
            margin-bottom: 12px;
        }

        .note-editable h2 {
            font-size: 28px;
            color: #1d4e89;
            font-weight: 600;
            margin-top: 22px;
            margin-bottom: 10px;
        }

        .note-editable h3 {
            font-size: 24px;
            color: #277da1;
            font-weight: 600;
            margin-top: 20px;
            margin-bottom: 8px;
        }

        .note-editable h4 {
            font-size: 20px;
            color: #457b9d;
            font-weight: 500;
            margin-top: 18px;
            margin-bottom: 8px;
        }

        .note-editable h5 {
            font-size: 18px;
            color: #4a4e69;
            font-weight: 500;
            margin-top: 16px;
            margin-bottom: 6px;
        }

        .note-editable h6 {
            font-size: 16px;
            color: #6c757d;
            font-weight: 500;
            margin-top: 14px;
            margin-bottom: 6px;
        }

        /* Paragraph */
        .note-editable p {
            font-size: 16px;
            color: #333;
            margin-bottom: 14px;
        }

        /* List */
        .note-editable ul,
        .note-editable ol {
            padding-left: 20px;
            margin-bottom: 14px;
        }

        .note-editable ul li,
        .note-editable ol li {
            margin-bottom: 6px;
        }

        /* Blockquote */
        .note-editable blockquote {
            border-left: 4px solid #a8dadc;
            background-color: #f1faff;
            color: #343a40;
            padding: 12px 20px;
            margin: 20px 0;
            font-style: italic;
        }

        /* Table */
        .note-editable table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .note-editable table th,
        .note-editable table td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: left;
        }

        .note-editable table th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        /* Image */
        .note-editable img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 10px 0;
        }

        /* Link */
        .note-editable a {
            color: #0077cc;
            text-decoration: underline;
        }

        .note-editable a:hover {
            color: #005999;
            text-decoration: none;
        }
    </style>
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
    <script src="{{ asset('assets/assets1/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/assets1/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/assets1/js/main.js') }}"></script>
    <script src="{{ asset('assets/assets1/js/dashboards-analytics.js') }}"></script>



    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Page Scripts -->
    @stack('page-scripts')
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
