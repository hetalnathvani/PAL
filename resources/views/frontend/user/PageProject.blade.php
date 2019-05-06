@extends('frontend.layouts.app')

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div class="row">
    
        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.user.pageproject') }}</div>
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

                    

                    </div><!--row-->

                    
                    <div class = "container1">
                    <!-- <div class="opacity"> -->
                    <img src="{{asset('/img/frontend/white.jpg')}}" height="340" width="1110" style="opacity: 0.7;">
                    <div class="centered2">
                    <center>
                    
                    @foreach($pageproject as $value) 
                            <h1 style="color : black;opacity:1"><b>{{$value->project_name}}</b></h1>
                            <h2 style="opacity : 1.0">Project ID : {{$value->id}}</h2>
                            <h2>Project Name : {{$value->project_name}}</h2>
                            <h5>Project Details : {{$value->project_details}}</h5>
                            <h5>Technology ID : {{$value->technology_id}}</h5>
                            
                                <!-- <a href='/dashboard/technology-specific/{{ $value->technology_id }}/{{ $value->id }}/download'>
                                    <button type = "submit" class = "button" onclick="setTimeout()">
                                        Download
                                        <span class = "glyphicon glyphicon-download"></span>
                                    </button>
                                </a>  -->
                              
                                <button onclick="download()" class = "button" id="b1">
                                        Download
                             
                                </button>

                                <script>
                                   function download(){
                                    swal({
                                            text: "Do you want to download Project files ?",
                                            icon: "warning",
                                            buttons: true,
                                            dangerMode: true,
                                            showCancelButton: true,
                                            confirmButtonColor: " #4CAF50", 
                                            title: "Are you sure?",
                                            confirmButtonText: "Yes, save it!",  
                                            // closeOnConfirm: true 
                                        },function (isConfirm) { 
                                                 
                                            if (isConfirm) {
                                                swal("Files Downloaded!");
                                                var canvas = document.getElementById("b1")
                                                window.location = "/dashboard/technology-specific/{{ $value->technology_id }}/{{ $value->id }}/download"
                                                canvas.toBlob(function(blob){
                                                    // Save the file...
                                                    saveAs(blob, '$pageproject->file')
                                                }, "app/public/zip/projects/$pageproject->file"); 
                                            } else {
                                                // user cancel
                                            }
                                            return false; 
                                        }
                                      )                          
                                    };
                                </script>   
                    @endforeach
                  
                    </center></div></div>
                    </div>

                    <!-- Sweet Alert Script -->

                   
                    
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