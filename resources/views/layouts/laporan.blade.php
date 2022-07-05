@section('css')
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<div class="row">
    <div class="col-xl-6">
        <form action="<?= url()->current(); ?>"  method="get" class="custom-validation" name="filter" id="filter">
            @csrf
            <div class="mb-4">
                <label>Filter Berdasarkan Bulan</label>
                <div class="position-relative" id="datepicker4">
                    <input id="date" name="date" type="text" class="form-control" data-date-container='#datepicker4'
                    data-provide="datepicker" data-date-format="yyyy mm" data-date-min-view-mode="1">
                </div>
            </div>
            </div>
            <div class="col-xl-1" style="margin-top:27px">
                <button type="submit" class="btn btn-primary waves-effect waves-light">&nbsp;Filter&nbsp;</button>
            </div>
        </form>
    <div class="col-xl-2">
        <div class="d-print-none" style="margin-top:27px">
            <a href="" class="btn btn-success waves-effect waves-light me-1" onclick="document.filter.action = '<?= url()->current().'-cetak'?>'; document.filter.method='get'; document.filter.submit(); return false;">
            <i class="fa fa-print"></i>&nbsp;Download PDF</a>
        </div>
    </div>
</div>
<hr>

@section('script')
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

    <!-- form advanced init -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
    <script>
        $("#date").datepicker( {
            format: "yyyy-mm",
            startView: "years",
            minViewMode: "years"
        });
    </script>
@endsection

