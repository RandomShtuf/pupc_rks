<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <h5 class="menu-title">MENU</h5>

                {{-- Dashboard --}}

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class=" ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Dashboard</span>
                    </a>
                </li>

                <h5 class="menu-title">PROCESSES</h5>
                @foreach($processes as $process)
                <li>
                    <a href="{{route('step.index', $process->id)}}">{{$process->title}}</a>
                </li>
                @endforeach

                <h5 class="menu-title">SETTINGS</h5>

                <li class="">
                    <a href="{{route('component.index')}}" class=" waves-effect">
                        <i class="fas fa-cogs"></i>
                        <span>Components</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
