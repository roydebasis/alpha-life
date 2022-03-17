@php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
$required_mark = ($required != "") ? '<span class="text-danger"> <strong>*</strong> </span>' : '';
@endphp

<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
  <label for="{{ $field['name'] }}"> <strong>{{ $field['label'] }}</strong> ({{ $field['name'] }})</label> {!! $required_mark !!}
  <div class="input-group">
    <input type="text"
           name="{{ $field['name'] }}"
           value="{{ old($field['name'], setting($field['name'])) }}"
           class="form-control {{ Arr::get( $field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}"
           id="{{ $field['name'] }}"
           placeholder="{{ $field['label'] }}" {{ $required }} aria-label='Image' aria-describedby='button-image'>

    <div class="input-group-append">
        <button class="btn btn-info" type="button" id="button-image"><i class="fas fa-folder-open"></i> @lang('Browse')</button>
    </div>
  </div>

    @if ($errors->has($field['name'])) <small class="invalid-feedback">{{ $errors->first($field['name']) }}</small> @endif
</div>

<script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<script type="text/javascript">


document.addEventListener("DOMContentLoaded", function() {

  document.getElementById('button-image').addEventListener('click', (event) => {
    event.preventDefault();

    window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
  });
});

// set file link
function fmSetLink($url) {
  document.getElementById('mobile_app_image').value = $url;
}
</script>
