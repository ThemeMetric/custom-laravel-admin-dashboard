<?php
/**
 * Created by PhpStorm.
 * User: Sajjad
 * Date: 26-Oct-16
 * Time: 2:26 AM
 */
?>
@extends('layouts/dashboard.master')
@section('title','Notifications')
@section('content')

    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Notifications</h3>
            <ol class="breadcrumb">
                <li><a href="../../admin.php">Home</a></li>
                <li><a href="notifications.php">Notifications</a></li>
                <li class="active">Notifications</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Toastr</h3>
                    </div>
                    <div class="card-block buttons-demo">
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-success" data-toastr="success" data-message="Hello World" data-title="Success!">
                                    Success
                                </button>
                                <button class="btn btn-info" data-toastr="info" data-message="Hello World" data-title="Note!">
                                    Info
                                </button>
                                <button class="btn btn-danger" data-toastr="error" data-message="Hello World" data-title="Error!">
                                    Error
                                </button>
                                <button class="btn btn-warning" data-toastr="warning" data-message="Hello World" data-title="Warning!">
                                    Warning
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Notie.js</h3>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-success" data-notie="success" data-message="Hello World" >
                                    Success
                                </button>
                                <button class="btn btn-info" data-notie="info" data-message="Hello World" >
                                    Info
                                </button>
                                <button class="btn btn-danger" data-notie="error" data-message="Hello World" >
                                    Error
                                </button>
                                <button class="btn btn-warning" data-notie="warning" data-message="Hello World" >
                                    Warning
                                </button>
                                <button class="btn btn-primary" data-notie="confirm" >
                                    Confirm
                                </button>
                                <button class="btn btn-primary-outline" data-notie="input" >
                                    Input
                                </button>
                                <button class="btn btn-primary btn-rounded" data-notie="select" >
                                    Select
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Easy Flash Notifications</h3>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>Laraspace provides an easy way for your Laravel Application to handle notification alerts using any of the above plugins. Just call any of the functions mentioned below inside your controller method and you'll see the notification in the view.</p>
                                <p><code>flash()->success('You've Logged in Successfully.');</code></p>
                                <p><code>flash()->warning('There's something wrong.');</code></p>
                                <p><code>flash()->error('Validation Error');</code></p>
                                <p><code>flash()->info('Laraspace is Awesome!');</code></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
