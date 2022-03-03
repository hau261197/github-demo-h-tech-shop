<h3 style="background-color: #e9a974; color:#9c0f26">Theo dõi đơn hàng</h3>
<table >
    <tr>
        <td><b>Khách hàng</b></td>
        <td>{{ Auth::user()->first_name.' '.Auth::user()->last_name }}</td>
        <td><b>Địa chỉ</b></td>
        <td colspan="5">{{ Auth::user()->address1.', '.Auth::user()->address2.', '.Auth::user()->address3.', '.Auth::user()->address4 }}</td>
    </tr>
    <tr>
        <td><b>Điện thoại</b></td>
        <td>{{ Auth::user()->phone }}</td>
        <td><b>Email</b></td>
        <td>{{ Auth::user()->email }}</td>
    </tr>
</table>
<table >
    <thead>
        <tr style="background-color: #02acea">
            <td ><b>Mã hóa đơn</b></td>
            <td ><b>Ngày</b></td>
            <td ><b>Hình</b></td>
            <td ><b>Tên SP</b></td>
            <td ><b>Số lượng</b></td>
            <td ><b>Màu</b></td>
            <td ><b>Đơn giá</b></td>
            <td ><b>Giảm giá</b></td>
            <td ><b>Thành tiền</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach (Cart::content() as $dh)
        <tr>
            <td>{{ $ma_dh[$dh->rowId] }}</td>
            <td>{{ now() }}</td>
            <td>
                <img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$dh->options->hinh.'.jpg') }}" class="img-thumbnail" style="width: 50px; height:50px;">
            </td>
            <td>{{ $dh->name }}</td>
            <td>{{ $dh->qty }}</td>
            <td style="color: {{ $dh->options->mau }}">{{ $dh->options->mau }}</td>
            <td>{{ number_format($dh->price).'đ' }}</td>
            <td>
                @if($giam_gia['rowId']==$dh->rowId)
                    {{number_format($giam_gia['giam_gia']).'đ'}}
                @else
                    0 đ
                @endif
            </td>
            <td>
                @if($giam_gia['rowId']==$dh->rowId)
                    {{ number_format($dh->qty * $dh->price - $giam_gia['giam_gia']).'đ' }}
                @else
                    {{ number_format($dh->qty * $dh->price).'đ' }}
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>

    </tfoot>
</table>
<style>
    table, th, td {
        border: 1px solid white;
        border-collapse: collapse;
    }
    th, td {
        text-align:center;
        background-color: #d5fdfd;
}
</style>
