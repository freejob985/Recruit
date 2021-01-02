@extends('admin.default.layouts.app')

@section('content')
<div class="row">


<div class="container">



    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- ##########################(from bg)################################### --}}
        <div class="form-row">
            <div class="col-md-12 mb-4">
                <label for="page">page</label>
                <input type="text" placeholder="Please enter data" class="form-control" name="page" id="page"
                    placeholder="" value="{{Request::old('page')}}">
                @if ($errors->has('page'))
                <div class="invalid-feedback">
                    {{ $errors->first('page') }}
                </div>
                @endif
            </div>
        </div>
        {{-- ############################################################# --}}
        <div class="form-row">
            <div class="col-md-12 mb-4">
                <label for="Title">Title</label>
                <input type="text" placeholder="Please enter data" class="form-control" name="Title" id="Title"
                    placeholder="" value="{{Request::old('Title')}}">
                @if ($errors->has('Title'))
                <div class="invalid-feedback">
                    {{ $errors->first('Title') }}
                </div>
                @endif
            </div>
        </div>
        {{-- ############################################################# --}}
        <div class="form-row">
            <div class="col-md-12 mb-4">
                <label for="Code">Code</label>
                <input type="text" placeholder="Please enter data" class="form-control" name="Code" id="Code"
                    placeholder="" value="{{Request::old('Code')}}">
                @if ($errors->has('Code'))
                <div class="invalid-feedback">
                    {{ $errors->first('Code') }}
                </div>
                @endif
            </div>
        </div>
        {{-- ############################################################# --}}
        <div class="form-row">
            <div class="col-md-12 mb-4">
                <label for="end">end</label>
                <input type="text" placeholder="Please enter data" class="form-control" name="end" id="end"
                    placeholder="" value="{{Request::old('end')}}">
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
                <label for="status">status</label>
                <input type="text" placeholder="Please enter data" class="form-control" name="status" id="status"
                    placeholder="" value="{{Request::old('status')}}">
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
            value="اضافة موضوع جديد" />
    </form>
    <br>
    @if(session()->has('alert-success'))
    <input type="submit" style="background: #011a25;background: #20a049;padding: 1%;font-size: 16px;"
        class="btn btn-success save btn-large btn-block" value="  {{ session()->get('alert-success') }}" />
    @endif
</div>
</div>
@endsection