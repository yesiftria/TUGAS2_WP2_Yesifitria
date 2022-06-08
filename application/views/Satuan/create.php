<form action="<?php echo site_url('satuan/save')?>" method="post">
    <table class="table">
        <tr>
            <td>satuan</td>
            <td><input type="text" name="satuan" required></td>
            <td>simbol</td>
            <td><input type="text" name="simbol" required></td>

        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary btn-sm"> <span class="fa fa-save"></span> Simpan </button>
                <a href="<?= site_url($this->uri->segment(1))?> "title="kembali"?>kembali</a>

            </td>
        </tr>
    </table>
</form>