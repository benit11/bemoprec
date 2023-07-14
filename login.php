
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="login-form">
        <div class="box-login">
            <div class="title">Login</div>
            <form id="loginForm" method="POST" action="">
                <input type="text" name="nrp" placeholder="NRP" id="nrp" name="nrp" value="" class="form-control" maxlength="9"
                    required=""><br>
                <input type="password" name="pass" placeholder="Katasandi" id="pass" name="pass" class="form-control"
                    required=""><br>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary btn-lg masuk" name="masuk">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script >
function sendData() {
            var xhr = new XMLHttpRequest();
            var url = "https://bem.petra.ac.id/proyekOpenrec2023/API/login.php";

            var data = JSON.stringify({
                nrp: document.getElementById("nrp").value,
                password: document.getElementById("pass").value,
            });

            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            xhr.onload = function () {               
                console.log (this.responseText);
            };

            xhr.send(data);
            return false;
        }
// $("#loginForm").submit(function(event)
// {
//     event.preventDefault();
//     $.ajax({
//         type: "POST",
//         url: "https://bem.petra.ac.id/proyekOpenrec2023/API/login.php",
//         data:({
//             nrp : $('#nrp').val(),
//             password: $('#pass').val()
//         }),
//         success: function(result)
//         {
//             if(result=='1')
//             {
//                 window.location = 'http://www.google.com/'; //just to show that it went through
//             }
//             else
//             {
//                 $('#result').empty().addClass('error')
//                     .append('Something is wrong.');
//             }
//         }
//     });
//     return false;
// })
</script>