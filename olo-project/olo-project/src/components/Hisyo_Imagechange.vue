<template>
    <div id="app">
        <myheader></myheader>
        <br>
        <center><img  class="img" src="./assets/job_hisyo.png" width="100" /></center>
        <center><img :src="data.image"></center>

        <input type="file" ref="file" @change="setImage"/>
        <button @click="save()">変更を保存する</button>
    </div>
</template>

<script>
    export default {
        name: "Hisyo_Imagechange"
    }
</script>

<style scoped>

</style>