<div x-data="{ show: false}" @click.away="show = false">
    <div @click="show = !show">
        @yield('triggers')
    </div>
    <div x-show="show" 
    class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52" s
    tyle="display: none">
        @yield('links')
    </div>
</div>