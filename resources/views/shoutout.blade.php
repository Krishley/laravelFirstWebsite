<h1> Shoutout to: {{text}} </h1>

@if($text=="gwapo")
<h1>Gwapo</h1>
@else($text=="gwapa")
<h1>Gwapa</h1>
 @endif

@for each($color as $color)

 {{ $color[0] }}
<br/>
{{ $color [1] }}
<br/><
{{ $color[3] }}

@for each($color as $color)
@endforeach
{{ $color }}
@else
{{ $color }}
@endif
<br />
@endforeach