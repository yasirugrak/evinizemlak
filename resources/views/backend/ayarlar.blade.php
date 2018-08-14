@extends('backend.app')
@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ayarlar
            <small>Site Ayarları</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/yonetim/"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            <li class="active">Ayarlar</li>
        </ol>
    </section>
@endsection

@section('icerik')

    <div class="row">
        <div class="col-md-12">
            <!-- Custom Tabs -->
            <form role="form" method="post" class="form-horizontal" id="form" enctype="multipart/form-data" data-parsley-validate>
                {{ csrf_field() }}
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#genel" data-toggle="tab">Genel Ayarlar</a></li>
                    <li><a href="#iletisim" data-toggle="tab">İletişim</a></li>
                    <li><a href="#sosyal_medya" data-toggle="tab">Sosyal Medya</a></li>
                    <li><a href="#smtpmail" data-toggle="tab">Mail</a></li>
                    <li><a href="#google_api" data-toggle="tab">Google Api</a></li>

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active" id="genel">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" >Mevcut Logo</label>
                            <img src="/uploads/img/{{$ayarlar->logo}}" alt="" />

                        </div>

                        <div class="form-group">
                            <label for="logo" class="col-sm-2 control-label">Logo Yükle</label>
                            <input type="file" id="logo" name="logo">
                            <input type="hidden" name="eski_logo" value="{{$ayarlar->logo}}">
                        </div>
                        {{ Form::bsText('title', 'Site Başlığı', 'Site Başlığı Giriniz', $ayarlar->title) }}
                        {{ Form::bsText('keywords', 'Site Anahtar Kelimeler', 'Örnek: emlak,arsa,kiralık..', $ayarlar->keywords) }}
                        {{ Form::bsTextarea('description', 'Site Açıklaması', '3', 'Site Açıklaması Giriniz', $ayarlar->description) }}
                        {{ Form::bsText('url', 'Site Adresi', 'Site Adresi', $ayarlar->url) }}
                    </div>

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="iletisim">
                        {{ Form::bsText('tel', 'Telefon', 'Telefon Numaranız', $ayarlar->tel) }}
                        {{ Form::bsText('gsm', 'GSM', 'GSM', $ayarlar->gsm) }}
                        {{ Form::bsText('faks', 'FAKS', 'FAKS', $ayarlar->faks) }}
                        {{ Form::bsText('mail', 'Mail', 'Mail Adresi', $ayarlar->mail) }}
                        {{ Form::bsText('il', 'İl', 'İl', $ayarlar->il) }}
                        {{ Form::bsText('ilce', 'İlçe', 'İlçe', $ayarlar->ilce) }}
                        {{ Form::bsTextarea('adres', 'Adres', '3', 'Adres', $ayarlar->adres) }}
                    </div>

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="sosyal_medya">
                        {{ Form::bsIcontext('facebook', 'fa-facebook-square', 'Facebook', $ayarlar->facebook) }}
                        {{ Form::bsIcontext('twitter', 'fa-twitter', 'Twitter', $ayarlar->twitter) }}
                        {{ Form::bsIcontext('youtube', 'fa-youtube', 'Youtube', $ayarlar->youtube) }}
                        {{ Form::bsIcontext('instagram', 'fa-instagram', 'İnstagram', $ayarlar->instagram) }}
                        {{ Form::bsIcontext('google', 'fa-google', 'Google', $ayarlar->google) }}
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="smtpmail">
                        {{ Form::bsText('smtp_user', 'SMTP User', 'SMTP Kullanıcı Adı', $ayarlar->smtp_user) }}
                        {{ Form::bsPassword('smtp_password', 'SMTP Şifre', 'SMTP Şifreniz', $ayarlar->smtp_password) }}
                        {{ Form::bsText('smtp_host', 'Host', 'Host', $ayarlar->smtp_host) }}
                        {{ Form::bsText('smtp_port', 'Port', 'Port', $ayarlar->smtp_port) }}
                    </div>
                    <!-- /.tab-pane -->

                    <!-- /.tab-pane --><!-- /.tab-pane -->
                    <div class="tab-pane" id="google_api">
                        {{ Form::bsTextarea('recapctha', 'Google Recapctha', '3', 'Google Recapctha', $ayarlar->recapctha) }}
                        {{ Form::bsTextarea('maps', 'Google Maps', '3', 'Google Maps', $ayarlar->maps) }}
                        {{ Form::bsTextarea('analystic', 'Google Analystic', '3', 'Google Analystic', $ayarlar->analystic) }}

                    </div>


                    <button type="submit" class="btn btn-primary form-control">Gönder</button>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
            </form>
        </div>
        <!-- /.col -->
    </div>

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
