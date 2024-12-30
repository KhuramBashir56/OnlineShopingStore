<?php

namespace App\Livewire\Web;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('components.layouts.web')]
    public function render()
    {
        return view('livewire.web.home');
    }
}
