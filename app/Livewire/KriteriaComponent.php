<?php


namespace App\Livewire;

use Livewire\Component;
use App\Models\Kriteria;

class KriteriaComponent extends Component
{
    public $kriterias;
    public $editId = null;
    public $editField = null;
    public $editValue = null;

    public function mount()
    {
        $this->kriterias = Kriteria::all();
    }

    public function edit($id, $field)
    {
        $this->editId = $id;
        $this->editField = $field;
        $this->editValue = $this->kriterias->find($id)->$field;
    }

    public function update()
    {
        $kriteria = Kriteria::find($this->editId);
        $kriteria->{$this->editField} = $this->editValue;
        $kriteria->save();

        $this->editId = null;
        $this->editField = null;
        $this->editValue = null;

        $this->mount(); // Refresh data
    }

    public function render()
    {
        return view('livewire.kriteria-component');
    }
}
