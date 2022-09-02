
jQuery(document).ready(function($){
$('.thumbnail').click(function(){
  $('.modal-body').empty();
   $($(this).parents('div').html()).appendTo('.modal-body');
  $('#modal-new').modal('toggle');
});

$('#modal').model('show.bs.modal', function () {
   $('.col-6,.row .thumbnail').addClass('blur');
})

$('#modal').model('hide.bs.modal', function () {
   $('.col-6,.row .thumbnail').removeClass('blur');
})


});

