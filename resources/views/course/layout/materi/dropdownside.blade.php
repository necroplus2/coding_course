{{-- @foreach ($bab as $b)
    <div id="accordion7261{{ $b->id }}">
        <div class="card">
            <div class="card-header" id="headingBab7261{{ $b->id }}">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" style="color: black"
                        data-target="#collapse7261{{ $b->id }}" aria-expanded="false"
                        aria-controls="collapse7261{{ $b->id }}">
                        {{ $b->nama_bab }}
                    </button>
                </h5>
            </div>
            <div id="collapse7261{{ $b->id }}" class="collapse"
                aria-labelledby="headingBab7261{{ $b->id }}" data-parent="#accordion7261{{ $b->id }}">
                <div class="card-body px-4">
                    <ul class="">
                        @foreach ($sub_bab as $sb)
                            @if ($sb->bab_id == $b->id)
                                <a href="" class="p-1">
                                    <li type="1">
                                        {{ $sb->judul }}
                                    </li>
                                </a>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endforeach --}}
