<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
    }

    .wrapper {
        display: flex;
        width: 100%;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background-color: #343a40;
        color: #fff;
        transition: all 0.3s;
        z-index: 1;
        position: fixed;
        height: 100%;
        overflow-y: auto;
        top: 0;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background-color: #212529;
    }

    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        color: #fff;
    }

    #sidebar ul li.active a {
        background-color: rgba(255,255,255,0.1);
    }

    #sidebarCollapse {
        background-color: #343a40;
        color: #fff;
        border: none;
    }

    /*#content {
        margin-left: 250px;
        padding: 20px;
        width: 100%;
    }*/

    #content {
    margin-left: 250px;
    padding: 20px;
    width: 100%;
    max-height: calc(100vh - 40px); /* Adjust the value based on your specific layout */
    overflow-y: auto;
}


    .profile-section {
        text-align: center;
        margin-bottom: 30px;
    }

    .profile-section img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .form-control {
        margin-bottom: 15px;
    }

    #chartContainer {
        height: 300px;
        width: 100%;
    }

    .hidden {
        display: none;
    }

    .widhei {
        width: 100px;
    }



    .table-responsive {
    overflow-x: auto;
}

/*.chart-canvas {
        max-width: 400px;
        max-height: 300px;
    }*/
    .chart-canvas {
    max-width: 100%; /* Adjust the maximum width as needed */
    max-height: 300px; /* Adjust the maximum height as needed */
}

.square-input {

    height: auto;
}
#logout-content {
    border: 1px solid #ccc;
    padding: 20px;
}

.logout-section {
    text-align: center;
}

</style>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Admin Dashboard</h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#home"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>
                <a href="#profile"><i class="fas fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="#category"><i class="fas fa-list-alt"></i> Category Details</a>
            </li>
            <li>
                <a href="#score"><i class="fas fa-chart-bar"></i> Score </a>
            </li>
            <li>
                <a href="#results"><i class="fas fa-poll"></i> Results</a>
            </li>
            <li>
                <a href="#logout" ><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <button type="button" id="sidebarCollapse" class="btn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>

        <!-- Home Content -->

        <div id="home-content" class="content-section text-center border rounded p-4">
            <h2 class="text-danger">Master Martial Arts Academy</h2>



            <div class="border-top my-3"></div>
            <h3 class=" text-dark">Total Number of Records: </h3></b>
            @if(isset($totalRecords) && $totalRecords > 0)
            <div id="totalRecords" class="display-4">{{ $totalRecords }}</div>
        @else
            <div class="text-muted">No records found</div>
        @endif

<hr>
           <div class="container">
            <h3 class="text-dark">Category</h3>
            <center>
                <div id="categoryLegend" class="mt-3"></div>
                <canvas id="chart" class="chart-canvas"></canvas>
            </center>

        </div>

<div class="container">
    <div class="border-top my-3"></div>
    <center>
        <h3 class="text-dark">Gender</h3>
    </center>
    <div id="genderLegend" class="mt-3"></div> <!-- Unique ID for Gender Legend -->
    <canvas id="genderChart" width="450" height="160"></canvas>
</div>


<div class="container">
    <div class="border-top my-3"></div>
    <center>
        <h3 class="text-dark">State </h3>
    </center>
    <canvas id="stateChart" width="700" height="250"></canvas>
</div>




</div>

        <!-- Profile Content -->
        <div id="profile-content" class="content-section hidden" style="border: 1px solid #ccc; padding: 20px;">
            <div class="profile-section">
                <img src="{{ asset('images/admin.png') }}" alt="Profile Picture">
                <h2>Deepak Belgin</h2>
                <p>Destination: Admin</p>
            </div>
        </div>



<!-- Logout Content -->
<div id="logout-content" class="content-section hidden" style="border: 1px solid #ccc; padding: 20px;">
    <div class="logout-section">
        <h4>Logout</h4>
        <button id="exitButton" class="btn btn-danger btn-lg" onclick="logout()">Exit</button> <!-- Added onclick attribute -->
    </div>
