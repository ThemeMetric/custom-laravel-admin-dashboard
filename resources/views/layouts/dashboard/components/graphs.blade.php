<?php
/**
 * Created by PhpStorm.
 * User: Sajjad
 * Date: 26-Oct-16
 * Time: 2:20 AM
 */
?>
@extends('layouts/dashboard.master')
@section('title','Graphs')
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Graphs</h3>
            <ol class="breadcrumb">
                <li><a href="../../admin.php">Home</a></li>
                <li><a href="graphs.php">Components</a></li>
                <li class="active">Graphs</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Chartjs</h3>
                    </div>
                    <div class="card-block">
                        <div class="m-b-2">
                            <h5 class="section-semi-title">
                                Line Chart
                            </h5>
                            <canvas id="lineChart" width="400" height="400"></canvas>
                        </div>
                        <div class="m-b-2">
                            <h5 class="section-semi-title">
                                Bar Chart
                            </h5>
                            <canvas id="barChart" width="400" height="400"></canvas>
                        </div>
                        <div class="row">
                            <div class="col-md-6 m-b-2">
                                <h5 class="section-semi-title">
                                    Pie Chart
                                </h5>
                                <canvas id="pieChart" width="400" height="400"></canvas>
                            </div>
                            <div class="col-md-6 m-b-2">
                                <h5 class="section-semi-title">
                                    Doughnut Chart
                                </h5>
                                <canvas id="doughnutChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
