<template>
<div class="container">
  <Card>
	  <template #title>
        Visitas
    </template>
    <template #content>
        32
    </template>
  </Card>
  <DataTable v-if="showBoards" :value="boards">
    <template #header>
        <div class="table-header">
            <div class="d-flex justify-content-between">
              <h2 class="col-2">Tableros</h2>
              <router-link class="col-2" :to="{ name: 'Create LinkBoard'}"><Button class="col-12" label="Crear" /></router-link>
            </div>
        </div>
    </template>
    <Column field="title" header="Título"></Column>
    <Column field="id" header="">
      <template #body="slotProps" >
        <div class="d-flex flex-row justify-content-end">
          <router-link :to="{ name: 'Edit LinkBoard', params: { id: slotProps.data.id}}"><Button icon="pi pi-pencil" class="p-button-rounded p-button-info p-mr-2 mr-2"/></router-link>
          <Button @click="deleteBoard(slotProps.data.id)" icon="pi pi-trash" class="p-button-rounded p-button-danger mr-2"/>
        </div>
      </template>
    </Column>
  </DataTable>
</div>
</template>

<script>
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Card from 'primevue/card';
import Button from 'primevue/button';


import axios from 'axios'
export default {
  components: {
    DataTable,
    Column,
    Card,
    Button
  },
  data() {
        return {
            boards: null,
            showBoards: false,
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
      })
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