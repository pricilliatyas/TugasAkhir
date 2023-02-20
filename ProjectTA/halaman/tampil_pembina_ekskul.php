<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pembina Ekstrakulikuler</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
                <style>
    #border{border:0px}
</style>
<div id="border">
<br />
<table align="center" width="100%" border="1">
    <tr bgcolor="#0066FF" align="center" style="color:#FFFFFF; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">Kategori Ekskul</td>
        <td style="color:#FFFFFF">NIP Guru</td>
        <td style="color:#FFFFFF">Nama Guru</td>
        <td style="color:#FFFFFF">Alamat</td>
        <td style="color:#FFFFFF">Tempat Tanggal Lahir</td>
        <td style="color:#FFFFFF">No. HP</td>
        <td style="color:#FFFFFF">Foto</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from pembina_ekskul");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[id_kategori]</td>
        <td>$data[nip_guru]</td>
		<td>$data[nama_guru]</td>
        <td>$data[alamat_guru]</td>
        <td>$data[ttl_guru]</td>
        <td>$data[no_telp_guru]</td>
        <td>$data[foto]</td>
        ";?>
</tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>
