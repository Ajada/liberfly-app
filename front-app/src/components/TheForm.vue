<template>
  <div class="flex justify-center items-center m-10">
    <form class="w-full max-w-lg">
      <InputTextVue
        v-model="form.employee"
        :label="'Colaborador'"
        :placeholder="'Digite o nome do funcionario '"
      />

      <InputTextVue
        v-model="form.client"
        :label="'Nome do Cliente'"
        :placeholder="'Digite o nome do cliente'"
      />

      <InputTextVue
        v-model="form.subject"
        :label="'Assunto'"
        :placeholder="'Digite o assunto relacionado'"
      />

      <TextAreaVue
        v-model="form.report"
        :label="'Relato do Cliente'"
        :placeholder="'Digite o relato do cliente'"
      />

      <div class="flex justify-center">
        <BaseButtonVue
          @click="newCalled"
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
  methods: {
    newCalled () {
      api.post('v1/calleds', this.form)
        .then(res => {
          alert(res.data)
        })
        .catch(err => {
          return console.log(err)
        })
    }
  }
}
</script>
