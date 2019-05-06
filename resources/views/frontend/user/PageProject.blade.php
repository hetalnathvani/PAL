@extends('frontend.layouts.app')
@extends('frontend.layouts.footer')

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
                                        </div><!-panel-heading-->

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
<<<<<<< HEAD
                            {{-- 
                                <a href='/dashboard/technology-specific/{{ $value->technology_id }}/{{ $value->id }}/download'> --}}
                                    <button type = "download" class = "button" id="canvas">
                                        <script>
                                           function (isConfirm) {      
    if (isConfirm) {
        swal("Saving!");

        var canvas = document.getElementById("canvas")

        // get the canvas as a blob
        canvas.toBlob(function(blob){
            // Save the file...
            saveAs(blob, 'my-image.png')
        }, "image/png", 0.95); // PNG at 95% quality
    } else {
        // user cancel
    }

    return false; 
};
                                            </script>
                                        Download
                                        <span class = "glyphicon glyphicon-download"></span>
                                    </button>
                                </a> 
                            
                       {{--  @foreach($project->$projects)

            <td id="Count">{{$projects->count}}</td>
            @endforeach --}}
=======
                            
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
>>>>>>> bb28cf0156a7d08fab6afefdeaa7b4703ce6ab3e
                    @endforeach
     
                    </center></div></div>
                    </div>

                    <!-- Sweet Alert Script -->

                   
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
           <div class="box-body"> 
                <div class="form-group">
                    {{-- {!! Form::open(array('class' => 'form-horizontal', 'role' =>'form', 'action'=> 'PageProjectController@store','method'=>'post' )) !!} --}}
                    @foreach($pageproject as $projects)
                      {!! Form::open(['url' => '/dashboard/technology-specific/{technology_id}/{id}/create']) !!}
                    {{-- {{csrf_token()}} --}}
                     {{ Form::label('comment', trans('labels.frontend.comment'), ['class' => 'col-lg-2 control-label required']) }} 

                        <div class="col-lg-10">
                            <!-- Create Your Input Field Here -->
                            <!-- Look Below Example for reference -->
                             {{ Form::text('comment',null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.frontend.comment'), 'required' => 'required','method'=>'post']) }} 
                        </div><!--col-lg-10-->
                         <div class="edit-form-btn">
                       {{--  {{ link_to_route('frontend.user.StoreComment ', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }} --}}
                        {{-- {{ Form::submit(trans('buttons.general.comment'), ['class' => 'btn btn-primary btn-md','method'=>'post']) }} --}}
                       <a href="/dashboard/technology-specific/{{$projects->technology_id}}/{{$projects->id}}/create" > <button>Comment</button></a>

                       @endforeach
                       {{Form::close()}}
                    </div><!--form-group-->

                    {{--  <div class="form-group">
                     {{ Form::label('comment', trans('labels.frontend.comment'), ['class' => 'col-lg-2 control-label required']) }} 

                        <div class="col-lg-10">
                            <!-- Create Your Input Field Here -->
                            Look Below Example for reference
                             {{ Form::text('comment',$comment->comment,null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.frontend.comment'), 'required' => 'required']) }} 
                        </div><!--col-lg-10-->
                    </div><!--form-group--> --}}

                   
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!-- form-group -->  
                                  
                          <div class="footer">
                    <div class="col-container">
                    <div class="col">
                        <h2>About Us</h2>
                       <p> PAL is simply Process Assets Library where all projects done by Cygnet Infotech Company is saved here, which is accessible to Cygnet Employees only. The purpose of this website is to provide Secured code to the Cygnetians to save the time and increase the performance. </p>
                       <hr>
                       <h2>Follow Us</h2>
                        <div class="icon">
                       <a href="https://www.facebook.com/IT.is.about.you/"> <i class="fa fa-facebook"></i>
                       </a>
                       <a href="https://www.youtube.com/channel/UC_PsLEn0lSAE0Vs_K5x5IGA">
                        <i class="fa fa-youtube"></i>
                       </a>
                      <a href="https://twitter.com/cygnetinfotech?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                        <i class="fa fa-twitter"></i>
                      </a>
                       <a href="https://in.linkedin.com/company/cygnet-infotech">
                        <i class="fa fa-linkedin"></i>
                       </a>
                       <i class="fa fa-googleplus"></i>
                       </div>
                    </div>

                    <div class="col">
                    <h2>Technologies</h2>
                            <a href="">JAVA</a> <br>
                            <a href="">Microsoft</a> <br>
                            <a href="">Blockchain</a> <br>
                            <a href="">AI</a> <br>
                            <a href="">Android</a> <br>
                            <a href="">IOS</a> <br>
                            <a href="">SAP</a> <br>
                            <a href="">PHP</a> <br>
                            <a href="">Python</a> <br>
                            <a href="">Bigdata</a> <br>
                            <a href="">AR</a> <br>
                            <a href="">VR</a>
                    </div>

                    <div class="col">
                    <h2>Contact Us</h2>
                        <table> 
                        <tr>
                            <td><i class="fa fa-map-marker" style="font-size : 24px;color: red;"></i> </td>
                            <td>
                            <div class="address">
                            Cygnet Infotech Pvt. Ltd.<br>
                            16-Swastik Society,<br>
                            Nr. AMCO Bank, Stadium Circle,<br>
                            Navrangpura, Ahmedabad 380009    
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-phone"style="font-size : 24px;"></td>
                            <td><div class="address">+91-79-67124000</div></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-envelope"style="font-size: 24px;padding-top: -25px"></td>
                            <td><div class="address"style="padding-top: -100px">inquiry@cygnetinfotech.com</div></td>
                        </tr>
                        </table>
                        
                    </div>                    
                    </div>
                    </div><!--bg-->
            </div><!-- panel -->

        </div><!-- col-md-10 -->
            </div><!-- row -->
@endsection
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
