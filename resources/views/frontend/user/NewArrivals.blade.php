@extends('frontend.layouts.app')
<!--@extends('frontend.layouts.footer')-->

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

                    @foreach($results as $result)
                    <div class="col-container">
                        <div class="col">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <h2>{{$result->id}}</h2>
                                        <h2>{{$result->project_name}}</h2>
                                    </div>
                                    
                                    <div class="flip-box-back">
                                        <h2>{{$result->project_name}}</h2>
                                       
                                        <h5>Technology ID : {{$result->technology_id}}</h5>
                                          
                                            <a href='/dashboard/new-arrivals/{{ $result->id }}'>
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
            </div><!-- panel -->

        </div><!-- col-md-10 -->
    </div><!-- row -->
@endsection