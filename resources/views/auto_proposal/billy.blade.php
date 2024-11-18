<!DOCTYPE html>
<html lang="en">

<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body>
    <table id="table1">
        <thead>
        <tr>
        <th>NIM</th>
        <th>Nama</th>
        </tr>
        </thead>

    </table>

    <script>                          
        $(document).ready(function() {
            
            var table=$("#table1").DataTable({
                ajax:{
                    url:'/showproductdata',
                    type:'GET',
                    dataSrc: ""
                },
                processing:true,
                serverSide:false,
                columns:[
                    {
                        data: 'nim'
                    },
                    {
                        data: 'name'
                    }
                ],
                // Error handling
                error: function (xhr, error, thrown) {
                    console.log('Error:', error);
                }

            });
        });

            </script>
</body>


</html>

