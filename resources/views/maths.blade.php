@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Acceptance Criteria</div>

                <div class="panel-body">
                    <div>
                        <--Header-->
                        <div class="row">
                            <div class="col-md-3">
                            <h4>Select a Formular</h4></div>
                            <div class="col-md-6">
                            <select class="form-control" id="fml" onchange="">
                              <option>[likelihood + impact] - 1</option>
                              <option>[likelihood + impact]</option>
                              <option>[likelihood * impact]</option>
                              <option>[likelihood]</option>
                              <option>[impact]</option>
                            </select></div>
                            <input type="hidden" name="clike" id="clike" value="7">
                            <input type="hidden" name="cimp" id="cimp" value="7">
                            <div class="col-md-3">
                                <button class="btn btn-primary" onclick="clearit(); solve();  gitt();dynamicmatrix();">Calculate</button>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="row">
                           
                            <div class="col-md-12"><a href="#">Graph Here</a>
                                <br/><br/>
                                <div class="row"> 
                               
                            <div class="col-md-12" id="holder">
                            <div class="row">

                                <div class="col-md-1" id="a1"></div>
                                <div class="col-md-1" id="a2"></div>
                                <div class="col-md-1" id="a3"></div>
                                <div class="col-md-1" id="a4"></div>
                                <div class="col-md-1" id="a5"></div>
                                <div class="col-md-1" id="a6"></div>
                                <div class="col-md-1" id="a7"></div>
                                
                                </div>
                                
                            </div>

                            
                            </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
