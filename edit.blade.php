<form action="{{ route('updateberita', $berita->id_berita) }}" method="post" id="frmSatkerBeritaEdit"
      name="frmSatkerBeritaEdit"
      enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"/><path
                                d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                                    </svg>
                </span>
                <input readonly type="text" value="{{ $berita->kode_satker }}" class="form-control"
                       name="kode_satker"
                       id="kode_satker"
                       placeholder="Kode Satker ">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
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
                <input type="text" value="{{ $berita->nama_berita }}" class="form-control"
                       name="judul_berita_satker"
                       id="judul_berita_satker"
                       placeholder="Judul Berita Edit">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                d="M9 15l6 -6"/><path
                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                </span>
                <input type="text" value="{{ $berita->facebook }}" class="form-control"
                       name="facebook"
                       id="facebook"
                       placeholder="Link Facebook" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                d="M9 15l6 -6"/><path
                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                </span>
                <input type="text" value="{{ $berita->website }}" class="form-control"
                       name="website"
                       id="website"
                       placeholder="Link Website" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                d="M9 15l6 -6"/><path
                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                </span>
                <input type="text" value="{{ $berita->instagram }}" class="form-control"
                       name="instagram"
                       id="instagram"
                       placeholder="Link Instagram" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                d="M9 15l6 -6"/><path
                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                </span>
                <input type="text" value="{{ $berita->twitter }}" class="form-control"
                       name="twitter"
                       id="twitter"
                       placeholder="Link Twitter" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                d="M9 15l6 -6"/><path
                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                </span>
                <input type="text" value="{{ $berita->tiktok }}" class="form-control"
                       name="tiktok"
                       id="tiktok"
                       placeholder="Link Tiktok" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                d="M9 15l6 -6"/><path
                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                </span>
                <input type="text" value="{{ $berita->sippn }}" class="form-control"
                       name="sippn"
                       id="sippn"
                       placeholder="Link SIPPN" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                d="M9 15l6 -6"/><path
                                d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/><path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>
                                   </svg>
                </span>
                <input type="text" value="{{ $berita->youtube }}" class="form-control"
                       name="youtube"
                       id="youtube"
                       placeholder="Link Youtube" required>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px; margin-top: 15px;">
        <div class="col-12">
            <div class="form-group">
                <div class="input_fields_wrap_edit">
                    <center><label class="col-lg-12 " style="">Link Tambahan (Media LokaL)</label>
                    </center>
                    <button onclick="addFileMedlok(<?= $berita->id_berita?>)"
                            class="{{--add_field_button_edit--}} btn btn-success m-l-15 col-lg-12 "
                            style="margin-bottom: 15px;">
                        Tambah Kolom Media Lokal
                    </button>

                    <?php
                    $links_media_lokal = json_decode($berita->media_lokal);

                    ?>

                    @foreach($links_media_lokal??[] as $key=>$link)
                        @php
                            $kode_media = explode("|||",$link)[0];
                        @endphp
                        <div class="row" id="list-file-medlok-<?= $key; ?>-<?= $berita->id_berita; ?>">
                            <div class="col-12">
                                <div class="input-icon mb-1">
                                    <div class="row">
                                        <div class="col-3">
                                            <select required name="kode_media[]" id="kode_media[]"
                                                    class="form-select">
                                                <option value="">-Nama Media-</option>
                                                <option value="no media">-No Media-</option>
                                                @foreach($getmedia as $idx=>$media)
                                                    <option {{ $kode_media==$media->kode_media?"selected":"" }} value="{{ $media->kode_media }}">
                                                        {{ $media->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-input-dinamis col-8" style="overflow: auto">
                                            @php
                                                $link_old = $link;
                                                $link = str_replace($kode_media."|||","",$link);
                                            @endphp
                                            <input type="text" value="{{ $link }}" id="jumlah_edit[]"
                                                   name="jumlah_edit[]"
                                                   class=" form-control border-grey"
                                                   placeholder="Judul Berita|||Link Media Lokal" required>
                                        </div>
                                        <div class="col-input-dinamis col-lg-1">
                                            <a style="" href="javascript:;"
                                               class=""
                                               onclick="deleteFileMedlok('<?php echo $link_old;?>','<?= $key; ?>', '<?= $berita->id_berita; ?>')">
                                                <i class="fa fa-trash btn btn-danger">X</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    <div class="mt-2" id="show-file-list-medlok-<?= $berita->id_berita; ?>"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px; margin-top: 15px;">
        <div class="col-12">
            <div class="form-group">
                <div class="input_fields_wrap_edit_nasional">
                    <center><label class="col-lg-12 " style="">Link Tambahan (Media NasionaL)</label>
                    </center>
                    <button onclick="addFileMednas(<?= $berita->id_berita?>)"
                            class="{{--add_field_button_edit_nasional--}} btn btn-warning m-l-15 col-lg-12 "
                            style="margin-bottom: 15px;">
                        Tambah Kolom Media Nasional
                    </button>
                    <?php
                    $links_media_nasional = json_decode($berita->media_nasional);
                    ?>
                    @foreach($links_media_nasional??[] as $key_nasional=>$link_nasional)
                        @php
                            $kode_media_nasional = explode("|||",$link_nasional)[0];
                        @endphp
                        {{--                        <span>{{ $kode_media }}</span>--}}
                        <div class="row" id="list-file-mednas-<?= $key_nasional?>-<?= $berita->id_berita?>">
                            <div class="col-12">
                                <div class="input-icon mb-1">
                                    <div class="row">
                                        <div class="col-3">
                                            <select required name="kode_media_nasional[]" id="kode_media_nasional[]"
                                                    class="form-select">
                                                <option value="">-Nama Media-</option>
                                                <option value="no media">-No Media-</option>
                                                @foreach($getmedia as $idx=>$media)
                                                    <option {{ $kode_media_nasional==$media->kode_media?"selected":"" }} value="{{ $media->kode_media }}">
                                                        {{ $media->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-input-dinamis col-lg-8" style="overflow: auto">
                                            @php
                                                $link_nasional_old = $link_nasional;
                                                $link_nasional = str_replace($kode_media_nasional."|||","",$link_nasional);
                                            @endphp
                                            <input type="text" value="{{ $link_nasional }}"
                                                   name="jumlah_edit_nasional[]"
                                                   id="jumlah_edit_nasional[]"
                                                   class="form-control border-grey"
                                                   placeholder="Judul Berita|||Link Media Nasional" required>
                                        </div>
                                        <div class="col-input-dinamis col-lg-1">
                                            <a style="" href="javascript:;"
                                               class=""
                                               onclick="deleteFileMednas('<?php echo $link_nasional_old;?>','<?= $key_nasional; ?>', '<?= $berita->id_berita; ?>')">
                                                <i class="fa fa-trash btn btn-danger">X</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    <div class="mt-2" id="show-file-list-mednas-<?= $berita->id_berita; ?>"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="form-group">
                <button class="btn btn-primary w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"/>
                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"/>
                    </svg>
                    Update Data
                </button>
            </div>
        </div>
    </div>


</form>
@push('myscript')
    <script>
        /*mungkin harus di dalam push('myscript') ini utk validasi dgn nama kelas "jumlah_medlok"*/
    </script>
@endpush
<script type="text/javascript">

    $(document).ready(function () {
        console.log("ready!");

        //$('#lamp_surat_permohonan_edit').prop('required', true);
        //$('#draft_harmonisasi_edit').prop('required', true);
        //$('#naskah_akademik_edit').prop('required', false);

    });


    var count = 0;

    var count_medlok = 0;
    var count_mednas = 0;

    function removeFileMednas(element) {
        console.log("xxxxTembusan");
        document.getElementById(element).remove();
    }

    function removeFileMedlok(element) {
        console.log("xxxxTembusan");
        document.getElementById(element).remove();
    }

    function addFileMednas($row_id_berita) {
        console.log($row_id_berita + "mednas");
        let elementIdMednas = "input-file-element-mednas-" + count_mednas;
        let divIdMednas = "input-dinamis-edit-mednas-" + count_mednas;

        var html4 = '<div class="form-group input-dinamis m-20 mt-2" id="' + divIdMednas + '">' +
            '<div class="row">' +
            '<div class="col-3"><select required name="kode_media_nasional[]" id="kode_media_nasional[]" class="form-select">' +
            '<option value="">-Nama Media-</option><option value="no media">-No Media-</option>'+
                '@foreach($getmedia as $idx=>$media_nasional)<option value="{{ $media_nasional->kode_media }}">{{ $media_nasional->name }}</option>@endforeach'+
            '</select></div>'+
            '<div class="col-input-dinamis col-lg-8 ">' +
            '<input type="text" name="jumlah_edit_nasional[]" id="jumlah_edit_nasional[]" class="form-control border-grey" ' +
            'id="' + elementIdMednas + '" onchange="" ' +
            'placeholder="Judul Berita|||Link Media Nasional" required>' +
            '</div>' +
            '<div class="col-input-dinamis col-lg-1">' +
            '<button class="btn btn-danger remove-edit" ' +
            'onclick="removeFileMednas(' + "'" + divIdMednas + "'" + ')" type="button">' +
            '<span style="font-style: italic">X</span>' +
            '</button>' +
            '</div>' +
            '</div>' +
            '</div>';
        $('#show-file-list-mednas-' + $row_id_berita).append(html4);
        count_mednas++;
    }

    function addFileMedlok($row_id_berita) {
        console.log($row_id_berita + "medlok");
        let elementIdMedlok = "input-file-element-medlok-" + count_medlok;
        let divIdMedlok = "input-dinamis-edit-medlok-" + count_medlok;

        var html4 = '<div class="form-group input-dinamis m-20 mt-2" id="' + divIdMedlok + '">' +
            '<div class="row">' +
            '<div class="col-3"><select required name="kode_media[]" id="kode_media[]" class="form-select">' +
            '<option value="">-Nama Media-</option><option value="no media">-No Media-</option>' +
            '@foreach($getmedia as $idx=>$media)<option value="{{ $media->kode_media }}">{{ $media->name }}</option>@endforeach' +
            '</select></div>' +
            '<div class="col-input-dinamis col-8 ">' +
            '<input type="text" name="jumlah_edit[]" id="jumlah_edit[]" class=" form-control border-grey" ' +
            'id="' + elementIdMedlok + '" onchange="" ' +
            'placeholder="Judul Berita|||Link Media Lokal" required >' +
            '</div>' +
            '<div class="col-input-dinamis col-lg-1">' +
            '<button class="btn btn-danger remove-edit" ' +
            'onclick="removeFileMedlok(' + "'" + divIdMedlok + "'" + ')" type="button">' +
            '<span style="font-style: italic">X</span>' +
            '</button>' +
            '</div>' +
            '</div>' +
            '</div>';
        $('#show-file-list-medlok-' + $row_id_berita).append(html4);
        count_medlok++;
    }


    function deleteFile_old($link, $key, $id_berita) {
        // $path = nama file;
        // $file_id = index file dari record db;
        // $row_id= id unique;
        // confirm("Hapus File?",);
        if (confirm("Hapus File Lampiran?") == true) {
            $.post("/datasatker/hapuslink", {

                link: $link,
                key: $key,
                id_berita: $id_berita,
            }).done(function (response) {
                // console.log(response);
                console.log("tes");
                //$("#list-file-"+$file_id+"-"+$row_id).remove();
                $("#list-file-" + key + "-" + id_berita).remove();
            });
        }

        // alert("tesss");

    }

    function deleteFileMedlok($link, $key, $id_berita) {
        //alert($link)
        var link = $link;
        var key = $key;
        var id_berita = $id_berita;

        //alert($key);
        //return false;

        Swal.fire({
            title: "Apakah Anda Yakin Data Ini Mau Di Hapus?",
            text: "Jika Ya Maka Data Akan Terhapus Permanent",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus Saja!",
            cancelButtonText: "Batalkan Bro!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('hapuslink') }}',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id_berita: $id_berita,
                        key: $key,
                        link: $link,
                    },
                    success: function (respond) {
                        console.log(respond);
                        //return false;
                        $("#list-file-medlok-" + key + "-" + id_berita).remove();
                    }
                });
                Swal.fire({
                    title: "Deleted!",
                    text: "Link Media Lokal Berhasil Dihapus",
                    icon: "success"
                });
            }
        });


        // alert("tesss");

    }

    function deleteFileMednas($link_nasional, $key_nasional, $id_berita) {
        var link_nasional = $link_nasional;
        var key_nasional = $key_nasional;
        var id_berita = $id_berita;

        //alert($key_nasional);
        //return false;
        Swal.fire({
            title: "Apakah Anda Yakin Data Ini Mau Di Hapus?",
            text: "Jika Ya Maka Data Akan Terhapus Permanent",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus Saja!",
            cancelButtonText: "Batalkan!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('hapuslink_nasional') }}',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id_berita_nasional: $id_berita,
                        key_nasional: $key_nasional,
                        link_nasional: $link_nasional,
                    },
                    success: function (respond) {
                        console.log(respond);
                        //return false;
                        $("#list-file-mednas-" + key_nasional + "-" + id_berita).remove();
                    },
                });
                Swal.fire({
                    title: "Deleted!",
                    text: "Link Media Nasional Berhasil Dihapus",
                    icon: "success"
                });
            }
        });


    }


