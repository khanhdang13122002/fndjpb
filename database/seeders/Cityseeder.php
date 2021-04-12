<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cityseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city_codes = array(
            "VN-44",
            "VN-43",
            "VN-54",
            "VN-53",
            "VN-55",
            "VN-56",
            "VN-50",
            "VN-31",
            "VN-57",
            "VN-58",
            "VN-40",
            "VN-59",
            "VN-CT",
            "VN-04",
            "VN-DN",
            "VN-33",
            "VN-72",
            "VN-71",
            "VN-39",
            "VN-45",
            "VN-30",
            "VN-03",
            "VN-63",
            "VN-HN",
            "VN-23",
            "VN-61",
            "VN-HP",
            "VN-73",
            "VN-SG",
            "VN-14",
            "VN-66",
            "VN-34",
            "VN-47",
            "VN-28",
            "VN-01",
            "VN-35",
            "VN-09",
            "VN-02",
            "VN-41",
            "VN-67",
            "VN-22",
            "VN-18",
            "VN-36",
            "VN-68",
            "VN-32",
            "VN-24",
            "VN-27",
            "VN-29",
            "VN-13",
            "VN-25",
            "VN-52",
            "VN-05",
            "VN-37",
            "VN-20",
            "VN-69",
            "VN-21",
            "VN-26",
            "VN-46",
            "VN-51",
            "VN-07",
            "VN-49",
            "VN-70",
            "VN-06"
        );
        $city_names = array(
            "An Giang",
            "Bà Rịa–Vũng Tàu",
            "Bắc Giang",
            "Bắc Kạn",
            "Bạc Liêu",
            "Bắc Ninh",
            "Bến Tre",
            "Bình Định",
            "Bình Dương",
            "Bình Phước",
            "Bình Thuận",
            "Cà Mau",
            "Cần Thơ",
            "Cao Bằng",
            "Đà Nẵng",
            "Đắk Lắk",
            "Đắk Nông",
            "Điện Biên",
            "Đồng Nai",
            "Đồng Tháp",
            "Gia Lai",
            "Hà Giang",
            "Hà Nam",
            "Hà Nội",
            "Hà Tĩnh",
            "Hải Dương",
            "Hải Phòng",
            "Hậu Giang",
            "Hồ Chí Minh",
            "Hòa Bình",
            "Hưng Yên",
            "Khánh Hòa",
            "Kiên Giang",
            "Kon Tum",
            "Lai Châu",
            "Lâm Đồng",
            "Lạng Sơn",
            "Lào Cai",
            "Long An",
            "Nam Định",
            "Nghệ An",
            "Ninh Bình",
            "Ninh Thuận",
            "Phú Thọ",
            "Phú Yên",
            "Quảng Bình",
            "Quảng Nam",
            "Quảng Ngãi",
            "Quảng Ninh",
            "Quảng Trị",
            "Sóc Trăng",
            "Sơn La",
            "Tây Ninh",
            "Thái Bình",
            "Thái Nguyên",
            "Thanh Hóa",
            "Thừa Thiên–Huế",
            "Tiền Giang",
            "Trà Vinh",
            "Tuyên Quang",
            "Vĩnh Long",
            "Vĩnh Phúc",
            "Yên Bái"
        );

        for($i=0;$i<count($city_names);$i++) {
            DB::table('cities')->insert([
                'city_code' => $city_codes[$i],
                'city_name' => $city_names[$i],
            ]);
        }
    }
}