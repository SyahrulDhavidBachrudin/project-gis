@extends('layouts.dashboard-volt')

@section('content')
    <div class="container">
        <div class="row justivy-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">DATA PASIEN</div>
                    <div class="row m-2">
                        <p><a href="data-create" class="btn btn-primary">Tambah data</a></p>
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kasus</th>
                                            <th>Tanggal Lahir/Umur</th>
                                            <th>NIK/NKK/Phaspor(WNA)</th>
                                            <th>Alamat(Jalan,RT/RW)</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Pekerjaan</th>
                                            <th>Jenis Kelasmin</th>
                                            <th>No. Telp/HP</th>
                                            <th>Nama Orang Tua</th>
                                            <th>Tanggal Digigit</th>
                                            <th>Tanggal Dilaporkan</th>
                                            <th>Jenis Hewan Penggigit</th>
                                            <th>Anggota Badan</th>
                                            <th>Tipe Luka Gigitan</th>
                                            <th>Riwayat Gigitan</th>
                                            <th>Didahui Tindakan Provokasi</th>
                                            <th>Desa/ JL.</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kondisi Hewan Saat Menggigit</th>
                                            <th>Kondisi Hewan Saat Ini</th>
                                            <th>Apakah Sebelumnya Hewan Pernah Menggigit Orang</th>
                                            <th>Kapan</th>
                                            <th>Keluhan</th>
                                            <th>Berkeringat</th>
                                            <th>Tanggal</th>
                                            <th>Sulit Menelan</th>
                                            <th>Tanggal</th>
                                            <th>Takut Air</th>
                                            <th>Tanggal</th>
                                            <th>Peka Terhadap Sinar</th>
                                            <th>Tanggal</th>
                                            <th>Air Mata Berlebih</th>
                                            <th>Tanggal</th>
                                            <th>Air Liur Berlebih</th>
                                            <th>Tanggal</th>
                                            <th>Peka Terhadap Suara</th>
                                            <th>Tanggal</th>
                                            <th>Nyeri Tekan Sekitar Luka</th>
                                            <th>Tanggal</th>
                                            <th>Malaise</th>
                                            <th>Tanggal</th>
                                            <th>Demam</th>
                                            <th>Tanggal</th>
                                            <th>Mual</th>
                                            <th>Tanggal</th>
                                            <th>Nafsu Makan Menurun</th>
                                            <th>Tanggal</th>
                                            <th>Bagaimana Merawat Luka</th>
                                            <th>Tempat Berobat</th>
                                            <th>Obat</th>
                                            <th>Apakah Penderita Diberikan VAr</th>
                                            <th>isi1</th>
                                            <th>isi2</th>
                                            <th>isi3</th>
                                            <th>Keterangan</th>
                                            <th>Kondisi Setelah VAR</th>
                                            <th>Nama Pemilik</th>
                                            <th>Alamat</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Apakah Hewan Pernah Vaksin</th>
                                            <th>Kalau pernah, Kapan</th>
                                            <th>Resume</th>
                                            <th>Foto</th>

                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $id = 1;
                                        @endphp
                                        @foreach ($data as $a)
                                            @php
                                                $id++;
                                            @endphp
                                            <tr>
                                                <td>{{ $id }}</td>
                                                <td class="text-secondary">{{ $a->Kasus }}</td>
                                                <td class="text-secondary">{{ $a->ttl }}</td>
                                                <td class="text-secondary">{{ $a->NIK }}</td>
                                                <td class="text-secondary">{{ $a->Alamat1 }}</td>
                                                <td class="text-secondary">{{ $a->Kelurahan1 }}</td>
                                                <td class="text-secondary">{{ $a->Kecamatan1 }}</td>
                                                <td class="text-secondary">{{ $a->Pekerjaan }}</td>
                                                <td class="text-secondary">{{ $a->kelamin }}</td>
                                                <td class="text-secondary">{{ $a->No_HP }}</td>
                                                <td class="text-secondary">{{ $a->Nama_Ortu }}</td>
                                                <td class="text-secondary">{{ $a->Tgl_Digigit }}</td>
                                                <td class="text-secondary">{{ $a->Tgl_Dilaporkan }}</td>
                                                <td class="text-secondary">{{ $a->Jenis_Hewan }}</td>
                                                <td class="text-secondary">{{ $a->bdn_digigit }}</td>
                                                <td class="text-secondary">{{ $a->Tipe_Luka }}</td>
                                                <td class="text-secondary">{{ $a->Riwayat }}</td>
                                                <td class="text-secondary">{{ $a->Provokasi }}</td>
                                                <td class="text-secondary">{{ $a->JL }}</td>
                                                <td class="text-secondary">{{ $a->Kelurahan2 }}</td>
                                                <td class="text-secondary">{{ $a->Kecamatan2 }}</td>
                                                <td class="text-secondary">{{ $a->Hewan_Menggigit }}</td>
                                                <td class="text-secondary">{{ $a->Kondisi_Hewan }}</td>
                                                <td class="text-secondary">{{ $a->Pernah_Menggigit }}</td>
                                                <td class="text-secondary">{{ $a->Kapan }}</td>
                                                <td class="text-secondary">{{ $a->berapa }}</td>
                                                <td class="text-secondary">{{ $a->ya1 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_keringat }}</td>
                                                <td class="text-secondary">{{ $a->ya2 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_menelan }}</td>
                                                <td class="text-secondary">{{ $a->ya3 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_takut }}</td>
                                                <td class="text-secondary">{{ $a->ya4 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_peka }}</td>
                                                <td class="text-secondary">{{ $a->ya5 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_mata }}</td>
                                                <td class="text-secondary">{{ $a->ya6 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_liur }}</td>
                                                <td class="text-secondary">{{ $a->ya7 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_sua }}</td>
                                                <td class="text-secondary">{{ $a->ya8 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_nyeri }}</td>
                                                <td class="text-secondary">{{ $a->ya9 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_mala }}</td>
                                                <td class="text-secondary">{{ $a->ya10 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_demam }}</td>
                                                <td class="text-secondary">{{ $a->ya11 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_mual }}</td>
                                                <td class="text-secondary">{{ $a->ya12 }}</td>
                                                <td class="text-secondary">{{ $a->tgl_nafsu }}</td>
                                                <td class="text-secondary">{{ $a->Merawat_Luka }}</td>
                                                <td class="text-secondary">{{ $a->Tempat_Berobat }}</td>
                                                <td class="text-secondary">{{ $a->Obat }}</td>
                                                <td class="text-secondary">{{ $a->VAR }}</td>
                                                <td class="text-secondary">{{ $a->isi1 }}</td>
                                                <td class="text-secondary">{{ $a->isi2 }}</td>
                                                <td class="text-secondary">{{ $a->isi3 }}</td>
                                                <td class="text-secondary">{{ $a->Keterangan }}</td>
                                                <td class="text-secondary">{{ $a->Kondisi_VAR }}</td>
                                                <td class="text-secondary">{{ $a->Nama_Pemilik }}</td>
                                                <td class="text-secondary">{{ $a->Alamat3 }}</td>
                                                <td class="text-secondary">{{ $a->Kelurahan3 }}</td>
                                                <td class="text-secondary">{{ $a->Kecamatan3 }}</td>
                                                <td class="text-secondary">{{ $a->Vaksin }}</td>
                                                <td class="text-secondary">{{ $a->tgl_vksn }}</td>
                                                <td class="text-secondary">{{ $a->Resume }}</td>
                                                <td>
                                                    <img src="./img/{{ $a->Foto }}">
                                                </td>
                                                {{-- <td class="text-secondary">{{ $a->Foto }}</td> --}}
                                                <td>
                                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{-- <svg class="w-0.1 h-0.1 ml-0.1" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="1 0 10 1.2">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="0.1"
                                                                d="m1 0.5 0.5 0.5 0.5-0.5" />
                                                        </svg> --}}
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                            <path
                                                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                                        </svg>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item"
                                                                href="{{ 'data-show' . '/' . $a->id }}">Edit</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ 'data-hapus' . '/' . $a->id }}">Hapus</a>
                                                        </li>
                                                    </ul>
                                                    {{-- <a href="{{ 'data-show' . '/' . $a->id }}">Edit</a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
