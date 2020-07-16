$( document ).ready(function() {


});


  //show the modal in this function
    function quickView(url) {
      $('#product-quickview').modal('show');
      $('#product-quickview').load(url);
    }
