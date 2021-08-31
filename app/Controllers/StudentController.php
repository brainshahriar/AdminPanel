<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
	public function index()
	{
		$student= new StudentModel();
        $data['students']=$student->findAll();
        return view ('students/index.php',$data);
	}
	public function create()
	{
		return view ('students/create');
	}
	public function store()
	{				$students = new StudentModel();
		$file = $this->request->getFile('cv');
		if ($file->isValid() && ! $file->hasMoved())
{


	           $cvName = $file->getRandomName();
              $file->move('uploads/', $cvName);
       
}
		$data=[
          'Name'=>$this->request->getPost('Name'),
		  'email'=>$this->request->getPost('email'),
		  'phone'=>$this->request->getPost('phone'),
		  'course'=>$this->request->getPost('course'),
          'cv'=>$cvName,
		  
		];
		$students->save($data);
		session()->setFlashdata('status_text','Your Clients Data has Inserted');
		return redirect('students')
		->with('status_icon','success')
		->with('status','Clients Inserted Successfully');
	}
	public function edit( $Id = null)
    {
        $student = new StudentModel();
        $data['students']=$student->find($Id);
        return view('students/edit',$data);
    }
	public function update($Id)
    {
        $students = new StudentModel();
		$prod_item=$students->find($Id);
		$old_img_name =$prod_item['cv'];

		$file=$this->request->getFile('cv');
		if($file->isValid() && !$file->hasMoved())
		{
		
			if(file_exists("uploads/".$old_img_name)){
				unlink("uploads/".$old_img_name);
			}
			
			$cvName = $file->getRandomName();
			$file->move('uploads/', $cvName);
		}
		else{
			$cvName =$old_img_name;
		}
        $data = [
			'Name'=>$this->request->getPost('Name'),
			'email'=>$this->request->getPost('email'),
			'phone'=>$this->request->getPost('phone'),
			'course'=>$this->request->getPost('course'),
			'cv'=>$cvName,
        ];
        $students->update($Id,$data);
		session()->setFlashdata('status_text','Your Client Data  has been Updated');
        return redirect()->to(base_url('/students'))
		->with('status_icon','success')
		->with('status','Data Updated Successfully');
	}
	public function delete($Id = null)
	{
		$students = new StudentModel();
		$data = $students->find($Id);
        $imagefile = $data['cv'];
		if(file_exists("uploads/".$imagefile)){
			unlink("uploads/".$imagefile);
		}
		$students->delete($Id);
		session()->setFlashdata('status_text','Your Student Data has been Deleted');
		return redirect()->back()
		->with('status_icon','success')
		->with('status','Student Deleted Successfully');
	}


}
?>