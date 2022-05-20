<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
        <div class="row text-center pt-5">
          <h2 class="col">List Message<hr/></h2>
        </div>
    </div>


    <!-- tabel -->
    <div class="table-responsive ps-5 pt-5 pe-5 pb-3">
                <?php
                    include('connect.php');

                    $sql = 'SELECT nama_kontak, email_kontak, text_kontak FROM contact';
                    $result = mysqli_query($conn, $sql);
                    if(!$result){
                        die('Could not get data: ' . mysqli_error());
                    }
                    
                    echo "<table class='table-responsive table table-dark table-striped rounded-3 shadow-lg table-admin'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>";

                    $i = 1;
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr>";
                        echo "<td> $i </td>";
                        echo "<td> {$row['nama_kontak']} </td>";
                        echo "<td>{$row['email_kontak']} </td>";
                        echo "<td>{$row['text_kontak']} </td>";
                        echo "</tr>";
                        $i++;
                    }
                    echo "</tbody>";
                    echo "</table>";
                    mysqli_close($conn);

                ?>
    </div>
    <h5  class='text-left pe-5' style='text-align: right;'><a href='index.html#contact' class='text-decoration-none text-primary' style='text-align: right;'><button class="btn btn-primary btn-outline-dark text-dark">Add Data</button></a></h5>
    <!-- end tabel -->

    <?= $this->endSection(); ?>