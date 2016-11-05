<?php
/**
 * Created by PhpStorm.
 * User: Sajjad
 * Date: 28-Oct-16
 * Time: 10:26 PM
 */

?>
@extends('layouts/dashboard.master')
@section('title','Todo')
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">
                Todos <small class="text-muted">Built with Vue JS</small>
            </h3>
            <ol class="breadcrumb">
                <li><a href="../admin.php">Home</a></li>
                <li><a href="#">Todos</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-block" id="app">
                <todos your-todos="[]"></todos>
            </div>
            <input type="hidden" name="_token" value="rPQsDEzdgkRUwlxjHFTpiIIyqrAmhDyVXbvan2Ee">
        </div>

    </div>
@endsection
