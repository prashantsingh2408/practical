<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script>
  updateEndTime();
  function updateEndTime(){
    $('.time-start, .time-duration').on('change', function() {
      console.log('change');
      var start = $(this).closest('tr').find('.time-start').val();
      var duration = $(this).closest('tr').find('.time-duration').val();
      // sum as integer
      var end = parseInt(start) + parseInt(duration);
      $(this).closest('tr').find('.time-end').val(end);
    });
  }
</script><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/inc/faculty-time-table/scripts-end-time-calculation.blade.php ENDPATH**/ ?>