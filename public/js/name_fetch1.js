/*document.addEventListener('DOMContentLoaded', function () {
    const fetchNamesButtons = document.querySelectorAll('.fetchNamesButton');
    fetchNamesButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const startNumber = this.getAttribute('data-start');
            let name1, name2, category;

            switch (startNumber) {
                case '1':
                    name1 = document.getElementById('name11').value;
                    name2 = document.getElementById('name22').value;
                    category = document.querySelector('.ran1').value;
                    break;
                case '2':
                    name1 = document.getElementById('name33').value;
                    name2 = document.getElementById('name44').value;
                    category = document.querySelector('.ran1').value;
                    break;

                default:
                    name1 = '';
                    name2 = '';
                    category = '';
            }

            // Redirect to the next page with query parameters
            window.location.href = '/click1?name1=' + encodeURIComponent(name1) + '&name2=' + encodeURIComponent(name2) + '&category=' + encodeURIComponent(category);
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form3');
    form.addEventListener('submit', function(event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Submit the form
        this.submit();
    });
});
*/

document.addEventListener('DOMContentLoaded', function () {
    const fetchNamesButtons = document.querySelectorAll('.fetchNamesButton');
    fetchNamesButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const startNumber = this.getAttribute('data-start');
            let name1, name2, category, id1, id2;

            switch (startNumber) {
                case '1':
                    name1 = document.getElementById('name11').value;
                    name2 = document.getElementById('name22').value;
                    category = document.querySelector('.ran1').value;
                    id1 = document.getElementById('id11').value;
                    id2 = document.getElementById('id22').value;
                    break;
                case '2':
                    name1 = document.getElementById('name33').value;
                    name2 = document.getElementById('name44').value;
                    category = document.querySelector('.ran1').value;
                    id1 = document.getElementById('id33').value;
                    id2 = document.getElementById('id44').value;
                    break;
                default:
                    name1 = '';
                    name2 = '';
                    category = '';
                    id1 = '';
                    id2 = '';
            }

            // Redirect to the next page with query parameters
            window.location.href = '/click1?name1=' + encodeURIComponent(name1) + '&name2=' + encodeURIComponent(name2) + '&category=' + encodeURIComponent(category) + '&id1=' + encodeURIComponent(id1) + '&id2=' + encodeURIComponent(id2);
        });
    });

    const form = document.getElementById('form3');
    form.addEventListener('submit', function(event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Submit the form
        this.submit();
    });
});
