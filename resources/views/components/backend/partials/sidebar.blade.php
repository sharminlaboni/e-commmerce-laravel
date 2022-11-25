<div class="offcanvas offcanvas-start bg-dark trxtwhite sidebar-nav" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <a href="#" class="nav-link px-3 active">
                        <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider bg-light" />
                </li>
                <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts6">
              <span class="me-2"><i class="bi bi-capsule-pill"></i></span>
              <span>Medicine Brand</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="layouts6">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="{{ route('brands.index') }}" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                    <span> Brand List</span>
                  </a>
                </li>
              </ul>
            </div>

          </li>
         <!--<li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                        <span class="me-2"><i class="bi bi-capsule-pill"></i></span>
                        <span>Medicine Brand</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse" id="layouts">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href= class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                                    <span> Brand List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>-->


                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                        <span class="me-2"><i class="bi bi-capsule-pill"></i></span>
                        <span>Medicine Category</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse" id="layouts">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('categories.index') }}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                                    <span> Category List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts1">
                        <span class="me-2"><i class="bi bi-capsule-pill"></i></span>
                        <span>Medicine</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse" id="layouts1">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{route('products.index')}}" class="nav-link px-3"> 
                                    <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                                    <span> Medicine List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts2">
                        <span class="me-2"><i class="bi bi-truck"></i></span>
                        <span>Order</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse" id="layouts2">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('orders.index') }}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                                    <span> Order List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
              <!--<li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts3">
                        <span class="me-2"><i class="bi bi-cash-coin"></i></span>
                        <span>Sales</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse" id="layouts3">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="../admin_salelist/sale_list.html" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                                    <span> Sales List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>-->
                {{-- <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts0">
                        <span class="me-2"><i class="bi bi-cart"></i></span>
                        <span>Delivery</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse" id="layouts0">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{url('/delivery')}}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                                    <span> Delivery List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts4">
                        <span class="me-2"><i class="bi bi-person-circle"></i></span>
                        <span>User</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse" id="layouts4">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('users.index') }}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                                    <span>User List</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </li>
               <!-- <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts5">
                        <span class="me-2"><i class="bi bi-person-circle"></i></span>
                        <span>Employee</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse" id="layouts5">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="admin/manager_profile.html" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                                    <span>Manager</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse" id="layouts5">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="admin/employe_profile.html" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-file-plus"></i></span>
                                    <span>Employee</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>-->

                <li class="my-4">
                    <hr class="dropdown-divider bg-light" />
                </li>

                <li>
                    <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-graph-up"></i></span>
                        <span>Charts</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-table"></i></span>
                        <span>Tables</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
