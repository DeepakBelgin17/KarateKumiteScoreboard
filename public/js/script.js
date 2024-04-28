

  function addValue1(value) {
        // Get the textbox element
        var textbox = document.getElementById('blue');

        // Get the current value of the textbox and convert it to a number
        var currentValue = parseFloat(textbox.value) || 0;

        // Add the clicked value to the current value
        var sum = currentValue + value;

        // Set the new sum value in the textbox
        textbox.value = sum;
    }

    function addValue(value) {
        // Get the textbox element
        var textbox = document.getElementById('red');

        // Get the current value of the textbox and convert it to a number
        var currentValue = parseFloat(textbox.value) || 0;

        // Add the clicked value to the current value
        var sum = currentValue + value;

        // Set the new sum value in the textbox
        textbox.value = sum;
    }

    function subtractOne() {
        // Get the textbox element
        var textbox = document.getElementById('blue');

        // Get the current value of the textbox and convert it to a number
        var currentValue = parseFloat(textbox.value) || 0;

        // Subtract 1 from the current value
        var result = currentValue - 1;

        // Set the new result value in the textbox
        textbox.value = result;
    }

    function subtractOne1() {
        // Get the textbox element
        var textbox = document.getElementById('red');

        // Get the current value of the textbox and convert it to a number
        var currentValue = parseFloat(textbox.value) || 0;

        // Subtract 1 from the current value
        var result = currentValue - 1;

        // Set the new result value in the textbox
        textbox.value = result;
    }


;
