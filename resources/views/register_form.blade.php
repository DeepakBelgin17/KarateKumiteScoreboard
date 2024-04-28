<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Athlete Registration</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">



</head>
<body>




<div class="container  mt-3">

 <center><h2 class="kal">Athlete Registration</h2></center>

 <div class="container bg-light w-75 mt-4 mb-3">

<form  id="personalInfoForm" onsubmit="return validateForm()" action="{{ route('register') }}" method="POST" >
    @csrf
<input type="hidden" name="_token" value="<?php echo csrf_token();?>">



      <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label mt-3">Name</label>
        <div class="col">
          <input type="text" class="form-control mt-3" id="name" placeholder="Enter your name" name="name">
         <span id="nameError" class="error"></span><br>

        </div>
      </div>

      <div class="row mb-3">
        <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
        <div class="col">
        <input type="date" class="form-control" id="dob" name="dob">
        <span id="dobError" class="error"></span><br>
      </div>
    </div>

    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Gender</label>
      <div class="col">
        <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male" >

        <label class="form-check-label" for="male">Male</label>

      </div></div>

    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female" >

        <label class="form-check-label" for="female">Female</label>

      </div></div>

      <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="other" value="Transgender" >
        <label class="form-check-label" for="other">Transgender</label>

         </div></div>
         <span id="genderError" class="error"></span><br>
    </div>



<div class="row mb-3">
  <label for="weight" class="col-sm-2 col-form-label">Weight</label>
  <div class="col">
  <select class="form-control" id="weight" placeholder="Enter your weight" name="weight">
    <option value="" disabled selected>Select weight</option>
    <option >45-50</option>
    <option >51-55</option>
    <option >56-60</option>
    <option >61-65</option>
    <option >66-70</option>

    </select>
    <span id="weightError" class="error"></span><br>
</div>
</div>



<div class="row mb-3">
  <label for="category" class="col-sm-2 col-form-label">Category</label>
  <div class="col">
  <input type="text" class="form-control" id="category"  name="category">
  <span id="categoryError" class="error"></span><br>
</div></div>

<div class="row mb-3">
  <label for="qualification" class="col-sm-2 col-form-label">Qualification</label>
  <div class="col">
  <select class="form-control" id="qualification" placeholder="Enter your qualification" name="qualification">
    <option value="" disabled selected>Select qualification</option>
    <option value="school">School </option>
    <option value="college">College</option>
    <option value="working">Working</option>
    <option value="master">Master</option>
    </select>
    <span id="qualificationError" class="error"></span><br>
  </div>
</div>

<div class="row mb-3">
  <label for="mobile" class="col-sm-2 col-form-label">Mobile </label>
  <div class="col">
  <input type="number" class="form-control" id="mobile_number" placeholder="Enter your mobile number" name="mobile_number">
  <span id="mobileError" class="error"></span><br>
</div></div>

<div class="row mb-3">
  <label for="email" class="col-sm-2 col-form-label">Email </label>
  <div class="col">
  <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
  <span id="emailError" class="error"></span><br>
</div></div>

<div class="row mb-3">
  <label for="exampleTextarea" class="col-sm-2 col-form-label">Address</label>
  <div class="col">
  <textarea class="form-control" id="address" rows="4"cols="5" placeholder="Enter your address..." name="address"></textarea>
  <span id="addressError" class="error"></span><br>
</div></div>


<div class="row mb-3">
  <label for="state" class="col-sm-2 col-form-label">State</label>
  <div class="col">
  <select class="form-control" id="state" placeholder="Enter your state" name="state">
    <option value="" disabled selected>Select State</option>
    <option >Tamilnadu</option>
    <option >Kerala</option>
    <option >Karnataka</option>
    <option >Andra Pradesh</option>
    <option >Pondicherry</option>
    <option >Karnataka</option>
    <option >Telungana</option>
    <option >Goa</option>
    </select>
    <span id="stateError" class="error"></span><br>
</div>
</div>

<div class="row mb-3">
  <label for="pincode" class="col-sm-2 col-form-label">Pincode</label>
  <div class="col">
  <input type="text" class="form-control" id="pincode" placeholder="Enter your pincode" name="pincode">
  <span id="pincodeError" class="error"></span><br>
</div></div>



<br>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn ers" >Register</button>
        </div>

    </form>
  </div> </div>

  <script>
    // Add event listeners to the gender and weight elements
    document.getElementById('male').addEventListener('change', updateCategory);
    document.getElementById('female').addEventListener('change', updateCategory);
    document.getElementById('other').addEventListener('change', updateCategory);
    document.getElementById('weight').addEventListener('change', updateCategory);

    // Function to update the category based on selected options
    function updateCategory() {
        var gender = document.querySelector('input[name="gender"]:checked');
        var weight = document.getElementById('weight').value;
        var categoryElement = document.getElementById('category');

        // Define your conditions to determine the category
        if (gender && weight) {
            var categoryMessage = getCategoryMessage(gender.value, weight);
            categoryElement.value = categoryMessage;
        }
    }

    // Function to determine the category message
    function getCategoryMessage(selectedGender, selectedWeight) {
        // Customize your conditions based on your requirements
        if (selectedGender === 'male') {
             if (selectedWeight === '45-50')
            {
                return 'Male - Under 45-50';
            }
           else if (selectedWeight === '51-55')
            {
                return 'Male - Under 51-55';
            }
            else if (selectedWeight === '56-60') {
                return 'Male - Under 56-60';
            } else if (selectedWeight === '61-65') {
                return 'Male - Under 61-65';
            }
            else if (selectedWeight === '66-70') {
                return 'Male - Under 66-70';
            }

        } else if (selectedGender === 'female') {
          if (selectedWeight === '45-50') {
                return 'Female - Under 45-50';
            }
            else if (selectedWeight === '51-55') {
                return 'Female - Under 51-55';
            }
            else if (selectedWeight === '56-60') {
                return 'Female - Under 56-60';
            } else if (selectedWeight === '61-65') {
                return 'Female - Under 61-65';
            }
            else if (selectedWeight === '66-70') {
                return 'Female - Under 66-70';
            }

        } else if (selectedGender === 'Transgender') {
          if (selectedWeight === '45-50') {
                return 'Transgender - Under 45-50';
            }
            else if (selectedWeight === '51-55') {
                return 'Transgender - Under 51-55';
            }
            else if (selectedWeight === '56-60') {
                return 'Transgender - Under 56-60';
            } else if (selectedWeight === '61-65') {
                return 'Transgender - Under 61-65';
            }
            else if (selectedWeight === '66-70') {
                return 'Transgender - Under 66-70';
            }

        }

        return ''; // Default message if no conditions are met

    }

</script>

<script src="{{ asset('js/register.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

