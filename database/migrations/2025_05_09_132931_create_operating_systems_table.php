<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('operating_systems', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('version');
            $table->string('build');
            $table->string('architecture');
        });

        // Windows
        DB::table('operating_systems')->insert([
            ['brand' => 'Windows', 'version' => '11 24H2', 'build' => '26100.1882', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '11 23H2', 'build' => '22631', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '11 22H2', 'build' => '22621', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '11 21H2', 'build' => '22000', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 22H2', 'build' => '19045', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 21H2', 'build' => '19044', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 2004', 'build' => '19041', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 1909', 'build' => '18363', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 1903', 'build' => '18362', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 1809', 'build' => '17763', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 1803', 'build' => '17134', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 1709', 'build' => '16299', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 1703', 'build' => '15063', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 1607', 'build' => '14393', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 1507', 'build' => '10240', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '8.1', 'build' => '9600', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '8', 'build' => '9200', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '7 SP1', 'build' => '7601', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '7 RTM', 'build' => '7600', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => 'Vista SP2', 'build' => '6002', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => 'Vista SP1', 'build' => '6001', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => 'Vista RTM', 'build' => '6000', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => 'XP SP3', 'build' => '5512', 'architecture' => 'x86'],
            ['brand' => 'Windows', 'version' => 'XP SP2', 'build' => '2180', 'architecture' => 'x86'],
            ['brand' => 'Windows', 'version' => 'XP SP1', 'build' => '1106', 'architecture' => 'x86'],
        ]);

        // macOS
        DB::table('operating_systems')->insert([
            ['brand' => 'macOS', 'version' => '15', 'build' => '22A380', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '14', 'build' => '21A559', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '13', 'build' => '20A5399', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '12', 'build' => '19A583', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '11', 'build' => '20D64', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.15 Catalina', 'build' => '19H114', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.14 Mojave', 'build' => '18G103', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.13 High Sierra', 'build' => '17G65', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.12 Sierra', 'built'=> '17G66', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.11 El Capitan', 'build' => '15F34', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.10 Yosemite', 'build' => '14A389', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.9 Mavericks', 'build' => '13A603', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.8 Mountain Lion', 'build' => '12A269', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.7 Lion', 'build' => '11A511', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.6 Snow Leopard', 'build' => '10A432', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.5 Leopard', 'build' => '9A581', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.4 Tiger', 'build' => '8A428', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.3 Panther', 'build' => '7W98', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.2 Jaguar', 'build' => '6C115', 'architecture'=> 'x86_64'],
            ['brand' => 'macOS', 'version' => '10.1 Puma', 	'build' => '5M28', 'architecture'=> 'PPC'],
            ['brand' => 'macOS', 'version' => '10.0 Cheetah', 'build' => '5G64', 'architecture'=> 'PPC']
        ]);

        // iOS/iPhone OS
        DB::table('operating_systems')->insert([
            ['brand' => 'iOS', 'version' => '18', 'build' => '22A380', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '17', 'build' => '21A329', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '16', 'build' => '20A362', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '15', 'build' => '19A346', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '14', 'build' => '18A373', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '13', 'build' => '17A577', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '12', 'build' => '16A366', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '11', 'build' => '15A372', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '10', 'build' => '14A346', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '9', 'build' => '13A344', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '8', 'build' => '12A365', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '7', 'build' => '11A465', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '6', 'build' => '10A403', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '5', 'build' => '9A334', 'architecture' => 'arm64'],
            ['brand' => 'iOS', 'version' => '4', 'build' => '8A293', 'architecture' => 'arm64'],
            ['brand' => 'iPhoneOS', 'version' => '3', 'build' => '7A341', 'architecture' => 'armv7'],
            ['brand' => 'iPhoneOS', 'version' => '2', 'build' => '5A347', 'architecture' => 'armv6'],
            ['brand' => 'iPhoneOS', 'version' => '1', 'build' => '1A543a', 'architecture' => 'armv6']
        ]);

        // watchOS
        DB::table('operating_systems')->insert([
            ['brand' => 'watchOS', 'version' => '11', 'build' => '22T251', 'architecture' => 'arm64'],
            ['brand' => 'watchOS', 'version' => '10', 'build' => '21S664', 'architecture' => 'arm64'],
            ['brand' => 'watchOS', 'version' => '9', 'build' => '20U502', 'architecture' => 'arm64'],
            ['brand' => 'watchOS', 'version' => '8', 'build' => '19U512', 'architecture' => 'arm64'],
            ['brand' => 'watchOS', 'version' => '7', 'build' => '18T201', 'architecture' => 'arm64'],
            ['brand' => 'watchOS', 'version' => '6', 'build' => '17U63', 'architecture' => 'arm64'],
            ['brand' => 'watchOS', 'version' => '5', 'build' => '16U662', 'architecture' => 'arm64'],
            ['brand' => 'watchOS', 'version' => '4', 'build' => '15U70', 'architecture' => 'arm64'],
            ['brand' => 'watchOS', 'version' => '3', 'build' => '14V753', 'architecture' => 'arm64'],
            ['brand' => 'watchOS', 'version' => '2', 'build' => '13V604', 'architecture' => 'arm64'],
            ['brand' => 'watchOS', 'version' => '1', 'build' => '12S632', 'architecture' => 'arm64']
        ]);

        // Android
        DB::table('operating_systems')->insert([
            ['brand' => 'Android', 'version' => '1.0', 'build' => '1', 'architecture' => 'armv6'],
            ['brand' => 'Android', 'version' => '1.1', 'build' => '2', 'architecture' => 'armv6'],
            ['brand' => 'Android', 'version' => '1.5 Cupcake', 'build' => '3', 'architecture' => 'armv6'],
            ['brand' => 'Android', 'version' => '1.6 Donut', 'build' => '4', 'architecture' => 'armv6'],
            ['brand' => 'Android', 'version' => '2.0 Eclair', 'build' => '5', 'architecture' => 'armv6'],
            ['brand' => 'Android', 'version' => '2.0.1 Eclair', 'build' => '6', 'architecture' => 'armv6'],
            ['brand' => 'Android', 'version' => '2.1 Eclair', 'build' => '7', 'architecture' => 'armv6'],
            ['brand' => 'Android', 'version' => '2.2 Froyo', 'build' => '8', 'architecture' => 'armv6'],
            ['brand' => 'Android', 'version' => '2.3 Gingerbread', 'build' => '9', 'architecture' => 'armv6'],
            ['brand' => 'Android', 'version' => '2.3.3 Gingerbread', 'build' => '10', 'architecture' => 'armv6'],
            ['brand' => 'Android', 'version' => '3.0 Honeycomb', 'build' => '11', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '3.1 Honeycomb', 'build' => '12', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '3.2 Honeycomb', 'build' => '13', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '4.0 Ice Cream Sandwich', 'build' => '14', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '4.0.3 Ice Cream Sandwich', 'build' => '15', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '4.1 Jelly Bean', 'build' => '16', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '4.2 Jelly Bean', 'build' => '17', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '4.3 Jelly Bean', 'build' => '18', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '4.4 KitKat', 'build' => '19', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '4.4W KitKat Wear', 'build' => '20', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '5.0 Lollipop', 'build' => '21', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '5.1 Lollipop', 'build' => '22', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '6.0 Marshmallow', 'build' => '23', 'architecture' => 'armv7'],
            ['brand' => 'Android', 'version' => '7.0 Nougat', 'build' => '24', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '7.1 Nougat', 'build' => '25', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '8.0 Oreo', 'build' => '26', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '8.1 Oreo', 'build' => '27', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '9.0 Pie', 'build' => '28', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '10', 'build' => '29', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '11', 'build' => '30', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '12', 'build' => '31', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '12L', 'build' => '32', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '13', 'build' => '33', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '14', 'build' => '34', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '15', 'build' => '35', 'architecture' => 'arm64'],
            ['brand' => 'Android', 'version' => '16', 'build' => '36', 'architecture' => 'arm64']
        ]);
    }

    public function down(): void {
        Schema::dropIfExists('operating_systems');
    }
};
