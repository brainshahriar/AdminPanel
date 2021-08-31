
  

<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
 <div class="container mt-4">
     <div class="row">
         <div class="col-md-12">
             <div class="card shadow w-70">
                 <div class="card-header">
                     <h5>Clients</h5>
                     
                 </div>




</form>  



                 <div class="card-body">
                     <table class="table table-bordered" id="mydatatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course Name</th>
                                <th>CV</th>
                                <th>Action</th>
                            </tr>
                           </thead>
                           <tbody>
                                <?php  if($students): ?>
                              <?php foreach($students as $row) : ?>
                                <tr>
                                    <td><?php echo $row['Id']; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td>
                                        <?php echo $row['cv'];?>
                                    </td>
                                   

                                
                                   
<td>
                 
               <form action="<?= base_url('students/delete/'.$row['Id']) ?>" method="POST">  
               <a href="<?= base_url('students/edit/'.$row['Id'])?>" class="btn btn-success btn-sm" >Edit</a>  



                  <input type="hidden" name="_method" value="DELETE" />             
                   <button type="submit" value="<?= $row['Id']; ?>" class="confirm_del_btn btn btn-danger btn-sm">Delete</button>           
                          </form>
        


                                    </td>
                                </tr>
                                <?php  endforeach ?>
                                    <?php  endif ?>
                           </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>




<?= $this->endSection() ?>

<? $this->section('scripts') ?>
