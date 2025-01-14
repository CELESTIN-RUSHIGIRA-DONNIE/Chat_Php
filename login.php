<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="" method="" enctype="multipart/form-data">
                <div class="error-txt">This is an error Message</div>
                
                <div class="field input">
                    <label>Email Adress</label>
                    <input type="email" name="email" placeholder="enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="continue to chat">
                </div>
            </form>
            <div class="link">not yet signed up ? <a href="register.php">Sign up now</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    
</body>
</html>