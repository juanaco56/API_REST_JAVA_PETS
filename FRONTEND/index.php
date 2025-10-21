<?php
   $url = "http://host.docker.internal:8084/listado";

    $data = @file_get_contents($url);

    //JSON TO ARRAY
    $pets = json_decode($data, true);

?>
 <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Listado de mascotas</title>
    </head>
    <body>
        <table class="table table-striped">
                <thead>
                <h1>Listado de mascotas</h1>
                    <tr>
                        <td>ID</td>
                        <td>name</td>
                        <td>born</td>
                        <td>category</td>
                        <td>chip</td>
                        <td>adopt</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($pets as $pet): ?>
                        <tr>
                            <td><?php echo $pet['id'] ?></td>
                            <td><?php echo $pet['name'] ?></td>
                            <td><?php echo $pet['born'] ?></td>
                            <td><?php echo $pet['category'] ?></td>
                            <td><?php echo $pet['chip'] ?></td>
                                


                                 
                            </td>
                        </tr>
                    <?php endforeach; ?>
        </table> 
        
    </body>
</html>