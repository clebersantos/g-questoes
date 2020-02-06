<template>
  <div>
    {{ ip }}
  </div>
</template>

<script>

export default {
  async asyncData ({ $axios }) {
    const ip = await $axios.$get('http://localhost:81/api/assuntos').data;
    return { ip };
  }
}
</script>
