export default {
  props: {
    label: {
      type: String,
      required: true
    },
    name: {
      type: String,
      required: true
    },
    type: {
      type: String,
      required: false
    },
    desc: {
      type: String,
      required: false
    },
    value: {
      type: String,
      required: false
    }
  },
  methods: {
    change(value, e = null) {
      this.$emit('input', value, e, this.name);
    }
  },
}
