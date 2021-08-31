<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
 <div class="container mt-4">
     <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="card shadow w-50" >
                 <div class="card-header">
                     <h5>Edit Clients</h5>
                     <a href="<?= base_url('students') ?>"  class="btn btn-danger btn-sm float-end">Back</a>
                 </div>
                 <div class="card-body">


                     <table class="table table-bordered" id="mydatatable">
                     <div class="container-fluid">
    <br>

   
<form action="<?= base_url('students/update/'.$students['Id']) ?>" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input value="<?= $students['Name'] ?> " name="Name" type="text" class="form-control"   >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input value="<?= $students['email'] ?> " name="email" type="text" class="form-control"  >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input value="<?= $students['phone'] ?> "name="phone" type="number" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course Name</label>
    <input value="<?= $students['course'] ?> " name="course" type="text" class="form-control" >
  </div>
  <div class="mb-3">
  <label>CV</label>
  <input value="<?= $students['cv'] ?>" name="cv" class="form-control"  type="file">
</div>
<div>
 <br>
  <button type="submit" class="btn btn-primary">Update</button>


  
      
  
</form>  
</div>
                                    

                                   

                 
   
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>




<?= $this->endSection() ?>

<? $this->section('scripts') ?>




