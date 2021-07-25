<div class="main-sidebar main-sidebar-sticky side-menu" style="width: 400px">
    <div class="sidemenu-logo" style="width: 400px">
        <a class="main-logo" href="{{route('video.index')}}">
            <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuW25jwTmi4ymqQFGzTyTuiMfxFFfA-Lv_QQ&usqp=CAU"
                class="header-brand-img desktop-logo" height="40" alt="logo">
        </a>
    </div>
    <div class="main-sidebar-body">
        <ul class="nav">
            @foreach(array_unique($folders) as $folder)
                <li class="nav-item">
                    <a class="nav-link with-sub" href="#" title="{{$folder}}"><span class="shape1"></span><span class="shape2"></span><i class="ti-folder"></i><span
                            class="sidemenu-label">{{Str::limit(' '.$folder, 50, $end="...")}}</span><i class="angle fe fe-chevron-right"></i></a>
                    @foreach($items as $key=>$item)
                        @if(str_contains(\Illuminate\Support\Facades\Storage::url($item), $folder))
                            <ul class="nav-sub">
                                <li class="nav-sub-item">
                                    @php
                                        $nameCorrect = str_replace(' ', '=', $folder . '&'.basename($item));
                                    @endphp
                                    <a class="nav-sub-link" href="{{route('video.show', $nameCorrect)}}">{{Str::limit(basename($item), 50, $end="...")}}</a>
                                </li>
                            </ul>
                        @endif
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>
</div>
