$(document).ready(function () {
    var loginBtn = $('#login-btn');
    loginBtn.click(function (e) {
        let user = $('#user');
        let pw = $('#pass');
        e.preventDefault();
        if (user.val() != "" && pw.val() != "") {
            let userData = user.val();
            let pwData = pw.val();
            $.ajax({
                url: "../Include/auth.php",
                data: {
                    userData,
                    pwData,
                    action: 'login'
                },
                type: 'post',
            })
                .done(function (data) {
                    if (data.trim() == "Success") {
                        window.location = "../Pages/admin.php";
                    }
                    else {
                        alert('Incorrect login data');
                    }
                    console.log(data.trim());
                });
        }
        else {
            alert('Please fill out all of the fields');
        }
    });
});



