<!doctype html>
<html lang="en">

<head>
    {include file="header.tpl"}
</head>

<body>
    <div class="img-container">
        <div class="container">
            <!-- 加入導覧列功能 -->
             {include file="nav.tpl"}
            <!-- <nav class="nav">
                <a href="index.php" class="nav-link text-white">首頁</a>
                <a href="gallery.php" class="nav-link text-white">圖集</a>
                <a href="admin.php" class="nav-link text-white">管理</a>
            </nav> -->

            <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
                <h2 class="form-signup-heading">Register</h2>
                <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
                <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                <br>
                <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
                <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">

                <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                <div id="message"></div>
            </form>
        </div>
    </div>
    <!-- <div>
        <p class="lipsum(3,20-50)"></p>
        <p class="lipsum(4,20-50)"></p>
        <p class="lipsum(5,20-50)"></p>
        <p class="lipsum(3,20-50)"></p>
    </div> -->

    <!-- <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js " integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn "
        crossorigin="anonymous "></script> -->
    {include file="footer.tpl"}

    <script src="js/signup.js"></script>


    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script>
        $("#usersignup").validate({
            rules: {
                email: {
                    email: true,
                    required: true
                },
                password1: {
                    required: true,
                    minlength: 4
                },
                password2: {
                    equalTo: "#password1"
                }
            }
        });

    </script>
</body>

</html>