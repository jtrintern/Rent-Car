<div class="az-header">
    <div class="container">
        <div class="az-header-left">
            <a href="{{ route('dashboard') }}" class="az-logo"  style="color: #05366D"><span style="color: #E1B12C">Rent</span>Car.</a>
            <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
            <div class="az-header-menu-header">
                <a href="index.html" class="az-logo"><span></span> azia</a>
                <a href="" class="close">&times;</a>
            </div><!-- az-header-menu-header -->
            <ul class="nav">
                <li
                    class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="nav-link"><i
                            class="fas fa-chart-line fa-fw"></i>
                        Dashboard</a>
                </li>
                <li
                    class="nav-item {{ Request::is('admin/category', 'admin/car', 'admin/addcar', 'admin/editcar/*') ? 'active' : '' }}">
                    <a href="" class="nav-link with-sub"><i class="fas fa-car fa-fw"></i> Cars</a>
                    <nav class="az-menu-sub">
                        <a href="{{ route('indexCategory') }}" class="nav-link">Category</a>
                        <a href="{{ route('indexCar') }}" class="nav-link">Cars</a>
                    </nav>
                </li>
                <li class="nav-item {{ Request::is('admin/transaction') ? 'active' : '' }}">
                    <a href="{{route('indexTransaction')}}" class="nav-link"><i class="fas fa-exchange-alt fa-fw"></i>
                        Transactions</a>
                </li>
            </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
            <div class="dropdown az-profile-menu">
                <a href="" class="az-img-user"><img
                        src="{{ asset('assets/admin/img/faces/face1.jpg') }}" alt=""></a>
                <div class="dropdown-menu">
                    <div class="az-dropdown-header d-sm-none">
                        <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <div class="az-header-profile">
                        <div class="az-img-user">
                            <img src="{{ asset('assets/admin/img/faces/face1.jpg') }}" alt="">
                        </div><!-- az-img-user -->
                        <h6>{{ Auth::user()->firstName . ' ' . Auth::user()->lastName }}
                        </h6>
                        <span>@foreach (auth()->user()->getRoleNames() as $role)
                            <li>{{ $role }}</li>
                            @endforeach</span>
                    </div><!-- az-header-profile -->

                    {{-- <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My
                        Profile</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a> --}}
                    <a href="{{ route('profile.edit') }}" class="dropdown-item"><i
                            class="typcn typcn-cog-outline"></i>
                        Account
                        Settings</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="dropdown-item"><i class="typcn typcn-power-outline"></i>
                        Sign Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>
                </div><!-- dropdown-menu -->
            </div>
        </div><!-- az-header-right -->
    </div><!-- container -->
</div><!-- az-header -->