</div>






        <!-- Category Details Content -->
        <div id="category-content" class="content-section hidden text-center" style="border: 1px solid #ccc; padding: 20px;">
            <h2 style="margin-left: 25px;">All Athletes Details</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- First Row -->
                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label mt-2">Select Category:</label>
                        <div class="col">
                            <select class="form-control w-100 mt-3" id="category">
                                <option value="" disabled selected>Select Category</option>
                                <option>Male - Under 45-50</option>
                                <option>Male - Under 51-55</option>
                                <option>Male - Under 56-60</option>
                                <option>Male - Under 61-65</option>
                                <option>Male - Under 66-70</option>
                                <option>Female - Under 45-50</option>
                                <option>Female - Under 51-55</option>
                                <option>Female - Under 56-60</option>
                                <option>Female - Under 61-65</option>
                                <option>Female - Under 66-70</option>
                                <option >Transgender - Under 45-50</option>
                                <option >Transgender - Under 51-55</option>
                                <option>Transgender - Under 56-60</option>
                                <option >Transgender - Under 61-65</option>
                                <option >Transgender - Under 66-70</option>
                            </select>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-success ml-2 mt-3" id="submitBtn">Fetch</button>
                        </div>
                    </div>

                    <!-- Second Row -->
                    <div class="row mb-3">
                        <label for="search" class="col-sm-2 col-form-label mt-2">Search Records:</label>
                        <div class="col">
                            <input type="text" class="form-control mt-3 widhei w-100" id="searchInput" placeholder="Search">
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-success ml-2 mt-3 " id="searchBtn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <!-- Sample Table -->
<div id="sampleTable" class="row mt-3 hidden">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Dob</th>
                        <th>Gender</th>
                        <th>Weight</th>
                        <th>Category</th>
                        <th>Qualification</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <!--<a href="#" class="btn btn-primary btn-sm">Edit</a>-->
                            <button type="button" class="btn btn-primary edit-btn" data-id="athlete_id_here" data-toggle="modal" data-target="#editModal">Edit</button>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

 <!-- score Details Content -->

 <div id="score-content" class="content-section hidden text-center" style="border: 1px solid #ccc; padding: 20px;">
    <h2 style="margin-left: 25px;">Score Details</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- First Row -->
            <div class="row mb-3">
                <label for="category" class="col-sm-2 col-form-label mt-2">Select Category:</label>
                <div class="col">
                    <select class="form-control w-100 mt-3" id="category1">
                        <option value="" disabled selected>Select Category</option>
                        <option>Male - Under 45-50</option>
                        <option>Male - Under 51-55</option>
                        <option>Male - Under 56-60</option>
                        <option>Male - Under 61-65</option>
                        <option>Male - Under 66-70</option>
                        <option>Female - Under 45-50</option>
                        <option>Female - Under 51-55</option>
                        <option>Female - Under 56-60</option>
                        <option>Female - Under 61-65</option>
                        <option>Female - Under 66-70</option>
                        <option >Transgender - Under 45-50</option>
                                <option >Transgender - Under 51-55</option>
                                <option>Transgender - Under 56-60</option>
                                <option >Transgender - Under 61-65</option>
                                <option >Transgender - Under 66-70</option>
                    </select>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-success ml-2 mt-3" id="submitBtn1">Fetch score</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sampleTable1" class="row mt-3 hidden">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Player ID 1</th>
                        <th>Player ID 2</th>
                        <th>Player Name 1</th>
                        <th>Player Name 2</th>
                        <th>Sensu Player 1</th>
                        <th>Sensu Player 2</th>
                        <th>Player score 1</th>
                        <th>Player score 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="8" class="text-center"><h3 id="roundTitle">ROUND 1</h3></td>
                    </tr>
                    <!-- Round 1 data will be appended here -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="8" class="text-center"><h3 id="roundTitle">ROUND 2</h3></td>
                    </tr>
                    <!-- Round 2 data will be appended here -->

                    <tr>
                        <td colspan="8" class="text-center"><h3 id="roundTitle">ROUND 3</h3></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Athlete Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">


                <form id="editForm"  method="POST" action="{{ route('updateAthlete') }}">

                    @csrf

                    @isset($athlete)
                               <input type="hidden" name="id" value="{{ $athlete->id }}">
                    @endisset

                <div id="editFormContainer">


                   <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" id="id" name="id" readonly>

                    </div>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="dob">Dob:</label>
                        <input type="date" class="form-control" id="dob" name="dob" >
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="text" class="form-control" id="gender" name="gender" >
                    </div>


                    <div class="form-group">
                        <label for="weight">Weight:</label>
                        <input type="text" class="form-control" id="weight"  readonly>
                    </div>
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <input type="text" class="form-control" id="category"  readonly>
                    </div>


                    <div class="form-group">
                        <label for="qualification">Qualification:</label>
                        <input type="text" class="form-control" id="qualification" name="qualification" >
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile Number:</label>
                        <input type="text" class="form-control" id="mobile" name="mobile_number">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" >
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" >
                    </div>

                    <div class="form-group">
                        <label for="state">State:</label>
                        <input type="text" class="form-control" id="state" name="state" >
                    </div>

                    <div class="form-group">
                        <label for="pincode">Pincode:</label>
                        <input type="text" class="form-control" id="pincode" name="pincode" >
                    </div>

                </div>
            </div>

           <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save changes</button>-->
            </div>

        </form>
        </div>
    </div>
