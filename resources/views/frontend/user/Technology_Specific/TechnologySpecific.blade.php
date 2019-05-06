@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('Technologies') }}</div>
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

                            
                            <div class="panel panel-default">
            
                            </div><!--panel-->
                            <!-- <label>
                                Search : <input type="text" placeholder="Search.." autocomplete="off"size="35">
                            </label>
                           -->
                        </div><!--col-md-4-->



                        <div class="col-md-8 col-md-pull-4">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="panel panel-default">
                                      
                                    </div><!--panel-->
                                </div><!--col-xs-12-->
                            

 
                            <div class="row"></div>
                             
                                    </div><!--panel-->
                                </div><!--col-md-6-->
                                </div><!--row-->

                                <div class="row">
                                @foreach($technologies as $project)
                                <div class="col-md-3">
                                  <div class="col">
                                        <div class="imag"><div class="opacity">
                                        <a href="/dashboard/technology-specific/{{ $project->id }}"><img src="{{asset('/img/frontend/db1.jpg')}}" height="170" width="270"></a></div>
                                        <div class="centered1"> {{ $project->technology_name }} </div></div>
                                    </div>
                                </div>
                                @endforeach   
                                </div>                                
                                   
                                </div><!--col-md-6-->

                        </div><!--col-md-8-->

                </div><!--panel body-->
            
            </div><!-- panel -->
           
        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection
@section('after-scripts')

@include('frontend.layouts.footer')

@endsection