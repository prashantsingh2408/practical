<script>
  // on click #time-table-submit
  $('#time-table-submit').on('click',function(){
    var tr_count = $('tbody tr').length;
    for(var i=1; i<=tr_count; i++){
      if(i != 1){// skip clone tr
        tbody = $('tbody tr:nth-child('+i+')');
        faculty_id = tbody.find('select[name=faculty_id]').val();
        subject_id = tbody.find('select[name=subject_id]').val();
        session_date = tbody.find('input[type=date]').val();
        session_start_time = tbody.find('.time-start').val();
        duration = tbody.find('.time-duration').val();
        session_end_time = tbody.find('.time-end').val();
        createOrUpdate(i,faculty_id, subject_id, session_date, session_start_time, duration, session_end_time);
      }
      alert(i + ' Time table updated successfully');
      // window.location.href = "<?php echo e(route('add-faculty-time-table')); ?>";
    }
   function createOrUpdate(i,faculty_id, subject_id, session_date, session_start_time, duration, session_end_time){
    $.ajax({
      url: "<?php echo e(route('add-faculty-time-table')); ?>",
      type: 'POST',
      data: {
        '_token': "<?php echo e(csrf_token()); ?>",
        'i': i,
        'faculty_id': faculty_id,
        'subject_id': subject_id,
        'date': session_date,
        'session_start_time': session_start_time,
        'duration': duration,
        'session_end_time': session_end_time,
      },
      success: function(data){
        console.log(data);
      }
    });
   }
  });
</script><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/inc/faculty-time-table/submit-ajax-script.blade.php ENDPATH**/ ?>