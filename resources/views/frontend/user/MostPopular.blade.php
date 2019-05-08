@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.dashboard') }}</div>
                <div class="bg">
                <div class="panel-body">

                    <div class="row">

                        <div class="col-md-4 col-md-push-8">

                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <img class="media-object" src="{{ $logged_in_user->picture }}" alt="Profile picture">
                                    </div><!--media-left-->

                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            {{ $logged_in_user->name }}<br/>
                                            <small>
                                                {{ $logged_in_user->email }}<br/>
                                                Joined {{ $logged_in_user->created_at->format('F jS, Y') }}
                                            </small>
                                        </h4>

                                        {{ link_to_route('frontend.user.account', trans('navs.frontend.user.account'), [], ['class' => 'btn btn-info btn-xs']) }}

                                        @permission('view-backend')
                                            {{ link_to_route('admin.dashboard', trans('navs.frontend.user.administration'), [], ['class' => 'btn btn-danger btn-xs']) }}
                                        @endauth
                                    </div><!--media-body-->
                                </li><!--media-->
                            </ul><!--media-list-->

                        
                         </div><!--col-md-4-->
                    
                               <!-- <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4>Item</h4>
                                        </div><!--panel-heading-->

                                <!--<div class = "footer">
                                    <h2>Footer</h2>
                                
                                </div>
                            </div><--row-->
                        
                        </div><!--col-md-8-->
                    <div class="row">
                
                    @foreach($results as $result)
                    <div class="col-md-3">
                    <div class="col-container">
                        <div class="col">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <div class="mesh-flip">
                                        <h2>{{$result->id}}</h2>
                                        <h2>{{$result->project_name}}</h2>
</div>
                                    </div>
                                    
                                    <div class="flip-box-back">
                                        <h2>{{$result->project_name}}</h2>
                                       
                                        <h5>Technology ID : {{$result->technology_id}}</h5>
                                          
                                            <a href='/dashboard/most-popular/{{ $result->id }}'>
                                                <button type = "submit" class = "button">
                                                    Project Page
                                                    <span class = "glyphicon glyphicon-download"></span>
                                                </button>
                                            </a> 
                                           
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    </div><!--col-md-3-->
                    @endforeach
                    
                    </div><!--row for boxes-->
                    </div><!--row-->

                
                </div><!--panel body-->
</div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->
    </div><!-- row -->
@endsection

@section('after-scripts')

@include('frontend.layouts.footer')

@endsection