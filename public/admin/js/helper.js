$(document).ready(function(){
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var element = input.closest('.profile-info');
                $(element).find('.profile-display').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".profile-upload").on("change", function(){
        readURL(this);
    });
    $('.select2-multiple').select2({
        placeholder: " Select category"
    });
});
