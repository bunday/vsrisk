@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                <div class="lead">
                    <i> Welcome to a new Risk Management tool..... content here</i></div>
                    <div class="row">
                        <div class="col-xs-6">
                        <div>
                        <a href="/register">
                            <img src="pluss.png">
                            <p align="bottom left"> Add a new ISMS</p></a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                        <div>
                        <a href="/login">
                            <img src="enter.jpg">
                            <p align="bottom right">Login to an Existing ISMS</p></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
