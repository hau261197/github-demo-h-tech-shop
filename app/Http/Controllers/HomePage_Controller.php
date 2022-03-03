<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePage_Controller extends Controller
{
    public function home()
    {
        $slider = DB::table('slider')->get();
        //lấy danh sách loại sản phẩm và số lượng sp theo loại
        $loai_san_pham = DB::table('loai_san_pham')
        ->join('san_pham','loai_san_pham.ma_loai','=','san_pham.ma_loai')
        ->select('loai_san_pham.*',
            DB::raw("count(san_pham.id) as tssp"))
        ->groupBy('loai_san_pham.ma_loai')
        ->get();
        //lấy danh sách nhà sản xuất theo loại sản phẩm
        $nha_san_xuat = DB::table('san_pham')
        ->join('loai_san_pham','loai_san_pham.ma_loai','=','san_pham.ma_loai')
        ->select('loai_san_pham.ten_loai','san_pham.ma_nsx')
        ->groupBy('loai_san_pham.ten_loai','san_pham.ma_nsx')
        ->get();
        //lấy danh sách sản phẩm hot
        $hot_product = DB::table('san_pham')
        ->where('trang_thai',1)
        ->where('hot',1)
        ->limit(15)
        ->get();
        $new_product = DB::table('san_pham')
        ->where('new',1)
        ->limit(8)
        ->get();
        $sp_giam_gia = DB::table('san_pham_giam_gia')
        ->join('san_pham','san_pham_giam_gia.id_sp','=','san_pham.id')
        ->select(
            'san_pham.ten_san_pham',
            'san_pham.hinh_san_pham',
            'san_pham.id',
            'san_pham.gia_goc',
            'san_pham.giam_gia',
            'san_pham_giam_gia.date',
            'san_pham_giam_gia.so_luong')
        ->where('san_pham_giam_gia.trang_thai',1)
        ->where('san_pham_giam_gia.so_luong','>',0)
        ->get();
        //var_dump($nha_san_xuat);
        return view('pages.home',[
            'slider'=>$slider,
            'loai_san_pham'=>$loai_san_pham,
            'nha_san_xuat'=>$nha_san_xuat,
            'hot_product'=>$hot_product,
            'new_product'=>$new_product,
            'sale_product'=>$sp_giam_gia,
        ]);
    }
}
