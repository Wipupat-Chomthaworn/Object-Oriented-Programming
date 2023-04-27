<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/videopointers" type="text/css" />
    <title>Log in / Sign up!</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container-fluid {
            mix-blend-mode: lighten;
        }

        body {
            font-family: 'Irish Grover', cursive;
            /* background-size: cover;
            background-repeat: no-repeat;
            background-image: url("img/bg.png"); */
            background-color: #000000;
            min-height: 100%;
            width: 100%;
            color: white;
        }

        ::-webkit-scrollbar {
            width: 1rem;
        }

        ::-webkit-scrollbar-track {
            background-color: black;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #ae0707;
        }

        a {
            cursor: pointer;
            transition: all 200ms linear;
        }

        a:hover {
            text-decoration: none;
        }

        .link {
            color: #c4c3ca;
        }

        .link:hover {
            color: #ffeba7;
        }

        p {
            font-weight: 500;
            font-size: 14px;
            line-height: 1.7;
        }

        h4 {
            font-weight: 600;
        }

        h6 span {
            padding: 0 20px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .section {
            position: relative;
            width: 100%;
            display: block;
        }

        .full-height {
            min-height: 100vh;
        }

        [type="checkbox"]:checked,
        [type="checkbox"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }

        .checkbox:checked+label,
        .checkbox:not(:checked)+label {
            position: relative;
            display: block;
            text-align: center;
            width: 60px;
            height: 16px;
            border-radius: 8px;
            padding: 0;
            margin: 10px auto;
            cursor: pointer;
            background-color: #ffeba7;
        }

        .checkbox:checked+label:before,
        .checkbox:not(:checked)+label:before {
            position: absolute;
            display: block;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            color: #ffeba7;
            background-color: #ae0707;
            font-family: 'videopointers';
            content: '(';
            z-index: 20;
            top: -10px;
            left: -10px;
            line-height: 36px;
            text-align: center;
            font-size: 24px;
            transition: all 0.5s ease;
        }

        .checkbox:checked+label:before {
            transform: translateX(44px) rotate(-270deg);
        }


        .card-3d-wrap {
            position: relative;
            width: 440px;
            max-width: 100%;
            height: 400px;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            perspective: 800px;
            margin-top: 60px;
        }

        .card-3d-wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: all 600ms ease-out;
        }

        .card-front,
        .card-back {
            width: 100%;
            height: 100%;
            background-color: #2a2b38;
            background-size: 300%;
            position: absolute;
            border-radius: 6px;
            left: 0;
            top: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .card-back {
            transform: rotateY(180deg);
        }

        .checkbox:checked~.card-3d-wrap .card-3d-wrapper {
            transform: rotateY(180deg);
        }

        .center-wrap {
            position: absolute;
            width: 100%;
            padding: 0 35px;
            top: 50%;
            left: 0;
            transform: translate3d(0, -50%, 35px) perspective(100px);
            z-index: 20;
            display: block;
        }


        .form-group {
            position: relative;
            display: block;
            margin: 0;
            padding: 0;
        }

        .form-style {
            padding: 13px 20px;
            padding-left: 55px;
            height: 48px;
            width: 100%;
            font-weight: 500;
            border-radius: 4px;
            font-size: 14px;
            line-height: 22px;
            letter-spacing: 0.5px;
            outline: none;
            color: #c4c3ca;
            background-color: #1f2029;
            border: none;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
        }

        .form-style:focus,
        .form-style:active {
            border: none;
            outline: none;
            box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
        }

        .input-icon {
            position: absolute;
            top: 0;
            left: 18px;
            height: 48px;
            font-size: 24px;
            line-height: 48px;
            text-align: left;
            color: #ae0707;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:-ms-input-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input::-moz-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:-moz-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input::-webkit-input-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:focus:-ms-input-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:focus::-moz-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:focus:-moz-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:focus::-webkit-input-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .btn {
            border-radius: 4px;
            height: 44px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            padding: 0 30px;
            letter-spacing: 1px;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -ms-flex-pack: center;
            text-align: center;
            border: none;
            background-color: #ae0707;
            color: #ffff;
            box-shadow: 0 8px 24px 0 rgba(250, 12, 12, 0.2);
        }

        .btn:active,
        .btn:focus {
            background-color: #000000;
            color: #ffff;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
        }

        .btn:hover {
            background-color: #000000;
            color: #ffff;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
        }


        .logo {
            position: absolute;
            top: 30px;
            right: 30px;
            display: block;
            z-index: 100;
            transition: all 250ms linear;
        }

        .logo img {
            height: 26px;
            width: auto;
            display: block;
        }

        #bg-card {
            background-color: #16171d;
            border-radius: 30px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="img/Logo.png" alt="logo">

            </a>
        </div>

        <div class="container-fluid">
            <a class="navbar-home" href="index.html">
                <img src="img/Home.png" alt="logo">
                <!--         <h1 class="nav-name">Home</h1> -->
            </a>
        </div>
        <div class="container-fluid">
            <a class="navbar-promotion" href="Promotion.html">
                <img src="img/Promotion-web.png" alt="logo">
                <!--         <h1 class="nav-name">Promotion</h1> -->
            </a>
        </div>

        <div class="container-fluid">
            <a class="navbar-recommend" href="Recommend.html">
                <img src="img/Recommended.png" alt="logo">
                <!--         <h1 class="nav-name">Recommended</h1> -->
            </a>
        </div>

        <div class="container-fluid">
            <a class="navbar-menu" href="Sashimi.php">
                <img src="img/Menu.png" alt="logo">
                <!--         <h1 class="nav-name">Menu</h1> -->
            </a>
        </div>

        <!--     nev trolley login -->
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-trolley" href="Cart.php">
                    <img src="img/Trolley.png" alt="logo">
                    <!--         <h1 class="nav-name">Menu</h1> -->
                </a>
            </div>
            <div class="container-fluid">
                <a class="navbar-account" href="log in.html">
                    <img src="img/Account_selected.png" alt="logo">
                    <!--         <h1 class="nav-name">Menu</h1> -->
                </a>
            </div>
            <div class="container-fluid">
                <a class="navbar-contact" href="contact.html">
                    <img src="img/Contact us.png" alt="logo">
                    <!--         <h1 class="nav-name">Menu</h1> -->
                </a>
            </div>
        </div>
    </nav>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5" id="bg-card">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <form action="index.html" method="POST">
                            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                            <label for="reg-log"></label>
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">

                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Log In</h4>
                                                <div class="form-group">
                                                    <input type="text" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                    <i class="input-icon fa-solid fa-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpassword" class="form-style" placeholder="Your Password" id="logpassword" autocomplete="off">
                                                    <i class="input-icon fa fa-lock"></i>
                                                </div>
                                                <input type="submit" name="logSubmit" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Sign Up</h4>
                                                <div class="form-group">
                                                    <input type="text" name="signname" class="form-style" placeholder="Your Full Name" id="signname" autocomplete="off">
                                                    <i class="input-icon fa-solid fa-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="text" name="signemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                    <i class="input-icon uil fa-solid fa-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="signpassword" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                    <i class="input-icon uil fa fa-lock"></i>
                                                </div>
                                                <input type="submit" name="signSubmit" onclick="signAlert()" class="btn btn-primary">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    // Connect to Database
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('Account.db');
        }
    }

    // Open Database
    $db = new MyDB();
    if (!$db) {
        // echo $db->lastErrorMsg();
    } else {
        // echo "success<br>";
    }
    $access = false;

    //Add data to db if click submit

    if (isset($_POST["signSubmit"])) {

        $em_email = $_POST["signemail"];
        $em_name = $_POST["signname"];
        $em_password = $_POST["signpassword"];
        // if (strlen($em_email) > 0 && strlen($em_name) > 0 && strlen($em_password) > 0) {
        //     echo `<script> Swal.fire({
        //         position: 'center',
        //         icon: 'success',
        //         title: 'Sign up success.',
        //         showConfirmButton: false,
        //         timer: 1000
        //     })</script>`;
        // } else {
        //     echo `<script>Swal.fire({
        //         position: 'center',
        //         icon: 'danger',
        //         title: 'Please complete text',
        //         showConfirmButton: false,
        //         timer: 1000
        //     })</script>`;
        // }

        $sql = <<<EOF
       INSERT INTO ACCOUNT (USERNAME,PASSWORD,NAME)
       VALUES ('$em_email', '$em_password','$em_name');
   EOF;
        $ins = $db->exec($sql);

        if (!$ins) {
            // echo $db->lastErrorMsg();
        } else {
        }
    }
    if (isset($_POST["logSubmit"])) {
        $em_email = $_POST["logemail"];
        $em_password = $_POST["logpassword"];

        $sel = "SELECT * from ACCOUNT";

        $que = $db->query($sel);

        while ($row = $que->fetchArray(SQLITE3_ASSOC)) {
            if ($row["USERNAME"] == $em_email) {
                if ($row["PASSWORD"] == $em_password) {
                    $access = true;
                    echo `<script>Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Log in success.',
                        showConfirmButton: false,
                        timer: 1000
                    })</script>`;
                }
            }
        }
    }

    ?>
    <script>
        function signAlert() {
            // if ()
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Sign up success.',
                showConfirmButton: false,
                timer: 1000
            })
        }
    </script>

</body>

</html>