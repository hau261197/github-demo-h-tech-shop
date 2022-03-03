<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SMail_Hoantat_Donhang;

class Admin_Controller extends Controller
{
    // Trang index admin
    public function index(){
        // Danh sách tin nhắn mới
        $new_chat = \DB::table('chat_box')
        ->where('rep',0)
        ->groupBy('id_user')
        ->get();
        // Lấy danh sách sản phẩm bán chạy nhất trong 30 ngày gần nhất
        $last_month = date('Y-m-d',strtotime('-30 day',strtotime(date('Y-m-d'))));
        $spbc = \DB::table('hoa_don')
        ->whereBetween('ngay_hoa_don',[$last_month,date('Y-m-d')])
        ->where('tinh_trang','Hoàn tất')
        ->join('san_pham','san_pham.id','=','hoa_don.ma_san_pham')
        ->select(\DB::raw('count(hoa_don.ma_san_pham) as so_luong_dh,
        hoa_don.ma_san_pham,
        san_pham.id,
        san_pham.hinh_san_pham,
        san_pham.ten_san_pham,
        san_pham.store_sl_ton,
        san_pham.store_sl_da_ban'))
        ->groupBy('hoa_don.ma_san_pham')
        ->get();
        //  Lấy danh sách sản phẩm tồn kho thấp
        $tk_thap =\DB::table('san_pham')
        ->where('trang_thai',1)
        ->where('store_sl_ton','<',10)
        ->select('id',
        'hinh_san_pham',
        'ten_san_pham',
        'store_sl_ton',
        'store_sl_da_ban')
        ->orderBy('store_sl_ton','asc')
        ->get();
        //Lấy số lượng đơn hàng mới tiếp nhận
        $dh_new = \DB::table('hoa_don')
        ->where('tinh_trang','Tiếp nhận')
        ->select(\DB::raw('count(id) as TSHD'))
        ->first();
        // Lấy ra doanh thu 7 ngày gần nhất
        $tuan = date('Y-m-d',strtotime('-6 day',strtotime(date('Y-m-d'))));
        $doanh_thu = \DB::table('hoa_don')
        ->whereBetween('ngay_hoa_don',[$tuan,date('Y-m-d')])
        ->where('tinh_trang','Hoàn tất')
        ->select(\DB::raw('sum(don_gia - giam_gia) as doanh_thu,ngay_hoa_don'))
        ->groupBy('ngay_hoa_don')
        ->get();
        $doanh_thu_tuan=array();
        for($i=6;$i>=0;$i--){
            $check_dt = 0;
            $ngay = date('Y-m-d',strtotime('-'.$i.' day',strtotime(date('Y-m-d'))));
            foreach($doanh_thu as $dt){
                if($ngay == $dt->ngay_hoa_don){
                    $doanh_thu_tuan[$ngay] = $dt->doanh_thu;
                    $check_dt = 1;
                }
            }
            if($check_dt ==0){
                $doanh_thu_tuan[$ngay] = 0;
            }
        }
        $ThongkesanphamtheoNSX = \DB::table('nha_san_xuat')
        ->leftJoin('san_pham','san_pham.ma_nsx','=','nha_san_xuat.ten_nha_san_xuat')
        ->select(\DB::raw('count(san_pham.ma_nsx) as TSSP,nha_san_xuat.ten_nha_san_xuat'))
        ->groupBy('nha_san_xuat.ten_nha_san_xuat')
        ->get();
        $Thongkesanphamtheoloai = \DB::table('loai_san_pham')
        ->leftJoin('san_pham','san_pham.ma_loai','=','loai_san_pham.ma_loai')
        ->select(\DB::raw('count(san_pham.ma_loai) as TSSP,loai_san_pham.ten_loai'))
        ->groupBy('loai_san_pham.ten_loai')
        ->get();
        return view('pages.admin.index',[
            'ban_chay'=>$spbc,
            'dh_new'=>$dh_new,
            'ton_kho'=>$tk_thap,
            'doanh_thu_tuan'=>$doanh_thu_tuan,
            'name_tuan'=>'Doanh thu tuần từ ngày '.$tuan.' đến ngày '.date('Y-m-d'),
            'Thongkesanphamtheoloai'=>$Thongkesanphamtheoloai,
            'ThongkesanphamtheoNSX'=>$ThongkesanphamtheoNSX,
            'new_chat'=>$new_chat,
        ]);
    }
    // Đăng xuất tài khoản admin
    public function admin_logout(){
        \Auth::logout();
        return redirect('/');
    }
/*=====================================LOẠI SẢN PHẨM=========================== */
    //  Trang index loại sản phẩm
    public function qly_lsp(){
        $ds_lsp = \DB::table('loai_san_pham')
        ->leftJoin('san_pham','san_pham.ma_loai','=','loai_san_pham.ma_loai')
        ->select(\DB::raw('count(san_pham.ma_loai) as slsp,
            loai_san_pham.ma_loai,
            loai_san_pham.ten_loai,
            loai_san_pham.hinh,
            loai_san_pham.icon,
            loai_san_pham.ghi_chu,
            loai_san_pham.trang_thai,
            loai_san_pham.id
        '))
        ->groupBy(
            'loai_san_pham.ma_loai',
            'loai_san_pham.ten_loai',
            'loai_san_pham.hinh',
            'loai_san_pham.icon',
            'loai_san_pham.ghi_chu',
            'loai_san_pham.trang_thai',
            'loai_san_pham.id'
        )
        ->paginate(5);
        return view('pages.admin.loai_san_pham.qly_loai_san_pham',['dslsp'=>$ds_lsp]);
    }
    // chuyển đến trang nhập thông tin thêm loại sản phẩm mới
    public function them_lsp(){
        return view('pages.admin.loai_san_pham.them_loai_san_pham');
    }
    // xử lý post thêm loại sản phẩm
    public function post_them_lsp(Request $request){
        $validate = $request->validate([
            'ten_loai' => 'required',
            'ma_loai' => 'required',
            'icon' => 'required|image|mimes:png',
            'trang_thai'=>'required'
        ],[
            'required' => 'Bạn phải nhập thông tin này!',
            'icon.mimes' =>'Chỉ chấp nhận file .png!',
            'img' => 'Định dạng tệp không đúng!'
        ]);
        if($validate){
            $file_icon=$request->file('icon');
            $name_icon = $file_icon->getClientOriginalName();
            $file_icon->move('resources/hinh/icon',$name_icon);
            \DB::table('loai_san_pham')
            ->insert([
                'ten_loai' 	=> $request->ten_loai,
                'ma_loai' 	=> $request->ma_loai,
                'icon' 		=> $name_icon,
                'ghi_chu'	=> $request->ghi_chu,
                'trang_thai'=> $request->trang_thai
            ]);
            return redirect('admin/loai-san-pham/qly-loai-san-pham')->with('success','Thêm loại sản phẩm: '.$request->ten_loai.'thành công!');
        }else return redirect()->back();
    }
    // chi tiết loại sản phẩm
    public function chi_tiet_lsp($id){
        $lsp = \DB::table('loai_san_pham')
        ->where('loai_san_pham.ma_loai',$id)
        ->leftJoin('san_pham','san_pham.ma_loai','=','loai_san_pham.ma_loai')
        ->select(\DB::raw('count(san_pham.ma_loai) as slsp,
            loai_san_pham.ma_loai,
            loai_san_pham.ten_loai,
            loai_san_pham.hinh,
            loai_san_pham.icon,
            loai_san_pham.ghi_chu,
            loai_san_pham.trang_thai,
            loai_san_pham.id
        '))
        ->groupBy(
            'loai_san_pham.ma_loai',
            'loai_san_pham.ten_loai',
            'loai_san_pham.hinh',
            'loai_san_pham.icon',
            'loai_san_pham.ghi_chu',
            'loai_san_pham.trang_thai',
            'loai_san_pham.id'
        )->first();
        return view('pages.admin.loai_san_pham.chi_tiet_loai_san_pham_admin',['lsp'=>$lsp]);
    }
    // chỉnh sửa - xóa loại sản phẩm
    public function post_chi_tiet_lsp(Request $request){
        // chỉnh sửa loại sản phẩm
        if($request->has('edit')){
            $validate = $request->validate([
                'ten_loai' => 'required',
                'ma_loai' => 'required',
                'trang_thai'=>'required'
            ],[
                'required' => 'Bạn phải nhập thông tin này!',
            ]);
            // xử lý thay đổi hình ảnh
            if($request->file('icon')){
                $request->validate([
                    'icon' => 'image|mimes:png'
                ],[
                    'mimes' => 'Chỉ chấp nhận file .png kích cỡ 25x25 px!',
                ]);
                $file_icon=$request->file('icon');
                $name_icon = $file_icon->getClientOriginalName();
                $file_icon->move('resources/hinh/icon',$name_icon);
                \DB::table('loai_san_pham')
                ->where('ma_loai',$request->ma_loai_old)
                ->update([
                    'icon' 	=> $name_icon
                ]);
            }
            // xử lý thay đổi thông tin
            if($validate){
                \DB::table('loai_san_pham')
                ->where('ma_loai',$request->ma_loai_old)
                ->update([
                    'ten_loai' 	=> $request->ten_loai,
                    'ma_loai' 	=> $request->ma_loai,
                    'ghi_chu'	=> $request->ghi_chu,
                    'trang_thai'=> $request->trang_thai
                ]);
                if($request->ma_loai!=$request->ma_loai_old){
                    \DB::table('san_pham')
                    ->where('ma_loai',$request->ma_loai_old)
                    ->update([
                        'ma_loai'=>$request->ma_loai
                    ]);
                }
                return redirect('admin/loai-san-pham/qly-loai-san-pham')->with('success','Cập nhật thành công!');
            }else return redirect()->back();
        }
        // Xóa loại sản phẩm
        else if($request->has('delete')){
            \DB::table('loai_san_pham')
                ->where('ma_loai',$request->ma_loai_old)
                ->delete();
            return redirect('admin/loai-san-pham/qly-loai-san-pham')->with('success','Đã xóa loại sản phẩm '.$request->ten_loai);
        }

    }
/*=====================================SẢN PHẨM=========================== */
    // Trang index sản phẩm
    public function qly_sp(){
        $ds_nsx=\DB::table('nha_san_xuat')
        ->select('ten_nha_san_xuat','ma_nha_san_xuat')
        ->get();
        $dslsp=\DB::table('loai_san_pham')
        ->select('ten_loai','ma_loai')
        ->get();
        $dssp=\DB::table('san_pham')
        ->join('loai_san_pham','loai_san_pham.ma_loai','=','san_pham.ma_loai')
        ->select('san_pham.*','loai_san_pham.ten_loai')
        ->paginate(10);

        return view('pages.admin.san_pham.qly_san_pham',['dssp'=>$dssp,'ds_nsx'=>$ds_nsx,'dslsp'=>$dslsp]);
    }
    // Tìm kiếm sản phẩm
    public function tim_kiem_sp(Request $request){
        $ds_nsx=\DB::table('nha_san_xuat')
        ->select('ten_nha_san_xuat','ma_nha_san_xuat')
        ->get();
        $dslsp=\DB::table('loai_san_pham')
        ->select('ten_loai','ma_loai')
        ->get();
        if($request->th_lsp != -1 && $request->th_nsx!= -1){
            $dssp=\DB::table('san_pham')
            ->where('ma_loai',$request->th_lsp)
            ->where('ma_nsx',$request->th_nsx)
            ->paginate(10)
            ->appends(request()->query());
        }
        else{
            $dssp=\DB::table('san_pham')
            ->where('ma_nsx',$request->th_nsx)
            ->orwhere('ma_san_pham',$request->th_id_sp)
            ->orwhere('ma_loai',$request->th_lsp)
            ->paginate(10)
            ->appends(request()->query());
        }
        return view('pages.admin.san_pham.qly_san_pham',['dssp'=>$dssp,'ds_nsx'=>$ds_nsx,'dslsp'=>$dslsp]);
    }
    // chuyển đến trang thêm sản phẩm mới
    public function them_sp(){
        $dslsp = \DB::table('loai_san_pham')
        ->where('trang_thai',1)
        ->get();
        $ds_nsx=\DB::table('nha_san_xuat')
        ->get();
        return view('pages.admin.san_pham.them_san_pham',['dslsp'=>$dslsp,'ds_nsx'=>$ds_nsx]);
    }
    public function post_them_sp(Request $request){
        $validate = $request->validate([
            'ma_san_pham' => 'required',
            'ten_san_pham' => 'required',
            'hinh_san_pham' => 'required|image|mimes:jpg',
            'gia_goc' => 'required',
            'store_sl_ton' => 'required',
        ],[
            'required'=>'Bạn phải nhập thông tin này!',
            'mimes'=>'Chỉ chấp nhận file .jpg',
            'image'=>'Chỉ chấp nhận file ảnh',
        ]);
        if($validate){
            $dslsp = \DB::table('loai_san_pham')
            ->where('trang_thai',1)
            ->get();
            $ds_nsx=\DB::table('nha_san_xuat')
            ->get();
            $file_hinh = $request->file('hinh_san_pham');
            $name_hinh = $file_hinh->getClientOriginalName();
            $file_hinh->move('resources/hinh/hinh-san-pham',$name_hinh);
            $result = \DB::table('san_pham')
            ->insertGetId([
                'ten_san_pham'=>$request->ten_san_pham,
                'ten_url'=>$request->ten_url,
                'hinh_san_pham'=>$name_hinh,
                'ma_san_pham'=>$request->ma_san_pham,
                'gioi_thieu'=>$request->gioi_thieu,
                'gioi_thieu_2'=>$request->gioi_thieu_2,
                'gioi_thieu_3'=>$request->gioi_thieu_3,
                'tskt_ket_noi_mang'=>$request->tskt_ket_noi_mang,
                'tskt_man_hinh'=>$request->tskt_man_hinh,
                'tskt_bao_hanh'=>$request->tskt_bao_hanh,
                'tskt_VGA'=>$request->tskt_VGA,
                'tskt_camera_sau'=>$request->tskt_camera_sau,
                'tskt_camera_truoc'=>$request->tskt_camera_truoc,
                'tskt_chip'=>$request->tskt_chip,
                'tskt_ram'=>$request->tskt_ram,
                'tskt_bo_nho_trong'=>$request->tskt_bo_nho_trong,
                'tskt_sim'=>$request->tskt_sim,
                'tskt_pin'=>$request->tskt_pin,
                'tskt_pixel'=>$request->tskt_pixel,
                'tskt_material'=>$request->tskt_material,
                'tskt_weight'=>$request->tskt_weight,
                'tskt_xuat_xu'=>$request->tskt_xuat_xu,
                'gia_goc'=>$request->gia_goc,
                'giam_gia'=>$request->giam_gia,
                'store_sl_ton'=>$request->store_sl_ton,
                'store_sl_da_ban'=>$request->store_sl_da_ban,
                'store_luot_danh_gia'=>$request->store_luot_danh_gia,
                'store_danh_gia'=>$request->store_danh_gia,
                'ma_loai'=>$request->ma_loai,
                'ma_nsx'=>$request->ma_nsx,
                'trang_thai'=>$request->trang_thai,
                'hot'=>$request->hot,
                'giam_gia_soc'=>$request->giam_gia_soc,
                'like'=>$request->like,
                'new'=>$request->new,
            ]);
            if($result){
                return redirect('admin/san-pham/qly-san-pham')->with('success','Thêm mới thành công sản phẩm mã: '.$request->ma_san_pham);
            }
            else return redirect()->back()->with('fail','Thao tác không thành công!');
            // // xử lý file hình_1
            // if($request->file('hinh_1')){
            //     $validate_hinh_1 = $request->validate([
            //         'hinh_1'=>'image|mimes:jpg'
            //     ],[
            //         'image'=>'Chỉ chấp nhận file hình ảnh!',
            //         'mimes'=>'Chỉ chấp nhậ file .jpg',
            //     ]);
            //     if($validate_hinh_1){
            //         $file_hinh_1 = $request->file('hinh_1');
            //         $name_hinh_1 = $file_hinh_1->getClientOriginalName();
            //         $file_hinh_1->move('resources/hinh/hinh-san-pham',$name_hinh_1);
            //     }
            // }
            // // xử lý file hình_2
            // if($request->file('hinh_1')){
            //     $validate_hinh_1 = $request->validate([
            //         'hinh_1'=>'image|mimes:jpg'
            //     ],[
            //         'image'=>'Chỉ chấp nhận file hình ảnh!',
            //         'mimes'=>'Chỉ chấp nhậ file .jpg',
            //     ]);
            //     if($validate_hinh_1){
            //         $file_hinh_1 = $request->file('hinh_1');
            //         $name_hinh_1 = $file_hinh_1->getClientOriginalName();
            //         $file_hinh_1->move('resources/hinh/hinh-san-pham',$name_hinh_1);
            //     }
            // }
            // // xử lý file hình_3
            // if($request->file('hinh_1')){
            //     $validate_hinh_1 = $request->validate([
            //         'hinh_1'=>'image|mimes:jpg'
            //     ],[
            //         'image'=>'Chỉ chấp nhận file hình ảnh!',
            //         'mimes'=>'Chỉ chấp nhậ file .jpg',
            //     ]);
            //     if($validate_hinh_1){
            //         $file_hinh_1 = $request->file('hinh_1');
            //         $name_hinh_1 = $file_hinh_1->getClientOriginalName();
            //         $file_hinh_1->move('resources/hinh/hinh-san-pham',$name_hinh_1);
            //     }
            // }
        }else{
            return redirect()->back();
        }

    }
    public function chi_tiet_sp($id){
        $ds_nsx=\DB::table('nha_san_xuat')
        ->select('ten_nha_san_xuat','ma_nha_san_xuat')
        ->get();
        $dslsp=\DB::table('loai_san_pham')
        ->select('ten_loai','ma_loai')
        ->get();
        $sp = \DB::table('san_pham')
        ->where('ma_san_pham',$id)
        ->join('loai_san_pham','loai_san_pham.ma_loai','=','san_pham.ma_loai')
        ->select('san_pham.*','loai_san_pham.ten_loai')
        ->first();
        return view('pages.admin.san_pham.chi_tiet_san_pham_admin',['sp'=>$sp,'ds_nsx'=>$ds_nsx,'dslsp'=>$dslsp]);
    }
/*=====================================ĐƠN ĐẶT HÀNG=========================== */
    public function qly_don_hang($trang_thai){
        // switch($trang_thai){
        //     case 'tn': $trang_thai = 'Tiếp nhận'; break;
        //     case 'ht': $trang_thai = 'Hoàn tất'; break;
        //     case 'dvc': $trang_thai = 'Đang vận chuyển'; break;
        // }
        $dsdh = \DB::table('hoa_don')
        ->where('tinh_trang',$trang_thai)
        ->join('san_pham','san_pham.ma_san_pham','=','hoa_don.ma_san_pham')
        ->select('san_pham.hinh_san_pham','san_pham.ten_san_pham','hoa_don.*')
        ->paginate(10)
        ->appends(request()->query());
        return view('pages.admin.khach_hang.don_hang',['ds_dh'=>$dsdh,'trang_thai'=>$trang_thai]);
    }
    public function tim_kiem_don_hang(Request $request){
        if(strlen(trim($request->th_ma_kh)) > 0 && strlen(trim($request->th_id_sp)) > 0){
            $ds_dh=\DB::table('hoa_don')
            ->where('hoa_don.tinh_trang',$request->trang_thai)
            ->join('san_pham','san_pham.ma_san_pham','=','hoa_don.ma_san_pham')
            ->select('san_pham.hinh_san_pham','san_pham.ten_san_pham','hoa_don.*')
            ->where('hoa_don.id_ma_kh',$request->th_ma_kh)
            ->where('hoa_don.ma_san_pham',$request->th_id_sp)
            ->paginate(10)
            ->appends(request()->query());
            return view('pages.admin.khach_hang.don_hang',['ds_dh'=>$ds_dh,'trang_thai'=>$request->trang_thai]);
        }else{
            $ds_dh=\DB::table('hoa_don')
            ->where('hoa_don.tinh_trang',$request->trang_thai)
            ->join('san_pham','san_pham.ma_san_pham','=','hoa_don.ma_san_pham')
            ->select('san_pham.hinh_san_pham','san_pham.ten_san_pham','hoa_don.*')
            ->where('hoa_don.id',$request->th_ma_dh)
            ->orwhere('hoa_don.id_ma_kh',$request->th_ma_kh)
            ->orwhere('hoa_don.ma_san_pham',$request->th_id_sp)
            ->paginate(10)
            ->appends(request()->query());
            return view('pages.admin.khach_hang.don_hang',['ds_dh'=>$ds_dh,'trang_thai'=>$request->trang_thai]);
        }
    }
    // chi tiết đơn hàng
    public function chi_tiet_don_hang($id){
        $dh=\DB::table('hoa_don')
        ->where('hoa_don.id',$id)
        ->join('san_pham','san_pham.ma_san_pham','=','hoa_don.ma_san_pham')
        ->select('hoa_don.*','san_pham.ten_san_pham','san_pham.hinh_san_pham')
        ->first();
        $user=\DB::table('users')
        ->where('id',$dh->id_ma_kh)
        ->first();
        if(!$user){
            return redirect()->back()->with('fail','Không tìm thấy thông tin khách hàng!');
        }
        return view('pages.admin.khach_hang.chi_tiet_don_hang',['dh'=>$dh,'user'=>$user]);
    }
    // Cập nhật trạng thái đơn hàng. Trường hợp ở đây chỉ xét mỗi đơn hàng là 1 sản phẩm cùng mã sp
    public function cap_nhat_don_hang(Request $request,$id){
        // trường hợp hoàn tất thì thay đổi số lượng kho
        if($request->tinh_trang=='Hoàn tất'&&$request->tinh_trang_old!='Hoàn tất'){
            $sp=\DB::table('san_pham')
            ->where('ma_san_pham',$request->id_sp)
            ->select('store_sl_ton','store_sl_da_ban')
            ->first();
            \DB::table('san_pham')
            ->where('ma_san_pham',$request->id_sp)
            ->update([
                'store_sl_ton'=> $sp->store_sl_ton - 1,
                'store_sl_da_ban' => $sp->store_sl_da_ban + 1,
            ]);
            $dh=\DB::table('hoa_don')
            ->where('hoa_don.id',$id)
            ->join('san_pham','san_pham.ma_san_pham','=','hoa_don.ma_san_pham')
            ->select('hoa_don.*','san_pham.hinh_san_pham','san_pham.ten_san_pham')
            ->first();
            $user=\DB::table('users')
            ->where('id',$dh->id_ma_kh)
            ->first();
            \Mail::to($user->email)->send(new SMail_Hoantat_Donhang($user,$dh));
        }else if($request->tinh_trang=='Hoàn tất'&&$request->tinh_trang_old =='Hoàn tất'){
            return redirect()->back()->with('fail','Thao tác không thành công!');
        }
        // trường hợp đã hoàn tất mà hủy thì phục hồi số lượng kho
        if($request->tinh_trang=='Hủy'&&$request->tinh_trang_old=='Hoàn tất'){
            $sp=\DB::table('san_pham')
            ->where('ma_san_pham',$request->id_sp)
            ->select('store_sl_ton','store_sl_da_ban')
            ->first();
            \DB::table('san_pham')
            ->where('ma_san_pham',$request->id_sp)
            ->update([
                'store_sl_ton'=> $sp->store_sl_ton + 1,
                'store_sl_da_ban' => $sp->store_sl_da_ban - 1,
            ]);
        }
        // Cập nhật trạng thái đơn hàng
        $result=\DB::table('hoa_don')
        ->where('id',$id)
        ->update(['tinh_trang'=>$request->tinh_trang]);
        if($result){
            return redirect()->back()->with('success','Cập nhật thành công trạng thái đơn hàng!');
        }else return redirect()->back()->with('fail','Thao tác không thành công!');
    }
/*=====================================MÃ GIẢM GIÁ=========================== */
    // Quản lý mã giảm giá
    public function qly_ma_giam_gia(){
        $ma_giam_gia = \DB::table('ma_giam_gia')
        ->get();
        return view('pages.admin.khach_hang.qly_ma_giam_gia',['ds_mgg'=>$ma_giam_gia]);
    }
    // Tìm kiếm mã giảm giá
    public function tim_kiem_ma_giam_gia(Request $request){
        $ma_giam_gia = \DB::table('ma_giam_gia')
        ->where('code',$request->loai_mgg)
        ->orwhere('gia_tri',$request->gia_tri_mgg)
        ->get();
        return view('pages.admin.khach_hang.qly_ma_giam_gia',['ds_mgg'=>$ma_giam_gia]);
    }
    // chuyển đến trang thêm mã giảm giá
    public function them_ma_giam_gia(){
        $doi_tuong = \DB::table('users')
        ->select('member')
        ->groupBy('member')
        ->get();
        return view('pages.admin.khach_hang.them_ma_giam_gia',['doi_tuong'=>$doi_tuong]);
    }
    // nhập dữ liệu thêm mã giảm giá mới
    public function post_them_ma_giam_gia(Request $request){
        $validate = $request->validate([
            'code_mgg'=>'required|size:10|unique:ma_giam_gia,code',
            'gia_tri'=>'required|alpha_num',
            'ngay_bat_dau'=>'required|date',
            'ngay_ket_thuc'=>'required|date|after:ngay_bat_dau',
        ],[
            'unique'=>'Mã giảm giá này đã tồn tại!',
            'required'=>'Bạn phải điền thông tin này!',
            'size'=>'Phải nhập đúng 10 ký tự!',
            'date'=>'Định dạng ngày tháng không đúng!',
            'after'=>'Ngày kết thúc không được sớm hơn ngày bắt đầu!'
        ]);
        if($validate){
            $result = \DB::table('ma_giam_gia')
            ->insert([
                'code'=>$request->code_mgg,
                'khach_hang'=>$request->doi_tuong,
                'gia_tri'=>$request->gia_tri,
                'trang_thai'=>$request->trang_thai,
                'ngay_bat_dau'=>$request->ngay_bat_dau,
                'ket_thuc'=>$request->ngay_ket_thuc,
            ]);
            if($result) return redirect('admin/khach-hang/ma-giam-gia')->with('success','Thêm mã giảm giá thành công!');
            else return redirect('admin/khach-hang/ma-giam-gia')->with('fail','Thao tác thất bại!');
        }else{
            return redirect()->back();
        }
    }
    // Chi tiết mã giảm giá
    public function chi_tiet_ma_giam_gia($code){
        $mgg = \DB::table('ma_giam_gia')
        ->where('code',$code)
        ->first();
        $doi_tuong = \DB::table('users')
        ->select('member')
        ->groupBy('member')
        ->get();
        if($mgg&&$doi_tuong){
            return view('pages.admin.khach_hang.chi_tiet_ma_giam_gia',['mgg'=>$mgg,'doi_tuong'=>$doi_tuong]);
        }else return redirect('admin/khach-hang/ma-giam-gia')->with('fail','Thao tác thất bại!');
    }

    // Cập nhật mã giảm giá
    public function cap_nhat_ma_giam_gia(Request $request){
        $validate = $request->validate([
            'code_mgg'=>"required|size:10|unique:ma_giam_gia,code,$request->id_mgg",
            'gia_tri'=>'required|alpha_num',
            'ngay_bat_dau'=>'required|date',
            'ngay_ket_thuc'=>'required|date|after:ngay_bat_dau',
        ],[
            'unique'=>'Mã giảm giá này đã tồn tại!',
            'required'=>'Bạn phải điền thông tin này!',
            'size'=>'Phải nhập đúng 10 ký tự!',
            'date'=>'Định dạng ngày tháng không đúng!',
            'after'=>'Ngày kết thúc không được sớm hơn ngày bắt đầu!'
        ]);
        if($validate){
            $result = \DB::table('ma_giam_gia')
            ->where('id',$request->id_mgg)
            ->update([
                'code'=>$request->code_mgg,
                'khach_hang'=>$request->doi_tuong,
                'gia_tri'=>$request->gia_tri,
                'trang_thai'=>$request->trang_thai,
                'ngay_bat_dau'=>$request->ngay_bat_dau,
                'ket_thuc'=>$request->ngay_ket_thuc,
            ]);
            if($result) return redirect('admin/khach-hang/ma-giam-gia')->with('success','Cập nhật mã giảm giá thành công!');
            else return redirect('admin/khach-hang/ma-giam-gia')->with('fail','Thao tác thất bại!');
        }else{
            return redirect()->back();
        }
    }
    // Danh sách tin nhắn mới của khách hàng
    public function new_chat_box(){
        $new_chat_list = \DB::table('chat_box')
        ->join('users','users.id','=','chat_box.id_user')
        ->select(\DB::raw('max(chat_box.time) as time_lastest,chat_box.id_user,chat_box.content,users.*'))
        ->groupBy('chat_box.id_user')
        ->paginate(10);
        $ds_member = \DB::table('users')
        ->select('member')
        ->groupBy('member')
        ->get();
        // var_dump($new_chat); return 'ok';
        return view('new_chat_list',['new_chat_list'=>$new_chat_list,'ds_member'=>$ds_member]);
    }
    public function tim_kiem_tin_nhan(Request $request){
        $new_chat_list = \DB::table('chat_box')
        ->join('users','users.id','=','chat_box.id_user')
        ->select(\DB::raw('max(chat_box.time) as time_lastest,chat_box.id_user,chat_box.content,users.*'))
        ->where('chat_box.rep',0)
        ->where('chat_box.id_user',$request->th_id_user)
        ->orwhere('users.email',$request->th_email)
        ->orwhere('users.phone',$request->th_phone)
        ->orwhere('users.member',$request->th_member)
        ->groupBy('chat_box.id_user')
        ->paginate(10);
        $ds_member = \DB::table('users')
        ->select('member')
        ->groupBy('member')
        ->get();
        // var_dump($new_chat); return 'ok';
        return view('new_chat_list',['new_chat_list'=>$new_chat_list,'ds_member'=>$ds_member]);
    }
    // chi tiết tin nhắn
    public function chi_tiet_tin_nhan($id){
        $user = \DB::table('users')
        ->where('id',$id)
        ->first();
        $chat_history = \DB::table('chat_box')
        ->where('id_user',$id)
        ->take(-20)
        ->orderBy('time','asc')
        ->get();
        // var_dump($chat_history); return 'ok';
        return view('chi_tiet_tin_nhan',['chat_history'=>$chat_history,'user'=>$user]);
    }
    // chi tiết tin nhắn
    public function rep_tin_nhan(Request $request){
        // xóa comment cũ
        $id_user = $request->id_user;
        if(isset($request->load_data)){
            $chat=\DB::table('chat_box')
            ->where('id_user',$id_user)
            ->take(-20)
            ->orderBy('time','asc')
            ->get();
            $chat_arr= array();
            foreach ($chat as $ch){
                $chat_arr[] = (array)$ch;
            }
            return response()->json($chat_arr);
        }else{
            if(strlen(trim($request->text))>0){
                \DB::table('chat_box')
                ->insert([
                    'statut'=>0,
                    'id_user'=>$id_user,
                    'content'=>$request->text,
                    'time'=>date('Y-m-d H:i:s'),
                    'rep'=>1,
                ]);
                \DB::table('chat_box')
                ->where('id_user',$id_user)
                ->where('rep',0)
                ->update(['rep'=>1]);
                $chat_history_all=\DB::table('chat_box')
                ->where('id_user',$id_user)
                ->take(-20)
                ->orderBy('time','asc')
                ->get();
                $chat_history = array();
                foreach($chat_history_all as $chat){
                    $chat_history[] = (array)$chat;
                }
                return response()->json($chat_history);
            }
            else return response()->json(['fail'=>'thất bại']);
        }
    }
/*=====================================BÁO CÁO THỐNG KÊ=========================== */
    public function bao_cao_thong_ke(){
        $thong_ke_loai_sp = \DB::table('loai_san_pham')
        ->join('san_pham','san_pham.ma_loai','=','loai_san_pham.ma_loai')
        ->select(\DB::raw('count(san_pham.ma_loai) as TSSP, loai_san_pham.ten_loai'))
        ->groupBy('loai_san_pham.ten_loai')
        ->get();
        $start_week = date('Y-m-d',strtotime('-6 day',strtotime(date('Y-m-d'))));
        $doanh_thu = \DB::table('hoa_don')
        ->where('ngay_hoa_don','>=',$start_week)
        ->where('ngay_hoa_don','<=',date('Y-m-d'))
        ->where('tinh_trang','Hoàn tất')
        ->select(\DB::raw('sum(don_gia * so_luong - giam_gia) as doanh_thu_ngay,ngay_hoa_don'))
        ->groupBy('ngay_hoa_don')
        ->get();
        return view('pages.admin.bctk.index',['Thongkesanphamtheoloai'=>$thong_ke_loai_sp,'doanh_thu'=>$doanh_thu]);
    }
}
