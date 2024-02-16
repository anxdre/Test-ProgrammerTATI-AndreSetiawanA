<?php

namespace App\Livewire\Log;

use App\Models\DailyLog;
use LivewireUI\Modal\ModalComponent;

class ShowLog extends ModalComponent
{
    public DailyLog $data;

    public function loadData(DailyLog $log)
    {
        $this->data = $log;
        $this->render();
    }

    public function render()
    {
        return view('livewire.log.show-log');
    }
}
