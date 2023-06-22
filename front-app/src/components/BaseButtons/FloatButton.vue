<template>
  <router-link :to="{ name: link }">
    <button class="floating-button" title="Adicionar Aparelho">
      <i :class="!icon ? 'fas fa-plus' : icon"></i>
    </button>
  </router-link>
</template>

<script>
export default {
  name: 'BaseButtonCreateFloat',
  props: {
    icon: String,
    link: { type: String, nullable: false }
  }
}
</script>

<style lang="scss">
.floating-button {
  position: fixed;
  bottom: 30px;
  right: 30px;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background-color: rgb(29, 78, 216);
  border: none;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  transition: 0.3s;
  i {
    color: #fff;
    font-size: 30px;
  }

  &:hover {
    background-color: rgb(61, 113, 255);
  }

  &:focus {
    box-shadow: 0px 0px 0px 2px rgba(0, 123, 255, 0.5);
    outline: none;
  }
}
</style>
