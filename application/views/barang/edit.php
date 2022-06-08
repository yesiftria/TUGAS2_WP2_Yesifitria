<form action="<?php echo site_url('barang/update/'.$data ['id_barang'])?>" method="post">
    <table class="table">

    Nama barang : <input type="text" name="nama_brg" value="<?php echo $data['nama_brg'] ?>" required> <br>
    harga pokok : <input type="text" name="harga_pokok" value="<?php echo $data['harga_pokok'] ?>"  required> <br>
    harga jual : <input type="text" name="harga_jual" value="<?php echo $data['harga_jual'] ?>" required> <br>
    
        <td colspan="2">
            <button type="submit" class="btn btn-warning btn-sm"> <span class="fa fa-save"></span> Update </button>
            <a href="<?= site_url($this->uri->segment(1))?> "title="kembali"?>kembali</a>
                    
        </td>
    </table>

</form>
