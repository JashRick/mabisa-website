
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Administration</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../images/logo2.png" alt="">
            </div>

            <span class="logo_name">MABISA</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class='fas fa-home'></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="#">
                    <i class='fas fa-user-cog' ></i>
                    <span class="link-name">Dentist Administration</span>
                </a></li>
                <li><a href="#">
                    <i class='fas fa-user'></i>
                    <span class="link-name">Patient Information</span>
                </a></li>
                <li><a href="#">
                    <i class='fas fa-file-medical'></i>
                    <span class="link-name">Medical History</span>
                </a></li>
                <li><a href="#">
                    <i class='fas fa-notes-medical'></i>
                    <span class="link-name">Reports</span>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">
                    Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="../images/logo2.png" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Home</span>
                </div>

                
            </div>

           
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
