        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> 
                            <a class="waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false">
                                <i class="icon-speedometer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                         <li> 
                            <a class="waves-effect waves-dark {{ request()->is('category*') ? 'active' : '' }}" href="{{ route('category.index') }}" aria-expanded="false">
                                <i class="icon-speedometer"></i>
                                <span class="hide-menu">Manage Category</span>
                            </a>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="hide-menu">Sub Category</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.html">Add Sub Category</a></li>
                                <li><a href="app-email-detail.html">Manage Sub Category</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark {{ request()->is('Brand*') ? 'active' : '' }}" href="{{ route('brand.index') }}" aria-expanded="false">
                                <i class="icon-speedometer"></i>
                                <span class="hide-menu">Manage Brand</span>
                            </a>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-layout-media-right-alt"></i>
                                <span class="hide-menu">Unit Module</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Add Unit</a></li>
                                <li><a href="form-layout.html">Manage Unit</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-layout-accordion-merged"></i>
                                <span class="hide-menu">Product Module</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-basic.html">Add Product</a></li>
                                <li><a href="table-layout.html">Manage Product</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-settings"></i>
                                <span class="hide-menu">Order</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget-data.html">Manage Order</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-gallery"></i>
                                <span class="hide-menu">Customer Module</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-single-column.html">Manage Customer</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-files"></i><span class="hide-menu">User Module</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="starter-kit.html">Add User</a></li>
                                <li><a href="pages-blank.html">Manage User</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-pie-chart"></i>
                                <span class="hide-menu">Cupon Module</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-morris.html">Add Cupon</a></li>
                                <li><a href="chart-chartist.html">Manage Cupon</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-light-bulb"></i>
                                <span class="hide-menu">Setting Module</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.html">Company Setting</a></li>
                                <li><a href="icon-fontawesome.html">Tax Setting</a></li>
                                <li><a href="icon-themify.html">Shipping Setting</a></li>
                            </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->