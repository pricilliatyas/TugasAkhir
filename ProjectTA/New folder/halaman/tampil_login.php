<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Login</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              
                    <div class="input-group-append">
                     <a href=""> <button class="btn btn-primary" type="button">
                        Tambah Admin
                      </button></a>
                    </div>
                
                <style>
    #border{border:0px}
</style>
<div id="border">
<br />
<table align="center" width="100%" border="1">
    <tr bgcolor="#0066FF" align="center" style="color:#FFFFFF; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">Username</td>
        <td style="color:#FFFFFF">Password</td>
        <td style="color:#FFFFFF">Level</td>
        <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from login");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[username]</td>
		    <td>$data[password]</td>
        <td>$data[level]</td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_login.php?act=hapus&id=$data[no_urut_login]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a> || 
   <a href="<?php echo"?hal=form_login&act=ubah&id=$data[no_urut_login]";?>">Ubah</a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>