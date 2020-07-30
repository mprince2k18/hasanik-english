@extends('dashboard.layouts.main')
@section('title') Languages List @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Image Crop</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Image Crop</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <div class="contentbar">
    <div class="row">
        <div class="m-2">
            <a class="btn btn-success" href="{{ route("language.index") }}">
                Language List
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="panel-title text-center">Language Translate</h3>
            <p class="text-muted">You Can translate your own language in tow click,Follow this, <br>
                google translate extension any browser then open the language translate
                page then click the google translate extension
                and translate the page and click the Copy Translations button and save. </p>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ route('language.translate.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$lang->id}}">
                <div class="panel-body">
                    <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%"
                           id="tranlation-table">
                        <tbody class="">
                        @foreach (openJSONFile('en') as $key => $value)
                            <tr class="">
                                <td>{{ $loop->index+1 }}</td>
                                <td class="key w-25">{{ $key }}</td>
                                <td>
                                    <input type="text" class="form-control value w-100"
                                           name="translations[{{ $key }}]"
                                           @isset(openJSONFile($lang->code)[$key])
                                           value="{{ openJSONFile($lang->code)[$key] }}"
                                        @endisset>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="form-group">
                    <div class="col-lg-12 text-right">
                        <button class="btn btn-primary" type="button" onclick="copy()">Copy
                            Translations
                        </button>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection






