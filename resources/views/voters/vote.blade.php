@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row">
          <div class="col-md-10 col-md-offset-1">
                <div class="row">
                     <div class="col-md-12 col-md-offset-2">
                        <div class="col-md-6">
                            <h3> Your Selected Candidates </h3><br><br>
                            <hr>
                              <div class="row">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">President Name:</label>

                                    <div class="col-md-8">
                                        {{ $cand['p'] }}
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Vice-President Name:</label>

                                    <div class="col-md-8">
                                        {{ $cand['vp'] }}
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">CR Name:</label>

                                    <div class="col-md-8">
                                        {{ $cand['cr'] }}
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
