@component('mail::message')
    {{-- Greeting --}}
    @if (! empty($greeting))
    # {{ $greeting }}
    @else
        @if ($level === 'error')
        # @lang('Whoops!')
        @else
        # @lang('Olá!')
        @endif
    @endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Agredecemos o contato'),<br>
{{ config('app.name') }}
@endif

    {{-- Subcopy --}}
    @isset($actionText)
        @slot('subcopy')
            @lang(
                "Se você estiver com problemas para clicar no botão \":actionText\", copie e cole a URL abaixo no seu navegador:\n",
                [
                    'actionText' => $actionText,
                ]
            ) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
        @endslot
    @endisset
@endcomponent
