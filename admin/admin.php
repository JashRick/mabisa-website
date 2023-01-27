
<!DOCTYPE html>
<html lang="en">
<?php include("./layout/head.php"); ?>
<body>
    <?php include("./layout/nav.php"); ?>
    <section class="dashboard">

    <?php include("./layout/header.php"); ?>
        <div class="dash-content container">
        <?php 
        
        if (isset($_GET["page"])) {
            $page = $_GET["page"];

            if ($page == "dentist-list") {
                include("./pages/dentist-list.php");
            } else if ($page == "dentist-form") {
                include("./pages/dentist-form.php");
            }

            else if ($page == "patient-list") {
                include("./pages/patient-list.php");
            } else if ($page == "patient-form") {
                include("./pages/patient-form.php");
            }
        }
        
        ?>
        </div>
    </section>
</body>
</html>

<script src="script.js"></script>