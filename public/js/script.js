

/*this is all custom script*/
$(document).ready(function () {
    $('.textarea').summernote({
        height: 300,
    });
    $('.select2').select2({
        placeholder: 'Choose option',
        allowClear: true
    });
    $(".lang").select2({
        placeholder: 'Choose option',
        templateResult: formatState,
        templateSelection: formatState
    });


    //published the all
    $('input[type="checkbox"]').change(function () {
        var url = this.dataset.url;
        var id = this.dataset.id;


        if (url != null && id != null) {
            $.ajax({
                url: url,
                data: {id: id},
                method: 'get',
                success: function (result) {
                    // $.notify(result.message, "success");
                    new PNotify( {
                        title: 'Success notice', text: result.message, type: 'success'
                    });
                },
            });
        }

    });


    //hide the alert
    setTimeout(alertClose, 3000);


});


//this is for hide alert
function alertClose() {
    $("#gone").alert('close');
}


//show the modal in this function
function forModal(url, message) {
    $('#show-modal').modal('show');
    $('#title').text(message);
    $('#show-form').load(url);
    $('body').on('shown.bs.modal', '.modal', function () {
        $(this).find('select').each(function () {
            var dropdownParent = $(document.body);
            if ($(this).parents('.modal.in:first').length !== 0)
                dropdownParent = $(this).parents('.modal.in:first');
            $(this).select2({
                dropdownParent: dropdownParent,
                templateResult: formatState,
                templateSelection: formatState
            });
        });
    });
}


//this function for show dropdown image
function formatState(opt) {
    if (!opt.id) {
        return opt.text.toUpperCase();
    }
    var optimage = $(opt.element).attr('data-image');
    console.log(optimage);
    if (!optimage) {
        return opt.text.toUpperCase();
    } else {
        var $opt = $(
            '<span><img src="' + optimage + '" width="32px" height="auto"/> ' + opt.text.toUpperCase() + '</span>'
        );
        return $opt;
    }
}

//translate in one click
function copy() {
    $('#tranlation-table > tbody  > tr').each(function (index, tr) {
        $(tr).find('.value').val($(tr).find('.key').text());
    });
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
    imageUploadFLogo(this);
    alert('dsad');
});
