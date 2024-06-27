document.querySelector('form').addEventListener('submit', function(event) {
    var transport = document.getElementById('transport').value;
    var electricity = document.getElementById('electricity').value;
    var meat = document.getElementById('meat').value;

    if (transport < 0 || electricity < 0 || meat < 0) {
        alert("Lütfen geçerli pozitif değerler girin.");
        event.preventDefault();
    }
});
