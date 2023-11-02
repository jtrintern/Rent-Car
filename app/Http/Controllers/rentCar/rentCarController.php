<?php

namespace App\Http\Controllers\rentCar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class rentCarController extends Controller
{
    public function Home() {
        return view('rentcarr.index');
    }

    public function PageListkendaraan() {
        return view('rentcarr.page.listkendaraan');
    }

    public function PageDetailkendaraan() {
        return view('rentcarr.page.detailkendaraan');
    }

    public function PagePesan() {
        return view('rentcarr.page.pesan');
    }

    public function PageInvoice() {
        return view('rentcarr.page.invoice');
    }

    public function PageLoginRegister() {
        return view('rentcarr.page.login-register');
    }
}
