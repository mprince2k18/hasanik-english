$( document ).ready(function() {

  $('.occupation').on('click',function(){
    $('#occupation_form').submit();
  });

  $('.schedule').on('click',function(){
    $('#schedule_form').submit();
  });

  $('.payment').on('click',function(){
    $('#payment_form').submit();
  });

});


  //show the modal in this function
    function quickView(url) {
      $('#product-quickview').modal('show');
      $('#product-quickview').load(url);
    }
