<?php

namespace App\Http\Livewire\Member\Modal;

use App\Models\Alert;
use App\Models\Courier;
use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class QuickAlerts extends Component
{
    use WithPagination;
    public Alert $alert;
    protected $rules = [
        'alert.courier_id' => 'required',
        'alert.tracking_nbr' => 'required|unique:alerts,tracking_nbr',
        'alert.package_value' => 'required',
        'alert.desc' => 'string'
    ];
    protected $listeners = ['quickAlertsOpen'];

    public function updated(){
        $this->validate();
    }

    public function quickAlertsOpen()
    {
        $this->dispatchBrowserEvent('quick-alerts-modal-open');
    }

    public function newQuickAlert()
    {
        $this->validate();

        Alert::create([
            'member_id' => Auth::id(),
            'courier_id' => $this->alert->courier_id,
            'tracking_nbr' => $this->alert->tracking_nbr,
            'package_value' => $this->alert->package_value,
            'desc' => $this->alert->desc
        ]);
        $this->dispatchBrowserEvent('quick-alerts-modal-close');
        $this->alert = new Alert;
        $this->emit('updated');
    }

    public function mount()
    {
        $this->alert = new Alert;
    }

    public function render()
    {
        return view('livewire.member.modal.quick-alerts',[
            'couriers' => Courier::all()
        ]);
    }
}
