@if(Auth::user()->name == "Admin")
    @include("admin")
@endif

@if(Auth::user()->name == "Supervisor")
    @include("supervisor")
@endif

@if(Auth::user()->name == "Kepala Toko")
    @include("kepala_toko")
@endif

@if(Auth::user()->name == "Pegawai Kasir")
    @include("cashier")
@endif

@if(Auth::user()->name == "Manager Toko")
    @include("manager")
@endif

@if(Auth::user()->name == "Pegawai Gudang")
    @include("warehouse")
@endif

