<div class="cardKalkulus">
    <div class="card2Kalkulus">
        <form action="{{ route('kirim-inggris') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="tanggal" style="margin-right: 10px">TANGGAL</label>
                    <input type="date" name="tanggal" class="input" required>

                    <label for="namatugas" style="margin-right: 10px">NAMA TUGAS</label>
                    <input type="text" name="namatugas" class="input" required>

                    <label for="keterangan" style="margin-right: 10px">DETAIL TUGAS</label>
                    <input type="text" name="keterangan" class="input" required>
                </div>
                <div class="col">
                    <button type="submit" class="btnKalkulus">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>

<!-- Timeline Section -->
<div class="timeline" style="margin-top:0;">
<!-- Mulai Looping Foreach -->
@foreach($tugas as $tugasItem)
    <!-- Timeline Time Label -->
    <div class="time-label">
        <span class="text-bg-danger">{{ \Carbon\Carbon::parse($tugasItem->tanggal)->format('d-m-Y') }}</span>
    </div>

    <!-- Timeline Item -->
    <div>
        <i class="timeline-icon bi bi-envelope text-bg-primary"></i>
        <div class="timeline-item">
            <span class="time">
                <i class="bi bi-clock-fill"></i>
                {{ \Carbon\Carbon::parse($tugasItem->created_at)->format('H:i:s') }}
            </span>
            <h3 class="timeline-header">
                <a href="#">{{ $tugasItem->namatugas }}</a>
            </h3>
            <div class="timeline-body">
                {{ $tugasItem->keterangan }}
            </div>
        </div>
    </div>
@endforeach
<!-- Akhir Looping Foreach -->

<!-- Timeline Icon End -->
<div>
    <i class="timeline-icon bi bi-clock-fill text-bg-secondary"></i>
</div>
</div>
</div>
