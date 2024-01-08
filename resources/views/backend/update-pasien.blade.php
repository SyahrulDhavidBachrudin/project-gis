@extends('layouts.dashboard-volt')

@section('content')
    <div class="container">
        <div class="row justivy-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">TAMBAH DATA PASIEN</div>
                    <div class="row m-2">
                        <div class="card">
                            <div class="table-responsive">
                                <form action="http://127.0.0.1:8000/data-update/{{ $data->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <table class="table table-vcenter card-table">
                                        <tbody>
                                            <th>
                                                <h5>I. Identitas Kasus</h5>
                                            </th>
                                        </tbody>
                                        <tr>
                                            <th>Nama Kasus(umur) :</th>
                                            <th><input type="text" required value=" {{ $data->Kasus }}" name="kasus">
                                            </th>
                                            <th>Tanggal Lahir :</th>
                                            <th><input type="date" required value=" {{ $data->ttl }}" name="ttl">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>NIK/NKK/Phaspor :</th>
                                            <th><input type="number" required value=" {{ $data->NIK }}" name="NIK">
                                            </th>
                                            <th>Alamat(Jalan/RT/RW) :</th>
                                            <th><input type="text" required value=" {{ $data->Alamat1 }}" name="Alamat1">
                                            </th>
                                        <tr>
                                            <th>Kelurahan :</th>
                                            <th><input type="text" required value=" {{ $data->Kelurahan1 }}"
                                                    name="Kelurahan1"></th>
                                            <th>Kecamatan :</th>
                                            <th><input type="text" required value=" {{ $data->Kecamatan1 }}"
                                                    name="Kecamatan1"></th>
                                        </tr>
                                        <tr>
                                            <th>Pekerjaan :</th>
                                            <th><input type="text" required value=" {{ $data->Pekerjaan }}"
                                                    name="Pekerjaan"></th>
                                            <th>Jenis Kelamin :</th>
                                            <th><input type="text" required value=" {{ $data->kelamin }}" name="kelamin">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>No. HP/Telp :</th>
                                            <th><input type="text" required value=" {{ $data->No_HP }}" name="No_HP">
                                            </th>
                                            <th>Nama Orang Tua :</th>
                                            <th><input type="text" value=" {{ $data->Nama_Ortu }}" name="Nama_Ortu">
                                            </th>
                                        </tr>
                                        <tbody>
                                            <th>
                                                <h5>II. Identifikasi Penyakit</h5>
                                            </th>
                                        </tbody>
                                        <tr>
                                            <th>Tanggal Digigit :</th>
                                            <th><input type="date" required value=" {{ $data->Tgl_Digigit }}"
                                                    name="Tgl_Digigit"></th>
                                            <th>Tanggal Dilaporkan :</th>
                                            <th><input type="date" required value=" {{ $data->Tgl_Dilaporkan }}"
                                                    name="Tgl_Dilaporkan"></th>
                                        </tr>
                                        <tr>
                                            <th>Jenis Hewan Penggit :</th>
                                            <th><input type="text" required value=" {{ $data->Jenis_Hewan }}"
                                                    name="Jenis_Hewan"></th>
                                            <th>Anggota Badan Yang Digigit :</th>
                                            <th><input type="text" required value=" {{ $data->bdn_digigit }}"
                                                    name="bdn_digigit"></th>
                                        </tr>
                                        <tr>
                                            <th>Tipe Luka Gigitan :</th>
                                            <th><input type="text" required value=" {{ $data->Tipe_Luka }}"
                                                    name="Tipe_Luka"></th>
                                            <th>Riwayat Gigitan :</th>
                                            <th><input type="text" value=" {{ $data->Riwayat }}" name="Riwayat">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Didahului Tindakan Provokasi :</th>
                                            <th><input type="text" value=" {{ $data->Provokasi }}" name="Provokasi">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th><b> Alamat Kejadian/Digigit </b></th>
                                        </tr>
                                        <tr>
                                            <th> Desa/Jl : </th>
                                            <th><input type="text" required value=" {{ $data->JL }}" name="JL">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th> Kelurahan : </th>
                                            <th><input type="text" required value=" {{ $data->Kelurahan2 }}"
                                                    name="Kelurahan2"></th>
                                            <th> Kecamatan : </th>
                                            <th><input type="text" required value=" {{ $data->Kecamatan2 }}"
                                                    name="Kecamatan2"></th>
                                        </tr>
                                        <tr>
                                            <th> Kondisi Hewan Saat Menggigit :</th>
                                            <th><input type="text" required value=" {{ $data->Hewan_Menggigit }}"
                                                    name="Hewan_Menggigit"></th>
                                            <th> Kondisi Hewan Saat Ini :</th>
                                            <th><input type="text" required value=" {{ $data->Kondisi_Hewan }}"
                                                    name="Kondisi_Hewan"></th>
                                        </tr>
                                        <tr>
                                            <th> Apakah Sebelumnya Hewan tsb pernah menggigit orang :</th>
                                            <th><input type="text" value=" {{ $data->Pernah_Menggigit }}"
                                                    name="Pernah_Menggigit"></th>
                                        </tr>
                                        <tr>
                                            <th> Kalau pernah, kapan :</th>
                                            <th><input type="text" value=" {{ $data->Kapan }}" name="Kapan">
                                            </th>
                                            <th> Berapa orang :</th>
                                            <th><input type="text" value=" {{ $data->berapa }}" name="berapa">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th><b>Keluhan Saat ini </b></th>
                                            <th>Ya/Tidak</th>
                                            <th>tgl mulai keluhan</th>
                                        </tr>
                                        <tr>
                                            <th> a. Berkeringat banyak </th>
                                            <th><input type="text" value=" {{ $data->ya1 }}" name="ya1">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_keringat }}"
                                                    name="tgl_keringat"></th>
                                        </tr>
                                        <tr>
                                            <th> b. Sulit menelan </th>
                                            <th><input type="text" value=" {{ $data->ya2 }}" name="ya2">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_menelan }}" name="tgl_menelan">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th> c. Takut air </th>
                                            <th><input type="text" value=" {{ $data->ya3 }}" name="ya3">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_takut }}" name="tgl_takut">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th> d. Peka terhadap Sinar </th>
                                            <th><input type="text" value=" {{ $data->ya4 }}" name="ya4">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_peka }}" name="tgl_peka">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th> e. Air mata berlebihan </th>
                                            <th><input type="text" value=" {{ $data->ya5 }}" name="ya5">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_mata }}" name="tgl_mata">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th> f. Air liur berlebihan </th>
                                            <th><input type="text" value=" {{ $data->ya6 }}" name="ya6">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_liur }}" name="tgl_liur">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th> g. Peka terhadap suara </th>
                                            <th><input type="text" value=" {{ $data->ya7 }}" name="ya7">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_sua }}" name="tgl_sua"></th>
                                        </tr>
                                        <tr>
                                            <th> h. Nyeri tekan sekitar luka </th>
                                            <th><input type="text" value=" {{ $data->ya8 }}" name="ya8">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_nyeri }}" name="tgl_nyeri">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th> i. Malaise </th>
                                            <th><input type="text" value=" {{ $data->ya9 }}" name="ya9">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_mala }}" name="tgl_mala">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th> j. Demam </th>
                                            <th><input type="text" value=" {{ $data->ya10 }}" name="ya10">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_demam }}" name="tgl_demam">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th> k. Mual </th>
                                            <th><input type="text" value=" {{ $data->ya11 }}" name="ya11">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_mual }}" name="tgl_mual">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th> l. Nafsu makan menurun </th>
                                            <th><input type="text" value=" {{ $data->ya12 }}" name="ya12">
                                            </th>
                                            <th><input type="date" value=" {{ $data->tgl_nafsu }}" name="tgl_nafsu">
                                            </th>
                                        </tr>
                                        <tbody>
                                            <th>
                                                <h5>III. Riwayat Pengobatan</h5>
                                            </th>
                                        </tbody>
                                        <tr>
                                            <th> Bagaimana merawat luka :</th>
                                            <th><input type="text" required value=" {{ $data->Merawat_Luka }}"
                                                    name="Merawat_Luka"></th>
                                        </tr>
                                        <tr>
                                            <th> Dimana pertama kali berobat :</th>
                                            <th><input type="text" required value=" {{ $data->Tempat_Berobat }}"
                                                    name="Tempat_Berobat"></th>
                                        </tr>
                                        <tr>
                                            <th> Obat yang sudah Diberikan :</th>
                                            <th><input type="text" required value=" {{ $data->Obat }}"
                                                    name="Obat"></th>
                                        </tr>
                                        <tr>
                                            <th> Apakah penderita diberikan VAR :</th>
                                            <th><input type="text" required value=" {{ $data->VAR }}"
                                                    name="VAR" value="ya/tidak">
                                            </th>
                                        </tr>
                                        <tbody class="text-center">
                                            <tr>
                                                <th></th>
                                                <th>
                                                    Pemberian VAR
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th>Tgl Pemberian VAR <br> Ke 1 dan Ke 2 ( 0-hari )</th>
                                                <th>Tgl Pemberian VAR <br> Ke 3 ( Hari ke-7 )</th>
                                                <th>Tgl Pemberian VAR <br> Ke 4 ( Hari ke-21 )</th>
                                                <th>Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th><input type="text" value=" {{ $data->isi1 }}" name="isi1">
                                                </th>
                                                <th><input type="text" value=" {{ $data->isi2 }}" name="isi2">
                                                </th>
                                                <th><input type="text" value=" {{ $data->isi3 }}" name="isi3">
                                                </th>
                                                <th><input type="text" value=" {{ $data->Keterangan }}"
                                                        name="Keterangan"></th>
                                            </tr>
                                        </tbody>
                                        <tr>
                                            <th>Bagaimana kondisi pasien setelah mendapatkan suntikan VAR</th>
                                            <th><input type="text" value=" {{ $data->Kondisi_VAR }}"
                                                    name="Kondisi_VAR"></th>
                                        </tr>
                                        <tbody>
                                            <th>
                                                <h5>IV. Keterangan Lain</h5>
                                            </th>
                                        </tbody>
                                        <tr>
                                            <th>Nama Pemilik Hewan :</th>
                                            <th><input type="text" required value=" {{ $data->Nama_Pemilik }}"
                                                    name="Nama_Pemilik"></th>
                                        </tr>
                                        <tr>
                                            <th>Alamat :</th>
                                            <th><input type="text" required value=" {{ $data->Alamat3 }}"
                                                    name="Alamat3"></th>
                                        </tr>
                                        <tr>
                                            <th>Kelurahan :</th>
                                            <th><input type="text" required value=" {{ $data->Kelurahan3 }}"
                                                    name="Kelurahan3"></th>
                                        </tr>
                                        <tr>
                                            <th>Kecamatan :</th>
                                            <th><input type="text" required value=" {{ $data->Kecamatan3 }}"
                                                    name="Kecamatan3"></th>
                                        </tr>
                                        <tr>
                                            <th>Apakah hewan tsb pernah divaksin :</th>
                                            <th><input type="text" value=" {{ $data->Vaksin }}" name="Vaksin">
                                            </th>
                                            <th>Kalau pernah, kapan :</th>
                                            <th><input type="text" value=" {{ $data->tgl_vksn }}" name="tgl_vksn">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Kategori Luka :</th>
                                            <th>
                                                <textarea class="form-control" value=" {{ $data->Resume }}" name="Resume" cols="35" rows="20" required></textarea>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Dokomentasi :</th>
                                            <th>
                                                <input class="form-control" type="file" value=" {{ $data->Foto }}"
                                                    name="Foto" required>
                                            </th>
                                        </tr>
                                    </table>
                                    <div class="col-auto m-2">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
