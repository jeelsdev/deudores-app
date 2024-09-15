<x-app-layout>
    <x-table>
        <x-slot name="title">
            <div class="flex items-center justify-between mb-5">
                <div class="block mb-4 pb-2 max-w-[360px]">
                    <h2 class="block w-full px-4 text-slate-700 transition-all font-bold">Clientes</h2>
                </div>
                <div class="w-full flex justify-end">
                    <button
                        class="flex select-none items-center gap-2 rounded bg-slate-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            stroke-width="2" class="w-4 h-4">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        Crear Cliente
                    </button>
                </div>
            </div>
        </x-slot>
        <x-slot name="headLeft">
            <form class="flex items-center w-90 mx-auto">
                <div class="relative w-full">
                    <x-input id="simple-search" class="w-full" placeholder="Buscar por nombre o empresa" />
                </div>
                <x-button class="p-2.5 px-10 py-3 ms-2">
                    Buscar
                </x-button>
            </form>
            <div class="flex justify-around gap-5 my-5">
                <x-select class="w-full" label="Prioridad" id="priority" name="priority">
                    <option value="10">10</option>
                    <option value="25">25</option>
                </x-select>
                <x-select class="w-full" label="Estado" id="status" name="status">
                    <option value="10">10</option>
                    <option value="25">25</option>
                </x-select>
                <x-select class="w-full" label="Tipo" id="type" name="type">
                    <option value="10">10</option>
                    <option value="25">25</option>
                </x-select>
            </div>
        </x-slot>
        <x-slot name="headRight">
        </x-slot>
        <x-slot name="header">
            <tr>
                <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                        ID
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                        Nombres y Apellidos
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                        Celular
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                        Empresa
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                        Categoria
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                        Deuda
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                    </p>
                </th>
            </tr>
        </x-slot>
        <x-slot name="body">
            <tr>
                <td class="p-4 border-b border-slate-200">
                    <div class="flex items-center gap-3">
                        21
                    </div>
                </td>
                <td class="p-4 border-b border-slate-200">
                    <div class="flex flex-col">
                        <p class="text-sm font-semibold text-slate-700">
                            Juan Perez
                        </p>
                    </div>
                </td>
                <td class="p-4 border-b border-slate-200">
                    <div class="w-max">
                        232323
                    </div>
                </td>
                <td class="p-4 border-b border-slate-200">
                    <p class="text-sm text-slate-500">
                        Empresa
                    </p>
                </td>
                <td class="p-4 border-b border-slate-200">
                    <p class="text-sm text-slate-500">
                        23
                    </p>
                </td>
                <td class="p-4 border-b border-slate-200">
                    <p class="text-sm text-slate-500">
                        4543
                    </p>
                </td>
                <td class="p-4 border-b border-slate-200">
                    <button
                        class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-4 h-4">
                                <path
                                    d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                </path>
                            </svg>
                        </span>
                    </button>
                </td>
            </tr>
        </x-slot>
        <x-slot name="footer">
            <div class="flex items-center justify-between p-3">
                <p class="block text-sm text-slate-500">
                    Page 1 of 10
                </p>
                <div class="flex gap-1">
                    <button
                        class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        Previous
                    </button>
                    <button
                        class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        Next
                    </button>
                </div>
            </div>
        </x-slot>
    </x-table>
</x-app-layout>
