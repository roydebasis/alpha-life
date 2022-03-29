<div class="text-right">
    @can('edit_'.$module_name)
    <x-buttons.edit class="my-1" route='{!!route("backend.$module_name.edit", $data)!!}' title="{{__('Edit')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />
    @endcan
    <x-buttons.show class="my-1" route='{!!route("backend.$module_name.show", $data)!!}' title="{{__('Show')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />
    {{ html()->form('DELETE', route("backend.$module_name.destroy", $data))->class('form my-1')->style('display:inline-block;')->open() }}
        {{ html()->button($text = "<i class='fas fa-trash-alt'></i> ", $type = 'submit')->class('btn btn-danger show_confirm')->style('padding: 2.5px 8px;') }}
    {{ html()->form()->close() }}
</div>

<script type="text/javascript">
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be stored in trash.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
</script>
