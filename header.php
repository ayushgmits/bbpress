<!doctype html>
<html lang="en" class="theme-fs-sm" data-bs-theme="light" data-bs-theme-color="default" dir="ltr" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-setting="app_name" data-rightJoin=" Responsive Bootstrap 5 Admin Dashboard Template">Lacabana Responsive
        Bootstrap 5 Admin Dashboard Template</title>
    <meta name="description"
        content="Lacabana is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, template, bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard,">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Lacabana Responsive Bootstrap 5 Admin Dashboard Template">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo MD_PATH; ?>/assets/images/favicon.png">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="<?php echo MD_PATH; ?>/assets/css/core/libs.min.css">

    <link rel="stylesheet" href="<?php echo MD_PATH; ?>/assets/vendor/sheperd/dist/css/sheperd.css">

    <!-- Flatpickr css -->
    <link rel="stylesheet" href="<?php echo MD_PATH; ?>/assets/vendor/flatpickr/dist/flatpickr.min.css">

    <!-- qompac-ui Design System Css -->
    <link rel="stylesheet" href="<?php echo MD_PATH; ?>/assets/css/qompac-ui.min.css?v=2.0.0">

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo MD_PATH; ?>/assets/css/custom.min.css?v=2.0.0">

    <!-- RTL Css -->
    <link rel="stylesheet" href="<?php echo MD_PATH; ?>/assets/css/rtl.min.css?v=2.0.0">

    <!-- Customizer Css -->

    <link rel="stylesheet" href="<?php echo MD_PATH; ?>/assets/vendor/swiperSlider/swiper-bundle.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <?php get_sidebar(); ?>
    <main class="main-content">
        <div class="position-relative ">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar">
                <div class="container-fluid navbar-inner">
                    <a href="./index.html" class="navbar-brand">

                        <!--Logo start-->
                        <div class="logo-main">
                            <div class="logo-normal">
                                <img src="<?php echo MD_PATH; ?>/assets/images/logo.svg" alt="logo" class="img-fluid">
                            </div>
                            <div class="logo-mini">
                                <img src="<?php echo MD_PATH; ?>/assets/images/logo-small.svg" alt="logo-small" class="img-fluid">
                            </div>
                        </div>
                        <!--logo End-->
                    </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon d-flex">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </i>
                    </div>
                    <div class="d-flex align-items-center justify-content-between product-offcanvas d-xl-flex d-none">
                        <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1"
                            id="offcanvasBottom">
                            <div class="offcanvas-body">
                                <div class="search-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-text">
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="14" height="14">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0.333374 0.333496H13.3179V13.3182H0.333374V0.333496Z"
                                                        fill="white" />
                                                </mask>
                                                <g>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.82592 1.3335C3.79725 1.3335 1.33325 3.79683 1.33325 6.8255C1.33325 9.85416 3.79725 12.3182 6.82592 12.3182C9.85392 12.3182 12.3179 9.85416 12.3179 6.8255C12.3179 3.79683 9.85392 1.3335 6.82592 1.3335ZM6.82592 13.3182C3.24592 13.3182 0.333252 10.4055 0.333252 6.8255C0.333252 3.2455 3.24592 0.333496 6.82592 0.333496C10.4059 0.333496 13.3179 3.2455 13.3179 6.8255C13.3179 10.4055 10.4059 13.3182 6.82592 13.3182Z"
                                                        fill="currentColor" />
                                                </g>
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="10" y="10"
                                                    width="4" height="5">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.4933 10.8047H13.8427V14.1479H10.4933V10.8047Z"
                                                        fill="white" />
                                                </mask>
                                                <g>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.3428 14.1479C13.2155 14.1479 13.0875 14.0992 12.9895 14.0019L10.6401 11.6592C10.4448 11.4639 10.4441 11.1472 10.6395 10.9519C10.8341 10.7552 11.1508 10.7565 11.3468 10.9505L13.6961 13.2939C13.8915 13.4892 13.8921 13.8052 13.6968 14.0005C13.5995 14.0992 13.4708 14.1479 13.3428 14.1479Z"
                                                        fill="currentColor" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <span class="navbar-toggler-bar bar1 mt-1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0 ">
                            <li class="nav-item dropdown d-xl-none">
                                <a href="#" class="nav-link" id="search-drop" data-bs-toggle="dropdown"
                                    aria-expanded="true">
                                    <svg width="20" height="20" class="icon-20" viewBox="0 0 14 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="14"
                                            height="14">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.333374 0.333496H13.3179V13.3182H0.333374V0.333496Z" fill="white">
                                            </path>
                                        </mask>
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.82592 1.3335C3.79725 1.3335 1.33325 3.79683 1.33325 6.8255C1.33325 9.85416 3.79725 12.3182 6.82592 12.3182C9.85392 12.3182 12.3179 9.85416 12.3179 6.8255C12.3179 3.79683 9.85392 1.3335 6.82592 1.3335ZM6.82592 13.3182C3.24592 13.3182 0.333252 10.4055 0.333252 6.8255C0.333252 3.2455 3.24592 0.333496 6.82592 0.333496C10.4059 0.333496 13.3179 3.2455 13.3179 6.8255C13.3179 10.4055 10.4059 13.3182 6.82592 13.3182Z"
                                                fill="currentColor"></path>
                                        </g>
                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="10" y="10" width="4"
                                            height="5">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.4933 10.8047H13.8427V14.1479H10.4933V10.8047Z" fill="white">
                                            </path>
                                        </mask>
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.3428 14.1479C13.2155 14.1479 13.0875 14.0992 12.9895 14.0019L10.6401 11.6592C10.4448 11.4639 10.4441 11.1472 10.6395 10.9519C10.8341 10.7552 11.1508 10.7565 11.3468 10.9505L13.6961 13.2939C13.8915 13.4892 13.8921 13.8052 13.6968 14.0005C13.5995 14.0992 13.4708 14.1479 13.3428 14.1479Z"
                                                fill="currentColor"></path>
                                        </g>
                                    </svg>
                                </a>
                                <div class="p-0 sub-drop dropdown-menu dropdown-menu-end shadow"
                                    aria-labelledby="search-drop" data-bs-popper="static">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="search-form">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="input-group-text">
                                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                                x="0" y="0" width="14" height="14">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M0.333374 0.333496H13.3179V13.3182H0.333374V0.333496Z"
                                                                    fill="white" />
                                                            </mask>
                                                            <g>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M6.82592 1.3335C3.79725 1.3335 1.33325 3.79683 1.33325 6.8255C1.33325 9.85416 3.79725 12.3182 6.82592 12.3182C9.85392 12.3182 12.3179 9.85416 12.3179 6.8255C12.3179 3.79683 9.85392 1.3335 6.82592 1.3335ZM6.82592 13.3182C3.24592 13.3182 0.333252 10.4055 0.333252 6.8255C0.333252 3.2455 3.24592 0.333496 6.82592 0.333496C10.4059 0.333496 13.3179 3.2455 13.3179 6.8255C13.3179 10.4055 10.4059 13.3182 6.82592 13.3182Z"
                                                                    fill="currentColor" />
                                                            </g>
                                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                                x="10" y="10" width="4" height="5">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M10.4933 10.8047H13.8427V14.1479H10.4933V10.8047Z"
                                                                    fill="white" />
                                                            </mask>
                                                            <g>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M13.3428 14.1479C13.2155 14.1479 13.0875 14.0992 12.9895 14.0019L10.6401 11.6592C10.4448 11.4639 10.4441 11.1472 10.6395 10.9519C10.8341 10.7552 11.1508 10.7565 11.3468 10.9505L13.6961 13.2939C13.8915 13.4892 13.8921 13.8052 13.6968 14.0005C13.5995 14.0992 13.4708 14.1479 13.3428 14.1479Z"
                                                                    fill="currentColor" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item theme-scheme-dropdown">
                                <a href="#" class="nav-link" id="mode-drop">
                                    <svg width="18" height="18" class="icon-24" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.92137 17.6998L6.47137 14.9569C6.22851 14.8712 5.96422 14.7462 5.67851 14.5819C5.39279 14.4177 5.14279 14.2498 4.92851 14.0784L2.37851 15.2569L0.25708 11.5284L2.61422 9.81409C2.58565 9.6998 2.56779 9.56409 2.56065 9.40695C2.55351 9.2498 2.54994 9.11409 2.54994 8.9998C2.54994 8.88552 2.55351 8.7498 2.56065 8.59266C2.56779 8.43552 2.58565 8.2998 2.61422 8.18552L0.25708 6.47123L2.37851 2.74266L4.94994 3.92123C5.14994 3.7498 5.39279 3.58552 5.67851 3.42838C5.96422 3.27123 6.22851 3.1498 6.47137 3.06409L6.92137 0.299805H11.0785L11.5285 3.04266C11.7714 3.14266 12.0392 3.26766 12.3321 3.41766C12.6249 3.56766 12.8714 3.73552 13.0714 3.92123L15.6428 2.74266L17.7428 6.47123L15.3857 8.14266C15.4142 8.27123 15.4321 8.41409 15.4392 8.57123C15.4464 8.72838 15.4499 8.87123 15.4499 8.9998C15.4499 9.12838 15.4464 9.26766 15.4392 9.41766C15.4321 9.56766 15.4142 9.70695 15.3857 9.83552L17.7428 11.5284L15.6214 15.2569L13.0499 14.0784C12.8499 14.2498 12.6107 14.4212 12.3321 14.5927C12.0535 14.7641 11.7857 14.8855 11.5285 14.9569L11.0785 17.6998H6.92137ZM8.99994 11.7855C9.77137 11.7855 10.4285 11.5141 10.9714 10.9712C11.5142 10.4284 11.7857 9.77123 11.7857 8.9998C11.7857 8.22838 11.5142 7.57123 10.9714 7.02838C10.4285 6.48552 9.77137 6.21409 8.99994 6.21409C8.22851 6.21409 7.57136 6.48552 7.02851 7.02838C6.48565 7.57123 6.21422 8.22838 6.21422 8.9998C6.21422 9.77123 6.48565 10.4284 7.02851 10.9712C7.57136 11.5141 8.22851 11.7855 8.99994 11.7855ZM8.99994 10.4998C8.57137 10.4998 8.21422 10.3534 7.92851 10.0605C7.64279 9.76766 7.49994 9.41409 7.49994 8.9998C7.49994 8.58552 7.64279 8.23195 7.92851 7.93909C8.21422 7.64623 8.57137 7.4998 8.99994 7.4998C9.41422 7.4998 9.76779 7.64623 10.0607 7.93909C10.3535 8.23195 10.4999 8.58552 10.4999 8.9998C10.4999 9.41409 10.3535 9.76766 10.0607 10.0605C9.76779 10.3534 9.41422 10.4998 8.99994 10.4998ZM8.09994 16.2427H9.89994L10.1999 13.8427C10.6714 13.7284 11.1214 13.5498 11.5499 13.3069C11.9785 13.0641 12.3642 12.7641 12.7071 12.4069L14.9785 13.3927L15.7928 11.9141L13.7785 10.4569C13.8357 10.2141 13.8857 9.97123 13.9285 9.72838C13.9714 9.48552 13.9928 9.24266 13.9928 8.9998C13.9928 8.75695 13.9749 8.51409 13.9392 8.27123C13.9035 8.02838 13.8499 7.78552 13.7785 7.54266L15.7928 6.08552L14.9785 4.60695L12.7071 5.59266C12.3785 5.20695 12.0035 4.88552 11.5821 4.62838C11.1607 4.37123 10.6999 4.21409 10.1999 4.15695L9.89994 1.75695H8.09994L7.79994 4.15695C7.31422 4.24266 6.85708 4.41052 6.42851 4.66052C5.99994 4.91052 5.61422 5.22123 5.27137 5.59266L3.02137 4.60695L2.20708 6.08552L4.19994 7.54266C4.14279 7.78552 4.09637 8.02838 4.06065 8.27123C4.02494 8.51409 4.00708 8.75695 4.00708 8.9998C4.00708 9.24266 4.02494 9.48552 4.06065 9.72838C4.09637 9.97123 4.14279 10.2141 4.19994 10.4569L2.20708 11.9141L3.02137 13.3927L5.27137 12.4069C5.62851 12.7641 6.02137 13.0641 6.44994 13.3069C6.87851 13.5498 7.32851 13.7284 7.79994 13.8427L8.09994 16.2427Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <ul class="list-unstyled dropdown-menu dropdown-content custom-drop-mode1">
                                    <li data-setting="radio">
                                        <div class="dropdown-item d-flex align-items-center">
                                            <input type="radio" value="light" class="btn-check" name="theme_scheme"
                                                id="color-mode-light">
                                            <label class="d-block" for="color-mode-light">
                                                <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="ms-3 mb-0">Light</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li data-setting="radio">
                                        <div class="dropdown-item d-flex align-items-center">
                                            <input type="radio" value="dark" class="btn-check" name="theme_scheme"
                                                id="color-mode-dark">
                                            <label class="d-block" for="color-mode-dark">
                                                <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="ms-3 mb-0">Dark</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li data-setting="radio">
                                        <div class="dropdown-item d-flex align-items-center">
                                            <input type="radio" value="auto" class="btn-check" name="theme_scheme"
                                                id="color-mode-auto" checked>
                                            <label class="d-block" for="color-mode-auto">
                                                <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="ms-3 mb-0">Auto</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="notification-drop" data-bs-toggle="dropdown">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.4"
                                            d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="bg-danger dots"></span>
                                </a>
                                <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end"
                                    aria-labelledby="notification-drop">
                                    <li class="p-0">
                                        <div
                                            class="p-3 card-header d-flex justify-content-between bg-primary rounded-top">
                                            <div class="header-title">
                                                <h5 class="mb-0 text-white">All Notifications</h5>
                                            </div>
                                        </div>
                                        <div class="p-0 card-body all-notification">
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                                        src="<?php echo MD_PATH; ?>/assets/images/shapes/01.png" alt="" loading="lazy">
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">95 MB</p>
                                                            <small class="float-end font-size-12">Just Now</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                                            src="<?php echo MD_PATH; ?>/assets/images/shapes/02.png" alt="" loading="lazy">
                                                    </div>
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">New customer is join</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Cyst Bni</p>
                                                            <small class="float-end font-size-12">5 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                                        src="<?php echo MD_PATH; ?>/assets/images/shapes/03.png" alt="" loading="lazy">
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">Two customer is left</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Cyst Bni</p>
                                                            <small class="float-end font-size-12">2 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                                        src="<?php echo MD_PATH; ?>/assets/images/shapes/04.png" alt="" loading="lazy">
                                                    <div class="w-100 ms-3">
                                                        <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Cyst Bni</p>
                                                            <small class="float-end font-size-12">3 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link d-flex align-items-center gap-1" id="langues-drop"
                                    data-bs-toggle="dropdown">
                                    <svg width="22" height="22" class="icon-24" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M11 19.25C15.5563 19.25 19.25 15.5563 19.25 11C19.25 6.44365 15.5563 2.75 11 2.75C6.44365 2.75 2.75 6.44365 2.75 11C2.75 15.5563 6.44365 19.25 11 19.25Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M7.5625 11.0001C7.5625 14.2193 8.70805 17.0948 10.5084 19.0344C10.571 19.1024 10.647 19.1567 10.7316 19.1939C10.8162 19.231 10.9076 19.2502 11 19.2502C11.0924 19.2502 11.1838 19.231 11.2684 19.1939C11.353 19.1567 11.429 19.1024 11.4916 19.0344C13.292 17.0948 14.4375 14.2193 14.4375 11.0001C14.4375 7.78089 13.292 4.90542 11.4916 2.96581C11.429 2.89778 11.353 2.84348 11.2684 2.80633C11.1838 2.76918 11.0924 2.75 11 2.75C10.9076 2.75 10.8162 2.76918 10.7316 2.80633C10.647 2.84348 10.571 2.89778 10.5084 2.96581C8.70805 4.90542 7.5625 7.78089 7.5625 11.0001Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M2.75 11H19.25" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="22" height="22" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>EN</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li data-setting="attribute">
                                        <div class="dropdown-item d-flex align-items-center">
                                            <input type="radio" value="ltr" class="btn-check"
                                                name="theme_scheme_direction" data-prop="dir"
                                                id="theme-scheme-direction-ltr" checked>
                                            <label class="d-block" for="theme-scheme-direction-ltr">
                                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.9702 19.757L15.3502 5.27201C15.1884 4.62224 14.8136 4.04541 14.2856 3.63359C13.7576 3.22177 13.1068 2.99871 12.4372 3.00001H11.5602C10.8911 2.99938 10.2411 3.22275 9.71368 3.63452C9.18629 4.04628 8.81191 4.62274 8.65022 5.27201L5.03022 19.757C4.9679 20.0135 5.00954 20.2843 5.14605 20.5102C5.28257 20.7362 5.50288 20.899 5.75895 20.9631C6.01502 21.0273 6.28606 20.9875 6.51297 20.8527C6.73988 20.7178 6.90424 20.4986 6.97022 20.243L8.28022 15H15.7202L17.0302 20.243C17.0962 20.4986 17.2606 20.7178 17.4875 20.8527C17.7144 20.9875 17.9854 21.0273 18.2415 20.9631C18.4976 20.899 18.7179 20.7362 18.8544 20.5102C18.9909 20.2843 19.0325 20.0135 18.9702 19.757V19.757ZM8.78022 13L10.5912 5.75801C10.6449 5.5414 10.7696 5.34903 10.9454 5.21163C11.1213 5.07423 11.3381 4.99972 11.5612 5.00001H12.4392C12.6624 4.99972 12.8792 5.07423 13.055 5.21163C13.2308 5.34903 13.3556 5.5414 13.4092 5.75801L15.2192 13H8.78022Z"
                                                        fill="currentColor" />
                                                </svg>
                                                <span class="ms-2 mb-0"> LTR </span>
                                            </label>

                                        </div>
                                    </li>
                                    <li data-setting="attribute">
                                        <div class="dropdown-item d-flex align-items-center">
                                            <input type="radio" value="rtl" class="btn-check"
                                                name="theme_scheme_direction" data-prop="dir"
                                                id="theme-scheme-direction-rtl">
                                            <label class=" d-block" for="theme-scheme-direction-rtl">
                                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 4C10.08 4 8.5 5.58 8.5 7.5C8.5 8.43 8.88 9.28 9.5 9.91C7.97 10.91 7 12.62 7 14.5C7 17.53 9.47 20 12.5 20C14.26 20 16 19.54 17.5 18.66L16.5 16.93C15.28 17.63 13.9 18 12.5 18C10.56 18 9 16.45 9 14.5C8.99823 13.7298 9.2513 12.9806 9.71978 12.3692C10.1883 11.7578 10.8458 11.3186 11.59 11.12L16.8 9.72L16.28 7.79L11.83 9C11.08 8.9 10.5 8.28 10.5 7.5C10.5 6.66 11.16 6 12 6C12.26 6 12.5 6.07 12.75 6.2L13.75 4.47C13.22 4.16 12.61 4 12 4Z"
                                                        fill="currentColor" />
                                                </svg>
                                                <span class="ms-2 mb-0"> RTL </span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="py-0 nav-link d-flex align-items-center ps-3" href="#" id="profile-setting"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="position-relative d-inline-block">
                                        <img src="<?php echo MD_PATH; ?>/assets/images/avatars/01.png" alt="User-Profile"
                                            class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <span
                                            class="position-absolute bottom-0 end-0 p-1 bg-success border border-3 border-white rounded-circle"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end custom-drop-mode2"
                                    aria-labelledby="profile-setting">
                                    <li><a class="dropdown-item" href="./app/user-profile.html">Profile</a></li>
                                    <li><a class="dropdown-item" href="./app/user-privacy-setting.html">Privacy
                                            Setting</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="./auth/sign-in.html">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--Nav End-->
        </div>