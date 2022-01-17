<?php

namespace App\Http\Controllers;

use App\Exports\HasilCentroidExport;
use App\Exports\HasilClusterExport;
use App\Imports\MasjidImport;
use App\Imports\PenceramahImport;
use App\Models\KmeansModel;
use App\Models\MasjidModel;
use App\Models\PenceramahModel;
use App\Models\PengujianModel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'IMAPP | Dashboard',
            'jumlahMasjid' => MasjidModel::all()->count(),
            'jumlahPenceramah' => PenceramahModel::all()->count(),
            'totalData' => MasjidModel::all()->count() + PenceramahModel::all()->count()
        ];
        return view('page.home', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'IMAPP | Login'
        ];
        return view('page.login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'IMAPP | Register'
        ];
        return view('page.register', $data);
    }

    public function dataMasjid()
    {
        $data = [
            'title' => 'IMAPP | Data Masjid',
            'dataMasjid' => MasjidModel::all()
        ];

        return view('page.masjid.data_masjid', $data);
    }

    public function tambahMasjid()
    {
        $data = [
            'title' => 'IMAPP | Tambah Masjid'
        ];

        return view('page.masjid.tambah_masjid', $data);
    }

    public function editMasjid($id)
    {
        $data = [
            'title' => 'IMAPP | Edit Masjid',
            'dataMasjid' => MasjidModel::where('id', base64_decode($id))->first()
        ];

        return view('page.masjid.edit_masjid', $data);
    }

    public function dataPenceramah()
    {
        $data = [
            'title' => 'IMAPP | Data Penceramah',
            'dataPenceramah' => PenceramahModel::all()
        ];

        return view('page.penceramah.data_penceramah', $data);
    }

    public function tambahPenceramah()
    {
        $data = [
            'title' => 'IMAPP | Tambah Penceramah'
        ];

        return view('page.penceramah.tambah_penceramah', $data);
    }

    public function editPenceramah($id)
    {
        $data = [
            'title' => 'IMAPP | Edit Penceramah',
            'dataPenceramah' => PenceramahModel::where('id', base64_decode($id))->first()
        ];

        return view('page.penceramah.edit_penceramah', $data);
    }

    public function dataClustering()
    {
        $iterationCount = KmeansModel::max('iteration');
        $data = [
            'title' => 'IMAPP | Data Clustering',
            'data' => KmeansModel::where('iteration', $iterationCount)->get(),
            'getMasjid' => KmeansModel::where('category', 2)->where('iteration', $iterationCount)->get(),
            // 'getPenceramah' => KmeansModel::where('category', 1)->where('iteration', $iterationCount)->where('kelompok_data',)
        ];

        return view('page.clustering.data_clustering', $data);
    }

    public function dataKmeans()
    {
        $iterationCount = KmeansModel::max('iteration');

        $data = [
            // Title Halaman KMeans
            'title' => 'IMAPP | Data Perhitungan K-Means',
            // Mengambil semua data di iterasi ke-1
            'dataCluster' => KmeansModel::where('iteration', 1)->get(),
            // Mengambil semua data di iterasi ke-1
            'dataClusterIteration2' => KmeansModel::where('iteration', 2)->get(),
            // Mengambil satu data di iterasi ke-2 --> untuk pengujian data ada / tidak
            'dataSingleIteration2' => KmeansModel::where('iteration', 2)->first(),
            // Mengambil tanggal terakhir update / melakukan perhitungan
            'tgl_update' => KmeansModel::pluck('updated_at')->first(),
            // Mengambil data centroid iterasi ke-1 --> untuk pengujian apakah centroid telah dipilih atau belum
            'centroidValidate' => KmeansModel::where('centroid', true)->first(),
            // Mengambil data centroid iterasi ke-2 --> untuk pengujian apakah centroid telah dipilih atau belum
            'centroid2Validate' => KmeansModel::where('C1', '')->where('iteration', 2)->first(),
            // Mengambil jarak terdekat dari setiap iterasi --> untuk validasi data
            'clusterGroup' => KmeansModel::where('iteration', 1)->pluck('jarak_terdekat')->first(),
            'clusterGroup2' => KmeansModel::where('iteration', 2)->pluck('jarak_terdekat')->first(),

            // Mengambil initial centroid di iterasi ke-1
            'centroid1' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C1')->first(),
            'centroid2' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C2')->first(),
            'centroid3' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C3')->first(),
            'centroid4' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C4')->first(),
            'centroid5' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C5')->first(),

            // Mengambil data iterasi dan filter berdasarkan kelompok data
            'dataCluster1_it1' => KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->get(),
            'dataCluster2_it1' => KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->get(),
            'dataCluster3_it1' => KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->get(),
            'dataCluster4_it1' => KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->get(),
            'dataCluster5_it1' => KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->get(),
            'dataCluster1_it2' => KmeansModel::where('kelompok_data', 'C1')->where('iteration', 2)->get(),
            'dataCluster2_it2' => KmeansModel::where('kelompok_data', 'C2')->where('iteration', 2)->get(),
            'dataCluster3_it2' => KmeansModel::where('kelompok_data', 'C3')->where('iteration', 2)->get(),
            'dataCluster4_it2' => KmeansModel::where('kelompok_data', 'C4')->where('iteration', 2)->get(),
            'dataCluster5_it2' => KmeansModel::where('kelompok_data', 'C5')->where('iteration', 2)->get(),

            // Mengambil kelompok data iterasi secara array
            'iteration1' => KmeansModel::where('iteration', 1)->pluck('kelompok_data')->toArray(),
            'iteration2' => KmeansModel::where('iteration', 2)->pluck('kelompok_data')->toArray(),

            // Mengambil / Cek iterasi terakhir
            'iterationCount' => KmeansModel::max('iteration'),

            'dataSingleIteration' => KmeansModel::where('iteration',  $iterationCount)->first(),
            'lastIteration' => KmeansModel::where('iteration',  $iterationCount)->pluck('kelompok_data')->toArray(),
        ];
        return view('page.kmeans.data_kmeans', $data);
    }

    public function pengujian()
    {
        $iterationCount = KmeansModel::max('iteration');
        $data = [
            'title' => 'IMAPP | Pengujian',
            'dataPengujian' => PengujianModel::all()
        ];

        return view('page.pengujian.data_pengujian', $data);
    }

    public function hasil_chart()
    {
        $iterationCount = KmeansModel::max('iteration');
        $data = [
            'title' => 'IMAPP | Hasil Chart',
            'totalData' => KmeansModel::where('kelompok_data', 'C1')->where('iteration', $iterationCount)->count() + KmeansModel::where('kelompok_data', 'C2')->where('iteration', $iterationCount)->count() + KmeansModel::where('kelompok_data', 'C3')->where('iteration', $iterationCount)->count() + KmeansModel::where('kelompok_data', 'C4')->where('iteration', $iterationCount)->count() + KmeansModel::where('kelompok_data', 'C5')->where('iteration', $iterationCount)->count(),
            'c1' => KmeansModel::where('kelompok_data', 'C1')->where('iteration', $iterationCount)->count(),
            'c2' => KmeansModel::where('kelompok_data', 'C2')->where('iteration', $iterationCount)->count(),
            'c3' => KmeansModel::where('kelompok_data', 'C3')->where('iteration', $iterationCount)->count(),
            'c4' => KmeansModel::where('kelompok_data', 'C4')->where('iteration', $iterationCount)->count(),
            'c5' => KmeansModel::where('kelompok_data', 'C5')->where('iteration', $iterationCount)->count()
        ];

        return view('page.hasil.data_chart', $data);
    }

    public function hasil_cluster()
    {

        $iterationCount = KmeansModel::max('iteration');
        $data = [
            'title' => 'IMAPP | Hasil Cluster',
            'dataCluster' => KmeansModel::where('iteration', $iterationCount)->orderBy('kelompok_data')->get(),
            'dataClusterPenceramah' => KmeansModel::where('iteration', $iterationCount)->where('category', 1)->orderBy('kelompok_data')->get(),
            'dataClusterMasjid' => KmeansModel::where('iteration', $iterationCount)->where('category', 2)->orderBy('kelompok_data')->get()
        ];

        return view('page.hasil.data_cluster', $data);
    }

    public function exportHasilCluster()
    {
        return Excel::download(new HasilClusterExport, 'cluster.xlsx');
    }

    public function importPenceramah(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        try {
            // import data
            Excel::import(new PenceramahImport, request()->file('file'));
        } catch (\Throwable $th) {
            //throw $th;
            $th->getMessage();
            return redirect('/penceramah/tambah')->with([
                $request->session()->flash('fail_import', 'Gagal import data!')
            ]);
        }

        // alihkan halaman kembali
        return redirect('/penceramah')->with([
            $request->session()->flash('tambah_data')
        ]);
    }

    public function importMasjid(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        try {
            // import data
            Excel::import(new MasjidImport, request()->file('file'));
        } catch (\Throwable $th) {
            //throw $th;
            $th->getMessage();
            return redirect('/masjid/tambah')->with([
                $request->session()->flash('fail_import', 'Gagal import data!')
            ]);
        }

        // alihkan halaman kembali
        return redirect('/masjid')->with([
            $request->session()->flash('tambah_data')
        ]);
    }



    public function hasil_centroid()
    {

        $iterationCount = KmeansModel::max('iteration');
        $data = [
            'title' => 'IMAPP | Hasil Centroid',
            'iterationCount' => KmeansModel::max('iteration'),
            // Iterasi 1
            'centroid1' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C1')->first(),
            'centroid2' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C2')->first(),
            'centroid3' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C3')->first(),
            'centroid4' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C4')->first(),
            'centroid5' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C5')->first(),
        ];

        return view('page.hasil.data_centroid', $data);
    }

    public function peta()
    {
        $iterationCount = KmeansModel::max('iteration');
        $data = [
            'title' => 'IMAPP | Peta',
            'dataCluster' => KmeansModel::where('iteration', $iterationCount)->get()
            // 'data' => KmeansModel::all()
        ];
        return view('page.peta.data_peta', $data);
    }

    public function perhitunganKmeans()
    {
        $iterationCount = KmeansModel::max('iteration');
        $data = [
            'title' => 'IMAPP | Perhitungan Kmeans',
            'dataCluster' => KmeansModel::where('iteration', 1)->get(),
            // Mengambil initial centroid di iterasi ke-1
            'centroid1' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C1')->first(),
            'centroid2' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C2')->first(),
            'centroid3' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C3')->first(),
            'centroid4' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C4')->first(),
            'centroid5' => KmeansModel::where('centroid', true)->where('kelompok_data', 'C5')->first(),
            'dataSingleIteration' => KmeansModel::where('iteration',  $iterationCount)->first(),
            'lastIteration' => KmeansModel::where('iteration',  $iterationCount)->pluck('kelompok_data')->toArray(),
            'iteration1' => KmeansModel::where('iteration', 1)->pluck('kelompok_data')->toArray(),
            'iterationCount' => KmeansModel::max('iteration'),

        ];

        return view('page.kmeans.data_perhitungan', $data);
    }
}
