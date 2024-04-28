
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Scoreboard 3333</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="{{ asset('js/script.js') }}"></script>

    <style>
        .red {
            color: red;
        }

        .custom-checkbox {
    width: 30px;
    height: 30px;
    position: relative;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: none;
    cursor: pointer;
    border: 2px solid #ffd900;
    border-radius: 5px;
    transition: background-color 0.3s, border-color 0.3s;
  }

  .custom-checkbox:checked::before {
    content: '\2714';
    font-size: 24px;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .custom-checkbox:checked {
    background-color: #007bff;
    border-color: #007bff;
  }



  .custom-checkbox1 {
    width: 30px;
    height: 30px;
    position: relative;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: none;
    cursor: pointer;
    border: 2px solid #ffd900;
    border-radius: 5px;
    transition: background-color 0.3s, border-color 0.3s;
  }

  .custom-checkbox1:checked::before {
    content: '\2714';
    font-size: 24px;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .custom-checkbox1:checked {
    background-color: #ff0000;
    border-color: #ff0000;
  }


    </style>
</head>
<body>

    <div class="container-fluid bg-danger sticky-top">

<div class="lov text-center">
  <center><h2 style="color:black;" class="text-center font-effect-fire mt-4 mb-4 kal1 ">Scoreboard</h2></center>




  <button type="button" class="btn btn-warning toki" data-toggle="modal" data-target="#rightSlideModal">
  Time Setting
</button>
</div>
</div>

<!--<div class="modal fade right " id="rightSlideModal" tabindex="-1" role="dialog" aria-labelledby="rightSlideModalLabel" aria-hidden="true">
  <div class="modal-dialog q" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rightSlideModalLabel" style="color:darkmagenta">SCORE SETTING</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">


          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
         Your webpage content goes here


       <div class="text-center mt-3">
        <h4>Extra Time</h4>


      </div>

      <div class="text-center">
        <button class="btn btn-success mt-3 ">Final Match Timing</button><br>




        <button class="btn btn-danger mt-3close ali" data-dismiss="modal" aria-label="Close">Close </button><br>

      </div>


      </div>
    </div>
  </div>
</div>

</div>
</div>-->

<div class="modal fade" id="rightSlideModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-slideout" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Time Setting</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <label for="additionalTime">Extra Time</label>
            <select id="additionalTime" class="form-control">
              <option value="0">0:00</option>
              <option value="30">0:30</option>
              <option value="60">1:00</option>
              <option value="90">1:30</option>
              <option value="120">2:00</option>
              <option value="150">2:30</option>
              <option value="-30">-0:30</option>
              <option value="-60">-1:00</option>
              <option value="-90">-1:30</option>
              <option value="-120">-2:00</option>
              <option value="-150">-2:30</option>
              <!-- Add more options as needed -->
            </select>
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="updateMatchTime()">Save changes</button>
        </div>
      </div>
    </div>
  </div>


 <div class="container-fluid mt-2 mb-4 ">

  <div class="row">
    <div class="col-5 er bac">
        <center><h1 style="color:blue;">AO</h1></center>


<form method="POST" action="submit-form2" >

<input type="hidden" name="_token" value="<?php echo csrf_token();?>">

<input type="text" id="id1" class="w-5 h-15 align-items-center ran" style="margin-left:170px" name="id1" value="{{ request()->query('id1') }}">

        <input type="text" class="w-5 h-15 align-items-center ran" style="margin-left:170px" name="player_name1" id="names1" value="{{ request()->query('name1') }}">


            <div class="text-center">
             <input type="button" value="IPPON" class="mt-4 abc" onclick="addValue1(3)" ><br>
             <input type="button" value="WAZARI"  class="mt-4 abc" onclick="addValue1(2)"><br>
             <input type="button" value="YOKU"  class="mt-4 abc" onclick="addValue1(1)"><br>
            </div>

            <div class="text-center">

              <input type="button" value="-1"  class="mt-5 def" onclick="subtractOne()"><br>
             </div>

             <div class="text-center">
                <input type="checkbox" id="checkbox1" name="player1_firstscore" class="custom-checkbox">Senshu

          <input type="text" class="mt-5 jkl" style="width: 100px; height: 100px; font-size: 50px; text-align: center; " id="blue" name="player_score1" value="0"><br>


             </div>

          <div>
             <table class="table mt-5">
              <thead>
                <tr>
                  <th>C</th>
                  <th>K</th>
                  <th>HC</th>
                  <th>H</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <input type="checkbox" class="btn-check c1" id="btncheck1" name="checkbox_values1[]" value="C"></td>
                  <td><input type="checkbox" class="btn-check c2" id="btncheck1" name="checkbox_values1[]" value="K" ></td>
                  <td><input type="checkbox" class="btn-check c3" id="btncheck1"  name="checkbox_values1[]" value="HC"></td>
                  <td><input type="checkbox" class="btn-check c4" id="btncheck1" name="checkbox_values1[]" value="H" ></td>
                </tr>
                <tr>
                  <td> <input type="checkbox" class="btn-check c5" id="btncheck1" name="checkbox_values1[]" value="C" ></td>
                  <td><input type="checkbox" class="btn-check c6" id="btncheck1" name="checkbox_values1[]" value="K" ></td>
                  <td><input type="checkbox" class="btn-check c7" id="btncheck1" name="checkbox_values1[]" value="HC" ></td>
                  <td><input type="checkbox" class="btn-check c8" id="btncheck1" name="checkbox_values1[]" value="H" ></td>
                </tr>

              </tbody>
            </table>
</div>
    </div>

    <div class="col-2 er bac1 ">
      <center><u><h1 style="color:rgb(10, 10, 10);">Timer</h1></center></u>
      <input type="text" class="w-5 h-15 align-items-center ran" style="margin-left:5px"  name="category" id="category" value="{{ request()->query('category') }}">


      <div class="text-center">

      <input type="button" id="toggleButton" onclick="toggleTimer()" class="custom-btn-width custom-btn-height mt-4 bel" value="HAJIME">

          <div id="timerDisplay" style="font-weight: bold; font-size: 70px;"></div>
      </div>

      <div class="text-center">

        <input type="submit" value="Submit Score" class="mt-5 prof" id="submitButton"><br>

<p style="color:rgb(12, 12, 12); margin-top:230px" class="ber">Category 1</p>
<p style="color:rgb(8, 8, 8); margin-top:20px" class="ber">Category 2</p>
 </div>
  </div>

    <div class="col-5 er bac2">
        <center><h1 style="color:red">AKA</h1></center>


        <input type="text" id="id2" class="w-5 h-15 align-items-center ran" style="margin-left:170px" name="id2" value="{{ request()->query('id2') }}">

        <input type="text" name="player_name2" id="names2" class="w-5 h-15 align-items-center ran" style="margin-left:170px" value="{{ request()->query('name2') }}" >


        <div class="text-center">
          <input type="button" value="IPPON" class="mt-4 abc1"  onclick="addValue(3)"><br>
          <input type="button" value="WAZARI"  class="mt-4 abc1"  onclick="addValue(2)"><br>
          <input type="button" value="YOKU"  class="mt-4 abc1" onclick="addValue(1)"><br>
         </div>

         <div class="text-center">

           <input type="button" value="-1"  class="mt-5 def" onclick="subtractOne1()"><br>
          </div>

          <div class="text-center">
            <input type="checkbox" id="checkbox2" name="player2_firstscore" class="custom-checkbox1">Senshu



            <input type="text" class="mt-5 jkl1" style="width: 100px; height: 100px; font-size: 50px; text-align: center;" id="red" name="player_score2" value="0"><br>


           </div>
       <div>
          <table class="table mt-5">
           <thead>
             <tr>
               <th>C</th>
               <th>K</th>
               <th>HC</th>
               <th>H</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td> <input type="checkbox" class="btn-check c9" id="btncheck9" name="checkbox_values2[]" value="C"></td>
               <td><input type="checkbox" class="btn-check c10" id="btncheck1" name="checkbox_values2[]" value="K"></td>
               <td><input type="checkbox" class="btn-check c11" id="btncheck1" name="checkbox_values2[]" value="HC"></td>
               <td><input type="checkbox" class="btn-check c12" id="btncheck1" name="checkbox_values2[]" value="H"></td>
             </tr>
             <tr>
               <td> <input type="checkbox" class="btn-check c13" id="btncheck1" name="checkbox_values2[]" value="C"></td>
               <td><input type="checkbox" class="btn-check c14" id="btncheck1" name="checkbox_values2[]" value="K"></td>
               <td><input type="checkbox" class="btn-check c15" id="btncheck1" name="checkbox_values2[]" value="HC"></td>
               <td><input type="checkbox" class="btn-check c16" id="btncheck1" name="checkbox_values2[]" value="H"></td>
             </tr>

           </tbody>
         </table>
</div>
 </div>

       </div>
    </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>

let timerInterval;
let totalSeconds = 90; // 1 minute and 30 seconds
let isTimerRunning = false;

const timerDisplay = document.getElementById('timerDisplay');
const toggleButton = document.getElementById('toggleButton');

document.addEventListener('DOMContentLoaded', function () {
    // Set initial timer display to default time (1:30)
    timerDisplay.innerText = '01:30';
});

function toggleTimer() {
    if (isTimerRunning) {
        stopTimer();
    } else {
        startTimer();
    }
}

function startTimer() {
    isTimerRunning = true;

    toggleButton.value = 'YAME';

    toggleButton.style.backgroundColor = '#FF0000'; // Red color for "Stop"
    timerInterval = setInterval(updateTimer, 1000);
}

function stopTimer() {
    isTimerRunning = false;

    toggleButton.value = 'HAJIME';
    toggleButton.style.backgroundColor = '#4CAF50'; // Green color for "Start"
    clearInterval(timerInterval);
}

function updateTimer() {
    if (totalSeconds <= 0) {
        stopTimer();
        totalSeconds = 0; // Ensure it doesn't go below 0
        timerDisplay.innerText = 'Match Over';
        timerDisplay.classList.add('red');
    } else {
        totalSeconds--;
        const minutes = Math.floor(totalSeconds / 60);
        const seconds = totalSeconds % 60;
        const formattedTime = formatTime(minutes) + ':' + formatTime(seconds);
        timerDisplay.innerText = formattedTime;
    }
}

function formatTime(time) {
    return time < 10 ? '0' + time : time;
}

/////////////////
function disableSubmitButton() {
    document.getElementById("submitButton").disabled = true;
}

////////////////

// Function to update match time based on admin setting
function updateMatchTime() {
    const additionalTimeSeconds = parseInt(document.getElementById('additionalTime').value);
    const currentMinutes = Math.floor(totalSeconds / 60);
    const currentSeconds = totalSeconds % 60;

    // Convert the additional time to seconds
    const additionalMinutes = Math.floor(additionalTimeSeconds / 60);
    const additionalSeconds = additionalTimeSeconds % 60;

    // Calculate the new total time in seconds
    let newTotalSeconds = totalSeconds + additionalTimeSeconds;

    // Ensure total time doesn't go below 0
    if (newTotalSeconds < 0) {
        newTotalSeconds = 0;
    }

    // Update the total seconds with the new value
    totalSeconds = newTotalSeconds;

    // Update timer display
    const newMinutes = Math.floor(newTotalSeconds / 60);
    const newSeconds = newTotalSeconds % 60;
    const formattedTime = formatTime(newMinutes) + ':' + formatTime(newSeconds);
    timerDisplay.innerText = formattedTime;
}

  </script>


</body>
</html>
