@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                <div class="lead">
                    <i> Management Scales</i></div>
                    <div>
                        <div class="row">
                            <div class="col-md-3"><h3> Likelihood</h3></div> 
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3"><button class="btn btn-primary" onclick="def();"> Apply Default Likelihood</button></div>
                        </div>
                        <div class="row">
                        <div class="progress col-md-9">
                          <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="4" aria-valuemin="1" aria-valuemax="7" id="plike" style="width: 0px">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                        <div class="col-md-3" >
                        <input type="number" min="1" max="7" name="like" id="like" onchange="disp();"></div>
                        </div>
                        <div><span id="la"></span><span id="lb"></span><span id="lc"></span><span id="ld"></span><span id="le"></span><span id="lf"></span><span id="lg"></span></div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-md-3"><h3> Impact</h3></div> 
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3"><button class="btn btn-primary" onclick="defi();"> Apply Default Impact</button></div>
                        </div>
                        <div class="row">
                        <div class="progress col-md-9">
                          <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="4" aria-valuemin="1" aria-valuemax="7" id="pimp" style="width: 0px">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                        <div class="col-md-3" >
                        <input type="number" min="1" max="7" name="imp" id="imp" onchange="dispi();"></div>
                        </div>
                        <div><span id="impremark"></span><span id="ac"></span></div>
                        <button class="btn btn-primary" id="change" onclick="show();">Edit</button>
                        <div class="row">
                            <div class="col-md-6">
                                1. <input type="text" id="a" name="a">
                                2. <input type="text" id="b" name="b">
                            </div>
                            <div class="col-md-6">
                                1. <input type="text" id="ab" name="ab">
                                2. <input type="text" id="bb" name="bb">
                            </div>
                        </div>
                            <button class="btn btn-primary" align="centre" onclick="change();">Change Likelihood and Impact Text</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
