import axios from 'axios'

export const api = axios.create({
  baseURL: process.env.VUE_APP_API_URI,
  // timeout: 1000,
  headers: {
    Authorization: 'Bearer ' + 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2ODc0MjgwMzksImV4cCI6MTY4NzQzMTYzOSwibmJmIjoxNjg3NDI4MDM5LCJqdGkiOiJQenRobHZXelVDU0Q2aGU3Iiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.EuOrL6lJNbSatpVYQqUkLaUmAho6fIYJ0OaZ-sjz0Vk'
  }
})
