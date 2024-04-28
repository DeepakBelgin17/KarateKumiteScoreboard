<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ROUND 1 </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">

  <style>
    .mdb{

background-image: linear-gradient(rgb(141, 243, 175),rgb(141, 243, 175) );
}

h4{
  font-family: "Sofia", sans-serif;
}

h2{
  font-family: "Sofia", sans-serif;

}

/* Set border color to black and add some attractive styles */
.mur {
    border: 2px solid black; /* Set border color */
    border-radius: 5px; /* Add some border radius */
    padding: 10px; /* Add padding for better appearance */
    font-size: 16px; /* Adjust font size */
    color: #070707; /* Set text color */

}

/* Add hover effect */
.mur:hover {
    border-color: #555; /* Change border color on hover */
}





/* Add focus effect */
.mur:focus {
    border-color: #fbff00; /* Change border color on focus */
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Add box shadow on focus */
    outline: none; /* Remove default focus outline */
}

.btn-success {
    background-color: #1b742f; /* Green background color */
    color: #fff; /* White text color */
    border: none; /* No border */

    border-radius: 5px; /* Rounded corners */
    font-size: 16px; /* Font size */
    transition: background-color 0.3s ease; /* Smooth transition */
}

.btn-success:hover {
    background-color: #02ff39; /* Darker green on hover */
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

    <div class="container-fluid bg-success sticky-top">
        <center>
            <h2 style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-family: 'Arial', sans-serif; font-size: 36px; font-weight: bold; padding: 20px;">Round 1</h2>
        </center>
    </div>


 <div class="container-fluid mdb">


    <div class="row">

        <div class="col-4">

                </div>

        <div class="col-4">


            @if ($posts->isNotEmpty())


    <br><center> <input type="text" class="form-control mt-1 ran1 w-95 bet" style="width: 70%; height: 40px;" id="category" name="category" value="{{$posts[0]->category}}"></center>
    @else
    <p>No data found for the selected category.</p>
@endif
        </div>

        <div class="col-4">

                </div></div>



    <div class="row">

      <div class="col-1 mt-4">
      <h4 style="margin-left: 18px;">No</h4></div>

      <div class="col-2 mt-4">
      <h4 style="margin-left:45px">Player List</h4></div>

        <div class="col-2 mt-4">
          <h4 style="margin-left:53px">Score</h4></div>



          <div class="col-2 mt-4">
          <h4 style="margin-left:2px">Winner ID</h4></div>



              <div class="col-2 mt-4">
              <h4 style="margin-left:25px">Winner Name</h4></div>

              <div class="col-1 mt-4">
                <h4 style="margin-left:28px">Start</h4></div>

                <div class="col-2 mt-4">
                    <h4 style="margin-left:75px">Status</h4></div></div>


<form  method="post" action="/click" id="myForm">
  @csrf




      <div class="row mb-3">
        <div class="col-1 ">


            @if ($posts->isNotEmpty())
            <input type="text" class="form-control mt-3 w-75 " id="id1" placeholder="" value="{{$posts[0]->id}}">
            <input type="text" class="form-control mt-3 w-75  " id="id2" placeholder="" value="{{$posts[1]->id}}">
            <hr>
            <input type="text" class="form-control mt-3 w-75 " id="id3" placeholder="" value="{{$posts[2]->id}}">
            <input type="text" class="form-control mt-3 w-75  " id="id4" placeholder="" value="{{$posts[3]->id}}">
            <hr>
            <input type="text" class="form-control mt-3 w-75  " id="id5" placeholder="" value="{{$posts[4]->id}}">
            <input type="text" class="form-control mt-3 w-75  " id="id6" placeholder="" value="{{$posts[5]->id}}">
            <hr>
            <input type="text" class="form-control mt-3 w-75  " id="id7" placeholder="" value="{{$posts[6]->id}}">
            <input type="text" class="form-control mt-3 w-75  " id="id8" placeholder="" value="{{$posts[7]->id}}">
            @else
            <p>No data found for the selected category.</p>
        @endif


        </div>


        <div class="col-2">

            @if ($posts->isNotEmpty())
            <input type="text" class="form-control mt-3 w-80 " id="name1" placeholder="" name="athlete_name" value="{{$posts[0]->name}}">
            <input type="text" class="form-control mt-3 w-80 " id="name2" placeholder="" name="athlete_name" value="{{$posts[1]->name}}">
            <hr>
            <input type="text" class="form-control mt-3 w-80  " id="name3" placeholder="" name="athlete_name" value="{{$posts[2]->name}}">
            <input type="text" class="form-control mt-3 w-80 " id="name4" placeholder="" name="athlete_name" value="{{$posts[3]->name}}">
            <hr>
            <input type="text" class="form-control mt-3 w-80  " id="name5" placeholder="" name="athlete_name" value="{{$posts[4]->name}}">
            <input type="text" class="form-control mt-3 w-80 " id="name6" placeholder="" name="athlete_name" value="{{$posts[5]->name}}">
            <hr>
            <input type="text" class="form-control mt-3 w-80 " id="name7" placeholder="" name="athlete_name" value="{{$posts[6]->name}}" >
            <input type="text" class="form-control mt-3 w-80 " id="name8" placeholder="" name="athlete_name" value="{{$posts[7]->name}}">
            @else
    <p>No data found for the selected category.</p>
@endif
        </div>

        <div class="col-2">

            <input type="text" class="form-control mt-3 w-50 player_score1 mur" id=""  style="margin-left:30px">
            <input type="text" class="form-control mt-3 w-50 player_score2 mur" id=""  style="margin-left:30px">

            <hr>
            <input type="text" class="form-control mt-3 w-50 player_score1 mur" id=""   style="margin-left:30px" >
            <input type="text" class="form-control mt-3 w-50 player_score2 mur" id=""   style="margin-left:30px" >
            <hr>
            <input type="text" class="form-control mt-3 w-50 player_score1 mur" id=""  style="margin-left:30px" >
            <input type="text" class="form-control mt-3 w-50 player_score2 mur" id=""   style="margin-left:30px" >
            <hr>
            <input type="text" class="form-control mt-3 w-50 player_score1 mur" id=""  style="margin-left:30px" >
            <input type="text" class="form-control mt-3 w-50 player_score2 mur" id=""   style="margin-left:30px">


          </div>
        </form>

          <div class="col-2 mt-4  " id="">
            <form method="post" action="{{ route('round2name.store') }}" id="form2">
                @csrf
            <input type="text" class="form-control mt-3 w-50 mur " id="id11" name="id11"  style="margin-top: 90px;"  >

            <input type="text" class="form-control  w-50 mur" id="id22" name="id22"  style="margin-top: 90px;" >

            <input type="text" class="form-control  w-50 mur" id="id33" name="id33" style="margin-top: 85px;" >

            <input type="text" class="form-control  w-50 mur" id="id44" name="id44"  style="margin-top: 90px;" >

          </div>




        <div class="col-2 mt-4  " id="winnersCol">



                <input type="hidden" name="category" value="{{$posts[0]->category}}">

            <input type="text" class="form-control mt-3 w-80 mur" id="name11" style="margin-top: 90px;" name="name11" >

            <input type="text" class="form-control  w-80 mur" id="name22"  style="margin-top: 90px;" name="name22">

            <input type="text" class="form-control  w-80 mur" id="name33" style="margin-top: 85px;" name="name33">

            <input type="text" class="form-control  w-80 mur" id="name44"  style="margin-top: 90px;" name="name44">

          </div>

          <div class="col-1 " id="but" >


            <button type="button"  class="form-control btn-success w-80 fetchNamesButton ml-3"  placeholder="" style="margin-top: 40px;" data-start="1" onclick="location.href='/go1'" >START</button>
            <button type="button"  class="form-control btn-success w-80 fetchNamesButton ml-3"  placeholder="" style="margin-top: 90px;" data-start="2" onclick="location.href='/go2'"  >START</button>
            <button type="button"  class="form-control btn-success w-80 fetchNamesButton ml-3"  placeholder="" style="margin-top: 85px;" data-start="3" onclick="location.href='/go3'"  >START</button>
            <button type="button"  class="form-control btn-success w-80 fetchNamesButton ml-3"  placeholder="" style="margin-top: 90px;" data-start="4" onclick="location.href='/go4'">START</button>
          </div>



          <div class="col-2 ">


            <button type="button" class="form-control btn-dark w-75 viewScoreButton ml-5"  style="margin-top: 40px;" data-target="1" >VIEW SCORE1</button>
            <button type="button" class="form-control btn-dark w-75 viewScoreButton ml-5"  style="margin-top: 90px;" data-target="2" >VIEW SCORE2</button>
            <button type="button"  class="form-control btn-dark w-75 viewScoreButton ml-5"   style="margin-top: 85px;" data-target="3" >VIEW SCORE3</button>
            <button type="button"  class="form-control btn-dark w-75 viewScoreButton ml-5"   style="margin-top: 90px;" data-target="4" >VIEW SCORE4</button>
          </div>



          <div class="container">
            <div class="text-center">



              <button  type="submit" class="btn btn-primary" style="margin-top: 40px;">Next Round</button>


        </form>

             </div>
          </div>
      </div>
<br>
 </div> </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>


$(document).ready(function() {
    $('.viewScoreButton').click(function() {
        var targetId = $(this).data('target');
        var category;

        if (targetId === 1) {
            category = $('.ran1').eq(targetId - 1).val(); // Default behavior for targetId 1
        } else if (targetId === 2) {
            category = $('.ran1').eq(targetId - 2).val(); // Adjust index for targetId 2, 3, 4
        }
        else if (targetId === 3) {
            category = $('.ran1').eq(targetId - 3).val(); // Adjust index for targetId 2, 3, 4
        }
        else if (targetId === 4) {
            category = $('.ran1').eq(targetId - 4).val(); // Adjust index for targetId 2, 3, 4
        }

        $.ajax({
            url: '/retrieve-scores',
            type: 'GET',
            data: { category: category },
            success: function(response) {
                if (response && response.length > 0) {
                    response.forEach(function(score, index) {
                        if (index === targetId - 1) {
                            var targetScore1 = $('.player_score1').eq(index);
                            var targetScore2 = $('.player_score2').eq(index);
                            targetScore1.val(score.player_score1);
                            targetScore2.val(score.player_score2);

                            // Determine the highest score and corresponding player name
                            var highestScore;
                            var highestScoreName;
                            var winnerId;
                            var highestScoreTextbox;

                            if (score.player_score1 > score.player_score2) {
                                highestScore = score.player_score1;
                                highestScoreName = score.player_name1;
                                winnerId = score.player_id1;
                                highestScoreTextbox = targetScore1;
                            } else if (score.player_score1 < score.player_score2) {
                                highestScore = score.player_score2;
                                highestScoreName = score.player_name2;
                                winnerId = score.player_id2;
                                highestScoreTextbox = targetScore2;
                            } else {
                                // If scores are equal, check player1_firstscore and player2_firstscore
                                if (score.player1_firstscore === 1) {
                                    highestScoreName = score.player_name1;
                                    winnerId = score.player_id1;
                                    highestScoreTextbox = targetScore1;
                                } else if (score.player2_firstscore === 1) {
                                    highestScoreName = score.player_name2;
                                    winnerId = score.player_id2;
                                    highestScoreTextbox = targetScore2;
                                }
                                highestScore = score.player_score1; // Set highestScore to either player_score1 or player_score2
                            }

                            // Display the highest score and corresponding player name in the corresponding textboxes
                            $('#name' + targetId + (index + 1)).val(highestScoreName);

                            // Display the winner's ID in the corresponding textbox
                            $('#id' + targetId + targetId).val(winnerId);
                            applyBlinkingEffect(highestScoreTextbox);
                        }
                    });
                } else {
                    alert('No data found for this category.');
                }
            },
            error: function() {
                alert('Failed to retrieve score.');
            }
        });
    });
});
function applyBlinkingEffect(textbox) {
    textbox.addClass('blink');
}

// Function to stop blinking effect on all textboxes
function stopBlinkingEffect() {
    $('.player_score1, .player_score2').removeClass('blink');
}










</script>



<script src="{{ asset('js/name_fetch.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>
</html>
