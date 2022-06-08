<form action="<?php echo site_url('admin/update/'.$data ['username'])?>" method="post">

    <table class="table">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $data['username']?>" required></td>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']?>" required></td>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $data['password']?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-warning btn-sm"> <span class="fa fa-save"></span> Update </button>
                    <a href="<?= site_url($this->uri->segment(1))?> "title="kembali"?>kembali</a>
                    
                </td>
            </tr>
        </table>
</form>
