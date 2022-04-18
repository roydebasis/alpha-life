<div class="row">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'title';
            $field_lable = __("media::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'place';
            $field_lable = __("media::$module_name.$field_name");
            $field_placeholder = "Place Name";
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'date';
            $field_lable = __("media::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            <div class="input-group date datetime" id="{{$field_name}}" data-target-input="nearest">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
                <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'thumbnail';
            $field_lable = __("media::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {!! Form::label("$field_name", "$field_lable") !!} {!! fielf_required($required) !!}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", "id" => 'image2', 'aria-label'=>'Image', 'aria-describedby'=>'thumbnail-button-image']) }}
                <div class="input-group-append">
                    <button class="btn btn-info" type="button" id="thumbnail-button-image"><i class="fas fa-folder-open"></i> @lang('Browse')</button>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'url';
            $field_lable = __("media::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {!! Form::label("$field_name", "$field_lable") !!} {!! fielf_required($required) !!}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", "id" => 'image1', 'aria-label'=>'Image', 'aria-describedby'=>'button-image']) }}
                <div class="input-group-append">
                    <button class="btn btn-info" type="button" id="button-image"><i class="fas fa-folder-open"></i> @lang('Browse')</button>
                </div>
            </div>
        </div>
    </div>
</div>

@isset($$module_name_singular)
    <div class="row">
        <div class="col-12">
            <div class="row">
                @foreach($$module_name_singular->photos as $photo)
                    <div class="col-2 mb-3 position-relative">
                        <a href="{{route("backend.$module_name.deletePhoto", ['albumId' => $$module_name_singular->id, 'id' => $photo->id])}}" class="btn btn-danger text-white position-absolute right-0" data-method="DELETE" data-token="{{csrf_token()}}" data-toggle="tooltip" title="{{__('labels.backend.delete')}}"><i class="fas fa-trash-alt"></i></a>
                        <image src="{{ asset($photo->url) }}" class="img-thumbnail"></image>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endisset


<div></div>


<!-- Select2 Library -->
<x-library.select2 />
<x-library.datetime-picker />

@push('after-styles')
<!-- File Manager -->
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush

@push ('after-scripts')


<script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<!-- Date Time Picker & Moment Js-->
<script type="text/javascript">
    $(function() {
        $('.datetime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            icons: {
                time: 'far fa-clock',
                date: 'far fa-calendar-alt',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'far fa-calendar-check',
                clear: 'far fa-trash-alt',
                close: 'fas fa-times'
            }
        });
    });
</script>

<script type="text/javascript">

CKEDITOR.replace('content', {filebrowserImageBrowseUrl: '/file-manager/ckeditor', language:'{{App::getLocale()}}', defaultLanguage: 'en'});

document.addEventListener("DOMContentLoaded", function() {

  document.getElementById('button-image').addEventListener('click', (event) => {
    event.preventDefault();
    inputId = 'image1';
    window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
  });

  document.getElementById('thumbnail-button-image').addEventListener('click', (event) => {
      event.preventDefault();
      inputId = 'image2';
      window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
  });
});

// input
let inputId = '';


// set file link
function fmSetLink($url) {
    document.getElementById(inputId).value = $url;
}

</script>
@endpush
