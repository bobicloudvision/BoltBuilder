<div class="p-8 space-y-8">
    <h1 class="text-3xl font-bold mb-6">Tailwind CSS Buttons</h1>

    <!-- Primary Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Primary Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                Primary Button
            </button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                Rounded Medium
            </button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                Rounded Full
            </button>
        </div>
    </section>

    <!-- Secondary Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Secondary Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors">
                Secondary Button
            </button>
            <button class="px-4 py-2 bg-slate-600 text-white rounded-lg hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-500 transition-colors">
                Slate Button
            </button>
        </div>
    </section>

    <!-- Outline Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Outline Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="px-4 py-2 border-2 border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                Outline Blue
            </button>
            <button class="px-4 py-2 border-2 border-gray-600 text-gray-600 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-colors">
                Outline Gray
            </button>
            <button class="px-4 py-2 border-2 border-green-600 text-green-600 rounded-lg hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-500 transition-colors">
                Outline Green
            </button>
        </div>
    </section>

    <!-- Ghost Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Ghost Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="px-4 py-2 text-blue-600 rounded-lg hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                Ghost Blue
            </button>
            <button class="px-4 py-2 text-gray-600 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-colors">
                Ghost Gray
            </button>
            <button class="px-4 py-2 text-purple-600 rounded-lg hover:bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-colors">
                Ghost Purple
            </button>
        </div>
    </section>

    <!-- Colored Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Colored Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition-colors">
                Success
            </button>
            <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition-colors">
                Danger
            </button>
            <button class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 transition-colors">
                Warning
            </button>
            <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-colors">
                Info
            </button>
        </div>
    </section>

    <!-- Button Sizes -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Button Sizes</h2>
        <div class="flex flex-wrap items-center gap-4">
            <button class="px-2 py-1 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                Small
            </button>
            <button class="px-4 py-2 text-base bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                Medium
            </button>
            <button class="px-6 py-3 text-lg bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                Large
            </button>
            <button class="px-8 py-4 text-xl bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                Extra Large
            </button>
        </div>
    </section>

    <!-- Buttons with Icons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Buttons with Icons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add Item
            </button>
            <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition-colors flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
                Delete
            </button>
            <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition-colors flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Save
            </button>
        </div>
    </section>

    <!-- Disabled Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Disabled Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button disabled class="px-4 py-2 bg-gray-400 text-white rounded-lg cursor-not-allowed opacity-50">
                Disabled Primary
            </button>
            <button disabled class="px-4 py-2 border-2 border-gray-400 text-gray-400 rounded-lg cursor-not-allowed opacity-50">
                Disabled Outline
            </button>
        </div>
    </section>

    <!-- Button Groups -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Button Groups</h2>
        <div class="inline-flex rounded-lg shadow-sm" role="group">
            <button class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                Left
            </button>
            <button class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-r border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                Middle
            </button>
            <button class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                Right
            </button>
        </div>
    </section>

    <!-- Gradient Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Gradient Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-lg hover:from-blue-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-all">
                Gradient Blue-Purple
            </button>
            <button class="px-4 py-2 bg-gradient-to-r from-pink-500 to-red-600 text-white rounded-lg hover:from-pink-600 hover:to-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all">
                Gradient Pink-Red
            </button>
            <button class="px-4 py-2 bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-lg hover:from-green-500 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                Gradient Green-Blue
            </button>
        </div>
    </section>

    <!-- Shadow Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Shadow Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                Shadow
            </button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:shadow-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                Shadow Medium
            </button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-lg hover:shadow-2xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                Shadow Large
            </button>
        </div>
    </section>

    <!-- Loading Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Loading Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button disabled class="px-4 py-2 bg-blue-600 text-white rounded-lg opacity-75 cursor-not-allowed flex items-center gap-2">
                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Loading...
            </button>
        </div>
    </section>
</div>

