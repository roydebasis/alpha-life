<div class="text-right">
    {{ html()->form('DELETE', route("backend.$module_name.destroy", $data))->class('form')->open() }}
        {{ html()->button($text = "<i class='fas fa-trash-alt'></i> ", $type = 'submit')->class('btn btn-danger') }}
    {{ html()->form()->close() }}
</div>
