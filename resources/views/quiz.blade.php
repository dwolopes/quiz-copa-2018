@extends('app')
@section('content')
    <h1>De qual país é essa bandeira</h1>
        @foreach($bandeiras as $bandeira)
            @if ($loop->first)
                <img class="img-thumbnail"  style="width:200px" alt="" src="{{$bandeira['url']}}">
            @endif
        @endforeach
        <form>
            @foreach($bandeiras as $bandeira)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paises" id="{{$bandeira['id']}}" value="{{$bandeira['pais']}}">
                    <label class="form-check-label" for="{{$bandeira['id']}}">
                        {{$bandeira['pais']}}
                    </label>
                </div>
            @endforeach
            <a  href="{{/bandeiras/}}"> type="button" class="btn btn-primary">Próxima Questão</a>
        </form>
@endsection