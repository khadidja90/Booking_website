<div class="d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar">
                <img src="{{asset('admin/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle">
            </div>
            <div class="title">
                <h1 class="h5">Mark Stephen</h1>
                <p>Web Designer</p>
            </div>
        </div>
        
        <span class="heading">Main</span>
        <ul class="list-unstyled">
            
            <li class="{{ Request::is('home') || Request::is('admin/dashboard') || Request::is('/') ? 'active' : '' }}">
                <a href="{{url('/home')}}"> <i class="icon-home"></i>Home </a>
            </li>

            <li class="{{ Request::is('create_room') || Request::is('view_room') ? 'active' : '' }}">
                <a href="#exampledropdownDropdown" aria-expanded="{{ Request::is('create_room') || Request::is('view_room') ? 'true' : 'false' }}" data-toggle="collapse"> 
                    <i class="icon-windows"></i>Hotel Rooms 
                </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled {{ Request::is('create_room') || Request::is('view_room') ? 'show' : '' }}">
                    <li class="{{ Request::is('create_room') ? 'active' : '' }}">
                        <a href="{{url('create_room')}}">Add Rooms</a>
                    </li>
                    <li class="{{ Request::is('view_room') ? 'active' : '' }}">
                        <a href="{{url('view_room')}}">Display Rooms</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Request::is('bookings') ? 'active' : '' }}">
                <a href="{{url('bookings')}}"> <i class="icon-padnote"></i>Bookings </a>
            </li>

            <li class="{{ Request::is('view_gallary') ? 'active' : '' }}">
                <a href="{{url('view_gallary')}}"> <i class="icon-picture"></i>Gallery </a>
            </li>

            <li class="{{ Request::is('all_messages') ? 'active' : '' }}">
                <a href="{{url('all_messages')}}"> <i class="icon-mail"></i>Messages </a>
            </li>

        </ul>
    </nav>