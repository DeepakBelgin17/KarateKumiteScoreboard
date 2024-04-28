

    $(document).ready(function ()
    {
        // Add a click event to the display button
        $('#displayButton').on('click', function ()
         {
            // Get the selected category value
            var selectedCategory = $('#categorySelect').val();

            // Perform an AJAX request to the Laravel route
            $.ajax({
                url: '/round1',
                type: 'GET',
                data: { category: selectedCategory },
                success: function (response) {
                    // Update the athleteList div with the response from the server
                    $('#athleteList').html(response);
                },
                error: function () {
                    alert('Error fetching athletes');
                }
            });
        });
    });

