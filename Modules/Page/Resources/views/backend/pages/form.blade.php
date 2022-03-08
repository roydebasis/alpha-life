<div class="row">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = __("page::$module_name.$field_name");
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
            $field_name = 'slug';
            $field_lable = __("page::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'intro';
            $field_lable = __("page::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'content';
            $field_lable = __("page::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required("required") !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", "id" => "content"]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'featured_image';
            $field_lable = __("page::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {!! Form::label("$field_name", "$field_lable") !!} {!! fielf_required($required) !!}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", 'aria-label'=>'Image', 'aria-describedby'=>'button-image']) }}
                <div class="input-group-append">
                    <button class="btn btn-info" type="button" id="button-image"><i class="fas fa-folder-open"></i> @lang('Browse')</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = __("page::$module_name.$field_name");
            $field_placeholder = __("Select an option");
            $required = "required";
            $select_options = [
                '1'=>'Published',
                '0'=>'Unpublished'
            ];
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
{{--    <div class="col-3">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'published_at';--}}
{{--            $field_lable = __("page::$module_name.$field_name");--}}
{{--            $field_placeholder = $field_lable;--}}
{{--            $required = "";--}}
{{--            ?>--}}
{{--            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}--}}
{{--            <div class="input-group date datetime" id="{{$field_name}}" data-target-input="nearest">--}}
{{--                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}--}}
{{--                <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">--}}
{{--                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'meta_title';
            $field_lable = __("page::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'meta_keywords';
            $field_lable = __("page::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'meta_description';
            $field_lable = __("page::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'meta_og_image';
            $field_lable = __("page::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>
{{--<div class="row">--}}
{{--    <div class="col-12">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'meta_og_url';--}}
{{--            $field_lable = __("page::$module_name.$field_name");--}}
{{--            $field_placeholder = $field_lable;--}}
{{--            $required = "";--}}
{{--            ?>--}}
{{--            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}--}}
{{--            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div></div>


<!-- Select2 Library -->
<x-library.select2 />
<x-library.datetime-picker />

@push('after-styles')
<!-- File Manager -->
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush

@push ('after-scripts')
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

<script src="https://cdn.tiny.cloud/1/ym8q5dj6b8ndg6fvncwdg374ihxv01btz4ygrazpj1uakc93/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<script type="text/javascript">
    tinymce.init({
        selector: '#content',
        plugins: ['advlist autolink lists link image charmap print preview hr anchor pagebreak', "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emotions template paste textcolor colorpicker textpattern"],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link image media | copy cut paste',
        setup: function (editor) {
            editor.on('change', function (e) {
                editor.save();
            });
        }
    });

    document.addEventListener("DOMContentLoaded", function() {

      document.getElementById('button-image').addEventListener('click', (event) => {
        event.preventDefault();

        window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
      });
    });

    // set file link
    function fmSetLink($url) {
      document.getElementById('featured_image').value = $url;
    }
</script>
@endpush
