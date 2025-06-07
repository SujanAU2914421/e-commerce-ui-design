<div x-data="{ edit: false, country: 'Nepal', city: 'Birtamode-1, Panchakanya', postal: '57204', tax: '9239239ei29332' }" class="bg-white rounded-xl p-6 border border-gray-200 mb-8 shadow-lg shadow-gray-100">

    <!-- Header -->
    <div class="flex justify-between items-center">
        <div class="flex items-center gap-3 text-gray-600">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
            </svg>
            <div class="text-md font-semibold">Address</div>
        </div>
        <div @click="edit = !edit"
            class="flex items-center px-4 cursor-pointer hover:bg-gray-100 h-10 rounded-full border border-gray-200 text-sm font-medium text-gray-600 gap-2">
            <span x-text="edit ? 'Save' : 'Edit'"></span>
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                <path d="M12 20h9"></path>
                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
            </svg>
        </div>
    </div>

    <!-- Editable Content -->
    <div class="mt-6 space-y-4">
        <div class="flex *:w-1/2 gap-4">
            <!-- Country -->
            <div>
                <div class="text-xs text-gray-500 font-medium">Country</div>
                <template x-if="edit">
                    <input type="text" x-model="country"
                        class="mt-1 w-full text-sm font-semibold text-gray-800 border border-gray-300 rounded-md px-2 py-1" />
                </template>
                <template x-if="!edit">
                    <div class="text-sm font-semibold text-gray-800 mt-1" x-text="country"></div>
                </template>
            </div>

            <!-- City/State -->
            <div>
                <div class="text-xs text-gray-500 font-medium">City / State</div>
                <template x-if="edit">
                    <input type="text" x-model="city"
                        class="mt-1 w-full text-sm font-semibold text-gray-800 border border-gray-300 rounded-md px-2 py-1" />
                </template>
                <template x-if="!edit">
                    <div class="text-sm font-semibold text-gray-800 mt-1" x-text="city"></div>
                </template>
            </div>
        </div>

        <div class="flex *:w-1/2 gap-4">
            <!-- Postal Code -->
            <div>
                <div class="text-xs text-gray-500 font-medium">Postal Code</div>
                <template x-if="edit">
                    <input type="text" x-model="postal"
                        class="mt-1 w-full text-sm font-semibold text-gray-800 border border-gray-300 rounded-md px-2 py-1" />
                </template>
                <template x-if="!edit">
                    <div class="text-sm font-semibold text-gray-800 mt-1" x-text="postal"></div>
                </template>
            </div>

            <!-- TAX ID -->
            <div>
                <div class="text-xs text-gray-500 font-medium">TAX ID</div>
                <template x-if="edit">
                    <input type="text" x-model="tax"
                        class="mt-1 w-full text-sm font-semibold text-gray-800 uppercase border border-gray-300 rounded-md px-2 py-1" />
                </template>
                <template x-if="!edit">
                    <div class="text-sm font-semibold text-gray-800 mt-1 uppercase" x-text="tax"></div>
                </template>
            </div>
        </div>
    </div>
</div>
