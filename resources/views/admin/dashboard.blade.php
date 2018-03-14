@extends('layouts.app')

@section('title','Dashboard');


@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-header" data-background-color="orange">
    <i class="material-icons">content_copy</i>
</div>
<div class="card-content">
    <p class="category">Used Space</p>
    <h3 class="title">49/50
        <small>GB</small>
    </h3>
</div>
<div class="card-footer">
    <div class="stats">
        <i class="material-icons text-danger">warning</i>
        <a href="#pablo">Get More Space...</a>
    </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-header" data-background-color="green">
    <i class="material-icons">store</i>
</div>
<div class="card-content">
    <p class="category">Revenue</p>
    <h3 class="title">$34,245</h3>
</div>
<div class="card-footer">
    <div class="stats">
        <i class="material-icons">date_range</i> Last 24 Hours
    </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-header" data-background-color="red">
    <i class="material-icons">info_outline</i>
</div>
<div class="card-content">
    <p class="category">Fixed Issues</p>
    <h3 class="title">75</h3>
</div>
<div class="card-footer">
    <div class="stats">
        <i class="material-icons">local_offer</i> Tracked from Github
    </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-header" data-background-color="blue">
    <i class="fa fa-twitter"></i>
</div>
<div class="card-content">
    <p class="category">Followers</p>
    <h3 class="title">+245</h3>
</div>
<div class="card-footer">
    <div class="stats">
        <i class="material-icons">update</i> Just Updated
    </div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="card">
<div class="card-header card-chart" data-background-color="green">
    <div class="ct-chart" id="dailySalesChart"></div>
</div>
<div class="card-content">
    <h4 class="title">Daily Sales</h4>
    <p class="category">
        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
</div>
<div class="card-footer">
    <div class="stats">
        <i class="material-icons">access_time</i> updated 4 minutes ago
    </div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<div class="card-header card-chart" data-background-color="orange">
    <div class="ct-chart" id="emailsSubscriptionChart"></div>
</div>
<div class="card-content">
    <h4 class="title">Email Subscriptions</h4>
    <p class="category">Last Campaign Performance</p>
</div>
<div class="card-footer">
    <div class="stats">
        <i class="material-icons">access_time</i> campaign sent 2 days ago
    </div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<div class="card-header card-chart" data-background-color="red">
    <div class="ct-chart" id="completedTasksChart"></div>
</div>
<div class="card-content">
    <h4 class="title">Completed Tasks</h4>
    <p class="category">Last Campaign Performance</p>
</div>
<div class="card-footer">
    <div class="stats">
        <i class="material-icons">access_time</i> campaign sent 2 days ago
    </div>
</div>
</div>
</div>
</div>

@endsection
