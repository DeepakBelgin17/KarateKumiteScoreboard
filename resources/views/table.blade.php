<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoreboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Define custom CSS for table body */

        .table-container {
            position: relative;
            z-index: 2; /* Set z-index higher than the canvas */
        }

        .table-container canvas {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1; /* Set z-index lower than the table */
        }
        #canvas {
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 0; /* Ensure canvas is at the bottom */
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f8f9fa; /* Light gray background for odd rows */
        }

        .table tbody tr:nth-child(even) {
            background-color: #e9ecef; /* Lighter gray background for even rows */
        }
        .table thead tr {
            text-align: center;
        }
        .table tbody tr td {
            text-align: center;
        }

        .abc {
            border-radius: 20px; /* Adjust the radius as needed */
            padding: 5px 10px; /* Adjust padding as needed */

            text-align: center;

        }

        .abc1 {
            border-radius: 20px; /* Adjust the radius as needed */
            padding: 5px 10px; /* Adjust padding as needed */

            text-align: center;

        }



    </style>
    </style>
</head>
<body>

    <center><button id="toggleButton" class="bg-danger">Pause/Resume</button></center>

    <form id="scoreboardForm" method="POST" action="{{ route('scoreboard.store') }}">
        @csrf

    <div class="container mt-5">
        <center> <h2>Scoreboard</h2></center>
        <center><input type="text" class="form-control ran1 mt-1 w-25 text-danger mt-3 abc1" id="category" name="category" value="{{ request()->query('category') }}"></center>


        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-warning ">

                <tr>
                    <th style="background-color:#f1260b; ">Position</th>
                    <th style="background-color:#1e60ec;">ID</th>

                    <th style="background-color: #3dc21b;">Name</th>
                   <!-- <th style="background-color: #ebe71c;">State</th>-->


                </tr>

            </thead>

            <tbody>
                <tr>
                    <td><input type="text" name="position1" class="abc w-50" value="1" readonly></td>
                    <td><input type="text" name="player_id11" class="w-50" value="{{ $highestScoringPlayer->player_id11 }}" readonly></td>
                    <td><input type="text" name="name1" value="{{ $highestScoringPlayer->selected_name11 }}" readonly></td>

                </tr>

                @if ($secondHighestScoringPlayer)
                <tr>
                    <td><input type="text" name="position2" class="abc w-50" value="2" readonly></td>
                    <td><input type="text" name="player_id22" class="w-50" value="{{ $secondHighestScoringPlayer->player_id11 == $highestScoringPlayer->player_id11 ? $secondHighestScoringPlayer->player_id22 : $secondHighestScoringPlayer->player_id11 }}" readonly></td>
                    <td><input type="text" name="name2" value="{{ $secondHighestScoringPlayer->player_id11 == $highestScoringPlayer->player_id11 ? $secondHighestScoringPlayer->selected_name22 : $secondHighestScoringPlayer->selected_name11 }}" readonly></td>

                </tr>
                @endif


<!--third position-->


