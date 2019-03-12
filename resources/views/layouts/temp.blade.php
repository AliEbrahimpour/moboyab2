<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Pro Bootstrap Admin Template</title>

    <link href="<?= Url('css/coreui-icons.min.css') ?>" rel="stylesheet">
    <link href="<?= Url('css/flag-icon.min.css') ?>" rel="stylesheet">
    <link href="<?= Url('css/font-awesome.css') ?>" rel="stylesheet">
    <link href="<?= Url('css/simple-line-icons.css') ?>" rel="stylesheet">
    <link href="<?= Url('css/panel/style.css') ?>" rel="stylesheet">
    <link href="<?= Url('css/pace.min.css') ?>" rel="stylesheet">
    @yield('css')

    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
    </style>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show   pace-done pace-done">
<div class="pace  pace-inactive pace-inactive">
    <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity">
    </div>
</div>
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="img/brand/logo.svg" alt="CoreUI Logo" width="89" height="25">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" alt="CoreUI Logo" width="30" height="30">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="icon-bell"></i>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <div class="dropdown-header text-center">
                    <strong>You have 5 notifications</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="icon-user-follow text-success"></i> New user registered</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-user-unfollow text-danger"></i> User deleted</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-chart text-info"></i> Sales report is ready</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-basket-loaded text-primary"></i> New client</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-speedometer text-warning"></i> Server overloaded</a>
                <div class="dropdown-header text-center">
                    <strong>Server</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>CPU Usage</b>
                        </small>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    <small class="text-muted">348 Processes. 1/4 Cores.</small>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>Memory Usage</b>
                        </small>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    <small class="text-muted">11444GB/16384MB</small>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>SSD 1 Usage</b>
                        </small>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    <small class="text-muted">243GB/256GB</small>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="icon-list"></i>
                <span class="badge badge-pill badge-warning">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <div class="dropdown-header text-center">
                    <strong>You have 5 pending tasks</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <div class="small mb-1">Upgrade NPM &amp; Bower
                        <span class="float-right">
<strong>0%</strong>
</span>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="small mb-1">ReactJS Version
                        <span class="float-right">
<strong>25%</strong>
</span>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="small mb-1">VueJS Version
                        <span class="float-right">
<strong>50%</strong>
</span>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="small mb-1">Add new layouts
                        <span class="float-right">
<strong>75%</strong>
</span>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="small mb-1">Angular 2 Cli Version
                        <span class="float-right">
