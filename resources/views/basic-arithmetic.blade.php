<h1>Basic- Arithmetic</h2>
</head>
<body>

	@if($operation=="add")
		<h1>Opearion:Addition</h1>
		<h3>Addend:{{$num1}}</h3>
		<h3>Addend:{{$num2}}</h3>
		<h3>sum:{{$sum}}</h3>

	@elseif($operation=="sub")
		<h1>Opearion:Subtraction</h1>
		<h3>Minued:{{$num1}}</h3>
		<h3>Subrathend:{{$num2}}</h3>
		<h3>Difference:{{$diff}}</h3>	

	@elseif($operation=="mul")
		<h1>Opearion:Multiplication</h1>
		<h3>Multiplicand:{{$num1}}</h3>
		<h3>Multiplier:{{$num2}}</h3>
		<h3>Products:{{$mul}}</h3>

	@elseif($operation=="div")
		<h1>Opearion:Division</h1>
		<h3>Divedend:{{$num1}}</h3>
		<h3>Divisor:{{$num2}}</h3>
		<h3>Quotient:{{$div}}</h3>

	@endif

</head>
</body>