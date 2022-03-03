<h3 style="background-color: #e9a974; color:#9c0f26">Đã giao hàng</h3>
<p>Đơn hàng của bạn đã được giao thành công! Chân thành cảm ơn sự tin tưởng và ủng hộ của quý khách!</p>
<table >
    <th>Thông tin đơn hàng</th>
    <tr>
        <td><b>Khách hàng</b></td>
        <td>{{ $user->first_name.' '.$user->last_name }}</td>
        <td><b>Địa chỉ</b></td>
        <td colspan="5">{{ $user->address1.', '.$user->address2.', '.$user->address3.', '.$user->address4 }}</td>
    </tr>
    <tr>
        <td><b>Điện thoại</b></td>
        <td>{{ $user->phone }}</td>
        <td><b>Email</b></td>
        <td>{{ $user->email }}</td>
    </tr>
</table>
<table >
    <thead>
        <tr style="background-color: #02acea">
            <th ><b>Mã hóa đơn</b></th>
            <th ><b>Ngày</b></th>
            <th ><b>Hình</b></th>
            <th ><b>Tên SP</b></th>
            <th ><b>Số lượng</b></th>
            <th ><b>Màu</b></th>
            <th ><b>Đơn giá</b></th>
            <th ><b>Thành tiền</b></th>
            <th ><b>Giảm giá</b></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>{{ $dh->id }}</th>
            <td>{{ now() }}</td>
            <td>
                @if(substr($dh->hinh_san_pham,-4,4)=='.jpg')
                    <img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$dh->hinh_san_pham) }}" class="img-thumbnail" style="width: 50px; height:50px;">
                @else
                    <img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$dh->hinh_san_pham.'.jpg') }}" class="img-thumbnail" style="width: 50px; height:50px;">
                @endif
            </td>
            <td>{{ $dh->ten_san_pham }}</td>
            <td>{{ $dh->so_luong }}</td>
            <td style="color: {{ $dh->mau_san_pham }}">{{ $dh->mau_san_pham }}</td>
            <td>{{ number_format($dh->don_gia).'đ' }}</td>
            <td>{{ number_format($dh->so_luong *$dh->don_gia).'đ' }}</td>
            <td>{{number_format($dh->giam_gia).'đ'}}</td>
        </tr>
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
