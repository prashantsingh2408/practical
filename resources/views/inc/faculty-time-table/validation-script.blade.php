<!-- 
  Validations should be
    1. Stop time should not be less than the start time
   
    3. if Session Duration is for e.g 60 min.. then another any row should not
    have time in between that duration in the same date.
 -->
 <script>
  $('.time-start,.time-duration, .time-end').on('change',function(){
    var start = $(this).closest('tr').find('.time-start').val();
    var end = $(this).closest('tr').find('.time-end').val();
    if(start > end && end != ''){
      $(this).closest('tr').find('.time-end').val('');
      alert('Stop time should not be less than the start time');
    }
    // 2. Start time of one row should not be same as start time of another row if
    // the date is same.
    // var start_time = $(this).closest('tr').find('.time-start').val();
    // var duration = $(this).closest('tr').find('.time-duration').val();
    // var date = $(this).closest('tr').find('input[type=date]').val();
    // var tr_count = $('tbody tr').length;
    
    
    // for(var i=1; i<=tr_count; i++){
    //   if(i != 1){// skip clone tr
    //     tbody = $('tbody tr:nth-child('+i+')');
    //     if(tbody.find('input[type=date]').val() == date){
    //       var start_time_of_other_tr = tbody.find('.time-start').val();
    //       var duration_of_other_tr = tbody.find('.time-duration').val();
    //       var end_time_of_other_tr = tbody.find('.time-end').val();
    //       if(start_time_of_other_tr == start_time){
    //         alert('Start time of one row should not be same as start time of another row if the date is same.');
    //         $(this).closest('tr').find('.time-start').val('');
    //       }
    //       if(start_time_of_other_tr == end_time_of_other_tr){
    //         alert('Start time of one row should not be same as end time of another row if the date is same.');
    //         $(this).closest('tr').find('.time-start').val('');
    //       }
    //       if(end_time_of_other_tr == start_time){
    //         alert('End time of one row should not be same as start time of another row if the date is same.');
    //         $(this).closest('tr').find('.time-start').val('');
    //       }
    //       if(end_time_of_other_tr == end_time_of_other_tr){
    //         alert('End time of one row should not be same as end time of another row if the date is same.');
    //         $(this).closest('tr').find('.time-start').val('');
    //       }
    //       if(start_time_of_other_tr > start_time && start_time_of_other_tr < end_time_of_other_tr){
    //         alert('Start time of one row should not be in between the start time and end time of another row if the date is same ');
    //         $(this).closest('tr').find('.time-start').val('');
    //       }
    //     }
    //   }
    // }
  });
 </script>