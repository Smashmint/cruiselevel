<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Imports\ProfileImport;
use Storage;
use Excel;
use Carbon\Carbon;

class TestController extends Controller
{
    public function test()
    {
        $handle = Str::between(urldecode('https://www.linkedin.com/search/results/people/?connectionOf=%5B%22ACoAAAHxKgkBF11wVCH5hmVaWKjtYPA48TZb5ns%22%5D'), '"', '"');

        dd($handle);
    }
}
