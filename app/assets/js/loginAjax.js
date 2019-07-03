$('#formSignin button').on('click', function() {
    $('.txtBtnLogin').html('Loading...');

    $username = $('#formSignin #username').val();
    $password = $('#formSignin #password').val();
    $remember = $('#formSignin #remember:checkbox:checked').val();
    if (typeof $remember == 'undefined') {
        $remember = 0;
    }

    if ($username == '' || $password == '') {
        $('#formSignin .alert').removeClass('hidden');
        $('#formSignin .alert').html('Please enter username and password!');
        $('.txtBtnLogin').html('Login');
    } else {
        $.ajax({
            url : _domain + 'login.php',
            type : 'POST',
            data : {
                username : $username,
                password : $password,
                remember : $remember
            }, success : function(data) {
                $('#formSignin .alert').removeClass('hidden');
                $('#formSignin .alert').html(data);
                $('.txtBtnLogin').html('Login');
            }, error : function() {
                $('#formSignin .alert').removeClass('hidden');
                $('#formSignin .alert').html('Can not login to the Wami-MPF system!');
                $('.txtBtnLogin').html('Login');
            }
        });
    }
});
