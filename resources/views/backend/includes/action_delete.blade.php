<div class="text-right">
    {{ html()->form('DELETE', route("backend.$module_name.destroy", $data))->class('form')->open() }}
        {{ html()->button($text = "<i class='fas fa-trash-alt'></i> ", $type = 'submit')->class('btn btn-danger show_confirm') }}
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
