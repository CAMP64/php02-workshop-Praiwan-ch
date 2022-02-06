<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function show_input()    
    {
        return view('v_show_input');
    }

    public function show_value()    
    {
        $data['name_title'] = $this->request->getPost('name_title');
        $data['id'] = $this->request->getPost('id');
        $data['Fname'] = $this->request->getPost('Fname');
        $data['Lname'] = $this->request->getPost('Lname');
        $data['date'] = $this->request->getPost('date');
        $data['email'] = $this->request->getPost('email');
        $data['year'] = $this->request->getPost('year');
        $data['cluster'] = $this->request->getPost('cluster');
        $data['code'] = $this->request->getPost('code');

        $file = $this-> request->getFile('image');
        if($file->isValid())
        {
            $image_name = $file->getRandomName();
            $file->move('./picture',$image_name);
        }
        $data['image'] = $image_name;

        $file = $this-> request->getFile('file');
        if($file->isValid())
        {
            $file_name = $file->getRandomName();
            $file->move('./file',$file_name);
        }
        $data['file'] = $file_name;
        return view('v_show_value',$data);
    }

}

