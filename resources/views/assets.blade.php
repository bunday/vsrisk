@extends('layouts.afterlogin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Asset Details</div>
                <div class="panel-body">
                    <i>Create New Asset here.....</i></div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('asset') ? ' has-error' : '' }}">
                            <label for="asset" class="col-md-4 control-label">Asset Name</label>

                            <div class="col-md-6">
                                <input id="asset" type="text" class="form-control" name="asset" value="{{ old('asset') }}" placeholder="Asset Name">

                                @if ($errors->has('asset'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('owner') ? ' has-error' : '' }}">
                            <label for="owner" class="col-md-4 control-label">Asset Owner</label>

                            <div class="col-md-6">
                                <select id="owner" class="form-control" name="owner" value="{{ old('owner') }}">
                                    <option selected disabled> Select Owner</option>

                                @if ($errors->has('owner'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('owner') }}</strong>
                                    </span>
                                @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Asset Type</label>

                            <div class="col-md-6">
                                <select id="type" class="form-control" name="type" value="{{ old('type') }}">
                                    <option selected disabled>Select Type</option>
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Asset Category</label>

                            <div class="col-md-6">
                                <select id="category" type="text" class="form-control" name="category" value="{{ old('category') }}">
                                    <option selected disabled>Select Category</option>
                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('group') ? ' has-error' : '' }}">
                            <label for="group" class="col-md-4 control-label">Asset Group</label>
                            <div class="col-md-6 multiselect">
                                <div class="selectBox" onclick="showCheckboxes()">
                                    <select id="group" class="form-control" name="group" value="{{ old('group') }}">
                                        <option selected disabled>Select Group</option>
                                    </select>
                                    <div class="overSelect"></div>
                                </div>
                                <div id="checkboxes">
                                    <label for="one"><input type="checkbox" id="one"/>Group1</label>
                                    <label for="two"><input type="checkbox" id="two"/>Group2</label>
                                    <label for="three"><input type="checkbox" id="three"/>Group3</label>
                                    <label for="four"><input type="checkbox" id="four"/>Group4</label>
                                    <label for="five"><input type="checkbox" id="five"/>Group5</label>
                                </div>
                            </div>
                            <div class="click"><img src="add.png"><img src="delete.png"></div>
                        </div>

                        <div class="form-group{{ $errors->has('identification') ? ' has-error' : '' }}">
                            <label for="identification" class="col-md-4 control-label">Identification</label>

                            <div class="col-md-6">
                                <input id="identification" type="text" class="form-control" name="identification" placeholder="Identify Asset">

                                @if ($errors->has('identification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('identification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Asset Location</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" placeholder="Asset Location">

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('identification') ? ' has-error' : '' }}">
                            <label for="identification" class="col-md-4 control-label">Assess Asset</label>

                            
                        </div>
                        <input type="hidden">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-pencil"></i> Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
