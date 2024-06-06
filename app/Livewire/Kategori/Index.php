<?php

namespace App\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Index extends Component
{
     use WithPagination;
    #[Title("Kategori")]

    public $search;
    public function render()
    {
        return view('livewire.kategori.index', [
            'kategoris' => Kategori::where('nama_kategori', 'LIKE', '%' . $this->search . '%')
            ->paginate(10)
        ]);
    }
}
