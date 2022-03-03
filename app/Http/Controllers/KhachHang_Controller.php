<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Mail\SMail_Quen_MK;
use App\Mail\SMail_DonHang;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class KhachHang_Controller extends Controller
{
    // Lấy dữ liệu db để điền vào các mục giao diện
    public function font_end_data()
    {
        //lấy danh sách loại sản phẩm và số lượng sp theo loại
        $loai_san_pham = DB::table('loai_san_pham')
        ->join('san_pham','loai_san_pham.ma_loai','=','san_pham.ma_loai')
        ->select('loai_san_pham.ten_loai as ten_loai','loai_san_pham.ma_loai as ma_loai',DB::raw("count(san_pham.id) as tssp"))
        ->groupBy('loai_san_pham.ma_loai','loai_san_pham.ten_loai')
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
    // gọi giao diện đăng ký
    public function dang_ky()
    {
        $font_data = $this->font_end_data();
        $search_info='';
        return view('pages.khach_hang.dang_ky',[
            'loai_san_pham'=>$font_data['loai_san_pham'],
            'nha_san_xuat'=>$font_data['nha_san_xuat'],
            'sale_product'=>$font_data['sp_giam_gia'],
            'search_info'=>$search_info,
        ]);
    }
    // xử lý dữ liệu đăng ký của người dùng
    public function post_dang_ky(Request $request)
    {
        $validate = $request->validate([
            'gioi_tinh'=>'required',
            'ho'=>'required',
            'ten'=>'required',
            'email'=>'required|email|unique:users,email',
            'bday'=>'required|before:yesterday',
            'password'=>'required',
            're_password'=>'required|same:password',
            'address1'=>'required',
            'address2'=>'required',
            'address3'=>'required',
            'address4'=>'required',
            'so_dien_thoai'=>'required|size:10',
        ],[
            'gioi_tinh.required'=>'Bạn phải chọn thông tin giới tính!',
            'ho.required'=>'Bạn chưa điền họ!',
            'ten.required'=>'Bạn chưa điền tên!',
            'email.required'=>'Bạn chưa điền email!',
            'email.email'=>'Định dạng email không đúng!',
            'email.unique'=>'Email đã tồn tại!',
            'password.required'=>'Bạn chưa nhập password!',
            're_password.same'=>'Mật khẩu nhập lại không khớp!',
            'bday.required'=>'Bạn chưa điền ngày sinh!',
            'bday.before'=>'Ngày sinh không hợp lệ!',
            'address1.required'=>'Bạn chưa điền số nhà, tên đường!',
            'address2.required'=>'Bạn chưa điền xã/phường!',
            'address3.required'=>'Bạn chưa điền huyện/thành phố!',
            'address4.required'=>'Bạn chưa điền tỉnh!',
            'so_dien_thoai.required'=>'Bạn chưa điền số điện thoại!',
            'so_dien_thoai.size'=>'Số điện thoại không đúng!',
        ]);
        if($validate)
        {
            $add_user = DB::table('users')->insert([
                'is_admin'=>0,
                'member'=>'customer',
                'first_name'=>$request->ho,
                'last_name'=>$request->ten,
                'gioi_tinh'=>$request->gioi_tinh,
                'ngay_sinh'=>$request->bday,
                'address1'=>$request->address1,
                'address2'=>$request->address2,
                'address3'=>$request->address3,
                'address4'=>$request->address4,
                'cong_ty'=>$request->cong_ty,
                'so_thich'=>$request->so_thich,
                'phone'=>$request->so_dien_thoai,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
            ]);
            if($add_user) return redirect('khach-hang/dang-nhap')->with('success','Đăng ký thành công!');
            else return redirect('khach-hang/dang-nhap')->with('fail','Đăng ký thất bại, vui lòng liên hệ hỗ trợ để được phục vụ!');
        }
        else return redirect()->back();
    }
    // gọi giao diện đăng nhập
    public function dang_nhap()
    {
        $font_data = $this->font_end_data();
        $search_info='';
        return view('pages.khach_hang.dang_nhap',[
            'loai_san_pham'=>$font_data['loai_san_pham'],
            'nha_san_xuat'=>$font_data['nha_san_xuat'],
            'sale_product'=>$font_data['sp_giam_gia'],
            'search_info'=>$search_info,
        ]);
    }
    // xử lý đăng nhập
    public function post_dang_nhap(Request $request)
    {
        $validate = $request->validate([
            'ctm_email'=>'required|email',
            'ctm_password'=>'required',
        ],[
            'ctm_email.required'=>'Bạn chưa nhập email!',
            'ctm_email.email'=>'định dạng email không đúng!',
            'ctm_password.required'=>'Bạn chưa nhập password!',
        ]);
        if($validate)
        {
            if($request->remember_me) $remember_me=true;
            else $remember_me=null;
            if(Auth::attempt(['email' => $request->ctm_email, 'password' => $request->ctm_password],$remember_me))
            {

                return redirect('/');
            }
            else return redirect()->back()->with('fail','Thông tin đăng nhập không đúng!');
        }
        else return redirect()->back();
    }
    public function dang_xuat(){
        Auth::logout();
        return redirect('/');
    }
    public function quen_mk(Request $request){
        $validate=$request->validate([
            'email'=>'required|email',
        ],[
            'email.required'=>'Bạn chưa nhập địa chỉ email!',
            'email.email'=>'Định dạng email không đúng!',
        ]);
        if($validate){
            $token = Str::random(50);
            DB::table('users')->where('email',$request->email)
            ->update(['token'=>$token]);
            Mail::to($request->email)->send(new SMail_Quen_MK($token));
            return redirect()->back()->with('success','Thành công! Hãy kiểm tra mail của bạn!');
        }
        else return redirect()->back();
    }
    public function rep_quen_mk($token){
        $user = DB::table('users')
        ->where('token',$token)
        ->first();
        if($user){
            return view('pages.khach_hang.doi_mat_khau',['user'=>$user]);
        }else{
            return redirect('khach-hang/dang-nhap')->with('fail','Mã xác thực đã quá hạn!');
        }
    }
    public function rep_doi_mk(){
        if(Auth::check()){
            $user=Db::table('users')
            ->where('id',Auth::user()->id)
            ->first();
            return view('pages.khach_hang.doi_mat_khau',['user'=>$user]);
        }else{
            return redirect('khach-hang/dang-nhap');
        }
    }
    public function doi_mat_khau(Request $request){
        $validate = $request->validate([
            'ctm_password'=>'required',
            'ctm_re_password'=>'required|same:ctm_password',
        ],[
            'ctm_password.required'=>'Bạn chưa nhập password!',
            'ctm_re_password.same'=>'Mật khẩu nhập lại không đúng!',
        ]);
        if($validate)
        {
            if($request->remember_me) $remember_me=true;
            else $remember_me=null;
            DB::table('users')
                ->where('email',$request->ctm_email)
                ->update([
                    'password'=>bcrypt($request->ctm_password),
                    'token'=>null,
                ]);
                if(Auth::check()) Auth::logout();
            return redirect('khach-hang/dang-nhap')->with('success','Thao tác hành công, mời bạn đăng nhập!');
        }
        else return redirect()->back();
    }
    public function thong_tin_tai_khoan(){
        if(Auth::check()){
            return view('pages.khach_hang.thong_tin_tai_khoan');
        }else return redirect('khach-hang/dang-nhap');
    }
    // Cập nhật thông tin người dùng
    public function cap_nhat_tai_khoan(Request $request)
    {
        $validate = $request->validate([
            'gioi_tinh'=>'required',
            'ho'=>'required',
            'ten'=>'required',
            'email'=>'required|email',
            'bday'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'address3'=>'required',
            'address4'=>'required',
            'so_dien_thoai'=>'required|size:10',
        ],[
            'gioi_tinh.required'=>'Bạn phải chọn thông tin giới tính!',
            'ho.required'=>'Bạn chưa điền họ!',
            'ten.required'=>'Bạn chưa điền tên!',
            'email.required'=>'Bạn chưa điền email!',
            'email.email'=>'Định dạng email không đúng!',
            'bday.required'=>'Bạn chưa điền ngày sinh!',
            'address1.required'=>'Bạn chưa điền số nhà, tên đường!',
            'address2.required'=>'Bạn chưa điền xã/phường!',
            'address3.required'=>'Bạn chưa điền huyện/thành phố!',
            'address4.required'=>'Bạn chưa điền tỉnh!',
            'so_dien_thoai.required'=>'Bạn chưa điền số điện thoại!',
            'so_dien_thoai.size'=>'Số điện thoại không đúng!',
        ]);
        if($validate)
        {
            $custom_user = DB::table('users')
            ->where('id',Auth::user()->id)
            ->update([
                'is_admin'=>0,
                'member'=>'customer',
                'first_name'=>$request->ho,
                'last_name'=>$request->ten,
                'gioi_tinh'=>$request->gioi_tinh,
                'ngay_sinh'=>$request->bday,
                'address1'=>$request->address1,
                'address2'=>$request->address2,
                'address3'=>$request->address3,
                'address4'=>$request->address4,
                'cong_ty'=>$request->cong_ty,
                'so_thich'=>$request->so_thich,
                'phone'=>$request->so_dien_thoai,
                'email'=>$request->email,
            ]);
            if($custom_user) return redirect()->back()->with('success','Cập nhật thành công!');
            else return redirect()->back()->with('fail','Cập nhật thất bại, vui lòng liên hệ hỗ trợ để được phục vụ!');
        }
        else return redirect()->back();
    }
    public function add_cart(Request $request){
        \Cart::add([
            'id'=>$request->id_san_pham,
            'name'=>$request->ten_san_pham,
            'qty'=>$request->Th_soluong,
            'price'=>$request->gia_san_pham,
            'options'=>['mau'=>$request->mau_san_pham,
            'hinh'=>$request->Th_hinh_san_pham,]
        ]);
        if($request->has('btn_submit1')){
            return redirect()->back();
        }
        else if($request->has('btn_submit2')){
            return redirect('khach-hang/gio-hang');
        }

    }
    public function gio_hang(){
        return view('pages.khach_hang.thong_tin_gio_hang');
    }
    public function destroy_cart(){
        \Cart::destroy();
        return redirect('/');
    }
    public function remove_cart($rowID){
        \Cart::remove($rowID);
        return redirect()->back()->with('success','Đã xóa 1 mặt hàng!');
    }
    public function check_mgg(Request $request){
        $mgg = $request->th_ma_giam_gia;
        $user = Auth::user();
        // kiểm tra xem người dùng A đã sử dụng mã ABC chưa
        $check_used = DB::table('mgg_check')
        ->where('ma_khach_hang',$user->id)
        ->where('mgg_code',$mgg)
        ->first();
        if(!$check_used){
            $mgg_valid = DB::table('ma_giam_gia')
            ->where('code',$mgg)
            ->where('trang_thai',1)
            ->where('khach_hang',$user->member)
            ->where('ket_thuc','>=',now())
            ->first();
            if($mgg_valid){
                return view('pages.khach_hang.thong_tin_gio_hang',['mgg_code'=>$mgg_valid]);
            }else return redirect()->back()->with('fail','Mã không hợp lệ!');
        }else return redirect()->back()->with('fail','Bạn đã sử dụng mã giảm giá này rồi!');
    }
    /* Đặt hàng:
    1. chèn data vào bảng hoa_don
    2. chèn data vào bảng check_mgg
    3. remove sản phẩm khỏi giỏ hàng
    4. Gửi mail
    5. trở lại trang theo dõi đơn hàng
    */
    public function tien_hanh_dat_hang(Request $request){
        $user = Auth::user();
        // chèn giá trị giảm giá vào mảng để gửi sèd mail
        if($request->th_giam_gia) $giam_gia['giam_gia'] = $request->th_giam_gia;
        else $giam_gia['giam_gia'] = 0;

        $list_product = \Cart::content();
        $ma_dh=array();
        $tam_1=true;
        // tạo đơn hàng, mỗi mặt hàng là 1 đơn hàng
        foreach($list_product as $product){
            $id_don_hang=DB::table('hoa_don')
            ->insertGetId([
                'ngay_hoa_don'=>now(),
                'id_ma_kh'=>$user->id,
                'ma_san_pham'=>$product->id,
                'so_luong'=>$product->qty,
                'mau_san_pham'=>$product->options->mau,
                'don_gia'=>$product->price,
                'giam_gia'=>0,
                'tinh_trang'=>'Tiếp nhận',
            ]);
            // update lại giá trị giảm giá cho đơn hàng đầu tiên
            if($tam_1){
                \DB::table('hoa_don')
                ->where('id',$id_don_hang)
                ->update([
                    'giam_gia'=>$giam_gia['giam_gia'],
                ]);
                $id_don_hang_gg = $id_don_hang;//  biến lấy id của đơn hàng được gán mã giảm giá trong trường hợp đơn hàng có nhiều mặt hàng
                $giam_gia['rowId'] = $product->rowId; //gán id của đơn hàng được giảm giá vào mảng để gửi sang mail
            }
            $ma_dh += array($product->rowId=>$id_don_hang);
            $tam_1=false;
        }
        // chèn data vào bảng check mgg để vô hiệu mgg đã sử dụng
        if($request->th_code){
            DB::table('mgg_check')
            ->insert([
                'ma_khach_hang'=>$user->id,
                'mgg_code'=>$request->th_code,
                'id_don_hang'=>$id_don_hang_gg,
            ]);
        }
        \Mail::to($user->email)->send(new SMail_DonHang($list_product,$ma_dh,$giam_gia));
        \Cart::destroy();
        return redirect('khach-hang/theo-doi-don-hang')->with('success','Đặt hàng thành công!');
    }
    // Lịch sử mua hàng
    public function lich_su_mua_hang(){
        $Don_dat_hang = DB::table('hoa_don')
        ->join('san_pham','hoa_don.ma_san_pham', '=', 'san_pham.id')
        ->select('san_pham.hinh_san_pham','san_pham.ten_san_pham','san_pham.id as id_sp','hoa_don.*')
        ->where('hoa_don.id_ma_kh',Auth::user()->id)
        ->whereIn('hoa_don.tinh_trang', ['Hoàn tất', 'Hủy'])
        ->get();
        return view('pages.khach_hang.lich_su_mua_hang',['DonDatHang'=>$Don_dat_hang]);
    }
    // Theo dõi đơn hàng
    public function theo_doi_don_hang(){
        $Don_dat_hang = DB::table('hoa_don')
        ->join('san_pham','hoa_don.ma_san_pham', '=', 'san_pham.id')
        ->select('san_pham.hinh_san_pham','san_pham.ten_san_pham','hoa_don.*')
        ->where('id_ma_kh',Auth::user()->id)
        ->whereIn('tinh_trang', ['Tiếp nhận', 'Đang vận chuyển'])
        ->get();
        return view('pages.khach_hang.theo_doi_don_hang',['DonDatHang'=>$Don_dat_hang]);
    }
    // Mã giảm giá
    public function ma_giam_gia(){
        $mgg_all = DB::table('mgg_check')
        ->where('ma_khach_hang',Auth::user()->id)
        ->get();
        // mảng chứa mã code đã sử dụng
        $mgg_dsd = array();
        foreach($mgg_all as $mgg){
            $mgg_dsd[$mgg->id] = $mgg->mgg_code;
        }
        $mgg_check_used= DB::table('ma_giam_gia')
        ->where('khach_hang',Auth::user()->member)
        ->where('trang_thai',1)
        ->whereNotIn('code',$mgg_dsd)
        ->get();
        $mgg_exp = array();
        foreach($mgg_check_used as $code=>$mgg_1){
            if(strtotime($mgg_1->ket_thuc)<strtotime(date('Y-m-d')))
            $mgg_exp[$mgg_1->code]="Đã hết hạn";
            else $mgg_exp[$mgg_1->code]="Chưa sử dụng";
        }
        return view('pages.khach_hang.ma_giam_gia',['ds_mgg'=>$mgg_check_used,'mgg_exp'=>$mgg_exp]);
    }
    // hủy đơn hàng đang tiếp nhận
    public function huy_don_hang($id){
        $dh = \DB::table('hoa_don')
        ->where('id',$id)
        ->update(['tinh_trang'=>'Hủy']);
        $mgg = \DB::table('mgg_check')
        ->where('id_don_hang',$id)
        ->where('ma_khach_hang',\Auth::user()->id)
        ->delete();
        return redirect('khach-hang/theo-doi-don-hang')->with('success','Hủy đơn đặt hàng thành công!');
    }
    // load giao diện đánh giá sản phẩm
    public function danh_gia_san_pham($id){
        return redirect('san-pham/chi-tiet/'.$id)->with('user_comment','danh_gia');
    }
    public function post_danh_gia_san_pham(Request $request,$id){
        \DB::table('danh_gia_sp')
            ->insert([
                'ma_san_pham'=>$id,
                'id_user'=>\Auth::user()->id,
                'sao'=>$request->rating,
                'noi_dung_danh_gia'=>$request->Comment,
                'time'=>date('Y-m-d'),
                'hinh'=>null,]);
        if($request->has('hinh')){
            $file=$request->file('hinh');
            $file_name=$file->getClientOriginalName();
            $file->move('resources/hinh/hinh_y_kien',$file_name);
            \DB::table('danh_gia_sp')
            ->where('ma_san_pham',$id)
            ->update(['hinh'=>$file_name]);
        }
        return redirect('san-pham/chi-tiet/'.$id);
    }
}
