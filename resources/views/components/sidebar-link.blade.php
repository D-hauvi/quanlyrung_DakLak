@props(['tableName' => null, 'viTableName' => null, 'schemaName' => null])
@php
    $useVietnameseName = isset($viTableName);
@endphp
<div class="flex items-center py-1">
    <input id="{{ $tableName }}-checkbox" type="checkbox" value=""
        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded"
        data-schema="{{ $schemaName }}" data-table="{{ $tableName }}">
    <label for="{{ $tableName }}-checkbox"
        class="ms-2 text-sm font-medium hover:text-gray-500 cursor-pointer">
        {{ $useVietnameseName ? $viTableName : $tableName }}
    </label>
</div>