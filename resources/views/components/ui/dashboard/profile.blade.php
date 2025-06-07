<div x-data="{ editing: false, name: 'Sujan Limbu', tagline: 'A nonchalant Guy', tempName: '', tempTagline: '' }" class="bg-white rounded-xl p-6 border border-gray-200 mb-8 shadow-lg shadow-gray-100">

    <div class="relative flex justify-between items-center">
        <div class="relative flex items-center gap-4">
            <div
                class="relative h-16 w-16 bg-gray-200 border border-gray-200 rounded-full overflow-hidden flex items-center justify-center">
                <div class="relative h-full w-full"
                    style="background: url('https://i.pinimg.com/1200x/a1/18/2f/a1182f1dcb1e9afda517026981fa826e.jpg') center / cover">
                </div>
            </div>
            <div class="relative">
                <template x-if="!editing">
                    <div>
                        <div class="relative font-bold" x-text="name"></div>
                        <div class="relative text-gray-600 text-sm" x-text="tagline"></div>
                    </div>
                </template>
                <template x-if="editing">
                    <div class="space-y-1">
                        <input type="text" x-model="tempName"
                            class="w-full border border-gray-300 rounded px-2 py-1 text-sm" />
                        <input type="text" x-model="tempTagline"
                            class="w-full border border-gray-300 rounded px-2 py-1 text-sm text-gray-600" />
                        <div class="flex gap-2 pt-2">
                            <button @click="name = tempName; tagline = tempTagline; editing = false"
                                class="text-white bg-blue-500 hover:bg-blue-600 text-sm px-3 py-1 rounded">Save</button>
                            <button @click="editing = false"
                                class="text-gray-600 hover:text-black text-sm px-3 py-1 rounded border border-gray-300">Cancel</button>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <div @click="editing = true; tempName = name; tempTagline = tagline"
            class="relative flex items-center px-4 cursor-pointer hover:bg-gray-100 h-10 rounded-full border border-gray-200 text-sm font-medium text-gray-600 gap-3">
            <div class="relative">Edit</div>
            <div class="relative">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                    </path>
                </svg>
            </div>
        </div>
    </div>
</div>
