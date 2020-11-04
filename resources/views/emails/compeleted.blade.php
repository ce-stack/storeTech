@component('mail::message')
# Order Completed
{{-- Thank you for your order the amount is {{ dd($order)}}.  --}}
Thank you for your order . 

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Visit Our Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
