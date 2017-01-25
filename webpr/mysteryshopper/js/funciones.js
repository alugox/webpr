/*$('#partConsulta').on('show.bs.modal', function(e) {

    //get data-id attribute of the clicked element
    var bookId = $(e.relatedTarget).data('book-id');

    //populate the textbox
    $(e.currentTarget).find('input[name="bookId"]').val(bookId);
    $(e.currentTarget).find('input[name="bookId2"]').val(bookId);
});*/

function showLoad($id) {
    if ($id === "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        document.getElementById("txtHint").innerHTML = "<div align='center'><img src='/descargas/componentes/img/load.gif'></div><br>";
        showUser($id);
    }
}
function showUser($id) {
    if ($id === "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "/mysteryshopper/admin/partResumen.php?i=" + $id, true);
        xmlhttp.send();   
    }
}