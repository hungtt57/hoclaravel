 <!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Document</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('header')
   </head>
    <body>
		    <div class="container">
		       @yield('content')


		       </div>
    </body>
</html>
