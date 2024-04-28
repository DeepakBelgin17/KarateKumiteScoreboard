<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kumite Scoreboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
  <style>
    /* Custom CSS styles */
    body {
      background-image: url('images/home.jpg');
      background-size: cover;
      color: white;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-position: center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;

    }
    .content {
      text-align: center;
      margin-top: 100px; /* adjust as needed */
    }
    .btn-lg {
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.1);
      }
      100% {
        transform: scale(1);
      }
    }
    .modal-body h5 {
      color: rgb(5, 5, 5); /* Change text color to blue */
    }
.tul{
color:red;
}
.and{
color:black;
}

.btn-success:hover {
      background-image: linear-gradient(to right, #007bff, #f8041d); /* Red to blue gradient */
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="content">


      <a href="{{ url('/category_selection') }}" class="btn btn-success btn-lg mt-5 ml-3 px-5 py-3 " style="font-size: 20px;">Let's Go</a><br>

      <!--<button class="btn btn-success btn-lg ml-3 px-5 py-3">Let's Go</button><br>-->
      <button class="btn bg-warning mt-4 ml-2 rounded-circle" data-toggle="modal" style="width: 50px; height: 50px;" data-target="#rulesModal"><i class="fas fa-info-circle"></i></button>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="rulesModal" tabindex="-1" role="dialog" aria-labelledby="rulesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title tul" id="rulesModalLabel">Tournament Rules & Regulations</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Tournament rules and regulations -->
          <p class="and">1. Kumite matches occur on an 8m x 8m matted square with a 1m safety area around the edges.</p>
          <p class="and">2. Competitors exchange bows once the referee and judges are in place.</p>
          <p class="and">3. The fight begins when the referee shouts “SHOBU HAJIME!”</p>
          <p class="and">4. Fighters attempt scoring techniques (punches, kicks, throws), classified as Yuko (1 point), Waza-ari (2 points), and Ippon (3 points).</p>
          <p class="and"> 5. If a scoring technique is suspected, the referee calls "YAME" and resumes after judgment.</p>
          <p class="and"> 6. Judges signal their opinion, and the referee awards points accordingly, restarting with “TSUZUKETE HAJIME!”</p>
          <p class="and"> 7. Otherwise, the fighter with the most points wins, or referees decide in case of a tie.</p>
          <p class="and"> 8. Matches can end early if a competitor is knocked down or disqualified. </p>
          <p class="and"> 9. In case of match draw, the "hantei" rule is applied, wherein the winner is determined by the decision of the majority of the five referees' flags.






          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> <!-- Popper.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Bootstrap JS -->
</body>
</html>
