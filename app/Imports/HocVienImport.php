<?php

namespace App\Imports;

use App\Models\HocVien;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class HocVienImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|null
     */
    public function model(array $row)
    {
        return new HocVien([
            'ho_ten' => $row['ho_ten'],
            'anh_3_4' => $row['anh_3_4'],
            'so_can_cuoc' => $row['so_can_cuoc'],
            'ngay_cap_can_cuoc' => $row['ngay_cap_can_cuoc'],
            'noi_cap_can_cuoc' => $row['noi_cap_can_cuoc'],
            'ngay_sinh' => $row['ngay_sinh'],
            'noi_sinh' => $row['noi_sinh'],
            'dan_toc' => $row['dan_toc'],
            'so_dien_thoai' => $row['so_dien_thoai'],
            'id_khoa_hoc' => $row['id_khoa_hoc'],
            'id_nganh' => $row['id_nganh'],
            'ngay_dang_ky' => $row['ngay_dang_ky'],
            'gioi_tinh' => $row['gioi_tinh'],
            'ung_dung_cntt' => $row['ung_dung_cntt'],
            'ghi_chu' => $row['ghi_chu'],
        ]);
    }
}
