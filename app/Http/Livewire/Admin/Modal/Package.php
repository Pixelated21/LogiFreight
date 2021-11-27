<?php

namespace App\Http\Livewire\Admin\Modal;

use Livewire\Component;

class Package extends Component
{
    public \App\Models\Package $package;
    protected $rules = [
        'package.package_type_id' => 'required',
        'package.member_id' => 'required',
        'package.courier_id' => 'required',
        'package.courier_tracking_number' => 'required',
        'package.weight' => 'required',
        'package.internal_tracking_nbr' => 'required',
        'package.estimated_cost' => 'required'
    ];
    protected $listeners = ['newPackageOpen'];

    public function updated(){
        $this->validate();
    }

    public function newProduct(){
        dd($this->validate());
    }

    public function newPackageOpen(){
        $this->dispatchBrowserEvent('new-package-open');
    }

    public function mount(){
        $this->package = new \App\Models\Package;
    }

    public function render()
    {
        return view('livewire.admin.modal.package');
    }
}
