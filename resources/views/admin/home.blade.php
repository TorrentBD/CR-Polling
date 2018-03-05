@extends('layouts.admin')

@section('title','Admin Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            	
                <div class="panel-heading" >
                  <ul class="nav nav-pills">
	                <ul class="nav nav-pills">
		                <li>....</li>
			  			<li class="active"><a href="{{url('/home')}}"><i class="fas fa-home"></i>&nbsp; Home</a></li>
			  			<li><a  href="{{url('/candidate')}}"><i class="fas fa-list-ul"></i> &nbsp; Candidates List</a></li>  
			  			<li class=""><a  href="{{url('/voter')}}"><i class="fas fa-list-ul"></i> &nbsp; Voters List</a></li>  
				 		<li><a  href=" "><i class="fas fa-window-restore"></i> Result</a></li>
				 		<li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-download"></i> &nbsp; Download <span class="caret"></span></a>
          					<ul class="dropdown-menu">
            					<li><a href="{{url('/ho')}}">Voter List</a></li>
            					<li><a href="{{url('download')}}">Candidate List</a></li>
            					<li><a href="#">Result</a></li>
          					</ul>
        				</li>
	            	</ul>
	              </ul>
	                </div>
	            	

                <div class="panel-body">
                	<div class="row">
	                	<div class="col-md-6">
	                		<div id="myCarousel" class="carousel slide" data-ride="carousel">
							    <!-- Indicators -->
							    <ol class="carousel-indicators">
							      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							      <li data-target="#myCarousel" data-slide-to="1"></li>
							      <li data-target="#myCarousel" data-slide-to="2"></li>
							      <li data-target="#myCarousel" data-slide-to="3"></li>
							      <li data-target="#myCarousel" data-slide-to="4"></li>
							    </ol>

							    <!-- Wrapper for slides -->
							    <div class="carousel-inner">
							      <div class="item active">
							        <img src="admin/images/ru1.jpg" alt="slide 1" style="width:100%; height: 320px;">
							      </div>

							      <div class="item">
							        <img src="admin/images/ru2.jpg" alt="slide 2" style="width:100%; height: 320px;">
							      </div>
							    
							      <div class="item">
							        <img src="admin/images/ru3.jpg" alt="slide 3" style="width:100%; height: 320px;">
							      </div>

							      <div class="item">
							        <img src="admin/images/ru4.jpg" alt="slide 3" style="width:100%; height: 320px;">
							      </div>

							      <div class="item">
							        <img src="admin/images/ru5.jpg" alt="slide 3" style="width:100%; height: 320px;">
							      </div>
							    </div>

							    <!-- Left and right controls -->
							    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
								 
							    </a>
							    <a class="right carousel-control" href="#myCarousel" data-slide="next">
							       
							    </a>
							  </div>
							</div>

							<div class="col-md-6">
							  <div class="thumbnail_mission">
								<h2>Mission</h2>
			  					<p>TMSS Engg. College wly serving as a training ground for education students,seeks to develop in excellence
			  					and with quality, the total personality of children and youth become worthy members of sociaty.
			  					</p>
			  				  </div>
			  					<div class="thumbnail_vission">
								   <h2>Objectives</h2><p>High School Level</p>
								  <p>*develop an Enlightened commitment to the national ideals by cherishing,
								  preserving and developing the desirable aspects of Filipino heritage, spiritually,
								  morally and socialy.
								  </p>
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