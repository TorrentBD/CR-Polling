@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-body"> 
              <form class="" action="{{url('/vote')}}" method="POST">
                {!! csrf_field() !!}
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-6">
                        <h3>Candidate for President</h3><br>
                        <div class="col-md-4 col-md-offset-2 ">           
                            <select name="p">
                                @foreach($cnd as $cnds )
                                  @if(($cnds->position)=="president")
                                   <option value="{{$cnds->name}}"> {{$cnds->name}}</option>
                                   @endif
                                @endforeach
                            </select>            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3>Candidate for Vice-President</h3><br>
                        <div class="col-md-4 col-md-offset-2 ">           
                            <select name="vp">
                                @foreach($cnd as $cnds )
                                  @if(($cnds->position)=="Vice-President")
                                   <option value="{{$cnds->name}}"> {{$cnds->name}}</option>
                                   @endif
                                @endforeach
                            </select>            
                        </div>
                    </div>
                  </div>
                </div>

        <br><br>
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-8 col-md-offset-3 ">
                            <h3>Candidate for CR-Special</h3><br>
                            <div class="col-md-6 col-md-offset-2 ">           
                                <select name="cr">
                                    @foreach($cnd as $cnds )
                                      @if(($cnds->position)=="CR-host")
                                       <option value="{{$cnds->name}}"> {{$cnds->name}}</option>
                                      @endif
                                    @endforeach
                                </select>            
                            </div>
                        </div>

                      </div>
                    </div>


                    <div class="row">
                     <div class="col-md-12 col-md-offset-2">
                        <div class="col-md-6">
                            <a href="{{url('v_logout')}}" style="text-decoration-line: none;"> 
                                <button class="btn btn-success"> Vote Now </button>
                            </a>
                        </div>

                        <div class="col-md-6">
                              
                             <button class="btn btn-success">Summit Vote</button>
                           
                        </div>
                     </div>
                </div>
            </form>

                </div>
                <div class="row">
                     <div class="col-md-12 col-md-offset-5">
                        <div class="col-md-6">
                            <a href="{{url('v_logout')}}" style="text-decoration-line: none;"> 
                                <button class="btn btn-success"> Vote Later </button>
                            </a>
                        </div>

                     </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
