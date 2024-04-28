document.addEventListener('DOMContentLoaded', function () {
    const fetchNamesButtons = document.querySelectorAll('.fetchNamesButton');
    fetchNamesButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const startNumber = this.getAttribute('data-start');
            let name1, name2, category, id1, id2;

            switch (startNumber) {
                case '1':
                    name1 = document.getElementById('name1').value;
                    name2 = document.getElementById('name2').value;
                    category = document.querySelector('.ran1').value;
                    id1 = document.getElementById('id1').value;
                    id2 = document.getElementById('id2').value;
                    break;
                case '2':
                    name1 = document.getElementById('name3').value;
                    name2 = document.getElementById('name4').value;
                    category = document.querySelector('.ran1').value;
                    id1 = document.getElementById('id3').value;
                    id2 = document.getElementById('id4').value;
                    break;
                case '3':
                    name1 = document.getElementById('name5').value;
                    name2 = document.getElementById('name6').value;
                    category = document.querySelector('.ran1').value;
                    id1 = document.getElementById('id5').value;
                    id2 = document.getElementById('id6').value;
                    break;
                case '4':
                    name1 = document.getElementById('name7').value;
                    name2 = document.getElementById('name8').value;
                    category = document.querySelector('.ran1').value;
                    id1 = document.getElementById('id7').value;
                    id2 = document.getElementById('id8').value;
                    break;
                default:
                    name1 = '';
                    name2 = '';
                    category = '';
                    id1 = '';
                    id2 = '';
            }



            // Redirect to the next page with query parameters
            window.location.href = '/click?name1=' + encodeURIComponent(name1) + '&name2=' + encodeURIComponent(name2) + '&category=' + encodeURIComponent(category) + '&id1=' + encodeURIComponent(id1) + '&id2=' + encodeURIComponent(id2);
        });
    });

    const form = document.getElementById('form2');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        this.submit();
    });
});
