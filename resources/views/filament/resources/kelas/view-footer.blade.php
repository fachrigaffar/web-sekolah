<x-filament::section>
    <h3 class="text-lg font-semibold">Daftar Siswa</h3>
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2 text-left">Nama Siswa</th>
                <th class="border border-gray-300 px-4 py-2 text-left">NIS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $siswa->nama_siswa }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $siswa->nis }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-filament::section>
