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
            					<li><a href="{{url('/download')}}">Voter List</a></li>
                      <li><a href="{{url('download')}}">Candidate List</a></li>
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

                    <div class="row"><a class="btn btn-success" href="{{url('add_voter')}}"> Add Voter</a></div>
                	<div class="row"><hr></div>

                    <div class="row">
                    	<!-- start-->
                    <div class="table-responsive">
                              <table class="table table-striped table-hover table-bordered ">
                                <thead>
                                  <tr>                       
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Password</th>
                                    <th>Year</th>
                                    <th>Session</th>
                                    <th>Action </th>
                                  </tr>
                                </thead>

                                <tbody>
                                @if (count($cnd) > 0)
                                    @foreach ($cnd as $cand)
                                        <tr>
                                          <td>{{$cand->voter_id}}</td>
                                          <td>{{$cand->name}}</td>
                                          <td>{{$cand->password}}</td>
                                          <td>{{$cand->year}}</td>
                                          <td>{{$cand->session}}</td>
                                           
                                          <td>
                                            <a href=" {{ url('delete',$cand->id ) }} " onclick="return confirm('Are you sure ?')"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button></a>&nbsp;
                                          </td>


                                        </tr>
                                    @endforeach
                                
                                @endif
                     <!---->   
                                </tbody>
                              </table>

                              
                               @if(count($cnd)==0)                  
                                  <div class="col-lg-12 center">
                                     Empty List
                                  </div>                                
                                @endif

                            <div class="col-lg-12 center">
                              <ul class="pagination pagination-sm">
                               
                                {{ $cnd->links() }}              
                                     
                              </ul>
                            </div>
                            </div>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 