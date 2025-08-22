@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://i.pinimg.com/736x/10/b4/94/10b4940109828cad8865ae0a49569ff9.jpg" class="logo" alt="Laravel Logo">
@else
{!! $slot !!}
@endif
</a>
</td>
</tr>
