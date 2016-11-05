<?php
/**
 * Created by PhpStorm.
 * User: Sajjad
 * Date: 20-Oct-16
 * Time: 4:08 AM
 */

?>
<header class="site-header">
    <a href="{{URL::to('/admin')}}" class="brand-main">
        <img src="{{URL::asset('dashboard/img/ds-logo.png')}}" alt="Laraspace Logo" class="hidden-sm-down">
        <img src="{{URL::asset('dashboard/img/logo-mobile.png')}}" alt="Laraspace Logo" class="hidden-md-up">
    </a>
    <a href="{{URL::to('/admin')}}" class="nav-toggle">
        <div class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </div>
    </a>

    <ul class="action-list">
        <li>
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">New Post</a>
                <a class="dropdown-item" href="#">New Category</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>
        <li>
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
            <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                <h6 class="dropdown-header">Notifications</h6>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> New User was Registered</a>
                <a class="dropdown-item" href="#"><i class="fa fa-comment"></i> A Comment has been posted.</a>
            </div>
        </li>
        <li>
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="avatar"><img src="{{URL::asset('dashboard/img/avatar.png')}}" alt="Avatar"></a>
            <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                <a class="dropdown-item" href="{{URL::to('/settings')}}"><i class="fa fa-cogs"></i> Settings</a>
                <a class="dropdown-item" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>
</header>
