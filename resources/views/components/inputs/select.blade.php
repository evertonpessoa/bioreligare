<select {{ $attributes->merge([ 'class' => 'shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-md' ]) }}>
    {{ $slot }}
</select>
