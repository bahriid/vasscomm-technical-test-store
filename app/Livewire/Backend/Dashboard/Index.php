<?php

namespace App\Livewire\Backend\Dashboard;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public  $productActive;
    public  $productTotal;
    public  $userActive;
    public  $userTotal;

    public function mount()
    {
        $this->productActive = Product::query()->where('status', 'ACTIVE')->count();
        $this->productTotal = Product::query()->count();
        $this->userActive = User::query()->where('status', 'ACTIVE')->count();
        $this->userTotal = User::query()->count();
    }

    public function render()
    {
        return view('backend.dashboard.index',[
            'products' => Product::query()->paginate()
        ])->layoutData([
            'title' => 'Dashboard'
        ]);
    }
}
