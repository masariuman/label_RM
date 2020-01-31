@extends('wryyyyy.template')

@push('css')
    
@endpush

@push('js')
    
@endpush

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-search icon-gradient bg-sunny-morning">
                </i>
            </div>
            <div>Tracer
                <div class="page-title-subheading">Halaman ini berfungsi untuk mencari data yang ingil di cetak.
                </div>
            </div>
        </div>
        </div>
</div>
<div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Tracing Label</h5>
            <form class="" action="/history" method="post">
          <div class="form-row">
             <div class="col-sm-2">
                 <div class="position-relative form-group">
                     <label for="exampleText" class="col-form-label">Cari Nomor RM :</label>
                 </div>
             </div>
                <div class="col-sm-8">
                    <div class="position-relative form-group">
                        <input name="cari" id="exampleText" placeholder="Nomor RM" type="text" class="form-control" required>
                    </div>
                </div>
          </div>

                <div class="position-relative row form-group">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true" title="Copy to use user-plus"></i> Cari</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
@endsection