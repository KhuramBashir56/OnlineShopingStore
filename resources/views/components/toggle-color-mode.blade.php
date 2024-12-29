<label class="inline-flex items-center cursor-pointer" x-data="{
    darkMode: localStorage.getItem('theme') === 'dark' ||
        (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)
}" x-cloak x-init="document.body.classList.toggle('dark', darkMode);
$watch('darkMode', value => {
    localStorage.setItem('theme', value ? 'dark' : 'light');
    document.body.classList.toggle('dark', value);
});" x-bind:title="darkMode ? 'Switch to light mode' : 'Switch to dark mode'">
    <input type="checkbox" value="" class="sr-only peer" x-model="darkMode">
    <div class="relative w-11 h-6 bg-gray-800 rounded-full peer dark:bg-orange-500 peer-focus:ring-4 peer-focus:ring-orange-300 dark:peer-focus:ring-orange-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-orange-500">
        <div class="absolute top-1/2 -translate-y-1/2 left-0 flex items-center justify-between w-full px-1 text-white">
            <span class="material-symbols-outlined text-sm">dark_mode</span>
            <span class="material-symbols-outlined text-sm">light_mode</span>
        </div>
    </div>
</label>
