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
                <i class="pe-7s-print icon-gradient bg-sunny-morning">
                </i>
            </div>
            <div>Cetak
                <div class="page-title-subheading">Halaman ini berfungsi untuk mencetak label.
                </div>
            </div>
        </div>
        </div>
</div>
<div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Cetak Label</h5>
            <form class="" action="/history" method="post">
          <div class="form-row">
             <div class="col-sm-2">
                 <div class="position-relative form-group">
                     <label for="exampleText" class="col-form-label">Nomor RM :</label>
                 </div>
             </div>
                <div class="col-sm-8">
                    <div class="position-relative form-group">
                        <input name="cari" id="exampleText" placeholder="Nomor RM" type="text" class="form-control" required>
                    </div>
                </div>
          </div>
          <div class="form-row">
            <div class="col-sm-2">
                <div class="position-relative form-group">
                    <label for="exampleText" class="col-form-label">Nama Pasien :</label>
                </div>
            </div>
               <div class="col-sm-8">
                   <div class="position-relative form-group">
                    <select name="cars" class="form-control" style="width:10%; float:left;">
                        <option value="volvo">NY.</option>
                        <option value="saab">TN.</option>
                        <option value="fiat">Miss</option>
                        <option value="audi"></option>
                      </select>
                       <input name="cari" id="exampleText" placeholder="Nama Pasien" type="text" class="form-control" style="width:87%;float:right;" required>
                   </div>
               </div>
         </div>
         <div class="form-row">
            <div class="col-sm-2">
                <div class="position-relative form-group">
                    <label for="exampleText" class="col-form-label">Tanggal Lahir :</label>
                </div>
            </div>
               <div class="col-sm-8">
                   <div class="position-relative form-group">
                       <input name="cari" id="exampleText" placeholder="Tanggal Lahir" type="text" class="form-control" required>
                   </div>
               </div>
         </div>
         <div class="form-row">
             <div class="col-sm-2">
                 <div class="position-relative form-group">
                     <label for="exampleText" class="col-form-label">Jenis Kelamin :</label>
                 </div>
             </div>
                <div class="col-sm-8">
                    <div class="position-relative form-group">
                        <input name="cari" id="exampleText" placeholder="Jenis Kelamin" type="text" class="form-control" required>
                    </div>
                </div>
          </div>
          <div class="form-row">
            <div class="col-sm-2">
                <div class="position-relative form-group">
                    <label for="exampleText" class="col-form-label">BB / PB :</label>
                </div>
            </div>
               <div class="col-sm-8">
                   <div class="position-relative form-group">
                       <input name="cari" id="exampleText" placeholder="BB / PB" type="text" class="form-control" required>
                   </div>
               </div>
         </div>
         <div class="form-row">
            <div class="col-sm-2">
                <div class="position-relative form-group">
                    <label for="exampleText" class="col-form-label">Tanggal Masuk :</label>
                </div>
            </div>
               <div class="col-sm-8">
                   <div class="position-relative form-group">
                       <input name="cari" id="exampleText" placeholder="Tanggal Masuk" type="text" class="form-control" required>
                   </div>
               </div>
         </div>

                <div class="position-relative row form-group">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-warning"> <i class="fa fa-print" aria-hidden="true" title="Copy to use user-plus"></i> Cetak</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
@endsection