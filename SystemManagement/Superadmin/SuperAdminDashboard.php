//Palitan  nalang file extension to php

//from SuperAdminDashboard.Html
//to SuperAdminDashboard.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SuperAdmin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: #ffffff; /* White background */
            color: #800000; /* Maroon text color */
        }
        .navbar {
            background-color: #800000 !important; /* Maroon navbar background */
        }
        .navbar-light .navbar-brand,
        .navbar-light .navbar-nav .nav-link {
            color: #ffffff !important; /* White text color for brand and navigation links */
        }
        .list-container {
            display: flex;
            justify-content: space-between;
            max-width: 100%;
            overflow: auto;
        }
        .list-item {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    //Navigation Bar
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">SuperAdmin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <!-- Add your navigation links here ito yung mga "#" tska ex."nav-item"-->
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Index.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Content Area -->
<div class="container mt-4">
    <h2 style="color: #800000;">Welcome to the SuperAdmin Dashboard</h2>

    <!-- Chart and Lists Container -->
    <div class="d-flex flex-column align-items-center">
        <!-- Pie Chart -->
        <canvas id="userDistributionChart" width="400" height="400"></canvas>

        <!-- Admins, Students, and Visitors Lists -->
        <div class="list-container">
            <!-- Admins List Section -->
            <div>
                <h4 style="color: #800000;">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#adminsList" aria-expanded="true" aria-controls="adminsList">
                        Admins List
                    </button>
                </h4>
                <div id="adminsList" class="collapse show">
                    <!-- Replace with actual code to fetch and display admins,Php code natin para maconnect sa database -->
                    <?php
                            $adminsList = ['Admin1', 'Admin2', 'Admin3'];
                            foreach ($adminsList as $admin) {
                                echo "<span class='list-item'>$admin</span>";
                            }
                        ?>
                </div>
            </div>

            <!-- Students List Section -->
            <div>
                <h4 style="color: #800000;">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#studentsList" aria-expanded="true" aria-controls="studentsList">
                        Students List
                    </button>
                </h4>
                <div id="studentsList" class="collapse show">
                    <!-- Replace with actual code to fetch and display students,Php code natin para maconnect sa database -->
                    <?php
                            $studentsList = ['Student1', 'Student2', 'Student3'];
                            foreach ($studentsList as $student) {
                                echo "<span class='list-item'>$student</span>";
                            }
                        ?>
                </div>
            </div>

            <!-- Visitors List Section -->
            <div>
                <h4 style="color: #800000;">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#visitorsList" aria-expanded="true" aria-controls="visitorsList">
                        Visitors List
                    </button>
                </h4>
                <div id="visitorsList" class="collapse show">
                    <!-- Replace with actual code to fetch and display visitors,php code natin to para maconnect sa database-->
                    <?php
                            $visitorsList = ['Visitor1', 'Visitor2', 'Visitor3'];
                            foreach ($visitorsList as $visitor) {
                                echo "<span class='list-item'>$visitor</span>";
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Chart.js Script -->
    <script>
        // Dummy data (palitan nyo nalang ng actual data from database)
        var userData = {
            labels: ['Admins List', 'Students List', 'Visitors List'],
            datasets: [{
                data: [5, 20, 15],

                backgroundColor: ['rgba(255, 99, 132, 0.7)', 'rgba(54, 162, 235, 0.7)', 'rgba(255, 206, 86, 0.7)'],
                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                borderWidth: 1
            }]
        };


        var ctx = document.getElementById('userDistributionChart').getContext('2d');
        var userDistributionChart = new Chart(ctx, {
            type: 'pie',
            data: userData,
            options: {}
        });
    </script>
</div>
</body>

</html>
