<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tahun = $request->input('tahun', date('Y')); // Ambil tahun dari query parameter atau default tahun ini

        $menuData = Http::get('http://tes-web.landa.id/intermediate/menu')->json();
        $transaksiData = Http::get("http://tes-web.landa.id/intermediate/transaksi?tahun={$tahun}")->json();


        return view('laporan.index', [
            'menuData' => $menuData,
            'transaksi'=>$transaksiData,
            'tahun' => $tahun
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadHtml(Request $request)
    {
        // Create the HTML content here (you can reuse the HTML from your view)
        $htmlContent = view('laporan.download')->render();

        // Define the filename for the downloaded HTML file
        $filename = 'laporan_venturo2021.php';

        // Generate the response with the HTML content and appropriate headers
        $response = Response::make($htmlContent);
        $response->header('Content-Type', 'text/html');
        $response->header('Content-Disposition', 'attachment; filename="' . $filename . '"');

        return $response;
    }
    public function downloadHtml2(Request $request)
    {
        // Create the HTML content here (you can reuse the HTML from your view)
        $htmlContent = view('laporan.download2')->render();

        // Define the filename for the downloaded HTML file
        $filename = 'laporan_venturo2022.php';

        // Generate the response with the HTML content and appropriate headers
        $response = Response::make($htmlContent);
        $response->header('Content-Type', 'text/html');
        $response->header('Content-Disposition', 'attachment; filename="' . $filename . '"');

        return $response;
    }

     public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
