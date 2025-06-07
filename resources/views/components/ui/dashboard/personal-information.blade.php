<!-- Personal Info Card -->
<div x-data="{ editing: false }" class="bg-white rounded-xl p-6 border border-gray-200 mb-8 shadow-lg shadow-gray-100">
    <div class="relative flex justify-between">
        <div class="flex gap-3 items-center text-gray-600">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
            </svg>
            <div class="text-md font-semibold">Personal Information</div>
        </div>
        <div @click="editing = !editing"
            class="relative flex items-center px-4 cursor-pointer hover:bg-gray-100 h-10 rounded-full border border-gray-200 text-sm font-medium text-gray-600 gap-3">
            <div x-text="editing ? 'Save' : 'Edit'"></div>
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                <path d="M12 20h9"></path>
                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
            </svg>
        </div>
    </div>
    <div class="relative mt-4">
        <div class="flex *:w-1/2 gap-4">
            <div>
                <div class="text-xs text-gray-500 font-medium">First Name</div>
                <template x-if="!editing">
                    <div class="text-sm font-semibold text-gray-800 mt-1">Sujan</div>
                </template>
                <template x-if="editing">
                    <input type="text" value="Sujan" class="border rounded px-2 py-1 mt-1 text-sm w-full">
                </template>
            </div>
            <div>
                <div class="text-xs text-gray-500 font-medium">Last Name</div>
                <template x-if="!editing">
                    <div class="text-sm font-semibold text-gray-800 mt-1">Limbu</div>
                </template>
                <template x-if="editing">
                    <input type="text" value="Limbu" class="border rounded px-2 py-1 mt-1 text-sm w-full">
                </template>
            </div>
        </div>

        <div class="flex *:w-1/2 gap-4 mt-4">
            <div>
                <div class="text-xs text-gray-500 font-medium">Email address</div>
                <template x-if="!editing">
                    <div class="text-sm font-semibold text-gray-800 mt-1">deecoodeer@gmail.com</div>
                </template>
                <template x-if="editing">
                    <input type="email" value="deecoodeer@gmail.com"
                        class="border rounded px-2 py-1 mt-1 text-sm w-full">
                </template>
            </div>
            <div>
                <div class="text-xs text-gray-500 font-medium">Phone</div>
                <template x-if="!editing">
                    <div class="text-sm font-semibold text-gray-800 mt-1">+997-9708901653</div>
                </template>
                <template x-if="editing">
                    <input type="text" value="+997-9708901653" class="border rounded px-2 py-1 mt-1 text-sm w-full">
                </template>
            </div>
        </div>

        <div class="flex *:w-1/2 gap-4 mt-4">
            <div>
                <div class="text-xs text-gray-500 font-medium">Bio</div>
                <template x-if="!editing">
                    <div class="text-sm font-semibold text-gray-800 mt-1">IT intern</div>
                </template>
                <template x-if="editing">
                    <input type="text" value="IT intern" class="border rounded px-2 py-1 mt-1 text-sm w-full">
                </template>
            </div>
        </div>
    </div>
</div>
