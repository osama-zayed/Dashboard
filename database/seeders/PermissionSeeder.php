<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'منح موافقة أولية لاقامة منشأة إنتاج بذور (تقاوي)']);
        Permission::create(['name' => 'منح ترخيص انتاج (اكثار) بذور وتقاوي']);
        Permission::create(['name' => 'منح ترخيص انتاج مخصبات زراعية']);
        Permission::create(['name' => 'منح ترخيص تداول بذور وتقاوي ومخصبات زراعية']);
        Permission::create(['name' => 'منح موافقة انشاء معمل اكثار نباتات بالانسجة']);
        Permission::create(['name' => 'منح ترخيص انتاج نباتات بالانسجة']);
        Permission::create(['name' => 'تسجيل المخصبات الزراعية']);
        Permission::create(['name' => 'تسجيل أصناف البذور والتقاوي المستوردة']);
        Permission::create(['name' => 'تسجيل أصناف البذور والتقاوي المنتجة محليًا']);

        $registrationRole = Role::create(['name' => 'إدارة التسجيلات']);
        $registrationRole->givePermissionTo([
            'منح موافقة أولية لاقامة منشأة إنتاج بذور (تقاوي)',
            'منح ترخيص انتاج (اكثار) بذور وتقاوي',
            'منح ترخيص انتاج مخصبات زراعية',
            'منح ترخيص تداول بذور وتقاوي ومخصبات زراعية',
            'منح موافقة انشاء معمل اكثار نباتات بالانسجة',
            'منح ترخيص انتاج نباتات بالانسجة',
            'تسجيل المخصبات الزراعية',
            'تسجيل أصناف البذور والتقاوي المستوردة',
            'تسجيل أصناف البذور والتقاوي المنتجة محليًا',
        ]);

        Permission::create(['name' => 'منح موافقة استيراد فسائل نخيل وغراس (شتلات)']);
        Permission::create(['name' => 'منح موافقة استيراد بذور وتقاوي (أصناف متداولة + عينات)']);
        Permission::create(['name' => 'منح موافقة استيراد مخصبات زراعية (أسمدة ومحسنات تربة)']);

        $suppliesRole = Role::create(['name' => 'إدارة المستلزمات']);
        $suppliesRole->givePermissionTo([
            'منح موافقة استيراد فسائل نخيل وغراس (شتلات)',
            'منح موافقة استيراد بذور وتقاوي (أصناف متداولة + عينات)',
            'منح موافقة استيراد مخصبات زراعية (أسمدة ومحسنات تربة)',
        ]);

        Permission::create(['name' => 'فحص وتحليل عينات المخصبات الزراعية']);
        Permission::create(['name' => 'فحص عينات البذور والتقاوي والغراس (الشتلات)']);

        $labRole = Role::create(['name' => 'إدارة المختبرات']);
        $labRole->givePermissionTo([
            'فحص وتحليل عينات المخصبات الزراعية',
            'فحص عينات البذور والتقاوي والغراس (الشتلات)',
        ]);

        Permission::create(['name' => 'منح موافقة الإفراج عن المخصبات الزراعية']);
        Permission::create(['name' => 'منح موافقة نقل مخصبات زراعية من المنافذ إلى مخازن المستفيد']);
        Permission::create(['name' => 'منح موافقة نقل وتوزيع مخصبات زراعية']);
        Permission::create(['name' => 'منح موافقة الإفراج عن البذور/التقاوي/الغراس (الشتلات)']);
        Permission::create(['name' => 'التفتيش على محلات تداول البذور والتقاوي والمخصبات الزراعية']);
        Permission::create(['name' => 'التفتيش على منشآت إنتاج البذور والتقاوي والمخصبات الزراعية']);
        Permission::create(['name' => 'التفتيش الحقلي على حقول إنتاج البذور والتقاوي']);
        Permission::create(['name' => 'الموافقة على إصدار بطائق اعتماد البذور']);
        Permission::create(['name' => 'إتلاف البذور والتقاوي الغير صالحة']);
        Permission::create(['name' => 'أخذ عينات بذور وتقاوي ومخصبات زراعية من المنافذ']);
        Permission::create(['name' => 'إصدار بدل فاقد']);
        Permission::create(['name' => 'تثبيت البيانات الناقصة على عبوات البذور والمخصبات الزراعية']);

        $supervisionRole = Role::create(['name' => 'إدارة الرقابة الفنية']);
        $supervisionRole->givePermissionTo([
            'منح موافقة الإفراج عن المخصبات الزراعية',
            'منح موافقة نقل مخصبات زراعية من المنافذ إلى مخازن المستفيد',
            'منح موافقة نقل وتوزيع مخصبات زراعية',
            'منح موافقة الإفراج عن البذور/التقاوي/الغراس (الشتلات)',
            'التفتيش على محلات تداول البذور والتقاوي والمخصبات الزراعية',
            'التفتيش على منشآت إنتاج البذور والتقاوي والمخصبات الزراعية',
            'التفتيش الحقلي على حقول إنتاج البذور والتقاوي',
            'الموافقة على إصدار بطائق اعتماد البذور',
            'إتلاف البذور والتقاوي الغير صالحة',
            'أخذ عينات بذور وتقاوي ومخصبات زراعية من المنافذ',
            'إصدار بدل فاقد',
            'تثبيت البيانات الناقصة على عبوات البذور والمخصبات الزراعية',
        ]);

        $adminRole = Role::create(['name' => 'أدمن']);
        $adminRole->givePermissionTo(Permission::all());

        $userRole = Role::create(['name' => 'مستخدم']);
    }
}