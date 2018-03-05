@extends('layouts.admin')

@section('title','Admin Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            	
                <div class="panel-heading" >
                   
	                <ul class="nav nav-pills">
		                <li>....</li>
			  			<li class="active"><a href="{{url('/home')}}"><i class="fas fa-home"></i>&nbsp; Home</a></li>
			  			<li><a  href="{{url('/candidate')}}"><i class="fas fa-list-ul"></i> &nbsp; Candidates List</a></li>  
			  			<li class=""><a  href="{{url('/voter')}}"><i class="fas fa-list-ul"></i> &nbsp; Voters List</a></li>  
				 		<li><a  href=" "><i class="fas fa-window-restore"></i> Result</a></li>
				 		<li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-download"></i> &nbsp; Download <span class="caret"></span></a>
          					<ul class="dropdown-menu">
            					<li><a href="#">Voter List</a></li>
            					<li><a href="#">Candidate List</a></li>
            					<li><a href="#">Result</a></li>
          					</ul>
        				</li>
	            	</ul>
	              
	                </div>
	            	

                <div class="panel-body">

                	<div class="row">
                		<ul class="nav nav-tabs">
  							<li class="nav-item">
    							<a class="nav-link active" href="#">All</a>
  							</li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Unvoted</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Voted</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link " href="#">VIP</a>
							  </li>
						</ul>
                    </div>

                    <div class="row"><a class="btn btn-success" href=""> Add Voter</a></div>
                	<div class="row"><hr></div>

                    <div class="row">
                        <div class="col-md-5 col-md-offset-3">
                              <form class="form-horizontal" method="POST" action="{{url('save_voter')}}">
                                  {{ csrf_field() }}
                                  <div>      
                                  </div>

                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                      <label for="name" class="col-md-4 control-label">Name</label>

                                      <div class="col-md-8">
                                          <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                                      </div>
                                  </div>

                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                      <label for="name" class="col-md-4 control-label">Voter ID</label>

                                      <div class="col-md-8">
                                          <input id="roll" type="text" class="form-control" name="voter_id" value="{{ old('roll') }}" required autofocus>
                                          @if ($errors->has('roll'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('roll') }}</strong>
                                              </span>
                                          @endif

                                      </div>
                                  </div>

                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                      <label for="name" class="col-md-4 control-label">Session</label>

                                      <div class="col-md-8">
                                          <input id="fname" type="text" class="form-control" name="session" value="" required autofocus>

                                      </div>
                                  </div>
                             

                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                      <label for="name" class="col-md-4 control-label">Year</label>

                                      <div class="col-md-8">
                                          <select name="year" class="form-control">
                                              <option>1st Year</option>
                                              <option>2nd Year</option>
                                              <option>3rd Year</option>
                                              <option>4th Year</option>
                                          </select>
                                      </div>
                                  </div>

                                 
                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                      <label for="name" class="col-md-4 control-label">Password</label>

                                      <div class="col-md-8">
                                          <input id="aca" type="text" class="form-control" name="password" value="" required autofocus>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-md-8 col-md-offset-4">
                                          <button type="submit" class="btn btn-primary">
                                              <i class="fal fa-save"></i>&nbsp; Save
                                          </button>
                                      </div>
                                  </div>
                              </form>
                         </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 