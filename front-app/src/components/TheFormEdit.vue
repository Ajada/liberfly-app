<template>
  <div class="flex justify-center items-center m-10">
    <form class="w-full max-w-lg">
      {{ form.employee }}
      <InputTextVue
        v-model="form.employee"
        :label="'Colaborador'"
        :placeholder="'Digite o nome do funcionario '"
      />

      {{ form.client }}
      <InputTextVue
        v-model="form.client"
        :label="'Nome do Cliente'"
        :placeholder="'Digite o nome do cliente'"
      />

      {{ form.subject }}
      <InputTextVue
        v-model="form.subject"
        :label="'Assunto'"
        :placeholder="'Digite o assunto relacionado'"
      />

      {{ form.report }}
      <TextAreaVue
        v-model="form.report"
        :label="'Relato do Cliente'"
        :placeholder="'Digite o relato do cliente'"
      />

      <div class="flex justify-center">
        <BaseButtonVue
          @click="editCalled()"
          :label="'Salvar'"
        />
      </div>
    </form>
  </div>
</template>

<script>
import { api } from '@/utils/axios'
import InputTextVue from './BaseInputs/InputText.vue'
import TextAreaVue from './BaseInputs/TextArea.vue'
import BaseButtonVue from './BaseButtons/BaseButton.vue'

export default {
  components: {
    InputTextVue,
    TextAreaVue,
    BaseButtonVue
  },
  data () {
    return {
      form: {
        employee: '',
        client: '',
        subject: '',
        report: ''
      }
    }
  },
  created () {
    api.get(`v1/calleds/${this.$route.query.id}`)
      .then(res => {
        return (this.form = res.data)
      })
      .catch(err => {
        console.log(err)
      })
  },
  methods: {
    editCalled () {
      api.put(`v1/calleds/${this.$route.query.id}`, this.form)
        .then(res => {
          alert(res.data.success)
        })
        .catch(err => {
          return console.log(err)
        })
    }
  }
}
</script>
