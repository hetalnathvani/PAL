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
                
                                </div><!--col-md-8-->
                                <br><br>
                        <div class = "row"><!--3-Categories-->
                            <div class= "col-md-4"><!--Tech-Specific-->
                            <div class="card">
                                <img src="/img/frontend/tech1.jpg" alt="John" style="width:400px; height:200px">
                                <h1>Technology Specific</h1>
                                <p class="title">This section comprises all technologies in which projects are available.</p>
                                <a href="dashboard/technology-specific"><input type="button" class="project" value="Technology Specific"></a>
                                </div>
                            </div><!--Tech-Specific-->

                            <div class= "col-md-4"><!--Tech-Specific-->
                            <div class="card">
                                <img src="/img/frontend/newarrival.png" alt="John" style="width:400px; height:200px">
                                <h1>New <br> Arrivals</h1>
                                <p class="title">This section comprises the latest uploaded projects available.</p>
                                <a href="dashboard/new-arrivals"><input type="button" class="project" value="New Arrivals"></a>
                                </div>
                            </div><!--Tech-Specific-->

                            <div class= "col-md-4"><!--Tech-Specific-->
                            <div class="card">
                                <img src="/img/frontend/mostpopular.png" alt="John" style="width:400px; height:200px">
                                <h1>Most <br> Popular</h1>
                                <p class="title">This section comprises the most popular i.e.<br> most visited projects.</p>
                                <a href="dashboard/most-popular"><input type="button" class="project" value="Most Popular"></a>
                                </div>
                            </div><!--Tech-Specific-->
                        </div><!--3-Categories-->
<br><br>

                    </div><!--row-->
                
                </div><!--panel body-->
                </div><!--   bg -->
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