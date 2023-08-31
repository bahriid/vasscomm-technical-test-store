<?php

namespace App\Livewire\Backend\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('backend.product.index',[
            'products' => Product::query()->paginate(10)
        ])->layoutData([
            'title' => 'Produk'
        ]);
    }
}
