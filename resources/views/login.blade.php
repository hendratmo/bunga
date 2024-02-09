<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Add the following inside the <head> section of your HTML file -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/jsku.js"></script>
    </head>
    <style>
        *{
            margin : 0;
            padding : 0;
            outline : 0;
        }

        body{
            background-size : cover;
            background-position : center;
            background-repeat : no-repeat;
            background-image : url('images/bg-title-01.jpg');
        }

        .container{
            /* position : absolute; */
            left : 50%;
            right : 50%;
            margin : 20vh auto;
            /* transform: translate(-50%,-50%); */
            padding : 20px 25px;
            width : 300px;
            background-color : rgba(0,0,0,0.7);
            box-shadow : 0 0 10px rgba(255,255,255,0.3);
        }

        .container h1{
            text-align : left;
            color : #fafafa;
            margin-bottom : 30px;
            text-transform : uppercase;
            border-bottom : 4px solid #fff;
        }

        .container label{
            text-align : left;
            color : #90caf9;
        }

        .container form input{
            width: calc(100% - 20px);
            /* padding: 8px 10px; */
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #2979ff;
            color: #fff;
            font-size: 20px;
        }

        .container form button{
            width: 100%;
            padding: 5px 0;
            border: none;
            background-color:#2979ff;
            font-size: 18px;
            color: #fafafa;
        }

        .password-toggle-icon {
            cursor: pointer;
        }
    </style>
    <body>
        <div class="container">
            <h1>Form Login</h1>
                <form action="">
                    <label for="">Username</label>
                    <br>
                    <input type="text" id="id_username" name="name_password">
                    <br>
                    <label for="">Password</label>
                    <br>
                    <div class="input-group">
                        <input type="password" id="id_password" name="name_password">
                        <span class="password-toggle-icon" id="id_toggle" onclick="hide_show_password()"><i class="fas fa-eye"></i></span>
                    </div>
                    
                    <br>
                    <button style="cursor:pointer;">Login</button>
                </form>
        </div>
    </body>
</html>