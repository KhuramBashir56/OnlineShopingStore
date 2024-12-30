<?php

namespace App\Livewire\Panel;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.panel')]
    public function render()
    {
        return view('livewire.panel.dashboard');
    }
}
