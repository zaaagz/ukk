<h2 align="center">Laporan Peminjaman Buku</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
                <tr>
                    <th>No</th>
                    <th>User </th>
                    <th>Buku </th>
                    <th>tanggal peminjaman</th>
                    <th>tanggal pengembalian</th>
                    <th>status peminjaman</th>
                </tr>
                <?php
                include "koneksi.php";
                $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku");
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['tanggal_peminjaman']; ?></td>
                            <td><?php echo $data['tanggal_pengembalian']; ?></td>
                            <td><?php echo $data['status_peminjaman']; ?></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
            <script>
                window.print();
                selTiout(function() {
                    window.close();
                }, 100);

            </script>