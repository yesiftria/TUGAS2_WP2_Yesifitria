<a class="btn btn-primary btn-sm" href="<?php echo site_url('stok/create')?> "><span class="fa fa-plus"></span> Create</a>
<br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data <?= $menu ?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Id_stok</th>
                                        <th>Id_barang</th>
                                        <th>in_out</th>
                                        <th>qty</th>
                                        <th>Harga_pokok</th>
                                        <th>Harga_jual</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id_stok</th>
                                        <th>Id_barang</th>
                                        <th>in_out</th>
                                        <th>qty</th>
                                        <th>Harga_pokok</th>
                                        <th>Harga_jual</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        <?php
                                            $id = 1;
                                            foreach($data->result_array()as $row){
                                                echo"
                                                    <tr>
                                                        <td>$id</td>
                                                        <td>$row[id_barang]</td>
                                                        <td>$row[in_out]</td>
                                                        <td>$row[qty]</td>
                                                        <td>$row[hrg_pokok]</td>
                                                        <td>$row[hrg_jual]</td>
                                                        <td>$row[note]</td>

                                                    
                                                        <td>
                                                ";        
                                                ?>                  <a class="btn btn-sm btn-info" href='<?php echo site_url('stok/edit/'.$row['id_stok']);?>'>Edit</a>
                                                                    <a class="btn btn-sm btn-danger" href='<?php echo site_url('stok/delete/'.$row['id_stok']);?>' onclick="javascript:return confirm('Delete data?')">Delete</a>
                                                <?php
                                                echo"
                                                        
                                                
                                                        </td>
                                                            
                                                    </tr>
        
                                                ";
                                            $id++;
                                            }
                                        ?>
                                    </tbody>
        
                                </table>
                            </div>
                        </div>
                    </div>
     
