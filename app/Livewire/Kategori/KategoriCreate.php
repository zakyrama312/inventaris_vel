<?php
namespace App\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Title;

class KategoriCreate extends Component
{
    #[Title('Kategori')]
    public $nama_kategori;

    protected function rules()
    {
        return [
            'nama_kategori' => ['required', 'min:2', Rule::unique('kategoris', 'nama_kategori')],
        ];
    }

    protected function messages()
    {
        return [
            'nama_kategori.required' => 'Nama kategori harus diisi.',
            'nama_kategori.min' => 'Nama kategori minimal harus 2 karakter.',
            'nama_kategori.unique' => 'Nama kategori sudah ada, gunakan nama yang lain.',
        ];
    }

    public function create()
    {
        $this->validate();

        Kategori::create(['nama_kategori' => $this->nama_kategori]);

        return $this->redirect('/kategori', navigate: true);
    }

    public function render()
    {
        return view('livewire.kategori.kategori-create');
    }
}
