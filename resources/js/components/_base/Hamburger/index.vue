<template>
  <button
    type="button"
    class="hamburger hamburger--arrowturn-r"
    :class="{ 'is-active': modelValue }"
    @click="$emit('update:modelValue', !modelValue)"
  >
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
</template>
<script>
export default {
  emits: ["update:modelValue"],
  props: {
    modelValue: {
      type: Boolean,
      required: false
    }
  }
};
</script>
