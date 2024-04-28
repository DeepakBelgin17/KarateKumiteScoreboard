<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Round 2</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">

  <style>
 .bg{

background-image: linear-gradient(rgb(163, 195, 238),rgb(163, 195, 238) );
}


h4{
  font-family: "Sofia", sans-serif;
}
h2{
  font-family: "Sofia", sans-serif;

}

.mur {
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


    <div class="container-fluid bg-primary sticky-top">
        <center>
            <h2 style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-family: 'Arial', sans-serif; font-size: 36px; font-weight: bold; padding: 20px;">Round 2</h2>
        </center>
    </div>



 <div class="container-fluid bg">

    <div class="row">

        <div class="col-4">

                </div>

        <div class="col-4">



    <br><center> <input type="text" id="category" name="category" class="form-control ran1 mt-1 w-65 bet" style="width: 70%; height: 40px;" value="{{ $selectedCategory }}"></center>


</div>

        <div class="col-4">

                </div></div>


    <div class="row">
      <div class="col-1 mt-4">
      <h4 style="margin-left: 20px;">No</h4></div>

      <div class="col-2 mt-4">
      <h4 style="margin-left:45px">Player List</h4></div>

        <div class="col-2 mt-4">
          <h4 style="margin-left:50px">Score</h4></div>



          <div class="col-2 mt-4">
          <h4 style="margin-left:20px">Winner ID</h4></div>

          <div class="col-2 mt-4">
            <h4 style="margin-left:15px">Winners Name</h4></div>

            <div class="col-1 mt-4">
                <h4 style="margin-left:40px">Start</h4></div>



              <div class="col-2 mt-4">
              <h4 style="margin-left:85px">Status</h4></div></div>






              <form  method="post" action="/click1" id="myForm">
                @csrf

      <div class="row mb-3">
        <div class="col-1 ">
            @if($selectedNames->isNotEmpty())
            @foreach($selectedNames as $selectedName)

            <input type="text" class="form-control mt-3 w-75" id="id11" placeholder="" value="{{ $selectedName->player_id11 }}">
            <input type="text" class="form-control mt-3 w-75" id="id22" placeholder="" value="{{ $selectedName->player_id22 }}">
            <input type="text" class="form-control mt-3 w-75" id="id33" placeholder="" value="{{ $selectedName->player_id33 }}">
            <input type="text" class="form-control mt-3 w-75" id="id44" placeholder="" value="{{ $selectedName->player_id44 }}">



            @endforeach
            @endif

        </div>

        <div class="col-2">

            @if($selectedNames->isNotEmpty())
            @foreach($selectedNames as $selectedName)

          <input type="text" class="form-control mt-3 w-80 " id="name11" value="{{ $selectedName->selected_name11 }}">
          <input type="text" class="form-control mt-3 w-80" id="name22" value="{{ $selectedName->selected_name22 }}">
          <input type="text" class="form-control mt-3 w-80" id="name33" value="{{ $selectedName->selected_name33 }}">
          <input type="text" class="form-control mt-3 w-80" id="name44" value="{{ $selectedName->selected_name44 }}">

          @endforeach
@endif
        </div>

        <div class="col-2">

          <input type="text" class="form-control mt-3 w-50 mur" id="score1" placeholder=""  style="margin-left:30px">
          <input type="text" class="form-control mt-3 w-50 mur" id="score2" placeholder=""  style="margin-left:30px">
          <input type="text" class="form-control mt-3 w-50 mur" id="score3" placeholder=""  style="margin-left:30px">
          <input type="text" class="form-control mt-3 w-50 mur" id="score4" placeholder=""  style="margin-left:30px">


        </div>

    </form>

    <div class="col-2  mt-4">

        <form method="post" action="{{ route('round3name.store') }}" id="form3">
            @csrf

        <input type="text" class="form-control mt-3 w-75 mur" id="id111" placeholder="" name="id111">

        <input type="text" class="form-control  w-75 mur" id="id222" name="id222" placeholder="" style="margin-top: 80px;">

      </div>


        <div class="col-2  mt-4">



                <input type="hidden" name="category" value="{{ $selectedCategory }}">
            <input type="text" class="form-control mt-3 w-80 mur" id="name111" placeholder="" name="name111">

            <input type="text" class="form-control  w-80 mur" id="name222" name="name222" placeholder="" style="margin-top: 80px;">



          </div>

          <div class="col-1 ">

            <button type="button"  class="form-control btn-success w-80 fetchNamesButton ml-4"  placeholder="" style="margin-top: 40px;" data-start="1" onclick="location.href='/go11'" >START</button>
            <button type="button"  class="form-control btn-success w-80 fetchNamesButton ml-4"  placeholder="" style="margin-top: 80px;" data-start="2" onclick="location.href='/go22'"  >START</button>



          </div>

          <div class="col-2 ">
            <button type="button" class="form-control btn-dark w-75 viewScoreButton ml-5"  style="margin-top: 40px;" data-target="1" >VIEW SCORE1</button>
            <button type="button" class="form-control btn-dark w-75 viewScoreButton ml-5"  style="margin-top: 80px;" data-target="2" >VIEW SCORE2</button>
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
            category = $('.ran1').eq(targetId - 2).val(); // Adjust index for targetId 2
        }

        $.get('/retrieve-scores1', { category: category })
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
                                $('#name111').val(highestScoreName); // Updated selector to use name111
                                $('#id111').val(winnerId); // Set winner ID for button 1
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






</script>

  <script src="{{ asset('js/name_fetch1.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>
