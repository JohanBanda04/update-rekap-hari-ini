@extends('layouts.admin.tabler')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">

                    </div>
                    <h2 class="page-title">
                        @php
                            $roles =  explode('_',$satker->roles)
                        @endphp
                        Data Berita {{ $satker->name }} ( {{ ucfirst($roles[0])." ".ucfirst($roles[1]) }} )
                    </h2>
                </div>

            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    @if(Session::get('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>

                                    @endif
                                    @if(Session::get('warning'))
                                        <div class="alert alert-warning">
                                            {{ Session::get('warning') }}
                                        </div>

                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <a href="#" class="btn btn-primary" id="btnTambahBeritaSatker">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-plus" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 5l0 14"/>
                                            <path d="M5 12l14 0"/>
                                        </svg>
                                        {{--ASLIII--}}
                                        Tambah Data's
                                    </a>
                                </div>
                                <div class="col-3" style="margin-left: -80px">
                                    {{--PILIHAN KONFIGURASI--}}
                                    <a href="#" class="tampilkanlaporan_whatssap_message_today_kanwil btn btn-warning"
                                       kode_satker_value="{{ $satker->kode_satker }}" id="btnTambahBeritaSatker">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"/>
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"/>
                                        </svg>
                                        {{--ASLIII--}}
                                        @php
                                            $humas_kanwil = explode('_',$satker->roles);
                                        @endphp
                                        {{--Proses Generate--}}
                                        Rekap Berita Hari Ini
                                        ({{ ucfirst($humas_kanwil[0])." ".ucfirst($humas_kanwil[1]) }})
                                    </a>
                                </div>
                            </div>


                            <div class="row mt-2">
                                <div class="col-12">
                                    <form action="{{ route('getberita',$satker->kode_satker) }}" method="get"
                                          id="frmBeritaSatkerIndex" name="frmBeritaSatkerIndex">
                                        @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="input-icon mb-3">
                                                    <span class="input-icon-addon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             class="icon icon-tabler icon-tabler-calendar-event"
                                                             width="24" height="24"
                                                             viewBox="0 0 24 24" stroke-width="1.5"
                                                             stroke="currentColor" fill="none"
                                                             stroke-linecap="round" stroke-linejoin="round"><path
                                                                    stroke="none"
                                                                    d="M0 0h24v24H0z"
                                                                    fill="none"/><path
                                                                    d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"/><path
                                                                    d="M16 3l0 4"/><path d="M8 3l0 4"/><path
                                                                    d="M4 11l16 0"/><path
                                                                    d="M8 15h2v2h-2z"/></svg>
                                                    </span>
                                                    <input type="text" value="{{ Request('dari') }}"
                                                           class="form-control" name="dari" id="dari"
                                                           placeholder="Dari Tanggal">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-icon mb-3">
                                                    <span class="input-icon-addon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             class="icon icon-tabler icon-tabler-calendar-event"
                                                             width="24" height="24"
                                                             viewBox="0 0 24 24" stroke-width="1.5"
                                                             stroke="currentColor" fill="none"
                                                             stroke-linecap="round" stroke-linejoin="round"><path
                                                                    stroke="none"
                                                                    d="M0 0h24v24H0z"
                                                                    fill="none"/><path
                                                                    d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"/><path
                                                                    d="M16 3l0 4"/><path d="M8 3l0 4"/><path
                                                                    d="M4 11l16 0"/><path
                                                                    d="M8 15h2v2h-2z"/></svg>
                                                    </span>
                                                    <input type="text" value="{{ Request('sampai') }}"
                                                           class="form-control" name="sampai" id="sampai"
                                                           placeholder="Sampai Tanggal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-barcode"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M4 7v-1a2 2 0 0 1 2 -2h2"/><path d="M4 17v1a2 2 0 0 0 2 2h2"/><path
                                                d="M16 4h2a2 2 0 0 1 2 2v1"/><path d="M16 20h2a2 2 0 0 0 2 -2v-1"/><path
                                                d="M5 11h1v2h-1z"/><path d="M10 11l0 2"/><path d="M14 11h1v2h-1z"/><path
                                                d="M19 11l0 2"/></svg>
                                </span>
                                                    <input type="text" value="{{ Request('nama_berita') }}"
                                                           class="form-control"
                                                           name="nama_berita" id="nama_berita"
                                                           placeholder="Nama Berita">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <button class="btn btn-primary" style="width: 200px" type="submit">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             class="icon icon-tabler icon-tabler-search" width="24"
                                                             height="24"
                                                             viewBox="0 0 24 24" stroke-width="1.5"
                                                             stroke="currentColor" fill="none"
                                                             stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"/>
                                                            <path d="M21 21l-6 -6"/>
                                                        </svg>
                                                        Cari Data Berita
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <table class="table table-bordered"
                                           style=" table-layout: fixed !important;">
                                        <thead>
                                        <tr>
                                            {{--ASLIII--}}
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Judul</th>
                                            <th>Website</th>
                                            <th>Facebook</th>
                                            <th>Instagram</th>
                                            <th>Twitter</th>
                                            <th hidden>Tiktok</th>
                                            <th hidden>SIPPN</th>
                                            <th hidden>Youtube</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($berita_satker as $d)
                                            @php
                                                //Storage -> public : E:\LARAVEL\presensigps\storage\app
                                                    //$path = Storage::url('uploads/karyawan/'.$d->foto);
                                            @endphp
                                            <tr>
                                                <td>{{ ($loop->iteration + $berita_satker->firstItem()) - 1  }}</td>
                                                <td>{{ date('d-m-Y',strtotime($d->tgl_input)) }}</td>
                                                <td style=" max-width: -moz-fit-content; max-width: fit-content;
                                           margin: 0 auto; overflow-x: auto; white-space: nowrap;">{{ $d->nama_berita }}</td>
                                                <td style=" max-width: -moz-fit-content; max-width: fit-content;
                                           margin: 0 auto; overflow-x: auto; white-space: nowrap;">{{ $d->website }}</td>
                                                <td style=" max-width: -moz-fit-content; max-width: fit-content;
                                           margin: 0 auto; overflow-x: auto; white-space: nowrap;">{{ $d->facebook }}</td>
                                                <td style=" max-width: -moz-fit-content; max-width: fit-content;
                                           margin: 0 auto; overflow-x: auto; white-space: nowrap;">{{ $d->instagram }}</td>
                                                <td style=" max-width: -moz-fit-content; max-width: fit-content;
                                           margin: 0 auto; overflow-x: auto; white-space: nowrap;">{{ $d->twitter }}</td>
                                                <td hidden 10.110.style=" max-width: -moz-fit-content; max-width: fit-content;
                                           margin: 0 auto; overflow-x: auto; white-space: nowrap;">{{ $d->tiktok }}</td>
                                                <td hidden style=" max-width: -moz-fit-content; max-width: fit-content;
                                           margin: 0 auto; overflow-x: auto; white-space: nowrap;">{{ $d->sippn }}</td>
                                                <td hidden style=" max-width: -moz-fit-content; max-width: fit-content;
                                           margin: 0 auto; overflow-x: auto; white-space: nowrap;">{{ $d->youtube }}</td>

                                                <td style=" max-width: -moz-fit-content; max-width: fit-content;
                                           margin: 0 auto; overflow-x: auto; white-space: nowrap;">
                                                    <div class="btn-group">
                                                        {{--edit disini--}}
                                                        <a href="#"
                                                           class="pilih_konfigurasi_berita btn btn-warning btn-sm"
                                                           id_berita="{{ $d->id_berita }}"
                                                           kode_satker="{{ $satker->kode_satker }}"
                                                           style="margin-right: 5px; border-radius: 5px; ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"/>
                                                                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"/>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="tampilkandetail btn btn-warning btn-sm"
                                                           id_berita="{{ $d->id_berita }}"
                                                           style="margin-right: 5px; border-radius: 5px; background-color: dodgerblue">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="icon icon-tabler icon-tabler-file-description"
                                                                 width="24" height="24" viewBox="0 0 24 24"
                                                                 stroke-width="1.5" stroke="currentColor" fill="none"
                                                                 stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                <path d="M14 3v4a1 1 0 0 0 1 1h4"/>
                                                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"/>
                                                                <path d="M9 17h6"/>
                                                                <path d="M9 13h6"/>
                                                            </svg>
                                                        </a>
                                                        <a hidden href="#" class="edit btn btn-success btn-sm"
                                                           id_satker="{{ $d->id_berita }}"
                                                           style="margin-right: 5px; border-radius: 5px">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="icon icon-tabler icon-tabler-details" width="24"
                                                                 height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                                 stroke="currentColor" fill="none"
                                                                 stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                <path d="M11.999 3l.001 17"/>
                                                                <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"/>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="editberita btn-sm"
                                                           style="background-color: #3ebc16; border-radius: 5px;
                                                           color: white"
                                                           id_berita="{{ $d->id_berita }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="icon icon-tabler icon-tabler-edit" width="24"
                                                                 height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                 stroke="currentColor" fill="none"
                                                                 stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"/>
                                                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"/>
                                                                <path d="M16 5l3 3"/>
                                                            </svg>
                                                        </a>

                                                        <form action="{{ route('deleteberita',[$d->id_berita,$d->kode_satker]) }}"
                                                              method="post"
                                                              style="margin-left: 5px">
                                                            @csrf
                                                            {{--                                                            @method('DELETE')--}}
                                                            <a style="height: 20px; border-radius: 5px;"
                                                               class="btn btn-danger btn-sm delete-confirm-berita">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                     class="icon icon-tabler icon-tabler-trash-filled"
                                                                     width="24" height="24" viewBox="0 0 24 24"
                                                                     stroke-width="2" stroke="currentColor" fill="none"
                                                                     stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                    <path d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z"
                                                                          stroke-width="0" fill="currentColor"/>
                                                                    <path d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z"
                                                                          stroke-width="0" fill="currentColor"/>
                                                                </svg>
                                                            </a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        {{ $berita_satker->links() }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal modal-blur fade" style="" id="modal-inputberitasatker" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 1000px;" role="document">
            <div class="modal-content" style="">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Berita {{ $satker->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body " style="">
                    <form action="{{  route('storeberita') }}" method="post" id="frmBeritaSatker" name="frmBeritaSatker"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"/><path
                                                d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                                    </svg>
                                </span>
                                    <input readonly type="text" value="{{ $satker->kode_satker }}" class="form-control"
                                           name="kode_satker"
                                           id="kode_satker"
                                           placeholder="Kode Satker">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-file-barcode" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                              d="M0 0h24v24H0z"
                                                                                              fill="none"/><path
                                                d="M14 3v4a1 1 0 0 0 1 1h4"/><path
                                                d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"/><path
                                                d="M8 13h1v3h-1z"/><path d="M12 13v3"/><path d="M15 13h1v3h-1z"/>
                                    </svg>
                                </span>
                                    <input type="text" value="" class="form-control" name="judul_berita_satker"
                                           id="judul_berita_satker"
                                           placeholder="Tambah Judul Berita" {{--required--}}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                               d="M9 15l6 -6"/><path
                                               d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                               d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                                </span>
                                    <input type="text" value="" class="form-control" name="facebook" id="facebook"
                                           placeholder="Link Facebook" {{--required--}}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M9 15l6 -6"/><path
                                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                                </span>
                                    <input type="text" value="" class="form-control" name="website" id="website"
                                           placeholder="Link Website" {{--required--}}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M9 15l6 -6"/><path
                                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                                </span>
                                    <input type="text" value="" class="form-control" name="instagram" id="instagram"
                                           placeholder="Link Instagram" {{--required--}}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M9 15l6 -6"/><path
                                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                                </span>
                                    <input type="text" value="" class="form-control" name="twitter" id="twitter"
                                           placeholder="Link Twitter" {{--required--}}>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M9 15l6 -6"/><path
                                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                                </span>
                                    <input type="text" value="" class="form-control" name="tiktok" id="tiktok"
                                           placeholder="Link Tiktok" {{--required--}}>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M9 15l6 -6"/><path
                                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                                </span>
                                    <input type="text" value="" class="form-control" name="sippn" id="sippn"
                                           placeholder="Link SIPPN" {{--required--}}>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M9 15l6 -6"/><path
                                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                                </span>
                                    <input type="text" value="" class="form-control" name="youtube" id="youtube"
                                           placeholder="Link Youtube" {{--required--}}>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 10px; margin-top: 15px;">
                            <div class="col-12">

                                <div class="form-group">
                                    <div class="input_fields_wrap">
                                        <center><label class="col-lg-12 " style="">Link Tambahan (Media Lokal)</label>
                                        </center>
                                        <button class="add_field_button btn btn-success m-l-15 col-lg-12 "
                                                style="margin-bottom: 15px;">
                                            Tambah Kolom Media Lokal
                                        </button>
                                        <table class="m-l-15 col-lg-12">
                                            <tr class="">

                                                <td class="" style="">
                                                    {{--<label for="">Berita Media Lokal</label>--}}
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <select required name="kode_media[]" id="kode_media[]" class="form-select">
                                                                <option value="">-Nama Media-</option>
                                                                <option value="no media">-No Media-</option>
                                                                @foreach($getmedia as $idx=>$media)
                                                                    <option value="{{ $media->kode_media }}">
                                                                        {{ $media->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" name="jumlah[]" id="jumlah[]"
                                                                   class="jumlah_medlok form-control "
                                                                   placeholder="Judul Berita|||Link Media Lokal">
                                                        </div>

                                                    </div>

                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 10px; margin-top: 15px;">
                            <div class="col-12">

                                <div class="form-group">
                                    <div class="input_fields_wrap_nasional">
                                        <center><label class="col-lg-12 " style="">Link Tambahan (Media
                                                Nasional)</label>
                                        </center>
                                        <button class="add_field_button_nasional btn btn-warning m-l-15 col-lg-12 "
                                                style="margin-bottom: 15px;">
                                            Tambah Kolom Media Nasional
                                        </button>
                                        <table class="m-l-15 col-lg-12">
                                            <tr class="">

                                                <td class="" style="">
                                                    {{--<label for="">Berita Media Lokal</label>--}}
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <select required name="kode_media_nasional[]" id="kode_media_nasional[]" class="form-select">
                                                                <option value="">-Nama Media-</option>
                                                                <option value="no media">-No Media-</option>
                                                                @foreach($getmedia as $idx=>$media)
                                                                    <option value="{{ $media->kode_media }}">
                                                                        {{ $media->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" name="jumlah_nasional[]"
                                                                   id="jumlah_nasional[]" class="jumlah_mednas form-control "
                                                                   placeholder="Judul Berita|||Link Media Nasional" required>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="form-group">
                                    <button class="btn btn-primary w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-send" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 14l11 -11"/>
                                            <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"/>
                                        </svg>
                                        {{--ASLIII--}}
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-tampilkandetail" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Data Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="loadedittampilkandetail">

                </div>
            </div>
        </div>
    </div>

    {{--modal untuk pilih konfigurasi--}}
    <div class="modal modal-blur fade" id="pilih_konfigurasi_modal" name="pilih_konfigurasi_modal" tabindex="-1"
         role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        {{--ASLIII--}}
                        @php
                            $role = $satker->roles;
                            $explode = explode('_',$role);
                        @endphp
                        Laporan Rekap Hari Ini
                        <small>oleh {{ $satker->name }} ( {{ ucfirst($explode[0])." ".ucfirst($explode[1]) }} )</small>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="pilih_konfigurasi_body" name="pilih_konfigurasi_body">

                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-tampilkandetail_whatssap" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilihan Konfigurasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="loadedittampilkandetail_whatssap">

                </div>
            </div>
        </div>
    </div>
    {{--modal untuk edit--}}
    {{--Modal Edit--}}
    <div class="modal modal-blur fade" id="modal-editsatkerberita" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Beritae</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="loadeditform_berita">

                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>
@endsection

@push('myscript')
    <script>
        $(function () {
            $("#dari, #sampai").datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'yyyy-mm-dd',
            });

            $(".tampilkanlaporan_whatssap_message_today_kanwil").click(function () {
                //alert("testing");
                var kode_satker_value = $(this).attr('kode_satker_value');
                //alert(kode_satker_value);
                $.ajax({
                    type: 'POST',
                    url: '{{ route('pilihkonfigurasi_kanwil') }}',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        kode_satker_value: kode_satker_value,
                    },
                    success: function (respond) {
                        console.log(respond);
                        $('#pilih_konfigurasi_body').html(respond);
                    },
                });
                $('#pilih_konfigurasi_modal').modal('show');

            });

            function checkSelectedFile(id) {


                fileName = document.querySelector('#' + id).value;
                extension = fileName.split('.').pop();


                if (document.getElementById(id).files.length == 0) {
                    console.log("no files selected");
                    $('#' + id).prop('required', true);
                    // $('.text-field').prop('required',true);
                } else {
                    console.log("there are files selected");
                    // $('#'+id).prop('required',false);

                    if (extension != 'pdf' && extension != 'doc' && extension != 'docx') {
                        alert("ekstensi file harus PDF, DOC, atau DOCX");

                        document.querySelector('#' + id).value = '';
                        $('#' + id).prop('required', true);
                    } else {
                        const oFile = document.getElementById(id).files[0];
                        console.log(id);
                        console.log(oFile);
                        $('#' + id).prop('required', false);

                        if (oFile.size > (5 * (1024 * 1024))) // 500Kb for bytes.
                        {
                            alert("size file terlalu besar");
                            document.querySelector('#' + id).value = '';
                            $('#' + id).prop('required', true);
                        }
                    }


                }

            }

            var max_fields = 100; //maximum input boxes allowed
            var max_fields_nasional = 100; //maximum input boxes allowed

            var wrapper = $(".input_fields_wrap"); //Fields wrapper
            var wrapper_nasional = $(".input_fields_wrap_nasional"); //Fields wrapper

            var add_button = $(".add_field_button"); //Add button ID
            var add_button_nasional = $(".add_field_button_nasional"); //Add button ID

            var x = 1; //initlal text box count
            var x_nasional = 1; //initlal text box count


            $(add_button).click(function (e) { //on add input button click
                e.preventDefault();
                if (x < max_fields) { //max input box allowed
                    x++; //text box increment

                    $(wrapper).append('<div>' +
                        '<table class="m-l-15 col-lg-12" style="">' +
                        '<tr style="margin-top: 10px">' +
                        '<td>' +


                        '</td>' +
                        '<td style=""><div class="row"><div class=col-4><select required name="kode_media[]" id="kode_media[]" class="form-select"><option value="">-Nama Media-</option><option value="no media">-No Media-</option>' +
                        '@foreach($getmedia as $id=>$med)<option value="{{ $med->kode_media }}">{{ $med->name }}</option>@endforeach</select></div><div class="col-8"><input type="text" name="jumlah[]" id="jumlah[]" class="jumlah_medlok form-control" placeholder="Judul Berita|||Link Media Lokal"> </div></div>' +
                        '</td>' +
                        '</tr>' +
                        '</table>' +
                        '<a href="#" style="margin-left: 10px;" class="remove_field">Remove</a></div>');
                    $('.myselect').select2();
                }
            });

            $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });

            $(add_button_nasional).click(function (e) { //on add input button click
                e.preventDefault();
                if (x < max_fields_nasional) { //max input box allowed
                    x++; //text box increment

                    $(wrapper_nasional).append('<div>' +
                        '<table class="m-l-15 col-lg-12" style="">' +
                        '<tr style="margin-top: 10px">' +
                        '<td>' +


                        '</td>' +
                        '<td style=""><div class="row"><div class="col-4"><select required name="kode_media_nasional[]" id="kode_media_nasional[]" class="form-select">' +
                        '<option value="">-Nama Media-</option><option value="no media">-No Media-</option>@foreach($getmedia as $idk=>$mednas)<option value="{{ $mednas->kode_media }}">{{ $mednas->name }}</option>@endforeach</select></div><div class="col-8"><input type="text" name="jumlah_nasional[]" id="jumlah_nasional[]" class="jumlah_mednas form-control" placeholder="Judul Berita|||Link Media Nasional" required ></div></div> ' +

                        '</td>' +
                        '</tr>' +
                        '</table>' +
                        '<a href="#" style="margin-left: 10px;" class="remove_field_nasional">Remove</a></div>');
                    $('.myselect').select2();
                }
            });

            $(wrapper_nasional).on("click", ".remove_field_nasional", function (e) { //user click on remove text
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });


            var counter = 0;

            $("#add-more").click(function (e) {
                var html3 = '<div class="form-group input-dinamis " style="margin-bottom: 10px; margin-top: 10px;"><div class="row">' +
                    '<div class="col-input-dinamis col-lg-10">' +
                    '<input type="text" name="url_files[]" class="form-control border-grey" ' +
                    'id="peserta' + counter + '" onchange="checkSelectedFile(id)" ' +
                    'placeholder="Link Media Lokal" required>' +
                    '</div>' +
                    '<div class="col-input-dinamis col-lg-2">' +
                    '<button class="btn btn-danger remove" type="button"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-backspace-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 5a2 2 0 0 1 1.995 1.85l.005 .15v10a2 2 0 0 1 -1.85 1.995l-.15 .005h-11a1 1 0 0 1 -.608 -.206l-.1 -.087l-5.037 -5.04c-.809 -.904 -.847 -2.25 -.083 -3.23l.12 -.144l5 -5a1 1 0 0 1 .577 -.284l.131 -.009h11zm-7.489 4.14a1 1 0 0 0 -1.301 1.473l.083 .094l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.403 1.403l.094 -.083l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.403 -1.403l-.083 -.094l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.403 -1.403l-.094 .083l-1.293 1.292l-1.293 -1.292l-.094 -.083l-.102 -.07z" stroke-width="0" fill="currentColor" />' +
                    '</svg><' +
                    '/button>' +
                    '</div>' +
                    '</div>' +
                    '</div>';


                $('#auth-rows').append(html3);
                counter++;
            });

            $('#auth-rows').on('click', '.remove', function (e) {
                e.preventDefault();
                $(this).parents('.input-dinamis').remove();
            });

            var counter_nasional = 0;

            $("#add-more-nasional").click(function (e) {
                var html3 = '<div class="form-group input-dinamis-nasional " style="margin-bottom: 10px; margin-top: 10px;"><div class="row">' +
                    '<div class="col-input-dinamis-nasional col-lg-10">' +
                    '<input type="text" name="url_files_nasional[]" class="form-control border-grey" ' +
                    'id="peserta' + counter_nasional + '" onchange="checkSelectedFile(id)" ' +
                    'placeholder="Link Media Nasional" required>' +
                    '</div>' +
                    '<div class="col-input-dinamis-nasional col-lg-2">' +
                    '<button class="btn btn-danger remove-nasional" type="button"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-backspace-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 5a2 2 0 0 1 1.995 1.85l.005 .15v10a2 2 0 0 1 -1.85 1.995l-.15 .005h-11a1 1 0 0 1 -.608 -.206l-.1 -.087l-5.037 -5.04c-.809 -.904 -.847 -2.25 -.083 -3.23l.12 -.144l5 -5a1 1 0 0 1 .577 -.284l.131 -.009h11zm-7.489 4.14a1 1 0 0 0 -1.301 1.473l.083 .094l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.403 1.403l.094 -.083l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.403 -1.403l-.083 -.094l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.403 -1.403l-.094 .083l-1.293 1.292l-1.293 -1.292l-.094 -.083l-.102 -.07z" stroke-width="0" fill="currentColor" />' +
                    '</svg><' +
                    '/button>' +
                    '</div>' +
                    '</div>' +
                    '</div>';


                $('#auth-rows-nasional').append(html3);
                counter_nasional++;
            });

            $('#auth-rows-nasional').on('click', '.remove-nasional', function (e) {
                e.preventDefault();
                $(this).parents('.input-dinamis-nasional').remove();
            });


            $('#btnTambahBeritaSatker').click(function () {
                $('#modal-inputberitasatker').modal('show');
            });

            $('.pilih_konfigurasi_berita').click(function () {
                var id_berita = $(this).attr('id_berita');
                var kode_satker = $(this).attr('kode_satker');
                // console.log(kode_satker);
                //alert(id_berita);
                //return false;

                $.ajax({
                    type: 'POST',
                    url: '{{ route('pilih_konfigurasi_berita') }}',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id_berita: id_berita,
                        kode_satker: kode_satker,
                    },
                    success: function (respond) {
                        console.log(respond);
                        $('#loadedittampilkandetail_whatssap').html(respond);
                    }
                });
                $('#modal-tampilkandetail_whatssap').modal('show');
            });

            $('.tampilkandetail').click(function () {
                var id_berita = $(this).attr('id_berita');
                //alert(id_berita);
                //return false;
                $.ajax({
                    type: 'POST',
                    url: '{{ route('tampilkandetailberita') }}',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id_berita: id_berita,
                    },
                    success: function (respond) {
                        $('#loadedittampilkandetail').html(respond);
                    }
                });
                $('#modal-tampilkandetail').modal('show');
            });

            $('.editberita').click(function () {
                var id_berita = $(this).attr('id_berita');
                //alert(id_berita);
                //return false;
                $.ajax({
                    type: 'POST',
                    url: '{{ route('editberita') }}',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id_berita: id_berita,
                    },
                    success: function (respond) {
                        $('#loadeditform_berita').html(respond);
                    }
                });
                $('#modal-editsatkerberita').modal('show');
            });
            $('.edit').click(function () {
                var id_satker = $(this).attr('id_satker');
                //alert(id_satker);
                $.ajax({
                    type: 'POST',
                    url: '{{ route('satkeredit') }}',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id_satker: id_satker,

                    },
                    success: function (respond) {
                        $('#loadeditform').html(respond);
                    }
                });
                $('#modal-editsatker').modal('show');
            });

            $('.delete-confirm-berita').click(function (e) {
                var form = $(this).closest('form');
                e.preventDefault();
                Swal.fire({
                    title: "Apakah Anda Yakin Data Ini Mau Di Hapus?",
                    text: "Jika Ya Maka Data Akan Terhapus Permanent",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus Saja!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire({
                            title: "Deleted!",
                            text: "Data Berhasil Dihapus",
                            icon: "success"
                        });
                    }
                });
            });


            $('#frmBeritaSatker').submit(function () {

                var kode_satker = $('#frmBeritaSatker').find('#kode_satker').val();
                var judul_berita_satker = $('#frmBeritaSatker').find('#judul_berita_satker').val();
                var facebook = $('#frmBeritaSatker').find('#facebook').val();
                var website = $('#frmBeritaSatker').find('#website').val();
                var instagram = $('#frmBeritaSatker').find('#instagram').val();
                var twitter = $('#frmBeritaSatker').find('#twitter').val();
                var tiktok = $('#frmBeritaSatker').find('#tiktok').val();
                var sippn = $('#frmBeritaSatker').find('#sippn').val();
                var youtube = $('#frmBeritaSatker').find('#youtube').val();

                if (kode_satker == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Kode Satker Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#kode_satker').focus();
                    });
                    return false;
                } else if (judul_berita_satker == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Judul Berita Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#judul_berita_satker').focus();
                    });
                    return false;
                } else if (facebook == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Link Facebook Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#facebook').focus();
                    });
                    return false;
                } else if (website == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Link Website Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#website').focus();
                    });
                    return false;
                } else if (instagram == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Link Instagram Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#instagram').focus();
                    });
                    return false;
                } else if (twitter == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Link Twitter Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#twitter').focus();
                    });
                    return false;
                } else if (tiktok == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Link Tiktok Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#tiktok').focus();
                    });
                    return false;
                } else if (sippn == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Link SIPPN Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#sippn').focus();
                    });
                    return false;
                } else if (youtube == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Link Youtube Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#youtube').focus();
                    });
                    return false;
                }

                /*validasi link media lokal*/

                //return false;
                var jumlah_medlok = document.getElementsByClassName('jumlah_medlok');
                for (var i = 0; i <= jumlah_medlok.length; i++) {
                    //alert(jumlah_medlok[i].value);
                    if (jumlah_medlok[i].value == "") {
                        Swal.fire({
                            title: 'Warning!',
                            text: 'Link Media Lokal Belum Terisi Semua',
                            icon: 'warning',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            $('#jumlah[' + i + ']').focus();
                        });
                        return false;
                    }
                }
                /*batas validasi link media lokal*/


            });

            {{--function loadberita(){--}}
            {{--var tanggal_awal = $('#tanggal_awal').val();--}}
            {{--var kode_satker = $('#kode_satker').val();--}}
            {{--//alert(kode_satker);--}}

            {{--$.ajax({--}}
            {{--type: 'POST',--}}
            // url: '/datasatker/'+ kode_satker +'/getberitabytanggal',
            {{--data: {--}}
            {{--_token: "{{ csrf_token() }}",--}}
            {{--tanggal_awal: tanggal_awal,--}}
            {{--},--}}
            {{--cache: false,--}}
            {{--success: function(respond){--}}
            {{--console.log(respond);--}}
            {{--}--}}
            {{--});--}}
            {{--}--}}
            {{--$('#tanggal_awal').change(function(e){--}}
            {{--loadberita();--}}
            {{--});--}}
            {{--loadberita();--}}
        });
    </script>
@endpush

