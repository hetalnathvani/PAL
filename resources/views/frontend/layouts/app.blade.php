@php
    use Illuminate\Support\Facades\Route;
@endphp
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Laravel AdminPanel')">
        <meta name="author" content="@yield('meta_author', 'Viral Solani')">
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        @langRTL
            {{ Html::style(getRtlCss(mix('css/frontend.css'))) }}
        @else
            {{ Html::style(mix('css/frontend.css')) }}
        @endif
        {!! Html::style('js/select2/select2.min.css') !!}
        @yield('after-styles')

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <?php
            if(!empty($google_analytics)){
                echo $google_analytics;
            }
        ?>
        <!--<style type="text/css">
        .footer {
            padding: 20px;
            text-align: center;
            background: black;
            margin-top: 20px;
            font-color: white;
        }
        </style>-->
    </head>
    <body id="app-layout">
        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            <div class="container">
                @include('includes.partials.messages')
                @yield('content')
            </div><!-- container -->
        </div><!--#app-->
        <!-- Scripts -->
        @yield('before-scripts')
        {!! Html::script(mix('js/frontend.js')) !!}
        @yield('after-scripts')
        {{ Html::script('js/jquerysession.min.js') }}
        {{ Html::script('js/frontend/frontend.min.js') }}
        {!! Html::script('js/select2/select2.min.js') !!}

        <script type="text/javascript">
            if("{{Route::currentRouteName()}}" !== "frontend.user.account")
            {
                $.session.clear();
            }
        </script>
        @include('includes.partials.ga')
    </body>
</html>