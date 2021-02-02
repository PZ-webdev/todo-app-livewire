<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class LanguageSwitcher extends Component
{
    /**
     * Render livewire function.
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.language-switcher');
    } 
  
}