</div>



<div id="results-content" class="content-section hidden text-center" style="border: 1px solid #ccc; padding: 20px;">
    <h2>Winner List</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row mb-3 align-items-end">
                <label for="category" class="col-sm-2 col-form-label">Select Category:</label>
                <div class="col">
                    <select class="form-control w-100" id="winnercategory">
                        <option value="" disabled selected>Select Category</option>
                        <option>Male - Under 45-50</option>

                        <option>Male - Under 51-55</option>
                                <option>Male - Under 56-60</option>
                                <option>Male - Under 61-65</option>
                                <option>Male - Under 66-70</option>
                                <option>Female - Under 45-50</option>
                                <option>Female - Under 51-55</option>
                                <option>Female - Under 56-60</option>
                                <option>Female - Under 61-65</option>
                                <option>Female - Under 66-70</option>
                                <option >Transgender - Under 45-50</option>
                                <option >Transgender - Under 51-55</option>
                                <option>Transgender - Under 56-60</option>
                                <option >Transgender - Under 61-65</option>
                                <option >Transgender - Under 66-70</option>

                    </select>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-success w-75" id="showWinnersBtn">Show Winners</button>
                </div>
            </div>
       <!-- </div>
    </div>
</div>-->



<!-- Modal for Sending Messages -->

<div class="modal fade" id="sendMessageModal" tabindex="-1" role="dialog" aria-labelledby="sendMessageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-primary text-center" id="sendMessageModalLabel">Send Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="playerId">Player ID:</label>
                   <input type="text" class="form-control" id="playerId" readonly>
                </div>
                <div class="form-group">
                    <label for="position">Position:</label>
                     <input type="text" class="form-control" id="position" readonly>
                </div>
                <div class="form-group">
                    <label for="name00">Name:</label>
                    <input type="text" class="form-control" id="name00" readonly>
                </div>

                <div class="form-group">
                    <label for="winneremail">Email:</label>
                    <input type="text" class="form-control" id="winneremail">
                </div>

                <div class="form-group">
                    <label for="messagesend">Message:</label>
                    <textarea class="form-control square-input" id="messagesend"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="sendMessageButton" onclick="alert('This feature is under construction.');">Send Message</button>
            </div>

        </div>
    </div>
</div>



<!-- Table to display winners -->
<div id="winnerTable" class="row mt-3 hidden">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-striped table-bordered mt-4">
                <thead class="thead-warning">
                    <tr>
                        <th style="background-color:#f1260b;">Position</th>
                        <th style="background-color:#1e60ec;">ID</th>
                        <th style="background-color:#642254;">Name</th>
                       <!-- <th style="background-color:#ebe71c;">State</th>
                        <th style="background-color:#f70090;">Email</th>-->

                        <th style="background-color:#00ff15;">Send Message</th>

                    </tr>
                </thead>
                <tbody id="winnerTableBody">
                    <!-- Winners will be dynamically added here -->
                </tbody>
            </table>
        </div>
    </div>
</div>



</div>
</div>
</div>




<!-- Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>


