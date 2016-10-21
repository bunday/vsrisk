@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Control Section Upload</div>

                <div class="panel-body">
                <div class="lead">
                    <i>Please select an Excel file</i></div>
                    
                    

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/importExcel') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('iso') ? ' has-error' : '' }}">
                            <label for="iso" class="col-md-3 control-label">Select Control From File</label>

                            <div class="col-md-6">
                                <input id="iso" type="file" class="form-control" name="iso" value="{{ old('iso') }}" accept=".csv">

                                @if ($errors->has('iso'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('iso') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label class="col-md-3"><p class="beem">*.csv only</p></label>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-file"></i> Upload File
                                </button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ url('/scale') }}"><label class="btn btn-primary">Skip</label></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
