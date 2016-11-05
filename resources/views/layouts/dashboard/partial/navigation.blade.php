<?php
/**
 * Created by PhpStorm.
 * User: Sajjad
 * Date: 20-Oct-16
 * Time: 4:10 AM
 */
?>
<div class="mobile-menu-overlay"></div>
<div class="sidebar-left " id="mobile-nav">
    <div class="sidebar-body scroll-pane">
        <ul class="side-nav">
            <li class="active open  has-child">
                <a href="#"><i class="fa fa-dashboard"></i> Dashboard</a>
                <ul class="sub-menu collapse">
                    <li class="active"><a href="{{URL::to('/admin')}}">Basic</a></li>
                    <li class=""><a href="{{URL::to('/icon-sidebar')}}">Icon Sidebar</a></li>
                </ul>
            </li>
            <li class="has-child ">
                <a href="#">
                    <i class="fa fa-star"></i> Basic UI
                </a>
                <ul class="sub-menu collapse">
                    <li class=""><a href="{{URL::to('/buttons')}}">Buttons</a></li>
                    <li class=""><a href="{{URL::to('/cards')}}">Cards</a></li>
                    <li class=""><a href="{{URL::to('/tabs')}}">Tabs & Accordians</a></li>
                    <li class=""><a href="{{URL::to('/typography')}}">Typography</a></li>
                    <li class=""><a href="{{URL::to('/tables')}}">Tables</a></li>
                </ul>
            </li>
            <li class="has-child ">
                <a href="#">
                    <i class="fa fa-puzzle-piece"></i> Components
                </a>
                <ul class="sub-menu collapse">
                    <li class=""><a href="{{URL::to('/datatables')}}">Datatables</a></li>
                    <li class=""><a href="{{URL::to('/notifications')}}">Notifications</a></li>
                    <li class=""><a href="{{URL::to('/graphs')}}">Graphs</a></li>
                </ul>
            </li>
            <li class="has-child ">
                <a href="#">
                    <i class="fa fa-rocket"></i> Forms
                </a>
                <ul class="sub-menu collapse">
                    <li class=""><a href="{{URL::to('/general')}}">General Elements</a></li>
                    <li class=""><a href="{{URL::to('/advanced')}}">Advanced Elements</a></li>
                    <li class=""><a href="{{URL::to('/layouts')}}">Form Layouts</a></li>
                    <li class=""><a href="{{URL::to('/validation')}}">Form Validation</a></li>
                    <li class=""><a href="{{URL::to('/editors')}}">Editors</a></li>
                </ul>
            </li>
            <li class="has-child ">
                <a href="#">
                    <i class="fa fa-file"></i> Pages
                </a>
                <ul class="sub-menu collapse">
                    <li class=""><a target="_blank" href="{{URL::to('/login')}}">Login</a></li>
                    <li class=""><a target="_blank" href="{{URL::to('/register')}}">Register</a></li>
                </ul>
            </li>
            <li class="has-child ">
                <a href="#">
                    <i class="fa fa-user"></i> Users
                </a>
                <ul class="sub-menu collapse">
                    <li class=""><a href="{{URL::to('/users')}}">All Users</a></li>
                    <li class=""><a href="{{URL::to('/profile')}}">User Profile</a></li>
                </ul>
            </li>
            <li class=""><a href="{{URL::to('/todos')}}"><i class="fa fa-check"></i> Todo App</a></li>
            <li class=""><a href="{{URL::to('/settings')}}"><i class="fa fa-cogs"></i> Settings</a></li>
        </ul>    </div>
</div>
