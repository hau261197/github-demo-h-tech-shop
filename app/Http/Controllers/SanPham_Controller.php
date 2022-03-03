<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPham_Controller extends Controller
{
    // Hàm lấy dữ liệu cho font-end
    public function font_end_data()
    {
        //lấy danh sách loại sản phẩm và số lượng sp theo loại
        $loai_san_pham = DB::table('loai_san_pham')
        ->join('san_pham','loai_san_pham.ma_loai','=','san_pham.ma_loai')
        ->select('loai_san_pham.*',DB::raw("count(san_pham.id) as tssp"))
        ->groupBy('loai_san_pham.ma_loai')
        ->get();
        //lấy danh sách nhà sản xuất theo loại sản phẩm
        $nha_san_xuat = DB::table('san_pham')
        ->join('loai_san_pham','loai_san_pham.ma_loai','=','san_pham.ma_loai')
        ->select('loai_san_pham.ten_loai','san_pham.ma_nsx')
        ->groupBy('loai_san_pham.ten_loai','san_pham.ma_nsx')
        ->get();
        //lấy danh sách sản phẩm giảm giá
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
        ->limit(3)
        ->get();
        return array(
            'loai_san_pham'=>$loai_san_pham,
            'nha_san_xuat'=>$nha_san_xuat,
            'sp_giam_gia'=>$sp_giam_gia,
        );
    }
    //Tìm kiếm sản phẩm
    public function search_sp(Request $request)
    {
        $font_data = $this->font_end_data();
        // kiểm tra giá trị của chuỗi tìm kiếm
        if($request->search_input==''||$request->search_input==' ')
        {
            $search_info = 'all';
            $list = DB::table('san_pham')
            ->where('trang_thai',1)
            ->paginate(12);
            $list->appends(['search_input' => '']);
        }
        else{
            $search_info = $request->search_input;
            $list = DB::table('san_pham')
            ->where('trang_thai',1)
            ->where('ten_san_pham','LIKE',"%$search_info%")
            ->paginate(12);
            $list->appends(['search_input' => 'laptop']);
        }
        // Kiểm tra kết quả tìm kiếm trong DB
        $i=0;
        foreach($list as $sp) $i++;
        if($i>0){
            return view('pages.san_pham.search_list',[
                'loai_san_pham'=>$font_data['loai_san_pham'],
                'nha_san_xuat'=>$font_data['nha_san_xuat'],
                'sale_product'=>$font_data['sp_giam_gia'],
                'search_info'=>$search_info,
                'list'=>$list,
            ]);
        }else{
            return view('pages.san_pham.search_list',[
                'loai_san_pham'=>$font_data['loai_san_pham'],
                'nha_san_xuat'=>$font_data['nha_san_xuat'],
                'sale_product'=>$font_data['sp_giam_gia'],
                'list_null'=>'Không tìm thấy sản phẩm phù hợp với: '.$search_info,
                'search_info'=>$search_info,
            ]);
        }
    }
    // Danh sách sản phẩm theo loại
    public function dssp_theo_loai(Request $request,$lsp)
    {
        $font_data = $this->font_end_data();
        $list = DB::table('loai_san_pham')
        ->where('loai_san_pham.id',$lsp)
        ->join('san_pham','san_pham.ma_loai','=','loai_san_pham.ma_loai')
        ->select('san_pham.*')
        ->where('san_pham.trang_thai',1)
        ->paginate(12);
        $search_info = DB::table('loai_san_pham')
        ->where('id',$lsp)
        ->first();
        $i=0;
        foreach($list as $sp) $i++;
        if($i>0){
            return view('pages.san_pham.search_list',[
                'loai_san_pham'=>$font_data['loai_san_pham'],
                'nha_san_xuat'=>$font_data['nha_san_xuat'],
                'sale_product'=>$font_data['sp_giam_gia'],
                'search_info'=>$search_info->ten_loai,
                'list'=>$list,
            ]);
        }else{
            return view('pages.san_pham.search_list',[
                'loai_san_pham'=>$font_data['loai_san_pham'],
                'nha_san_xuat'=>$font_data['nha_san_xuat'],
                'sale_product'=>$font_data['sp_giam_gia'],
                'list_null'=>'Không tìm thấy sản phẩm phù hợp với: '.$search_info,
                'search_info'=>$search_info,
            ]);
        }
    }
    // Danh sách sản phẩm theo nhà sản xuất
    public function dssp_theo_nsx(Request $request,$lsp,$nsx)
    {
        $font_data = $this->font_end_data();
        $loai = DB::table('loai_san_pham')
        ->where('ma_loai',$lsp)
        ->first();
        $ten_loai = $loai->ten_loai;
        $list = DB::table('san_pham')
        ->where('trang_thai',1)
        ->where('ma_nsx',$nsx)
        ->where('ma_loai',$lsp)
        ->paginate(12);
        $i=0;
        foreach($list as $sp) $i++;
        if($i>0){
            return view('pages.san_pham.search_list',[
                'loai_san_pham'=>$font_data['loai_san_pham'],
                'nha_san_xuat'=>$font_data['nha_san_xuat'],
                'sale_product'=>$font_data['sp_giam_gia'],
                'search_info'=>"$ten_loai $nsx",
                'list'=>$list,
            ]);
        }else{
            return view('pages.san_pham.search_list',[
                'loai_san_pham'=>$font_data['loai_san_pham'],
                'nha_san_xuat'=>$font_data['nha_san_xuat'],
                'sale_product'=>$font_data['sp_giam_gia'],
                'list_null'=>'Không tìm thấy sản phẩm phù hợp với: '."$ten_loai $nsx",
                'search_info'=>"$ten_loai $nsx",
            ]);
        }
    }
    // Danh sách sản phẩm bán chạy
    public function dssp_ban_chay()
    {
        $font_data = $this->font_end_data();
        $list = DB::table('san_pham')
        ->where('hot',1)
        ->where('trang_thai',1)
        ->paginate(12);
        $i=0;
        foreach($list as $sp) $i++;
        if($i>0){
            return view('pages.san_pham.search_list',[
                'loai_san_pham'=>$font_data['loai_san_pham'],
                'nha_san_xuat'=>$font_data['nha_san_xuat'],
                'sale_product'=>$font_data['sp_giam_gia'],
                'search_info'=>"SẢN PHẨM BÁN CHẠY",
                'list'=>$list,
            ]);
        }else{
            return view('pages.san_pham.search_list',[
                'loai_san_pham'=>$font_data['loai_san_pham'],
                'nha_san_xuat'=>$font_data['nha_san_xuat'],
                'sale_product'=>$font_data['sp_giam_gia'],
                'list_null'=>'Không tìm thấy sản phẩm phù hợp với: '."SẢN PHẨM BÁN CHẠY",
                'search_info'=>"SẢN PHẨM BÁN CHẠY",
            ]);
        }
    }
    // Danh sách sản phẩm đang giảm giá sốc
    public function dssp_giam_gia()
    {
        $font_data = $this->font_end_data();
        $list = DB::table('san_pham')
        ->where('giam_gia_soc',1)
        ->where('trang_thai',1)
        ->paginate(12);
        $i=0;
        foreach($list as $sp) $i++;
        if($i>0){
            return view('pages.san_pham.search_list',[
                'loai_san_pham'=>$font_data['loai_san_pham'],
                'nha_san_xuat'=>$font_data['nha_san_xuat'],
                'sale_product'=>$font_data['sp_giam_gia'],
                'search_info'=>"SẢN PHẨM GIẢM GIÁ SỐC",
                'list'=>$list,
            ]);
        }else{
            return view('pages.san_pham.search_list',[
                'loai_san_pham'=>$font_data['loai_san_pham'],
                'nha_san_xuat'=>$font_data['nha_san_xuat'],
                'sale_product'=>$font_data['sp_giam_gia'],
                'list_null'=>'Không tìm thấy sản phẩm phù hợp với: '."SẢN PHẨM GIẢM GIÁ SỐC",
                'search_info'=>"SẢN PHẨM GIẢM GIÁ SỐC",
            ]);
        }

    }
    //Chi tiết sản phẩm
    public function chi_tiet(Request $request,$id)
    {
        $dssp = DB::table('san_pham')
        ->where('id',$id)
        ->where('trang_thai',1)
        ->first();

        $spcl = DB::table('san_pham')
        ->where('ma_loai',$dssp->ma_loai)
        ->where('trang_thai',1)
        ->where('ma_nsx',$dssp->ma_nsx)
        ->where('id','!=',$dssp->id)
        ->get();

        $danh_gia = \DB::table('danh_gia_sp')
        ->where('ma_san_pham',$id)
        ->join('users','users.id','=','danh_gia_sp.id_user')
        ->select('danh_gia_sp.*','users.first_name','users.last_name')
        ->take(-10)
        ->get();

        $diem_danh_gia=\DB::table('danh_gia_sp')
        ->where('ma_san_pham',$id)
        ->select('sao')
        ->get();
        $diem_dg = ['1'=>0,'2'=>0,'3'=>0,'4'=>0,'5'=>0];
        foreach($diem_danh_gia as $ddg){
            $diem_dg[$ddg->sao]=$diem_dg[$ddg->sao]+1;
        }
        $color_select='';
        if($dssp->ma_loai==2201||$dssp->ma_loai==2205){
            $color_select='selected';
        }

        return view('pages.san_pham.chi_tiet',[
            'dssp'=>$dssp,
            'sp_cung_loai'=>$spcl,
            'color_select'=>$color_select,
            'danh_gia'=>$danh_gia,
            'diem_dg'=>$diem_dg,
        ]);
    }
}
