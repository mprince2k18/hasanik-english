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

  $('.categoryBtn').on('click', function () {
      $('#categoryForm').submit();
  });

});


  //show the modal in this function
    function quickView(url) {
      $('#product-quickview').modal('show');
      $('#product-quickview').load(url);
    }


// avatar preview
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
      $('#imagePreview').hide();
      $('#imagePreview').fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imageUpload").change(function () {
  readURL(this);
});



function imageUploadFIcon(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#imagePreview_f_icon').css('background-image', 'url(' + e.target.result + ')');
      $('#imagePreview_f_icon').hide();
      $('#imagePreview_f_icon').fadeIn(350);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload_f_icon").change(function () {
  imageUploadFIcon(this)
});


function imageUploadFLogo(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#imagePreview_f_logo').css('background-image', 'url(' + e.target.result + ')');
      $('#imagePreview_f_logo').hide();
      $('#imagePreview_f_logo').fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload_f_logo").change(function () {
  imageUploadFLogo(this)
});

$(document).ready(function () {
    $('.summernote').summernote({
      height: 200
    });
});

$('#cp2').colorpicker();
