import { createRouter, createWebHistory } from 'vue-router'
import CadastroEletro from '../views/CadastroEletro.vue'
const routes = [
  {
    path: '/cadastro',
    name: 'CadastroEletro',
    component: CadastroEletro
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})



export default router