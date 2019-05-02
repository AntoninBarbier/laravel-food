@extends('layouts.app')

@section('pagespecificstyles')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
@stop

@section('content')
<div class="header">

</div>
<div class="container">
    <div>
        <h2 class="mt-3">Vos menus</h3>
        @if (count($meals) != 0)
            @foreach ($meals as $meal)
                <p>{{ $meal->type }} du {{ $meal->meal_date }}</p>
                <a href="{{ route('meals.edit', ['meal_id' => $meal->id]) }}"><button><i class="fas fa-edit"></i></button></a>
                <form method="POST" action="{{ route('meals.destroy', ['meal_id' => $meal->id]) }}" id="delete-form">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="action_btn" id="delete_btn"><i class="far fa-trash-alt fa-2x"></i></button>
                </form>
            @endforeach
        @else
            Vous n'avez pas encore ajouté de menu.
        @endif
        <a href="{{ route('meals.create') }}">
            <button class="btn btn-primary">
                Ajouter un repas
            </button>
        </a>
    </div>
    <div>
        <h2>Vos menus</h2>
        
    </div>
</div>
@endsection