</script>
<script>
    $(function () {

        var max_fields = 100;
        var max_fields_nasional = 100;

        var add_button_edit = $(".add_field_button_edit");
        var add_button_edit_nasional = $(".add_field_button_edit_nasional");

        var wrapper_edit = $(".input_fields_wrap_edit");
        var wrapper_edit_nasional = $(".input_fields_wrap_edit_nasional");

        var x = 1;
        var x_nasional = 1;

        $('#frmSatkerBeritaEdit').submit(function () {
            var kode_satker = $('#frmSatkerBeritaEdit').find('#kode_satker').val();
            var judul_berita_satker = $('#frmSatkerBeritaEdit').find('#judul_berita_satker').val();
            var facebook = $('#frmSatkerBeritaEdit').find('#facebook').val();
            var website = $('#frmSatkerBeritaEdit').find('#website').val();
            var instagram = $('#frmSatkerBeritaEdit').find('#instagram').val();
            var twitter = $('#frmSatkerBeritaEdit').find('#twitter').val();
            var tiktok = $('#frmSatkerBeritaEdit').find('#tiktok').val();
            var sippn = $('#frmSatkerBeritaEdit').find('#sippn').val();
            var youtube = $('#frmSatkerBeritaEdit').find('#youtube').val();
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
            } else if (judul_berita_satker == '') {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Judul Berita Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#judul_berita_satker').focus();
                });
                return false;
            } else if (facebook == '') {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Link Facebook Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#facebook').focus();
                });
                return false;
            } else if (website == '') {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Link Website Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#website').focus();
                });
                return false;
            } else if (instagram == '') {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Link Instagram Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#instagram').focus();
                });
                return false;
            } else if (twitter == '') {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Link Twitter Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#twitter').focus();
                });
                return false;
            } else if (tiktok == '') {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Link Tiktok Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#tiktok').focus();
                });
                return false;
            } else if (sippn == '') {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Link SIPPN Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#sippn').focus();
                });
                return false;
            } else if (youtube == '') {
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

        });



        $(wrapper_edit).on("click", ".remove_field_edit", function (e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });



        $(wrapper_edit_nasional).on("click", ".remove_field_edit_nasional", function (e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });
    });
</script>