<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.5);
            height: 68px;
        }

        .navbar-brand img {
            width: 100px;
        }

        .navbar-text {
            color: white;
            font-weight: bold;
            font-size: 20px;
            font-family: sans-serif;
        }

        .login-block {
            background: linear-gradient(to bottom, #FFB88C, #DE6262);
            width: 100%;
            padding: 100px 0;
        }

        .login-sec {
            background: white;
            padding: 50px 30px;
            position: relative;
            border-radius: 10px;
            /* Optional: Adds rounded corners */
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
            /* Optional: Adds a subtle shadow */
        }

        .btn-login {
            background: #DE6262;
            color: #fff;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="login_page.php">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPv0Hxua0QTM-cEArFQoHB9zVcJdS0GjvmbQmj3XISkBhZ20rfyjufOqBynFXcEidxJQ&usqp=CAU"
                    alt="Silicon University Logo">
            </a>
            <div class="ms-auto navbar-text">
                SiliconTech is a Unit of Silicon University
            </div>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="login-block">
        <div class="container">
            <div class="row login-container">
                <!-- Login Form -->
                <div class="col-md-6 login-sec">
                    <h2 class="text-center">Login</h2>
                    <form class="login-form" id="loginform" name="loginform" method="post">
                        <div class="form-group">
                            <label class="text-uppercase">User Name</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase">Institute</label>
                            <select class="form-control" id="cmbInstitute" name="cmbInstitute">
                                <option value="">--Select Institute--</option>
                                <option value="SITWEST">Silicon Institute of Technology Sambalpur</option>
                                <option value="SITBBS" selected>SiliconTech is a Unit of Silicon University</option>
                                <option value="SITTRST">Silicon Institute Trust</option>
                            </select>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-login">Sign in</button>
                        </div>
                    </form>
                </div>

                <!-- Image Slider -->
                <div class="col-md-6">
                    <div id="loginCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="7.jpg" alt="Campus" width="535px">
                            </div>
                            <div class="carousel-item">
                                <img src="IMG_1733.jpg" alt="Students" width="500px">
                            </div>
                            <div class="carousel-item">
                                <img src="IMG_1888.jpg" alt="Library" width="500px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#loginCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#loginCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        document.querySelector("form").addEventListener("submit", async (e) => {
            e.preventDefault();
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            const response = await fetch("http://localhost:8080/4th%20sem%20project/login.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ username, password })
            });

            const data = await response.json();
            alert(data.message);
            if (data.status === "success") {
                window.location.href = "dashboard.php"; // Redirect on success
            }
        });

    </script>
</body>

</html>
