<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <h4>CRUD Sederhana dengan PHP dan Bootstrap</h4>
        <table class="table table-bordered table-hover">
            <br>
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Kota</th>
                    <th class="text-center">Tipe</th>
                    <th class="text-center">Provinsi</th>
                    <th class="text-center">Kode Pos</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $i = 1;
                foreach ($cities as $city) :
                ?>
                    <tr>
                        <td class="text-center"><?= $i; ?></td>
                        <td><?= $city['city_name']; ?></td>
                        <td><?= $city['type'];   ?></td>
                        <td><?= $city['province'];   ?></td>
                        <td><?= $city['postal_code'];   ?></td>
                    </tr>
                <?php
                    $i++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>