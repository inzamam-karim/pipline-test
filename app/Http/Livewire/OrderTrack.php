<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderTrack extends Component
{
    protected $listeners = ['echo:orders,.newOrder' => 'notifyNewOrder'];

    public $test;

    public $showNewOrderNotification = false;

    public function render()
    {
        return view('livewire.order-track');
    }

    public function checkMessage()
    {
        $this->test='Hi! How are you?';
    }

   
 
    public function notifyNewOrder()
    {
        $this->showNewOrderNotification = true;
    }
}
