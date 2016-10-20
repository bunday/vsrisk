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
                          <div class="progress-bar progress-bar-mine progress-bar-striped" role="progressbar" aria-valuenow="4" aria-valuemin="1" aria-valuemax="7" id="plike" style="width: 0px">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                        <div class="col-md-3" >
                        <input type="number" min="3" max="7" name="like" id="like" onchange="disp();"></div>
                        </div>

                        <div><span></span><span style="display:inline-block; width: 50px;"></span><span class="num" id="al"></span><span style="display:inline-block; width: 120px;"></span><span id="bl" class="num"></span><span style="display:inline-block; width: 80px;"></span><span id="cl" class="num"></span><span style="display:inline-block; width: 85px;"></span><span id="dl" class="num"></span><span style="display:inline-block; width: 60px;"></span><span id="el" class="num"></span><span style="display:inline-block; width: 75px;"></span><span id="fl" class="num"></span><span style="display:inline-block; width: 110px;"></span><span id="gl" class="num"></span></div>
                        <div><span id="la"></span><span style="display:inline-block; width: 20px;"></span><span id="lb"></span><span style="display:inline-block; width: 20px;"></span><span id="lc"></span><span style="display:inline-block; width: 35px;"></span><span id="ld"></span><span style="display:inline-block; width: 20px;"></span><span id="le"></span><span style="display:inline-block; width: 20px;"></span><span id="lf"></span><span style="display:inline-block; width: 40px;"></span><span id="lg"></span></div>
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
                          <div class="progress-bar progress-bar-mine progress-bar-striped" role="progressbar" aria-valuenow="4" aria-valuemin="1" aria-valuemax="7" id="pimp" style="width: 0px">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                        <div class="col-md-3" >
                        <input type="number" min="3" max="7" name="imp" id="imp" onchange="dispi();"></div>
                        </div>

                        <div><span></span><span style="display:inline-block; width: 50px;"></span><span class="num" id="aid"></span><span style="display:inline-block; width: 80px;"></span><span id="bid" class="num"></span><span style="display:inline-block; width: 90px;"></span><span id="cid" class="num"></span><span style="display:inline-block; width: 85px;"></span><span id="did" class="num"></span><span style="display:inline-block; width: 90px;"></span><span id="eid" class="num"></span><span style="display:inline-block; width: 115px;"></span><span id="fid" class="num"></span><span style="display:inline-block; width: 100px;"></span><span id="gid" class="num"></span></div>
                        <div><span></span><span style="display:inline-block; width: 0px;"></span><span id="iad"></span><span style="display:inline-block; width: 40px;"></span><span id="ibd"></span><span style="display:inline-block; width: 40px;"></span><span id="icd"></span><span style="display:inline-block; width: 25px;"></span><span id="idd"></span><span style="display:inline-block; width: 35px;"></span><span id="ied"></span><span style="display:inline-block; width: 50px;"></span><span id="iff"></span><span style="display:inline-block; width: 40px;"></span><span id="igd"></span></div>
                        <div class="row">
                          <div class="col-md-3"></div>
                          <div class="col-md-3"></div>
                          <div class="col-md-3"></div>
                          <button class="btn btn-primary col-md-3" id="change" onclick="show();">Edit</button>
                          <div class="col-md-3"></div>
                        </div>
                        <div class="panel panel-default" id="wrapper">
                            <div class="panel-heading">
                              <h3 class="panel-title">Likelihood and Impact Edit</h3>
                            </div>
                            <div class="panel-body">
                              <div class="row">
                            <div class="col-md-6">
                                
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">1</span>
                                  <input type="text" class="form-control" id="a" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">2</span>
                                  <input type="text" class="form-control" id="b" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">3</span>
                                  <input type="text" class="form-control" id="c" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">4</span>
                                  <input type="text" class="form-control" id="d" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">5</span>
                                  <input type="text" class="form-control" id="e" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">6</span>
                                  <input type="text" class="form-control" id="f" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">7</span>
                                  <input type="text" class="form-control" id="g" placeholder="" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">1</span>
                                  <input type="text" class="form-control" id="ai" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">2</span>
                                  <input type="text" class="form-control" id="bi" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">3</span>
                                  <input type="text" class="form-control" id="ci" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">4</span>
                                  <input type="text" class="form-control" id="di" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">5</span>
                                  <input type="text" class="form-control" id="ei" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">6</span>
                                  <input type="text" class="form-control" id="fi" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">7</span>
                                  <input type="text" class="form-control" id="gi" placeholder="" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-4"></div>
                         <button class="btn btn-primary col-md-4" align="centre" onclick="changeimp();">Change Likelihood and Impact Text</button>
                         <div class="col-md-4"></div>
                         </div>
                            </div>
                        </div>
                           
                    </div>
                <div class="row">
                  

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
