@extends('layouts.inapp')

@section('content')

	<div class="panel-left">
		<div class = "panel-view">
			<form>
				<label>View Assets By: </label>
				<select id="viewby" name="by" onchange="this.form.submit()">
					<option selected disabled>Choose View</option>
					<option value="owner">Owner</option>
					<option value="group">Group</option>
					<option value="asset">Asset</option>
					<option value="scenerio">Scenerio</option>	
				</select>
				<input type="text" name="filter" placeholder="filter view"/>
			</form>
			<div id="manage">
				<img src="images/user.png" id="usermanagement" name="usermanagement" onclick="userTable()" title="View Asset Owners">
				<img id="addasset" name="addasset" onclick="addAsset()" src="images/addasset.png" title="Add New Asset">
				</br><br>
			
				<!--<label id="deleteasset" name="deleteasset" onclick="deleteAsset()"><img src="deleteasset.png"></label>-->
				<?php
					switch ('') {
						case '':
						//mysql select querry goes here...
							echo '
								<label class="dropdown active">
                    				<i class="fa fa-arrow-right"></i><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false" class="active-owner">Asset Owners</a>
                    				<ul class="dropdown-menu" role="menu">
			                        <li class="dropdown"></li>  
			                        <li><a href="#">Asset 1</a></li>
			                        <li><a href="#">Asset 2</a></li>
			                        <li><a href="#">Asset 3</a></li>
			                        <li><a href="#">Asset 4</a></li>
			                        <li><a href="#">Asset 5</a></li>
			                        <li><a href="#">Asset 6</a></li>
			                        <li><a href="#">Asset 7</a></li>
			                    </ul>
			                </label>
			                <label class="dropdown active">
                    				<i class="fa fa-arrow-right"></i><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false">Asset Owners</a>
                    				<ul class="dropdown-menu" role="menu">
			                        <li class="dropdown"></li>  
			                        <li><a href="#">Asset 1</a></li>
			                        <li><a href="#">Asset 2</a></li>
			                        <li><a href="#">Asset 6</a></li>
			                        <li><a href="#">Asset 7</a></li>
			                    </ul>
			                </label>
							';			
							break;
						case 'group':
							
							break;
						case 'asset':
							
							break;
						case 'scenerio':
							
							break;
						default:
							
							break;
					}
				?>
                </label>
				
                <form id="form-delete" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                        <label for="role" class="col-md-4 control-label">Select Asset</label>
                        <div class="col-md-6">
                            <select class="ass-delete-list" onfocus='this.size=10;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                <option selected disabled>Asset Name</option>
                                <option value="admin">asset</option>
                                <option value="owner">asset</option>
                                <option value="admin">asset</option>
                                <option value="owner">asset</option>
                                <option value="admin">asset</option>
                                <option value="owner">asset</option>
                                <option value="admin">asset</option>
                                <option value="owner">asset</option>
                                <option value="admin">asset</option>
                                <option value="owner">asset</option>
                            @if ($errors->has('role'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('role') }}</strong>
                                </span>
                            @endif
                            </select>
                        </div>
                    </div>
                    <input type="hidden">

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa fa-trash-o"></i>Delete Asset
                            </button>
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
	<div class="panel-right">
		<div class="container">
		    <div class="row">
		        <div class="col-md-8 col-md-offset-2">
		        	<div class="panel panel-default" id="addass" style="display: none;">
			            <div class="panel-heading">Create Asset</div>
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
	                                    <option selected> <?php echo '';?></option>

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
	                            <div class="click"><img src="images/add.png"><img src="images/delete.png"></div>
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
	                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
	                            <label for="location" class="col-md-4 control-label">Legal, Regulatory and Contractual Obligations</label>

	                            <div class="col-md-6">
	                                <img src="images/note.png" onclick="showTextBox()"><i id="somenote">click to add note</i>
	                                <textarea name="textBox" id="textBox" class="form-control" style="display: none;"></textarea>
	                            </div>
	                        </div>
	                        <div class="form-group{{ $errors->has('identification') ? ' has-error' : '' }}">
	                            <label for="identification" class="col-md-4 control-label">Assess Asset</label>

	                            <div class="col-md-6" id="groupassess">
	                                <div id="conf">
	                                    Confidentiality: <label id="roundconf" onclick="changeConf()">1</label>
	                                    <input width="50px" type="number" min="1" max="5" name="" id="setconf" onchange="setConf(this.value);"  style="display: none;"/>
	                                </div>
	                                <div id="conf">
	                                    Integrity: <label id="roundint" onclick="changeInt()">1</label>
	                                    <input type="number" min="1" max="5" name="" id="setint" onchange="setInt(this.value);"  style="display: none;"/>
	                                </div>
	                                <div id="conf">
	                                    Availabiltiy: <label id="roundava" onclick="changeAv()">1</label>
	                                    <input type="number" min="1" max="5" name="" id="setava" onchange="setAva(this.value);"  style="display: none;"/>
	                                </div>
	                            </div>
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
		            <div class="panel panel-default" id="ass" style="display: none;">
		                <div class="panel-heading">Risk Management</div>
		                <br>
		                <!--<div class="col-md-offset-1" id="gone">
                            <button class="btn btn-primary" onclick="addUser()">
                                <i class="fa fa-btn fa fa-plus"></i>Create User
                            </button>
                        </div>-->
	                    <div data-role="main" class="ui-content" id="gone">
						    <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left" style="background-color: #dddddd;">Create User</a>
						    <div data-role="popup" id="myPopup" class="ui-content" style="min-width: 500px; margin-left: 650px; margin-top: 200px;">
						      	<form id="form-new-user" class="form-horizontal" role="form" method="POST" action="{{ url('/adduser') }}">
				                    {{ csrf_field() }}
				                    <!--Integrity Security
				                    <div class="onoffswitch">
								        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked />
								        <label class="onoffswitch-label" for="myonoffswitch">
								            <span class="onoffswitch-inner"></span>
								            <span class="onoffswitch-switch"></span>
								        </label>
								    </div>-->
									
				                    <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
				                        <label for="fullname" class="col-md-4 control-label">Full Name</label>
				                        <div class="col-md-6">
				                            <input id="" type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" placeholder="Full Name">
				                            @if ($errors->has('fullname'))
				                                <span class="help-block">
				                                    <strong>{{ $errors->first('fullname') }}</strong>
				                                </span>
				                            @endif
				                        </div>
				                    </div>
				                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
				                        <label for="username" class="col-md-4 control-label">Username</label>
				                        <div class="col-md-6">
				                            <input id="" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Full Name">
				                            @if ($errors->has('username'))
				                                <span class="help-block">
				                                    <strong>{{ $errors->first('username') }}</strong>
				                                </span>
				                            @endif
				                        </div>
				                    </div>
				                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				                        <label for="email" class="col-md-4 control-label">Email</label>
				                        <div class="col-md-6">
				                            <input id="" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
				                            @if ($errors->has('email'))
				                                <span class="help-block">
				                                    <strong>{{ $errors->first('email') }}</strong>
				                                </span>
				                            @endif
				                        </div>
				                    </div>
				                    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
				                        <label for="role" class="col-md-4 control-label">Role</label>
				                        <div class="col-md-6">
				                            <select id="role" class="form-control" name="role" value="{{ old('role') }}">
				                                <option selected disabled>Assign Role</option>
				                                <option value="admin">Administrator</option>
				                                <option value="owner">Asset Owner</option>
				                            @if ($errors->has('role'))
				                                <span class="help-block">
				                                    <strong>{{ $errors->first('role') }}</strong>
				                                </span>
				                            @endif
				                            </select>
				                        </div>
				                    </div>
				                    <input type="hidden">

				                    <div class="form-group">
				                    	
				                        <div class="col-md-6 col-md-offset-4">
				                        	<button type="submit" class="btn btn-primary">
				                                <i class="fa fa-btn fa fa-plus"></i>Create User
				                            </button>
				                        </div>
				                    </div>
				                </form>
		                    </div>
						</div>
	                    <div class="panel-body">
	                		<table id="table">
			             		<thead id="table-head"><tr><th>Full Name</th><th>UserName</th><th>Role</th><th>Last Login</th></tr></thead>
			             		<tr class="table-row"><td>Dimeji Uwem</td><td>dimeji</td><td>Administrator</td><td>11.02.2016</td></tr>
			             		<tr class="table-row"><td>Ezeokoye Micheal</td><td>Jaymikels</td><td>Administrator</td><td>11.02.2016</td></tr>
			             		<tr class="table-row"><td>Akintola Femi</td><td>Alade</td><td>Administrator</td><td>11.03.2012</td></tr>
			             		<tr class="table-row"><td>Olayinka Zadat</td><td>Bunday</td><td>Administrator</td><td>10.01.2016</td></tr>
			             		<tr class="table-row"><td>Gboyega</td><td>gboyega</td><td>Administrator</td><td>11.02.2016</td></tr>
			             		<tr class="table-row"><td>Stanley Okoro</td><td>ostan</td><td>Administrator</td><td>11.02.2016</td></tr>
			             	</table>
			            
		                </div>
		            
		            </div>
		        </div>
		    </div>
		</div>
	</div>

@endsection