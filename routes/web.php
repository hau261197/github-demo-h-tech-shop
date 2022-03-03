<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePage_Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SanPham_Controller;
use App\Http\Controllers\KhachHang_Controller;
use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\ChatBox_Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomePage_Controller::class,'home'])->name('home');
Route::get('/update-nsx/{id}/{name}',function($id,$name){
    $result = DB::table('san_pham')
    ->where('ma_nsx','=',$id)
    ->update(['ma_nsx'=>$name]);
    if($result)
    {
        echo 'thành công!';
    }else echo 'thất bại!';
});
// Route::get('rep-tin-nhan',[Admin_Controller::class,'rep_tin_nhan']);
Route::group(['prefix'=>'san-pham'],function(){
    Route::get('search-sp',[SanPham_Controller::class,'search_sp']);
    Route::get('tim-theo-loai/{lsp}',[SanPham_Controller::class,'dssp_theo_loai']);
    Route::get('tim-theo-nsx/{lsp}/{nsx}',[SanPham_Controller::class,'dssp_theo_nsx']);
    Route::get('chi-tiet/{id}',[SanPham_Controller::class,'chi_tiet']);
    Route::get('spbc',[SanPham_Controller::class,'dssp_ban_chay']);
    Route::get('spggs',[SanPham_Controller::class,'dssp_giam_gia']);
});

Route::group(['prefix'=>'khach-hang'],function(){
    Route::get('dang-ky',[KhachHang_Controller::class,'dang_ky']);
    Route::post('dang-ky',[KhachHang_Controller::class,'post_dang_ky']);
    Route::get('dang-nhap',[KhachHang_Controller::class,'dang_nhap']);
    Route::post('dang-nhap',[KhachHang_Controller::class,'post_dang_nhap']);
    Route::get('dang-xuat',[KhachHang_Controller::class,'dang_xuat']);
    Route::post('quen-mat-khau',[KhachHang_Controller::class,'quen_mk']);
    Route::get('quen-mat-khau/{token}',[KhachHang_Controller::class,'rep_quen_mk']);
});

Route::group(['prefix'=>'khach-hang','middleware'=>['check.login']],function(){
    Route::get('them-gio-hang',[KhachHang_Controller::class,'add_cart']);
    Route::post('doi-mat-khau',[KhachHang_Controller::class,'doi_mat_khau']);
    Route::get('doi-mk',[KhachHang_Controller::class,'rep_doi_mk']);
    Route::get('thong-tin-tai-khoan',[KhachHang_Controller::class,'thong_tin_tai_khoan']);
    Route::post('thong-tin-tai-khoan',[KhachHang_Controller::class,'cap_nhat_tai_khoan']);
    Route::get('gio-hang',[KhachHang_Controller::class,'gio_hang']);
    Route::get('xoa-gio-hang',[KhachHang_Controller::class,'destroy_cart']);
    Route::get('xoa-mat-hang/{rowID}',[KhachHang_Controller::class,'remove_cart']);
    Route::post('check-mgg',[KhachHang_Controller::class,'check_mgg']);
    Route::get('tien-hanh-dat-hang',[KhachHang_Controller::class,'tien_hanh_dat_hang']);
    Route::get('lich-su-mua-hang',[KhachHang_Controller::class,'lich_su_mua_hang']);
    Route::get('theo-doi-don-hang',[KhachHang_Controller::class,'theo_doi_don_hang']);
    Route::get('ma-giam-gia',[KhachHang_Controller::class,'ma_giam_gia']);
    Route::get('huy-don-hang/{id}',[KhachHang_Controller::class,'huy_don_hang']);
    Route::get('danh-gia-san-pham/{id}',[KhachHang_Controller::class,'danh_gia_san_pham']);
    Route::post('danh-gia-san-pham/{id}',[KhachHang_Controller::class,'post_danh_gia_san_pham']);
});

Route::group(['prefix'=>'admin','middleware'=>['admin.login']],function(){
    Route::get('home',[Admin_Controller::class,'index']);
    Route::get('dang-xuat',[Admin_Controller::class,'admin_logout']);
    // chat
    Route::get('customer-post-chat-box-rep',[ChatBox_Controller::class,'rep_chat_box']);
    Route::get('customer-new-chat-box',[Admin_Controller::class,'new_chat_box']);
    Route::post('tim-kiem-tin-nhan',[Admin_Controller::class,'tim_kiem_tin_nhan']);
    Route::get('chi-tiet-tin-nhan/{id}',[Admin_Controller::class,'chi_tiet_tin_nhan']);


    // Loại sản phẩm
    Route::group(['prefix'=>'loai-san-pham'],function(){
        Route::get('qly-loai-san-pham',[Admin_Controller::class,'qly_lsp']);
        Route::get('them-loai-san-pham',[Admin_Controller::class,'them_lsp']);
        Route::post('them-loai-san-pham',[Admin_Controller::class,'post_them_lsp']);
        Route::get('chi-tiet-loai-san-pham/{id}',[Admin_Controller::class,'chi_tiet_lsp']);
        Route::post('chi-tiet-loai-san-pham',[Admin_Controller::class,'post_chi_tiet_lsp']);
    });
    // Sản phẩm
    Route::group(['prefix'=>'san-pham'],function(){
        Route::get('qly-san-pham',[Admin_Controller::class,'qly_sp']);
        Route::get('danh-sach-tim-kiem',[Admin_Controller::class,'tim_kiem_sp']);
        Route::get('them-san-pham',[Admin_Controller::class,'them_sp']);
        Route::post('them-san-pham',[Admin_Controller::class,'post_them_sp']);
        Route::post('them-san-pham',[Admin_Controller::class,'post_them_sp']);
        Route::get('chi-tiet/{id}',[Admin_Controller::class,'chi_tiet_sp']);
    });
    // Đơn hàng
    Route::group(['prefix'=>'khach-hang'],function(){
        Route::get('qly-don-hang/{trang_thai}',[Admin_Controller::class,'qly_don_hang']);
        Route::get('tim-kiem-don-hang',[Admin_Controller::class,'tim_kiem_don_hang']);
        Route::get('chi-tiet-don-hang/{id}',[Admin_Controller::class,'chi_tiet_don_hang']);
        Route::get('cap-nhat-don-hang/{id}',[Admin_Controller::class,'cap_nhat_don_hang']);
        Route::get('ma-giam-gia',[Admin_Controller::class,'qly_ma_giam_gia']);
        Route::get('tim-kiem-ma-giam-gia',[Admin_Controller::class,'tim_kiem_ma_giam_gia']);
        Route::get('them-ma-giam-gia',[Admin_Controller::class,'them_ma_giam_gia']);
        Route::post('them-ma-giam-gia',[Admin_Controller::class,'post_them_ma_giam_gia']);
        Route::get('chi-tiet-ma-giam-gia/{code}',[Admin_Controller::class,'chi_tiet_ma_giam_gia']);
        Route::post('cap-nhat-ma-giam-gia',[Admin_Controller::class,'cap_nhat_ma_giam_gia']);
    });

});
// chat
Route::get('chat-box',[ChatBox_Controller::class,'lien_he'])->middleware('check.login');
Route::post('customer-post-chat-box',[ChatBox_Controller::class,'ctm_post']);
// Route::get('customer-post-chat-box-test',[ChatBox_Controller::class,'test']);
Route::post('rep-tin-nhan',[Admin_Controller::class,'rep_tin_nhan']);
