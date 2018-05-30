$(document).ready(function () {
    $('.table').DataTable();
    $('select').select2();


    $('.btn-danger').click(function(event) {
        event.preventDefault();


        var url = $(this).attr("href");
        var row = $(tihs).closset("tr");
        var response =confirm("Etes vous sûr ?");

        if (response){
            fetch(url);
                .then(function (res){
                        if (res.status === 200){
                            row.fadeOut();
                        } else {
                            alert("Erreru lors de la suppression")
                        }
                });
        }
    });

});