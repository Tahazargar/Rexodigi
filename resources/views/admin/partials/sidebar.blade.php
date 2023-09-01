<div id="mySlidenav" class="slidenav">
    <p class="logo"><span>T</span>aha<span>Z</span>argar</p>
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-eye"></i></span>
        نمایش وب سایت
    </a>
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-home"></i></span>
        داشبورد
    </a>

    @if(auth()->user()->role === 'admin')
    <a href="{{ route('topHeader.index') }}" class="icon-a">
        <span class="icon"><i class="fas fa-ellipsis-h"></i></span>
        منوی بالایی
    </a>
    <a href="{{ route('hero.index') }}" class="icon-a @if(request()->is('dashboard/hero')) is-active @endif">
        <span class="icon"><i class="fas fa-laptop-house"></i></span>
        خانه
    </a>
    <a href="{{ route('about.index') }}" class="icon-a @if(request()->is('dashboard/about')) is-active @endif">
        <span class="icon"><i class="fas fa-address-card"></i></span>
        درباره ما
    </a>
    <a href="{{ route('intro.index') }}" class="icon-a">
        <span class="icon"><i class="fas fa-book-open"></i></span>
        مقدمه
    </a>
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-cogs"></i></span>
        خدمات
    </a>
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-user-friends"></i></span>
        تیم
    </a>
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-images"></i></span>
        نمونه کارها
    </a>
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-comment-alt"></i></span>
        نظرات مشتریان
    </a>
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-headset"></i></span>
        سوالات متداول
    </a>
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-clipboard-list"></i></span>
        فوتر
    </a>
    <a href="{{ route('users.index') }}" class="icon-a">
        <span class="icon"><i class="fas fa-users"></i></span>
        کاربران
    </a>
    @endif
    @if(auth()->user()->role === 'admin' || auth()->user()->role === 'author')
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-comment"></i></span>
        نظرات
    </a>
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-users"></i></span>
        پیام کاربران
    </a>
    <a href="#" class="icon-a">
        <span class="icon"><i class="fas fa-blog"></i></span>
        بلاگ
    </a>
    @endif
</div>
