<script setup>
import {ref} from 'vue'

const props = defineProps(['msg']);

const count = ref(0);
</script>

<template>
  <h1 class="test">{{ msg }}</h1>
  <button type="button" @click="count++">count is {{ count }}</button>
</template>
