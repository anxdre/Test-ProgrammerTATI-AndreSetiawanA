<?php

namespace App\Livewire\Log;

use App\Models\DailyLog;
use Livewire\Attributes\On;
use Livewire\Component;

class DataTable extends Component
{
    public $dataset;

    public function render()
    {
        $this->dataset = $this->getDataset();
        return view('livewire.log.data-table')->layout('dailylog.daily-log');
    }

    #[On('log-created')]
    public function getDataset()
    {
        return DailyLog::all()->load(['user', 'verification']);
    }
}
