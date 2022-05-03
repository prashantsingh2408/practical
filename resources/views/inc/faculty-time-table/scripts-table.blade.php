<script>
  rowAdd();
  rowDelete();
  function rowDelete() {
    $('.row-del').on('click', function(e) {
      e.preventDefault();

      $(this).parent().parent().remove();
    });
  }
  function rowAdd() {
    $('.row-add').on('click', function(e) {
      e.preventDefault();
      // get the tr_empty row
      var tr = $('#tr_for_clone');
      var tr_clone = tr.clone();
      // remove #tr_for_clone id
      tr_clone.removeAttr('id');
      //make display show
      tr_clone.css('display', 'table-row');
      // add on.click event to the row-del button
      tr_clone.find('.row-del').on('click', function(e) {
        e.preventDefault();
        $(this).parent().parent().remove();
      });
      $('tbody').append(tr_clone);
    });
  }
</script>