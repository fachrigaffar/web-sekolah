<?php

namespace App\Filament\Resources\KelasResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Filament\Resources\KelasResource\Widgets\Kelas;

class KelasStats extends BaseWidget
{
    protected function getStats(): array
    {
        $kelas = Kelas::withCount(['siswa', 'guru'])->find($this->getRecord()->id);

        return [
            Stat::make('Jumlah Siswa', $kelas->siswa_count),
            Stat::make('Jumlah Guru', $kelas->guru_count),
        ];
    }
}
