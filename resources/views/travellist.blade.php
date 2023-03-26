<html>
<head>
	<title>Travel List</title>
</head>

<body>
	<h1>Матрасы</h1>
	<h2>От самых маленьких до самых больших</h2>
	<ul>
	  @foreach ($togo as $newplace)
		<li>{{ $newplace->name }}</li>
	  @endforeach
	</ul>

	<h2>Падушки</h2>
	<ul>
          @foreach ($visited as $place)
                <li>{{ $place->name }}</li>
          @endforeach
	</ul>
</body>
</html>
