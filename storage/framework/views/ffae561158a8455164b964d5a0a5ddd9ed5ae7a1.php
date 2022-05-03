<script>
  updateEndTime();
  function updateEndTime(){
    $('.time-start, .time-duration').on('change', function() {
      var start = $(this).closest('tr').find('.time-start').val();
      var duration = $(this).closest('tr').find('.time-duration').val();
      var end = calculateEndTime(start, duration);
      $(this).closest('tr').find('.time-end').val(end);
    });
  }
  function calculateEndTime(start, duration) {
    var startTime = moment(start, 'HH:mm');
    var endTime = startTime.add(duration, 'minutes');
    return endTime.format('HH:mm');
  }
</script><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/inc/faculty-time-table/end-time-calculation.blade.php ENDPATH**/ ?>