<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

        </style>
    </head>
    <body>
    	<div id="app">	
	        <ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Active</a>
			  </li>
			  <li class="nav-item">
			    <router-link to="/example">Example</router-link>
			  </li>
			  <li class="nav-item">
			    <router-link to="/sample">Sample</router-link>
			  </li>			  
			</ul>
			<router-view></router-view>
		</div>
		
        
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>

</html>
