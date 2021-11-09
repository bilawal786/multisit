@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Créer un nouveau site Web</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('website.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email_address">Logo</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="logo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Nom du site</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="sitename">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Telephone</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Email</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Adresse</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Facebook</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="facebook">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Instagram</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="instagram">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Temps</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="time">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Brève description</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="footer_text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Logo de pied de page</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="footer_logo">
                                </div>
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
