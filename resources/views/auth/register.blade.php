<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a0438d8cf7.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <style> 
        body {
            background-color: #f3f3f3;

        }
        .logo {
            height: 80px;
            width: 100px;
            display: flex;
        }
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 60%;
            transform: translate(-50%, -50%);
            height: 550px; 
            background: url("/images/login.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            border-radius: 10px;
            box-shadow: 10px 10px;

        }
        .container .content {
            position: absolute;
            top: 0;
            left: 0;
            width: 58%;
            height: 100%;
            font-family: "Courier New", monospace;
            color: white;

        }
        .content h2{
            font-size: 60px;
            padding: 10px;
        }

        .content h2 span{
            font-size: 40px;
        }

        .text-welcome p {
            text-align: justify;
            padding: 10px;
        }

        .container .logging {
            position: absolute;
            top: 0;
            right: 0;
            width: calc(100% - 58%);
            height: 100%;
        }


        .logging .form-box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background: transparent;
            backdrop-filter: blur(10px);
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            color: white;
            font-family: "Courier New", monospace;

        }

        .form-box h2 {
            font-size: 40px;
            text-align: center;
        }

        .form-box .input-box {
            position: relative;
            width: 340px;
            height: 50px;
            border-bottom: 2px solid white;
            margin: 15px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 18px;
            color: white;
            font-weight: bold;
            font-family: "Courier New", monospace;
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 18px;
            font-weight: 500;
            pointer-events: none;
            transition: .5s ease;
            font-weight: bold;

        }

        .input-box input:focus~label, .input-box input:valid~label  {
            top: -5px;
        }

        .input-box .icon {
            position: absolute;
            right: 0;
            top: 15px;
            font-size: 19px;
        }

        .terms label input {
            margin-right: 3px;
            margin-bottom: 15px;
        }


        .btn {
            width: 100%;
            height: 45px;
            background-color: #f3f3f3;
            border: none;
            outline: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
            font-family: "Courier New", monospace;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #252424;
            color: white; 
            transition: background-color 0.2s ease-in-out; 
        }

    </style> 

</head> 

<body>
    <div class ="container">
        <div class ="content">
            <img src ="images/logo.png" class="logo">
            <div class ="text-welcome">
                <h2>Welcome! <br> <span>To Our Library.</span></h2>
                <p>Welcome to the world of endless knowledge at your fingertips!  We're excited to introduce you to our user-friendly library website, your one-stop shop for borrowing books. No more heavy backpacks or crowded shelves – browse our extensive online catalog from the comfort of your dorm room or favorite study spot. Find the perfect book by title, author, or even by genre, and see if it's available in real-time.
                Dive into the exciting world of literature and get ready to unlock a universe of stories – your borrowing adventure starts now!
                 </p>
            </div>
        </div>
        <div class ="logging">
            <div class="form-box login">
                <form action="#">
                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="name" required>
                        <label>Name</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                        <input type="name" required>
                        <label>Address</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" required>
                        <label>Confirm Password</label>
                    </div>
                                  
                    <button type="submit" class="btn">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
 
</body> 



</html> 