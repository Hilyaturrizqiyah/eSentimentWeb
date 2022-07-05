<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ $title_4 ?? $title_3 ?? $title_2 ?? $title }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $li_1 }}</a></li>
                    @if(isset($title))
                        <li class="breadcrumb-item {{$title_2 ?? 'active' }}">{{ $title }}</li>
                    @endif
                    @if(isset($title_2))
                        <li class="breadcrumb-item {{$title_3 ?? 'active' }}">{{ $title_2 }}</li>
                    @endif
                    @if(isset($title_3))
                        <li class="breadcrumb-item {{$title_4 ?? 'active' }}">{{ $title_3 }}</li>
                    @endif
                    @if(isset($title_4))
                        <li class="breadcrumb-item active">{{ $title_4 }}</li>
                    @endif
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
