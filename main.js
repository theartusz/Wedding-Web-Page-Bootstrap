$(document).ready(function(){
  var date_input=$('input[name="input-date"]'); //our date input has the name "date"
  date_input.datepicker({
    format: 'dd/mm/yyyy',
    todayHighlight: true,
    autoclose: true,
    maxViewMode: 2,
  })
})

//Stop playing youtube video after the modal is closed//
$(document).ready(function(){
  $('.modal').each(function(){
          var src = $(this).find('iframe').attr('src');

      $(this).on('click', function(){

          $(this).find('iframe').attr('src', '');
          $(this).find('iframe').attr('src', src);

      });
  });
});