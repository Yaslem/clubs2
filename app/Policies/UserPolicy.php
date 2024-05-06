<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\Builder;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('عرض الطلاب');
    }

    public function create(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('إنشاء الطلاب');

    }

    public function update(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('تعديل الطلاب');

    }

    public function delete(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف الطلاب');

    }

    public function deletAdmin_site_manager(User $user)
    {
        return ($user->is_admin_site_manager());

    }

    public function restore(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('استرجاع الطلاب');

    }

    public function forceDelete(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف نهائي للطلاب');

    }

//    Start Policy Clubs

    public function viewClub(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('عرض الأندية');
    }

    public function createClub(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('إنشاء الأندية');
    }

    public function updateClub(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('تعديل الأندية');
    }

    public function deleteClub(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف الأندية');
    }

    public function restoreClub(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('استرجاع الأندية');
    }

    public function forceDeleteClub(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف نهائي للأندية');
    }

//    End Policy Clubs

//    Start Policy Activities

    public function viewActivity(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('عرض الفعاليات');
    }

    public function createActivity(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('إنشاء الفعاليات');
    }

    public function updateActivity(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('تعديل الفعاليات');
    }

    public function deleteActivity(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف الفعاليات');
    }

    public function restoreActivity(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('استرجاع الفعاليات');
    }

    public function forceDeleteActivity(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف نهائي للفعاليات');
    }

//    End Policy Activities

//    Start Policy Posts

    public function viewPost(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('عرض المنشورات');
    }

    public function createPost(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('إنشاء المنشورات');
    }

    public function updatePost(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('تعديل المنشورات');
    }

    public function deletePost(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف المنشورات');
    }

    public function restorePost(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('استرجاع المنشورات');
    }

    public function forceDeletePost(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف نهائي للمنشورات');
    }

//    End Policy Activities

//    Start Policy Certificates

    public function viewCertificate(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('عرض الشهادات');
    }

    public function createCertificate(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'مدير' || $user->role === 'منسق') && $user->is_view('إنشاء الشهادات');
    }

    public function updateCertificate(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('تعديل الشهادات');
    }

    public function deleteCertificate(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف الشهادات');
    }

//    End Policy Certificates

//    Start Policy Awards

    public function viewAward(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('عرض الجوائز');
    }

    public function createAward(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير') && $user->is_view('إنشاء الجوائز');
    }

    public function updateAward(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('تعديل الجوائز');
    }

    public function deleteAward(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف الجوائز');
    }

//    End Policy Awards

//    Start Policy Reports

    public function viewReport(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('عرض التقارير');
    }

    public function createReport(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('إنشاء التقارير');
    }

    public function updateReport(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير' || $user->role === 'مسؤول') && $user->is_view('تعديل التقارير');
    }

    public function deleteReport(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف التقارير');
    }

//    End Policy Reports
//    Start Policy Tools

    public function viewTool(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('عرض الأدوات');
    }

//    End Policy Tools
//    Start Policy Orders


    public function deleteOrders(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق') && $user->is_view('حذف الطلبات');
    }

    public function editOrders(User $user)
    {
        return ($user->role === 'مدير الموقع' || $user->role === 'رئيس' || $user->role === 'منسق' || $user->role === 'مدير') && $user->is_view('تعديل الطلبات');
    }
//    End Policy Orders
}
