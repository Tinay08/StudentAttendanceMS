<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .home-section {
            position: relative;
            height: 100vh;
            background-position: center;
            color: black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url('{{ asset('images/cecbg.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div class="px-4 sm:px-6 py-3 shadow flex items-center justify-between shadow h-16 fixed top-0 left-0 right-0 z-50" style="background-color:#fff">
        <div class="flex items-center text-white">
            <img src="images/ceclogo.png" alt="Icon" class="mr-2" style="height: 50px;">
            <span class="font-semibold text-sm sm:text-xl tracking-tight" style="color: #00008B">STUDENT ATTENDANCE MANAGEMENT SYSTEM <span style="color: #FF4500;">|</span> Cristal <span style="color: red;">e</span><span style="color: #00008B;">-College</span></h1>
        </div>
    </div>

    <div class="home-section" id="home">
        <div class="container" style="display: flex; align-items: center; margin-top: -18%">
            <div style="flex: 1;">
                <h1 class="text-animation" style="font-size: 30px; color: #191970; font-weight: 900;">CRISTAL <span style="color: red;">e</span><span style="color: #191970;">-COLLEGE</span></h1>
                <h1 class="text-animation" style="font-size: 80px; color: #4169E1; font-weight: 900;">Student <span style="color: goldenrod;">Attendance</span></h1>
                <h1 class="text-animation" style="font-size: 50px; color: #4169E1; font-weight: 900;">Management System</h1>
                <a href="{{ url('/') }}" class="btn btn-outline-warning  shadow" style="margin-top: 30px; width: 300px; height: 40px; text-align: center;">Login</a>
            </div>
        </div>
    </div>

    <div class="container" id="about">
        <div class="row mt-5">
            <div class="col-md-6" style="margin-top: 15%;">
                <div class="about-section">
                    <h2 style="color: goldenrod;">About</h2>
                    <p class="animated text-secondary">Welcome to Cristal E-College! Maintaining regular attendance is crucial for your success and for making the most of your educational opportunities. This policy outlines the attendance requirements, procedures, and consequences to ensure clarity and consistency.</p>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 10%;">
                <img src="{{ asset('images/bg.jpg') }}" alt="Graphic Artist Image" class="img-fluid animated">
            </div>
            <div class="col-md-6 mt-5">
                <div class="about-section" style="margin-top: 20%;">
                    <h2 style="color: goldenrod;">Cristal E-College Student Attendance Policy</h2>
                    <p class="animated text-secondary">1. Importance of Attendance<br>At Cristal E-College, we believe that regular attendance is key to academic success. 
                    Active participation in online classes enhances learning, fosters a sense of community, and provides you with the full benefit of our educational offerings.</p>
                    <p class="animated text-secondary">2. Objectives<br>• Ensure that students attend classes regularly and punctually.
                    <br>• Enhance academic performance and success through consistent attendance.
                    <br>• Facilitate the effective monitoring of student attendance.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-5 shadow" style="background-color: #4169E1 ; padding-top: 15px; padding-bottom: 15px;">
        <div class="container">
            <div class="row">
                <h6 style="color: #fff;">&copy; 2024 Student Attendance Management System. All rights reserved.</h6>
            </div>
        </div>
    </footer>
</body>
</html>
