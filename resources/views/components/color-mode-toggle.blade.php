<label class="inline-flex items-center cursor-pointer me-3" x-data="{
    darkMode: localStorage.getItem('theme') === 'dark' ||
        (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)
}" x-init="document.documentElement.classList.toggle('dark', darkMode);
$watch('darkMode', value => {
    localStorage.setItem('theme', value ? 'dark' : 'light');
    document.documentElement.classList.toggle('dark', value);
});" x-bind:title="darkMode ? 'Switch to light mode' : 'Switch to dark mode'" x-cloak>
    <input type="checkbox" class="sr-only peer" x-model="darkMode" />
    <div class="relative w-14 h-8 bg-secondary-800 hover:bg-secondary-900 rounded-full peer dark:bg-primary-600 hover:dark:bg-primary-600 peer-checked:after:translate-x-full peer-checked:after:border-white after:absolute after:top-1 after:start-[4px] after:bg-white after:border after:rounded-full after:w-6 after:h-6 after:transition-all peer-checked:bg-primary-500 hover:transition-colors hover:duration-500">
        <div class="absolute top-1/2 -translate-y-1/2 left-0 flex items-center justify-between w-fit px-1 gap-0.5 text-white">
            <span class="material-symbols-outlined">light_mode</span>
            <span class="material-symbols-outlined">dark_mode</span>
        </div>
    </div>
</label>
