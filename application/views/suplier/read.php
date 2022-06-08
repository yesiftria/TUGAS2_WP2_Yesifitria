<a class="btn btn-primary btn-sm" href="<?php echo site_url('suplier/create')?> "><span class="fa fa-plus"></span> Create</a>
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
                                        <th>Id</th>
                                        <th>nama_supl</th>
                                        <th>telp_supl</th>
                                        <th>instansi</th>
                                        <th>alamat</th>
                                        <th>status</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id</th>
                                        <th>nama_supl</th>
                                        <th>telp_supl</th>
                                        <th>instansi</th>
                                        <th>alamat</th>
                                        <th>status</th>
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
                                                        <td>$row[nama_sup]</td>
                                                        <td>$row[telp_supl]</td>
                                                        <td>$row[instansi]</td>
                                                        <td>$row[alamat]</td>
                                                        <td>$row[status]</td>
                                                        
                                                        <td>
                                                ";        
                                        ?>                  <a class="btn btn-sm btn-info" href='<?php echo site_url('suplier/edit/'.$row['id_supl']);?>'>Edit</a>
                                                            <a class="btn btn-sm btn-danger" href='<?php echo site_url('suplier/delete/'.$row['id_supl']);?>' onclick="javascript:return confirm('Delete data?')">Delete</a>
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

