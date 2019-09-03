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
                                <a class="link-effect font-w700" href="/admin/dashboard">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">Church</span><span class="font-size-xl text-primary">CMS</span>
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
                            <img class="img-avatar img-avatar32" src="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">Kazashim</a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="si si-drop"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="{{ url('/logout')}}">
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
                                <a href="be_pages_dashboard.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Main</span></a>
                            </li>
                            <li class="open">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Members</span></a>
                                <ul>
                                    <li class="open">
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Church Members</span></a>
                                        <ul>
                                            <li>
                                                <a class="active" href="be_pages_dashboard2.html"><span class="sidebar-mini-hide">Add Members</span></a>
                                            </li>
                                            <li>
                                                <a href="be_pages_dashboard3.html"><span class="sidebar-mini-hide">Add Family</span></a>
                                            </li>
                                            <li>
                                                <a href="be_pages_dashboard4.html"><span class="sidebar-mini-hide">Members List</span></a>
											
                                            </li>
											<li>
                                                <a href="be_pages_dashboard4.html"><span class="sidebar-mini-hide">Family List</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Church Groups</span></a>
                                        <ul>
                                            <li>
                                                <a href="bd_dashboard.html">Add Groups</a>
                                            </li>
                                            <li>
                                                <a href="bd_search.html">Groups List</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_1.html">Report</a>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">Church</span><span class="sidebar-mini-hidden">Menu2</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Church Attendance</span></a>
                                <ul>
                                    <li>
                                        <a href="be_blocks.html">Add Attendance</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_tiles.html">List Attendance</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-moustache"></i><span class="sidebar-mini-hide">Sunday School</span></a>
                                <ul>
                                    <li>
                                        <a href="be_blocks_widgets_users.html">add Sunday School</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_widgets_stats.html">List</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">Collections</span></a>
                                <ul>
                                    <li>
                                        <a href="be_ui_grid.html">Add Colection</a>
                                    </li>
									 <li>
                                        <a href="be_ui_icons.html">Collecton List</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_icons.html">Add Tith</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_typography.html">Tith report</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_activity.html">Add Gifts</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_buttons.html">Gifts Report</a>
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
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Mail</span></a>
                               
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Events</span></a>
                                <ul>
                                    <li>
                                        <a href="be_forms_elements_bootstrap.html">Add Church Events</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_elements_material.html">List Church Events</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_css_inputs.html">Event Type</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Reports</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Admin Reports</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Members</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_default.html">Families</a>
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
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-globe-alt"></i><span class="sidebar-mini-hide">Settings</span></a>
                                <ul>
                                    <li>
                                        <a href="{{ url('/admin/settings') }}">Settings</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_blank_block.html">Blank (Block)</a>
                                    </li>
                                    
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->