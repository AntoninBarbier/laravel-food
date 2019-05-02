@extends('layouts.app')

@section('pagespecificstyles')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
@stop

@section('content')
<div class="header">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajout d'un repas</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('meals.store') }}">
                        @csrf

                        <button style="display: none"></button>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Date:</label>

                            <div class="col-md-6">
                                <input id="date" type="date" name="date" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>

                            <div class="col-md-6">
                                <select name="type" id="select-type">
                                    <option value="Petit déjeuner">Petit-déjeuner</option>
                                    <option value="Déjeuner">Déjeuner</option>
                                    <option value="Encas">Encas</option>
                                    <option value="Dîner">Dîner</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row div_product">
                            <label for="products" class="col-md-4 col-form-label text-md-right">Produits:</label>

                            <div class="col-md-6 d-flex">
                                <input type="text" name="products[]">
                                <button class="btn btn-primary ml-2 add_product" type="button">
                                    <i class="fas fa-search" style="pointer-events:none;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer le repas
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('pagespecificscripts')
    <script src="{{ asset('js/forms.js') }}"></script>
@stop