<a class="btn btn-primary btn-sm" href="<?php echo site_url('admin/create')?> "><span class="fa fa-plus"></span> Create</a>
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
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>password</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>password</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        <?php
                                            $username = 1;
                                            foreach($data->result_array()as $row){
                                                echo"
                                                    <tr>
                                                        <td>$row[username]</td>
                                                        <td>$row[nama]</td>
                                                        <td>$row[password]</td>
                                                        
                                                        <td>
                                                ";        
                                        ?>                  <a class="btn btn-sm btn-info" href='<?php echo site_url('admin/edit/'.$row['username']);?>'>Edit</a>
                                                            <a class="btn btn-sm btn-danger" href='<?php echo site_url('admin/delete/'.$row['username']);?>' onclick="javascript:return confirm('Delete data?')">Delete</a>
                                        <?php
                                            echo"
                                                
                                        
                                                        </td>
                                                    
                                                    </tr>

                                                ";
                                            $username++;
                                            }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
