@extends('layouts.admin')

@section('content')
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <a href="{{route('website.create')}}"><button class="btn btn-primary waves-effect">Créer un nouveau site Web</button></a>
                </div>
            </div>
            <br>
            <div class="row clearfix">
                @foreach($websites as $web)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <h6 class="m-b-15">{{$web->sitename}} <span class="badge badge-success float-right">Active</span></h6>
                            <p>{{$web->footer_text}}</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{route('website.view', ['id' => $web->id])}}"> <button class="btn btn-primary btn-sm btn-round waves-effect">Voir le site Web</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
@endsection
