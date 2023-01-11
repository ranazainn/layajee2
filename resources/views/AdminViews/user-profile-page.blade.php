<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>User Profile Page | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/user-profile-page.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
          <div class="nav-wrapper">
            <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
              <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize">
            </div>
            <ul class="navbar-list right">
              <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
              <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
              <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
              <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
              <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
            </ul>
            <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown">
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-gb"></i> English</a></li>
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-fr"></i> French</a></li>
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-cn"></i> Chinese</a></li>
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-de"></i> German</a></li>
            </ul>
            <!-- notifications-dropdown-->
            <ul class="dropdown-content" id="notifications-dropdown">
              <li>
                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
              </li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
              <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
              <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>
              <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> Logout</a></li>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input class="search-box-sm" type="search" required="">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>
    <!-- END: Header-->



    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img src="../../../app-assets/images/logo/materialize-logo-color.png" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Dashboard</span><span class="badge badge pill orange float-right mr-10">3</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="dashboard-modern.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modern</span></a>
              </li>
              <li><a class="collapsible-body" href="dashboard-ecommerce.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>eCommerce</span></a>
              </li>
              <li><a class="collapsible-body" href="dashboard-analytics.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Analytics</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="">Templates</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Vertical</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a class="collapsible-body" href="../vertical-modern-menu-template/" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modern  Menu</span></a>
                    </li>
                    <li><a class="collapsible-body" href="../vertical-menu-nav-dark-template/" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Navbar Dark</span></a>
                    </li>
                    <li><a class="collapsible-body" href="../vertical-gradient-menu-template/" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Gradient Menu</span></a>
                    </li>
                    <li><a class="collapsible-body" href="../vertical-dark-menu-template/" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Dark Menu</span></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Horizontal</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a class="collapsible-body" href="../horizontal-menu-template/" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Horizontal Menu</span></a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Applications</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-email.html"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">Mail</span><span class="badge new badge pill pink accent-2 float-right mr-10">5</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-chat.html"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="">Chat</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-todo.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="">ToDo</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-contacts.html"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Contacts</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-calendar.html"><i class="material-icons">today</i><span class="menu-title" data-i18n="">Calendar</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="">eCommerce</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="eCommerce-products-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-pricing.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-invoice.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Pages</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="page-contact.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Contact</span></a>
              </li>
              <li><a class="collapsible-body" href="page-blog-list.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Blog</span></a>
              </li>
              <li><a class="collapsible-body" href="page-search.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Search</span></a>
              </li>
              <li><a class="collapsible-body" href="page-knowledge.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Knowledge</span></a>
              </li>
              <li><a class="collapsible-body" href="page-faq.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>FAQs</span></a>
              </li>
              <li><a class="collapsible-body" href="page-blank.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Page Blank</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">crop_original</i><span class="menu-title" data-i18n="">Medias</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="media-gallery-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Gallery Page</span></a>
              </li>
              <li><a class="collapsible-body" href="media-hover-effects.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media Hover Effects</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">face</i><span class="menu-title" data-i18n="">User</span><span class="badge badge pill purple float-right mr-10">10</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="active"><a class="collapsible-body active" href="user-profile-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>User Profile</span></a>
              </li>
              <li><a class="collapsible-body" href="user-login.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Login</span></a>
              </li>
              <li><a class="collapsible-body" href="user-register.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Register</span></a>
              </li>
              <li><a class="collapsible-body" href="user-forgot-password.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Forgot Password</span></a>
              </li>
              <li><a class="collapsible-body" href="user-lock-screen.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Lock Screen</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">filter_tilt_shift</i><span class="menu-title" data-i18n="">Misc</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="page-404.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>404</span></a>
              </li>
              <li><a class="collapsible-body" href="page-maintenance.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Page Maintenanace</span></a>
              </li>
              <li><a class="collapsible-body" href="page-500.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>500</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">User Interface </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">cast</i><span class="menu-title" data-i18n="">Cards</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="cards-basic.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards</span></a>
              </li>
              <li><a class="collapsible-body" href="cards-advance.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards Advance</span></a>
              </li>
              <li><a class="collapsible-body" href="cards-extended.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards Extended</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">invert_colors</i><span class="menu-title" data-i18n="">CSS</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="css-typography.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Typograpy</span></a>
              </li>
              <li><a class="collapsible-body" href="css-color.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Color</span></a>
              </li>
              <li><a class="collapsible-body" href="css-grid.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Grid</span></a>
              </li>
              <li><a class="collapsible-body" href="css-helpers.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Helpers</span></a>
              </li>
              <li><a class="collapsible-body" href="css-media.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media</span></a>
              </li>
              <li><a class="collapsible-body" href="css-pulse.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pulse</span></a>
              </li>
              <li><a class="collapsible-body" href="css-sass.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sass</span></a>
              </li>
              <li><a class="collapsible-body" href="css-shadow.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Shadow</span></a>
              </li>
              <li><a class="collapsible-body" href="css-animations.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Animations</span></a>
              </li>
              <li><a class="collapsible-body" href="css-transitions.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Transitions</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="">Basic UI</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Buttons</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a class="collapsible-body" href="ui-basic-buttons.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Basic</span></a>
                    </li>
                    <li><a class="collapsible-body" href="ui-extended-buttons.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Extended</span></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a class="collapsible-body" href="ui-icons.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Icons</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-alerts.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Alerts</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-badges.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Badges</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-breadcrumbs.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Breadcrumbs</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-chips.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Chips</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-collections.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Collections</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-navbar.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Navbar</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-pagination.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pagination</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-preloader.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Preloader</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">settings_brightness</i><span class="menu-title" data-i18n="">Advanced UI</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="advance-ui-carousel.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Carousel</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-collapsibles.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Collapsibles</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-toasts.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Toasts</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-tooltip.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Tooltip</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-dropdown.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Dropdown</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-feature-discovery.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Discovery</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-media.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-modals.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modals</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-scrollspy.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Scrollspy</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-tabs.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Tabs</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-waves.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Waves</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">add_to_queue</i><span class="menu-title" data-i18n="">Extra Components</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="extra-components-range-slider.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Range Slider</span></a>
              </li>
              <li><a class="collapsible-body" href="extra-components-sweetalert.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sweetalert</span></a>
              </li>
              <li><a class="collapsible-body" href="extra-components-nestable.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Nestable</span></a>
              </li>
              <li><a class="collapsible-body" href="extra-components-translation.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Translation</span></a>
              </li>
              <li><a class="collapsible-body" href="extra-components-highlight.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Highlight</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Tables &amp; Forms </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="table-basic.html"><i class="material-icons">border_all</i><span class="menu-title" data-i18n="">Basic Tables</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="table-data-table.html"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="">Data Tables</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">chrome_reader_mode</i><span class="menu-title" data-i18n="">Forms</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="form-elements.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Elements</span></a>
              </li>
              <li><a class="collapsible-body" href="form-validation.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Validation</span></a>
              </li>
              <li><a class="collapsible-body" href="form-masks.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Masks</span></a>
              </li>
              <li><a class="collapsible-body" href="form-file-uploads.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>File Uploads</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="form-layouts.html"><i class="material-icons">image_aspect_ratio</i><span class="menu-title" data-i18n="">Form Layouts</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="form-wizard.html"><i class="material-icons">settings_ethernet</i><span class="menu-title" data-i18n="">Form Wizard</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Charts &amp; Maps </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="">Chart</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="charts-chartjs.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>ChartJS</span></a>
              </li>
              <li><a class="collapsible-body" href="charts-chartist.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Chartist</span></a>
              </li>
              <li><a class="collapsible-body" href="charts-sparklines.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sparkline Charts</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="">Menu levels</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Second level</span></a>
              </li>
              <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Second level child</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a class="collapsible-body" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Third level</span></a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="changelog.html"><i class="material-icons">track_changes</i><span class="menu-title" data-i18n="">Changelog</span><span class="badge badge pill light-blue float-right mr-10">5.1</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="../https://pixinvent.com/materialize-material-design-admin-template/documentation/index.html"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Documentation</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="">Support</span></a>
        </li>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">User Profile Page</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">User</a>
                  </li>
                  <li class="breadcrumb-item active">User Profile Page
                  </li>
                </ol>
              </div>
              <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                <ul class="dropdown-content" id="dropdown1" tabindex="0">
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                  <li class="divider" tabindex="-1"></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="row user-profile mt-1">
  <img class="responsive-img" alt="" src="../../../app-assets/images/gallery/profile-bg.png">
