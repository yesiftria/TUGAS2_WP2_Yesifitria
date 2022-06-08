<form action="<?php echo site_url('admin/save')?>" method="post">
    <table class="table">
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" required></td>
            <td>nama</td>
            <td><input type="text" name="nama" required></td>
            <td>password</td>
            <td><input type="text" name="password" required></td>

        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary btn-sm"> <span class="fa fa-save"></span> Simpan </button>
                <a href="<?= site_url($this->uri->segment(1))?> "title="kembali"?>kembali</a>

            </td>
        </tr>
    </table>
</form>