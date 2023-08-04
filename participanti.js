function filterTable() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("Introducere");
    filter = input.value.toUpperCase();
    table = document.getElementById("participantTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];                               //3 ii ptr coloana cu traseu
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}