<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

        // Hide the sample table initially
        $('#sampleTable').hide();

        // Show/hide content based on sidebar navigation
        $('ul.components li a').click(function() {
            var target = $(this).attr('href');
            $('.content-section').addClass('hidden');
            $(target + '-content').removeClass('hidden');

            // Show/hide sample table based on the target
            if(target == "#category") {
                $('#sampleTable').removeClass('hidden');
            } else {
                $('#sampleTable').addClass('hidden');
            }
        });

        // Fetch athletes on submit button click
        $('#submitBtn').on('click', function () {
            var category = $('#category').val();
            $.ajax({
                url: '/fetch-athletes',
                type: 'GET',
                data: { category: category },
                success: function(response) {
                    $('#sampleTable tbody').empty();
                    $.each(response, function(index, athlete) {
                        var row = '<tr>' +
                            '<td>' + athlete.id + '</td>' +
                            '<td>' + athlete.name + '</td>' +
                            '<td>' +  formatDate(athlete.dob) + '</td>' +
                            '<td>' + athlete.gender + '</td>' +
                            '<td>' + athlete.weight + '</td>' +
                            '<td>' + athlete.category + '</td>' +
                            '<td>' + athlete.qualification + '</td>' +
                            '<td>' + athlete.mobile_number + '</td>' +
                            '<td>' + athlete.email + '</td>' +
                            '<td>' + athlete.address + '</td>' +
                            '<td>' + athlete.state + '</td>' +
                            '<td>' + athlete.pincode + '</td>' +
                            '<td>' +
                            '<a href="#" class="btn btn-primary btn-sm">Edit</a> ' +
                            '<a href="#" class="btn btn-danger btn-sm">Delete</a>' +
                            '</td>' +
                            '</tr>';
                        $('#sampleTable tbody').append(row);
                    });
                    $('#sampleTable').show(); // Show the sample table after fetching data
                }
            });
        });



        // Search athletes on search button click
        $('#searchBtn').on('click', function () {
            var searchQuery = $('#searchInput').val(); // Updated to use #searchInput
            // Perform the search query using AJAX
            $.ajax({
                url: '/search-athletes',
                type: 'GET',
                data: { searchQuery: searchQuery },
                success: function(response) {
                    $('#sampleTable tbody').empty(); // Clear existing table rows
                    $.each(response, function(index, athlete) {
                        var row = '<tr>' +
                            '<td>' + athlete.id + '</td>' +
                            '<td>' + athlete.name + '</td>' +
                            '<td>' + formatDate(athlete.dob) + '</td>' +
                            '<td>' + athlete.gender + '</td>' +
                            '<td>' + athlete.weight + '</td>' +
                            '<td>' + athlete.category + '</td>' +
                            '<td>' + athlete.qualification + '</td>' +
                            '<td>' + athlete.mobile_number + '</td>' +
                            '<td>' + athlete.email + '</td>' +
                            '<td>' + athlete.address + '</td>' +
                            '<td>' + athlete.state + '</td>' +
                            '<td>' + athlete.pincode + '</td>' +
                            '<td>' +
                            '<a href="#" class="btn btn-primary btn-sm">Edit</a> ' +
                            '<a href="#" class="btn btn-danger btn-sm">Delete</a>' +
                            '</td>' +
                            '</tr>';
                        $('#sampleTable tbody').append(row);
                    });
                    $('#sampleTable').show(); // Show the sample table after searching data
                }
            });
        });



        function fetchResults(category) {
    $.ajax({
        url: '/fetch-results',
        type: 'GET',
        data: { category1: category },
        success: function(response) {
            // Clear existing table data
            $('#sampleTable1 tbody').empty();


            $('#sampleTable1 tbody').append('<tr><td colspan="8" class="text-center text-success"><h3>ROUND 1</h3></td></tr>');


            // Append Round 1 results
            $.each(response.round1, function(index, result) {
                var row = '<tr>' +
                    '<td>' + result.player_id1 + '</td>' +
                    '<td>' + result.player_id2 + '</td>' +
                    '<td>' + result.player_name1 + '</td>' +
                    '<td>' + result.player_name2 + '</td>' +
                    '<td>' + result.player1_firstscore + '</td>' +
                    '<td>' + result.player2_firstscore + '</td>' +
                    '<td>' + result.player_score1 + '</td>' +
                    '<td>' + result.player_score2 + '</td>' +
                    '</tr>';
                $('#sampleTable1 tbody').append(row);
            });


            $('#sampleTable1 tbody').append('<tr><td colspan="8" class="text-center text-primary"><h3>ROUND 2</h3></td></tr>');

            // Append Round 2 results
            $.each(response.round2, function(index, result) {
                var row = '<tr>' +
                    '<td>' + result.player_id1 + '</td>' +
                    '<td>' + result.player_id2 + '</td>' +
                    '<td>' + result.player_name1 + '</td>' +
                    '<td>' + result.player_name2 + '</td>' +
                    '<td>' + result.player1_firstscore + '</td>' +
                    '<td>' + result.player2_firstscore + '</td>' +
                    '<td>' + result.player_score1 + '</td>' +
                    '<td>' + result.player_score2 + '</td>' +
                    '</tr>';
                $('#sampleTable1 tbody').append(row);
            });


            $('#sampleTable1 tbody').append('<tr><td colspan="8" class="text-center text-danger"><h3>ROUND 3</h3></td></tr>');


// Append Round 3 results
$.each(response.round3, function(index, result) {
    var row = '<tr>' +
        '<td>' + result.player_id1 + '</td>' +
        '<td>' + result.player_id2 + '</td>' +
        '<td>' + result.player_name1 + '</td>' +
        '<td>' + result.player_name2 + '</td>' +
        '<td>' + result.player1_firstscore + '</td>' +
        '<td>' + result.player2_firstscore + '</td>' +
        '<td>' + result.player_score1 + '</td>' +
        '<td>' + result.player_score2 + '</td>' +
        '</tr>';
    $('#sampleTable1 tbody').append(row);
});
            // Show the sample table
            $('#sampleTable1').show();
        },
        error: function(xhr, status, error) {
            console.error('Error fetching results:', error);
        }
    });
}

