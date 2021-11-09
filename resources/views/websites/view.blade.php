@extends('layouts.website')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body">
                    <h4 class="m-t-0 m-b-0">2,048</h4>
                    <p class="m-b-0">Total Leads</p>
                    <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                         data-offset="90" data-width="100%" data-height="40px" data-line-Width="2" data-line-Color="#34495e"
                         data-fill-Color="transparent"> 7,6,7,8,5,9,8,6,7 </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body">
                    <h4 class="m-t-0 m-b-0">521</h4>
                    <p class="m-b-0 ">Total Connections</p>
                    <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                         data-offset="90" data-width="100%" data-height="42px" data-line-Width="2" data-line-Color="#5394c9"
                         data-fill-Color="transparent"> 6,5,7,4,5,3,8,6,5 </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body">
                    <h4 class="m-t-0 m-b-0">73</h4>
                    <p class="m-b-0 ">Articles</p>
                    <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                         data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="#37bf8d"
                         data-fill-Color="transparent"> 8,7,7,5,5,4,8,7,5 </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body">
                    <h4 class="m-t-0 m-b-0">15</h4>
                    <p class="m-b-0">Categories</p>
                    <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                         data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="#f1c364"
                         data-fill-Color="transparent"> 7,6,7,8,5,9,8,6,7 </div>
                </div>
            </div>
        </div>
    </div>
@endsection
