<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\Stats;

class SalesDashboard extends Component
{

/*
   public $newOrders;
   public $salesAmount;   
   public $satisfactions;
*/
   protected $listeners = ['fetchStats' =>'$refresh'];
    /*
    public function mount()
    {
        
            $this->assignStats();
        
        
        $this->newOrders = rand(5, 100);
        $this->salesAmount = rand(100, 1000);
        $this->satisfactions = rand(95, 100);
    
    } 
    */

   public function fetchStats()
   {
        $this->assignStats();
   }

    public function render()
    {
        return view('livewire.sales-dashboard', [
            'newOrders' => Stats::newOrders(),
            'salesAmount' =>  Stats::salesAmount(100, 1000),
            'satisfactions' => Stats::satisfactions(95, 100),
        ]);
    }
    

    private function assignStats()
    {
        $this->fill([
            'newOrders' => Stats::newOrders(),
            'salesAmount' =>  Stats::salesAmount(100, 1000),
            'satisfactions' => Stats::satisfactions(95, 100),
           ]);
    }

}
