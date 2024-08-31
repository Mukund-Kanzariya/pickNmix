<?php  

require '../../includes/init.php';

?>


<!doctype html>
<html lang="en">
<!-- [Head] start -->


<!-- Mirrored from html.phoenixcoded.net/light-able/bootstrap/pages/login-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 05:48:52 GMT -->

<head>
    <title>Login | Light Able Admin & Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective." />
    <meta name="author" content="phoenixcoded" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />
    <!-- [Google Font : Public Sans] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="<?= urlOf('assets/fonts/phosphor/duotone/style.css') ?>" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="<?= urlOf('assets/fonts/tabler-icons.min.css') ?>" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="<?= urlOf('assets/fonts/feather.css') ?>" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="<?= urlOf('assets/fonts/fontawesome.css') ?>" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="<?=  urlOf('assets/fonts/material.css') ?>" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="<?= urlOf('assets/css/style.css') ?>" id="main-style-link" />
    <link rel="stylesheet" href="<?= urlOf('assets/css/style-preset.css') ?>" />

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main v1">
        <div class="auth-wrapper">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= urlOf('assets/images/authentication/img-auth-register.png') ?>" alt="images"
                                class="img-fluid mb-3" />
                            <h4 class="f-w-500 mb-1">Register with your email</h4>
                            <p class="mb-3">Already have an Account? <a href="<?= urlOf('pages/authentication/login') ?>" class="link-primary">Log
                                    in</a></p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Last Name" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address" />
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="Phone number" />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Confirm Password" />
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input input-primary" type="checkbox" id="customCheckc1"
                                    checked="" />
                                <label class="form-check-label text-muted" for="customCheckc1">I agree to all the Terms
                                    & Condition</label>
                            </div>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="button" class="btn btn-primary">Create Account</button>
                        </div>
                        <div class="saprator my-3">
                            <span>Or continue with</span>
                        </div>
                        <div class="text-center">
                            <ul class="list-inline mx-auto mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/" class="avtar avtar-s rounded-circle bg-facebook"
                                        target="_blank">
                                        <i class="fab fa-facebook-f text-white"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://twitter.com/" class="avtar avtar-s rounded-circle bg-twitter"
                                        target="_blank">
                                        <i class="fab fa-twitter text-white"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://myaccount.google.com/"
                                        class="avtar avtar-s rounded-circle bg-googleplus" target="_blank">
                                        <i class="fab fa-google text-white"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="<?= urlOf('assets/js/plugins/popper.min.js') ?>"></script>
    <script src="<?= urlOf('assets/js/plugins/simplebar.min.js') ?>"></script>
    <script src="<?= urlOf('assets/js/plugins/bootstrap.min.js') ?>"></script>
    <script src="<?= urlOf('assets/js/fonts/custom-font.js') ?>"></script>
    <script src="<?= urlOf('assets/js/pcoded.js') ?>"></script>
    <script src="<?= urlOf('assets/js/plugins/feather.min.js') ?>"></script>


    <script>
    layout_change('light');
    </script>

    <script>
    layout_sidebar_change('light');
    </script>

    <script>
    change_box_container('false');
    </script>

    <script>
    layout_caption_change('true');
    </script>

    <script>
    layout_rtl_change('false');
    </script>

    <script>
    preset_change('preset-1');
    </script>

    <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
        <div class="offcanvas-header justify-content-between">
            <h5 class="offcanvas-title">Settings</h5>
            <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="ti ti-x"></i></button>
        </div>
        <div class="pct-body customizer-body">
            <div class="offcanvas-body py-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="pc-dark">
                            <h6 class="mb-1">Theme Mode</h6>
                            <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                            <div class="row theme-color theme-layout">
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn active" data-value="true"
                                            onclick="layout_change('light');">
                                            <span class="btn-label">Light</span>
                                            <span
                                                class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="false"
                                            onclick="layout_change('dark');">
                                            <span class="btn-label">Dark</span>
                                            <span
                                                class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="default"
                                            onclick="layout_change_default();" data-bs-toggle="tooltip"
                                            title="Automatically sets the theme based on user's operating system's color scheme.">
                                            <span class="btn-label">Default</span>
                                            <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                                                <i class="ph-duotone ph-cpu"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Sidebar Theme</h6>
                        <p class="text-muted text-sm">Choose Sidebar Theme</p>
                        <div class="row theme-color theme-sidebar-color">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                        onclick="layout_sidebar_change('dark');">
                                        <span class="btn-label">Dark</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                        onclick="layout_sidebar_change('light');">
                                        <span class="btn-label">Light</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Accent color</h6>
                        <p class="text-muted text-sm">Choose your primary theme color</p>
                        <div class="theme-color preset-color">
                            <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Sidebar Caption</h6>
                        <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                        <div class="row theme-color theme-nav-caption">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="true"
                                        onclick="layout_caption_change('true');">
                                        <span class="btn-label">Caption Show</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="false"
                                        onclick="layout_caption_change('false');">
                                        <span class="btn-label">Caption Hide</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="pc-rtl">
                            <h6 class="mb-1">Theme Layout</h6>
                            <p class="text-muted text-sm">LTR/RTL</p>
                            <div class="row theme-color theme-direction">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn active" data-value="false"
                                            onclick="layout_rtl_change('false');">
                                            <span class="btn-label">LTR</span>
                                            <span
                                                class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="true"
                                            onclick="layout_rtl_change('true');">
                                            <span class="btn-label">RTL</span>
                                            <span
                                                class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item pc-box-width">
                        <div class="pc-container-width">
                            <h6 class="mb-1">Layout Width</h6>
                            <p class="text-muted text-sm">Choose Full or Container Layout</p>
                            <div class="row theme-color theme-container">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn active" data-value="false"
                                            onclick="change_box_container('false')">
                                            <span class="btn-label">Full Width</span>
                                            <span
                                                class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="true"
                                            onclick="change_box_container('true')">
                                            <span class="btn-label">Fixed Width</span>
                                            <span
                                                class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-grid">
                            <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</body>
<!-- [Body] end -->

<!-- Mirrored from html.phoenixcoded.net/light-able/bootstrap/pages/register-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 05:49:17 GMT -->

</html>