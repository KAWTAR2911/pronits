<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <!-- Scripts -->



=
</head>
<body>
<!-- BEGIN LOADER -->

<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        <ul class="navbar-item theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="/assets/logo/logo.svg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> PRONETS </a>
            </li>
        </ul>

        <ul class="navbar-item flex-row ml-md-0 ml-auto">
            <li class="nav-item align-self-center search-animated">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-search toggle-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                    </div>
                </form>
            </li>
        </ul>

        <ul class="navbar-item flex-row ml-md-auto">

            <li class="nav-item dropdown language-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://designreset.com/cork/ltr/demo4/assets/img/ca.png" class="flag-width" alt="flag">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="https://designreset.com/cork/ltr/demo4/assets/img/de.png"
                                                                                    class="flag-width" alt="flag"> <span
                        class="align-self-center">&nbsp;German</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="https://designreset.com/cork/ltr/demo4/assets/img/jp.png"
                                                                                    class="flag-width" alt="flag"> <span
                        class="align-self-center">&nbsp;Japanese</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="https://designreset.com/cork/ltr/demo4/assets/img/fr.png"
                                                                                    class="flag-width" alt="flag"> <span
                        class="align-self-center">&nbsp;French</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="https://designreset.com/cork/ltr/demo4/assets/img/ca.png"
                                                                                    class="flag-width" alt="flag"> <span
                        class="align-self-center">&nbsp;English</span></a>
                </div>
            </li>

            <li class="nav-item dropdown message-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                    <div class="">
                        <a class="dropdown-item">
                            <div class="">

                                <div class="media">
                                    <div class="user-img">
                                        <div class="avatar avatar-xl">
                                            <span class="avatar-title rounded-circle">KY</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h5 class="usr-name">Kara Young</h5>
                                            <p class="msg-title">ACCOUNT UPDATE</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="">
                                <div class="media">
                                    <div class="user-img">
                                        <img src="https://designreset.com/cork/ltr/demo4/assets/img/profile-16.jpeg" class="img-fluid mr-2" alt="avatar">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h5 class="usr-name">Daisy Anderson</h5>
                                            <p class="msg-title">ACCOUNT UPDATE</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="">

                                <div class="media">
                                    <div class="user-img">
                                        <div class="avatar avatar-xl">
                                            <span class="avatar-title rounded-circle">OG</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h5 class="usr-name">Oscar Garner</h5>
                                            <p class="msg-title">ACCOUNT UPDATE</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-bell">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    <span class="badge badge-success"></span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <div class="notification-scroll">

                        <div class="dropdown-item">
                            <div class="media server-log">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-server">
                                    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                    <line x1="6" y1="6" x2="6" y2="6"></line>
                                    <line x1="6" y1="18" x2="6" y2="18"></line>
                                </svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Server Rebooted</h6>
                                        <p class="">45 min ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-heart">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Licence Expiring Soon</h6>
                                        <p class="">8 hrs ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media file-upload">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Kelly Portfolio.pdf</h6>
                                        <p class="">670 kb</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-check">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="https://designreset.com/cork/ltr/demo4/assets/img/profile-16.jpeg" alt="avatar">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="">
                        <div class="dropdown-item">
                            <a class="" href="user_profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                Profile</a>
                        </div>
                        <div class="dropdown-item">
                            <a class="" href="apps_mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                </svg>
                                Inbox</a>
                        </div>
                        <div class="dropdown-item">
                            <a class="" href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-lock">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                                Lock Screen</a>
                        </div>
                        <div class="dropdown-item">
                            <a class="" href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                Sign Out</a>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN NAVBAR  -->
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </a>

        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Sales</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
        <ul class="navbar-nav flex-row ml-auto ">
            <li class="nav-item more-dropdown">
                <div class="dropdown  custom-dropdown-icon">
                    <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><span>Settings</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                        <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Settings</a>
                        <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                        <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                        <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                        <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories ps ps--active-y" id="accordionExample">
                <li class="menu">
                    <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle collapsed">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>Dashboard</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="submenu list-unstyled collapse" id="dashboard" data-parent="#accordionExample" style="">
                        <li class="active">
                            <a href="index.html"> Sales </a>
                        </li>
                        <li>
                            <a href="index2.html"> Analytics </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-cpu">
                                <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                <rect x="9" y="9" width="6" height="6"></rect>
                                <line x1="9" y1="1" x2="9" y2="4"></line>
                                <line x1="15" y1="1" x2="15" y2="4"></line>
                                <line x1="9" y1="20" x2="9" y2="23"></line>
                                <line x1="15" y1="20" x2="15" y2="23"></line>
                                <line x1="20" y1="9" x2="23" y2="9"></line>
                                <line x1="20" y1="14" x2="23" y2="14"></line>
                                <line x1="1" y1="9" x2="4" y2="9"></line>
                                <line x1="1" y1="14" x2="4" y2="14"></line>
                            </svg>
                            <span>Apps</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                        <li>
                            <a href="apps_chat.html"> Chat </a>
                        </li>
                        <li>
                            <a href="apps_mailbox.html"> Mailbox </a>
                        </li>
                        <li>
                            <a href="apps_todoList.html"> Todo List </a>
                        </li>
                        <li>
                            <a href="apps_notes.html"> Notes </a>
                        </li>
                        <li>
                            <a href="apps_scrumboard.html">Scrumboard</a>
                        </li>
                        <li>
                            <a href="apps_contacts.html"> Contacts </a>
                        </li>
                        <li>
                            <a href="#appInvoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                Invoice
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                            <ul class="collapse list-unstyled sub-submenu" id="appInvoice" data-parent="#app">
                                <li>
                                    <a href="apps_invoice-list.html"> List </a>
                                </li>
                                <li>
                                    <a href="apps_invoice-preview.html"> Preview </a>
                                </li>
                                <li>
                                    <a href="apps_invoice-add.html"> Add </a>
                                </li>
                                <li>
                                    <a href="apps_invoice-edit.html"> Edit </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="apps_calendar.html"> Calendar </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-box">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span>Components</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                        <li>
                            <a href="component_tabs.html"> Tabs </a>
                        </li>
                        <li>
                            <a href="component_accordion.html"> Accordions </a>
                        </li>
                        <li>
                            <a href="component_modal.html"> Modals </a>
                        </li>
                        <li>
                            <a href="component_cards.html"> Cards </a>
                        </li>
                        <li>
                            <a href="component_bootstrap_carousel.html">Carousel</a>
                        </li>
                        <li>
                            <a href="component_blockui.html"> Block UI </a>
                        </li>
                        <li>
                            <a href="component_countdown.html"> Countdown </a>
                        </li>
                        <li>
                            <a href="component_counter.html"> Counter </a>
                        </li>
                        <li>
                            <a href="component_sweetalert.html"> Sweet Alerts </a>
                        </li>
                        <li>
                            <a href="component_timeline.html"> Timeline </a>
                        </li>
                        <li>
                            <a href="component_snackbar.html"> Notifications </a>
                        </li>
                        <li>
                            <a href="component_session_timeout.html"> Session Timeout </a>
                        </li>
                        <li>
                            <a href="component_media_object.html"> Media Object </a>
                        </li>
                        <li>
                            <a href="component_list_group.html"> List Group </a>
                        </li>
                        <li>
                            <a href="component_pricing_table.html"> Pricing Tables </a>
                        </li>
                        <li>
                            <a href="component_lightbox.html"> Lightbox </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-zap">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                            </svg>
                            <span>Elements</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                        <li>
                            <a href="element_alerts.html"> Alerts </a>
                        </li>
                        <li>
                            <a href="element_avatar.html"> Avatar </a>
                        </li>
                        <li>
                            <a href="element_badges.html"> Badges </a>
                        </li>
                        <li>
                            <a href="element_breadcrumbs.html"> Breadcrumbs </a>
                        </li>
                        <li>
                            <a href="element_buttons.html"> Buttons </a>
                        </li>
                        <li>
                            <a href="element_buttons_group.html"> Button Groups </a>
                        </li>
                        <li>
                            <a href="element_color_library.html"> Color Library </a>
                        </li>
                        <li>
                            <a href="element_dropdown.html"> Dropdown </a>
                        </li>
                        <li>
                            <a href="element_infobox.html"> Infobox </a>
                        </li>
                        <li>
                            <a href="element_jumbotron.html"> Jumbotron </a>
                        </li>
                        <li>
                            <a href="element_loader.html"> Loader </a>
                        </li>
                        <li>
                            <a href="element_pagination.html"> Pagination </a>
                        </li>
                        <li>
                            <a href="element_popovers.html"> Popovers </a>
                        </li>
                        <li>
                            <a href="element_progress_bar.html"> Progress Bar </a>
                        </li>
                        <li>
                            <a href="element_search.html"> Search </a>
                        </li>
                        <li>
                            <a href="element_tooltips.html"> Tooltips </a>
                        </li>
                        <li>
                            <a href="element_treeview.html"> Treeview </a>
                        </li>
                        <li>
                            <a href="element_typography.html"> Typography </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="fonticons.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-target">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                            <span>Font Icons</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="widgets.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span>Widgets</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="table_basic.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-layout">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                <line x1="9" y1="21" x2="9" y2="9"></line>
                            </svg>
                            <span>Tables</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="#datatables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-layers">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                            <span>DataTables</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="datatables" data-parent="#accordionExample">
                        <li>
                            <a href="table_dt_basic.html"> Basic </a>
                        </li>
                        <li>
                            <a href="table_dt_striped_table.html"> Striped Table </a>
                        </li>
                        <li>
                            <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                        </li>
                        <li>
                            <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                        </li>
                        <li>
                            <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                        </li>
                        <li>
                            <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                        </li>
                        <li>
                            <a href="table_dt_custom.html"> Custom </a>
                        </li>
                        <li>
                            <a href="table_dt_range_search.html"> Range Search </a>
                        </li>
                        <li>
                            <a href="table_dt_html5.html"> HTML5 Export </a>
                        </li>
                        <li>
                            <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                        </li>
                        <li>
                            <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-clipboard">
                                <path
                                    d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span>Forms</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">
                        <li>
                            <a href="form_bootstrap_basic.html"> Basic </a>
                        </li>
                        <li>
                            <a href="form_input_group_basic.html"> Input Group </a>
                        </li>
                        <li>
                            <a href="form_layouts.html"> Layouts </a>
                        </li>
                        <li>
                            <a href="form_validation.html"> Validation </a>
                        </li>
                        <li>
                            <a href="form_input_mask.html"> Input Mask </a>
                        </li>
                        <li>
                            <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                        </li>
                        <li>
                            <a href="form_select2.html"> Select2 </a>
                        </li>
                        <li>
                            <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                        </li>
                        <li>
                            <a href="form_maxlength.html"> Maxlength </a>
                        </li>
                        <li>
                            <a href="form_checkbox_radio.html"> Checkbox &amp; Radio </a>
                        </li>
                        <li>
                            <a href="form_switches.html"> Switches </a>
                        </li>
                        <li>
                            <a href="form_wizard.html"> Wizards </a>
                        </li>
                        <li>
                            <a href="form_fileupload.html"> File Upload </a>
                        </li>
                        <li>
                            <a href="form_quill.html"> Quill Editor </a>
                        </li>
                        <li>
                            <a href="form_markdown.html"> Markdown Editor </a>
                        </li>
                        <li>
                            <a href="form_date_range_picker.html"> Date &amp; Range Picker </a>
                        </li>
                        <li>
                            <a href="form_clipboard.html"> Clipboard </a>
                        </li>
                        <li>
                            <a href="form_typeahead.html"> Typeahead </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span>Users</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                        <li>
                            <a href="user_profile.html"> Profile </a>
                        </li>
                        <li>
                            <a href="user_account_setting.html"> Account Settings </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-file">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            <span>Pages</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                        <li>
                            <a href="pages_helpdesk.html"> Helpdesk </a>
                        </li>
                        <li>
                            <a href="pages_contact_us.html"> Contact Form </a>
                        </li>
                        <li>
                            <a href="pages_faq.html"> FAQ </a>
                        </li>
                        <li>
                            <a href="pages_faq2.html"> FAQ 2 </a>
                        </li>
                        <li>
                            <a href="pages_privacy.html"> Privacy Policy </a>
                        </li>
                        <li>
                            <a href="pages_coming_soon.html" target="_blank"> Coming Soon </a>
                        </li>
                        <li>
                            <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                Error
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                            <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages">
                                <li>
                                    <a href="pages_error404.html" target="_blank"> 404 </a>
                                </li>
                                <li>
                                    <a href="pages_error500.html" target="_blank"> 500 </a>
                                </li>
                                <li>
                                    <a href="pages_error503.html" target="_blank"> 503 </a>
                                </li>
                                <li>
                                    <a href="pages_maintenence.html" target="_blank"> Maintanence </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-lock">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <span>Authentication</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="authentication" data-parent="#accordionExample">
                        <li>
                            <a href="auth_login_boxed.html" target="_blank"> Login Boxed </a>
                        </li>
                        <li>
                            <a href="auth_register_boxed.html" target="_blank"> Register Boxed </a>
                        </li>
                        <li>
                            <a href="auth_lockscreen_boxed.html" target="_blank"> Unlock Boxed </a>
                        </li>
                        <li>
                            <a href="auth_pass_recovery_boxed.html" target="_blank"> Recover ID Boxed </a>
                        </li>
                        <li>
                            <a href="auth_login.html" target="_blank"> Login Cover </a>
                        </li>
                        <li>
                            <a href="auth_register.html" target="_blank"> Register Cover </a>
                        </li>
                        <li>
                            <a href="auth_lockscreen.html" target="_blank"> Unlock Cover </a>
                        </li>
                        <li>
                            <a href="auth_pass_recovery.html" target="_blank"> Recover ID Cover </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="dragndrop_dragula.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-move">
                                <polyline points="5 9 2 12 5 15"></polyline>
                                <polyline points="9 5 12 2 15 5"></polyline>
                                <polyline points="15 19 12 22 9 19"></polyline>
                                <polyline points="19 9 22 12 19 15"></polyline>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <line x1="12" y1="2" x2="12" y2="22"></line>
                            </svg>
                            <span>Drag and Drop</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="map_jvector.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-map">
                                <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                <line x1="8" y1="2" x2="8" y2="18"></line>
                                <line x1="16" y1="6" x2="16" y2="22"></line>
                            </svg>
                            <span>Maps</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="charts_apex.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-pie-chart">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg>
                            <span>Charts</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-terminal">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                            <span>Starter Kit</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#accordionExample">
                        <li>
                            <a href="starter_kit_blank_page.html"> Blank Page </a>
                        </li>
                        <li>
                            <a href="starter_kit_breadcrumbs.html"> Breadcrumbs </a>
                        </li>
                        <li>
                            <a href="starter_kit_boxed.html"> Boxed </a>
                        </li>
                        <li>
                            <a href="starter_kit_alt_menu.html"> Alternate Menu </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a target="_blank" href="../../documentation/index.html" aria-expanded="false"
                       class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-book">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                            <span>Documentation</span>
                        </div>
                    </a>
                </li>

                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 520px; right: -4px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div>
                </div>
            </ul>

        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">


                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-three">
                        <div class="widget-heading">
                            <h5 class="">Summary</h5>

                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask"
                                         style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="widget-content">

                            <div class="order-summary">

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-shopping-bag">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Income</h6>
                                            <p class="summary-count">$92,600</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-secondary" role="progressbar"
                                                     style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                                            <path
                                                d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                            <line x1="7" y1="7" x2="7" y2="7"></line>
                                        </svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Profit</h6>
                                            <p class="summary-count">$37,515</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar"
                                                     style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-credit-card">
                                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                            <line x1="1" y1="10" x2="23" y2="10"></line>
                                        </svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Expenses</h6>
                                            <p class="summary-count">$55,085</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar"
                                                     style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-one">
                        <div class="widget-heading">
                            <h5 class="">Transactions</h5>
                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask"
                                         style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content">

                            <div class="transactions-list t-info">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">SP</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Shaun Park</h4>
                                            <p class="meta-date">10 Jan 1:00PM</p>
                                        </div>
                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+$36.11</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Electricity Bill</h4>
                                            <p class="meta-date">04 Jan 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>-$16.44</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">AD</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Amy Diaz</h4>
                                            <p class="meta-date">31 Jan 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+$66.44</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list t-secondary">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Netflix</h4>
                                            <p class="meta-date">02 Feb 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>-$32.00</span></p>
                                    </div>
                                </div>
                            </div>


                            <div class="transactions-list t-info">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">DA</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Daisy Anderson</h4>
                                            <p class="meta-date">15 Feb 1:00PM</p>
                                        </div>
                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+$10.08</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">OG</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Oscar Garner</h4>
                                            <p class="meta-date">20 Feb 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>-$22.00</span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-activity-four">

                        <div class="widget-heading">
                            <h5 class="">Recent Activities</h5>
                        </div>

                        <div class="widget-content">

                            <div class="mt-container mx-auto ps ps--active-y">
                                <div class="timeline-line">

                                    <div class="item-timeline timeline-primary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p><span>Updated</span> Server Logs</p>
                                            <span class="badge">Pending</span>
                                            <p class="t-time">Just Now</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a
                                                href="javascript:void(0);">Admin</a></p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">2 min ago</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-danger">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Backup <span>Files EOD</span></p>
                                            <span class="badge">Pending</span>
                                            <p class="t-time">14:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">16:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.
                                            </p>
                                            <span class="badge">In progress</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-secondary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Rebooted Server</p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Send contract details to Freelancer</p>
                                            <span class="badge">Pending</span>
                                            <p class="t-time">18:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Kelly want to increase the time of the project.</p>
                                            <span class="badge">In Progress</span>
                                            <p class="t-time">19:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Server down for maintanence</p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">19:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-secondary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Malicious link detected</p>
                                            <span class="badge">Block</span>
                                            <p class="t-time">20:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Rebooted Server</p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">23:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-primary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p><span>Updated</span> Server Logs</p>
                                            <span class="badge">Pending</span>
                                            <p class="t-time">Just Now</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a
                                                href="javascript:void(0);">Admin</a></p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">2 min ago</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-danger">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Backup <span>Files EOD</span></p>
                                            <span class="badge">Pending</span>
                                            <p class="t-time">14:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                            <span class="badge">Completed</span>
                                            <p class="t-time">16:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.
                                            </p>
                                            <span class="badge">In progress</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: -320px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 320px; height: 326px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 162px; height: 164px;"></div>
                                </div>
                            </div>

                            <div class="tm-action-btn">
                                <button class="btn"><span>View All</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All
                    rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>


