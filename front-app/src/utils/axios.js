import axios from 'axios'

export const api = axios.create({
  baseURL: process.env.VUE_APP_API_URI,
  // timeout: 1000,
  headers: {
    Authorization: 'Bearer ' + localStorage.getItem('__access')
  }
})
