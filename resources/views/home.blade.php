<!-- Página que nos permite comprobar que hemos accedido correctamente a nuestra cuenta -->

<!-- Enlace a la página layouts.blade.php -->
@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                  <div class="title text-left">
                    <h2>Welcome to PinPoint Space</h2><br>
                  </div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} 

                
                </div>
                                
            </div>
        </div>
    </div>
</div>
@endsection
