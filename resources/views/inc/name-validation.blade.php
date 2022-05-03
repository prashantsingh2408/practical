<script>
  // Add jQuery Validations for Name field - Field should not be empty and greater
  // than 200 characters
  $('#name').on('keyup', function() {
    if ($(this).val().length > 200) {
      $(this).addClass('is-invalid');
      $(this).removeClass('is-valid');
      $('button').attr('disabled', true);
    } else {
      $(this).removeClass('is-invalid');
      $(this).addClass('is-valid');
      $('button').attr('disabled', false);
    }
  });
</script>