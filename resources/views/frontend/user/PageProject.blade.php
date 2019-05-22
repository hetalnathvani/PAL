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
                        </div><!--col-md-8-->

                    </div><!--row-->
<br>
                    
                    <div class = "container1">
                    <!-- <div class="opacity"> -->
                    <img src="{{asset('/img/frontend/download.png')}}" height="460" width="1210" style="opacity: 0.7;">
                    <div class="centered2">
                    <center>
                    
                    @foreach($pageproject as $value) 
                            <h1 style="color : black;opacity:1"><b>{{$value->project_name}}</b></h1>
                            <h2>Project ID : {{$value->id}}</h2>
                            <h2>Project Name : {{$value->project_name}}</h2>
                            <h5>Project Details : {{$value->project_details}}</h5>
                            <h5>Technology ID : {{$value->technology_id}}</h5>
                              
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
                                </center>
                                </div>
                    </div>
                    <br>
                    <!-- Sweet Alert Script -->
                </div><!--panel body-->
            
                    </div><!--bg-->
            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection
                  <!--for count page-->
                    {{-- <script type="text/javascript">
                        let count=document.getElementById('Count').value;
                        let countplus=parseInt(count)+1;
                        document.getElementById('Count').value=countplus;
                    </script>
                --}} </div><!--panel body-->
                    <table>
                    <thead>
                        <td></td>
                    </thead>
                    {{-- print_r($comment); --}}
                  {{--   @foreach($comments as $commentss)
                        <td>{{$commentss->comment}}</td><br>
                        @endforeach
                    </table> --}}
                   
            </div>
                                  
          </div><!-- panel -->

        </div><!-- col-md-10 -->
            </div><!-- row -->


        <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function() {
        output.innerHTML = this.value;
        }
        </script>

