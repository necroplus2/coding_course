                <!-- Sidebar -->
                <div class="col-sm-4">
                    <div class="sidebar-right">
                        {{-- accordion --}}
                        <div class="sidebar-section">
                            {{-- setup accordion id={headingbab} data-target,aria-controls --}}
                            @foreach ($bab as $b)
                                <div id="accordion7261{{ $b->id }}">
                                    <div class="card">
                                        <div class="card-header" id="headingBab7261{{ $b->id }}">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed w-100 text-left"
                                                    data-toggle="collapse" style="color: black"
                                                    data-target="#collapse7261{{ $b->id }}" aria-expanded="false"
                                                    aria-controls="collapse7261{{ $b->id }}">
                                                    {{ $b->judul }}
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse7261{{ $b->id }}" class="collapse"
                                            aria-labelledby="headingBab7261{{ $b->id }}"
                                            data-parent="#accordion7261{{ $b->id }}">
                                            <div class="card-body px-4">
                                                <ul class="">
                                                    @foreach ($sub_bab as $sb)
                                                        @if ($b->bab == $sb->bab)
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
                            @endforeach
                        </div>
                        <div class="sidebar">
                            <div class="sidebar-section">
                                <h5><span>Modul Pembahasan</span></h5>
                                {{-- modul pembahasan atau di column tb db adalah bab --}}
                                <ul style="list-none;">
                                    @foreach ($bab as $b)
                                        <li><a target="_blank" href="https://m.do.co/c/84c9b45d0c47"
                                                class="read {{ $b->bab == $current_bab ? 'current' : '' }}">{{ $b->bab . '. ' . $b->judul }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="sidebar-section">
                                <h5><span>Bab</span></h5>
                                {{-- bab atau di column tb db adalah sub_bab --}}
                                <ul style="list-none;">
                                    @foreach ($sub_bab as $sb)
                                        <li><a target="_blank" href="https://m.do.co/c/84c9b45d0c47"
                                                class="read {{ $sb->sub_bab == $current_sub_bab ? 'current' : '' }}">{{ $sb->sub_bab . '. ' . $sb->judul }}</a>
                                        </li>
                                    @endforeach
                                    {{-- <li><a target="_blank" href="https://m.do.co/c/84c9b45d0c47" class="read">Digital Ocean</a></li>
                                    <li><a target="blank"
                                            href="https://www.cloudways.com/en/pricing.php?id=153986&amp;a_bid=005da123" class="read current">Cloudways</a>
                                    </li>
                                    <li><a target="blank"
                                            href="http://shareasale.com/r.cfm?b=875645&amp;u=1087935&amp;m=41388&amp;urllink=&amp;afftrack=">Page
                                            Speed Tesidebar-sectionst</a></li>
                                    <li><a target="blank" href="https://elementor.com/?ref=1556">Elementor Page
                                            Builder</a>
                                    </li>
                                    <li><a target="blank" href="https://www.wowthemes.net/category/jekyll-themes/">Our
                                            Jekyll Themes</a></li> --}}
                                </ul>
                            </div>
                            <div class="sidebar-section">
                                <h5><span>Recommended</span></h5>
                                <a href="https://easydigitaldownloads.com/?ref=2135"
                                    title="Sell digital downloads with WordPress, for free"><img
                                        src="https://easydigitaldownloads.com/wp-content/uploads/2015/02/300x250-2.png"
                                        alt="Sell digital downloads with WordPress, for free"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->
