<?php

namespace App\Filament\Resources\KelasResource\Pages;

use App\Filament\Resources\KelasResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;
use App\Models\Siswa;
use App\Models\Guru;

class ViewKelas extends ViewRecord
{
    protected static string $resource = KelasResource::class;

    public function getTable(): Table
    {
        return Table::make()
            ->query(Siswa::where('kelas_id', $this->record->id)) // Ambil siswa berdasarkan kelas
            ->columns([
                TextColumn::make('nama_siswa')->label('Nama Siswa')->sortable(),
                TextColumn::make('nis')->label('NIS')->sortable(),
            ])
            ->heading('Daftar Siswa');
    }

    public function getFooter(): ?View
    {
        return view('filament.resources.kelas.view-footer', [
        'siswas' => Siswa::where('kelas_id', $this->record->id)->get(),
         ]);
    }
}

