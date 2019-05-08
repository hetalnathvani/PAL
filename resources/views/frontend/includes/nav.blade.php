<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#frontend-navbar-collapse">
                <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="{{asset('/img/frontend/logo/Cygnet-Infotech-Logo.png')}}" height="72" width="250">
           <!-- {{--   @if(settings()->logo)
            <a href="{{ route('frontend.index') }}" class="logo"><img height="48" width="226" class="navbar-brand" src="{{route('frontend.index')}}/img/site_logo/{{settings()->logo}}"></a>
            @else --}}
            <div>
               <img src="{{asset('/img/frontend/logo/Cygnet-Infotech-Logo.png')}}" height="72" width="250">
           
             {{ link_to_route('frontend.index','', [], ['class' => 'navbar-brand']) }}
           {{--  @endif --}}
          -->
           <!-- </div> -->
          
        </div><!--navbar-headersad-->
       
        <div class="collapse navbar-collapse" id="frontend-navbar-collapse">
            {{-- <ul class="nav navbar-nav">
                <li></li>
            </ul> --}}

            <ul class="nav navbar-nav navbar-right" id="effect">
          
                
                <!-- @if (config('locale.status') && count(config('locale.languages')) > 1)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ trans('menus.language-picker.language') }}
                            <span class="caret"></span>
                        </a>
                        
                        @include('includes.partials.lang')
                    </li>
                @endif -->

          <li class="dropdown">
          </li>
                
                @if ($logged_in_user)
                    <li>{{ link_to_route('frontend.user.dashboard', trans('navs.frontend.dashboard')) }}</li>
                @endif
                @if (! $logged_in_user)
                    <li>{{ link_to_route('frontend.auth.login', trans('navs.frontend.login')) }}</li>

                    @if (config('access.users.registration'))
                        <li>{{ link_to_route('frontend.auth.register', trans('navs.frontend.register')) }}</li>
                    @endif
                @else
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Admin <span class="caret"></span>
                           
                            
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @permission('view-backend')
                                <li>{{ link_to_route('admin.projects.create', trans('navs.frontend.user.project')) }}</li>
                            @endauth
                            @permission('view-backend')
                                <li>{{ link_to_route('admin.projects.index', trans('navs.frontend.user.list')) }}</li>
                            @endauth
                            @permission('view-backend')
                            <li>{{ link_to_route('admin.technologies.create', trans('navs.frontend.user.technology')) }}</li>
                            @endauth
                            @permission('view-backend')
                            <li>{{ link_to_route('admin.technologies.index', trans('navs.frontend.user.listtechnology')) }}</li>
                            @endauth
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ $logged_in_user->name }} <span class="caret"></span>
                           
                            
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @permission('view-backend')
                                <li>{{ link_to_route('admin.dashboard', trans('navs.frontend.user.administration')) }}</li>
                            @endauth

                            <li>{{ link_to_route('frontend.user.account', trans('navs.frontend.user.account')) }}</li>
                            <li>{{ link_to_route('frontend.auth.logout', trans('navs.general.logout')) }}</li>
                        </ul>
                    </li>

                    
                @endif
                <li class="search">
                     <div class="pannel-body">
                            <form action = "search" method="POST" role="search">
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
                      
                   
                </li>
            </ul>

        </div><!--navbar-collapse-->
    </div><!--container-->
</nav>