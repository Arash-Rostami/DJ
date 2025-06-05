<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ env('APP_URL') . "/images/d-j.png"}}" class="logo" alt="Davood Jafari Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
