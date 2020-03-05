<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<hr>
<h3>Fila1</h3>
<hr>
<table id="fila1" class=" table table-condensed table-bordered table-striped display" width="100%"></table>
<hr>
<h3>Fila2</h3>
<hr>
<table id="fila2" class=" table table-condensed table-bordered table-striped display" width="100%"></table>
<hr>

<script>
    var socket = io.connect('http://127.0.0.1:3001');

    socket.on('fila1', function(data){
        $('#fila2').DataTable( {
            data: data,        destroy: true,
            columns: [
                { title: "Name" },
                { title: "Position" },
                { title: "Salary" }
            ]
        });
    });

    socket.on('fila2', function(data){
        $('#fila1').DataTable( {
            data: data,        destroy: true,
            columns: [
                { title: "Name" },
                { title: "Position" },
                { title: "Office" },
                { title: "Extn." },
                { title: "Start date" },
                { title: "Salary" }
            ]
        });
    });
</script>
