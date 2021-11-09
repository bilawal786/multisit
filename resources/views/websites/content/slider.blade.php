@extends('layouts.website')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Curseur</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('slider.store', ['id' => $content->website_id])}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email_address">Curseur 1</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="slider1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($content->slider1)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Curseur 2</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="slider2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($content->slider2)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Curseur 3</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="slider3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($content->slider3)}}" style="height: 100px" alt="">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Sauvegarder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->

@endsection
