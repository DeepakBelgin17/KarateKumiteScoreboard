


function validateForm() {
    // Reset errors
    clearErrors();


    // Get form values
    var name = document.getElementById('name').value;

    var dob = document.getElementById('dob').value;




    var weight = document.getElementById('weight').value;

    var category = document.getElementById('category').value;

    var qualification = document.getElementById('qualification').value;

    var mobile = document.getElementById('mobile_number').value;

    var email = document.getElementById('email').value;

    var address = document.getElementById('address').value;

    var state = document.getElementById('state').value;

    var pincode = document.getElementById('pincode').value;
//gender
var genderInputs = document.getElementsByName('gender');
var genderErrorElement = document.getElementById('genderError');


var weight =document.getElementById('weight').value;
// Check if at least one gender radio button is selected

//////////////////////////////////////////////////////////////////////////////////
    // Validation logic
    var isValid = true;

    if (!name.trim()) {
        showError('nameError', 'Name is required');
        isValid = false;
    }

    if (!dob) {
        showError('dobError', 'Date of Birth is required');
        isValid = false;
    }

//gender
    var isGenderSelected = false;
    for (var i = 0; i < genderInputs.length; i++)
    {
       if (genderInputs[i].checked) {
           isGenderSelected = true;
           break;
       }
   }



   genderErrorElement.innerHTML = isGenderSelected ? '' : 'Please select a gender';



    /*if (isNaN(weight) || weight <= 0) {
        showError('weightError', 'Invalid weight');
        isValid = false;
    }*/

    if (!/^\d+-\d+$/.test(weight)) {
        showError('weightError', 'Invalid weight format. Please use the format "45-50"');
        isValid = false;
    }

    if (!category.trim()) {
        showError('categoryError', 'Category is required');
        isValid = false;
    }

    if (!qualification.trim()) {
        showError('qualificationError', 'Qualification is required');
        isValid = false;
    }

    // Mobile number validation (you can customize this as needed)
    var mobileRegex = /^[0-9]{10}$/;
    if (!mobileRegex.test(mobile)) {
        showError('mobileError', 'Invalid mobile number');
        isValid = false;
    }

    // Email validation (you can customize this as needed)
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        showError('emailError', 'Invalid email address');
        isValid = false;
    }

    if (!address.trim()) {
        showError('addressError', 'Address is required');
        isValid = false;
    }

    if (!state.trim()) {
        showError('stateError', 'State is required');
        isValid = false;
    }

    var mobileRegex = /^[0-9]{10}$/;
    if (!mobileRegex.test(mobile)) {
        showError('mobileError', 'Invalid mobile number');
        isValid = false;
    }

    if (!pincode.trim()) {
        showError('pincodeError', 'Pincode is required');
        isValid = false;
    }

    // Return false to prevent form submission if validation fails
    return isValid;
}

function showError(elementId, message) {
    document.getElementById(elementId).innerHTML = message;
}

function clearErrors() {
    var errorElements = document.querySelectorAll('.error');
    errorElements.forEach(function (element) {
        element.innerHTML = '';
    });
}
