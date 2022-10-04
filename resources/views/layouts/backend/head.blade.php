<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 5 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>@yield('title')</title>


@yield('css')


{{--<link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">--}}



<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">



<!-- Favicon -->
<link rel="shortcut icon" href="{{\Illuminate\Support\Facades\URL::asset('backend/assets/images/favicon.ico')}}" type="image/x-icon"/>

<!-- Font -->
{{--<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">--}}

<link href="{{asset('backend/assets/css/fontawesome/css/all.css')}}" rel="stylesheet">


<!-- css -->
{{--<link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/backend/assets/css/style.css" />--}}

{{--<link href="{{\Illuminate\Support\Facades\URL::asset('backend/assets/css/style.css')}}" rel="stylesheet">--}}



{{--Style css--}}

@if(\Illuminate\Support\Facades\App::getLocale() == 'en')
    <link href="{{\Illuminate\Support\Facades\URL::asset('backend/assets/css/ltr.css')}}" rel="stylesheet">
@else
    <link href="{{\Illuminate\Support\Facades\URL::asset('backend/assets/css/rtl.css')}}" rel="stylesheet">
@endif
