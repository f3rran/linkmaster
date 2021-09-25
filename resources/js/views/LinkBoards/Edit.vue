<template>
  <div class="container">
      <h1 v-if="id">Editando tablero: {{id}}</h1>
      <h1 v-else>Creando Linkboard</h1>
      <hr>
      <div class="row">
          <div class="col-8 text-center">
              <Button label="Añadir enlace" class="col-10 mb-4" />
              <div class="mb-2 custom-card" v-for="{link, id, title} in board" :key="link.id">
                  <div class="d-flex flex-row ml-2">
                        <h4 class="mt-2">{{title}}</h4>
                  </div>
                  <div class="d-flex flex-row">
                        <a :href="link" target="_blank"><h6 class="ml-2">{{link}}</h6></a>
                  </div>
                  <div class="d-flex flex-row justify-content-around">
                        <Button icon="pi pi-check" class="p-button-rounded p-button-text" />
                        <Button icon="pi pi-cog" class="p-button-rounded p-button-text" /> 
                        <Button icon="pi pi-pencil" class="p-button-rounded p-button-text" /> 
                        <Button icon="pi pi-trash" class="p-button-rounded p-button-text" @click="deleteLink(id)"/> 
                  </div>
              </div>

          </div>

          <div class="col-4">
              <img src="/images/assets/phone-marc.png" alt="" class="w-100">
          </div>
      </div>
  </div>
</template>

<script>
import Button from 'primevue/button';

import axios from 'axios';

export default {
    props: {
        id: Number,
        default: 0
    },
    components: {
        Button
    },
    data() {
        return {
            board: [],
        }
    },
    mounted() {
        this.initView();
    },
    methods: {
        initView(){
            const that = this;
            console.log("ID: "+this.id);
            //En caso de que haya ID se trata de una edición
            //Hace falta el esquema
            if (this.id) {
                axios.get('/api/boards/show', {
                    params: {
                        id: this.id
                    }
                })
                .then(function(response){
                    console.log(response);
                    that.board = JSON.parse(response.data.content);
                })
                .catch(function (error) {
                    console.log(error);
                })
            }
        },
        deleteLink(id){
            console.log(id);

            //Modal de confirmación

            //Borrar del esquema y actualizar en BD
        }
    }
}
</script>

<style scoped lang="scss">
    .custom-card{
        background-color: white;
        border: 0px;
        border-radius: 3px;
        box-shadow: 3px 3px 1px grey;
    }
</style>