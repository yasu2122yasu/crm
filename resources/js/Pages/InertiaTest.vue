<script setup>
  import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
  Inertiaリンクはこちら <br>
  <a href="/">aタグでWelcomeに移動</a><br>
  <Link href="/">LinkでWelcomeに移動</Link><br>
  <!-- web.phpの->nameで指定していたものをつける -->
  <Link :href="route('inertia.index')">名前つきルートの確認です</Link>
</template>