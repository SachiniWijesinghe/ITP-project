<template>
  <div id = "app">

    <Header></Header>
    <List></List>


  </div>
</template>

<script>

import list from './parts/list.vue'
import List from "./parts/list";

import header from './parts/header.vue';
import Header from "./parts/header";


export default {
  components: {Header, List},

    'List':list,
    'Header':header,

}



</script>
