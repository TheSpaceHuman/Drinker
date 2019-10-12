@component('mail::message')
    Новое письмо от {{ $user_name }}

    Имя: {{ $user_name }}
    Email: {{ $user_email }}
    Сообщение:
    {{ $user_message }}

@endcomponent