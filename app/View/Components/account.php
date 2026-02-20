<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\account as accounts;
 

class account extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
         
         //$user = User::where('user', $user1->user())->first();
         $account = User::find(Auth()->user());
         return view('components.account',['user'=>$account]);
    }
}
