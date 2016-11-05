<?php
/**
 * Created by PhpStorm.
 * User: Sajjad
 * Date: 28-Oct-16
 * Time: 8:31 PM
 */
?>
@extends('layouts/dashboard.master')
@section('title','Users')
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Users</h3>
            <ol class="breadcrumb">
                <li><a href="{{URL::to('/admin')}}">Home</a></li>
                <li><a href="{{URL::to('/users')}}">Users</a></li>
                <li class="active">Users</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>All Users</h3>
                    </div>
                    <div class="card-block">
                        <table id="users-datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Registered On</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
