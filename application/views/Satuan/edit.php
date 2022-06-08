<form action="<?php echo site_url('satuan/update/'.$data ['id_satuan'])?>" method="post">

    <table class="table">
            <tr>
                <td>satuan</td>
                <td><input type="text" name="satuan" value="<?php echo $data['satuan']?>" required></td>
                <td>simbol</td>
                <td><input type="text" name="simbol" value="<?php echo $data['simbol']?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-warning btn-sm"> <span class="fa fa-save"></span> Update </button>
                    <a href="<?= site_url($this->uri->segment(1))?> "title="kembali"?>kembali</a>
                    
                </td>
            </tr>
        </table>
</form>
