@extends('backend.app')
@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hakkimizda
            <small>Hakkimizda sayfa düzenlemesi</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/yonetim/"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
            <li class="active">Hakkimizda</li>
        </ol>
    </section>
@endsection
@section('icerik')

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Hakkımızda Sayfa Düzenle</h3>

                </div>
                <div class="box-body">
                    <form role="form" method="post" class="form-horizontal" id="form" data-parsley-validate>
                    {{ csrf_field() }}
                    {{ Form::bsTextarea('misyon', 'Misyon', '3', 'Misyon', $hakkimizda->misyon) }}
                    {{ Form::bsTextarea('vizyon', 'Viyon', '3', 'Misyon', $hakkimizda->vizyon) }}
                    {{ Form::bsTextarea('kisa_yazi', 'Kısa Yazı', '3', 'Kısa ön yazı', $hakkimizda->kisa_yazi) }}
                    {{ Form::bsTextarea('icerik', 'İçerik','6', 'Hakkimizda içerik', $hakkimizda->icerik) }}
                        <button type="submit" class="btn btn-primary form-control">Gönder</button>
                    </form>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->


    @endsection

@section('css')
    <link href="/css/sweetalert2.min.css" rel="stylesheet"/>
    @endsection
@section('js')
    <script src="/js/jquery.form.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/messages_tr.min.js"></script>
    <script src="/js/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#form').validate();
            $('#form').ajaxForm({
                beforeSubmit:function(){


                },
                success:function(response){

                    swal(
                        response.baslik,
                        response.icerik,
                        response.durum
                    )

                }
            });
        });
    </script>
    @endsection