</div>
<div class="section" id="user-profile">
  <div class="row">
    <!-- User Profile Feed -->
    <div class="col s12 m4 l3 user-section-negative-margin">
      <div class="row">
        <div class="col s12 center-align">
          <img class="responsive-img circle z-depth-5" width="200" src="../../../app-assets/images/user/12.jpg" alt="">
          <br>
          <a class="waves-effect waves-light btn mt-5 border-radius-4"> Follow</a>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col s6">
          <h6>Follower</h6>
          <h5 class="m-0"><a href="#">540</a></h5>
        </div>
        <div class="col s6">
          <h6>Following</h6>
          <h5 class="m-0"><a href="#">128</a></h5>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col s12">
          <p class="m-0">Performance</p>
          <p class="m-0"><a href="#">56</a> and <a href="#">42</a> reviews</p>
        </div>
      </div>
      <hr>
      <div class="row user-projects">
        <h6 class="col s12">Projects</h6>
        <div class="col s4">
          <img class="responsive-img photo-border mt-10" alt="" src="../../../app-assets/images/gallery/35.png">
        </div>
        <div class="col s4">
          <img class="responsive-img photo-border mt-10" alt="" src="../../../app-assets/images/gallery/36.png">
        </div>
        <div class="col s4">
          <img class="responsive-img photo-border mt-10" alt="" src="../../../app-assets/images/gallery/37.png">
        </div>
        <div class="col s4">
          <img class="responsive-img photo-border mt-10" alt="" src="../../../app-assets/images/gallery/38.png">
        </div>
        <div class="col s4">
          <img class="responsive-img photo-border mt-10" alt="" src="../../../app-assets/images/gallery/39.png">
        </div>
        <div class="col s4">
          <img class="responsive-img photo-border mt-10" alt="" src="../../../app-assets/images/gallery/40.png">
        </div>
        <div class="col s4">
          <img class="responsive-img photo-border mt-10" alt="" src="../../../app-assets/images/gallery/41.png">
        </div>
        <div class="col s4">
          <img class="responsive-img photo-border mt-10" alt="" src="../../../app-assets/images/gallery/42.png">
        </div>
        <div class="col s4">
          <img class="responsive-img photo-border mt-10" alt="" src="../../../app-assets/images/gallery/43.png">
        </div>
      </div>
      <hr class="mt-5">
      <div class="row">
        <div class="col s12">
          <h6>Boosts</h6>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col s2 mt-2 pr-0 circle">
          <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/1.jpg" alt=""></a>
        </div>
        <div class="col s9">
          <a href="#">
            <p class="m-0">Micheal S. Castilleja</p>
          </a>
          <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
            <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
            <span class="material-icons star-width">star_rate</span></p>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col s2 mt-2 pr-0 circle">
          <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/11.jpg" alt=""></a>
        </div>
        <div class="col s9">
          <a href="#">
            <p class="m-0">Thomas A. Carranza</p>
          </a>
          <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
            <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
            <span class="material-icons star-width">star_rate</span></p>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col s2 mt-2 pr-0 circle">
          <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/5.jpg" alt=""></a>
        </div>
        <div class="col s9">
          <a href="#">
            <p class="m-0">Micheal Bryant</p>
          </a>
          <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
            <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
            <span class="material-icons star-width">star_rate</span></p>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col s2 mt-2 pr-0 circle pb-2">
          <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/8.jpg" alt=""></a>
        </div>
        <div class="col s9">
          <a href="#">
            <p class="m-0">Wiley J. Bryant</p>
          </a>
          <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
            <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
            <span class="material-icons star-width">star_rate</span></p>
        </div>
      </div>
    </div>
    <!-- User Post Feed -->
    <div class="col s12 m8 l6">
      <div class="row">
        <div class="card user-card-negative-margin z-depth-0" id="feed">
          <div class="card-content card-border-gray">
            <div class="row">
              <div class="col s12">
                <h5>Suzanne Martin</h5>
                <p>Senior Designer <span class="amber-text"><span class="material-icons star-width vertical-align-middle">star_rate</span>
                    <span class="material-icons star-width vertical-align-middle">star_rate</span> <span class="material-icons star-width vertical-align-middle">star_rate</span>
                    <span class="material-icons star-width vertical-align-middle">star_rate</span> <span class="material-icons star-width vertical-align-middle">star_rate</span></span></p>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <ul class="tabs card-border-gray mt-4">
                  <li class="tab col m3 s6 p-0"><a href="#test1">
                      <i class="material-icons vertical-align-middle">crop_portrait</i> Info
                    </a></li>
                  <li class="tab col m3 s6 p-0"><a class="active" href="#test2">
                      <i class="material-icons vertical-align-middle">bookmark_border</i> Feed
                    </a></li>
                  <li class="tab col m3 s6 p-0"><a href="#test3">
                      <i class="material-icons vertical-align-middle">date_range</i> Agenda
                    </a></li>
                  <li class="tab col m3 s6 p-0"><a href="#test4">
                      <i class="material-icons vertical-align-middle">attach_file</i> Resume
                    </a></li>
                </ul>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col s1 pr-0 circle">
                <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/12.jpg" alt=""></a>
              </div>
              <div class="col s11">
                <a href="#">
                  <p class="m-0">Suzanne Martin <span><i class="material-icons vertical-align-bottom">access_time</i> 1
                      days</span></p>
                </a>
                <div class="row">
                  <div class="col s12">
                    <div class="card card-border z-depth-2">
                      <div class="card-image">
                        <img src="../../../app-assets/images/gallery/post-1.png" alt="">
                      </div>
                      <div class="card-content">
                        <h6 class="font-weight-900 text-uppercase"><a href="#">Designing Services</a></h6>
                        <p>UI/UX & Graphics Design</p>
                      </div>
                    </div>
                    <div class="social-icon">
                      <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                      15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mt-5">
            <div class="row mt-5">
              <div class="col s1 pr-0 circle">
                <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/12.jpg" alt=""></a>
              </div>
              <div class="col s11">
                <a href="#">
                  <p class="m-0">Suzanne Martin <span><i class="material-icons vertical-align-bottom">access_time</i> 5
                      days</span></p>
                </a>
                <div class="row">
                  <div class="col s12">
                    <div class="card card-border z-depth-2">
                      <div class="card-image">
                        <img src="../../../app-assets/images/gallery/post-2.png" alt="">
                      </div>
                      <div class="card-content">
                        <h6 class="font-weight-900 text-uppercase"><a href="#">Australia office hours</a></h6>
                        <p>Working so hard</p>
                      </div>
                    </div>
                    <div class="social-icon">
                      <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                      15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mt-5">
            <div class="row mt-5">
              <div class="col s1 pr-0 circle">
                <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/7.jpg" alt=""></a>
              </div>
              <div class="col s11">
                <a href="#">
                  <p class="m-0">Luiza Ales <span><i class="material-icons vertical-align-bottom">access_time</i> 10
                      days</span></p>
                </a>
                <div class="row">
                  <div class="col s12">
                    <div class="card card-border z-depth-2">
                      <div class="card-content">
                        <div class="row">
                          <div class="col s2 pr-0 circle">
                            <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/1.jpg"
                                alt=""></a>
                          </div>
                          <div class="col s10">
                            <a href="#">
                              <h6>Mario Mendez</h6>
                            </a>
                            <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span
                                class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                              <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span></p>
                          </div>
                        </div>
                        <hr>
                        <h6 class="font-weight-900 text-uppercase"><a href="#">Senior Developer</a></h6>
                        <p>When I hear “Senior Developer” I think of someone who has mastered ... When looking at
                          software engineers I see 4 tiers of skills: Luminary, Senior.</p>
                      </div>
                    </div>
                    <div class="social-icon">
                      <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                      15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Today Highlight -->
    <div class="col s12 m12 l3 hide-on-med-and-down">
      <div class="row mt-5">
        <div class="col s12">
          <h6>Today Highlight</h6>
          <img class="responsive-img card-border z-depth-2 mt-2" src="../../../app-assets/images/gallery/post-3.png"
            alt="">
          <p><a href="#">Meeting with clients</a></p>
          <p>Crediting isn’t required, but is appreciated and allows photographers to gain exposure. Copy the text
            below or embed a credit badge</p>
        </div>
      </div>
      <hr class="mt-5">
      <div class="row">
        <div class="col s12">
          <h6>Who to follow</h6>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col s2 mt-2 pr-0 circle">
          <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/2.jpg" alt=""></a>
        </div>
        <div class="col s9">
          <a href="#">
            <p class="m-0">Frank Goodman</p>
          </a>
          <p class="m-0 grey-text lighten-3">Senior architect</p>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col s2 mt-2 pr-0 circle">
          <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/7.jpg" alt=""></a>
        </div>
        <div class="col s9">
          <a href="#">
            <p class="m-0">Luiza Ales</p>
          </a>
          <p class="m-0 grey-text lighten-3">Senior Developer</p>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col s2 mt-2 pr-0 circle">
          <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/4.jpg" alt=""></a>
        </div>
        <div class="col s9">
          <a href="#">
            <p class="m-0">Robbin Drummo</p>
          </a>
          <p class="m-0 grey-text lighten-3">Graphic Designer</p>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col s2 mt-2 pr-0 circle">
          <a href="#"><img class="responsive-img circle" src="../../../app-assets/images/user/8.jpg" alt=""></a>
        </div>
        <div class="col s9">
          <a href="#">
            <p class="m-0">Myles Steven</p>
          </a>
          <p class="m-0 grey-text lighten-3">Senior Developer</p>
        </div>
      </div>
      <hr class="mt-5">
      <div class="row">
        <div class="col s12">
          <h6>Latest Updates</h6>
          <p class="latest-update">Make Metronic<span class="right"> <a href="#">+480</a> </span></p>
          <p class="latest-update">Programming Language <span class="right"> <a href="#">+12</a> </span></p>
          <p class="latest-update">Project completed <span class="right"> <a href="#">+570</a> </span></p>
          <p class="latest-update">New Customer <span class="right"><a href="#">+120</a> </span></p>
          <p class="latest-update">Annual Companies<span class="right"> <a href="#">+890</a> </span></p>
        </div>
      </div>
    </div>
  </div>
