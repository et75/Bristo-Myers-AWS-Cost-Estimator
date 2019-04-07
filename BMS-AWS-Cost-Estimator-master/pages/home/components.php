<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="../../assets/ui/assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="../../assets/ui/assets/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="../../assets/ui/assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="../../assets/ui/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../../assets/ui/assets/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->

    <link rel="stylesheet" href="../../assets/ui/assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="../../assets/ui/assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>

    <script>
      var colorScheme = ( localStorage.getItem('dashkitColorScheme') ) ? localStorage.getItem('dashkitColorScheme') : 'light';
    </script>


    <title>Dashkit</title>
  </head>
  <body>

    <!-- MODALS
    ================================================== -->

    <!-- Modal: Demo -->
    <div class="modal fade fixed-right" id="modalDemo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <form class="modal-content" id="demoForm">
          <div class="modal-body">

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <div class="text-center">
              <img src="../../assets/ui/assets/img/illustrations/designer-life.svg" alt="..." class="img-fluid mb-3">
            </div>

            <h2 class="text-center mb-2">
              Make Dashkit Your Own
            </h2>

            <p class="text-center mb-4">
              Set preferences that will be cookied for your live preview demonstration.
            </p>

            <hr class="mb-4">

            <h4 class="mb-1">
              Color Scheme
            </h4>

            <p class="small text-muted mb-3">
              Overall light or dark presentation.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="colorScheme" id="colorSchemeLight" value="light" checked> <i class="fe fe-sun mr-2"></i> Light Mode
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="colorScheme" id="colorSchemeDark" value="dark"> <i class="fe fe-moon mr-2"></i> Dark Mode
              </label>
            </div>

            <h4 class="mb-1">
              Navigation Position
            </h4>

            <p class="small text-muted mb-3">
              Select the primary navigation paradigm for your app.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="navPosition" id="navPositionSidenav" value="sidenav" checked> Sidenav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionTopnav" value="topnav"> Topnav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionCombo" value="combo"> Combo
              </label>
            </div>

            <h4 class="mb-1">
              Sidebar Color
            </h4>

            <p class="small text-muted mb-3">
              Usually dictated by the color scheme, but can be overriden.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="sidebarColor" id="sidebarColorDefault" value="default" checked> Default
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="sidebarColor" id="sidebarColorVibrant" value="vibrant"> Vibrant
              </label>
            </div>

          </div>
          <div class="modal-footer border-0">

            <button type="submit" class="btn btn-block btn-primary mt-auto">
              Preview
            </button>

          </div>
        </form>
      </div>
    </div>


    <!-- Modal: Members -->
    <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Add a member
                  </h4>

                </div>
                <div class="col-auto">

                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                </div>
              </div> <!-- / .row -->
            </div>
            <div class="card-header">

              <!-- Form -->
              <form>
                <div class="input-group input-group-flush input-group-merge">
                  <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-search"></span>
                    </div>
                  </div>
                </div>
              </form>

            </div>
            <div class="card-body">

              <!-- List group -->
              <ul class="list-group list-group-flush list my--3">
                <li class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Miyah Myles</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->

                </li>
                <li class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="../../assets/ui/assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Ryu Duke</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->

                </li>
                <li class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="../../assets/ui/assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Glen Rouse</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-warning">●</span> Busy
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->

                </li>
                <li class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="../../assets/ui/assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Grace Gross</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->

                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Search -->
    <div class="modal fade" id="sidebarModalSearch" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-body" data-toggle="lists" data-lists-values='["name"]'>

            <!-- Form -->
            <form class="mb-4">
              <div class="input-group input-group-merge">
                <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>

            <!-- List group -->
            <div class="my--3">
              <div class="list-group list-group-flush list">
                <a href="team-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="../../assets/ui/assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Airbnb
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                      </p>

                    </div>
                  </div> <!-- / .row -->
                </a>
                <a href="team-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="../../assets/ui/assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Medium Corporation
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                      </p>

                    </div>
                  </div> <!-- / .row -->
                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="../../assets/ui/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Homepage Redesign
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>

                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="../../assets/ui/assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Travels & Time
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>

                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="../../assets/ui/assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Safari Exploration
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>

                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="profile-posts.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Dianna Smiley
                      </h4>

                      <!-- Status -->
                      <p class="text-body small mb-0">
                        <span class="text-success">●</span> Online
                      </p>

                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="profile-posts.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Ab Hadley
                      </h4>

                      <!-- Status -->
                      <p class="text-body small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>

                    </div>
                  </div> <!-- / .row -->

                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Activity -->
    <div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <!-- Title -->
            <h4 class="modal-title">
              Notifications
            </h4>

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
            </button>

          </div>
          <div class="modal-body">

            <!-- List group -->
            <div class="list-group list-group-flush my--3">
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">

                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">

                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">

                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">

                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">

                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">

                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">

                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item px-0" href="#!">

                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">

                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Grace Gross</strong> subscribed to you.
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- NAVIGATION
    ================================================== -->

      <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="index.html">
            <img src="../../assets/ui/assets/img/logo.svg" class="navbar-brand-img
            mx-auto" alt="...">
          </a>

          <!-- User (xs) -->
          <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

              <!-- Toggle -->
              <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#sidebarDashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                  <i class="fe fe-home"></i> Dashboards
                </a>
                <div class="collapse " id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="index.html" class="nav-link ">
                        Default
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-alt.html" class="nav-link ">
                        Alternative <span class="badge badge-soft-success ml-auto">New</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                  <i class="fe fe-file"></i> Pages
                </a>
                <div class="collapse " id="sidebarPages">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="#sidebarProfile" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">
                        Profile
                      </a>
                      <div class="collapse " id="sidebarProfile">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="profile-posts.html" class="nav-link ">
                              Posts
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="profile-groups.html" class="nav-link ">
                              Groups
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="profile-projects.html" class="nav-link ">
                              Projects
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="profile-files.html" class="nav-link ">
                              Files
                            </a>
                          </li>
                            <li class="nav-item">
                            <a href="profile-subscribers.html" class="nav-link ">
                              Subscribers
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarProject" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProject">
                        Project
                      </a>
                      <div class="collapse " id="sidebarProject">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="project-overview.html" class="nav-link ">
                              Overview
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="project-files.html" class="nav-link ">
                              Files
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="project-reports.html" class="nav-link ">
                              Reports
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="project-new.html" class="nav-link ">
                              New project
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarTeam" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTeam">
                        Team
                      </a>
                      <div class="collapse " id="sidebarTeam">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="team-overview.html" class="nav-link ">
                              Overview
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="team-projects.html" class="nav-link ">
                              Projects
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="team-members.html" class="nav-link ">
                              Members
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="team-new.html" class="nav-link ">
                              New team
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="orders.html" class="nav-link ">
                        Orders
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="feed.html" class="nav-link ">
                        Feed
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="settings.html" class="nav-link ">
                        Settings
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="invoice.html" class="nav-link ">
                        Invoice
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pricing.html" class="nav-link ">
                        Pricing
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                  <i class="fe fe-user"></i> Authentication
                </a>
                <div class="collapse" id="sidebarAuth">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="#sidebarSignIn" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                        Sign in
                      </a>
                      <div class="collapse" id="sidebarSignIn">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="sign-in-cover.html" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-in-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-in.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarSignUp" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">
                        Sign up
                      </a>
                      <div class="collapse" id="sidebarSignUp">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="sign-up-cover.html" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-up-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-up.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarPassword" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPassword">
                        Password reset
                      </a>
                      <div class="collapse" id="sidebarPassword">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="password-reset-cover.html" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="password-reset-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="password-reset.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarError" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarError">
                        Error
                      </a>
                      <div class="collapse" id="sidebarError">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="error-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="error.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item d-md-none">
                <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                 <span class="fe fe-bell"></span> Notifications
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
              Documentation
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
              <li class="nav-item">
                <a class="nav-link " href="getting-started.html">
                  <i class="fe fe-clipboard"></i> Getting started
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                  <i class="fe fe-book-open"></i> Components
                </a>
                <div class="collapse " id="sidebarComponents">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="components.html#alerts" class="nav-link">
                        Alerts
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#avatars" class="nav-link">
                        Avatars
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#badges" class="nav-link">
                        Badges
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#breadcrumb" class="nav-link">
                        Breadcrumb
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#buttons" class="nav-link">
                        Buttons
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#button-group" class="nav-link">
                        Button group
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#cards" class="nav-link">
                        Cards
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#charts" class="nav-link">
                        Charts
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#dropdowns" class="nav-link">
                        Dropdowns
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#forms" class="nav-link">
                        Forms
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#icons" class="nav-link">
                        Icons
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#lists" class="nav-link">
                        Lists
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#loaders" class="nav-link">
                        Loaders
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#modal" class="nav-link">
                        Modal
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#navs" class="nav-link">
                        Navs
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#navbarExample" class="nav-link">
                        Navbar
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#page-headers" class="nav-link">
                        Page headers
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#pagination" class="nav-link">
                        Pagination
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#popovers" class="nav-link">
                        Popovers
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#progress" class="nav-link">
                        Progress
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#social-posts" class="nav-link">
                        Social post
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#tables" class="nav-link">
                        Tables
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#tooltips" class="nav-link">
                        Tooltips
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#typography" class="nav-link">
                        Typography
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#utilities" class="nav-link">
                        Utilities
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="changelog.html">
                  <i class="fe fe-git-branch"></i> Changelog <span class="badge badge-primary ml-auto">v1.3.0</span>
                </a>
              </li>
            </ul>

            <!-- Push content down -->
            <div class="mt-auto"></div>


            <!-- Customize -->
            <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
              <i class="fe fe-sliders mr-2"></i> Customize
            </a>



            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">

              <!-- Icon -->
              <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Dropup -->
              <div class="dropup">

                <!-- Toggle -->
                <a href="#!" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                  <a href="profile-posts.html" class="dropdown-item">Profile</a>
                  <a href="settings.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

              </div>

              <!-- Icon -->
              <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-search"></i>
                </span>
              </a>

            </div>


          </div> <!-- / .navbar-collapse -->

        </div>
      </nav>


      <nav class="navbar navbar-expand-lg navbar-light" id="topnav">
        <div class="container">

          <!-- Toggler -->
          <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand mr-auto" href="index.html">
            <img src="../../assets/ui/assets/img/logo.svg" alt="..." class="navbar-brand-img">
          </a>

          <!-- Form -->
          <form class="form-inline mr-4 d-none d-lg-flex">
            <div class="input-group input-group-rounded input-group-merge" data-toggle="lists" data-lists-values='["name"]'>

              <!-- Input -->
              <input type="search" class="form-control form-control-prepended  dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fe fe-search"></i>
                </div>
              </div>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-card">
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list my--3">
                    <a href="team-overview.html" class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="../../assets/ui/assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Airbnb
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a href="team-overview.html" class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="../../assets/ui/assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Medium Corporation
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a href="project-overview.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="../../assets/ui/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Homepage Redesign
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="project-overview.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="../../assets/ui/assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Travels & Time
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="project-overview.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="../../assets/ui/assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Safari Exploration
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="profile-posts.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Dianna Smiley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0">
                            <span class="text-success">●</span> Online
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="profile-posts.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Ab Hadley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0">
                            <span class="text-danger">●</span> Offline
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                  </div>

                </div>
              </div> <!-- / .dropdown-menu -->

            </div>
          </form>

          <!-- User -->
          <div class="navbar-user">

            <!-- Dropdown -->
            <div class="dropdown mr-4 d-none d-lg-flex">

              <!-- Toggle -->
              <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon active">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">

                      <!-- Title -->
                      <h5 class="card-header-title">
                        Notifications
                      </h5>

                    </div>
                    <div class="col-auto">

                      <!-- Link -->
                      <a href="#!" class="small">
                        View all
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </div> <!-- / .card-header -->
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush my--3">
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Grace Gross</strong> subscribed to you.
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                  </div>

                </div>
              </div> <!-- / .dropdown-menu -->

            </div>

            <!-- Dropdown -->
            <div class="dropdown">

              <!-- Toggle -->
              <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dashboards
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavDashboards">
                  <li>
                    <a class="dropdown-item " href="index.html">
                      Default
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="dashboard-alt.html">
                      Alternative
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="topnavPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavPages">
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavProfile">
                      <a class="dropdown-item " href="profile-posts.html">
                        Posts
                      </a>
                      <a class="dropdown-item " href="profile-groups.html">
                        Groups
                      </a>
                      <a class="dropdown-item " href="profile-projects.html">
                        Projects
                      </a>
                      <a class="dropdown-item " href="profile-files.html">
                        Files
                      </a>
                      <a class="dropdown-item " href="profile-subscribers.html">
                        Subscribers
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle " href="#!" id="topnavProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Project
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavProject">
                      <a class="dropdown-item " href="project-overview.html">
                        Overview
                      </a>
                      <a class="dropdown-item " href="project-files.html">
                        Files
                      </a>
                      <a class="dropdown-item " href="project-reports.html">
                        Reports
                      </a>
                      <a class="dropdown-item " href="project-new.html">
                        New project
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle " href="#!" id="topnavTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Team
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavTeam">
                      <a class="dropdown-item " href="team-overview.html">
                        Overview
                      </a>
                      <a class="dropdown-item " href="team-projects.html">
                        Projects
                      </a>
                      <a class="dropdown-item " href="team-members.html">
                        Members
                      </a>
                      <a class="dropdown-item " href="team-new.html">
                        New team
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="dropdown-item " href="orders.html">
                      Orders
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="feed.html">
                      Feed
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="settings.html">
                      Settings
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="invoice.html">
                      Invoice
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="pricing.html">
                      Pricing
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="topnavAuth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Auth
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavAuth">
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="topnavSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sign in
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavSignIn">
                      <a class="dropdown-item" href="sign-in-cover.html">
                        Cover
                      </a>
                      <a class="dropdown-item" href="sign-in-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="sign-in-basics.html">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="topnavSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sign up
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavSignUp">
                      <a class="dropdown-item" href="sign-up-cover.html">
                        Cover
                      </a>
                      <a class="dropdown-item" href="sign-up-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="sign-up.html">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="topnavPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Password reset
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavPassword">
                      <a class="dropdown-item" href="password-reset-cover.html">
                        Cover
                      </a>
                      <a class="dropdown-item" href="password-reset-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="password-reset.html">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="topnavError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Error
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavError">
                      <a class="dropdown-item" href="error-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="error.html">
                        Basic
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="topnavDocumentation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Docs
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
                  <li>
                    <a class="dropdown-item " href="getting-started.html">
                      Getting started
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item active" href="components.html">
                      Components
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="changelog.html">
                      Changelog
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#modalDemo" data-toggle="modal">
                  Customize
                </a>
              </li>
            </ul>

          </div>

        </div> <!-- / .container -->
      </nav>


    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">


        <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
          <div class="container-fluid">

            <!-- Form -->
            <form class="form-inline mr-4 d-none d-md-flex">
              <div class="input-group input-group-flush input-group-merge" data-toggle="lists" data-lists-values='["name"]'>

                <!-- Input -->
                <input type="search" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fe fe-search"></i>
                  </div>
                </div>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-card">
                  <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush list my--3">
                      <a href="team-overview.html" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="../../assets/ui/assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Airbnb
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->
                      </a>
                      <a href="team-overview.html" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="../../assets/ui/assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Medium Corporation
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->
                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="../../assets/ui/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Homepage Redesign
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="../../assets/ui/assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Travels & Time
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="../../assets/ui/assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Safari Exploration
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="profile-posts.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Dianna Smiley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                              <span class="text-success">●</span> Online
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="profile-posts.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Ab Hadley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                              <span class="text-danger">●</span> Offline
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                    </div>

                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>
            </form>

            <!-- User -->
            <div class="navbar-user">

              <!-- Dropdown -->
              <div class="dropdown mr-4 d-none d-md-flex">

                <!-- Toggle -->
                <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="icon active">
                    <i class="fe fe-bell"></i>
                  </span>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Title -->
                        <h5 class="card-header-title">
                          Notifications
                        </h5>

                      </div>
                      <div class="col-auto">

                        <!-- Link -->
                        <a href="#!" class="small">
                          View all
                        </a>

                      </div>
                    </div> <!-- / .row -->
                  </div> <!-- / .card-header -->
                  <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush my--3">
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Grace Gross</strong> subscribed to you.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                    </div>

                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>

              <!-- Dropdown -->
              <div class="dropdown">

                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="profile-posts.html" class="dropdown-item">Profile</a>
                  <a href="settings.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

              </div>

            </div>

          </div>
        </nav>


      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">

            <!-- ALERTS -->
            <div id="alerts">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Alerts
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages. Please see the <a target="_blank" href="http://getbootstrap.com/docs/4.1/components/alerts/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                  </div>
                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                  </div>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Danger Will Robinson!</strong> This is a dismissable alert!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> Notice how the text/UI have high contrast?
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                  </div>
                  <div class="alert alert-light" role="alert">
                    A simple light alert—check it out!
                  </div>
                  <div class="alert alert-dark" role="alert">
                    A simple dark alert—check it out!
                  </div>

                </div>
              </div>

            </div>

            <!-- AVATARS -->
            <div id="avatars">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Avatars <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Create and group avatars of different sizes and shapes with a single component.
                  </p>

                </div>
              </div>

              <!-- Heading -->
              <h2 class="mb-2">
                Sizing
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Using Bootstrap’s typical naming structure, you can create a standard avatar, or scale it up to different sizes based on what’s needed.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="avatar avatar-xxl">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar avatar-xl">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar avatar-lg">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar avatar-sm">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar avatar-xs">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;avatar&nbsp;avatar-xxl&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-xl&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-lg&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-sm&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Status Indicator
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Add an online or offline status indicator to show user's availability.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="avatar avatar-xxl avatar-offline">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar avatar-xl avatar-online">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar avatar-lg avatar-offline">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar avatar-online">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar avatar-sm avatar-offline">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar avatar-xs avatar-online">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;avatar&nbsp;avatar-online&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-offline&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Shape
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Change the shape of an avatar with the default Bootstrap image classes.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="avatar avatar-xxl">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded">
                  </div>

                  <div class="avatar avatar-xxl">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar avatar-lg">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded">
                  </div>

                  <div class="avatar avatar-lg">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <div class="avatar">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded">
                  </div>

                  <div class="avatar">
                    <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/projects/project-4.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded&quot;&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Ratio
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Change the proportional relationship between the width and height of an avatar to 4 by 3 with an <code>.avatar-4by3</code> modifier.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="avatar avatar-xxl avatar-4by3">
                    <img src="../../assets/ui/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                  </div>

                  <div class="avatar avatar-xl avatar-4by3">
                    <img src="../../assets/ui/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                  </div>

                  <div class="avatar avatar-lg avatar-4by3">
                    <img src="../../assets/ui/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                  </div>

                  <div class="avatar avatar-4by3">
                    <img src="../../assets/ui/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;avatar&nbsp;avatar-lg&nbsp;avatar-4by3&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/projects/project-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded&quot;&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Initials
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                You won't always have an image for every user, so easily use initials instead.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="avatar avatar-xxl">
                    <span class="avatar-title rounded-circle">CF</span>
                  </div>

                  <div class="avatar avatar-xl">
                    <span class="avatar-title rounded-circle">CF</span>
                  </div>

                  <div class="avatar avatar-lg">
                    <span class="avatar-title rounded-circle">CF</span>
                  </div>

                  <div class="avatar">
                    <span class="avatar-title rounded-circle">CF</span>
                  </div>

                  <div class="avatar avatar-sm">
                    <span class="avatar-title rounded-circle">CF</span>
                  </div>

                  <div class="avatar avatar-xs">
                    <span class="avatar-title rounded-circle">CF</span>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;avatar&nbsp;avatar-xxl&quot;&gt;<br/>&nbsp;&nbsp;&lt;span&nbsp;class=&quot;avatar-title&nbsp;rounded-circle&quot;&gt;CF&lt;/span&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-xl&quot;&gt;<br/>&nbsp;&nbsp;&lt;span&nbsp;class=&quot;avatar-title&nbsp;rounded-circle&quot;&gt;CF&lt;/span&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-lg&quot;&gt;<br/>&nbsp;&nbsp;&lt;span&nbsp;class=&quot;avatar-title&nbsp;rounded-circle&quot;&gt;CF&lt;/span&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&lt;span&nbsp;class=&quot;avatar-title&nbsp;rounded-circle&quot;&gt;CF&lt;/span&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-sm&quot;&gt;<br/>&nbsp;&nbsp;&lt;span&nbsp;class=&quot;avatar-title&nbsp;rounded-circle&quot;&gt;CF&lt;/span&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&lt;span&nbsp;class=&quot;avatar-title&nbsp;rounded-circle&quot;&gt;CF&lt;/span&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Groups
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Easily group avatars of any size, shape and content with a single component. Each avatar can also use an <code>&lt;a&gt;</code> to link to the corresponding profile.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="avatar-group">
                    <div class="avatar avatar-lg">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar avatar-lg">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar avatar-lg">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar avatar-lg">
                      <span class="avatar-title rounded-circle">CF</span>
                    </div>
                  </div>

                  <div class="avatar-group">
                    <div class="avatar">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar">
                      <span class="avatar-title rounded-circle">CF</span>
                    </div>
                  </div>

                  <div class="avatar-group">
                    <div class="avatar avatar-xs">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar avatar-xs">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar avatar-xs">
                      <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar avatar-xs">
                      <span class="avatar-title rounded-circle">CF</span>
                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;avatar-group&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;avatar-title&nbsp;rounded-circle&quot;&gt;CF&lt;/span&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- BADGES -->
            <div id="badges">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Badges
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    A small count and labeling component. Please read the <a target="_blank" href="https://getbootstrap.com/docs/4.0/components/badge/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <span class="badge badge-primary">Primary</span>
                  <span class="badge badge-secondary">Secondary</span>
                  <span class="badge badge-success">Success</span>
                  <span class="badge badge-danger">Danger</span>
                  <span class="badge badge-warning">Warning</span>
                  <span class="badge badge-info">Info</span>
                  <span class="badge badge-light">Light</span>
                  <span class="badge badge-dark">Dark</span>
                  <span class="badge badge-pill badge-primary">Primary</span>
                  <span class="badge badge-pill badge-secondary">Secondary</span>
                  <span class="badge badge-pill badge-success">Success</span>
                  <span class="badge badge-pill badge-danger">Danger</span>
                  <span class="badge badge-pill badge-warning">Warning</span>
                  <span class="badge badge-pill badge-info">Info</span>
                  <span class="badge badge-pill badge-light">Light</span>
                  <span class="badge badge-pill badge-dark">Dark</span>

                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Soft <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Creates a soft variant of a corresponding contextual badge variation. These can be used exactly like Bootstrap's core badges, including modiying classes like <code>.badge-pill</code>, as an <code>&lt;a&gt;</code> itself, or inside of <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> elements.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <span class="badge badge-soft-primary">Primary</span>
                  <span class="badge badge-soft-secondary">Secondary</span>
                  <span class="badge badge-soft-success">Success</span>
                  <span class="badge badge-soft-info">Info</span>
                  <span class="badge badge-soft-warning">Warning</span>
                  <span class="badge badge-soft-danger">Danger</span>
                  <span class="badge badge-soft-light">Light</span>
                  <span class="badge badge-soft-dark">Dark</span>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-primary&quot;&gt;Primary&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-secondary&quot;&gt;Secondary&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-success&quot;&gt;Success&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-info&quot;&gt;Info&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-warning&quot;&gt;Warning&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-danger&quot;&gt;Danger&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-light&quot;&gt;Light&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-dark&quot;&gt;Dark&lt;/span&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- BREADCRUMB -->
            <div id="breadcrumb">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Breadcrumb
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS. Please read the <a target="_blank" href="https://getbootstrap.com/docs/4.0/components/breadcrumb/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#!">Home</a></li>
                      <li class="breadcrumb-item"><a href="#!">Library</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                  </nav>

                </div>
              </div>

            </div>

            <!-- BUTTONS -->
            <div id="buttons">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Buttons
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more. Please read the <a target="_blank" href="https://getbootstrap.com/docs/4.0/components/buttons/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <button type="button" class="btn btn-primary btn-lg">
                    Large button
                  </button>

                  <button type="button" class="btn btn-primary">
                    Base button
                  </button>

                  <button type="button" class="btn btn-primary btn-sm">
                    Small button
                  </button>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <button type="button" class="btn btn-primary mb-2">Primary</button>
                  <button type="button" class="btn btn-secondary mb-2">Secondary</button>
                  <button type="button" class="btn btn-success mb-2">Success</button>
                  <button type="button" class="btn btn-danger mb-2">Danger</button>
                  <button type="button" class="btn btn-warning mb-2">Warning</button>
                  <button type="button" class="btn btn-info mb-2">Info</button>
                  <button type="button" class="btn btn-light mb-2">Light</button>
                  <button type="button" class="btn btn-dark mb-2">Dark</button>
                  <button type="button" class="btn btn-link mb-2">Link</button>
                  <button type="button" class="btn btn-outline-primary mb-2">Primary</button>
                  <button type="button" class="btn btn-outline-secondary mb-2">Secondary</button>
                  <button type="button" class="btn btn-outline-success mb-2">Success</button>
                  <button type="button" class="btn btn-outline-danger mb-2">Danger</button>
                  <button type="button" class="btn btn-outline-warning mb-2">Warning</button>
                  <button type="button" class="btn btn-outline-info mb-2">Info</button>
                  <button type="button" class="btn btn-outline-light mb-2">Light</button>
                  <button type="button" class="btn btn-outline-dark mb-2">Dark</button>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-white active">
                      <input type="radio" name="options" id="option1" checked> <i class="fe fe-check-circle"></i> Active
                    </label>
                    <label class="btn btn-white">
                      <input type="radio" name="options" id="option2"> <i class="fe fe-check-circle"></i> Radio
                    </label>
                    <label class="btn btn-white">
                      <input type="radio" name="options" id="option3"> <i class="fe fe-check-circle"></i> Radio
                    </label>
                  </div>

                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                White <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Creates a white variation of a button since Bootstrap's native "light" variant doesn't work well over light backgrounds.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <a href="#!" class="btn btn-white">
                    Button white
                  </a>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;btn&nbsp;btn-white&quot;&gt;<br/>&nbsp;&nbsp;Button<br/>&lt;/a&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Rounded circle <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Useful for single character or emoji buttons, you can turn any button into a circle using the <code>.btn-rounded-circle</code> modifier.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <a href="#!" class="btn btn-sm btn-rounded-circle btn-white">
                    +
                  </a>
                  <a href="#!" class="btn btn-rounded-circle btn-white">
                    +
                  </a>
                  <a href="#!" class="btn btn-lg btn-rounded-circle btn-white">
                    +
                  </a>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;btn&nbsp;btn-rounded-circle&nbsp;btn-white&quot;&gt;<br/>&nbsp;&nbsp;+<br/>&lt;/a&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Icon <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A combination of the standard button component and a feather icon.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <a href="#!" class="btn btn-white">
                    <span class="fe fe-bookmark"></span>
                  </a>

                  <a href="#!" class="btn btn-primary">
                    <span class="fe fe-bookmark"></span>
                  </a>

                  <a href="#!" class="btn btn-rounded-circle btn-white">
                    <span class="fe fe-star"></span>
                  </a>

                  <a href="#!" class="btn btn-rounded-circle btn-primary">
                    <span class="fe fe-star"></span>
                  </a>

                </div>
                <div class="card-footer bg-dark">
                  <code class="html highlight bg-dark">
                    &lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-white&quot;&gt;<br/>&nbsp;&nbsp;&lt;span&nbsp;class=&quot;fe&nbsp;fe-bookmark&quot;&gt;&lt;/span&gt;<br/>&lt;/a&gt;<br/><br/>&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-primary&quot;&gt;<br/>&nbsp;&nbsp;&lt;span&nbsp;class=&quot;fe&nbsp;fe-bookmark&quot;&gt;&lt;/span&gt;<br/>&lt;/a&gt;<br/><br/>&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-rounded-circle&nbsp;btn-white&quot;&gt;<br/>&nbsp;&nbsp;&lt;span&nbsp;class=&quot;fe&nbsp;fe-star&quot;&gt;&lt;/span&gt;<br/>&lt;/a&gt;<br/><br/>&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-rounded-circle&nbsp;btn-primary&quot;&gt;<br/>&nbsp;&nbsp;&lt;span&nbsp;class=&quot;fe&nbsp;fe-star&quot;&gt;&lt;/span&gt;<br/>&lt;/a&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- BUTTON GROUP -->
            <div id="button-group">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Button group
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Group a series of buttons together on a single line with the button group, and super-power them with JavaScript. Please read the <a target="_blank" href="https://getbootstrap.com/docs/4.0/components/button-group/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                      <button type="button" class="btn btn-secondary">1</button>
                      <button type="button" class="btn btn-secondary">2</button>
                      <button type="button" class="btn btn-secondary">3</button>
                      <button type="button" class="btn btn-secondary">4</button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                      <button type="button" class="btn btn-secondary">5</button>
                      <button type="button" class="btn btn-secondary">6</button>
                      <button type="button" class="btn btn-secondary">7</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Third group">
                      <button type="button" class="btn btn-secondary">8</button>
                    </div>
                  </div>

                  <div class="btn-group btn-group-lg mr-2 mb-3" role="group" aria-label="First group">
                    <button type="button" class="btn btn-warning">1</button>
                    <button type="button" class="btn btn-warning">2</button>
                    <button type="button" class="btn btn-warning">3</button>
                    <button type="button" class="btn btn-warning">4</button>
                  </div>
                  <div class="btn-group btn-group mr-2 mb-3" role="group" aria-label="First group">
                    <button type="button" class="btn btn-success">1</button>
                    <button type="button" class="btn btn-success">2</button>
                    <button type="button" class="btn btn-success">3</button>
                    <button type="button" class="btn btn-success">4</button>
                  </div>
                  <div class="btn-group btn-group-sm mr-2 mb-3" role="group" aria-label="First group">
                    <button type="button" class="btn btn-primary">1</button>
                    <button type="button" class="btn btn-primary">2</button>
                    <button type="button" class="btn btn-primary">3</button>
                    <button type="button" class="btn btn-primary">4</button>
                  </div>

                  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">1</button>
                    <button type="button" class="btn btn-secondary">2</button>

                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </button>
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">Dropdown link</a>
                        <a class="dropdown-item" href="#">Dropdown link</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>

            <!-- CARDS -->
            <div id="cards">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Cards
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options. Please read the <a target="_blank" href="https://getbootstrap.com/docs/4.0/components/card/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Card title</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non dolore est fuga nobis ipsum illum eligendi nemo iure repellat, soluta, optio minus ut reiciendis voluptates enim impedit veritatis officiis.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Card header <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Easily create a card header of a fixed height and populate it with text, buttons, or a navigation.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-header">

                  <h4 class="card-header-title">
                    Card title
                  </h4>

                </div>
                <div class="card-body">

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis fugiat dolorem, expedita rem. Quis natus officiis asperiores rem ipsum, dolore cumque voluptatum iste vel alias, recusandae culpa hic pariatur quos.
                  </p>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-header&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&nbsp;class=&quot;card-header-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Card&nbsp;title<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Card header navigation <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Use the default Bootstrap grid and the <code>.nav</code> component to easily add a perfectly aligned navigation inside a card header.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">

                      <h4 class="card-header-title">
                        Card title
                      </h4>

                    </div>
                    <div class="col-auto">

                      <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                       <li class="nav-item">
                         <a href="#!" class="nav-link active">
                           Active
                         </a>
                       </li>
                       <li class="nav-item">
                         <a href="#!" class="nav-link">
                           Link
                         </a>
                       </li>
                       <li class="nav-item">
                         <a href="#!" class="nav-link">
                           Link
                         </a>
                       </li>
                      </ul>

                    </div>
                  </div>
                </div>
                <div class="card-body">

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis tempora architecto, sit a repellat dignissimos consequatur mollitia qui consequuntur recusandae numquam voluptate maiores, non cumque illo laboriosam sint dolores. Nostrum.
                  </p>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-header&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&nbsp;class=&quot;card-header-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Card&nbsp;title<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&nbsp;class=&quot;nav&nbsp;nav-tabs&nbsp;nav-tabs-sm&nbsp;card-header-tabs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;active&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Active<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Inactive <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Merge your card into a background with the <code>.card-inactive</code> modifier.
              </p>

              <!-- Card -->
              <div class="card card-inactive">
                <div class="card-body">

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis tempora architecto, sit a repellat dignissimos consequatur mollitia qui consequuntur recusandae numquam voluptate maiores, non cumque illo laboriosam sint dolores. Nostrum.
                  </p>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&nbsp;card-inactive&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit,&nbsp;sed&nbsp;do&nbsp;eiusmod<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tempor&nbsp;incididunt&nbsp;ut&nbsp;labore&nbsp;et&nbsp;dolore&nbsp;magna&nbsp;aliqua.&nbsp;Ut&nbsp;enim&nbsp;ad&nbsp;minim&nbsp;veniam,<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quis&nbsp;nostrud&nbsp;exercitation&nbsp;ullamco&nbsp;laboris&nbsp;nisi&nbsp;ut&nbsp;aliquip&nbsp;ex&nbsp;ea&nbsp;commodo<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;consequat.&nbsp;Duis&nbsp;aute&nbsp;irure&nbsp;dolor&nbsp;in&nbsp;reprehenderit&nbsp;in&nbsp;voluptate&nbsp;velit&nbsp;esse<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cillum&nbsp;dolore&nbsp;eu&nbsp;fugiat&nbsp;nulla&nbsp;pariatur.&nbsp;Excepteur&nbsp;sint&nbsp;occaecat&nbsp;cupidatat&nbsp;non<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proident,&nbsp;sunt&nbsp;in&nbsp;culpa&nbsp;qui&nbsp;officia&nbsp;deserunt&nbsp;mollit&nbsp;anim&nbsp;id&nbsp;est&nbsp;laborum.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;<br/>
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Profile <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Combine the default Bootstrap and Dashkit components to create beautiful large and small profile cards.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">

                    <div class="dropdown card-dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle text-white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                    <img src="../../assets/ui/assets/img/covers/profile-cover-2.jpg" alt="..." class="card-img-top">

                    <div class="card-body text-center">

                      <a href="profile-posts.html" class="avatar avatar-xl card-avatar card-avatar-top">
                        <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-4 border-card" alt="...">
                      </a>

                      <h2 class="card-title">
                        <a href="profile-posts.html">Ab Hadley</a>
                      </h2>

                      <p class="card-text text-muted">
                        <small>
                          Working on the latest API integration.
                        </small>
                      </p>

                      <p class="card-text">
                        <span class="badge badge-soft-secondary">
                          UX Team
                        </span>
                        <span class="badge badge-soft-secondary">
                          Research Team
                        </span>
                      </p>

                      <hr>

                      <div class="row align-items-center justify-content-between">
                        <div class="col-auto">

                          <small>
                            <span class="text-success">●</span> Online
                          </small>

                        </div>
                        <div class="col-auto">

                          <a href="#!" class="btn btn-sm btn-primary">
                            Subscribe
                          </a>

                        </div>
                      </div>

                    </div>

                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/><br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown&nbsp;card-dropdown&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-ellipses&nbsp;dropdown-toggle&nbsp;text-white&quot;&nbsp;role=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-more-vertical&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-right&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another&nbsp;action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something&nbsp;else&nbsp;here<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/covers/profile-cover-2.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;card-img-top&quot;&gt;<br/><br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&nbsp;text-center&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xl&nbsp;card-avatar&nbsp;card-avatar-top&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&nbsp;border&nbsp;border-4&nbsp;border-card&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&nbsp;class=&quot;card-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&gt;Ab&nbsp;Hadley&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h2&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;text-muted&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;small&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Working&nbsp;on&nbsp;the&nbsp;latest&nbsp;API&nbsp;integration.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/small&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-secondary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UX&nbsp;Team<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-secondary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Research&nbsp;Team<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;hr&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&nbsp;justify-content-between&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;small&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;text-success&quot;&gt;&#x25cf;&lt;/span&gt;&nbsp;Online<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/small&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-sm&nbsp;btn-primary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscribe<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;&nbsp;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <a href="profile-posts.html" class="avatar avatar-lg">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="card-title mb-1">
                            <a href="profile-posts.html">Ab Hadley</a>
                          </h4>

                          <!-- Text -->
                          <p class="card-text small text-muted mb-1">
                            Working on the latest API integration.
                          </p>

                          <!-- Status -->
                          <p class="card-text small">
                            <span class="text-success">●</span> Online
                          </p>

                        </div>
                        <div class="col-auto">

                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-primary d-none d-md-inline-block">
                            Subscribe
                          </a>

                        </div>
                        <div class="col-auto">

                          <!-- Dropdown -->
                          <div class="dropdown">
                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" data-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#!" class="dropdown-item">
                                Action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Another action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Something else here
                              </a>
                            </div>
                          </div>

                        </div>
                      </div> <!-- / .row -->
                    </div> <!-- / .card-body -->
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-lg&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;ml--2&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&nbsp;class=&quot;card-title&nbsp;mb-1&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&gt;Ab&nbsp;Hadley&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;small&nbsp;text-muted&nbsp;mb-1&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Working&nbsp;on&nbsp;the&nbsp;latest&nbsp;API&nbsp;integration.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;small&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;text-success&quot;&gt;&#x25cf;&lt;/span&gt;&nbsp;Online<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-sm&nbsp;btn-primary&nbsp;d-none&nbsp;d-md-inline-block&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscribe<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-ellipses&nbsp;dropdown-toggle&quot;&nbsp;role=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;data-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-more-vertical&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-right&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another&nbsp;action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something&nbsp;else&nbsp;here<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Team <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A similar to profile cards team component compiled of the default Bootstrap and Dashkit components.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <div class="card-body">

                      <!-- Dropdown -->
                      <div class="dropdown card-dropdown">
                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a href="#!" class="dropdown-item">
                            Action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Another action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Something else here
                          </a>
                        </div>
                      </div>

                      <!-- Avatar -->
                      <div class="text-center">
                        <a href="team-overview.html" class="card-avatar avatar avatar-lg mx-auto">
                          <img src="../../assets/ui/assets/img/avatars/teams/team-logo-1.jpg" alt="" class="avatar-img rounded">
                        </a>
                      </div>

                      <!-- Title -->
                      <h2 class="card-title text-center mb-3">
                        <a href="team-overview.html">Launchday</a>
                      </h2>

                      <!-- Text -->
                      <p class="card-text text-center text-muted mb-4">
                        Launchday is a SaaS website builder with a focus on quality, easy to build product sites.
                      </p>

                      <!-- Divider -->
                      <hr>

                      <div class="row align-items-center">
                        <div class="col">

                          <!-- Time -->
                          <p class="card-text small text-muted">
                            <i class="fe fe-clock"></i> Updated 2hr ago
                          </p>

                        </div>
                        <div class="col-auto">

                          <!-- Avatar group -->
                          <div class="avatar-group">
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                            <div class="avatar avatar-xs">
                              <div class="avatar-title rounded-circle">+7</div>
                            </div>
                          </div>

                        </div>
                      </div> <!-- / .row -->

                    </div> <!-- / .card-body -->
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown&nbsp;card-dropdown&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-ellipses&nbsp;dropdown-toggle&quot;&nbsp;role=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-more-vertical&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-right&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another&nbsp;action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something&nbsp;else&nbsp;here<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;text-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;team-overview.html&quot;&nbsp;class=&quot;card-avatar&nbsp;avatar&nbsp;avatar-lg&nbsp;mx-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/teams/team-logo-1.jpg&quot;&nbsp;alt=&quot;&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&nbsp;class=&quot;card-title&nbsp;text-center&nbsp;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;team-overview.html&quot;&gt;Launchday&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h2&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;text-center&nbsp;text-muted&nbsp;mb-4&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Launchday&nbsp;is&nbsp;a&nbsp;SaaS&nbsp;website&nbsp;builder&nbsp;with&nbsp;a&nbsp;focus&nbsp;on&nbsp;quality,&nbsp;easy&nbsp;to&nbsp;build&nbsp;product&nbsp;sites.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;hr&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;small&nbsp;text-muted&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-clock&quot;&gt;&lt;/i&gt;&nbsp;Updated&nbsp;2hr&nbsp;ago<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar-group&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar-title&nbsp;rounded-circle&quot;&gt;+7&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <a href="project-team-overview.html" class="avatar avatar-lg">
                            <img src="../../assets/ui/assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="card-title mb-1 name">
                            <a href="team-overview.html">Launchday</a>
                          </h4>

                          <!-- Text -->
                          <p class="card-text small text-muted mb-1">
                            Launchday is a SaaS website builder with a focus on quality, easy to build product sites.
                          </p>

                          <!-- Time -->
                          <p class="card-text small text-muted">
                            <i class="fe fe-clock"></i> Updated 2hr ago
                          </p>

                        </div>
                        <div class="col-auto">

                          <!-- Avatar group -->
                          <div class="avatar-group d-none d-md-inline-flex">
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                          </div>

                        </div>
                        <div class="col-auto">

                          <!-- Dropdown -->
                          <div class="dropdown">
                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#!" class="dropdown-item">
                                Action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Another action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Something else here
                              </a>
                            </div>
                          </div>

                        </div>
                      </div> <!-- / .row -->
                    </div> <!-- / .card-body -->
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;project-team-overview.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-lg&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/teams/team-logo-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;ml--2&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&nbsp;class=&quot;card-title&nbsp;mb-1&nbsp;name&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;team-overview.html&quot;&gt;Launchday&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;small&nbsp;text-muted&nbsp;mb-1&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Launchday&nbsp;is&nbsp;a&nbsp;SaaS&nbsp;website&nbsp;builder&nbsp;with&nbsp;a&nbsp;focus&nbsp;on&nbsp;quality,&nbsp;easy&nbsp;to&nbsp;build&nbsp;product&nbsp;sites.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;small&nbsp;text-muted&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-clock&quot;&gt;&lt;/i&gt;&nbsp;Updated&nbsp;2hr&nbsp;ago<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar-group&nbsp;d-none&nbsp;d-md-inline-flex&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-ellipses&nbsp;dropdown-toggle&quot;&nbsp;role=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-more-vertical&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-right&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another&nbsp;action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something&nbsp;else&nbsp;here<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Project <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Another combination of the default Bootstrap and Dashkit components that scales perfectly to look good on screens of any size.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <img src="../../assets/ui/assets/img/avatars/projects/project-1.jpg" alt="..." class="card-img-top">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">

                          <!-- Title -->
                          <h4 class="card-title mb-2 name">
                            <a href="project-overview.html">Homepage Redesign</a>
                          </h4>

                          <!-- Subtitle -->
                          <p class="card-text small text-muted">
                            Updated 4hr ago
                          </p>

                        </div>
                        <div class="col-auto">

                          <!-- Dropdown -->
                          <div class="dropdown">
                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#!" class="dropdown-item">
                                Action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Another action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Something else here
                              </a>
                            </div>
                          </div>

                        </div>
                      </div> <!-- / .row -->

                      <!-- Divider -->
                      <hr>

                      <div class="row align-items-center">
                        <div class="col">
                          <div class="row align-items-center no-gutters">
                            <div class="col-auto">

                              <div class="small mr-2">29%</div>

                            </div>
                            <div class="col">

                              <!-- Progress -->
                              <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>

                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="col-auto">

                          <!-- Avatar group -->
                          <div class="avatar-group">
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                            </a>
                          </div>

                        </div>
                      </div> <!-- / .row -->

                    </div> <!-- / .card-body -->
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/projects/project-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;card-img-top&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&nbsp;class=&quot;card-title&nbsp;mb-2&nbsp;name&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;project-overview.html&quot;&gt;Homepage&nbsp;Redesign&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;small&nbsp;text-muted&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Updated&nbsp;4hr&nbsp;ago<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-ellipses&nbsp;dropdown-toggle&quot;&nbsp;role=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-more-vertical&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-right&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another&nbsp;action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something&nbsp;else&nbsp;here<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;hr&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&nbsp;no-gutters&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;small&nbsp;mr-2&quot;&gt;29%&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress&nbsp;progress-sm&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress-bar&quot;&nbsp;role=&quot;progressbar&quot;&nbsp;style=&quot;width:&nbsp;29%&quot;&nbsp;aria-valuenow=&quot;29&quot;&nbsp;aria-valuemin=&quot;0&quot;&nbsp;aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar-group&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <a href="project-overview.html" class="avatar avatar-lg avatar-4by3">
                            <img src="../../assets/ui/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="card-title mb-1 name">
                            <a href="project-overview.html">Homepage Redesign</a>
                          </h4>

                          <!-- Text -->
                          <p class="card-text small text-muted mb-1">
                            <time datetime="2018-06-21">Updated 2hr ago</time>
                          </p>

                          <!-- Progress -->
                          <div class="row align-items-center no-gutters">
                            <div class="col-auto">

                              <div class="small mr-2">29%</div>

                            </div>
                            <div class="col">

                              <!-- Progress -->
                              <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>

                            </div>
                          </div> <!-- / .row -->

                        </div>
                        <div class="col-auto">

                          <!-- Avatar group -->
                          <div class="avatar-group d-none d-md-inline-flex">
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                            </a>
                          </div>

                        </div>
                        <div class="col-auto">

                          <!-- Dropdown -->
                          <div class="dropdown">
                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#!" class="dropdown-item">
                                Action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Another action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Something else here
                              </a>
                            </div>
                          </div>

                        </div>
                      </div> <!-- / .row -->
                    </div> <!-- / .card-body -->
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;project-overview.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-lg&nbsp;avatar-4by3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/projects/project-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;ml--2&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&nbsp;class=&quot;card-title&nbsp;mb-1&nbsp;name&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;project-overview.html&quot;&gt;Homepage&nbsp;Redesign&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;small&nbsp;text-muted&nbsp;mb-1&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;time&gt;Updated&nbsp;2hr&nbsp;ago&lt;/time&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&nbsp;no-gutters&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;small&nbsp;mr-2&quot;&gt;29%&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress&nbsp;progress-sm&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress-bar&quot;&nbsp;role=&quot;progressbar&quot;&nbsp;style=&quot;width:&nbsp;29%&quot;&nbsp;aria-valuenow=&quot;29&quot;&nbsp;aria-valuemin=&quot;0&quot;&nbsp;aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar-group&nbsp;d-none&nbsp;d-md-inline-flex&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-ellipses&nbsp;dropdown-toggle&quot;&nbsp;role=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-more-vertical&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-right&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another&nbsp;action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something&nbsp;else&nbsp;here<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Files <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A <code>.card</code> component variation perfect to create a list of files available for download.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <div class="card-body">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <a href="#!" class="avatar avatar-lg">
                            <img src="../../assets/ui/assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="card-title mb-1 name">
                            <a href="#!">Launchday Logo</a>
                          </h4>

                          <!-- Text -->
                          <p class="card-text small text-muted mb-1">
                            2.5kb SVG
                          </p>

                          <!-- Time -->
                          <p class="card-text small text-muted">
                            Uploaded by Dianna Smiley on <time datetime="2018-01-03">Jan 3, 2018</time>
                          </p>

                        </div>
                        <div class="col-auto">

                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white d-none d-md-inline-block">
                            Download
                          </a>

                        </div>
                        <div class="col-auto">

                          <!-- Dropdown -->
                          <div class="dropdown">
                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#!" class="dropdown-item">
                                Action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Another action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Something else here
                              </a>
                            </div>
                          </div>

                        </div>
                      </div> <!-- / .row -->

                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;avatar&nbsp;avatar-lg&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/files/file-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;ml--2&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&nbsp;class=&quot;card-title&nbsp;mb-1&nbsp;name&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&gt;Launchday&nbsp;Logo&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;small&nbsp;text-muted&nbsp;mb-1&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.5kb&nbsp;SVG<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;small&nbsp;text-muted&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uploaded&nbsp;by&nbsp;Dianna&nbsp;Smiley&nbsp;on&nbsp;&lt;time&nbsp;datetime=&quot;2018-01-03&quot;&gt;Jan&nbsp;3,&nbsp;2018&lt;/time&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-sm&nbsp;btn-white&nbsp;d-none&nbsp;d-md-inline-block&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Download<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-ellipses&nbsp;dropdown-toggle&quot;&nbsp;role=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-more-vertical&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-right&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another&nbsp;action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something&nbsp;else&nbsp;here<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Statcards <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Create beautiful statcards with the default <code>.card</code> component and the combination of the Bootstrap components and icons.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">

                          <!-- Title -->
                          <h6 class="card-title text-uppercase text-muted mb-2">
                            Budget
                          </h6>

                          <!-- Heading -->
                          <span class="h2 mb-0">
                            $24,500
                          </span>

                          <!-- Badge -->
                          <span class="badge badge-soft-success mt--1">
                            +3.5%
                          </span>

                        </div>
                        <div class="col-auto">

                          <!-- Icon -->
                          <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                        </div>
                      </div> <!-- / .row -->

                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;card-title&nbsp;text-uppercase&nbsp;text-muted&nbsp;mb-2&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Budget<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;h2&nbsp;mb-0&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$24,500<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;badge&nbsp;badge-soft-success&nbsp;mt--1&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+3.5%<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;h2&nbsp;fe&nbsp;fe-dollar-sign&nbsp;text-muted&nbsp;mb-0&quot;&gt;&lt;/span&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Posts <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A combination of the <code>.card</code> component, illustrations and margin utilities.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <div class="card-body text-center">
                      <div class="row justify-content-center">
                        <div class="col-12 col-xl-10">

                          <!-- Image -->
                          <img src="../../assets/ui/assets/img/illustrations/happiness.svg" alt="..." class="img-fluid mt--5 mb-4" style="max-width: 272px;">

                          <!-- Title -->
                          <h2 class="mb-2">
                            We released 2008 new versions of our theme to make the world a better place.
                          </h2>

                          <!-- Content -->
                          <p class="text-muted">
                            This is a true story and totally not made up. This is going to be better in the long run but for now this is the way it is.
                          </p>

                          <!-- Button -->
                          <a href="#!" class="btn btn-primary">
                            Try it for free
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&nbsp;text-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;justify-content-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-12&nbsp;col-xl-10&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/illustrations/happiness.svg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;img-fluid&nbsp;mt--5&nbsp;mb-4&quot;&nbsp;style=&quot;max-width:&nbsp;272px;&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We&nbsp;released&nbsp;2008&nbsp;new&nbsp;versions&nbsp;of&nbsp;our&nbsp;theme&nbsp;to&nbsp;make&nbsp;the&nbsp;world&nbsp;a&nbsp;better&nbsp;place.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h2&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;text-muted&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This&nbsp;is&nbsp;a&nbsp;true&nbsp;story&nbsp;and&nbsp;totally&nbsp;not&nbsp;made&nbsp;up.&nbsp;This&nbsp;is&nbsp;going&nbsp;to&nbsp;be&nbsp;better&nbsp;in&nbsp;the&nbsp;long&nbsp;run&nbsp;but&nbsp;for&nbsp;now&nbsp;this&nbsp;is&nbsp;the&nbsp;way&nbsp;it&nbsp;is.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;btn&nbsp;btn-primary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Try&nbsp;it&nbsp;for&nbsp;free<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Pricing <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A <code>.card</code> component variation for a pricing option.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <div class="card-body">

                      <!-- Title -->
                      <h6 class="text-uppercase text-center text-muted my-4">
                        Standard plan
                      </h6>

                      <!-- Price -->
                      <div class="row no-gutters align-items-center justify-content-center">
                        <div class="col-auto">
                          <div class="h2 mb-0">$</div>
                        </div>
                        <div class="col-auto">
                          <div class="display-2 mb-0">29</div>
                        </div>
                      </div> <!-- / .row -->

                      <!-- Period -->
                      <div class="h6 text-uppercase text-center text-muted mb-5">
                        / month
                      </div>

                      <!-- Features -->
                      <div class="mb-3">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <small>Unlimited activity</small> <i class="fe fe-check-circle text-success"></i>
                          </li>
                          <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <small>Direct messaging</small> <i class="fe fe-check-circle text-success"></i>
                          </li>
                          <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <small>Members</small> <small>50 members</small>
                          </li>
                          <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <small>Admins</small> <small>5 admins</small>
                          </li>
                        </ul>
                      </div>

                      <!-- Button -->
                      <a href="#!" class="btn btn-block btn-primary">
                        Start with Standard
                      </a>

                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;text-uppercase&nbsp;text-center&nbsp;text-muted&nbsp;my-4&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Standard&nbsp;plan<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;no-gutters&nbsp;align-items-center&nbsp;justify-content-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;h2&nbsp;mb-0&quot;&gt;$&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;display-2&nbsp;mb-0&quot;&gt;29&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;h6&nbsp;text-uppercase&nbsp;text-center&nbsp;text-muted&nbsp;mb-5&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;month<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&nbsp;class=&quot;list-group&nbsp;list-group-flush&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&nbsp;d-flex&nbsp;align-items-center&nbsp;justify-content-between&nbsp;px-0&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;small&gt;Unlimited&nbsp;activity&lt;/small&gt;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-check-circle&nbsp;text-success&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&nbsp;d-flex&nbsp;align-items-center&nbsp;justify-content-between&nbsp;px-0&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;small&gt;Direct&nbsp;messaging&lt;/small&gt;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-check-circle&nbsp;text-success&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&nbsp;d-flex&nbsp;align-items-center&nbsp;justify-content-between&nbsp;px-0&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;small&gt;Members&lt;/small&gt;&nbsp;&lt;small&gt;50&nbsp;members&lt;/small&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&nbsp;d-flex&nbsp;align-items-center&nbsp;justify-content-between&nbsp;px-0&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;small&gt;Admins&lt;/small&gt;&nbsp;&lt;small&gt;5&nbsp;admins&lt;/small&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-block&nbsp;btn-primary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start&nbsp;with&nbsp;Standard<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- CHARTS -->
            <div id="charts">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Charts <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span> <span class="badge badge-soft-warning ml-1 mt--1">Plugin</span>
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Create beautiful charts with a simple, but powerful and flexible JavaScript Chart.js plugin. Please read the <a target="_blank" href="https://www.chartjs.org/">official documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Heading -->
              <h2 class="mb-2">
                Line
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A line chart is a way of plotting data points on a line. Often, it is used to show trend data, or the comparison of two data sets.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="chart">
                    <canvas id="performanceChart" class="chart-canvas"></canvas>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;chart&quot;&gt;<br/>&nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;performanceChart&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br/>&lt;/div&gt;<br/><br/>&lt;script&gt;<br/>new&nbsp;Chart('performanceChart'),&nbsp;{<br/>&nbsp;&nbsp;type:&nbsp;'line',<br/>&nbsp;&nbsp;data:&nbsp;{<br/>&nbsp;&nbsp;&nbsp;&nbsp;labels:&nbsp;['Jan',&nbsp;'Feb',&nbsp;'Mar',&nbsp;'Apr',&nbsp;'May',&nbsp;'Jun',&nbsp;'Jul',&nbsp;'Aug',&nbsp;'Sep',&nbsp;'Oct',&nbsp;'Nov',&nbsp;'Dec'],<br/>&nbsp;&nbsp;&nbsp;&nbsp;datasets:&nbsp;[{<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;'Performance',<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data:&nbsp;[0,10,5,15,10,20,15,25,20,30,25,40]<br/>&nbsp;&nbsp;&nbsp;&nbsp;}]<br/>&nbsp;&nbsp;}<br/>});<br/>&lt;/script&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Bar
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A bar chart provides a way of showing data values represented as vertical bars. It is sometimes used to show trend data, and the comparison of multiple data sets side by side.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="chart">
                    <canvas id="ordersChart" class="chart-canvas"></canvas>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;chart&quot;&gt;<br/>&nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;ordersChart&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br/>&lt;/div&gt;<br/><br/>&lt;script&gt;<br/>new&nbsp;Chart('ordersChart',&nbsp;{<br/>&nbsp;&nbsp;type:&nbsp;'bar',<br/>&nbsp;&nbsp;data:&nbsp;{<br/>&nbsp;&nbsp;&nbsp;&nbsp;labels:&nbsp;['Jan',&nbsp;'Feb',&nbsp;'Mar',&nbsp;'Apr',&nbsp;'May',&nbsp;'Jun',&nbsp;'Jul',&nbsp;'Aug',&nbsp;'Sep',&nbsp;'Oct',&nbsp;'Nov',&nbsp;'Dec'],<br/>&nbsp;&nbsp;&nbsp;&nbsp;datasets:&nbsp;[{<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;'Sales',<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data:&nbsp;[25,20,30,22,17,10,18,26,28,26,20,32]<br/>&nbsp;&nbsp;&nbsp;&nbsp;}]<br/>&nbsp;&nbsp;}<br/>});&lt;/script&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Doughnut
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Excellent at showing the relational proportions between data.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="chart">
                    <canvas id="devicesChart" class="chart-canvas"></canvas>
                  </div>

                </div>
                <div class="card-body bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;chart&quot;&gt;<br/>&nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;devicesChart&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br/>&lt;/div&gt;<br/><br/>&lt;script&gt;<br/>new&nbsp;Chart('devicesChart',&nbsp;{<br/>&nbsp;&nbsp;type:&nbsp;'doughnut',<br/>&nbsp;&nbsp;data:&nbsp;{<br/>&nbsp;&nbsp;&nbsp;&nbsp;labels:&nbsp;['Desktop',&nbsp;'Tablet',&nbsp;'Mobile'],<br/>&nbsp;&nbsp;&nbsp;&nbsp;datasets:&nbsp;[{<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data:&nbsp;[60,&nbsp;25,&nbsp;15]<br/>&nbsp;&nbsp;&nbsp;&nbsp;}]<br/>&nbsp;&nbsp;}<br/>});<br/>&lt;/script&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Toggle chart data
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Easily toggle an additional set of data with a simple interface based on the <code>data</code> attributes.
              </p>

              <!-- Table -->
              <div class="card">
                <div class="card-header">
                  <h4 class="card-header-title">
                    Options
                  </h4>
                </div>
                <div class="table-responsive">
                  <table class="table table-sm card-table">
                    <thead>
                      <tr>
                        <th>
                          Name
                        </th>
                        <th>
                          Type
                        </th>
                        <th>
                          Default
                        </th>
                        <th>
                          Description
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <code>data-toggle</code>
                        </td>
                        <td>
                          string
                        </td>
                        <td>
                          chart
                        </td>
                        <td>
                          Activates the toggle functionality.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>data-target</code>
                        </td>
                        <td>
                          string
                        </td>
                        <td>
                          -
                        </td>
                        <td>
                          The selector of a chart the new set of data will be applied to.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>data-add</code>
                        </td>
                        <td>
                          object
                        </td>
                        <td>
                          -
                        </td>
                        <td>
                          The new set of data to be applied in the chart.js format. Please read the <a target="_blank" href="http://www.chartjs.org/">official documentation</a> for more info.
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">

                      <!-- Title -->
                      <h4 class="card-header-title">
                        Orders
                      </h4>

                    </div>
                    <div class="col-auto mr--3">

                      <!-- Caption -->
                      <span class="text-muted">
                        Show affiliate:
                      </span>

                    </div>
                    <div class="col-auto">

                      <!-- Toggle -->
                      <div class="custom-control custom-checkbox-toggle">
                        <input type="checkbox" class="custom-control-input" id="cardToggle" data-toggle="chart" data-target="#ordersChartAlias" data-add='{"data":{"datasets":[{"data":[15,10,20,12,7,0,8,16,18,16,10,22],"backgroundColor":"#d2ddec","label":"Affiliate"}]}}'>
                        <label class="custom-control-label" for="cardToggle"></label>
                      </div>

                    </div>
                  </div> <!-- / .row -->

                </div>
                <div class="card-body">

                  <!-- Chart -->
                  <div class="chart">
                    <canvas id="ordersChartAlias" class="chart-canvas"></canvas>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;custom-control&nbsp;custom-checkbox-toggle&quot;&gt;<br/>&nbsp;&nbsp;&lt;input&nbsp;type=&quot;checkbox&quot;&nbsp;class=&quot;custom-control-input&quot;&nbsp;id=&quot;cardToggle&quot;&nbsp;data-toggle=&quot;chart&quot;&nbsp;data-target=&quot;#ordersChart&quot;&nbsp;data-add='{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[15,10,20,12,7,0,8,16,18,16,10,22],&quot;backgroundColor&quot;:&quot;#d2ddec&quot;,&quot;label&quot;:&quot;Affiliate&quot;}]}}'&gt;<br/>&nbsp;&nbsp;&lt;label&nbsp;class=&quot;custom-control-label&quot;&nbsp;for=&quot;cardToggle&quot;&gt;&lt;/label&gt;<br/>&lt;/div&gt;<br /><br />&lt;div&nbsp;class=&quot;chart&quot;&gt;<br/>&nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;ordersChart&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Update chart data
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Update the current set of data with a similar to the toggle interface. Please use the options above along with the new <code>data</code> attributes:
              </p>

              <!-- Table -->
              <div class="card">
                <div class="card-header">
                  <h4 class="card-header-title">
                    Options
                  </h4>
                </div>
                <div class="table-responsive">
                  <table class="table table-sm card-table">
                    <thead>
                      <tr>
                        <th>
                          Name
                        </th>
                        <th>
                          Type
                        </th>
                        <th>
                          Default
                        </th>
                        <th>
                          Description
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <code>data-update</code>
                        </td>
                        <td>
                          object
                        </td>
                        <td>
                          -
                        </td>
                        <td>
                          The new set of data to be applied in the chart.js format. Please read the <a target="_blank" href="http://www.chartjs.org/">official documentation</a> for more info. This attribute should not be used together with the <code>data-add</code> attribute.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>data-prefix</code>
                        </td>
                        <td>
                          string
                        </td>
                        <td>
                          -
                        </td>
                        <td>
                          Changes the prefix value for the y axes ticks and tooltips.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>data-suffix</code>
                        </td>
                        <td>
                          string
                        </td>
                        <td>
                          -
                        </td>
                        <td>
                          Changes the suffix value for the y axes ticks and tooltips.
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-header">

                  <!-- Tabs -->
                  <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item" data-toggle="chart" data-target="#performanceChartAlias" data-update='{"data":{"datasets":[{"data":[0,10,5,15,10,20,15,25,20,30,25,40]}]}}' data-prefix="$" data-suffix="k">
                      <a class="nav-link active" href="#" data-toggle="tab">
                        Earned
                      </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#performanceChartAlias" data-update='{"data":{"datasets":[{"data":[7,35,12,27,34,17,19,30,28,32,24,39]}]}}' data-prefix="" data-suffix="hr">
                      <a class="nav-link" href="#" data-toggle="tab">
                        Hours Worked
                      </a>
                    </li>
                  </ul>

                </div>
                <div class="card-body">

                  <!-- Chart -->
                  <div class="chart">
                    <canvas id="performanceChartAlias" class="chart-canvas"></canvas>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;ul&nbsp;class=&quot;nav&nbsp;nav-tabs&nbsp;card-header-tabs&quot;&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&nbsp;data-toggle=&quot;chart&quot;&nbsp;data-target=&quot;#performanceChartAlias&quot;&nbsp;data-update='{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0,10,5,15,10,20,15,25,20,30,25,40]}]}}'&nbsp;data-prefix=&quot;$&quot;&nbsp;data-suffix=&quot;k&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;nav-link&nbsp;active&quot;&nbsp;href=&quot;#&quot;&nbsp;data-toggle=&quot;tab&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earned<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&nbsp;data-toggle=&quot;chart&quot;&nbsp;data-target=&quot;#performanceChartAlias&quot;&nbsp;data-update='{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[7,35,12,27,34,17,19,30,28,32,24,39]}]}}'&nbsp;data-prefix=&quot;&quot;&nbsp;data-suffix=&quot;hr&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;nav-link&quot;&nbsp;href=&quot;#&quot;&nbsp;data-toggle=&quot;tab&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hours&nbsp;Worked<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&lt;/li&gt;<br/>&lt;/ul&gt;<br/><br/>&lt;div&nbsp;class=&quot;chart&quot;&gt;<br/>&nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;performanceChartAlias&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- DROPDOWNS -->
            <div id="dropdowns">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Dropdowns
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin. Please read the <a target="_blank" href="https://getbootstrap.com/docs/4.0/components/dropdowns/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="d-flex flex-wrap">

                  <div class="dropdown mr-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>

                  <div class="dropdown mr-3">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonTwo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonTwo">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>

                  <div class="btn-group">

                    <button type="button" class="btn btn-danger">Action</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>

                  </div>

                </div>


                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Dropdown ellipsis <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Creates a compact dropdown toggler with a Feather icon.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">

                      <h4 class="card-header-title">
                        Latest orders
                      </h4>

                    </div>
                    <div class="col-auto">

                      <div class="dropdown">
                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a href="#!" class="dropdown-item">
                            Action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Another action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Something else here
                          </a>
                        </div>
                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;dropdown&quot;&gt;<br/>&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;dropdown-ellipses&nbsp;dropdown-toggle&quot;&nbsp;role=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-more-vertical&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-right&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another&nbsp;action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something&nbsp;else&nbsp;here<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Dropdown card <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Turns the default Bootstrap dropdown menu into a fully functional <code>.card</code> component. The height of the <code>.card-body</code> container will be limited and a scrolling bar will appear once this height is exceeded.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Card dropdown
                    </button>
                    <div class="dropdown-menu dropdown-menu-card">
                      <div class="card-body">

                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat recusandae rem autem impedit ad odio, enim tempore possimus non minus quod dignissimos ipsum eveniet odit, ratione molestiae, velit a dolorem!
                        </p>

                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;dropdown&quot;&gt;<br/>&nbsp;&nbsp;&lt;button&nbsp;class=&quot;btn&nbsp;btn-primary&nbsp;dropdown-toggle&quot;&nbsp;type=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;Card&nbsp;dropdown<br/>&nbsp;&nbsp;&lt;/button&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-card&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Quaerat&nbsp;recusandae&nbsp;rem&nbsp;autem&nbsp;impedit&nbsp;ad&nbsp;odio,&nbsp;enim&nbsp;tempore&nbsp;possimus&nbsp;non&nbsp;minus&nbsp;quod&nbsp;dignissimos&nbsp;ipsum&nbsp;eveniet&nbsp;odit,&nbsp;ratione&nbsp;molestiae,&nbsp;velit&nbsp;a&nbsp;dolorem!<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Dropdown multilevel <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Create nested dropdowns with the default Bootstrap markup.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonAlias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonAlias">
                      <li>
                        <a class="dropdown-item" href="#!">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#!">Another action</a>
                      </li>
                      <li class="dropright">
                        <a class="dropdown-item dropdown-toggle" href="#" id="dropdownSubmenuButton" data-toggle="dropdown">Something else here</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownSubmenuButton">
                          <a class="dropdown-item" href="#!">Action</a>
                          <a class="dropdown-item" href="#!">Another action</a>
                          <a class="dropdown-item" href="#!">Something else here</a>
                        </div>
                      </li>
                    </ul>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;dropdown&quot;&gt;<br/>&nbsp;&nbsp;&lt;button&nbsp;class=&quot;btn&nbsp;btn-secondary&nbsp;dropdown-toggle&quot;&nbsp;type=&quot;button&quot;&nbsp;id=&quot;dropdownMenuButton&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;Dropdown&nbsp;button<br/>&nbsp;&nbsp;&lt;/button&gt;<br/>&nbsp;&nbsp;&lt;ul&nbsp;class=&quot;dropdown-menu&quot;&nbsp;aria-labelledby=&quot;dropdownMenuButton&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;dropdown-item&quot;&nbsp;href=&quot;#&quot;&gt;Action&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;dropdown-item&quot;&nbsp;href=&quot;#&quot;&gt;Another&nbsp;action&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;dropright&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;dropdown-item&nbsp;dropdown-toggle&quot;&nbsp;href=&quot;#&quot;&nbsp;id=&quot;dropdownSubmenuButton&quot;&nbsp;data-toggle=&quot;dropdown&quot;&gt;Something&nbsp;else&nbsp;here&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&quot;&nbsp;aria-labelledby=&quot;dropdownSubmenuButton&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;dropdown-item&quot;&nbsp;href=&quot;#&quot;&gt;Action&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;dropdown-item&quot;&nbsp;href=&quot;#&quot;&gt;Another&nbsp;action&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;dropdown-item&quot;&nbsp;href=&quot;#&quot;&gt;Something&nbsp;else&nbsp;here&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;/ul&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- FORMS -->
            <div id="forms">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Forms
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Dashkit supports all of Bootstrap's default form styling in addition to a handful of new input types and features. Please read <a target="_blank" href="https://getbootstrap.com/docs/4.0/components/forms/">the official documentation</a> for a full list of options from Bootstrap's core library.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Validation
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code> classes.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <form>
                    <div class="form-row">
                      <div class="col-12 col-md-6 mb-3">
                        <label for="validationServer01">First name</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label for="validationServer02">Last name</label>
                        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-12 col-md-6 mb-3">
                        <label for="validationServer03">City</label>
                        <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                        <div class="invalid-feedback">
                          Please provide a valid city.
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label for="validationServer04">State</label>
                        <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                        <div class="invalid-feedback">
                          Please provide a valid state.
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                        <label class="form-check-label" for="invalidCheck3">
                          Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                  </form>

                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Rounded <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Round form control corners with the <code>.form-control-rounded</code> modifier.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <input type="text" class="form-control form-control-rounded" placeholder="Form control rounded">

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-rounded&quot; placeholder=&quot;Form control rounded&quot;&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Flush <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Remove paddings and borders from a form control with the <code>.form-control-flush</code> modifier.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <input type="text" class="form-control form-control-flush" placeholder="Form control flush">

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-flush&quot; placeholder=&quot;Form control raw&quot;&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Input group merge <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A slightly modified version of the default input groups that always keeps icons as a part of the form control.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="input-group input-group-merge mb-3">
                    <input type="text" class="form-control form-control-prepended" placeholder="Input group prepended">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <span class="fe fe-eye"></span>
                      </div>
                    </div>
                  </div>

                  <div class="input-group input-group-merge mb-3">
                    <input type="text" class="form-control form-control-appended" placeholder="Input group appended">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fe fe-lock"></span>
                      </div>
                    </div>
                  </div>

                  <div class="input-group input-group-merge mb-3">
                    <input type="text" class="form-control form-control-prepended is-valid" placeholder="Input group prepended">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <span class="fe fe-eye"></span>
                      </div>
                    </div>
                  </div>

                  <div class="input-group input-group-merge mb-3">
                    <input type="text" class="form-control form-control-appended is-invalid" placeholder="Input group appended">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fe fe-lock"></span>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;input-group&nbsp;input-group-merge&nbsp;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&lt;input&nbsp;type=&quot;text&quot;&nbsp;class=&quot;form-control&nbsp;form-control-prepended&quot;&nbsp;placeholder=&quot;Input&nbsp;group&nbsp;prepended&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;input-group-prepend&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;input-group-text&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;fe&nbsp;fe-eye&quot;&gt;&lt;/span&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;input-group&nbsp;input-group-merge&nbsp;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&lt;input&nbsp;type=&quot;text&quot;&nbsp;class=&quot;form-control&nbsp;form-control-appended&quot;&nbsp;placeholder=&quot;Input&nbsp;group&nbsp;appended&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;input-group-append&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;input-group-text&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;fe&nbsp;fe-lock&quot;&gt;&lt;/span&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;input-group&nbsp;input-group-merge&nbsp;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&lt;input&nbsp;type=&quot;text&quot;&nbsp;class=&quot;form-control&nbsp;form-control-prepended&nbsp;is-valid&quot;&nbsp;placeholder=&quot;Input&nbsp;group&nbsp;prepended&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;input-group-prepend&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;input-group-text&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;fe&nbsp;fe-eye&quot;&gt;&lt;/span&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;<br/><br/>&lt;div&nbsp;class=&quot;input-group&nbsp;input-group-merge&nbsp;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&lt;input&nbsp;type=&quot;text&quot;&nbsp;class=&quot;form-control&nbsp;form-control-appended&nbsp;is-invalid&quot;&nbsp;placeholder=&quot;Input&nbsp;group&nbsp;appended&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;input-group-append&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;input-group-text&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;fe&nbsp;fe-lock&quot;&gt;&lt;/span&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Toggle <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Replaces a standard checkbox input with a toggle button.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                    <div class="custom-control custom-checkbox-toggle">
                      <input type="checkbox" class="custom-control-input" id="exampleTogglr">
                      <label class="custom-control-label" for="exampleTogglr"></label>
                    </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;custom-control&nbsp;custom-checkbox-toggle&quot;&gt;<br/>&nbsp;&nbsp;&lt;input&nbsp;type=&quot;checkbox&quot;&nbsp;class=&quot;custom-control-input&quot;&nbsp;id=&quot;exampleToggle&quot;&gt;<br/>&nbsp;&nbsp;&lt;label&nbsp;class=&quot;custom-control-label&quot;&nbsp;for=&quot;exampleToggle&quot;&gt;&lt;/label&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Date picker <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span> <span class="badge badge-soft-warning ml-1 mt--1">Plugin</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A simple yet powerful datepicker powered by the Flatpickr JavaScript plugin. Please read the <a target="_blank" href="https://flatpickr.js.org/">official plugin documentation</a> for a full list of options.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <input type="text" class="form-control mb-3" placeholder="Flatpickr example" data-toggle="flatpickr">

                  <input type="text" class="form-control" placeholder="Flatpickr range example" data-toggle="flatpickr" data-flatpickr-mode="range">

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;input&nbsp;type=&quot;text&quot;&nbsp;class=&quot;form-control&quot;&nbsp;placeholder=&quot;Flatpickr&nbsp;example&quot;&nbsp;data-toggle=&quot;flatpickr&quot;&gt;<br/><br/>&lt;input&nbsp;type=&quot;text&quot;&nbsp;class=&quot;form-control&quot;&nbsp;placeholder=&quot;Flatpickr&nbsp;range&nbsp;example&quot;&nbsp;data-toggle=&quot;flatpickr&quot;&nbsp;data-flatpickr-mode=&quot;range&quot;&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Input masking <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span> <span class="badge badge-soft-warning ml-1 mt--1">Plugin</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Mask your form controls depending on the context with the jQuery Mask plugin. Please read the <a target="_blank" href="https://igorescobar.github.io/jQuery-Mask-Plugin/">official plugin documentation</a> for a full list of options.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <input type="text" class="form-control mb-3" placeholder="$" data-mask="#.##0,00" data-mask-reverse="true">

                  <input type="text" class="form-control mb-3" placeholder="(___)___-____" data-mask="(000) 000-0000">

                  <input type="text" class="form-control" placeholder="__/__/____" data-mask="00/00/0000">

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;US currency example&quot; data-mask=&quot;#.##0,00&quot; data-mask-reverse=&quot;true&quot;&gt;<br/><br/>&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;US telephone example&quot; data-mask=&quot;(000) 000-0000&quot;&gt;<br/><br/>&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;US data example&quot; data-mask=&quot;00/00/0000&quot;&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Rich text editor <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span> <span class="badge badge-soft-warning ml-1 mt--1">Plugin</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Powerful WYSIWYG text editor powered by Quill. Please read the <a target="_blank" href="https://quilljs.com/">official plugin documentation</a> for a full list of options.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <form>
                    <div data-toggle="quill" data-quill-placeholder="Quill WYSIWYG"></div>
                  </form>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;data-toggle=&quot;quill&quot;&nbsp;data-quill-placeholder=&quot;Quill&nbsp;WYSIWYG&nbsp;editor&quot;&gt;&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Drag and drop <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span> <span class="badge badge-soft-warning ml-1 mt--1">Plugin</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Drag and drop file uploads with image previews powered by Dropzone.js. Please read the <a target="_blank" href="http://www.dropzonejs.com">official plugin documentation</a> for a full list of options.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">

                    <!-- Fallback -->
                    <div class="fallback">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="projectCoverUploads">
                        <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                      </div>
                    </div>

                    <!-- Preview -->
                    <div class="dz-preview dz-preview-single">
                      <div class="dz-preview-cover">
                        <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
                      </div>
                    </div>

                  </div>

                  <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://">

                    <!-- Fallback -->
                    <div class="fallback">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileUploadMultiple" multiple>
                        <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                      </div>
                    </div>

                    <!-- Preview -->
                    <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                      <li class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <div class="avatar">
                              <img class="avatar-img rounded" src="..." alt="..." data-dz-thumbnail>
                            </div>
                          </div>
                          <div class="col ml--3">
                            <h4 class="mb-1" data-dz-name>...</h4>
                            <p class="small text-muted mb-0" data-dz-size>...</p>
                          </div>
                          <div class="col-auto">

                            <div class="dropdown">
                              <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-dz-remove>
                                  Remove
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </li>
                    </ul>

                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;!--&nbsp;Single&nbsp;--&gt;<br/>&lt;div&nbsp;class=&quot;dropzone&nbsp;dropzone-single&nbsp;mb-3&quot;&nbsp;data-toggle=&quot;dropzone&quot;&nbsp;data-dropzone-url=&quot;http://&quot;&gt;<br/><br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;fallback&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;custom-file&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type=&quot;file&quot;&nbsp;class=&quot;custom-file-input&quot;&nbsp;id=&quot;projectCoverUploads&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&nbsp;class=&quot;custom-file-label&quot;&nbsp;for=&quot;projectCoverUploads&quot;&gt;Choose&nbsp;file&lt;/label&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dz-preview&nbsp;dz-preview-single&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dz-preview-cover&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;class=&quot;dz-preview-img&quot;&nbsp;src=&quot;...&quot;&nbsp;alt=&quot;...&quot;&nbsp;data-dz-thumbnail&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&lt;/div&gt;<br/><br/><br/>&lt;!--&nbsp;Multiple&nbsp;--&gt;<br/>&lt;div&nbsp;class=&quot;dropzone&nbsp;dropzone-multiple&quot;&nbsp;data-toggle=&quot;dropzone&quot;&nbsp;data-dropzone-multiple&nbsp;data-dropzone-url=&quot;http://&quot;&gt;<br/><br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;fallback&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;custom-file&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type=&quot;file&quot;&nbsp;class=&quot;custom-file-input&quot;&nbsp;id=&quot;customFileUploadMultiple&quot;&nbsp;multiple&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&nbsp;class=&quot;custom-file-label&quot;&nbsp;for=&quot;customFileUploadMultiple&quot;&gt;Choose&nbsp;file&lt;/label&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;ul&nbsp;class=&quot;dz-preview&nbsp;dz-preview-multiple&nbsp;list-group&nbsp;list-group-lg&nbsp;list-group-flush&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&nbsp;px-0&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;class=&quot;avatar-img&nbsp;rounded&quot;&nbsp;src=&quot;...&quot;&nbsp;alt=&quot;...&quot;&nbsp;data-dz-thumbnail&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;ml--3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&nbsp;class=&quot;mb-1&quot;&nbsp;data-dz-name&gt;...&lt;/h4&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;small&nbsp;text-muted&nbsp;mb-0&quot;&nbsp;data-dz-size&gt;...&lt;/p&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;dropdown-ellipses&nbsp;dropdown-toggle&quot;&nbsp;role=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-more-vertical&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-right&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;dropdown-item&quot;&nbsp;data-dz-remove&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remove<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;/ul&gt;<br/><br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Select <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span> <span class="badge badge-soft-warning ml-1 mt--1">Plugin</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options powered by Select2. Please read the <a target="_blank" href="https://select2.org/">official plugin documentation</a> for a full list of options.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="mb-3">
                    <select class="form-control" data-toggle="select">
                      <option>My first option</option>
                      <option>Another option</option>
                      <option>Third option is here</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <select class="form-control" data-toggle="select" data-minimum-results-for-search="-1">
                      <option data-avatar-src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg">
                        Dianna Smiley
                      </option>
                      <option data-avatar-src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg">
                        Ab Hadley
                      </option>
                      <option data-avatar-src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg">
                        Adolfo Hess
                      </option>
                      <option data-avatar-src="../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg">
                        Daniela Dewitt
                      </option>
                    </select>
                  </div>

                  <div class="mb-4">
                    <select class="form-control" data-toggle="select" multiple>
                      <option>CSS</option>
                      <option>HTML</option>
                      <option>JavaScript</option>
                      <option>Bootstrap</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <select class="form-control form-control-lg" data-toggle="select" multiple>
                      <option>CSS</option>
                      <option>HTML</option>
                      <option>JavaScript</option>
                      <option>Bootstrap</option>
                    </select>
                  </div>

                  <div class="mb-0">
                    <select class="form-control form-control-sm" data-toggle="select">
                      <option>My first option</option>
                      <option>Another option</option>
                      <option>Third option is here</option>
                    </select>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;select&nbsp;class=&quot;form-control&quot;&nbsp;data-toggle=&quot;select&quot;&gt;<br/>&nbsp;&nbsp;&lt;option&gt;My&nbsp;first&nbsp;option&lt;/option&gt;<br/>&nbsp;&nbsp;&lt;option&gt;Another&nbsp;option&lt;/option&gt;<br/>&nbsp;&nbsp;&lt;option&gt;Third&nbsp;option&nbsp;is&nbsp;here&lt;/option&gt;<br/>&lt;/select&gt;<br/><br/>&lt;select&nbsp;class=&quot;form-control&quot;&nbsp;data-toggle=&quot;select&quot;&nbsp;data-minimum-results-for-search=&quot;-1&quot;&gt;<br/>&nbsp;&nbsp;&lt;option&nbsp;data-avatar-src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;Dianna&nbsp;Smiley<br/>&nbsp;&nbsp;&lt;/option&gt;<br/>&lt;/select&gt;<br/><br/>&lt;select&nbsp;class=&quot;form-control&quot;&nbsp;data-toggle=&quot;select&quot;&nbsp;multiple&gt;<br/>&nbsp;&nbsp;&lt;option&gt;CSS&lt;/option&gt;<br/>&nbsp;&nbsp;&lt;option&gt;HTML&lt;/option&gt;<br/>&nbsp;&nbsp;&lt;option&gt;JavaScript&lt;/option&gt;<br/>&nbsp;&nbsp;&lt;option&gt;Bootstrap&lt;/option&gt;<br/>&lt;/select&gt;<br/><br/>&lt;select&nbsp;class=&quot;form-control&nbsp;form-control-lg&quot;&nbsp;data-toggle=&quot;select&quot;&nbsp;multiple&gt;<br/>&nbsp;&nbsp;&lt;option&gt;CSS&lt;/option&gt;<br/>&nbsp;&nbsp;&lt;option&gt;HTML&lt;/option&gt;<br/>&nbsp;&nbsp;&lt;option&gt;JavaScript&lt;/option&gt;<br/>&nbsp;&nbsp;&lt;option&gt;Bootstrap&lt;/option&gt;<br/>&lt;/select&gt;<br/><br/>&lt;select&nbsp;class=&quot;form-control&nbsp;form-control-sm&quot;&nbsp;data-toggle=&quot;select&quot;&gt;<br/>&nbsp;&nbsp;&lt;option&gt;My&nbsp;first&nbsp;option&lt;/option&gt;<br/>&nbsp;&nbsp;&lt;option&gt;Another&nbsp;option&lt;/option&gt;<br/>&nbsp;&nbsp;&lt;option&gt;Third&nbsp;option&nbsp;is&nbsp;here&lt;/option&gt;<br/>&lt;/select&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- ICONS -->
            <div id="icons">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Icons  <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Simply beautiful icons powered by the Feather icons. Please see the <a target="_blank" href="https://feathericons.com/">official plugin documentation</a> for a full list of icons.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="h2">
                    <span class="fe fe-activity mr-4"></span>
                    <span class="fe fe-airplay mr-4"></span>
                    <span class="fe fe-alert-circle mr-4"></span>
                    <span class="fe fe-alert-octagon mr-4"></span>
                    <span class="fe fe-alert-triangle mr-4"></span>
                    <span class="fe fe-align-center mr-4"></span>
                    <span class="fe fe-align-justify mr-4"></span>
                    <span class="fe fe-align-left mr-4"></span>
                    <span class="fe fe-align-right mr-4"></span>
                    <span class="fe fe-anchor mr-4"></span>
                    <span class="fe fe-aperture mr-4"></span>
                    <span class="fe fe-archive mr-4"></span>
                    <span class="fe fe-arrow-down mr-4"></span>
                    <span class="fe fe-arrow-down-circle mr-4"></span>
                    <span class="fe fe-arrow-down-left mr-4"></span>
                    <span class="fe fe-arrow-down-right mr-4"></span>
                    <span class="fe fe-arrow-left mr-4"></span>
                    <span class="fe fe-arrow-left-circle mr-4"></span>
                    <span class="fe fe-arrow-right mr-4"></span>
                    <span class="fe fe-arrow-right-circle mr-4"></span>
                    <span class="fe fe-arrow-up mr-4"></span>
                    <span class="fe fe-arrow-up-circle mr-4"></span>
                    <span class="fe fe-arrow-up-left mr-4"></span>
                    <span class="fe fe-arrow-up-right mr-4"></span>
                    <span class="fe fe-at-sign mr-4"></span>
                    <span class="fe fe-award mr-4"></span>
                    <span class="fe fe-bar-chart mr-4"></span>
                    <span class="fe fe-bar-chart-2 mr-4"></span>
                    <span class="fe fe-battery mr-4"></span>
                    <span class="fe fe-battery-charging mr-4"></span>
                    <span class="fe fe-bell mr-4"></span>
                    <span class="fe fe-bell-off mr-4"></span>
                    <span class="fe fe-bluetooth mr-4"></span>
                    <span class="fe fe-bold mr-4"></span>
                    <span class="fe fe-book mr-4"></span>
                    <span class="fe fe-book-open mr-4"></span>
                    <span class="fe fe-bookmark mr-4"></span>
                    <span class="fe fe-box mr-4"></span>
                    <span class="fe fe-briefcase mr-4"></span>
                    <span class="fe fe-calendar mr-4"></span>
                    <span class="fe fe-camera mr-4"></span>
                    <span class="fe fe-camera-off mr-4"></span>
                    <span class="fe fe-cast mr-4"></span>
                    <span class="fe fe-check mr-4"></span>
                    <span class="fe fe-check-circle mr-4"></span>
                    <span class="fe fe-check-square mr-4"></span>
                    <span class="fe fe-chevron-down mr-4"></span>
                    <span class="fe fe-chevron-left mr-4"></span>
                    <span class="fe fe-chevron-right mr-4"></span>
                    <span class="fe fe-chevron-up mr-4"></span>
                    <span class="fe fe-chevrons-down mr-4"></span>
                    <span class="fe fe-chevrons-left mr-4"></span>
                    <span class="fe fe-chevrons-right mr-4"></span>
                    <span class="fe fe-chevrons-up mr-4"></span>
                    <span class="fe fe-chrome mr-4"></span>
                    <span class="fe fe-circle mr-4"></span>
                    <span class="fe fe-clipboard mr-4"></span>
                    <span class="fe fe-clock mr-4"></span>
                    <span class="fe fe-cloud mr-4"></span>
                    <span class="fe fe-cloud-drizzle mr-4"></span>
                    <span class="fe fe-cloud-lightning mr-4"></span>
                    <span class="fe fe-cloud-off mr-4"></span>
                    <span class="fe fe-cloud-rain mr-4"></span>
                    <span class="fe fe-cloud-snow mr-4"></span>
                    <span class="fe fe-code mr-4"></span>
                    <span class="fe fe-command mr-4"></span>
                    <span class="fe fe-compass mr-4"></span>
                    <span class="fe fe-copy mr-4"></span>
                    <span class="fe fe-corner-down-left mr-4"></span>
                    <span class="fe fe-corner-down-right mr-4"></span>
                    <span class="fe fe-corner-left-down mr-4"></span>
                    <span class="fe fe-corner-left-up mr-4"></span>
                    <span class="fe fe-corner-right-down mr-4"></span>
                    <span class="fe fe-corner-right-up mr-4"></span>
                    <span class="fe fe-corner-up-left mr-4"></span>
                    <span class="fe fe-corner-up-right mr-4"></span>
                    <span class="fe fe-cpu mr-4"></span>
                    <span class="fe fe-credit-card mr-4"></span>
                    <span class="fe fe-crop mr-4"></span>
                    <span class="fe fe-crosshair mr-4"></span>
                    <span class="fe fe-database mr-4"></span>
                    <span class="fe fe-delete mr-4"></span>
                    <span class="fe fe-disc mr-4"></span>
                    <span class="fe fe-dollar-sign mr-4"></span>
                    <span class="fe fe-download mr-4"></span>
                    <span class="fe fe-download-cloud mr-4"></span>
                    <span class="fe fe-droplet mr-4"></span>
                    <span class="fe fe-edit mr-4"></span>
                    <span class="fe fe-edit-2 mr-4"></span>
                    <span class="fe fe-edit-3 mr-4"></span>
                    <span class="fe fe-external-link mr-4"></span>
                    <span class="fe fe-eye mr-4"></span>
                    <span class="fe fe-eye-off mr-4"></span>
                    <span class="fe fe-facebook mr-4"></span>
                    <span class="fe fe-fast-forward mr-4"></span>
                    <span class="fe fe-feather mr-4"></span>
                    <span class="fe fe-file mr-4"></span>
                    <span class="fe fe-file-minus mr-4"></span>
                    <span class="fe fe-file-plus mr-4"></span>
                    <span class="fe fe-file-text mr-4"></span>
                    <span class="fe fe-film mr-4"></span>
                    <span class="fe fe-filter mr-4"></span>
                    <span class="fe fe-flag mr-4"></span>
                    <span class="fe fe-folder mr-4"></span>
                    <span class="fe fe-folder-minus mr-4"></span>
                    <span class="fe fe-folder-plus mr-4"></span>
                    <span class="fe fe-gift mr-4"></span>
                    <span class="fe fe-git-branch mr-4"></span>
                    <span class="fe fe-git-commit mr-4"></span>
                    <span class="fe fe-git-merge mr-4"></span>
                    <span class="fe fe-git-pull-request mr-4"></span>
                    <span class="fe fe-github mr-4"></span>
                    <span class="fe fe-gitlab mr-4"></span>
                    <span class="fe fe-globe mr-4"></span>
                    <span class="fe fe-grid mr-4"></span>
                    <span class="fe fe-hard-drive mr-4"></span>
                    <span class="fe fe-hash mr-4"></span>
                    <span class="fe fe-headphones mr-4"></span>
                    <span class="fe fe-heart mr-4"></span>
                    <span class="fe fe-help-circle mr-4"></span>
                    <span class="fe fe-home mr-4"></span>
                    <span class="fe fe-image mr-4"></span>
                    <span class="fe fe-inbox mr-4"></span>
                    <span class="fe fe-info mr-4"></span>
                    <span class="fe fe-instagram mr-4"></span>
                    <span class="fe fe-italic mr-4"></span>
                    <span class="fe fe-layers mr-4"></span>
                    <span class="fe fe-layout mr-4"></span>
                    <span class="fe fe-life-buoy mr-4"></span>
                    <span class="fe fe-link mr-4"></span>
                    <span class="fe fe-link-2 mr-4"></span>
                    <span class="fe fe-linkedin mr-4"></span>
                    <span class="fe fe-list mr-4"></span>
                    <span class="fe fe-loader mr-4"></span>
                    <span class="fe fe-lock mr-4"></span>
                    <span class="fe fe-log-in mr-4"></span>
                    <span class="fe fe-log-out mr-4"></span>
                    <span class="fe fe-mail mr-4"></span>
                    <span class="fe fe-map mr-4"></span>
                    <span class="fe fe-map-pin mr-4"></span>
                    <span class="fe fe-maximize mr-4"></span>
                    <span class="fe fe-maximize-2 mr-4"></span>
                    <span class="fe fe-menu mr-4"></span>
                    <span class="fe fe-message-circle mr-4"></span>
                    <span class="fe fe-message-square mr-4"></span>
                    <span class="fe fe-mic mr-4"></span>
                    <span class="fe fe-mic-off mr-4"></span>
                    <span class="fe fe-minimize mr-4"></span>
                    <span class="fe fe-minimize-2 mr-4"></span>
                    <span class="fe fe-minus mr-4"></span>
                    <span class="fe fe-minus-circle mr-4"></span>
                    <span class="fe fe-minus-square mr-4"></span>
                    <span class="fe fe-monitor mr-4"></span>
                    <span class="fe fe-moon mr-4"></span>
                    <span class="fe fe-more-horizontal mr-4"></span>
                    <span class="fe fe-more-vertical mr-4"></span>
                    <span class="fe fe-move mr-4"></span>
                    <span class="fe fe-music mr-4"></span>
                    <span class="fe fe-navigation mr-4"></span>
                    <span class="fe fe-navigation-2 mr-4"></span>
                    <span class="fe fe-octagon mr-4"></span>
                    <span class="fe fe-package mr-4"></span>
                    <span class="fe fe-paperclip mr-4"></span>
                    <span class="fe fe-pause mr-4"></span>
                    <span class="fe fe-pause-circle mr-4"></span>
                    <span class="fe fe-percent mr-4"></span>
                    <span class="fe fe-phone mr-4"></span>
                    <span class="fe fe-phone-call mr-4"></span>
                    <span class="fe fe-phone-forwarded mr-4"></span>
                    <span class="fe fe-phone-incoming mr-4"></span>
                    <span class="fe fe-phone-missed mr-4"></span>
                    <span class="fe fe-phone-off mr-4"></span>
                    <span class="fe fe-phone-outgoing mr-4"></span>
                    <span class="fe fe-pie-chart mr-4"></span>
                    <span class="fe fe-play mr-4"></span>
                    <span class="fe fe-play-circle mr-4"></span>
                    <span class="fe fe-plus mr-4"></span>
                    <span class="fe fe-plus-circle mr-4"></span>
                    <span class="fe fe-plus-square mr-4"></span>
                    <span class="fe fe-pocket mr-4"></span>
                    <span class="fe fe-power mr-4"></span>
                    <span class="fe fe-printer mr-4"></span>
                    <span class="fe fe-radio mr-4"></span>
                    <span class="fe fe-refresh-ccw mr-4"></span>
                    <span class="fe fe-refresh-cw mr-4"></span>
                    <span class="fe fe-repeat mr-4"></span>
                    <span class="fe fe-rewind mr-4"></span>
                    <span class="fe fe-rotate-ccw mr-4"></span>
                    <span class="fe fe-rotate-cw mr-4"></span>
                    <span class="fe fe-rss mr-4"></span>
                    <span class="fe fe-save mr-4"></span>
                    <span class="fe fe-scissors mr-4"></span>
                    <span class="fe fe-search mr-4"></span>
                    <span class="fe fe-send mr-4"></span>
                    <span class="fe fe-server mr-4"></span>
                    <span class="fe fe-settings mr-4"></span>
                    <span class="fe fe-share mr-4"></span>
                    <span class="fe fe-share-2 mr-4"></span>
                    <span class="fe fe-shield mr-4"></span>
                    <span class="fe fe-shield-off mr-4"></span>
                    <span class="fe fe-shopping-bag mr-4"></span>
                    <span class="fe fe-shopping-cart mr-4"></span>
                    <span class="fe fe-shuffle mr-4"></span>
                    <span class="fe fe-sidebar mr-4"></span>
                    <span class="fe fe-skip-back mr-4"></span>
                    <span class="fe fe-skip-forward mr-4"></span>
                    <span class="fe fe-slack mr-4"></span>
                    <span class="fe fe-slash mr-4"></span>
                    <span class="fe fe-sliders mr-4"></span>
                    <span class="fe fe-smartphone mr-4"></span>
                    <span class="fe fe-speaker mr-4"></span>
                    <span class="fe fe-square mr-4"></span>
                    <span class="fe fe-star mr-4"></span>
                    <span class="fe fe-stop-circle mr-4"></span>
                    <span class="fe fe-sun mr-4"></span>
                    <span class="fe fe-sunrise mr-4"></span>
                    <span class="fe fe-sunset mr-4"></span>
                    <span class="fe fe-tablet mr-4"></span>
                    <span class="fe fe-tag mr-4"></span>
                    <span class="fe fe-target mr-4"></span>
                    <span class="fe fe-terminal mr-4"></span>
                    <span class="fe fe-thermometer mr-4"></span>
                    <span class="fe fe-thumbs-down mr-4"></span>
                    <span class="fe fe-thumbs-up mr-4"></span>
                    <span class="fe fe-toggle-left mr-4"></span>
                    <span class="fe fe-toggle-right mr-4"></span>
                    <span class="fe fe-trash mr-4"></span>
                    <span class="fe fe-trash-2 mr-4"></span>
                    <span class="fe fe-trending-down mr-4"></span>
                    <span class="fe fe-trending-up mr-4"></span>
                    <span class="fe fe-triangle mr-4"></span>
                    <span class="fe fe-truck mr-4"></span>
                    <span class="fe fe-tv mr-4"></span>
                    <span class="fe fe-twitter mr-4"></span>
                    <span class="fe fe-type mr-4"></span>
                    <span class="fe fe-umbrella mr-4"></span>
                    <span class="fe fe-underline mr-4"></span>
                    <span class="fe fe-unlock mr-4"></span>
                    <span class="fe fe-upload mr-4"></span>
                    <span class="fe fe-upload-cloud mr-4"></span>
                    <span class="fe fe-user mr-4"></span>
                    <span class="fe fe-user-check mr-4"></span>
                    <span class="fe fe-user-minus mr-4"></span>
                    <span class="fe fe-user-plus mr-4"></span>
                    <span class="fe fe-user-x mr-4"></span>
                    <span class="fe fe-users mr-4"></span>
                    <span class="fe fe-video mr-4"></span>
                    <span class="fe fe-video-off mr-4"></span>
                    <span class="fe fe-voicemail mr-4"></span>
                    <span class="fe fe-volume mr-4"></span>
                    <span class="fe fe-volume-1 mr-4"></span>
                    <span class="fe fe-volume-2 mr-4"></span>
                    <span class="fe fe-volume-x mr-4"></span>
                    <span class="fe fe-watch mr-4"></span>
                    <span class="fe fe-wifi mr-4"></span>
                    <span class="fe fe-wifi-off mr-4"></span>
                    <span class="fe fe-wind mr-4"></span>
                    <span class="fe fe-x mr-4"></span>
                    <span class="fe fe-x-circle mr-4"></span>
                    <span class="fe fe-x-square mr-4"></span>
                    <span class="fe fe-youtube mr-4"></span>
                    <span class="fe fe-zap mr-4"></span>
                    <span class="fe fe-zap-off mr-4"></span>
                    <span class="fe fe-zoom-in mr-4"></span>
                    <span class="fe fe-zoom-out mr-4"></span>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;span&nbsp;class=&quot;fe&nbsp;fe-home&quot;&gt;&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;fe&nbsp;fe-file&quot;&gt;&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;fe&nbsp;fe-user&quot;&gt;&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;fe&nbsp;fe-layout&quot;&gt;&lt;/span&gt;<br/>&lt;span&nbsp;class=&quot;fe&nbsp;fe-briefcase&quot;&gt;&lt;/span&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- LISTS -->
            <div id="lists">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Lists
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within. Please read the <a target="_blank" href="http://getbootstrap.com/docs/4.1/components/list-group/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <ul class="list-group">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Morbi leo risus
                      <span class="badge badge-primary badge-pill">1</span>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                List group large <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Increase the vertical padding of list group items with the <code>.list-group-lg</code> modifier.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <ul class="list-group list-group-lg">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;ul&nbsp;class=&quot;list-group&nbsp;list-group-lg&quot;&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&nbsp;active&quot;&gt;Cras&nbsp;justo&nbsp;odio&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&quot;&gt;Dapibus&nbsp;ac&nbsp;facilisis&nbsp;in&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&quot;&gt;Morbi&nbsp;leo&nbsp;risus&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&quot;&gt;Porta&nbsp;ac&nbsp;consectetur&nbsp;ac&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&quot;&gt;Vestibulum&nbsp;at&nbsp;eros&lt;/li&gt;<br/>&lt;/ul&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                List.js <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span> <span class="badge badge-soft-warning ml-1 mt--1">Plugin</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Create searchable, sortable, and filterable lists and tables with the simple but powerful List.js plugin. Please read the <a target="_blank" href="http://listjs.com/">official plugin documentation</a> for a full list of options. The following options are available via the <code>data</code> attributes to initialize the plugin without any JavaScript:
              </p>

              <!-- Table -->
              <div class="card">
                <div class="card-header">
                  <h4 class="card-header-title">
                    Options
                  </h4>
                </div>
                <div class="table-responsive">
                  <table class="table table-sm card-table">
                    <thead>
                      <tr>
                        <th>
                          Name
                        </th>
                        <th>
                          Type
                        </th>
                        <th>
                          Default
                        </th>
                        <th>
                          Description
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <code>data-toggle</code>
                        </td>
                        <td>
                          string
                        </td>
                        <td>
                          lists
                        </td>
                        <td>
                          Creates a new <code>List</code> instance and initializes the plugin.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>data-lists-values</code>
                        </td>
                        <td>
                          array
                        </td>
                        <td>
                          -
                        </td>
                        <td>
                          An array of value names that will be used for searching, sorting and filtering.
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- Card -->
              <div class="card" data-toggle="lists" data-lists-values='["name"]'>
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">

                      <!-- Title -->
                      <h4 class="card-header-title">
                        Add a member
                      </h4>

                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="card-header">

                  <!-- Form -->
                  <form>
                    <div class="input-group input-group-flush input-group-merge">
                      <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-search"></span>
                        </div>
                      </div>
                    </div>
                  </form>

                </div>
                <div class="card-body">

                  <!-- List group -->
                  <ul class="list-group list-group-flush list my--3">
                    <li class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <a href="profile-posts.html" class="avatar">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="mb-1 name">
                            <a href="profile-posts.html">Miyah Myles</a>
                          </h4>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-success">●</span> Online
                          </p>

                        </div>
                        <div class="col-auto">

                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white">
                            Add
                          </a>

                        </div>
                      </div> <!-- / .row -->

                    </li>
                    <li class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <a href="profile-posts.html" class="avatar">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="mb-1 name">
                            <a href="profile-posts.html">Ryu Duke</a>
                          </h4>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-success">●</span> Online
                          </p>

                        </div>
                        <div class="col-auto">

                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white">
                            Add
                          </a>

                        </div>
                      </div> <!-- / .row -->

                    </li>
                    <li class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <a href="profile-posts.html" class="avatar">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="mb-1 name">
                            <a href="profile-posts.html">Glen Rouse</a>
                          </h4>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-warning">●</span> Busy
                          </p>

                        </div>
                        <div class="col-auto">

                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white">
                            Add
                          </a>

                        </div>
                      </div> <!-- / .row -->

                    </li>
                    <li class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <a href="profile-posts.html" class="avatar">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="mb-1 name">
                            <a href="profile-posts.html">Grace Gross</a>
                          </h4>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-danger">●</span> Offline
                          </p>

                        </div>
                        <div class="col-auto">

                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white">
                            Add
                          </a>

                        </div>
                      </div> <!-- / .row -->

                    </li>
                  </ul>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;data-toggle=&quot;lists&quot;&nbsp;data-lists-values='[&quot;name&quot;]'&gt;<br/>&nbsp;&nbsp;<br/>&nbsp;&nbsp;&lt;input&nbsp;class=&quot;form-control&nbsp;search&quot;&nbsp;type=&quot;search&quot;&gt;<br/><br/>&nbsp;&nbsp;&lt;ul&nbsp;class=&quot;list-group&nbsp;list&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;name&quot;&gt;Casey&nbsp;Fyfe&lt;/span&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;name&quot;&gt;Jane&nbsp;Roe&lt;/span&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;name&quot;&gt;Casey&nbsp;Fyfe&lt;/span&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;list-group-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;name&quot;&gt;Jane&nbsp;Roe&lt;/span&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;/ul&gt;<br/><br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- LOADERS -->
            <div id="loaders">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Loaders <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    A simple yet versatile animated spinner component.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="loader loader-lg d-inline-block"></div>
                  <div class="loader d-inline-block ml-3"></div>
                  <div class="loader loader-sm d-inline-block ml-3"></div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;loader&nbsp;loader-lg&quot;&gt;&lt;/div&gt;<br/>&lt;div&nbsp;class=&quot;loader&quot;&gt;&lt;/div&gt;<br/>&lt;div&nbsp;class=&quot;loader&nbsp;loader-sm&quot;&gt;&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Colors
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Using Bootstrap’s typical naming structure, you can create colored loaders depending on your needs.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="loader loader-primary d-inline-block"></div>
                  <div class="loader loader-secondary d-inline-block ml-3"></div>
                  <div class="loader loader-success d-inline-block ml-3"></div>
                  <div class="loader loader-danger d-inline-block ml-3"></div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;loader&nbsp;loader-primary&quot;&gt;&lt;/div&gt;<br/>&lt;div&nbsp;class=&quot;loader&nbsp;loader-secondary&quot;&gt;&lt;/div&gt;<br/>&lt;div&nbsp;class=&quot;loader&nbsp;loader-success&quot;&gt;&lt;/div&gt;<br/>&lt;div&nbsp;class=&quot;loader&nbsp;loader-error&quot;&gt;&lt;/div&gt;<br/>
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Loader helper
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Indicate loading state of nearly any component with an <code>.is-loading</code> modifier.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-header-title">
                        Loading card
                      </h4>
                    </div>
                    <div class="card-body is-loading is-loading-lg">
                      Card content
                    </div>
                  </div>

                  <div class="text-center">
                    <a href="#!" class="btn btn-lg btn-primary is-loading">
                      Button
                    </a>

                    <a href="#!" class="btn btn-white is-loading is-loading-sm">
                      Button
                    </a>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-header&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&nbsp;class=&quot;card-header-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loading&nbsp;card<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&nbsp;is-loading&nbsp;is-loading-lg&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;Card&nbsp;content<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-lg&nbsp;btn-primary&nbsp;is-loading&quot;&gt;<br/>&nbsp;&nbsp;Button<br/>&lt;/a&gt;<br/><br/>&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-white&nbsp;is-loading&nbsp;is-loading-sm&quot;&gt;<br/>&nbsp;&nbsp;Button<br/>&lt;/a&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- MODAL -->
            <div id="modal">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Modals
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content. Please read the <a target="_blank" href="http://getbootstrap.com/docs/4.1/components/modal/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <button class="btn btn-primary" data-toggle="modal" data-target="#modalMembers">
                    Launch demo modal
                  </button>

                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Vertical
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Creates a vertical variation of the modal component that acts as a layered sidebar. Can be used to display search results, notifications, and almost any other type of content.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <button class="btn btn-primary" data-toggle="modal" data-target="#sidebarModalSearch">
                    Launch vertical modal
                  </button>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;!--&nbsp;Left&nbsp;side&nbsp;--&gt;<br/>&lt;div&nbsp;class=&quot;modal&nbsp;fade&quot;&nbsp;id=&quot;modalVerticalLeft&quot;&nbsp;tabindex=&quot;-1&quot;&nbsp;role=&quot;dialog&quot;&nbsp;aria-hidden=&quot;true&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;modal-dialog&nbsp;modal-dialog-vertical&quot;&nbsp;role=&quot;document&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;modal-content&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;<br/><br/>&lt;!--&nbsp;Right&nbsp;side&nbsp;--&gt;<br/>&lt;div&nbsp;class=&quot;modal&nbsp;fade&nbsp;fixed-right&quot;&nbsp;id=&quot;modalVerticalRight&quot;&nbsp;tabindex=&quot;-1&quot;&nbsp;role=&quot;dialog&quot;&nbsp;aria-hidden=&quot;true&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;modal-dialog&nbsp;modal-dialog-vertical&quot;&nbsp;role=&quot;document&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;modal-content&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- NAVS -->
            <div id="navs">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Navs
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Please read the <a target="_blank" href="http://getbootstrap.com/docs/4.1/components/navs/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <ul class="nav nav-tabs mb-4">
                    <li class="nav-item">
                      <a class="nav-link active" href="#!">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#!">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#!">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#!">Disabled</a>
                    </li>
                  </ul>

                  <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link active" href="#!">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#!">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#!">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#!">Disabled</a>
                    </li>
                  </ul>

                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Small Nav Tabs <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Creates a small variation of the nav component – this is especially useful for putting in <code>.card-header</code>s to act as tabs.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <ul class="nav nav-tabs nav-tabs-sm">
                    <li class="nav-item">
                      <a href="#!" class="nav-link active">
                        Active
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#!" class="nav-link">
                        Link
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#!" class="nav-link">
                        Link
                      </a>
                    </li>
                  </ul>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;ul&nbsp;class=&quot;nav&nbsp;nav-tabs&nbsp;nav-tabs-sm&quot;&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;active&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Active<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&lt;/li&gt;<br/>&lt;/ul&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Horz. Overscroll <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Creates a horizontally scrollable variation of the nav component. Items do not get stacked if they don't fit the viewport. Instead, they stay on the same line and become scrollable in the x axes.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <ul class="nav nav-tabs nav-tabs-sm nav-overflow">
                    <li class="nav-item">
                      <a href="#!" class="nav-link active">
                        Active
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#!" class="nav-link">
                        Link
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#!" class="nav-link">
                        Link
                      </a>
                    </li>
                  </ul>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;ul&nbsp;class=&quot;nav&nbsp;nav-tabs&nbsp;nav-tabs-sm&nbsp;nav-overflow&quot;&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;active&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Active<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&lt;/li&gt;<br/>&lt;/ul&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- NAVBAR -->
            <div id="navbarExample">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Navbar
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Powerful and responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for the collapse plugin. Please read the <a target="_blank" href="http://getbootstrap.com/docs/4.1/components/navbar/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <nav class="navbar navbar-expand-xl navbar-light" style="border: none;">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#!">Navbar</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="#!">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#!">Link</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#!">Action</a>
                              <a class="dropdown-item" href="#!">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#!">Something else here</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled" href="#!">Disabled</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>

                  <nav class="navbar navbar-expand-xl navbar-dark bg-dark" style="border: none;">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#!">Navbar</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="#!">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#!">Link</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                              <a class="dropdown-item" href="#!">Action</a>
                              <a class="dropdown-item" href="#!">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#!">Something else here</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled" href="#!">Disabled</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>

                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Vertical <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Creates a vertical variation of the navbar component. Either the <code>.fixed-left</code> or <code>.fixed-right</code> modifier should be added to position the navbar along the left or right side of the viewport. The markup for everything else remains the same as the default navbar!
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <nav class="navbar navbar-vertical fixed-left navbar-expand-sm navbar-light" style="position: relative; border-width: 0;">

                    <!-- Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarVertical" aria-controls="navbarVertical" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Brand -->
                    <a class="navbar-brand" href="index.html">
                      <img src="../../assets/ui/assets/img/logo.svg" class="navbar-brand-img
                      mx-auto" alt="...">
                    </a>

                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="navbarVertical">

                      <!-- Navigation -->
                      <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                          <a class="nav-link" href="getting-started.html">
                            <i class="fe fe-clipboard"></i> Getting started
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="components.html">
                            <i class="fe fe-book-open"></i> Components <span class="badge badge-primary ml-auto">23</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="changelog.html">
                            <i class="fe fe-git-branch"></i> Changelog
                          </a>
                        </li>
                      </ul>

                    </div> <!-- / .navbar-collapse -->

                  </nav>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;nav&nbsp;class=&quot;navbar&nbsp;navbar-vertical&nbsp;fixed-left&nbsp;navbar-expand-md&nbsp;navbar-light&quot;&gt;<br/>&nbsp;&nbsp;...<br/>&lt;/nav&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- PAGE HEADERS -->
            <div id="page-headers">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Page headers <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    The page header component that can be easily extended with other Bootstrap and Dashkit components.
                  </p>

                </div>
              </div>

              <!-- Heading -->
              <h2 class="mb-2">
                Basic
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                The basic page header with a preheading and a heading.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="header">
                    <div class="header-body">

                      <!-- Pretitle -->
                      <h6 class="header-pretitle">
                        Members
                      </h6>

                      <!-- Title -->
                      <h1 class="header-title">
                        Dianna Smiley
                      </h1>

                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;header&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;header-body&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;header-pretitle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Members<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&nbsp;class=&quot;header-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Casey&nbsp;Fyfe<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Button
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                The basic page header extended with a button.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="header">
                    <div class="header-body">
                      <div class="row align-items-center">
                        <div class="col">

                          <!-- Pretitle -->
                          <h6 class="header-pretitle">
                            Members
                          </h6>

                          <!-- Title -->
                          <h1 class="header-title">
                            Dianna Smiley
                          </h1>

                        </div>
                        <div class="col-auto">

                          <!-- Button -->
                          <a href="#!" class="btn btn-primary">
                            Subscribe
                          </a>

                        </div>
                      </div> <!-- / .row -->

                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;header&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;header-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;header-pretitle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Members<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&nbsp;class=&quot;header-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Casey&nbsp;Fyfe<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;btn&nbsp;btn-primary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscribe<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Nav
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                The basic page header extended with a tabbed navigation.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="header">
                    <div class="header-body">
                      <div class="row align-items-end">
                        <div class="col">

                          <!-- Pretitle -->
                          <h6 class="header-pretitle">
                            Members
                          </h6>

                          <!-- Title -->
                          <h1 class="header-title">
                            Dianna Smiley
                          </h1>

                        </div>
                        <div class="col-auto">

                          <!-- Nav -->
                          <ul class="nav nav-tabs header-tabs">
                            <li class="nav-item">
                              <a href="#!" class="nav-link text-center active">
                                Daily
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="#!" class="nav-link text-center">
                                Weekly
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="#!" class="nav-link text-center">
                                Monthly
                              </a>
                            </li>
                          </ul>

                        </div>
                      </div> <!-- / .row -->

                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;header&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;header-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-end&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;header-pretitle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Members<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&nbsp;class=&quot;header-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Casey&nbsp;Fyfe<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&nbsp;class=&quot;nav&nbsp;nav-tabs&nbsp;header-tabs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;text-center&nbsp;active&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daily<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;text-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Weekly<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;text-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monthly<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;&nbsp;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Button + nav
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                The basic page header extended with a button and a tabbed navigation.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="header">
                    <div class="header-body">
                      <div class="row align-items-end">
                        <div class="col">

                          <!-- Pretitle -->
                          <h6 class="header-pretitle">
                            Members
                          </h6>

                          <!-- Title -->
                          <h1 class="header-title">
                            Dianna Smiley
                          </h1>

                        </div>
                        <div class="col-auto">

                          <!-- Buttom -->
                          <a href="#!" class="btn btn-primary">
                            Subscribe
                          </a>

                        </div>
                      </div> <!-- / .row -->
                      <div class="row">
                        <div class="col-12">

                          <!-- Nav -->
                          <ul class="nav nav-tabs header-tabs">
                            <li class="nav-item">
                              <a href="#!" class="nav-link text-center active">
                                Daily
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="#!" class="nav-link text-center">
                                Weekly
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="#!" class="nav-link text-center">
                                Monthly
                              </a>
                            </li>
                          </ul>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;header&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;header-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-end&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;header-pretitle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Members<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&nbsp;class=&quot;header-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Casey&nbsp;Fyfe<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;btn&nbsp;btn-primary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscribe<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-12&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&nbsp;class=&quot;nav&nbsp;nav-tabs&nbsp;header-tabs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;text-center&nbsp;active&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daily<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;text-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Weekly<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;text-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monthly<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Avatar + nav
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                The basic page header extended with an avatar group and a tabbed navigation.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="header">
                    <div class="container-fluid">

                      <!-- Body -->
                      <div class="header-body">
                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-lg avatar-4by3">
                              <img src="../../assets/ui/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml--3 ml-md--2">

                            <!-- Pretitle -->
                            <h6 class="header-pretitle">
                              Projects
                            </h6>

                            <!-- Title -->
                            <h1 class="header-title">
                              Homepage
                            </h1>

                          </div>
                          <div class="col-12 col-md-auto mt-3 mt-md-0">

                            <!-- Avatar group -->
                            <div class="avatar-group">
                              <a href="profile-posts.html" class="avatar">
                                <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                              </a>
                              <a href="profile-posts.html" class="avatar">
                                <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                              </a>
                              <a href="profile-posts.html" class="avatar">
                                <img src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                              </a>
                              <a href="profile-posts.html" class="avatar">
                                <img src="../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                              </a>
                            </div>

                            <!-- Button -->
                            <a href="#modalMembers" class="btn btn-lg btn-rounded-circle btn-white" data-toggle="modal">
                              +
                            </a>

                          </div>
                        </div> <!-- / .row -->
                        <div class="row align-items-center">
                          <div class="col">

                            <!-- Nav -->
                            <ul class="nav nav-tabs nav-overflow header-tabs">
                              <li class="nav-item">
                                <a href="project-overview.html" class="nav-link active">
                                  Overview
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="project-files.html" class="nav-link">
                                  Files
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="project-reports.html" class="nav-link">
                                  Reports
                                </a>
                              </li>
                            </ul>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div> <!-- / .header -->

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;header&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;container-fluid&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;header-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-lg&nbsp;avatar-4by3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/projects/project-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;ml--3&nbsp;ml-md--2&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;header-pretitle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Projects<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&nbsp;class=&quot;header-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Homepage&nbsp;Redesign<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-12&nbsp;col-md-auto&nbsp;mt-3&nbsp;mt-md-0&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar-group&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#modalMembers&quot;&nbsp;class=&quot;btn&nbsp;btn-lg&nbsp;btn-rounded-circle&nbsp;btn-white&quot;&nbsp;data-toggle=&quot;modal&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&nbsp;class=&quot;nav&nbsp;nav-tabs&nbsp;nav-overflow&nbsp;header-tabs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;project-overview.html&quot;&nbsp;class=&quot;nav-link&nbsp;active&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Overview<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;project-files.html&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Files<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;project-reports.html&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reports<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Cover image
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A complex page header variation with an image, avatar and other optional components.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="header">

                    <!-- Image -->
                    <img src="../../assets/ui/assets/img/covers/profile-cover-1.jpg" class="header-img-top" alt="...">

                    <div class="container-fluid">

                      <!-- Body -->
                      <div class="header-body mt--5 mt-md--6">
                        <div class="row align-items-end">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-xxl header-avatar-top">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle border border-4 border-card">
                            </div>

                          </div>
                          <div class="col mb-3 ml--3 ml-md--2">

                            <!-- Pretitle -->
                            <h6 class="header-pretitle">
                              Members
                            </h6>

                            <!-- Title -->
                            <h1 class="header-title">
                              Dianna Smiley
                            </h1>

                          </div>
                          <div class="col-12 col-md-auto mt-2 mt-md-0 mb-md-3">

                            <!-- Button -->
                            <a href="#!" class="btn btn-primary d-block d-md-inline-block">
                              Subscribe
                            </a>

                          </div>
                        </div> <!-- / .row -->
                        <div class="row align-items-center">
                          <div class="col">

                            <!-- Nav -->
                            <ul class="nav nav-tabs nav-overflow header-tabs">
                              <li class="nav-item">
                                <a href="profile-posts.html" class="nav-link">
                                  Posts
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="profile-groups.html" class="nav-link active">
                                  Groups
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="profile-projects.html" class="nav-link">
                                  Projects
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="profile-files.html" class="nav-link">
                                  Files
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="profile-subscribers.html" class="nav-link">
                                  Subscribers
                                </a>
                              </li>
                            </ul>

                          </div>
                        </div>
                      </div> <!-- / .header-body -->

                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;header&quot;&gt;<br/><br/>&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/covers/profile-cover-1.jpg&quot;&nbsp;class=&quot;header-img-top&quot;&nbsp;alt=&quot;...&quot;&gt;<br/>&nbsp;&nbsp;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;container-fluid&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;header-body&nbsp;mt--5&nbsp;mt-md--6&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-end&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar&nbsp;avatar-xxl&nbsp;header-avatar-top&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&nbsp;border&nbsp;border-4&nbsp;border-card&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;mb-3&nbsp;ml--3&nbsp;ml-md--2&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;header-pretitle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Members<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&nbsp;class=&quot;header-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Casey&nbsp;Fyfe<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-12&nbsp;col-md-auto&nbsp;mt-2&nbsp;mt-md-0&nbsp;mb-md-3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;btn&nbsp;btn-primary&nbsp;d-block&nbsp;d-md-inline-block&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscribe<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&nbsp;class=&quot;nav&nbsp;nav-tabs&nbsp;nav-overflow&nbsp;header-tabs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Posts<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-groups.html&quot;&nbsp;class=&quot;nav-link&nbsp;active&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Groups<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-projects.html&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Projects<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-files.html&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Files<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-subscribers.html&quot;&nbsp;class=&quot;nav-link&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscribers<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Chart
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                A complex page header variation with a tabbed navigation and a chart.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="header bg-dark pb-5">
                    <div class="container-fluid">

                      <!-- Body -->
                      <div class="header-body">
                        <div class="row align-items-end">
                          <div class="col">

                            <!-- Pretitle -->
                            <h6 class="header-pretitle text-secondary">
                              Overview
                            </h6>

                            <!-- Title -->
                            <h1 class="header-title text-white">
                              Performance
                            </h1>

                          </div>
                          <div class="col-auto">

                            <!-- Nav -->
                            <ul class="nav nav-tabs header-tabs">
                              <li class="nav-item" data-toggle="chart" data-target="#headerChart" data-update='{"data":{"datasets":[{"data":[0,10,5,15,10,20,15,25,20,30,25,40]}]}}'>
                                <a href="#" class="nav-link text-center active" data-toggle="tab">
                                  <h6 class="header-pretitle text-secondary">
                                    Earnings
                                  </h6>
                                  <h3 class="text-white mb-0">
                                    $19.2k
                                  </h3>
                                </a>
                              </li>
                              <li class="nav-item" data-toggle="chart" data-target="#headerChart" data-update='{"data":{"datasets":[{"data":[7,35,12,27,34,17,19,30,28,32,24,39]}]}}'>
                                <a href="#" class="nav-link text-center" data-toggle="tab">
                                  <h6 class="header-pretitle text-secondary">
                                    Sessions
                                  </h6>
                                  <h3 class="text-white mb-0">
                                    92.1k
                                  </h3>
                                </a>
                              </li>
                              <li class="nav-item" data-toggle="chart" data-target="#headerChart" data-update='{"data":{"datasets":[{"data":[2,12,35,25,36,25,34,16,4,14,15,37]}]}}'>
                                <a href="#" class="nav-link text-center" data-toggle="tab">
                                  <h6 class="header-pretitle text-secondary">
                                    Bounce
                                  </h6>
                                  <h3 class="text-white mb-0">
                                    50.2%
                                  </h3>
                                </a>
                              </li>
                            </ul>

                          </div>
                        </div> <!-- / .row -->
                      </div> <!-- / .header-body -->

                      <!-- Footer -->
                      <div class="header-footer">

                        <!-- Chart -->
                        <div class="chart">
                          <canvas id="headerChart" class="chart-canvas"></canvas>
                        </div>

                      </div>

                    </div>
                  </div> <!-- / .header -->

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;header&nbsp;bg-dark&nbsp;pb-5&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;container-fluid&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;header-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-end&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;header-pretitle&nbsp;text-secondary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Overview<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&nbsp;class=&quot;header-title&nbsp;text-white&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performance<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&nbsp;class=&quot;nav&nbsp;nav-tabs&nbsp;header-tabs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&nbsp;data-toggle=&quot;chart&quot;&nbsp;data-target=&quot;#headerChart&quot;&nbsp;data-update='{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0,10,5,15,10,20,15,25,20,30,25,40]}]}}'&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;text-center&nbsp;active&quot;&nbsp;data-toggle=&quot;tab&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;header-pretitle&nbsp;text-secondary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earnings<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&nbsp;class=&quot;text-white&nbsp;mb-0&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$19.2k<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h3&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&nbsp;data-toggle=&quot;chart&quot;&nbsp;data-target=&quot;#headerChart&quot;&nbsp;data-update='{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[7,35,12,27,34,17,19,30,28,32,24,39]}]}}'&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;text-center&quot;&nbsp;data-toggle=&quot;tab&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;header-pretitle&nbsp;text-secondary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sessions<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&nbsp;class=&quot;text-white&nbsp;mb-0&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;92.1k<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h3&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;class=&quot;nav-item&quot;&nbsp;data-toggle=&quot;chart&quot;&nbsp;data-target=&quot;#headerChart&quot;&nbsp;data-update='{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[2,12,35,25,36,25,34,16,4,14,15,37]}]}}'&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;nav-link&nbsp;text-center&quot;&nbsp;data-toggle=&quot;tab&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&nbsp;class=&quot;header-pretitle&nbsp;text-secondary&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bounce<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h6&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&nbsp;class=&quot;text-white&nbsp;mb-0&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50.2%<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h3&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;header-footer&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;chart&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;headerChart&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- PAGINATION -->
            <div id="pagination">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Pagination
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Indicates a series of related content exists across multiple pages. Please see the <a target="_blank" href="http://getbootstrap.com/docs/4.1/components/pagination/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg">
                      <li class="page-item"><a class="page-link" href="#!">1</a></li>
                      <li class="page-item"><a class="page-link" href="#!">2</a></li>
                      <li class="page-item"><a class="page-link" href="#!">3</a></li>
                      <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                    </ul>
                  </nav>

                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#!">1</a></li>
                      <li class="page-item"><a class="page-link" href="#!">2</a></li>
                      <li class="page-item"><a class="page-link" href="#!">3</a></li>
                      <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                    </ul>
                  </nav>

                  <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm">
                      <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#!">1</a></li>
                      <li class="page-item"><a class="page-link" href="#!">2</a></li>
                      <li class="page-item"><a class="page-link" href="#!">3</a></li>
                      <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                    </ul>
                  </nav>

                </div>
              </div>

            </div>

            <!-- POPOVERS -->
            <div id="popovers">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Popovers
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Please see the <a target="_blank" href="http://getbootstrap.com/docs/4.1/components/popovers/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on top
                  </button>

                  <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on right
                  </button>

                  <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                  sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on bottom
                  </button>

                  <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on left
                  </button>

                </div>
              </div>

            </div>

            <!-- PROGRESS -->
            <div id="progress">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Progress
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Please see the <a target="_blank" href="http://getbootstrap.com/docs/4.1/components/progress/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Small <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                The progress bar component with its bar height decreased.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="progress progress-sm">
                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;progress&nbsp;progress-sm&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress-bar&quot;&nbsp;role=&quot;progressbar&quot;&nbsp;style=&quot;width:&nbsp;10%&quot;&nbsp;aria-valuenow=&quot;10&quot;&nbsp;aria-valuemin=&quot;0&quot;&nbsp;aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- SOCIAL POSTS -->
            <div id="social-posts">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Social posts <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    A variation of the card component featuring Dashkit comments.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="card">
                    <div class="card-body">

                      <!-- Header -->
                      <div class="mb-3">
                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <a href="#!" class="avatar">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </a>

                          </div>
                          <div class="col ml--2">

                            <!-- Title -->
                            <h4 class="card-title mb-1">
                              Dianna Smiley
                            </h4>

                            <!-- Time -->
                            <p class="card-text small text-muted">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">4hr ago</time>
                            </p>

                          </div>
                          <div class="col-auto">

                            <!-- Dropdown -->
                            <div class="dropdown">
                              <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="#!" class="dropdown-item">
                                  Action
                                </a>
                                <a href="#!" class="dropdown-item">
                                  Another action
                                </a>
                                <a href="#!" class="dropdown-item">
                                  Something else here
                                </a>
                              </div>
                            </div>

                          </div>
                        </div> <!-- / .row -->
                      </div>

                      <!-- Text -->
                      <p class="mb-3">
                        I've been working on shipping the latest version of Launchday. The story I'm trying to focus on is something like "You're launching soon and need to be 100% focused on your product. Don't lose precious days designing, coding, and testing a product site. Instead, build one in minutes."
                      </p>

                      <p class="mb-4">
                          What do you y'all think? Would love some feedback from <a href="#!" class="badge badge-soft-primary">@Ab</a> or <a href="#!" class="badge badge-soft-primary">@Adolfo</a>?
                      </p>

                      <!-- Image -->
                      <p class="text-center mb-3">
                        <img src="../../assets/ui/assets/img/posts/post-1.jpg" alt="..." class="img-fluid rounded">
                      </p>

                      <!-- Buttons -->
                      <div class="mb-3">
                        <div class="row">
                          <div class="col">

                            <a href="#!" class="btn btn-sm btn-white">
                              😬 1
                            </a>
                            <a href="#!" class="btn btn-sm btn-white">
                              👍 2
                            </a>
                            <a href="#!" class="btn btn-sm btn-white">
                              Add Reaction
                            </a>

                          </div>
                          <div class="col-auto mr--3">

                            <div class="avatar-group d-none d-sm-flex">
                              <a href="profile-posts.html" class="avatar avatar-xs">
                                <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                              </a>
                              <a href="profile-posts.html" class="avatar avatar-xs">
                                <img src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                              </a>
                              <a href="profile-posts.html" class="avatar avatar-xs">
                                <img src="../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                              </a>
                              <a href="profile-posts.html" class="avatar avatar-xs">
                                <img src="../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                              </a>
                            </div>

                          </div>
                          <div class="col-auto">

                            <a href="#!" class="btn btn-sm btn-white">
                              Share
                            </a>

                          </div>
                        </div> <!-- / .row -->
                      </div>

                      <!-- Divider -->
                      <hr>

                      <!-- Comments -->

                      <div class="comment mb-3">
                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <a class="avatar" href="profile-posts.html">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </a>

                          </div>
                          <div class="col ml--2">

                            <!-- Body -->
                            <div class="comment-body">

                              <div class="row">
                                <div class="col">

                                  <!-- Title -->
                                  <h5 class="comment-title">
                                    Ab Hadley
                                  </h5>

                                </div>
                                <div class="col-auto">

                                  <!-- Time -->
                                  <time class="comment-time">
                                    11:12
                                  </time>

                                </div>
                              </div> <!-- / .row -->

                              <!-- Text -->
                              <p class="comment-text">
                                Looking good Dianna! I like the image grid on the left, but it feels like a lot to process and doesn't really <em>show</em> me what the product does? I think using a short looping video or something similar demo'ing the product might be better?
                              </p>

                            </div>

                          </div>
                        </div> <!-- / .row -->
                      </div>

                      <div class="comment mb-3">
                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <a class="avatar" href="profile-posts.html">
                              <img src="../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                            </a>

                          </div>
                          <div class="col ml--2">

                            <!-- Body -->
                            <div class="comment-body">

                              <div class="row">
                                <div class="col">

                                  <!-- Title -->
                                  <h5 class="comment-title">
                                    Adolfo Hess
                                  </h5>

                                </div>
                                <div class="col-auto">

                                  <!-- Time -->
                                  <time class="comment-time">
                                    11:12
                                  </time>

                                </div>
                              </div> <!-- / .row -->

                              <!-- Text -->
                              <p class="comment-text">
                                Any chance you're going to link the grid up to a public gallery of sites built with Launchday?
                              </p>

                            </div>

                          </div>
                        </div> <!-- / .row -->
                      </div>

                      <!-- Divider -->
                      <hr>

                      <!-- Form -->
                      <div class="row align-items-start">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Input -->
                          <form>
                            <label class="sr-only">Leave a comment...</label>
                            <textarea class="form-control" placeholder="Leave a comment" rows="2"></textarea>
                          </form>

                        </div>
                      </div> <!-- / .row -->

                    </div>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;card&quot;&gt;<br/>&nbsp;&nbsp;&lt;div&nbsp;class=&quot;card-body&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-center&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;ml--2&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&nbsp;class=&quot;card-title&nbsp;mb-1&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dianna&nbsp;Smiley<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;card-text&nbsp;small&nbsp;text-muted&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;fe&nbsp;fe-clock&quot;&gt;&lt;/span&gt;&nbsp;&lt;time&nbsp;datetime=&quot;2018-05-24&quot;&gt;4hr&nbsp;ago&lt;/time&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-ellipses&nbsp;dropdown-toggle&quot;&nbsp;role=&quot;button&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class=&quot;fe&nbsp;fe-more-vertical&quot;&gt;&lt;/i&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&nbsp;dropdown-menu-right&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another&nbsp;action<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;dropdown-item&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something&nbsp;else&nbsp;here<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've&nbsp;been&nbsp;working&nbsp;on&nbsp;shipping&nbsp;the&nbsp;latest&nbsp;version&nbsp;of&nbsp;Launchday.&nbsp;The&nbsp;story&nbsp;I'm&nbsp;trying&nbsp;to&nbsp;focus&nbsp;on&nbsp;is&nbsp;something&nbsp;like&nbsp;&quot;You're&nbsp;launching&nbsp;soon&nbsp;and&nbsp;need&nbsp;to&nbsp;be&nbsp;100%&nbsp;focused&nbsp;on&nbsp;your&nbsp;product.&nbsp;Don't&nbsp;lose&nbsp;precious&nbsp;days&nbsp;designing,&nbsp;coding,&nbsp;and&nbsp;testing&nbsp;a&nbsp;product&nbsp;site.&nbsp;Instead,&nbsp;build&nbsp;one&nbsp;in&nbsp;minutes.&quot;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;mb-4&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What&nbsp;do&nbsp;you&nbsp;y'all&nbsp;think?&nbsp;Would&nbsp;love&nbsp;some&nbsp;feedback&nbsp;from&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;badge&nbsp;badge-soft-primary&quot;&gt;@Ab&lt;/a&gt;&nbsp;or&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;badge&nbsp;badge-soft-primary&quot;&gt;@Adolfo&lt;/a&gt;?<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;text-center&nbsp;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/posts/post-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;img-fluid&nbsp;rounded&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-sm&nbsp;btn-white&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#xd83d;&#xde2c;&nbsp;1<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-sm&nbsp;btn-white&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#xd83d;&#xdc4d;&nbsp;2<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-sm&nbsp;btn-white&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add&nbsp;Reaction<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&nbsp;mr--3&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar-group&nbsp;d-none&nbsp;d-sm-flex&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-4.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;profile-posts.html&quot;&nbsp;class=&quot;avatar&nbsp;avatar-xs&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-5.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#!&quot;&nbsp;class=&quot;btn&nbsp;btn-sm&nbsp;btn-white&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Share<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;&nbsp;&lt;!--&nbsp;/&nbsp;.row&nbsp;--&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;hr&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;comment&nbsp;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;avatar&quot;&nbsp;href=&quot;profile-posts.html&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-2.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;ml--2&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;comment-body&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h5&nbsp;class=&quot;comment-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ab&nbsp;Hadley<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h5&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;time&nbsp;class=&quot;comment-time&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:12<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/time&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;&nbsp;&lt;!--&nbsp;/&nbsp;.row&nbsp;--&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;comment-text&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Looking&nbsp;good&nbsp;Dianna!&nbsp;I&nbsp;like&nbsp;the&nbsp;image&nbsp;grid&nbsp;on&nbsp;the&nbsp;left,&nbsp;but&nbsp;it&nbsp;feels&nbsp;like&nbsp;a&nbsp;lot&nbsp;to&nbsp;process&nbsp;and&nbsp;doesn't&nbsp;really&nbsp;&lt;em&gt;show&lt;/em&gt;&nbsp;me&nbsp;what&nbsp;the&nbsp;product&nbsp;does?&nbsp;I&nbsp;think&nbsp;using&nbsp;a&nbsp;short&nbsp;looping&nbsp;video&nbsp;or&nbsp;something&nbsp;similar&nbsp;demo'ing&nbsp;the&nbsp;product&nbsp;might&nbsp;be&nbsp;better?<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;&nbsp;&lt;!--&nbsp;/&nbsp;.row&nbsp;--&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;comment&nbsp;mb-3&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;avatar&quot;&nbsp;href=&quot;profile-posts.html&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-3.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;ml--2&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;comment-body&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h5&nbsp;class=&quot;comment-title&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adolfo&nbsp;Hess<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h5&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;time&nbsp;class=&quot;comment-time&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:12<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/time&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class=&quot;comment-text&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any&nbsp;chance&nbsp;you're&nbsp;going&nbsp;to&nbsp;link&nbsp;the&nbsp;grid&nbsp;up&nbsp;to&nbsp;a&nbsp;public&nbsp;gallery&nbsp;of&nbsp;sites&nbsp;built&nbsp;with&nbsp;Launchday?<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;hr&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;row&nbsp;align-items-start&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col-auto&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;../../assets/ui/assets/img/avatars/profiles/avatar-1.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;avatar-img&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;col&nbsp;ml--2&quot;&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;form&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&nbsp;class=&quot;sr-only&quot;&gt;Leave&nbsp;a&nbsp;comment...&lt;/label&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;textarea&nbsp;class=&quot;form-control&quot;&nbsp;placeholder=&quot;Leave&nbsp;a&nbsp;comment&quot;&nbsp;rows=&quot;2&quot;&gt;&lt;/textarea&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/form&gt;<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br/><br/>&nbsp;&nbsp;&lt;/div&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- TABLES -->
            <div id="tables">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Tables
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Please read the <a target="_blank" href="https://getbootstrap.com/docs/4.1/content/tables/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                No wrap <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Prevents table cell content from wrapping to another line
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-nowrap">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                          <th scope="col">Decription</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;table&nbsp;class=&quot;table&nbsp;table-nowrap&quot;&gt;<br/>&nbsp;&nbsp;&lt;thead&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;col&quot;&gt;#&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;col&quot;&gt;First&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;col&quot;&gt;Last&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;col&quot;&gt;Handle&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;col&quot;&gt;Decription&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br/>&nbsp;&nbsp;&lt;/thead&gt;<br/>&nbsp;&nbsp;&lt;tbody&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;row&quot;&gt;1&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Mark&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Otto&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;@mdo&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br/>&nbsp;&nbsp;&lt;/tbody&gt;<br/>&lt;/table&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Sorting <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span> <span class="badge badge-soft-warning ml-1 mt--1">Plugin</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Adds a sorting functionality to your tables powered by List.js. Please read the <a target="_blank" href="http://listjs.com/">official plugin documentation</a> for a full list of options or the <a href="#lists">lists</a> section of the current documentation for custom initialization options.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <div class="table-responsive" data-toggle="lists" data-lists-values='["tables-row", "tables-first", "tables-last", "tables-handle"]'>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">
                            <a href="#" class="text-muted sort" data-sort="tables-row">
                              #
                            </a>
                          </th>
                          <th scope="col">
                            <a href="#" class="text-muted sort" data-sort="tables-first">
                              First
                            </a>
                          </th>
                          <th scope="col">
                            <a href="#" class="text-muted sort" data-sort="tables-last">
                              Last
                            </a>
                          </th>
                          <th scope="col">
                            <a href="#" class="text-muted sort" data-sort="tables-handle">
                              Handle
                            </a>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr>
                          <th scope="row" class="tables-row">
                            1
                          </th>
                          <td class="tables-first">
                            Mark
                          </td>
                          <td class="tables-last">
                            Otto
                          </td>
                          <td class="tables-handle">
                            @mdo
                          </td>
                        </tr>
                        <tr>
                          <th scope="row" class="tables-row">
                            2
                          </th>
                          <td class="tables-first">
                            Jacob
                          </td>
                          <td class="tables-last">
                            Thornton
                          </td>
                          <td class="tables-handle">
                            @fat
                          </td>
                        </tr>
                        <tr>
                          <th scope="row" class="tables-row">
                            3
                          </th>
                          <td class="tables-first">
                            Larry
                          </td>
                          <td class="tables-last">
                            the Bird
                          </td>
                          <td class="tables-handle">
                            @twitter
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="card-footer bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;table-responsive&quot;&nbsp;data-toggle=&quot;lists&quot;&nbsp;data-lists-values='[&quot;tables-row&quot;,&nbsp;&quot;tables-first&quot;,&nbsp;&quot;tables-last&quot;,&nbsp;&quot;tables-handle&quot;]'&gt;<br/>&nbsp;&nbsp;&lt;table&nbsp;class=&quot;table&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;thead&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;text-muted&nbsp;sort&quot;&nbsp;data-sort=&quot;tables-row&quot;&gt;#&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;text-muted&nbsp;sort&quot;&nbsp;data-sort=&quot;tables-first&quot;&gt;First&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;text-muted&nbsp;sort&quot;&nbsp;data-sort=&quot;tables-last&quot;&gt;Last&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;col&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;#&quot;&nbsp;class=&quot;text-muted&nbsp;sort&quot;&nbsp;data-sort=&quot;tables-handle&quot;&gt;Handle&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/thead&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;tbody&nbsp;class=&quot;list&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;row&quot;&nbsp;class=&quot;tables-row&quot;&gt;1&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;tables-first&quot;&gt;Mark&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;tables-last&quot;&gt;Otto&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;tables-handle&quot;&gt;@mdo&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;row&quot;&nbsp;class=&quot;tables-row&quot;&gt;2&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;tables-first&quot;&gt;Jacob&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;tables-last&quot;&gt;Thornton&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;tables-handle&quot;&gt;@fat&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;scope=&quot;row&quot;&nbsp;class=&quot;tables-row&quot;&gt;3&lt;/th&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;tables-first&quot;&gt;Larry&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;tables-last&quot;&gt;the&nbsp;Bird&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;tables-handle&quot;&gt;@twitter&lt;/td&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tbody&gt;<br/>&nbsp;&nbsp;&lt;/table&gt;<br/>&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

            <!-- TOOLTIPS -->
            <div id="tooltips">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Tooltips
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Please read the <a target="_blank" href="http://getbootstrap.com/docs/4.1/components/tooltips/">official Bootstrap documentation</a> for a full list of options.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">

                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                    Tooltip on top
                  </button>
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                    Tooltip on right
                  </button>
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                    Tooltip on bottom
                  </button>
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                    Tooltip on left
                  </button>

                </div>
              </div>

            </div>

            <!-- TYPOGRAPHY -->
            <div id="typography">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Typography
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Dashkit makes use of the Cerebri Sans webfont for both headings and body content.
                  </p>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6">


                      <h1>h1. Bootstrap heading</h1>
                      <h2>h2. Bootstrap heading</h2>
                      <h3>h3. Bootstrap heading</h3>
                      <h4>h4. Bootstrap heading</h4>
                      <h5>h5. Bootstrap heading</h5>
                      <h6>h6. Bootstrap heading</h6>

                    </div>
                    <div class="col-xl-6">

                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                      </p>

                      <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                      </p>

                      <p>
                        <a href="#!">Link example</a>
                      </p>

                    </div>
                  </div> <!-- / .row -->
                </div>
              </div>

            <!-- UTILITIES -->
            <div id="utilities">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Utilities
                  </h1>

                  <!-- Subtitle -->
                  <p class="header-subtitle">
                    Please visit the <a target="_blank" href="http://getbootstrap.com/docs/4.1/utilities/borders/">official Bootstrap documentation</a> for a full list of utilities. Additionally, the following utilities have been added:
                  </p>

                </div>
              </div>

              <!-- Heading -->
              <h2 class="mb-2">
                Backgrounds <span class="badge badge-soft-primary ml-1 mt--1">Dashkit Only</span>
              </h2>

              <!-- Subheading -->
              <ul class="text-muted mb-4">
                <li>
                  <code>.bg-fixed-bottom</code> to fix the background image at the bottom of the <code>.main</code> container at the <a href="feed.html">feed.html</a> page.
                </li>
                <li>
                  <code>.bg-cover</code> to set the <code>background-image</code> size of an element to <code>cover</code>.
                </li>
                <li>
                  <code>.bg-vibrant</code> to apply a background image with a vibrant gradient for the sidebar.
                </li>
              </ul>

              <!-- Card -->
              <div class="card">
                <div class="card-body bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;bg-fixed-bottom&quot;&nbsp;style=&quot;background-image:&nbsp;url(../../assets/ui/assets/img/illustrations/sticky.svg);&quot;&gt;...&lt;/div&gt;<br />
                    &lt;div&nbsp;class=&quot;bg-cover&quot;&nbsp;style=&quot;background-image:&nbsp;url(...);&quot;&gt;&lt;/div&gt;<br />
                    &lt;nav&nbsp;class=&quot;navbar&nbsp;navbar-vertical&nbsp;fixed-left&nbsp;navbar-expand-md&nbsp;navbar-dark&nbsp;bg-vibrant&quot;&gt;...&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Sizing <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <ul class="text-muted mb-4">
                <li>
                  <code>.vw-100</code> to change the width of an element to <code>100vw</code>.
                </li>
                <li>
                  <code>.vh-100</code> to change the height of an element to <code>100vh</code>.
                </li>
              </ul>

              <!-- Card -->
              <div class="card">
                <div class="card-body bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;vw-100&nbsp;vh-100&quot;&gt;...&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Borders <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <ul class="text-muted mb-4">
                <li>
                  <code>.border-2(3, 4, 5), .border-top-2(3, 4, 5), .border-right-2(3, 4, 5), .border-bottom-2(3, 4, 5), .border-left-2(3, 4, 5)</code> to increase the width of a border.
                </li>
              </ul>

              <!-- Card -->
              <div class="card">
                <div class="card-body bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;border&nbsp;border-2&nbsp;border-white&quot;&gt;...&lt;/div&gt;
                  </code>
                </div>
              </div>

              <!-- Divider -->
              <hr class="my-5">

              <!-- Heading -->
              <h2 class="mb-2">
                Margins <span class="badge badge-soft-primary ml-1 mt--1">Dashkit only</span>
              </h2>

              <!-- Subheading -->
              <p class="text-muted mb-4">
                Similar to the default Bootstrap margin utilities, use negative margin utilities to move elements in either direction. These utilites follow Bootstrap's default utilities, including the use of responsive variants.
              </p>

              <!-- Card -->
              <div class="card">
                <div class="card-body bg-dark">
                  <code class="highlight html bg-dark">
                    &lt;div&nbsp;class=&quot;mt--1&quot;&gt;...&lt;/div&gt;<br />
                    &lt;div&nbsp;class=&quot;mr-sm--2&quot;&gt;...&lt;/div&gt;<br />
                    &lt;div&nbsp;class=&quot;mb-md--3&quot;&gt;...&lt;/div&gt;<br />
                    &lt;div&nbsp;class=&quot;ml-lg--4&quot;&gt;...&lt;/div&gt;
                  </code>
                </div>
              </div>

            </div>

          </div>
        </div> <!-- / .row -->
      </div>

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="../../assets/ui/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/ui/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/ui/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="../../assets/ui/assets/libs/chart.js/Chart.extension.min.js"></script>
    <script src="../../assets/ui/assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="../../assets/ui/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="../../assets/ui/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="../../assets/ui/assets/libs/list.js/dist/list.min.js"></script>
    <script src="../../assets/ui/assets/libs/quill/dist/quill.min.js"></script>
    <script src="../../assets/ui/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="../../assets/ui/assets/libs/select2/dist/js/select2.min.js"></script>

    <!-- Theme JS -->
    <script src="../../assets/ui/assets/js/theme.min.js"></script>

  </body>
</html>