// Fetch results on button click
$('#submitBtn1').on('click', function () {
    var category = $('#category1').val();
    fetchResults(category);
});

$('a[href="#score"]').on('click', function () {
    // Show score content
    $('#score-content').show();

    // Show table header
    $('#sampleTable1 thead').show();

    // Fetch results
    var category = $('#category1').val();
    fetchResults(category);
});

// Hide score content when navigating away from Score section
$('a:not([href="#score"])').on('click', function () {
    // Hide score content
    $('#score-content').hide();

    // Hide table header
    $('#sampleTable1 thead').hide();

    // Clear the table data
    $('#sampleTable1 tbody').empty();
});


        function generateEditForm(athlete) {
            var formHtml =
                '<form id="editForm">' +
                '<div class="form-group">' +
                '<label for="id">ID:</label>' +
                '<input type="text" class="form-control" id="id" readonly value="' + athlete.id + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="name">Name:</label>' +
                '<input type="text" class="form-control" id="name" value="' + athlete.name + '">' +
                '</div>' +

                '<div class="form-group">' +
                '<label for="dob">Date of Birth:</label>' +
                '<input type="date" class="form-control" id="dob" value="' + formatDate(athlete.dob) + '">' +
                '</div>' +

                '<div class="form-group">' +
                '<label for="gender">Gender:</label>' +
                '<input type="text" class="form-control" id="gender" value="' + athlete.gender + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="weight">Weight:</label>' +
                '<input type="text" class="form-control" id="weight" readonly value="' + athlete.weight + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="category">Category:</label>' +
                '<input type="text" class="form-control" id="category" readonly value="' + athlete.category + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="qualification">Qualification:</label>' +
                '<input type="text" class="form-control" id="qualification" value="' + athlete.qualification + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="mobile">Mobile Number:</label>' +
                '<input type="text" class="form-control" id="mobile" value="' + athlete.mobile + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="email">Email:</label>' +
                '<input type="text" class="form-control" id="email" value="' + athlete.email + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="address">Address:</label>' +
                '<input type="text" class="form-control" id="address" value="' + athlete.address + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="state">State:</label>' +
                '<input type="text" class="form-control" id="state" value="' + athlete.state + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="pincode">Pincode:</label>' +
                '<input type="text" class="form-control" id="pincode" value="' + athlete.pincode + '">' +
                '</div>' +
                '<input type="hidden" id="athleteId" name="id" value="' + athlete.id + '">' +
                '<div class="modal-footer">' +
                  '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>' +
                  '<button type="button" class="btn btn-primary" id="saveChangesBtn">Save changes</button>' +
                  '</div>'+
                '</form>';

            return formHtml;
        }

        function submitForm() {
    var formData = new FormData(document.getElementById('editForm'));


    formData.append('_token', '{{ csrf_token() }}');


    $.ajax({
        url: '{{ route('updateAthlete') }}',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {

            if (response.success) {
                alert('Athlete details updated successfully.');
            } else {
                alert('Failed to update athlete details.');
            }
            $('#editModal').modal('hide'); // Close the modal
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.error(xhr.responseText);
            alert('An error occurred while updating athlete details.');
        }
    });
}

