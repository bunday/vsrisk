@extends('layouts.inapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @for($i = 7; $i > 0; $i--)
                        @for($j = $i; $j <= ($i + 7 - 1) ; $j++)
                            <a href="{{ url('/treshold' . $j) }}"><label class="btn btn-primary">{{ $j }}</label></a>
                        @endfor
                        <br/>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
