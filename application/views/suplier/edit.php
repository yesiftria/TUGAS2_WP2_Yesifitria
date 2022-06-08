<form action="<?php echo site_url('suplier/update/'.$data ['id_supl'])?>" method="post">
    <table class="table">

        nama_supl : <input type="text" name="nama_sup" value="<?php echo $data['nama_sup'] ?>" required> <br>
        telp_supl : <input type="text" name="telp_supl" value="<?php echo $data['telp_supl'] ?>"  required> <br>
        instansi : <input type="text" name="instansi" value="<?php echo $data['instansi'] ?>" required> <br>
        alamat : <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" required> <br>
        status: <input type="enum" name="status" value="<?php echo $data['status'] ?>" required> <br>

   
                <td colspan="2">
                    <button type="submit" class="btn btn-warning btn-sm"> <span class="fa fa-save"></span> Update </button>
                    <a href="<?= site_url($this->uri->segment(1))?> "title="kembali"?>kembali</a>
                    
                </td>
    </table>
</form>


