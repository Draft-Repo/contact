@component('mail::message')

# Hi {{$name}} 
<br/>
{{$messege}}

@component('mail::button', ['url' => 'https://itparlour.com'])
Visit our site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
