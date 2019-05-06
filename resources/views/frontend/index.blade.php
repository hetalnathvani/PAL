@extends('frontend.layouts.app')


@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.home') }}</div>

                <div class="panel-body">
                
                    <div class="row" >
                       
                        <div class="col-md-6">
                        <video autoplay muted loop width="600" height="340">
                                <source src="img/frontend/video/backup_.mp4">
                        </video>

                        
                        </div><!--col-md-6-->

                        <div class="col-md-6">
                            <div class= "front">
                                <b>Download any<br> programming<br>file or folder <br></b>  
                            </div>
                            <div class="left">
                                <h3>Store everything, safe in the cloud</h3>
                            </div>
                        </div><!--col-md-6-->
                    </div><!--row-->
                    <div class="row" style="background-color:#FFAFA2">
                        <div class="col-md-6">
                            <div class= "front">
                                <b>Powerful cloud<br> storage for all<br> your files<br></b>  
                            </div>
                            <div class="left">
                                <h3>Store everything, safe in the cloud</h3>
                            </div>
                        </div><!--col-md-6-->

                        <div class="col-md-6">
                            <video autoplay muted loop width="600" height="340" >
                                <source src="img/frontend/video/file.mp4">
                            </video>
                        </div><!--col-md-6-->
                    </div><!--row-->

                </div><!--panel body-->
            
                           </div><!-- panel -->

        </div><!-- col-md-10 -->
    </div><!--row-->
@endsection
@section('after-scripts')

@include('frontend.layouts.footer')

@endsection