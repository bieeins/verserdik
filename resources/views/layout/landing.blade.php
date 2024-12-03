<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    {{--
    <base href="../../../" /> --}}
    <title>Verifikasi Data Sertifikat Pendidik Program Profesi Guru</title>
    <meta charset="utf-8" />
    <meta name="description" content="Verifikasi Data Sertifikat Pendidik Program Profesi Guru" />
    <meta name="keywords" content="Verifikasi Data Sertifikat Pendidik Program Profesi Guru" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Verifikasi Data Sertifikat Pendidik Program Profesi Guru" />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="#" />
    <link rel="canonical" href="#" />
    <link rel="shortcut icon" href="https://registrasiulang.unri.ac.id/assets/logo/LOGOUR.png" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('assets/media/auth/bg10.jpeg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg10-dark.jpeg');
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="p-10 pb-0 d-flex flex-column flex-center pb-lg-10 w-100">
                    <!--begin::Image-->
                    <img class="mx-auto mb-10 theme-light-show mw-100 w-150px w-lg-300px mb-lg-20"
                        src="https://ppg.kemdikbud.go.id/storage/2024/piloting/logo-header.svg" alt="" />
                    <img class="mx-auto mb-10 theme-dark-show mw-100 w-150px w-lg-300px mb-lg-20"
                        src="https://ppg.kemdikbud.go.id/storage/2024/piloting/logo-header.svg" alt="" />
                    <!--end::Image-->
                    <!--begin::Title-->
                    <h1 class="text-center text-gray-800 fs-1qx fw-bold mb-7">Selamat Datang di halaman verifikasi
                        <br />
                        Sertifikat Pendidik Profesi Guru LPTK Universitas Riau.
                    </h1>
                    <!--end::Title-->
                    {{--
                    <!--begin::Text-->
                    <div class="text-center text-gray-600 fs-base fw-semibold">In this kind of post,
                        <a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person
                        they’ve interviewed
                        <br />and provides some background information about
                        <a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
                        <br />work following this is a transcript of the interview.
                    </div>
                    <!--end::Text--> --}}
                    <div class="text-center text-gray-600 fs-2 fw-semibold">Halaman ini disediakan untuk memudahkan
                        Anda <br /> dalam melakukan pengecekan dan verifikasi status sertifikat pendidik yang akan
                        diperoleh.
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="p-12 d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end">
                <!--begin::Wrapper-->
                <div class="p-10 bg-body d-flex flex-column flex-center rounded-4 w-md-600px">
                    <!--begin::Content-->

                    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                            <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                                data-kt-redirect-url="{{ route('dashboard.mahasiswa') }}"
                                action="{{ route('mahasiswa.login') }}">
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Logo-->
                                    <img src="https://registrasiulang.unri.ac.id/assets/logo/LOGOUR.png" alt="Logo Universitas Riau"
                                    class="mb-5" style="width: 100px; height: auto;">
                                    <!--end::Logo-->
                                    <!--begin::Title-->
                                    <h1 class="mb-3 text-gray-900 fw-bolder">Login</h1>
                                    <!--end::Title-->
                                    <!--begin::Subtitle-->
                                    <div class="text-gray-500 fw-semibold fs-6">Untuk Verifikasi Data</div>
                                    <!--end::Subtitle=-->
                                </div>

                                <!--begin::Input group=-->
                                <div class="mb-8 fv-row">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="NIM" name="nim" autocomplete="off"
                                        class="bg-transparent form-control" />
                                    <!--end::Email-->
                                </div>
                                <!--end::Input group=-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Password-->
                                    <input type="password" placeholder="Password (NIM+Tahun Lahir)" name="password"
                                        autocomplete="off" class="bg-transparent form-control" />
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group=-->

                                <!--begin::Submit button-->
                                <div class="mb-10 d-grid">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Login</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Mohon Tunggu...
                                            <span
                                                class="align-middle spinner-border spinner-border-sm ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </button>
                                </div>
                                <!--end::Submit button-->

                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Footer-->
                        <div class="d-flex flex-stack">
                            <!--begin::Links-->
                            <div class="gap-5 d-flex fw-semibold text-primary fs-base">
                                <a href="#" target="_blank">&copy; Copyright 2024 TIM PPG.</a>
                                {{-- <a href="#" target="_blank">Plans</a> --}}
                                {{-- <a href="#" target="_blank"></a> --}}
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
