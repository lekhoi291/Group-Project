$(document).ready(function(){
    $('.image_container').css('display', 'none');
    function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
      
        reader.onload = function(e) {
            $('.preview_image').css('background-image', 'url('+e.target.result +')');
            $('.preview_image').hide();
            $('.preview_image').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file-input").change(function(){
        $('.image_container').css('display','inline-block');
        $('.choose_file_button_wrapper').hide(); // From Stackoverflow answer
        readURL(this);
    });
});