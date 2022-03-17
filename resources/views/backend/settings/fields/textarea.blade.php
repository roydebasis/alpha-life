@php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
$required_mark = ($required != "") ? '<span class="text-danger"> <strong>*</strong> </span>' : '';
@endphp

<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}"> <strong>{{ $field['label'] }}</strong> ({{ $field['name'] }})</label> {!! $required_mark !!}
    <textarea type="{{ $field['type'] }}" name="{{ $field['name'] }}" class="form-control {{ Arr::get( $field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}" id="{{ $field['name'] }}" placeholder="{{ $field['label'] }}" rows="6" {{ $required }}>
    @if(isset($field['display']))
    @if($field['display'] == 'raw')
    {!! old($field['name'], setting($field['name'])) !!}
    @else 
    {{ old($field['name'], setting($field['name'])) }}
    @endif
    @else
    {{ old($field['name'], setting($field['name'])) }}
    @endif
    </textarea>

    @if ($errors->has($field['name'])) <small class="invalid-feedback">{{ $errors->first($field['name']) }}</small> @endif
    @if(isset($field['help']))<small id="email-{{ $field['name'] }}" class="form-text text-muted">{{ $field['help'] }}</small> @endif
</div>

<script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<script type="text/javascript">
CKEDITOR.replace('address', {filebrowserImageBrowseUrl: '/file-manager/ckeditor', language:'{{App::getLocale()}}', defaultLanguage: 'en'});
</script>
