<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $products;
    public $admin;

    public function __construct($products, $admin)
    {
        $this->products = $products;
        $this->admin = $admin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-list');
    }
}
