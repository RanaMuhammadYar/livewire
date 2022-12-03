<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;
class Studentlivewire extends Component
{    use WithFileUploads;
    public $name, $email, $image, $students , $edit_id , $date,$time,$gender,$checkbox ,$gallery= [], $city,$color;
    public $studentEdit = false;
    public function render()
    {
        $this->students = Student::all();
        return view('livewire.student.studentlivewire');
    }
    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->image = '';
        $this->edit_id = '';
        $this->date = '';
        $this->time = '';
        $this->gender = '';
        $this->checkbox = '';
        $this->gallery = '';
        $this->city = '';
        $this->color = '';
        $this->studentEdit = false;

    }

    public function store()
    {
        $student = new Student();
        $student->name  =$this->name;
        $student->email = $this->email;
        $student->date = $this->date;
        $student->time = $this->time;
        $student->gender = $this->gender;
        $student->checkbox = $this->checkbox;
        $student->city = $this->city;
        $student->color = $this->color;
        $student->image = $this->image->store('files','public');

        foreach ($this->gallery as $key => $images) {
            $this->gallery[$key] = $images->store('files','public');
        }
        $student->gallery =  json_encode($this->gallery);
        $student->save();
        return "OK";
        $this->resetInputFields();

    }
    public function edit($id)
    {
        $editstudents = Student::findOrfail($id);
            $this->edit_id = $id;
            $this->name =$editstudents->name;
            $this->email =$editstudents->email;
            $this->studentEdit = true;
    }

    public function update()
    {
        $editstudents = Student::find($this->edit_id);
        $editstudents->image = $this->image->store('files','public');
        $editstudents->name =  $this->name;
        $editstudents->email = $this->email;
        $editstudents->update();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        return "delete";
    }
    public function cancel()
    {
        $this->studentEdit = false;
        $this->resetInputFields();
    }

}
