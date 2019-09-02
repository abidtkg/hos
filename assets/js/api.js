// api calling javascript function are storead here
// @abid hasan 2019

// all functiom goes from here
function user_login() {
    user_data = [];
    data = {};
    data.email = document.getElementById("login_email").value;
    data.password = document.getElementById("login_password").value;
    user_data.push(data);

    $.ajax({
        url: 'api.php',
        method: 'post',
        data: { user_login: JSON.stringify(user_data) },
        success: function (res) {
            console.log(res);
        }
    });

}