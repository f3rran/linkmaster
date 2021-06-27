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
  <DataTable :value="boards">
    <Column field="title" header="Título"></Column>
    <Column field="id" header="">
      <template #body="slotProps" >
        <div class="d-flex flex-row justify-content-end">
          <Button icon="pi pi-pencil" class="p-button-rounded p-button-success p-mr-2 mr-2"/>
          <Button icon="pi pi-trash" class="p-button-rounded p-button-danger mr-2"/>
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
            boards: null
        }
  },
  mounted() {
    const that = this;
    axios.get('/api/boards/index').then(function(response){
      console.log(response);
      that.boards = response.data;
    })
    .catch(function (error) {
      console.log(error);
    })
  }
}
</script>

<style>

</style>