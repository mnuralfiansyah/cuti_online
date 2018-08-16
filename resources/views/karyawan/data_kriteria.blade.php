@extends('template.app')

@section('content')
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <!-- <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div> -->


            </div>

            <div class="clearfix"></div>

            <div class="row">
              @if(session('Berhasil'))
                  <div class="alert alert-success" id="peringatan">
                      {{ session('Berhasil') }}
                  </div>
              @endif

              @if(session('Gagal'))
                  <div class="alert alert-danger" id="peringatan">
                      {{ session('Gagal') }}
                  </div>
              @endif





              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kriteria</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <button type="button"  class="btn btn-md btn-warning" data-toggle="modal" data-target=".modal-tambah-kriteria">Tambah Kriteria</button>
<br/><br/>
                    <table  class="datatable-fixed-header table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th align="center">No</th>
                          <th align="center">Nama</th>
                          <th align="center">Kepentingan</th>
                          <th align="center">Jenis</th>
                          <th align="center">Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        @php $iter=1;@endphp
                          @foreach ($data_kriteria as $k => $v)
                            <tr>
                              <td align="right">{{$iter}}</td>
                              <td>{{$v->nama}}</td>
                              <td>@if($v->bobot==5) Sangat Penting @elseif($v->bobot==4) Penting @elseif($v->bobot==3) Kurang Penting @elseif($v->bobot==2) Tidak Penting @else Sangat Tidak Penting @endif</td>
                              <td>@if($v->benefit) Benefit @else Cost @endif
                              <td nowrap align="center">
                                  <button data-id="{{$v->id}}" data-nama="{{$v->nama}}" data-bobot="{{$v->bobot}}" data-benefit="{{$v->benefit}}" type="button"  class="btn btn-xs btn-warning btn_edit" data-toggle="modal" data-target=".modal-edit-kriteria">Edit</button>
                                  <button data-id="{{$v->id}}" data-nama="{{$v->nama}}" data-bobot="{{$v->bobot}}" data-benefit="{{$v->benefit}}" class="btn btn-xs btn-danger btn_hapus" type="button" data-toggle="modal" data-target=".modal-hapus-kriteria">Hapus</button>
                              </td>
                            </tr>
                            @php $iter++;@endphp
                          @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>




            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- modals -->
        <!-- Large modal -->


        <div class="modal fade modal-edit-kriteria" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit Kriteria</h4>
              </div>
              <div class="modal-body">
                <form id="edit_form" method="post" action="" data-parsley-validate class="form-horizontal form-label-left">
                  {{ method_field('PUT') }}
                  {{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Modal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="edit_nama" type="text"  name="nama" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kepentingan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="edit_kepentingan" name="bobot">
                            <option value="">---Pilih Kepentingan---</option>
                            <option value="5">Sangat Tidak Penting</option>
                            <option value="4">Tidak Penting</option>
                            <option value="3">Kurang Penting</option>
                            <option value="2">Penting</option>
                            <option value="1">Sangat Penting</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kepentingan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="edit_jenis" name="benefit">
                            <option value="">--Pilih Jenis--</option>
                            <option value="1">Benefit</option>
                            <option value="0">Cost</option>
                          </select>
                        </div>
                      </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
              </div>
              {{-- <div class="ln_solid"></div> --}}

            </div>
          </div>
        </div>

        <div class="modal fade modal-tambah-kriteria" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Tambah Kriteria</h4>
              </div>
              <div class="modal-body">
                <form action="data_kriteria" method="post" data-parsley-validate class="form-horizontal form-label-left">
                                  {{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Kriteria <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="nama" type="text"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kepentingan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="bobot">
                            <option value="">---Pilih Kepentingan---</option>
                            <option value="1">Sangat Tidak Penting</option>
                            <option value="2">Tidak Penting</option>
                            <option value="3">Kurang Penting</option>
                            <option value="4">Penting</option>
                            <option value="5">Sangat Penting</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="benefit">
                            <option value="">--Pilih Jenis--</option>
                            <option value="1">Benefit</option>
                            <option value="0">Cost</option>
                          </select>
                        </div>
                      </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
              </div>
              {{-- <div class="ln_solid"></div> --}}

            </div>
          </div>
        </div>

        <div class="modal fade modal-hapus-kriteria" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Hapus Kriteria</h4>
              </div>
              <div class="modal-body">
                <form id="hapus_form" method="post" action="" data-parsley-validate class="form-horizontal form-label-left">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <div id='modal_hapus_pesan'></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
              </div>
              {{-- <div class="ln_solid"></div> --}}

            </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/template/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/template/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/template/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/template/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="/template/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="/template/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="/template/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>

    <script src="/template/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/template/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="https://cdn.datatables.net/scroller/1.4.2/js/dataTables.scroller.min.js"></script>
    <script src="/template/jszip/dist/jszip.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/template/js/custom.min.js"></script>

    <script>
    $(document).ready(function() {
$('#dataTables-example').DataTable({
    responsive: true
});

//waktu mundur
var detik = 5;
var menit = 0;
function hitung(){
  setTimeout(hitung,1000);
  detik --;
  if(detik < 0){
    detik = 59;
    menit --;
    if(menit < 0){
      menit = 0;
      detik = 0;
    }
    $('#peringatan').hide();
  }

}
hitung();
});

  $(document).on('click','button.btn_edit', function()
  {
  var nama = $(this).attr('data-nama');
  var kepentingan = $(this).attr('data-bobot');
  var jenis = $(this).attr('data-benefit');

  var action = 'data_kriteria/'+$(this).attr('data-id');

  $('#edit_nama').val(nama);
  $('#edit_kepentingan').val(kepentingan);
  $('#edit_jenis').val(jenis);
  $("#edit_form").attr("action",action);

  });

    $(document).on('click','button.btn_hapus', function()
    {
    var nama = $(this).attr('data-nama');
    var action = 'data_kriteria/'+$(this).attr('data-id');
    isi_modal = "Apakah Anda Yakin Menghapus Kriteria "+nama;
    $("#modal_hapus_pesan").html(isi_modal);
    $("#hapus_form").attr("action",action);
    });

    </script>

  </body>
</html>
@endsection
