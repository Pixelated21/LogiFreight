<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Models\userInfo;
use Hash;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class Register extends Component
{
    public User $user;
    public userInfo $userInfo;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'userInfo.fname' => 'required',
        'userInfo.lname' => 'required',
        'userInfo.salutation' => 'required',
        'userInfo.dob' => 'required',
        'user.email' => 'required',
        'password' => 'required|confirmed',
    ];

    public function updated(): void
    {
        $this->validate();
    }

    public function createUser(): RedirectResponse
    {
        sleep(1);
        $this->validate();

        $user = User::create([
            'email' => $this->user->email,
            'password' => Hash::make($this->password)
        ])->id;

        userInfo::create([
            'user_id' => $user,
            'fname' => $this->userInfo->fname,
            'lname' => $this->userInfo->lname,
            'salutation' => $this->userInfo->salutation,
            'dob' => $this->userInfo->dob,
        ]);
        sleep(3);

        return redirect()->route('login');

    }

    public function mount(): void
    {
        $this->user = new User;
        $this->userInfo = new userInfo;
    }

    /**
     * @return View
     */
    public function render(): view
    {
        return view('livewire.auth.register');
    }
}
