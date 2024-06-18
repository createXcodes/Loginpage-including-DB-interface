<html lang="en">

<head>
    <link rel="shortcut icon" type="x-icon" href="./icons8-login-96.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
</head>
<link rel="stylesheet" href="style3.css">
<script src="./signup.js"></script>






<body>
    <div class="Background">
        <form name="myForm2" action="information.php" onsubmit="return conf()" method="post">


            <div class="InputField">
                <div class="FormatBorder">
                    <img src="./icons8-mongo-db-64.png" alt="">







                    <Center>Registration Form</Center>
                    <br>
                    <br>
                    <input type="text" name="namer" placeholder="Create New Username">
                    <br>
                    <br>
                    <input type="password" name="passwordr" placeholder="Create New Password">
                    <br>
                    <br>
                    <input type="email" name="emailr" placeholder="Enter Your Email">
                    <br>
                    <br>
                    <input type="number" name="number" placeholder="Enter Your Number With ISP CODE">
                    <br>
                    <br>
                    <input type="number" name="age1" placeholder="Enter Your Age">
                    <br>
                    <br>
                    <input type="checkbox" name="Conformation">
                    <br>
                    <input type="submit" value="Sign Up">

                </div>
            </div>





        </form>







    </div>
    <script>
        const InputField = document.querySelector(".InputField");
        const body = document.querySelector("body");
        window.onload = function () {
            setTimeout(function () {
                InputField.style.display = "block"




            },2000)

        }

        body.addEventListener( () => {
            InputField.style.display = "none"
        })

    </script>

</body>



</html>