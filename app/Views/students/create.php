  
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
  
<br>

   
<div class="container mt-4">
     <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="card shadow w-50" >
                 <div class="card-header">
                     <h5>Add Clients</h5>
                     
   <a href="<?= base_url('students') ?>"  class="btn btn-info btn-sm float-end">Back</a>
    <br>
<form action="<?= base_url('students/add') ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" name="Name" aria-describedby="emailHelp" placeholder="Enter Full Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Enter Number" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course Name</label>
    <input type="text" class="form-control" name="course" placeholder="Enter Course Name" required>
  </div>
  <div class="mb-3">
  <label>CV</label>
  <input name="cv" class="form-control"  type="file" required>
</div>
 <br>
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>  
</div>
      
  
</form>  
</div>
                                    

                                   

                 
   
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>


<?= $this->endSection() ?>




