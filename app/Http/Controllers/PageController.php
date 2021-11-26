<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use ZipArchive;
use File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Page::all();
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request();
        $folder = $data['name'];

        if (is_dir('storage/Dj/downloads') === false) {
            mkdir('storage/DJ/downloads');
        }
        if (is_dir('storage/Dj/' . $folder) === false) {
            mkdir('storage/DJ/' . $folder);
        }
        $img_path = request('img_path');
        if ($img_path != false) {
            $ar = count($img_path);
            foreach ($img_path as $da) {
                $da->store('DJ/' . $folder, 'public');
                $img_path[] = $da->store('uplode', 'public');
            }
            $revers = array_reverse($img_path, true);
            $i = 0;
            foreach ($revers as $da) {
                if ($ar > $i) {
                    $re[] = $da;
                }
                $i++;
            }
        } else {
            $ar = 0;
        }
        for ($x = 12;; $x--) {
            if ($x <= $ar) {
                break;
            }
            $re[] = null;
        }

        // en description
        $myfile_en = 'storage/' . 'DJ/' . $folder . '/' . 'aa_desceiption.txt';
        file_put_contents($myfile_en, $data['description']);

        // ar description
        if ($data['description_ar'] != null) {
            $myfile_ar = 'storage/' . 'DJ/' .  $folder . '/' . 'aa_desceiption_ar.txt';
            file_put_contents($myfile_ar, $data['description_ar']);
        }
        // dd($re);

        $zip = new ZipArchive;
        $fileadd = 'storage/' . 'DJ/' .  $folder;
        if ($zip->open(public_path('storage/' . 'DJ/downloads/' .  $folder . '.zip'), ZipArchive::CREATE) === true) {
            $files = File::files(public_path($fileadd));
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
            $zip->close();
        }

        Page::create([
            'name' => $data['name'],
            'name_ar' => $data['name_ar'],
            'code' => $data['code'],
            'description' => $data['description'],
            'description_ar' => $data['description_ar'],
            'img_path_1' => $re[0],
            'img_path_2' => $re[1],
            'img_path_3' => $re[2],
            'img_path_4' => $re[3],
            'img_path_5' => $re[4],
            'img_path_6' => $re[5],
            'img_path_7' => $re[6],
            'img_path_8' => $re[7],
            'img_path_9' => $re[8],
            'img_path_10' => $re[9],
            'img_path_11' => $re[10],
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
    public function download(Page $page)
    {
        // dd($pa)
        $fileadd = 'storage/DJ/downloads/' . $page->name;
        return
            response()->download(public_path($fileadd . '.zip'));
        back();
    }
}
