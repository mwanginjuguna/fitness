<a {{
    $attributes->merge([
        'class' => 'inline-flex items-center px-4 py-2 bg-white border border-orange-300 rounded-md font-semibold text-xs text-orange-600 uppercase tracking-widest shadow-sm hover:bg-orange-100 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-300'
        ])
    }}
>
    {{ $slot }}
</a>
