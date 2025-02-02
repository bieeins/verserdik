@extends('layout.main-mahasiswa')
@section('title', 'Dashboard Mahasiswa PPG')
@section('judul-header', 'Verifikasi Data')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="py-3 app-toolbar py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="flex-wrap page-title d-flex flex-column justify-content-center me-3">
                <!--begin::Title-->
                <h1 class="my-0 text-gray-900 page-heading d-flex fw-bold fs-3 flex-column justify-content-center">
                    Verifikasi Data Sertifikat Pendidik</h1>
                <!--end::Title-->

                <!--begin::Breadcrumb-->
                {{-- <ul class="pt-1 my-0 breadcrumb breadcrumb-separatorless fw-semibold fs-7">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bg-gray-500 bullet w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Mahasiswa</li>
                    <!--end::Item-->
                </ul> --}}
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            {{-- <div class="gap-2 d-flex align-items-center gap-lg-3">
                <!--begin::Filter menu-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>Filter</a>
                    <!--end::Menu toggle-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_673c0c9b689d9">
                        <!--begin::Header-->
                        <div class="py-5 px-7">
                            <div class="text-gray-900 fs-5 fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="border-gray-200 separator"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="py-5 px-7">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" multiple="multiple"
                                        data-kt-select2="true" data-close-on-select="false"
                                        data-placeholder="Select option" data-dropdown-parent="#kt_menu_673c0c9b689d9"
                                        data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                </div>
                <!--end::Filter menu-->
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app">Create</a>
                <!--end::Primary button-->
            </div> --}}
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Navbar-->
            <div class="mb-5 card mb-xl-10">
                <div class="pb-0 card-body pt-9">
                    <!--begin::Details-->
                    <div class="flex-wrap d-flex flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Notice-->
                            <div
                                class="p-6 mb-5 border border-dashed rounded notice d-flex bg-light-warning border-warning">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-information fs-2tx text-danger me-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="text-justify fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Mohon Perhatian dan Dibaca !</h4>
                                        <div class="text-gray-700 fs-6">
                                            Pada halaman Verifikasi Data Sertifikat Pendidik (Serdik) PPG, pastikan
                                            hal-hal berikut ini sudah diperiksa untuk menjamin keabsahan dan kelengkapan
                                            data:
                                            <ol>
                                                <li><strong>Nomor Induk Kependudukan (NIK)</strong>: Periksa NIK yang
                                                    terdaftar pada sertifikat PPG. Pastikan NIK yang dimasukkan pada
                                                    halaman verifikasi sesuai dengan yang tercantum pada Kartu Tanda
                                                    Penduduk (KTP) Anda.</li>
                                                <li><strong>Nama Lengkap</strong>: Pastikan Nama Lengkap yang terdaftar
                                                    pada sertifikat PPG sesuai dengan data pribadi Anda yang ada di
                                                    dokumen resmi seperti KTP dan data akademik (Ijazah S1). Nama yang
                                                    salah atau tidak sesuai dapat menyebabkan masalah dalam validasi
                                                    data.</li>
                                                <li><strong>Tempat Tanggal Lahir</strong>: Pastikan Tempat Tanggal Lahir
                                                    yang terdaftar pada sertifikat PPG sesuai dengan data pribadi Anda
                                                    yang ada di dokumen resmi seperti KTP dan data akademik (Ijazah S1).
                                                </li>
                                                <li><strong>NIM (Nomor Induk Mahasiswa)</strong>: Pastikan NIM yang
                                                    terdaftar di sertifikat sesuai dengan yang ada pada dokumen resmi
                                                    KTM yang diterbitkan oleh LPK Universitas Riau.</li>
                                                <li><strong>Tanggal Penerbitan Sertifikat</strong>: {{
                                                    \Carbon\Carbon::parse($mahasiswa->tanggalSertifikat)->translatedFormat('d
                                                    F Y') }}.</li>
                                                <li><strong>Pas Foto</strong>: Pastikan pas foto sudah sesuai dengan
                                                    ketentuan (tidak boleh foto Selfie) silakan <a target='_blank'
                                                        href='assets/files/Ketentuan-Foto-Serdik.pdf'>cek disini.</a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                            <!--end::Title-->
                            <!--begin::Stats-->
                            {{-- <div class="flex-wrap d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="flex-wrap d-flex">
                                        <!--begin::Stat-->
                                        <div
                                            class="px-4 py-3 mb-3 border border-gray-300 border-dashed rounded min-w-125px me-6">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                                    data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fw-semibold fs-6">Earnings
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="px-4 py-3 mb-3 border border-gray-300 border-dashed rounded min-w-125px me-6">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                                    data-kt-countup-value="80">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fw-semibold fs-6">Projects
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="px-4 py-3 mb-3 border border-gray-300 border-dashed rounded min-w-125px me-6">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                                    data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fw-semibold fs-6">Success Rate
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Progress-->
                                <div class="mt-3 d-flex align-items-center w-200px w-sm-300px flex-column">
                                    <div class="mt-auto mb-2 d-flex justify-content-between w-100">
                                        <span class="text-gray-500 fw-semibold fs-6">Profile
                                            Compleation</span>
                                        <span class="fw-bold fs-6">50%</span>
                                    </div>
                                    <div class="mx-3 mb-3 h-5px w-100 bg-light">
                                        <div class="rounded bg-success h-5px" role="progressbar" style="width: 50%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div> --}}
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::Navbar-->
            <div class="mb-5 card mb-xl-10">
                <div class="pb-0 card-body pt-9">
                    <!--begin::Details-->
                    <div class="flex-wrap d-flex flex-sm-nowrap">
                        <!--begin: Pic-->
                        <div class="mb-4 me-7">
                            <div class="symbol symbol-fixed position-relative" style="width: 120px; height: 160px;">
                                <img src="{{ $mahasiswa->urlFoto ?: 'assets/media/avatars/default-avatar.jpg' }}"
                                     alt="Foto Peserta"
                                     style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;" />
                            </div>
                            {{-- <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <img src="{{ $mahasiswa->urlFoto ?: 'assets/media/avatars/default-avatar.jpg' }}"
                                    alt="Foto Peserta" />
                                <div
                                    class="bottom-0 mb-6 border position-absolute translate-middle start-100 bg-success rounded-circle border-body h-20px w-20px">
                                </div>
                            </div> --}}
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="flex-wrap mb-2 d-flex justify-content-between align-items-start">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <div class="mb-2 d-flex align-items-center">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{
                                            $mahasiswa->namaPeserta }}</a>
                                        <a href="#">
                                            <i class="ki-duotone ki-verify fs-1 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="flex-wrap mb-4 d-flex fw-semibold fs-6 pe-2">
                                        <a href="#"
                                            class="mb-2 text-gray-500 d-flex align-items-center text-hover-primary me-5">
                                            <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>{{ $mahasiswa->noUkg }}</a>

                                        <a href="#"
                                            class="mb-2 text-gray-500 d-flex align-items-center text-hover-primary me-5">
                                            <i class="ki-duotone ki-geolocation fs-4 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>{{ $mahasiswa->namaBidangStudi}}</a>
                                        {{-- <a href="#"
                                            class="mb-2 text-gray-500 d-flex align-items-center text-hover-primary">
                                            <i class="ki-duotone ki-sms fs-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>max@kt.com</a> --}}
                                    </div>
                                    <!--end::Info-->

                                </div>
                                <!--end::User-->
                                <!--begin::Actions-->
                                {{-- <div class="my-4 d-flex">
                                    <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                                        <i class="ki-duotone ki-check fs-3 d-none"></i>
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Follow</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="align-middle spinner-border spinner-border-sm ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
                                    <!--begin::Menu-->
                                    <div class="me-0">
                                        <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div class="py-3 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="px-3 menu-item">
                                                <div class="px-3 pb-2 menu-content text-muted fs-7 text-uppercase">
                                                    Payments</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="px-3 menu-item">
                                                <a href="#" class="px-3 menu-link">Create
                                                    Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="px-3 menu-item">
                                                <a href="#" class="px-3 menu-link flex-stack">Create
                                                    Payment
                                                    <span class="ms-2" data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference">
                                                        <i class="ki-duotone ki-information fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="px-3 menu-item">
                                                <a href="#" class="px-3 menu-link">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-end">
                                                <a href="#" class="px-3 menu-link">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                                    <!--begin::Menu item-->
                                                    <div class="px-3 menu-item">
                                                        <a href="#" class="px-3 menu-link">Plans</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="px-3 menu-item">
                                                        <a href="#" class="px-3 menu-link">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="px-3 menu-item">
                                                        <a href="#" class="px-3 menu-link">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="my-2 separator"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="px-3 menu-item">
                                                        <div class="px-3 menu-content">
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px"
                                                                    type="checkbox" value="1" checked="checked"
                                                                    name="notifications" />
                                                                <!--end::Input-->
                                                                <!--end::Label-->
                                                                <span
                                                                    class="form-check-label text-muted fs-6">Recuring</span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="px-3 my-1 menu-item">
                                                <a href="#" class="px-3 menu-link">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                    </div>
                                    <!--end::Menu-->
                                </div> --}}
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            {{-- <div class="flex-wrap d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="flex-wrap d-flex">
                                        <!--begin::Stat-->
                                        <div
                                            class="px-4 py-3 mb-3 border border-gray-300 border-dashed rounded min-w-125px me-6">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                                    data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fw-semibold fs-6">Earnings
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="px-4 py-3 mb-3 border border-gray-300 border-dashed rounded min-w-125px me-6">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                                    data-kt-countup-value="80">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fw-semibold fs-6">Projects
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="px-4 py-3 mb-3 border border-gray-300 border-dashed rounded min-w-125px me-6">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                                    data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fw-semibold fs-6">Success Rate
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Progress-->
                                <div class="mt-3 d-flex align-items-center w-200px w-sm-300px flex-column">
                                    <div class="mt-auto mb-2 d-flex justify-content-between w-100">
                                        <span class="text-gray-500 fw-semibold fs-6">Profile
                                            Compleation</span>
                                        <span class="fw-bold fs-6">50%</span>
                                    </div>
                                    <div class="mx-3 mb-3 h-5px w-100 bg-light">
                                        <div class="rounded bg-success h-5px" role="progressbar" style="width: 50%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div> --}}
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Navs-->
                    {{-- <ul class="border-transparent nav nav-stretch nav-line-tabs nav-line-tabs-2x fs-5 fw-bold">
                        <!--begin::Nav item-->
                        <li class="mt-2 nav-item">
                            <a class="py-5 nav-link text-active-primary ms-0 me-10 active"
                                href="account/overview.html">Overview</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="mt-2 nav-item">
                            <a class="py-5 nav-link text-active-primary ms-0 me-10"
                                href="account/settings.html">Settings</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="mt-2 nav-item">
                            <a class="py-5 nav-link text-active-primary ms-0 me-10"
                                href="account/security.html">Security</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="mt-2 nav-item">
                            <a class="py-5 nav-link text-active-primary ms-0 me-10"
                                href="account/activity.html">Activity</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="mt-2 nav-item">
                            <a class="py-5 nav-link text-active-primary ms-0 me-10"
                                href="account/billing.html">Billing</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="mt-2 nav-item">
                            <a class="py-5 nav-link text-active-primary ms-0 me-10"
                                href="account/statements.html">Statements</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="mt-2 nav-item">
                            <a class="py-5 nav-link text-active-primary ms-0 me-10"
                                href="account/referrals.html">Referrals</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="mt-2 nav-item">
                            <a class="py-5 nav-link text-active-primary ms-0 me-10" href="account/api-keys.html">API
                                Keys</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="mt-2 nav-item">
                            <a class="py-5 nav-link text-active-primary ms-0 me-10" href="account/logs.html">Logs</a>
                        </li>
                        <!--end::Nav item-->
                    </ul> --}}
                    <!--begin::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::details View-->
            <div class="mb-5 card mb-xl-10" id="kt_profile_details_view">
                <!--begin::Card header-->
                <div class="cursor-pointer card-header">
                    <!--begin::Card title-->
                    <div class="m-0 card-title">
                        <h3 class="m-0 fw-bold">
                            Data Pendidik</h3>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Action-->
                    {{-- <a href="#" class="btn btn-sm btn-primary align-self-center">Lapor Kesalahan</a> --}}
                    <!--end::Action-->
                </div>
                <!--begin::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Row-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Nama Lengkap</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="text-gray-800 fw-bold fs-6">{{ $mahasiswa->namaPeserta }}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Tempat /Tanggal Lahir</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="text-gray-800 fw-bold fs-6"> {{ $mahasiswa->tempatLahir }},
                                {{ \Carbon\Carbon::parse($mahasiswa->tanggalLahir)->translatedFormat('d F Y') }}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">No UKG</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="text-gray-800 fw-semibold fs-6">{{ $mahasiswa->noUkg}}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-7 row">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Program Studi</label>
                        <!--begin::Label-->
                        <!--begin::Label-->
                        <div class="col-lg-8">
                            <span class="text-gray-800 fw-semibold fs-6">{{ $mahasiswa->namaBidangStudi }}</span>
                        </div>
                        <!--begin::Label-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">NIK
                            {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <span class="text-gray-800 fw-bold fs-6 me-2x">{{ $mahasiswa->nik }}</span>
                            {{-- <span class="badge badge-success">Verified</span> --}}
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Nomor Sertifikat Pendidik</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span target="_blank" href="{{ $mahasiswa->linkPreviewSertifikat}}"
                                class="text-gray-800 fw-semibold fs-6 text-hover-primary">{{
                                $mahasiswa->nomorSertifikatPendidik }}</span>
                        </div>

                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    @if($mahasiswa->linkFinalSertifikat)
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Download Sertifikat</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <a target="_blank" href="{{ $mahasiswa->linkFinalSertifikat}}"
                                class="text-gray-800x fw-semibold fs-6 text-hover-primaryx btn btn-success btn-sm">Download Sertifikat</a>
                        </div>

                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    @endif
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">NIM
                            {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            {{-- <a href="#" class="text-gray-800 fw-semibold fs-6 text-hover-primary">{{
                                $mahasiswa->nim }}</a> --}}
                            <span class="text-gray-800 fw-bold fs-6">{{ $mahasiswa->nim }}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">SK</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            @if($mahasiswa->piloting == 1)
                            <a target="_blank" href="assets/files/pil1.pdf" class="btn btn-sm btn-secondary">Lihat
                                SK</a>
                            @elseif ($mahasiswa->piloting == 2)
                            <a target="_blank" href="assets/files/pil2.pdf" class="btn btn-sm btn-secondary">Lihat
                                SK</a>
                            @elseif ($mahasiswa->piloting == 3)
                            <a target="_blank" href="assets/files/pil3.pdf" class="btn btn-sm btn-secondary">Lihat
                                SK</a>
                            @else
                            <a target="" href="#" class="btn btn-sm btn-secondary">SK BELUM TERBIT</a>
                            @endif
                        </div>


                        <!--end::Col-->
                    </div>

                </div>
                <!--end::Card body-->

            </div>
            <div class="mb-5 card mb-xl-10">
                <div class="pb-0 p-5">
                    <!--begin::Details-->
                    <div class="flex-wrap d-flexx flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Notice-->
                            <div
                                class="p-3 mb-5 border border-dashed rounded notice d-flex bg-light-warning border-warning">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-information fs-2tx text-danger me-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="text-justify fw-semibold ">
                                        <h4 class="text-gray-900 fw-bold">Mohon Diperhatikan !</h4>
                                        <div class="mr-10 text-gray-700 fs-6">Jika terdapat kesalahan data pada isian sertifikat
                                            pendidik (serdik) di atas, silakan klik di tombol lapor untuk melakukan perbaikan,
                                            Lalu data dukung nya silakan kirimkan ke email
                                            <span class="text-primary">verifikasiserdikppg.fkip@staff.unri.ac.id</span>
                                            <a href="#" class="pl-5 ml-10 btn btn-sm fw-bold btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_lapor">LAPOR</a>
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                            <!--end::Title-->
                            <!--begin::Stats-->
                            {{-- <div class="flex-wrap d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="flex-wrap d-flex">
                                        <!--begin::Stat-->
                                        <div
                                            class="px-4 py-3 mb-3 border border-gray-300 border-dashed rounded min-w-125px me-6">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                                    data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fw-semibold fs-6">Earnings
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="px-4 py-3 mb-3 border border-gray-300 border-dashed rounded min-w-125px me-6">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                                    data-kt-countup-value="80">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fw-semibold fs-6">Projects
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="px-4 py-3 mb-3 border border-gray-300 border-dashed rounded min-w-125px me-6">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                                    data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fw-semibold fs-6">Success Rate
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Progress-->
                                <div class="mt-3 d-flex align-items-center w-200px w-sm-300px flex-column">
                                    <div class="mt-auto mb-2 d-flex justify-content-between w-100">
                                        <span class="text-gray-500 fw-semibold fs-6">Profile
                                            Compleation</span>
                                        <span class="fw-bold fs-6">50%</span>
                                    </div>
                                    <div class="mx-3 mb-3 h-5px w-100 bg-light">
                                        <div class="rounded bg-success h-5px" role="progressbar" style="width: 50%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div> --}}
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                </div>
            </div>
            <!--end::details View-->
            {{--
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-8 mb-xl-10">
                    <!--begin::Chart widget 5-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Header-->
                        <div class="pt-5 card-header flex-nowrap">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="text-gray-900 card-label fw-bold">Top Selling
                                    Categories</span>
                                <span class="pt-2 text-gray-500 fw-semibold fs-6">8k social
                                    visitors</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="text-gray-500 ki-duotone ki-dots-square fs-1 me-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <div class="px-3 py-4 text-gray-900 menu-content fs-6 fw-bold">
                                            Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="mb-3 opacity-75 separator"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="px-3 menu-link">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                            <!--begin::Menu item-->
                                            <div class="px-3 menu-item">
                                                <a href="#" class="px-3 menu-link">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="px-3 menu-item">
                                                <a href="#" class="px-3 menu-link">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="px-3 menu-item">
                                                <a href="#" class="px-3 menu-link">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="mt-3 opacity-75 separator"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <div class="px-3 py-3 menu-content">
                                            <a class="px-4 btn btn-primary btn-sm" href="#">Generate
                                                Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="pt-5 card-body ps-6">
                            <div id="kt_charts_widget_5" class="min-h-auto"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="mb-5 col-xl-4 mb-xl-10">
                    <!--begin::Engage widget 1-->
                    <div class="card h-md-100" dir="ltr">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-center">
                            <!--begin::Heading-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <h1 class="text-center text-gray-800 fw-semibold lh-lg">Have you
                                    tried
                                    <br />new
                                    <span class="fw-bolder">Mobile Application ?</span>
                                </h1>
                                <!--end::Title-->
                                <!--begin::Illustration-->
                                <div class="py-10 text-center">
                                    <img src="assets/media/svg/illustrations/easy/1.svg"
                                        class="theme-light-show w-200px" alt="" />
                                    <img src="assets/media/svg/illustrations/easy/1-dark.svg"
                                        class="theme-dark-show w-200px" alt="" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Links-->
                            <div class="mb-1 text-center">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app"
                                    data-bs-toggle="modal">Try
                                    now</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light" href="apps/invoices/view/invoice-1.html">Learn more</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="text-gray-900 card-label fw-bold">Product
                                    Delivery</span>
                                <span class="mt-1 text-gray-500 fw-semibold fs-6">1M Products
                                    Shipped so far</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">Order
                                    Details</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Scroll-->
                            <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                                <!--begin::Item-->
                                <div class="py-3 mb-6 border border-gray-300 border-dashed rounded px-7">
                                    <!--begin::Info-->
                                    <div class="mb-3 d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/210.png" class="w-50px ms-n1 me-1"
                                                alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bold">Elephant
                                                1802</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-4 text-gray-900 menu-content fs-6 fw-bold">
                                                        Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mb-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="px-3 menu-link">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Admin
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Staff
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Member
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mt-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-3 menu-content">
                                                        <a class="px-4 btn btn-primary btn-sm" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
                                            <a href="apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bold">Jason
                                                Bourne</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success">Delivered</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="py-3 mb-6 border border-gray-300 border-dashed rounded px-7">
                                    <!--begin::Info-->
                                    <div class="mb-3 d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/209.png" class="w-50px ms-n1 me-1"
                                                alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-4 text-gray-900 menu-content fs-6 fw-bold">
                                                        Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mb-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="px-3 menu-link">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Admin
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Staff
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Member
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mt-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-3 menu-content">
                                                        <a class="px-4 btn btn-primary btn-sm" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
                                            <a href="apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bold">Marie
                                                Durant</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-primary">Shipping</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="py-3 mb-6 border border-gray-300 border-dashed rounded px-7">
                                    <!--begin::Info-->
                                    <div class="mb-3 d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/214.png" class="w-50px ms-n1 me-1"
                                                alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bold">Yellow
                                                Stone</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-4 text-gray-900 menu-content fs-6 fw-bold">
                                                        Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mb-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="px-3 menu-link">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Admin
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Staff
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Member
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mt-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-3 menu-content">
                                                        <a class="px-4 btn btn-primary btn-sm" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
                                            <a href="apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bold">Dan
                                                Wilson</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger">Confirmed</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="py-3 mb-6 border border-gray-300 border-dashed rounded px-7">
                                    <!--begin::Info-->
                                    <div class="mb-3 d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/211.png" class="w-50px ms-n1 me-1"
                                                alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bold">Elephant
                                                1802</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-4 text-gray-900 menu-content fs-6 fw-bold">
                                                        Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mb-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="px-3 menu-link">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Admin
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Staff
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Member
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mt-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-3 menu-content">
                                                        <a class="px-4 btn btn-primary btn-sm" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
                                            <a href="apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bold">Lebron
                                                Wayde</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success">Delivered</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="py-3 mb-6 border border-gray-300 border-dashed rounded px-7">
                                    <!--begin::Info-->
                                    <div class="mb-3 d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/215.png" class="w-50px ms-n1 me-1"
                                                alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-4 text-gray-900 menu-content fs-6 fw-bold">
                                                        Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mb-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="px-3 menu-link">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Admin
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Staff
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Member
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mt-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-3 menu-content">
                                                        <a class="px-4 btn btn-primary btn-sm" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
                                            <a href="apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bold">Ana
                                                Simmons</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-primary">Shipping</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="py-3 border border-gray-300 border-dashed rounded px-7">
                                    <!--begin::Info-->
                                    <div class="mb-3 d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/192.png" class="w-50px ms-n1 me-1"
                                                alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bold">Yellow
                                                Stone</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-4 text-gray-900 menu-content fs-6 fw-bold">
                                                        Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mb-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="px-3 menu-link">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Admin
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Staff
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="px-3 menu-item">
                                                            <a href="#" class="px-3 menu-link">Member
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">New
                                                        Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="mt-3 opacity-75 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 py-3 menu-content">
                                                        <a class="px-4 btn btn-primary btn-sm" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
                                            <a href="apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bold">Kevin
                                                Leonard</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger">Confirmed</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Table Widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="text-gray-900 card-label fw-bold">Stock Report</span>
                                <span class="mt-1 text-gray-500 fw-semibold fs-6">Total 2,356 Items
                                    in the Stock</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->
                            <div class="card-toolbar">
                                <!--begin::Filters-->
                                <div class="flex-wrap gap-4 d-flex flex-stack">
                                    <!--begin::Destination-->
                                    <div class="d-flex align-items-center fw-bold">
                                        <!--begin::Label-->
                                        <div class="text-muted fs-7 me-2">Cateogry</div>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select
                                            class="w-auto py-0 text-gray-900 form-select form-select-transparent fs-7 lh-1 fw-bold ps-3"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                            <option></option>
                                            <option value="Show All" selected="selected">Show All
                                            </option>
                                            <option value="a">Category A</option>
                                            <option value="b">Category B</option>
                                        </select>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Destination-->
                                    <!--begin::Status-->
                                    <div class="d-flex align-items-center fw-bold">
                                        <!--begin::Label-->
                                        <div class="text-muted fs-7 me-2">Status</div>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select
                                            class="w-auto py-0 text-gray-900 form-select form-select-transparent fs-7 lh-1 fw-bold ps-3"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                            data-kt-table-widget-5="filter_status">
                                            <option></option>
                                            <option value="Show All" selected="selected">Show All
                                            </option>
                                            <option value="In Stock">In Stock</option>
                                            <option value="Out of Stock">Out of Stock</option>
                                            <option value="Low Stock">Low Stock</option>
                                        </select>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Status-->
                                    <!--begin::Search-->
                                    <a href="apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View
                                        Stock</a>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Filters-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-gray-500 text-start fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-150px">Item</th>
                                        <th class="text-end pe-3 min-w-100px">Product ID</th>
                                        <th class="text-end pe-3 min-w-150px">Date Added</th>
                                        <th class="text-end pe-3 min-w-100px">Price</th>
                                        <th class="text-end pe-3 min-w-100px">Status</th>
                                        <th class="text-end pe-0 min-w-75px">Qty</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-bold">
                                    <tr>
                                        <!--begin::Item-->
                                        <td>
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-900 text-hover-primary">Macbook Air
                                                M1</a>
                                        </td>
                                        <!--end::Item-->
                                        <!--begin::Product ID-->
                                        <td class="text-end">#XGY-356</td>
                                        <!--end::Product ID-->
                                        <!--begin::Date added-->
                                        <td class="text-end">02 Apr, 2024</td>
                                        <!--end::Date added-->
                                        <!--begin::Price-->
                                        <td class="text-end">$1,230</td>
                                        <!--end::Price-->
                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="px-4 py-3 badge fs-7 badge-light-primary">In
                                                Stock</span>
                                        </td>
                                        <!--end::Status-->
                                        <!--begin::Qty-->
                                        <td class="text-end" data-order="58">
                                            <span class="text-gray-900 fw-bold">58 PCS</span>
                                        </td>
                                        <!--end::Qty-->
                                    </tr>
                                    <tr>
                                        <!--begin::Item-->
                                        <td>
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-900 text-hover-primary">Surface
                                                Laptop 4</a>
                                        </td>
                                        <!--end::Item-->
                                        <!--begin::Product ID-->
                                        <td class="text-end">#YHD-047</td>
                                        <!--end::Product ID-->
                                        <!--begin::Date added-->
                                        <td class="text-end">01 Apr, 2024</td>
                                        <!--end::Date added-->
                                        <!--begin::Price-->
                                        <td class="text-end">$1,060</td>
                                        <!--end::Price-->
                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="px-4 py-3 badge fs-7 badge-light-danger">Out
                                                of Stock</span>
                                        </td>
                                        <!--end::Status-->
                                        <!--begin::Qty-->
                                        <td class="text-end" data-order="0">
                                            <span class="text-gray-900 fw-bold">0 PCS</span>
                                        </td>
                                        <!--end::Qty-->
                                    </tr>
                                    <tr>
                                        <!--begin::Item-->
                                        <td>
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-900 text-hover-primary">Logitech MX
                                                250</a>
                                        </td>
                                        <!--end::Item-->
                                        <!--begin::Product ID-->
                                        <td class="text-end">#SRR-678</td>
                                        <!--end::Product ID-->
                                        <!--begin::Date added-->
                                        <td class="text-end">24 Mar, 2024</td>
                                        <!--end::Date added-->
                                        <!--begin::Price-->
                                        <td class="text-end">$64</td>
                                        <!--end::Price-->
                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="px-4 py-3 badge fs-7 badge-light-primary">In
                                                Stock</span>
                                        </td>
                                        <!--end::Status-->
                                        <!--begin::Qty-->
                                        <td class="text-end" data-order="290">
                                            <span class="text-gray-900 fw-bold">290 PCS</span>
                                        </td>
                                        <!--end::Qty-->
                                    </tr>
                                    <tr>
                                        <!--begin::Item-->
                                        <td>
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-900 text-hover-primary">AudioEngine
                                                HD3</a>
                                        </td>
                                        <!--end::Item-->
                                        <!--begin::Product ID-->
                                        <td class="text-end">#PXF-578</td>
                                        <!--end::Product ID-->
                                        <!--begin::Date added-->
                                        <td class="text-end">24 Mar, 2024</td>
                                        <!--end::Date added-->
                                        <!--begin::Price-->
                                        <td class="text-end">$1,060</td>
                                        <!--end::Price-->
                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="px-4 py-3 badge fs-7 badge-light-danger">Out
                                                of Stock</span>
                                        </td>
                                        <!--end::Status-->
                                        <!--begin::Qty-->
                                        <td class="text-end" data-order="46">
                                            <span class="text-gray-900 fw-bold">46 PCS</span>
                                        </td>
                                        <!--end::Qty-->
                                    </tr>
                                    <tr>
                                        <!--begin::Item-->
                                        <td>
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-900 text-hover-primary">HP Hyper
                                                LTR</a>
                                        </td>
                                        <!--end::Item-->
                                        <!--begin::Product ID-->
                                        <td class="text-end">#PXF-778</td>
                                        <!--end::Product ID-->
                                        <!--begin::Date added-->
                                        <td class="text-end">16 Jan, 2024</td>
                                        <!--end::Date added-->
                                        <!--begin::Price-->
                                        <td class="text-end">$4500</td>
                                        <!--end::Price-->
                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="px-4 py-3 badge fs-7 badge-light-primary">In
                                                Stock</span>
                                        </td>
                                        <!--end::Status-->
                                        <!--begin::Qty-->
                                        <td class="text-end" data-order="78">
                                            <span class="text-gray-900 fw-bold">78 PCS</span>
                                        </td>
                                        <!--end::Qty-->
                                    </tr>
                                    <tr>
                                        <!--begin::Item-->
                                        <td>
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-900 text-hover-primary">Dell 32
                                                UltraSharp</a>
                                        </td>
                                        <!--end::Item-->
                                        <!--begin::Product ID-->
                                        <td class="text-end">#XGY-356</td>
                                        <!--end::Product ID-->
                                        <!--begin::Date added-->
                                        <td class="text-end">22 Dec, 2024</td>
                                        <!--end::Date added-->
                                        <!--begin::Price-->
                                        <td class="text-end">$1,060</td>
                                        <!--end::Price-->
                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="px-4 py-3 badge fs-7 badge-light-warning">Low
                                                Stock</span>
                                        </td>
                                        <!--end::Status-->
                                        <!--begin::Qty-->
                                        <td class="text-end" data-order="8">
                                            <span class="text-gray-900 fw-bold">8 PCS</span>
                                        </td>
                                        <!--end::Qty-->
                                    </tr>
                                    <tr>
                                        <!--begin::Item-->
                                        <td>
                                            <a href="apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-900 text-hover-primary">Google
                                                Pixel 6 Pro</a>
                                        </td>
                                        <!--end::Item-->
                                        <!--begin::Product ID-->
                                        <td class="text-end">#XVR-425</td>
                                        <!--end::Product ID-->
                                        <!--begin::Date added-->
                                        <td class="text-end">27 Dec, 2024</td>
                                        <!--end::Date added-->
                                        <!--begin::Price-->
                                        <td class="text-end">$1,060</td>
                                        <!--end::Price-->
                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="px-4 py-3 badge fs-7 badge-light-primary">In
                                                Stock</span>
                                        </td>
                                        <!--end::Status-->
                                        <!--begin::Qty-->
                                        <td class="text-end" data-order="124">
                                            <span class="text-gray-900 fw-bold">124 PCS</span>
                                        </td>
                                        <!--end::Qty-->
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Table Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row--> --}}
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>

@endsection

@push('script')
<script type="text/javascript">
    $(document).ready(function () {

    // Event ketika modal dibuka
    $('#kt_modal_lapor').on('show.bs.modal', function (e) {
        let nim = $(this).data('nim'); // Ambil NIM dari atribut modal
        let modal = $(this);

        // Bersihkan modal
        modal.find('#keterangan').val('');
        modal.find('.alert').remove(); // Hapus pesan sebelumnya

        // AJAX untuk fetch data
        $.ajax({
            url: '/konfirmasi/fetch',
            method: 'GET',
            data: { nim: nim },
            success: function (response) {
                if (response.success && response.data) {
                    modal.find('#keterangan').val(response.data.keterangan);
                    // Jika statusnya 1, nonaktifkan tombol simpan dan tampilkan pesan
                    if (response.data.status == 1) {
                        modal.find('#keterangan').prop('disabled', true); // Disable input keterangan
                        modal.find('#kt_modal_lapor_submit').prop('disabled', true).hide(); // Sembunyikan tombol
                        Swal.fire({
                            text: 'Laporan Anda sudah dikonfirmasi.',
                            icon: 'info',
                        });
                    }
                }
            },
            error: function () {
                let pesan = 'Gagal memuat data, coba lagi.';
                Swal.fire({
                        text: pesan,
                        icon: 'error',
                    });
            }
        });
    });

    // Event ketika tombol submit ditekan
    $('#kt_modal_lapor_submit').click(function () {
        let nim = $('#kt_modal_lapor').data('nim');
        let keterangan = $('#keterangan').val();
        let modal = $('#kt_modal_lapor');

        // AJAX untuk simpan data
        $.ajax({
            url: '/konfirmasi/simpan',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                nim: nim,
                keterangan: keterangan
            },
            beforeSend: function () {
                modal.find('.alert').remove(); // Hapus pesan sebelumnya
                $('#kt_modal_lapor_submit .indicator-progress').show();
            },
            success: function (response) {
                if (response.status === 'success') {
                    Swal.fire({
                        text: response.message,
                        icon: 'success',
                    });
                    $('#kt_modal_lapor').modal('hide'); // Tutup modal
                }
            },
            error: function (xhr) {
                let errors = xhr.responseJSON.errors;
                if (errors) {
                    let errorMessages = '';
                    for (let key in errors) {
                        errorMessages += `<div class="alert alert-danger">${errors[key]}</div>`;
                    }
                    $('#kt_modal_lapor .modal-body').prepend(errorMessages); // Tampilkan pesan di modal
                }
                // let errors = xhr.responseJSON.errors;
                // if (errors) {
                //     for (let key in errors) {
                //         modal.find('.modal-body').prepend(`
                //             <div class="alert alert-danger">${errors[key]}</div>
                //         `);
                //     }
                // } else {
                //     alert('Terjadi kesalahan, silakan coba lagi.');
                // }
            },
            complete: function () {
                $('#kt_modal_lapor_submit .indicator-progress').hide();
            }
        });
    });

    // Tombol batal untuk menutup modal
    $('#kt_modal_lapor_cancel').click(function () {
        $('#kt_modal_lapor').modal('hide');
    });
});

</script>
@endpush
