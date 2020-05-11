
<?php $__env->startSection('container'); ?>

<header class="header_area white-header">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="GET" action="/api/cities">
                    <input name="cari" type="text" class="form-control" id="search_input" placeholder="Search here . . ." />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="my-4 col-12">
            <h1 class="float-left">Daftar Kota</h1>
        </div>
        <div class="col-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
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
                            <td class="text-center"><?= $city['postal_code'];   ?></td>
                        </tr>
                    <?php
                        $i++;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dot\apiRajaOngkir\resources\views/cities.blade.php ENDPATH**/ ?>