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
			  			<li class=""><a  href=" {{url('/voter')}}"><i class="fas fa-list-ul"></i> &nbsp; Voters List</a></li>  
				 		<li><a  href=" "><i class="fas fa-window-restore"></i> Result</a></li>
				 		<li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-download"></i> &nbsp;Download <span class="caret"></span></a>
          					<ul class="dropdown-menu">
            					<li><a href="{{url('/download')}}">Voter List</a></li>
                      <li><a href="{{url('/download')}}">Candidate List</a></li>
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
							    <a class="nav-link" href="#">President</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Vice resident</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link " href="#">VIP</a>
							  </li>
						</ul>
                    </div>

                    <div class="row"><a class="btn btn-success" href="{{url('addcandidate')}}"> Add Candidate</a></div>
                	<div class="row"><hr></div>

                    <div class="row">
                    	<!-- start-->
                    <div class="table-responsive">
                              <table class="table table-striped table-hover table-bordered ">
                                <thead>
                                  <tr>                       
                                    <th>Position</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Year</th>
                                    <th>Session</th>
                                    <th>Photo</th>          
                                    <th>Action </th>
                                  </tr>
                                </thead>

                                <tbody>
                                @if (count($cnd) > 0)
                                    @foreach ($cnd as $cand)
                                        <tr>
                                          <td>{{$cand->position}}</td>
                                          <td>{{$cand->student_id}}</td>
                                          <td>{{$cand->name}}</td>
                                          <td>{{$cand->year}}</td>
                                          <td>{{$cand->session}}</td>
                                          <td>{{$cand->photo}}</td>
                                           
                                          <td>
                                             <!-- Button trigger modal -->
                                            <button class="show-modal btn btn-success"
                                             data-photo="{{$cand->photo}}"  data-pos="{{$cand->position}}" data-id="{{$cand->student_id}}" data-name="{{$cand->name}}"
                                            data-year="{{$cand->year}}"
                                             data-session="{{$cand->session}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                            &nbsp;

                                            <a href=" {{ url('edit',$cand->id) }} "><button class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>&nbsp;
                                          
                                            <a href=" {{ url('cdelete',$cand->id ) }} " onclick="return confirm('Are you sure ?')"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button></a>&nbsp;
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

                <!-- Modal form to show a post -->
	                <div id="showModal" class="modal fade" role="dialog">
	                    <div class="modal-dialog">
	                        <div class="modal-content">
	                            <div class="modal-header">
	                                <button type="button" class="close" data-dismiss="modal">×</button>
	                                <h4 class="modal-title"></h4>
	                            </div>
	                            <div class="modal-body">
	                                <form class="form-horizontal" role="form">

	                                	<div class="form-group">
	                                        <label class="control-label col-sm-2" for="name"></label>
	                                        <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="photo_show" disabled>
	                                        </div>
	                                    </div>

	                                    <div class="form-group">
	                                        <label class="control-label col-sm-2" for="name">Posiotion :</label>
	                                        <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="pos_show" disabled>
	                                        </div>
	                                    </div>

	                                    <div class="form-group">
	                                        <label class="control-label col-sm-2" for="name">Student ID:</label>
	                                        <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="id_show" disabled>
	                                        </div>
	                                    </div>

	                                    <div class="form-group">
	                                        <label class="control-label col-sm-2" for="name">Name:</label>
	                                        <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="name_show" disabled>
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <label class="control-label col-sm-2" for="roll">Year:</label>
	                                        <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="year_show" disabled>
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <label class="control-label col-sm-2" for="fname">Session:</label>
	                                        <div class="col-sm-10">
	                                            <input type="text" class="form-control" id="session_show" disabled>
	                                        </div>
	                                    </div>                                 
	                                </form>
	                                <div class="modal-footer">
	                                    <button type="button" class="btn btn-warning" data-dismiss="modal">
	                                        <span class='glyphicon glyphicon-remove'></span> Close
	                                    </button>
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

@section('scripts')
  <script type="text/javascript">    
        // view
        $(document).on('click', '.show-modal', function() {
            $('.modal-title').text('Show');
            $('#photo_show').val($(this).data('photo'));
            $('#pos_show').val($(this).data('pos'));
            $('#id_show').val($(this).data('id'));
            $('#name_show').val($(this).data('name'));
            $('#year_show').val($(this).data('year')); 
            $('#session_show').val($(this).data('session'));
        });
  </script>
@endsection