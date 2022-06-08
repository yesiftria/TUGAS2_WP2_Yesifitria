<form action="<?php echo site_url('stok/update/'.$data ['id_stok'])?>" method="post">
    <table class="table">
    
    Id_barang : <input type="text" name="id_barang" value="<?php echo $data['id_barang'] ?>" required> <br>
    In_out :
        <select name="in_out" required>
            <option value="in">in</option>
            <option value="out">out</option>
        </select>
    <br>
    qty : <input type="text" name="qty" value="<?php echo $data['qty'] ?>" required> <br>
    harga pokok : <input type="text" name="hrg_pokok" value="<?php echo $data['hrg_pokok'] ?>" required> <br>
    harga jual : <input type="text" name="hrg_jual" value="<?php echo $data['hrg_jual'] ?>" required> <br>
    Note : <input type="text" name="note" value="<?php echo $data['note'] ?>" required> <br>

    
        <td colspan="2">
            <button type="submit" class="btn btn-warning btn-sm"> <span class="fa fa-save"></span> Update </button>
            <a href="<?= site_url($this->uri->segment(1))?> "title="kembali"?>kembali</a>
                    
        </td>
    </table>

</form>
