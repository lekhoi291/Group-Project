$(document).ready(function(){
    $('#feedback').load('check.php').show();

    $('#user_signup').keyup(function(){
        $.post('check.php', {user: signup.user.value}, 
        function(result){
            $('#feedback').html(result).show();
        });
    });
});