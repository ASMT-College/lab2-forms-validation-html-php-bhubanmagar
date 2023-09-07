<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<style>
    .card {
        border: 1px solid black;
        border-radius: 5px;
        margin: 5px;
        padding: 5px;
        display: inline-block;
        justify-content: center;
        box-shadow: 1px 2px black;
    }

    form {
        display: flex;
        justify-content: center;
    }

    #validate {
        border-radius: 5px;

    }
</style>

<body>
    <?php
    if (isset($_GET['submit'])) {
        $email2 = $_GET['email2'];
        $validation = "/([a-zA-Z]+@[a-zA-Z]+.[com|org])/";
        if (preg_match($validation, $email2)) {
            echo "valid email";
        } else {
            echo "invalid email";
        }
    }

    ?>

    <form method"get">
        <div class="card">
            <div>
                <label for="Uname"><strong>Username</strong></label><br />
                <input type="text" name="Uname" id="Uname" require>
            </div><br />
            <div>
                <label for="password"><strong>Password</strong></label></br>
                <input type="password" id="password" name="password" require>
            </div>
            <br />
            <div>
                <label for="email1"><strong>Email1</strong></label><br />
                <input type="email" id="email1" namme="email1" require>
            </div><br />
            <div>
                <!-- js email validation-->
                <label for="email2"><strong>Email2</strong></label><br />
                <input type="text" id="email2" name="email2" required>
            </div><br />
            <div id="validate" style="background-color: red"></div><br />
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
    <!-- <script>
        const validatemail = () => {
            event.preventDefault();
            var email = document.getElementById("email2").value;
            var validation = /([a-zA-Z]+@[a-zA-Z]+.[com|org])/;
            if (validation.test(email)) {
                alert("sumitted");
                return true;
            } else {
                document.getElementById("validate").innerHTML = "invalid email";
                return false;
            }
        }
    </script> -->
</body>

</html>