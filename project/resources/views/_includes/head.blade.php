<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env('APP_DESCRIPTION') }}">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ env('APP_DESCRIPTION') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="{{ env('APP_TITLE') }}" />
    <meta property="og:image" content="/assets/ico/favicon.ico" />

    <link rel="canonical" href="">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>{{ env('APP_TITLE') }}</title>

    @include('_includes/styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
