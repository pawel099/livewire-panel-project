<?php

namespace App\View\Components;

use Auth;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product as products;
use App\Models\User;

class product extends Component
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
        $id = Auth::id();
        $user = User::find($id);
        return view('components.product',['user'=>$user]);
    }


    public function edit($id): View|Closure|string
    {
        $product = Products::find($id);
        return view('components.edit-product',['product'=>$product]);
    }


    public function delete($id) {
         products::findOrFail($id)->delete();
    
    }


    
}
