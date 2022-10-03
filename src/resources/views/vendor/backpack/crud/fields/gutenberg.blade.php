@include('crud::fields.inc.wrapper_start')
    <label>{!! $field['label'] !!}</label>
    @include('crud::fields.inc.translatable_icon')
    <textarea id="gutenberg-{{ $field['name'] }}" name="{{ $field['name'] }}" hidden>
        {{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}
    </textarea>
    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->checkIfFieldIsFirstOfItsType($field))
    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
        <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>
        <script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
        <script src="https://unpkg.com/moment@2.22.1/min/moment.min.js"></script>
        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"
        ></script>
        <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
    @endpush
@endif

@push('crud_fields_scripts')
    <script>
        jQuery(function () {
            Laraberg.init('gutenberg-{{ $field['name'] }}')
        })
    </script>
@endpush
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
