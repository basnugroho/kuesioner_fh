<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="modal-body">
                        <h2>{{ $kuesioner_a->judul }}</h2>
                        <hr class="star-primary">
                        <form action="{{ route('kuesioner_a.save') }}" method="post">
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Jenis Kelamin?</label>
                                    <input type="hidden" name="s1" value="1">
                                </div>
                                <div class="form-group">
                                    @foreach($kuesioner_a->jawabans->where('pertanyaan_id', 1) as $jawaban)
                                    <label class="radio-inline">
                                        <input type="radio" name="j1[]" value="{{ $jawaban->id }}" required>{{ $jawaban->jawaban }}
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Tahun lahir</label>
                                    <input type="hidden" name="s2" value="2">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="j2" min="1900" required>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Status pernikahan</label>
                                    <input type="hidden" name="s3" value="3">
                                </div>
                                <div class="form-group">
                                    <select id="cmbMake" name="j3[]" class="form-control" required>
                                        <option>Silahkan Pilih</option>
                                        @foreach($kuesioner_a->jawabans->where('pertanyaan_id', 3) as $jawaban)
                                            <option value="{{ $jawaban->id }}">{{ $jawaban->jawaban }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Jenis Sekolah Lanjutan Tingkat Atas (SLTA)?</label>
                                    <input type="hidden" name="s4" value="4">
                                </div>
                                <div class="form-group">
                                    <select id="cmbMake" name="j4[]" class="form-control">
                                        <option>Silahkan Pilih</option>
                                        @foreach($kuesioner_a->jawabans->where('pertanyaan_id', 4) as $jawaban)
                                        <option value="{{ $jawaban->id }}">{{ $jawaban->jawaban }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Apa Nama SLTA Anda ?</label>
                                    <input type="hidden" name="s6" value="6">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="j6" required placeholder="Nama SLTA">
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Dinegara mana Lokasi SLTA Anda ?</label>
                                    <input type="hidden" name="s5" value="5">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="j5" placeholder="Negara" required>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Dikota mana Lokasi SLTA Anda ?</label>
                                    <input type="hidden" name="s7" value="7">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="j7" placeholder="Kota" required>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Jurusan yang anda ambil pada saat SLTA ?</label>
                                    <input type="hidden" name="s6" value="6">
                                </div>
                                <div class="form-group">
                                    @foreach($kuesioner_a->jawabans->where('pertanyaan_id', 6) as $jawaban)
                                    <label class="radio-inline">
                                        <input type="radio" name="j6[]" value="{{ $jawaban->id }}" class="cekj" required>{{ $jawaban->jawaban }}
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Tahun Berapakah Anda Lulus SLTA ?</label>
                                    <input type="hidden" name="7" value="7">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="tahunLahir" aria-describedby="" placeholder="" name="j7" min="1900" required>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Kebangsaan ?</label>
                                    <input type="hidden" name="s8" value="8">
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" name="j8[]" value="{{ $kuesioner_a->jawabans->where('pertanyaan_id', 6)->id }}" class="Wni" required="">WNI
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" name="j8[]]" value="{{ $kuesioner_a->jawabans->where('pertanyaan_id', 6)->id }}" class="Wna" required="">Asing
                                    </label>
                                    <label class="radio-inline">
                                        <input type="text" name="j8[]" id="wnaa" placeholder="Nama Negara" class="form-control">
                                    </label>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Apakah anda pernah berkerja sebelum kuliah di Universitas ?</label>
                                    <input type="hidden" name="s9" value="9">
                                </div>
                                <div class="form-group">
                                    @foreach($kuesioner_a->jawabans->where('pertanyaan_id', 9) as $jawaban)
                                    <label class="radio-inline">
                                        <input type="radio" class="btnya" name="s9[]" value="{{ $jawaban->id }}" required="">{{ $jawaban->jawaban}}
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="item" id="okhil">
                                <div class="form-group" id="jdl">
                                    <label> Apa Jenis Perkerjaannya ?</label>
                                    <input type="hidden" name="s10" value="10">
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" class="btnya" name="rdo[10]" value="38">Pekerjaan yang berhubungan dengan pendidikan (misal: asisten laboratorium, mekanik, guru les, dll)
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" name="rdo[10]" class="btntdk" value="39">Pekerjaan yang tidak berhubungan dengan pendidikan (misal: SPG, pramugari, model, artis, dll)
                                    </label>
                                </div>
                            </div>
                            <div class="item" id="ttya">
                                <div class="form-group" id="jdl">
                                    <label>Berapakah lama anda Melakukan Perkerjaan tersebut ?</label>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Hitungan Bulan" name="jwb[11]" min="1">
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Berapa bulan yang anda habiskan untuk aktivitas di bawah ini setelah lulus SLTA dan sebelum masuk kuliah? Tulis hanya aktivitas utama saja</label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline" style="width: 200px">
                                        Pendidikan Lain/Traning/Magang
                                    </label>
                                    <label class="radio-inline">
                                        <input type="number" class="form-control" placeholder="Hitungan Bulan" name="jwb[73]" min="1">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline" style="width: 200px">
                                        Berkerja/Wiraswasta
                                    </label>
                                    <label class="radio-inline">
                                        <input type="number" class="form-control" placeholder="Hitungan Bulan" name="jwb[74]" min="1">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline" style="width: 200px">
                                        Mengurus Anak/Keluarga
                                    </label>
                                    <label class="radio-inline">
                                        <input type="number" class="form-control" placeholder="Hitungan Bulan" name="jwb[75]" min="1">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline" style="width: 200px">
                                        Wajib Militer
                                    </label>
                                    <label class="radio-inline">
                                        <input type="number" class="form-control" placeholder="Hitungan Bulan" name="jwb[76]" min="1">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline" style="width: 200px">
                                        Tidak Berkerja/Mencari Perkerjaan
                                    </label>
                                    <label class="radio-inline">
                                        <input type="number" class="form-control" placeholder="Hitungan Bulan" name="jwb[77]" min="1">
                                    </label>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Apa latar belakang pendidikan Ibu anda ?</label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="13">Tidak Sekolah
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="14">Tidak Lulus SD
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="15">Lulus SD
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="16">Tidak Lulus SLTP
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="17">Lulus SLTP
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="18">Tidak Lulus SLTA
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="19">Lulus SLTA
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="20">Tidak Lulus Diploma
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="21">Lulus Diploma
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="22">Tidak Lulus Sarjana(S1)
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="23">Lulus Sarjana(S1)
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="24">Tidak Lulus Pascasarjana
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="25">Lulus Pascasarjana
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[13][]" value="26">Tidak Tahu
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group" id="jdl">
                                    <label>Apa latar belakang pendidikan Ayah anda ?</label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="13">Tidak Sekolah
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="14">Tidak Lulus SD
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="15">Lulus SD
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="16">Tidak Lulus SLTP
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="17">Lulus SLTP
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="18">Tidak Lulus SLTA
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="19">Lulus SLTA
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="20">Tidak Lulus Diploma
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="21">Lulus Diploma
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="22">Tidak Lulus Sarjana(S1)
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="23">Lulus Sarjana(S1)
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="24">Tidak Lulus Pascasarjana
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="25">Lulus Pascasarjana
                                        </div>
                                        <div class="dwont">
                                            <input type="checkbox" name="or[78][]" value="26">Tidak Tahu
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div style="width: 100%; text-align: center; margin-top: 100px;">
                                <button type="submit" class="btn btn-primary" style="width: 200px;height: 50px;">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>