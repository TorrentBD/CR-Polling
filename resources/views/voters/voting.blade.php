@extends('layouts.voter')

@section('content')
    <div class="container">
       <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-body"> 
              <form class="" action="{{url('/vote')}}" method="POST">
                {!! csrf_field() !!}
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="candidate-head">
                          <font color="white">President</font>
                        </div>
                        <div class="candidate">
                          <div class="can-margin">
                            @foreach($cnd as $cnds )
                                  @if(($cnds->position)=="President")

                                       <img class="can" src="{{ url('images', $cnds->photo) }}" alt="CR1" width="150" height="150" border="0" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0">
          &nbsp;&nbsp;&nbsp;&nbsp;
                                  @endif
                            @endforeach
                          </div>
                        </div>
                        <div class="col-md-4 col-md-offset-2 ">         
                            <select name="p">
                                @foreach($cnd as $cnds )
                                  @if(($cnds->position)=="President")
                                   <option value="{{$cnds->name}}"> {{$cnds->name}}</option>
                                   @endif
                                @endforeach
                            </select>            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="candidate-head">
                          <font color="white">Vice-President</font>
                        </div>
                        <div class="candidate">
                          <div class="can-margin">
                            @foreach($cnd as $cnds )
                                  @if(($cnds->position)=="Vice-President")
                                       <img class="can" src="{{ url('images', $cnds->photo) }}" alt="VC CR" width="150" height="150" border="0" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0">
          &nbsp;&nbsp;&nbsp;&nbsp;
                                  @endif
                            @endforeach
                          </div>
                        </div>
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

        <br><br>
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-6 col-md-offset-2 ">
                            <div class="candidate-f">
                                <font color="white">&nbsp;&nbsp;
                                &nbsp;
                                Female Class Representative</font>
                            </div>

                            <div class="represent">
                            <div class="margin-represent">
                                 @foreach($cnd as $cnds )
                                  @if(($cnds->position)=="Female-CR")
                                       <img class="can" src="{{ url('images', $cnds->photo) }}" alt="CR-Female" width="70" height="70" border="0" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0">
          &nbsp;&nbsp;&nbsp;&nbsp;
                                  @endif
                            @endforeach
                            </div>
                        </div>
                        </div>
                        
                        <div class="col-md-4 col-md-offset-2 ">         
                            <select name="cr">
                                @foreach($cnd as $cnds )
                                  @if(($cnds->position)=="Female-CR")
                                   <option value="{{$cnds->name}}"> {{$cnds->name}}</option>
                                   @endif
                                @endforeach
                            </select>            
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

@section('script')
  <script>
    function bigImg(x) {
    x.style.height = "200px";
    x.style.width = "200px";
    
}

function normalImg(x) {
    x.style.height = "100px";
    x.style.width = "100px";
}
</script>
@endsection