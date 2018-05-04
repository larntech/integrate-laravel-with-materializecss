<!DOCTYPE html>
<html lang="en-us" class="" >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--loading css -->
<link rel="stylesheet" type="text/css" media="screen" href="{{asset ('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset ('assets/css/AdminLTE.min.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset ('assets/css/_all-skins.min.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">

<!--we yield our content here -->
    @yield ('content')


<!-- loading css -->
<script src="{{asset ('assets/js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset ('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset ('assets/js/app.min.js')}}"></script>
</body>
</html>
