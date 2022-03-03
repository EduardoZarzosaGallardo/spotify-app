@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <h2>Mi biblioteca</h2>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#">
                            <img src="imagenes/album_intensive.jpg" class="card-img-top">
                            <div class="card-body">
                                <a class="link-cancion" href="#">
                                    <h5 class="card-title">Cancion</h5>
                                </a>
                                <a class="link-artista" href="#">
                                    <p class="card-text">Artista</p>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="imagenes/album_intensive.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cancion</h5>
                            <p class="card-text">Artista</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="imagenes/album_intensive.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cancion</h5>
                            <p class="card-text">Artista</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="imagenes/album_intensive.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cancion</h5>
                            <p class="card-text">Artista</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <h2>Explorar</h2>
                </div>
                <div class="col-md-3">
                    <div class="categorias">
                        <a href="#">
                            <p class="categoria-descripcion">Pop</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="categorias">
                        <p class="categoria-descripcion">Rock</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="categorias">
                        <p class="categoria-descripcion">Jazz</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="categorias">
                        <p class="categoria-descripcion">Electronica</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