<svg id="SvgjsSvg1226" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
     style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1227"></defs>SS
    <polyline id="SvgjsPolyline1228" points="0,0"></polyline>
    <path id="SvgjsPath1229"
          d="M-1 626.0342857142857L-1 626.0342857142857C-1 626.0342857142857 54.03835227272727 626.0342857142857 54.03835227272727 626.0342857142857C54.03835227272727 626.0342857142857 108.07670454545455 626.0342857142857 108.07670454545455 626.0342857142857C108.07670454545455 626.0342857142857 162.1150568181818 626.0342857142857 162.1150568181818 626.0342857142857C162.1150568181818 626.0342857142857 216.1534090909091 626.0342857142857 216.1534090909091 626.0342857142857C216.1534090909091 626.0342857142857 270.1917613636364 626.0342857142857 270.1917613636364 626.0342857142857C270.1917613636364 626.0342857142857 324.2301136363636 626.0342857142857 324.2301136363636 626.0342857142857C324.2301136363636 626.0342857142857 378.2684659090909 626.0342857142857 378.2684659090909 626.0342857142857C378.2684659090909 626.0342857142857 432.3068181818182 626.0342857142857 432.3068181818182 626.0342857142857C432.3068181818182 626.0342857142857 486.34517045454544 626.0342857142857 486.34517045454544 626.0342857142857C486.34517045454544 626.0342857142857 540.3835227272727 626.0342857142857 540.3835227272727 626.0342857142857C540.3835227272727 626.0342857142857 594.421875 626.0342857142857 594.421875 626.0342857142857C594.421875 626.0342857142857 594.421875 626.0342857142857 594.421875 626.0342857142857 "></path>
</svg>
<script src="https://designreset.com/cork/ltr/demo4/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="https://designreset.com/cork/ltr/demo4/bootstrap/js/popper.min.js"></script>
<script src="https://designreset.com/cork/ltr/demo4/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
