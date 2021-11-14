<?php

namespace App\Http\Livewire\Auth;

use Auth;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    public function updated(): void
    {
        $this->validate();
    }

    public function authenticate()
    {
        sleep(1);
        $this->validate();

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            if (Auth::user()->status === 1) {
                sleep(2);

                $this->dispatchBrowserEvent('alert');
                session()->put('alertType','success');
                session()->put('alertTitle','You Will Be Redirected Shortly');

                sleep(1);

                if (Auth::user()->role->role === 'admin') {
                    return redirect()->route('prox-homepage');
                }
                if (Auth::user()->role->role === 'user') {
                    return redirect()->route('prox-homepage');
                }
            }
            $this->dispatchBrowserEvent('alert');
            session()->put('alertType','error');
            session()->put('alertTitle','Your Account Has Been Disabled');


        } else {
            $this->dispatchBrowserEvent('alert');
            session()->put('alertType','info');
            session()->put('alertTitle','Authentication Failed');

        }


    }


    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.auth.login');
    }
}
