<?php

namespace App\Http\Controllers;

use App\Models\dataalter;
use App\Models\datakriteria;
use App\Models\datapenilai;
use App\Models\subkriteria;
use Illuminate\Http\Request;

class CRUD extends Controller
{

    public function adddatakriteria()
    {
        return view('Admin.Menu.tambahdatakriteria');
    }

    public function addalter()
    {
        return view('Admin.Menu.tambahdataalternatif');
    }

    public function datapenilaian()
    {
        $penilaian = dataalter::all();
        $datakriteria = datakriteria::all();
        $subkriteria = subkriteria::all();
        $nilai = datapenilai::select('nama_alternatif')->distinct()->get();
        return view('Admin.Menu.datapenilaian', ['penilaian' => $penilaian, 'sub' => $subkriteria, 'datakriteria' => $datakriteria, 'nilai' => $nilai]);
    }

    public function datakriteria()
    {
        $datakriteria = datakriteria::all();
        return view('Admin.Menu.datakriteria', ['datakriteria' => $datakriteria]);
    }


    public function pembobotan()
    {
        $kriteria = datakriteria::orderByDesc('bobot')->get();

        // Add a sequence number to each item
        $kriteriaWithNumber = $kriteria->map(function ($item, $key) {
            return (object) ['number' => $key + 1, 'kriteria' => $item];
        });

        // Pass the data to the view
        return view('Admin.Menu.pembobotanswara', ['kriteria' => $kriteriaWithNumber]);
    }

    public function datasub()
    {
        $datakriteria = datakriteria::all();
        $datasub = subkriteria::all();
        return view('Admin.Menu.datasubkriteria', ['kriteria' => $datakriteria, 'sub' => $datasub]);
    }

    public function dataalternatif()
    {
        $alter = dataalter::all();
        return view('Admin.Menu.dataalternatif', ['alter' => $alter]);
    }

    public function dataperhitungan()
    {
        $kriteria = datakriteria::orderByDesc('bobot')->get();

        // Add a sequence number to each item
        $kriteriaWithNumber = $kriteria->map(function ($item, $key) {
            return (object) ['number' => $key + 1, 'kriteria' => $item];
        });

        $kriteria2 = datakriteria::all();
        $nilai = datapenilai::all()->groupBy('nama_alternatif');
        $nilai2 = datapenilai::all()->groupBy(['kode']);

        // Hitung nilai kuadrat dan jumlahkan berdasarkan nama_alternatif dan kode
        $nilaiKuadratJumlah = [];
        foreach ($nilai2 as $nama_alternatif => $data) {
            $kuadratJumlah = 0;
            foreach ($data as $item) {
                $kuadratJumlah += pow($item->nilai, 2);
            }
            $nilaiKuadratJumlah[$nama_alternatif] = sqrt($kuadratJumlah);
        }

        // $nilaiKuadratJumlah2 = [];
        // foreach ($nilai2 as $nama_alternatif => $data) {
        //     $kuadratJumlah = 0;
        //     foreach ($data as $item) {
        //         $kuadratJumlah += pow($item->nilai, 2);
        //     }
        //     $nilaiKuadratJumlah2[] = sqrt($kuadratJumlah);
        // }

        $nilaiKuadratJumlah2 = [];
        foreach ($nilai2 as $nama_alternatif => $data) {
            $kuadratJumlah = 0;

            foreach ($data as $item) {
                // Assuming there is a foreign key relationship and the column names are correct
                $kode = $item->kode;
                $nilai_kriteria = datakriteria::where('kode', $kode)->first()->nilai;

                $kuadratJumlah += pow($item->nilai, 2);
            }

            $nilaiKuadratJumlah2[] = sqrt($kuadratJumlah);
        }

        // dd($datapenilaianWithJenis);
        $kriteriaCost = str_replace(['[', ']', '"'], '', datakriteria::where('jenis', 'Cost')->pluck('kode'));

        $kriteriaBenefit = str_replace(['[', ']', '"'], '', datakriteria::where('jenis', 'benefit')->pluck('kode'));
        return view('Admin.Menu.dataperhitungan', ['cost' => $kriteriaCost, 'benefit' => $kriteriaBenefit, 'kriteria' => $kriteriaWithNumber, 'nilai' => $nilai, 'nilai3' => $nilaiKuadratJumlah2, 'nilai2' => $nilaiKuadratJumlah, 'kriteria2' => $kriteria2]);
    }

    public function dataakhir()
    {
        return view('Admin.Menu.datahasilakhir');
    }

    public function postdatakriteria(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'bobot' => 'required',
            'jenis' => 'required'
        ]);

        $data = [
            'kode' => $request->input('kode'),
            'nama' => $request->input('nama'),
            'bobot' => $request->input('bobot'),
            'jenis' => $request->input('jenis')
        ];

        datakriteria::create($data);
        return redirect('/tambahdata');
    }

    public function postdatasub(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'nilai' => 'required'
        ]);

        $data = [
            'kode' => $request->input('kode'),
            'nama' => $request->input('nama'),
            'nilai' => $request->input('nilai')
        ];
        subkriteria::create($data);
        return back();
    }

    public function postdataalter(Request $request)
    {
        $request->validate([
            'nama_alternatif' => 'required',
        ]);

        $data = [
            'nama_alternatif' => $request->input('nama_alternatif'),
        ];
        dataalter::create($data);
        return back();
    }

    public function postdatapenilaian(Request $request, $nama_alternatif)
    {
        $rules = [];

        // Add validation rules for each dropdown
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'nilai_') === 0) {
                $rules[$key] = 'required';
            }
        }

        $request->validate($rules);

        $data = [];

        // Extract data from each dropdown
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'nilai_') === 0) {
                $kode = str_replace('nilai_', '', $key);
                $data[] = [
                    'nama_alternatif' => $nama_alternatif,
                    'kode' => $kode, // Use $kode directly
                    'nilai' => $value,
                ];
            }
        }


        // Now $data contains an array of ['kode' => $kode, 'nilai' => $value] for each dropdown
        // dd($data);

        foreach ($data as $entry) {
            datapenilai::create($entry);
        }
        return back();
    }

    public function delete($nama)
    {
        datakriteria::where('nama', $nama)->Delete();
        return back()->with('Berhasil Hapus Data');
    }

    public function subdelete($nama)
    {
        subkriteria::where('nama', $nama)->Delete();
        return back()->with('Berhasil Hapus Data');
    }

    public function alterdelete($nama_alternatif)
    {
        dataalter::where('nama_alternatif', $nama_alternatif)->Delete();
        return back()->with('Berhasil Hapus Data');
    }

}
