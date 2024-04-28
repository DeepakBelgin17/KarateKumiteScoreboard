<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Female 56-60</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">

  <style>
    .bg{

  background-image: linear-gradient(pink,lightblue );
}


h3{
  font-family: "Sofia", sans-serif;
}

h2{
  font-family: "Sofia", sans-serif;

}
  </style>
</head>
<body>
    @include('header')



 <center><h2 style="color:black;" class="mt-3 font-effect-fire">Round 1</h2></center>

 <div class="container-fluid bg ">

    <div class="row">

        <div class="col-4">

                </div>

        <div class="col-4">
            @if ($f->isNotEmpty())
            <br><center> <input type="text" class="form-control ran1 mt-1 w-50 text-danger"  value="{{$f[0]->category}}" readonly ></center>
            @else
            <p>No data found for the selected category.</p>
        @endif
        </div>

        <div class="col-4">

                </div></div>



    <div class="row">
      <div class="col-1 mt-4">
      <h3 style="margin-left: 5px;">No</h3></div>

      <div class="col-3 mt-4">
      <h3 style="margin-left:75px">Player List</h3></div>

        <div class="col-3 mt-4">
          <h3 style="margin-left:45px">Score</h3></div>



          <div class="col-3 mt-4">
          <h3 style="margin-left:30px">Winners</h3></div>



              <div class="col-2 mt-4">
              <h3 style="margin-left:25px">Status</h3></div></div>


<form action="">

      <div class="row mb-3">
        <div class="col-1 ">

            @foreach ($f as $ff)

            <input type="text" class="form-control mt-3 w-75 " id="name" placeholder="" value="{{$ff->id}}" readonly>

            @endforeach
        </div>

        <div class="col-3">

            @foreach ($f as $ff)

          <input type="text" class="form-control mt-3 w-80" id="name" placeholder="" name="athlete_name" value="{{$ff->name}}" readonly>

             @endforeach
        </div>

        <div class="col-2">

            @foreach ($f as $ff)

          <input type="text" class="form-control mt-3 w-50" id="name" placeholder=""  style="margin-left:30px">

          @endforeach
        </div>

        <div class="col-4  mt-4">
            <input type="text" class="form-control mt-3 w-80" id="name" placeholder="">



          </div>
          <div class="col-2 ">

            <input type="button" class="form-control btn-success w-75" id="name" placeholder="" value="Start" style="margin-top: 40px;">



          </div>
          <div class="container">
            <div class="text-center">
              <button class="btn btn-primary" style="margin-top: 40px;">Next Round</button>

             </div>
          </div>


      </div>

<br>
    </form>
  </div> </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
