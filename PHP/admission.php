<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro College</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Favicon/favicon-16x16.png">
    <link rel="manifest" href="../Favicon/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/user.css">
</head>
<body>
    
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="userpage.php">
                <img src="../Images/logo.png" alt="hamrocollege" width="200" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="usernavbar navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="account.php" class="nav-link" aria-current="page"><i class="fa-solid fa-user" style="color: #000000;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page">user@gmail.com</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link logout-nav" aria-current="page">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="link-container navbar navbar-expand-lg" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="userpage.php" class="nav-link" aria-current="page">Home</a>
            </li>
            <li class="nav-item ps-1">
                <a href="college.php" class="nav-link" aria-current="page">Colleges</a>
            </li>
            <li class="nav-item ps-1">
                <a href="course.php" class="nav-link" aria-current="page">Courses</a>
            </li>
            <li class="nav-item ps-1">
                <a href="admission.php" class="nav-link active" aria-current="page">Admissions</a>
            </li>
        </ul>
    </div>

    <!-- Admission -->

    <div class="background-color" style="min-height: 73.5vh;">
    <div class="container admission-container">
        <p class="admission-title">FEATURED ADMISSION</p>
        <div class="container text-center admission-card">
            <div class="row row-gap-4">
                <div class="col-md-3">
                    <a href="coursedetails.php" class="card-link">
                        <div class="card" style="width: 15.7rem; border-radius: 15px;">
                            <img src="../Images/kathford.png" class="card-img-top college-logo" alt="...">
                            <div class="card-body">
                                <p class="course-name">Kathford International College of Engineering and Management</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="coursedetails.php" class="card-link">
                        <div class="card" style="width: 15.7rem; border-radius: 15px;">
                            <img src="../Images/saim.png" class="card-img-top college-logo" alt="...">
                            <div class="card-body">
                                <p class="course-name">South Asian Institute of Management (SAIM)</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="coursedetails.php" class="card-link">
                        <div class="card" style="width: 15.7rem; border-radius: 15px;">
                            <img src="../Images/herald.png" class="card-img-top college-logo" alt="...">
                            <div class="card-body">
                                <p class="course-name">Herald College</p>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    </div>

    <script src="../JS/userscript.js"></script>
    <script src="https://kit.fontawesome.com/296ff2fa8f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>