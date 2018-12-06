<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title') | Oui Patron !</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/avilon/img/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/css/util.css">
	<link rel="stylesheet" type="text/css" href="/formcreate/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	@if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif

  @yield('content')

  <script type="text/javascript">

  $(document).ready(function(){

    $('#summernote').summernote({
        tabsize: 2,
        height: 300
      });

  });

  </script>

  <!--===============================================================================================-->
  	<script src="/formcreate/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/formcreate/vendor/bootstrap/js/popper.js"></script>
  	<script src="/formcreate/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/formcreate/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/formcreate/vendor/tilt/tilt.jquery.min.js"></script>
  	<script >
  		$('.js-tilt').tilt({
  			scale: 1.1
  		})
  	</script>
  <!--===============================================================================================-->
  	<script src="/formcreate/js/main.js"></script>

  </body>
  </html>
