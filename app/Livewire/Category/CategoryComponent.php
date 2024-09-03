<?php

namespace App\Livewire\Category;

use Livewire\Component;
use Livewire\Attributes\Title;


#[Title("Inicio Test")]
class CategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.category.category-component');
    }
}
