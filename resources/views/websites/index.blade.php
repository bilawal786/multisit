@extends('layouts.admin')

@section('content')
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-sm btn-round waves-effect">Gérer le contenu</button>

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="card">

                        <div class="body">
                            <h6 class="m-b-15">Website 1 <span class="badge badge-success float-right">New</span></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="row">
                                <div class="col-7">
                                        <button class="btn btn-primary btn-sm btn-round waves-effect">Réglages généraux</button>
                                        <button class="btn btn-primary btn-sm btn-round waves-effect">Gérer le contenu</button>
                                </div>
                                <div class="col-5">
                                    <button class="btn btn-primary btn-sm btn-round waves-effect">Gérer le contenu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
