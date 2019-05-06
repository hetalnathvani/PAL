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
                            
                         <div class="pannel-body">
                         
                            <form action = "dashboard/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type = "text" class="form-control" name="q" placeholder="Search Projects">
                                <span class="input-group-btn">
                                    <button type = "submit" class = "btn btn-default">
                                        <span class = "glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                            </form>
                         </div>
                         </div><!--col-md-4-->
                 
                                <div class="col-container">

                                    <div class="col">
                                        <div class="img"><div class="opacity">
                                        <a href="dashboard/technology-specific"><img src="{{asset('/img/frontend/db1.jpg')}}" height="340" width="340"></a>
                                        <div class="centered"><b>Technology<br>Specific </b></div></div>
                                    </div></div>

                                    <div class="col">
                                        <div class="img"><div class="opacity">
                                        <a href="dashboard/new-arrivals"><img src="{{asset('/img/frontend/white.jpg')}}" height="340" width="340"></a>
                                        <div class="centered"><b>New<br>Arrivals</b> </div></div></div>
                                    </div>

                                    <div class="col">
                                        <div class="img"><div class="opacity">
                                        <a href="upload"><img src="{{asset('/img/frontend/white.jpg')}}" height="340" width="340"></a>
                                        <div class="centered"><b>Most<br> Popular </b></div></div></div>
                                    </div>
                                    
                                </div> 
                        
                            <div class="row">
                                <div class="col-md-4">

                                </div>
                            </div>
                        </div><!--col-md-8-->
                   
                    

                    </div><!--row-->
                
                </div><!--panel body-->
                         

                </div><!--bg-->
           
            </div><!-- panel -->

        </div><!-- col-md-10 -->
                 @if(isset($project))
                               <table class = "table table-striped">
                                <thead>
                                       <th>Projects ID</th>
                                       <th>Projects Name</th>
                                       <th>Projects Details</th>
                                    
                                </thead>
                                <tbody>
                                    @foreach($project as $projects)
                                    <tr>
                                        <td>{{ $projects->id }} </td>
                                        <td>{{ $projects->project_name }} </td>
                                        <td>{{ $projects->project_details }} </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
        @endif

    </div><!-- row -->
@endsection

@section('after-scripts')

@include('frontend.layouts.footer')

@endsection