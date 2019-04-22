@extends('frontend.layouts.app')
@extends('frontend.layouts.footer')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.dashboard') }}</div>

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

                    
                    @foreach($pageproject as $value) 
                            <h1>{{$value->project_name}}</h1>
                            <h2>Project ID : {{$value->id}}</h2>
                            <h2>Project Name : {{$value->project_name}}</h2>
                            <h5>Project Details : {{$value->project_details}}</h5>
                            <h5>Technology ID : {{$value->technology_id}}</h5>
                            
                                <a href='/dashboard/TechnologySpecific/{{ $value->technology_id }}/{{ $value->id }}/download'>
                                     @include('sweet::alert')
                                     swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
                                    <button type = "submit" class = "button">
                                        Download
                                       
                                        <span class = "glyphicon glyphicon-download"></span>
                                    </button>
                                </a> 
                    @endforeach
                </div><!--panel body-->
        @php $rating = 1.6; @endphp  

            @foreach(range(1,5) as $i)
                <span class="fa-stack" style="width:1em">
                    <i class="far fa-star fa-stack-1x"></i>

                    @if($rating >0)
                        @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x"></i>
                        @else
                            <i class="fas fa-star-half fa-stack-1x"></i>
                        @endif
                    @endif
                    @php $rating--; @endphp
                </span>
            @endforeach
            </div>
                                 <div class="box-body"> 
                <div class="form-group">
                     {{ Form::label('comment', trans('labels.frontend.comment'), ['class' => 'col-lg-2 control-label required']) }} 

                        <div class="col-lg-10">
                            <!-- Create Your Input Field Here -->
                            <!-- Look Below Example for reference -->
                             {{ Form::text('comment',null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.frontend.comment'), 'required' => 'required','method'=>'post']) }} 
                        </div><!--col-lg-10-->
                         <div class="edit-form-btn">
                        {{-- {{ link_to_route('frontend.user.PageProjectDownload', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }} --}}
                        {{-- {{ Form::submit(trans('buttons.general.comment'), ['class' => 'btn btn-primary btn-md','method'=>'post']) }} --}}
                       <a href="/dashboard/TechnologySpecific/{id}/{project_id}/create" > <button>Comment</button></a>
                       {{Form::close()}}
                    </div><!--form-group-->
                    <table>
                    <thead>
                        <td></td>
                    </thead>
                    @foreach($comment as $comments)
                        <td>{{$comments->comment}}</td><br>
                        @endforeach
                    </table>
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
                       <i class="fa fa-facebook"></i>
                       <i class="fa fa-youtube"></i>
                       <i class="fa fa-twitter"></i>
                       <i class="fa fa-linkedin"></i>
                       <i class="fa fa-googleplus"></i>
                       </div>
                    </div>

                    <div class="col">
                    <h2>Technologies</h2>
                            JAVA<br>Microsoft<br>Blockchain<br>AI<br>
                            Android<br>IOS<br>SAP<br>PHP<br>Python<br>Bigdata<br>AR<br>VR
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
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
