<a class="btn btn-primary btn-sm" href="<?php echo site_url('satuan/create')?> "><span class="fa fa-plus"></span> Create</a>
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
                                        <th>satuan</th>
                                        <th>simbol</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id</th>
                                        <th>satuan</th>
                                        <th>simbol</th>
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
                                                        <td>$row[satuan]</td>
                                                        <td>$row[simbol]</td>
                                                        
                                                        <td>
                                                ";        
                                        ?>                  <a class="btn btn-sm btn-info" href='<?php echo site_url('satuan/edit/'.$row['id_satuan']);?>'>Edit</a>
                                                            <a class="btn btn-sm btn-danger" href='<?php echo site_url('satuan/delete/'.$row['id_satuan']);?>' onclick="javascript:return confirm('Delete data?')">Delete</a>
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
