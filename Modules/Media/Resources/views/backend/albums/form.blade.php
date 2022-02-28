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

</div>


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

    window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
  });
});

// set file link
function fmSetLink($url) {
  document.getElementById('url').value = $url;
}
</script>
@endpush
