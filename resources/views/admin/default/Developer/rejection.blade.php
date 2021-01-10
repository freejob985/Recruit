@extends('admin.default.layouts.app')

@section('content')
<div class="row">


    <div class="container">
        <img class="img-responsive img-thumbnail" src="https://www.infotectraining.com/sites/default/files/field/image/infotec_41.png" alt="Chania">

        <form action=" {{ route('Advertisement.st') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- ##########################(from bg)################################### --}}
 
            <div class="form-row">
                <div class="col-md-12 mb-4">
                    <label for="Title">عنوان </label>
                    <input type="text" placeholder="عنوان " class="form-control" name="Title" id="Title"
                        placeholder="" value="{{Request::old('Title')}}">
                    @if ($errors->has('Title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('Title') }}
                    </div>
                    @endif
                </div>
            </div>
            {{-- ############################################################# --}}
            <div class="form-group">
                <textarea placeholder="الرسالة" name="Code"
                    style="resize: none;font-size: 18px;font-weight: 600;color: white !important;background: #0e1726;"
                    class="form-control" rows="5" id="comment"></textarea>
                @if ($errors->has('Code'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Code') }}</span>
                @endif
            </div>
            {{-- ############################################################# --}}

            
  

            {{-- ##########################(end bg)################################### --}}
            <input type="submit" style="background: #011a25;" class="btn btn-primary btn-large btn-block"
                value="ارسال" />
        </form>
        <br>
        @if(session()->has('alert-success'))
        <input type="submit" style="background: #011a25;background: #20a049;padding: 1%;font-size: 16px;"
            class="btn btn-success save btn-large btn-block" value="  {{ session()->get('alert-success') }}" />
        @endif
    </div>
</div>
@endsection