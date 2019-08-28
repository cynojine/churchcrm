@extends('layouts.admin.design')
@section('content')

<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Search -->
                    <div class="block pull-t pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <form action="be_pages_generic_search.html" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary px-10">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Search -->

                    <!-- Mini Stats -->
                    <div class="block pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="row">
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                                    <div class="font-size-h4">460</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                    <div class="font-size-h4">728</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                    <div class="font-size-h4">$7,860</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Mini Stats -->

                    <!-- Friends -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="nav-users push">
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar3.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Andrea Gardner
                                        <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar9.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Wayne Garcia
                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar6.jpg" alt="">
                                        <i class="fa fa-circle text-warning"></i> Barbara Scott
                                        <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar13.jpg" alt="">
                                        <i class="fa fa-circle text-danger"></i> Jeffrey Shaw
                                        <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Friends -->

                    <!-- Activity -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="list list-activity">
                                <li>
                                    <i class="si si-wallet text-success"></i>
                                    <div class="font-w600">+$29 New sale</div>
                                    <div>
                                        <a href="javascript:void(0)">Admin Template</a>
                                    </div>
                                    <div class="font-size-xs text-muted">5 min ago</div>
                                </li>
                                <li>
                                    <i class="si si-close text-danger"></i>
                                    <div class="font-w600">Project removed</div>
                                    <div>
                                        <a href="javascript:void(0)">Best Icon Set</a>
                                    </div>
                                    <div class="font-size-xs text-muted">26 min ago</div>
                                </li>
                                <li>
                                    <i class="si si-pencil text-info"></i>
                                    <div class="font-w600">You edited the file</div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-text-o"></i> Docs.doc
                                        </a>
                                    </div>
                                    <div class="font-size-xs text-muted">3 hours ago</div>
                                </li>
                                <li>
                                    <i class="si si-plus text-success"></i>
                                    <div class="font-w600">New user</div>
                                    <div>
                                        <a href="javascript:void(0)">StudioWeb - View Profile</a>
                                    </div>
                                    <div class="font-size-xs text-muted">5 hours ago</div>
                                </li>
                                <li>
                                    <i class="si si-wrench text-warning"></i>
                                    <div class="font-w600">App v5.5 is available</div>
                                    <div>
                                        <a href="javascript:void(0)">Update now</a>
                                    </div>
                                    <div class="font-size-xs text-muted">8 hours ago</div>
                                </li>
                                <li>
                                    <i class="si si-user-follow text-pulse"></i>
                                    <div class="font-w600">+1 Friend Request</div>
                                    <div>
                                        <a href="javascript:void(0)">Accept</a>
                                    </div>
                                    <div class="font-size-xs text-muted">1 day ago</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Activity -->

                    <!-- Profile -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-name">Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-email">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-password">New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-block btn-alt-primary">
                                            <i class="fa fa-refresh mr-5"></i> Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Profile -->

                    <!-- Settings -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row gutters-tiny">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
                                        <label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                        <label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                                        <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                        <label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
                                        <label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                        <label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Settings -->
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="index.html">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">J. Smith</a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="si si-drop"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="op_auth_signin.html">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a href="be_pages_dashboard.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Page Kits</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Dashboards</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_dashboard2.html"><span class="sidebar-mini-hide">Dashboard 2</span></a>
                                            </li>
                                            <li>
                                                <a href="be_pages_dashboard3.html"><span class="sidebar-mini-hide">Dashboard 3</span></a>
                                            </li>
                                            <li>
                                                <a href="be_pages_dashboard4.html"><span class="sidebar-mini-hide">Dashboard 4</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Real Estate</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_real_estate_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_real_estate_listing.html">Listing</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_real_estate_listing_new.html">Add New Listing</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Crypto</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_crypto_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_crypto_buy_sell.html">Buy/Sell</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_crypto_wallets.html">Wallets</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_crypto_settings.html">Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Commerce</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_ecom_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_orders.html">Orders</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_order.html">Order</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_products.html">Products</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_product_edit.html">Product Edit</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_customer.html">Customer</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Learning</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_elearning_courses.html">Courses</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_elearning_course.html">Course</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_elearning_lesson.html">Lesson</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Forum</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_forum_categories.html">Categories</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_forum_topics.html">Topics</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_forum_discussion.html">Discussion</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Alternative Dashboards</span></a>
                                        <ul>
                                            <li>
                                                <a href="db_classic.html"><span class="sidebar-mini-hide">Classic</span></a>
                                            </li>
                                            <li>
                                                <a href="db_clean.html"><span class="sidebar-mini-hide">Clean</span></a>
                                            </li>
                                            <li>
                                                <a href="db_social.html"><span class="sidebar-mini-hide">Social</span></a>
                                            </li>
                                            <li>
                                                <a href="db_corporate.html"><span class="sidebar-mini-hide">Corporate</span></a>
                                            </li>
                                            <li>
                                                <a href="db_minimal.html"><span class="sidebar-mini-hide">Minimal</span></a>
                                            </li>
                                            <li>
                                                <a href="db_pop.html"><span class="sidebar-mini-hide">Pop</span></a>
                                            </li>
                                            <li>
                                                <a href="db_dark.html"><span class="sidebar-mini-hide">Dark</span></a>
                                            </li>
                                            <li>
                                                <a href="db_medical.html"><span class="sidebar-mini-hide">Medical</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Boxed Backend</span></a>
                                        <ul>
                                            <li>
                                                <a href="bd_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="bd_search.html">Search</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Blocks</span></a>
                                <ul>
                                    <li>
                                        <a href="be_blocks.html">Styles</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_tiles.html">Tiles</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_draggable.html">Draggable</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_api.html">API</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-moustache"></i><span class="sidebar-mini-hide">Widgets</span></a>
                                <ul>
                                    <li>
                                        <a href="be_blocks_widgets_users.html">Users</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_widgets_stats.html">Statistics</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">Elements</span></a>
                                <ul>
                                    <li>
                                        <a href="be_ui_grid.html">Grid</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_icons.html">Icons</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_activity.html">Activity</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_navigation.html">Navigation</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_tabs.html">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_modals_tooltips.html">Modals &amp; Tooltips</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_images.html">Images</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_animations.html">Animations</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_ribbons.html">Ribbons</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_timeline.html">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_accordion.html">Accordion</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_color_themes.html">Color Themes</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Tables</span></a>
                                <ul>
                                    <li>
                                        <a href="be_tables_styles.html">Styles</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_responsive.html">Responsive</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_helpers.html">Helpers</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_datatables.html">DataTables</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="open">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Forms</span></a>
                                <ul>
                                    <li>
                                        <a class="active" href="be_forms_elements_bootstrap.html">Bootstrap Elements</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_elements_material.html">Material Elements</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_css_inputs.html">CSS Inputs</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_plugins.html">Plugins</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_editors.html">Editors</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_validation.html">Validation</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_wizard.html">Wizard</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_premade.html">Pre-made</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Build</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Layout</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">General</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_default.html">Default</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_flipped.html">Flipped</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_native_scrolling.html">Native Scrolling</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                                        <ul>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Static</a>
                                                <ul>
                                                    <li>
                                                        <a href="be_layout_header_modern.html">Modern</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_classic.html">Classic</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_classic_inverse.html">Classic Inverse</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_glass.html">Glass</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_glass_inverse.html">Glass Inverse</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Fixed</a>
                                                <ul>
                                                    <li>
                                                        <a href="be_layout_header_fixed_modern.html">Modern</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_classic.html">Classic</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_classic_inverse.html">Classic Inverse</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_glass.html">Glass</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_glass_inverse.html">Glass Inverse</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sidebar</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_sidebar_inverse.html">Inverse</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_sidebar_hidden.html">Hidden</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_sidebar_mini.html">Mini</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Side Overlay</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_side_overlay_visible.html">Visible</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_side_overlay_hoverable.html">Hoverable</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_side_overlay_no_page_overlay.html">No Page Overlay</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Main Content</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_content_boxed.html">Boxed</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_content_narrow.html">Narrow</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_content_full_width.html">Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Hero</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_hero_color.html">Color</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_hero_image.html">Image</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_hero_video.html">Video</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="be_layout_api.html">API</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-trophy"></i><span class="sidebar-mini-hide">Components</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Main Menu</span></a>
                                        <ul>
                                            <li>
                                                <a href="#">Link 1-1</a>
                                            </li>
                                            <li>
                                                <a href="#">Link 1-2</a>
                                            </li>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Link 2-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Link 2-2</a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Link 3-1</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Link 3-2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Chat</a>
                                        <ul>
                                            <li>
                                                <a href="be_comp_chat_multiple.html">Multiple</a>
                                            </li>
                                            <li>
                                                <a href="be_comp_chat_single.html">Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="be_comp_charts.html">Charts</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_gallery.html">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_sliders.html">Sliders</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_scrolling.html">Scrolling</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_rating.html">Rating</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_filtering.html">Filtering</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_appear.html">Appear</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_countto.html">CountTo</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_calendar.html">Calendar</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_image_cropper.html">Image Cropper</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_maps_google.html">Google Maps</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_maps_vector.html">Vector Maps</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pages</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-globe-alt"></i><span class="sidebar-mini-hide">Generic</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_generic_blank.html">Blank</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_blank_block.html">Blank (Block)</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_blank_breadcrumb.html">Blank (Breadcrumb)</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_scrumboard.html">Scrum Board</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_search.html">Search</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_invoice.html">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_story.html">Story</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_project_list.html">Project List</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_project.html">Project</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_upgrade_plan.html">Upgrade Plan</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_team.html">Team</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_contact.html">Contact</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_todo.html">Todo</a>
                                    </li>
                                    <li>
                                        <a href="op_coming_soon.html">Coming Soon</a>
                                    </li>
                                    <li>
                                        <a href="op_maintenance.html">Maintenance</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-lock"></i><span class="sidebar-mini-hide">Authentication</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_auth_all.html">All</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signin.html">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signin2.html">Sign In 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signin3.html">Sign In 3</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signup.html">Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signup2.html">Sign Up 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signup3.html">Sign Up 3</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_lock.html">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_lock2.html">Lock Screen 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_lock3.html">Lock Screen 3</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_reminder.html">Pass Reminder</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_reminder2.html">Pass Reminder 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_reminder3.html">Pass Reminder 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-flag"></i><span class="sidebar-mini-hide">Error</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_error_all.html">All</a>
                                    </li>
                                    <li>
                                        <a href="op_error_400.html">400</a>
                                    </li>
                                    <li>
                                        <a href="op_error_401.html">401</a>
                                    </li>
                                    <li>
                                        <a href="op_error_403.html">403</a>
                                    </li>
                                    <li>
                                        <a href="op_error_404.html">404</a>
                                    </li>
                                    <li>
                                        <a href="op_error_500.html">500</a>
                                    </li>
                                    <li>
                                        <a href="op_error_503.html">503</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Layout Options (used just for demonstration) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                                <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
                                <h6 class="dropdown-header">Color Themes</h6>
                                <div class="row no-gutters text-center mb-5">
                                    <div class="col-2 mb-5">
                                        <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6 class="dropdown-header">Header</h6>
                                <div class="row gutters-tiny text-center mb-5">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                                    </div>
                                </div>
                                <h6 class="dropdown-header">Sidebar</h6>
                                <div class="row gutters-tiny text-center mb-5">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_off">Light</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_on">Dark</button>
                                    </div>
                                </div>
                                <div class="d-none d-xl-block">
                                    <h6 class="dropdown-header">Main Content</h6>
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="row gutters-tiny text-center">
                                    <div class="col-6">
                                        <a class="dropdown-item mb-0" href="be_layout_api.html">
                                            <i class="si si-chemistry mr-5"></i> Layout API
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a class="dropdown-item mb-0" href="be_ui_color_themes.html">
                                            <i class="fa fa-paint-brush mr-5"></i> Color Themes
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Layout Options -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">J. Smith</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                                <a class="dropdown-item" href="be_pages_generic_profile.html">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                    <i class="si si-note mr-5"></i> Invoices
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-flag"></i>
                                <span class="badge badge-primary badge-pill">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                                <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                                <ul class="list-unstyled my-20">
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-check text-success"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                                <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">Please check your payment info since we can’t validate them!</p>
                                                <div class="text-muted font-size-sm font-italic">50 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-times text-danger"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">Web server stopped responding and it was automatically restarted!</p>
                                                <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">Please consider upgrading your plan. You are running out of space.</p>
                                                <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-plus text-primary"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">New purchases! +$250</p>
                                                <div class="text-muted font-size-sm font-italic">1 day ago</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                                    <i class="fa fa-flag mr-5"></i> View All
                                </a>
                            </div>
                        </div>
                        <!-- END Notifications -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-tasks"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Design -->
                    <h2 class="content-heading">Bootstrap Design</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Default Elements</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="be_forms_elements_bootstrap.html" method="post" enctype="multipart/form-data" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12">Static</label>
                                            <div class="col-md-9">
                                                <div class="form-control-plaintext">Username</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-text-input">Text</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text..">
                                                <div class="form-text text-muted">Further info about this input</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-email-input">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="Email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-password-input">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" id="example-password-input" name="example-password-input" placeholder="Password..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-text-input-valid">Valid State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control is-valid" id="example-text-input-valid" name="example-text-input-valid" placeholder="Valid State..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-text-input-invalid">Invalid State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control is-invalid" id="example-text-input-invalid" name="example-text-input-invalid" placeholder="Invalid State..">
                                                <div class="invalid-feedback">Invalid feedback</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-disabled-input">Disabled</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="example-disabled-input" name="example-disabled-input" placeholder="Disabled.." disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-textarea-input">Textarea</label>
                                            <div class="col-12">
                                                <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="Content.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-select">Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="example-select" name="example-select">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-multiple-select">Multiple Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="example-multiple-select" name="example-multiple-select" size="7" multiple>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                    <option value="4">Option #4</option>
                                                    <option value="5">Option #5</option>
                                                    <option value="6">Option #6</option>
                                                    <option value="7">Option #7</option>
                                                    <option value="8">Option #8</option>
                                                    <option value="9">Option #9</option>
                                                    <option value="10">Option #10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Radios</label>
                                            <div class="col-12">
                                                <div class="custom-control custom-radio mb-5">
                                                    <input class="custom-control-input" type="radio" name="example-radios" id="example-radio1" value="option1" checked>
                                                    <label class="custom-control-label" for="example-radio1">Option 1</label>
                                                </div>
                                                <div class="custom-control custom-radio mb-5">
                                                    <input class="custom-control-input" type="radio" name="example-radios" id="example-radio2" value="option2">
                                                    <label class="custom-control-label" for="example-radio2">Option 2</label>
                                                </div>
                                                <div class="custom-control custom-radio mb-5">
                                                    <input class="custom-control-input" type="radio" name="example-radios" id="example-radio3" value="option3">
                                                    <label class="custom-control-label" for="example-radio3">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Inline Radios</label>
                                            <div class="col-12">
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio1" value="option1" checked>
                                                    <label class="custom-control-label" for="example-inline-radio1">Option 1</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio2" value="option2">
                                                    <label class="custom-control-label" for="example-inline-radio2">Option 2</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio3" value="option3">
                                                    <label class="custom-control-label" for="example-inline-radio3">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Checkboxes</label>
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox mb-5">
                                                    <input class="custom-control-input" type="checkbox" name="example-checkbox1" id="example-checkbox1" value="option1" checked>
                                                    <label class="custom-control-label" for="example-checkbox1">Option 1</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-5">
                                                    <input class="custom-control-input" type="checkbox" name="example-checkbox2" id="example-checkbox2" value="option2">
                                                    <label class="custom-control-label" for="example-checkbox2">Option 2</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-5">
                                                    <input class="custom-control-input" type="checkbox" name="example-checkbox3" id="example-checkbox3" value="option3">
                                                    <label class="custom-control-label" for="example-checkbox3">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Inline Checkboxes</label>
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="checkbox" name="example-inline-checkbox1" id="example-inline-checkbox1" value="option1" checked>
                                                    <label class="custom-control-label" for="example-inline-checkbox1">Option 1</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="checkbox" name="example-inline-checkbox2" id="example-inline-checkbox2" value="option2">
                                                    <label class="custom-control-label" for="example-inline-checkbox2">Option 2</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="checkbox" name="example-inline-checkbox3" id="example-inline-checkbox3" value="option3">
                                                    <label class="custom-control-label" for="example-inline-checkbox3">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-file-input">File Input</label>
                                            <div class="col-12">
                                                <input type="file" id="example-file-input" name="example-file-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-file-multiple-input">File Input (Multiple)</label>
                                            <div class="col-12">
                                                <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Bootstrap's Custom File Input</label>
                                            <div class="col-8">
                                                <div class="custom-file">
                                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                    <input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom" data-toggle="custom-file-input">
                                                    <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Bootstrap's Custom File Input (Multiple)</label>
                                            <div class="col-8">
                                                <div class="custom-file">
                                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                    <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                                                    <input type="file" class="custom-file-input" id="example-file-multiple-input-custom" name="example-file-multiple-input-custom" data-toggle="custom-file-input" multiple>
                                                    <label class="custom-file-label" for="example-file-multiple-input-custom">Choose files</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        <div class="col-md-6">
                            <!-- Normal Form -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Normal Form</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                                        <div class="form-group">
                                            <label for="example-nf-email">Email</label>
                                            <input type="email" class="form-control" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-nf-password">Password</label>
                                            <input type="password" class="form-control" id="example-nf-password" name="example-nf-password" placeholder="Enter Password..">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Normal Form -->

                            <!-- Inline Form -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Inline Form</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <form class="form-inline" action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                                        <label class="sr-only" for="example-if-email">Email</label>
                                        <input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-if-email" name="example-if-email" placeholder="Enter Email..">
                                        <label class="sr-only" for="example-if-password">Password</label>
                                        <input type="password" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-if-password" name="example-if-password" placeholder="Enter Password..">
                                        <button type="submit" class="btn btn-alt-primary">Login</button>
                                    </form>
                                </div>
                            </div>
                            <!-- END Inline Form -->

                            <!-- Horizontal Form -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Horizontal Form</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="example-hf-email">Email</label>
                                            <div class="col-lg-7">
                                                <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" placeholder="Enter Email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="example-hf-password">Password</label>
                                            <div class="col-lg-7">
                                                <input type="password" class="form-control" id="example-hf-password" name="example-hf-password" placeholder="Enter Password..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-9 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Horizontal Form -->

                            <!-- Input Sizes -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Input Sizes</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                                        <div class="form-group">
                                            <label for="example-input-small">Small Input</label>
                                            <input type="text" class="form-control form-control-sm" id="example-input-small" name="example-input-small" placeholder=".form-control-sm">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-input-normal">Normal Input</label>
                                            <input type="text" class="form-control" id="example-input-normal" name="example-input-normal" placeholder="..">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-input-large">Large Input</label>
                                            <input type="text" class="form-control form-control-lg" id="example-input-large" name="example-input-large" placeholder=".form-control-lg">
                                        </div>
                                        <div class="form-group">
                                            <label>Grid Inputs</label>
                                            <div class="row">
                                                <div class="col-4">
                                                    <input type="text" class="form-control" placeholder=".col-4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-5">
                                                    <input type="text" class="form-control" placeholder=".col-5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="text" class="form-control" placeholder=".col-6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-7">
                                                    <input type="text" class="form-control" placeholder=".col-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <input type="text" class="form-control" placeholder=".col-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-9">
                                                    <input type="text" class="form-control" placeholder=".col-9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-10">
                                                    <input type="text" class="form-control" placeholder=".col-10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-11">
                                                    <input type="text" class="form-control" placeholder=".col-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="text" class="form-control" placeholder=".col-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-form-label">Multiple Grid Inputs</label>
                                            <div class="col-6">
                                                <input type="text" class="form-control" placeholder=".col-6">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" class="form-control" placeholder=".col-6">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <input type="text" class="form-control" placeholder=".col-4">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control" placeholder=".col-4">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control" placeholder=".col-4">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-3">
                                                <input type="text" class="form-control" placeholder=".col-3">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" class="form-control" placeholder=".col-6">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" class="form-control" placeholder=".col-3">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-8">
                                                <input type="text" class="form-control" placeholder=".col-8">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control" placeholder=".col-4">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <input type="text" class="form-control" placeholder=".col-4">
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" placeholder=".col-8">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Input Sizes -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Icon/Text Groups -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Icon/Text Groups</h3>
                                </div>
                                <div class="block-content">
                                    <form action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-input1-group1" name="example-input1-group1" placeholder="Username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <input type="email" class="form-control" id="example-input2-group1" name="example-input2-group1" placeholder="Email">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-euro"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-input3-group1" name="example-input3-group1" placeholder="..">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Icon/Text Groups -->
                        </div>
                        <div class="col-xl-4">
                            <!-- Button Groups -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Button Groups</h3>
                                </div>
                                <div class="block-content">
                                    <form action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-secondary">
                                                            <i class="fa fa-search"></i> Search
                                                        </button>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-input1-group2" name="example-input1-group2" placeholder="Username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <input type="email" class="form-control" id="example-input2-group2" name="example-input2-group2" placeholder="Email">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-secondary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-secondary">
                                                            <i class="fa fa-facebook"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-input3-group2" name="example-input3-group2" placeholder="Search">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-secondary">
                                                            <i class="fa fa-twitter"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Button Groups -->
                        </div>
                        <div class="col-xl-4">
                            <!-- Dropdown Groups -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Dropdown Groups</h3>
                                </div>
                                <div class="block-content">
                                    <form action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-secondary">Options</button>
                                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-bell mr-5"></i>News
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                                            </a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-input1-group3" name="example-input1-group3" placeholder="Username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <input type="email" class="form-control" id="example-input2-group3" name="example-input2-group3" placeholder="Email">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-bell mr-5"></i>News
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend dropup">
                                                        <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-angle-up"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-bell mr-5"></i>News
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                                            </a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-input3-group3" name="example-input3-group3" placeholder="..">
                                                    <div class="input-group-append dropup">
                                                        <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-angle-up"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-bell mr-5"></i>News
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                                            </a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Dropdown Groups -->
                        </div>
                    </div>
                    <!-- END Bootstrap Design -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

        </div>
        <!-- END Page Container -->


		@endsection