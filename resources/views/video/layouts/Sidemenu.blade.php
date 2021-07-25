<div class="main-sidebar main-sidebar-sticky side-menu">
    <div class="sidemenu-logo">
        <a class="main-logo" href="index.html">
            <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuW25jwTmi4ymqQFGzTyTuiMfxFFfA-Lv_QQ&usqp=CAU"
                class="header-brand-img desktop-logo" height="40" alt="logo">
        </a>
    </div>
    <div class="main-sidebar-body">
        <ul class="nav">
            @foreach(array_unique($folders) as $folder)
                <li class="nav-item">
                    <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i
                            class="ti-folder sidemenu-icon"></i><span
                            class="sidemenu-label">{{$folder}}</span><i class="angle fe fe-chevron-right"></i></a>
                    @foreach($items as $item)
                        @if(str_contains(\Illuminate\Support\Facades\Storage::url($item), $folder))
                            <ul class="nav-sub">
                                <li class="nav-sub-item">
                                    @php
                                        $nameCorrect = str_replace(' ', '=', $folder . '&'.basename($item));
                                    @endphp
                                    <a class="nav-sub-link" href="{{route('video.show', $nameCorrect)}}">{{basename($item)}}</a>
                                </li>
                            </ul>
                        @endif
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>
</div>
