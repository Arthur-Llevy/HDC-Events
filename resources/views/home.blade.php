<p>Seu nome é {{ $nome }} de idade {{ $idade }}</p>

<ul>
	@for($i = 0; $i < count($names); $i++)
		<li>{{ $names[$i] }}</li>
	@endfor
</ul>