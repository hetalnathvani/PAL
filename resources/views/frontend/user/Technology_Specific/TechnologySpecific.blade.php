@extends('frontend.layouts.app')
<!--@extends('frontend.layouts.footer')-->

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('Process Assets Library') }}</div>
                    
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
                                <div class="col-xs-12">
                                    <div class="panel panel-default">
                                      
                                    </div><!--panel-->
                                </div><!--col-xs-12-->
                            </div><!--row-->



                            <div class="row">
                             
                                    </div><!--panel-->
                                </div><!--col-md-6-->

                                                           
                                @foreach($technologies as $project)
                                <div class="col-container">

                                    <div class="col">
                                        <div class="imag"><div class="opacity">
                                        <a href="/dashboard/TechnologySpecific/{{ $project->id }}"><img src="{{asset('/img/frontend/box.png')}}" height="170" width="270"></a></div>
                                        <div class="centered1"> {{ $project->technology_name }} </div></div>
                                    </div>
                            
                                 <!--   <div class="col">
                                        <div class="imeg">
                                        <a href="https://accounts.logme.in/login.aspx"><img src="{{asset('/img/frontend/box.png')}}" height="170" width="270"></a>
                                        <div class="centered1"> {{ $project->technology_name }} </div></div>
                                    </div>

                                    <div class="col">
                                        <div class="imag"><div class="opacity">
                                        <a href="upload"><img src="{{asset('/img/frontend/box.png')}}" height="170" width="270"></a></div>
                                        <div class="centered1"> {{ $project->technology_name }} </div></div>
                                    </div>-->
                                    
                                </div>
                                @endforeach

                               <!--@foreach($technologies as $project)
                              <table>
                               @foreach($technologies as $project)
                               
                               <td>{{ $project->technology_name }}</td>
                               
                                @endforeach
                                </table>
                                @endforeach-->



                               <!-- <div class="col-container">

                                    <div class="col">
                                        <div class="imeg">
                                        <a href="Technology_Specific"><img src="{{asset('/img/frontend/box.png')}}" height="170" width="270"></a>
                                        <div class="centered1"> {{ $project->technology_name }} </div></div>
                                    </div>

                                    <div class="col">
                                        <div class="imag"><div class="opacity">
                                        <a href="upload"><img src="{{asset('/img/frontend/box.png')}}" height="170" width="270"></a></div>
                                        <div class="centered1"> {{ $project->technology_name }}</div></div>
                                    </div>

                                    <div class="col">
                                        <div class="imeg">
                                        <a href="upload"><img src="{{asset('/img/frontend/box.png')}}" height="170" width="270"></a>
                                        <div class="centered1"> {{ $project->technology_name }} </div></div>
                                    </div>
                                    
                                </div>-->

                                

                                <!--<div class="col-container">

                                    <div class="col">
                                        <div class="imag"><div class="opacity"> 
                                        <a href="Technology_Specific"><img src="{{asset('/img/frontend/box.png')}}" height="170" width="270"></a></div>
                                        <div class="centered1">Blockchain</div></div>
                                    </div>

                                    <div class="col">
                                        <div class="imeg">
                                        <a href="upload"><img src="{{asset('/img/frontend/box.png')}}" height="170" width="270"></a>
                                        <div class="centered1">IOT </div></div>
                                    </div>

                                    <div class="col">
                                        <div class="imag"><div class="opacity">
                                        <a href="upload"><img src="{{asset('/img/frontend/box.png')}}" height="170" width="270"></a></div>
                                        <div class="centered1">Cloud </div></div>
                                    </div>
                                     
                                </div>-->
                              
                                    </div><!--panel-->
                                </div><!--col-md-6-->

                        </div><!--col-md-8-->

                    </div><!--row--> 
                      

                </div><!--panel body-->
                <div class="footer">
                    <div class="col-container">
                    <div class="col">
                        <h2>About Us</h2>
                       <p> PAL is simply Process Assets Library where all projects done by Cygnet Infotech 
                       Company is saved here, which is accessible to Cygnet Employees only. The purpose of 
                       this website is to provide Secured code to the Cygnetians to save the time and increase
                        the performance. </p>
                       <p class="border"></p>
                       <h2>Follow Us</h2>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-youtube"></a>
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

    </div><!-- row -->
@endsection