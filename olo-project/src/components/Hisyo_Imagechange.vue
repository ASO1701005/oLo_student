<template>
    <div id="app">
        <myheader></myheader>
        <br>
        <!--<center><img  class="img" src="./assets/job_hisyo.png" width="100" /></center>-->
        <center><img :src="data.image"></center>

        <input type="file" ref="file" @change="setImage"/>
        <button @click="save()">変更を保存する</button>
    </div>
</template>

<script>
    import myheader from './components/myheader'
    export default {
        name: {
            Hisyo_Imagechange
        },
        data() {
            return {
                data: {
                    image: "",
                    name: "",
                }
            };
        },
        methods: {
            setImage() {
                const files = this.$refs.file;
                const fileImg = files.files[0];
                if (fileImg.type.startsWith("image/")) {
                    this.data.image = window.URL.createObjectURL(fileImg);
                    this.data.name = fileImg.name;
                    this.data.type = fileImg.type;
                }
            },

        }
    };
</script>

<style scoped>

</style>