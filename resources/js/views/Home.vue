<template>
<div class="container">
  <div class="row mb-4">
    <Card class="col-4 mr-2 ml-2">
      <template #title>
          Visitas
      </template>
      <template #content>
          32
      </template>
    </Card>
    <Card class="col-4 ml-2 mr-2">
      <template #title>
          Clicks
      </template>
      <template #content>
          16
      </template>
    </Card>
    <Card class="col-3 ml-2 mr-2">
      <template #title>
          Link público
      </template>
      <template #content>
          <Button label="Ir al tablero" class="p-button-rounded p-button-info mr-2"/>
      </template>
    </Card>
  </div>
  <DataTable v-if="showBoards" :value="boards">
    <template #header>
        <div class="table-header">
            <div class="d-flex justify-content-between">
              <h2 class="col-2">Tableros</h2>
              <router-link class="col-2" :to="{ name: 'Create LinkBoard'}"><Button class="col-12" label="Crear" /></router-link>
            </div>
        </div>
    </template>
    <Column field="title" header=""></Column>
    <Column field="id" header="">
      <template #body="slotProps" >
        <div class="d-flex flex-row justify-content-end">
          <router-link :to="{ name: 'Edit LinkBoard', params: { id: slotProps.data.id}}"><Button icon="pi pi-pencil" class="p-button-rounded p-button-info p-mr-2 mr-2"/></router-link>
          <Button @click="display = true; deleteFocus = slotProps.data.id" icon="pi pi-trash" class="p-button-rounded p-button-danger mr-2"/>
        </div>
      </template>
    </Column>
  </DataTable>
  <Dialog header="Header" :visible.sync="display" >
    <template #header>
		  <h3>Borrar tablero</h3>
	  </template>
	  ¿Está seguro que desea eliminar el tablero?

    <template #footer>
		    <Button label="Cancelar"  @click="display = false" icon="pi pi-times" class="p-button-text"/>
        <Button label="Confirmar" @click="deleteBoard(deleteFocus)" icon="pi pi-check" autofocus />
	  </template>
  </Dialog>

</div>
</template>

<script>
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Card from 'primevue/card';
import Button from 'primevue/button';
import Dialog from 'primevue/dialog';


import axios from 'axios'
export default {
  components: {
    DataTable,
    Column,
    Card,
    Button,
    Dialog
  },
  data() {
        return {
            boards: null,
            showBoards: false,
            display: false,
            deleteFocus: 0,
        }
  },
  mounted() {
    this.initDatatable();
  },
  methods: {
    deleteBoard(id){
      const that = this;
      axios.delete('/api/boards/delete', {
        data: {
          id
        }
      })
      .then(function(response){
        console.log(response);
        that.initDatatable();
      });

      this.display = false;
      this.deleteFocus = 0;
    },
    initDatatable(){
      const that = this;
      that.showBoards = false;
      axios.get('/api/boards/index').then(function(response){
        console.log(response);
        that.boards = response.data;
        that.showBoards = true;
      })
      .catch(function (error) {
        console.log(error);
      })
    }
  }
}
</script>

<style>

</style>