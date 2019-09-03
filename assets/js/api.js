// api calling javascript function are storead here
// @abid hasan 2019


//user login function
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

//user signup function
function user_singup() {
    let user_data = [];
    let data = {}
    data.name = document.getElementById("name").value;
    data.email = document.getElementById("email").value;
    data.password = document.getElementById("password").value;
    data.agree = document.getElementById("check").value;
    user_data.push(data);

    $.ajax({
        url: 'api.php',
        method: 'post',
        data: { user_signup: JSON.stringify(user_data) },
        success: function (res) {
            console.log(res);
            if (res == "signup_success") {
                swal("Signup Success!", "You can login now", "success").then((value) => {
                    //swal(`The returned value is: ${value}`);
                    window.location.href = 'index.php';
                });
            } else if (res == "already_exist") {
                swal("Already Exist!", "You can login now", "info");
            } else if (res == "isert_null") {
                swal("Already Exist!", "You can login now", "info");
            } else if (res == "password_short") {
                swal("Password Too Short!", "You can login now", "info");
            } else {
                swal("Server Error!", "", "error");
            }
        }
    });
}