@foreach ($thirdHighestScoringPlayers as $index => $player)
    @php
        $positionValue = $index + 3;
    @endphp

    @if (($player->player_id11 != $highestScoringPlayer->player_id11 && $player->player_id11 != $selectedID2) &&
        ($player->selected_name11 != $highestScoringPlayer->selected_name11 && $player->selected_name11 != $selectedName2))

        <tr>
            <td><input type="text" name="position3{{ $positionValue }}" class="abc w-50" value="{{ $positionValue }}" readonly></td>
            <td><input type="text" name="player_id33{{ $positionValue }}_{{ $positionValue }}" class="w-50" value="{{ $player->player_id11 }}" readonly></td>
            <td><input type="text" name="name3{{ $positionValue }}" value="{{ $player->selected_name11 }}" readonly></td>

           <input type="hidden" name="position3" class="abc w-50" value="{{ $positionValue }}" readonly>

           <input type="hidden" name="player_id33" class="w-50" value="{{ $player->player_id11 }}" readonly>

           <input type="hidden" name="name3" value="{{ $player->selected_name11 }}" readonly>


        </tr>
    @endif

    @if (($player->player_id22 != $highestScoringPlayer->player_id11 && $player->player_id22 != $selectedID2) &&
        ($player->selected_name22 != $highestScoringPlayer->selected_name11 && $player->selected_name22 != $selectedName2))

        <tr>
            <td><input type="text" name="position3{{ $positionValue }}" class="abc w-50" value="{{ $positionValue }}" readonly></td>
            <td><input type="text" name="player_id33{{ $positionValue }}_{{ $positionValue }}" class="w-50" value="{{ $player->player_id22 }}" readonly></td>
            <td><input type="text" name="name3{{ $positionValue }}" value="{{ $player->selected_name22 }}" readonly></td>

           <input type="hidden" name="position3" class="abc w-50" value="{{ $positionValue }}" readonly>
           <input type="hidden" name="player_id33" class="w-50" value="{{ $player->player_id22 }}" readonly>
           <input type="hidden" name="name3" value="{{ $player->selected_name22 }}" readonly>

        </tr>
    @endif

    @if (($player->player_id33 != $highestScoringPlayer->player_id11 && $player->player_id33 != $selectedID2) &&
        ($player->selected_name33 != $highestScoringPlayer->selected_name11 && $player->selected_name33 != $selectedName2))

        <tr>
            <td><input type="text" name="position4{{ $positionValue }}" class="abc w-50" value="{{ $positionValue }}" readonly></td>
            <td><input type="text" name="player_id44{{ $positionValue }}_{{ $positionValue }}" class="w-50" value="{{ $player->player_id33 }}" readonly></td>
            <td><input type="text" name="name4{{ $positionValue }}" value="{{ $player->selected_name33 }}" readonly></td>


            <input type="hidden" name="position4" class="abc w-50" value="{{ $positionValue }}" readonly>
            <input type="hidden" name="player_id44" class="w-50" value="{{ $player->player_id33 }}" readonly>
            <input type="hidden" name="name4" value="{{ $player->selected_name33 }}" readonly>
        </tr>
    @endif

    @if (($player->player_id44 != $highestScoringPlayer->player_id11 && $player->player_id44 != $selectedID2) &&
        ($player->selected_name44 != $highestScoringPlayer->selected_name11 && $player->selected_name44 != $selectedName2))

        <tr>
            <td><input type="text" name="position4{{ $positionValue }}" class="abc w-50" value="{{ $positionValue }}" readonly></td>
            <td><input type="text" name="player_id44{{ $positionValue }}_{{ $positionValue }}" class="w-50" value="{{ $player->player_id44 }}" readonly></td>
            <td><input type="text" name="name4{{ $positionValue }}" value="{{ $player->selected_name44 }}" readonly></td>



            <input type="hidden" name="position4" class="abc w-50" value="{{ $positionValue }}" readonly>
           <input type="hidden" name="player_id44" class="w-50" value="{{ $player->player_id44 }}" readonly>
            <input type="hidden" name="name4" value="{{ $player->selected_name44 }}" readonly>



        </tr>
    @endif
@endforeach

            </tbody>


        </table>
    </div>
    <div>
        <center>
            <button type="submit" class="btn btn-primary">Submit</button>
        </center>

    </div>
    </form>
    <canvas id="canvas"></canvas>

<div>
    <center>
        <button type="submit" class="btn btn-danger mt-3 " onclick="location.href='/start'" >EXIT</button>
    </center>
</div>



    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Custom JavaScript -->
    <script>


