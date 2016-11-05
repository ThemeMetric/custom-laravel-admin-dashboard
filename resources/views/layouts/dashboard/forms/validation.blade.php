<?php
/**
 * Created by PhpStorm.
 * User: Sajjad
 * Date: 26-Oct-16
 * Time: 2:51 AM
 */
?>
@extends('layouts/dashboard.master')
@section('title','Validation')
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Form Validation</h3>
            <ol class="breadcrumb">
                <li><a href="../../admin.php">Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Form Validation</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Jquery Validate <a class="source-link" href="https://jqueryvalidation.org/" target="_blank">source</a></h3>
                    </div>
                    <div class="card-block">
                        <form id="validateForm">
                            <div class="form-group">
                                <label >Email address</label>
                                <input type="email" class="form-control" name="email"
                                       placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username"
                                       placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Retype Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="checkbox checkbox-full">
                                    <label>
                                        <input type="checkbox" value="" name="terms">
                                        I Accept Terms & Conditions
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
