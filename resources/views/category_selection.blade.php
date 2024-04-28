<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category Selection</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <!-- Include Bootstrap CSS (if not already included) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


  <style>
    body, html {
      height: 100%;
      margin: 0;
    }

    .full-screen-image {
      background-image: url('images/dum.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;

      .border{
        border-radius: 30px;

      }
      }

/* Define the glow effect */
@keyframes glow {
    0% { box-shadow: 0 0 0px rgb(81, 250, 81); }
    50% { box-shadow: 0 0 10px 5px rgb(96, 248, 96); }
    100% { box-shadow: 0 0 0px rgb(78, 243, 78); }
}

/* Apply the glow effect on hover */
.glow-on-hover:hover {
    animation: glow 2s infinite;
}

h2 {
    font-family: 'Arial', sans-serif; /* Use Arial font as the primary font */
    font-weight: bold; /* Make the text bold */
    font-size: 30px; /* Adjust the font size as needed */
    color: yellow;
}


  </style>
</head>
<body>


    <div class="container-fluid bg-light">
        <div class="full-screen-image">
            <div class="container bg-dark w-50 h-45 border">
                <center><h2  class="mt-3">Match Category List</h2></center>

                <form id="myForm" method="get">

                    <div class="row mb-3">
                      <label for="weight" class="col-sm-2 col-form-label mt-3 ml-3">Category</label>
                      <div class="col mt-3" id="athleteList">
                      <select class="form-control " id="myDropdown" placeholder="Select Category">
                        <option value="" disabled selected>Select Category</option>
                        <option >Male - Under 45-50</option>
                        <option >Male - Under 51-55</option>
                        <option>Male - Under 56-60</option>
                        <option >Male - Under 61-65</option>
                        <option >Male - Under 66-70</option>

                        <option value="" disabled>_______________________</option>
                        <option >Female - Under 45-50</option>
                        <option >Female - Under 51-55</option>
                        <option >Female - Under 56-60</option>
                        <option >Female - Under 61-65</option>
                        <option >Female - Under 66-70</option>

                        <option value="" disabled>_______________________</option>
                        <option >Transgender - Under 45-50</option>
                        <option >Transgender - Under 51-55</option>
                        <option>Transgender - Under 56-60</option>
                        <option >Transgender - Under 61-65</option>
                        <option >Transgender - Under 66-70</option>



                        </select>
                    </div>
                    </div>
                    <br>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="submit" id="okButton" class="btn btn-success rounded-5 glow-on-hover mb-2">Start the Match</button>


                            </div>

                        </form>

            </div>

    </div>
      </div>

      <script>



$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault();
        var selectedValue = $("#myDropdown").val();

        // Determine the category based on the selected value
        var category = getCategory(selectedValue);

        // Redirect to the corresponding route
        if (category) {
            window.location.href = '/round_' + category + '/' + selectedValue;


        }
    });

    // Function to determine the category based on the selected value
    function getCategory(selectedValue)
    {
        if (selectedValue.includes('Male - Under'))
        {
            if (selectedValue.includes('45-50')) {
                return 'm45_50';
            } else if (selectedValue.includes('51-55')) {
                return 'm51_55';
            } else if (selectedValue.includes('56-60')) {
                return 'm56_60';
            } else if (selectedValue.includes('61-65')) {
                return 'm61_65';
            } else if (selectedValue.includes('66-70')) {
                return 'm66_70';
            }
        }
         else if (selectedValue.includes('Female - Under'))
         {
            if (selectedValue.includes('45-50')) {
                return 'f45_50';
            } else if (selectedValue.includes('51-55')) {
                return 'f51_55';
            } else if (selectedValue.includes('56-60')) {
                return 'f56_60';
            } else if (selectedValue.includes('61-65')) {
                return 'f61_65';
            } else if (selectedValue.includes('66-70')) {
                return 'f66_70';
            }
        }
        else if (selectedValue.includes('Transgender - Under'))
         {
            if (selectedValue.includes('45-50')) {
                return 'o45_50';
            } else if (selectedValue.includes('51-55')) {
                return 'o51_55';
            } else if (selectedValue.includes('56-60')) {
                return 'o56_60';
            } else if (selectedValue.includes('61-65')) {
                return 'o61_65';
            } else if (selectedValue.includes('66-70')) {
                return 'o66_70';
            }
        }
        return ''; // Default category if no match is found
    }
});







    </script>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
