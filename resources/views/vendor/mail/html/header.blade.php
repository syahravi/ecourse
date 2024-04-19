@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Unusia Course')
<img src="{{asset('asset/logo3.png')}}" class="logo" alt="unusia course">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