<strong>100%</strong>
</span>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                </a>
                <a class="dropdown-item text-center" href="#">
                    <strong>View all tasks</strong>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="icon-envelope-letter"></i>
                <span class="badge badge-pill badge-info">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <div class="dropdown-header text-center">
                    <strong>You have 4 messages</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">John Doe</small>
                            <small class="text-muted float-right mt-1">Just now</small>
                        </div>
                        <div class="text-truncate font-weight-bold">
                            <span class="fa fa-exclamation text-danger"></span> Important message</div>
                        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-warning"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">John Doe</small>
                            <small class="text-muted float-right mt-1">5 minutes ago</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-danger"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">John Doe</small>
                            <small class="text-muted float-right mt-1">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-info"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">John Doe</small>
                            <small class="text-muted float-right mt-1">4:03 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                    </div>
                </a>
                <a class="dropdown-item text-center" href="#">
                    <strong>View all messages</strong>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-bell-o"></i> Updates
                    <span class="badge badge-info">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-envelope-o"></i> Messages
                    <span class="badge badge-success">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-tasks"></i> Tasks
                    <span class="badge badge-danger">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-comments"></i> Comments
                    <span class="badge badge-warning">42</span>
                </a>
                <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-wrench"></i> Settings</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-usd"></i> Payments
                    <span class="badge badge-dark">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-file"></i> Projects
                    <span class="badge badge-primary">42</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-shield"></i> Lock Account</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav ps ps--active-y">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="main.html">
                        <i class="nav-icon icon-speedometer"></i> Dashboard
                        <span class="badge badge-info">NEW</span>
                    </a>
                </li>
                <li class="nav-title">Theme</li>
                <li class="nav-item">
                    <a class="nav-link" href="colors.html">
                        <i class="nav-icon icon-drop"></i> Colors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="typography.html">
                        <i class="nav-icon icon-pencil"></i> Typography</a>
                </li>
                <li class="nav-title">Components</li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-puzzle"></i> Base</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="base/breadcrumb.html">
                                <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/cards.html">
                                <i class="nav-icon icon-puzzle"></i> Cards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/carousel.html">
                                <i class="nav-icon icon-puzzle"></i> Carousel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/collapse.html">
                                <i class="nav-icon icon-puzzle"></i> Collapse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/jumbotron.html">
                                <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/list-group.html">
                                <i class="nav-icon icon-puzzle"></i> List group</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/navs.html">
                                <i class="nav-icon icon-puzzle"></i> Navs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/pagination.html">
                                <i class="nav-icon icon-puzzle"></i> Pagination</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/popovers.html">
                                <i class="nav-icon icon-puzzle"></i> Popovers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/progress.html">
                                <i class="nav-icon icon-puzzle"></i> Progress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/scrollspy.html">
                                <i class="nav-icon icon-puzzle"></i> Scrollspy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/switches.html">
                                <i class="nav-icon icon-puzzle"></i> Switches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/tabs.html">
                                <i class="nav-icon icon-puzzle"></i> Tabs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/tooltips.html">
                                <i class="nav-icon icon-puzzle"></i> Tooltips</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-cursor"></i> Buttons</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="buttons/buttons.html">
                                <i class="nav-icon icon-cursor"></i> Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buttons/brand-buttons.html">
                                <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buttons/button-group.html">
                                <i class="nav-icon icon-cursor"></i> Buttons Group</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buttons/dropdowns.html">
                                <i class="nav-icon icon-cursor"></i> Dropdowns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buttons/loading-buttons.html">
                                <i class="nav-icon icon-cursor"></i> Loading Buttons
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="nav-icon icon-pie-chart"></i> Charts</a>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon fa fa-code"></i> Editors</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="editors/code-editor.html">
                                <i class="nav-icon icon-note"></i> Code Editor
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="editors/markdown-editor.html">
                                <i class="nav-icon fa fa-code"></i> Markdown
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="editors/text-editor.html">
                                <i class="nav-icon icon-note"></i> Rich Text Editor
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-note"></i> Forms</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="forms/basic-forms.html">
                                <i class="nav-icon icon-note"></i> Basic Forms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="forms/advanced-forms.html">
                                <i class="nav-icon icon-note"></i> Advanced
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="forms/validation.html">
                                <i class="nav-icon icon-note"></i> Validation
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="google-maps.html">
                        <i class="nav-icon icon-map"></i> Google Maps
                        <span class="badge badge-danger">PRO</span>
                    </a>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-star"></i> Icons</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="icons/coreui-icons.html">
                                <i class="nav-icon icon-star"></i> CoreUI Icons
                                <span class="badge badge-success">NEW</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons/flags.html">
                                <i class="nav-icon icon-star"></i> Flags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons/font-awesome.html">
                                <i class="nav-icon icon-star"></i> Font Awesome
                                <span class="badge badge-secondary">4.7</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons/simple-line-icons.html">
                                <i class="nav-icon icon-star"></i> Simple Line Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-bell"></i> Notifications</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="notifications/alerts.html">
                                <i class="nav-icon icon-bell"></i> Alerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notifications/badge.html">
                                <i class="nav-icon icon-bell"></i> Badge</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notifications/modals.html">
                                <i class="nav-icon icon-bell"></i> Modals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notifications/toastr.html">
                                <i class="nav-icon icon-bell"></i> Toastr
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-energy"></i> Plugins</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="plugins/calendar.html">
                                <i class="nav-icon icon-calendar"></i> Calendar
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="plugins/draggable-cards.html">
                                <i class="nav-icon icon-cursor-move"></i> Draggable
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="plugins/sliders.html">
                                <i class="nav-icon icon-equalizer"></i> Sliders
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="plugins/spinners.html">
                                <i class="nav-icon fa fa-spinner"></i> Spinners
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-list"></i> Tables</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="tables/tables.html">
                                <i class="nav-icon icon-list"></i> Standard Tables</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tables/datatables.html">
                                <i class="nav-icon icon-list"></i> DataTables
                                <span class="badge badge-danger">PRO</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="widgets.html">
                        <i class="nav-icon icon-calculator"></i> Widgets
                        <span class="badge badge-info">NEW</span>
                    </a>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-title">Extras</li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-star"></i> Pages</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="login.html" target="_top">
                                <i class="nav-icon icon-star"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.html" target="_top">
                                <i class="nav-icon icon-star"></i> Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="404.html" target="_top">
                                <i class="nav-icon icon-star"></i> Error 404</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="500.html" target="_top">
                                <i class="nav-icon icon-star"></i> Error 500</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-layers"></i> Apps</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-speech"></i> Invoicing</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="apps/invoicing/invoice.html">
                                        <i class="nav-icon icon-speech"></i> Invoice
                                        <span class="badge badge-danger">PRO</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-speech"></i> Email</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="apps/email/inbox.html">
                                        <i class="nav-icon icon-speech"></i> Inbox
                                        <span class="badge badge-danger">PRO</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="apps/email/message.html">
                                        <i class="nav-icon icon-speech"></i> Message
                                        <span class="badge badge-danger">PRO</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="apps/email/compose.html">
                                        <i class="nav-icon icon-speech"></i> Compose
                                        <span class="badge badge-danger">PRO</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-title">Labels</li>
                <li class="nav-item d-compact-none d-minimized-none">
                    <a class="nav-label" href="#">
                        <i class="fa fa-circle text-danger"></i> Label danger</a>
                </li>
                <li class="nav-item d-compact-none d-minimized-none">
                    <a class="nav-label" href="#">
                        <i class="fa fa-circle text-info"></i> Label info</a>
                </li>
                <li class="nav-item d-compact-none d-minimized-none">
                    <a class="nav-label" href="#">
                        <i class="fa fa-circle text-warning"></i> Label warning</a>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-title">System Utilization</li>
                <li class="nav-item px-3 d-compact-none d-minimized-none">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>CPU Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">348 Processes. 1/4 Cores.</small>
                </li>
                <li class="nav-item px-3 d-compact-none d-minimized-none">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>Memory Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">11444GB/16384MB</small>
                </li>
                <li class="nav-item px-3 mb-3 d-compact-none d-minimized-none">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>SSD 1 Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">243GB/256GB</small>
                </li>
            </ul>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 537px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 241px;"></div></div></nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">

        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">
                <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>

            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="#">
                        <i class="icon-speech"></i>
                    </a>
                    <a class="btn" href="./">
                        <i class="icon-graph"></i> &nbsp;Dashboard</a>
                    <a class="btn" href="#">
                        <i class="icon-settings"></i> &nbsp;Settings</a>
                </div>
            </li>
        </ol>
        <div class="container-fluid">
            <div id="ui-view"><div>



                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-settings"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="text-value">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                        <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 216px; height: 70px;" width="216"></canvas>
                                        <div id="card-chart1-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 194.5px; top: 125.889px;"><div class="tooltip-header"><div class="tooltip-header-item">June</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgb(0, 165, 224);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">55</span></div></div></div></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-info">
                                    <div class="card-body pb-0">
                                        <button class="btn btn-transparent p-0 float-right" type="button">
                                            <i class="icon-location-pin"></i>
                                        </button>
                                        <div class="text-value">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                        <canvas class="chart chartjs-render-monitor" id="card-chart2" height="70" style="display: block; width: 216px; height: 70px;" width="216"></canvas>
                                        <div id="card-chart2-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 57.5px; top: 117.837px;"><div class="tooltip-header"><div class="tooltip-header-item">February</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgb(38, 203, 253);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">18</span></div></div></div></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-warning">
                                    <div class="card-body pb-0">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-settings"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="text-value">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="chart-wrapper mt-3" style="height:70px;"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                        <canvas class="chart chartjs-render-monitor" id="card-chart3" height="70" style="display: block; width: 248px; height: 70px;" width="248"></canvas>
                                        <div id="card-chart3-tooltip" class="chartjs-tooltip bottom" style="opacity: 0; left: 208px; top: 151.6px;"><div class="tooltip-header"><div class="tooltip-header-item">June</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(230, 230, 230, 0.2);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">12</span></div></div></div></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-danger">
                                    <div class="card-body pb-0">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-settings"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="text-value">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                        <canvas class="chart chartjs-render-monitor" id="card-chart4" height="70" style="display: block; width: 216px; height: 70px;" width="216"></canvas>
                                        <div id="card-chart4-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 132px; top: 114.5px;"><div class="tooltip-header"><div class="tooltip-header-item">September</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(230, 230, 230, 0.2);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">65</span></div></div></div></div>
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h4 class="card-title mb-0">Traffic</h4>
                                        <div class="small text-muted">November 2017</div>
                                    </div>

                                    <div class="col-sm-7 d-none d-md-block">
                                        <button class="btn btn-primary float-right" type="button">
                                            <i class="icon-cloud-download"></i>
                                        </button>
                                        <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                                            <label class="btn btn-outline-secondary">
                                                <input id="option1" type="radio" name="options" autocomplete="off"> Day
                                            </label>
                                            <label class="btn btn-outline-secondary active">
                                                <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                                            </label>
                                            <label class="btn btn-outline-secondary">
                                                <input id="option3" type="radio" name="options" autocomplete="off"> Year
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="chart-wrapper" style="height:300px;margin-top:40px;"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <canvas class="chart chartjs-render-monitor" id="main-chart" height="300" style="display: block;" width="1047"></canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row text-center">
                                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                        <div class="text-muted">Visits</div>
                                        <strong>29.703 Users (40%)</strong>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                        <div class="text-muted">Unique</div>
                                        <strong>24.093 Users (20%)</strong>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                        <div class="text-muted">Pageviews</div>
                                        <strong>78.706 Views (60%)</strong>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                        <div class="text-muted">New Users</div>
                                        <strong>22.123 Users (80%)</strong>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                        <div class="text-muted">Bounce Rate</div>
                                        <strong>40.15%</strong>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="brand-card">
                                    <div class="brand-card-header bg-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <div class="chart-wrapper"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="social-box-chart-1" height="96" style="display: block; width: 248px; height: 96px;" width="248" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                    <div class="brand-card-body">
                                        <div>
                                            <div class="text-value">89k</div>
                                            <div class="text-uppercase text-muted small">friends</div>
                                        </div>
                                        <div>
                                            <div class="text-value">459</div>
                                            <div class="text-uppercase text-muted small">feeds</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="brand-card">
                                    <div class="brand-card-header bg-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <div class="chart-wrapper"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="social-box-chart-2" height="96" style="display: block; width: 248px; height: 96px;" width="248" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                    <div class="brand-card-body">
                                        <div>
                                            <div class="text-value">973k</div>
                                            <div class="text-uppercase text-muted small">followers</div>
                                        </div>
                                        <div>
                                            <div class="text-value">1.792</div>
                                            <div class="text-uppercase text-muted small">tweets</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="brand-card">
                                    <div class="brand-card-header bg-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                        <div class="chart-wrapper"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="social-box-chart-3" height="96" style="display: block; width: 248px; height: 96px;" width="248" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                    <div class="brand-card-body">
                                        <div>
                                            <div class="text-value">500+</div>
                                            <div class="text-uppercase text-muted small">contacts</div>
                                        </div>
                                        <div>
                                            <div class="text-value">292</div>
                                            <div class="text-uppercase text-muted small">feeds</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="brand-card">
                                    <div class="brand-card-header bg-google-plus">
                                        <i class="fa fa-google-plus"></i>
                                        <div class="chart-wrapper"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="social-box-chart-4" height="96" style="display: block; width: 248px; height: 96px;" width="248" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                    <div class="brand-card-body">
                                        <div>
                                            <div class="text-value">894</div>
                                            <div class="text-uppercase text-muted small">followers</div>
                                        </div>
                                        <div>
                                            <div class="text-value">92</div>
                                            <div class="text-uppercase text-muted small">circles</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Traffic &amp; Sales</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="callout callout-info">
                                                            <small class="text-muted">New Clients</small>
                                                            <br>
                                                            <strong class="h4">9,123</strong>
                                                            <div class="chart-wrapper">
                                                                <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="callout callout-danger">
                                                            <small class="text-muted">Recuring Clients</small>
                                                            <br>
                                                            <strong class="h4">22,643</strong>
                                                            <div class="chart-wrapper">
                                                                <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <hr class="mt-0">
                                                <div class="progress-group mb-4">
                                                    <div class="progress-group-prepend">
                                                        <span class="progress-group-text">Monday</span>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group mb-4">
                                                    <div class="progress-group-prepend">
                                                        <span class="progress-group-text">Tuesday</span>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group mb-4">
                                                    <div class="progress-group-prepend">
                                                        <span class="progress-group-text">Wednesday</span>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group mb-4">
                                                    <div class="progress-group-prepend">
                                                        <span class="progress-group-text">Thursday</span>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group mb-4">
                                                    <div class="progress-group-prepend">
                                                        <span class="progress-group-text">Friday</span>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group mb-4">
                                                    <div class="progress-group-prepend">
                                                        <span class="progress-group-text">Saturday</span>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group mb-4">
                                                    <div class="progress-group-prepend">
                                                        <span class="progress-group-text">Sunday</span>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="callout callout-warning">
                                                            <small class="text-muted">Pageviews</small>
                                                            <br>
                                                            <strong class="h4">78,623</strong>
                                                            <div class="chart-wrapper">
                                                                <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="callout callout-success">
                                                            <small class="text-muted">Organic</small>
                                                            <br>
                                                            <strong class="h4">49,123</strong>
                                                            <div class="chart-wrapper">
                                                                <canvas id="sparkline-chart-4" width="100" height="30"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <hr class="mt-0">
                                                <div class="progress-group">
                                                    <div class="progress-group-header">
                                                        <i class="icon-user progress-group-icon"></i>
                                                        <div>Male</div>
                                                        <div class="ml-auto font-weight-bold">43%</div>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group mb-5">
                                                    <div class="progress-group-header">
                                                        <i class="icon-user-female progress-group-icon"></i>
                                                        <div>Female</div>
                                                        <div class="ml-auto font-weight-bold">37%</div>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group">
                                                    <div class="progress-group-header align-items-end">
                                                        <i class="icon-globe progress-group-icon"></i>
                                                        <div>Organic Search</div>
                                                        <div class="ml-auto font-weight-bold mr-2">191.235</div>
                                                        <div class="text-muted small">(56%)</div>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group">
                                                    <div class="progress-group-header align-items-end">
                                                        <i class="icon-social-facebook progress-group-icon"></i>
                                                        <div>Facebook</div>
                                                        <div class="ml-auto font-weight-bold mr-2">51.223</div>
                                                        <div class="text-muted small">(15%)</div>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group">
                                                    <div class="progress-group-header align-items-end">
                                                        <i class="icon-social-twitter progress-group-icon"></i>
                                                        <div>Twitter</div>
                                                        <div class="ml-auto font-weight-bold mr-2">37.564</div>
                                                        <div class="text-muted small">(11%)</div>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group">
                                                    <div class="progress-group-header align-items-end">
                                                        <i class="icon-social-linkedin progress-group-icon"></i>
                                                        <div>LinkedIn</div>
                                                        <div class="ml-auto font-weight-bold mr-2">27.319</div>
                                                        <div class="text-muted small">(8%)</div>
                                                    </div>
                                                    <div class="progress-group-bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <br>
                                        <table class="table table-responsive-sm table-hover table-outline mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th class="text-center">
                                                    <i class="icon-people"></i>
                                                </th>
                                                <th>User</th>
                                                <th class="text-center">Country</th>
                                                <th>Usage</th>
                                                <th class="text-center">Payment Method</th>
                                                <th>Activity</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="avatar">
                                                        <img class="img-avatar" src="img/avatars/1.jpg" alt="admin@bootstrapmaster.com">
                                                        <span class="avatar-status badge-success"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Yiorgos Avraamu</div>
                                                    <div class="small text-muted">
                                                        <span>New</span> | Registered: Jan 1, 2015</div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="flag-icon flag-icon-us h4 mb-0" id="us" title="us"></i>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-left">
                                                            <strong>50%</strong>
                                                        </div>
                                                        <div class="float-right">
                                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                                                </td>
                                                <td>
                                                    <div class="small text-muted">Last login</div>
                                                    <strong>10 sec ago</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="avatar">
                                                        <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                                                        <span class="avatar-status badge-danger"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Avram Tarasios</div>
                                                    <div class="small text-muted">
                                                        <span>Recurring</span> | Registered: Jan 1, 2015</div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="br"></i>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-left">
                                                            <strong>10%</strong>
                                                        </div>
                                                        <div class="float-right">
                                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="fa fa-cc-visa" style="font-size:24px"></i>
                                                </td>
                                                <td>
                                                    <div class="small text-muted">Last login</div>
                                                    <strong>5 minutes ago</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="avatar">
                                                        <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                                                        <span class="avatar-status badge-warning"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Quintin Ed</div>
                                                    <div class="small text-muted">
                                                        <span>New</span> | Registered: Jan 1, 2015</div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="flag-icon flag-icon-in h4 mb-0" id="in" title="in"></i>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-left">
                                                            <strong>74%</strong>
                                                        </div>
                                                        <div class="float-right">
                                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                                                </td>
                                                <td>
                                                    <div class="small text-muted">Last login</div>
                                                    <strong>1 hour ago</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="avatar">
                                                        <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                                                        <span class="avatar-status badge-secondary"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Enéas Kwadwo</div>
                                                    <div class="small text-muted">
                                                        <span>New</span> | Registered: Jan 1, 2015</div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="flag-icon flag-icon-fr h4 mb-0" id="fr" title="fr"></i>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-left">
                                                            <strong>98%</strong>
                                                        </div>
                                                        <div class="float-right">
                                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="fa fa-paypal" style="font-size:24px"></i>
                                                </td>
                                                <td>
                                                    <div class="small text-muted">Last login</div>
                                                    <strong>Last month</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="avatar">
                                                        <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                                                        <span class="avatar-status badge-success"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Agapetus Tadeáš</div>
                                                    <div class="small text-muted">
                                                        <span>New</span> | Registered: Jan 1, 2015</div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="flag-icon flag-icon-es h4 mb-0" id="es" title="es"></i>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-left">
                                                            <strong>22%</strong>
                                                        </div>
                                                        <div class="float-right">
                                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="fa fa-google-wallet" style="font-size:24px"></i>
                                                </td>
                                                <td>
                                                    <div class="small text-muted">Last login</div>
                                                    <strong>Last week</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="avatar">
                                                        <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                                        <span class="avatar-status badge-danger"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Friderik Dávid</div>
                                                    <div class="small text-muted">
                                                        <span>New</span> | Registered: Jan 1, 2015</div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="flag-icon flag-icon-pl h4 mb-0" id="pl" title="pl"></i>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-left">
                                                            <strong>43%</strong>
                                                        </div>
                                                        <div class="float-right">
                                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <i class="fa fa-cc-amex" style="font-size:24px"></i>
                                                </td>
                                                <td>
                                                    <div class="small text-muted">Last login</div>
                                                    <strong>Yesterday</strong>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div></div></div>
        </div>
    </main>
    <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                    <i class="icon-list"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                    <i class="icon-speech"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                    <i class="icon-settings"></i>
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="list-group list-group-accent">
                    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
                    <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                        <div class="avatar float-right">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Meeting with
                            <strong>Lucas</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                        <small class="text-muted">
                            <i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-info">
                        <div class="avatar float-right">
                            <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Skype with
                            <strong>Megan</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
                        <small class="text-muted">
                            <i class="icon-social-skype"></i>&nbsp; On-line</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
                    <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                        <div>New UI Project -
                            <strong>deadline</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
                        <small class="text-muted">
                            <i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                        <div>
                            <strong>#10 Startups.Garden</strong> Meetup</div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                        <small class="text-muted">
                            <i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                        <div>
                            <strong>Team meeting</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
                        <small class="text-muted">
                            <i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/8.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6>Settings</h6>
                <div class="aside-options">
                    <div class="clearfix mt-4">
                        <small>
                            <b>Option 1</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 2</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 3</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 4</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class="text-uppercase mb-1 mt-4">
                    <small>
                        <b>CPU Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>Memory Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">11444GB/16384MB</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>SSD 1 Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">243GB/256GB</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>SSD 2 Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">25GB/256GB</small>
            </div>
        </div>
    </aside>
</div>
<footer class="app-footer">
    <div>
        <a href="https://coreui.io/pro/">CoreUI Pro</a>
        <span>© 2018 creativeLabs.</span>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io/pro/">CoreUI Pro</a>
    </div>
</footer>

<script src="<?= url('js/jquery.min.js') ?>"></script>
<script src="<?= url('js/popper.min.js') ?>"></script>
<script src="<?= url('js/bootstrap.min.js') ?>"></script>
<script src="<?= url('js/panel/pace.js') ?>"></script>
<script src="<?= url('js/panel/perfect-scrollbar.min.js') ?>"></script>
<script src="<?= url('js/panel/app.js') ?>"></script>
<script src="<?= url('js/panel/main.js') ?>"></script>
<script src="<?= url('js/panel/chart.js') ?>"></script>
<script src="<?= url('js/panel/coreui.min.js') ?>"></script>
@yield('script')
<script>
    $('#ui-view').ajaxLoad();
    $(document).ajaxComplete(function() {
        Pace.restart()
    });
</script>

</body>
</html>