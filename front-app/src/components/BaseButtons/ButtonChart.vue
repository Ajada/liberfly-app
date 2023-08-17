<template>
  <div class="mt-4 sm:ml-1 sm:mt-0 sm:flex-none">
    <button @click.prevent="$emit('click', $emit)" type="button" class="block border rounded-md px-3 py-2 text-center text-sm font-semibold text-black shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:shadow-lg hover:-translate-y-1 hover:-translate-x-1 transition-all">
      <slot />
    </button>
  </div>
</template>
