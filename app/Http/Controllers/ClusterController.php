<?php

namespace App\Http\Controllers;

use App\Models\KmeansModel;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    public function getPenceramah(Request $request)
    {
        $iterationCount = KmeansModel::max('iteration');
        $kelompokData = $request->kelompokData;
        $dataPenceramah = KmeansModel::where('category', 1)->where('iteration', $iterationCount)->where('kelompok_data', $kelompokData)->get();
        $dataMasjid = KmeansModel::where('category', 2)->where('iteration', $iterationCount)->where('kelompok_data', $kelompokData)->get();

        return redirect('/clustering')->with([
            'dataPenceramah' => $dataPenceramah,
            'dataMasjid' => $dataMasjid,
        ]);
    }
}
