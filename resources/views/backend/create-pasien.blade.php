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
                                <form action="data-store" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <table class="table table-vcenter card-table">
                                        <tbody>
                                            <th>
                                                <h5>I. Identitas Kasus</h5>
                                            </th>
                                        </tbody>
                                        <tr>
                                            <th>Nama Kasus(umur) :</th>
                                            <th><input type="text" required name="kasus"></th>
                                            <th>Tanggal Lahir :</th>
                                            <th><input type="date" required name="ttl"></th>
                                        </tr>
                                        <tr>
                                            <th>NIK/NKK/Phaspor :</th>
                                            <th><input type="number" required name="NIK"></th>
                                            <th>Alamat(Jalan/RT/RW) :</th>
                                            <th><input type="text" required name="Alamat1"></th>
                                        <tr>
                                            <th>Kelurahan :</th>
                                            <th><input type="text" required name="Kelurahan1"></th>
                                            <th>Kecamatan :</th>
                                            <th><input type="text" required name="Kecamatan1"></th>
                                        </tr>
                                        <tr>
                                            <th>Pekerjaan :</th>
                                            <th><input type="text" required name="Pekerjaan"></th>
                                            <th>Jenis Kelamin :</th>
                                            <th><select id="kelamin" name="kelamin">
                                                    <option value=""></option>
                                                    <option value="L">Laki-Laki</option>
                                                    <option value="P">Perempuan</option>
                                                    {{-- <option value="mercedes">Mercedes SLK</option>
                                                <option value="audi">Audi TT</option> --}}
                                                </select></th>
                                            {{-- <th><input type="text" required name="kelamin"></th> --}}
                                        </tr>
                                        <tr>
                                            <th>No. HP/Telp :</th>
                                            <th><input type="text" required name="No_HP"></th>
                                            <th>Nama Orang Tua :</th>
                                            <th><input type="text" name="Nama_Ortu"></th>
                                        </tr>
                                        <tbody>
                                            <th>
                                                <h5>II. Identifikasi Penyakit</h5>
                                            </th>
                                        </tbody>
                                        <tr>
                                            <th>Tanggal Digigit :</th>
                                            <th><input type="date" required name="Tgl_Digigit"></th>
                                            <th>Tanggal Dilaporkan :</th>
                                            <th><input type="date" required name="Tgl_Dilaporkan"></th>
                                        </tr>
                                        <tr>
                                            <th>Jenis Hewan Penggit :</th>
                                            <th><input type="text" required name="Jenis_Hewan"></th>
                                            <th>Anggota Badan Yang Digigit :</th>
                                            <th><input type="text" required name="bdn_digigit"></th>
                                        </tr>
                                        <tr>
                                            <th>Tipe Luka Gigitan :</th>
                                            <th><input type="text" required name="Tipe_Luka"></th>
                                            <th>Riwayat Gigitan :</th>
                                            <th><input type="text" name="Riwayat"></th>
                                        </tr>
                                        <tr>
                                            <th>Didahului Tindakan Provokasi :</th>
                                            <th><input type="text" name="Provokasi"></th>
                                        </tr>
                                        <tr>
                                            <th><b> Alamat Kejadian/Digigit </b></th>
                                        </tr>
                                        <tr>
                                            <th> Desa/Jl : </th>
                                            <th><input type="text" required name="JL"></th>
                                        </tr>
                                        <tr>
                                            <th> Kelurahan : </th>
                                            <th><input type="text" required name="Kelurahan2"></th>
                                            <th> Kecamatan : </th>
                                            <th><input type="text" required name="Kecamatan2"></th>
                                        </tr>
                                        <tr>
                                            <th> Kondisi Hewan Saat Menggigit :</th>
                                            <th><input type="text" required name="Hewan_Menggigit"></th>
                                            <th> Kondisi Hewan Saat Ini :</th>
                                            <th><input type="text" required name="Kondisi_Hewan"></th>
                                        </tr>
                                        <tr>
                                            <th> Apakah Sebelumnya Hewan tsb pernah menggigit orang :</th>
                                            <th><input type="text" name="Pernah_Menggigit"></th>
                                        </tr>
                                        <tr>
                                            <th> Kalau pernah, kapan :</th>
                                            <th><input type="date" name="Kapan"></th>
                                            <th> Berapa orang :</th>
                                            <th><input type="number" name="berapa"></th>
                                        </tr>
                                        <tr>
                                            <th><b>Keluhan Saat ini </b></th>
                                            <th>Ya/Tidak</th>
                                            <th>Tanggal Mulai Keluhan</th>
                                        </tr>
                                        <tr>
                                            <th> a. Berkeringat banyak </th>
                                            <th><input type="text" name="ya1"></th>
                                            <th><input type="date" name="tgl_keringat"></th>
                                        </tr>
                                        <tr>
                                            <th> b. Sulit menelan </th>
                                            <th><input type="text" name="ya2"></th>
                                            <th><input type="date" name="tgl_menelan"></th>
                                        </tr>
                                        <tr>
                                            <th> c. Takut air </th>
                                            <th><input type="text" name="ya3"></th>
                                            <th><input type="date" name="tgl_takut"></th>
                                        </tr>
                                        <tr>
                                            <th> d. Peka terhadap Sinar </th>
                                            <th><input type="text" name="ya4"></th>
                                            <th><input type="date" name="tgl_peka"></th>
                                        </tr>
                                        <tr>
                                            <th> e. Air mata berlebihan </th>
                                            <th><input type="text" name="ya5"></th>
                                            <th><input type="date" name="tgl_mata"></th>
                                        </tr>
                                        <tr>
                                            <th> f. Air liur berlebihan </th>
                                            <th><input type="text" name="ya6"></th>
                                            <th><input type="date" name="tgl_liur"></th>
                                        </tr>
                                        <tr>
                                            <th> g. Peka terhadap suara </th>
                                            <th><input type="text" name="ya7"></th>
                                            <th><input type="date" name="tgl_sua"></th>
                                        </tr>
                                        <tr>
                                            <th> h. Nyeri tekan sekitar luka </th>
                                            <th><input type="text" name="ya8"></th>
                                            <th><input type="date" name="tgl_nyeri"></th>
                                        </tr>
                                        <tr>
                                            <th> i. Malaise </th>
                                            <th><input type="text" name="ya9"></th>
                                            <th><input type="date" name="tgl_mala"></th>
                                        </tr>
                                        <tr>
                                            <th> j. Demam </th>
                                            <th><input type="text" name="ya10"></th>
                                            <th><input type="date" name="tgl_demam"></th>
                                        </tr>
                                        <tr>
                                            <th> k. Mual </th>
                                            <th><input type="text" name="ya11"></th>
                                            <th><input type="date" name="tgl_mual"></th>
                                        </tr>
                                        <tr>
                                            <th> l. Nafsu makan menurun </th>
                                            <th><input type="text" name="ya12"></th>
                                            <th><input type="date" name="tgl_nafsu"></th>
                                        </tr>
                                        <tbody>
                                            <th>
                                                <h5>III. Riwayat Pengobatan</h5>
                                            </th>
                                        </tbody>
                                        <tr>
                                            <th> Bagaimana merawat luka :</th>
                                            <th><input type="text" required name="Merawat_Luka"></th>
                                        </tr>
                                        <tr>
                                            <th> Dimana pertama kali berobat :</th>
                                            <th><input type="text" required name="Tempat_Berobat"></th>
                                        </tr>
                                        <tr>
                                            <th> Obat yang sudah Diberikan :</th>
                                            <th><input type="text" required name="Obat"></th>
                                        </tr>
                                        <tr>
                                            <th> Apakah penderita diberikan VAR :</th>
                                            <th><input type="text" required name="VAR" placeholder="ya/tidak">
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
                                                <th>
                                                    <input type="text" name="isi1" placeholder="tanggal">
                                                </th>
                                                    
                                                <th>
                                                    <input type="text" name="isi2" placeholder="tanggal">

                                                </th>
                                                <th>
                                                    <input type="text" name="isi3" placeholder="tanggal">
                                                </th>
                                                {{-- <th>
                                                    <select id="keterangan" name="">
                                                        <option value="Belum">Belum</option>
                                                        <option value="Sudah">Sudah</option>
                                                    </select>
                                                </th> --}}
                                                {{-- <th><input type="text" placeholder="sudah/belum" name="isi1"></th>
                                                <th><input type="text" name="isi2"></th>
                                                <th><input type="text" name="isi3"></th> --}}
                                                <th><input type="text" name="Keterangan"></th>
                                            </tr>
                                        </tbody>
                                        <tr>
                                            <th>Bagaimana kondisi pasien setelah mendapatkan suntikan VAR</th>
                                            <th><input type="text" name="Kondisi_VAR"></th>
                                        </tr>
                                        <tbody>
                                            <th>
                                                <h5>IV. Keterangan Lain</h5>
                                            </th>
                                        </tbody>
                                        <tr>
                                            <th>Nama Pemilik Hewan :</th>
                                            <th><input type="text" required name="Nama_Pemilik"></th>
                                        </tr>
                                        <tr>
                                            <th>Alamat :</th>
                                            <th><input type="text" required name="Alamat3"></th>
                                        </tr>
                                        <tr>
                                            <th>Kelurahan :</th>
                                            <th><input type="text" required name="Kelurahan3"></th>
                                        </tr>
                                        <tr>
                                            <th>Kecamatan :</th>
                                            <th><input type="text" required name="Kecamatan3"></th>
                                        </tr>
                                        <tr>
                                            <th>Apakah hewan tsb pernah divaksin :</th>
                                            <th><input type="text" name="Vaksin"></th>
                                            <th>Kalau pernah, kapan :</th>
                                            <th><input type="date" name="tgl_vksn"></th>
                                        </tr>
                                        <tr>
                                            <th>Kategori Luka :</th>
                                            <th>
                                                <textarea class="form-control" name="Resume" cols="35" rows="20" required></textarea>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Dokomentasi :</th>
                                            {{-- <th>
                                                <input class="form-control" type="file" name="Foto" required>
                                            </th> --}}
                                            <th>
                                                <input
                                                    class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                    id="Foto" type="file" name="Foto">
                                            </th>
                                        </tr>
                                    </table>

                                    <div class="col-auto m-5 text-center">
                                        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
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
