<div class="p-8 space-y-8">
    <h1 class="text-3xl font-bold mb-6">Tailwind CSS Buttons</h1>

    <!-- Primary Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Primary Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="btn btn-primary">
                Primary Button
            </button>
            <button class="btn btn-primary-md">
                Rounded Medium
            </button>
            <button class="btn btn-primary-full">
                Rounded Full
            </button>
        </div>
    </section>

    <!-- Secondary Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Secondary Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="btn btn-secondary">
                Secondary Button
            </button>
            <button class="btn btn-slate">
                Slate Button
            </button>
        </div>
    </section>

    <!-- Outline Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Outline Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="btn btn-outline-blue">
                Outline Blue
            </button>
            <button class="btn btn-outline-gray">
                Outline Gray
            </button>
            <button class="btn btn-outline-green">
                Outline Green
            </button>
        </div>
    </section>

    <!-- Ghost Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Ghost Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="btn btn-ghost-blue">
                Ghost Blue
            </button>
            <button class="btn btn-ghost-gray">
                Ghost Gray
            </button>
            <button class="btn btn-ghost-purple">
                Ghost Purple
            </button>
        </div>
    </section>

    <!-- Colored Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Colored Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="btn btn-success">
                Success
            </button>
            <button class="btn btn-danger">
                Danger
            </button>
            <button class="btn btn-warning">
                Warning
            </button>
            <button class="btn btn-info">
                Info
            </button>
        </div>
    </section>

    <!-- Button Sizes -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Button Sizes</h2>
        <div class="flex flex-wrap items-center gap-4">
            <button class="btn btn-primary btn-sm">
                Small
            </button>
            <button class="btn btn-primary btn-md">
                Medium
            </button>
            <button class="btn btn-primary btn-lg">
                Large
            </button>
            <button class="btn btn-primary btn-xl">
                Extra Large
            </button>
        </div>
    </section>

    <!-- Buttons with Icons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Buttons with Icons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="btn btn-primary btn-icon">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add Item
            </button>
            <button class="btn btn-danger btn-icon">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
                Delete
            </button>
            <button class="btn btn-success btn-icon">
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
            <button disabled class="btn btn-disabled">
                Disabled Primary
            </button>
            <button disabled class="btn btn-disabled-outline">
                Disabled Outline
            </button>
        </div>
    </section>

    <!-- Button Groups -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Button Groups</h2>
        <div class="inline-flex rounded-lg shadow-sm" role="group">
            <button class="btn-group-left">
                Left
            </button>
            <button class="btn-group-middle">
                Middle
            </button>
            <button class="btn-group-right">
                Right
            </button>
        </div>
    </section>

    <!-- Gradient Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Gradient Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="btn btn-gradient-blue-purple">
                Gradient Blue-Purple
            </button>
            <button class="btn btn-gradient-pink-red">
                Gradient Pink-Red
            </button>
            <button class="btn btn-gradient-green-blue">
                Gradient Green-Blue
            </button>
        </div>
    </section>

    <!-- Shadow Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Shadow Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button class="btn btn-primary btn-shadow">
                Shadow
            </button>
            <button class="btn btn-primary btn-shadow-md">
                Shadow Medium
            </button>
            <button class="btn btn-primary btn-shadow-lg">
                Shadow Large
            </button>
        </div>
    </section>

    <!-- Loading Buttons -->
    <section class="space-y-4">
        <h2 class="text-2xl font-semibold">Loading Buttons</h2>
        <div class="flex flex-wrap gap-4">
            <button disabled class="btn btn-primary btn-loading">
                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Loading...
            </button>
        </div>
    </section>
</div>

