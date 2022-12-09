<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>List Buku</h1>
<a href="<?= base_url("buku/form")?>">Tambah</a>
<table> 
    <tr>
        <th>ISBN</th>
        <th>Judul</th>
        <th>Pengarang</th>
       
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['isbn'] ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['pengarang'] ?></td>
            
            <td>
                <a href="<?= base_url("buku/detail/{$data['id']}")?>">Detail</a>
                <a href="<?= base_url("buku/form/{$data['id']}")?>">Edit</a>
                <a onclick="return confirm('menghapus data?')" href="<?= base_url("buku/hapus/{$data['id']}")?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>