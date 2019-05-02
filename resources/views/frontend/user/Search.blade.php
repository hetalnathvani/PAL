@extends('frontend.layouts.app')
<!--@extends('frontend.layouts.footer')-->

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.user.search') }}</div>
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
                        <div class="row">
                        @if(isset($project))                
                            @foreach($project as $projects)
                            <div class="col-md-3">
                            <div class="col-container">
                                <div class="col">
                                    <div class="flip-box">
                                        <div class="flip-box-inner">
                                            <div class="flip-box-front">
                                                <h2>{{$projects->id}}</h2>
                                                <h2>{{$projects->project_name}}</h2>
                                            </div>
                                            <div class="flip-box-back">
                                                        <h2>{{$projects->project_name}}</h2>
                                                        <h5>Technology ID : {{$projects->technology_id}}</h5>
                                                        
                                                            <a href='/dashboard/new-arrivals/{{ $projects->id }}'>
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
                                @endforeach  
                            </div>
                        @endif
                        </div>
                    </div><!--row-->
                </div><!--panel body-->
            
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
                    </div><!--bg-->
            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection