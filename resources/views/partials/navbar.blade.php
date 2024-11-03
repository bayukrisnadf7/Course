<div class="flex justify-between items-center p-3 bg-white">
    <a class="flex gap-3 items-center font-bold text-xl mx-5" href="/">
        <img src="/img/bee 1.png" alt="" width="40">
        <p>Edudu</p>

    </a>
    <div class="flex gap-10">
        <a href="/" class="hover:text-primary {{ request()->is('/') ? 'text-primary' : '' }}">Beranda</a>
        <a href="/pelatihan"
            class="hover:text-primary {{ request()->is('/pelatihan') ? 'text-primary' : '' }}">Pelatihan</a>
        <a href="/mentor" class="hover:text-primary {{ request()->is('/mentor') ? 'text-primary' : '' }}">Mentor</a>
        <a href="/contact" class="hover:text-primary {{ request()->is('/tentang') ? 'text-primary' : '' }}">Tentang</a>
    </div>
    <div class="flex gap-3 mx-5">
        <button class="bg-slate-100 p-3 w-24 rounded-xl">Sign up</button>
        <button class="bg-secondary p-3 w-24 rounded-xl text-white">Log in</button>
    </div>
</div>