// Wait for the document to load
document.addEventListener('DOMContentLoaded', function() {
    // Get the form element
    const form = document.getElementById('scoreboardForm');

    // Attach an event listener for form submission
    form.addEventListener('submit', function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Submit the form via AJAX
        fetch(form.action, {
            method: form.method,
            body: new FormData(form)
        })
        .then(response => response.json())
        .then(data => {
            // Check if response indicates success
            if (data.success) {
                // Show success message
                alert(data.message);
            } else {
                // Show error message
                alert(data.message);
            }
        })
        .catch(error => {
            // Show error message
            alert('An unexpected error occurred. Please try again later.');
            console.error('Error:', error);
        });
    });
});






        let W = window.innerWidth;
  let H = window.innerHeight;
  const canvas = document.getElementById("canvas");
  const context = canvas.getContext("2d");
  const maxConfettis = 150;
  const confettiParticles = [];
  const maxFirecrackers = 10;
  const firecrackerParticles = [];
  let animationPaused = false;

  const possibleColors = [
    "DodgerBlue",
    "OliveDrab",
    "Gold",
    "Pink",
    "SlateBlue",
    "LightBlue",
    "Gold",
    "Violet",
    "PaleGreen",
    "SteelBlue",
    "SandyBrown",
    "Chocolate",
    "Crimson"
  ];

  function randomFromTo(from, to) {
    return Math.floor(Math.random() * (to - from + 1) + from);
  }

  function confettiParticle() {
    this.x = Math.random() * W; // x
    this.y = Math.random() * H - H; // y
    this.r = randomFromTo(11, 33); // radius
    this.d = Math.random() * maxConfettis + 11;
    this.color =
      possibleColors[Math.floor(Math.random() * possibleColors.length)];
    this.tilt = Math.floor(Math.random() * 33) - 11;
    this.tiltAngleIncremental = Math.random() * 0.07 + 0.05;
    this.tiltAngle = 0;

    this.draw = function() {
      context.beginPath();
      context.lineWidth = this.r / 2;
      context.strokeStyle = this.color;
      context.moveTo(this.x + this.tilt + this.r / 3, this.y);
      context.lineTo(this.x + this.tilt, this.y + this.tilt + this.r / 5);
      return context.stroke();
    };
  }

  function firecrackerParticle() {
    this.x = Math.random() * W; // x
    this.y = H; // y
    this.length = randomFromTo(30, 50); // length
    this.color = "#ff0000";

    this.draw = function() {
      context.beginPath();
      context.lineWidth = 2;
      context.strokeStyle = this.color;
      context.moveTo(this.x, this.y);
      context.lineTo(this.x, this.y - this.length);
      return context.stroke();
    };
  }

  function Draw() {
    if (!animationPaused) {
      const results = [];

      // Magical recursive functional love
      requestAnimationFrame(Draw);

      context.clearRect(0, 0, W, window.innerHeight);

      for (var i = 0; i < maxConfettis; i++) {
        results.push(confettiParticles[i].draw());
      }

      for (var i = 0; i < maxFirecrackers; i++) {
        results.push(firecrackerParticles[i].draw());
      }

      let particle = {};
      let remainingFlakes = 0;
      for (var i = 0; i < maxConfettis; i++) {
        particle = confettiParticles[i];

        particle.tiltAngle += particle.tiltAngleIncremental;
        particle.y += (Math.cos(particle.d) + 3 + particle.r / 2) / 2;
        particle.tilt = Math.sin(particle.tiltAngle - i / 3) * 15;

        if (particle.y <= H) remainingFlakes++;

        // If a confetti has fluttered out of view,
        // bring it back to above the viewport and let if re-fall.
        if (particle.x > W + 30 || particle.x < -30 || particle.y > H) {
          particle.x = Math.random() * W;
          particle.y = -30;
          particle.tilt = Math.floor(Math.random() * 10) - 20;
        }
      }

      for (var i = 0; i < maxFirecrackers; i++) {
        particle = firecrackerParticles[i];
        particle.y -= Math.random() * 10; // Move firecrackers upward

        // If a firecracker has fluttered out of view,
        // bring it back to the bottom and reset its length.
        if (particle.y < -particle.length) {
          particle.y = H;
          particle.length = randomFromTo(30, 50);
        }
      }

      return results;
    }
  }

  window.addEventListener(
    "resize",
    function() {
      W = window.innerWidth;
      H = window.innerHeight;
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    },
    false
  );

  // Push new confetti objects to `particles[]`
  for (var i = 0; i < maxConfettis; i++) {
    confettiParticles.push(new confettiParticle());
  }

  // Push new firecracker objects to `particles[]`
  for (var i = 0; i < maxFirecrackers; i++) {
    firecrackerParticles.push(new firecrackerParticle());
  }

  // Initialize
  canvas.width = W;
  canvas.height = H;
  Draw();

  const toggleButton = document.getElementById("toggleButton");
  toggleButton.addEventListener("click", function() {
    animationPaused = !animationPaused;
    if (!animationPaused) {
      Draw();
      toggleButton.innerText = "Pause";
    } else {
      toggleButton.innerText = "Resume";
    }
  });



    </script>

</body>
</html>