</div><!-- START RIGHT SIDEBAR NAV -->
<aside id="right-sidebar-nav">
   <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
      <div class="row">
         <div class="slide-out-right-title">
            <div class="col s12 border-bottom-1 pb-0 pt-1">
               <div class="row">
                  <div class="col s2 pr-0 center">
                     <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                  </div>
                  <div class="col s10 pl-0">
                     <ul class="tabs">
                        <li class="tab col s4 p-0">
                           <a href="#messages" class="active">
                              <span>Messages</span>
                           </a>
                        </li>
                        <li class="tab col s4 p-0">
                           <a href="#settings">
                              <span>Settings</span>
                           </a>
                        </li>
                        <li class="tab col s4 p-0">
                           <a href="#activity">
                              <span>Activity</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-out-right-body">
            <div id="messages" class="col s12">
               <div class="collection border-none">
                  <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                  <ul class="collection p-0">
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Elizabeth Elliott</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                        </div>
                        <span class="secondary-content medium-small">5.00 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Mary Adams</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                        </div>
                        <span class="secondary-content medium-small">4.14 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Caleb Richards</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                        </div>
                        <span class="secondary-content medium-small">4.14 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Caleb Richards</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                        </div>
                        <span class="secondary-content medium-small">9.00 PM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">June Lane</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                        </div>
                        <span class="secondary-content medium-small">4.14 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Edward Fletcher</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                        </div>
                        <span class="secondary-content medium-small">5.15 PM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Crystal Bates</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                        </div>
                        <span class="secondary-content medium-small">8.00 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Nathan Watts</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                        </div>
                        <span class="secondary-content medium-small">9.53 PM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Willard Wood</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                        </div>
                        <span class="secondary-content medium-small">4.20 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Ronnie Ellis</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                        </div>
                        <span class="secondary-content medium-small">5.20 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Daniel Russell</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                        </div>
                        <span class="secondary-content medium-small">12.00 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-10.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Sarah Graves</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                        </div>
                        <span class="secondary-content medium-small">11.14 PM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Andrew Hoffman</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                        </div>
                        <span class="secondary-content medium-small">7.30 PM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-12.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Camila Lynch</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                        </div>
                        <span class="secondary-content medium-small">2.00 PM</span>
                     </li>
                  </ul>
               </div>
            </div>
            <div id="settings" class="col s12">
               <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
               <ul class="collection border-none">
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Notifications</span>
                        <div class="switch right">
                           <label>
                              <input checked type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Show recent activity</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Show recent activity</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Show Task statistics</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Show your emails</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Email Notifications</span>
                        <div class="switch right">
                           <label>
                              <input checked type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
               </ul>
               <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
               <ul class="collection border-none">
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>System Logs</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Error Reporting</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Applications Logs</span>
                        <div class="switch right">
                           <label>
                              <input checked type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Backup Servers</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Audit Logs</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div id="activity" class="col s12">
               <div class="activity">
                  <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                  <ul class="collection with-header">
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Homepage mockup design <span class="secondary-content">Just now</span>
                        </div>
                        <p class="mt-0 mb-2">Melissa liked your activity.</p>
                        <span class="new badge amber" data-badge-caption="Important"> </span>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Melissa liked your activity Drinks. <span class="secondary-content">10 mins</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        <span class="new badge light-green" data-badge-caption="Resolved"></span>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           12 new users registered <span class="secondary-content">30 mins</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Tina is attending your activity <span class="secondary-content">2 hrs</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Josh is now following you <span class="secondary-content">5 hrs</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        <span class="new badge red" data-badge-caption="Pending"></span>
                     </li>
                  </ul>
                  <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                  <ul class="collection with-header">
                     <li class="collection-item">
                        <div class="font-weight-900">
                           New order received urgent <span class="secondary-content">Just now</span>
                        </div>
                        <p class="mt-0 mb-2">Melissa liked your activity.</p>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">System shutdown. <span class="secondary-content">5 min</span></div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        <span class="new badge blue" data-badge-caption="Urgent"> </span>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Database overloaded 89% <span class="secondary-content">20 min</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                     </li>
                  </ul>
                  <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                  <ul class="collection with-header">
                     <li class="collection-item">
                        <div class="font-weight-900">System error <span class="secondary-content">10 min</span></div>
                        <p class="mt-0 mb-2">Melissa liked your activity.</p>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Production server down. <span class="secondary-content">1 hrs</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        <span class="new badge blue" data-badge-caption="Urgent"></span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Slide Out Chat -->
   <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
      <li class="center-align pt-2 pb-2 sidenav-close chat-head">
         <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
      </li>
      <li class="chat-body">
         <ul class="collection">
            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">hello!</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">How can we help? We're here for you!</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">I am looking for the best admin template.?</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
               </div>
            </li>

            <li class="collection-item display-grid width-100 center-align">
               <p>8:20 a.m.</p>
            </li>

            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">Ohh! very nice</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">Thank you.</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">How can I purchase it?</p>
               </div>
            </li>

            <li class="collection-item display-grid width-100 center-align">
               <p>9:00 a.m.</p>
            </li>

            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">From ThemeForest.</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">Only $24</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">Ohh! Thank you.</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">I will purchase it for sure.</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">Great, Feel free to get in touch on</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">https://pixinvent.ticksy.com/</p>
               </div>
            </li>
         </ul>
      </li>
      <li class="center-align chat-footer">
         <form class="col s12" onsubmit="slide_out_chat()" action="javascript:void(0);">
            <div class="input-field">
               <input id="icon_prefix" type="text" class="search" />
               <label for="icon_prefix">Type here..</label>
               <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
            </div>
         </form>
      </li>
   </ul>
</aside>
<!-- END RIGHT SIDEBAR NAV -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
    <ul>
        <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
        <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
        <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
        <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
    </ul>
</div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2019          <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>