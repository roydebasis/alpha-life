@php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
$readonly = array_key_exists('attribute', $field) && (Str::contains($field['attribute'], 'readonly')) ? "readonly" : "";
$required_mark = ($required != "") ? '<span class="text-danger"> <strong>*</strong> </span>' : '';
@endphp

<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}"> <strong>{{ $field['label'] }}</strong> ({{ $field['name'] }})</label> {!! $required_mark !!}
    <input type="{{ $field['type'] }}"
           name="{{ $field['name'] }}"
           value="{{ setting($field['name']) }}"
           class="form-control {{ Arr::get( $field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}"
           id="{{ $field['name'] }}"
           placeholder="{{ $field['label'] }}" {{ $required }} {{$readonly}}>

    @if ($errors->has($field['name'])) <small class="invalid-feedback">{{ $errors->first($field['name']) }}</small> @endif
</div>
