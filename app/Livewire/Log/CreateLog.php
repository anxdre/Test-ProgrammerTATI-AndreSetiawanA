<?php

namespace App\Livewire\Log;

use App\Models\DailyLog;
use Livewire\Component;

class CreateLog extends Component
{
    public DailyLog $data;

    public function boot()
    {
        $this->data = new DailyLog();
    }

    public function render()
    {
        return view('livewire.log.create-log');
    }

    public function addItem()
    {
        dd($this->data);
        $this->data->save();
        $this->dispatch('log-created');
    }
}
