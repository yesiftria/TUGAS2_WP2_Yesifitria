<form action="<?php echo site_url('stok/save')?>" method="post">
    <table class="table">

    Id_barang : <input type="text" name="id_barang" required> <br>
    In_out :
        <select name="in_out" required>
            <option value="in">in</option>
            <option value="out">out</option>
        </select>
    <br>
    qty : <input type="text" name="qty" required> <br>
    harga pokok : <input type="text" name="hrg_pokok" required> <br>
    harga jual : <input type="text" name="hrg_jual" required> <br>
    Note : <input type="text" name="note" required> <br>

    
        <td colspan="2">
            <button type="submit" class="btn btn-primary btn-sm"> <span class="fa fa-save"></span> Simpan </button>
            <a href="<?= site_url($this->uri->segment(1))?> "title="kembali"?>kembali</a>

        </td>
    </table>
</form>