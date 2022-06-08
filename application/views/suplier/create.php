<form action="<?php echo site_url('suplier/save')?>" method="post">
    <table class="table">

        nama_supl : <input type="text" name="nama_sup" required> <br>
        telp_supl : <input type="text" name="telp_supl" required> <br>
        instansi : <input type="text" name="instansi" required> <br>
        alamat : <input type="text" name="alamat"required> <br>
        status : <input type="enum" name="status"  required> <br>

            <td colspan="2">
                <button type="submit" class="btn btn-primary btn-sm"> <span class="fa fa-save"></span> Simpan </button>
                <a href="<?= site_url($this->uri->segment(1))?> "title="kembali"?>kembali</a>

            </td>
    </table>
</form>


