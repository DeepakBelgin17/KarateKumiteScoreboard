<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Round 3</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">

  <style>
.bg{

background-image: linear-gradient(rgb(233, 160, 160),rgb(233, 160, 160) );
}


h4{
  font-family: "Sofia", sans-serif;
}
h2{
  font-family: "Sofia", sans-serif;

}

.ang {
    border: 2px solid black; /* Set border color */
    border-radius: 5px; /* Add some border radius */
    padding: 10px; /* Add padding for better appearance */
    font-size: 16px; /* Adjust font size */
    color: #070707; /* Set text color */

}

.bet{
color:red;
font-size:25px;
}

@keyframes blink {
    0% { border-color: transparent; }
    50% { border-color: red; }
    100% { border-color: transparent; }
}

.blink {
    animation: blink 1s infinite;
}




  </style>
</head>
<body>



    <div class="container-fluid bg-danger sticky-top">
        <center>
            <h2 style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-family: 'Arial', sans-serif; font-size: 36px; font-weight: bold; padding: 20px;">Round 3</h2>
        </center>
    </div>


 <div class="container-fluid bg">

    <div class="row">

        <div class="col-4">

                </div>

        <div class="col-4">

    <br><center> <input type="text" class="form-control ran1 mt-1 w-65 bet" style="width: 70%; height: 40px;" value="{{ $selectedCategory }}" id="category" name="category"></center>

</form>
</div>

        <div class="col-4">

                </div></div>

    <div class="row">
      <div class="col-1 mt-4">
      <h4 style="margin-left: 5px;">No</h4></div>

      <div class="col-2 mt-4">
      <h4 style="margin-left:50px">Player List</h4></div>

        <div class="col-2 mt-4">
          <h4 style="margin-left:55px">Score</h4></div>

          <div class="col-2 mt-4">
            <h4 style="margin-left:5px">Winner ID</h4></div>

          <div class="col-2 mt-4">
          <h4 style="margin-left:30px">Winners Name</h4></div>

          <div class="col-1 mt-4">
            <h4 style="margin-left:30px">Start</h4></div>

            <div class="col-2 mt-4">
                <h4 style="margin-left:90px">Status</h4></div>
            </div>


              <form  method="post" action="/click2" id="myForm">
                @csrf

      <div class="row mb-3">
        <div class="col-1 ">

            @if($twoSelectedNames->isNotEmpty())
            @foreach($twoSelectedNames as $twoSelectedName)

            <input type="text" class="form-control mt-3 w-60" id="id111" name="id111" placeholder=""value="{{ $twoSelectedName->player_id11 }}">
            <input type="text" class="form-control mt-3 w-65" id="id222" name="id222" placeholder=""value="{{ $twoSelectedName->player_id22 }}">
            @endforeach
            @endif


        </div>

        <div class="col-2">

            @if($twoSelectedNames->isNotEmpty())
            @foreach($twoSelectedNames as $twoSelectedName)

          <input type="text" class="form-control mt-3 w-80" id="name111" name="name111" value="{{ $twoSelectedName->selected_name11 }}">
          <input type="text" class="form-control mt-3 w-80" id="name222" name="name222" value="{{ $twoSelectedName->selected_name22 }}">
          @endforeach
          @endif


        </div>

        <div class="col-2">


          <input type="text" class="form-control mt-3 w-50 ang"  id="score1" placeholder=""  style="margin-left:30px">
          <input type="text" class="form-control mt-3 w-50 ang" id="score2" placeholder=""  style="margin-left:30px">



        </div>
    </form>


    <div class="col-2  mt-4">

        <form method="post" action="{{ route('round4name.store') }}" id="form4">

            @csrf
        <input type="text" class="form-control mt-3 w-50 ang" id="id1111" name="id1111" placeholder="">

      </div>

        <div class="col-2  mt-4">



                <input type="hidden" name="category" value="{{ $selectedCategory }}">

            <input type="text" class="form-control mt-3 w-90 ang" id="name1111" name="name1111" placeholder="">


          </div>


          <div class="col-1 ">

            <button type="button"  class="form-control btn-success w-80 fetchNamesButton ml-3"  placeholder="" style="margin-top: 40px;" data-start="1" onclick="location.href='/go111'" >START</button>
          </div>

          <div class="col-2 ">
            <button type="button" class="form-control btn-dark w-75 viewScoreButton ml-5"  style="margin-top: 40px;" data-target="1" >VIEW SCORE1</button>

          </div>

          <div class="container">
            <div class="text-center">


                <button type="button" onclick="saveData()" class="btn btn-primary ml-4" style="margin-top: 40px;">Final Save</button>

             </div>
          </div>
