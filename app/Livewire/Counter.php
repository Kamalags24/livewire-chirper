<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public function up () {
        $this->count++;
    }

    public function down () {
        $this->count--;
    }
    
    public function render()
    {
        return view('livewire.counter');
    }  

}
