<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail buku</h1>
<dl>
  <dt>ISBN</dt>
  <dd><?= $isbn ?></dd>

  <dt>Judul</dt>
  <dd><?= $judul ?></dd>

  <dt>Pengarang</dt>
  <dd><?= $pengarang ?></dd>


</dl>

<a href='#' onclick="history.back()">Back</a>