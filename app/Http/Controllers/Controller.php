<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Project;
use App\Image;
use App\Tag;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/Company Profile KTF Updated (2016).pdf";
        $headers = array(
                  'Content-Type: application/pdf',
                );

        return response()->download($file, 'Company Profile KTF Updated (2016).pdf', $headers);
    }

    public function showPage($page)
    {
        return view('ktfui.profile',['hals' => $page]);
    }
}
