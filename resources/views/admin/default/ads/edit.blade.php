@extends('admin.default.layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <img class="img-responsive img-thumbnail" src="https://wallpapercave.com/wp/wp3931369.jpg" alt="Chania">
        <form action=" {{ route('Advertisement.updat', [$ads->id]) }}" method="POST" enctype="multipart/form-data">
 
            @csrf
            <div class="form-row">
                <label for="Title"> مكان الاعلان</label>
                <select class="selectpicker col-12" name="pos" data-show-subtext="true">
                    <option value="Down" {{ ( $ads->pos == 'Down') ? 'selected' : '' }} >اسفل</option>
                    <option value="Top" {{ ( $ads->pos == 'Top') ? 'selected' : '' }}> أعلي</option>
                </select>
                @if ($errors->has('page'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('page') }}</span>
                @endif
            </div>
            {{-- ##########################(from bg)################################### --}}
            <div class="form-row">
                <label for="Title"> الصفحة</label>
                <select class="selectpicker col-12" name="page" data-show-subtext="true">
                    <option value="Main"   {{ ( $ads->page == 'Main') ? 'selected' : '' }}>الرئسية</option>
                    <option value="Projects"   {{ ( $ads->page == 'Projects') ? 'selected' : '' }}>صفحة المشاريع</option>
                    <option value="Services"   {{ ( $ads->page == 'Services') ? 'selected' : '' }}>صفحة الخدمات</option>
                    <option value="Register"   {{ ( $ads->page == 'Register') ? 'selected' : '' }}>صفحة التسجيل</option>
                    <option value="login"   {{ ( $ads->page == 'login') ? 'selected' : '' }}> صفحة تسجيل الدخول</option>
                    <option value="freelancer"   {{ ( $ads->page == 'freelancer') ? 'selected' : '' }}>المستقلين</option>
                </select>
                @if ($errors->has('page'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('page') }}</span>
                @endif
            </div>
            {{-- ############################################################# --}}
            <div class="form-row">
                <div class="col-md-12 mb-4">
                    <label for="Title">عنوان الاعلان</label>
                    <input type="text" placeholder="عنوان الاعلان" class="form-control" name="Title" id="Title"
                        placeholder="" value=" {{ $ads->Title}}">
                    @if ($errors->has('Title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('Title') }}
                    </div>
                    @endif
                </div>
            </div>
            {{-- ############################################################# --}}
            <div class="form-group">
                <textarea placeholder="اضافة الكود" name="Code"
                    style="resize: none;font-size: 18px;font-weight: 600;color: white !important;background: #0e1726;"
                    class="form-control" rows="5" id="comment">
                    {{ $ads->Code}}
                </textarea>
                @if ($errors->has('Code'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Code') }}</span>
                @endif
            </div>
            {{-- ############################################################# --}}
            <div class="form-row">
                <div class="col-md-12 mb-4">
                    <label for="end">عدد الايام</label>
                    <input type="number" placeholder="عدد الايام" class="form-control" name="end" id="end"
                        placeholder="" value="    {{ $ads->end}}">
                    @if ($errors->has('end'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end') }}
                    </div>
                    @endif
                </div>
            </div>
            
            {{-- ############################################################# --}}
            <div class="form-row">
                <div class="col-md-12 mb-4">
                    <label class="radio-inline"><input type="radio" name="status" {{ ( $ads->status == '1') ? 'checked' : '' }}    value="1"> عرض الاعلان</label>
                    <label class="radio-inline"><input type="radio" name="status" value="0" {{ ( $ads->status == '0') ? 'checked' : '' }} >عدم العرض</label>
                    @if ($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                    @endif
                </div>
            </div>
            {{-- ############################################################# --}}

            {{-- ##########################(end bg)################################### --}}
            <input type="submit" style="background: #011a25;" class="btn btn-primary btn-large btn-block"
                value="التعديل علي الاعلان" />
        </form>
        <br>
        @if(session()->has('alert-success'))
        <input type="submit" style="background: #011a25;background: #20a049;padding: 1%;font-size: 16px;"
            class="btn btn-success save btn-large btn-block" value="  {{ session()->get('alert-success') }}" />
        @endif
    </div>
</div>
@endsection