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
    <link rel="stylesheet" href="../CSS/institution.css">
</head>
<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="institution.php">
                <img src="../Images/logo.png" alt="hamrocollege" width="200" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="usernavbar navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page">college@gmail.com</a>
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
                <a href="institution.php" class="nav-link" aria-current="page">Dashboard</a>
            </li>
            <li class="nav-item ps-1">
                <a href="managecollege.php" class="nav-link active" aria-current="page">Manage College</a>
            </li>
            <li class="nav-item ps-1">
                <a href="managecourse.php" class="nav-link" aria-current="page">Manage Courses</a>
            </li>
        </ul>
    </div>

    <div class="top hidden">
        <a href="#top" class="top"><i class="fa-solid fa-arrow-right fa-rotate-270 fa-lg" style="color: black;"></i></a>
    </div>

    <!-- College Details Form -->

    <div class="background-color">
    <div class="container update-container">
    <p class="update-title">COLLEGE DETAILS</p>
    <form action="" method="POST" class="form">
        <div class="row mb-3">
            <div class="col-2">
                <input type="text" class="form-control" name="collegeId" id="collegeId" placeholder="College ID" value="College ID: ID" readonly>
            </div>
            <div class="col-2">
                <select class="form-select" name="affiliation" id="affiliation">
                    <option value="">Affiliation</option>
                    <option value="TU">TU</option>
                    <option value="KU">KU</option>
                    <option value="PU">PU</option>
                    <option value="International">International</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="name" id="name" placeholder="College Name" value="College Name" readonly>
            </div>
        </div>
    
        <div>
            <textarea class="form-control mb-2" name="overview" id="overview" rows="10" placeholder="About College"></textarea>
            <textarea class="form-control mb-2" name="reason" id="reason" rows="10" placeholder="Reason to Enroll"></textarea>
            <textarea class="form-control mb-2" name="message" id="message" rows="10" placeholder="Principal Message"></textarea>
            <textarea class="form-control mb-3" name="program" id="program" rows="10" placeholder="Academic Programs"></textarea>
        </div>
    
        <div class="row mb-2">
            <div class="col-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" value="Phone Number">
            </div>
            <div class="col">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="Email Address">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="website" id="website" placeholder="Website" value="Website">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-3">
                <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="Address">
            </div>
            <div class="col">
                <input type="file" class="form-control" name="logo" id="logo">
            </div>
        </div>
    
        <textarea class="form-control mb-4" name="program" id="program" rows="3" placeholder="Location"></textarea>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary" name="update-college-submit" id="update-submit" value="Update" style="background-color: #082465;">Update</button>
        </div>
    </form>
    </div>
    </div>
   
    <script src="../JS/institutionscript.js"></script>
    <script src="https://kit.fontawesome.com/296ff2fa8f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>