</form>

</div>
<br>

<center>
    <button type="button" class="btn btn-warning ml-4 mb-5" style="margin-top: 20px;" onclick="redirectToOverallScore()">Overall Score</button>

</center>

  </div> </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <script>

$(document).ready(function() {
    $('.viewScoreButton').click(function() {
        var targetId = $(this).data('target');
        var category;

        if (targetId === 1) {
            category = $('.ran1').eq(targetId - 1).val(); // Default behavior for targetId 1
        } else if (targetId === 2) {
            category = $('.ran1').eq(targetId - 2).val(); // Adjust index for targetId 2
        }

        $.get('/retrieve-scores2', { category: category })
            .done(function(response) {
                if (response && response.length > 0) {
                    response.forEach(function(score, index) {
                        if (index === targetId - 1) {
                            $('#score' + ((targetId - 1) * 2 + 1)).val(score.player_score1);
                            $('#score' + ((targetId - 1) * 2 + 2)).val(score.player_score2);

                            var highestScore;
                            var highestScoreName;
                            var winnerId;

                            if (score.player_score1 > score.player_score2) {
                                highestScore = score.player_score1;
                                highestScoreName = score.player_name1;
                                winnerId = score.player_id1;
                                applyBlinkingEffect($('#score' + ((targetId - 1) * 2 + 1)));
                            } else if (score.player_score1 < score.player_score2) {
                                highestScore = score.player_score2;
                                highestScoreName = score.player_name2;
                                winnerId = score.player_id2;
                                applyBlinkingEffect($('#score' + ((targetId - 1) * 2 + 2)));
                            } else {
                                if (score.player1_firstscore === 1) {
                                    highestScoreName = score.player_name1;
                                    winnerId = score.player_id1;
                                    applyBlinkingEffect($('#score' + ((targetId - 1) * 2 + 1)));
                                } else if (score.player2_firstscore === 1) {
                                    highestScoreName = score.player_name2;
                                    winnerId = score.player_id2;
                                    applyBlinkingEffect($('#score' + ((targetId - 1) * 2 + 2)));
                                }
                                highestScore = score.player_score1;
                            }

                            if (targetId === 1) {
                                $('#name1111').val(highestScoreName); // Updated selector to use name1111
                                $('#id1111').val(winnerId); // Set winner ID for button 1
                            } else if (targetId === 2) {
                                $('#name222').val(highestScoreName); // Updated selector to use name222
                                $('#id222').val(winnerId); // Set winner ID for button 2
                            }

                        }
                    });
                } else {
                    alert('No data found for this category.');
                }
            })
            .fail(function() {
                alert('Failed to retrieve score.');
            });
    });
});
// Function to apply blinking effect
function applyBlinkingEffect(textbox) {
    textbox.addClass('blink');
}


function saveData() {
    // Get form data
    var formData = $('#form4').serialize();

    // Send AJAX request to save data
    $.ajax({
        url: "{{ route('round4name.store') }}",
        type: "POST",
        data: formData,
        success: function(response) {
            // Handle success response
            alert('Data saved successfully!');
            // Optionally, you can update the page content or perform any other action here
        },
        error: function(xhr, status, error) {
            // Handle error response
            alert('Failed to save data. Please try again.');
        }
    });
}




function redirectToOverallScore() {
    var category = "{{ $selectedCategory }}"; // Get the selectedCategory value from the PHP variable
    var url = "{{ route('overall-score') }}?category=" + encodeURIComponent(category);
    window.location.href = url;
}



  </script>

  <script src="{{ asset('js/name_fetch2.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
