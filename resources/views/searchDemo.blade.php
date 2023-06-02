<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

</head>

<body>

     

<div class="container">
<form method="GET" action="/" name="f1" id="f1">
        <label for="nombre">Nombre</label>
        <input class="typeahead form-control" 
            name="nombre"
            id="nombre" 
            type="text"
            >
        <label for="id">ID</label>
        <input class="typeahead form-control" 
            id="id" 
            type="text"
            >
        <label for="correo">Correo</label>
        <input class="typeahead form-control" 
            id="correo" 
            type="text">
        <label for="username">Nombre de Usuario</label>
        <input class="typeahead form-control" 
            id="username" 
            type="text">
</from>
</div>

     

<script type="text/javascript">

var path = "{{ route('autocomplete') }}";
    // $('#search').typeahead({
    //         source: function (query, process) {
    //             return $.get(path, { query: query}, function (data) {return process(data);});
    //         }
    //    });
    $('#nombre').typeahead({
    //    source: function( request, response ) {
    //         $.ajax({
    //             url: "{{ route('autocomplete') }}",
    //             dataType: "json",
    //             data: {
    //                 query: query
    //             },
    //             success: function( data ) {
    //                 response( $.map( data, function( item ) {
    //                     return {    name: item.name,
    //                                 email: item.email
    //                                 }   
    //                 }));
    //             }
    //         });
    // //     },
    // select: function( event, ui ) {
    //     $('#search').val('fff');
    //         //$('#text').val(ui.item.email);

    //    }
        source: function (query, process) {
                return $.get(path, { query: query}, function (data) {
                    //console.log(data);
                    return process(data);});
            },
        // onselect: function(obj) { $('#nombre').val(selection.name);},
        updater: function(selection){
            //document.f1.nombre.value = selection.name;
            $('#nombre').val(selection.name);
            $('#correo').val(selection.email);
            $('#username').val(selection.username);
            $('#id').val(selection.id);
        console.log("Seleccionaste a: " + selection.name);
        }

   });

</script>
</body>
</html>