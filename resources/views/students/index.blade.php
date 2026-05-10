@extends('layout')

@section('title', 'قائمة الطلاب')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-dark">قائمة الطلاب المسجلين</h2>
        <a href="/students/create" class="btn btn-success">إضافة طالب جديد</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="py-3 px-4">#</th>
                        <th class="py-3 px-4">الاسم</th>
                        <th class="py-3 px-4">البريد الإلكتروني</th>
                        <th class="py-3 px-4">الهاتف</th>
                        <th class="py-3 px-4">العمر</th>
                        <th class="py-3 px-4">الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($student as $item)
                    <tr>
                        <td class="px-4">{{ $item->id }}</td>
                        <td class="px-4 font-weight-bold">{{ $item->name }}</td>
                        <td class="px-4">{{ $item->email }}</td>
                        <td class="px-4">{{ $item->phone }}</td>
                        <td class="px-4"><span class="badge bg-info text-dark">{{ $item->age }} سنة</span></td>
                        <td class="px-4">
                            <a href="/students/{{ $item->id }}/edit" class="btn btn-sm btn-success">تعديل</a>
<form action="/students/{{ $item->id }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد من الحذف؟')">
        حذف
    </button>
</form>                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">لا يوجد طلاب مسجلين حالياً.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection