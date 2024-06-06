<?php

use App\Livewire\Barang\BarangCreate;
use App\Livewire\Barang\BarangEdit;
use App\Livewire\Dashboard;
use App\Livewire\Barang\Index;
use App\Livewire\Kategori\Index as KategoriIndex;
use App\Livewire\Kategori\KategoriCreate;
use App\Livewire\Keadaan\Index as KeadaanIndex;
use App\Livewire\Keadaan\KeadaanCreate;
use App\Livewire\Keadaan\KeadaanEdit;
use App\Livewire\Lab\Index as LabIndex;
use App\Livewire\Lab\LabCreate;
use App\Livewire\Lab\LabEdit;
use Illuminate\Support\Facades\Route;


Route::get("/", Dashboard::class);
Route::get("/barang", Index::class);
Route::get("/barang/create", BarangCreate::class);
Route::get("/barang/{id}/edit", BarangEdit::class);
Route::get("/kategori", KategoriIndex::class);
Route::get("/kategori/create", KategoriCreate::class);
Route::get("/kategori/{id}/edit", KategoriIndex::class);
Route::get("/keadaan", KeadaanIndex::class);
Route::get("/keadaan/create", KeadaanCreate::class);
Route::get("/keadaan/{id}/edit", KeadaanEdit::class);
Route::get("/lab", LabIndex::class);
Route::get("/lab/create", LabCreate::class);
Route::get("/lab/{id}/edit", LabEdit::class);