// Event listener for form submission
$(document).on('click', '#saveChangesBtn', function(event) {
    event.preventDefault(); // Prevent default form submission
    submitForm(); // Call function to submit form via AJAX
});



        // Add click event listener for the "Edit" button in #sampleTable
        $('#sampleTable').on('click', 'a.btn-primary', function (e) {
            e.preventDefault(); // Prevent the default link behavior

            // Get the athlete details from the corresponding row
            var $row = $(this).closest('tr');
            var athleteId = $row.find('td:eq(0)').text().trim(); // Assuming the ID is in the first column
            var athleteName = $row.find('td:eq(1)').text().trim(); // Assuming the name is in the second column
            var athleteDob = $row.find('td:eq(2)').text().trim(); // Rearrange the parts in 'YYYY-MM-DD' format

            var athleteGender = $row.find('td:eq(3)').text().trim(); // Assuming the gender is in the fourth column
            var athleteWeight = $row.find('td:eq(4)').text().trim(); // Assuming the weight is in the fifth column
            var athleteCategory = $row.find('td:eq(5)').text().trim(); // Assuming the category is in the sixth column
            var athleteQualification = $row.find('td:eq(6)').text().trim(); // Assuming the qualification is in the seventh column
            var athleteMobile = $row.find('td:eq(7)').text().trim(); // Assuming the mobile number is in the eighth column
            var athleteEmail = $row.find('td:eq(8)').text().trim(); // Assuming the email is in the ninth column
            var athleteAddress = $row.find('td:eq(9)').text().trim(); // Assuming the address is in the tenth column
            var athleteState = $row.find('td:eq(10)').text().trim(); // Assuming the state is in the eleventh column
            var athletePincode = $row.find('td:eq(11)').text().trim(); // Assuming the pincode is in the twelfth column

            // Generate the edit form HTML
            var editFormHtml = generateEditForm({
                id: athleteId,
                name: athleteName,
                dob: athleteDob,
                gender: athleteGender,
                weight: athleteWeight,
                category: athleteCategory,
                qualification: athleteQualification,
                mobile: athleteMobile,
                email: athleteEmail,
                address: athleteAddress,
                state: athleteState,
                pincode: athletePincode
            });

            // Set the HTML of the edit form container
            $('#editFormContainer').html(editFormHtml);

            // Show the edit modal
            $('#editModal').modal('show');
        });

        function formatDate(dateString) {
            // Split the date and time parts
            var dateTimeParts = dateString.split(' ');
            // Extract the date part (YYYY-MM-DD)
            var datePart = dateTimeParts[0];
            return datePart;
        }

        // Add click event listener for the ".edit-btn"
        const editButtons = document.querySelectorAll('.edit-btn');

        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const athleteId = button.dataset.id;

                // Fetch athlete data from API
                fetch(`/api/athlete/${athleteId}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('API Response:', data);
            console.log('Date of Birth:', data.dob);

            // Check the format of the date string
            var dobParts = data.dob.split('/');
            console.log('Date Parts:', dobParts);
                        // Populate form fields with fetched data
                        document.getElementById('id').value = data.id;
                        document.getElementById('name').value = data.name;
                        //document.getElementById('dob').value = formatDate(data.dob);
                        document.getElementById('dob').value = formatDate(data.dob); // Set a static date
                        console.log('Formatted Date:', formatDate(data.dob));

                        document.getElementById('gender').value = data.gender;
                        document.getElementById('weight').value = data.weight;
                        document.getElementById('category').value = data.category;
                        document.getElementById('qualification').value = data.qualification;
                        document.getElementById('mobile').value = data.mobile;
                        document.getElementById('email').value = data.email;
                        document.getElementById('address').value = data.address;
                        document.getElementById('state').value = data.state;
                        document.getElementById('pincode').value = data.pincode;
                        document.getElementById('athleteId').value = data.id; // Hidden field
                    })
                    .catch(error => console.error('Error fetching data:', error));
            });
        });

/////////////////////  mailmessagesendPOPUP //////////////////////////////////

$(document).on('click', '.send-message-btn', function() {
    // Get the data from the corresponding row
    var position = $(this).closest('tr').find('td:nth-child(1)').text();
    var playerId = $(this).closest('tr').find('td:nth-child(2)').text();
    var name00 = $(this).closest('tr').find('td:nth-child(3)').text();

    var defaultMessage = "Congratulations " + name00 + " (" + playerId + "), you ";

    if (position === '1') {
        defaultMessage += "won the Gold medal";
    } else if (position === '2') {
        defaultMessage += "won the Silver medal";
    } else if (position === '3') {
        defaultMessage += "won the Bronze medal";
    } else {
        defaultMessage += "got the position " + position + ".";
    }

    defaultMessage += " Keep rocking the camp...";

    $.ajax({
        type: 'GET',
        url: '/admin/email',
        data: { playerId: playerId },
        success: function(response) {
            if (response.success && response.email) {
                $('#winneremail').val(response.email);
            } else {
                $('#winneremail').val('Error fetching email');
            }
        },
        error: function(xhr, status, error) {
            $('#winneremail').val('Error fetching email');
        },
        complete: function() {
            $('#messagesend').val(defaultMessage);
            $('#playerId').val(playerId);
            $('#position').val(position);
            $('#name00').val(name00);
            $('#sendMessageModal').modal('show');
        }
});


});

//////////////////////////////////////////////////////////////////////////////////
       $('#showWinnersBtn').click(function() {
            var category = $('#winnercategory').val();
            $.ajax({
                type: 'GET',
                url: '/winners/fetch',
                data: { category: category, _cache: new Date().getTime() },// Pass category as data
                success: function(response) {
                    console.log('Response:', response); // Check response in console for debugging
                    $('#winnerTableBody').empty();
                    $.each(response, function(index, winner) {
                        var row = '<tr>';

                            row += '<td>' + winner.position1 + '</td>';
                            row += '<td>' + winner.player_id11 + '</td>';
                            row += '<td>' + winner.name1 + '</td>';
                            /*row += '<td>' + winner.state1 + '</td>';
                            row += '<td>' + winner.email1 + '</td>';*/

                            row += '<td><button type="button" id="sm1"class="btn btn-warning send-message-btn"> Message1</button></td>';
                            row += '</tr>';

                            row += '<tr>';
                            row += '<td>' + winner.position2 + '</td>';
                            row += '<td>' + winner.player_id22 + '</td>';
                            row += '<td>' + winner.name2 + '</td>';
                            /* row += '<td>' + winner.state2 + '</td>';
                            row += '<td>' + winner.email2 + '</td>';*/

                            row += '<td><button type="button" id="sm2" class="btn btn-warning send-message-btn">Message2</button></td>';
                            row += '</tr>';

                            row += '<tr>';
                            row += '<td>' + winner.position3 + '</td>';
                            row += '<td>' + winner.player_id33 + '</td>';
                            row += '<td>' + winner.name3 + '</td>';
                             /*row += '<td>' + winner.state3 + '</td>';
                            row += '<td>' + winner.email3 + '</td>';*/

                            row += '<td><button type="button" id="sm3" class="btn btn-warning send-message-btn"> Message3</button></td>';
                            row += '</tr>';

                            row += '<tr>';
                            row += '<td>' + winner.position4 + '</td>';
                            row += '<td>' + winner.player_id44 + '</td>';
                            row += '<td>' + winner.name4 + '</td>';
                             /*row += '<td>' + winner.state4 + '</td>';
                            row += '<td>' + winner.email4 + '</td>';*/

                            row += '<td><button type="button" id="sm4" class="btn btn-warning send-message-btn"> Message4</button></td>';
                            row += '</tr>';


                        $('#winnerTableBody').append(row);
                    });
                    $('#winnerTable').removeClass('hidden');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

    function getRandomColor() {
        // Generating random values for RGB
        var r = Math.floor(Math.random() * 256);
        var g = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);
        // Returning the RGB color string
        return 'rgb(' + r + ',' + g + ',' + b + ')';
    }

    // Function to apply random color to the total number of records
    function applyRandomColor() {
        // Selecting the total records element by its id
        var totalRecords = document.getElementById('totalRecords');
        if (totalRecords) {
            // Generating a random color
            var randomColor = getRandomColor();
            // Applying the random color to the text color of the element
            totalRecords.style.color = randomColor;
        }
    }

    // Call the function when the page is loaded
    window.onload = function() {
        applyRandomColor();
    };



///////////////////////// Category &&& Gender///////////////////////

function fetchCategoryDataAndRenderChart() {
        $.ajax({
            url: '{{ route("fetch-data1") }}', // Replace with your route for category data
            type: 'GET',
            success: function(response) {
                console.log('Response:', response); // Log the response data
                var ctx = document.getElementById('chart').getContext('2d');
                var backgroundColors = response.data.map(() => generateRandomColor()); // Generate random colors
                var chart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: response.data.map(item => item.label),
                        datasets: [{
                            data: response.data.map(item => item.count),
                            backgroundColor: backgroundColors
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: false, // Hide legend
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        var label = context.label || '';
                                        if (label) {
                                            var index = context.dataIndex;
                                            var count = response.data[index].count;
                                            return label + ': ' + count;
                                        }
                                        return '';
                                    }
                                }
                            }
                        }
                    }
                });

                // Generate legend content for category chart
                var legendContent = '';
                response.data.forEach(function(item, index) {
                    var colorBox = '<span class="mr-2" style="display:inline-block;width:20px;height:10px;background-color:' + backgroundColors[index] + '"></span>';
                    legendContent += colorBox + item.label + ': ' + item.count + '<br>';
                });

                // Display legend content in the "categoryLegend" div
                document.getElementById('categoryLegend').innerHTML = legendContent;
            },
            error: function(xhr, status, error) {
                console.error('Error:', xhr.responseText); // Log the error message
            }
        });
    }

    // Function to fetch data and render gender chart
    function fetchGenderDataAndRenderChart() {
        $.ajax({
            url: '{{ route("fetch-data1") }}', // Replace with your route for gender data
            type: 'GET',
            success: function(response) {
                var ctx = document.getElementById('genderChart').getContext('2d');
                var genderCounts = @json($genderCounts);
                var labels = [];
                var data = [];
                var colors = [];

                genderCounts.forEach(function(item) {
                    labels.push(item.gender);
                    data.push(item.count);
                    // Generate random color for each bar
                    colors.push(getRandomColor());
                });

                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            data: data,
                            label: '', // Empty label to omit "Number of Records" from the legend
                            backgroundColor: colors,
                            borderColor: colors,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            legend: {
                                display: true,
                                position: 'bottom',
                                labels: {
                                    usePointStyle: true, // Use a point-style legend
                                    boxWidth: 10, // Width of the colored rectangles
                                    boxHeight: 10 // Height of the colored rectangles
                                }
                            }
                        }
                    }
                });

                // Generate legend content for gender chart
                var legendContent = '';
                genderCounts.forEach(function(item, index) {
                    var labelCountPair = '<span class="mr-2" style="display:inline-block;width:20px;height:10px;background-color:' + colors[index] + '"></span>' +
                                        item.gender + ': ' + item.count + ' ';
                    legendContent += labelCountPair;
                });

                // Display legend content in the "genderLegend" div
                document.getElementById('genderLegend').innerHTML = legendContent;
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    // Call the functions to fetch data and render charts when the page is loaded
    fetchCategoryDataAndRenderChart();
    fetchGenderDataAndRenderChart();

    // Function to generate random color
    function generateRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Function to generate random colors
    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

///////////
////
///
//
 // Define state counts data from PHP variable
 const stateCountsData = @json($stateCounts);

// Extract labels and counts from the state counts data
const labels = stateCountsData.map(item => item.state);
const counts = stateCountsData.map(item => item.count);

// Generate random colors for each bar
const backgroundColors = stateCountsData.map(() => {
    // Generate a random hexadecimal color code
    const randomColor = Math.floor(Math.random()*16777215).toString(16);
    // Convert hexadecimal color code to RGBA format with lower alpha value
    return `rgba(${parseInt(randomColor.slice(0,2),16)}, ${parseInt(randomColor.slice(2,4),16)}, ${parseInt(randomColor.slice(4,6),16)}, 0.8)`;
});

// Get the canvas element
const ctx = document.getElementById('stateChart').getContext('2d');

// Create the state histogram chart
const stateChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'State Counts',
            data: counts,
            backgroundColor: backgroundColors, // Use the generated random colors
            borderColor: 'rgba(54, 162, 235, 1)', // Adjust border color as needed
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        plugins: {
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    return context.dataset.data[context.dataIndex]; // Display the count value
                },
                color: 'black' // Adjust label color as needed
            }
        }
    }
});

// Display state data separately
const stateCountsDiv = document.getElementById('stateCounts');
stateCountsData.forEach(item => {
    const stateCountText = document.createTextNode(`${item.state}: ${item.count}  `);
    const stateCountElement = document.createElement('div');
    stateCountElement.appendChild(stateCountText);
    stateCountsDiv.appendChild(stateCountElement);
});


////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click', '.send-message-btn', function() {
    var position = $(this).closest('tr').find('td:nth-child(1)').text();
    var playerId = $(this).closest('tr').find('td:nth-child(2)').text();
    var name00 = $(this).closest('tr').find('td:nth-child(3)').text();
    var email = $('#winneremail').val(); // Retrieve winner's email from the input field
    var message = $('#messagesend').val(); // Retrieve message from the textarea

    $.ajax({
        type: 'POST',
        url: '/admin/send-message',
        data: {
            recipientEmail: email,
            message: message
        },
        success: function(response) {
            if (response.success) {
                alert('Message sent successfully!');
            } else {
                alert('Failed to send message.');
            }
        },
        error: function(xhr, status, error) {
            alert('Error sending message.');
        }
    });
});



$(document).on('click', '#sendMessageButton', function() {
    console.log('Send Message button clicked');

    $('.send-message-btn').trigger('click');
});



////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Define logout function
function logout() {
    // Ask for confirmation
    var confirmLogout = confirm("Are you sure you want to logout?");

    // If user confirms logout
    if (confirmLogout) {
        // Redirect to the admin login page
        window.location.href = "/admin/login"; // Update this URL with your login page URL
    } else {
        // If user cancels logout, do nothing
    }
}
















    </script>
</body>
</html>
