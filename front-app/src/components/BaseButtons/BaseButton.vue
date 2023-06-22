<template>
  <button>
    {{ label }}
  </button>
</template>

<script>
export default {
  props: {
    label: String
  }
}
</script>

<style scoped>
button {
  width: 80px;
  height: 40px;
  border: 3px solid #315cfd;
  border-radius: 45px;
  transition: all 0.3s;
  cursor: pointer;
  background: white;
  font-size: 1em;
  font-weight: 550;
  font-family: 'Montserrat', sans-serif;
}

button:hover {
  background: #315cfd;
  color: white;
  font-size: 1.1em;
}

</style>
