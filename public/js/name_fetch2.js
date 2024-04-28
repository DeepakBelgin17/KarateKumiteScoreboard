document.addEventListener('DOMContentLoaded', function () {
    const fetchNamesButtons = document.querySelectorAll('.fetchNamesButton');
    fetchNamesButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const startNumber = this.getAttribute('data-start');
            let name1, category, id1, id2;

            switch (startNumber) {
                case '1':
                    name1 = document.getElementById('name111').value;
                    name2 = document.getElementById('name222').value;
                    category = document.querySelector('.ran1').value;
                    id1 = document.getElementById('id111').value;
                    id2 = document.getElementById('id222').value;
                    break;


                default:
                    name1 = '';
                    name2 = '';
                    category = '';
            }

            // Redirect to the next page with query parameters
            window.location.href = '/click2?name1=' + encodeURIComponent(name1) + '&name2=' + encodeURIComponent(name2) + '&category=' + encodeURIComponent(category) + '&id1=' + encodeURIComponent(id1) + '&id2=' + encodeURIComponent(id2);
        });
    });
});



