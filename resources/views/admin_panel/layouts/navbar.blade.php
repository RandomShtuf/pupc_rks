<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <h5 class="menu-title">Menu</h5>

                {{-- Dashboard --}}

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-fill "></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{route('process.index')}}" class=" waves-effect">
                        <i class="fas fa-cogs"></i>
                        <span>Processes</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
